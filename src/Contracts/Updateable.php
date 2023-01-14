<?php

namespace Tripteki\Repository\Contracts;

interface Updateable
{
    /**
     * @param int|string $identifier
     * @param array $data
     * @return mixed
     */
    public function update($identifier, $data);
};
