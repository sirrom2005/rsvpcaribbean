<?php
// Set sandbox (test mode) to true/false.
$sandbox = false; 
// Set PayPal API version and credentials.
$api_version  = '85.0';
$api_endpoint = $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
$api_username = $sandbox ? 'sirrom2005_api1.gmail.com' : 'admin_api1.rsvpcaribbean.com';
$api_password = $sandbox ? 'TXBRQ5XHHHFN4FQY' : 'KB39DGJ5RF2R7YYX';
$api_signature= $sandbox ? 'AyG5BJwWSPIjIkcZcnlcQLdUoXZcAnuAwWUuIEROq4biRtjSrUULSz5D' : 'A583xZKEqm0ToWbP2506dLpEWVtlACMlUpOBo3ksa9E0hZDkN6DslHPQ';

// Store request params in an array
$request_params = array
                    (
                    'METHOD'        => 'DoDirectPayment', 
                    'USER'          => $api_username, 
                    'PWD'           => $api_password, 
                    'SIGNATURE'     => $api_signature, 
                    'VERSION'       => $api_version, 
                    'PAYMENTACTION' => 'Sale',                   
                    'IPADDRESS'     => filter_input(INPUT_SERVER, 'REMOTE_ADDR'),
                    'CREDITCARDTYPE'=> filter_input(INPUT_POST, 'cc_type'), 
                    'ACCT'          => filter_input(INPUT_POST, 'cc_number'),                        
                    'EXPDATE'       => filter_input(INPUT_POST, 'cc_expire_month').filter_input(INPUT_POST, 'cc_expire_year'),           
                    'CVV2'          => filter_input(INPUT_POST, 'cc_cvv2'), 
                    /*'FIRSTNAME'     => $_SESSION['APPLICATION_FORM']['APPLICATION']['firstname'], 
                    'LASTNAME'      => $_SESSION['APPLICATION_FORM']['APPLICATION']['lastname'], 
                    'STREET' => '707 W. Bay Drive', 
                    'CITY' => 'Largo', 
                    'STATE' => 'FL',                     
                    'COUNTRYCODE' => 'US', 
                    'ZIP' => '33770', */
                    'AMT'           => '1.00', 
                    'CURRENCYCODE'  => 'USD', 
                    'DESC'          => 'Testing Payments Pro'
                    );

// Loop through $request_params array to generate the NVP string.
$nvp_string = '';
foreach($request_params as $var=>$val)
{
    $nvp_string .= '&'.$var.'='.urlencode($val);    
}
//echo $nvp_string.' ----- ';
// Send NVP string to PayPal and store response
$curl = curl_init();
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_URL, $api_endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $nvp_string);

$result = NVPToArray(curl_exec($curl));     
curl_close($curl);

//echo "<pre>--"; print_r($result);echo "</pre>"; 
// Function to convert NTP string to an array
function NVPToArray($NVPString)
{
    $proArray = array();
    while(strlen($NVPString))
    {
        // name
        $keypos= strpos($NVPString,'=');
        $keyval = substr($NVPString,0,$keypos);
        // value
        $valuepos = strpos($NVPString,'&') ? strpos($NVPString,'&'): strlen($NVPString);
        $valval = substr($NVPString,$keypos+1,$valuepos-$keypos-1);
        // decoding the respose
        $proArray[$keyval] = urldecode($valval);
        $NVPString = substr($NVPString,$valuepos+1,strlen($NVPString));
    }
    return $proArray;
}

/*TIMESTAMP
CORRELATIONID
STATUS
AMT
CURRENCYCODE
TRANSACTIONID
ERR1
ERR2
ERR3
 * 
$ACK['Success']
$ACK['SuccessWithWarning']
$ACK['Failure']
$ACK['FailureWithWarning']*/