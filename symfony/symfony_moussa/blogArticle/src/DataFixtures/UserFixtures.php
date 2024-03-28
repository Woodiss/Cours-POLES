<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class UserFixtures extends Fixture
{

    public const ADMIN_USER_REFERENCE = 'admin-user';

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create("fr_FR");
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setEmail($faker->freeEmail);
            $user->setPhoneNumber($faker->phoneNumber);

            $password = $this->hasher->hashPassword($user, 'aaaaaaaa');
            // $user->setPassword("aaaaaaaa");
            $user->setPassword($password);

            $manager->persist($user);
        }

        $manager->flush();
        $this->addReference(self::ADMIN_USER_REFERENCE, $user);
    }
}
