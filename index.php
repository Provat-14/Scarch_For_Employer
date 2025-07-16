<?php 
$dujoy = "0";
require ( "db.php" );
if(isset($_POST['submit']))
      {


// $sql = "SELECT * FORM scarchforemployer";
// $result = $conn->($sql);

$country =$_POST['floatingSelectGrid'] ;
$passport =$_POST['exampleInputText1'] ;

$sql_userd = "SELECT * FROM scarchforemployer WHERE country = '$country' && passport = '$passport'";
$stmt_tuser = mysqli_query($conn, $sql_userd); 
  if (mysqli_num_rows($stmt_tuser) == null)   {
    $dujoy = "0";
    $error = "Please provide correct information.";
  }
  else{
    $dujoy = "1";


    $row_userd = mysqli_fetch_assoc($stmt_tuser); 
    $user_id = $row_userd['id'];
    $img = 'epimg/'.$row_userd['img'];
    $name = $row_userd['name'];
    $country = $row_userd['country'];
    $passport = $row_userd['passport'];
    $visa = $row_userd['visa'];
    $validity = $row_userd['validity'];
    $company = $row_userd['company'];
    $gender = $row_userd['gender'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Employer</title>
</head>
<body>
    <h1>Scarch For Employer</h1>
<form method ="post" action= "" style="padding: 20px; padding-bottom: 25px; width: 50%;" class="container" >
    <div class="form-group">
      <label for="exampleInputEmail1">select Country</label>

      <select class="form-control" class="form-select" name="floatingSelectGrid">
        <option selected>select</option>
        <option value="Romania">Romania</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Others">Others</option>
      </select>
     
    </div>
    <div style="padding: 10px;"  class="form-group">
      <label for="exampleInputPassword1">Passport Number</label>
      <input type="text" class="form-control" name="exampleInputText1" placeholder="Passport Number">
    </div>
    
    <button type="submit" name ="submit" class="btn btn-primary">Submit</button> <br><br>
    <small> <button> clear</button> </small>
  </form>
  <?php if (isset($error)) { 
    ?> 
      <P>
        <?php echo $error; ?>
      </P> 
    <?php } ?>
  

 <?php 
 
    if ($dujoy == "1") {
      
    

 ?>
    <div class="container" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img class="img-thumbnail" src="<?php echo $img; ?>" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 style="width: 70%;" class="card-title"><div class="shadow-lg p-3 mb-5 bg-body rounded"><?php echo $name; ?></div></h5>
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-4">
                    <p class="card-text">Country: <?php echo $country; ?></p>
                    <p class="card-text"> Passport: <?php echo $passport; ?></p>
                    <p class="card-text"> Gender: <?php echo $gender; ?></p>
                  </div>
                  <div class="col-4">
                    <p class="card-text"> Visa: <?php echo $visa; ?></p>
                    <p class="card-text"> Validity: <?php echo $validity; ?></p>
                    <p class="card-text"> Company: <?php echo $company; ?></p>
                  </div>
                </div>
              </div>
              
              
              
            </div>
          </div>
        </div>
    </div> 
    
    <?php
    
    }

    ?>






      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
