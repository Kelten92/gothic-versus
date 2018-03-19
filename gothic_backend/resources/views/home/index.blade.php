@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Hello {{Auth::user()->name}}</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>Lvl: {{$skills->lvl}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>health: {{$skills->health}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>strength: {{$skills->strength}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>dexterity: {{$skills->dexterity}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>intelligence: {{$skills->intelligence}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>stamina: {{$skills->stamina}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>alertness: {{$skills->alertness}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>knowledge: {{$skills->knowledge}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>charisma: {{$skills->charisma}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>stealth: {{$skills->stealth}}</p>
                        </li>
                        <li class="list-group-item">
                            <p>inquisitiveness: {{$skills->inquisitiveness}}</p>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>Gold Coin: {{$resources->gold_coin}}</p>
                            </li>
                            <li class="list-group-item">
                                <p>adamant_ore: {{$resources->adamant_ore}}</p>
                            </li>
                            <li class="list-group-item">
                                <p>arcanit_ore: {{$resources->arcanit_ore}}</p>
                            </li>
                            <li class="list-group-item">
                                <p>exp_points: {{$resources->exp_points}}</p>
                            </li>
                            <li class="list-group-item">
                                <p>exp_next_lvl: {{$resources->exp_points_breakpoint}}</p>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>

@endsection