<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Bikes;
use Illuminate\Support\Facades\Response;
 
class CsvExporter extends Controller
{
    protected  $db;
    protected $fileName;
    protected function getHeaders()
    {
       
 
        return [
            'Content-Encoding'    => 'UTF-8',
            'Content-Type'        => 'text/csv;charset=UTF-8',
            'Content-Disposition' => "attachment;filename=\"{$this->fileName}.csv\"",
        ];
    }
 
    public function export ($dbName) {
 
 
       
 
        //need to make a switch case that will make exoprt of db based on $dbName
       
        $this->fileName = $dbName;
 
        $csvFileName = "{$this->fileName}.csv";
        $handle = fopen('php://output', 'w');
     
 
        $users =  User::all();
   
       
        fputcsv($handle, ['userID', 'FirstName']);
       
 
             
 
               
 
        foreach ($users as $product) {
            fputcsv($handle, [$product->userid,$product->firstname]);
           
         
        }
        fputcsv($handle, [""]);
 
        fputcsv($handle, ["AVARAGE RATE OF REGISTRATION PER MONTH"]);
 
        fputcsv($handle, ["Jan" , "feb"]);
 
 /* to delete use this to find the avarage and mean User::whereMonth('created_at', now()->month) // checking if the month of created_at is current month
->whereYear('created_at', now()->year) // checking if the year of created_at is current year
->get(); */
 
$avarage = [];
        for ($i = 1; $i <= 29; $i++) {
 
            $jan = User::whereDay('created_at',$i)->get()->count();
 
            $avarage[$i] = $jan;
           
 
        }
 
 
 
 
     
       
 
        fputcsv($handle, ["",array_sum($avarage)/29]);
       
 
 
 
 
       
 
     
           
           
         
 
 
   
        fclose($handle);
   
        return Response::make('', 200, $this->getHeaders());
 
 
       
 
     
 
 
    }
}