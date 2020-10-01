<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtriciaDirectory extends Model
{
    protected $fillable = [
        'packagecode','serial_no','capacity','cell_number','description','production_cost','selling_price','production_date'
    ];

}
