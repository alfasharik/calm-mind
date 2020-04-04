<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Letter extends Model
{
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

    /**
     * Получить только открытые мысли.
     *
     * @return mixed
     */
    public function getOpen()
    {
        return $this
            ->where('is_open', 1)
            ->get();
    }

    public function getByUserId(int $userId)
    {
        return $this
            ->where('user_id', $userId)
            ->get();
    }
}
