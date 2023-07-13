<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory; удаляем согласно книги
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    // use HasFactory; удаляем согласно книги
    protected $fillable = [
        'title',
        'content',
        'price',
    ];
}
