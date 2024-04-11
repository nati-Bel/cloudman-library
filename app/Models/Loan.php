<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'borrowed_by', 'checkout_date', 'due_date', 'returned'];

    public function book()
    {

        return $this->belongsTo(Book::class);
    }
}
