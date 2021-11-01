<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

return array(
	'js' => Array(
		'/bitrix/js/module-name/extension-path/some-component/module-name.extension-path.some-component.js',
	),
	'rel' => array('ui.vue'),
	'skip_core' => true,
	'bundle_js' => 'your-bundle-name'
);