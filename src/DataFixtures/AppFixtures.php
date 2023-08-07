<?php

namespace App\DataFixtures;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create($fakerlocale = 'fr_FR')
        // Categories
        // Auteurs
        // Articles
        // $manager->persist($product);

        $manager->flush();
    }
}
