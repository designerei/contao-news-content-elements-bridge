<?php

namespace designerei\ContaoNewsContentElementBridgeBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use designerei\ContaoNewsContentElementBridgeBundle\ContaoNewsContentElementBridgeBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoNewsContentElementBridgeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}