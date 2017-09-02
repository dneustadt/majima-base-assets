<?php
/**
 * Copyright (c) 2017
 *
 * @package   Majima
 * @author    David Neustadt <kontakt@davidneustadt.de>
 * @copyright 2017 David Neustadt
 * @license   MIT
 */

namespace Plugins\MajimaBaseAssets;

use Majima\PluginBundle\Components\AssetCollection;
use Majima\PluginBundle\PluginAbstract;

/**
 * Class MajimaBaseAssets
 * @package Plugins\MajimaBaseAssets
 */
class MajimaBaseAssets extends PluginAbstract
{
    /**
     * @var int
     */
    private $priority = -1;

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return AssetCollection
     */
    public function setCssResources()
    {
        $assetCollection = new AssetCollection(join(DIRECTORY_SEPARATOR, [__DIR__, 'Resources', 'css', 'src']));
        $assetCollection->setFrontendAssets([
            join(DIRECTORY_SEPARATOR, ['frontend', 'all.scss']),
        ]);
        $assetCollection->setBackendAssets([
            join(DIRECTORY_SEPARATOR, ['backend', 'all.scss']),
        ]);
        return $assetCollection;
    }

    /**
     * @return AssetCollection
     */
    public function setJsResources()
    {
        $assetCollection = new AssetCollection(join(DIRECTORY_SEPARATOR, [__DIR__, 'Resources', 'js', 'src']));
        $assetCollection->setFrontendAssets([
            join(DIRECTORY_SEPARATOR, ['frontend', 'jquery.js']),
            join(DIRECTORY_SEPARATOR, ['frontend', 'jquery.pubsub.js']),
        ]);
        $assetCollection->setBackendAssets([
            join(DIRECTORY_SEPARATOR, ['backend', 'jquery.alertable.js']),
            join(DIRECTORY_SEPARATOR, ['backend', 'jquery.contextMenu.js']),
        ]);
        return $assetCollection;
    }
}