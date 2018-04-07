@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="standard-panel">
        <div class="">You're in expedition</div>
        <div class="">
            <h3>Time to ending:</h3>
            <p>{{ $status }}</p>
        </div>
    </div>
</div>

@endsection