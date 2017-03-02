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

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
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
                    <ul id="tab-top" class="nav nav-tabs tabs-4 theme-choice" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">GAE Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Runtime Environments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Storage &amp; Memcache</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel4" role="tab">Stipulations &amp; Use</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <ul class="styled">
                                            <li>GAE is one component of the Google Cloud Platform that is PaaS, where the individual/team just manages the application, allowing Google to handle the rest</li>
                                            <li>GAE’s goals is designed to:
                                                <ul class="styled">
                                                    <li>Make the system easy to use</li>
                                                    <li>Make it easy to scale</li>
                                                    <li>And free to get started (with a $300 bonus to use once you start acquiring fees)</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <ul class="styled">
                                            <li>GAE provides an App Engine SDK that supports programmer development, and an infrastructure to run web apps. This means they are specifically focused on web applications while providing tools to make it easily run, deploy, and scale</li>
                                            <li>GAE provides a way for you to pack up your code, specify how you want it to run in response to requests, and then they run and serve it for you</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel2" role="tabpanel">
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <h2>Standard</h2>
                                        <ul class="styled">
                                            <li>Python 2.7</li>
                                            <li>Java 6</li>
                                            <li>PHP 5</li>
                                            <li>GO</li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <h2>Flexible</h2>
                                        <ul class="styled">
                                            <li>Python 2.7/3.5</li>
                                            <li>Java 8</li>
                                            <li>PHP 5/7</li>
                                            <li>GO</li>
                                            <li>Node.js</li>
                                            <li>Ruby</li>
                                            <li>Some Custom Runtime</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel3" role="tabpanel">
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <h2>Storage</h2>
                                        <ul class="styled">
                                            <li>Static</li>
                                            <li>Dynamic
                                                <ul class="styled">
                                                    <li> Datastore is dynamic
                                                        <ul class="styled">
                                                            <li>NoSQL database that with query engine</li>
                                                            <li>Encrypts all data before written to disk and decrypts the data for authorized user</li>
                                                            <li>Robust, scalable storage</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <h2>Memcache</h2>
                                        <ul class="styled">
                                            <li>Shared
                                                <ul class="styled">
                                                    <li>Free with GAE, provides cache capacity on a best-effort basis</li>
                                                </ul>
                                            </li>
                                            <li>Dedicated
                                                <ul class="styled">
                                                    <li>Paid service where you get to choose how much cache is dedicated to your application. More cache helps alleviate the higher cost of more storage (by reducing reads from higher accuracy request predictions)</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel4" role="tabpanel">
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <ul class="styled">
                                            <li>Interaction of GAE and website must follow HTTP interaction</li>
                                            <li>Some websites do not like ‘robot’ to access</li>
                                            <li>If Datastore becomes too small
                                                <ul class="styled">
                                                    <li>Use BigTable</li>
                                                    <li>BigTable is beneficial (financially practical) with database > 1 TB</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <ul class="styled">
                                            <li>When not to use GAE
                                                <ul class="styled">
                                                    <li>You have a "naked" website that doesn't follow HTTP protocol</li>
                                                    <li>Your requests take longer than 30 seconds to pull</li>
                                                    <li>Not suitable for high computation jobs. Use Google Compute Engine or another GCP service</li>
                                                    <li>Your web application is written in a legacy language or one other than those supported and you can't "skin" it, or rewrite it. Look to AWS</li>
                                                    <li>You want more control</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <center>
                                <a href="https://goo.gl/forms/F1vgMDlDkvEAlHEg2" alt="Take the quiz!" target="_blank">
                                    <button id="google-forms-btn" type="button" class="btn btn-default theme-choice btn-lg">Take the Quiz</button>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/tether.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>

        <script>
            new WOW().init();

            (function() {
                var currentSelection = $('#section-1 .parallax-layer-back').css('background-image');
                var src = "url('images/cat-wallpaper.jpg')";

                $(".dropdown ul li").click(function() {

                    var name = $(this).attr('name');
                    src = "url('images/"+name+"-wallpaper.jpg')";

                    $('#tab-top').removeClass('cat dog bird snake');
                    $('#google-forms-btn').removeClass('cat dog bird snake');
                    $('.styled').removeClass('cat dog bird snake');
                    $('#tab-top').addClass(name);
                    $('#google-forms-btn').addClass(name);
                    $('.styled').addClass(name);

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
