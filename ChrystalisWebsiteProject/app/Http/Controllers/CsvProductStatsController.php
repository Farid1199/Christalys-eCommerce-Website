<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Response;

class CsvProductStatsController extends Controller
{
    protected function getHeaders()
    {
        return [
            'Content-Encoding'    => 'UTF-8',
            'Content-Type'        => 'text/csv;charset=UTF-8',
            'Content-Disposition' => "attachment;filename=\"productstats.csv\"",
        ];
    }

    public function export()
    {
        $handle = fopen('php://output', 'w');

        // Headers for CSV
        fputcsv($handle, ['Statistic', 'Value']);

        // Total number of products
        $totalProducts = Product::count();

        // Inventory Statistics
        $totalInventory = Product::sum('inventory_count');
        $averageInventory = Product::average('inventory_count');

        // Product Categories (unique count)
        $uniqueCategories = Product::distinct()->count('category');

        // Writing stats to CSV
        fputcsv($handle, ['Total Products', $totalProducts]);
        fputcsv($handle, ['Total Inventory Count', $totalInventory]);
        fputcsv($handle, ['Average Inventory Per Product', $averageInventory]);
        fputcsv($handle, ['Unique Categories', $uniqueCategories]);

        fclose($handle);

        return Response::make('', 200, $this->getHeaders());
    }
}
