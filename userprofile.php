<?php
    session_start();
    
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<center><h1>My Profile</h1></center><hr>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  height: 600px;
   background: linear-gradient(62deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
     animation: gradient 6s ease infinite; 
      background-size: 400% 400%;
  
}
@-webkit-keyframes gradient{
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
     background-position: 0% 50%;
  }
}
@keyframes gradient{
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
     background-position: 0% 50%;
  }
}
  
    
}
.row
    {
        border: 2px solid black;
    }
.ntf
    {
        color:red;
        position: absolute;
        top:0px;
        
    }
.msg
    {
        color:blue;
    }
.cont
    {
        width:100%;
    }
.cont-head
    {
        width:100%;
         font-weight: bolder;
        
    }
td
    {
        width:15%;
    }
.badge {
  position: absolute;
  top: 5px;
  left:20px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-5">

<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "Connection error";
}
else{
  echo "";

    
    
 
    
    
    
    
    
    
    
    
$fname=$_SESSION["username"];
$result=mysqli_query($conn,"select * from exptable where fname='$fname'")
                or die("FAILED!!".mysql_error());
                while ( $row = mysqli_fetch_array( $result ) ) {
                    ?>
                <fieldset>
                    <form action="" method="POST" name="update">
                        <table class="table table-hover">
    
                            <tr>
                                <td><strong>Name : </strong>
                                </td>
                                <td>
                                    <?php echo $row['fname']; ?>
                                </td>
    
                            </tr>
                            <tr>
                                <td><strong>Password :</strong> </td>
                                <td>
                                    <?php echo $row['password']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong> </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Father's Name:</strong> </td>
                                <td>
                                    <?php echo $row['faname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Gender:</strong> </td>
                                <td>
                                    <?php echo $row['gender']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Registeration Type:</strong> </td>
                                <td>
                                    <?php echo $row['regas']; ?>
                                </td>
                            </tr>
                            
                        </table>
                        </form>
			</fieldset>
			<?php
			}
			?>


			<?php
			}
			?>
            <?php
			}
			?>
    
        
		</div>
	</div>			
