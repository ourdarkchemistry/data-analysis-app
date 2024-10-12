<?php

namespace App\Imports;

use App\Models\DataRecord;
use Maatwebsite\Excel\Concerns\ToModel;

class DataRecordsImport implements ToModel
{
    public function model(array $row)
    {
        return new DataRecord([
            'field1' => $row[0],
            'field2' => $row[1],
            'field3' => $row[2],
        ]);
    }
}
