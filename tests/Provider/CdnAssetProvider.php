<?php

declare(strict_types=1);

namespace Yii\BootstrapIcons\Asset\Tests\Provider;

use Yii\BootstrapIcons\Asset\Cdn\BootstrapIconsAsset;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public function assetBundles(): array
    {
        return [
            [
                'Css',
                BootstrapIconsAsset::class,
            ],
        ];
    }
}
