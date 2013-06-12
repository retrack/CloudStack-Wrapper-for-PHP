<?php
require('CloudStack/cloudStack.php');

$apiUrl = 'https://api.ninefold.com/compute/v2.0'; //Ninefold's API Point
$api_key = 'yourkey';
$api_secret = 'yoursecret';
$ninefold = new cloudStack($apiUrl, $api_key, $api_secret);

//You can ask the wrapper to only return the signed request so you can do what you like with it or test it out
$ninefold->return_signed_only = true;
//It is set to true, so all subsequent $ninefold-> actions will return a URL only and not actually cURL the results for you.

//listProjects
$ninefold->execute_command('listProjects');

//List All my VMs in Ninefold 2 (Requires you pass projectid)
$ninefold->execute_command('listVirtualMachines', array('projectid' =>'<yourProjectID>');

//Execute Command - The wrapper has a lot of functions already prebuilt, but you can use this to extend it dynamically and let the wrapper handle the signing and execution.
$ninefold->execute_command('updateVirtualMachine', array('id' => 1));

//Execute Command Method compared with Defined Method
/** Creating a Volume **/
$ninefold->createVolume('My New Volume');
$ninefold->execute_command('createVolume', array('name' => 'My New Volume'));
/** Both above commands will do the exact same thing **/

//Forget what the wrapper can or can't do? Execute this or check cloudStack.php
listCloudStackMethods();

?>