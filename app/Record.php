<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Record extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable=[
        'firstName','lastName', 'company', 'profession','chapterName', 'phoneNumber', 'altPhone','faxNumber', 'cellNumber',
        'email','website', 'address', 'city','state', 'zipCode', 'substitute','joinDate', 'renewDate', 'sponsor', 'Status'
    ];



}
