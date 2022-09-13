<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentsAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.appointment.index')->only('index');
        $this->middleware('can:admin.appointment.show')->only('show');
        $this->middleware('can:admin.appointment.edit')->only('edit');
    }

    public function index()
    {
        $appointments = Appointment::get();
        return view('admin.appointment.index', ['appointments' => $appointments]);
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view('admin.appointment.show', ['appointment' => $appointment]);
    }

    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('admin.appointment.pending.edit', ['appointment' => $appointment]);
    }
}
