<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BMSYSTEM</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body style="background: #e9eaed">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #fff">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span celass="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font-weight:bold;padding: 0"><img src="images/logo.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="login.php">LOGIN</a></li>
                <li>|</li>
                <li><a href="signup.php"><button style="background: #006600;color: #fff;border:0;padding: 10px 15px">REGISTER</button></a></li>
            </ul>
        </div>
        </nav>
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default" style="margin-top: 5%">
                    <div class="panel-heading">
                        <div class="text-center">
                            <h3>Applicant Sign Up</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" action = "#" method = "POST" enctype = "multipart/form-data" id = "register" name= "register">
                            <fieldset>
                            <div class="form-group">
                                    <input class="form-control" placeholder="ADM NO." id = "adm" name="adm" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" id = "userFirstname" name="userFirstname" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" id="userLastname" name="userLastname" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" id="userEmail" name="userEmail" type="email" required="required">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userConsti" name="userCounty">
                                        <option value="">Select Constituency</option>
                                        <option value="konoin">Konoin</option>
                                        <option value="sotik">Sotik</option>
                                        <option value="east">Bomet East</option>
                                        <option value="central">Bomet Central</option>
                                        <option value="che">Chepalungu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userConst" name="userConst">
                                        <option value="">Select Ward</option>
                                        <option value="boito"  id="boi">Boito</option>
                                        <option value="emba"  id="emba">Embormos</option>
                                        <option value="kimulot" id="kimulot">Kimulot</option>
                                        <option value="chepchabas" id="chepch">Chepchabas</option>
                                        <option value="mogogosiek" id="mogo">Mogogosiek</option>
                                    </select>
                                </div> 
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" id="userPhone" name="userPhone" type="number" onKeyDown="if(this.value.length == 10) return false;" required="required">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Date of birth" id="userbod" name="userbod" type="date" required="required">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userGender" name="userGender" required="required">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userEduLevel" name="userEduLevel" required="required">
                                        <option value="">Academic Level</option>
                                        <option value="Primary">Primary</option>
                                        <option value="Secondary">Secondary</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Name of your school" id="userSchool" name="userSchool" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="School Bank No." id="bank" name="bank" type="text" required="required">
                                </div>
                                <div class = "form-group">
                <label>Family Status</label>
                <select class="form-control" id="parents" name="parents" >
                <option value="">Select Status</option>
                <option value="Both_Alive">Both Alive</option>
                <option value="Single_Parent">Single Parent</option>
                <option value="Total_Orphan">Total Orphan</option>
                </select>
                </div>
                <div class = "form-group" id="deceased_div" name="deceased_div" style="display: none">
                <label>Upload Death Certificate of the Deceased Parent(s). <br><i style="font-weight:normal;color:blue">(For total Orphan, merge the two Death Certificates into one pdf document then upload)</i></label>
                <input class="form-control-file" type="file" name="file" id="example-file-input">
                </div>
         
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="userPass" name="userPass" type="Password" pattern=".{8,}" required title="8 characters minimum">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" id="userCoPass" name="userCoPass" type="Password" >
                                </div>
                                 <div id = "loading"></div>
                                <button type="submit" class = "form-control btn btn-success" id = "regbtn" style="border-radius:0px">
                                    <!-- <i id="spinner" class="fa fa-spinner fa-spin" style="display:none"></i> --> 
                                Sign Up Now</button>
                            </fieldset>
                        </form>

                        <hr>
                        <div class="text-center">
                            <div>Already Registered ? <a href="login.php">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src = "js/script.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script type="text/javascript">
       $('#parents').on('change', function() {
          $eduVal = this.value;
          if($eduVal == 'Single_Parent' || $eduVal == 'Total_Orphan'){
            $('#deceased_div').show();
          }else{
            $('#deceased_div').hide();
          }
        });
    </script>

    <script>
        $error = $('<center><label class = "text-danger">Please fill up the required field!</label></center>');
        $error1 = $('<center><label class = "text-danger">Password do not match!</label></center>');
        $error2 = $('<center><label class = "text-danger">Email Already Registered!</label></center>');
        $('#register').submit(function(e) {

        var value = document.getElementById('userPhone').value;
         if (value.length < 10) {
           alert('10 characters required in the phone input field!');
           document.getElementById('userPhone').focus();
           return false; // keep form from submitting
         }

        $loading = $('<center><img src = "images/loading.gif" height = "10px"/></center>');
        $error.remove();
        $error1.remove();
        $error2.remove();
        var formData = new FormData($(this)[0]);
        $.ajax({
        url: "add_applicant.php",
        type: "POST",
        data: formData,
        beforeSend: function(){
          $loading.appendTo('#loading');
          $("#regbtn").attr("disabled", 'disabled');
         },
         complete: function(){
         // $loading.remove();
         $("#regbtn").prop("disabled", false);
         },
        success: function (data) {
            if(data == "Success"){
              // alert("Successfully Registered!");
              window.location.href = 'login.php';
            }
            else if(data == "notmatch"){
              // alert("Password do not match!");
              document.getElementById("userPass").value = "";
              document.getElementById("userPass").focus();
              document.getElementById("userCoPass").value = "";
              $loading.remove();
              $error1.appendTo('#loading');
            }
            else if(data == "Exist"){
              // alert("Email Already Registered!");
              $loading.remove();
              $error2.appendTo('#loading');
            }
            else{
              alert(data);
            }
        },
        cache: false,
        contentType: false,
        processData: false
        });
        e.preventDefault();
        });

    $('#userConsti').on('change', function() {
      $cVal = this.value;
      
      if($cVal == "Konoin"){
        $("#boi").css("display", 'none');
        $("#emba").css("display", 'none');
        $("#kimulot").css("display", 'block');
        $("#chepch").css("display", 'block');
        $("#mogo").css("display", 'block');
      }else if($cVal == "Kwale"){
        $("#nya").css("display", 'none');
        $("#liko").css("display", 'none');
         $("#msambwe").css("display", 'block');
         $("#kina").css("display", 'block');
      }else{
         $("#nya").css("display", 'block');
         $("#liko").css("display", 'block');
         $("#msambwe").css("display", 'block');
         $("#kina").css("display", 'block');
      }
      // if($eduVal == 'Primary' || $eduVal == 'Secondary' ||  $eduVal == 'Undergraduate'){
      //   $('#prisec').show();
      //   $('#uni').hide();
      // }else if($eduVal == 'Undergraduate'){
      //   $('#uni').show();
      //   $('#prisec').hide();
      // }else{
      //   $('#uni').hide();
      //   $('#prisec').hide();
      // }
    });
    </script>
</body>
</html>
