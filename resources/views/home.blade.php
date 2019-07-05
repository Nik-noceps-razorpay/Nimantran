@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="callout_actions">
                            <a class="button button--primary callout__action" href="{{route('event.create')}}">Create new Event</a>
                        </div>
                        <a class="button button--primary callout__action" href="{{route('event.index')}}">
                        <span class="event-list-nav__link__text">
                                View Created Events
                        </span>

                        </a>

                        <div class="callout_actions">
                            <a class="button button--primary callout__action" href="{{route('invite.create')}}">Invite people to your event</a>
                        </div>

                        <div class="callout_actions">
                            <a class="button button--primary callout__action" href="{{route('invite.index')}}">Pending invites</a>
                        </div>

                        <div class="callout_actions">
                            <a>To view responses go to view events</a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
