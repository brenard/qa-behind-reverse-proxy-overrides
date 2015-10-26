<?php

	function qa_remote_ip_address()
/*
	Return the remote IP address of the user accessing the site, if it's available, or null otherwise
*/
	{
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return @$_SERVER['HTTP_X_FORWARDED_FOR'];
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) return @$_SERVER['HTTP_CLIENT_IP'];
		return qa_remote_ip_address_base();
	}

