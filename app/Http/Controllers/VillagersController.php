<?php

namespace App\Http\Controllers;

use App\Villager;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class VillagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $villager = Villager::all();
        return view('villagers.index')->with(['villagers'=>$villager,'jb'=>"J Burgers"]);
        //return Villager::all()->toArray();
        #return Villager::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {return view('welcome');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {return view('villagers.store');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $re)
    {
        if (isset($re->id)) {
            $vill = Villager::all()->find($id);
            $vill->name = $re->cname;
            $vill->cid = $re->cid;
            $vill->gender = $re->gender;
            $vill->press = $re->press;
            $vill->plus = $re->plus;
            $vill->monster = $re->monster;
            $vill->lead = $re->lead;
            $vill->updated_at = Carbon::now()->subMinutes(rand(1, 55));
            $vill->save();
        }
        return view('villagers.show')->with(['data'=>Villager::all()->find($id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {return view('villagers.edit')->with(['data'=>Villager::all()->find($id)]);
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
    {return view('villagers.update');
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
