@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1>Events Organised by you</h1>

                <table class="table">
                 <tr>
                     <th>Name</th>
                     <th>Details</th>
                     <th>Location</th>
                     <th>dateTime</th>
                 </tr>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->details}}</td>
                        <td>{{$d->location}}</td>
                        <td>{{$d->datetime}}</td>
                        <td><button type="button" onclick="window.location.href='/invite/{{$d->id}}'" >View responses</button></td>
                        <td><button type="button" onclick="window.location.href='/event/{{$d->id}}/edit' ">Edit Event</button></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>



@endsection