<?php

namespace App\Http\Controllers;

use App\services\ContactService;

class ContactController extends Controller
{

    public function __construct(private ContactService $contactService){}

    public function index(){
        return view('index',['contacts' => $this->contactService->getAll()]);
    }
}
