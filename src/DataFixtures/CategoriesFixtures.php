<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 4; $i++){
            $cat = new Categories();
            $cat -> setName('Category num: '.$i);
            $cat -> setDescription('<p>Le Lorem Ipsum est simplement du faux texte employé dans 
            la composition Le LoremLe Lorem Ipsum est simplement du faux texte employé dans la compositi on et la mise en page avant impression.
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en
            page avant impression</p>');
            $cat -> setImg("http://placehold.it/350x150");
        
            $manager->persist($cat);

        }

        $manager->flush();
    }
}
