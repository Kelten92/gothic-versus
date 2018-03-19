@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Start new expedition</div>
                <div class="panel-body">
                <form action="{{url('/expedition')}}" method="POST">
                    {{ csrf_field() }}
                    <h3>Expedition difficult_lvl</h3>

                    <label>
                        <input type="radio" name="difficult_lvl" value="easy"> Easy
                      </label>
                      <label>
                        <input type="radio" name="difficult_lvl" value="medium"> Medium
                      </label>
                      <label>
                        <input type="radio" name="difficult_lvl" value="hard"> Hard
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