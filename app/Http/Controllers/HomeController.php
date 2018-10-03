<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     *
     */

    protected $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $oraders = Order::where('id',1)->first();
//dump($oraders->disablewaternet);
      return view('home.home',[
          'order' => $oraders
      ]);
    }

    public function tech()
    {
        return view('home.tech');
    }

    public function metod()
    {
        return view('home.metod');
    }

    public function onemetod()
    {
        return view('home.onemetod');
    }
}
