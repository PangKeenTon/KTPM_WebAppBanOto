<?php

namespace App\Http\Controllers;
use App\Models\TestDrive;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'car_model' => 'required',
            'test_drive_time' => 'required|date',
        ]);

        TestDrive::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'car_model' => $request->car_model,
            'test_drive_time' => $request->test_drive_time,
        ]);

        return redirect()->back()->with('success', 'Đăng ký lái thử thành công!');
    }

}
