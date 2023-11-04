<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $rolesCount = Role::count();
        $permissionsCount = Permission::count();
        $logsCount = Log::count();

        // Get new registered members within a few days from the user's table
        $newRegisteredMembersCount = User::where('created_at', '>=', Carbon::now()->subDays(7))->count();

        // Get the data from the ChartController
        $usersCreatedData = (new ChartController)->usersCreatedChart();
        $postsPublishedData = (new ChartController)->postsPublishedChart();

        return view(config('system.paths.dashboard.base') . 'home', [
            'usersCount' => $usersCount,
            'rolesCount' => $rolesCount,
            'permissionsCount' => $permissionsCount,
            'logsCount' => $logsCount,
            'newRegisteredMembersCount' => $newRegisteredMembersCount,
            'usersCreatedData' => $usersCreatedData,
            'postsPublishedData' => $postsPublishedData,
        ]);
    }
}
