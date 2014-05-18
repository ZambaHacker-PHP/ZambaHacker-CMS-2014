 var $j = jQuery.noConflict();
     
     
       
    function crea_news(){
        
     var titolo = $j("input#titolo").val();
     var shorts = $j("textarea#short").val();
     var longs = $j("textarea#long").val();
     var img = $j("input#img").val();
     var autore = $j("input#autore").val();
             
     var dataString = 'titolo='+ titolo
                    + '&short='+ shorts 
                     + '&long='+ longs
                     + '&img='+ img
                     + '&autore='+ autore  
                     
    if((titolo == '') || (shorts == '') || (longs == '') || (img == '') || (autore == '')){
     $j('#msg_err').fadeOut('slow', function () {
     $j('#msg_err').fadeIn('slow').text('Assicurati di aver compilato tutti i campi.');
     })
        
     }else{ 
     $j.ajax({
			type:"POST",
			url: "/ajax/admin/crea_news.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 $j("#msg_s").html(msg);
			 $j("#msg_s").fadeIn();
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}
            });
       }
       }
    
    
        