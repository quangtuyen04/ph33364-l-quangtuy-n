<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
         $topPosts = DB::table('tin')
             ->orderBy('luotxem', 'desc') // Giả sử bạn có trường 'views' trong bảng tin
             ->limit(5)
             ->get();

         return view('clients.index', ['topPosts' => $topPosts]);
     }

    public function contact()
    {


    }
}
