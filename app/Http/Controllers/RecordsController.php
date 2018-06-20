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

        //looping through other columns
        while($columns=fgetcsv($file))
        {
            if($columns[0]=="")
            {
                continue;
            }
            //trim data
            foreach ($columns as $key => &$value) { // loop through values
               // dd($columns); // prints information after header
                $value=preg_replace('/\D/','',$value); // replace any undesirable values

            }



            $data= array_combine($escapedHeader, $columns); // combine the array of header with the columns

            // setting type
            foreach ($data as $key => &$value) { // looping through values
                $value=($key=="phoneNumber" || $key=="altPhone" || $key=="faxNumber" ||
                $key=="cellNumber")?(integer)$value: (float)$value; // if the value any of these, replace it to integer value
           // dd($data);
            }


            $firstName = $data['firstname'];
            $lastName = $data['lastname'];
            $company = $data['company'];
            $profession = $data['profession'];
            $chapterName = $data['chaptername'];
            $phoneNumber = $data['phonenumber'];
            $altPhone = $data['altphonenumber'];
            $faxNumber = $data['faxnumber'];
            $cellNumber = $data['cellnumber'];
            $email = $data['email'];
            $website = $data['website'];
            $address = $data['address'];
            $city = $data['city'];
            $state = $data['state'];
            $zipCode = $data['zip'];
            $substitute = $data['substitute'];
            $status = $data['status'];
            $joinDate = $data['joindate'];
            $renewDate = $data['renewaldate'];
            $sponsor = $data['sponsor'];

            $record = Record::firstOrNew(['phoneNumber'=>$phoneNumber,'altPhone'=>$altPhone, 'faxNumber'=>$faxNumber,'cellNumber'=>$cellNumber]);

            $record->firstName=$firstName;
            $record->lastName=$lastName;
            $record->company=$company;
            $record->profession=$profession;
            $record->chapterName=$chapterName;
            $record->company=$company;
            $record->email=$email;
            $record->website=$website;
            $record->address=$address;
            $record->city=$city;
            $record->state=$state;
            $record->zipCode=$zipCode;
            $record->substitute=$substitute;
            $record->status=$status;
            $record->joinDate=$joinDate;
            $record->renewDate=$renewDate;
            $record->sponsor=$sponsor;
            $record->save();
        }

        //return view('Data.dataImport');
    }

}
