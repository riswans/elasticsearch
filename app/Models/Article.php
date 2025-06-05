<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JeroenG\Explorer\Application\Explored;
use Laravel\Scout\Searchable;

class Article extends Model implements Explored
{
    use HasFactory,Searchable;
    //
    protected $fillable = [
        'title',
        'descriptions',
        'user_id',
        'file',
        'category_id',
        'status'
    ];
    public function mappableAs(): array
    {
        return [
            'id'    =>'keyword',
            'title'    =>'text',
            'category'    => [
                'name'=>'text'
            ]
        ];
    }
    public function toSearchableArray(): array
    {
       return [
            'id'    =>$this->id,
            'title'    => $this->title,
       ];
    }
    protected function makeAllSearchableUsing(Builder $query)
    {
        return $query->with('category');
    }
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
