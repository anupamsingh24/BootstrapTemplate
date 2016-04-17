<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=keywords content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development"> 
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Bootstrap Components </title>
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
                    <h1 style="text-align:center">CSS</h1>
                    <p class="lead" style="text-align:center">Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</p>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                <nav>
                <div class="navbar navbar-default navbar-fixed-left" style="overflow-y: scroll;">
                        <ul class="nav navbar-nav">
                         <li> <a href="#tables">Tables</a> 
                                    <ul class="nav"> 
                                        <li><a href="#tables-example">Basic example</a></li> 
                                        <li><a href="#tables-striped">Striped rows</a></li>
                                        <li><a href="#tables-bordered">Bordered table</a></li> 
                                        <li><a href="#tables-hover-rows">Hover rows</a></li> 
                                        <li><a href="#tables-condensed">Condensed table</a></li> 
                                        <li><a href="#tables-contextual-classes">Contextual classes</a></li> 
                                        <li><a href="#tables-responsive">Responsive tables</a></li> 
                                    </ul> 
                         </li> 
                                <li> <a href="#forms">Forms</a> 
                                    <ul class="nav"> 
                                            <li><a href="#forms-example">Basic example</a></li> 
                                            <li><a href="#forms-inline">Inline form</a></li> 
                                            <li><a href="#forms-horizontal">Horizontal form</a></li> 
                                            <li><a href="#forms-controls">Supported controls</a></li> 
                                            <li><a href="#forms-controls-static">Static control</a></li> 
                                            <li><a href="#forms-control-focus">Focus state</a></li> 
                                            <li><a href="#forms-control-disabled">Disabled state</a></li> 
                                            <li><a href="#forms-control-readonly">Readonly state</a></li> 
                                            <li><a href="#forms-help-text">Help text</a></li> 
                                            <li><a href="#forms-control-validation">Validation states</a></li> 
                                            <li><a href="#forms-control-sizes">Control sizing</a></li> 
                                        </ul>
                                </li>       
                </div>
                </nav>
            </div>
                    
</div>
              <span></span>       
                    
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
   <script type="text/javascript">
            document.querySelector('.navbar').querySelectorAll('li')[1].setAttribute('class','active');
            document.querySelector('.navbar').querySelectorAll('li')[0].removeAttribute('class');
    </script>
</html>
