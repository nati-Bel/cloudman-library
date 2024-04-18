<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;



class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'format'];


    public static array $formats = ['PDF', 'EPUB', 'Físico', 'Audiolibro'];

    public function loans() 
    {
        
        return $this->hasMany(Loan::class);
    }

    public function scopeFilter(Builder | QueryBuilder $query, array $filters) : Builder|QueryBuilder
    {
        
        return $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('author', 'like', '%' . $search . '%');
                    
            });
        });

    }
}
