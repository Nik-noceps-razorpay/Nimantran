<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();

        $data = $user->events;
//        return $data;

        return view('event.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('event.create');
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
        $input = $request->all();

        $event = new Event();
        $event->name = $input['name'];
        $event->details = $input['details'];
        $event->location = $input['location'];
        $event->datetime = $input['datetime'];
//        return $input;



        $event->save();

        $user = Auth::user();


//        $event->status =1;
//        $event->response=1;


        $user->events()->save($event,['status'=> 1, 'response' => 1]);




        return redirect('/home');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
        $event = Event::find($id);

//        return $id;

        return view('event.edit',compact('event'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
//        return $id;

        $event = Event::find($id);
//        return $event;
        //        return $request;
        $event->update(['name'=>$request->name,'details'=>$request->details,'location'=>$request->location,'datetime'=>$request->datetime]);
        return redirect('/event');
    }
}
/* @param  int  $id
* @return \Illuminate\Http\Response
    */


/**/
