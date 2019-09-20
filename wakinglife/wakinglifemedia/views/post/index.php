<head>
<link rel="stylesheet" href="<?php echo URL;?>public/css/article_styles.css" />

</head>
<header>
		
		<a href="<?php echo URL;?>index">
		<nav>Go Back</nav>
		</a>
		
	</header>
<article>
		
		<section>
        
        <h1><?php echo $arg['title'];?></h1>
			
			<hr/>
            <p align="center"><img src="<?php echo URL.'public/images/'.$arg['image'];?>" width="300px"/></p>
            
            <p><?php echo $arg['body'];?></p>
            </section>
            </article>
