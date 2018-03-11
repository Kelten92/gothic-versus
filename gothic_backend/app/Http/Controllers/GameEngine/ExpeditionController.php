<?php

namespace App\Http\Controllers\GameEngine;

use Auth;
use Illuminate\Http\Request;
use App\Expedition;
use App\Services\GameEngine\ExpeditionService;

class ExpeditionController extends Controller
{
    public $expeditionService;
    

    public function __construct(ExpeditionService $expeditionService) {
        $this->expeditionService = $expeditionService;
    }

    public function index() {
        $expedition = Auth::user()->expedition;
        if($this->expeditionService->expeditionAlreadyStarting($expedition)) {
            if($this->expeditionService->expeditionComplete()) {
                //random type of test
                //succes or fail
                //if succes random reward (use exped length property)
                //if fails send raport
                //if succes cd. insert rewards into user skills and user sources
                //if succes cd.2 send raport
                $this->expeditionService->expedition->delete();
            }
            else {
                $status = $this->expeditionService->expedition->end_date;
                return view('expedition.current', compact('status'));
            }
        }
        else{
            return view('expedition.new');
        }
    }
     
    public function store(Request $request) {
        $today = date("Y-m-d H:i:s",time()+300);
        Expedition::create([
            'user_id' => $request->user_id,
            'length' => $request->length,
            'end_date' => $today,
        ]);
        return back();
    }
}
