<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ["nombre","codigo","fecha_registro"];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
