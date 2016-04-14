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
        <link href=../bootstrap-3.3.6-dist/css/bootstrap.min.css rel=stylesheet>
        <link href=../css/docs.min.css rel=stylesheet>
        <script src=../bootstrap-3.3.6-dist/js/bootstrap.js></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php include '../Views/header.php'; ?>
            
            <div class="row">
                <div class="col-sm-12 bg-custom">
                    <h1 style="text-align:center">CSS</h1>
                    <p class="lead" style="text-align:center">Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</p>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-3">
                    <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top"> 
                        <ul class="nav bs-docs-sidenav"> 
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
                    </ul> 
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
                     <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
                     </form>
                     
                     
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
                     <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
                     </form>
                     
                     
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
                    <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
                    </form>
                    
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
                  <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
                  </form>
                  
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
                  <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
                  </form>
                  
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
     <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
     </form>
     
     
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
         </code>
     </pre>
  </figure> 
  <form method="get" action="../Downloads/CSS/basictable.docx">
                        <button class="btn bg-custom" type="submit">DOWNLOAD CODE</button>
     </form>
</div>
<span></span>
                    
                    
                </div>
            </div>
            
            <?php include '../Views/footer.php'; ?>
        </div>
        <script type="text/javascript">
            document.querySelector('.navbar').querySelectorAll('li')[1].setAttribute('class','active');
        </script>
    </body>
</html>