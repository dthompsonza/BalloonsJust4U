<?php
    echo '<!-- ' . $_SERVER['SERVER_NAME'] . '-->';

    if (strpos(strtolower($_SERVER['SERVER_NAME']),'balloonsjust4u.co.za') !== false) 
    {                                 
      ?>	
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-7021552-3', 'auto');
          ga('send', 'pageview');

        </script>
        <?php
    }
    else
    {
      echo '<!-- No analytics to be linked here -->';
      
    }
	
?>