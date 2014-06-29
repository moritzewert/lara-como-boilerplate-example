<?php

return [

	/**
	 * The path that will contain our modules
	 * This can also be an array with multiple paths
	 */
	'path' => ['vendor'],

	/**
	 * If set to 'auto', the modules path will be scanned for modules
	 */
	'mode' => 'manual',

	/**
	 * In case the auto detect mode is disabled, these modules will be loaded
	 * If the mode is set to 'auto', this setting will be discarded
	 */
	'modules' => [
		'vendor' => [
			'moritzewert/laravel-module-composer-test'    => ['enabled' => true]
		],
	],

	/**
	 * Default files that are included automatically for each module
	 */
	'include' => [
		'helpers.php',
		'bindings.php',
		'observers.php',
		'filters.php',
		'composers.php',
		'routes.php',
	],

	/**
	 * Debug mode
	 */
	'debug' => Config::get('app.debug'),

];
