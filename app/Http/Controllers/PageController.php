<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function landing(){
		return view('landing');
	}
	public function toLocation(Request $request){
		$job = $request->job;
		return view('location', compact('job'));
	}
	public function toSkill(Request $request){
		$job 		= $request->job;
		$location 	= $request->location;
		$prev 		= $request->prev;
		if (isset($prev)) {
			return view('landing',compact('job'));
		}else {
			return view('skill', compact('job','location'));
		}
	}
	public function toFinder(Request $request){
		$job 		= $request->job;
		$location 	= $request->location;
		$skill 		= $request->skill;
		$prev 		= $request->prev;
		if (isset($prev)) {
			return view('location',compact('job','location'));
		}else {
			return view('finder', compact('job','location','skill'));
		}
	}
}
