<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Stratford Travel</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="Stratford Travel offers comprehensive travel services" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->

<link href="assets/css/style-start.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style1.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-multi-select/css/multi-select.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link href="assets/plugins/ion.rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/ion.rangeslider/css/ion.rangeSlider.Metronic.css" rel="stylesheet" type="text/css"/>

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="asset/chanhiconny/styleicon.css" rel="stylesheet" type="text/css">

<!-- Choose Layout -->
<link href="css/layout-semiboxed.css" rel="stylesheet">

<!-- Choose Skin -->
<link href="css/skin-red.css" rel="stylesheet">
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body  class="off">
<div class="cbp-fbscroller wrapbox"> 
  
  <!-- TOP AREA
================================================== --> 
  
  <!-- /.toparea end--> 
  <!-- NAV
================================================== -->
  <nav class="navbar navbar-fixed-top wowmenu" role="navigation">
    <div class="container">
      <div class="navbar-header"> <a class="navbar-brand logo-nav" href="index.html"><i class="icon-stlogo" aria-hidden="true"></i><i class="icon-smilelogo" aria-hidden="true"></i>
        <p>If you dont have a travel <br/>
          agent
          you're on your own</p>
        </a> </div>
      <ul id="nav" class="nav navbar-nav pull-right">
        <li class="hline">
          <div class="pack-icon-text"><i class="icon-iata-logo" aria-hidden="true"></i><i class="icon-abta-logo" aria-hidden="true"></i><i class="icon-atol-logo" aria-hidden="true"></i> </div>
        </li>
        <li class="iconstat hline"> <a href="#" ><span class="icon-stratlogo" aria-hidden="true"></span><span class="icon-travel" aria-hidden="true"></span> <i class="icon-caret-down"></i></a> </li>
        <li class="dropdown hline"> <a href="#">Product Offerrings<i class="icon-caret-down"></i></a> </li>
        <li class="dropdown hline"> <a href="#">Destinations<i class="icon-caret-down"></i></a> </li>
        <li class="dropdown hline"><a href="#" class="dropdown-toggle login-me" data-toggle="dropdown">Login</a>
          <div class="dropdown-menu login-box" id="top-links">
            <div class="links">
              <div class="login_link">
                <ul>
                  <li class=""><a href="#" title="Sign up">Sign up</a></li>
                  <li class=""><a href="#" title="My Account">My Account</a></li>
                  <li class="last"><a href="#" title="My Wishlist">My Wishlist</a></li>
                </ul>
              </div>
              <form method="post" action="#">
                <div class="content">
                  <ul class="form-list">
                    <li>
                      <label class="required" for="email"><em>*</em>Email Address</label>
                      <div class="input-box">
                        <input type="text" autocomplete="OFF" title="Email Address" class="input-text required-entry validate-email" id="email" value="" name="login[username]">
                      </div>
                    </li>
                    <li>
                      <label class="required" for="pass"><em>*</em>Password</label>
                      <div class="input-box">
                        <input type="password" autocomplete="OFF" title="Password" id="pass" class="input-text required-entry validate-password" name="login[password]">
                      </div>
                    </li>
                  </ul>
                  <p class="required">* Required Fields</p>
                </div>
                <div class="registered-users">
                  <div class="buttons-set"> <a class="f-right hidden-320 hidden-480"  href="#">Forgot Your Password?</a>
                    <button id="send2" name="send" title="Login" class="btn red" type="submit">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </li>
        <li class="iconstat2 hidden-320 hidden-480">
          <div class="info-top"> <span class="bo-phone"> <i class="icon-phone-2" aria-hidden="true"></i> <em>+44 (207) 993 9393</em> </span> <span class="icon-text"> <i class="icon-envelope" aria-hidden="true"></i> <em>info@stratfordtravel.com</em> </span> </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /nav end--> 
  
  <!-- /.intro-note end--> 
  <!-- SERVICE BOXES
