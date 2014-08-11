$(function() {

    var newHash      = "",
        $mainContent = $("#main-content"),
        $pageWrap    = $("#DisplayList"),
        baseHeight   = 0,
        $el;
        
    $pageWrap.height($pageWrap.height());
    baseHeight = $pageWrap.height() - $mainContent.height();
    
    $(".pagination li, #perPage li").delegate("a", "click", function() {
        window.location.hash = $(this).attr("href");
		alert($(this).attr("href"));
        return false;
    });
    
    $(window).bind('hashchange', function(){
    
        newHash = window.location.hash.substring(1);
        
        if (newHash) {
				//alert(newHash);
								
            var url = location.href;
			var qs = url.substring(url.indexOf('#') + 1).split('/');	
			
			/**********Splits URL #Search/Boption=All&BLocation=All&... **** INTO qs[0] = Search after '/' qs[1] = Boption=All&BLocation=All&...***/		
			
			newHash =	qs[0];
			var Parameters = qs[1];
			
			PageLoad(newHash, Parameters); 
        };
        
    });
    
    $(window).trigger('hashchange');

});