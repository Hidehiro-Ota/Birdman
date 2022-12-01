<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name' ,
        'title',
        'body',
        ];
        
    public function getPaginateByLimit(int $limit_count = 1)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function comment()
    {
        return $this -> hasMany(Comment::class);
    }
    
}


