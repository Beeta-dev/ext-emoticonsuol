<?php

namespace Beeta\EmoticonsUol;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

return function (Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->Emoticons->add(':omg3:', '<img src="/assets/emos/icon_omgrollt.gif" alt=":omg3:" title="OMG">');
		}
	);
};