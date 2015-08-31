<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=1170">  
    <title>UCLA h3 / BGRG Summit 2015 - January 14, 2015 - Atlanta, GA - USA</title>
    <link rel="icon" type="image/png" href="img/logo-32.png">
    <link href="css/typeface.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> 
    <link href="css/noggrid.css" rel="stylesheet"> 
    <script src="//code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <!-- Accordion -->
    <script type="text/javascript">
      $(document).ready(function($) {
        $('#accordion').find('.accordion-toggle').click(function(){
          //Expand or collapse this panel
          $(this).next().slideToggle('fast');
          //Hide the other panels
          $(".accordion-content").not($(this).next()).slideUp('fast');
        });
      });
    </script>    
    <script>        
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-53782317-1', 'auto');
     ga('send', 'pageview');
    </script>
  </head>
  <body>     
     <!-- HERE IS THE PAGE CONTENT INCLUDE-->
     <?  // include("./pages/template1.php"); ?> 
     <?  // include("./pages/template2.php"); ?>  
     <? // include("./pages/template-col24.php"); ?>  
    <div id="page-wrapper">
      <div class="main-header">   
        <div class="logo-wrapper">        
          <a class="main-logo" href="./"><h1>UCLA h3 / BGRG Summit 2015</h1></a>          
          <a class ="register-btn btn-red-124" style="margin-left:20px;" href="./?page=registration">Register</a>        
        </div>        
        <div class="top-menu">
          <div class="menu-column1">
            <a class="btn-red-82" href="./?page=agenda">Agenda</a>
            <a class="btn-red-82" href="./?page=speakers">Speakers</a>
            <a class="btn-red-82" href="./?page=sponsors">Sponsors</a> 
            <a class="btn-red-82" href="./?page=organizers">Organizers</a>
            <a class="btn-red-82" href="./?page=attendees">Attendees</a>
            <a class="btn-red-82" href="./?page=meetings">Meetings</a>
          </div>
          <div class="menu-column2">
            <a class="btn-green-73" href="./?page=awards">Awards</a> 
            <a class="btn-green-97" href="./?page=scholarship">Scholarships</a>
            <a class="btn-green-83" href="./?page=research">Research</a>
            <a class="btn-green-83" href="./?page=abstract">Abstracts</a>
            <a class="btn-green-97" href="./?page=focus-groups">Focus Groups</a>
            <a class="btn-green-59" href="./?page=history">History</a>
          </div>
          <div class="menu-column3">
            <a class="btn-black-63" href="./?page=travel">Travel</a>
            <a class="btn-black-63" href="./?page=press">Press</a>
            <a class="btn-black-80" href="./?page=evaluation">Evaluation</a>
            <a class="btn-black-63" href="./?page=contact">Contact</a>
            <a class="btn-black-80" href="./?page=registration">Registration</a>
            <a class="btn-black-63" href="./?page=login">Login</a>
          </div>             
          <div class="clearfix"></div>       
        </div>
        <a class="toggleMenu" href="#">Menu<span>&#x2193;</span><span style="display: none;">&#x2191;</span></a>
      </div>    
      <div class="clearfix"></div>
      <div class="main-container"> 
        <div class="page-header">            
          <input type="search" name="searchbox" results=5 class="main-search" placeholder="SEARCH"/>          
          <div class="share-top">
            <a class="top-share-facebook" target="_blank" href="https://www.facebook.com/BGRGSummit">Facebook</a>
            <a class="top-share-twitter" target="_blank" href="https://twitter.com/hashtag/BGRGSummit">Twitter</a>
            <a class="top-share-share" href="#">Share</a>     
          </div>                    
          <div class="clearfix"></div>
        </div>   
        <div class="main-content">
          <!-- HERE IS THE PAGE CONTENT INCLUDE-->
          <? include("page.php"); ?>  
        </div>        
      </div>    
      <div class="side-content">         
         <a href="./?page=sponsors"><h3 class="side-sponsors-title btn-yellow-100">Sponsors</h3></a>
         <ul>
            <a href='http://bgrgsummit.com/versions/BGRGFrontEndDev/'><li><img src="img/BGRG-logo-side-menu.png"></li></a>
            <a href='#"'><li><img src="img/H3-logo-side-menu.png"></li></a>        
         </ul>
         <a href="./?page=organizers"><h3 class="side-organizers-title btn-yellow-100">Organizers</h3></a>
         <ul>
            <a href='http://bgrgsummit.com/versions/BGRGFrontEndDev/'><li><img src="img/BGRG-logo-side-menu.png"></li></a>
            <a href='#"'><li><img src="img/H3-logo-side-menu.png"></li></a>        
         </ul>
      </div>          
      <div class="clearfix"></div>
      <div class="footer">
        <div class="share-bottom">
          <div class="wrapper">
            <a class="bottom-share-facebook" target="_blank" href="https://www.facebook.com/BGRGSummit">Facebook</a>
            <a class="bottom-share-twitter" target="_blank" href="https://twitter.com/hashtag/BGRGSummit">Twitter</a>
            <a class="bottom-share-share" href="#">Share</a>     
          </div>
        </div>
        <div class="footer-content">
          <p>UCLA H3/ BGRG SUMMIT - January 14, 2015, Atlanta, GA USA</p>
          <p>Building Strong Families  and Communities across the African Diaspora for Black Same Gender Practicing Men</p>
          <ul>
            <li><a href="./?page=agenda">Agenda</a></li>
            <li><a href="./?page=sponsors">Sponsors</a></li>
            <li><a href="./?page=attendees">Attendees</a></li>
          </ul>
          <ul>
            <li><a href="./?page=speakers">Speakers</a></li>
            <li><a href="./?page=organizers">Organizers</a></li>
            <li><a href="./?page=meetings">Meetings</a></li>
          </ul>
          <ul>
            <li><a href="./?page=awards">Awards</a></li>
            <li><a href="./?page=research">Research</a></li>
            <li><a href="./?page=focus-groups">Focus Groups</a></li>
          </ul>
          <ul>
            <li><a href="./?page=scholarships">Scholarships</a></li>
            <li><a href="./?page=abstracts">Abstracts</a></li>
            <li><a href="./?page=history">History</a></li>
          </ul>
          <ul>
            <li><a href="./?page=travel">Travel</a></li>
            <li><a href="./?page=evaluation">Evaluation</a></li>
            <li><a href="./?page=registration">Registration</a></li>
          </ul>
          <ul>
            <li><a href="./?page=press">Press</a></li>
            <li><a href="./?page=contact">Contact</a></li>
            <li><a href="./?page=login">Login</a></li>
          </ul>
        </div>
        <div class="footer-credits">
          <a class="bgrg-logo-footer" href="http://bgrgsummit.com/versions/BGRGFrontEndDev/">BGRG - The Black Gay Research Group</a>
          <p>BGRG ® 2014 All rights reserved.</p> 
          <p>Developed by <a href="http://www.daterraweb.com">DaTerra Systems</a></p>
        </div>       
      </div>    
    </div>    
  </body>
</html>