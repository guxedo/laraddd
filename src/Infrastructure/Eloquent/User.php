<?php

namespace Laraddd\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Model;
use Laraddd\Domain\User as UserEntity;
use Laraddd\Domain\UserRepository;

class User extends Model implements UserRepository
{

    public function toEntity(): UserEntity
    {
        return new UserEntity(
            $this->id,
            $this->user_name
        );
    }

    public function findById(int $id): ?UserEntity
    {
        $user = $this->find($id);

        return is_null($user) ? null : $user->toEntity();
    }
}
