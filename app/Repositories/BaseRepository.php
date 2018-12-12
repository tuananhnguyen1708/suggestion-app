<?php

namespace App\Repositories;

/**
 * Class BaseRepository.
 */
class BaseRepository
{
    /**
     * The Model instance.
     * os - 10/01/2018
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->query()->get();
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->query()->count();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->query()->find($id);
    }

    /**
     * @return mixed
     */
    public function query()
    {
        return call_user_func(static::MODEL.'::query');
    }
}
