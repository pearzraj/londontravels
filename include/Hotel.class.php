<?php

class mySoap extends SoapClient 
{ 
    public function __doRequest($request, $location, $action, $version, $one_way = 0) 
    { 
        $result = parent::__doRequest($request, $location, $action, $version, $one_way); 
        $result = str_replace('<key xsi:type="xsd:int">', '<key xsi:type="xsd:string">', $result); 
		
        return $result; 
    } 
} 


function DoRequest($xml_post_string)
{
//Data, connection, auth
        $dataFromTheForm = $_POST['fieldName']; // request data from the form
        $soapUrl = "https://cert-api.travelstreet.com/ProviderApiHotels/OpenTravelAlliance/HotelService.svc"; // asmx URL of WSDL
        $soapUser = "username";  //  username
        $soapPassword = "password"; // password
		
		 $headers = array(
                        "Content-type: text/xml;charset=\"utf-8\"",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache",
                        "SOAPAction: http://www.examples.com/HotelService/IHotelService/Availability", 
                        "Content-length: ".strlen($xml_post_string),
                    ); //SOAPAction: your op URL

            $url = $soapUrl;

            // PHP cURL  for https connection with auth
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
            //curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            // converting
			$response = curl_exec($ch);
			 curl_close($ch);
	return $response;		
}			

?>