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
                    
            
                <div class="col-md-9"> 
                    <div class="bs-docs-section"> 
                        <h1 id="tables" class="page-header"><a class="anchorjs-link " href="#tables" aria-label="Anchor link for: tables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Tables</h1> 
                        <h2 id="tables-example"><a class="anchorjs-link " href="#tables-example" aria-label="Anchor link for: tables example" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example</h2> 
                        <p>For basic styling—light padding and only horizontal dividers—add the base class 
                            <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p> 
                            <div class="bs-example" data-example-id="simple-table"> 
                                <table class="table"> 
                                    <caption>Optional table caption.</caption> 
                                    <thead> 
                                        <tr> 
                                            <th>#</th> 
                                            <th>First Name</th> 
                                            <th>Last Name</th> 
                                            <th>Username</th> 
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        <tr> 
                                            <th scope="row">1</th> 
                                            <td>Mark</td> 
                                            <td>Otto</td> 
                                            <td>@mdo</td> 
                                        </tr>
                                        <tr> 
                                            <th scope="row">2</th> 
                                            <td>Jacob</td> 
                                            <td>Thornton</td> 
                                            <td>@fat</td> 
                                        </tr> 
                                        <tr> 
                                            <th scope="row">3</th> 
                                            <td>Larry</td> 
                                            <td>the Bird</td> 
                                            <td>@twitter</td> 
                                            </tr> 
                                    </tbody> 
                                </table> 
                     </div> 
                     <div class="zero-clipboard">
                         <span class="btn-clipboard">Copy</span>
                     </div>
                     <figure class="highlight">
                         <pre>
                             <code class="language-html" data-lang="html">
                                &lt;table class="table"&gt; 
                                    &lt;caption&gt;Optional table caption.&lt;/caption&gt; 
                                    &lt;thead&gt; 
                                        &lt;tr&gt; 
                                            &lt;th&gt;#&lt;/th&gt; 
                                            &lt;th&gt;First Name&lt;/th&gt; 
                                            &lt;th&gt;Last Name&lt;/th&gt; 
                                            &lt;th&gt;Username&lt;/th&gt; 
                                        &lt;/tr&gt; 
                                    &lt;/thead&gt; 
                                    &lt;tbody&gt; 
                                        &lt;tr&gt; 
                                            &lt;th scope="row">1&lt;/th> 
                                            &lt;td>Mark&lt;/td> 
                                            &lt;td>Otto&lt;/td> 
                                            &lt;td>@mdo&lt;/td> 
                                        &lt;/tr>
                                        &lt;tr> 
                                            &lt;th scope="row">2&lt;/th> 
                                            &lt;td>Jacob&lt;/td> 
                                            &lt;td>Thornton&lt;/td> 
                                            &lt;td>@fat&lt;/td> 
                                        &lt;/tr> 
                                        &lt;tr> 
                                            &lt;th scope="row">3&lt;/th> 
                                            &lt;td>Larry&lt;/td> 
                                            &lt;td>the Bird&lt;/td> 
                                            &lt;td>@twitter&lt;/td> 
                                            &lt;/tr> 
                                    &lt;/tbody> 
                                &lt;/table> 
                             </code>
                         </pre>
                     </figure>
                   
                      <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
                 
                     
                     
                     <h2 id="tables-striped"><a class="anchorjs-link " href="#tables-striped" aria-label="Anchor link for: tables striped" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Striped rows</h2> 
                     <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.
                     </p> 
                     <div class="bs-callout bs-callout-danger" id="callout-tables-striped-ie8"> 
                         <h4>Cross-browser compatibility</h4> 
                         <p>Striped tables are styled via the 
                             <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.
                         </p> 
                     </div> 
                     <div class="bs-example" data-example-id="striped-table"> 
                         <table class="table table-striped"> 
                             <thead> 
                                 <tr> 
                                     <th>#</th> 
                                     <th>First Name</th> 
                                     <th>Last Name</th> 
                                     <th>Username</th> 
                                 </tr> 
                             </thead> 
                             <tbody> 
                                 <tr> 
                                     <th scope="row">1</th> 
                                     <td>Mark</td> 
                                     <td>Otto</td> 
                                     <td>@mdo</td> 
                                 </tr> 
                                 <tr> 
                                     <th scope="row">2</th> 
                                     <td>Jacob</td> 
                                     <td>Thornton</td> 
                                     <td>@fat</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">3</th> 
                                    <td>Larry</td> 
                                    <td>the Bird</td> 
                                    <td>@twitter</td> 
                                </tr> 
                             </tbody> 
                         </table> 
                    </div> 
                    <div class="zero-clipboard">
                        <span class="btn-clipboard">Copy</span>
                    </div>
                    <figure class="highlight">
                        <pre>
                            <code class="language-html" data-lang="html">
                          &lt;table class="table table-striped"> 
                             &lt;thead> 
                                 &lt;tr> 
                                     &lt;th>#&lt;/th> 
                                     &lt;th>First Name&lt;/th> 
                                     &lt;th>Last Name&lt;/th> 
                                     &lt;th>Username&lt;/th> 
                                 &lt;/tr> 
                             &lt;/thead> 
                             &lt;tbody> 
                                 &lt;tr> 
                                     &lt;th scope="row">1&lt;/th> 
                                     &lt;td>Mark&lt;/td> 
                                     &lt;td>Otto&lt;/td> 
                                     &lt;td>@mdo&lt;/td> 
                                 &lt;/tr> 
                                 &lt;tr> 
                                     &lt;th scope="row">2&lt;/th> 
                                     &lt;td>Jacob&lt;/td> 
                                     &lt;td>Thornton&lt;/td> 
                                     &lt;td>@fat&lt;/td> 
                                &lt;/tr> 
                                &lt;tr> 
                                    &lt;th scope="row">3&lt;/th> 
                                    &lt;td>Larry&lt;/td> 
                                    &lt;td>the Bird&lt;/td> 
                                    &lt;td>@twitter&lt;/td> 
                                &lt;/tr> 
                             &lt;/tbody> 
                         &lt;/table> 
                            </code>
                        </pre>
                    </figure> 
                    <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
                     
                     
                    <h2 id="tables-bordered">
                        <a class="anchorjs-link " href="#tables-bordered" aria-label="Anchor link for: tables bordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bordered table
                    </h2> 
                    <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p> 
                    <div class="bs-example" data-example-id="bordered-table"> 
                        <table class="table table-bordered"> 
                            <thead> 
                                <tr> 
                                    <th>#</th> 
                                    <th>First Name</th> 
                                    <th>Last Name</th> 
                                    <th>Username</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <th scope="row">1</th> 
                                    <td>Mark</td> 
                                    <td>Otto</td> 
                                    <td>@mdo</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">2</th> 
                                    <td>Jacob</td> 
                                    <td>Thornton</td> 
                                    <td>@fat</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">3</th> 
                                    <td>Larry</td> 
                                    <td>the Bird</td> 
                                    <td>@twitter</td> 
                                </tr> 
                             </tbody> 
                        </table> 
                    </div> 
                    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                    <figure class="highlight">
                        <pre>
                            <code class="language-html" data-lang="html">
                         &lt;table class="table table-bordered"> 
                            &lt;thead> 
                                &lt;tr> 
                                    &lt;th>#&lt;/th> 
                                    &lt;th>First Name&lt;/th> 
                                    &lt;th>Last Name&lt;/th> 
                                    &lt;th>Username&lt;/th> 
                                &lt;/tr> 
                            &lt;/thead> 
                            &lt;tbody> 
                                &lt;tr> 
                                    &lt;th scope="row">1&lt;/th> 
                                    &lt;td>Mark&lt;/td> 
                                    &lt;td>Otto&lt;/td> 
                                    &lt;td>@mdo&lt;/td> 
                                &lt;/tr> 
                                &lt;tr> 
                                    &lt;th scope="row">2&lt;/th> 
                                    &lt;td>Jacob&lt;/td> 
                                    &lt;td>Thornton&lt;/td> 
                                    &lt;td>@fat&lt;/td> 
                                &lt;/tr> 
                                &lt;tr> 
                                    &lt;th scope="row">3&lt;/th> 
                                    &lt;td>Larry&lt;/td> 
                                    &lt;td>the Bird&lt;/td> 
                                    &lt;td>@twitter&lt;/td> 
                                &lt;/tr> 
                             &lt;/tbody> 
                        &lt;/table> 
                            </code>
                        </pre>
                    </figure> 
                    <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
                    
                    <h2 id="tables-hover-rows"><a class="anchorjs-link " href="#tables-hover-rows" aria-label="Anchor link for: tables hover rows" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Hover rows</h2> 
                    <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p> 
                    <div class="bs-example" data-example-id="hoverable-table"> 
                        <table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>#</th> 
                                    <th>First Name</th> 
                                    <th>Last Name</th> 
                                    <th>Username</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <th scope="row">1</th> 
                                    <td>Mark</td> 
                                    <td>Otto</td> 
                                    <td>@mdo</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">2</th> 
                                    <td>Jacob</td> 
                                    <td>Thornton</td> 
                                    <td>@fat</td> 
                               </tr> 
                               <tr> 
                                   <th scope="row">3</th> 
                                   <td>Larry</td> 
                                   <td>the Bird</td> 
                                   <td>@twitter</td> 
                               </tr> 
                           </tbody> 
                       </table> 
                  </div> 
                  <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                  <figure class="highlight">
                      <pre>
                          <code class="language-html" data-lang="html">
                       &lt;table class="table table-hover"> 
                            &lt;thead> 
                                &lt;tr> 
                                    &lt;th>#&lt;/th> 
                                    &lt;th>First Name&lt;/th> 
                                    &lt;th>Last Name&lt;/th> 
                                    &lt;th>Username&lt;/th> 
                                &lt;/tr> 
                            &lt;/thead> 
                            &lt;tbody> 
                                &lt;tr> 
                                    &lt;th scope="row">1&lt;/th> 
                                    &lt;td>Mark&lt;/td> 
                                    &lt;td>Otto&lt;/td> 
                                    &lt;td>@mdo&lt;/td> 
                                &lt;/tr> 
                                &lt;tr> 
                                    &lt;th scope="row">2&lt;/th> 
                                    &lt;td>Jacob&lt;/td> 
                                    &lt;td>Thornton&lt;/td> 
                                    &lt;td>@fat&lt;/td> 
                               &lt;/tr> 
                               &lt;tr> 
                                   &lt;th scope="row">3&lt;/th> 
                                   &lt;td>Larry&lt;/td> 
                                   &lt;td>the Bird&lt;/td> 
                                   &lt;td>@twitter&lt;/td> 
                               &lt;/tr> 
                           &lt;/tbody> 
                       &lt;/table> 
                          </code>
                      </pre>
                  </figure> 
                  <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
                  
                  
                  <h2 id="tables-condensed"><a class="anchorjs-link " href="#tables-condensed" aria-label="Anchor link for: tables condensed" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Condensed table</h2> 
                  <p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p> 
                  <div class="bs-example" data-example-id="condensed-table"> 
                      <table class="table table-condensed"> 
                          <thead> 
                              <tr> 
                                  <th>#</th> 
                                  <th>First Name</th> 
                                  <th>Last Name</th> 
                                  <th>Username</th> 
                              </tr> 
                          </thead> 
                          <tbody> 
                              <tr> 
                                  <th scope="row">1</th> 
                                  <td>Mark</td> <td>Otto</td> 
                                  <td>@mdo</td> 
                              </tr> 
                              <tr> 
                                  <th scope="row">2</th> 
                                  <td>Jacob</td> 
                                  <td>Thornton</td> 
                                  <td>@fat</td> 
                              </tr> 
                              <tr> 
                                  <th scope="row">3</th> 
                                  <td colspan="2">Larry the Bird</td> 
                                  <td>@twitter</td> 
                              </tr> 
                          </tbody> 
                     </table> 
                 </div> 
                 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                 <figure class="highlight">
                     <pre>
                         <code class="language-html" data-lang="html">
                       &lt;table class="table table-condensed"> 
                          &lt;thead> 
                              &lt;tr> 
                                  &lt;th>#&lt;/th> 
                                  &lt;th>First Name&lt;/th> 
                                  &lt;th>Last Name&lt;/th> 
                                  &lt;th>Username&lt;/th> 
                              &lt;/tr> 
                          &lt;/thead> 
                          &lt;tbody> 
                              &lt;tr> 
                                  &lt;th scope="row">1&lt;/th> 
                                  &lt;td>Mark</td> <td>Otto&lt;/td> 
                                  &lt;td>@mdo&lt;/td> 
                              &lt;/tr> 
                              &lt;tr> 
                                  &lt;th scope="row">2&lt;/th> 
                                  &lt;td>Jacob&lt;/td> 
                                  &lt;td>Thornton&lt;/td> 
                                  &lt;td>@fat&lt;/td> 
                              &lt;/tr> 
                              &lt;tr> 
                                  &lt;th scope="row">3&lt;/th> 
                                  &lt;td colspan="2">Larry the Bird&lt;/td> 
                                  &lt;td>@twitter&lt;/td> 
                              &lt;/tr> 
                          &lt;/tbody> 
                     &lt;/table> 
                         </code>
                     </pre>
                 </figure>
                  <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
                  
                  
                 <h2 id="tables-contextual-classes"><a class="anchorjs-link " href="#tables-contextual-classes" aria-label="Anchor link for: tables contextual classes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual classes</h2> 
                 <p>Use contextual classes to color table rows or individual cells.</p> 
                 <div class="table-responsive"> 
                     <table class="table table-bordered table-striped"> 
                         <colgroup> 
                         <col class="col-xs-1"> 
                         <col class="col-xs-7"> 
                         </colgroup> 
                         <thead> 
                             <tr> 
                                 <th>Class</th> 
                                 <th>Description</th> 
                             </tr> 
                         </thead> 
                         <tbody> 
                             <tr> 
                                 <th scope="row"> <code>.active</code> </th> 
                                 <td>Applies the hover color to a particular row or cell</td> 
                             </tr> 
                             <tr> 
                                 <th scope="row"> <code>.success</code> </th> 
                                 <td>Indicates a successful or positive action</td> 
                             </tr> 
                             <tr> 
                                 <th scope="row"> <code>.info</code> </th> 
                                 <td>Indicates a neutral informative change or action</td> 
                             </tr> 
                             <tr> 
                                 <th scope="row"> <code>.warning</code> </th> 
                                 <td>Indicates a warning that might need attention</td> 
                             </tr> 
                             <tr> 
                                 <th scope="row"> <code>.danger</code> </th> 
                                 <td>Indicates a dangerous or potentially negative action</td> 
                             </tr> 
                         </tbody> 
                    </table> 
               </div> 
               <div class="bs-example" data-example-id="contextual-table"> 
                   <table class="table"> 
                       <thead> 
                           <tr> 
                               <th>#</th> 
                               <th>Column heading</th> 
                               <th>Column heading</th> 
                               <th>Column heading</th> 
                           </tr> 
                        </thead> 
                        <tbody> 
                            <tr class="active"> 
                                <th scope="row">1</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr> 
                                <th scope="row">2</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr class="success"> 
                                <th scope="row">3</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr> 
                                <th scope="row">4</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr class="info"> 
                                <th scope="row">5</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr> 
                                <th scope="row">6</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr class="warning"> 
                                <th scope="row">7</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr> 
                                <th scope="row">8</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                            <tr class="danger"> 
                                <th scope="row">9</th> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                                <td>Column content</td> 
                            </tr> 
                      </tbody> 
                </table> 
          </div> 
          <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
          <figure class="highlight">
              <pre>
               <code class="language-html" data-lang="html">
                   &lt;table class="table"> 
                       &lt;thead> 
                           &lt;tr> 
                               &lt;th>#&lt;/th> 
                               &lt;th>Column heading&lt;/th> 
                               &lt;th>Column heading&lt;/th> 
                               &lt;th>Column heading&lt;/th> 
                           &lt;/tr> 
                        &lt;/thead> 
                        &lt;tbody> 
                            &lt;tr class="active"> 
                                &lt;th scope="row">1&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr> 
                                &lt;th scope="row">2&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr class="success"> 
                                &lt;th scope="row">3&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr> 
                                &lt;th scope="row">4&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr class="info"> 
                                &lt;th scope="row">5&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr> 
                                &lt;th scope="row">6&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr class="warning"> 
                                &lt;th scope="row">7&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr> 
                                &lt;th scope="row">8&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                            &lt;tr class="danger"> 
                                &lt;th scope="row">9&lt;/th> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                                &lt;td>Column content&lt;/td> 
                            &lt;/tr> 
                      &lt;/tbody> 
                &lt;/table>     
               </code>
          </pre>
    </figure> 
     <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
     
     
     
    <div class="bs-callout bs-callout-warning" id="callout-tables-context-accessibility"> 
        <h4>Conveying meaning to assistive technologies</h4> 
        <p>Using color to add meaning to a table row or individual cell only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text in the relevant table row/cell), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p> 
    </div> 
    
    
    <h2 id="tables-responsive"><a class="anchorjs-link " href="#tables-responsive" aria-label="Anchor link for: tables responsive" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive tables</h2> 
    <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p> 
       <div class="bs-example" data-example-id="simple-responsive-table"> 
           <div class="table-responsive"> 
               <table class="table"> 
                   <thead> 
                       <tr> 
                           <th>#</th> 
                           <th>Table heading</th> 
                           <th>Table heading</th> 
                           <th>Table heading</th> 
                           <th>Table heading</th> 
                           <th>Table heading</th> 
                           <th>Table heading</th> 
                       </tr> 
                   </thead> 
                   <tbody> 
                       <tr> 
                           <th scope="row">1</th> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                       </tr> 
                       <tr> 
                           <th scope="row">2</th> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                       </tr> 
                       <tr> 
                           <th scope="row">3</th> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                           <td>Table cell</td> 
                       </tr> 
                 </tbody> 
           </table> 
      </div> 
      <div class="table-responsive"> 
          <table class="table table-bordered"> 
              <thead> 
                  <tr> 
                      <th>#</th> 
                      <th>Table heading</th> 
                      <th>Table heading</th> 
                      <th>Table heading</th> 
                      <th>Table heading</th> 
                      <th>Table heading</th> 
                      <th>Table heading</th> 
                  </tr> 
              </thead> 
              <tbody> 
                  <tr> 
                      <th scope="row">1</th> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                  </tr> 
                  <tr> 
                      <th scope="row">2</th> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                  </tr> 
                  <tr> 
                      <th scope="row">3</th> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                      <td>Table cell</td> 
                  </tr> 
            </tbody> 
      </table> 
    </div> 
 </div> 
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span>
 </div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
       &lt;div class="table-responsive">
          &lt;table class="table table-bordered"> 
              &lt;thead> 
                  &lt;tr> 
                      &lt;th>#&lt;/th> 
                      &lt;th>Table heading&lt;/th> 
                      &lt;th>Table heading&lt;/th> 
                      &lt;th>Table heading&lt;/th> 
                      &lt;th>Table heading&lt;/th> 
                      &lt;th>Table heading&lt;/th> 
                      &lt;th>Table heading&lt;/th> 
                  &lt;/tr> 
              &lt;/thead> 
              &lt;tbody> 
                  &lt;tr> 
                      &lt;th scope="row">1&lt;/th> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                  &lt;/tr> 
                  &lt;tr> 
                      &lt;th scope="row">2&lt;/th> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                  &lt;/tr> 
                  &lt;tr> 
                      &lt;th scope="row">3&lt;/th> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                      &lt;td>Table cell&lt;/td> 
                  &lt;/tr> 
            &lt;/tbody> 
      &lt;/table>
    &lt;/div> 
         </code>
     </pre>
  </figure> 
  <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
