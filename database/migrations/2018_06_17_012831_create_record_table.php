<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('firstname'); // string - only text
            $table->string('lastName'); //string - only text
            $table->string('company'); //string - text and numbers
            $table->string('profession'); // string - Only text
            $table->string('chapterName'); //string  - text and numbers
            $table->string('phoneNumber'); // integer - numbers
            $table->string('altPhone'); //integer - numbers
            $table->string('faxNumber'); //integer - numbers
            $table->string('cellNumber'); //string - numbers
            $table->string('email'); // string - email field
            $table->string('website'); //string and numbers
            $table->string('address'); // string and numbers
            $table->string('city'); //string
            $table->string('state'); //string
            $table->string('zipCode'); //string and numbers
            $table->string('substitute'); // string and numbers
            $table->boolean('status'); //bool true or false
            $table->dateTime('joinDate'); //date field
            $table->dateTime('renewDate'); //date field
            $table->string('sponsor'); //string - text - name
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
