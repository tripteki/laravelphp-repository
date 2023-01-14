<?php

namespace Tripteki\Repository;

abstract class AbstractRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $user;

    /**
     * @param \Illuminate\Database\Eloquent\Model $user
     * @return void
     */
    public function setUser(\Illuminate\Database\Eloquent\Model $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getUser()
    {
        return $this->user;
    }
};
