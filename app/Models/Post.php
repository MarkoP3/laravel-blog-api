<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
class Post extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = ['user_id','description','cover_image_uri','title'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function blocks() {
        return $this->hasMany(Block::class);
    }
}
