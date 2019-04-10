<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcelse extends Model
{
    protected $table = "parcelses";
    public $primaryKey = "id";
    public  $timestamps = true;
}
