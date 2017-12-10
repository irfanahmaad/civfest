<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Repository;
use Carbon\Carbon;

class SponsorsController extends Controller
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
            'title' => 'Manage your sponsor section',
            'no' => 1
        ];

        return view('admin_pages/sponsors/index', ['parse' => $parse]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parse = [
          'title' => 'Submit a new sponsor section photo'
        ];

        return view('admin_pages/sponsors/create', ['parse' => $parse]);
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
            $request->images->move("img/sponsor", "sponsor.jpg");
            //$images = $request->images->getClientOriginalName();
        }

        // $data = [
        //     "title" => $request->title,
        //     "images" => $images,
        //     "created_at" => Carbon::now()->toDateTimeString(),
        //     "updated_at" => Carbon::now()->toDateTimeString()
        //];

      //DB::table('galleries')->insert($data);
      $request->session()->flash('status', 'Task was successful!');
      return redirect('sponsors');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request, $id)
    // {
    //     $request->session()->flash('status', 'Task was successful!');
    //     DB::table('galleries')->where('id', $id)->delete();
    //     return redirect('galleries');
    // }
}
