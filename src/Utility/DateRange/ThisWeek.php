<?php

namespace Utility\DateRange;

class ThisWeek extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('U', strtotime('last monday'));
		$this->end = \DateTime::createFromFormat('U', time());
	}

}