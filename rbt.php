<?php
echo '<!doctype html>
<html><head>

<meta name="author" content="Pedro Gimeno Fortea">
<meta name="description" content="How to number lines of text or code in HTML while letting it both wrap around and be correctly copied and pasted">

<title>Line numbering test</title>
 <link rel="stylesheet prefetch" href="https://yandex.st/highlightjs/8.0/styles/vs.min.css">
<style type="text/css">
@media all,handheld{
body { 
color : #9b8e87; 
font-size : 12px; 
font-family : arial; 
background: #212020;
max-width : 490px; 
margin : auto; 
} 
a:link, a:active, a:visited { 
text-shadow : #212121 1px 1px 0; 
color : #b39887; 
text-decoration : none; 
} 
a:hover, a:focus { 
color : #dfbda8; 
} 
a.ico { 
background-image : url(ico.gif); 
background-repeat : no-repeat; 
background-position : 1px 50%; 
padding-left : 8px; 
} 
input, textarea, select { 
color : #9b9400; 
background-color : #272321; 
background-repeat : repeat-x; 
background-position : 50% bottom;
margin : 1px; 
padding: 12px;
border: 1px solid #60544e;
border-radius: 4px;
resize: vertical; 
} 
input:focus, textarea:focus, select:focus { 
border-color : #f9f37b; 
} 

button:hover, button:focus {
  background: gold;
  outline: 0;
}
input[type="submit"] { 
color : #8e8e8d; 
background-color : #2f2926; 
background-repeat : repeat-x; 
background-position : 50% top; 
margin : 1px; 
border : 1px solid #463e3a; 
cursor : pointer; 
} 

input[type=submit]:hover {
  background-color: #514d03;
}
img { 
vertical-align : middle; 
border-style : none; 
} 
small { 
font-size : 11px; 
} 
hr { 
margin-top : 2px; 
margin-bottom : 2px; 
border-style : none none solid; 
border-width : 0 0 1px; 
} 
.center { 
text-align : center; 
} 
.head { 
background-color : #6a2b2b; 
background-image : url(head.gif); 
background-repeat : repeat-x; 
background-position : 50% top; 
border-bottom : 1px solid #4b1e1e; 
} 
.title { 
text-shadow : #212121 1px 1px 0; 
color : #b89e91; 
background-color : #37302e; 
background-image : url(title.gif); 
background-repeat : repeat-x; 
background-position : 50% top; 
margin-bottom : 1px; 
padding : 4px; 
border-top : 1px solid #6c5e59; 
border-bottom : 1px solid #37302e; 
} 
h1.title, h2.title
{
    font-size: 12px;
    margin: 0;
    text-align: center;
}
.title a { 
text-decoration : underline; 
}
.iblock1 { 
text-shadow : #212121 1px 1px 0; 
color : #b89e91; 
background-color : #37302e; 
background-image : url(title.gif); 
background-repeat : repeat-x; 
background-position : 50% top; 
margin-bottom : 1px; 
padding : 4px; 
border-top : 1px solid #6c5e59; 
border-bottom : 1px solid #37302e; 
} 
h1.iblock1, h2.iblock1
{
    font-size: 12px;
    margin: 0;
    text-align: center;
}
.iblock1 a { 
text-decoration : underline; 
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
 border: transparent;
}
select.active,
select:focus {
    outline: none !important;
    box-shadow: 0 0 3pt 2pt #f9f37b;
}



/* Custom Select */

select {
  width: 205%;
  height: 200%;
  cursor: pointer;
}

.adv {
color : #a9a9a9;
font-size: 1.17em;
margin-left: 0;
margin-right: 0;
font-weight: bold;
background-color : #3b332e; 
background-image : url(adva.gif); 
background-repeat : repeat-x; 
background-position : 50% bottom; 
margin-bottom : 1px; 
padding : 3px; 
border-top : 1px solid #554740; 
border-bottom : 1px solid #554740; 
} 


.bn { 
background-color : #3c332e; 
background-image : url(bn.gif); 
background-repeat : repeat-x; 
background-position : 50% top; 
margin-top : 1px; 
margin-bottom : 1px; 
padding : 3px; 
border-top : 1px solid #64534a; 
border-bottom : 1px solid #64534a; 
} 
.gl { 
text-shadow : #353535 1px 1px 0; 
color : #d4cd69; 
background-color : #565420; 
background-image : url(gl.gif); 
background-repeat : repeat-x; 
background-position : 50% top; 
padding : 4px; 
border-top : 1px solid #858132; 
border-bottom : 1px solid #2f2d16; 
} 
.gl a { 
text-shadow : #353535 1px 1px 0; 
color : #d4cd69; 
text-decoration : underline; 
} 
.gl a:hover { 
color : #f8ee62; 
text-decoration : underline; 
text-shadow : #353535 1px 1px 0; 
} 
.main { 
background-color : #342e2b; 
background-image : url(main.gif); 
background-repeat : repeat-x; 
background-position : 50% bottom; 
margin-top : 1px; 
margin-bottom : 1px; 
padding : 3px; 
border-top : 1px solid #4e443f; 
border-bottom : 1px solid #4e443f; 
} 

.gcsborderrequired input {
    border: 2px solid black;
}
.gcstxtrequired{
  display: inline;
  color : #f72525; 
}
.main a { 
color : #c99e40; 
} 
.main a:hover { 
color : #e3c582; 
}

.menukw {
    color : #a9a9a9;
    background-color : #191818; 
    font-family: arial, sans-serif;
    font-size: 15px;
    border-collapse: collapse;
    border: 1px solid #37302e;
    text-align: left;
    padding: 8px;
} 

.menuku a { 
color : #c99e40; 
} 
.menuku a:hover { 
color : #e3c582; 
}
.row { 
background-color : #342e2b; 
background-repeat : repeat-x; 
background-position : 50% bottom; 
margin-top : 1px; 
margin-bottom : 1px; 
padding : 3px; 
border-top : 1px solid #4e443f; 
border-bottom : 1px solid #4e443f; 
} 
form p {
  
  float: left;
  width: 49%;
  display: inline-block;
  text-align: center;

}
form p:last-child {
  clear: both;
  width: 100%;
}
form p:nth-last-child(2) {
  clear: both;
  width: 100%;
}
form label {
  display: block;
}
form p:last-child {
  clear: both;
  width: 100%;
}
form p:nth-last-child(1) {
  clear: both;
  width: 100%;
}

* {
  box-sizing: border-box;
}

/**************************************/
@media (min-width: 700px) {
  .wrapper {
    overflow: hidden;

  }
 
}


@media (min-width: 700px) {
  .form {
    width: 70%;
  }
}
form p:not(:nth-child(2n)) {
  margin-right: 2%;
}
form p {
  float: left;
  width: 49%;
  display: inline-block;
  text-align: center;
}



/**************************************/




.form {
display: grid;
grid-gap: 90px;
background-color : #191818; 
margin: 0 auto; 
text-align: center;
}

form label {
  display: block;
  text-align: center;
}

button,
input,
textarea {
  padding: 1em;
}



.contain {
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

h3,
ul {
  margin: 0;
}

h3 {
  margin-bottom: 1rem;
}


input,
textarea,
button {
  width: 100%;
  border: 1px solid #000;
}

.foot { 
color : #f9f37b; 
background-color : #522; 
background-image : url(footer.gif); 
background-repeat : repeat-x; 
background-position : 50% top; 
text-align : center; 
padding : 4px; 
border-top : 1px solid #a23636; 
border-bottom : 1px solid #a23636; 
} 
#foot a { 
color : #f9f37b; 
} 
#foot a:hover { 
text-decoration : underline; 
} 
#count { 
text-align : center; 
padding : 2px; 
} 
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    height: 100%;
    display: block;
}



