<?php

namespace Vfjodorovs12\Paps\Http\Controllers;

use Illuminate\Routing\Controller;
use Vfjodorovs12\Paps\Models\PapsStat;

class AllianceStatsController extends Controller
{
    public function index()
    {
        $stats = PapsStat::latest('created_at')->get()->groupBy('forum_name');
        return view('paps::index', compact('stats'));
    }
}
