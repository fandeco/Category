<?php
	/**
	 * Created by Kirill Nefediev.
	 * User: Traineratwot
	 * Date: 29.06.2022
	 * Time: 10:32
	 */

	namespace fandeco\test;
	require_once "../vendor/autoload.php";

	use fandeco\category\Description;
	use PHPUnit\Framework\TestCase;

	class DescriptionTest extends TestCase
	{
		private Description $description;

		public function __construct(?string $name = NULL, array $data = [], $dataName = '')
		{
			parent::__construct($name, $data, $dataName);
			$this->description = new Description();
		}


		private function getProduct(int $id)
		{
			$curl = curl_init();

			curl_setopt_array($curl, [
				CURLOPT_URL            => 'https://fandeco.ru/rest/products/' . $id,
				CURLOPT_RETURNTRANSFER => TRUE,
				CURLOPT_ENCODING       => '',
				CURLOPT_MAXREDIRS      => 10,
				CURLOPT_TIMEOUT        => 0,
				CURLOPT_FOLLOWLOCATION => TRUE,
				CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST  => 'GET',
				CURLOPT_HTTPHEADER     => [
					'Authorization: Basic PEJhc2ljIEF1dGggVXNlcm5hbWU+OjxCYXNpYyBBdXRoIFBhc3N3b3JkPg==',
					'Cookie: fandeco_redis=87ebf60b84bed6b4424cc46acbaef99e',
				],
			]);

			$response = curl_exec($curl);
			curl_close($curl);
			return json_decode($response, 1)['object'];
		}

		/**
		 * @return void
		 * @throws \Exception
		 */
		public function testValidate()
		: void
		{
			$this->description->add($this->getProduct(126613));
			$this->description->gen();
			echo $this->description->last_without_html;

			$this->assertTrue(TRUE);
		}
	}
