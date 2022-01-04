<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAccount extends Model
{
    protected $fillable = ['CustomerName','Email','PackCode','TotalConsumption','TotalCost','ToatlPayment','Balance'];
}
