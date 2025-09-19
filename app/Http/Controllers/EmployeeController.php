<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employee['employees'] = Employee::paginate(5);
        return view('people.employees.index', $employee);
    }
    public function create()
    {
        return view('people.employees.create');
    }
    public function store(Request $request)
    {
        $employee = request()->except('_token');
        Employee::insert($employee);
        return redirect('employees');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('people.employees.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $employee = request()->except(['_token', '_method']);
        Employee::where('id', '=', $id)->update($employee);
        return redirect()->route('people.employees.index');
    }
    public function destroy($id)
    {
        
    }
}
