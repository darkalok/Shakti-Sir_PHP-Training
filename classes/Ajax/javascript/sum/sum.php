<!DOCTYPE html>
<html lang="en">
<head>
 <script>
   function getSum(){
      var num1=document.getElementById("num1").value;
      var num2 = document.getElementById("num2").value;
      var result = document.getElementById("result");
      let xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
           if(this.readyState==4 && this.status==200){
              result.value=this.responseText;
           }
        }
        var url = "server.php?n1="+num1+"&n2="+num2;
        xmlhttp.open("GET",url);
        xmlhttp.send();
   }
 </script>
</head>
<body>
   First number 
   <input type="text" id="num1"/>
   <br/>
   Second number 
   <input type="text" id="num2" onblur="getSum()"/>
   <br />
   Result
   <input type="text" id="result"/>
</body>
</html>