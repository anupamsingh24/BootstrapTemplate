<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=keywords content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development"> 
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Home - Bootstrap Usage Guide </title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel=stylesheet>
        <link href="../css/docs.min.css rel=stylesheet">
        <script src="../bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php include '../Views/header.php'; ?>
            <div class="row">
                <div class="col-sm-12 bg-custom">
                    <h1 style="text-align:center">Bootstrap Template</h1>
                    <p class="lead" style="text-align:center">A one stop spot to give you a detailed study of all the components and styles available in bootstrap.</p>
                </div>
            </div>
            
            <div class=bs-docs-featurette> 
                <div class=container>
                    <h2 class=bs-docs-featurette-title>Designed for everyone, everywhere.</h2> 
                    <p class=lead>Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.</p> 
                    <hr class=half-rule> 
                    <div class=row>
                        <div class=col-sm-4> 
                            <img src=../images/sass-less.png alt="Sass and Less support" class=img-responsive> 
                            <h3>Preprocessors</h3> 
                            <p>Bootstrap ships with vanilla CSS, but its source code utilizes the two most popular CSS preprocessors, <a href=../css/#less>Less</a> and <a href=../css/#sass>Sass</a>. Quickly get started with precompiled CSS or build on the source.</p> 
                        </div> 
                        <div class=col-sm-4> 
                            <img src=../images/devices.png alt="Responsive across devices" class=img-responsive> 
                            <h3>One framework, every device.</h3> 
                            <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p> 
                        </div> 
                        <div class=col-sm-4> 
                            <img src=../images/components.png alt=Components class=img-responsive > 
                            <h3>Full of features</h3>
                            <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p> 
                        </div> 
                    </div>
                </div>
            </div>
            <?php include '../Views/footer.php'; ?>
        </div>
        <script type="text/javascript">
            document.querySelector('.navbar').querySelectorAll('li')[0].setAttribute('class','active');
        </script>
    </body>