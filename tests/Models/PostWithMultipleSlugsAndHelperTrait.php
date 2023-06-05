<?php namespace Dimimo\EloquentSluggable\Tests\Models;

use Dimimo\EloquentSluggable\SluggableScopeHelpers;

/**
 * Class PostWithMultipleSlugsAndPrimary
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndHelperTrait extends PostWithMultipleSlugs
{

    use SluggableScopeHelpers;

}