================================================== --> 
  
  <!-- /.service-box end--> 
  
  	<?php
		include("include/MyProject-library.php");
		list($location_name, $location_ID, $country_ID, $location_type) = explode("%",$_GET['HLocation']);
		echo $location_ID;
					
					//echo'offlineData/Hotels/'.$country_ID.'/'.$location_ID.'.xml';
				
		$reader = new XMLReader();				
		$reader->open('offlineData/Hotels/'.$country_ID.'/'.$location_ID.'.xml');
				 
		$HotelCount = 0;
		while ($reader->read()) {
			if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'POICode') {
				 $node = $reader->expand();
				 /*$dom = new DomDocument();
				 $n = $dom->importNode($node,true);
				 $dom->appendChild($n);
				 $city_xml = simplexml_import_dom($n);	*/
							 
				$HotelPOICODES[] =  (string)$node->nodeValue;		
				$HotelCount++;
				
				/****To Collect Hotel Details STARTS****/
				$HDreader = new XMLReader();				
				$HDreader->open('offlineData/Hotels/'.$country_ID.'/'.$location_ID.'.xml');
						 
				
				$HDreader = new XMLReader();				
				$HDreader->open('offlineData/HotelDetails/'.$country_ID.'/'.$location_ID.'/'.(string)$node->nodeValue.'.xml');						 
				
				while ($HDreader->read()) {
					if ($HDreader->nodeType == XMLReader::ELEMENT && $HDreader->name == 'Hotel') {
						 $HDnode = $HDreader->expand();
						 $dom = new DomDocument();
						 $n = $dom->importNode($HDnode,true);
						 $dom->appendChild($n);
						 $hotel_xml = simplexml_import_dom($n);	
						
						$HOTELNAME = trim_CDATA($hotel_xml->Name);
						$ADDRESS1 = trim_CDATA($hotel_xml->Address->Address1);
						$ADDRESS2 = trim_CDATA($hotel_xml->Address->Address2);
						$CITYNAME = trim_CDATA($hotel_xml->Address->CityName);
						
						$SHORTDESC = trim_CDATA($hotel_xml->Descriptions->ShortDescriptions->ShortDescription[0])."<br />";
						$SHORTDESC .= trim_CDATA($hotel_xml->Descriptions->ShortDescriptions->ShortDescription[1])."<br />";
						$IMAGE1= trim_CDATA($hotel_xml->Images->Image);
						
						if($hotel_xml->Facilities->Facility)
						{
							$FACILITIES = trim_CDATA($hotel_xml->Facilities->Facility[0]->Name)." - ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[0]->Description).", ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[1]->Name)." - ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[1]->Description).", ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[2]->Name)." - ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[2]->Description).", ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[3]->Name)." - ";
							$FACILITIES .= trim_CDATA($hotel_xml->Facilities->Facility[3]->Description);
						}
						else
							$FACILITIES = "N/A";
						
						//echo 	$HOTELNAME."<br />\n"; 		 
							$HOTELS[] = array( 'HOTELNAME' => $HOTELNAME, 'ADDRESS1' => $ADDRESS1, 'ADDRESS2' => $ADDRESS2,  'CITYNAME' => $CITYNAME, 'IMAGE1' => $IMAGE1,  'SHORTDESC' => $SHORTDESC, 'FACILITIES' => (string)$FACILITIES);		
							
							
						}			
					}
				
			}			
		}
		//echo $HotelCount;	
		
		?>
  
  
  
  <!-- RECENT WORK
