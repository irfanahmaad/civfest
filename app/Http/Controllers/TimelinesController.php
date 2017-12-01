<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class TimelinesController extends Controller
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

    public function index($parameter)
    {
      $parse = [
        'title' => 'Manage your Timelines',
        'id' => $parameter
      ];

      $timelines = $this->repo->getDataTimelinesWithEventParameter($parameter);
      $titleEvent = $this->repo->getDataEventWithIdParameter($parameter);
      return view('admin_pages/timelines/index', ['parse' => $parse, 'timelines' => $timelines, 'dataEvent' => $titleEvent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($parameter)
    {
      $parse = [
        'title' => 'Create a new Timeline',
        'id' => $parameter
      ];

      return view('admin_pages/timelines/create', ['parse' => $parse]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

      $request->updated_at = date('Y-m-d', strtotime($request->updated_at));
      $data = [
        "title" => $request->title,
        "description" => $request->description,
        "event_id" => $id,
        "created_at" => Carbon::now()->toDateTimeString(),
        "updated_at" => $request->updated_at
      ];
      DB::table('timelines')->insert($data);
      $request->session()->flash('status', 'Task was successful!');
      return redirect('events/'.$id.'/timelines/create');
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
    public function edit($id, $id2)
    {
      $parse = [
        'title' => 'Manage post',
        'parent_id' => $id
      ];

      $getTimelinesData = DB::table('timelines')->where('id', $id2)->get();

      return view('admin_pages/timelines/edit', ['parse' => $parse, 'data' => $getTimelinesData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEventParameter, $idTimelineParameter)
    {
      $request->updated_at = date('Y-m-d', strtotime($request->updated_at));
      $data = [
        "title" => $request->title,
        "description" => $request->description,
        "event_id" => $idEventParameter,
        "created_at" => Carbon::now()->toDateTimeString(),
        "updated_at" => $request->updated_at
      ];

      $request->session()->flash('status', 'Task was successful!');
      DB::table('timelines')->where('id', $idTimelineParameter)->update($data);
      return redirect('events/'.$idEventParameter.'/timelines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request, $idEventParameter, $idTimelineParameter)
     {
         $request->session()->flash('status', 'Task was successful!');
         DB::table('timelines')->where('id', $idTimelineParameter)->delete();
         return redirect('events/'.$idEventParameter.'/timelines');
     }
}
