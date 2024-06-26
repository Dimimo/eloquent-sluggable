<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithCustomSeparator
 *
 * A test model that uses a custom suffix generation method.
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithCustomSeparator extends Post
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
                'separator' => '.'
            ]
        ];
    }
}
