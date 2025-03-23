<?php

namespace App\Http\Controllers;

use App\Models\PoolList;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function getPoolMenu(Request $request)
    {
        $clientId = $request->query('client_id');

        $query = PoolList::query();
        
        if ($clientId) {
            $query->where('client_id', $clientId);
        }

        $pools = $query->select('id', 'pool_name')
                      ->orderBy('pool_name')
                      ->get();

        return view('partials.sidebar-menu', compact('pools'));
    }
}