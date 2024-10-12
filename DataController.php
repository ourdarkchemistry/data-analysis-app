<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportDataRequest;
use App\Models\DataRecord;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataRecordsImport;

class DataController extends Controller
{
    public function index()
    {
        $dataRecords = DataRecord::paginate(20);
        return view('data.index', compact('dataRecords'));
    }

    public function importForm()
    {
        return view('data.import');
    }

    public function import(ImportDataRequest $request)
    {
        Excel::import(new DataRecordsImport, $request->file('data_file'));
        return redirect()->route('data.index')->with('success', 'Data imported successfully.');
    }

    public function show(DataRecord $dataRecord)
    {
        return view('data.show', compact('dataRecord'));
    }
}
