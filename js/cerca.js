 var $j = jQuery.noConflict();
     
     
       
    function cerca(){
     var username = $j("input#nome_cerca").val();        
     var dataString = 'username='+ username
     if(username == ''){
     $j('#msg_cerca').fadeOut('slow', function () {
     $j('#msg_cerca').fadeIn('slow').text('Nome Invalido.');
     })   
     }else{ 
     $j.ajax({
			type:"POST",
			url: "/ajax/cerca/cerca.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 $j("#msg_cerca").html(msg);
			 $j("#msg_cerca").fadeIn();
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}
            });
       }
       }
    