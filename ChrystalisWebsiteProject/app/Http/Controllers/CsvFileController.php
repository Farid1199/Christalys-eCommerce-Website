<?php
 
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Response;
 
class CsvFileController extends Controller
{
    protected function getHeaders()
    {
       
 
        return [
            'Content-Encoding'    => 'UTF-8',
            'Content-Type'        => 'text/csv;charset=UTF-8',
            'Content-Disposition' => "attachment;filename=\"userstats.csv\"",
        ];
    }
 
    public function export()
{
    $csvFileName = "userstats.csv";
    $handle = fopen('php://output', 'w');

    // Headers for CSV
    fputcsv($handle, ['Statistic', 'Value']);

    // User Registration Trends
    $dailyRegistrations = User::whereDate('created_at', today())->count();
    $weeklyRegistrations = User::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
    $monthlyRegistrations = User::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
    $yearlyRegistrations = User::whereYear('created_at', date('Y'))->count();

    // Assuming you have a method to measure user activity levels
    // This could be logins, posts, comments, etc. Here's a placeholder:
    $averageDailyLogins = "PLACEHOLDER"; // Replace with actual calculation

    // User Retention Rates - Placeholder values, replace with actual logic to calculate retention
    $oneWeekRetention = "PLACEHOLDER";
    $oneMonthRetention = "PLACEHOLDER";
    $threeMonthsRetention = "PLACEHOLDER";

    // Segmentation of Active vs. Inactive Users - Placeholder segmentation
    $activeUsers = User::where('created_at', '>=', now()->subMonth())->count();
    $inactiveUsers = User::where('created_at', '<', now()->subMonth())->count();

    // Writing stats to CSV
    fputcsv($handle, ['Daily Registrations', $dailyRegistrations]);
    fputcsv($handle, ['Weekly Registrations', $weeklyRegistrations]);
    fputcsv($handle, ['Monthly Registrations', $monthlyRegistrations]);
    fputcsv($handle, ['Yearly Registrations', $yearlyRegistrations]);
    fputcsv($handle, ['Average Daily Logins', $averageDailyLogins]);
    fputcsv($handle, ['One Week Retention', $oneWeekRetention]);
    fputcsv($handle, ['One Month Retention', $oneMonthRetention]);
    fputcsv($handle, ['Three Months Retention', $threeMonthsRetention]);
    fputcsv($handle, ['Active Users', $activeUsers]);
    fputcsv($handle, ['Inactive Users', $inactiveUsers]);

    fclose($handle);

    return Response::make('', 200, $this->getHeaders());
}

}