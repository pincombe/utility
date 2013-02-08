<?php

namespace Utility\DateRange;

class Lifetime extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('U', 0);
		$this->end = \DateTime::createFromFormat('U', time());
	}

}