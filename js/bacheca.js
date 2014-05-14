 var $j = jQuery.noConflict();
     

     
    function load_bac(){
     var nome = $j("input#nomeprofilo").val();        
     var dataString = 'nome='+ nome
     $j.ajax({
			type:"POST",
			url: "/ajax/bacheca/load_bacheca.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
			 $j("#testi").html(msg);
			 $j("#testi").fadeIn();
			},
			error: function()
			{
				alert("Chiamata fallita, si prega di riprovare...");
			}
            });
       }
       
   function post_commento(){
        var nome = $j("input#nomeprofilo").val()
        var comm = $j("textarea#commento").val();
        if (comm == "") {
        $j('#msg').fadeOut('slow', function () {
        $j('#msg').fadeIn('slow').text('Commento non valido.');
        });
        }else{
          
        var dataString = 'commento='+ comm
                      + '&nome='+ nome
        $j.ajax({
			type:"POST",
			url: "/ajax/bacheca/post_bacheca.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
              $j("#messaggio_bacheca").html(msg);
		      $j("#messaggio_bacheca").fadeIn();
            },
			error: function()
			{
				alert("Chiamata fallita, si prega di riprovare...");
			}

		});
        }
        }
        
        function cambiacolore(colore){
            
        var dataString = 'colore='+ colore
                    
        $j.ajax({
			type:"POST",
			url: "/ajax/bacheca/colore.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
              $j("#messaggio_bacheca").html(msg);
		      $j("#messaggio_bacheca").fadeIn();
            },
			error: function()
			{
				alert("Chiamata fallita, si prega di riprovare...");
			}

		});
            
        }
    
        
    
  

  function Smile(quale_faccina)
   {
      document.post_comm.commento.value += quale_faccina;
   }
   
   function elimina_comm(id){
    
         var nome = $j("input#nomeprofilo").val();  
          if (id == "") {}else{
          
        var dataString = 'id='+ id
         + '&nome='+ nome
                      
        $j.ajax({
			type:"POST",
			url: "/ajax/bacheca/elimina_commento.php",
			data: dataString,
			dataType: "html",
			success: function(msg)
			{
              $j("#messaggio_bacheca").html(msg);
		      $j("#messaggio_bacheca").fadeIn();
            },
			error: function()
			{
				alert("Chiamata fallita, si prega di riprovare...");
			}

		});
        }
  }
  
 