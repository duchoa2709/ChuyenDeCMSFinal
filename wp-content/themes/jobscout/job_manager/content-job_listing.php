<?php
/**
* Job listing in the loop.
*
* This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
*
* @see         https://wpjobmanager.com/document/template-overrides/
* @author      Automattic
* @package     WP Job Manager
* @category    Template
* @since       1.0.0
* @version     1.27.0
*/


if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
}


global $post;
$job_salary   = get_post_meta( get_the_ID(), '_job_salary', true );
$job_featured = get_post_meta( get_the_ID(), '_featured', true );
$company_name = get_post_meta( get_the_ID(), '_company_name', true );


?>
<style>

.google_map_link {
    text-decoration: none!important;
}

</style>

<article <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>"
    data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">

    <div class="flex flex-col">
        <div class="flex">
            <div>
                <figure class="company-logo border border-gray-500">

                    <?php the_company_logo( 'thumbnail' ); ?>
                </figure>
            </div>
            <div class="pl-5">
                <div class=" ">
                    <div>
                        <p class="text-base font-bold"><?php wpjm_the_job_title(); ?><br> <span
                                class="text-[10px]  text-gray-400 font-normal ">Created. <?php echo get_the_job_publish_date(); ?></span></p>
                    </div>
                </div>
                <div class="w-fit bg-[#eeeeee] flex rounded">
                    <div class=" item flex h-6 items-center px-2">
                        <div
                            class="text-[10px]  justify-center flex items-center font-light  p-1 w-full h-10  text-center">
                            <p
                                class="text-black border-gray-300 whitespace-nowrap">
                                <?php echo get_the_company_name(); ?></p>
                        </div>
                        <div
                            class="text-[10px]  justify-center flex items-center font-light  p-1 w-full  h-10  text-center">
                            <p
                                class="text-black border-gray-300 whitespace-nowrap border-x-[1px] px-3">
                                <?php echo get_the_company_tagline(); ?></p>
                        </div>
                        <div class="text-[10px] justify-center flex items-center font-light  p-1 w-full h-10 text-center">
                            <p
                                class=" text-black border-gray-300 whitespace-nowrap">
                                <?php the_job_location( true ); ?></p>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="p-1 ml-[10px]">
            <h1
                class=" py-[3px] before:content-[''] before:w-1 before:h-1  before:bg-black before:absolute before:rounded-full before:mt-[10px]  before:-ml-[10px] ">

                <?php 
				do_action( 'job_listing_meta_start' ); 

				if( $job_salary ){
                    echo '<div class="salary-amt">
                        <span class="salary text-xs text-black-300  ">'. ( $job_salary ) .'</span>
                    </div>';
                }
			?>

            </h1>
            <h1
                class="py-[3px] before:content-[''] before:w-1 before:h-1  before:bg-black before:absolute before:rounded-full before:mt-[7px]  before:-ml-[10px]   text-xs  ">
                <div class="company-address">
                    <p class="text-xs text-black-300"><?php the_job_location( true ); ?> </p>
                </div>
            </h1>

            <h1
                class=" py-[3px] before:content-[''] before:w-1 before:h-1  before:bg-black before:absolute before:rounded-full before:mt-[7px]  before:-ml-[10px]  text-black-300   ">
                <div class="company-address">
                    <p class="text-xs text-black-300"><?php the_job_publish_date(); ?> </p>
                </div>
            </h1>
            <h1
                class=" py-[3px] before:content-[''] before:w-1 before:h-1  before:bg-black before:absolute before:rounded-full before:mt-[7px]  before:-ml-[10px]  text-black-300   ">
                <div class="company-address">
                    <p class="text-xs text-black-300"> <?php echo get_the_company_tagline(); ?></p></p>
                </div>
            </h1>
        </div>
    </div>






    <?php if( $job_featured ){ ?>
    <div class="featured-label"><?php esc_html_e( 'Featured', 'jobscout' ); ?></div>
    <?php } ?>


</article>