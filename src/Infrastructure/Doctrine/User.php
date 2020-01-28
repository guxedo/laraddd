<?php
namespace Laraddd\Infrastructure\Doctrine;

use Doctrine\ORM\EntityManagerInterface;

 
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Util\Inflector;
use Laraddd\Domain\UserRepository;

class User extends EntityRepository implements UserRepository
{
    public function findById(int $id): ?UserEntity
    {
        $user = $this->find($id);

        return is_null($user) ? null : $user->toEntity();
    }
}
