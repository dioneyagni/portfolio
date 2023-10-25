
<!DOCTYPE html>
<html lang="pt-br">

<?php 
    require "components/head.php";
?>


<body class="hidden hidden-ball smooth-scroll hero-below-caption" data-primary-color="#ff0000">

	
	<main>		
        <!-- Preloader -->
        <?php require "components/preloader.php"; ?>
        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="page-content" class="dark-content" data-bgcolor="#fff">
            
            <!-- Header -->
            <?php require "components/header.php"; ?>
            <!--/Header -->
            
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <?php require "pages/home.php"; ?>
                <!--/Main -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
            
            <!-- Showcase Stagger Footer --> 
            <?php require "components/showcase-menu.php"; ?>
            <!--/Showcase Stagger Footer -->
            
            
            <div id="app"></div>
            
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>
    
    
    
    
    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image">
    	<div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>
    
    
		
    <?php require "components/js.php"; ?>



</body>

</html>