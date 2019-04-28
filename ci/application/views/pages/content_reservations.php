<main>

<h2>
Reservations at Pacific Trails
</h2>



<h3>Contact Us</h3>
<form id="resform" method="post" action="<?php echo base_url()?>home/savereservation" >
<!--display validation errors here -->
<?php echo validation_errors();?>
 <p>Required fields are marked with an asterik (*).</p>
        <div>
     <label for="fname">*First Name:</label>
         <input type="text" name="fname"   >
    </div>
    
    <div>
     <label for="lname">*Last Name:</label> 
         <input type="text" name="lname"  >
    </div>
    
    <div>
     <label for="email">*E-mail:</label>
        <input type="email"  name="email"  >
    </div>
    
    <div>
    <label for="phone">Phone:</label>
        <input type="number" name="phone"  >
    </div>
    
    <div>
    <label for="adate">Arrival Date:</label>
        <input type="date" name="adate" >
    </div>
    
    <div>
    <label for="nights">Nights:</label>
        <input type="number" name="nights"  max="14" min="1">
    </div>
    
    <div>
    <label for="comment">*Comments:</label>
           <textarea name="comment"  cols="50" rows="5" ></textarea>
    </div>
    
    <div>
    <label for="activityid">*Activities:</label>
           <select name="activityid"  >
               <option value="Hiking">Hiking</option>
               <option value="Kayaking">Kayaking</option>
               <option value="Bird Watching">Bird Watching</option>
           </select>
    </div>
    
    <div>
    <label for="packageid">*Packages:</label>
           <select name="packageid"  >
               <option value="Weekend Escape">Weekend Escape</option>
               <option value="Zen Retreat">Zen Retreat</option>
               <option value="Kayak Away">Kayak Away</option>
           </select>
    </div>
    
    <div>
    <label for="wdate">When:</label>
          <input type="date" name="wdate" >
    </div>
        
         <div id="rsubmit">
             <button type="submit" name="submit" class="btn">Submit</button>
    </div>
           
    
</form>


</main>

<div id="contact">
