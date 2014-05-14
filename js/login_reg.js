 var $j = jQuery.noConflict();
 
 function box()
 {

    $j("article.box_log").hide();
    $j("article.box_reg").fadeIn();    
 }

function log()
{
    var username = $j("input#username").val();
    var password = $j("input#password").val();
    if((username == '') || (password == '')){
        $j('#msg').fadeOut('slow', function () {
        $j('#msg').fadeIn('slow').text('Controlla di avere compilato correttamente tutti i campi.');
         });
    }else{
    
    var dataString = 'username='+ username
                      + '&password='+ password;
	$j.ajax(
        {
			type:"POST",
			url: "/ajax/login/login.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 
                    $j("#success").html(msg);
					$j("#success").fadeIn();
      
         
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}

		});
	  }
	}	   


function registera()
{

    var username = $j("input#username_reg").val();
    var password = $j("input#password_reg").val();
    var email = $j("input#email_reg").val();
    var x=email;
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
	
    if((username == '') || (password == '') || (email == '')){
        $j('#msg').fadeOut('slow', function () {
        $j('#msg').fadeIn('slow').text('Controlla di avere compilato correttamente tutti i campi.');
        });
    }else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
        $j('#msg').fadeOut('slow', function () {
        $j('#msg').fadeIn('slow').html('L\'email inserita non &egrave; valida.');
    });
    }else{
    
    var dataString = 'username='+ username
                      + '&password='+ password
                      + '&email='+ email;
	$j.ajax({
			type:"POST",
			url: "/ajax/registrazione/registrazione.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 
                    $j("#success").html(msg);
					$j("#success").fadeIn();
      
         
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}

		});
	  }
		   
}


