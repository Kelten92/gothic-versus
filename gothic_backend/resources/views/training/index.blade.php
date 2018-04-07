@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="standard-panel">
        <section Id="teachers-square">
            <h3>Teachers Camp</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <form action="{{url('/training')}}" method="POST">
            {{ csrf_field() }}
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['strength']}}</p>
                <button class="train" type="submit" name="action" value="strength">Train strength</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['dexterity']}}</p>
                <button class="train" type="submit" name="action" value="dexterity">Train dexterity</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['intelligence']}}</p>
                <button class="train" type="submit" name="action" value="intelligence">Train intelligence</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['stamina']}}</p>
                <button class="train" type="submit" name="action" value="stamina">Train stamina</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['alertness']}}</p>
                <button class="train" type="submit" name="action" value="alertness">Train alertness</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['knowledge']}}</p>
                <button class="train" type="submit" name="action" value="knowledge">Train knowledge</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['charisma']}}</p>
                <button class="train" type="submit" name="action" value="charisma">Train charisma</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['stealth']}}</p>
                <button class="train" type="submit" name="action" value="stealth">Train stealth</button>
            </div>
            <div class="teacher col-md-4">
                <img src="http://via.placeholder.com/76x76" class="character-img">
                <p class="small">
                    Donec gravida fermentum mauris nec pharetra. Sed leo tortor, aliquet quis aliquet et,
                    suscipit at dolor.Aliquam eu luctus augue. Integer aliquet eros est,
                    a luctus justo elementum eu. 
                </p>
                <p class="small">Training cost: {{$costs['inquisitiveness']}}</p>
                <button class="train" type="submit" name="action" value="inquisitiveness">Train inquisitiveness</button>
            </div>
        </form>
        </section>
    </div>
</div>

@endsection