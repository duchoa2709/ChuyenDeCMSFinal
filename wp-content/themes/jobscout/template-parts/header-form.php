<?php
/**
 *
 * Creating a custom job search form for homepage
 * The [jobs] shortcode is will use search_location and search_keywords variables from the query string.
 *
 * @link https://wpjobmanager.com/document/tutorial-creating-custom-job-search-form/
 *
 * @package JobScout
 */
$find_a_job_link = get_option( 'job_manager_jobs_page_id', 0 );
$post_slug       = get_post_field( 'post_name', $find_a_job_link );
$ed_job_category = get_option( 'job_manager_enable_categories' );  

if( $post_slug ){
    $action_page =  home_url( '/'. $post_slug );
} else {
    $action_page =  home_url( '/' );
}

function getAllLocation(){
	global $wpdb;

	$meta_data = $wpdb->get_results("SELECT post_id, meta_key, meta_value FROM {$wpdb->postmeta} WHERE meta_value NOT LIKE '%San Carlos, CA%' ORDER BY meta_value DESC");
	
	if ($meta_data) {
	   
		foreach ($meta_data as $meta) {
			if($meta->meta_key == "_job_location")
			{
				$meta_value = $meta->meta_value;
echo '<option value="' . esc_attr($meta_value) . '">' . esc_html($meta_value) . '</option>';

			}
		}
	} else {
		$meta_value =  "No postmeta data found in the wp_postmeta table.";
	}
	echo $meta_value;
}

?>
<style>
.banner-caption .jobscout_job_filters .search_jobs div.search_keywords {
    display: unset;
}

.banner-caption .jobscout_job_filters .search_jobs div.search_keywords,
.banner-caption .jobscout_job_filters .search_jobs div.filter_last,
.banner-caption .jobscout_job_filters .search_jobs div.search_location {
    align-items: center;
}

.banner-caption .jobscout_job_filters .search_jobs {
    border-radius: 0px;
}

.search_home {
    padding: 20px;
    background-color: rgba(46, 46, 46, 0.5);
}

.banner-caption .jobscout_job_filters .search_jobs input[type="submit"] {
    padding: 0;
    width: 80px;
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: center;
    text-indent: 90px;
    overflow: hidden;
    border-left: 1px solid rgba(0, 0, 0, 0.1);
}

.banner-caption .jobscout_job_filters .search_jobs input[type="submit"]:hover {
    background-color: #fff;
}

button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
    border: none;
    background: none;
    white-space: nowrap;
    color: #fff;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
    background: #b95307;
    color: #fff;
}

.banner-caption .caption-inner {
    max-width: 1280px;
    margin-left: auto;
    margin-right: auto;
}

.gridForm {
    display: grid;
    grid-template-columns: 6fr 3fr 1fr;
    gap: 10px;
}

.job-manager-category-dropdown:focus {
    outline: none;
}
</style>
<div class="job_listings">
    <form class="jobscout_job_filters" method="GET" action="<?php echo esc_url( $action_page ) ?>">
        <div class="search_jobs">
            <div class="w-full flex search_home gridForm">
                <div class="search_keywords pl-4 w-3/5">
                    <div class="flex bg-white items-center px-5 border-2">
                        <label for="search_keywords"><?php esc_html_e( 'Keywords', 'jobscout' ); ?></label>
                        <i class="fa-solid fa-magnifying-glass" style="color: #ea751e;"></i>
                        <input type="text" id="search_keywords" name="search_keywords"
                            placeholder="<?php esc_attr_e( 'Keywords', 'jobscout' ); ?>">
                    </div>
                </div>

                <div class="search_location w-1/5">
                    <div class="flex bg-white w-full items-center px-5 border-2">
                        <img src="./wp-content/uploads/2023/11/location.png" alt="" class="w-6 h-6 items-center">
                        <label for="search_location"><?php esc_html_e('Location', 'jobscout'); ?></label>

                        <select id="search_location" name="search_location"
                            class="job-manager-category-dropdown border-l-0 ">
                            <?php getAllLocation(); ?>
                        </select>
                    </div>
                </div>

                <div class="search_submit w-1/5">
                    <button class="px-8 font-bold text-center bg-[#ea751e] rounded-none border-2" type="submit"
                        value="<?php esc_attr_e( 'Search', 'jobscout'); ?>">SEARCH JOB</button>
                </div>
            </div>
        </div>
    </form>
</div>