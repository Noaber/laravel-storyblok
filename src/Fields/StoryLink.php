<?php


namespace Riclep\Storyblok\Fields;


class StoryLink extends Asset
{
	public function __toString(): string
	{
		if ($this->anchor) {
			return $this->cached_url . '#' . $this->anchor;
		}

		return $this->cached_url;
	}
}