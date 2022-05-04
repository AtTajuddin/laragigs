<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'company',
        'location',
        'website',
        'email',
        'tags',
        'description',
        'logo'
    ];

    public function scopeFilter($query, array $filters)
    {

        // dd($xx = $query->where('tag', 'like', '%' . request('tag') . '%'));
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('company', 'like', '%' . request('search') . '%');
        }
    }
    public function naon($query, $filters)
    {
        dd($query);
    }
}