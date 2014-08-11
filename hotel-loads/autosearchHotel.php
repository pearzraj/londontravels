<?php

$TERM = trim($_GET['term']);

$searchflag =0;

$locationRESULT = searchForLocation($TERM);

//$hotelRESULT = searchForHotel($TERM);
//$RESULT = array_merge((array)$locationRESULT, (array)$hotelRESULT);
//print_r($RESULT);
echo json_encode($locationRESULT);


/************Location Country/City Search STARTS***********************/
function searchForLocation($TERM) 
{

	$reader = new XMLReader();
	//$reader->open('offlineData/countries.xml');
	$reader->open('../formatedData/formatedCities.xml');
		while ($reader->read()) {
			if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'City') {
				$node = $reader->expand();
				
				 if (stripos((string)$node->nodeValue, $TERM) !== false)
					$RESULT[] = array( 'label' => (string)$node->nodeValue, 'id' => (string)$reader->getattribute('id'),  'code' => (string)$reader->getattribute('code'), 'type' => "City");	
						
					
				
		}
	}

return $RESULT;
//print_r($RESULT);
}
/************Location Country/City Search ENDS***********************/


/************Hotel Search STARTS***********************/
function searchForHotel($TERM) 
{

	$reader = new XMLReader();	
	$reader->open('../formatedData/formatedHotels.xml');
		while ($reader->read()) {
			if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'Name') {
				$node = $reader->expand();
				 	 if (stripos((string)$node->nodeValue, $TERM) !== false)
					$RESULT[] = array( 'label' => (string)$node->nodeValue, 'code' => (string)$reader->getattribute('id'), 'type' => "Hotel");						
				
		}
	}

return $RESULT;
//print_r($RESULT);
}
/************Hotel Search ENDS***********************/
?>
