<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','name','catogerie_id','space','phone'
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function catogeries(){
        return $this->belongsTo(Catogery::class,'catogerie_id');
    }
}
