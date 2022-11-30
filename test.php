<?php

$request = new HttpRequest();

$request->setUrl('http://localhost:9000/');

$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(

   ‘cache-control’ => ‘no-cache’,

   ‘content-type’ => ‘text/xml’));

$request->setBody(‘ Request XML‘);

try 
{   
	$response = $request->send();
	echo $response->getBody();

} 
catch (HttpException $Msg_ex)
{ 
	echo $Msg_ex;   
}    
?>