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
                <h1 style="text-align:center">Components</h1>
                <p class="lead" style="text-align:center">Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more.</p>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm">
            <nav>
            <div class="navbar navbar-default navbar-fixed-left" style="overflow-y: scroll;">
                    <ul class="nav navbar-nav">
                     <li> <a href="#pagination">Pagination</a> 
                                <ul class="nav"> 
                                    <li><a href="#pagination-default">Pagination Default</a></li> 
                                    <li><a href="#pagination-pager">Pagination Pager</a></li>
                                </ul> 
                     </li> 
                    
                    </ul>
            </div>
            </nav>
            </div>                   
        
        <div class="col-md-9" role="main">
            <div class="bs-docs-section">
                <h1 class="page-header" id="pagination"><a aria-label=
                "Anchor link for: pagination" class="anchorjs-link" data-anchorjs-icon=""
                href="#pagination" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Pagination</h1>
                <p class="lead">Provide pagination links for your site or app with the
                multi-page pagination component, or the simpler <a href=
                "#pagination-pager">pager alternative</a>.</p>
                <h2 id="pagination-default"><a aria-label=
                "Anchor link for: pagination default" class="anchorjs-link"
                data-anchorjs-icon="" href="#pagination-default" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Default pagination</h2>
                <p>Simple pagination inspired by Rdio, great for apps and search results.
                The large block is hard to miss, easily scalable, and provides large click
                areas.</p>
                <div class="bs-example" data-example-id="simple-pagination">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a aria-label="Previous" href="#"><span aria-hidden=
                                "true">«</span></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#"><span aria-hidden=
                                "true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class=
            "s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">href=</span><span class=
            "s">"#"</span> <span class="na">aria-label=</span><span class=
            "s">"Previous"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class=
            "na">aria-hidden=</span><span class="s">"true"</span><span class=
            "nt">&gt;</span><span class="ni">&amp;laquo;</span><span class=
            "nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">href=</span><span class=
            "s">"#"</span> <span class="na">aria-label=</span><span class=
            "s">"Next"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class=
            "na">aria-hidden=</span><span class="s">"true"</span><span class=
            "nt">&gt;</span><span class="ni">&amp;raquo;</span><span class=
            "nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
                </figure>
                <h3 id="disabled-and-active-states"><a aria-label=
                "Anchor link for: disabled and active states" class="anchorjs-link"
                data-anchorjs-icon="" href="#disabled-and-active-states" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Disabled and active states</h3>
                <p>Links are customizable for different circumstances. Use
                <code>.disabled</code> for unclickable links and <code>.active</code> to
                indicate the current page.</p>
                <div class="bs-example" data-example-id="disabled-active-pagination">
                    <nav>
                        <ul class="pagination">
                            <li class="disabled">
                                <a aria-label="Previous" href="#"><span aria-hidden=
                                "true">«</span></a>
                            </li>
                            <li class="active">
                                <a href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#"><span aria-hidden=
                                "true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class=
            "s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span> <span class=
            "na">aria-label=</span><span class="s">"Previous"</span><span class=
            "nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class=
            "s">"true"</span><span class="nt">&gt;</span><span class=
            "ni">&amp;laquo;</span><span class=
            "nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"active"</span><span class="nt">&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class=
            "na">class=</span><span class="s">"sr-only"</span><span class=
            "nt">&gt;</span>(current)<span class=
            "nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                ...
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
                </figure>
                <p>You can optionally swap out active or disabled anchors for
                <code>&lt;span&gt;</code>, or omit the anchor in the case of the
                previous/next arrows, to remove click functionality while retaining
                intended styles.</p>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class=
            "s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"disabled"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;span&gt;</span>
                    <span class="nt">&lt;span</span> <span class=
            "na">aria-hidden=</span><span class="s">"true"</span><span class=
            "nt">&gt;</span><span class="ni">&amp;laquo;</span><span class=
            "nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"active"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;span&gt;</span>1 <span class=
            "nt">&lt;span</span> <span class="na">class=</span><span class=
            "s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class=
            "nt">&lt;/span&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                ...
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
                </figure>
                <h3 id="sizing"><a aria-label="Anchor link for: sizing" class=
                "anchorjs-link" data-anchorjs-icon="" href="#sizing" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Sizing</h3>
                <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or
                <code>.pagination-sm</code> for additional sizes.</p>
                <div class="bs-example" data-example-id="pagination-sizing">
                    <nav>
                        <ul class="pagination pagination-lg">
                            <li>
                                <a aria-label="Previous" href="#"><span aria-hidden=
                                "true">«</span></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#"><span aria-hidden=
                                "true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a aria-label="Previous" href="#"><span aria-hidden=
                                "true">«</span></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#"><span aria-hidden=
                                "true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="pagination pagination-sm">
                            <li>
                                <a aria-label="Previous" href="#"><span aria-hidden=
                                "true">«</span></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#"><span aria-hidden=
                                "true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class=
                    "s">"pagination pagination-lg"</span><span class=
                    "nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span>
            <span class="nt">&lt;nav&gt;&lt;ul</span> <span class=
            "na">class=</span><span class="s">"pagination"</span><span class=
            "nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span>
            <span class="nt">&lt;nav&gt;&lt;ul</span> <span class=
            "na">class=</span><span class="s">"pagination pagination-sm"</span><span class=
            "nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span></code></pre>
                </figure>
                <h2 id="pagination-pager"><a aria-label="Anchor link for: pagination pager"
                class="anchorjs-link" data-anchorjs-icon="" href="#pagination-pager"
                style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Pager</h2>
                <p>Quick previous and next links for simple pagination implementations with
                light markup and styles. It's great for simple sites like blogs or
                magazines.</p>
                <h3 id="default-example"><a aria-label="Anchor link for: default example"
                class="anchorjs-link" data-anchorjs-icon="" href="#default-example" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Default example</h3>
                <p>By default, the pager centers links.</p>
                <div class="bs-example" data-example-id="simple-pager">
                    <nav>
                        <ul class="pager">
                            <li>
                                <a href="#">Previous</a>
                            </li>
                            <li>
                                <a href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class=
            "s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
                </figure>
                <h3 id="aligned-links"><a aria-label="Anchor link for: aligned links"
                class="anchorjs-link" data-anchorjs-icon="" href="#aligned-links" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Aligned links</h3>
                <p>Alternatively, you can align each link to the sides:</p>
                <div class="bs-example" data-example-id="aligned-pager-links">
                    <nav>
                        <ul class="pager">
                            <li class="previous">
                                <a href="#"><span aria-hidden="true">←</span> Older</a>
                            </li>
                            <li class="next">
                                <a href="#">Newer <span aria-hidden="true">→</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class=
            "s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"previous"</span><span class="nt">&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class=
            "s">"true"</span><span class="nt">&gt;</span><span class=
            "ni">&amp;larr;</span><span class="nt">&lt;/span&gt;</span> Older<span class=
            "nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"next"</span><span class="nt">&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>Newer <span class="nt">&lt;span</span> <span class=
            "na">aria-hidden=</span><span class="s">"true"</span><span class=
            "nt">&gt;</span><span class="ni">&amp;rarr;</span><span class=
            "nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
                </figure>
                <h3 id="optional-disabled-state"><a aria-label=
                "Anchor link for: optional disabled state" class="anchorjs-link"
                data-anchorjs-icon="" href="#optional-disabled-state" style=
                "font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;">
                </a>Optional disabled state</h3>
                <p>Pager links also use the general <code>.disabled</code> utility class
                from the pagination.</p>
                <div class="bs-example" data-example-id="disabled-pager">
                    <nav>
                        <ul class="pager">
                            <li class="previous disabled">
                                <a href="#"><span aria-hidden="true">←</span> Older</a>
                            </li>
                            <li class="next">
                                <a href="#">Newer <span aria-hidden="true">→</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class=
                    "nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class=
            "s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"previous disabled"</span><span class="nt">&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class=
            "s">"true"</span><span class="nt">&gt;</span><span class=
            "ni">&amp;larr;</span><span class="nt">&lt;/span&gt;</span> Older<span class=
            "nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class=
            "s">"next"</span><span class="nt">&gt;&lt;a</span> <span class=
            "na">href=</span><span class="s">"#"</span><span class=
            "nt">&gt;</span>Newer <span class="nt">&lt;span</span> <span class=
            "na">aria-hidden=</span><span class="s">"true"</span><span class=
            "nt">&gt;</span><span class="ni">&amp;rarr;</span><span class=
            "nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
                </figure>
                <a class="btn bg-custom" href="Downloads/CSS/pagination.html" download>DOWNLOAD FULL CODE</a><br>
            </div>

        </div>

        </div>        
    </div>
        <?php include 'footer.php'; ?>
</body>
<script type="text/javascript">
        document.querySelector('.navbar').querySelectorAll('li')[2].setAttribute('class','active');
        listElement = document.querySelector('.navbar').querySelectorAll('li');
        for(var i=0; i < listElement.length; i++){
            if(i != 2){
                listElement[i].removeAttribute('class');
            }  
        }
</script>
</html>
