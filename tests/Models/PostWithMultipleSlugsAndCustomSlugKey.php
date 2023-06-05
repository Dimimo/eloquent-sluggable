<?php namespace Dimimo\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMultipleSlugsAndCustomSlugKey
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndCustomSlugKey extends PostWithMultipleSlugsAndHelperTrait
{
    protected $slugKeyName = 'dummy';
    
}
