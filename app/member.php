<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    protected $table = 'member';
    protected $fillable = ['mem_no','name','dom','address','aadhar','gender','mobile','category','occupation','bgroup','mc','age','acc_no'];
    protected $primarykey = 'mem_no';
    public $timestamps = false;
}
