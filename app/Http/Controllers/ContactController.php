<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactController extends Controller
{
      public function show()
    {
        return view('contact');
    }
 
    public function mailToAdmin(ContactFormRequest $request)
    {
        
       // $admin->notify(new InboxMessage($message));
       $inp = $request->only('name','email','message');
        return $inp;
          
    }
}

