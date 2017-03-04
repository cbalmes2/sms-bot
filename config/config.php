<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="GX-CHATBOT";
$projectEmail="cbalmes2@gmail.com";
$projectPhoneNumber="8479773542";


// Twilio API credentials
$accountSid = "AC310cf67c26b76b0400470356d6bc188e";
$authToken = "20d2a49a395322fddf074e972f29a20d"; //
$twilioPhoneNumber = "8475581777";
$siteURL="https://gx-chatbot.herokuapp.com/";


// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = "gx-chatbot";
$slackBotName = "gx-chatbot"; //THE NAME OF YOUR BOT
$slackBotIcon = ":beer:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "THE DATABASE HOST ADDRESS";
$dbName = "THE DATABASE NAME";
$dbUserName = "THE DATABASE USERNAME";
$dbPassword = "THE DATABASE PASSWORD";
$dbTable = "THE NAME OF THE DATABASE TABLE";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n
$automatedResponseTeamSleeping ="n"; // options: y | n
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>
