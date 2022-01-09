<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Villagers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class VillagersController extends Controller
{
    public function lead1()
    {
        $villager = Villagers::lead('0','25')->get();
        return view('villagers.index',['villagers'=>$villager,'jb'=>"J Burgers"]);
    }

    public function lead2()
    {
        $villager = Villagers::lead('26','50')->get();
        return view('villagers.index',['villagers'=>$villager,'jb'=>"J Burgers"]);
    }

    public function lead3()
    {
        $villager = Villagers::lead('51','100')->get();
        return view('villagers.index')->with(['villagers'=>$villager,'jb'=>"J Burgers"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villager = Villagers::all();
        return view('villagers.index')->with(['villagers'=>$villager,'jb'=>"J Burgers"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usedId =Villagers::Id()->get()->pluck('id')->toArray();
        $lastId =Villagers::all()->last()->id;
        $diff = array_diff(range(1,$lastId), $usedId);
        return view('villagers.create',['class'=>Classes::all(),'unUsedId'=>$diff]);
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
        $newid = $request->input('newid');
        $cname = $request->input('cname');
        $cid = $request->input('cid');
        $gender = $request->input('gender');
        $press = $request->input('press');
        $plus = $request->input('plus');
        $monster = $request->input('monster');
        $lead = $request->input('lead');
        $newvillager=Villagers::create(
            [
                'name' => $cname,
                'cid' => $cid,
                'gender' => $gender,
                'press' => $press,
                'plus' => $plus,
                'monster' => $monster,
                'lead' => $lead,
            ]
        );
        if ($newid!=-1){
            $newvillager->id=$newid;
            $newvillager->save();
        }
        return redirect('villagers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $re)
    {
        return view('villagers.show')->with(['data'=>Villagers::findOrFail($id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {return view('villagers.edit')->with(['data'=>Villagers::findOrFail($id),'class'=>Classes::all()]);
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
        $vill = Villagers::findOrFail($id);

        $vill->name = $request->input('cname');
        $vill->cid = $request->input('cid');
        $vill->gender = $request->input('gender');
        $vill->press = $request->input('press');
        $vill->plus = $request->input('plus');
        $vill->monster = $request->input('monster');
        $vill->lead = $request->input('lead');

        $vill->save();

        return redirect('villagers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vill = Villagers::findOrFail($id);
        $vill->delete();
        return redirect('villagers');
    }

    public function api_villagers()
    {
        return Villagers::all();
    }


    public function api_update(Request $request)
    {
        $villager = Villagers::find($request->input('id'));
        if ($villager == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $villager->name = $request->input('cname');
        $villager->cid = $request->input('cid');
        $villager->gender = $request->input('gender');
        $villager->press = $request->input('press');
        $villager->plus = $request->input('plus');
        $villager->monster = $request->input('monster');
        $villager->lead = $request->input('lead');

        if ($villager->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $villager = Villagers::find($request->input('id'));

        if ($villager == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($villager->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
    //return Villager::all()->toArray();
    #return Villager::all()->toArray();
    /*$unused = array(-1);
    $villagers= Villager::all();
    for ($i = 1;$i<=$villagers->last()->id;$i++)
        if (!isset($villagers->find($i)->id) )
            array_push($unused,$i);*/
    //$integerIDs = array_map('intval', explode(',', $usedId));
    #ECHO $usedId;
    //
    //$villager = Villager::all()->sortBy('lead',SORT_REGULAR,false);
}
