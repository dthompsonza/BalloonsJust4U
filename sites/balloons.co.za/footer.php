<!-- beginning of footer.php -->
	
    </div> <!-- ballooncontent -->

    <p><br/></p>

	<footer class="text-center">
        <div class="footer-above" >
            <div class="container">
                <div>
                    <p></p>
                </div>
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p style="white-space:nowrap;">
                           'Villa Coco' on High Ridge Road<br/>
                           (diagonally opposite Underwood Rd)<br/>
                           Durban North<br/>
                           4051<br/>
                        </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/Balloons-Just-4-U-1150666938334711/" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <!--
                            <li><a href="http://www.pinterest.com/balloonsj4u/" class="btn-social btn-outline"><i class="fa fa-fw fa-pinterest"></i></a>
                            </li>
                            <li><a href="http://www.twitter.com/BalloonsJust4U" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a href="http://www.linkedin.com/BalloonsJust4U" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact</h3>
                        <p>
                            <a href="mailto:balloonsj4u@icon.co.za" class="white-text">balloonsj4u@icon.co.za</a> <br/>
                            031 573 1126 / 072 048 8008 <br/>
                            Mon – Fri 8am to 5pm <br/>
                            Sat 8am to 2pm <br/>
                            Sun 8am to 10am (by appointment only) <br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if ($pageTitle == "Contact")
            { ?>
        <div>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div style="overflow:hidden;height:350px;width:100%;">
                <div id="gmap_canvas" style="height:350px;width:100%;"></div>
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.pureblack.de" id="get-map-data">www.pureblack.de</a>
            </div>
            <script type="text/javascript"> function init_map(){var myOptions = {draggable: false,zoom:15,center:new google.maps.LatLng(-29.8013567,31.0295294),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-29.8013567,31.0295294)});infowindow = new google.maps.InfoWindow({content:"<b>Balloons Just 4 U</b><br/>'Villa Coco'<br/>High Ridge Rd (opp 199 High Ridge Rd)<br/> Durban North<br/> Durban" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
        <?php 
            }
            ?>

        <div class="footer-below" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Established 1987 - 'Balloons are our Business'</h4>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="/_inc/js/jquery-1.10.2.js"></script>
    <script src="/_inc/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/_inc/js/classie.js"></script>
    <script src="/_inc/js/cbpAnimatedHeader.js"></script>
    <script src="/_inc/js/freelancer.js"></script>
    
    
</body>

</html>
