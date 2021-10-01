<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\StudentBook
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property int $grade_id
 * @property int $subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Grade $grade
 * @property-read \App\Models\Subject $subject
 * @method static \Database\Factories\StudentBookFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook newQuery()
 * @method static \Illuminate\Database\Query\Builder|StudentBook onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|StudentBook withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StudentBook withoutTrashed()
 * @mixin \Eloquent
 */
class StudentBook extends Model
{
    use HasFactory, SoftDeletes;
    use Filterable;
    protected $guarded = [];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grad_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

}
