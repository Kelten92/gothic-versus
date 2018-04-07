@extends('layouts.app')

@section('content')     
<section id="character-presentacion">
    <div class="row">
        <div class="character-info col-md-3 col-xs-12">
            <img src="http://via.placeholder.com/144x174" class="character-img">
        </div>
        <div class="character-info col-md-9 col-xs-12">
            <table>
                <tr>
                    <td>Name:</td>
                    <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
                    <td>Level:</td>
                    <td>{{$skills->lvl}}</td>
                </tr>
                <tr>
                    <td>Health:</td>
                    <td>{{$skills->health}}</td>
                </tr>
                <tr>
                    <td>Experience:</td>
                    <td>{{$resources->exp_points}}</td>
                </tr>
                <tr>
                    <td>To next lvl:</td>
                    <td>{{$resources->exp_points_breakpoint}}</td>
                </tr>
                <tr>
                    <td>Training points:</td>
                    <td>{{$resources->learning_points}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="character-resources col-md-6 col-xs-12">
            <table>
                <tr>
                    <td>Gold Coin:</td>
                    <td>{{$resources->gold_coin}}</td>
                </tr>
                <tr>
                    <td>Adamant_ore:</td>
                    <td>{{$resources->adamant_ore}}</td>
                </tr>
                <tr>
                    <td>Arcanit_ore:</td>
                    <td>{{$resources->arcanit_ore}}</td>
                </tr>
            </table>
        </div>

        <div class="character-skills col-md-6 col-xs-12">
                <table>
                    <tr>
                        <td>strength:</td>
                        <td>{{$skills->strength}}</td>
                    </tr>
                    <tr>
                        <td>dexterity:</td>
                        <td>{{$skills->dexterity}}</td>
                    </tr>
                    <tr>
                        <td>intelligence:</td>
                        <td>{{$skills->intelligence}}</td>
                    </tr>
                    <tr>
                        <td>stamina:</td>
                        <td>{{$skills->stamina}}</td>
                    </tr>
                    <tr>
                        <td>alertness:</td>
                        <td>{{$skills->alertness}}</td>
                    </tr>
                    <tr>
                        <td>knowledge:</td>
                        <td>{{$skills->knowledge}}</td>
                    </tr>
                    <tr>
                        <td>charisma:</td>
                        <td>{{$skills->charisma}}</td>
                    </tr>
                    <tr>
                        <td>stealth:</td>
                        <td>{{$skills->stealth}}</td>
                    </tr>
                    <tr>
                        <td>inquisitiveness:</td>
                        <td>{{$skills->inquisitiveness}}</td>
                    </tr>
                </table>
            </div>
    </div>

    

</section>
       
    

@endsection