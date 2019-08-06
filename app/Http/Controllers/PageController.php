<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	/**
	 * @return [type]
	 */
	public function landing(Request $request ){
		$job = $request->job;
		return view('landing', compact('job'));
	}

	/**
	 * @param  Request
	 * @return [type]
	 */
	public function location(Request $request){
		$job = $request->job;
		$location 	= $request->location;
		// dd($request->request);
		return view('location', compact('job','location'));
	}

	/**
	 * @param  Request
	 * @return [type]
	 */
	public function skill(Request $request){
		$job 		= $request->job;
		$location 	= $request->location;
		$state 		= $request->state;
		// dd($request->request);
		if ($state == "prev") {
			return redirect()->route('landing',compact('job'));
		}else if ($state == "next") {
			return view('skill', compact('job','location'));
		}
	}
	
	/**
	 * @param  Request
	 * @return [type]
	 */
	public function finder(Request $request){
		
	}
}
