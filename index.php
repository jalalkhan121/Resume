<?php error_reporting(E_ALL ^ E_WARNING); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script src="assets/js/jquery-3.6.1.min.js"></script>
  <script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
  <script>
    function splitHTMLtoMultiPagePDF() { 
      
      //---------------- hide nav menu--------------------------
      $("#navbar").hide();

var htmlWidth = $(".single-html-block").width();
//var htmlWidth = 15;
var htmlHeight = $(".single-html-block").height();
var pdfWidth = htmlWidth + (15 * 2);
var pdfHeight = (pdfWidth * 1.5) + (15 * 2);

var doc = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);

var pageCount = Math.ceil(htmlHeight / pdfHeight) - 1;

html2canvas($(".single-html-block")[0], { allowTaint: true }).then(function(canvas) {
  canvas.getContext('2d');

  var image = canvas.toDataURL("image/png", 1.0);
  doc.addImage(image, 'PNG', 15, 15, htmlWidth, htmlHeight);

//---------------------------------------------------------------------------------------------------
  for (var i = 1; i <= pageCount; i++) {
    doc.addPage(pdfWidth, pdfHeight);
    doc.addImage(image, 'PNG', 15, -(pdfHeight * i)+15, htmlWidth, htmlHeight);
  }
  
  

  doc.save("split-to-multi-page.pdf");
});
};
</script>
<?php $colorScheme = '#930505'; // red #dc3545, green #198754, blue #0d6efd, yellow #fbc117, purple #c828cb, maroon #930505, pink #ef1c8c ?>
<style>
  .skills .progress-bar, 
  .nav-menu a:hover, 
  .nav-menu .active, 
  .nav-menu .active:focus, 
  .nav-menu li:hover>a,
  .back-to-top,
  .section-title h2::after {
    background-color: <?php echo $colorScheme; ?> !important;
}
.resume .resume-item h4 {
    color: <?php echo $colorScheme; ?> !important;
}
.resume .resume-item{
    border-left: 2px solid <?php echo $colorScheme; ?> !important;
}
.resume .resume-item::before {
    border: 2px solid <?php echo $colorScheme; ?> !important;
}
.section-title h2::before {
    width: 340px !important;
    left: calc(40% - 60px) !important;
}
.section-title h2::after {
    width: 220px !important;
    left: calc(41.5% - 20px) !important;
}
section{
  padding:15px 0px !important;
}
@media (min-width: 992px) {
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50% !important;
    }
}
.col-lg-6 input[type="text"], .col-lg-6 optgroup, .col-lg-6 select, .col-lg-6 textarea {
    /*min-width: 99% !important;*/
	margin:0px !important;
    padding: 5px 10px !important;
    font-size: 12px !important;
	float: left !important;
    /*width: 143px !important;*/
}
.form-input input[type="text"], .form-input optgroup, .form-input select, .form-input6 textarea {
    /*min-width: 99% !important;*/
	margin:0px !important;
    padding: 5px 10px !important;
    font-size: 12px !important;
	float: left !important;
    /*max-width: 158px !important;*/
}
input.add-more, 
input.remove-input, 
input.add-moreCom, 
input.add-moreEdu, 
input.add-morePro, 
input.add-moreCer, 
input.remove-inputCom, 
input.remove-inputEdu, 
input.remove-inputPro, 
input.remove-inputCer{
	width:30px !important; 
	}
textarea {
    /* resize: vertical; */
    min-height: 130px !important;
    font-size: 12px !important;
}
.col-lg-12 button, .col-lg-12 input, .col-lg-12 optgroup, .col-lg-12 select/*, .col-lg-12 textarea*/ {
    /* min-width: 99% !important; */
    margin: 3px 5px !important;
    padding: 5px 10px !important;
    font-size: 12px !important;
    float: left !important;
   /* width: 229px !important;*/
}

.remove-input,.remove-inputEdu{
	    background-color: #ffe4e4 !important;
    border-color: #ffc4c4 #ffcccc #ffd8d8 !important;
	    width: 45px !important;
    border-radius: 4px !important;
    font-size: 1.5em !important;
    padding: 4px !important;
    color: #454545 !important;
    vertical-align: bottom !important;
    margin-left: 10px !important;
	}
