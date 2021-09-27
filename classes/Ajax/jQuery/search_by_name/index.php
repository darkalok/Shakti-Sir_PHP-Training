<!DOCTYPE html>
<html lang="en">
<head>
   <script src="../jquery.js"></script>
   <script>
     $(document).ready(function(){
        $("#name").keyup(function(){
           var name= $("#name").val();
           if(name == ""){
              $("#output").html("");
              return ;
           }
           $.ajax({
              url: 'server.php',
              method:'post',
              data:{'user_name':name},
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
   <input type="text" id="name" />
   <div id="output"></div>
</body>
</html>