<?php

namespace App\Http\Controllers;

use App\Record;

use Illuminate\Http\Request;

class RecordsController extends Controller
{

    public function __construct(){
    $this->middleware('auth');
    }

    public function index(){
        $records = Record::all();

        return view('Data.dataView', compact('records'));

    }

    public function show($id){ // getting the record and displaying it to screen in JSON format
        $record = Record::find($id);
        return view('Data.singleRecord', compact('record'));
    }

    public function view(){ // this is the view for the import

        return view('Data.dataImport');
    }

    public function store(Request $request){
        //get file
        $upload=$request->file('InputFile'); // getting the file from the html dataImport page

        $filePath=$upload->getRealPath(); // getting the path of the file

        //open and read
        $file=fopen($filePath, 'r'); // opening the file with read privileges

        $header= fgetcsv($file); // know that its a csv file

        // dd($header);
        $escapedHeader=[]; // array for escaped header

        //validate
        foreach ($header as $key => $value) {
            $lHeader=strtolower($value);
            $escapedItem=preg_replace('/[^a-z]/', '', $lHeader);
            array_push($escapedHeader, $escapedItem);

        }



        $count = 1; // Start @ 1 due to HEADER ROW

        //looping through other columns
        while($columns=fgetcsv($file))
        {
            $count++;
            if($columns[0]=="")
            {
                continue;
            }

            $data= array_combine($escapedHeader, $columns); // combine the array of header with the column

            // setting type
            foreach ($data as $key => &$value) { // looping through values
                $data[$key] = ($key != "status") ? (string)$value : (float)$value; // if the value any of these, replace it to integer value
            }

           // dd($data);

            try {

                $record = Record::firstOrNew([
                    'firstname' => $data['firstname'],
                    'lastName' => $data['lastname'],
                    'company' => $data['company'],
                    'profession' => $data['profession'],
                    'chapterName' => $data['chaptername'],
                    'email' => $data['email'],
                    'website' => $data['website'],
                    'address' => $data['address'],
                    'city' => $data['city'],
                    'state' => $data['state'],
                    'zipCode' => $data['zip'],
                    'substitute' => $data['substitute'],
                    'status' => $data['status'],
                    'joinDate' => \Carbon\Carbon::createFromFormat('m/d/Y', $data['joindate']),
                    'renewDate' => \Carbon\Carbon::createFromFormat('m/d/Y', $data['renewaldate']),
                    'sponsor' => $data['sponsor'],
                    'phoneNumber' => $data['phonenumber'],
                    'altPhone' => $data['altphonenumber'],
                    'faxNumber' => $data['faxnumber'],
                    'cellNumber' => $data['cellnumber']
                ]);

                $record->save();

            } catch (\Exception $e)
            {
                \Log::info('Import: Record '.$count.' skipped: ' . $e->getMessage());

            }


        }

        //return view('Data.dataImport');
    }

}
