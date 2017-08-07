<?php
class session
{
	function __construct()
	{
		session_start();
	}

	function get_value($key)
	{
		return isset($_SESSION[$key]) ? $_SESSION[$key]: false;
	}

	function add_value($key,$value)
	{
		$_SESSION[$key] = $value;
		return true;
	}

	function get_all_values()
	{
		return $_SESSION;
	}
}
?>