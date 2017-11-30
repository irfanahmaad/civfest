<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class SpeakersController extends Controller
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

     public function index($idSeminars){
       $parse = [
         'title' => 'Manage your Timelines',
         'id' => $idSeminars
       ];

       $speakers = $this->repo->getDataSpeakersWithSeminarParameterWithoutType($idSeminars);
       $seminars = $this->repo->getDataSeminarsWithIdParameter($idSeminars);
       return view('admin_pages/speakers/index', ['parse' => $parse, 'speakers' => $speakers, 'dataEvent' => $seminars]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create($idSeminars)
     {
       $parse = [
         'title' => 'Create a new Speakers',
         'id' => $idSeminars
       ];

       return view('admin_pages/speakers/create', ['parse' => $parse]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      $photo = "";
      if($request->hasFile("photo")){
        $request->photo->move("img/speaker", $request->photo->getClientOriginalName());
        $photo = $request->photo->getClientOriginalName();
      }

      $data = [
        "name" => $request->title,
        "description" => $request->description,
        "type" => $request->type,
        "photo" => $photo,
        "seminar_id" => $id,
        "created_at" => Carbon::now()->toDateTimeString(),
        "updated_at" => Carbon::now()->toDateTimeString()
      ];
      DB::table('speakers')->insert($data);
      $request->session()->flash('status', 'Task was successful!');
      return redirect('seminars/'.$id.'/speakers/create');
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
    public function edit($idSeminarParameter, $idSpeakerParameter)
    {
      $parse = [
        'title' => 'Manage speaker',
        'parent_id' => $idSeminarParameter
      ];

      $getSpeakersData = DB::table('speakers')->where('id', $idSpeakerParameter)->get();

      return view('admin_pages/speakers/edit', ['parse' => $parse, 'data' => $getSpeakersData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSeminarParameter, $idSpeakerParameter)
     {
       if($request->photo == NULL){

         $data = [
           "name" => $request->title,
           "description" => $request->description,
           "type" => $request->type,
           "seminar_id" => $idSeminarParameter,
           "created_at" => Carbon::now()->toDateTimeString(),
           "updated_at" => Carbon::now()->toDateTimeString()
         ];

         DB::table('speakers')->where('id', $idSpeakerParameter)->update($data);
         $request->session()->flash('status', 'Task was successful!');
         return redirect('seminars/'.$idSpeakerParameter.'/speakers');
       } else {
         $photo = "";
         if($request->hasFile("photo")){
           $request->photo->move("img/speaker", $request->photo->getClientOriginalName());
           $photo = $request->photo->getClientOriginalName();
         }

         $data = [
           "name" => $request->title,
           "description" => $request->description,
           "type" => $request->type,
           "photo" => $photo,
           "seminar_id" => $idSeminarParameter,
           "created_at" => Carbon::now()->toDateTimeString(),
           "updated_at" => Carbon::now()->toDateTimeString()
         ];
         DB::table('speakers')->where('id', $idSpeakerParameter)->update($data);
         $request->session()->flash('status', 'Task was successful!');
         return redirect('seminars/'.$idSeminarParameter.'/speakers');
       }
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idSeminarParameter, $idSpeakerParameter)
    {
      $request->session()->flash('status', 'Task was successful!');
      DB::table('speakers')->where('id', $idSpeakerParameter)->delete();
      return redirect('seminars/'.$idSeminarParameter.'/speakers');
    }
}
