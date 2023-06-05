<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithFirstUniqueSuffix
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithFirstUniqueSuffix extends Post
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
                'source' => 'title',
                'firstUniqueSuffix' => '42',
            ]
        ];
    }
}
