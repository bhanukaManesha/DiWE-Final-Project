
<header class="mdl-layout__header mdl-layout__header--transparent animated fadeIn" >
	
		<div class="mdl-layout__header-row">
		  <!-- Title -->
		  <a href="index.php"class="mdl-layout-title mdl-navigation__link" style="text-decoration: none;">SAMAN GAMAGE CIVIL ENGINEERS AND CONTRACTORS</a>
		  
		  <!-- Add spacer, to align navigation to the right -->
		  <div class="mdl-layout-spacer"></div>
		  
		  
		  <!-- Navigation -->
		  <nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="aboutus.php" style="text-decoration: none;">ABOUT US</a>
			<a class="mdl-navigation__link" href="projects.php" style="text-decoration: none;">PROJECTS</a>
			<?php
			  if (isset($_SESSION['username'])){
			  ?>
			<a class="mdl-navigation__link" style="text-decoration: none"><?php echo strtoupper($_SESSION['username']) ?></a>
			<button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
			  <i class="material-icons">more_vert</i>
			  </button>
			<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
               
               <?php  
				 if ($_SESSION['role'] === "Admin") { 
				?>
               
                <a class="mdl-menu__item" href="admin/index.php" style="text-decoration: none;">Admin Panel</a>
                <?php 
					  
				}else{
					
				?>
                <a class="mdl-menu__item" href="client/index.php" style="text-decoration: none;">My Project</a>
                
                <?php
					  
                }
												 
				?>
				
                
				<li role="separator" class="divider"></li>
				<a href="loginform/logout.php" class="mdl-menu__item" style="text-decoration: none;">Logout</a>
			  </ul>
			  <?php }else{
			  ?>
			  
			  <a class="mdl-navigation__link" href="loginform/index.php" style="text-decoration: none;">LOG IN</a>
			  
			  <?php }?>
		  </nav>
		</div>
 </header>
  <div class="mdl-layout__drawer">
    
    
    <?php
		if (isset($_SESSION['username'])){
		?>
		  		<img src="images/profile.png" class="circular--square" style="width: 70%; margin: auto; margin-top: 20px; margin-bottom: 20px">
			  <p class="" style="font-size:14px;margin-left:20px;display: block;"><?php echo $_SESSION['email']?></p>
    
    <?php }else{ ?>
    
    <span class="mdl-layout-title">NAVIGATION</span>
    <?php }?>
    
    <nav class="mdl-navigation">
        
        <?php
			  if (isset($_SESSION['username'])){ 
               
               if ($_SESSION['role'] === "Admin") { 
					 
				?>
               
                <a class="mdl-navigation__link" href="admin/index.php" style="text-decoration: none"><i class="material-icons" style="margin-right: 20px;text-decoration: none;">account_balance</i>ADMIN PANEL</a>
                <?php 
					  
				}else{
					
				?>
                <a class="mdl-navigation__link" href="client/index.php" style="text-decoration: none"><i class="material-icons" style="margin-right: 20px;text-decoration: none;">account_balance</i>MY PROJECT</a>
                
                <?php
					  
                }
			  }
			?>
		
    	
     <a class="mdl-navigation__link" href="index.php" style="text-decoration: none"><i class="material-icons" style="margin-right: 20px;text-decoration: none;">home</i> HOME</a>
      <a class="mdl-navigation__link" href="aboutus.php" style="text-decoration: none"><i class="material-icons" style="margin-right: 20px;text-decoration: none;">business</i>ABOUT US</a>
      <a class="mdl-navigation__link" href="projects.php" style="text-decoration: none"><i class="material-icons" style="margin-right: 20px;text-decoration: none;">build</i>PROJECTS</a>
      <?php
			if (isset($_SESSION['username'])){ ?>
				<a class="mdl-navigation__link" style="text-decoration: none" href="loginform/logout.php"><i class="material-icons" style="margin-right: 20px;text-decoration: none;">eject</i>LOG OUT</a>  
      <?php }else{ ?>
      	<a class="mdl-navigation__link" style="text-decoration: none" href="loginform/index.php" ><i class="material-icons" style="margin-right: 20px;text-decoration: none;">input</i>LOG IN</a>
      <?php }?>
     
    </nav>
  </div>
 