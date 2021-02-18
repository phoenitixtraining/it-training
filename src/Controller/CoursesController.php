<?php

namespace App\Controller;

//use App\DataFixtures\Course;
use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursesController extends AbstractController
{
    /**
     * @Route("/courses", name="courses")
     */
    public function index(): Response
    {
        $coursesRepo = $this -> getDoctrine() -> getRepository(Course::class);
        $courses = $coursesRepo -> findAll();

        return $this->render('courses/courses.html.twig', [
            'controller_name' => 'CoursesController',
            'courses' => $courses
        ]);
    }
}
