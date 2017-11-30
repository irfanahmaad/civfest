<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;

class MainController extends Controller
{
    protected $repo;

    public function __construct(Repository $repository){
        $this->repo = $repository;
    }

    public function index(){
      $events = $this->repo->getDataEvent();
      $news = DB::table('news')->get();
      return view('home', ['events' => $events, 'news' => $news]);
    }

    public function event($eventName){
      $eventPagesData = $this->repo->getDataEventWithUriParameter(strtoupper(str_replace('-', ' ', $eventName)));
      if($eventPagesData->isEmpty()){
        abort(404);
      } else {
        $timelines = $this->repo->getDataTimelinesWithEventParameter($eventPagesData[0]->id);
        if($timelines->isEmpty()){
          abort(404);
        } else {
          return view('pages/events', ['name_event' => $eventName, 'events_data' => $eventPagesData]);
        }
      }
      return "event".$eventName;
    }

    public function news(){
      $news = DB::table('news')->get();
      return view('pages/news', ['data' => $news]);
      return "news";
    }

    public function seminar($seminarName){
      $seminars = $this->repo->getDataSeminarWithUriParameter(strtoupper(str_replace('-', ' ', $seminarName)));
      if($seminars->isEmpty()){
        abort(404);
      } else {
        $speaker = $this->repo->getDataSpeakersWithSeminarParameter($seminars[0]->id, 0);
        $moderator = $this->repo->getDataSpeakersWithSeminarParameter($seminars[0]->id, 1);
        return view('pages/seminars', ['seminars' => $seminars, 'speaker' => $speaker, 'moderator' => $moderator]);
      }
    }

    public function pesan(){
      return view('pages/order');
    }

    public function cekStatus(){
      return view('pages/cek-status');
    }

    public function upload(){
      return view('pages/upload-bukti-pembayaran');
    }
}