th { 
    border-left: 6px solid #f9f37b;
    height: 6px;
    text-indent: 1%;
    font-family: "Lucida Console", Monaco, monospace;
    font-size: 1.5em;
    margin: .5em 0 .75em;
    color: #a9a9a9;
    background-color: #3b332e;
}
td {
    border: 1px solid #37302e;
    padding: 6px;
}


img {
    border-radius: 8px;
}
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:2px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}
.failed {
        color:#a94442;
        background-color:#f2dede;
        padding: 3px;
        margin-top: 1px;
        margin-bottom: 1px;
        border-top: 1px solid #e4b9c0;
        border-bottom: 1px solid #d6e9c6;
        border-radius: 5px;
        font-family: Arial,Helvetica,sans-serif;
       font-size: 13xp;
    }
    .success {
        color:#3c763d;
        background-color:#dff0d8;
        padding: 3px;
        margin-top: 1px;
        margin-bottom: 1px;
        border-top: 1px solid #d6e9c6;
        border-radius: 5px;
        border-bottom: 1px solid #d6e9c6;
       font-family: Arial,Helvetica,sans-serif;
       font-size: 13xp;
   
    }

.scroll {
  -moz-box-sizing: border-box
  background-color:white;
  width: 100%;
  height: auto;
    max-height: 200px;
    overflow: scroll;
   
}

