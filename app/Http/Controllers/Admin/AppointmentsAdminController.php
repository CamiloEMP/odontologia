<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsAdminController extends Controller
{
    public function index()
    {
        $appointments = Appointment::get();
        return view('admin.appointment.index', ['appointments' => $appointments]);
    }

    public function show($id)
    {
        if (!Auth::check()) {
            return to_route('auth.login');
        }
        $appointment = Appointment::find($id);
        return view('admin.appointment.show', ['appointment' => $appointment]);
    }

    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('admin.appointment.pending.edit', ['appointment' => $appointment]);
    }
}
