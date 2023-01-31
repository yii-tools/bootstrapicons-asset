<?php

declare(strict_types=1);

namespace Yii\BootstrapIcons\Asset\Npm;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class BootstrapIconsAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/bootstrap-icons';
    public array $css = ['font/bootstrap-icons.css'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/font/bootstrap-icons.css',
                '**/font/fonts/*',
                '**/bootstrap-icons.svg',
            ),
        ];
    }
}
