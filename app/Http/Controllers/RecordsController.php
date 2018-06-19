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

    public function import(Request $request){
        if($request->hasFile('InputFile')){

            $path = $request->file('InputFile')->getRealPath();

            $data = \Excel::load($path)->get();


            if($data->count()){

                foreach ($data as $key => $record) { //getting each value for the array

                    $arr[] = ['First Name' => $record->firstName, 'Last Name' => $record->lastName, 'Company' => $record->company, 'Profession' => $record->profession,
                        'Chapter Name' => $record->chapterName, 'Phone Number' => $record->phoneNumber, 'Alt Phone' => $record->altPhone, 'Fax Number' => $record->faxNumber,
                        'Cell Number' => $record->cellNumber, 'Email' => $record->email, 'Website' => $record->website, 'Address' => $record->address,
                        'City' => $record->city, 'State' => $record->state, 'ZIP' => $record->zipCode, 'Substitute' => $record->substitute,
                        'Status' => $record->status, 'join Date' => $record->joinDate, 'Renew Date' => $record->renewDate, 'Sponsor' => $record->sponsor];

                }

                if(!empty($arr)){

                    DB::table('records')->insert($arr);

                    dd('Insert Recorded successfully.');

                }

            }

        }

      //  dd('Request data does not have any files to import.');
    }

}
