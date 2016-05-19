<?php

namespace Abhishek\TimeZone;

use Carbon\Carbon;

class TimeZone
{
	public function now()
	{
		return Carbon::now(config('timezone.default'));
	}
}