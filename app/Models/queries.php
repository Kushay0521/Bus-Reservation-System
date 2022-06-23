<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class queries extends Model
{
    use HasFactory;
    public $table='query';
    public $timestamps=false;
}
