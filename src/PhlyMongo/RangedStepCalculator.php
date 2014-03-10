<?php

namespace PhlyMongo;

use Zend\View\Exception;

class RangedStepCalculator
{
	const NEXT_STEP_VALUE = 1;
	const PREVIOUS_STEP_VALUE = -1;
	
	private $currentPage;
	
	/**
	 * Construct
	 * 
	 * @param number $currentPage
	 * @throws Exception\InvalidArgumentException
	 */
	public function __construct($currentPage)
	{
		if ($currentPage === null) 
		{
			throw new Exception\InvalidArgumentException(
					'Current page must be supplied'
			);
		}
		
		if (!is_numeric($currentPage)) 
		{
			throw new Exception\InvalidArgumentException(
					'Current page must be number'
			);
		}
		$this->currentPage = $currentPage;
	}
	
	/**
	 * Get next value 
	 * 
	 * @return number
	 */
	public function getNext()
	{
		return self::NEXT_STEP_VALUE;
	}
	
	/**
	 * Get previous
	 * 
	 * @return number
	 */
	public function getPrevious()
	{
		return self::PREVIOUS_STEP_VALUE;
	}
	
	/**
	 * Calculate step value
	 * 
	 * @param number $page
	 * @return number
	 */
	public function calculate($page)
	{
		return $page - $this->currentPage;
	}
}