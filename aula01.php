<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

 <script>
 	$(document).ready(function(){
 		let url = "https://jsonplaceholder.typicode.com/posts/";
     $.get(url ,function(resultado){
     	
        	var id    = resultado[0].id;
     	    var title = resultado[0].title;

         var div = "<div id='teste' >"+ 
                    "<h2>"+title+"</h2>                "+
                    "<p>" +title+  "</p>"
                    "</div>"; 

     

     	  
         $('#teste1').append(div);



                 } 

           




     	);

 	});

 </script>

<body>
<div id="teste1">
</div>

</body>
</html>
