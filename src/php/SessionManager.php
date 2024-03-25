<?php
	
	namespace sessionManager;
	
	class SessionManager
	{
		private static ?SessionManager $instance = null;
		private function __construct() {
		
		}
		public static function getInstance() : SessionManager {
			if (self::$instance === null) {
				self::$instance = new SessionManager();
				session_start();
			}
			return self::$instance;
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
		public function isKeyExist($key) : bool {
			return isset($_SESSION[$key]);
		}
 	}