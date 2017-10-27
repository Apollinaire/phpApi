<?php 
	/**
	* 
	*/
	class Task
	{
		private $_id, $_user_id, $_title, $_creation_date, $_description, $_status;


		
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
			return $this->$_id;
		}

		public function user_id()
		{
			return $this->_user_id;
		}

		public function title()
		{
			return $this->_title;
		}

		public function creation_date()
		{
			return $this->_creation_date;
		}

		public function description()
		{
			return $this->_description;
		}

		public function status()
		{
			return $this->_status;
		}

		//setters

		public function setTask_id($id)
		{
			$this->_id = (int) $id;
		}

		public function setTask_user_id($id)
		{
			$this->_user_id = (int) $id;
		}

		public function setTask_title($title)
		{
			if (is_string($title) && strlen($title) <= 255) {
				$this->_title = $title;
			}
		}

		public function setTask_creation_date($date)
		{
			if(is_a($date, 'DateTime'))
			{
				$this->_creation_date=$date;
			}
		}

		public function setTask_description($description)
		{
			if(is_string($description) && strlen($description) <= 255)
			{
				$this->_description = $description;
			}
		}

		public function setTask_status($status)
		{
			if (is_string($status) && strlen($status) <= 255)
			{
				$this->_status = $status;
			}
		}

		//returns array with object data, to encode in Json
		public function data()
		{
			return array('task_id' => $this->id(), 'task_user_id' => $this->user_id(), 'task_title' => $this->title(), 'task_creation_date' => $this->creation_date(), 'task_description' => $this->task_description(), 'task_status' => $this->task_status());			
		}

	}

 ?>