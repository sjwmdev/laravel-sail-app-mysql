<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use Auditable, HasFactory, SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'description', 'body', 'created_by', 'updated_by', 'deleted_by'];
}