================================================== -->
  <section class="home-product">
    <div class="bgarea-bgarea-product-whitee phandau">
      <div class="container">
        <div class="page-sidebar-wrapper">
          <div class="page-sidebar">
            <div class="portlet box darker">
              <div class="panel-group accordion" id="accordion2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_1"> <i class="icon-plane"></i>Flight <span class="mine"></span> </a> </h4>
                  </div>
                  <div id="collapse_2_1" class="panel-collapse collapse">
                    <div class="panel-body form-flight"> 
                      
                      <!-- BEGIN FORM-->
                      <form action="#" id="form_sample_3" class="form-horizontal">
                        <div class="form-body">
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="Option 1">Hospitalet De Llobregat, Spain</option>
                                <option value="Option 2">Hong Kong, Hong Kong</option>
                                <option value="Option 3">Chiclana Sancti Petri, Spain</option>
                                <option value="Option 4">Ho Chi Minh, Vietnam</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="Option 1">Houston George Bush Intercontinental</option>
                                <option value="Option 2">Madrid Barajas, Madrid, Spain (MAD)</option>
                                <option value="Option 3">London Heathrow, London, United Kingdom (LHR)</option>
                                <option value="Option 4">Montr�al-Pierre Elliott Trudeau International Airport, Laval</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="input-group input-medium date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                <input type="text" class="form-control" name="from" placeholder="25/10/2015">
                                <span class="input-group-addon"> </span>
                                <input type="text" class="form-control" name="to" placeholder="25/10/2016">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12 note-text"> Passengers </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="Option 1">Adults 2</option>
                                <option value="Option 2">Adults 3</option>
                                <option value="Option 3">Adults 4</option>
                                <option value="Option 4">Adults 4</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="">0 Children</option>
                                <option value="Option 1">1 Children</option>
                                <option value="Option 2">2 Children</option>
                                <option value="Option 3">3 Children</option>
                                <option value="Option 4">4 Children</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12 text-left">
                              <button type="submit" class="btn red">Show Price</button>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      
                    </div>
                  </div>
                </div>
				
				
                <div class="panel panel-default">
                  <div class="panel-heading top-bor">
                    <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_2"> <i class="icon-hospital"></i>Hotel <span class="mine2"></span> </a> </h4>
                  </div>
                  <div id="collapse_2_2" class="panel-collapse in">
                    <div class="panel-body form-flight"> 
                      
                      <!-- BEGIN FORM-->
                      <form action="#" id="form_sample_3" class="form-horizontal">
                        <div class="form-body">
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                              <!--  <option value="Option 1">Ho Chi Minh, Vietnam</option>
                                <option value="Option 2">Hong Kong, Hong Kong</option>
                                <option value="Option 3">Chiclana Sancti Petri, Spain</option>
                                <option value="Option 4">Ho Chi Minh, Vietnam</option>-->
								<?php
									foreach($HOTELS as $HOTEL)
										echo "<option value='Option 4'>".$HOTEL['HOTELNAME']."</option>";
								?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="input-group input-medium date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                <input type="text" class="form-control" name="from" placeholder="25/10/2015">
                                <span class="input-group-addon"> </span>
                                <input type="text" class="form-control" name="to" placeholder="25/10/2016">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12 note-text"> Passengers </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="Option 1">Adults 2</option>
                                <option value="Option 2">Adults 3</option>
                                <option value="Option 3">Adults 4</option>
                                <option value="Option 4">Adults 4</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="Option 1">1 Children</option>
                                <option value="Option 2">2 Children</option>
                                <option value="Option 3">3 Children</option>
                                <option value="Option 4">4 Children</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="checkbox-list" data-error-container="#form_2_services_error">
                                <label> <i class="icon-plus"></i> <a class="hover-add" href="#">Add another room </a></label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12 text-left">
                              <button type="submit" class="btn red">Show Price</button>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading top-bor">
                    <h4 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_3"> <i class="icon-book"></i>Others Services<span class="mine3"></span> </a> </h4>
                  </div>
                  <div id="collapse_2_3" class="panel-collapse collapse">
                    <div class="panel-body form-flight"> 
                      
                      <!-- BEGIN FORM-->
                      <form action="#" id="form_sample_3" class="form-horizontal">
                        <div class="form-body">
                          <div class="form-group">
                            <div class="col-md-12">
                            <select id="form_2_select2" class="form-control select2me" name="options2">
                                <option value="">Choose service</option>
                                <option value="Option 1">Airport Transfer</option>
                                <option value="Option 2">Hong Kong, Hong Kong</option>
                                <option value="Option 3">Chiclana Sancti Petri, Spain</option>
                                <option value="Option 4">Ho Chi Minh, Vietnam</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Input Your Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                               <input type="text" class="form-control" placeholder="Input Your Contact #">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Input Your Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <textarea class="form-control" rows="2" placeholder="Add your comment here!"></textarea>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-md-12 text-left but-fot">
                              <button class="btn red" type="submit">Submit</button>  <a  href="#" class="mana-tic">Reset</a>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions fluid">
                <div class="col-md-12 nopadleft nopadright but-fot">
                  <button type="submit" class="btn blue" data-toggle="modal" href="#basic">Send this search to my email</button>
                </div>
              </div>
            </div>
            
            <!--line2-->
            <div class="portlet box darker fliter">
              <div class="panel-heading head">
                <h4 class="panel-title-head"> Filter by: </h4>
              </div>
              <div class="panel-group accordion" id="accordion3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title miso"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1">Price<span class="minea"></span> </a> </h4>
                  </div>
                  <div id="collapse_3_1" class="panel-collapse in">
                    <div class="panel-body form-flight"> 
                      
                      <!-- BEGIN FORM-->
                      <form action="#" id="form_sample_3" class="form-horizontal">
                        <div class="form-body">
                          <div class="form-group">
                            <div class="col-md-12">
                              <input id="range_2" type="text" name="range_2" value="100;1000" data-type="double" data-step="200" data-postfix=" &euro;" data-from="100" data-to="9000" data-hasgrid="true"/>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title miso"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2"> Payment <span class="mine2a"></span> </a> </h4>
                  </div>
                  <div id="collapse_3_2" class="panel-collapse collapse">
                    <div class="panel-body form-flight"> 
                      
                      <!-- BEGIN FORM-->
                      <form action="#" id="form_sample_8" class="form-horizontal">
                        <div class="form-body">
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="checkbox-list" data-error-container="#form_2_services_error">
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Aeroflot </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Air China </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  All Nippon Airways</label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Cathay Pacific Airways </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Emirates </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Qantas Airways </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Turkish Airlines </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Vietnam Airlines </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title miso"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3"> Star Ratings <span class="mine3a"></span> </a> </h4>
                  </div>
                  <div id="collapse_3_3" class="panel-collapse collapse">
                    <div class="panel-body form-flight"> 
                      
                      <!-- BEGIN FORM-->
                      <form action="#" id="form_sample_13" class="form-horizontal">
                        <div class="form-body">
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="checkbox-list">
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Aeroflot </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  Direct </label>
                                <label>
                                  <input type="checkbox" value="1" name="service"/>
                                  1 stops</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions fluid">
                <div class="col-md-12 nopadleft nopadright but-fot"> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-content-wrapper">
          <div class="page-content list-search" style="min-height:600px">
            <div class="row">
              <div class="col-md-12"> 
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                
                <ul class="page-breadcrumb breadcrumb">
                  <li class="btn-group"> </li>
                  <li> <i class="fa fa-home"></i> <a href="index.html"> Home </a> <i class="fa fa-angle-right"></i> </li>
                  <li> <a class="active" href="#"> Hotel results </a> </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB--> 
              </div>
            </div>
			
		
				  
            <div class="row">
              <div class="col-md-12"> <strong class="head-mock1"><?php echo  $HotelCount." properties found in ". $location_name; ?></strong> </div>
            </div>
            <div class="row">
              <div class="col-md-12 nhom-nut">
                <div class="btn-group">
                  <button class="btn red dropdown-toggle" type="button" data-toggle="dropdown"> Price <i class="fa icon-caret-down"></i> </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="#"> Lowest Price First </a> </li>
                    <li> <a href="#"> Highest Price First </a> </li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn grey dropdown-toggle" type="button" data-toggle="dropdown"> Popularity <i class="fa icon-caret-down"></i> </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="#"> Most Popular First </a> </li>
                    <li> <a href="#"> Least Popular First </a> </li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn grey dropdown-toggle" type="button" data-toggle="dropdown"> Review Rating <i class="fa icon-caret-down"></i> </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="#">Customer Rating </a> </li>
                    <li> <a href="#"> TripAdvisor Rating </a> </li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn grey dropdown-toggle" type="button" data-toggle="dropdown"> Stars <i class="fa icon-caret-down"></i> </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="#">Lowest Star Rating First </a> </li>
                    <li> <a href="#">Highest Star Rating First </a> </li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn grey dropdown-toggle" type="button" data-toggle="dropdown"> Name <i class="fa icon-caret-down"></i> </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="#"> Sort A-Z </a> </li>
                    <li> <a href="#"> Sort Z-A </a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 nhom-nut2 pull-left">
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn grey dropdown-toggle">Display per page <i class="fa fa-angle-down"></i> </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="#"> 10 </a> </li>
                    <li> <a href="#"> 20 </a> </li>
                    <li> <a href="#"> 50 </a> </li>
                    <li> <a href="#"> 100 </a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 pull-right">
                <div class="text-right">
                  <ul class="pagination">
                    <li> <a href="#"> <i class="fa fa-angle-left"></i> </a> </li>
                    <li> <a href="#"> 1 </a> </li>
                    <li> <a href="#"> 2 </a> </li>
                    <li> <a href="#"> 3 </a> </li>
                    <li> <a href="#"> <i class="fa fa-angle-right"></i> </a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="results-wrap">
                  <div>
				  
				  <?php
				  	//print_r($HOTELS);	 	 
					
				  	$i=0;
					foreach($HOTELS as $HOTEL)
					{										
						
				  ?>
				  <!--Display Hotel Information STARTS-->
                    <div class="hotel-result-box clearfix">
                      <div class="row">
                       <!-- <div class="col-md-4 blog-img blog-tag-data"> <img class="img-responsive" alt="" src="assets/img/gallery/hotel-ibis-hermosillo.jpg"> </div>-->
					    <div class="col-md-4 blog-img blog-tag-data"> <img class="img-responsive" alt="" src="<?php echo $HOTEL['IMAGE1']; ?>"> </div>
                        <div class="col-md-8 hotel-article">
                          <h3> <a href="#"> <?php echo $HOTEL['HOTELNAME']; ?> </a>
                            <div class="pull-right"> <span class="rating"> <span class="star"></span> <span class="star"></span> </span> </div>
                          </h3>
                          <small class="review"> No reviews yet </small>
                          <div>
                            <div class="address"><span> <?php echo $HOTEL['ADDRESS1']; ?> <br />  <?php echo $HOTEL['ADDRESS2']; ?></span></div>
                            <span class="destination" title="Ho Chi Minh"><i class="fa fa-map-marker"></i> <?php echo $HOTEL['CITYNAME']; ?></span>
                            <div class="description"> 
								<span>
								<?php echo $HOTEL['SHORTDESC']; ?>
								Facilities : <?php echo (strcmp($HOTEL['FACILITIES'], "N/A")===0) ? "N/A" : $HOTEL['FACILITIES']; ?>
								</span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-md-12">
                        <div class="rooms-container row-fluid">
							  <div class="box-hotel-rom">
								<h4 class="selectroomsheader">Select your rooms</h4>
								<ul class="nav nav-pills">
									<li class="tab-li active">
									  <a  title="" data-toggle="tab" class="tab" href="#tab_3" data-roomindex="1">Room <span >1</span>
									  </a>
									</li>
								  
									<li class="tab-li">
									  <a  title="" data-toggle="tab" class="tab" href="#tab_4" data-roomindex="2">Room <span>2</span>
									  </a>
									</li>
								  </ul>
								<div class="tabbable">
								  
								  <div class="tab-content">
									<div  class="fade room-list tab-pane active in" id="tab_3">
									  <table class="table-condensed table table-bordered no-margins">
										<thead>
										  <tr>                
											<th class="room-type-header">
											  Room type
											</th>
											<th class="price-header text-right">                                
											  <span class="priceBreakdown"></span>
											  <span>
												<span class="line">Room price</span>
												<span class="line">per person</span>
											  </span>    
											</th>                
											
											<th class="price-header text-right">  
												<span>
												  <span class="line">Total price</span>
												</span>
							  
											</th>
											<th class="select-room-header">&nbsp;
											</th>
										  </tr>
										</thead>
										
										<tbody>
										  <tr>
											<td class="establishment-roomtype">
											  <div class="row-fluid">
												<div class="span12">
												  <span  class="text-head">Unknown</span>
												  <div class="boardType">Room Only</div>
												</div>
												
											  </div>
											</td>
											<td class="price text-right">                               
											  <span class="priceBreakdown"></span>
											  <span>
												<span>�641.08</span>
											  </span>
							
											</td>
											<td class="price text-right"> 
							
											  <span>                   
												<span>
												  <span>�1,923.25</span>
												</span>
											  </span>
											  
							
											</td>
											<td class="text-center">
											  <a class="roomselect btn red">Select   </a>
											 
											</td>
										  </tr>
										  
										
										  <tr>
											<td class="establishment-roomtype">
											  <div class="row-fluid">
												<div class="span12">
												  <span class="text-head">Superior Double Room, 2 Double Beds</span>
												  <div class="boardType">Room Only</div>
												</div>
												
											  </div>
											</td>
											<td class="price text-right hidden-phone"> 
											  <span>
												<span>�807.40</span>
											  </span>
											</td>
											<td class="price text-right">                         
											  <span>
												<span>�2,422.19</span>
											  </span>
											</td>
											<td class="text-center">
											  <a class="roomselect btn red" >Select    </a>
											  
											</td>
										  </tr>
										  
										</tbody>
									  </table>
									</div>
								  
									<div class="fade room-list tab-pane" id="tab_4">
									  <table class="table-condensed table table-bordered no-margins">
										<thead>
										  <tr>                
											<th class="room-type-header">
											  Room type
											</th>
							 
											<th class="price-header text-right">               
											  
											  <span>
												<span class="line">Room price</span>
												<span class="line">per person</span>
											  </span>   
											</th>                
											
											<th class="price-header text-right">                    
												<span>
												  <span>Total price</span>
												</span>  
											</th>
											<th class="select-room-header">&nbsp;
											</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td class="establishment-roomtype" >
											  <div class="row-fluid">
												<div class="span12">
												  <span class="text-head">Run Of The House 2 Pax (Best Room Available)</span>
												  <div class="boardType">Room Only</div>
												</div>
												
											  </div>
											</td>
											<td class="price text-right"> 
											  <span>
												<span>�842.19</span>
											  </span>
							
											</td>
											<td class="price text-right">                  
							
												<span>
												  <span >�1,684.38</span>
												</span>
											 </td>
											<td class="text-center">
											  <a class="roomselect btn red" >Select    </a>
											  
											</td>
										  </tr>              
										
										  <tr>
											<td class="establishment-roomtype" >
											  <div class="row-fluid">
												<div class="span12">
												  <span  class="text-head">Superior Double Room</span>
												  <div class="boardType">Room Only</div>
												</div>
												
											  </div>
											</td>
											<td class="price text-right">  
											  <span >
												<span >�964.40</span>
											  </span>
							
											</td>
											<td class="price text-right">                                
											  <span>
												<span>�1,928.80</span>
											  </span>
							
											</td>
											<td class="text-center">
											  <a class="roomselect btn red">Select    </a>
											  
											</td>
										  </tr>
										 
										</tbody>
									  </table>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							
                        </div>
                      </div>
                      <!--bot box--> 
                      
                    </div>
                  
				  <!--Display Hotel Information ENDS-->
				   <?php
				    
                   $i++;
				   if($i>2)
				   	break;
					}
                	?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pull-left"> </div>
              <div class="col-md-6 pull-right">
                <div class="text-right">
                  <ul class="pagination">
                    <li> <a href="#"> <i class="fa fa-angle-left"></i> </a> </li>
                    <li> <a href="#"> 1 </a> </li>
                    <li> <a href="#"> 2 </a> </li>
                    <li> <a href="#"> 3 </a> </li>
                    <li> <a href="#"> <i class="fa fa-angle-right"></i> </a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Email my results</h4>
                  </div>
                  <div class="modal-body">
                    <p>Please enter your email address and we will send you a link back to your search results to check live availability.</p>
                    <p>
                      <input type="text" style="width:320px"  placeholder="Enter your email address" id="searchEmailAddress" class="" title="This field is required." data-orig-title="">
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn blue">Send</button>
                  </div>
                </div>
                <!-- /.modal-content --> 
              </div>
              <!-- /.modal-dialog --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- /.wrapsemibox end--> 
  <!-- BEGIN FOOTER
