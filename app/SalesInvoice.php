<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    protected $table = "sales_invoices";
    public $primaryKey = "id";
    public  $timestamps = true;
}
