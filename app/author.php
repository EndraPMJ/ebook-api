<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    public $table = "author";
    protected $fillable = ['name','date_of_birth','place_of_birth','gender','email','hp'];
}
