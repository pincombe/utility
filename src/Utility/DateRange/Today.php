<?php

namespace Utility\DateRange;

class Today extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('U', strtotime('today'));
		$this->end = \DateTime::createFromFormat('U', time());
	}

}