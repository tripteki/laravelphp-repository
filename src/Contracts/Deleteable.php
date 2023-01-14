<?php

namespace Tripteki\Repository\Contracts;

interface Deleteable
{
    /**
     * @param int|string $identifier
     * @return mixed
     */
    public function delete($identifier);
};
