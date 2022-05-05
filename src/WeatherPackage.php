<?php 

/*
 * (c) Huan Le <lehk@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Lehk\OpenWeatherClient;

class OpenWeatherClient
{
	private $ApiKey;

	/**
	 * Create new OpenWeatherClient
	 */
    public function __construct($ApiKey)
    {
        $this->ApiKey = $ApiKey;
	}

	/**
	 * Gets current weather for this location
	 */
    public function getCurrentWeather($Location)
    {
		$client = new \GuzzleHttp\Client();
		$reponse = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => $location->getCity() . ',' . $location->getState() . ',' . $location->getCountry(),
                'appid' => $this->apiKey,
                'units' => 'imperial'
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return new \Lehk\OpenWeatherClient\WeatherDay(
            new \DateTime('now'),
            'imperial',
            $data['main']['temp'],
            $data['main']['feels_like'],
            $data['main']['pressure'],
            $data['main']['humidity']
        );
    }
}

?>
