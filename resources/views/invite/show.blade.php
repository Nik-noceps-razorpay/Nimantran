@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <h1>RSVP's</h1>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email-id</th>
                        <th>RSVP</th>
                    </tr>
                    @foreach($user as $e)
                        <tr>
                            <td>{{$e->name}}</td>
                            <td>{{$e->email}}</td>
                            <td>
                                {{$e->pivot->response === 1 ? "Yes" : "No"}} </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>


@endsection