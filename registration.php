<?php
session_start();
$con=mysqli_connect('localhost','root','','kisan_kendra');
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $Gender=$_POST['Gender'];
  $Address=$_POST['Address'];
  $Tehsil=$_POST['Tehsil'];
  $District=$_POST['District'];
  $Pin_code=$_POST['Pin_code'];
  $State=$_POST['State'];
  $Mobile_number=$_POST['Mobile_number'];
  $email=$_POST['email'];
  $B_name=$_POST['B_name'];
  $B_holder=$_POST['B_holder'];
  $B_account_no=$_POST['B_account_number'];
  $ifsc=$_POST['ifsc'];
  $ID=$_POST['ID'];
  $Id_no=$_POST['Id_no'];
// $farmer_key=$_POST['farmer_key'];
  $query="INSERT INTO `farmers`(`fname`, `Gender`, `Address`, `Tehsil`, `District`, `Pin_code`, `State`, `Mobile_number`, `email`, `B_name`, `B_holder`, `B_account_no`, `ifsc`, `ID`, `Id_no`, `farmer_key`)
  VALUES ('$fname','$Gender','$Address','$Tehsil','$District','$Pin_code','$State','$Mobile_number','$email','$B_name','$B_holder','$B_account_no','$ifsc','$ID','$Id_no')";
  $run=mysqli_query($con , $query);
  print_r($_POST);

if($run)
   echo '<script>alert("Registered Successfully your details")</script>';
else
  echo '<script>alert("Registeration not done")</script>';
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style type="text/css">
  body{
    background-image:url("register_bg.jpg");
    background-size:100% 100%;

  }

  #box{
    opacity:90%;
     height:800;

     margin:50px 75px 50px 75px;

  }

  #heading{
    margin-bottom:30px;
    padding-left:130px;
  }

  .x{
    margin-top:57px;

  }

  #but_ton{
    background-color:red;

  }

  .y{
    margin-top:33px;

  }

  #gender_col{
    margin-top:32px;

  }

  #gender{
    width:200px;
    border-radius:5px;

  }

  #idno{
      margin-top:-25px;
  }

  #ID{
    margin-top:8px;
    border-radius:5px;
  }

  #submit{
    margin-bottom:20px;
    margin-left:250px;

  }


</style>

