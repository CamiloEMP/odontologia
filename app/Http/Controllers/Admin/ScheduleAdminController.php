<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleAdminController extends Controller
{

    public function index()
    {
        if (!Auth::check()) {
            return to_route('auth.login');
        }
        $schedules = Schedule::whereNull('appointment_id')->get();

        return view('admin.schedule.index', ['schedules' => $schedules]);
    }

    public function create()
    {
        if (!Auth::check()) {
            return to_route('auth.login');
        }
        $schedules = Schedule::get();

        return view('admin.schedule.create', ['schedules' => $schedules]);
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return to_route('auth.login');
        }

        $request->validate([
            'appointment_date' => ['required'],
        ]);

        $date = new Schedule;
        $date->appointment_date = $request->input('appointment_date');
        $date->save();

        return to_route('admin.schedule.create')->with('schedule_status', 'Horario creado con exito');
    }

    public function edit($id)
    {
        $schedule = Schedule::find($id);
        return view('admin.schedule.edit', ['schedule' => $schedule]);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);

        $schedule->update($request->all());
        return to_route('admin.schedule.index')->with('schedule_status', 'La fecha ha sido modificada con exito');
    }

    public function destroy($id)
    {
        $schedule = Schedule::find($id);

        $schedule->delete();

        return to_route('admin.schedule.index')->with('schedule_status', 'Horario eliminado con exito');
    }
}
