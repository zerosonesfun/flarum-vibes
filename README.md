# Vibes

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/zerosonesfun/vibes.svg)](https://packagist.org/packages/zerosonesfun/vibes) [![Total Downloads](https://img.shields.io/packagist/dt/zerosonesfun/vibes.svg)](https://packagist.org/packages/zerosonesfun/vibes)

A [Flarum](http://flarum.org) extension. No time to reply? A like or small reaction just won&#39;t cut it? Use a vibe BBCode. This is an alternative way to quickly reply and show support when you don&#39;t have time to type more or aren&#39;t sure what to say. Images by OpenMoji. More emoji may be added in the future. For now, somewhat unique emoji have been included. In other words, the emoji selected are not usually the common reaction emojis you find on most sites. Because unique = good.

## How to use

Type one of the following BBCode tags into a post. This is designed to be used as the only thing you type in your reply. You may try to add other things but the point is to quickly type, `[clap]`, for example, to show support but save time replying.
```
[heart-on-fire]
[dead]
[clap]
[ok]
[sad]
```
There is also a "text" attribute for the BBCode. For example: `[dead text=This is so funny! I'm dead.]`

## Installation

Install with composer:

```sh
composer require zerosonesfun/vibes:"*"
```

## Updating

```sh
composer update zerosonesfun/vibes:"*"
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/zerosonesfun/vibes)
- [GitHub](https://github.com/zerosonesfun/vibes)
- [Discuss](https://discuss.flarum.org/d/PUT_DISCUSS_SLUG_HERE)
