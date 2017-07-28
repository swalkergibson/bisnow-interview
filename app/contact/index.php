<?php

$response = array(
    'name' => 'Shane Gibson',
    'address' => '2607 S. Jentilly Ln.',
    'city' => 'Tempe',
    'state' => 'AZ',
    'zip' => '85282',
    'phone' => '(480) 221-7664',
    'email' => 'swalkergibson@gmail.com'
);
echo json_encode($response);
//echo $_POST['contactInformation'];
