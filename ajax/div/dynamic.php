
<html>
<head>

<script type ="text/javascript">

function load(thediv,thefile){
	
    if(window.XMLHttpRequest){
       
        xmlhttp =new XMLHttpRequest(); // case sensitive

    }else {
       
        xmlhttp=new ActiveXobject('Microsoft.XMLHTTP');
   
    }   
	
    xmlhttp.onreadystatechange=function(){ //creating block 4r our functon
                                                                            ///whatever change in state we perform a action in herere
        if (xmlhttp.readyState ==4 && xmlhttp.status ==200){ // thorough this condition we r making sure its not emptyk
           
            document.getElementById(thediv).innerHTML =xmlhttp.responseText; 
       
        }
    }
  
    xmlhttp.open('GET',thefile,true);
    xmlhttp.send();
}
 </script>
 
 </head>
 <body>
 
 <input type ="submit" onclick ="load('anotherdiv','include.inc.php');">
 
 <div id="anotheradiv"></div>
 </body>
 </html>
  