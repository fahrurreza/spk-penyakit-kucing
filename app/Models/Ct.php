<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ct extends Model
{
    use HasFactory;

    protected $table = 'jawaban';

    public $timestamps = false;

    protected $fillable = [
        'jawaban',
        'nilai'
    ];
}
