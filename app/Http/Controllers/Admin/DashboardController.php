<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalBrands = Brand::count();

        $totalAllUsers = User::count();
        $totalUser = User::where('role_as', '0')->count();
        $totalAdmin = User::where('role_as', '1')->count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = Order::whereDate('created_at', $todayDate)->count();
        $thisMonthOrder = Order::whereMonth('created_at', $thisMonth)->count();
        $thisYearOrder = Order::whereYear('created_at', $thisYear)->count();

        $orderProgress = Order::where('status_message', 'in progress')->count();
        $orderCancel = Order::where('status_message', 'cancelled')->count();
        $orderComplete = Order::where('status_message', 'complete')->count();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalBrands',
            'totalAllUsers',
            'totalUser',
            'totalAdmin',
            'totalOrder',
            'todayOrder',
            'thisMonthOrder',
            'thisYearOrder',
            'orderProgress',
            'orderCancel',
            'orderComplete'
        ));
    }
}
