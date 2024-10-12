<?php

namespace App\Services;

use App\Models\DataRecord;

class DataProcessingService
{
    public function generateReport(array $params)
    {
        return DataRecord::where('field1', $params['field1'])
                         ->get();
    }

    public function getChartsData()
    {
        $data = DataRecord::selectRaw('field2, COUNT(*) as count')
                          ->groupBy('field2')
                          ->get();
        return $data;
    }
}
