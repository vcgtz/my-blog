<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static $ACTIVE = 1;
    public static $INACTIVE = 0;

    protected $fillable = ['name', 'description', 'status'];
    protected $appends = ['statusName'];

    public function getStatusNameAttribute(): string
    {
        return $this->status ? 'ACTIVE' : 'INACTIVE';
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
