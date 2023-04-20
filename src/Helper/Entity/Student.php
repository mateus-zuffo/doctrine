<?php

namespace Alura\Doctrine\Entity;

class Student{
    public function __construct(        
        public readonly int $id,
        private string $nome,
    ){

    }
}