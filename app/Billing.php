<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
     protected $fillable = ['PackCode','Consumption','ConsumtionCost','CostRef'];
}
