@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Chatroom
                        <span class="badge pull-right">@{{usersInRoom.length}}</span>
                    </div>

                    <log :messages="messages"></log>
                    <composer v-on:messagesent="addMessage"></composer>
                </div>
            </div>
        </div>
    </div>
@endsection