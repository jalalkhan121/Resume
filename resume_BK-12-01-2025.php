<?php 
if(isset($_POST["name"]) && $_POST["name"] != "") {
	$intro = $_POST["intro"];
	$name = $_POST["name"];
	$dob = $_POST["dob"];
	$age = $_POST["age"];
	$website = $_POST["website"];
	$degree = $_POST["degree"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyResume Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  
  <!-- =======================================================
  * Template Name: MyResume - v4.9.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- JS to PDF -->
  <!-- <script src="assets/js/convert.js"></script> -->
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
.col-lg-6 button, .col-lg-6 input, .col-lg-6 optgroup, .col-lg-6 select, .col-lg-6 textarea {
    /*min-width: 99% !important;*/
	margin:0px !important;
    padding: 5px 10px !important;
    font-size: 12px !important;
	float: left !important;
    width: 143px !important;
}
.col-lg-12 button, .col-lg-12 input, .col-lg-12 optgroup, .col-lg-12 select/*, .col-lg-12 textarea*/ {
    /* min-width: 99% !important; */
    margin: 0px !important;
    padding: 5px 10px !important;
    font-size: 12px !important;
    float: left !important;
    width: 143px !important;
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
	width:43% !important;
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
</style>
</head>

<body>
<div class="single-html-block">
<div class="source-html-outer">
    <div id="source-html">

    <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!--<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->
  <!--add more input field-->
     <!--<link rel="stylesheet" type="text/css" href="addMore/style.css" />
 <link rel="stylesheet" type="text/css" href="addMore/form.css" />-->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
       <!-- <li><a href="resume.php#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>-->
        <li><a href="resume.php" class="nav-link"><i class="bx bx-home"></i> <span>Start</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Certificates</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Reference</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!--<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Brandon Johnson</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
      
    </div>
  </section>--><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p><?php echo @$intro?@$intro:'<em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em>'; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3><?php echo @$name?@$name:'UX/UI Designer'; ?> &amp; Web Developer.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo @$dob?@$dob:''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo @$website?@$website:''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo @$phone?@$phone:''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo @$city?@$city:''; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo @$age?@$age:''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo @$degree?@$degree:''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?php echo @$email?@$email:''; ?>com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">
     
        <?php 
		$i = 0;
		
		if(isset($_POST['SkillTitle'])) { //echo '<div class="col-lg-6">';
			foreach($_POST['SkillTitle'] as $SkillTitle) { //print_r($_POST['SkillTitle']); exit; ?>
        <div class="col-lg-6">
        	<div class="progress">
              <span class="skill"><?php echo $SkillTitle; ?> <i class="val"><?php echo $_POST['SkillValue'][$i]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_POST['SkillValue'][$i]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
        </div>
        <?php 
		if($i%4==0) { echo ''; }
		$i++; }  // end foreach
		
		}  else {
		?>
        
         
		<div class="col-lg-6">
            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">CSS <i class="val">98%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">jQuery <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">PHP <i class="val">92%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">MySQLi <i class="val">83%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
         </div>
        <?php } ?>

      </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
        <?php 
		
		if(isset($_POST['eduDegreeTitle']) && !empty($_POST['eduDegreeTitle'])) {
		$i=0;
		
		?>
          <div class="col-lg-6">
            <h3 class="resume-title">Education</h3>
            <?php 
			foreach($_POST['eduDegreeTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeTitle[]" value="'.$val.'" />';
			?>
            <div class="resume-item">
              <h4><?php echo $val; ?></h4>
              <h5 class="txtH5"><?php echo date('F d, Y',strtotime($_POST['eduDegreeYearFrom'][$i])); ?> - <?php echo date('F d, Y',strtotime($_POST['eduDegreeYearTo'][$i])); ?></h5 class="txtH5">
              <p><em><?php echo $_POST['eduDegreeInstitute'][$i]; ?></em></p>
              <p><?php echo $_POST['eduDegreeYearDes'][$i]; ?></p>
            </div>
            <?php /*?><div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5 class="txtH5">2010 - 2014</h5 class="txtH5">
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div><?php */
			}
			$i++;
			?>
          </div>
          <?php 
		}
		
		if(isset($_POST['companyTitle']) && !empty($_POST['companyTitle'])) {
		$i=0;
		
		?>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <?php 
			foreach($_POST['companyTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeTitle[]" value="'.$val.'" />';
			?>
            <div class="resume-item">
              <h4><?php echo $_POST['companyDesignation'][$i]; ?></h4>
              <h5 class="txtH5"><?php echo date('F d, Y',strtotime($_POST['companyYearFrom'][$i])); ?> - <?php echo date('F d, Y',strtotime($_POST['companyYearTo'][$i])); ?></h5 class="txtH5">
              <p><em><?php echo $_POST['companyTitle'][$i]; ?> </em></p>
              <ul>
                <li><?php echo $_POST['companyYearDes'][$i]; ?></li>
              </ul>
            </div>
            <?php 
			}
			$i++;
			?>
            
          </div>
          <?php
          } // end if
		  ?>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio Section</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
         <?php 
		if(isset($_POST['projectTitle']) && !empty($_POST['projectTitle'])) {
		$i=0;

			foreach($_POST['projectTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="eduDegreeTitle[]" value="'.$val.'" />';
			?>

          <div class="col-lg-6">
           <!-- <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Brandon Johnson</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Company 1</h3>-->
            <div class="resume-item">
              <h4><?php echo $_POST['projectTitle'][$i]; ?></h4>
              <i class="txtUrl"><?php echo $_POST['projectUrl'][$i]; ?></i>
              <h5 class="txtH5"><?php echo date('F d, Y',strtotime($_POST['projectYearFrom'][$i])); ?> - <?php echo date('F d, Y',strtotime($_POST['projectYearTo'][$i])); ?></h5 class="txtH5">
              <p><em><?php //echo $_POST['projectYearCompany'][$i]; ?></em></p>
              <p><?php echo $_POST['projectYearDes'][$i]; ?></p>
            </div>
            <!--<div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5 class="txtH5">2010 - 2014</h5 class="txtH5">
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>-->
          </div>
          <?php 
		  $i++;
			}
		}
		  ?>
          <!--<div class="col-lg-6">
            <h3 class="resume-title">Company 2</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5 class="txtH5">2019 - Present</h5 class="txtH5">
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
           
          </div>-->
          
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Certificates</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
<?php 
		if(isset($_POST['cerTitle']) && !empty($_POST['cerTitle'])) {
		$i=0;

			foreach($_POST['cerTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="cerTitle[]" value="'.$val.'" />';
			?>
        <div class="row">
			<div class="col-lg-12">
            <div class="">
              <h4><?php echo $_POST['cerTitle'][$i]; ?></h4>
              <h5 class="txtH5"><?php echo date('F d, Y',strtotime($_POST['cerYearFrom'][$i])); ?> - <?php echo date('F d, Y',strtotime($_POST['cerYearTo'][$i])); ?></h5 class="txtH5"><br />
              	<p><?php echo $_POST['cerYearDes'][$i]; ?></p>
            </div>
          </div>
           <?php 
		  $i++;
			}
		}
		  ?>

        </div>

      </div>

       
    </section><!-- End Services Section -->

    <!-- ======= Reference Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reference</h2>
          <p><?php echo @$_POST['reference']; ?></p>
        </div>
		
      </div>

       
    </section>
    <!-- End Reference Section -->

  </main><!-- End #main -->
  </div> 
  </div> 
  </div> 
<div class="content-footer">
        <button id="btn-export" onClick="exportHTML();">Export to word
            doc</button>
            <button class="btn-convertOLD btn btn-success" class="btn btn-primary" onclick="splitHTMLtoMultiPagePDF();">Download PDF</button>
    </div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
</script>

<!------------------------------ popup model -------------------------------->
 <?php if(!empty(@$_POST["step"]) && @$_POST["step"] == 6) { echo ""; // don't show popup form window
 } else { ?>
  <link rel="stylesheet" href="images/style.min.css" type="text/css">
  <input type="checkbox" id="close">
  <label for="close" id="btn-cerrar"></label>
  <div class="modal">
    <div class="modal-container">
      <input type="checkbox" id="close">
      <label for="close" id="btn-cerrar"><span>Close window</span> ✕</label>
    
        
        <div class="container">
        
          <?php if(!empty(@$_POST["step"]) && @$_POST["step"] == 5) { ?>
          <b>Setp 5 - Reference</b>
          <form name="frmResume2" method="post" action="resume.php#contact" enctype="multipart/form-data">
            <?php 
		  //--------------------------- create hidden fields of form 1, 2, 3, 4 elements -------------------------------
		 /* echo '<pre>';
		  print_r($_POST);
		  echo '<pre>';*/
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
				  $key != "projectYearDes" && 
				  $key != "cerTitle" && 
				  $key != "cerYearFrom" && 
				  $key != "cerYearTo" && 
				  $key != "cerYearDes" ) {
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
		//============================ Certificates =============================================	  
		foreach($_POST['cerTitle'] as $key=>$val) {
			  	echo '<input type="hidden" name="cerTitle[]" value="'.$val.'" />';
			  }
		foreach($_POST['cerYearFrom'] as $key=>$val) {
			  	echo '<input type="hidden" name="cerYearFrom[]" value="'.$val.'" />';
			  }	  
		foreach($_POST['cerYearTo'] as $key=>$val) {
			  	echo '<input type="hidden" name="cerYearTo[]" value="'.$val.'" />';
			  }
		foreach($_POST['cerYearDes'] as $key=>$val) {
			  	echo '<input type="hidden" name="cerYearDes[]" value="'.$val.'" />';
			  }	 
			  
		  ?>
          <input type="hidden" name="step" value="6" />
         <div class="row">
              <div class="col-lg-12"><textarea style="min-height:100%;" name="reference">Reference' ll be provided on demand. Some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here</textarea></div>
          </div>
           <div class="row">
              <div class="col-lg-6"><input type="submit" class="btn-modal" name="submit" value="Save" /></div>
              <div class="col-lg-6">&nbsp;</div>
          </div>
          </form>
          <?php } else if(!empty(@$_POST["step"]) && @$_POST["step"] == 4) { ?>
          <b>Setp 4 - Certificates</b>
          <form name="frmResume2" method="post" action="resume.php#services" enctype="multipart/form-data">
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
          <input type="hidden" name="step" value="5" />
          <!--<h3>Certificate 1</h3>-->
         <div class="row form-input"><div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Certificate</b><br /><input type="text" name="cerTitle[]" value="Certificate" placeholder="Certificate Title" /> <span style="float:left;">Year</span><input type="date" name="cerYearFrom[]" value="2015-10-12"  placeholder="from" /><input type="date" name="cerYearTo[]" value="2017-10-12"  placeholder="to" /><br /><textarea class="taEdu" name="cerYearDes[]" placeholder="Description">Some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here some text here</textarea> <input type="button" class="add-moreCer" value="+" /></div></div>
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
         <div class="row">
              <div class="col-lg-6"><input type="submit" class="btn-modal" name="submit" value="Save" /></div>
              <div class="col-lg-6">&nbsp;</div>
          </div>
          </form>
          <?php } else if(!empty(@$_POST["step"]) && @$_POST["step"] == 3) { ?>
          <b>Setp 3 - Portfolio</b>
          <form name="frmResume2" method="post" action="resume.php#portfolio" enctype="multipart/form-data">
           <?php 
		  //--------------------------- create hidden fields of form 1 element -------------------------------
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
		/*foreach($_POST['projectTitle'] as $key=>$val) {
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
			  }	   */
			  
		  ?>
          <input type="hidden" name="step" value="4" />
         <div class="row form-input">
              <div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Project Detail</b><br /><input type="text" class="txtFullwidth" name="projectTitle[]" value="My Project" placeholder="Project Title" /><input type="url"  class="txtFullwidth" name="projectUrl[]" value="http://proadmission.great-site.net" placeholder="Link" /> <br /><span style="float:left;">Year</span><input type="date" name="projectYearFrom[]" value="2013-11-17"  placeholder="Start Date" /><input type="date" name="projectYearTo[]" value="2015-10-12"  placeholder="End date" /><textarea class="taEdu" name="projectYearDes[]" placeholder="Description">Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable</textarea> <input type="button" class="add-morePro" value="+" /></div>
          </div>
          <!--<div class="row">
              <div class="col-lg-6"><input type="date" name="dob"  placeholder="Date of Birth" /></div>
              <div class="col-lg-6"><input type="text" name="age"  placeholder="Age" /></div>
          </div>
          <h3>company 2</h3>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="website"  placeholder="Website" /></div>
              <div class="col-lg-6"><input type="text" name="degree"  placeholder="Degree" /></div>
          </div>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="phone"  placeholder="Phone" /></div>
              <div class="col-lg-6"><input type="text" name="email"  placeholder="Email" /></div>
          </div>
          <h3>Company 3</h3>
          <div class="row">
              <div class="col-lg-6"><input type="text" name="address"  placeholder="Address" /></div>
              <div class="col-lg-6"><input type="text" name="city"  placeholder="City" /></div>
          </div>
        </div>-->
         <div class="row">
              <div class="col-lg-6"><input type="submit" class="btn-modal" name="submit" value="Save" /></div>
              <div class="col-lg-6">&nbsp;</div>
          </div>
          </form>
          <?php } else if(!empty(@$_POST["step"]) && @$_POST["step"] == 2) { ?>
          <b>Setp 2 - Resume <?php // echo '<pre>'; print_r($_POST); echo '</pre>';  ?></b>
          
          <form name="frmResume2" method="post" action="resume.php#resume" enctype="multipart/form-data">
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
          <input type="hidden" name="step" value="3" />
          <div class="row">
          <b>Education</b>
         <div class="row form-input">
              <div class="col-lg-12 eduGroup"><input type="text" name="eduDegreeTitle[]" value="Matricullation" placeholder="Degree Title" /><input type="text" name="eduDegreeInstitute[]" value="Rochester Institute of Technology, Rochester, NY" placeholder="Institute Title" /> <span style="float:left;">Year</span><input type="date" value="2003-09-28" name="eduDegreeYearFrom[]"  placeholder="from" /><input type="date" value="2005-09-28" name="eduDegreeYearTo[]"  placeholder="to" /><textarea class="taEdu" name="eduDegreeYearDes[]" placeholder="Description">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</textarea><input type="button" class="add-moreEdu" value="+" /></div>
          </div>
          </div>
          
         <div class="row">
         
         <div class="row form-input">
              <div class="col-lg-12 comGroup form-input"> <b style="display:block; float:left;">Professional Experience</b><br /><input type="text" name="companyTitle[]" value="Experion, New York, NY" placeholder="Company Title" /><input type="text" name="companyDesignation[]"  value="Senior graphic design specialist" placeholder="companyDesignation" /> <span style="float:left;">Year</span><input type="date" value="2009-09-01" name="companyYearFrom[]"  placeholder="from" /><input type="date" name="companyYearTo[]" value="2010-09-01"  placeholder="to" /><textarea class="taEdu" name="companyYearDes[]" placeholder="Description">Lead in the design, development, and implementation of the graphic, layout, and production communication materials
Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.</textarea> <input type="button" class="add-moreCom" value="+" /></div>
          </div>
          </div>
          
         <div class="row">
              <div class="col-lg-6"><input type="submit" class="btn-modal" name="submit" value="Save" /></div>
              <div class="col-lg-6">&nbsp;</div>
          </div>
          </form>
          <?php } else if(!isset($_POST["step"])) { ?>
          <h2>Setp 1 - About</h2>
          <form name="frmResume" method="post" action="resume.php" enctype="multipart/form-data">
          <input type="hidden" name="step" value="2" />
         <div class="row">
         <!---------------- LEFT SECTION ( Basic info)-------------------------->
         <div class="col-lg-12">
         <div class="row">
              <div class="col-lg-12"><textarea name="intro" placeholder="Introduction" />Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</textarea></div>
          </div>
          <div class="row">
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
              	<div class="row form-input">
            		<input name="SkillTitle[]" class="amSkill" placeholder="Title e.g. Marketing Experience" value="HTML" type="text" /><input name="SkillValue[]" class="amSkill" placeholder="Value e.g. 98" value="100" type="text" /> <input type="button" class="add-more" value="+" />
        		</div>
            </div>
             
         
         <div class="row">
              <div class="col-lg-6"><input type="submit" class="btn-modal" name="submit" value="Save" /></div>
              <div class="col-lg-6">&nbsp;</div>
          </div>
          </div>
          
     </div>
          
          </form>
          
          <?php  } ?>
        </div>
          
      <!--  <a href="https://vipgladiatorapp.monster/%D0%9D%D0%A3%D0%96%D0%9D%D0%90%D0%AF%20%D0%A1%D0%A1%D0%AB%D0%9B%D0%9A%D0%90" class="btn-modal">CLIPKEEP FREE DOWNLOAD</a>-->
    
    </div>
  </div>
  <?php } // end outer if for popup window ?>
  <script>
  // add more input
    var addButtonHTML, removeButtonHTML;
    $(document).ready(function () {
        var inputRowHTML = '<div class="row form-input"><input name="SkillTitle[]" class="amSkill" placeholder="Title e.g. Marketing Experience" type="text" value="Skill" /><input name="SkillValue[]" class="amSkill" placeholder="Value e.g. 98" type="text" value="98" /> <input type="button" class="add-more" value="+" /></div>';
        addButtonHTML = '<input type="button" class="add-more" value="+" />';
        removeButtonHTML = '<input type="button" class="remove-input" value="-" />';


        $("body").on("click", ".add-more", function () {
            $(".form-input").last().before(inputRowHTML);
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
        var inputRowHTMLEdu = ' <div class="row form-input"><div class="col-lg-12 eduGroup"><input type="text" name="eduDegreeTitle[]" value="Matricullation" placeholder="Degree Title" /><input type="text" name="eduDegreeInstitute[]" value="Rochester Institute of Technology, Rochester, NY" placeholder="Institute Title" /> <span style="float:left;">Year</span><input type="date" value="2003-09-28" name="eduDegreeYearFrom[]"  placeholder="from" /><input type="date" value="2005-09-22" name="eduDegreeYearTo[]"  placeholder="to" /><textarea class="taEdu" name="eduDegreeYearDes[]" placeholder="Description">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</textarea><input type="button" class="add-moreEdu" value="+" /></div></div>';
        addButtonHTMLEdu = '<input type="button" class="add-moreEdu" value="+" />';
        removeButtonHTMLEdu = '<input type="button" class="remove-inputEdu" value="-" />';


        $("body").on("click", ".add-moreEdu", function () {
            $(".form-input").last().before(inputRowHTMLEdu);
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
            $(".form-input").last().before(inputRowHTMLCom);
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
            $(".form-input").last().before(inputRowHTMLPro);
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
            $(".form-input").last().before(inputRowHTMLCer);
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
</body>
</html>