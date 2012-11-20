<?php
require('CloudStack/cloudStack.php');

$apiUrl = 'https://api.ninefold.com/compute/v1.0/'; //Ninefold's API Point
$api_key = 'yourkey';
$api_secret = 'yoursecret';
$ninefold = new cloudStack($apiUrl, $api_key, $api_secret);

//List All my VMs in Ninefold
$ninefold->listVirtualMachines();

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