<?php namespace Dimimo\EloquentSluggable\Tests\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PostWithRelation
 *
 * A test model used for the relationship tests.
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 *
 * @property \Dimimo\EloquentSluggable\Tests\Models\Author author
 */
class PostWithRelation extends Post
{

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['author.name', 'title'],
            ]
        ];
    }

    /**
     * Relation to Author model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
