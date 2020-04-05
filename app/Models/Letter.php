<?php

namespace App\Models;

use App\Traits\Record;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Letter extends Model
{
    use Record;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Cписок полей для добавления.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'user_id',

        'wrath_text',
        'sad_text',
        'fear_text',
        'regret_text',
        'love_text',

        'to_whom',

        'date_created_at',
        'is_open',
    ];

    /**
     * Пользователь
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
