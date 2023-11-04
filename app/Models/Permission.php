<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use Auditable, SoftDeletes;

    protected $fillable = ['name', 'guard_name', 'created_by', 'updated_by', 'deleted_by'];
}