.add-more, .add-moreEdu{
	background-color: #ffc72c !important;
    border-color: #ffd98e #ffbe3d #de9300 !important;
	width: 45px !important;
    border-radius: 4px !important;
    font-size: 1.5em !important;
    padding: 4px !important;
    color: #454545 !important;
    vertical-align: bottom !important;
    margin-left: 10px !important;
	}
.form-input{
	width:100% !important;
	}
input.txtFullwidth {
	width:100% !important;
	margin: 5px !important;
	}	
.amSkill{
	width:41% !important;
	padding: 5px 10px;
    font-size: 16px;
	}
.eduGroup {
    border: solid 1px #ffc72c !important;
    padding: 10px;
    margin: 10px;
}
.comGroup {
    border: solid 1px #ccc !important;
    padding: 10px;
    margin: 10px;
}

/*.nav-menu a:hover, .nav-menu .active, .nav-menu .active:focus, .nav-menu li:hover>a {
    color: #fff;
    background: #0563bb;
    width: 121px !important;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;
}*/
/*.modal-container {
    width: 80% !important;
	height:auto !important;
}*/
.modal-container {
    float: right;
    width: 40% !important;
    height: auto !important;
    margin-right: 0px !important;
	min-height:100% !important;
}
input, textarea, select {
	width:83% !important;
    font-size: 1.1em;
    border-radius: 6px;
    box-sizing: border-box;
    padding: 1px 0px;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, .05);
    border: 1px solid #c2c3c4;
    background-color: #fff;
    border: 1px solid #c2c3c4;
    background-color: #fff;
}
.taEdu{
    width: 95% !important;
    margin: 5px !important;
	min-height:83px !important;
}
.row {
    flex-flow: nowrap;
    justify-content: left;
}
.txtH5{
	float: right;
    background: #f3f3f3 !important;
    color: #000;
    margin-top: -30px !important;
    font-size: 12px !important;
    padding: 5px 15px;
}
.txtUrl{
    color:#09F !important;
	text-decoration:underline;
}
	   
@media (min-width: 991px) {
    #main {
        margin-left: 0px !important;
    }
}
@media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1327px !important;
    }
}
<!-- for mobile-->
  /* Extra small devices (phones, 600px and down) */
@media screen and (max-width: 776px) {
    .modal {
        display: block !important;
    }
}
.modal, .modal-dialog, .modal-body{
	z-index:555555 !important;
	}
</style>
<!--========================== Crop image / photo ======================-->
<link rel="stylesheet" href="assets/bootstrap.min.css" />
<!--<script src="assets/jquery.min.js"></script>-->
<script src="assets/bootstrap.min.js"></script>        
<link rel="stylesheet" href="assets/dropzone.css" />
<link href="assets/cropper.css" rel="stylesheet"/>
<script src="assets/dropzone.js"></script>
<script src="assets/cropper.js"></script>
<style>

		/*.image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}*/
		
		</style>
<!--============================== Crop image / photo end =================================-->  
<style>
 body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<link rel="stylesheet" href="assets/bootstrap.min.css" />
