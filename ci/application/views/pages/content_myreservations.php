<main>

<h2>
Reservations at Pacific Trails
</h2>



<h3>Contact Us</h3>

<form id="resform" method="post" action="<?php echo base_url()?>home/callreservation">

 <p>Required fields are marked with an asterik (*).</p>

 <?php 
 
 foreach ($reserved as $r) {
  
  echo "<div>
     <label for='email'>*E-mail:</label>
        <input type='email' id='email' name='email' value='".$r['email']."'>
    </div>";
   if(!($r['email']=="")){
   echo"    


        <div>
     <label for='fname'>First Name:</label>
         <input type='text' name='fname' id='fname' value='".$r['fname']."' >
    </div>
    
    <div>
     <label for='lname'>Last Name:</label>
         <input type='text' name='lname' id='lname' value='".$r['lname']."' >
    </div>
    
    
    
    <div>
    <label for='phone'>Phone:</label>
        <input type='number' name='phone' id='phone' value='".$r['phone']."'' readonly >
    </div>
    
    <div>
    <label for='adate'>Arrival Date:</label>
        <input type='date' name='adate' id='adate' value='".$r['adate']."' readonly>
    </div>
      <div>
    <label for='ddate'>Departure Date:</label>
        <input type='date' name='ddate' id='ddate' value='".$r['ddate']."' readonly >
    </div>
    
    
    <div>
    <label for='activityid'>*Activities:</label>
           <select name='activityid' id='activtiyid' required='required' readonly>
               <option value=''>".$r['activityid']."</option>
              
           </select>
    </div>

    
    <div>
    <label for='packageid'>*Packages:</label>
           <select name='packageid' id='packageid' >
               <option value='' >".$r['packageid']."</option>
               
           </select>
    </div>
    
    <div>
    <label for='wdate'>When:</label>
          <input type='date'  value='".$r['wdate']."' readonly>
    </div>
        
         

";
break;
}
break;

 }
 
  
    ?>
    <div id='rsubmit'>
           <button type='submit' name='submit' class='btn' >Submit</button>
    </div>
           
    
</form>

</main>
<div id="contact">