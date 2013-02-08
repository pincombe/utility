<?php

namespace Utility\DateRange;

class Last12Months extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('Y-m-d G:i:s', date("Y-m-01 00:00:00", strtotime("-12 month")));
		$this->end = \DateTime::createFromFormat('Y-m-d G:i:s', date("Y-m-t 23:59:59", strtotime("-1 month")));
	}

}