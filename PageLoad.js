function PageLoad(newHash, Parameters) 
 {

 
	
        if (newHash) {
            
	/*****************/			
		/*** To hightlight background of toolsmenu li color STARTS******/
		/*$("nav li").removeClass("current");				
		$("nav li").each(function(i){	
			var Menu_Option = $.trim($(this).find('b').text());
			//alert(Menu_Option);
			if(Menu_Option == newHash)
			{
			//alert(Menu_Option);		
			$(this).addClass("current");
			}
		});*/
		/*** To hightlight background of toolsmenu li color ENDS******/
		
		/******* Check whether parameteres exist for New no parameters if this is removew [ New validation won't work and gives error in cosole 'split not defined or some thing ] ********/	
		if( typeof Parameters!=="undefined") 
		{		
			var tempoption = Parameters.split("&");		
			var voption="";
			if( typeof tempoption[1]==="undefined") 
			voption="";
			else
			{
				var suboption = tempoption[1].split("=");
				voption = suboption[1];
			}
			//alert(voption);
		}
		
		/********* For All Options with Out Having any Parameters STARTS ***/
		
		
		$.ajax({
		type: "POST", 
        url: "./hotel-loads/hotel-list-loadMod.php",
		data: newHash,
		beforeSend: function() {$('#loading').css('visibility','visible');},
		complete: function() { $('#loading').css('visibility','hidden'); },        
        success : function(data)
        { 		
		//alert(data);
		$("#HOTEL-LIST").html(data);
        }
		
   		 });	
	
		/********* For All Options with Out Having any Parameters ENDS ***/
		
		}
		
}		