<?php

namespace Utility\DateRange;

class Custom extends \Utility\DateRange
{

	public function __construct($format, $start_date, $end_date)
	{
		$this->start = \DateTime::createFromFormat($format, $start_date);
		$this->end = \DateTime::createFromFormat($format, $end_date);
	}

}