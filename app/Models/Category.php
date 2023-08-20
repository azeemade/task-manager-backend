<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = ['id'];

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'task_categories', 'task_id', 'category_id');
    }
}
