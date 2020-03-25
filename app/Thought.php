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
     * Пользователь
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