</head>
<body>
 <header>

 </header>
   <main id="box">
    <br>
    <br>
    <div class="row">
      <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 "></div>
         <div  class="col-sm-7 col-md-7 col-xs-7 col-lg-7 ">
           <div class="modal-content">
             <div class="modal-content">
             <div class="modal-body">
               <h3 id="heading">    Fill Your Information</h3>
               <p></p>
               <p></p>
     <div class="form-group">
       <label for="fname">Full Name</label>
       <input type="text" style="border: 0.9px solid gray;color:black;" id="fname" name="fname"  placeholder="" class="form-control">
    </div>

   <div class="form-group">
     <div class="row">
       <div class="col">
         <div class="form-group">
          <label for="dob">Date Of Birth</label>
          <input type="date" style="border: 0.9px solid gray;color:black;" name="dob" placeholder="" class="form-control" id="dob">
         </div>
       </div>
       <div class="col" id="gender_col">
         <div class="form-group">
               <label for="gender">Gender</label>

                     <select  name="gender" style="border: 0.9px solid black;color:black; height:37px;" class="btn-btn" class= aria-describedby="searchDropdownDescription" id="gender" class="form-control">
                       <option value="Select">Select</option>
                         <option value="Female">Female</option>
                         <option value="Male">Male</option>
                     </select>
                   </div>
     </div>
     </div>
     </div>

      <div class="form-group">
        <label for="Address">Address (street)</label>
        <input type="text" style="border: 0.9px solid gray;color:black;" id="Address" name="Address"  placeholder="" class="form-control">
      </div>
           <div class="form-group">
             <div class="row">
               <div class="col">
                 <div class="form-group">
                  <label for="Tehsil">Tehsil</label>
                  <input type="text" style="border: 0.9px solid gray;color:black;" name="Tehsil" placeholder="" class="form-control" id="Tehsil">
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                   <label for="District">District</label>
                   <input type="text" style="border: 0.9px solid gray;color:black;" name="District"  placeholder="" class="form-control" id="District">
               </div>
             </div>
             </div>
             </div>

             <div class="form-group">
               <div class="row">
                 <div class="col">
                   <div class="form-group">
                    <label for="Pin_code">Pin code</label>
                    <input type="text" style="border: 0.9px solid gray;color:black;" name="Pin_code" placeholder="" class="form-control" id="Pin_code">
                   </div>
                 </div>
                 <div class="col">
                   <div class="form-group">
                     <label for="State">State</label>
                     <input type="text" style="border: 0.9px solid gray;color:black;" name="State"  placeholder="" class="form-control" id="State">
                 </div>
               </div>
               </div>
               </div>

               <div class="form-group">
                 <div class="row">
                   <div class="col">
                     <div class="form-group">
                      <label for="Mobile_Number">Mobile Number</label>
                      <input type="text" style="border: 0.9px solid gray;color:black;" name="Mobile_Number" placeholder="" class="form-control" id="Mobile_Number">
                     </div>
                   </div>
                   <div class="col">
                     <div class="form-group">
                       <label for="email">Email-ID</label>
                       <input type="email" style="border: 0.9px solid gray;color:black;" name="email"  placeholder="" class="form-control" id="email">
                   </div>
                 </div>
                 </div>
                 </div>
                <h3>Bank Details</h3>
                 <div class="form-group">
                   <div class="row">
                     <div class="col">
                       <div class="form-group">
                        <label for="B_name">Bank Name :</label>
                        <input type="text" style="border: 0.9px solid gray;color:black;" name="B_name" placeholder="" class="form-control" id="B_name">
                       </div>
                     </div>
                     <div class="col">
                       <div class="form-group">
                         <label for="B_holder">Account Holder Name:</label>
                         <input type="text" style="border: 0.9px solid gray;color:black;" name="B_holder"  placeholder="" class="form-control" id="B_holder">
                     </div>
                   </div>
                   </div>
                   </div>

                   <div class="form-group">
                     <div class="row">
                       <div class="col">
                         <div class="form-group">
                          <label for="B_account_no">Bank Account Number</label>
                          <input type="text" style="border: 0.9px solid gray;color:black;" name="B_account_no" placeholder="" class="form-control" id="B_account_no">
                         </div>
                       </div>
                       <div class="col">
                         <div class="form-group">
                           <label for="ifsc">IFSC code</label>
                           <input type="text" style="border: 0.9px solid gray;color:black;" name="ifsc"  placeholder="" class="form-control" id="ifsc">
                       </div>
                     </div>
                     </div>
                     </div>

                     <div class="form-group">
                       <div class="row">
                         <div class="col">
                           <div class="form-group">
                                 <label for="ID">ID type</label>

                                       <select  name="ID" style="border: 0.9px solid black;color:black; height:37px;width:200px;" class="btn-btn" class= aria-describedby="searchDropdownDescription" id="ID" class="form-control">
                                         <option value="Select">Select</option>
                                           <option value="PAN card">PAN card</option>
                                           <option value="Adhar card">Adhar card</option>
                                           <option value="Driving License">Driving License</option>
                                           <option value="Ration Card">Ration Card</option>
                                           <option value="Voter ID card">Voter ID card</option>
                                           <option value="Passport">Passport </option>
                                       </select>
                                     </div>
                         </div>
                         <div class="col">
                           <div class="form-group" id="idno">
                             <label for="id_no">ID number</label>
                             <input type="text" style="border: 0.9px solid gray;color:black;width:300px;" name="id_no"  placeholder="" class="form-control" id="id_no">
                         </div>
                       </div>
                       </div>
                       </div>

                    <div class="row">
                    <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1 "></div>
                    <div class="col-sm-5 col-md-5 col-xs-5 col-lg-5 ">
                       <div class="form-group">
                         <form action"" method="POST" enctype="multipart/form-data">
                             <h5 style="color:darkblue;margin-left:10px;"><b>Upload Your Photo</b></h5>
                             <input type="file" name="photo"style="border: 1px solid black;color:black; height:80px; width:200px;" class="form-control-file x" id="exampleFormControlFile1">
                          </form>
                        </div>
                          <button type="input" name="upload1" style="border: 1px solid black;color:black;background-color: #69DBFB ;;margin-left:10px;"class="btn btn-primary">upload</button>
                         </div>
                         <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1 "></div>
                         <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4 ">
                            <div class="form-group">
                              <form action"" method="POST" enctype="multipart/form-data">
                                  <h5 style="color:darkblue;margin-left:10px;"><b>Upload cancelled cheque</b></h5>
                                  <input type="file" name="cheque"style="border: 1px solid black;color:black; height:80px; width:200px;" class="form-control-file y" id="exampleFormControlFile1">
                               </form>
                             </div>
                               <button type="input" name="upload2" style="border: 1px solid black;background-color: #69DBFB ; color:black;margin-left:10px;"class=" btn">upload</button>
                              </div>
                              <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1 "></div>

                        </div>
          </div>
          <div id="submit">  <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg"></div>
          </div>

       </div>

      </div>

      <div>

  <div class="col-sm-3 col-md-3 col-xs-3 col-lg-3 "></div>
  </div>

  </main>
</body>
</html>
