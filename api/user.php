<?php 
	/**
	* class user
	*/
	class User
	{
		private $_id;
		private $_name;
		private $_email;

		
		function __construct($data)
		{
			$this->hydrate($data);
		}


		
		public function hydrate(array $data)
		{
			foreach ($data as $key => $value) 
			{
				$method = 'set'.ucfirst($key);
				if (method_exists($this, $method))  
				{
					$this->$method($value);
				}
			}
		}


		//getters
		public function id()
		{
			return $this->_id;
		}
		public function name()
		{
				return $this->_name;
		}

		public function email()
		{
			return $this->_email;
		}


		//setters
		public function setUser_id($id)
		{
			$this->_id = (int)$id;
		}

		public function setUser_name($name)
		{
			if(is_string($name)&&strlen($name)<=255)
			{
				$this->_name=$name;
			}
		}

		public function setUser_email($email)
		{
			if(is_string($email)&&strlen($name)<=255)
			{
				$this->_email=$email;
			}
		}

		//returns array containing data from user, to encode in Json
		public function data()
		{
			return array('user_id' => $this->id(), 'user_name' => $this->name(), 'user_email' => $this->email());
		}

	}
 ?>