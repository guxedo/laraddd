<?php

namespace App\Domain;

interface UserRepository
{
    public function findById(int $id): ?User;
}
