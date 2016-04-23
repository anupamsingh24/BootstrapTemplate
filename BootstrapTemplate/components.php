<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width,initial-scale=1" name="viewport">
		<meta content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development" name="keywords">
		<meta content="" name="description">
		<meta content="" name="author">
		<title>
			Bootstrap Components
		</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
		</script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
		</script>
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/docs.min.css" rel="stylesheet">
		<script src="bootstrap-3.3.6-dist/js/bootstrap.js">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include 'header.php'; ?>
			<div class="row">
				<div class="col-sm-12 bg-custom">
					<h1 style="text-align:center">
						Components
					</h1>
					<p class="lead" style="text-align:center">
						Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 hidden-xs hidden-sm">
					<nav>
						<div class="navbar navbar-default navbar-fixed-left" style="overflow-y: scroll;">
							<ul class="nav navbar-nav">
								<li>
									<a href="#pagination">Pagination</a>
									<ul class="nav">
										<li>
											<a href="#pagination-default">Pagination Default</a>
										</li>
										<li>
											<a href="#pagination-pager">Pagination Pager</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#dropdowns">Dropdowns</a>
									<ul class="nav">
										<li>
											<a href="#dropdowns-example">Example</a>
										</li>
										<li>
											<a href="#dropdowns-alignment">Alignment</a>
										</li>
										<li>
											<a href="#dropdowns-headers">Headers</a>
										</li>
										<li>
											<a href="#dropdowns-divider">Divider</a>
										</li>
										<li>
											<a href="#dropdowns-disabled">Disabled menu items</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#btn-groups">Button groups</a>
									<ul class="nav">
										<li>
											<a href="#btn-groups-single">Basic example</a>
										</li>
										<li>
											<a href="#btn-groups-toolbar">Button toolbar</a>
										</li>
										<li>
											<a href="#btn-groups-sizing">Sizing</a>
										</li>
										<li>
											<a href="#btn-groups-nested">Nesting</a>
										</li>
										<li>
											<a href="#btn-groups-vertical">Vertical variation</a>
										</li>
										<li>
											<a href="#btn-groups-justified">Justified button groups</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#btn-dropdowns">Button dropdowns</a>
									<ul class="nav">
										<li>
											<a href="#btn-dropdowns-single">Single button dropdowns</a>
										</li>
										<li>
											<a href="#btn-dropdowns-split">Split button dropdowns</a>
										</li>
										<li>
											<a href="#btn-dropdowns-sizing">Sizing</a>
										</li>
										<li>
											<a href="#btn-dropdowns-dropup">Dropup variation</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-md-9" role="main">
					<div class="bs-docs-section">
						<h1 class="page-header" id="pagination">
							<a aria-label="Anchor link for: pagination" class="anchorjs-link" data-anchorjs-icon="" href="#pagination" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Pagination
						</h1>
						<p class="lead">
							Provide pagination links for your site or app with the multi-page pagination component, or the simpler <a href="#pagination-pager">pager alternative</a>.
						</p>
						<h2 id="pagination-default">
							<a aria-label="Anchor link for: pagination default" class="anchorjs-link" data-anchorjs-icon="" href="#pagination-default" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default pagination
						</h2>
						<p>
							Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.
						</p>
						<div class="bs-example" data-example-id="simple-pagination">
							<nav>
								<ul class="pagination">
									<li>
										<a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a>
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
										<a aria-label="Next" href="#"><span aria-hidden="true">»</span></a>
									</li>
								</ul>
							</nav>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h3 id="disabled-and-active-states">
							<a aria-label="Anchor link for: disabled and active states" class="anchorjs-link" data-anchorjs-icon="" href="#disabled-and-active-states" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled and active states
						</h3>
						<p>
							Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.
						</p>
						<div class="bs-example" data-example-id="disabled-active-pagination">
							<nav>
								<ul class="pagination">
									<li class="disabled">
										<a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a>
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
										<a aria-label="Next" href="#"><span aria-hidden="true">»</span></a>
									</li>
								</ul>
							</nav>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                ...
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
						</figure>
						<p>
							You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code>, or omit the anchor in the case of the previous/next arrows, to remove click functionality while retaining intended styles.
						</p>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;span&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                ...
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h3 id="sizing">
							<a aria-label="Anchor link for: sizing" class="anchorjs-link" data-anchorjs-icon="" href="#sizing" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sizing
						</h3>
						<p>
							Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.
						</p>
						<div class="bs-example" data-example-id="pagination-sizing">
							<nav>
								<ul class="pagination pagination-lg">
									<li>
										<a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a>
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
										<a aria-label="Next" href="#"><span aria-hidden="true">»</span></a>
									</li>
								</ul>
							</nav>
							<nav>
								<ul class="pagination">
									<li>
										<a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a>
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
										<a aria-label="Next" href="#"><span aria-hidden="true">»</span></a>
									</li>
								</ul>
							</nav>
							<nav>
								<ul class="pagination pagination-sm">
									<li>
										<a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a>
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
										<a aria-label="Next" href="#"><span aria-hidden="true">»</span></a>
									</li>
								</ul>
							</nav>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span>
            <span class="nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span>
            <span class="nt">&lt;nav&gt;&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;&lt;/nav&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="pagination-pager">
							<a aria-label="Anchor link for: pagination pager" class="anchorjs-link" data-anchorjs-icon="" href="#pagination-pager" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Pager
						</h2>
						<p>
							Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.
						</p>
						<h3 id="default-example">
							<a aria-label="Anchor link for: default example" class="anchorjs-link" data-anchorjs-icon="" href="#default-example" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default example
						</h3>
						<p>
							By default, the pager centers links.
						</p>
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
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h3 id="aligned-links">
							<a aria-label="Anchor link for: aligned links" class="anchorjs-link" data-anchorjs-icon="" href="#aligned-links" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Aligned links
						</h3>
						<p>
							Alternatively, you can align each link to the sides:
						</p>
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
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span><span class="nt">&lt;/span&gt;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;rarr;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h3 id="optional-disabled-state">
							<a aria-label="Anchor link for: optional disabled state" class="anchorjs-link" data-anchorjs-icon="" href="#optional-disabled-state" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-position: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-alternates: normal; font-variant-east-asian: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Optional disabled state
						</h3>
						<p>
							Pager links also use the general <code>.disabled</code> utility class from the pagination.
						</p>
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
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span><span class="nt">&lt;/span&gt;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;rarr;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/CSS/pagination.html">DOWNLOAD FULL CODE</a><br>
					</div>

					<div class="bs-docs-section">
						<h1 class="page-header" id="dropdowns">
							Dropdowns
						</h1>
						<p class="lead">
							Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.
						</p>
						<h2 id="dropdowns-example">
							Example
						</h2>
						<p>
							Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.
						</p>
						<div class="bs-example" data-example-id="static-dropdown">
							<div class="dropdown clearfix">
								<button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" type="button">Dropdown <span class="caret"></span></button>
								<ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
								</ul>
							</div>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenu1"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"true"</span><span class="nt">&gt;</span>
