<?php

namespace App\Domain;

class User
{
    protected $id;
    protected $userName;

    public function __construct(int $id, string $userName)
    {
        $this->id = $id;
        $this->userName = $userName;
    }

}
