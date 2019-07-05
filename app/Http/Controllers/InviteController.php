<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Auth;
use App\User;

class InviteController extends Controller
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

        $events = $user->events()->wherePivot('response','2')->get();
//        return $events;

        return view('invite.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $event = $user->events()->get()->all();
        $event_name= array_column($event,'name','id');
//        return $event_name;

        return view('invite.create',compact('event_name'));
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
//        return $request;
        $user = User::where('email',$request->email)->get();

        $user = $user[0];

        $event = Event::find($request->event_id);

//        return $event;

        $user->events()->save($event,['status' => 0, 'response' => 2]);


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
//        return $id;
        $event = Event::find($id);
//        return $event;

        $user = $event->users()->where('status','0')->get();

        return view('invite.show',compact('user'));


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

        $response=request()->RSVP;

//        $event = Event::find($id);
////        return $event;
///
///
//        return $response;

        $user = Auth::user();

        $user->events()->where('event_id',$id)->update(['response'=>$response]);

//        return $user->events()->where('event_id',$id)->get();

        return redirect('/invite');

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
