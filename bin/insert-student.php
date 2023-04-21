<?php

use Alura\Doctrine\Helper\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__. '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Mateus Zuffo');
$entityManager->persist($student);
$entityManager->flush();