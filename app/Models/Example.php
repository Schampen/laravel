<?php

namespace App\Models;

class Example
{
    protected $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }
}