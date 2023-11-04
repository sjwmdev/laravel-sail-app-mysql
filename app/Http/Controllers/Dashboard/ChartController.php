<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function usersCreatedChart()
    {
        $users = User::select('created_at')
            ->whereBetween('created_at', [now()->subDays(30), now()])
            ->get();

        $data = $users
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('d M');
            })
            ->map->count();

        return $data;
    }

    public function postsPublishedChart()
    {
        $posts = Post::select('created_at')
            ->whereBetween('created_at', [now()->subDays(30), now()])
            ->get();

        $data = $posts
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('d M');
            })
            ->map->count();

        return $data;
    }
}
