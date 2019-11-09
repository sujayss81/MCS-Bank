<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class claim extends Model
{
    //
    protected $table = 'claim';
    protected $fillable = ['mem_no','name','aadhar','hname','dname','dcode','doa','dod','amt','bamt'];
    public $timestamps = false;
}
