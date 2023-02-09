<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = ['proname','procategory','provalue'];


    public function up(){
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('proname');
            $table->string('procategory');
            $table->integer('provalue');
            $table->timestamps();
        });
    }
    //
}