Dropdown
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>
						<p>
							Dropdown menus can be changed to expand upwards (instead of downwards) by adding <code>.dropup</code> to the parent.
						</p>
						<div class="bs-example" data-example-id="static-dropup">
							<div class="dropup clearfix">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2" type="button">Dropup <span class="caret"></span></button>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
								</ul>
							</div>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropup"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenu2"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
Dropup
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu2"</span><span class="nt">&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="dropdowns-alignment">
							Alignment
						</h2>
						<p>
							By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.
						</p>
						<div class="bs-callout bs-callout-warning" id="callout-dropdown-positioning">
							<h4>
								May require additional positioning
							</h4>
							<p>
								Dropdowns are automatically positioned via CSS within the normal flow of the document. This means dropdowns may be cropped by parents with certain <code>overflow</code> properties or appear out of bounds of the viewport. Address these issues on your own as they arise.
							</p>
						</div>
						<div class="bs-callout bs-callout-warning" id="callout-dropdown-pull-right">
							<h4>
								Deprecated <code>.pull-right</code> alignment
							</h4>
							<p>
								As of v3.1.0, we've deprecated <code>.pull-right</code> on dropdown menus. To right-align a menu, use <code>.dropdown-menu-right</code>. Right-aligned nav components in the navbar use a mixin version of this class to automatically align the menu. To override it, use <code>.dropdown-menu-left</code>.
							</p>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span> <span class="na">aria-labelledby=</span><span class="s">"dLabel"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/ul&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="dropdowns-headers">
							Headers
						</h2>
						<p>
							Add a header to label sections of actions in any dropdown menu.
						</p>
						<div class="bs-example">
							<div class="dropdown clearfix">
								<button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" type="button">Dropdown <span class="caret"></span></button>
								<ul aria-labelledby="dropdownMenu3" class="dropdown-menu">
									<li class="dropdown-header">Dropdown header
									</li>
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="dropdown-header">Dropdown header
									</li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu3"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
