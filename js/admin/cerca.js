 var $j = jQuery.noConflict();
     
     
       
    function cerca(){
     var username = $j("input#nome").val();        
     var dataString = 'username='+ username

     if(username == ''){
     $j('#msg_cerca').fadeOut('slow', function () {
     $j('#msg_cerca').fadeIn('slow').text('Nome Invalido.');
     })   
     }else{ 
     $j.ajax({
			type:"POST",
			url: "/ajax/admin/cerca.php",
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
       
           function chatcerca(){
     var username = $j("input#nome").val();        
     var dataString = 'username='+ username

     if(username == ''){
     $j('#msg_cerca').fadeOut('slow', function () {
     $j('#msg_cerca').fadeIn('slow').text('Nome Invalido.');
     })   
     }else{ 
     $j.ajax({
			type:"POST",
			url: "/ajax/admin/chatcerca.php",
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
    
    
        function modifica(username){
            
     var mail = $j('input#mail').val();
     var rank = $j('input#rank').val();
     var credits = $j('input#credits').val();
     var vip_points = $j('input#vip_points').val();
     var activity_points = $j('input#activity_points').val();
     var motto = $j('input#motto').val();
     var ruolo = $j('input#ruolo').val();
     var rispetti = $j('input#rispetti').val();
     var ontime = $j('input#ontime').val();
     var rixp_gg = $j('input#rixp_gg').val();
     var rixp_pt_gg = $j('input#rixp_pt_gg').val();
     var id_gruppo= $j('input#id_gruppo').val();
     var username1= $j('input#username1').val();
     
     var dataString = 'username='+ username + '&mail='+mail+'&rank='+rank+'&credits='+credits+'&vip_points='+vip_points+'&activity_points='+activity_points+'&motto='+motto+'&ruolo='+ruolo+'&rispetti='+rispetti+'&ontime='+ontime+'&rixp_gg='+rixp_gg+'&rixp_pt_gg='+rixp_pt_gg+'&id_gruppo='+id_gruppo+'&username1='+username1
     
     
     if(username == ''){

     }else{ 
     $j.ajax({
			type:"POST",
			url: "/ajax/admin/modifica_utente.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 $j("#msg_mod").html(msg);
			 $j("#msg_mod").fadeIn();
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}
            });
       }
       }