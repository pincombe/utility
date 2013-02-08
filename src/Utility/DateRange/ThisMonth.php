<?php

namespace Utility\DateRange;

class ThisMonth extends \Utility\DateRange
{

	public function __construct()
	{
		$this->start = \DateTime::createFromFormat('U', mktime(0, 0, 0, date('m'), '01', date('Y')));
		$this->end = \DateTime::createFromFormat('U', time());
		//$this->end = \DateTime::createFromFormat('U', mktime(23, 59, 59, date('m'), date('d'), date('Y')));
	}

}