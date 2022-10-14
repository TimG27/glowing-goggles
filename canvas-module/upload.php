<!DOCTYPE html>
<html>

  <head>
    <title>J component</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

<body style="margin: 50px">

<?php
      $filename = $_FILES['file']['name'];
      $filename = "uml.png";
      $location = "C:\\xampp\\htdocs\\IWP_Lab\\WebEngineering\\model-wd\\v2\\".$filename;
  
      if (move_uploaded_file ($_FILES['file']['tmp_name'],$location))
?>

<div class = "centering" style = "background-color: whitesmoke">
    <h1>Model-based Web Engineering</h1>
</div>


<br>
<br>

<div style = "display: flex;  justify-content: center; ">
    <div class = "centering" style = "background-color: lightcyan; width: 500px; border: 1px black; flex-direction: column; padding: 20px;">

            <b>Welcome to the Web Engineering Portal</b>
            <br><br>

            <label for = "pname" >Enter new project name: </label>
            <input type = "text" id = "pname" value="">
            <br><br>
            


            <input type = "submit" value = "Proceed to Canvas" onclick = "initcanvas()">










    </div>
</div>


<script src="script.js?v=<?php echo time(); ?>"></script>
</body>

</html>
