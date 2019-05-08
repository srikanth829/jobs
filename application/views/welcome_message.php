<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//print_r($trainer_posts);
//print_r($student_query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.theme.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        <style>
            #owl-demo .item{
                margin: 3px;
            }
            #owl-demo .item img{
                display: block;
                width: 100%;
                height: auto;
            }

            .p-y-2 {
                padding-top: 28px;
                padding-bottom: 28px;
            }
            .p-y-3 {
                padding-top: 45px;
                padding-bottom: 45px;
            }
            .m-b-1 {
                margin-bottom: 18px;
            }
            .m-t-1 {
                margin-top: 18px;
            }

            .main_counter_area{
                background: url(https://images.pexels.com/photos/196288/pexels-photo-196288.jpeg?w=940&h=650&auto=compress&cs=tinysrgb) no-repeat top center;
                background-size: cover;
                overflow: hidden;
            }
            .main_counter_area .main_counter_content .single_counter{
                background: rgba(236, 72, 72, 0.5);
                color: #fff;
            }
            .main_counter_area .main_counter_content .single_counter i{
                font-size:36px;
            }
            .wrapper-banner img{width: 100%;}
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <ul class="career-info">
                            <li><a href=""> DesiAirTickets.com </a></li>
                            <li><a href=""> IndianUsedBikes.com </a></li>
                            <li><a href=""> HyderabadTrainings.com </a></li>
                            <li><a href=""> BangaloreTrainings.com </a></li>
                            <li><a href=""> ChennaiTrainings.com </a></li>
                            <li><a href=""> LOGIN </a></li> 
                            <li><div class="header-search"><form action="">
                                        <input type="text" placeholder="Custom Search" name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form></div></li>
                        </ul>
                    </div>
                </div>
            </div> 
            <section class="wrapper-header">
                <nav class="navbar navbar-default navbar-sticky bootsnav">

                    <div class="container">      

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url().'assets/images/logo.png'; ?>" class="logo" alt=""></a>
                        </div>




                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="dropdown">
                                    <a href="#" class="" data-toggle="dropdown" >Trainings</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="#">About us</a></li>
                                        
                                    </ul> -->
                                </li>


                                <li class="dropdown">
                                    <a href="#" class="" data-toggle="dropdown" >Student Enquiries</a>

                                </li>


                                <li class="dropdown">
                                    <a href="#" class="" data-toggle="dropdown" >Training Institutes</a>

                                </li>


                                <li class="dropdown">
                                    <a href="#" class="" data-toggle="dropdown" >Faculty Jobs</a>

                                </li>

                            </ul>
                        </div>
                    </div>   
                </nav>
            </section>  

            <section class="sections_data">
                <div class="wrapper_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="wrapper_data">
                                    <div class="section_header">
                                        <div class="header_data">
                                            <h4>Student Enquiries</h4>
                                        </div>
                                        <div class="enquiry">
                                            <ul>
                                                <li>Post Enquiry Ad</li>
                                                <li>|</li>
                                                <li>View All</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="enquiry_list">
                                        <ul>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="wrapper_data">
                                    <div class="section_header">
                                        <div class="header_data">
                                            <h4>Faculty Jobs</h4>
                                        </div>
                                        <div class="enquiry">
                                            <ul>
                                                <li>Post Enquiry Ad</li>
                                                <li>|</li>
                                                <li>View All</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="enquiry_list">
                                        <ul>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="wrapper_data">
                                    <div class="section_header">
                                        <div class="header_data">
                                            <h4>Student Enquiries</h4>
                                        </div>
                                        <div class="enquiry">
                                            <ul>
                                                <li>Post Enquiry Ad</li>
                                                <li>|</li>
                                                <li>View All</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="enquiry_list">
                                        <ul>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="wrapper_data">
                                    <div class="section_header">
                                        <div class="header_data">
                                            <h4>Training Centers</h4>
                                        </div>
                                        <div class="enquiry">
                                            <ul>
                                                <li>Post Enquiry Ad</li>
                                                <li>|</li>
                                                <li>View All</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="enquiry_list">
                                        <ul>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Hi I am looking for BO Admin who has experience on BO MIGRAT</p></li>
                                            <li><i class="fa fa-angle-double-left left_arrow" aria-hidden="true"></i><p>Looking for Hortonworks Hadoop Administration... JUST HORTON</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <ul class="social-icons">
                <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootsnav.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>



</footer>  
</div>
</body>
</html>