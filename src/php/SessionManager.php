<?php
	
	namespace sessionManager;
	
	class SessionManager
	{
		public function __construct() {
		
		}
		public function getSession() : void {
			session_start();
		}
		public function set(string $key, $value) : void {
			$_SESSION[$key] = $value;
		}
		public function get($key) {
			return $_SESSION[$key] ?? null;
		}
		public function delete($key) : void {
			if (isset($_SESSION[$key])) {
				unset($_SESSION[$key]);
			}
		}
		public function destroy() : void {
			session_destroy();
		}
	}