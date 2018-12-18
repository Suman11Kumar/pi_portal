<?php
        $regno;$b_code;$course;$contact;
        session_start();
        if(!isset($_SESSION['user']))
                header("Location: ./studentlogin.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
        function acad()
        {
                var y="";
                x = document.getElementById("pyear10").value;
                if(Number.isInteger(x) || length(x) != 4)
                        y="year must have numbers";
                x = document.getElementById("pyear12").value;
                if(Number.isInteger(x) || length(x) != 4)
                        y+="year must have numbers";
                x = document.getElementsByName("spi_1").value;
                z = document.getElementsByName("spi_2").value;
                if(Number.isNaN(x) || Number.isNaN(x))
                        y+="Write Correct spi";
                
                alert(y);
        }

        function get(){
                x = document.getElementById("cno").value;
                document.getElementById("deg").value = x;
                document.getElementById("deg").disabled=true;
        }

        function check()
        {
                regno=document.getElementById("Rno");
                name=document.getElementById("name");
                email=document.getElementById("email");
                course=document.getElementById("cno");
                branch=document.getElementById("bno");
                

                if(regno=="")
                alert("Registration Number can't be Blank");
                if(name=="")
                alert("Name can't be Blank");
                if(course=="")
                alert("Course can't be Blank");
                if(branch=="")
                alert("Branch can't be Blank");

                var emailPat = /^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/;
                var EmailmatchArray = email.match(emailPat);
                if (EmailmatchArray == null) {
                        alert("Your email address seems incorrect. Please try again.");
                return false;
        }



        }

</script>

<style>
        body {
            position: relative; 
            margin-top: 50px;
            
            
         
        }
        #section1 {padding-top:30px;height:100%;color: rgb(48, 46, 46);border:2px solid black; padding: 10px;
        }
        #section2 {padding-top:30px;height:100%;color: rgb(48, 46, 46); border:2px solid black; padding: 10px;}
        
        #section3 {padding-top:30px;height:100%;color: rgb(48, 46, 46); border:2px solid black; padding: 10px; }
        #section4 {padding-top:30px;height:100%;color: rgb(48, 46, 46); border:2px solid black; padding: 10px; }
</style>
</head>


<body>
    
    <div class="container ">
      
      
            <ul class="nav nav-tabs ">
                <li class="active"><a data-toggle="tab" href="#section1">Personal</a></li>
                <li><a data-toggle="tab" href="#section2">Academic</a></li>
                <li><a data-toggle="tab" href="#section3">Project/Intern</a></li>
                <li><a data-toggle="tab" href="#section4">Photo/Resume</a></li>
            </ul>

    </div>
    
    
