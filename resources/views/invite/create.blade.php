@extends('layouts.app')

@section('content')
    <div class="container">
    {!! Form::open(['method' => 'POST', 'route' => ['invite.store']]) !!}

    <div class="panel panel-default">


        <div class="panel-body">
            <div class ="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('event_id','Select Event : ', ['class' => 'control-label']) !!}
                    {!! Form::select('event_id', $event_name , ['class' => 'form-control select2']) !!}


                </div>
            </div>

            <div class ="row">

                <div class="col-xs-12 form-group">

                    {!! Form::label('email_id','Invitee email-id', ['class' => 'control-label']) !!}
                    {!! Form::email('email','', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}


                </div>
            </div>


        </div>



    </div>



    {!! Form::submit('Send Invite!!', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    </div>
@endsection
