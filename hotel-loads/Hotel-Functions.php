<?php
$location_URL = 'https://cert-api.travelstreet.com/ProviderApiHotels/OpenTravelAlliance/HotelService.svc'; //write_your_location_url.asmx
$action_URL = 'http://www.examples.com/HotelService/IHotelService/Availability'; //write_your_action_to_perform_url.asmx

class mySoap extends SoapClient 
{ 
    public function __doRequest($request, $location, $action, $version, $one_way = 0) 
    { 
        $result = parent::__doRequest($request, $location, $action, $version, $one_way); 
        $result = str_replace('<key xsi:type="xsd:int">', '<key xsi:type="xsd:string">', $result); 
		
        return $result; 
    } 
} 

 $client = new mySoap(null, array(
'location' => $location_URL,
'uri'      => "",
'trace'    => 1,
));


function OTA_HotelAvailRequest($location_ID, $HIn_Date, $HOut_Date, $GuestOptions1, $GuestOptions2)
{
$HIn_Date = date("Y-m-d", strtotime(str_replace('/', '-', $HIn_Date)));
$HOut_Date = date("Y-m-d", strtotime(str_replace('/', '-', $HOut_Date)));

$xmlData = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns="http://www.opentravel.org/OTA/2003/05">
   <soapenv:Header/>
   <soapenv:Body>
      <OTA_HotelAvailRQ PrimaryLangID="eng" Version="6.002" TargetName="Gateway" Target="Test" TimeStamp="2014-03-27T09:07:55.3577559Z" TransactionIdentifier="a9eb90412d1447d1a3bc0ddd25715a4e" CorrelationID="d6acaa33b8c04e81b2aba8c7a3becfd8" RequestedCurrency="EUR" xmlns="http://www.opentravel.org/OTA/2003/05">
         <POS>
            <Source ISOCountry="BE" ISOCurrency="EUR">
               <RequestorID Type="1" ID="26683" MessagePassword="59L5E" URL="cert-api.travelstreet.com">
                  <CompanyName CompanyShortName="Stratford Travel" Code="20110568" CountryCode="GB"/>
               </RequestorID>
            </Source>
         </POS>
         <AvailRequestSegments>
            <AvailRequestSegment>
               <HotelSearchCriteria>
                  <Criterion>
                     <StayDateRange Start="'.$HIn_Date.'" End="'.$HOut_Date.'"/>
                     <RoomStayCandidates>
                        <RoomStayCandidate Quantity="1">
                           <GuestCounts IsPerRoom="true">
                               <GuestCount ResGuestRPH="1" AgeQualifyingCode="10" Count="'.$GuestOptions1.'"/>
                              <!--<GuestCount ResGuestRPH="2" AgeQualifyingCode="8" Count="1" Age="4"/>
                              <GuestCount ResGuestRPH="3" AgeQualifyingCode="7" Count="1" Age="1"/>-->
                           </GuestCounts>
                        </RoomStayCandidate>
                     </RoomStayCandidates>
                     <TPA_Extensions>
                        <GatewayHotelCityCode>'.$location_ID.'</GatewayHotelCityCode>
                        <!--<GuestCountCountry ResGuestRPH="1">BE</GuestCountCountry>-->
                     </TPA_Extensions>
                  </Criterion>
               </HotelSearchCriteria>
            </AvailRequestSegment>
         </AvailRequestSegments>
      </OTA_HotelAvailRQ>
   </soapenv:Body>
</soapenv:Envelope>';


/* $client = new mySoap(null, array(
'location' => $location_URL,
'uri'      => "",
'trace'    => 1,
));

$response = $client->__doRequest($xmlData,$location_URL,$action_URL,1);*/	

/******* To Access global variables using $GLOBAL[] *******/

global $client;
$response = $client->__doRequest($xmlData,$GLOBALS['location_URL'],$GLOBALS['action_URL'],1);

//echo $GLOBALS['location_URL'];
return $response;
}	

?>
		 
		