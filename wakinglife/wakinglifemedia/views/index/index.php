
<center>
    <nav>
    <div id="topnav_white_layer">
    <input type="checkbox" id="navbar-checkbox" class="navbar-checkbox" />
    		<div id="topnav_menu">
 <script type="text/javascript">
	
	function allshow()
	{
		$('.Entertainment').show();
		$('.Magazine').show();
		$('.Interview').show();
		$('.Events').show();
		$('.Music').show();
	}
	function musicshow()
	{
		$('.Entertainment').hide();
		$('.Magazine').hide();
		$('.Interview').hide();
		$('.Events').hide();
		$('.Music').show();
	}
	
	function entertainmentshow()
	{
		$('.Entertainment').show();
		$('.Magazine').hide();
		$('.Interview').hide();
		$('.Events').hide();
		$('.Music').hide();
	}
	
	function magazineshow()
	{
		$('.Entertainment').hide();
		$('.Magazine').show();
		$('.Interview').hide();
		$('.Events').hide();
		$('.Music').hide();
	}
	
	function interviewshow()
	{
		$('.Entertainment').hide();
		$('.Magazine').hide();
		$('.Interview').show();
		$('.Events').hide();
		$('.Music').hide();
	}
	
	function eventshow()
	{
		$('.Entertainment').hide();
		$('.Magazine').hide();
		$('.Interview').hide();
		$('.Events').show();
		$('.Music').hide();
	}
	</script>           



<label for="navbar-checkbox" class="navbar-handle" style="display:in-block;width:100%; margin:0; padding:0; text-align:left; visibility:visible;"><div style="width:25%; display:inline-block; vertical-align:middle"><img src="images/logo.png" height="60px" width="60px"/></div><div style=" display:inline-block; width:55%; vertical-align:middle"><font color="white">Waking</font> <font color="red">Life</font> <font color="white">Magazine</font></div><div style=" vertical-align:middle; display:inline-block;width:20%; height:55px; padding:0; margin:0; background-color:red;"><div style=" display:inline-block; vertical-align:middle; margin:auto; width:100%; text-align:center; margin-top:15px;"><font color="black"> Menu </font></div></div></label>


   			<ul>
            	<a href = "javascript:void(0)" onClick="musicshow();">
                <li >
                Music
                </li>
                </a>
                
               <a href = "javascript:void(0)" onClick="entertainmentshow();">
                <li>
                Entertainment
                </li>
                </a>
                
                <a href = "javascript:void(0)" onClick="magazineshow();">
                <li>
                Magazine
                </li>
                </a>
                
                <a href = "javascript:void(0)" onClick="interviewshow();"><li>
                Interviews
                </li>
                </a>
                
                <a href = "javascript:void(0)" onClick="eventshow();">
                <li>
                Events
                </li>
                </a>
                
                <a href = "javascript:void(0)" onClick="allshow();">
                <li>
                All
                </li>
                </a>
            </ul>
            </div>
            
    	
    </div>
    </nav>
    </center>
    
    <section class="articles" id="music_articles">
			
			<div id="music_articles_container">
<ul id="article-list">
<?php
foreach($arg as $row)
{
?>

	<li class="<?php echo $row['Category'];?>">
                
                <a href="post/readpost/<?php echo $row['id'];?>">
                <div class="article gif_bg"  style="background-image:url(<?php echo(URL . 'public/images/'. $row['image']);?>)">
                <p><?php echo $row['title'];?></p>
                <hr/>
                <span><?php echo $row['Category'];?></span>
                </div>
                </a>
                </li>
                <?php };?>
</ul>
</div>
</section>
