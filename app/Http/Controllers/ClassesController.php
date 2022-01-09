<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function hard()
    {
        $classes = Classes::hard()->get();
        return view('classes.index',['classes'=>$classes]);
    }

    public function easy()
    {
        $classes = Classes::easy()->get();
        return view('classes.index',['classes'=>$classes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classes.index')->with(['classes'=>Classes::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $usedId =Classes::Id()->get()->pluck('id')->toArray();
        $lastId =Classes::all()->last()->id;
        $diff = array_diff(range(1,$lastId), $usedId);

        return view('classes.create',['unUsedId' => $diff,'EasyLevel'=>range(0,10)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newid = $request->input('newid');
        $cname = $request->input('cname');
        $easy = $request->input('easy');
        $love = $request->input('love');
        $sp = $request->input('sp');
        $newclass = Classes::create(
            [
                'name' => $cname,
                'easy' => $easy,
                'love' => $love,
                'sp' => $sp
            ]
        );
        if ($newid!=-1){
            $newclass->id=$newid;
            $newclass->save();
        }
        return redirect('classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('classes.show')->with(['class'=>Classes::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('classes.edit')->with(['class'=>Classes::findOrFail($id),'EasyLevel'=>range(0,10)]);
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
        $class2 = Classes::findOrFail($id);

        $class2->name = $request->input('cname');
        $class2->easy = $request->input('easy');
        $class2->love = $request->input('love');
        $class2->sp = $request->input('sp');

        $class2->save();

        return redirect('classes'); // 觸發 /teams 路由(用 get 方法)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class2 = Classes::findOrFail($id);
        $class2->delete();

        return redirect('classes');
    }

    public function api_classes()
    {
        return Classes::all();
    }

    public function api_update(Request $request)
    {
        $class1 = Classes::find($request->input('id'));
        if ($class1 == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $class1->name = $request->input('cname');
        $class1->easy = $request->input('easy');
        $class1->love = $request->input('love');
        $class1->sp = $request->input('sp');
        if ($class1->save())
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
        $class1 = Classes::find($request->input('id'));

        if ($class1 == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($class1->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
    /*$unused = array(-1);
    $classes= Classes::all();
    for ($i = 1;$i<=$classes->last()->id;$i++)
        if (!isset($classes->find($i)->id) )
            array_push($unused,$i);*/
    //echo implode("|",$unused);
    //return view('classes.edit');
    //
    //->with(['classes'=>Classes::all()]);
    //return redirect('classes.index')->with(['classes'=>Classes::all()]);
    //return redirect('classes');
    //return redirect('classes.index')->with(['classes'=>Classes::all()]);
    //return redirect('classes');
}