<!--<script src="assets/jquery.min.js"></script>-->
<script src="assets/bootstrap.min.js"></script> 
<!--<script src="assets/jquery.min.js"></script>-->
<script>
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Shipper</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Destination</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Schedule</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Cargo</small></p>
            </div>
        </div>
    </div>
    
   <form name="frmResume1" id="frmResume1" method="post" action="resume.php" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Shipper</h3>
            </div>
            <div class="panel-body">
                
                
          <input type="hidden" id="hidden1" name="step" value="2" />
         <div class="row">
         <!---------------- LEFT SECTION ( Basic info)-------------------------->
         <div class="col-lg-12">
         
         
         <!-- ===================  Code for Crop image / photo ================= -->
            <div class="row">
				<!--<div class="col-md-4">&nbsp;</div>-->
				<div class="col-md-3">
					<div class="image_area">
						
							<label for="upload_image">
								<img src="upload/user.png" id="uploaded_image" class="img-responsive img-circle" />
								<div class="overlay">
									<div class="text">Upload Photo</div>
								</div>
								<input type="file" name="image" class="image" id="upload_image" style="display:none" />
							</label>
						
					</div>
			    </div>
                <div class="col-md-9">
                <textarea name="intro" placeholder="Introduction" />Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</textarea>
          </div>
    		<div class="modal fade" id="modalPhoto" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none">
			  	<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
			      			<button type="button" id="crop" class="btn btn-primary">Crop</button>
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			      		</div>
			    	</div>
			  	</div>
			</div>			
		</div>
         
         
         
         
         
          <div class="row">
          <input type="hidden" name="uploaded_image_hidden" id="uploaded_image_hidden" value="">
              <div class="col-lg-6"><input type="text" name="name" placeholder="Name" value="Jalal Khan" /></div>
              <div class="col-lg-6"><input type="text" name="designation"  placeholder="Designation" value="Senior PHP Developer" /></div>
          </div>
          <div class="row">
              <div class="col-lg-6"><input type="date" name="dob"  placeholder="Date of Birth" /></div>
              <div class="col-lg-6"><input type="text" name="age"  placeholder="Age"  value="38" /></div>
          </div>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="website"  placeholder="Website"  value="https://www.tenderzonepakistan.com" /></div>
              <div class="col-lg-6"><input type="text" name="degree"  placeholder="Degree"  value="MCS" /></div>
          </div>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="phone"  placeholder="Phone" value="+923027549807" /></div>
              <div class="col-lg-6"><input type="text" name="email"  placeholder="Email" value="jalalkhan121@gmail.com" /></div>
          </div>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="address"  placeholder="Address" value="Street #1 house #3 basti Ameer Khan near chak 10 BC" /></div>
              <div class="col-lg-6"><input type="text" name="city"  placeholder="City" value="Bahwalpur, Pakistan" /></div>
          </div>
        </div>
        <!---------------- RIGHT SECTION-------------------------->
		<div class="col-lg-12"><b>Skills</b>            
           <div class="row">
              <div class="col-lg-6"><input type="text" class="amSkill" name="SkillTitle[]" value="PHP" placeholder="Title e.g. Marketing Experience" /></div>
              <div class="col-lg-6"><input type="text" class="amSkill" name="SkillValue[]"  value="98" placeholder="Value e.g. 98" /></div>
          </div>
          
         	<div class="row">
              	<div class="row form-input clsSkill">
            		<input name="SkillTitle[]" class="amSkill" placeholder="Title e.g. Marketing Experience" value="HTML" type="text" /><input name="SkillValue[]" class="amSkill" placeholder="Value e.g. 98" value="100" type="text" /> 
        		</div>
                <input type="button" class="add-more" value="+" />
            </div>
             
         
         
          </div>
          
     </div>
          
          
                
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Destination</h3>
            </div>
            <div class="panel-body">
            
              
          <?php 
		  //--------------------------- create hidden fields of form 1 element -------------------------------
		  foreach($_POST as $key=>$val) {
			  if($key != "SkillTitle" && $key != "SkillValue" && $key != "step" && $key != "submit") {
			  	echo '<input type="hidden" name="'.$key.'" value="'.$val.'" />';
			  	}
			  }
		  foreach($_POST['SkillTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="SkillTitle[]" value="'.$val.'" />';
			  }
		  foreach($_POST['SkillValue'] as $key=>$val) {
			  	echo '<input type="hidden" name="SkillValue[]" value="'.$val.'" />';
			  }
			  
		  ?>
          <input type="hidden" id="hidden2" name="step" value="3" />
          <div class="row">
          <b>Education</b>
         <div class="row form-input edu">
              <div class="col-lg-12 eduGroup"><input type="text" name="eduDegreeTitle[]" value="Matricullation" placeholder="Degree Title" /><input type="text" name="eduDegreeInstitute[]" value="Rochester Institute of Technology, Rochester, NY" placeholder="Institute Title" /> <span style="float:left;">Year</span><input type="date" value="2003-09-28" name="eduDegreeYearFrom[]"  placeholder="from" /><input type="date" value="2005-09-28" name="eduDegreeYearTo[]"  placeholder="to" /><textarea class="taEdu" name="eduDegreeYearDes[]" placeholder="Description">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</textarea></div> </div>
              <input type="button" class="add-moreEdu" value="+" />
         
          </div>
          
         <div class="row">
         
         <div class="row form-input com">
              <div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Professional Experience</b><br /><input type="text" name="companyTitle[]" value="Experion, New York, NY" placeholder="Company Title" /><input type="text" name="companyDesignation[]"  value="Senior graphic design specialist" placeholder="companyDesignation" /> <span style="float:left;">Year</span><input type="date" value="2009-09-01" name="companyYearFrom[]"  placeholder="from" /><input type="date" name="companyYearTo[]" value="2010-09-01"  placeholder="to" /><textarea class="taEdu" name="companyYearDes[]" placeholder="Description">Lead in the design, development, and implementation of the graphic, layout, and production communication materials
Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.</textarea> </div>
          </div>
<input type="button" class="add-moreCom" value="+" />
          </div>
          
        
          
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Schedule</h3>
            </div>
            <div class="panel-body">
           <?php 
		  //--------------------------- create hidden fields of form 1, 2 element -------------------------------
		 /* echo '<pre>';
		  print_r($_POST);
		  echo '<pre>';*/
		  foreach($_POST as $key=>$val) {
			  if($key != "SkillTitle" && 
				  $key != "SkillValue" && 
				  $key != "step" && 
				  $key != "submit" && 
				  $key != "eduDegreeTitle" && 
				  $key != "eduDegreeYearFrom" && 
				  $key != "eduDegreeYearTo" && 
				  $key != "eduDegreeYearDes" && 
				  $key != "eduDegreeInstitute" && 
				  $key != "companyTitle" && 
				  $key != "companyDesignation" && 
				  $key != "companyYearFrom" && 
				  $key != "companyYearTo" && 
				  $key != "companyYearDes" ) 
				  {
					echo '<input type="hidden" name="'.$key.'" value="'.$val.'" />';
					}
			  }
		  foreach(@$_POST['SkillTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="SkillTitle[]" value="'.$val.'" />';
			  }
		  foreach(@$_POST['SkillValue'] as $key=>$val) {
			  	echo '<input type="hidden" name="SkillValue[]" value="'.$val.'" />';
			  }
//============================ Education =============================================			  
		foreach($_POST['eduDegreeTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeTitle[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeYearFrom'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeYearFrom[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeYearTo'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeYearTo[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeYearDes'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeYearDes[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeInstitute'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeInstitute[]" value="'.$val.'" />';
			  }
//============================ Company / Professional experience ================================	  
		foreach($_POST['companyTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyTitle[]" value="'.$val.'" />';
			  }
		foreach($_POST['companyDesignation'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyDesignation[]" value="'.$val.'" />';
			  }	  
		foreach($_POST['companyYearFrom'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyYearFrom[]" value="'.$val.'" />';
			  }
		foreach($_POST['companyYearTo'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyYearTo[]" value="'.$val.'" />';
			  }
		foreach($_POST['companyYearDes'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyYearDes[]" value="'.$val.'" />';
			  }	 
//============================ Project / Portfolio =============================================	  
		
			  
		  ?>
          <input type="hidden" id="hidden3" name="step" value="4" />
         <div class="row form-input pro">
              <div class="col-lg-12 comGroup form-input pro"> <b style="display:block; float:left;">Project Detail</b><br /><input type="text" class="txtFullwidth" name="projectTitle[]" value="My Project" placeholder="Project Title" /><input type="url"  class="txtFullwidth" name="projectUrl[]" value="http://proadmission.great-site.net" placeholder="Link" /> <br /><span style="float:left;">Year</span><input type="date" name="projectYearFrom[]" value="2013-11-17"  placeholder="Start Date" /><input type="date" name="projectYearTo[]" value="2015-10-12"  placeholder="End date" /><textarea class="taEdu" name="projectYearDes[]" placeholder="Description">Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable</textarea></div>
        
          
           </div>
         <input type="button" class="add-morePro" value="+" />
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
             </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
           <?php 
		  //--------------------------- create hidden fields of form 1, 2, 3 elements -------------------------------
	
		  foreach($_POST as $key=>$val) {
			  if($key != "SkillTitle" && 
				  $key != "SkillValue" && 
				  $key != "step" && 
				  $key != "submit" && 
				  $key != "eduDegreeTitle" && 
				  $key != "eduDegreeYearFrom" && 
				  $key != "eduDegreeYearTo" && 
				  $key != "eduDegreeYearDes" && 
				  $key != "eduDegreeInstitute" && 
				  $key != "companyTitle" && 
				  $key != "companyDesignation" && 
				  $key != "companyYearFrom" && 
				  $key != "companyYearTo" && 
				  $key != "companyYearDes" && 
				  $key != "projectTitle" && 
				  $key != "projectUrl" && 
				  $key != "projectYearFrom" && 
				  $key != "projectYearTo" && 
				  $key != "projectYearDes" ) {
					echo '<input type="hidden" name="'.$key.'" value="'.$val.'" />';
					}
			  }
		   foreach(@$_POST['SkillTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="SkillTitle[]" value="'.$val.'" />';
			  }
		  foreach(@$_POST['SkillValue'] as $key=>$val) {
			  	echo '<input type="hidden" name="SkillValue[]" value="'.$val.'" />';
			  }
//============================ Education =============================================			  
		foreach($_POST['eduDegreeTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeTitle[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeYearFrom'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeYearFrom[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeYearTo'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeYearTo[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeYearDes'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeYearDes[]" value="'.$val.'" />';
			  }
		foreach($_POST['eduDegreeInstitute'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeInstitute[]" value="'.$val.'" />';
			  }
//============================ Company / Professional experience ================================	  
		foreach($_POST['companyTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyTitle[]" value="'.$val.'" />';
			  }
		foreach($_POST['companyDesignation'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyDesignation[]" value="'.$val.'" />';
			  }	  
		foreach($_POST['companyYearFrom'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyYearFrom[]" value="'.$val.'" />';
			  }
		foreach($_POST['companyYearTo'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyYearTo[]" value="'.$val.'" />';
			  }
		foreach($_POST['companyYearDes'] as $key=>$val) {
			  	echo '<input type="hidden" name="companyYearDes[]" value="'.$val.'" />';
			  }	 
//============================ Project / Portfolio =============================================	  
		foreach($_POST['projectTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="projectTitle[]" value="'.$val.'" />';
			  }
		foreach($_POST['projectUrl'] as $key=>$val) {
			  	echo '<input type="hidden" name="projectUrl[]" value="'.$val.'" />';
			  }	  
		foreach($_POST['projectYearFrom'] as $key=>$val) {
			  	echo '<input type="hidden" name="projectYearFrom[]" value="'.$val.'" />';
			  }
		foreach($_POST['projectYearTo'] as $key=>$val) {
			  	echo '<input type="hidden" name="projectYearTo[]" value="'.$val.'" />';
			  }
		foreach($_POST['projectYearDes'] as $key=>$val) {
			  	echo '<input type="hidden" name="projectYearDes[]" value="'.$val.'" />';
			  }		 
			  
		  ?>
          <input type="hidden" id="hidden4" name="step" value="5" />
          <!--<h3>Certificate 1</h3>-->
         <div class="row form-input"><div class="col-lg-12 comGroup form-input cert"> <b style="display:block; float:left;">Certificate</b><br /><input type="text" name="cerTitle[]" value="Certificate" placeholder="Certificate Title" /> <span style="float:left;">Year</span><input type="date" name="cerYearFrom[]" value="2015-10-12"  placeholder="from" /><input type="date" name="cerYearTo[]" value="2017-10-12"  placeholder="to" /><br /><textarea class="taEdu" name="cerYearDes[]" placeholder="Description">Some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here</textarea></div><input type="button" class="add-moreCer" value="+" /></div>
         <!-- <div class="row">
              <div class="col-lg-6"><input type="date" name="dob"  placeholder="Date of Birth" /></div>
              <div class="col-lg-6"><input type="text" name="age"  placeholder="Age" /></div>
          </div>
          <h3>Certificate 2</h3>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="website"  placeholder="Website" /></div>
              <div class="col-lg-6"><input type="text" name="degree"  placeholder="Degree" /></div>
          </div>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="phone"  placeholder="Phone" /></div>
              <div class="col-lg-6"><input type="text" name="email"  placeholder="Email" /></div>
          </div>
          <h3>Certificate 3</h3>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="address"  placeholder="Address" /></div>
              <div class="col-lg-6"><input type="text" name="city"  placeholder="City" /></div>
          </div>
        </div>-->
        
                <input class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </form>
</div>
 <script>
  // add more input
    var addButtonHTML, removeButtonHTML;
    $(document).ready(function () {
        var inputRowHTML = '<div class="row form-input"><input name="SkillTitle[]" class="amSkill" placeholder="Title e.g. Marketing Experience" type="text" value="Skill" /><input name="SkillValue[]" class="amSkill" placeholder="Value e.g. 98" type="text" value="98" /> <input type="button" class="add-more" value="+" /></div>';
        addButtonHTML = '<input type="button" class="add-more" value="+" />';
        removeButtonHTML = '<input type="button" class="remove-input" value="-" />';


        $("body").on("click", ".add-more", function () {
            $(".clsSkill").last().after(inputRowHTML);
            showAddRemoveIcon();
        });

        $("body").on("click", ".remove-input", function () {
            $(this).parent().remove();
        });
    });

    function showAddRemoveIcon() {
        $('.form-input').find(".add-more").after(removeButtonHTML);
        $('.form-input').last().find(".remove-input").remove();

        $('.form-input').find(".add-more").remove();
        $('.form-input').last().append(addButtonHTML);
    }
<!--============================= Add / Remove for Degree ==================================-->	
var addButtonHTMLEdu, removeButtonHTMLEdu;
    $(document).ready(function () {
        var inputRowHTMLEdu = ' <div class="row form-input"><div class="col-lg-12 eduGroup"><input type="text" name="eduDegreeTitle[]" value="Matricullation" placeholder="Degree Title" /><input type="text" name="eduDegreeInstitute[]" value="Rochester Institute of Technology, Rochester, NY" placeholder="Institute Title" /> <span style="float:left;">Year</span><input type="date" value="2003-09-28" name="eduDegreeYearFrom[]"  placeholder="from" /><input type="date" value="2005-09-22" name="eduDegreeYearTo[]"  placeholder="to" /><textarea class="taEdu" name="eduDegreeYearDes[]" placeholder="Description">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</textarea></div><input type="button" class="add-moreEdu" value="+" /></div>';
        addButtonHTMLEdu = '<input type="button" class="add-moreEdu" value="+" />';
        removeButtonHTMLEdu = '<input type="button" class="remove-inputEdu" value="-" />';


        $("body").on("click", ".add-moreEdu", function () {
            $(".edu").last().after(inputRowHTMLEdu);
            showAddRemoveIconEdu();
        });

        $("body").on("click", ".remove-inputEdu", function () {
            $(this).parent().remove();
        });
    });

    function showAddRemoveIconEdu() {
        $('.form-input').find(".add-moreEdu").after(removeButtonHTMLEdu);
        $('.form-input').last().find(".remove-inputEdu").remove();

        $('.form-input').find(".add-moreEdu").remove();
        $('.form-input').last().append(addButtonHTMLEdu);
    }
<!--============================= Add / Remove for Company / Professional Experience  ==================================-->	
var addButtonHTMLCom, removeButtonHTMLCom;
    $(document).ready(function () {
        var inputRowHTMLCom = '<div class="row form-input"><div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Professional Experience</b><br /><input type="text" name="companyTitle[]" value="Experion, New York, NY" placeholder="Company Title" /><input type="text" name="companyDesignation[]"  value="Senior graphic design specialist" placeholder="companyDesignation" /> <span style="float:left;">Year</span><input type="date" value="2009-09-01" name="companyYearFrom[]"  placeholder="from" /><input type="date" name="companyYearTo[]" value="2010-09-01"  placeholder="to" /><textarea class="taEdu" name="companyYearDes[]" placeholder="Description">Lead in the design, development, and implementation of the graphic, layout, and production communication materials Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.</textarea> <input type="button" class="add-moreCom" value="+" /></div></div>';
        addButtonHTMLCom = '<input type="button" class="add-moreCom" value="+" />';
        removeButtonHTMLCom = '<input type="button" class="remove-inputCom" value="-" />';


        $("body").on("click", ".add-moreCom", function () {
            $(".com").last().after(inputRowHTMLCom);
            showAddRemoveIconCom();
        });

        $("body").on("click", ".remove-inputCom", function () {
            $(this).parent().remove();
        });
    });

    function showAddRemoveIconCom() {
        $('.form-input').find(".add-moreCom").after(removeButtonHTMLCom);
        $('.form-input').last().find(".remove-inputCom").remove();

        $('.form-input').find(".add-moreCom").remove();
        $('.form-input').last().append(addButtonHTMLCom);
    }
<!--============================= Add / Remove for Project / Portfolio  ==================================-->	
var addButtonHTMLPro, removeButtonHTMLPro;
    $(document).ready(function () {
        var inputRowHTMLPro = '<div class="row form-input"><div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Project Detail</b><br /><input type="text" class="txtFullwidth" name="projectTitle[]" value="My Project" placeholder="Project Title" /><input type="url"  class="txtFullwidth" name="projectUrl[]" value="http://proadmission.great-site.net" placeholder="Link" /> <br /><span style="float:left;">Year</span><input type="date" name="projectYearFrom[]" value="2013-11-17"  placeholder="Start Date" /><input type="date" name="projectYearTo[]" value="2015-10-12"  placeholder="End date" /><textarea class="taEdu" name="projectYearDes[]" placeholder="Description">Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable</textarea> <input type="button" class="add-morePro" value="+" /></div></div>';
        addButtonHTMLPro = '<input type="button" class="add-morePro" value="+" />';
        removeButtonHTMLPro = '<input type="button" class="remove-inputPro" value="-" />';


        $("body").on("click", ".add-morePro", function () {
            $(".pro").last().after(inputRowHTMLPro);
            showAddRemoveIconPro();
        });

        $("body").on("click", ".remove-inputPro", function () {
            $(this).parent().remove();
        });
    });

    function showAddRemoveIconPro() {
        $('.form-input').find(".add-morePro").after(removeButtonHTMLPro);
        $('.form-input').last().find(".remove-inputPro").remove();

        $('.form-input').find(".add-morePro").remove();
        $('.form-input').last().append(addButtonHTMLPro);
    }
<!--============================= Add / Remove for Certificate  ==================================-->
var addButtonHTMLCer, removeButtonHTMLCer;
    $(document).ready(function () {
        var inputRowHTMLCer = '<div class="row form-input"><div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Certificate</b><br /><input type="text" name="cerTitle[]" value="Certificate" placeholder="Certificate Title" /> <span style="float:left;">Year</span><input type="date" name="cerYearFrom[]" value="2015-10-12"  placeholder="from" /><input type="date" name="cerYearTo[]" value="2017-10-12"  placeholder="to" /><br /><textarea class="taEdu" name="cerYearDes[]" placeholder="Description">Some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here</textarea> <input type="button" class="add-moreCer" value="+" /></div></div>';
        addButtonHTMLCer = '<input type="button" class="add-moreCer" value="+" />';
        removeButtonHTMLCer = '<input type="button" class="remove-inputCer" value="-" />';


        $("body").on("click", ".add-moreCer", function () {
            $(".cert").last().after(inputRowHTMLCer);
            showAddRemoveIconCer();
        });

        $("body").on("click", ".remove-inputCer", function () {
            $(this).parent().remove();
        });
    });

    function showAddRemoveIconCer() {
        $('.form-input').find(".add-moreCer").after(removeButtonHTMLCer);
        $('.form-input').last().find(".remove-inputCer").remove();

        $('.form-input').find(".add-moreCer").remove();
        $('.form-input').last().append(addButtonHTMLCer);
    }		
</script>
  <script src="images/layer.js.download"></script>
  <script src="images/verify-sessionstorage.js.download"></script>
  <script src="images/scroll.js.download"></script>
  <!--================================= Crop photo / image =====================================-->
  <script>

$(document).ready(function(){

	var $modal = $('#modalPhoto');

	var image = document.getElementById('sample_image');

	var cropper;

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function(event)
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: 1,
			viewMode: 3,
			preview:'.preview'
		});
	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});

	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:500,
			height:500
		});

		canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
				var base64data = reader.result;
				$.ajax({
					url:'upload.php',
					method:'POST',
					data:{image:base64data},
					success:function(data)
					{
						$modal.modal('hide');
						$('#uploaded_image').attr('src', data);
						$('#uploaded_image_main').attr('src', data);
						$('#uploaded_image_hidden').attr('value', data);
					}
				});
			};
		});
	});
	
});
//---------------- form steps (Next / previous) -----------------
function changeAction(num,frmID){
	var hiddenCurrent = "hidden"+num;
	var formCurrent = "frmResume"+num;
	String(hiddenCurrent);
	String(formCurrent);
	//alert(formCurrent);
	const El_hidden = document.getElementById(hiddenCurrent); 
	//alert(El_hidden.value);
	var NewVal = num -1;
	El_hidden.value = NewVal; 
	//alert(El_hidden.value);
	const EL_form = document.getElementById(formCurrent); 
	EL_form.action = "resume.php#"+frmID;
	//EL_form.action = "resume.php";
	//alert(EL_form.action);
	EL_form.submit();
	}
</script>
</body>
</html>
