<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>New Age - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">


  <style>
    #download {
      background-color: #e64f3b;
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgb(170, 128, 128);" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Simple messenger</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger"  href="./index.html">Account detials</a>
              </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"  href="#">Send SMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="./DesignTemplate.html">Template</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   
  
  
  <section class="features" id="features">
    <form name="form1" id="form1" method="post"  enctype="multipart/form-data" >

              <?php




                  if(isset($_REQUEST['attach']) && !isset($_REQUEST['sendreset'])){	
                    $str ='';	
                    if(!is_dir("attachTemp"))
                      mkdir("attachTemp");
                    
                    $name = $_FILES["browse"]["name"];
                    $tmp_name = $_FILES["browse"]["tmp_name"];	
                    $desti = "attachTemp/".$name;		
                    
                      
                    move_uploaded_file($tmp_name, $desti) ;
                    $file_content = file_get_contents($desti);
                    $str = trim(str_replace("\r\n",",",$file_content),",");

                    //echo "<script language='javascript'>alert('".$str."');</ script>";

                    //echo trim(str_replace("\r\n",",",$file_content),",");
                    unlink($desti);	
                    //exit;
                
                  }


              ?>   
      <div class="container">
                <!-- <div class="section-heading text-center">
                  <h2>Send Ur SMS </h2>
                  <p class="text-muted">Check out your mobile number,message and template here !</p>
                  <hr>
                </div> -->
                <div class="row">
                  <div class="col-lg-4 my-auto">
                    <div class="device-container">
                      <div class="device-mockup iphone6_plus portrait white">
                        <!-- <div class="device"> -->
                          <!-- <div class="screen">
                            Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else!
                            <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                          </div> -->
                          <!-- <div class="button"> -->
                            <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                          <!-- </div> -->
                        <!-- </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                      <div class="row">

                        <div class="col-lg-6">
                          <div class="feature-item">
                            <i class="icon-screen-smartphone text-primary"></i>
                                      <h3> PHONE NUMBERS</h3>
                            <p class="text-muted">Enter phone numbers seperated with commas</p>
                            <!-- <textarea type="text" class="form-control" name="mobile" placeholder="phone numbers"></textarea> -->
                            <textarea name="mobileNo" cols="50" rows="3" class="form-control"  id="mobileNo"><?php echo $str; ?></textarea>                           
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="feature-item">
                            <i class="icon-camera text-primary"></i>
                            <h3>Choose your CSV file</h3>
                            <p class="text-muted">Select your CSV file from your Desktop </p><br>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Example file input</label>
                              <input type="file" class="form-control-file" name="browse" id="filename">
                            </div>
                            <div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="return attach_file();">attach</button>
                           </div>        
                          </div>
                        </div>
                        
                      </div>
                     
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="feature-item">
                            <i class="icon-present text-primary"></i>
                            <h3>Your Message</h3>
                            <p class="text-muted">Enter your message Here!</p>
                            <textarea type="text" class="form-control" id="smsmsg" name="smsmsg" placeholder="Enter message">
                            </textarea>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="feature-item">
                            <i class="icon-lock-open text-primary"></i>
                            <h3>Choose Template</h3>
                            <p class="text-muted">Choose your Template here</p>
                            <div class="dropdown">
                              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Dropdown
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="return validateMobileNo();">Submit</button>
                  </div>
                </div>
              </div>

        </form>
        
      </section>
  

  
  
  
 
  <footer>
    <div class="container">
      <p>&copy; Your Website 2020. All Rights Reserved.</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>




  <script src="js/new-age.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-2JBCbWoMJPH+Uj7Wq5OLub8E5edWHlTM4ar/YJkZh3plwB2INhhOC3eDoqHm1Za/ZOSksrLlURLoyXVdfQXqwg==" crossorigin="anonymous"></script>

<script>

  var file_name;

function attach_file(){		
  // file_name = document.form1.browse.value ;
   file_name= document.getElementById("filename").value;
   file_name = file_name.substring(file_name.lastIndexOf("\\") + 1, file_name.length);

  alert('The file "' + file_name +  '" has been selected.');
        

	
  t = (/[.]/.exec(file_name)) ? /[^.]+$/.exec(file_name) : "undefined";    // 
  alert(t);
	
	if( (t == 'undefined')){
		alert("Give CSV or txt file ");
		//document.getElementById("filename").innerHTML ='';
		return;	
	}
	
	
	if( (t != 'csv') && (t != 'txt')){
		alert("Give CSV or txt file ");
		document.getElementById("filename").innerHTML ='';
		return;	
	}
		document.form1.action = "SendMessage.php?attach=true&sendUI=true";
		document.form1.submit();
		
}



function validateMobileNo(){
		mobileList = new Array(); 
 		 
		mobile = document.getElementById("mobileNo").value.length ;		
		
		
		if(document.getElementById("mobileNo").value.length == 0){
			alert('Enter mobile numbers');
			document.getElementById("mobileNo").focus();
			return false;			
		}		
		
		if((document.getElementById("smsmsg").value) == ""){
			alert('Enter message');
			document.getElementById("smsmsg").focus();
			return false;			
		}
		
		if((document.getElementById("smsmsg").value) > 160){
			alert('Message characters limited to 160');
			document.getElementById("smsmsg").focus();
			return false;			
		}
		
			
			mobileList = document.getElementById("mobileNo").value.split(",");	
		//	mobileList =  mobileList.uniq();  // prototype1.6.0 method uniq();
			
		var str='';
		
		for(i=0; i < mobileList.length; i++ ){				
			// if((mobileList[i]).checkInt() == 0){
			// 	;
			// }else{
			// 	alert('Give valid mobile number.');
			// 	document.getElementById("mobileNo").focus();
			// 	return false;				
			// } 			
			if( (mobileList[i].length != 10) ){
				alert('Check mobile No.');
				document.getElementById("mobileNo").focus();
				return false;
			}			
			 str = str+ "91"+mobileList[i]+',';				 
		}  // end for
		
		str = str.substr(0,(str.length-1) );		
		msg = $.trim(document.getElementById("smsmsg").value);
		//smssize 	= document.getElementById("smsSize").value;
    var smssize="";
		
		if(smssize=="" || smssize==0 ){
				smssize =100;
			}
		
		//alert("STR == "+str +" MSG == "+ msg);
		
		mnoarr = str.split(","); 
		
		if(mnoarr.length<smssize){
			//sends(str, msg);
      console.log(msg);
      console.log(str);
      sends(str, msg);
		}	
    else{
      console.log("no");
    }
			
			
		
		
		//sends(str, msg); 
  }
  


  function sends(str, msg){

          $.ajax({
            type: "GET",
            url: "https://api.mylogin.co.in/api/v2/SendSMS?ApiKey={ApiKey}&ClientId={ClientId}&SenderId={SenderId}&Message={"+msg+"}&MobileNumber={"+str+"}",
            contentType: "application/json", 
            dataType:
            'json',
            success: function (response) {
              if(response != 0){

                console.log("resp",response);
                console.log("null response")
              }

          
          
            }
          });







  }






</script>



</body>

</html>
