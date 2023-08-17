<?php

namespace App\Http\Controllers;

use App\Models\TourGroup;
use Illuminate\Http\Request;
use App\Models\TourPlan;
use App\Models\UpcommingTourPlan;

class TourController extends Controller
{
    public function index(){
        $runningplans = TourPlan::all();
      return view('frontend.tourPlans.tours',compact('runningplans'));
    }
    public function upcomming(){
        $upcommingPlans = UpcommingTourPlan::all();
        return view('frontend.tourPlans.upcomming',compact('upcommingPlans'));
    }
    public function groups(){
        $groups = TourGroup::all();
        return view('frontend.groups.groups', compact('groups'));
    }
}
