<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

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
    // Add last_login_at column to users table if it does not exist
    if (!Schema::hasColumn('users', 'last_login_at')) {
        Schema::table('users', function ($table) {
            $table->timestamp('last_login_at')->nullable();
        });
    }

    $csvFileName = "userstats.csv";
    $handle = fopen('php://output', 'w');

    // Headers for CSV
    fputcsv($handle, ['Statistic', 'Value']);

    // User Registration Trends
    $dailyRegistrations = User::whereDate('created_at', today())->count();
    $weeklyRegistrations = User::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
    $monthlyRegistrations = User::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
    $yearlyRegistrations = User::whereYear('created_at', date('Y'))->count();

    // Placeholder replaced with a method call to retrieve average daily logins
    // You need to implement the method getAverageDailyLogins() in User model
    //$averageDailyLogins = User::getAverageDailyLogins();

    // Placeholder replaced with actual logic to calculate retention rates
    // Removed due to Call to undefined method - requires implementation
    // $oneWeekRetention = User::calculateRetention(7);
    // $oneMonthRetention = User::calculateRetention(30);
    // $threeMonthsRetention = User::calculateRetention(90);

    // Segmentation of Active vs. Inactive Users updated
    $activeUsers = User::where('last_login_at', '>=', now()->subMonth())->count();
    $inactiveUsers = User::where('last_login_at', '<', now()->subMonth())->count();

    // Writing stats to CSV
    fputcsv($handle, ['Daily Registrations', $dailyRegistrations]);
    fputcsv($handle, ['Weekly Registrations', $weeklyRegistrations]);
    fputcsv($handle, ['Monthly Registrations', $monthlyRegistrations]);
    fputcsv($handle, ['Yearly Registrations', $yearlyRegistrations]);
    fputcsv($handle, ['Average Daily Logins', 'Method getAverageDailyLogins() not implemented']); // Placeholder for Average Daily Logins
    fputcsv($handle, ['One Week Retention', 'Method calculateRetention() not implemented']);
    fputcsv($handle, ['One Month Retention', 'Method calculateRetention() not implemented']);
    fputcsv($handle, ['Three Months Retention', 'Method calculateRetention() not implemented']);
    fputcsv($handle, ['Active Users', $activeUsers]);
    fputcsv($handle, ['Inactive Users', $inactiveUsers]);

    fclose($handle);

    return Response::make('', 200, $this->getHeaders());
}

}
