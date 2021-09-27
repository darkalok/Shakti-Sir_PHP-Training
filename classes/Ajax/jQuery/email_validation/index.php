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
        $("#uemail").keyup(function(){
          var email = $("#uemail").val();
          if(email == ""){
             $("#op").html("");
             return ;
          }
          if(!email.endsWith("@gmail.com")){
             $("#op").html("<font color='red'> Invalid Email</font>");
             return ;
          }
          $.ajax({
             url:'server.php',
             method:'post',
             data:{'user_email':email},
             success:function(res){
                $("#op").html(res);
             }
          });
        });
     });
   </script>
</head>
<body>
   email: <input type="email" id="uemail" /><span id="op"></span>
</body>
</html>