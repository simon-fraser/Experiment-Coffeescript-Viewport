<?php
/**
 * Internal System Call
 */
   include('library.php');

   // Declare some variables to use
   $browser = visitor::browser();
   $operating_system = visitor::os();

   // Add some additional formatting to the browser strings
   $browser['name'] = ucwords($browser['name']);
   $browser['majorver'] = ($browser['majorver']!='')? "V" . $browser['majorver'] : '' ;

   // Return json to be parsed
   echo json_encode(array('browser' => $browser, 'os' => $operating_system));