<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="UNITAR">
    <?php if (isset($page->summary)): ?>
        <meta name="Description" content="<?php echo $page->summary ?>">
    <?php endif ?>
    <?php if (isset($page->keywords)): ?>
        <meta name="Keywords" content="<?php echo $page->keywords ?>">
    <?php endif ?>

    <link rel="icon" href="../../favicon.ico">

    <title>
    <?php 
        if (isset($page->title)) {
            echo $page->title;
        } else {                
            echo "Chemicals and Waste Platform";
        }
    ?>
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Actor|Rambla|Signika+Negative" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $config->urls->templates ?>styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">

    <style type="text/css">
        .parallax-window {
            height: 400px;
            background: transparent;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <nav class="navbar navbar-default" style="margin-bottom: 0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#" style="padding-top: 3px;">
                    <img src="<?php echo $config->urls->assets ?>images/UNITAR_Logo_White-png.png" class="img-responsive" style="max-height: 70px;"></img>
                </a>-->
                <a class="navbar-brand" href="/"><span style="font-size: 14px;">CHEMICALS AND WASTE PLATFORM</span></a></li>
            </div>
            <div id="navbar" class="collapse navbar-collapse ">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $pages->get('/module-1')->url ?>">MODULE 1</a></li>
                            <li><a href="<?php echo $pages->get('/module-2')->url ?>">MODULE 2</a></li>
                            <li><a href="<?php echo $pages->get('/module-3')->url ?>">MODULE 3</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="<?php echo $pages->get('/resources')->url ?>">RESOURCES</a></li>
                    <li class=""><a href="<?php echo $pages->get('/about')->url ?>">ABOUT</a></li>
                </ul> 
               <!--  <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form> -->
            </div><!--/.navbar-collapse -->
        </div>
    </nav>
