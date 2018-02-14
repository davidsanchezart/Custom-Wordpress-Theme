<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project Wizbang: An RPM experience</title>
    
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,500,600" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>=
      <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>





    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
        <?php wp_enqueue_script("../js/navanimations.js"); ?>


    <?php wp_head(); ?>
    
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?> </title>
  </head>
  <body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      
      <div id="logoContainer" class="brand">
        <img src="http://localhost/wp-content/uploads/2017/09/RPM_LOGO.svg" class="BGshard-Top" id="BGshard-Top">
  
      </div> <!--/<div id="logoContainer" class="brand">-->

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo site_url(); ?>">

      



      </a>
          <div class="nav-collapse collapse">
        
            <ul class="nav">

              <?php wp_list_pages(array('title_li' => '')); ?>
                <!-- Button trigger modal -->
                  <li class="page-item">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      CONTACT
                    </button>

                  </li>

            </ul>

                        

           </div><!--/.nav-collapse <div class="nav-collapse collapse">-->

</div> <!--/.nav-collapse <div class="navbar navbar-inverse navbar-fixed-top">-->
  </div> <!--/.nav-collapse <div class="navbar-inner">>-->
    </div> <!--/.nav-collapse <div class="container">-->






  



  <!--/ <?php bloginfo('name'); ?> !-->

<<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

