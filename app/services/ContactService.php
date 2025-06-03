<?php

namespace App\services;

use App\Repositories\Interfaces\ContactRepoInterface;

class ContactService{

    public function __construct(private ContactRepoInterface $contactRepo){}

    public function getAll(){
        return $this->contactRepo->all();
    }
}