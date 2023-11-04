<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Notification extends Model
{
    use Auditable, HasFactory;

    protected $fillable = ['type', 'message', 'auth_id', 'model_info', 'read_at'];

    protected $dates = ['read_at'];

    public function markAsRead()
    {
        $this->read_at = Carbon::now();
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'auth_id');
    }
}
