<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=get_option('blogname');?></title>
    <script
      src="https://kit.fontawesome.com/f14b07e4b8.js"
      crossorigin="anonymous"
    ></script>

    <?php wp_head();?>
</head>
<body>
    
    <?php wp_body_open(); ?>
    <header>
        <div class="nav-container">
        <div class="column">
            <a href="/">
            
            <img class="logo" src="<?=get_template_directory_uri() . '/assets/images/gassed.png';?>" alt="logo">
            </a>
        </div>
        <div class="column">
            <a href="/"><h1>GASSED.SE</h1></a>
        </div>
        <div class="column">
        <a class="search-button" href="">
        <i class="fa-solid fa-magnifying-glass"></i>
        </a>
        <div class="search-holder">
        <?php get_product_search_form(); ?>
        </div>
        <a href=""><i class="fa-solid fa-user"></i></a>
        <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
           
        </div>
        </div>
    </header>