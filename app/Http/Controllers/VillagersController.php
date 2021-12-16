<?php

namespace App\Http\Controllers;

use App\Classes;
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
    {
        return view('villagers.create')->with(['class'=>Classes::all()]);;
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
        $cname = $request->input('cname');
        $cid = $request->input('cid');
        $gender = $request->input('gender');
        $press = $request->input('press');
        $plus = $request->input('plus');
        $monster = $request->input('monster');
        $lead = $request->input('lead');

        Villager::create(
            [
                'name' => $cname,
                'cid' => $cid,
                'gender' => $gender,
                'press' => $press,
                'plus' => $plus,
                'monster' => $monster,
                'Lead' => $lead,
            ]
        );
        return redirect('villagers'); // 觸發 /teams 路由(用 get 方法)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $re)
    {
        return view('villagers.show')->with(['data'=>Villager::findOrFail($id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {return view('villagers.edit')->with(['data'=>Villager::findOrFail($id),'class'=>Classes::all()]);
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
        $vill = Villager::findOrFail($id);

        $vill->name = $request->input('cname');
        $vill->cid = $request->input('cid');
        $vill->gender = $request->input('gender');
        $vill->press = $request->input('press');
        $vill->plus = $request->input('plus');
        $vill->monster = $request->input('monster');
        $vill->lead = $request->input('lead');

        $vill->save();

        return redirect('villagers'); // 觸發 /teams 路由(用 get 方法)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vill = Villager::findOrFail($id);
        $vill->delete();
        return redirect('villagers');
    }
}
