<?php
	namespace fandeco\category;

	use Exception;
	use Throwable;

	class CategoryExtension extends Exception
	{
		/**
		 * @var mixed|string
		 */
		private $category;
		/**
		 * @var mixed|string
		 */
		private $sub_category;

		public function __construct($message = "", $category = "", $sub_category = "", $code = 0, Throwable $previous = NULL)
		{
			$this->category     = $category;
			$this->sub_category = $sub_category;
			parent::__construct($message, 0, $previous);
		}

		/**
		 * @return mixed|string
		 */
		public function getCategory()
		{
			return $this->category;
		}


		/**
		 * @return mixed|string
		 */
		public function getSubCategory()
		{
			return $this->sub_category;
		}

	}