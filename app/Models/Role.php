<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use Auditable, SoftDeletes;

    protected $fillable = ['name', 'guard_name', 'created_by', 'updated_by', 'deleted_by'];
}
