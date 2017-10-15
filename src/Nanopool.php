<?php
namespace Krorten\Nanopool;

use GuzzleHttp\Client;

class Nanopool {

	const API = "https://api.nanopool.org/v1/";

	protected $type = 'zec';

	public function setType($type = 'zec')
	{
		$this->type = $type;

		return $this;
	}
	/**
	 * Get a summary of current address
	 * @param  [type] $user [description]
	 * @return [type]       [description]
	 */
	public function user($adress)
	{
		$this->request('user/' . $adress);
	}
	/**
	 * Get workers from current adress
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function workers($adress)
	{
		$this->request('workers/' . $adress);
	}
	/**
	 * Get current balance and Hashrate
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function balancehs($adress)
	{
		$this->request('balance_hashrate/' . $adress);
	}
	/**
	 * Get list of paymets
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function payments($adress)
	{
		$this->request('payments/' . $adress);
	}
	/**
	 * Get approx earnings from current hashrate
	 * @param  [type] $hashrate [description]
	 * @return [type]           [description]
	 */
	public function calculator($hashrate)
	{
		$this->request('approximated_earnings/' . $hashrate);
	}

	private function request($endpoint, $params = array())
	{
		$client = new Client();
		$qry = '';
		if (!empty($params)) {
			$qry = '?' . http_build_query($params);
		}

		$request = $client->request('GET', self::API . '/' . $this->type . '/' . $endpoint . $qry);
		$response = $request->getBody();

		return json_decode($response->getContents());
	}
}