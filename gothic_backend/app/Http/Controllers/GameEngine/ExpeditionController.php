<?php

namespace App\Http\Controllers\GameEngine;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Expedition;
use App\Services\GameEngine\ExpeditionService;

class ExpeditionController extends Controller
{
    public $expeditionService;
    
    // param ExpeditionService
    //return void
    public function __construct(ExpeditionService $expeditionService) {
        $this->expeditionService = $expeditionService;
    }

    public function index() {
        $user = Auth::user();
        if($this->expeditionService->expeditionInProgress($user)) {
            if($this->expeditionService->expeditionIsComplete()) {
                $this->expeditionService->calculateExpedition();
                //calculateExpedition();
                //succes or fail
                //if succes random reward (use exped length property)
                //if fails send raport
                //if succes cd. insert rewards into user skills and user sources
                //if succes cd.2 send raport
                $this->expeditionService->expedition->pivot->delete();
                //return back();
            }
            else {
                $status = $this->expeditionService->expedition->pivot->end_date;
                return view('expedition.current', compact('status'));
            }
        }
        else{
            return view('expedition.new');
        }
        
    }
     
    public function store(Request $request) {
        $date = date("Y-m-d H:i:s",time()+300);
        $quest_id = $this->expeditionService
                    ->randomExpeditionEntity($request->difficult_lvl);
        DB::table('expedition_user')->insert(
            array('user_id' => $request->user_id, 'expedition_id' => $quest_id, 'end_date' => $date )
        );
        return back();
    }
}
