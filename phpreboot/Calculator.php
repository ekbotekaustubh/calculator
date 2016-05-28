<?php
namespace phpreboot;

class Calculator
{
	public function add($numbers = '')
	{
		if (empty($numbers)) {
			return 0;
		}

		if (!is_string($numbers)) {
			throw new \InvalidArgumentException('Parameter must be a string.');
		}

		$numbers = str_replace(' ', '', $numbers);
		$numbers = str_replace(['\n', '\r', '\\r', '\\n', '\r\n', '\\r\\n'],',',trim($numbers));
		$numbers = explode(',', $numbers);

		if (array_filter($numbers, 'is_numeric') != $numbers) {
                        throw new \InvalidArgumentException('Parameter string must contains numbers.');
		}
		
		return array_sum($numbers);
	}
}
