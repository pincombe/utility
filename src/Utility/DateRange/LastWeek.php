<?php

namespace Utility\DateRange;

class LastWeek extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('U', strtotime('midnight 2 weeks ago'));
		$this->end = \DateTime::createFromFormat('U', strtotime('midnight last week'));
	}

}