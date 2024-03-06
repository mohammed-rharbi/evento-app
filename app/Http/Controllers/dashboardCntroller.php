<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardCntroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        switch (auth()->user()->role) {
            case 'admin':
                return redirect()->route('admin.index');
                break;

            case 'organizer':
                return redirect()->route('organizer.dashboard');
                break;

            case 'member':
                return redirect()->route('member.index');
                break;
            
            default:
                return redirect()->route('login');
                break;
        }
    }
}
