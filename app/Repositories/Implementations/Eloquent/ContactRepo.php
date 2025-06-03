<?php

namespace App\Repositories\Implementations\Eloquent;

use App\Models\Contact;
use App\Repositories\Interfaces\ContactRepoInterface;

class ContactRepo implements ContactRepoInterface{
    
    public function all(){
        return Contact::all();
    }
}