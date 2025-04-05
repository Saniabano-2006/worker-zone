<?php

namespace App\Http\Controllers;
use App\Models\Workers;
use Illuminate\Http\Request;

class searchController extends Controller
{
   

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $workers = Workers::where('service', 'LIKE', '%' . $searchQuery . '%')->get();
        return view('workers.search', compact('workers'));
    }
    
}
