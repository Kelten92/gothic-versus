@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading">{{ $notification->data['name'] }}</div>
                <div class="panel-body">
                    <p>{{ $notification->data['descryption'] }}</p>
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