</div>




<div class="bs-docs-section"> 
    <h1 id="forms" class="page-header"><a class="anchorjs-link " href="#forms" aria-label="Anchor link for: forms" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Forms</h1> 
    
    <div><a class="btn bg-custom" href="Downloads/CSS/loginform.html" download>DOWNLOAD FULL CODE FOR BASIC LOGIN FORM</a></div><br>
     <div> <a class="btn bg-custom" href="Downloads/CSS/registrationform.html" download>DOWNLOAD FULL CODE FOR BASIC REGISTRATION FORM</a></div>
    
    <h2 id="forms-example"><a class="anchorjs-link " href="#forms-example" aria-label="Anchor link for: forms example" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example</h2> 
    <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p> 
    <div class="bs-example" data-example-id="basic-forms"> 
        <form> 
            <div class="form-group"> 
                <label for="exampleInputEmail1">Email address</label> 
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
            </div> 
            <div class="form-group"> 
                <label for="exampleInputPassword1">Password</label> 
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
            </div> 
            <div class="form-group"> 
                <label for="exampleInputFile">File input</label> 
                <input type="file" id="exampleInputFile"> 
                <p class="help-block">Example block-level help text here.</p> 
           </div> 
           <div class="checkbox"> 
               <label> 
                   <input type="checkbox"> Check me out 
               </label> 
           </div> 
           <button type="submit" class="btn btn-default">Submit</button> 
        </form> 
   </div> 
   <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
   <figure class="highlight">
       <pre>
           <code class="language-html" data-lang="html">
          &lt;form> 
            &lt;div class="form-group"> 
                &lt;label for="exampleInputEmail1">Email address&lt;/label> 
                &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
            &lt;/div> 
            &lt;div class="form-group"> 
                &lt;label for="exampleInputPassword1">Password&lt;/label> 
                &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
            &lt;/div> 
            &lt;div class="form-group"> 
                &lt;label for="exampleInputFile">File input&lt;/label> 
                &lt;input type="file" id="exampleInputFile"> 
                &lt;p class="help-block">Example block-level help text here.&lt;/p> 
           &lt;/div> 
           &lt;div class="checkbox"> 
               &lt;label> 
                   &lt;input type="checkbox"> Check me out 
               &lt;/label> 
           &lt;/div> 
           &lt;button type="submit" class="btn btn-default">Submit&lt;/button> 
        &lt;/form> 
           </code>
      </pre>
   </figure> 
   <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
   
   
   
   <div class="bs-callout bs-callout-warning" id="callout-formgroup-inputgroup"> 
       <h4>Don't mix form groups with input groups</h4> 
       <p>Do not mix form groups directly with <a href="/components/#input-groups">input groups</a>. Instead, nest the input group inside of the form group.</p> 
   </div> 
   <h2 id="forms-inline"><a class="anchorjs-link " href="#forms-inline" aria-label="Anchor link for: forms inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline form</h2> 
   <p>Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p> 
   <div class="bs-callout bs-callout-danger" id="callout-inline-form-width"> 
       <h4>May require custom widths</h4> 
       <p>Inputs and selects have <code>width: 100%;</code> applied by default in Bootstrap. Within inline forms, we reset that to <code>width: auto;</code> so multiple controls can reside on the same line. Depending on your layout, additional custom widths may be required.</p> 
   </div> 
   <div class="bs-callout bs-callout-warning" id="callout-inline-form-labels"> 
       <h4>Always add labels</h4> 
       <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code>aria-label</code>, <code>aria-labelledby</code> or <code>title</code> attribute. If none of these is present, screen readers may resort to using the <code>placeholder</code> attribute, if present, but note that use of <code>placeholder</code> as a replacement for other labelling methods is not advised.</p> 
   </div> 
   <div class="bs-example" data-example-id="simple-form-inline"> 
       <form class="form-inline"> 
           <div class="form-group"> 
               <label for="exampleInputName2">Name</label> 
               <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe"> 
           </div> 
           <div class="form-group"> 
               <label for="exampleInputEmail2">Email</label> 
               <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com"> 
           </div> 
           <button type="submit" class="btn btn-default">Send invitation</button> 
       </form> 
    </div> 
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
    <figure class="highlight">
        <pre>
            <code class="language-html" data-lang="html">
       &lt;form class="form-inline"> 
           &lt;div class="form-group"> 
               &lt;label for="exampleInputName2">Name&lt;/label> 
               &lt;input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe"> 
           &lt;/div> 
           &lt;div class="form-group"> 
               &lt;label for="exampleInputEmail2">Email&lt;/label> 
               &lt;input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com"> 
           &lt;/div> 
           &lt;button type="submit" class="btn btn-default">Send invitation&lt;/button> 
       &lt;/form> 
            </code>
        </pre>
    </figure>
    <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>



 <div class="bs-example" data-example-id="simple-form-inline"> 
     <form class="form-inline"> 
         <div class="form-group"> 
             <label class="sr-only" for="exampleInputEmail3">Email address</label> 
             <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> 
         </div> 
         <div class="form-group"> 
             <label class="sr-only" for="exampleInputPassword3">Password</label> 
             <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> 
         </div> 
         <div class="checkbox"> 
             <label> <input type="checkbox"> Remember me </label> 
         </div> 
         <button type="submit" class="btn btn-default">Sign in</button> 
     </form> 
 </div> 
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
     &lt;form class="form-inline"> 
         &lt;div class="form-group"> 
             &lt;label class="sr-only" for="exampleInputEmail3">Email address&lt;/label> 
             &lt;input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> 
         &lt;/div> 
         &lt;div class="form-group"> 
             &lt;label class="sr-only" for="exampleInputPassword3">Password&lt;/label> 
             &lt;input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> 
         &lt;/div> 
         &lt;div class="checkbox"> 
             &lt;label> &lt;input type="checkbox"> Remember me &lt;/label> 
         &lt;/div> 
         &lt;button type="submit" class="btn btn-default">Sign in&lt;/button> 
     &lt;/form> 
        </code>
     </pre>
