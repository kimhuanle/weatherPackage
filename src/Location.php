<?php 

/*
 * (c) Huan Le <lehk@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Lehk\OpenWeatherClient;

class Location
{
	private $city;
	private $state;
	private $country;

	/**
	 * Create new Location
	 */
    public function __construct($city, $state, $country)
    {
		$this->city = $city;
		$this->state = $state;
		$this->country = $country;
    }

	/**
	 * Gets City
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Gets State
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Gets Country
	 */
	public function getCountry()
	{
		return $this->country;
	}
}

?>
