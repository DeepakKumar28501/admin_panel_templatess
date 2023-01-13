<?php
//error_reporting(0);
echo "Welcome to AppServ MySQL Root Password Reset Program\n\n";

AppServCMD();

function AppServCMD() {
	define('STDIN',fopen("php://stdin","r"));
	echo " Enter New MySQL root Password : ";
	$input = '12345678';//trim(fgets(STDIN,256));
	$input = ereg_replace('\"', "\\\"", $input);
	$input = ereg_replace('\'', "\'", $input); 
	$len = strlen($input);
	if ($len < 8) {
		echo "\n   MySQL Password must be at least 8 characters!\n\n";
		sleep(5);
		exit;
	}
	echo "\n   Please wait ...................................\n\n";
	exec ("net stop mysql57");
	exec ('start /b C:\AppServ\MySQL\bin\mysqld.exe --skip-grant-tables --user=root');
	exec ("C:\AppServ\MySQL\bin\mysql -e \"update mysql.user set authentication_string=PASSWORD('$input') where user = 'root';\"");
	exec ("C:\AppServ\MySQL\bin\mysqladmin -u root shutdown");
	sleep(3);
	exec ("net start mysql57");
} // end function
?>