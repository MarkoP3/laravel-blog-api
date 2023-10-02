<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
class Post extends Model
{
    use HasFactory, Filterable, Attachable;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->hasMany(PostCategory::class);
    }

    public function blocks() {
        return $this->hasMany(PostBlock::class);
    }
}