...
<span class="nt">&lt;/ul&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="dropdowns-divider">
							Divider
						</h2>
						<p>
							Add a divider to separate series of links in a dropdown menu.
						</p>
						<div class="bs-example">
							<div class="dropdown clearfix">
								<button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenuDivider" type="button">Dropdown <span class="caret"></span></button>
								<ul aria-labelledby="dropdownMenuDivider" class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenuDivider"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
...
<span class="nt">&lt;/ul&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="dropdowns-disabled">
							Disabled menu items
						</h2>
						<p>
							Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.
						</p>
						<div class="bs-example">
							<div class="dropdown clearfix">
								<button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu4" type="button">Dropdown <span class="caret"></span></button>
								<ul aria-labelledby="dropdownMenu4" class="dropdown-menu">
									<li>
										<a href="#">Regular link</a>
									</li>
									<li class="disabled">
										<a href="#">Disabled link</a>
									</li>
									<li>
										<a href="#">Another link</a>
									</li>
								</ul>
							</div>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu4"</span><span class="nt">&gt;</span>
        </code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

					</div>
					<div class="bs-docs-section">
						<h1 class="page-header" id="btn-groups">
							<a aria-label="Anchor link for: btn groups" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button groups
						</h1>
						<p class="lead">
							Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.
						</p>
						<div class="bs-callout bs-callout-warning" id="callout-btn-group-tooltips">
							<h4>
								Tooltips &amp; popovers in button groups require special setting
							</h4>
							<p>
								When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).
							</p>
						</div>
						<div class="bs-callout bs-callout-warning" id="callout-btn-group-accessibility">
							<h4>
								Ensure correct <code>role</code> and provide a label
							</h4>
							<p>
								In order for assistive technologies – such as screen readers – to convey that a series of buttons is grouped, an appropriate <code>role</code> attribute needs to be provided. For button groups, this would be <code>role="group"</code>, while toolbars should have a <code>role="toolbar"</code>.
							</p>
							<p>
								One exception are groups which only contain a single control (for instance the <a href="#btn-groups-justified">justified button groups</a> with <code>&lt;button&gt;</code> elements) or a dropdown.
							</p>
							<p>
								In addition, groups and toolbars should be given an explicit label, as most assistive technologies will otherwise not announce them, despite the presence of the correct <code>role</code> attribute. In the examples provided here, we use <code>aria-label</code>, but alternatives such as <code>aria-labelledby</code> can also be used.
							</p>
						</div>
						<h2 id="btn-groups-single">
							<a aria-label="Anchor link for: btn groups single" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups-single" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example
						</h2>
						<p>
							Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
						</p>
						<div class="bs-example" data-example-id="simple-button-group">
							<div aria-label="Basic example" class="btn-group" role="group">
								<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-groups-toolbar">
							<a aria-label="Anchor link for: btn groups toolbar" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups-toolbar" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button toolbar
						</h2>
						<p>
							Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.
						</p>
						<div class="bs-example" data-example-id="simple-button-toolbar">
							<div aria-label="Toolbar with button groups" class="btn-toolbar" role="toolbar">
								<div aria-label="First group" class="btn-group" role="group">
									<button class="btn btn-default" type="button">1</button> <button class="btn btn-default" type="button">2</button> <button class="btn btn-default" type="button">3</button> <button class="btn btn-default" type="button">4</button>
								</div>
								<div aria-label="Second group" class="btn-group" role="group">
									<button class="btn btn-default" type="button">5</button> <button class="btn btn-default" type="button">6</button> <button class="btn btn-default" type="button">7</button>
								</div>
								<div aria-label="Third group" class="btn-group" role="group">
									<button class="btn btn-default" type="button">8</button>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-toolbar"</span> <span class="na">role=</span><span class="s">"toolbar"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-groups-sizing">
							<a aria-label="Anchor link for: btn groups sizing" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups-sizing" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sizing
						</h2>
						<p>
							Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including when nesting multiple groups.
						</p>
						<div class="bs-example" data-example-id="button-group-sizing">
							<div aria-label="Large button group" class="btn-group btn-group-lg" role="group">
								<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
							</div><br>
							<div aria-label="Default button group" class="btn-group" role="group">
								<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
							</div><br>
							<div aria-label="Small button group" class="btn-group btn-group-sm" role="group">
								<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
							</div><br>
							<div aria-label="Extra-small button group" class="btn-group btn-group-xs" role="group">
								<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-lg"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-sm"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-xs"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-groups-nested">
							<a aria-label="Anchor link for: btn groups nested" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups-nested" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Nesting
						</h2>
						<p>
							Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.
						</p>
						<div class="bs-example" data-example-id="button-group-nesting">
							<div aria-label="Button group with nested dropdown" class="btn-group" role="group">
								<button class="btn btn-default" type="button">1</button> <button class="btn btn-default" type="button">2</button>
								<div class="btn-group" role="group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop1" type="button">Dropdown <span class="caret"></span></button>
									<ul aria-labelledby="btnGroupDrop1" class="dropdown-menu">
										<li>
											<a href="#">Dropdown link</a>
										</li>
										<li>
											<a href="#">Dropdown link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
  Dropdown
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-groups-vertical">
							<a aria-label="Anchor link for: btn groups vertical" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups-vertical" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Vertical variation
						</h2>
						<p>
							Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong>
						</p>
						<div class="bs-example" data-example-id="vertical-button-group">
							<div aria-label="Vertical button group" class="btn-group-vertical" role="group">
								<button class="btn btn-default" type="button">Button</button> <button class="btn btn-default" type="button">Button</button>
								<div class="btn-group" role="group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button">Dropdown <span class="caret"></span></button>
									<ul aria-labelledby="btnGroupVerticalDrop1" class="dropdown-menu">
										<li>
											<a href="#">Dropdown link</a>
										</li>
										<li>
											<a href="#">Dropdown link</a>
										</li>
									</ul>
								</div><button class="btn btn-default" type="button">Button</button> <button class="btn btn-default" type="button">Button</button>
								<div class="btn-group" role="group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop2" type="button">Dropdown <span class="caret"></span></button>
									<ul aria-labelledby="btnGroupVerticalDrop2" class="dropdown-menu">
										<li>
											<a href="#">Dropdown link</a>
										</li>
										<li>
											<a href="#">Dropdown link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group" role="group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop3" type="button">Dropdown <span class="caret"></span></button>
									<ul aria-labelledby="btnGroupVerticalDrop3" class="dropdown-menu">
										<li>
											<a href="#">Dropdown link</a>
										</li>
										<li>
											<a href="#">Dropdown link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group" role="group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop4" type="button">Dropdown <span class="caret"></span></button>
									<ul aria-labelledby="btnGroupVerticalDrop4" class="dropdown-menu">
										<li>
											<a href="#">Dropdown link</a>
										</li>
										<li>
											<a href="#">Dropdown link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group-vertical"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-groups-justified">
							<a aria-label="Anchor link for: btn groups justified" class="anchorjs-link" data-anchorjs-icon="" href="#btn-groups-justified" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Justified button groups
						</h2>
						<p>
							Make a group of buttons stretch at equal sizes to span the entire width of its parent. Also works with button dropdowns within the button group.
						</p>
						<div class="bs-callout bs-callout-warning" id="callout-btn-group-justified-dbl-border">
							<h4>
								Handling borders
							</h4>
							<p>
								Due to the specific HTML and CSS used to justify buttons (namely <code>display: table-cell</code>), the borders between them are doubled. In regular button groups, <code>margin-left: -1px</code> is used to stack the borders instead of removing them. However, <code>margin</code> doesn't work with <code>display: table-cell</code>. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.
							</p>
						</div>
						<div class="bs-callout bs-callout-warning" id="callout-btn-group-ie8-border">
							<h4>
								IE8 and borders
							</h4>
							<p>
								Internet Explorer 8 doesn't render borders on buttons in a justified button group, whether it's on <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements. To get around that, wrap each button in another <code>.btn-group</code>.
							</p>
							<p>
								See <a href="https://github.com/twbs/bootstrap/issues/12476">#12476</a> for more information.
							</p>
						</div>
						<h4 id="with-a-elements">
							<a aria-label="Anchor link for: with a elements" class="anchorjs-link" data-anchorjs-icon="" href="#with-a-elements" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>With <code>&lt;a&gt;</code> elements
						</h4>
						<p>
							Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.
						</p>
						<div class="bs-example" data-example-id="simple-justified-button-group">
							<div aria-label="Justified button group" class="btn-group btn-group-justified" role="group">
								<a class="btn btn-default" href="#" role="button">Left</a> <a class="btn btn-default" href="#" role="button">Middle</a> <a class="btn btn-default" href="#" role="button">Right</a>
							</div><br>
							<div aria-label="Justified button group with nested dropdown" class="btn-group btn-group-justified" role="group">
								<a class="btn btn-default" href="#" role="button">Left</a> <a class="btn btn-default" href="#" role="button">Middle</a>
								<div class="btn-group" role="group">
									<a aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button">Dropdown <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider" role="separator"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<div class="bs-callout bs-callout-warning" id="callout-btn-group-anchor-btn">
							<h4>
								Links acting as buttons
							</h4>
							<p>
								If the <code>&lt;a&gt;</code> elements are used to act as buttons – triggering in-page functionality, rather than navigating to another document or section within the current page – they should also be given an appropriate <code>role="button"</code>.
							</p>
						</div>
						<h4 id="with-button-elements">
							<a aria-label="Anchor link for: with button elements" class="anchorjs-link" data-anchorjs-icon="" href="#with-button-elements" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>With <code>&lt;button&gt;</code> elements
						</h4>
						<p>
							To use justified button groups with <code>&lt;button&gt;</code> elements, <strong class="text-danger">you must wrap each button in a button group</strong>. Most browsers don't properly apply our CSS for justification to <code>&lt;button&gt;</code> elements, but since we support button dropdowns, we can work around that.
						</p>
						<div class="bs-example" data-example-id="button-tag-button-group-justified">
							<div aria-label="Justified button group" class="btn-group btn-group-justified" role="group">
								<div class="btn-group" role="group">
									<button class="btn btn-default" type="button">Left</button>
								</div>
								<div class="btn-group" role="group">
									<button class="btn btn-default" type="button">Middle</button>
								</div>
								<div class="btn-group" role="group">
									<button class="btn btn-default" type="button">Right</button>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

					</div>
					<div class="bs-docs-section">
						<h1 class="page-header" id="btn-dropdowns">
							<a aria-label="Anchor link for: btn dropdowns" class="anchorjs-link" data-anchorjs-icon="" href="#btn-dropdowns" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button dropdowns
						</h1>
						<p class="lead">
							Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.
						</p>
						<div class="bs-callout bs-callout-danger" id="callout-btndropdown-dependency">
							<h4>
								Plugin dependency
							</h4>
							<p>
								Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootstrap.
							</p>
						</div>
						<h2 id="btn-dropdowns-single">
							<a aria-label="Anchor link for: btn dropdowns single" class="anchorjs-link" data-anchorjs-icon="" href="#btn-dropdowns-single" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Single button dropdowns
						</h2>
						<p>
							Turn a button into a dropdown toggle with some basic markup changes.
						</p>
						<div class="bs-example" data-example-id="single-button-dropdown">
							<div class="btn-group">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Default <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">Primary <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">Success <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">Info <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">Warning <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">Danger <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Single button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-dropdowns-split">
							<a aria-label="Anchor link for: btn dropdowns split" class="anchorjs-link" data-anchorjs-icon="" href="#btn-dropdowns-split" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Split button dropdowns
						</h2>
						<p>
							Similarly, create split button dropdowns with the same markup changes, only with a separate button.
						</p>
						<div class="bs-example" data-example-id="split-button-dropdown">
							<div class="btn-group">
								<button class="btn btn-default" type="button">Default</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button class="btn btn-primary" type="button">Primary</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button class="btn btn-success" type="button">Success</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button class="btn btn-info" type="button">Info</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button class="btn btn-warning" type="button">Warning</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							<div class="btn-group">
								<button class="btn btn-danger" type="button">Danger</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Split button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-dropdowns-sizing">
							<a aria-label="Anchor link for: btn dropdowns sizing" class="anchorjs-link" data-anchorjs-icon="" href="#btn-dropdowns-sizing" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sizing
						</h2>
						<p>
							Button dropdowns work with buttons of all sizes.
						</p>
						<div class="bs-example" data-example-id="button-dropdown-sizing">
							<div class="btn-toolbar" role="toolbar">
								<div class="btn-group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" type="button">Large button <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider" role="separator"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-toolbar" role="toolbar">
								<div class="btn-group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" type="button">Small button <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider" role="separator"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-toolbar" role="toolbar">
								<div class="btn-group">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" type="button">Extra small button <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider" role="separator"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Large button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
