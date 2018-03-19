@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Your's Messages</div>
                <div class="panel-body">
                    @foreach($notifications as $notification)
                <h5><a href="{{ URL('/message/'.$notification->id )}}"> {{ $notification->data['name'] }}</a></h5>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection