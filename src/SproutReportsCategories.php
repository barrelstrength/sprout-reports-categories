<?php
/**
 * Sprout Reports plugin for Craft CMS 3.x
 *
 * Powerful custom reports.
 *
 * @link      barrelstrengthdesign.com
 * @copyright Copyright (c) 2017 Barrelstrength
 */

namespace barrelstrength\sproutreportscategories;

use barrelstrength\sproutbase\services\sproutreports\DataSources;
use barrelstrength\sproutreportscategories\integrations\sproutreports\datasources\Categories;
use craft\base\Plugin;
use yii\base\Event;
use craft\events\RegisterComponentTypesEvent;

class SproutReportsCategories extends Plugin
{
    public function init()
    {
        parent::init();

        Event::on(DataSources::class, DataSources::EVENT_REGISTER_DATA_SOURCES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = new Categories();
        });
    }
}
