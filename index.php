<?php 
	if(isset($_GET['trigger']) && $_GET['trigger'] == 1) {
		error_reporting(E_ALL);
		shell_exec('sh door.sh');
	}
?>
<!DOCTYPE html>
<title>Garage Opener</title>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="Garage">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <!--<body style="background-color:black">-->
    <body>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <article style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-size: 9pt">

                    <!-- Header -->
                    <center><h1><font face = "Helvetica" size = "5" >Garage Opener</font><br/></h1><br/></center>
                
                    <!-- Button -->
                    <center><a href='/?trigger=1'><img src ="websiteassets/icon.jpg" style="width:200px;height:200px;margin-top: 5px"/></a></center>
 
                </article>
            </div> 
        </div>
    </body>
</html>
 
