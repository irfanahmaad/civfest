<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Event;
use App\Seminar;

class Repository
{
    public function getDataEvent(){
      return Event::get();
    }

    public function getDataEventWithUriParameter($parameter){
      return Event::where('title', '=', $parameter)->get();
    }

    public function getDataEventWithIdParameter($parameter){
      return Event::where('id', '=', $parameter)->get();
    }

    public function getDataTimelinesWithEventParameter($parameter){
      return Event::find($parameter)->timelines;
    }

    public function getDataSeminars(){
      return Seminar::get();
    }

    public function getDataSeminarsWithIdParameter($parameter){
      return Seminar::where('id', $parameter)->get();
    }

    public function getDataSeminarWithUriParameter($parameter){
      return Seminar::where('title', '=', $parameter)->get();
    }

    public function getDataSpeakersWithSeminarParameter($parameter, $type){
      return Seminar::find($parameter)->speakers->where('type', '=', $type);
    }

    public function getDataSpeakersWithSeminarParameterWithoutType($parameter){
      return Seminar::find($parameter)->speakers;
    }
}
