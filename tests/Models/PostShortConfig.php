<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostShortConfig
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostShortConfig extends Post
{
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug'
        ];
    }
}
