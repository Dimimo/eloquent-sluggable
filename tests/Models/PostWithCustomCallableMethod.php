<?php namespace Dimimo\EloquentSluggable\Tests\Models;

use Illuminate\Support\Str;

/**
 * Class PostWithCustomCallableMethod
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithCustomCallableMethod extends Post
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
                'method' => [ static::class, 'makeSlug' ]
            ]
        ];
    }

    public static function makeSlug($string, $separator) {
        return strrev(Str::slug($string, $separator));
    }
}
