<?php

/*
Copyright © 2015-2016 ADP, LLC.

Licensed under the Apache License, Version 2.0 (the “License”);
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an “AS IS” BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
express or implied.  See the License for the specific language
governing permissions and limitations under the License.
*/

/**
 * ADP Marketplace Class PHP Library
 *
 * This configuration file is part of the DEMO application that shows utilization of the
 * ADP Marketplace library.  This demo application is for educational purposes only, and not
 * warrantied or supported in any way by ADP.  Use at your own risk.
 *
 * @author      Rich Smith
 * @version     1.0-dev
 */


	//--------------------------------------------------------------------------------------
	// The root URL of the api calls.  Will be different between testing and production.
	//--------------------------------------------------------------------------------------
   	$ADP_APIROOT  = "https://api.adp.com/";

   	//--------------------------------------------------------------------------------------
   	// The location, on disk, of the certificate for the server.
   	//--------------------------------------------------------------------------------------
	$ADP_CERTFILE = __DIR__ . "/certs/apiclient_iat.pem";

	//--------------------------------------------------------------------------------------
	// The location, on disk, of the public key of the  server
	//--------------------------------------------------------------------------------------
	$ADP_KEYFILE  = __DIR__ . "/certs/apiclient_iat.key";


	//--------------------------------------------------------------------------------------
	// Client ID and Secrets for each Grant Type
	//--------------------------------------------------------------------------------------


	// Client Credentials

	$ADP_CC_CLIENTID = "88a73992-07f2-4714-ab4b-de782acd9c4d";
	$ADP_CC_CLSECRET = "a130adb7-aa51-49ac-9d02-0d4036b63541";

	// Authorization Code

	$ADP_AC_CLIENTID = "ec762f06-7410-4f6d-aa82-969902c1836a";
	$ADP_AC_CLSECRET = "6daf2cd7-4604-46c0-ab43-a645a6571d34";


	// Redirect Callback for authorization code calls

	$ADP_REDIRECTURL = "http://localhost:8889/callback";

	//--------------------------------------------------------------------------------------
	//
	//  Logging settings:
	//
	//		$adp_logging:	This is the switch to turn logging on and off.  0 = off, 1 = on.
	//
	//		$adp_logmode:	This tells the logger how to behave:
	//
	//						0 = normal.  CLI mode logs to $adp_logfile and non-CLI logs
	//									 to STDERR.
	//
	//						1 = file mode.  CLI and non CLI both log to $adp_logfile
	//
	//		$adp_logfile:	Path to the logfile to be used by above settings.
	//
	//
	//	*** NOTE ***  The STDERR logging follows the rules set forth in the php.ini file.
	//
	//--------------------------------------------------------------------------------------

	$adp_logging = 1;									// 1 = enable logging, 0 = disable

	$adp_logmode = 0;									// 0 = normal, 1 = file mode.

	$adp_logfile = "/tmp/adpapi.log";					// Log file name.


	//--------------------------------------------------------------------------------------
	//
	//  Fill in path vars & include client utilities.
	//
	//--------------------------------------------------------------------------------------

	$webroot = $_SERVER['DOCUMENT_ROOT'] . "/";
	$libroot = realpath($webroot . "../adplib/") . "/";

	require_once($webroot . "utils.php");

