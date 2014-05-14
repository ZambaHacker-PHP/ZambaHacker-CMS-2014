 var $j = jQuery.noConflict();
     
     
       
    function enter_user(){
     var username = $j("input#nome").val();        
     var dataString = 'username='+ username

     if(username == ''){
     $j('#msg_cerca').fadeOut('slow', function () {
     $j('#msg_cerca').fadeIn('slow').text('Nome Invalido.');
     })   
     }else{ 
     $j.ajax({
			type:"POST",
			url: "/ajax/admin/enter_user.php",
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
    
    
        