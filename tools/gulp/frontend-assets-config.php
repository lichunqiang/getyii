<?php
/**
 * Configuration file for the "yii asset" console command.
 */

// In the console environment, some path aliases may not exist. Please define these:
Yii::setAlias('@webroot', __DIR__ . '/../../frontend/web');
Yii::setAlias('@web', '/');

return [
    // Adjust command/callback for JavaScript files compressing:
    'jsCompressor' => 'gulp compress-js --gulpfile tools/gulp/gulpfile.js --src {from} --dist {to}',
    // Adjust command/callback for CSS files compressing:
    'cssCompressor' => 'gulp compress-css --gulpfile tools/gulp/gulpfile.js --src {from} --dist {to}',
    // The list of asset bundles to compress:
    'bundles' => [
        'frontend\assets\AppAsset',
        'frontend\assets\BowerAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    	'dosamigos\selectize\SelectizeAsset',
		'yii\widgets\ActiveFormAsset',
		'yii\validators\ValidationAsset',
    ],
    // Asset bundle for compression output:
    'targets' => [
        'application' => [
            'class' => 'yii\web\AssetBundle',
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets',
            'js' => 'js/application-{hash}.js',
            'css' => 'css/application-{hash}.css',
            'depends' => [
            	'frontend\assets\AppAsset',
        		'frontend\assets\BowerAsset',
        		'yii\bootstrap\BootstrapAsset',
        		'yii\web\YiiAsset',
        		'yii\web\JqueryAsset',
        		'yii\bootstrap\BootstrapPluginAsset',
            ]
        ],
        'site' => [
        	'class' => 'yii\web\AssetBundle',
    	    'basePath' => '@webroot/assets',
    	    'baseUrl' => '@web/assets',
    	    'js' => 'js/site-{hash}.js',
    	    'css' => 'css/site-{hash}.css',
    	    'depends' => [
    	    	'dosamigos\selectize\SelectizeAsset',
    			'yii\widgets\ActiveFormAsset',
    			'yii\validators\ValidationAsset',
    	    ]
        ]
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
    ],
];