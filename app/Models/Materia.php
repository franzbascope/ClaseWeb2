<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Materia
 *
 * @property int $id
 * @property string $name
 * @property string|null $sigla
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Materia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Materia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Materia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Materia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Materia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Materia whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Materia whereSigla($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Materia whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Materia extends Model
{
    use HasFactory;

    protected $with = ['students'];

    public function students(){
       return $this->belongsToMany(Student::class);
    }
}
