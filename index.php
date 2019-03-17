<html>
    <head>
        
        <title>Airport Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    
    <body>
        
       


    


<form>
    <input id="clockDisplay" size="10" >

</form>

<script type="text/javascript">
    function renderTime() {
        var currentTime = new Date();
        var diem = "AM";
        var h = currentTime.getHours();
        var m = currentTime.getMinutes();
        var s = currentTime.getSeconds();

        if (h == 12) {
            h = 0;
        } else if (h > 12) {
            h = h - 12;
            diem = "PM";
        }
        if (h < 10) {

            h = "0" + h;
        }
        if (m < 10) {

            m = "0" + m;
        }

        if (s < 10) {

            s = "0" + s;
        }

        myClock =h + ":" + m + ":" + s;
        document.getElementById("clockDisplay").value = myClock;
        setTimeout('renderTime()', 1000);
    }
    renderTime();

        


</script>








        <!-----php---------->

        

        
        <!main body..........>
        
        <div class="main">
            
            <!header..............................>

        
            <div class="header">
                
                
                
                <div class="logo">
                    
                    <div class="name">  <span class="name1">BANGLADESH</span><br/> <span class="name2">AIRLINE</span>   </div>






                    
                    <div class="social">
                    
                    <a href="https://facebook.com"> <img class="fb" src="img/fb.jpg"></a>
                    <a href="https://twitter.com"> <img class="t" src="img/twitter.jpg"></a>
                    <a href="https://plus.google.com/"> <img class="g" src="img/g.jpg"></a>
                   
                    
                    
                    
                    </div>
                
                </div>
                
                <div class="menu">
                    
                    <ul>
                        
                        <li><a href="http://localhost/air/#">home</a></li>
                        
                        <li><a href="#">booking</a></li>
                        <li><a href="#">about us</a></li>
                        
                        <li><a href="#">review</a></li>
                        <li><a href="#">contact</a></li>
                        <li><a href="register.php">register</a></li>
                        <li><a href="#">login</a>
                        
                            <ul>
                                <li><a>user</a></li>
                                <li><a href="admin.php">admin</a></li>
                            
                            
                            </ul>
                        
                        
                        </li>
                        
                    
                    </ul>
                    
                </div>

            </div>
            
            
            
            
            
            
            <!slider.................................>

            <div class="slider">
                
                <span class="sl">slider</span>

            </div>
            
            
            
            
            <!message..............................>

            <div class="message">
                
                <div class="message1"> 
                    
                    
                    <div class="m1"><span>message 1</span></div>
                
                </div>
                
                <div class="message2">
                    
                    <div class="m2"><span>message 2</span></div>
                </div>
                
                
                <div class="message3"> 
                    
                    <div class="m3"><span>message 3</span></div>
                
                </div>
                

            </div>
            
            
            <!-- Add Google Maps -->
 <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>




            <div class="footer">
                
                <span> copyright &copy 2017</span>


            </div>


        
        </div>
    
    </body>


</html>
