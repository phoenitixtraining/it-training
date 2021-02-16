<?php

namespace App\DataFixtures;

use App\Entity\Course as EntityCourse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Course extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $course = new EntityCourse();
            $course -> setTitle('Course num'.$i);
            $course-> setContent('<p>Le Lorem Ipsum est simplement du faux texte employé dans 
            la composition Le LoremLe Lorem Ipsum est simplement du faux texte employé dans la compositi on et la mise en page avant impression.
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en
            page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. .</p>');
            $course  -> setCreateAt(new \DateTime())  ;
            $course    -> setUpdateAt(new \DateTime());  
            $course -> setSlug('toto');

        $manager->persist($course);
        }

        $manager->flush();
    }
}
