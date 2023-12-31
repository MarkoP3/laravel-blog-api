<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
class Block extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = ['type','post_id'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
