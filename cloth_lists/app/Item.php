<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
