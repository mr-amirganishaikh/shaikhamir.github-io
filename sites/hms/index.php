<!doctype html>
<html lang="en-US">
<head>
	<title>Help Me Serve</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width,initial-scale=1" >
	<?php include '_partial/head.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" integrity="sha256-ymMA1/kGhlQxXn0q9DFzHRt3VIY1Eh7BJcEfM3I88a4=" crossorigin="anonymous" />
    <style type="text/css">
        #map-canvas {
            height: 640px;
        }

        #slider-range .ui-slider-handle {
            /*background: url(i/slider-handle1.png) no-repeat;*/
            border-radius: 50%;
            background: #337ab7;
            border: none;
            margin-top: 1.5px;
        }

        #searchgrid .panel-default {
            padding-top: 0px !important;
            margin-top: 17%;
        }

        #sticky-sec {
            position: absolute;
            width: 207px;
            left: 0;
            z-index: 9000;
            font-size: 14px;
        }
    </style>
 </head>
<body>
	<header class="container-fluid p-lr-none">
		<?php include "_partial/header.php" ?>
	</header>
    <main class="container-fluid p-lr-none">
        <div id="homeCarousel" class="carousel slide carousel-fade" data-interval="5500" data-ride="carousel" data-pause="false">
            <div class="carousel-inner bg-f1f" role="listbox">
                <div class="item active bg-pr">
                    <img src="img/carousel/slide1_1.jpg" alt="" title="" style="position: absolute;top: 28vw;left: 4vw;width: 40vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInRight delay-1s" />
                    <img src="img/carousel/slide1_2.jpg" alt="" title="" style="position: absolute;top: 13vw;left: 18vw;width: 30vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInLeft delay-1s" />
                    <div class="carousel-text" style="position: absolute;top: 18vw;right: 5vw;width: 40vw;">
                        <h2 class="animated fadeInDown delay-1s">Help India</h2>
                        <p class="animated fadeInUp delay-1s">Smile is our main focus. Any child should not go hungry to sleep.</p>
                    </div>
                </div>
                <div class="item bg-se">
                    <img src="img/carousel/slide2_1.jpg" alt="" title="" style="position: absolute;top: 28vw;left: 4vw;width: 40vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInRight delay-1s" />
                    <img src="img/carousel/slide2_2.jpg" alt="" title="" style="position: absolute;top: 13vw;left: 18vw;width: 30vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInLeft delay-1s" />
                    <div class="carousel-text" style="position: absolute;top: 18vw;right: 5vw;width: 40vw;">
                        <h2 class="animated fadeInDown delay-1s">Travel Confidently</h2>
                        <p class="animated fadeInUp delay-1s">Our main motive has been to develope smooth travels for everyone by providing SWATCH TOILET</p>
                    </div>
                </div>
                <div class="item bg-tr">
                    <img src="img/carousel/slide1_1.jpg" alt="" title="" style="position: absolute;top: 28vw;left: 4vw;width: 40vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInRight delay-1s" />
                    <img src="img/carousel/slide1_2.jpg" alt="" title="" style="position: absolute;top: 13vw;left: 18vw;width: 30vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInLeft delay-1s" />
                    <div class="carousel-text" style="position: absolute;top: 18vw;right: 5vw;width: 40vw;">
                        <h2 class="animated fadeInDown delay-1s">She deserves respect</h2>
                        <p class="animated fadeInUp delay-1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Praesent sapien massa.</p>
                    </div>
                </div>
                <div class="item bg-qu">
                    <img src="img/carousel/slide2_1.jpg" alt="" title="" style="position: absolute;top: 28vw;left: 4vw;width: 40vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInRight delay-1s" />
                    <img src="img/carousel/slide2_2.jpg" alt="" title="" style="position: absolute;top: 13vw;left: 18vw;width: 30vw;border: 4px solid #ffffff;border-radius: 3px;" class="animated fadeInLeft delay-1s" />
                    <div class="carousel-text" style="position: absolute;top: 18vw;right: 5vw;width: 40vw;">
                        <h2 class="animated fadeInDown delay-1s">Heal India for free</h2>
                        <p class="animated fadeInUp delay-1s">Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators" style="left: 128%;width: 20px;bottom: 45%;">
                <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#homeCarousel" data-slide-to="1"></li>
                <li data-target="#homeCarousel" data-slide-to="2"></li>
                <li data-target="#homeCarousel" data-slide-to="3"></li>
            </ol>
        </div>
        <div class="clearfix"></div>
        <div class="container-fluid p-lr-none">
            <div class="col-md-12 p-tb-md">
                <a href="index.php" title=""><img src="img/logo/hms.png" style="width: 200px;" class="img-center-block" title="" alt="" /></a>
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p style="font-size: 1.3rem; padding-top:30px;">Help Me Serve is one stop shop solution for all our neighbors and fellowmen who is in utmost need of our help. We pledge to heal India. We stride hard to serve the nation and together eradicate</p>
                </div>
            </div>
            <!--<div class="col-md-4" style="height: 240px;padding: 40px 0px;">
                <a href="index.php" title=""><img src="img/logo/hms.png" style="width: 200px;" class="img-center-block" title="" alt="" /></a>
            </div>
            <div class="col-md-8 bg-se" style="height: 240px;">
                <p style="font-size: 1.5rem;padding-top: 80px;color: #ffffff;">Help Me Serve is one stop shop solution for all our neighbors and fellowmen who is in utmost need of our help. We pledge to heal India. We stride hard to serve the nation and together eradicate</p>
            </div>-->
            <div class="clearfix"></div>
            <div class="col-md-4 bg-pr text-fff step1" style="padding: 30px;">
                <h1 style="font-size: 1.75rem;">Step 1: Causes</h1>
                <p style="font-size: 1.3rem;">Choose any of our causes that you would like to see minimal in our nation</p>
            </div>
            <div class="col-md-4 bg-tr text-fff step2" style="padding: 30px;">
                <h1 style="font-size: 1.75rem;">Step 2: Continue</h1>
                <p style="font-size: 1.3rem;">You could now donate your hard earned money to the cause you choose</p>
            </div>
            <div class="col-md-4 bg-qu text-fff step3" style="padding: 30px;">
                <h1 style="font-size: 1.75rem;">Step 3: Complete</h1>
                <p style="font-size: 1.3rem;">Once donated you are now a proud citizen who has joined hands with us to clean India</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <section id="section-home5" class="col-xs-12 ceo-fluid p-lr-none bg-shadow">
            <div class="col-xs-12 p-tb-md ceo-row">
                <div class="col-lg-10 col-lg-offset-1 p-tb-lg">
                    <div class="col-md-3">
                        <div class="number-box text-center">
                            <span class="number target">Rs. 100 Crore +</span>
                            <div class="subline counter1 p-b-md"></div>
                            <p>Donations</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="number-box text-center">
                            <span class="number target">30,000 +</span>
                            <div class="subline counter2 p-b-md"></div>
                            <p>Causes</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="number-box text-center">
                            <span class="number target">200 +</span>
                            <div class="subline counter3 p-b-md"></div>
                            <p>Donors</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="number-box text-center">
                            <span class="number target">100 +</span>
                            <div class="subline counter4 p-b-md"></div>
                            <p>Victories</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <div class="col-xs-12 p-lr-none bg-f1f">
            <h3 class="title border-se">Trending</h3>
            <div class="container-fluid">
                <div id="carouselTrending" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="col-md-5 col-md-offset-1 img">
                                <img src="img/banner.jpg" class="img-responsive" alt="" title="" />
                            </div>
                            <div class="col-md-5 info">
                                <h3 class="border-se">Women Education</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. </p>
                                <div class="progress">
                                    <div class="progress-bar bg-se" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">90%</div>
                                </div>
                                <ul class="status list-p-none list-inline">
                                    <li><span>Rs. 50,000</span> Raised</li>
                                    <li><span>20 Days</span> Left</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="item">
                            <div class="col-md-5 col-md-offset-1 img">
                                <img src="img/banner2.jpg" class="img-responsive" alt="" title="" />
                            </div>
                            <div class="col-md-5 info">
                                <h3 class="border-se">Water Harvesting</h3>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. </p>
                                <div class="progress">
                                    <div class="progress-bar bg-se" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">75%</div>
                                </div>
                                <ul class="status list-p-none list-inline">
                                    <li><span>Rs. 45,000</span> Raised</li>
                                    <li><span>10 Days</span> Left</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carouselTrending" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselTrending" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="carousel-custom-indicators">
                        <div class="col-md-10 col-md-offset-1 p-lr-none">
                            <div class="col-md-2 indicator" data-target="#carouselTrending" data-slide-to="0">
                                <img src="img/banner.jpg" class="img-responsive" alt="" title="" />
                                <h3>Women Education</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="col-md-2 indicator" data-target="#carouselTrending" data-slide-to="1">
                                <img src="img/banner2.jpg" class="img-responsive" alt="" title="" />
                                <h3>Water Harvesting</h3>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                            <div class="col-md-2 indicator">
                                <img src="img/banner3.jpg" class="img-responsive" alt="" title="" />
                                <h3>Prevent Poverty</h3>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                            <div class="col-md-2 indicator">
                                <img src="img/banner4.jpg" class="img-responsive" alt="" title="" />
                                <h3>Vaccination</h3>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                            <div class="col-md-2 indicator" data-target="#carouselTrending" data-slide-to="0">
                                <img src="img/banner.jpg" class="img-responsive" alt="" title="" />
                                <h3>Women Education</h3>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                            <div class="col-md-2 indicator" data-target="#carouselTrending" data-slide-to="1">
                                <img src="img/banner2.jpg" class="img-responsive" alt="" title="" />
                                <h3>Water Harvesting</h3>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 p-lr-none">
            <h3 class="title border-tr">Browse Causes</h3>
            <div class="container-fluid p-lr-none">
                <a href="#"><div class="col-md-6 browse-cause p-lr-none cause-pr" style="background-image: url(img/banner4.jpg);" title="Health"></div></a>
                <a href="#"><div class="col-md-3 browse-cause p-lr-none cause-se" style="background-image: url(img/banner3.jpg);" title="Children"></div></a>
                <a href="#"><div class="col-md-3 browse-cause p-lr-none cause-qu" style="background-image: url(img/banner2.jpg);" title="Environment"></div></a>
                <a href="#"><div class="col-md-4 browse-cause p-lr-none cause-tr" style="background-image: url(img/banner.jpg);" title="Education"></div></a>
                <a href="#"><div class="col-md-4 browse-cause p-lr-none cause-pr" style="background-image: url(img/banner5.jpg);" title="Sports"></div></a>
                <a href="#"><div class="col-md-4 browse-cause p-lr-none bg-tr cause-tr" title="View All Causes"></div></a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 p-lr-none bg-f1f">
            <h3 class="title border-pr">What Makes Us Do What We Do</h3>
            <div class="container">
                <div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <p>
                          Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt.
                        </p>
                        <p>
                            Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus.
                        </p>
                        <div class="container-fluid p-lr-none" style="display:inline-flex">
                            <img src="img/temp.jpg" class="img-circle m-r-md" width="120" height="120" />
                            <p class="strong f-20 m-t-md">
                                John Doe<br/>CEO
                            </p>
                        </div>
                    </div>
                  <div class="item">
                      <p>
                          Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                      </p>
                      <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                        </p>
                      <div class="container-fluid p-lr-none" style="display:inline-flex">
                            <img src="img/temp.jpg" class="img-circle m-r-md" width="120" height="120" />
                            <p class="strong f-20 m-t-md">
                                John Doe<br/>Marketing Manager
                            </p>
                        </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#carouselTestimonial" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carouselTestimonial" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 p-lr-none">
            <h3 class="title border-qu">In The News</h3>
            <div class="owl-carousel">
                <div>
                    <div class="container-fluid m-b-xs">
                        <img src="img/logo/bloomberg-logo.png" class="img-responsive" alt="" title="" />
                    </div>
                </div>
                <div>
                    <div class="container-fluid m-b-xs">
                        <img src="img/logo/cnbc.png" class="img-responsive" alt="" title="" />
                    </div>
                </div>
                <div>  
                    <div class="container-fluid m-b-xs">
                        <img src="img/logo/economic-times.png" class="img-responsive" alt="" title="" />
                    </div>
                </div>
                <div>  
                    <div class="container-fluid m-b-xs">
                        <img src="img/logo/harvard-innovation-lab.png" class="img-responsive" alt="" title="" />
                    </div>
                </div>
                <div>  
                    <div class="container-fluid m-b-xs">
                        <img src="img/logo/ndtv.png" class="img-responsive" alt="" title="" />
                    </div>
                </div>
                <div>  
                    <div class="container-fluid m-b-xs">
                        <img src="img/logo/times-of-india-logo.png" class="img-responsive" alt="" title="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="subscribe" class="col-xs-12 p-lr-none" style="background-image: url('img/bg.jpg');">
            <h3 class="title border-se text-fff">Subscribe to our Newsletter</h3>
            <p class="description">
                Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
            </p>
            <div class="container">
                <div class="form-div col-md-8 col-md-offset-2">
                    <form class="form form-subscribe">
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <div class="form-group">
                                    <input type="email" value="" placeholder="Your Email..." class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-block btn-success bg-se text-upper">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="ngo-locator" class="container-fluid p-lr-none">
            <h2 class="title border-pr">NGO Locator</h2>
            <div class="col-xs-12 p-lr-none">
                <div id="map-canvas"></div>
                <div class="map-info">
                    <h3>Impacts Made Together Rs.70560.00</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Lorem Ipsum</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Sed Porttior</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Lectus Nibh</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Curabitur Non</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Amet Nisl</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Tempus Convallis</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Curabitur Non</a></li>
                        <li><a href="#" title=""><i class="fa fa-star-o m-r-xs"></i>Amey Nlsi</a></li>
                    </ul>
                    <a href="#" class="btn btn-block btn-impact text-upper">Make an impact</a>
                </div>
            </div>
        </div>
    </main>
	<footer class="container-fluid p-lr-none">
		<?php include "_partial/footer.php" ?>
	</footer>
	<?php include "_partial/footer-scripts.php" ?>
    <script src="http://maps.google.co.in/maps/api/js?key=AIzaSyBFLApBapD8KXJKUPXG-JkOXWMulkxtyxo"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js" integrity="sha256-Y8l+EeoUOvr8SqEj/gTyjBb8CqhtrA6GU9P4yB+41cE=" crossorigin="anonymous"></script>
    <script>
        var map;

        var markerData= [
{ lat: 17.32125, lng: 82.04071, zoom: 6, desc: "Andhra Pradesh", name: "Uma Educational Technical Society, Kakinada(UETS)", ID: 958 },
{ lat: 19.06181, lng: 72.89537, zoom: 6, desc: "Maharashtra", name: "National Society for Equal Opportunities for the Handicapped", ID: 4 },
{ lat: 20.02382, lng: 75.16183, zoom: 6, desc: "Tamil Nadu", name: "TANKER Foundation", ID: 6 },
{ lat: 13.08914, lng: 80.20956, zoom: 6, desc: "Tamil Nadu", name: "The Banyan", ID: 7 },
{ lat: 24.61413, lng: 73.68557, zoom: 6, desc: "Rajasthan", name: "Seva Mandir", ID: 9 },
{ lat: 18.98720, lng: 72.82905, zoom: 6, desc: "Maharashtra", name: "National Association for the Blind, India", ID: 14 },
{ lat: 13.08586, lng: 80.23701, zoom: 6, desc: "Tamil Nadu", name: "DEAN Foundation, Hospice and Palliative Care Centre", ID: 15 },
{ lat: 16.05439, lng: 80.17719, zoom: 6, desc: "Andra Pradesh", name: "ASSIST", ID: 17 },
{ lat: 23.02435, lng: 72.53015, zoom: 6, desc: "Gujarat", name: "Saath (Initiative for Equity in Development)", ID: 18 },
{ lat: 18.96815, lng: 72.81244, zoom: 6, desc: "Maharashtra", name: "Apnalaya", ID: 19 },
{ lat: 16.49711, lng: 80.65603, zoom: 6, desc: "Andhra Pradesh", name: "Child Aid Foundation", ID: 22 },
{ lat: 28.60980, lng: 77.10015, zoom: 6, desc: "Delhi", name: "Deepalaya", ID: 30 },
{ lat: 23.03501, lng: 72.52932, zoom: 6, desc: "Gujarat", name: "Blind Peoples Association, India", ID: 31 },
{ lat: 13.01460, lng: 77.62715, zoom: 6, desc: "Karnataka", name: "The Association of People with Disability", ID: 32 },
{ lat: 11.12712, lng: 78.65689, zoom: 6, desc: "Tamil Nadu", name: "Sankara Nethralaya", ID: 37 },
{ lat: 13.01977, lng: 77.65156, zoom: 6, desc: "Karnataka", name: "Vathsalya Charitable Trust", ID: 40 },
{ lat: 18.52043, lng: 73.85674, zoom: 6, desc: "Maharashtra", name: "Social Action for Manpower Creation", ID: 43 },
{ lat: 12.99564, lng: 77.62631, zoom: 6, desc: "Karnataka", name: "Kutumba", ID: 44 },
{ lat: 28.59625, lng: 77.33962, zoom: 6, desc: "Uttar Pradesh", name: "Sai Kripa", ID: 47 },
{ lat: 26.23775, lng: 72.96990, zoom: 6, desc: "Rajasthan", name: "Gramin Vikas Vigyan Samiti", ID: 50 },
{ lat: 24.59393, lng: 73.71610, zoom: 6, desc: "Rajasthan", name: "Vidya Bhawan Society", ID: 51 },
{ lat: 12.96636, lng: 77.69055, zoom: 6, desc: "Karnataka", name: "Mitra Jyothi", ID: 53 },
{ lat: 8.97688, lng: 77.32397, zoom: 6, desc: "Tamil Nadu", name: "Amar Seva Sangam", ID: 55 },
{ lat: 23.03169, lng: 72.53453, zoom: 6, desc: "Gujarat", name: "Sense International (India)", ID: 56 },
{ lat: 18.99275, lng: 72.83107, zoom: 6, desc: "Maharashtra", name: "Magic Bus India Foundation", ID: 67 },
{ lat: 18.69205, lng: 77.73519, zoom: 6, desc: "Maharashtra", name: "Sanskriti Samvardhan Mandal", ID: 68 },
{ lat: 12.99128, lng: 77.68737, zoom: 6, desc: "Karnataka", name: "Anga Karunya Kendra", ID: 69 },
{ lat: 22.47813, lng: 88.39220, zoom: 6, desc: "West Bengal", name: "Paripurnata Half-Way Home", ID: 72 },
{ lat: 26.20060, lng: 92.93757, zoom: 6, desc: "Assam", name: "Ashadeep", ID: 73 },
{ lat: 26.14452, lng: 91.73624, zoom: 6, desc: "Assam", name: "Atma Nirbhar-Ek Challenge", ID: 75 },
{ lat: 22.29943, lng: 88.14866, zoom: 6, desc: "West Bengal", name: "Bani Mandir", ID: 77 },
{ lat: 22.31412, lng: 88.41130, zoom: 6, desc: "West Bengal", name: "Sarada Ramkrishna (Sishu O Mahila) Sevashram", ID: 79 },
{ lat: 28.64557, lng: 77.21110, zoom: 6, desc: "Delhi", name: "Salaam Baalak Trust - Delhi", ID: 84 },
{ lat: 12.92408, lng: 77.58193, zoom: 6, desc: "Karnataka", name: "Sikshana Foundation", ID: 85 },
{ lat: 15.43187, lng: 76.53148, zoom: 6, desc: "Karnataka", name: "SAMUHA", ID: 103 },
{ lat: 18.51177, lng: 73.84630, zoom: 6, desc: "Maharashtra", name: "Bhagini Nivedita Pratishthan Pune", ID: 123 },
{ lat: 18.50669, lng: 73.84573, zoom: 6, desc: "Maharashtra", name: "Janaseva Foundation", ID: 124 },
{ lat: 15.44027, lng: 75.02067, zoom: 6, desc: "Karnataka", name: "Vidya Poshak", ID: 130 },
{ lat: 18.99275, lng: 72.83107, zoom: 6, desc: "Maharashtra", name: "Ummeed Child Development Centre", ID: 134 },
{ lat: 19.04306, lng: 72.86354, zoom: 6, desc: "Maharashtra", name: "ALERT-INDIA Association for Leprosy Education, Rehabilitation Treatment India", ID: 135 },
{ lat: 28.56436, lng: 77.23780, zoom: 6, desc: "Delhi", name: "Udayan Care", ID: 138 },
{ lat: 9.94959, lng: 78.12233, zoom: 6, desc: "Tamil Nadu", name: "Grace Peter Charitable Trust", ID: 142 },
{ lat: 13.1198, lng: 80.03072, zoom: 6, desc: "Tamil Nadu", name: "Sevalaya", ID: 143 },
{ lat: 28.70936, lng: 77.15648, zoom: 6, desc: "Delhi", name: "Psycho Educational Society", ID: 146 },
{ lat: 13.09254, lng: 77.65348, zoom: 6, desc: "Karnataka", name: "Christel House India", ID: 148 },
{ lat: 9.98164, lng: 76.29988, zoom: 6, desc: "Kerala", name: "Adarsh Charitable Trust", ID: 150 },
{ lat: 19.07598, lng: 72.87766, zoom: 6, desc: "Maharashtra", name: "Salaam Baalak Trust- Mumbai", ID: 158 },
{ lat: 11.15101, lng: 76.93550, zoom: 6, desc: "Tamil Nadu", name: "ASHWINI", ID: 164 },
{ lat: 8.71391, lng: 77.75665, zoom: 6, desc: "Tamil Nadu", name: "Rehabilitation of the Socially afflicted,the retarded and the youth", ID: 167 },
{ lat: 18.47758, lng: 73.85728, zoom: 6, desc: "Maharashtra", name: "Catalysts For Social Action", ID: 168 },
{ lat: 28.61394, lng: 77.20902, zoom: 6, desc: "Delhi", name: "Mobile Creches for Working Mothers' Children", ID: 172 },
{ lat: 19.03280, lng: 72.89636, zoom: 6, desc: "Maharashtra", name: "Sahaara, Mumbai", ID: 174 },
{ lat: 28.45950, lng: 77.02664, zoom: 6, desc: "Haryana", name: "Sukarya", ID: 578 },
{ lat: 18.97488, lng: 72.81286, zoom: 6, desc: "Maharashtra", name: "Annamrita-ISKCON Food Relief Foundation", ID: 604 },
{ lat: 28.51278, lng: 77.03689, zoom: 6, desc: "Haryana", name: "Literacy India", ID: 630 },
{ lat: 28.44380, lng: 77.05611, zoom: 6, desc: "Haryana", name: "Vishwas, Vision For Health Welfare and Special Needs", ID: 648 },
{ lat: 18.95922, lng: 72.82161, zoom: 6, desc: "Maharashtra", name: "Salaam Bombay Foundation", ID: 708 },
{ lat: 18.50740, lng: 73.80765, zoom: 6, desc: "Maharashtra", name: "IDEA Foundation", ID: 858 },
{ lat: 13.12339, lng: 80.20320, zoom: 6, desc: "Tamil Nadu", name: "Sri Arunodayam", ID: 859 },
{ lat: 25.09607, lng: 85.31312, zoom: 6, desc: "Bihar", name: "Shubham", ID: 861 },
{ lat: 23.86351, lng: 91.29031, zoom: 6, desc: "Tripura", name: "Voluntary Health Association of Tripura", ID: 862 },
{ lat: 17.42938, lng: 78.43830, zoom: 6, desc: "Telangana", name: "Ashray Akruti", ID: 864 },
{ lat: 11.05821, lng: 76.90380, zoom: 6, desc: "Tamil Nadu", name: "Native Medicare Charitable Trust", ID: 870 },
{ lat: 9.92520, lng: 78.11978, zoom: 6, desc: "Tamil Nadu", name: "JK MAASS Foundation", ID: 871 },
{ lat: 10.37966, lng: 78.82085, zoom: 6, desc: "Tamil Nadu", name: "Community Action for Rural Development(CARD)", ID: 876 },
{ lat: 13.00921, lng: 80.25780, zoom: 6, desc: "Tamil Nadu", name: "Vidyarambam", ID: 877 },
{ lat: 22.83271, lng: 74.26437, zoom: 6, desc: "Gujarat", name: "Blind Welfare Council - Dahod", ID: 879 },
{ lat: 13.01378, lng: 77.62278, zoom: 6, desc: "Karnataka", name: "Diya Foundation(DIYA)", ID: 885 },
{ lat: 8.15514, lng: 77.42057, zoom: 6, desc: "Tamil Nadu", name: "Centre For Social Reconstruction(CSR)", ID: 887 },
{ lat: 28.68091, lng: 77.20459, zoom: 6, desc: "Delhi", name: "Society For Child Development", ID: 890 },
{ lat: 16.84935, lng: 75.71118, zoom: 6, desc: "Karnataka", name: "Spurthi Mahila Mandal(Bijapur)", ID: 892 },
{ lat: 13.03081, lng: 77.57743, zoom: 6, desc: "Karnataka", name: "Mahila Dakshata Samiti", ID: 893 },
{ lat: 20.35456, lng: 85.81658, zoom: 6, desc: "Orissa", name: "Kalinga Institute of Social Sciences", ID: 899 },
{ lat: 18.96712, lng: 72.82148, zoom: 6, desc: "Maharashra", name: "The Akanksha Foundation", ID: 908 },
{ lat: 12.91700, lng: 77.54610, zoom: 6, desc: "Karnataka", name: "Tropical Research Development Centre(TRDC)", ID: 910 },
{ lat: 18.98220, lng: 72.83825, zoom: 6, desc: "Maharashtra", name: "Dignity Foundation", ID: 915 },
{ lat: 28.53908, lng: 77.23813, zoom: 6, desc: "Delhi", name: "ETASHA", ID: 926 },
{ lat: 27.16230, lng: 75.35788, zoom: 6, desc: "Rajasthan", name: "Gram Chetana Kendra", ID: 928 },
{ lat: 24.37611, lng: 85.25931, zoom: 6, desc: "Jharkhand", name: "Nav Bharat Jagriti Kendra", ID: 932 },
{ lat: 18.98720, lng: 72.82905, zoom: 6, desc: "Maharashtra", name: "Muktangan", ID: 947 },
{ lat: 8.69846, lng: 77.73805, zoom: 6, desc: "Tamil Nadu", name: "Vizhuthukal Trust", ID: 948 },
{ lat: 18.54783, lng: 73.79105, zoom: 6, desc: "Maharashtra", name: "Community Aid Sponsorship Programme(CASP)", ID: 950 },
{ lat: 28.52742, lng: 77.14467, zoom: 6, desc: "Delhi", name: "Sapna", ID: 955 },
{ lat: 12.99603, lng: 77.6569, zoom: 6, desc: "Karnataka", name: "SGBS Trust", ID: 956 },
{ lat: 12.963778, lng: 77.60384, zoom: 6, desc: "Karnataka", name: "Maria Seva Sangha", ID: 957 },
//{ lat: 17.32125, lng: 82.04071, zoom: 6, desc: "Andhra Pradesh", name: "Uma Educational Technical Society,Kakinada(UETS)", ID: 958 },
{ lat: 11.703206, lng: 76.083400, zoom: 6, desc: "Kerala", name: "Wayanad Girijana Seva Trust", ID: 960 },
{ lat: 25.60657, lng: 85.16119, zoom: 6, name: "Bihar", desc: "Action for Development of Demos(ADD)", ID: 964 },
{ lat: 12.9716, lng: 77.59456, zoom: 6, desc: "Karnataka", name: "Samarthanam Trust for the Disabled", ID: 965 },
{ lat: 12.90197, lng: 77.63212, zoom: 6, desc: "Karnataka", name: "Association for the Mentally Challenged", ID: 967 },
{ lat: 12.29581, lng: 76.63938, zoom: 6, desc: "Karnataka", name: "Akhanda Seva for International Shanti (Operation Shanti)", ID: 969 },
{ lat: 28.44489, lng: 77.00825, zoom: 6, desc: "Haryana", name: "Khushboo Welfare Society", ID: 970 },
{ lat: 18.52043, lng: 73.85674, zoom: 6, desc: "Maharashtra", name: "Society of Friends of the Sassoon Hospitals (SOFOSH)", ID: 971 },
{ lat: 28.64584, lng: 77.24167, zoom: 6, desc: "Delhi", name: "Dr Shroff's Charity Eye Hospital", ID: 972 },
{ lat: 28.53552, lng: 77.39103, zoom: 6, desc: "Uttar Pradesh", name: "Vidya Child", ID: 973 },
{ lat: 12.98415, lng: 77.56454, zoom: 6, desc: "Karnataka", name: "Sathi, Bangalore", ID: 981 },
{ lat: 10.78673, lng: 76.65479, zoom: 6, desc: "Kerala", name: "Devashrayam Charitable Society", ID: 989 },
{ lat: 19.09521, lng: 74.74959, zoom: 6, desc: "Maharashtra", name: "Snehalaya", ID: 997 },
{ lat: 12.95938, lng: 77.63786, zoom: 6, desc: "Karnataka", name: "Foundation for Excellence India Trust (FFE India Trust)", ID: 1002 },
{ lat: 12.97807, lng: 80.13684, zoom: 6, desc: "Tamil Nadu", name: "Sankara Eye Hospital, Pammal", ID: 1003 },
{ lat: 23.02250, lng: 72.57136, zoom: 6, desc: "Gujarat", name: "The Akshaya Patra Foundation", ID: 1020 },
{ lat: 17.72899, lng: 83.33915, zoom: 6, desc: "Andhra Pradesh", name: "Kidpower India", ID: 1023 },
{ lat: 28.52734, lng: 77.15155, zoom: 6, desc: "Delhi", name: "Sshrishti", ID: 1030 },
{ lat: 17.25367, lng: 80.14080, zoom: 6, desc: "Telangana", name: "Priyadarshini Seva Mandali", ID: 1031 },
{ lat: 25.60810, lng: 85.15543, zoom: 6, desc: "Bihar", name: "Shoshit Seva Sangh", ID: 1039 },
{ lat: 25.61095, lng: 85.14010, zoom: 6, desc: "Bihar", name: "Daudnagar Organisation for Rural Development", ID: 1043 },
{ lat: 16.09288, lng: 80.16255, zoom: 6, desc: "Andhra Pradesh", name: "Chaithanya Educational and Rural Development Society", ID: 1047 },
{ lat: 19.21833, lng: 72.97809, zoom: 6, desc: "Maharashtra", name: "Vidhayak Sansad", ID: 1049 },
{ lat: 23.23976, lng: 69.66893, zoom: 6, desc: "Gujarat", name: "Shree Navchetan Andhjan Mandal", ID: 1050 },
{ lat: 24.60445, lng: 72.71773, zoom: 6, desc: "Rajasthan", name: "J Watumull Global Hospital Research Centre", ID: 1051 },
{ lat: 15.59841, lng: 73.77631, zoom: 6, desc: "Goa", name: "El Shaddai Charitable Trust", ID: 1054 },
{ lat: 18.92074, lng: 72.83229, zoom: 6, desc: "Maharashtra", name: "Mumbai Mobile Creches", ID: 1055 },
{ lat: 19.87617, lng: 75.34331, zoom: 6, desc: "Maharashtra", name: "Marathwada Gramin Vikas Sanstha(MGVS)", ID: 1057 },
{ lat: 22.57265, lng: 88.36389, zoom: 6, desc: "West Bengal", name: "Towards Future", ID: 1059 },
{ lat: 22.56452, lng: 72.92887, zoom: 6, desc: "Gujarat", name: "Charutar Arogya Mandal", ID: 1061 },
{ lat: 18.99887, lng: 72.85455, zoom: 6, desc: "Maharashtra", name: "The Research Society(Jai Vakeel)", ID: 1066 },
{ lat: 28.54164, lng: 77.15691, zoom: 6, desc: "Delhi", name: "SOS Children Villages of India", ID: 1068 },
{ lat: 10.79048, lng: 78.70467, zoom: 6, desc: "Tamil Nadu", name: "Society for Poor People Development", ID: 1071 },
{ lat: 30.39863, lng: 78.07090, zoom: 6, desc: "Uttarakhand", name: "Purkal Youth Development Society", ID: 1073 },
{ lat: 14.61709, lng: 74.84486, zoom: 6, desc: "Karnataka", name: "Manuvikasa", ID: 1075 },
{ lat: 28.56792, lng: 77.18808, zoom: 6, desc: "Delhi", name: "Hemophilia Federation(India)", ID: 1078 },
{ lat: 20.29718, lng: 85.86653, zoom: 6, desc: "Orissa", name: "Vikash", ID: 1080 },
{ lat: 26.91243, lng: 75.78727, zoom: 6, desc: "Rajasthan", name: "Disha Foundation", ID: 1083 },
{ lat: 19.03515, lng: 72.84044, zoom: 6, desc: "Maharashtra", name: "MESCO Modern Educational Social Cultural Organization", ID: 1085 },
{ lat: 27.17667, lng: 78.00807, zoom: 6, desc: "Uttar Pradesh", name: "Indian Dreams Foundation", ID: 1090 },
{ lat: 28.56052, lng: 77.16348, zoom: 6, desc: "Delhi", name: "Tamana", ID: 1101 },
{ lat: 9.94831,  lng: 78.16161, zoom: 6, desc: "Tamil Nadu", name: "Society for Womens Education Economic Development(SWEED)", ID: 1106 },
{ lat: 11.01684, lng: 76.95583, zoom: 6, desc: "Tamil Nadu", name: "Sankara Eye Foundation India", ID: 1107 },
{ lat: 13.03407, lng: 80.24666, zoom: 6, desc: "Tamil Nadu", name: "Bhumi", ID: 1116 },
{ lat: 28.67375, lng: 77.12734, zoom: 6, desc: "Delhi", name: "Sarthak Prayas", ID: 1126 },
{ lat: 28.62190, lng: 77.08784, zoom: 6, desc: "Delhi", name: "Center For Social Security Action Research(CSSAR)", ID: 1151 },
{ lat: 16.21200, lng: 77.34393, zoom: 6, desc: "Karnataka", name: "Aapna Janakalyan", ID: 1155 },
{ lat: 13.01957, lng: 77.59681, zoom: 6, desc: "Karnataka", name: "SUKRUPA", ID: 1160 },
{ lat: 17.99604, lng: 79.55472, zoom: 6, desc: "Andhra Pradesh", name: "Sarvodaya Youth Organisation", ID: 1174 },
{ lat: 19.00564, lng: 72.84852, zoom: 6, desc: "Maharashtra", name: "St Jude India Childcare Centres", ID: 1178 },
{ lat: 12.98953, lng: 80.26066, zoom: 6, desc: "Tamil Nadu", name: "Akanksha Public Charitable Trust", ID: 1179 },
{ lat: 28.64332, lng: 77.33819, zoom: 6, desc: "Uttar Pradesh", name: "Empowering Minds Society for Research and Development", ID: 1183 },
{ lat: 26.88617, lng: 75.74442, zoom: 6, desc: "Rajasthan", name: "Positive Women Network of Rajasthan", ID: 1189 },
{ lat: 13.06233, lng: 80.24074, zoom: 6, desc: "Tamil Nadu", name: "The Ma Foi Foundation", ID: 1191 },
{ lat: 19.09576, lng: 72.92682, zoom: 6, desc: "Maharashtra", name: "Teach For India", ID: 1194 },
{ lat: 12.99673, lng: 77.62216, zoom: 6, desc: "Karnataka", name: "Snehadeep Trust for the Disabled", ID: 1197 },
{ lat: 9.45551, lng: 77.54634, zoom: 6, desc: "Tamil Nadu", name: "Ritham Special School for the Mentally Challenged Chidren", ID: 1200 },
{ lat: 13.06233, lng: 80.24074, zoom: 6, desc: "Tamil Nadu", name: "Ekam Foundation", ID: 1204 },
{ lat: 18.50539, lng: 73.84087, zoom: 6, desc: "Maharashtra", name: "Swadhar IDWC(Institute for Development of Women Children)", ID: 1205 },
{ lat: 22.51170, lng: 88.39744, zoom: 6, desc: "West Bengal", name: "Sabuj Sangha", ID: 1209 },
{ lat: 16.25509, lng: 81.15715, zoom: 6, desc: "Andhra Pradesh", name: "Asha Kiran", ID: 1216 },
{ lat: 28.56651, lng: 77.24880, zoom: 6, desc: "Delhi", name: "Agewell Foundation", ID: 1229 },
{ lat: 18.73801, lng: 75.31206, zoom: 6, desc: "Maharashtra", name: "Society For Comprehensive Rural Health Projects in India", ID: 1230 },
{ lat: 22.57265, lng: 88.36389, zoom: 6, desc: "West Bengal", name: "Rural Health Care Foundation", ID: 1236 },
{ lat: 12.95268, lng: 79.14511, zoom: 6, desc: "Tamil Nadu", name: "The Hope House", ID: 1247 },
{ lat: 30.31649, lng: 78.03219, zoom: 6, desc: "Uttarakhand", name: "Raphael", ID: 1294 },
{ lat: 8.73687, lng: 78.05093, zoom: 6, desc: "Tamil Nadu", name: "Annai Charitable Educational Trust", ID: 1295 },
{ lat: 19.12077, lng: 72.91052, zoom: 6, desc: "Maharashtra", name: "UDAAN India Foundation", ID: 1305 },
{ lat: 11.01926, lng: 76.99455, zoom: 6, desc: "Tamil Nadu", name: "Isha Education", ID: 1308 },
{ lat: 28.61394, lng: 77.20902, zoom: 6, desc: "Delhi", name: "Action for Autism", ID: 1318 },
{ lat: 26.85900, lng: 81.00322, zoom: 6, desc: "Uttar Pradesh", name: "Milaan Be The Change", ID: 1325 },
{ lat: 22.52628, lng: 88.35767, zoom: 6, desc: "West Bengal", name: "Society for the Visually Handicapped", ID: 1339 },
{ lat: 9.99650,  lng: 78.17930, zoom: 6, desc: "Tamil Nadu", name: "Indian Association for the Blind", ID: 1346 },
{ lat: 13.08107, lng: 80.21404, zoom: 6, desc: "Tamil Nadu", name: "Associaton for Non-traditional Employment for Women(ANEW)", ID: 1364 },
{ lat: 17.42545, lng: 78.41194, zoom: 6, desc: "Telangana", name: "Basic Research Education And Development (BREAD) Society", ID: 1365 },
{ lat: 28.57425, lng: 77.18049, zoom: 6, desc: "Delhi", name: "Maitri India", ID: 1366 },
{ lat: 27.20574, lng: 77.55102, zoom: 6, desc: "Rajasthan", name: "Apna Ghar Ashram, Bharatpur", ID: 1367 },
{ lat: 28.67099, lng: 77.22830, zoom: 6, desc: "Delhi", name: "Delhi Council for Child Welfare", ID: 1368 },
{ lat: 22.57265, lng: 88.36389, zoom: 6, desc: "West Bengal", name: "Tomorrows Foundation", ID: 1369 },
{ lat: 34.05204, lng: 74.79734, zoom: 6, desc: "Jammu & Kashmir", name: "Child Nurture and Relief Kashmir (CHINAR Kashmir)", ID: 1370 },
{ lat: 23.83146, lng: 91.28678, zoom: 6, desc: "Tripura", name: "Abhoy Mission", ID: 1371 },
{ lat: 23.00813, lng: 72.52374, zoom: 6, desc: "Gujarat", name: "Samerth Charitable Trust", ID: 1372 },
{ lat: 18.97170, lng: 72.82398, zoom: 6, desc: "Maharashtra", name: "Community Outreach Programme(CORP)", ID: 1373 },
{ lat: 25.46273, lng: 78.57857, zoom: 6, desc: "Uttar Pradesh", name: "Haritika", ID: 1374 },
{ lat: 22.61594, lng: 88.37917, zoom: 6, desc: "West Bengal", name: "Turnstone Global", ID: 1375 },
{ lat: 25.31765, lng: 82.97391, zoom: 6, desc: "Uttar Pradesh", name: "Kiran Society", ID: 1376 },
{ lat: 26.14287, lng: 91.76849, zoom: 6, desc: "Assam", name: "Bhavada Devi Memorial Philanthropic Trust(SENEH)", ID: 1378 },
{ lat: 25.20277, lng: 80.90172, zoom: 6, desc: "Uttar Pradesh", name: "Drishti", ID: 1381 },
{ lat: 26.53151, lng: 74.72566, zoom: 6, desc: "Rajasthan", name: "Rajasthan Mahila Kalyan Mandal Sanstha(RMKM)", ID: 1382 },
{ lat: 26.49327, lng: 80.28474, zoom: 6, desc: "Uttar Pradesh", name: "Shramik Bharti", ID: 1414 },
{ lat: 28.71865, lng: 77.06076, zoom: 6, desc: "Delhi", name: "Navjyoti India Foundation", ID: 1424 },
{ lat: 28.57984, lng: 77.33532, zoom: 6, desc: "Uttar Pradesh", name: "ICARE Eye Hospital Post Graduate Institute", ID: 1430 },
{ lat: 28.54905, lng: 77.21381, zoom: 6, desc: "Delhi", name: "Protsahan", ID: 1439 },
{ lat: 13.08268, lng: 80.27072, zoom: 6, desc: "Tamil Nadu", name: "Avanti Fellows", ID: 1443 },
{ lat: 19.06261, lng: 72.88301, zoom: 6, desc: "Maharashtra", name: "Foundation for Mother and Child Health", ID: 1444 },
{ lat: 19.10760, lng: 72.86107, zoom: 6, desc: "Maharashtra", name: "Ashadeep Association", ID: 1445 },
{ lat: 23.03368, lng: 72.46341, zoom: 6, desc: "Gujarat", name: "Visamo Kids Foundation", ID: 1446 },
{ lat: 21.89740, lng: 83.39496, zoom: 6, desc: "Chhattisgarh", name: "Janmitram Kalyan Samiti", ID: 1458 },
{ lat: 29.45212, lng: 77.72418, zoom: 6, desc: "Uttar Pradesh", name: "Abhinav", ID: 1472 },
{ lat: 30.27165, lng: 78.00711, zoom: 6, desc: "Uttarakhand", name: "Balajee Sewa Sansthan", ID: 1473 },
{ lat: 22.72147, lng: 75.91813, zoom: 6, desc: "Madhya Pradesh", name: "Pahal Jan Sahyog Vikas Sansthan", ID: 1496 },
{ lat: 17.37508, lng: 78.55285, zoom: 6, desc: "Telangana", name: "Rural Development Foundation", ID: 1517 },
{ lat: 26.88804, lng: 75.80491, zoom: 6, desc: "Rajasthan", name: "Vatsalya, Jaipur", ID: 1518 },
{ lat: 13.00867, lng: 77.56666, zoom: 6, desc: "Karnataka", name: "Technology Informatics Design Endeavour(TIDE)", ID: 1519 },
{ lat: 19.01815, lng: 72.83574, zoom: 6, desc: "Maharashtra", name: "Akshara Centre", ID: 1525 },
{ lat: 13.03388, lng: 77.64262, zoom: 6, desc: "Karnataka", name: "ACCESS", ID: 1526 },
{ lat: 14.46735, lng: 78.82413, zoom: 6, desc: "Andhra Pradesh", name: "Aarti for Girls", ID: 1527 },
{ lat: 19.11565, lng: 72.86299, zoom: 6, desc: "Maharashtra", name: "GiveIndia-Projects", ID: 1528 },
{ lat: 19.21833, lng: 72.97809, zoom: 6, desc: "Maharashtra", name: "Mazi Sainik Shikshan Ani Swasthya Kalyan Sanstha", ID: 1529 },
{ lat: 19.11057, lng: 72.92544, zoom: 6, desc: "Maharashtra", name: "Neptune Foundation", ID: 1530 },
{ lat: 12.97011, lng: 77.65389, zoom: 6, desc: "Karnataka", name: "Senior Citizens Banglore", ID: 1535 },
{ lat: 23.85286, lng: 78.76179, zoom: 6, desc: "Madhya Pradesh", name: "Manav Vikas Seva Sangh", ID: 1538 },
{ lat: 12.95834, lng: 77.71558, zoom: 6, desc: "Karnataka", name: "Karunashraya", ID: 1554 },
{ lat: 19.07598, lng: 72.87766, zoom: 6, desc: "Maharashtra", name: "Navasrushti International Trust(Dharma Bharathi Mission)", ID: 1559 },
{ lat: 28.55042, lng: 77.23445, zoom: 6, desc: "Delhi", name: "Gunjan Foundation", ID: 1561 },
{ lat: 28.56547, lng: 77.15785, zoom: 6, desc: "Delhi", name: "PRADAN", ID: 1580 },
{ lat: 28.62134, lng: 77.20689, zoom: 6, desc: "Delhi", name: "The Leprosy Mission Trust India", ID: 1581 },
{ lat: 19.07598, lng: 72.87766, zoom: 6, desc: "Maharashtra", name: "Mission Smile", ID: 1582 },
{ lat: 23.15534, lng: 75.79148, zoom: 6, desc: "Madhya Pradesh", name: "Madhya Pradesh Viklang Sahayta Samiti", ID: 1583 },
{ lat: 19.21833, lng: 72.97809, zoom: 6, desc: "Maharashtra", name: "Shree Mahaganapati Hospital", ID: 1586 },
{ lat: 19.00500, lng: 72.85259, zoom: 6, desc: "Maharashtra", name: "Indian Cancer Society", ID: 1588 },
{ lat: 24.58544, lng: 73.71248, zoom: 6, desc: "Rajasthan", name: "Rajasthan Bal Kalyan Samiti", ID: 1589 },
{ lat: 18.72713, lng: 76.38109, zoom: 6, desc: "Maharashtra", name: "Manavlok", ID: 1619 },
{ lat: 19.00216, lng: 72.84158, zoom: 6, desc: "maharashtra", name: "Antarang Foundation", ID: 1621 },
{ lat: 12.97209, lng: 77.65146, zoom: 6, desc: "Tamil Nadu", name: "QUEST Alliance", ID: 1628 },
        ];
	 
        function initialize() {
            map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 5,
                center: {lat: 21.7679, lng: 78.8718}
            });
            markerData.forEach(function(data) {

                
                var result = data.name.replace(/,/g,"-").replace(/ /g, "-").replace(/[(]/g,"-").replace(/[)]/g,"-");
                var infoConetnt = '<div id="content">' +
                 '<div id="siteNotice">' +
                 '</div>' +
                 '<h3 id="firstHeading" class="firstHeading">' + data.name + '</h3>' +
                 '<div id="bodyContent">' + '<p>' + data.desc + '</p>' +
                 //'<div class="text-center"><a href="http://www.giveindia.org/donationsearch.aspx?ngos-in-'+data.name+'" target="_blank"><input type="button" class="btn btn-orange" value="Donate Now" align="center"></a></div>' +
                 '<div class="text-center"><a href="m-'+data.ID+'-'+result+'.aspx" target="_blank"><input type="button" class="btn btn-orange" value="Donate Now" align="center"></a></div>' +
                 '</div></div>';

                var infowindow = new google.maps.InfoWindow({
                    content: infoConetnt,
                    maxWidth: 200
                });

                var marker = new google.maps.Marker({
                    position: { lat: data.lat, lng: data.lng },
                    map: map,
                    title: data.name
                });
			    
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
                		   
			    
                jQuery("#selectlocation").append('<option value="'+[data.lat, data.lng,data.zoom].join('|')+'">'+data.name+'</option>');

			
            });


			

        }

        google.maps.event.addDomListener(window, 'load', initialize);

        jQuery(document).on('change','#selectlocation',function() {
            var latlngzoom = jQuery(this).val().split('|');
            var newzoom = 1*latlngzoom[2],
            newlat = 1*latlngzoom[0],
            newlng = 1*latlngzoom[1];
            map.setZoom(newzoom);
            map.setCenter({lat:newlat, lng:newlng});
        });

    </script>
    <script>
		$(document).ready(function(){
		  $(".owl-carousel").owlCarousel({
			items:6,
			loop:true,
			margin:10,
			dots: true,
			  autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:3,
					},
					1000:{
						items:7,
						loop:true
					}
				}
		  });
		});
</script>
</body>
</html>