<div class="row">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Bootstrap Template</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active" id="home"><a href="index.php">Home</a></li>
            <li id="cssa"><a href="" id="myHref">CSS</a></li>
            <li><a href="#components">Components</a></li>
            <li><a href="#javascript">JavaScript</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
</div>
<script>
    $("#myHref").on('click', function() {
    window.location = "css.php";

});
</script>