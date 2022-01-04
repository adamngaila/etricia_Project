<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
     protected $fillable = [
        'PackCode','AmountPaid','PaymentRef','paymentDescrpition'
    ];
}
