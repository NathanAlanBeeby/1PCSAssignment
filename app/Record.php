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
    protected $fillable = [
        'First Name','Last Name', 'Company', 'Profession','Chapter Name', 'Phone Number', 'Alt Phone','Fax Number', 'Cell Number',
        'Email','Website', 'Address', 'City','State', 'ZIP', 'Substitute','Status'
    ];

}
