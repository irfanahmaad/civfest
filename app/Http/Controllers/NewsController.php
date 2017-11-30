<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class NewsController extends Controller
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

     public function index(){
         $parse = [
           'title' => 'Manage your News',
           'no' => 1
         ];

         $news = DB::table('news')->get();
         return view('admin_pages/news/index', ['parse' => $parse, 'news' => $news]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parse = [
          'title' => 'Create a new post'
        ];

        return view('admin_pages/news/create', ['parse' => $parse]);
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
        $request->images->move("img/news", $request->images->getClientOriginalName());
        $images = $request->images->getClientOriginalName();
      }

      $data = [
        "title" => $request->title,
        "description" => $request->description,
        "images" => $images,
        "created_at" => Carbon::now()->toDateTimeString(),
        "updated_at" => Carbon::now()->toDateTimeString()
      ];

      DB::table('news')->insert($data);
      $request->session()->flash('status', 'Task was successful!');
      return redirect('news/create');
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
      $parse = [
        'title' => 'Manage post'
      ];

      $getNewsData = DB::table('news')->where('id', $id)->get();

      return view('admin_pages/news/edit', ['parse' => $parse, 'data' => $getNewsData]);
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
            "title" => $request->title,
            "description" => $request->description,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString()
          ];

          $request->session()->flash('status', 'Task was successful!');
          DB::table('news')->where('id', $id)->update($data);
          return redirect('news/'.$id.'/edit');
        } else {
          $images = "";
          if($request->hasFile("images")){
            $request->images->move("img/news", $request->images->getClientOriginalName());
            $images = $request->images->getClientOriginalName();
          }

          $data = [
            "title" => $request->title,
            "description" => $request->description,
            "images" => $images,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString()
          ];

          $request->session()->flash('status', 'Task was successful!');
          DB::table('news')->where('id', $id)->update($data);
          return redirect('news/'.$id.'/edit');
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
        DB::table('news')->where('id', $id)->delete();
        return redirect('news');
    }
}
