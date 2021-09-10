<?php

namespace App\Http\Controllers\Frontend;

use App\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Models\Complain_type;
use App\Traits\AgentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use function React\Promise\all;

class AgentProfileController extends Controller
{
    public function  create(Request $request){

        try {

            if ($request->method() == 'POST') {
                if ($v = AgentProfile::validateagentProfile($request))
                {$v = validatorMessages($v, ['mClass' => 'error']);
                    Session::flash('success', 'Oops! action could not complete.!');
                }
                else {
                    $v = Validator::make([], []);
                    $obj = AgentProfile::createOrUpdateOrDeleteProfile($request);
                    Session::flash('success', 'Record has been updated!');
                    if (!$obj->user_profile_id) $v = validatorMessages($v, ['mClass' => 'error', 'msg' => Messages::rec_error]);
                    $v = validatorMessages($v, ['mClass' => 'success', 'msg' => Messages::rec_cretead]);
                    return redirect(route('uProfileDetail'))->withErrors($v)->withInput();
                }
            }
            return redirect(route('userProfile'))->withErrors($v)->withInput();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }

    }

    public function index(){
        try {
            $getcomplainTypes  = Complain_type::where('is_active', '1')->get();
            return view('frontend.agent_profile.index' , compact('getcomplainTypes'));
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function searchAgentData(Request $request){
        try {
            $uagentProfiles = AgentProfile::getAgentSearch($request);
            return view('frontend.agent_profile.partial.index', compact('uagentProfiles'))->render();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function viewSuggestion(Request $request){
        try {
            return view('frontend.suggestion.index');
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function searchSuggestionData(Request $request){
        try {

            $usuggestionProfiles = AgentProfile::getSuggestionSearch($request);
            return view('frontend.suggestion.partial.index', compact('usuggestionProfiles'))->render();
        } catch (\Exception $e) {
            return view('frontend..errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
