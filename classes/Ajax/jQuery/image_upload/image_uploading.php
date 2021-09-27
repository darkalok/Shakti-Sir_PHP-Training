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
         $("#f1").change(function(){
            $.ajax({
               url:"server.php",
               method:"POST",
               data:new FormData($("#frm")[0]),
               contentType:false,
               processData:false,
               success:function(res){
                  $("#output").html(res);
               }
            });
         });
      });
   </script>
</head>
<body>
   <form id="frm">
      <input type="file" name="f1" id="f1" />
   </form>
   <!-- <button id="btn">btn</button> -->
   <div id="output"></div>
</body>
</html>