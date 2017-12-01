<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class GalleriesController extends Controller
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
            'title' => 'Manage your galleries',
            'no' => 1
        ];

        $galleries = DB::table('galleries')->get();
        return view('admin_pages/galleries/index', ['parse' => $parse, 'galleries' => $galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parse = [
          'title' => 'Submit a new photo'
        ];

        return view('admin_pages/galleries/create', ['parse' => $parse]);
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
            $request->images->move("img/galleries", $request->images->getClientOriginalName());
            $images = $request->images->getClientOriginalName();
        }

        $data = [
            "description" => $request->description,
            "images" => $images,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString()
        ];

      DB::table('galleries')->insert($data);
      $request->session()->flash('status', 'Task was successful!');
      return redirect('galleries/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parse = [
            'title' => 'Manage post'
        ];

        $getGalleriesData = DB::table('galleries')->where('id', $id)->get();

        return view('admin_pages/galleries/edit', ['parse' => $parse, 'data' => $getGalleriesData]);
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
        if($request->images == NULL){
          $data = [
            "description" => $request->description,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString()
          ];

          $request->session()->flash('status', 'Task was successful!');
          DB::table('galleries')->where('id', $id)->update($data);
          return redirect('galleries/'.$id.'/edit');
        } else {
          $images = "";
          if($request->hasFile("images")){
            $request->images->move("img/galleries", $request->images->getClientOriginalName());
            $images = $request->images->getClientOriginalName();
          }

          $data = [
            "description" => $request->description,
            "images" => $images,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString()
          ];

          $request->session()->flash('status', 'Task was successful!');
          DB::table('galleries')->where('id', $id)->update($data);
          return redirect('galleries/'.$id.'/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->flash('status', 'Task was successful!');
        DB::table('galleries')->where('id', $id)->delete();
        return redirect('galleries');
    }
}
