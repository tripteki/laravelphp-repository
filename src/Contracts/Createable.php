<?php

namespace Tripteki\Repository\Contracts;

interface Createable
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create($data);
};
