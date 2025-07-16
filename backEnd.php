<?php

require ( "db.php" );
if(isset($_POST['submit']))
      {
        $name =$_POST['name'] ;
        $email =$_POST['email'] ;
        $passport =$_POST['passport'] ;
        $country =$_POST['country'] ;
        // $icon =$_POST['icon'] ;
        $gender =$_POST['exampleRadios'] ;
        $visa =$_POST['visa'] ;
        $validity =$_POST['date'] ;
        $company  =$_POST['company'] ;
        



        if(!empty($_FILES["icon"]["name"]))   
        {
          $filename_nid1 = $_FILES["icon"]["name"];   
          $tempname_nid1 = $_FILES["icon"]["tmp_name"];   
          $file_basename_nid1 = substr($filename_nid1, 0, strripos($filename_nid1, '.')); // get file extention   
          $file_ext_nid1 = substr($filename_nid1, strripos($filename_nid1, '.')); // get file name  
          if ($file_ext_nid1 == '.jpg' or $file_ext_nid1 == '.jpeg' or $file_ext_nid1 == '.png' or $file_ext_nid1 == '.PNG') {
            $new_name = 'img'.rand(10000000, 99999999);
            $new_nid1 = $new_name.$file_ext_nid1;   
            $folder_nid1 = 'epimg/'.$new_nid1;   
            move_uploaded_file($tempname_nid1, $folder_nid1);
            $sqldfgtrytryht = "INSERT INTO scarchforemployer (name, img, country, passport, gender, visa, validity, company ) VALUES ('$name', '$new_nid1', '$country', '$passport', '$gender', '$visa', '$validity', '$company' )";
            
            
            mysqli_query($conn, $sqldfgtrytryht);
            $error = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            successfully data update
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
          }
            else {
              $error = '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Please Upload jpg, jpeg or png Image !
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
        else {
          $error = '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Please Upload Image !
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
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
    <title>Add new Employe</title>
</head>
<body>
    <h1>Add new Employe</h1>
    <?php 
      if (isset($error)) {
        echo $error;
        }
      ?>
    <div style="padding-top: 10px; width: 50%;" class="container">
    <form  method ="post" enctype="multipart/form-data" action= "backEnd.php" class="row g-3">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Name</label>
            <input name="name" class="form-control" type="text" placeholder="Name">
          </div>
 
          <div class="form-group">
            <label for="exampleFormControlFile1">Emplyer img</label>
            <input type="file" name="icon" class="form-control-file" id="exampleFormControlFile1">
          </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Country</label>
          <select name="country" class="form-control" id="exampleFormControlSelect1">
            <option selected>select</option>
            <option value="Romania">Romania</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Others">Others</option>
      </select>
          </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Passport</label>
            <input type="text" name ="passport" class="form-control"  placeholder="Passport Number">
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Gender</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Mail
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Femaile
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              others
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Visa</label>
          <input name="visa" class="form-control" type="text" placeholder="Visa Number">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Validity</label>
            <input name="date" class="form-control" type="text" placeholder="munth/Year">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Company</label>
            <input name="company" class="form-control" type="text" placeholder="Company Name">
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        
      </form>
    </div>

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  
</body>
</html>