<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Contact;
class ContactController extends BaseController
{
    protected $contact;
    function __construct()
    {
        $this->contact = new Contact();
    }
    public function index()
    {
        $data['contacts'] = $this->contact->findAll();
        return view('contacts/index', $data);
    }
}