<div class="container">
        <div class="tab-content" >
                <div id="section1" class="tab-pane fade in active">
                        <form name="personalDetails" action="personal_details.php" method="post">
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="RegNo">Registration Number</label>
                                                <input type="text" class="form-control" id="Rno" name="Rno" Placeholder="Registration Number" value='<?php echo $_SESSION['user'] ?>' disabled >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="Name">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name" Placeholder="Full Name" >
                                        </div>
                                </div>
                                <div class="form-row"> 
                                        <div class="form-group col-md-6">
                                                <label for="Course">Course</label>
                                                <input type="text" class="form-control" id="Cno" name="Cno" Placeholder="Course" >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="Guardian Name">Guardian Name</label>
                                                <input type="text" class="form-control" id="gname" name="gname" Placeholder="Guardian Name" >
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Branch">Branch</label>
                                                <input type="text" class="form-control" id="bno" name="bno" Placeholder="Branch" >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="Date of Birth">DOB</label>
                                                <input type="text" class="form-control" id="dob" name="dob" Placeholder="Date of Birth" >
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" Placeholder="Email Address" >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="linkedin">Linkedin ID:</label>
                                                <input type="email" class="form-control" id="lid" name="lid" Placeholder="Linkedin Profile" >
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Gender">Gender</label>
                                                <input type="text" class="form-control" id="gender" name="gender" Placeholder="Gender" >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="category">Category</label>
                                                <input type="text" class="form-control" id="category" name="category" Placeholder="Category" >
                                        </div>
                                </div>
                            
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Physically challenged">Physically Challenged</label>
                                                <select id="Physically_challenged" name="Physically_challenged" class="form-control" >
                                                        <option selected> Physically Challenged</option>
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="Residence">Residence</label>
                                                <select id="Residence" name="Residence" class="form-control" >
                                                        <option selected>Residence</option>
                                                        <option>Day Scholar</option>
                                                        <option>Hosteller</option>
                                                </select>
                                        </div>
                                </div>
                            
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Marital Status">Marital Status</label>
                                                <select name="Marital_Status" id="Marital_Status" name="Marital_Status" class="form-control" >
                                                        <option selected>Marital Status</option>
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="Number">Contact Number</label>
                                                <input type="number" class="form-control" name="cnum" id="cnum" minlength="10" maxlength="10" Placeholder="Contact Number" >
                                        </div>
                                </div>
                            
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="Guardian Contact">Guardian Contact</label>
                                                <input type="text" class="form-control" id="gcont" name="gcont" Placeholder="Guardian Contact" >
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="guardian_address">Guardian Address</label>
                                                <textarea class="form-control rounded-0" rows="3" name="gadd" id="gadd" placeholder="Guardian Address" ></textarea>
                                        </div>
                                </div>
                            
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="present_address">Present Address</label>
                                                <textarea class="form-control rounded-0" rows="3" id="Padd" id="Padd" placeholder="Address"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="permanent_address">Permanent Address</label>
                                                <textarea class="form-control rounded-0" rows="3" id="Padd1" id="Padd1" placeholder="Permanent Address" ></textarea>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <input class="btn btn-primary btn-block" id="continue1" id="continue1" type="submit" value="Continue" style="height: 50%">
                                </div>
  
                        </form>
                </div>

  
                <div id="section2" class="tab-pane fade">
                        <form method="POST" action="academic.php">
                                <h3>
                                        <u>10th</u>
                                </h3>
         
                                <div class="row">
             
                                        <div class="form-group col-6">
                                                <label for="School Name">School Name</label>
                                                <input type="text" class="form-control" id="sname10" name="sname10" Placeholder="School Name" required>
                                        </div>
                                        <div class="form-group col-6">
                                                <label for="Board">Board</label>
                                                <input type="text" class="form-control" id="bname10" name="bname10" Placeholder="Board" required >
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-6">
                                                <label for="">Passing Year</label>
                                                <input type="number" class="form-control" id="pyear10" name="pyear10" Placeholder="Passing Year"  required >
                                        </div>
                                        <div class="form-group col-6">
                                                <label for="Percentage">Percentage</label>
                                                <input type="number" class="form-control" id="Percentage10" name="Percentage10" Placeholder="Percentage" required >
                                        </div>
                                </div>

                                <h3><u>12th</u></h3>
                                <div class="row">
                                        <div class="form-group col-6">
                                                <label for="School Name">School Name</label>
                                                <input type="text" class="form-control" id="sname12" name="sname12" Placeholder="School Name" required  min="2010" max="2014">
                                        </div>
                                        <div class="form-group col-6">
                                                <label for="Board">Board</label>
                                                <input type="text" class="form-control" id="bname12" name="bname12" Placeholder="Board" required  min="60" max="100">
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-6">
                                                <label for="">Passing Year</label>
                                                <input type="number" class="form-control" id="pyear12" name="pyear12" Placeholder="Passing Year" required min="2012" max="2016">
                                        </div>
                                        <div class="form-group col-6">
                                                <label for="Percentage">Percentage</label>
                                                <input type="number" class="form-control" id="Percentage12" name="Percentage12" Placeholder="Percentage" required  min="60" max="100" >
                                        </div>
                                </div>
          
                                <h3>Graduation Details</h3>
                                <div class="row">
                      
                                        <div class="form-group col-6">
                                                <label for="Degree">Degree</label>
                                                <input type="text" class="form-control" id="deg" name="deg" Placeholder="Degree" onclick="get()">
                                
                        
                                        </div>
                                        <div class="form-group col-6">
                                                <label for="College">College</label>
                                                <input type="text" class="form-control" id="clg" name="clg" Placeholder="College Name" required>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-6">
                                                <label for="University">University</label>
                                                <input type="text" class="form-control" id="University" name="University" Placeholder="University Name" required>
                                        </div>
                                        <div class="form-group col-3">
                                                <label for="Year">Year</label>
                                                <input type="text" class="form-control" id="yr" name="yr" Placeholder=" Passing Year" required  min="2015" max="2017">
                                        </div>
                                        <div class="form-group col-3">
                                                <label for="Percentage">Percentage</label>
                                                <input type="text" class="form-control" id="Percentage" name="Percentage" Placeholder="Aggregate Percentage" required  min="60" max="100">
                                        </div>
                                </div>

                                <h3>MCA(If Applicable)</h3>
                                <div class="row">
                 
                                        <table class="table table-sm">
                                                <thead>
                                                        <tr>
                                                                <th scope="col">Semester</th>
                                                                <th scope="col">1</th>
                                                                <th scope="col">2</th>
                                                                <th scope="col">3</th>
                                                                <th scope="col">4</th>
                                                                <th scope="col">5</th>
                                                                <th scope="col">6</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <th scope="row">SPI</th>
                                                                <td ><input type="text" id="spi_1" name="spi_1" placeholder="" style="width: 50%" required></td>
                                                                <td><input type="text" id="spi_2" name="spi_2" placeholder="" style="width: 50%" required></td>
                                                                <td><input type="text" id="spi_3" name="spi_3" placeholder="" style="width: 50%"></td>
                                                                <td><input type="text" id="spi_4" name="spi_4" placeholder="" style="width: 50%"></td>
                                                                <td><input type="text" id="spi_5" name="spi_5" placeholder="" style="width: 50%"></td>
                                                                <td><input type="text" id="spi_6" name="spi_6" placeholder="" style="width: 50%"></td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">CPI</th>
                                                                <td colspan="2"><input type="text" name="cpi" placeholder="" style="width: 50%" ></td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                </div>
                                <div class="form-row">
                                        <input class="btn btn-primary btn-block" name="continue2" id="continue2" type="submit" value="Continue" style="height: 50%" onclick="acad()">
                                </div>
                        </form>
                </div>

                <div id="section3" class="tab-pane fade">
                        <form method = "post" action="project.php">
                                <div>
                                        <h3><u>Project</u>
                                                <div class="form-group">
                                                        <label for="Title"></label>
                                                        <input type="text" class="form-control" name="title" placeholder="Title of Project" required>
                                                </div>
                                                <div class="form-group">
                                                        <label for="Description"></label>
                                                        <textarea class="form-control" rows="5" name="comment" placeholder="Description"></textarea>
                                                </div>
                                        </h3>
                                        <h3>
                                                <u>Intern</u>

                                                <div class="form-group">
                                                        <label for="Organisation"></label>
                                                        <input type="text" class="form-control" name="org" placeholder="Organisation Name" required>
                                                </div>
                                                <div class="row">
                                                        <div class=" col form-group">
                                                                <label for="Duration"></label>
                                                                <input type="text" class="form-control" name="duration" placeholder="Duration" >
                                                        </div>
                                                        <div class=" col form-group">
                                                                <label for="Profile"></label>
                                                                <input type="text" class="form-control" name="profile" placeholder="Profile" required>
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <input class="btn btn-primary btn-block" name="continue3" id="continue3" type="submit" value="Continue" style="height: 50%" onclick="acad()">
                                                </div>
                                        </h3>
                                </div>
                        </form>
                </div>

                <div id="section4" class="tab-pane fade">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="row" style="margin-left: 150px;">
                                        <div class="col">
                                                Select image to upload:
                                                <input type="file" name="imageToUpload" id="imageToUpload">
       
                                                <input type="submit" value="Upload Image" name="submitI">
                
                                        </div>
                                        <div class="col">
                                                Select Resume to upload:
                                                <input type="file" name="resumeToUpload" id="resumeToUpload">
                                                <input type="submit" value="Upload Resume" name="submitR">
                                        </div>
                                </div>  
                                <div style="width: 250px">
                                        <input class="btn btn-primary btn-block" type="submit" value="Submit" style="margin-left: 400px;margin-top: 100px">
                                </div>
                        </form>
                </div>
        </div>
</div>
</body>
</html>

