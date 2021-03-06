
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1>Pending Invites</h1>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Location</th>
                        <th>dateTime</th>
                        <th>RSVP</th>
                    </tr>
                    @foreach($events as $e)
                        <tr>
                            <td>{{$e->name}}</td>
                            <td>{{$e->details}}</td>
                            <td>{{$e->location}}</td>
                            <td>{{$e->datetime}}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>


@endsection