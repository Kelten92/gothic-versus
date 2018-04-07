<?php

namespace App\Http\Controllers\GameEngine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\GameEngine\TrainingService;

class TrainingController extends Controller
{   
    protected $service;

    public function __construct(TrainingService $service)
    {
        $this->service = $service;
    }

    public function index()
    {   
        $costs = $this->service->training_costs();
        return view('training.index',compact('costs'));
    }

    public function train(Request $request)
    {
        switch ($request->input('action')) {
            case 'strength':
               $status = $this->service->train('strength');
                return redirect('/training')->with('status',$status);
                break;
    
            case 'dexterity':
                $status = $this->service->train('dexterity');
                return redirect('/training')->with('status',$status);
                    break;
            case 'intelligence':
                $status =  $this->service->train('intelligence');
                return redirect('/training')->with('status',$status);
                    break;
            case 'stamina':
                $status =  $this->service->train('stamina');
                return redirect('/training')->with('status',$status);
                    break;
            case 'alertness':
                $status =  $this->service->train('alertness');
                return redirect('/training')->with('status',$status);
                    break;
            case 'knowledge':
                $status =  $this->service->train('knowledge');
                return redirect('/training')->with('status',$status);
                    break;
            case 'charisma':
                $status =  $this->service->train('charisma');
                return redirect('/training')->with('status',$status);
                    break;
            case 'stealth':
                $status =  $this->service->train('stealth');
                return redirect('/training')->with('status',$status);
                    break;
            case 'inquisitiveness':
                $status =  $this->service->train('inquisitiveness');
                return redirect('/training')->with('status',$status);
                    break;
        }
    }
}
