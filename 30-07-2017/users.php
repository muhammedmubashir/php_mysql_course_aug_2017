<?php
include("session.php");
class users extends session
{
	public $session;
	function __construct()
	{
		parent::__construct();
		// $this->session = new session();
	}
	function isLogin()
	{
		if($this->get_value("user_id"))
		{
			return true;
		}
		return false;
	}

	function userloggedin()
	{
		return $this->add_value("user_id",10);	
	}
}

$user_obj = new users();
// $user_obj->session->add_value
$user_obj->userloggedin();
if($user_obj->isLogin())
{
	echo "user is logged in";
}
else
{
	echo "user is not login";
}
?>