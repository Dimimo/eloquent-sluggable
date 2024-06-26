<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMaxLength
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithMaxLengthSplitWords extends Post
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
                'maxLength' => 10,
                'maxLengthKeepWords' => false,
            ],
        ];
    }
}
