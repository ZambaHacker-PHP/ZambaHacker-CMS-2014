
           function chatcerca(){
     var username = $("input#nome").val();        
     var dataString = 'username='+ username

     if(username == ''){
     $('#msg_cerca').fadeOut('slow', function () {
     $('#msg_cerca').fadeIn('slow').text('Nome Invalido.');
     })   
     }else{ 
     $.ajax({
			type:"POST",
			url: "/ajax/admin/chatcerca.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 $("#msg_cerca").html(msg);
			 $("#msg_cerca").fadeIn();
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}
            });
       }
       }
    
           function badgecerca(){
     var username = $("input#nome").val();        
     var dataString = 'username='+ username

     if(username == ''){
     $('#msg_cerca').fadeOut('slow', function () {
     $('#msg_cerca').fadeIn('slow').text('Nome Invalido.');
     })   
     }else{ 
     $.ajax({
			type:"POST",
			url: "/ajax/admin/badgecerca.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 $("#msg_cerca").html(msg);
			 $("#msg_cerca").fadeIn();
			},
			error: function()
			{
				console.log("Chiamata fallita, si prega di riprovare...");
			}
            });
       }
       }
    
    
     