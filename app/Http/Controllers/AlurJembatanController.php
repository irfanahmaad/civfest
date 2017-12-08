<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class AlurJembatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $repo;
      public function __construct(Repository $repository)
      {
         $this->middleware('auth');
         $this->repo = $repository;
      }

    public function index()
    {
      $parse = [
          'title' => 'Manage your alur jembatan section',
          'no' => 1
      ];

      return view('admin_pages/alurjembatan/index', ['parse' => $parse]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $parse = [
        'title' => 'Submit a new alur jembatan photo'
      ];

      return view('admin_pages/alurjembatan/create', ['parse' => $parse]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = "";
        if($request->hasFile("images")){
            $request->images->move("img/alur", "alur-jembatan.png");
        }
        $request->session()->flash('status', 'Task was successful!');
        return redirect('alur-jembatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
