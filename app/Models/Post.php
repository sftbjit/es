<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JeroenG\Explorer\Application\Explored;
use Laravel\Scout\Searchable;

class Post extends Model implements Explored
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['title'];
    /**
     * Get the name of the index associated with the model.
     */
    public function searchableAs(): string
    {
        return 'posts_index';
    }

    public function mappableAs(): array
    {
        return [
            'id' => 'keyword',
            'title' => 'text',
            'created_at' => 'date',
        ];
    }
}
