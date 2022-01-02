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
        //return redirect('classes.index')->with(['classes'=>Classes::all()]);
        //return redirect('classes');
    }

    public function easy()
    {
        $classes = Classes::easy()->get();
        return view('classes.index',['classes'=>$classes]);
        //return redirect('classes.index')->with(['classes'=>Classes::all()]);
        //return redirect('classes');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('classes.index')->with(['classes'=>Classes::all()]);
        //return Classes::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unused = array(-1);
        $classes= Classes::all();
        for ($i = 1;$i<=$classes->last()->id;$i++)
            if (!isset($classes->find($i)->id) )
                array_push($unused,$i);

        //echo implode("|",$unused);
        return view('classes.create',['unUsedId' => $unused]);//->with(['classes'=>Classes::all()]);
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
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('classes.edit')->with(['class'=>Classes::findOrFail($id)]);
        //return view('classes.edit');
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

}
