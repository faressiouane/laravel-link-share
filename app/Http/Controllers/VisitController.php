<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Link;


class VisitController extends Controller
{
    public function store(Request $request, Link $link){
        $link->visits()
        ->create([
            'user_agent' => $request->userAgent()
        ]);

    }
}
