@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="w-100">
            <div class="card card-default">
                <div class="card-header border border-dark">Chats</div>

                <div class="panel-body ml-2 pt-3">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-input
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-input>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection