<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMultipleSources
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithMultipleSources extends Post
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
                'source' => ['title', 'subtitle'],
            ]
        ];
    }
}
