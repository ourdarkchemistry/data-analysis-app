<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataProcessingService;

class DashboardController extends Controller
{
    protected $dataService;

    public function __construct(DataProcessingService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $chartsData = $this->dataService->getChartsData();
        return view('dashboard', compact('chartsData'));
    }
}
