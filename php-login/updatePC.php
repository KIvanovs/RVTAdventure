<?php
include_once 'header.php';
include 'includes/updatePC.inc.php';
?>
<link rel="stylesheet" href="css/comment.css">
<div class='double-background'>
<section class='comment-form'> 
</head>
<body>
	<div class="container">
		<form action="includes/updatePC.inc.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="PCname">Name of patchnote</label>
		     <input type="text" 
		           class="form-control" 
		           id="PCname" 
		           name="PCname" 
		           value='<?=$row["PCname"] ?>' >

             <label for="Version">Version</label>
		     <input type="text" 
		           class="form-control" 
		           id="Version" 
		           name="Version" 
		           value='<?=$row["Version"] ?>' >

             <label for="comment">Comment</label>
		     <input type="text" 
		           class="form-control" 
		           id="comment" 
		           name="comment" 
		           value='<?=$row["comment"] ?>' >
		   </div>
		   <input type="text" 
		          name="pcId"
		          value='<?=$row["pcId"]?>'
		          hidden >
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">
				   Update</button>
			
				   </form>
	</div>
</div>
<div id="footer">
        <div class="fcontent">
            <div class="column">
            <img src="https://cdn.discordapp.com/attachments/757590961839669339/1062822979240726719/kdmk.png" alt="LogoRVT">
                <p>
                    <strong>KMDK</strong>
                    Is a Latvian workers cooperative based in RVT college.
                </p>
                <p>
                    We've been making games since 2021 and we're going to keep on upgrading our games on PC.
                </p>
            </div>
        </div>
    </div>
</body>
</html>