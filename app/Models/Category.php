<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'status'];
    protected $appends = ['statusName'];

    public function getStatusNameAttribute()
    {
        return $this->status ? 'ACTIVE' : 'INACTIVE';
    }
}
