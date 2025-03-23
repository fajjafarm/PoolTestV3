<?php
namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show(Employee $employee)
    {
        $trainingByYear = $employee->trainingSessions()
            ->selectRaw('YEAR(date) as year, SUM(duration) as total_hours')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get();

        return view('employees.show', compact('user', 'trainingByYear')); // Updated view path
    }
}
