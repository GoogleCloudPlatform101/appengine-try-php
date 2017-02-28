<?php
    $name ="Firstname Lastname";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $name;?></title>

        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="mdb.min.css" rel="stylesheet">
        <link href="custom.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">

    </head>
    <body>
        <div class="parallax">
            <div id="section-1" class="parallax-section">
                <center><div class="dropdown">
                    <a class="btn btn-outline-white btn-lg wow fadeInDown waves-effect waves-light dropdown-toggle" data-toggle="dropdown" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        </i> Select Your Theme <span class="caret"></span>
                    </a>
                  <ul class="dropdown-menu btn-outline-white btn-lg">
                    <li name="cat">Cat</li>
                    <li name="dog">Dog</li>
                    <li name="bird">Bird</li>
                    <li name="snake">Snake</li>
                  </ul>
                </div></center>
                <div class="parallax-layer parallax-layer-base">
                    <div class="full-bg-img flex-center">
                        <ul>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>
                                <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"><?php echo $name;?></h1></li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>
                                <p class="wow fadeInDown" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"><i class="fa fa-arrow-down fa-5x" aria-hidden="true"></i></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="parallax-layer parallax-layer-back"></div>
            </div>

            <div id="section-2" name="section-2">
                <div class="container text-center pt-1 mb-3">

                <!-- Nav tabs -->
                <ul id="tab-top" class="nav nav-tabs tabs-4 theme-choice" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-cloud"></i> Tab One</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-heart"></i> Tab Two</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab"><i class="fa fa-cogs"></i> Tab Three</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel4" role="tab"><i class="fa fa-magic"></i> Tab Four</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                    </div>
                    <!--/.Panel 1-->
                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                    </div>
                    <!--/.Panel 2-->
                    <!--Panel 3-->
                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                    </div>
                    <div class="tab-pane fade" id="panel4" role="tabpanel">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                    </div>
                    <!--/.Panel 3-->
                </div>

                </div>
            </div>
        </div>

        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="scroll.js"></script>
        <script type="text/javascript" src="tether.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
        <script type="text/javascript" src="mdb.min.js"></script>

        <script>
            new WOW().init();

            (function() {
                var currentSelection = $('#section-1 .parallax-layer-back').css('background-image');
                var src = "url('cat-wallpaper.jpg')";

                $(".dropdown ul li").click(function() {

                    var name = $(this).attr('name');
                    src = "url('"+name+"-wallpaper.jpg')";

                    $('#tab-top').removeClass('cat dog bird snake');
                    $('#tab-top').addClass(name);

                    $('#section-1 .parallax-layer-back').fadeTo('slow', 0.3, function() {
                        $('#section-1 .parallax-layer-back').css("background-image", src);
                        $('#section-1 .parallax-layer-back').height('100vh');
                    }).fadeTo('slow', 1);

                })
            })(jQuery);
        </script>
        <div class="hiddendiv common"></div>
    </body>
</html>