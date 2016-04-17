<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=keywords content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development"> 
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Customize and download &middot; Bootstrap </title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/docs.min.css" rel="stylesheet">
        <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php include 'header.php'; ?>





            <div class="row">
                <div class="col-sm-12 bg-custom">
                    <h1 style="text-align:center">Bootstrap Template</h1>
                    <p class="lead" style="text-align:center">A one stop spot to give you a detailed study of all the components and styles available in bootstrap.</p>
                </div>
            </div>
          <!-- Main component for a primary marketing message or call to action -->
            
            <div class=bs-docs-featurette> 
                <div class=container>
                    <h2 class=bs-docs-featurette-title>Designed for everyone, everywhere.</h2> 
                    <p class=lead>Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.</p> 
                    <hr class=half-rule> 
                    <div class=row>
                        <div class=col-sm-4> 
                            <img src="images/sass-less.png" alt="Sass and Less support" class="img-responsive"> 
                            <h3>Preprocessors</h3> 
                            <p>Bootstrap ships with vanilla CSS, but its source code utilizes the two most popular CSS preprocessors, <a href=../css/#less>Less</a> and <a href=../css/#sass>Sass</a>. Quickly get started with precompiled CSS or build on the source.</p> 
                        </div> 
                        <div class=col-sm-4> 
                            <img src="images/devices.png" alt="Responsive across devices" class="img-responsive"> 
                            <h3>One framework, every device.</h3> 
                            <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p> 
                        </div> 
                        <div class=col-sm-4> 
                            <img src="images/components.png" alt="Components" class="img-responsive" > 
                            <h3>Full of features</h3>
                            <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p> 
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12 bg-custom" id="content" role="main" tabindex="-1">
                 <div class="container">
                     
                      <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline" style="margin-left:auto;margin-right:auto;margin-top:50px;margin-bottom:25px;">B</span> 
                      <p class="lead" style="text-align:center">Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.</p> 
                      <p class="lead"> <a href="http://getbootstrap.com/getting-started/#download" style="margin-left:475px;margin-right:auto;" class="btn btn-outline-inverse btn-lg">Download Bootstrap</a> </p> 
                      <p class="version" style="margin-left:520px;margin-right:auto;">Currently v3.3.6</p> 
                      <div id="carbonads-container">
                          <div class="carbonad"><div id="azcarbon"> </div>
                      </div>
                 </div>
            </div></div>
            </div>
            <span class="bg-white"><br><br></span>
            
            
            <?php include 'footer.php'; ?>
        </div>
        
        
       
    </body>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>
            $(document).ready(function () {
            $('ul.nav > li').click(function (e) {
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');                
        });            
    });
        
        
        
        
        </script>
        
</html>