<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerateReportRequest;
use Illuminate\Http\Request;
use App\Services\DataProcessingService;

class ReportController extends Controller
{
    protected $dataService;

    public function __construct(DataProcessingService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        return view('reports.index');
    }

    public function generate(GenerateReportRequest $request)
    {
        $report = $this->dataService->generateReport($request->all());
        return view('reports.generate', compact('report'));
    }
}
