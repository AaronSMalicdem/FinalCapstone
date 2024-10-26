<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon; // Import Carbon for date manipulation
use Google_Client;
use Google_Service_Sheets;

class ExpensesReportController extends Controller
{
    protected $googleSheetsService;

    public function __construct()
    {
        $this->googleSheetsService = new GoogleSheetsService();
    }

    public function index(Request $request)
{
    // Initialize expenses and sales arrays
    $expenses = []; 
    $sales = []; 
    $profits = []; // New array for profit

    $profitstwo = []; // New array for profit


    // Set default dates to the last 7 days if no request data is available
    if (!$request->isMethod('post')) {
        $start_date = Carbon::now()->subDays(6)->toDateString(); // 7 days ago
        $end_date = Carbon::now()->toDateString(); // Today
    } else {
        // Validate date input if provided
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $start_date = $request->start_date;
        $end_date = $request->end_date;
    }

    // Fetch expenses data from the POS system API
    $response = Http::get('http://localhost:8000/api/expenses-report', [
        'start_date' => $start_date,
        'end_date' => $end_date,
    ]);

    $expenses = $response->json();

    // Fetch sales data from the POS system API
    $salesResponse = Http::get('http://localhost:8000/api/sales', [
        'start_date' => $start_date,
        'end_date' => $end_date,
    ]);

    $sales = $salesResponse->json();

    // Sort expenses in descending order by date
    usort($expenses, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });

    // Sort sales in descending order by date (if needed)
    usort($sales, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });

     // Map and calculate profit for each day
    foreach ($sales as $sale) {
        $date = $sale['date'];
        $expenseForDate = collect($expenses)->firstWhere('date', $date);

        $totalExpensesForDate = $expenseForDate ? $expenseForDate['total_expenses'] : 0;
        $profitForDate = $sale['total_sales'] - $totalExpensesForDate;

        $profits[] = [
            'date' => $date,
            'profit' => $profitForDate,
        ];
    }

    foreach ($sales as $sale) {
        $date = $sale['date'];
        $expenseForDate = collect($expenses)->firstWhere('date', $date);

        $totalExpensesForDate = $expenseForDate ? $expenseForDate['total_expenses'] : 0;
        $profitForDate = $sale['total_sales'] - $totalExpensesForDate;

        $profitstwo[] = [
            'date' => $date,
            'profit' => $profitForDate,
        ];
    }


    // Calculate total sales for the specified date range
    $totalSales = array_sum(array_column($sales, 'total_sales')); // Assuming 'amount' is the key for sales amount
    $totalSalestwo = array_sum(array_column($sales, 'total_sales'));
    // Calculate total expenses for the specified date range
    $totalExpenses = array_sum(array_column($expenses, 'total_expenses')); // Change this line to sum the expenses
    $totalExpensestwo = array_sum(array_column($expenses, 'total_expenses'));
    // Fetch comments from Google Sheets
    $comments = $this->googleSheetsService->getComments();

    // Return the view with expenses, sales, total sales, and comments data
    return view('admin.kuwago1.main', compact('expenses', 'sales', 'totalSales','totalSalestwo', 'comments', 'totalExpenses', 'profits','totalExpensestwo', 'profitstwo'));
}







}

class GoogleSheetsService
{
    private $client;
    private $service;
    private $spreadsheetId = '1oVN6T0bAEuMD_ISC4PILA41a54N30dmqxWW9gV9VWN8'; // Replace with your Spreadsheet ID

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(storage_path('app/google-sheets-credentials.json'));
        $this->client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
        $this->service = new Google_Service_Sheets($this->client);
        $this->spreadsheetId = '1oVN6T0bAEuMD_ISC4PILA41a54N30dmqxWW9gV9VWN8'; // Replace with your actual spreadsheet ID
    }

    public function getComments()
    {
        $range = 'Kuwago!A2:C'; // Adjust the range according to your sheet structure
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        return $response->getValues();
    }
}
