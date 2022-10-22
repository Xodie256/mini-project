<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'uname',
        'ucode',
        'uyear',
        'sem',
        'program',
        'user_id'

    ];

    public function user(){
        $this->belongsTo(User::class);
    }
    public function unit(){
        $this->hasMany(Form::class);
    }

}
