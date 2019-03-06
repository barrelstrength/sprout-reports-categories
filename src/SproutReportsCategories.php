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

use barrelstrength\sproutbasereports\services\DataSources;
use barrelstrength\sproutreportscategories\integrations\sproutreports\datasources\Categories;
use craft\base\Plugin;
use yii\base\Event;
use craft\events\RegisterComponentTypesEvent;

class SproutReportsCategories extends Plugin
{
    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSection = false;

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    public function init()
    {
        parent::init();

        Event::on(DataSources::class, DataSources::EVENT_REGISTER_DATA_SOURCES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = Categories::class;
        });
    }
}
