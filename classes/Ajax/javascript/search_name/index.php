<!DOCTYPE html>
<html lang="en">
<head>
   <script>
     function searchName(name){
        let op = document.getElementById("output");
        if(name.trim().length == 0){
           op.innerHTML = "";
           return ;
        }
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
           if(this.readyState==4 && this.status == 200){
              op.innerHTML = this.responseText;
           }
        }
        let url = "search_by_name.php?user_name="+name;
        xmlhttp.open("POST",url);
        xmlhttp.send();
     }
   </script>
</head>
<body>
   Enter the Number
   <input type="text" id="name" onkeypress="searchName(this.value)"/>
   <div id="output"></div>
</body>
</html>