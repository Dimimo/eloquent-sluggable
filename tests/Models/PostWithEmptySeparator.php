<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithEmptySeparator
 *
 * A test model that uses an empty separator.
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithEmptySeparator extends Post
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
                'separator' => '',
            ]
        ];
    }
}
