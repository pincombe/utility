<?php

namespace Utility\DateRange;

class Last14Days extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('U', strtotime('midnight -14 days'));
		$this->end = \DateTime::createFromFormat('U', time());

		//$this->start = clone $this->end;
		//$this->start->sub(new \DateInterval('P14D'));
	}

}