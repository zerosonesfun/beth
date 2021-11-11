<?php

/*
 * A Flarum extension created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[beth]{TEXT1}[/beth]',
                '<span class="beth">{TEXT1}</span>'
            );
            $config->BBCodes->addCustom(
                '[clean]{TEXT2}[/clean]',
                '<span class="clean">{TEXT2}</span>'
            );
        })
];