Large button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
Small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Extra small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
Extra small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a>

						<h2 id="btn-dropdowns-dropup">
							<a aria-label="Anchor link for: btn dropdowns dropup" class="anchorjs-link" data-anchorjs-icon="" href="#btn-dropdowns-dropup" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Dropup variation
						</h2>
						<p>
							Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.
						</p>
						<div class="bs-example" data-example-id="button-dropdown-dropup">
							<div class="btn-toolbar" role="toolbar">
								<div class="btn-group dropup">
									<button class="btn btn-default" type="button">Dropup</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider" role="separator"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group dropup">
									<button class="btn btn-primary" type="button">Right dropup</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span></button>
									<ul class="dropdown-menu dropdown-menu-right">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider" role="separator"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="zero-clipboard">
							<span class="btn-clipboard">Copy</span>
						</div>
						<figure class="highlight">
							<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
<span class="c">&lt;!-- Dropdown menu links --&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
						</figure>
						<a class="btn bg-custom" href="Downloads/COMPONENTS/.html" download>DOWNLOAD FULL CODE</a><br><br><br><br>
					</div>
				</div>
			</div><?php include 'footer.php'; ?> <code class="language-html" data-lang="html">
			<script type="text/javascript">
			         document.querySelector('.navbar').querySelectorAll('li')[2].setAttribute('class','active');
			         listElement = document.querySelector('.navbar').querySelectorAll('li');
			         for(var i=0; i < listElement.length; i++){
			         if(i != 2){
			             listElement[i].removeAttribute('class');
			         }
			         }
			</script></code>
		</div>
	</body>
</html>
