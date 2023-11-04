<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NotificationsController extends Controller
{
    public function index()
    {
        // $notifications = Notification::latest()->whereNull('read_at')->get();
        $notifications = Notification::latest()->get();

        foreach ($notifications as $notification) {
            $modelInfo = json_decode($notification->model_info);

            if (isset($modelInfo->model_id)) {
                $notification->model_id = $modelInfo->model_id;
            }

            if (isset($modelInfo->model_type)) {
                // Assuming model_type is in the format 'App\Models\ModelName'
                $modelNameParts = explode('\\', $modelInfo->model_type);
                $tableName = Str::plural(Str::snake(end($modelNameParts)));

                $notification->table_name = $tableName;
            }
        }

        return view(config('system.paths.dashboard.base') . 'notifications.index', compact('notifications'));
    }

    public function getUnreadNotifications()
    {
        $notifications = Notification::latest()
            ->whereNull('read_at')
            ->get();

        return response()->json($notifications);
    }

    public function markAsRead(Notification $notification)
    {
        $notification->markAsRead();

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Mark all notifications as read.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAllAsRead()
    {
        Notification::query()->update(['read_at' => now()]);

        return redirect()
            ->route('notifications.index')
            ->withSuccess(__('Successfully marked all notifications as read.'));
    }

    /**
     * Show the notification.
     *
     * @param \App\Models\Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(Notification $notification)
    {
        $modelInfo = json_decode($notification->model_info);

        if (!isset($modelInfo->model_type) || !isset($modelInfo->model_id)) {
            return redirect()->route('notifications.index');
        }

        $modelClass = $modelInfo->model_type;
        $modelId = $modelInfo->model_id;

        $model = $modelClass::find($modelId);

        if (!$model) {
            return redirect()->route('notifications.index');
        }

        return redirect()->to($model->getTable() . '/' . 'show/' . $model->id);
    }

    /**
     * Delete a notification.
     *
     * @param Request $request
     * @param Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return redirect()
            ->route('notifications.index')
            ->withSuccess(__('Notification deleted successfully.'));
    }

    /**
     * Delete all notifications.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAll()
    {
        Notification::query()->delete();

        return redirect()
            ->route('dashboard')
            ->withSuccess(__('Notifications deleted successfully.'));
    }
}
