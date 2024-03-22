<?php
	namespace MyUser;
	
		class User
	{
		private string $login;
		private string $password;
		
		public function __construct() {
			$this->password = '';
		}
		
		public function getLogin(): string
		{
			return $this->login;
		}
		
		public function setLogin(string $login): void
		{
			if ($login != null) {
				$this->login = $login;
			}
		}
		
		public function getPassword(): string
		{
			return $this->password;
		}
		
		public function setPassword(string $password): void
		{
			if ($this->password === '') {
				$this->password = $password;
			}
		}
	}