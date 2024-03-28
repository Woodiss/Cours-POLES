<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{


    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create("fr_FR");
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle($faker->realText($maxNbChars = 15));
            $article->setResume($faker->realText($maxNbChars = 200));
            $article->setContent($faker->realText($maxNbChars = 200));
            $article->setImage($faker->imageUrl($witdh = 640, $height = 480));
            $article->setCreatedAt(new \DateTimeImmutable());

            $article->setAuteur($this->getReference(UserFixtures::ADMIN_USER_REFERENCE));

            $manager->persist($article);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
