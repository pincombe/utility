<?php

namespace Utility;

class DateRange
{
	protected $start;
	protected $end;

	public function getStart($format = 'U')
	{
		return $this->start->format($format);
	}

	public function getEnd($format = 'U')
	{
		return $this->end->format($format);
	}

}