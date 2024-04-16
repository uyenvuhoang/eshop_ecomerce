<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }
    public function store(Request $request)
    {
        $setting = Setting::first();
        if ($setting) {
            $input = $request->all();
            $setting->update($input);
            return redirect()->back()->with('message', 'Settings Saved');
        } else {
            //create data
            $input = $request->all();
            Setting::create($input);
            return redirect()->back()->with('message', 'Settings Saved');
        }
    }
}
