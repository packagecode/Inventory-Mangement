<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParceleseInvoice extends Model
{
    protected $table = "parcelese_invoices";
    public $primaryKey = "id";
    public  $timestamps = true;
}
