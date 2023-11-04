<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use Auditable, HasFactory, SoftDeletes;

    protected $fillable = ['deleted_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getFormattedDateAttribute()
    {
        $date = $this->action == 'created' ? $this->created_at : $this->updated_at;
        return Carbon::parse($date)->diffForHumans();
    }
}
