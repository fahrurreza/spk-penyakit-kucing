<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rule';

    public $timestamps = false;

    protected $fillable = [
        'rule',
        'nilai'
    ];

    public function rulegejala()
    {
        return $this->hasMany(Rulegejala::class);
    }

    
    public function rulepenyakit()
    {
        return $this->hasOne(Rulepenyakit::class);
    }
    
}
