<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'field1',
        'field2',
        'field3',
    ];
}
