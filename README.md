# Yii2 Menu

[![Latest Version](https://img.shields.io/github/tag/cornernote/yii2-menu.svg?style=flat-square&label=release)](https://github.com/cornernote/yii2-menu/tags)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/cornernote/yii2-menu/master.svg?style=flat-square)](https://travis-ci.org/cornernote/yii2-menu)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/cornernote/yii2-menu.svg?style=flat-square)](https://scrutinizer-ci.com/g/cornernote/yii2-menu/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/cornernote/yii2-menu.svg?style=flat-square)](https://scrutinizer-ci.com/g/cornernote/yii2-menu)
[![Total Downloads](https://img.shields.io/packagist/dt/cornernote/yii2-menu.svg?style=flat-square)](https://packagist.org/packages/cornernote/yii2-menu)

Menu manager for Yii2.


## Installation

### 1. Download

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require cornernote/yii2-menu "*"
```

or add

```
"cornernote/yii2-menu": "*"
```

to the `require` section of your `composer.json` file.


### 2. Configure

Add following to your main configuration file:

```
'modules' => [
    'menu' => [
        'class' => 'cornernote\menu\Module',
    ],
],
```

### 3. Create Tables

Update your database schema by applying the migrations:

```
yii migrate/up --migrationPath=@vendor/cornernote/yii2-menu/src/migrations
```

## Manage Menus

Open a browser and go to `example.com/?r=menu` to start managing your menu system.