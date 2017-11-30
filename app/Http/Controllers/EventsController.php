<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class EventsController extends Controller
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
         'title' => 'Manage your Event'
       ];

       $event = $this->repo->getDataEvent();
       return view('admin_pages/event/index', ['parse' => $parse, 'event' => $event]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $parse = [
         'title' => 'Create a new Event'
       ];

       return view('admin_pages/event/create', ['parse' => $parse]);
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
        $request->images->move("img/event", $request->images->getClientOriginalName());
        $images = $request->images->getClientOriginalName();
      }

      $data = [
        "title" => $request->title,
        "sub_title" => $request->sub_title,
        "description" => $request->description,
        "images" => $images,
        "link_tor" => $request->link_tor,
        "link_register" => $request->link_register,
        "created_at" => Carbon::now()->toDateTimeString(),
        "updated_at" => Carbon::now()->toDateTimeString()
      ];

      DB::table('events')->insert($data);
      $request->session()->flash('status', 'Task was successful!');
      return redirect('events/create');
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

      $getEventData = $this->repo->getDataEventWithIdParameter($id);

      return view('admin_pages/event/edit', ['parse' => $parse, 'data' => $getEventData]);
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
          "sub_title" => $request->sub_title,
          "link_register" => $request->link_register,
          "link_tor" => $request->link_tor,
          "description" => $request->description,
          "created_at" => Carbon::now()->toDateTimeString(),
          "updated_at" => Carbon::now()->toDateTimeString()
        ];

        $request->session()->flash('status', 'Task was successful!');
        DB::table('events')->where('id', $id)->update($data);
        return redirect('events/'.$id.'/edit');
      } else {
        $images = "";
        if($request->hasFile("images")){
          $request->images->move("img/event", $request->images->getClientOriginalName());
          $images = $request->images->getClientOriginalName();
        }

        $data = [
          "title" => $request->title,
          "sub_title" => $request->sub_title,
          "description" => $request->description,
          "images" => $images,
          "link_register" => $request->link_register,
          "link_tor" => $request->link_tor,
          "created_at" => Carbon::now()->toDateTimeString(),
          "updated_at" => Carbon::now()->toDateTimeString()
        ];

        $request->session()->flash('status', 'Task was successful!');
        DB::table('events')->where('id', $id)->update($data);
        return redirect('events/'.$id.'/edit');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
      $request->session()->flash('status', 'Task was successful!');
      DB::table('events')->where('id', $id)->delete();
      return redirect('events');
    }
}
