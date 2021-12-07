<?php

namespace Riclep\Storyblok\Listeners;

use Illuminate\Support\Facades\Cache;
use Riclep\Storyblok\Events\StoryblokPublished;

class Published
{
	/**
	 * Create the event listener.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param StoryblokPublished $event
	 * @return void
	 */
	public function handle(StoryblokPublished $event)
	{
		if (Cache::getStore() instanceof \Illuminate\Cache\TaggableStore) {
			Cache::tags('storyblok')->flush();
		} else {
			Cache::flush();
		}
	}
}