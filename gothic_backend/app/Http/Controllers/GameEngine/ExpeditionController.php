<?php

namespace App\Http\Controllers\GameEngine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GameEngine\ExpeditionService;

class ExpeditionController extends Controller
{
    public $expeditionService;
   
    
    // param ExpeditionService
    //return void
    public function __construct(ExpeditionService $service) {
        $this->expeditionService = $service;
        
    }

    public function index()
    {
        if($this->expeditionService->expeditionInProgress())
        {
            if($this->expeditionService->expeditionIsComplete())
            {
                $this->expeditionService->calculateExpedition();
                $this->expeditionService->expedition->pivot->delete();
                return redirect('/message/'.$this->expeditionService->getExpeditionId());
            }
            else
            {
                $status = $this->expeditionService->expedition->pivot->end_date;
                return view('expedition.current', compact('status'));
            }
        }
        else
        {
            return view('expedition.new');
        }
    }
     
    public function new(Request $request) {
       $this->expeditionService->startNew($request);
       return back();
    }
}
