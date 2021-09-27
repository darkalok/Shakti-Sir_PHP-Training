<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="../jquery.js"></script>
   <script>
     $(document).ready(function(){
        $("#num").keyup(function(){
           var num= $("#num").val();
           if(num == ""){
              $("#output").html("");
              return ;
           }
           $.ajax({
              url: 'server.php',
              method:'post',
              data:{'n':num},
              success: function(res){
                 $("#output").html(res);
              }
           });
        });
     });
   </script>
</head>
<body>
   Number
   <input type="text" id="num" />
   <div id="output"></div>
</body>
</html>