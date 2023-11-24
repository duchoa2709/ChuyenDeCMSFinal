<?php
/**
* Blog Section
*
* @package JobScout
*/


$blog_heading = get_theme_mod( 'blog_section_title', __( 'NEWEST BLOG ENTRIES', 'jobscout' ) );
$sub_title    = get_theme_mod( 'blog_section_subtitle', __( 'We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout' ) );
$blog         = get_option( 'page_for_posts' );
$label        = get_theme_mod( 'blog_view_all', __( 'See More Posts', 'jobscout' ) );
$hide_author  = get_theme_mod( 'ed_post_author', false );
$hide_date    = get_theme_mod( 'ed_post_date', false );
$ed_blog      = get_theme_mod( 'ed_blog', true );


$args = array(
   'post_type'           => 'post',
   'post_status'         => 'publish',
   'posts_per_page'      => 4,
   'ignore_sticky_posts' => true
);










$qry = new WP_Query( $args );


if( $ed_blog && ( $blog_heading || $sub_title || $qry->have_posts() ) ){ ?>
<section class="bg-gray-200">
    <div class="container mx-auto p-10 ">

        <div class="text-center">
            <?php
           if( $blog_heading ) echo '<h2 class="text-4xl font-bold my-5">' . esc_html( $blog_heading ) . '</h2>';
           // if( $sub_title ) echo '<div class="section-desc">' . wpautop( wp_kses_post( $sub_title ) ) . '</div>';
       ?>

<!-- 
<?php
        // $content = get_the_content();
        // $first_character = mb_substr($content, 0, 1);
        // echo $first_character;
        ?> -->


        </div>
        <?php if( $qry->have_posts() ){ ?>
        <div class="article-wrap  grid grid-cols-2 gap-4" >
            <?php
               while( $qry->have_posts() ){
                   $qry->the_post(); ?>
            <?php
                              if (has_post_thumbnail()) {
                               $thumbnail_id = get_post_thumbnail_id();
                               $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                            
                           }
                              ?>
            <div class="p-4 w-full flex bg-white m-3 ">
                <div class="w-1/2 h-full ">
                    <a href="<?php the_permalink(); ?>">
                        <img class="w-full h-full" src="<?php echo  $thumbnail_url ?>" alt="">
                    </a>
                </div>
                <div class="h-full w-1/2 p-2 flex flex-col pl-5 ">
                <div>
    <h1 class="font-bold text-2xl mb-4"><?php the_title(); ?>!</h1>
    <div class="content_text text-base line-clamp-1">
        <?php
        $trimmed_content = wp_trim_words( get_the_content(), 1, '' );
        echo $trimmed_content;
        ?>
    </div>
</div>

                    <div class="text-[#eb8538] font-bold text-base mt-3 ">
                        <a href="<?php the_permalink(); ?>" href="">Read More</a>
                    </div>
                </div>

            </div>

            <?php
               }
               wp_reset_postdata();
               ?>
        </div><!-- .article-wrap -->

        <!-- <?php if( $blog && $label ){ ?>
               <div class="btn-wrap">
                   <a href="<?php the_permalink( $blog ); ?>" class="btn"><?php echo esc_html( $label ); ?></a>
               </div>
           <?php } ?> -->

        <?php } ?>



    </div>
</section>
<?php
}