<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Record extends Model
{
    //
    protected $fillable=['firstName','lastName', 'company', 'profession','chapterName', 'phoneNumber', 'altPhone','faxNumber', 'cellNumber',
        'email', 'website', 'address', 'city', 'state', 'zipCode', 'substitute', 'status', 'joinDate', 'renewDate', 'sponsor'];

}
