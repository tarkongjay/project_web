<?php include('../backsystem/connections.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->

    <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <title>Raochana - ร้านขายหนังสือ ครบถูก ดี</title>
   <link rel="icon" href="../img/core-img/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--start data table-->
  </script>
<script>
$(document).ready(function() {
$('#example').DataTable( {
"aaSorting" :[[0,'desc']],
//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );
<?php session_start(); 
include('../backsystem/connections.php');

  $user_id = $_SESSION['user_id'];
  $m_name = $_SESSION['m_name'];
 	if($user_id==''){
    Header("Location: ../logout.php");  
  }  
?>
</script>
  </head>
  </head>
  <body>