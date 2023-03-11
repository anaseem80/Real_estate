<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropetieType extends Model
{
    use HasFactory;
    protected $table = 'proprtietype';
    protected $fillable = [
        'name'
    ];
}
