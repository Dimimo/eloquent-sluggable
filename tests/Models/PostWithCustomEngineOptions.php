<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithCustomEngineOptions
 *
 * A test model that customizes the Slugify engine with custom options.
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithCustomEngineOptions extends Post
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
                'slugEngineOptions' => [
                    'lowercase' => false
                ]
            ]
        ];
    }

}
