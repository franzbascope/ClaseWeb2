<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Nota
 *
 * @property int $id
 * @property int $nota
 * @property string $materia
 * @property int $student_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Nota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nota query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nota whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nota whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nota whereMateria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nota whereNota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nota whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nota whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Nota extends Model
{
    use HasFactory;
}
