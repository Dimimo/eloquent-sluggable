<?php

namespace Dimimo\EloquentSluggable\Tests\Models;

use Dimimo\EloquentSluggable\Tests\Classes\SluggableCustomMethod;

class PostWithCustomMethodArrayCall extends Post
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
                'method' => [SluggableCustomMethod::class, 'slug']
            ]
        ];
    }
}