pre.scrolls {
  
  counter-reset:linen;
    height: auto;
    max-height: 200px;
    overflow: auto;
    background-color: #eeeeee;
    white-space: pre-wrap;
}
pre.scrolls::before {
    counter-reset: linenum;
}
pre.scrolls span.num { /* used for line numbers */
    display: table-cell;
    background: #f0f0f0;
    padding: 3px;
    padding-top: 0px;
    border-right: solid 1px silver;
    border-top: solid 1px silver;
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;          /* Likely future */      
}
pre.scrolls span.num::before {
  
    content: counter(linen) ".";

    text-align: right;
    display: block;
}
pre.scrolls span.num {
    width: 4em; /* or whatever the desired width of the numbers column is */
}
pre.scrolls span.table {
    display: table-row;
    counter-increment: linen;
}
pre.scrolls code {
 display: table-cell;
    
    
}
pre.scrolls span.e code {
    background: #f0f8ff;
}
/* Bare bones style for the desired effect */
pre.code {
  
  
    display: table;
    table-layout: fixed;
    width: 100%; /* anything but auto, otherwise fixed layout not guaranteed */
    white-space: pre-wrap;
}
pre.code::before {
    counter-reset: linenum;
}
pre.code span.tr {
    display: table-row;
    counter-increment: linenum;
}
pre.code span.th { /* used for line numbers */
    display: table-cell;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
}
pre.code span.th::before {
    content: counter(linenum);
    text-align: right;
    display: block;
}
pre.code span.th {
    width: 4em; /* or whatever the desired width of the numbers column is */
}
pre.code code {
    display: table-cell;
}

/* Additional styling demo */
pre.code {
   
   
    
    width: 100%;
    margin: 80px auto;
}
pre.code span.th { 
    background: #f0f0f0;
    padding: 3px;
    padding-top: 0px;
    border-right: solid 1px silver;
    border-top: solid 1px silver;
}
pre.code span.th::before {
    font-size: 90%;
    color: #999;
}
pre.code span.tr.first-row span.th {
    border-top: none;
}
pre.code code {

   
    word-wrap: break-word;
    padding: 3px;
}
pre.code span.e code {
    background: #f0f8ff;
}
pre.code span.th::before {
    content: counter(linenum) ".";
}
}
</style>

</head><body>


     
<pre class="scrolls"><span class="table e"><span class="num"></span><code>


pre.code span.th::before {
    content: counter(linenum) ".";
}<?php

);

$client = new GitHubClient();

foreach($repos as $repo)
{
  $client->setPage();
  $client->setPageSize(2);
  $commits = $client->repos->commits->listCommitsO
  echo "Count: " . count($commits) . "\n";
  foreach($commits as $commit)
  {
    /* @var $commit GitHubCommit */
    echo get_class($commit) . " - Sha: " . $commit->getSha() . "\n";
  }
  
  $commits = $client->getNextPage();

  echo "Count: " . count($commits) . "\n";
  foreach($commits as $commit)
  {
    /* @var $commit GitHubCommit */
    echo get_class($commit) . " - Sha: " . $commit->getSha() . "\n";
  }
}

}
</code></span><span class="table e"><span class="num"></span><code>


pre.code span.th::before {
    content: counter(linenum) ".";
}<?php

);

$client = new GitHubClient();

foreach($repos as $repo)
{
  $client->setPage();
  $client->setPageSize(2);
  $commits = $client->repos->commits->listCommitsO
  echo "Count: " . count($commits) . "\n";
  foreach($commits as $commit)
  {
    /* @var $commit GitHubCommit */
    echo get_class($commit) . " - Sha: " . $commit->getSha() . "\n";
  }
  
  $commits = $client->getNextPage();

  echo "Count: " . count($commits) . "\n";
  foreach($commits as $commit)
  {
    /* @var $commit GitHubCommit */
    echo get_class($commit) . " - Sha: " . $commit->getSha() . "\n";
  }
}

}
</code></span></pre>

<p>The above code block meets all desirable properties of a numbered text:
</p>
<ol><li>
    The code can be copied and pasted without the line numbers, respecting
    newlines, spaces and tabs.
</li><li>
    The numbers are right-justified.
</li><li>
    The code can wrap around.
</li><li>
    When a line wraps around, it should go underneath the above line, not
    underneath the line numbers.
</li><li>
    Both the numbers column and the text column should be style-able (notably,
    the background of the whole column should be easily changeable).
</li></ol>';

function hglitertxt($file)
{
 
  //$lines = "<pre><code>".implode(range(1, count(file($file))), '<br/>')."</code></pre>";
$str = null;
$content = file($file);

foreach($content as $linecode => $line) {
  $linenum = $linecode + 1;
  $line = htmlentities($line);
    $line = str_replace("<", "<span><", $line);
    $line = str_replace(">", "></span>", $line);
    $line = str_replace("<!–", "<em><!–", $line);
    $line = str_replace("–>", "–></em>", $line);
  $str.='<span class="tr e"><span class="th"></span><code>'.$line.'</code></span>';
 }
return $str; 
   
}
echo '<pre class="code">'.hglitertxt('gcs.php').'</pre>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://yandex.st/highlightjs/8.0/highlight.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  hljs.initHighlightingOnLoad();
});
</script>
</body></html>';
?>
