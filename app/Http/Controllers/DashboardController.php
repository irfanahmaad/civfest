<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     protected $repo;
    public function __construct(Repository $repository)
    {
        $this->middleware('auth');
        $this->repo = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function news($parameter){
        $parse = [
          'title' => 'Manage your News',
          'no' => 1
        ];

        $news = DB::table('news')->get();
        return view('admin_pages/news', ['parse' => $parse, 'news' => $news]);
    }
}
