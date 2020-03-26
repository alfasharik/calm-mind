<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class thought
 * @package App
 */
class Thought extends Model
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
        'text',
        'date_created_at',
        'is_open',
    ];

    /**
     * Пользователь
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
