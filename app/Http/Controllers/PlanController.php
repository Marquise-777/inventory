<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::get();
        return view('plan.plans',compact('plans'));
    }
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
   
        return view("plan.subscription", compact("plan", "intent"));
    }
    
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);
   
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);
   
        return view("plan.subscription_success");
    }
}
