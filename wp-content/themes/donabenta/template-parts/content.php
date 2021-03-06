<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package donabenta
 */

?>
<?php

$category = get_the_category();
$parentcat = get_cat_name($category[0]->category_parent);
$parentID = $category[0]->parent;
$postid = get_the_ID();
$post_title = get_the_title($postid);
$category_link = get_category_link( $parentID );
$thiscat = get_category( get_query_var( 'cat' ) );
// $catid = $thiscat->cat_ID;
// $parent = $thiscat->category_parent;

$args = array( 'category' => $parentID, 'post_type' =>  'post', 'posts_per_page'   => -1 );
$postslist = get_posts( $args );

?>
<article id="interna" <?php post_class(); ?>>
<div class="container">
   <!-- Static navbar -->
      <nav class="navbar navbar-default" id="menu-mobile">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Lista de Bares</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <?php   foreach ($postslist as $post) :  setup_postdata($post);
                        $subpost_title = get_the_title($post->ID);
              ?>
                  <li <?php if($postid == $post->ID){echo 'class="active"';} ?>><a href="<?php if($postid == $post->ID){echo '#';}else{the_permalink();}  ?>"><?php echo strtolower($subpost_title); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  <div class="breadcrumb col-md-12 text-left">
      <p><a href="/" class="tt">HOME</a> / <a href="<?php echo esc_url( $category_link ); ?>" class="tt"><?php echo $parentcat; ?></a> / <a href="#"><?php echo $post_title?></a> </p>
  </div>


  <div class="categoria col-md-12 text-center">
      <h1><?php echo $parentcat; ?>  </h1>
  </div>

  <div class="sidebar col-md-2">

      <div class="subcat-list">
          <ul>
              <?php   foreach ($postslist as $post) :  setup_postdata($post);

              $subpost_title = get_the_title($post->ID);

               ?>

                <li>
                  <a href="<?php if($postid == $post->ID){echo '#';}else{the_permalink();}  ?>" <?php if($postid == $post->ID){echo 'class="current"';} ?>><?php echo strtolower($subpost_title); ?></a></li>
                <?php endforeach; ?>
           </ul>
      </div>
  </div>

<div class="col-md-offset-1 col-md-9">
    <div class="col-md-12">
      <h1 class="entry-title"><?php echo $post_title?></h1>
      <div class="contact">
          <?php if( get_field('endereco', $postid) ): ?><p><?php the_field('endereco', $postid); ?></p><?php endif; ?>
          <?php if( get_field('cidade', $postid) ): ?><p><?php the_field('cidade', $postid); ?></p><?php endif; ?>
          <?php if( get_field('telefone', $postid) ): ?><p><?php the_field('telefone', $postid); ?></p><?php endif; ?>
      </div>
      <h3><?php the_field('nome_do_prato', $postid); ?></h3>

    </div>
    <div class="col-md-6">
        <?php if( get_field('ingredientes', $postid) ): ?>

          <div class="info ingredientes">
            <h2>Ingredientes:</h2>
            <?php the_field('ingredientes', $postid); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <?php if( get_field('modo_de_preparo', $postid) ): ?>

          <div class="info modo_de_preparo">
            <h2>Modo de Preparo:</h2>
            <?php the_field('modo_de_preparo', $postid); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="col-md-12">
        <div class="info exta_content">

         <?php if( get_field('tempo_de_preparo', $postid) ): ?>
            <h2>Tempo de preparo:</h2>
            <p><?php the_field('tempo_de_preparo', $postid); ?></p>
         <?php endif; ?>

         <?php if( get_field('rende', $postid) ): ?>
           <h2>Rendimento :</h2>
            <p><?php the_field('rende', $postid); ?></p>
          <?php endif; ?>


         <?php if( get_field('porque', $postid) ): ?>
            <h2>História / Inspiração:</h2>
            <p><?php the_field('porque', $postid); ?></p>
         <?php endif; ?>


          <!-- <?php the_content(); ?> -->
        </div>
    </div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
