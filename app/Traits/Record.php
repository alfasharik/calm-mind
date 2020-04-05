<?php


namespace App\Traits;

/**
 * Trait Record
 * @package App\Traits
 */
Trait Record
{
    /**
     * Получить открытые записи.
     *
     * @return mixed
     */
    public function open()
    {
        return $this
            ->where('is_open', 1)
            ->get();
    }

    /**
     * Получить записи по ИД пользователя.
     *
     * @param int $userId
     *
     * @return mixed
     */
    public function byUserId(int $userId)
    {
        return $this
            ->where('user_id', $userId)
            ->get();
    }
}
