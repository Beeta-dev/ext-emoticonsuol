<?php

$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
$base_url = $protocol.$_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$base_url = rtrim($base_url, "/");

namespace Beeta\EmoticonsUol;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

return function (Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$path = file_get_contents(realpath(__DIR__ . '/../../assets/js/google-analytics.js'));
			$event->configurator->Emoticons->add(':omg3:', '<img src="'.$base_url.'/assets/emos/icon_omgrollt.gif" alt=":omg3:" title="OMG">');
		}
	);
};