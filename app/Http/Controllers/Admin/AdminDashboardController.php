<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instrument;

class AdminDashboardController extends Controller
{
    /**
     * Show admin dashboard summary.
     */
    public function index()
    {
        $totalInstruments = Instrument::count();

        return view('admin.dashboard', [
            'totalInstruments' => $totalInstruments,
        ]);
    }
}