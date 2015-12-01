
<html>
<head>

<script type ="text/javascript">

function load(){
	
    if(window.XMLHttpRequest){
       
        xmlhttp =new XMLHttpRequest(); // case sensitive

    }else {
       
        xmlhttp=new ActiveXobject('Microsoft.XMLHTTP');
   
    }   
	
    xmlhttp.onreadystatechange=function(){ //creating block 4r our functon
                                                                            ///whatever change in state we perform a action in herere
        if (xmlhttp.readyState ==4 && xmlhttp.status ==200){ // thorough this condition we r making sure its not empty
           
            document.getElementById('adiv').innerHTML =xmlhttp.responseText; 
       
        }
    }
  
    xmlhttp.open('GET','include.inc.php',true);
    xmlhttp.send();
}
 </script>
 
 </head>
 <body>
 
 <input type ="submit" onclick ="load();">
 
 <div id="adiv"></div>
 </body>
 </html>
  