<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMultipleSlugs
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithMultipleSlugs extends Post
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
            ],
            'dummy' => [
                'source' => 'subtitle',
                'separator' => '.',
            ],
        ];
    }
}
