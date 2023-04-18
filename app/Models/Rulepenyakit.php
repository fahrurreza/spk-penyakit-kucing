<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rulepenyakit extends Model
{
    use HasFactory;

    protected $table = 'rule_penyakit';

    public $timestamps = false;

    protected $fillable = [
        'rule_gejala_id',
        'penyakit_id'
    ];

    public function rulepenyakit()
    {
        return $this->hasMany(Rulepenyakit::class);
    }

    public function rule()
    {
        return $this->belongsTo(Rule::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
