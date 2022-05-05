<?php 

/*
 * (c) Huan Le <lehk@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Lehk\OpenWeatherClient;

class WeatherDay
{
	private $date;
	private $unit;
	private $temperature;
	private $feelsLike;
	private $pressure;
	private $humidity;

	/**
	 * Create new WeatherDay
	 */
    public function __construct($date, $unit, $temperature, $feelsLike, $pressure, $humidity)
    {
		$this->date = $date;
		$this->unit = $unit;
		$this->temperature = $temperature;
		$this->feelsLike = $feelsLike;
		$this->pressure = $pressure;
		$this->humidity = $humidity;
    }

	/**
	 * Gets date
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Gets unit
	 */
	public function getUnit()
	{
		return $this->unit;
	}

	/**
	 * Gets temperature
	 */
	public function getTemperature()
	{
		return $this->temperature;
	}

	/**
	 * Gets feelsLike
	 */
	public function getFeelsLike()
	{
		return $this->feelsLike;
	}

	/**
	 * Gets pressure
	 */
	public function getPressure()
	{
		return $this->pressure;
	}

	/**
	 * Gets humidity
	 */
	public function getHumidity()
	{
		return $this->humidity;
	}
}

?>
