<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package InsightCustom
 */

get_header();
?>
<?php get_template_part( '/template-parts/about-hero' ); ?>
<div class="content-area">
    <main id="main-content" tabindex="-1" class="site-main" role="main">
		<div class="main-content">
            <div class="bg-light padding-top-50 padding-bottom-200">
                <div class="container">
                    <h2>Our history and staff make all the difference</h2>
                    <h3>Kenneth R. “Kenny” Schmalz, Founder</h3>
                    <p>
                    Kenneth R. Schmalz was born and raised at the original Lake Park Tavern in Menasha. Witnessing construction on the nearby F.J. Sensenbrenner Estate and North Shore Country Club—including many gardens, waterfalls, trout ponds, and other unique landscape features designed by Fronz Lipp—sparked his early interest in landscaping.
                    </p>
                    <p>
                    Prior to World War II he worked as greens keeper at North Shore, continuing to broaden his knowledge and strengthen his passion for the profession. After flying B-17s in WWII, he attended the University of Wisconsin-Madison on the GI Bill where he graduated Magna Cum Laude and was a member of Alpha Zeta. Kenny started Schmalz Custom Landscaping in 1949 and, over 65 years later, his vision for the company remains vital to the organization.
                    </p>
                    <p>
                    Kenny was also the founder of Ken R. Schmalz Land Surveying and the Ken Schmalz Orchestra, as well as teaching home landscaping at Fox Valley Technical College. He was also an active member of the Wisconsin Landscape Federation and made his name and company known throughout the area.
                    </p>
                </div>
            </div>
            <div class="image-three-wide flex flex-column flex-row-m">
            <?php 
            $gallery = get_field( 'featured_images_section', 'option' );
            $size = 'medium';

            if( $gallery ):
                foreach( $gallery as $image ): ?>
                    <?php echo wp_get_attachment_image( $image, $size );
                endforeach;
            endif;
            ?>
            </div>
            <div class="container padding-top-50">
                <h3>Meet the Schmalz team</h3>
                <p>
                Our family is proud to have built a reputation that has earned the <em>Best Of the Valley</em> award year after year. When you visit our full service <a href="https://schmalzgardencenter.com/" target="_blank" rel="noreferrer">Garden Center</a>, or work with any of our 19 installation crews, you’ll appreciate the warmth and respect shown by each staff member. It’s this sense of community that has kept Schmalz Custom Landscaping & Garden Center the preferred landscape company in the Fox Cities for more than 65 years.
                </p>
            </div>
            <div class="container padding-top-50">
                <h3>Architects and Designers</h3>
            </div>
            <div class="image-grid-container container">
                <?php get_template_part('template-parts/staff-feed'); ?>
            </div>
		</div>
        <?php get_template_part( '/template-parts/careers-cta' ); ?>
	</main>
</div>
<?php
get_footer();
