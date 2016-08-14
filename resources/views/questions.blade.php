<?php
/**
 * Created by PhpStorm.
 * User: Tcheutchoua Steve
 * Date: 4/8/16
 * Time: 2:08 PM
 */
require_once('../lib/nusoap.php');

#$url = "http://www.diligentbilingual.org/resources/fyp/QuestionsServer.php?wsdl";
$url = "http://localhost/fyp/QuestionsServer.php?wsdl";
$client = new nusoap_client($url, true);

$error  = $client->getError();

if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";

}

$result = $client->call('getAllCategories');

if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
} else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    } else {
        echo "<h2>Main</h2>";
        echo $result;
    }
}
var_dump($client->__getFunctions());
var_dump($client->__getTypes());
var_dump($result);
