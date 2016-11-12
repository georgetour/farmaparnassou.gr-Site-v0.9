<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Φάρμα Παρνασσού - Κρέατα</title>

    <!--Bootstrap-->
    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script async src="scripts/index.js"></script>

    <!--Custom style-->
    <link href="css/non-main-pages/non-main-pages.css" rel="stylesheet" type="text/css">

    <!--Font Awesome Icons-->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

<body id="meat-page" class="contact-page">
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" class="">
    <div class="container page-color">
        <article class="full-article">
            <div class="row">
                <h1  class="col-xs-12  product-category">Ελάτε στο κατάστημα μας</h1>
            </div>
            <section><!--Contact section-->
                <div class="row ">
                    <div class="col-xs-12  col-lg-5"><!--Left or up column-->
                        <div class="emphasis">
                            <address>
                            <p>Τηλέφωνο : 2104830060</p>
                            <p>Διεύθυνση : Καραισκάκη 6 & Ειρήνης 33</p>
                            <p>Περιοχή : Νέο Φάληρο, Πειραιάς</p>
                            <p>email : farmaparnassou@yahoo.gr</p>
                            <p>Ωράριο</p>
                            <p>Δευ-Τετ-Σαβ 8:00-18:00</p>
                            <p>Τρίτη-Πέμπτη-Παρασκευή  8:00-21:00</p>
                            </address>
                        </div>
                    </div><!--End Left or up column-->
                    <div class="col-xs-12 col-lg-7  "><!--Right column-->
                        <img class="contact-image img-responsive " src="images/contact/IMG_2794.JPG" alt="George and Kostas welcoming">

                    </div>
                </div>
            </section><!--End Contact section-->

            <!--Google map-->
            <section>
                <div class="row">
                    <h2 class=" product-category">Βρείτε μας στο χαρτη</h2>
                </div>
            <iframe class=" google-map img-center " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.2498057297776!2d23.666897114496784!3d37.947952779728325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bc756e432087%3A0x2fb5a4e5dfbe6eb5!2zzpXOuc-Bzq7Ovc63z4IgzrrOsc65IM6azrHPgc6xz4rPg866zqzOus63LCDOoM61zrnPgc6xzrnOrM-CIDE4NSA0Nw!5e0!3m2!1sel!2sgr!4v1478954954714" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen></iframe>
            </section>

        </article>
    </div><!--Full page container end-->
</div><!--End page content-->


<footer class="footer ">
    <div class="container">
        <div class="col-xs-12 col-lg-3">Τηλέφωνο : 2104830060</div>
        <div class="col-xs-12 col-lg-3">Διεύθυνση : Καραισκάκη 6 & Ειρήνης 33</div>
        <div class="col-xs-12 col-lg-3">Περιοχή : Νέο Φάληρο, Πειραιάς</div>
        <div class="col-xs-12 col-lg-3">email : farmaparnassou@yahoo.gr</div>
        <div  class="col-xs-12 col-lg-12 footer-rights">farmaparnassou.gr 2013-2016 All rights reserved <br>Created by George Tourtsinakis </div>

    </div>
</footer>


<!--Jquery bootstrap scrips-->
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {


        //stick in the fixed 100% height behind the navbar but don't wrap it
        $('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));

        // Enter your ids or classes
        var toggler = '.navbar-toggle';
        var pagewrapper = '#page-content';
        var navigationwrapper = '.navbar-header';
        var menuwidth = '100%'; // the menu inside the slide menu itself
        var slidewidth = '80%';
        var menuneg = '-100%';
        var slideneg = '-80%';
        var topicons = '#top-icons';


        $("#slide-nav").on("click", toggler, function () {

            var selected = $("#slide-nav").hasClass('slide-active');

            $('#slidemenu').stop().animate({
                left: selected ? menuneg : '0px'
            });

            $('#navbar-height-col').stop().animate({
                left: selected ? slideneg : '0px'
            });

            $(pagewrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });

            $(topicons).stop().animate({
                left: selected ? '0px' : slidewidth
            });

            $(navigationwrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });


            $(this).toggleClass('slide-active', !selected);
            $('#slidemenu').toggleClass('slide-active');


            $('#page-content,#top-icons, .navbar, body, .navbar-header').toggleClass('slide-active');


        });


        var selected = '#slidemenu, #page-content,#top-icons, body, .navbar, .navbar-header';


        $(window).on("resize", function () {

            if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
                $(selected).removeClass('slide-active');
            }


        });

        //iPad specific fix
        $(toggler).on('click',function () {
            if ( ($(window).width() <= 1024) && ($(window).width() > 769 )){
                if($('body').hasClass('slide-active')){
                    $(toggler).css("margin-left","0px");
                }

                else if(!$('body').hasClass('slide-active')){
                    $(toggler).css("margin-left","45px");
                }
            }
        })

        //Active class
        $('#slidemenu ul.nav li:nth-child(6)').addClass("active");

    });
</script>


</body>
</html>