================================================== -->
  <div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1 class="footerbrand"><span class="icon-stlogo" aria-hidden="true"></span><span class="icon-smilelogo" aria-hidden="true"></span></h1>
            <h2 class="footerbrand moisoi"><span class="icon-stratlogo" aria-hidden="true"></span><span class="icon-travel" aria-hidden="true"></span></h2>
            <ul class="social-iconsme list-soc">
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#"><i class="icon-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
            <div class="footermap">
              <p> <strong>Address: </strong> Unit 6 IBEX House,  3 Forest Lane <br/>
                Stratford, London, E15 1HA </p>
              <p> <strong>Phone: </strong>+44 (207) 993 9393</p>
              <p> <strong>Email: </strong> info@stratforstravel.com </p>
            </div>
          </div>
          <div class="col-md-5 linkfot"> &ldquo;All the flights and flight-inclusive holidays on this website - as
            appropriate are financially protected by the ATOL scheme. When you pay you
            will be supplied with an ATOL Certificate. Please ask for it and check to ensure
            that everything you booked (flights, hotels and other services) is listed on it.
            Please see our booking conditions for further information or for more
            information about financial protection and the ATOL Certificate go to: <a href="#">www.atol.org.uk/ATOLCertificate</a>&rdquo;
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="footermenu pull-left">
              <li><a href="#">ABOUT US</a></li>
              <li><a href="#">CONTACT US</a></li>
              <li><a href="#">PRIVACY POLICY</a></li>
              <li><a href="#">terms & conditions</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <p class="pull-right"> &copy;  Stratford travel 2014. Powered by GPRTech Services India Pvt Ltd. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /footer section end--> 
</div>
<div class="clearfix"> </div>

<!-- END FOOTER --> 
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --> 
<!-- BEGIN CORE PLUGINS --> 
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]--> 
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script> 
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script> 
<!-- END CORE PLUGINS --> 
<!-- BEGIN PAGE LEVEL PLUGINS --> 

<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script> 
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script> 
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script> 
<script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script> 
<script src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script> 
<script src="assets/plugins/ion.rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script> 

<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL STYLES --> 
<script src="js/plugins.js"></script> 
<script src="js/common.js"></script> 
<script src="js/jquery.backstretch.js"></script> 
<script src="js/modernizr.custom.79639.js"></script> 
<script src="assets/scripts/app.js"></script> 
<script src="assets/scripts/components-ion-sliders.js"></script> 
<script src="assets/scripts/form-validation.js"></script> 
<script src="assets/scripts/form-components.js"></script> 
<!-- END PAGE LEVEL STYLES --> 
<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   ComponentsIonSliders.init();
   FormComponents.init();
   FormValidation.init();
   
});
</script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>