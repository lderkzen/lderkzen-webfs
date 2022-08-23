<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EmployeeController extends Controller
{

    public function index()
    {
        return Inertia::render('Admin/Employees/Index', [
            'employees' => Employee::all(),
            'roles' => Role::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Employees/CreateEdit', [
            'roles' => Role::all()
        ]);
    }

    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->input());

        return Redirect::to('/kassa/admin/werknemers');
    }

    public function edit(Employee $employee)
    {
        return Inertia::render('Admin/Employees/CreateEdit', [
            'employee' => $employee,
            'roles' => Role::all()
        ]);
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->setRawAttributes($request->input())
            ->save();

        return Redirect::to('/kassa/admin/werknemers');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return Redirect::to('/kassa/admin/werknemers');
    }
}
