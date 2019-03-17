<html>

    <head>





    
        <title>adding new plane</title>
        <link rel="stylesheet" type="text/css" href="register.css">
        
        
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



        
        <div class="main">
            
            <div class="banner">
            
            <span class="text">welcome to bangladesh airways</span> 


        </div>
        
        <div class="registration_form">
            
            <div class="reg">
        
             <div class="text"> add new plane </div>



            
            
            <form class="form" method="post" action="insert.php">
                
                Serial no: <input  name="name1" type="text" placeholder="input integer serial no "required >
                <br>
            
                Plane Name :<input name="name2" type="text" placeholder="input plane name" required >
                <br>
                Passenger Quantity:<input  name="name3" type="text" placeholder="input no of passenger " required >
                <br>
                
                Weight Capacity: <input  name="name4" type="text" placeholder="input weight capacity" required >
                <br>
                

               
   
   Source: <select name="name5">

         <datalist id="name5">
            <option value="">From</option>
     <option value="Dhaka-airport1"> Dhaka-airport1 </option>
  <option value="Adabor">Dhaka-airport2</option>
     
     
     </datalist> 
 </select>
     
<br>
            
    Destination : <select name="name6" >

  
     <datalist id="name6">

     <option value="">To</option>
     <option value="Rajshahi-airport">Rajshahi-airport</option>
     <option value="Chittagong-airport">Chittagong-airport </option>
     <option value="coxsbazar-airport"> coxsbazar-airport</option>
     <option value="Sylhet-airport">Sylhet-airport</option>
     <option value="usa-airport">usa-airport </option>
     <option value="China-airport">China-airport </option>
     <option value="India-airport"> India-airport </option>
     <option value="England-airport"> England-airport </option>
     <option value="Riyad-airport"> Riyad-airport </option>
     <option value="Dubai-airport"> Dubai-airport </option>
     <option value="singapur-airport"> singapur-airport </option>
     <option value="katar-airport"> katar-airport </option>
      

     </datalist> 
     </select>


     <br>
    
   


            Departure Time: <input type="time" name="name7" placeholder=" select time"  required>

            

         
                 
                <br>

                Plane Start Date: <input type="date" name="name8" placeholder=" select date when start"  required>

              
                <br>
                Plane Status: <input  name="name9" type="text" placeholder="avrg-good-excillent" required>
                <br>
                Seat Cost : <input  name="name10" type="text" placeholder="seat prize" required>
                <br>

                Pilot ID: <input  name="name11" type=" text" placeholder="input integer no id"  required>

                <br>


                <input class="name9" type="submit" value="Submit">
                
                
                
                
            
            </form>
            
            
            
        
        
        </div>
            
        </div>    
        
        
        
        </div>
    
    
    
    </body>




</html>