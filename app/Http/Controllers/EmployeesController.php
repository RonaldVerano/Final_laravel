<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use Carbon\Carbon;
use App\Attendance;

class EmployeesController extends Controller
{
    public function index(){
        $employees = Employees::all();
        return view ('employees.index', compact('employees'));
    }
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'cp_number' => 'required',
            'salary' => 'required',
            
        ]);

        $employee = new Employees;
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name ? $request->middle_name: 'N/A';
        $employee->last_name = $request->last_name;
        $employee->age = $request->age;
        $employee->address = $request->address;
        $employee->cp_number = $request->cp_number;
        $employee->salary = $request->salary;
        $employee->present_days=0; 
        $employee->save();
    
        return redirect()->route('employees.index')->withStatus('Employee Added');
}
        public function addPresent(Request $request){
            $employees = Employees::find($request->id);
            $employees->increment('days_present');
            $employees->save();

            return redirect()->route('employees.index')->withStatus('Employee Present');
        }
        public function addPoint()
        {
            $employees = new Employees;
            $employees = increment('present_day');
            
            return redirect('/employees')->with('success' , 'work day added');
        }
        public function update(Request $request){
            $request->validate([
                'present_days' => 'required',
             
               
            ]);
                
            $student = Student::find($request->id);
            if($student){
                $employee->present_days; 
                $employee->save();
            }
            
            return redirect()->back()->withStatus('attendance Updated.');
    
        }
      
};