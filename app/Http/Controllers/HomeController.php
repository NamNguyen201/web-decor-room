<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Http\Requests\NameRequest;
use \Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function viewhome()
    {
        return view('frontend.home');
    }

    /**
     * @param NameRequest $request
     * @return RedirectResponse
     */
    public function updataform(NameRequest $request){
      //....
    $user  = Contact::create([
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'email' => $request->input('email'),
    ]);
       return redirect()->route('home');
    }

}
