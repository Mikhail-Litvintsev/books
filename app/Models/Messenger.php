<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Messenger
 *
 * @property int $id
 * @property string $title
 * @property int $phone1
 * @property int|null $phone2
 * @property int|null $phone3
 * @property string|null $message_order
 * @property string|null $message_question
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger query()
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger whereMessageOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger whereMessageQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger wherePhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger wherePhone3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Messenger whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Messenger extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getPhoneView($title)
    {
        $phone = self::where('title', $title)->first()->phone;

        return substr($phone, 0, 1)."-".substr($phone, 1, 3)."-".substr($phone,4, 3)."-".substr($phone,7);
    }
}
