<?php
	namespace MyUser;
	
		class User
	{
		private string $login;
		private string $password;
		
		public function __construct() {
		}
		
		public function getLogin(): string
		{
			return $this->login;
		}
		
		public function setLogin(string $login): void
		{
			$this->login = $login;
		}
		
		public function getPassword(): string
		{
			return $this->password;
		}
		
		public function setPassword(string $password): void
		{
			$this->password = $password;
		}
	}