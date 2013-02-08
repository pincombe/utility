<?php

namespace Utility\DateRange;

class Yesterday extends \Utility\DateRange
{

	public function __construct()
	{
		$this->end = \DateTime::createFromFormat('U', strtotime('today'));

		$this->start = clone $this->end;
		$this->start->sub(new \DateInterval('P1D'));

	}

}