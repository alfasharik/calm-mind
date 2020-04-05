<?php

namespace App\Models;

use App\Traits\Record;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class thought
 * @package App
 */
class Thought extends Model
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
        'text',
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
