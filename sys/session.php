<?php 
	class Session {
		protected $db;
		function __construct(){
			$secure_session=false;
			session_start();
			$db=DB::singleton();
			if ($secure_session){
				$this->save_session();
			}

		}
		function save_session($db){
			$sql='INSERT INTO sessions VALUES()';

		}
		function __set($key,$value){
			if (!isset($_SESSION[$key])){
				$_SESSION[$key]=$value;
			}
		}
		function __get($key){
			if(array_key_exists($key, $_SESSION)){
				return $_SESSION[$key];
			}
		}

		public static function destroy($key = false)
    	{
	        if($key){
	            if(is_array($key)){
	                for($i = 0; $i < count($key); $i++){
	                    if(isset($_SESSION[$key[$i]])){
	                        unset($_SESSION[$key[$i]]);
	                    }
	                }
	            }
	            else{
	                if(isset($_SESSION[$key])){
	                    unset($_SESSION[$key]);
	                }
	            }
	        }
	        else{
	            session_destroy();
	        }
    	}	

	}