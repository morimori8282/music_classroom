<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysSelector extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'val',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
