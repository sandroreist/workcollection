<!DOCTYPE HTML>

<html>
	<head>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
        
        <meta charset="UTF-8">
        <meta name="description" content="Sandro Reist Workbook">

        <title>Sandro Reist Workbook</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <!--<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font.css" type="text/css" media="screen">
        <link href="css/lightbox.css" rel="stylesheet">

        <script src="js/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>-->
        <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/js.js" type="text/javascript" charset="utf-8"></script>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
	</head>


	<body>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
          <h3>Menu</h3>
          <a href="#">Celery seakale</a>
          <a href="#">Dulse daikon</a>
          <a href="#">Zucchini garlic</a>
          <a href="#">Catsear azuki bean</a>
          <a href="#">Dandelion bunya</a>
          <a href="#">Rutabaga</a>
      </nav>


		<header class="clearfix">
			<!--<nav>
				<ul class="clearfix">
					<li><a href="#">Navigationspunkt 1</a></li>
					<li><a href="#">Navigationspunkt 2</a></li>
					<li><a href="#">Navigationspunkt 3</a></li>
					<li><a href="#">Navigationspunkt 4</a></li>
				</ul>
			</nav>-->

      <i id="showRight" class="fa fa-bars menuicon" aria-hidden="true"></i>

      
  	</header>

      <div class="section0">
      </div>

  		<div class="section section1">
  			<div class="content">
          <h1>Sandro Reist</h1>
  				<p>Ich heisse Sandro und bin Mediamatiker im ZEM. Dies soll mein eigenes Wordpress-Template werden, da ich sowieso mal ein eigenes machen möchte. Cool. </p>
  			</div>
  		</div>

		
		
		
      <script>
        var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
            showRight = document.getElementById( 'showRight' ),
            body = document.body;
      
        showRight.onclick = function() {
          classie.toggle( this, 'active' );
          classie.toggle( menuRight, 'cbp-spmenu-open' );
          disableOther( 'showRight' );
        };
      
        function disableOther( button ) {
          
          if( button !== 'showRight' ) {
            classie.toggle( showRight, 'disabled' );
          }   
        }
      </script>

		

	</body>
</html>