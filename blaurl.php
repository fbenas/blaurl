<?php

	/* Blaurl - Script to return a full URL from a "tiny" url.*/

	//Orginal Author: Phil Burton <philbeansburton@gmail.com>

	// Version History
    // 0.0.1 Created blaurl.php

	$version = "BlaURL Version: 0.0.1";

	// get the input
	$stdin = read_stdin();

	$stdin = explode(" ", strtolower($stdin));

    $out = exec('wget -O /dev/null ' . $stdin[0] . ' 2>&1 | grep Location | cut -f2 -d" "');
    echo $out . "\n";

    function read_stdin()
	{
        	$fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
	        $input = fgets($fr,128);        // read a maximum of 128 characters
	        $input = rtrim($input);         // trim any trailing spaces.
        	fclose ($fr);                   // close the file handle
	        return $input;                  // return the text entered
	}
?>
