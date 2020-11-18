





 <?php  
 $connect = mysqli_connect("localhost", "root", "gopi2627", "msw_gallery");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO latest_photos(images) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="../../style_gallery.css">		   
      </head>  
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

<style>
.table{
	align:left;
	border:3px solid #000000;
}

	.navbar {
  overflow: hidden;
background:transparent;
color: black;
opacity: 1.9;
}
.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
    font-size: 20px;


}
.navbar a.right {
  float: right;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-image: url('MSW1/ori.jpg');
  color: black;
  	opacity: 0.3;


}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
    font-size: 16px;
  position: absolute;
  background-image:url('tr.jpg');
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-image: url("MSW1/ori.jpg");
  color:white;
}
.dropdown:hover .dropdown-content {
  display: block;
}


</style>


<body>
<div class="navbar">
  <a href="../home.php">Home</a>
  
   </div>
 <body>  
           <br /><br />  
           <!--div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table" >  
                     <tr>  
                          <th>Image</th>  
                     </tr-->  
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