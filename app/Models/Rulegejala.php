<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rulegejala extends Model
{
    use HasFactory;

    protected $table = 'rule_gejala';

    public $timestamps = false;

    protected $fillable = [
        'rule_id',
        'gejala_kode'
    ];

    public function rule()
    {
        return $this->belongs(Rule::class);
    }
}
