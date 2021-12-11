<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
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
    {return view('classes.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {return view('classes.store');
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
            $clas = Classes::all()->find($id);
            $clas->name = $re->cname;
            $clas->easy = $re->easy;
            $clas->love = $re->love;
            $clas->sp = $re->sp;
            $clas->updated_at = Carbon::now()->subMinutes(rand(1, 55));
            $clas->save();
        }
        return view('classes.show')->with(['class'=>Classes::all()->find($id)]);
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
        return view('classes.edit')->with(['class'=>Classes::all()->find($id)]);
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
