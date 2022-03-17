<?php 
session_start();
        if(isset($_POST['m_user'])){
                  include("backsystem/connections.php");
                  $m_user = $_POST['m_user'];
                  $m_pass = $_POST['m_pass'];

                  $sql="SELECT * FROM tbl_member
                  WHERE  m_user='".$m_user."' 
                  AND  m_pass='".$m_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["member_id"];
                      $_SESSION["m_name"] = $row["m_name"];
                      $_SESSION["m_level"] = $row["m_level"];

                      if($_SESSION["m_level"]=='1'){ 

                        Header("Location: loginsusscess.php");
                      }
                      if($_SESSION["m_level"]=='0'){ 

                        Header("Location: loginsusscessmember.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>