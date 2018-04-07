@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="standard-panel">
        <div class="">Your's Messages</div>
        <div class="">
            @foreach($notifications as $notification)
            <h5>
                <a href="{{ URL('/message/'.$notification->id )}}"> {{ $notification->data['name'] }}</a>
            </h5>
            @endforeach
        </div>
    </div>
</div>

@endsection