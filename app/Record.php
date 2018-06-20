<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Record extends Model
{

    protected $guarded = [ 'id' ];

    protected $dates = [ 'created_at', 'updated_at', 'renewDate', 'joinDate' ]; // Mark those as Date Fields so carbon can use them

}
