@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading">{{ $notification->data['name'] }}</div>
                <div class="panel-body">
                    <p>{{ $notification->data['descryption'] }}</p><br>
                    <p>{{ $notification->data['chance'] }}%</p><br>
                    <p>{{ $notification->data['status'] }}</p><br>
                    @if($notification->data['exp_reward'] !== NULL )
                    <p>You earned :{{ $notification->data['exp_reward'] }} exp points</p><br>
                    <p>You earned :{{ $notification->data['arcanit_reward'] }} arcanit ore</p><br>
                    <p>You earned :{{ $notification->data['adamant_reward'] }} adamant ore</p><br>
                    @endif
                    <small>{{ $notification->created_at }}</small>
                    <form action="{{ URL('/message/'.$notification->id )}}" method="POST">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <input type="submit" value="delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection