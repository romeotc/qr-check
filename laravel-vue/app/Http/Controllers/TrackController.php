<?php

namespace App\Http\Controllers;
use App\Track;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrackController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  \App\Track  $product
     */
    
    public function manual_scan(Request $request)
    {
        $peopleid = $request->get('peopleid');
        $trackby = $request->get('trackby'); 
       
        $track = Track::where('peopleid', '=' , $peopleid)
                ->where('created_at', '>=', Carbon::now()->subMinutes(5)->toDateTimeString() )->first();
        if($track === null){
        Track::create($request->all());
        
        //return url('/track/manual','success','Track created successfully.');
            return view('track.index',['status'=>'success','message'=>'Track Add Success.']);
        }else{
            return view('track.index',['status'=>'error','message'=>'Track Added .']);
        }
      
    }
}
