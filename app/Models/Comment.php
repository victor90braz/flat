<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $flat_id
 * @property string $text
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Flat $flat
 * @property User $user
 */
class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
