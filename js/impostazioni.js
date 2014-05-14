 var $j = jQuery.noConflict();
          
                  
    function modifica_pass(){   
    var old_pass = $j("input#old_pass").val();
    var new_pass = $j("input#new_pass").val();  
     var dataString = 'old_pass=' + old_pass
                      +'&new_pass=' + new_pass
      if((old_pass == '') || (new_pass == '')){
      $j('#msg').fadeOut('slow', function () {
      $j('#msg').fadeIn('slow').text('Compila tutti i campi.');
      });  
      }else{                
     $j.ajax({
			type:"POST",
			url: "/ajax/impostazioni/password.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
		      $j("#msg").html(msg);
			 $j("#msg").fadeIn();

			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}
            });
            }
       }
    
    
    
     