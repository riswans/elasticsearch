<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JeroenG\Explorer\Application\Explored;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;
    //
    protected $fillable = [
        'title',
        'descriptions',
        'user_id',
        'file',
        'category_id',
        'status'
    ];

    public function toSearchableArray(): array
    {
        $this->loadMissing('category');

        return [
            'id'    => $this->id,
            'title' => $this->title,
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
