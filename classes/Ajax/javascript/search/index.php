<!DOCTYPE html>
<html lang="en">
<head>
   <script>
     function getTable(num){
        let op = document.getElementById("output");
        if(num.length == 0){
           op.innerHTML = "";
           return ;
        }
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
           if(this.readyState==4 && this.status==200){
              op.innerHTML = this.responseText;
           }
        }
        let url = "get_table.php?n="+num;
        xmlhttp.open("GET",url);
        xmlhttp.send();
     }
   </script>
</head>
<body>
   Enter the Number
   <input type="text" id="num" onkeypress="getTable(this.value)"/>
   <div id="output"></div>
</body>
</html>