</figure>
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>


 
<div class="bs-example" data-example-id="form-inline-with-input-group"> 
    <form class="form-inline"> 
        <div class="form-group"> 
            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label> 
            <div class="input-group"> 
                <div class="input-group-addon">$</div> 
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount"> 
                <div class="input-group-addon">.00</div> 
            </div> 
        </div> 
        <button type="submit" class="btn btn-primary">Transfer cash</button> 
   </form> 
</div> 
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
<figure class="highlight">
    <pre>
        <code class="language-html" data-lang="html">
   &lt;form class="form-inline"> 
        &lt;div class="form-group"> 
            &lt;label class="sr-only" for="exampleInputAmount">Amount (in dollars)&lt;/label> 
            &lt;div class="input-group"> 
                &lt;div class="input-group-addon">$&lt;/div> 
                &lt;input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount"> 
                &lt;div class="input-group-addon">.00&lt;/div> 
            &lt;/div> 
        &lt;/div> 
        &lt;button type="submit" class="btn btn-primary">Transfer cash&lt;/button> 
   &lt;/form> 
        </code>
    </pre>
</figure> 
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>



<h2 id="forms-horizontal"><a class="anchorjs-link " href="#forms-horizontal" aria-label="Anchor link for: forms horizontal" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal form</h2>
 <p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form (which doesn't have to be a <code>&lt;form&gt;</code>). Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p> 
 <div class="bs-example" data-example-id="simple-horizontal-form"> 
     <form class="form-horizontal"> 
         <div class="form-group"> 
             <label for="inputEmail3" class="col-sm-2 control-label">Email</label> 
             <div class="col-sm-10"> 
                 <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> 
             </div> 
         </div> 
         <div class="form-group"> 
             <label for="inputPassword3" class="col-sm-2 control-label">Password</label> 
             <div class="col-sm-10"> 
                 <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> 
             </div> 
         </div> 
         <div class="form-group"> 
             <div class="col-sm-offset-2 col-sm-10"> 
                 <div class="checkbox"> 
                     <label> <input type="checkbox"> Remember me </label> 
                 </div> 
             </div> 
         </div> 
         <div class="form-group"> 
             <div class="col-sm-offset-2 col-sm-10"> 
                 <button type="submit" class="btn btn-default">Sign in</button> 
             </div> 
         </div> 
     </form> 
  </div> 
  <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
  <figure class="highlight">
      <pre>
          <code class="language-html" data-lang="html">
      &lt;form class="form-horizontal"> 
         &lt;div class="form-group"> 
             &lt;label for="inputEmail3" class="col-sm-2 control-label">Email&lt;/label> 
             &lt;div class="col-sm-10"> 
                 &lt;input type="email" class="form-control" id="inputEmail3" placeholder="Email"> 
             &lt;/div> 
         &lt;/div> 
         &lt;div class="form-group"> 
             &lt;label for="inputPassword3" class="col-sm-2 control-label">Password&lt;/label> 
             &lt;div class="col-sm-10"> 
                 &lt;input type="password" class="form-control" id="inputPassword3" placeholder="Password"> 
             &lt;/div> 
         &lt;/div> 
         &lt;div class="form-group"> 
             &lt;div class="col-sm-offset-2 col-sm-10"> 
                 &lt;div class="checkbox"> 
                     &lt;label> &lt;input type="checkbox"> Remember me &lt;/label> 
                 &lt;/div> 
             &lt;/div> 
         &lt;/div> 
         &lt;div class="form-group"> 
             &lt;div class="col-sm-offset-2 col-sm-10"> 
                 &lt;button type="submit" class="btn btn-default">Sign in&lt;/button> 
             &lt;/div> 
         &lt;/div> 
     &lt;/form> 
          </code>
      </pre>
  </figure> 
  <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>



<h2 id="forms-controls"><a class="anchorjs-link " href="#forms-controls" aria-label="Anchor link for: forms controls" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Supported controls</h2> 
<p>Examples of standard form controls supported in an example form layout.</p> 
<h3 id="inputs"><a class="anchorjs-link " href="#inputs" aria-label="Anchor link for: inputs" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inputs</h3> <p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p> <div class="bs-callout bs-callout-danger" id="callout-input-needs-type"> <h4>Type declaration required</h4> <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p> 
</div> 
<div class="bs-example" data-example-id="text-form-control"> 
    <form> 
        <input type="text" class="form-control" placeholder="Text input"> 
    </form> 
</div> 
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
<figure class="highlight">
    <pre>
        <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;input type="text" class="form-control" placeholder="Text input"> 
    &lt;/form>
         </code>
    </pre>
 </figure> 
 <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>


 
 
 <div class="bs-callout bs-callout-info" id="callout-xref-input-group"> 
     <h4>Input groups</h4> 
     <p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href="../components/#input-groups">check out the input group component</a>.</p> </div> <h3 id="textarea"><a class="anchorjs-link " href="#textarea" aria-label="Anchor link for: textarea" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Textarea</h3> <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p> 
     <div class="bs-example" data-example-id="textarea-form-control"> 
         <form> 
             <textarea class="form-control" rows="3" placeholder="Textarea"></textarea> 
         </form> 
     </div> 
     <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
     <figure class="highlight">
         <pre>
             <code class="language-html" data-lang="html">
         &lt;form> 
             &lt;textarea class="form-control" rows="3" placeholder="Textarea">&lt;/textarea> 
         &lt;/form> 
            </code>
         </pre>
     </figure> 
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>

     
     
     <h3 id="checkboxes-and-radios"><a class="anchorjs-link " href="#checkboxes-and-radios" aria-label="Anchor link for: checkboxes and radios" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Checkboxes and radios</h3> 
     <p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p> <p>Disabled checkboxes and radios are supported, but to provide a "not-allowed" cursor on hover of the parent <code>&lt;label&gt;</code>, you'll need to add the <code>.disabled</code> class to the parent <code>.radio</code>, <code>.radio-inline</code>, <code>.checkbox</code>, or <code>.checkbox-inline</code>.</p> 
     <h4 id="default-stacked"><a class="anchorjs-link " href="#default-stacked" aria-label="Anchor link for: default stacked" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default (stacked)</h4> 
     <div class="bs-example" data-example-id="block-checkboxes-radios"> 
         <form> 
             <div class="checkbox"> 
                 <label> <input type="checkbox" value=""> Option one is this and that—be sure to include why it's great </label> 
             </div> 
             <div class="checkbox disabled"> 
                 <label> <input type="checkbox" value="" disabled="disabled"> Option two is disabled </label> </div> <br> <div class="radio"> <label> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="checked"> Option one is this and that—be sure to include why it's great </label>
             </div> 
             <div class="radio"> 
                 <label> <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one </label> </div> <div class="radio disabled"> <label> <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="disabled"> Option three is disabled </label> 
             </div> 
         </form> 
     </div> 
     <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
     <figure class="highlight">
         <pre>
             <code class="language-html" data-lang="html">
         &lt;form> 
             &lt;div class="checkbox"> 
                 &lt;label> &lt;input type="checkbox" value=""> Option one is this and that—be sure to include why it's great &lt;/label> 
             &lt;/div> 
             &lt;div class="checkbox disabled"> 
                 &lt;label> &lt;input type="checkbox" value="" disabled="disabled"> Option two is disabled &lt;/label> &lt;/div> &lt;br> 
                 &lt;div class="radio"> &lt;label> &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="checked"> Option one is this and that—be sure to include why it's great &lt;/label>
             &lt;/div> 
             &lt;div class="radio"> 
                 &lt;label> &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one &lt;/label> &lt;/div> 
                 &lt;div class="radio disabled"> &lt;label> &lt;input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="disabled"> Option three is disabled &lt;/label> 
             &lt;/div> 
         &lt;/form> 
             </code>
          </pre>
     </figure> 
     <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>


<h4 id="inline-checkboxes-and-radios"><a class="anchorjs-link " href="#inline-checkboxes-and-radios" aria-label="Anchor link for: inline checkboxes and radios" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline checkboxes and radios</h4> 
<p>Use the <code>.checkbox-inline</code> or <code>.radio-inline</code> classes on a series of checkboxes or radios for controls that appear on the same line.</p> 
<div class="bs-example" data-example-id="inline-checkboxes-radios"> 
    <form> 
        <label class="checkbox-inline"> <input type="checkbox" id="inlineCheckbox1" value="option1"> 1 </label> 
        <label class="checkbox-inline"> <input type="checkbox" id="inlineCheckbox2" value="option2"> 2 </label> 
        <label class="checkbox-inline"> <input type="checkbox" id="inlineCheckbox3" value="option3"> 3 </label> 
    </form> 
    <br> 
    <form> 
        <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1 </label> 
        <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2 </label> 
        <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3 </label> 
    </form> 
 </div> 
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;label class="checkbox-inline"> &lt;input type="checkbox" id="inlineCheckbox1" value="option1"> 1 &lt;/label> 
        &lt;label class="checkbox-inline"> &lt;input type="checkbox" id="inlineCheckbox2" value="option2"> 2 &lt;/label> 
        &lt;label class="checkbox-inline"> &lt;input type="checkbox" id="inlineCheckbox3" value="option3"> 3 &lt;/label> 
    &lt;/form> 
    &lt;br> 
    &lt;form> 
        &lt;label class="radio-inline"> &lt;input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1 &lt;/label> 
        &lt;label class="radio-inline"> &lt;input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2 &lt;/label> 
        &lt;label class="radio-inline"> &lt;input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3 &lt;/label> 
    &lt;/form> 
         </code>
     </pre>
 </figure>
 <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>
     
      

<h4 id="checkboxes-and-radios-without-la"><a class="anchorjs-link " href="#checkboxes-and-radios-without-la" aria-label="Anchor link for: checkboxes and radios without la" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Checkboxes and radios without label text</h4> 
<p>Should you have no text within the <code>&lt;label&gt;</code>, the input is positioned as you'd expect. <strong>Currently only works on non-inline checkboxes and radios.</strong> Remember to still provide some form of label for assistive technologies (for instance, using <code>aria-label</code>).</p> 
<div class="bs-example" data-example-id="checkboxes-radios-without-labels"> 
    <form> 
        <div class="checkbox"> 
            <label> <input type="checkbox" id="blankCheckbox" value="option1" aria-label="Checkbox without label text"> </label> 
        </div> 
        <div class="radio"> 
            <label> <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Radio button without label text"> </label> 
        </div> 
    </form> 
</div> 
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
<figure class="highlight">
    <pre>
        <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;div class="checkbox"> 
            &lt;label> &lt;input type="checkbox" id="blankCheckbox" value="option1" aria-label="Checkbox without label text"> &lt;/label> 
        &lt;/div> 
        &lt;div class="radio"> 
            &lt;label> &lt;input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Radio button without label text"> &lt;/label> 
        &lt;/div> 
    &lt;/form> 
        </code>
    </pre>
</figure>
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>



<h3 id="selects"><a class="anchorjs-link " href="#selects" aria-label="Anchor link for: selects" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Selects</h3> <p>Note that many native select menus—namely in Safari and Chrome—have rounded corners that cannot be modified via <code>border-radius</code> properties.</p> 
<div class="bs-example" data-example-ids="select-form-control"> 
    <form> 
        <select class="form-control"> 
            <option>1</option> 
            <option>2</option> 
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
        </select> 
    </form> 
</div> 
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><figure class="highlight">
    <pre>
        <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;select class="form-control"> 
            &lt;option>1&lt;/option> 
            &lt;option>2&lt;/option> 
            &lt;option>3&lt;/option> 
            &lt;option>4&lt;/option> 
            &lt;option>5&lt;/option> 
        &lt;/select> 
    &lt;/form> 
        </code>
    </pre>
</figure> 
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>




<p>For <code>&lt;select&gt;</code> controls with the <code>multiple</code> attribute, multiple options are shown by default.</p> 
<div class="bs-example" data-example-ids="select-multiple-form-control"> 
    <form> 
        <select multiple="multiple" class="form-control"> 
            <option>1</option> 
            <option>2</option> 
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
         </select> 
    </form> 
 </div>
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;select multiple="multiple" class="form-control"> 
            &lt;option>1&lt;/option> 
            &lt;option>2&lt;/option> 
            &lt;option>3&lt;/option> 
            &lt;option>4&lt;/option> 
            &lt;option>5&lt;/option> 
         &lt;/select> 
    &lt;/form> 
         </code>
     </pre>
</figure> 
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>



<h2 id="forms-controls-static"><a class="anchorjs-link " href="#forms-controls-static" aria-label="Anchor link for: forms controls static" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Static control</h2> 
<p>When you need to place plain text next to a form label within a form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p> 
<div class="bs-example" data-example-id="horizontal-static-form-control"> 
    <form class="form-horizontal"> 
        <div class="form-group"> <label class="col-sm-2 control-label">Email</label> 
            <div class="col-sm-10"> 
                <p class="form-control-static">email@example.com</p> 
            </div> 
       </div> 
       <div class="form-group"> <label for="inputPassword" class="col-sm-2 control-label">Password</label> 
            <div class="col-sm-10"> 
                <input type="password" class="form-control" id="inputPassword" placeholder="Password"> 
            </div> 
       </div> 
   </form> 
</div> 
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
<figure class="highlight">
    <pre>
        <code class="language-html" data-lang="html">
    &lt;form class="form-horizontal"> 
        &lt;div class="form-group"> &lt;label class="col-sm-2 control-label">Email&lt;/label> 
            &lt;div class="col-sm-10"> 
                &lt;p class="form-control-static">email@example.com&lt;/p> 
            &lt;/div> 
       &lt;/div> 
       &lt;div class="form-group"> &lt;label for="inputPassword" class="col-sm-2 control-label">Password&lt;/label> 
            &lt;div class="col-sm-10"> 
                &lt;input type="password" class="form-control" id="inputPassword" placeholder="Password"> 
            &lt;/div> 
       &lt;/div> 
   &lt;/form>  
        </code>
    </pre>
</figure> 
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>


<h2 id="forms-control-focus"><a class="anchorjs-link " href="#forms-control-focus" aria-label="Anchor link for: forms control focus" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Focus state</h2> 
<p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p> 
<div class="bs-example"> 
    <form> 
        <input class="form-control" id="focusedInput" type="text" value="Demonstrative focus state"> 
    </form> 
</div> 
<div class="bs-callout bs-callout-info" id="callout-focus-demo"> <h4>Demo <code>:focus</code> state</h4> 
<p>The above example input uses custom styles in our documentation to demonstrate the <code>:focus</code> state on a <code>.form-control</code>.</p> </div> 
<h2 id="forms-control-disabled"><a class="anchorjs-link " href="#forms-control-disabled" aria-label="Anchor link for: forms control disabled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled state</h2> 
<p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p> <div class="bs-example" data-example-id="text-form-control-disabled"> 
    <form> 
        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="disabled"> 
    </form> 
 </div> 
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="disabled"> 
    &lt;/form> 
         </code>
     </pre>
 </figure> 
 <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>

 
 
 
 <h3 id="forms-disabled-fieldsets"><a class="anchorjs-link " href="#forms-disabled-fieldsets" aria-label="Anchor link for: forms disabled fieldsets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled fieldsets</h3> 
 <p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p> 
 <div class="bs-callout bs-callout-warning" id="callout-fieldset-disabled-pointer-events"> 
     <h4>Caveat about link functionality of <code>&lt;a&gt;</code></h4> 
     <p>By default, browsers will treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> and <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes <code>&lt;a ... class="btn btn-*"&gt;</code> elements, these will only be given a style of <code>pointer-events: none</code>. As noted in the section about <a href="#buttons-disabled">disabled state for buttons</a> (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11, and won't prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.</p> 
 </div> 
 <div class="bs-callout bs-callout-danger" id="callout-fieldset-disabled-ie"> <h4>Cross-browser compatibility</h4> 
 <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 11 and below don't fully support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p> 
 </div> 
 <div class="bs-example" data-example-id="disabled-fieldset"> 
     <form> 
         <fieldset disabled="disabled"> 
             <div class="form-group"> 
                 <label for="disabledTextInput">Disabled input</label> 
                 <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"> 
             </div> 
             <div class="form-group"> 
                 <label for="disabledSelect">Disabled select menu</label> 
                 <select id="disabledSelect" class="form-control"> 
                     <option>Disabled select</option> 
                 </select> 
             </div> 
             <div class="checkbox"> 
                 <label> <input type="checkbox"> Can't check this </label> 
             </div> 
             <button type="submit" class="btn btn-primary">Submit</button> 
        </fieldset> 
     </form> 
 </div> 
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
      &lt;form> 
         &lt;fieldset disabled="disabled"> 
             &lt;div class="form-group"> 
                 &lt;label for="disabledTextInput">Disabled input&lt;/label> 
                 &lt;input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"> 
             &lt;/div> 
             &lt;div class="form-group"> 
                 &lt;label for="disabledSelect">Disabled select menu&lt;/label> 
                 &lt;select id="disabledSelect" class="form-control"> 
                     &lt;option>Disabled select&lt;/option> 
                 &lt;/select> 
             &lt;/div> 
             &lt;div class="checkbox"> 
                 &lt;label> &lt;input type="checkbox"> Can't check this &lt;/label> 
             &lt;/div> 
             &lt;button type="submit" class="btn btn-primary">Submit&lt;/button> 
        &lt;/fieldset> 
     &lt;/form> 
         </code>
     </pre>
</figure> 
<a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>


<h2 id="forms-control-readonly"><a class="anchorjs-link " href="#forms-control-readonly" aria-label="Anchor link for: forms control readonly" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Readonly state</h2> 
<p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input's value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p> 
<div class="bs-example" data-example-id="readonly-text-form-control"> 
    <form> 
        <input class="form-control" type="text" placeholder="Readonly input here…" readonly="readonly"> 
    </form> 
 </div> 
 <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
 <figure class="highlight">
     <pre>
         <code class="language-html" data-lang="html">
    &lt;form> 
        &lt;input class="form-control" type="text" placeholder="Readonly input here…" readonly="readonly"> 
    &lt;/form> 
         </code>
     </pre>
 </figure>
 <a class="btn bg-custom" href="Downloads/CSS/basictable.html" download>DOWNLOAD FULL CODE</a>

</div>
              <span></span>       
                    
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>