<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
     //table name
     protected $table = 'posts';
     //primary key
     public $PrimaryKey = "id";
     //timestampss
     public $timestamps =false;
}
