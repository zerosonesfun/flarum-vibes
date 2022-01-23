<?php

/*
 * This file is part of zerosonesfun/vibes.
 *
 * Copyright (c) 2022 Billy Wilcosky.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace ZerosOnesFun\Vibes;

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[heart-on-fire text={TEXT?}]',
                '<div class="vibes-background">
                <img src="https://cdn.jsdelivr.net/gh/zerosonesfun/select-openmoji/heart-on-fire.png"><div class="vibes-text"><h3>{TEXT}</h3></div></div>
                <div class="vibes-stage-heart-on-fire">
                <div class="vibes-heart-on-fire vibes-bounce-1"></div>
            </div>'
            );
            $config->BBCodes->addCustom(
                '[dead text={TEXT?}]',
                '<div class="vibes-background">
                <img src="https://cdn.jsdelivr.net/gh/zerosonesfun/select-openmoji/dead.png"><div class="vibes-text"><h3>{TEXT}</h3></div></div>
                <div class="vibes-stage-dead">
                <div class="vibes-dead vibes-bounce-1"></div>
            </div>'
            );
            $config->BBCodes->addCustom(
                '[sad text={TEXT?}]',
                '<div class="vibes-background">
                <img src="https://cdn.jsdelivr.net/gh/zerosonesfun/select-openmoji/wilted-flower.png"><div class="vibes-text"><h3>{TEXT}</h3></div></div>
                <div class="vibes-stage-sad">
                <div class="vibes-sad vibes-bounce-1"></div>
            </div>'
            );
            $config->BBCodes->addCustom(
                '[clap text={TEXT?}]',
                '<div class="vibes-background">
                <img src="https://cdn.jsdelivr.net/gh/zerosonesfun/select-openmoji/clap.png"><div class="vibes-text"><h3>{TEXT}</h3></div></div>
                <div class="vibes-stage-clap">
                <div class="vibes-clap vibes-bounce-1"></div>
            </div>'
            );
            $config->BBCodes->addCustom(
                '[ok text={TEXT?}]',
                '<div class="vibes-background">
                <img src="https://cdn.jsdelivr.net/gh/zerosonesfun/select-openmoji/ok.png"><div class="vibes-text"><h3>{TEXT}</h3></div></div>
                <div class="vibes-stage-ok">
                <div class="vibes-ok vibes-bounce-1"></div>
            </div>'
            );
            $config->BBCodes->addCustom(
                '[peace text={TEXT?}]',
                '<div class="vibes-background">
                <img src="https://cdn.jsdelivr.net/gh/zerosonesfun/select-openmoji/peace.png"><div class="vibes-text"><h3>{TEXT}</h3></div></div>
                <div class="vibes-stage-peace">
                <div class="vibes-peace vibes-bounce-1"></div>
            </div>'
            );
        })  
];
