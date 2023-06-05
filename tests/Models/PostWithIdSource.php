<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithIdSource
 *
 * A test model that uses the model's ID in the slug source.
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithIdSource extends Post
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
                'source' => ['title','id'],
                'onUpdate' => true,
            ],
        ];
    }
}
