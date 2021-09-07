<?php
	
	namespace models;

	class Usuario{

		private $name;
		private $mail;
		private $password;
		private $age;
		private $weight;
		private $height;
		private $sex;


		/**
		 * Class Constructor
		 * @param    $name   
		 * @param    $mail   
		 * @param    $password   
		 * @param    $age   
		 * @param    $weight   
		 * @param    $height   
		 * @param    $sex   
		 */
		public function __construct($name, $mail, $password, $age, $weight, $height, $sex)
		{
			$this->name = $name;
			$this->mail = $mail;
			$this->password = $password;
			$this->age = $age;
			$this->weight = $weight;
			$this->height = $height;
			$this->sex = $sex;
		}

		
		public function toString(){

			return "Name: " . $this->getName() . "\n Mail: " . $this->getMail();
		}


	
	    /**
	     * @return mixed
	     */
	    public function getName()
	    {
	        return $this->name;
	    }

	    /**
	     * @param mixed $name
	     *
	     * @return self
	     */
	    public function setName($name)
	    {
	        $this->name = $name;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getMail()
	    {
	        return $this->mail;
	    }

	    /**
	     * @param mixed $mail
	     *
	     * @return self
	     */
	    public function setMail($mail)
	    {
	        $this->mail = $mail;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPassword()
	    {
	        return $this->password;
	    }

	    /**
	     * @param mixed $password
	     *
	     * @return self
	     */
	    public function setPassword($password)
	    {
	        $this->password = $password;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAge()
	    {
	        return $this->age;
	    }

	    /**
	     * @param mixed $age
	     *
	     * @return self
	     */
	    public function setAge($age)
	    {
	        $this->age = $age;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getWeight()
	    {
	        return $this->weight;
	    }

	    /**
	     * @param mixed $weight
	     *
	     * @return self
	     */
	    public function setWeight($weight)
	    {
	        $this->weight = $weight;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getHeight()
	    {
	        return $this->height;
	    }

	    /**
	     * @param mixed $height
	     *
	     * @return self
	     */
	    public function setHeight($height)
	    {
	        $this->height = $height;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSex()
	    {
	        return $this->sex;
	    }

	    /**
	     * @param mixed $sex
	     *
	     * @return self
	     */
	    public function setSex($sex)
	    {
	        $this->sex = $sex;

	        return $this;
	    }
	}

?>