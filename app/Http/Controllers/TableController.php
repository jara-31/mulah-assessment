<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        // Read CSV file
        $csvPath = public_path('Table_Input.csv');
        $rows = [];
        $data = [];

        if (($handle = fopen($csvPath, 'r')) !== false) {
            $header = fgetcsv($handle);
            while (($row = fgetcsv($handle)) !== false) {
                $rows[] = ['index' => $row[0], 'value' => $row[1]];
                $data[$row[0]] = (float) $row[1];
            }
            fclose($handle);
        }

        // Calculate Table 2
        $table2 = [
            ['category' => 'Alpha',   'value' => (int)($data['A5']  + $data['A20'])],
            ['category' => 'Beta',    'value' => $data['A15'] / $data['A7']],
            ['category' => 'Charlie', 'value' => (int)($data['A13'] * $data['A12'])],
        ];

        return view('table', compact('rows', 'table2'));
    }
}