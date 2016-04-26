<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=description content="Trial task">
        <meta name=keywords content="HTML, CSS, JavaScript, ajax, php">        
        <meta name=author content="Gaurav Kakkar">
        
        <title>Pixelter - Frontend trial task</title>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- Stylesheets: [Fonts, Bootstrap, style.css ] -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">        

        <!-- javascript: [jQuery, Bootstrap, script.js ] -->
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="js/script.js" type="text/javascript"></script>

        <?php 
            // Products
            $products = array(
                array('Lexi Lace Crop Top', '$25'),
                array('Paint It Red Seeker Shorts', '$18'),
                array('Miranda Lace Hi Low Skirt', '$108')
            );
        ?>

    </head>
    
    <body>
        
        <header id="site-header" class="site-header navbar navbar-default" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12 brand">
                        <h1><a href="#" title="Pixelter - Frontend trial task">Pixelter - Frontend trial task</a></h1>
                        <a href="#" id="nav-toggle">Menu</a>
                    </div><!-- .brand -->
                    
                    <div class="col-sm-9 col-xs-12 main-menu">                        
                        <nav role="navigation">
                            <ul class="nav navbar-nav navigation">
                                <li><a href="#" role="presentation" title="Tops">Tops</a></li>
                                <li><a href="#" role="presentation" title="Dresses">Dresses</a></li>
                                <li><a href="#" role="presentation" title="Bottoms">Bottoms</a></li>
                                <li><a href="#" role="presentation" title="Outerwear">Outerwear</a></li>
                                <li><a href="#" role="presentation" title="Swimwear">Swimwear</a></li>
                                <li><a href="#" role="presentation" title="Sleepwear">Sleepwear</a></li>
                            </ul>
                        </nav>
                    </div><!-- .main-menu -->
                </div>
            </div>
        </header><!-- #site-header -->        
          
        <section class="product-listings">                     
          <div class="container">
              <div class="row">
                  <h2 class="section-title">Products</h2>
                  <?php  
                    // looping through products
                    foreach ($products as $index => $product) {
                  ?>
                  
                    <article class="col-sm-4 col-xs-12 product"  itemscope itemtype="http://schema.org/Product">
                        <div class="product-info">
                            <a class="product-link" id="prod-<?php echo $index; ?>" href="#" itemprop="url" title="<?php  echo $product[0]; ?>">
                                <h3 class="product-title" itemprop="name" ><?php echo $product[0]; ?></h3>
                                <span class="price" itemprop="price"><?php echo $product[1]; ?></span> 
                            </a><!-- .product-link -->
                        </div><!-- .product-info -->
                    </article><!-- .product -->                    
                  <?php } ?>
                  
              </div>
          </div>                    
        </section><!-- .product-listings -->   
                
        <footer id="site-footer" class="site-footer " role="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright">
                            <p>Pixelter - Frontend trial task</p>
                        </div><!-- .copyright -->
                    </div>
                </div>
            </div>            
        </footer><!-- .site-footer -->
        
    </body>
</html>        