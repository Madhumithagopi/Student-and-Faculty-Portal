<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body, html {
padding: 0;
margin: 0;
text-align: center;
}
img {
    transition:transform 0.25s ease;
}

img:hover {
    -webkit-transform:scale(1.5); /* or some other value */
    transform:scale(1.5);
}

</style>


<?php

//fetch_images.php
 $connect = mysqli_connect("localhost", "root", "gopi2627", "msw_gallery");  
?>
<div ><center><h2> <mark>LATEST ACTIVITIES </mark></h2></div></center>
                <?php  
					
                $query = "SELECT * FROM latest_photos ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {                                    
               ?>
			

  <div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">

          <div class="el__preview-cont">

  <div class="el_bg"><td>
				<?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" height="350" width="375" align="right" border="1"/>  '?>

				<?php
				}?>
				 </td>
				 	</tr>
					</div>
				
</div>
</div>
</div>
</div>
</div>

</div>
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  