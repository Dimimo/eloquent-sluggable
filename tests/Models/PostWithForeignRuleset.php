<?php namespace Dimimo\EloquentSluggable\Tests\Models;

use Cocur\Slugify\Slugify;

/**
 * Class PostWithForeignRuleset
 *
 * A test model that customizes the Slugify engine with a foreign ruleset.
 *
 * @package Dimimo\EloquentSluggable\Tests\Models
 */
class PostWithForeignRuleset extends Post
{

    /**
     * @inheritDoc
     */
    public function customizeSlugEngine(Slugify $engine, string $attribute): Slugify
    {
        $engine->activateRuleSet('esperanto');

        return $engine;
    }
}
