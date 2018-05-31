<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venue;
use Input;
use DB;
use Excel;

class ExcelController extends Controller
{
  public function getImport(){
    return view('venue.import_csv');
  }

  public function postImport(){
    Excel::load(Input::file('venue'),function($reader){
      $reader->each(function($sheet){
        Venue::firstOrCreate($sheet->toArray());
      });
    });
    return redirect()->route('venue.index');  
  }
}
