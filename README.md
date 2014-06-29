lara-como-boilerplate
=====================

composer readied laravel module boilerplate project

Project to get you started with [creolab's laravel-modules](https://github.com/creolab/laravel-modules) and [composer](https://getcomposer.org)

## Get started

### 1. Clone this project to your computer
### 2. Add your modules
composer.json
```
"require": {
  [...]
  "moritzewert/laravel-module-composer-test": "dev-master"
},
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/moritzewert/laravel-module-composer-test"
  }
]
```

app/config/packages/creolab/laravel-modules/config.php
```
'modules' => [
  'vendor' => [
    'moritzewert/laravel-module-composer-test' => ['enabled' => true]
  ],
],
```
### 3. Run composer
### 4. ???
### 5. Be happy with laravel-modules & composer

## Example
View this [example project](https://github.com/moritzewert/lara-como-boilerplate-example)
