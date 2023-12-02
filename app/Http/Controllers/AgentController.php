<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    //Agent Dashboard
    public function AgentDashboard(){
        return view("agent.agent_dashboard");
    }//End Method
}
