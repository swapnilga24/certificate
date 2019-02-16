
<?php include('server2.php') ?>

<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style5.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
</head>
  <body style="font-family: 'Noto Serif', serif;background-color:#6FE5C9;">
  	<h1>VIIT REGISTRATION FORM</h1>
  	<div id="div1">
	<div id="div2">
	 <form method="post" action="server2.php">
	 	<div>
         <label>NAME:</label>
	  	 <input type="text" name="fname" align="right" id="h1" placeholder="full name as per the university" required><br>
	    </div>
	    <div>
	  	 <label>Branch NAME:</label>
	  	 <input type="text" name="branch" id="h1" placeholder="branch" required><br>
	  	</div>
	  	<div>
         <label>MIS:</label>
         <input type="text" id="h1" name="gname" placeholder="MIS NO." required><br>
        </div>
        <div>
         <label>CGPA:</label>
         <input type="text" name="cg"id="h1" placeholder="Provide Avg" required><br>
        </div>
        <div>
         <label>CATEGORY:</label>
         <input type="text" name="category" id="h1" placeholder="open/other" required><br>
        </div>
        <div>
         <label>Priority CATEGORY:</label>
         <input type="text" name="pri_cat" id="h1" placeholder="open=1/other=2" required><br>
        </div>
        <div>
         <label>MOBILE NO:</label>
         <input type="text" name="mob" id="h1" placeholder="without country code" required><br>
        </div>
        <div>
         <label>PARENT'S PHONE NO:</label>
         <input type="text" name="pmob" id="h1" placeholder="without country code" required><br>
        </div>
        <div>
         <label>GENDER:</label>
         <input type="text" name="gen" id="h1" placeholder="MALE/FEMALE" required><br>
        </div>
    </br>
        <div class="but">
         <div class="input-group">
         <button style="color: blue;width: 300px;height: 30px;background-color: yellow;text-align: center;" type="submit" class="btn" name="form1">SEND</button>
        </div>
        </div>
        <h6 style="padding-bottom: 1px;"></h6>
      </form>
     </div>
   </div>
  </body>
</html>