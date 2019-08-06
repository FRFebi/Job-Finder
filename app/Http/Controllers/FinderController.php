<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;
use Illuminate\Support\Facades\DB;

class FinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       $job        = $request->job;
       $location   = $request->location;
       $skill      = $request->skill;
       $degree     = $request->degree;
       $type       = $request->type;
       $organization = $request->organization;
       $state      = $request->state;
       
       if ($state == "prev") {
        return redirect()->route('toLocation',compact('location','job'));
            // view('location',compact('job','location'));
    }else if ($state == "next") {
        $combine    = $job." ".$skill;
        $words      = explode(" ",$combine);


        $search = DB::table('vacancy')
        ->join('location_vacancy', 'vacancy.id', '=', 'location_vacancy.vacancy_id')
        ->join('location', 'location.id', '=', 'location_vacancy.location_id')
        ->join('resp_vacancy', 'vacancy.id', '=', 'resp_vacancy.vacancy_id')
        ->join('responsibilities', 'responsibilities.id', '=', 'resp_vacancy.resp_id')
        ->join('pref_vacancy', 'vacancy.id', '=', 'pref_vacancy.vacancy_id')
        ->join('qualifications as pref', 'pref.id', '=', 'pref_vacancy.pref_id')
        ->join('qua_vacancy', 'vacancy.id', '=', 'qua_vacancy.vacancy_id')
        ->join('qualifications as qua', 'qua.id', '=', 'qua_vacancy.qua_id')
        ->join('degree_vacancy', 'vacancy.id', '=', 'degree_vacancy.vacancy_id')
        ->join('degree', 'degree.id', '=', 'degree_vacancy.degree_id')
        ->join('job', 'vacancy.job_id', '=', 'job.id')
        ->join('type', 'vacancy.type_id', '=', 'type.id')
        ->join('organization', 'vacancy.organization_id', '=', 'organization.id')
        ->where('location.name', 'like','%'.$location.'%');

        if(isset($degree)){
            $degrees = array_filter($degree);
            $search->whereIn('degree.name', $degrees);
        }else{
            $degrees[] = '';
        }
        if(isset($type)){
            $types = array_filter($type);
            $search->whereIn('type.name', $types);
        }else{
            $types[] = '';
        }
        if(isset($organization)){
            $organizations = array_filter($organization);
            $search->whereIn('organization.name', $organizations);
        }else{
            $organizations[] = '';
        }
        // ->select('vacancy.about as About', 'organization.name as organization', 'job.name as job','type.name as type',);
        // ->select('vacancy.about as About','location.name as location', 'responsibilities.description as responsibilities', 'pref.description as preffered', 'qua.description as qualification', 'degree.name as degree', 'job.name as job', 'type.name as type', 'organization.name as organization');
        // ->where('job.name', 'like', '%designer%');
        foreach($words as $word){
            $search->where(function($query) use ($word){
                $query->where('vacancy.about', 'like', '%'.$word.'%')
                ->orWhere('responsibilities.description','like', '%'.$word.'%')
                ->orWhere('pref.description', 'like', '%'.$word.'%')
                ->orWhere('qua.description', 'like', '%'.$word.'%')
                ->orWhere('job.name', 'like', '%'.$word.'%');
            });
        };
        $result = $search->pluck('vacancy.id');
        // $vacan_id = str_replace(" ", '',  $result);
        if ($result!='[]') {


            foreach($result as $id){
                $vacancy[] = $id;
            }

            $filters = array_unique($vacancy);
            $displays = Vacancy::where(function($query) use ($filters){
                $query->whereIn('id', $filters);

            })
            ->get();

            // dd($degrees); 

            return view('finder', compact('job','location','skill','degrees','types','organizations', 'displays'));
        } else {

            // dd($degrees); 
            $Massage = "No Data";
            return view('finder', compact('job','location','skill','degrees','types','organizations', 'Massage'));
        }


    }
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
