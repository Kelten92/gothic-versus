@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Start new expedition</div>
                <div class="panel-body">
                <form action="{{url('/expedition')}}" method="POST">
                    {{ csrf_field() }}
                    <h3>Expedition length</h3>

                    <label>
                        <input type="radio" name="length" value="easy"> Easy
                      </label>
                      <label>
                        <input type="radio" name="length" value="medium"> Medium
                      </label>
                      <label>
                        <input type="radio" name="length" value="hard"> Hard
                      </label>
                      <label>
                        <input type="hidden" name="user_id" value="{{Auth::id()}}"> User
                      </label>

                    <input type="submit" value="start">
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection