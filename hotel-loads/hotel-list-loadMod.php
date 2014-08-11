<?php
//print_r($_POST);
@session_start();
//print_r($_SESSION['HOTELS']);
$HOTEL = $_SESSION['HOTELS'];

if(isset($_POST['perPage']))
$perPage = $_POST['perPage'];
else
$perPage = 10;

$no_Pages = ((int)(sizeof($HOTEL)/$perPage))+1;

//echo $no_Pages;



if(isset($_POST['page']))
{

$page = $_POST['page'];

$startRec = ($perPage * ($page-1));  // ( 10 * (2-1)) for 2nd page startRec = 10
$endRec =  (sizeof($HOTEL) >= ($perPage * $page) ) ? ($perPage * $page) : sizeof($HOTEL);
}
else
{
$page = 1;
$startRec = 0;
$endRec = (sizeof($HOTEL) >= $perPage) ? $perPage : sizeof($HOTEL);
}

//echo $page;

if(!isset($_POST['Filter']))
$Filter = "Price";
else
$Filter = $_POST['Filter'];

$UpdatedHash = "#Filter=".$Filter."&perPage=".$perPage."";
?>

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
                    <li> <a href="<?php echo "#perPage=10"; ?>"> Sort A-Z </a> </li>
                    <li> <a href="<?php echo "#perPage=10"; ?>"> Sort Z-A </a> </li>
                  </ul>
                </div>
              </div>
            </div>
			

<div class="row">
              <div class="col-md-6 nhom-nut2 pull-left">
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn grey dropdown-toggle">Display per page <i class="fa fa-angle-down"></i> </button>
                  <ul class="dropdown-menu" id="perPage" role="menu">
				  	<li> <a href="<?php echo "#perPage=5"; ?>"> 5 </a> </li>
                    <li> <a href="<?php echo "#perPage=10"; ?>"> 10 </a> </li>
                    <li> <a href="<?php echo "#perPage=20"; ?>"> 20 </a> </li>
                    <li> <a href="<?php echo "#perPage=50"; ?>"> 50 </a> </li>
                    
                  </ul>
                </div>
              </div>
              <div class="col-md-6 pull-right">
                <div class="text-right">
                  <ul class="pagination">
				  <?php
                    echo "<li> <a href='".$UpdatedHash ."&page=".(($_POST['page'] > 1) ? $_POST['page']-1 : $_POST['page'])."'> <i class='fa fa-angle-left'></i> </a> </li>";
					
					for($p=1;$p<=$no_Pages;$p++)
					{
                    	echo "<li ".(($_POST['page'] == $p) ? "class='active'" : '' )."> <a href='".$UpdatedHash ."&page=".$p."'>".$p." </a> </li>";
                    }
					
                    echo "<li> <a href='".$UpdatedHash ."&page=".(($_POST['page'] < $no_Pages) ? $_POST['page']+1 : $_POST['page'])."'> <i class='fa fa-angle-right'></i> </a> </li>";
					?>
                  </ul>
                </div>
              </div>
            </div>
			
            <div class="row">
              <div class="col-md-12">
                <div class="results-wrap">
                  <div>
				  

		<?php
		  for($i=$startRec; $i<$endRec;$i++)
			{
			$HotelURL = "./list-search-hotel-detail.php?CountryCode=".$HOTEL[$i]['CountryCode']."&LocationID=".$HOTEL[$i]['LocationID']."&HotelCode=".$HOTEL[$i]['HotelCode'];
		 ?>     
				  <!--Display Hotel Information STARTS-->
                    <div class="hotel-result-box clearfix">
                      <div class="row">
                       <!-- <div class="col-md-4 blog-img blog-tag-data"> <img class="img-responsive" alt="" src="assets/img/gallery/hotel-ibis-hermosillo.jpg"> </div>-->
					    <div class="col-md-4 blog-img blog-tag-data"> <a href="<?php echo $HotelURL; ?>">  <img class="img-responsive" alt="" src="<?php echo $HOTEL[$i]['IMAGE1']; ?>" width="220" height="90"> </a></div>
                        <div class="col-md-8 hotel-article">
                          <h3> <a href="<?php echo $HotelURL; ?>"> <?php echo $HOTEL[$i]['HOTELNAME']; ?> </a>
                            <div class="pull-right"> <span class="rating"> <span class="star"></span> <span class="star"></span> </span> </div>
                          </h3>
                          <small class="review"> No reviews yet </small>
                          <div>
                            <div class="address"><span> <?php echo $HOTEL[$i]['ADDRESS1']; ?> <br />  <?php echo $HOTEL[$i]['ADDRESS2']; ?></span></div>
                            <span class="destination" title="Ho Chi Minh"><i class="fa fa-map-marker"></i> <?php echo $HOTEL[$i]['CITYNAME']; ?></span>
                            <!--<div class="description"> 
								<span>
								<?php echo $SHORTDESC; ?>
								Facilities : <?php echo (strcmp($HOTEL['FACILITIES'], "N/A")===0) ? "N/A" : $HOTEL['FACILITIES']; ?>
								</span> </div>-->
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-md-12">
                        <div class="rooms-container row-fluid">
							  <div class="box-hotel-rom">
								<h4 class="selectroomsheader">Select your rooms</h4>
								<ul class="nav nav-pills">
								
									<?php
									 $ROOMS = explode(" ",$HOTEL[$i]['RoomStayRPH']);
									 for($x=0;$x<sizeof($ROOMS);$x++)
									 {
									 	if($x==0)
										 	$TABACTIVE = "active";
										else
											$TABACTIVE = "";
											
										echo "<li class='tab-li ".$TABACTIVE."'>
									  		<a  title='' data-toggle='tab' class='tab' href='#tab_".$HOTEL[$i]['HotelCode']."".($x+1)."' data-roomindex='".($x+1)."'>Room <span >".($x+1)."</span></a>
											</li>";
								  	}
									?>
									<!--<li class="tab-li active">
									  <a  title="" data-toggle="tab" class="tab" href="#tab_4" data-roomindex="2">Room <span>2</span>
									  </a>
									</li>-->									
								  </ul>
								<div class="tabbable">
								  
								  <div class="tab-content">
								  <?php
								  	
									 $RoomNPrice = $HOTEL[$i]['RoomNPrice'];
									 //print_r($RoomNPrice);							
									for($x=0;$x<sizeof($RoomNPrice);$x++)
									 {				
									list($roomRPH, $roomPRICE, $roomTYPE) = explode(">", $RoomNPrice[$x]);
									if($x==0)
										 	$TABACTIVE = "active in";
										else
											$TABACTIVE = "";
									?>	
									<div  class="fade room-list tab-pane <?php echo $TABACTIVE; ?>" <?php echo "id=tab_".$HOTEL[$i]['HotelCode']."".($x+1).""; ?>>
									  <table class="table-condensed table table-bordered no-margins">
										<thead>
										  <tr>                
											<th class="room-type-header">
											  Room type
											</th>
											<th class="price-header text-right">                                
											  <span class="priceBreakdown"></span>
											  <span>
												<span class="line">Amount after Tax</span>												
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
												  <!--<span  class="text-head">Unknown</span>-->
												  <div class="boardType"><?php echo  current(explode("(", $roomTYPE)); ?></div>
												</div>
												
											  </div>
											</td>
											<td class="price text-right">                               
											  <span class="priceBreakdown"></span>
											  <span>
												<span>£<?php echo $roomPRICE; ?></span>
											  </span>
							
											</td>
											<td class="price text-right"> 
							
											  <span>                   
												<span>
												  <span>£<?php echo $roomPRICE; ?></span>
												</span>
											  </span>
											  
							
											</td>
											<td class="text-center">
											  <!--<a class="roomselect btn red">Select   </a>-->
											 <?php	
											 $SelHotelURL = "./list-search-selected-hotel.php?CountryCode=".$HOTEL[$i]['CountryCode']."&LocationID=".$HOTEL[$i]['LocationID']."&HotelCode=".$HOTEL[$i]['HotelCode'];			
											  echo "<a class='roomselect btn red' href='".$SelHotelURL."&RoomNPrice=".$RoomNPrice[$x]."'>Select   </a>";
											 ?>
											</td>
										  </tr>									
										  
										</tbody>
									  </table>
									</div>
								  <?php
								  	}
									?>
									<!--<div class="fade room-list tab-pane active in" id="tab_4">
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
									</div>-->
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
			      
				
			}			
         ?>
		 
		  </div>
                </div>
              </div>
            </div>