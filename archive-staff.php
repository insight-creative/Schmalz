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
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
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
            <?php
            $args = array(
                'post_type'      => 'Staff',
                'posts_per_page' => -1,
                'order'          => 'ASC'
            );

            $staff = new WP_Query( $args );
            if ( $staff->have_posts() ) : ?>
                <?php while ( $staff->have_posts() ) : $staff->the_post(); ?>
                <?php 
                $featuredImage = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                $img_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); 
                ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="service-card">
                    <div class="service-card__image-wrapper">
                        <img src="<?php echo $featuredImage ?>" alt="<?php echo $alt_text ?>" class="service-card__image">
                        <div class="service-card__view-gallery-overlay">
                            <span>View Bio</span>
                        </div>
                    </div>
                    <h3 class="text-center g6 service-card__title"><?php the_title(); ?></h3>
                </a>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            </div>
            <!-- <div class="container padding-top-50">
                <h3>Foreman and Crew</h3>
                <p>
                Our talented and dedicated installation teams are experts in their respective areas and bring a close attention to detail to each job. With more than 10 crews, Schmalz is fully staffed to ensure your project is completed as quickly and efficiently as weather permits.
                </p>
                <h3>Garden Center Team</h3>
                <p>
                    Our Garden Center team is helpful, knowledgeable and sincere in their desire to help our customers maximize their efforts in their gardens. We are waiting to help you realize your outdoor dreams!
                </p>

                <h4>Andrew Johnson, Garden Center Manager</h4>
                <p>
                    Andrew has been gardening and landscaping since he was a child. Andrew is passionately dedicated to the outdoors and enjoys talking to people about their landscaping needs—especially when it comes to the vast variety of trees and shrubs that are currently offered at the Schmalz Garden Center.
                </p>
                <h4>Our entire Garden Center team is at your service all season long:</h4>
                <p>Jim Lemmers, Assistant Manager – Lead Designer</p>

                <p>Dana Siebers, Assistant Manager</p>

                <p>Deb Goetz, Front End Lead/Customer Service</p>
                <h3>Administrative Staff</h3>
                <h4>Millie Schroeder, Perennial Manager</h4>
                <p>
                    Millie studied at NWTC and worked at Green Bay Botanical Gardens. She has been with Schmalz since 1993, serving as a perennial manager purchasing beautiful, healthy plants for landscape projects and for the retail Garden Center. From spring to fall she maintains supplies for both divisions of the business and takes pride in obtaining the most outstanding plants that will last an indefinite amount of time and offer years of enjoyment for Schmalz customers.
                </p>
                <h4>Jon King, Buyer</h4>
                <p>
                In his 22 years of working at Schmalz Jon has earned several promotions and has risen steadily through the ranks. Now, in his capacity as Green Goods Buyer, he places particular emphasis on sourcing an ever-growing list of new plants for our customers to feature in their unique landscapes, as well as finding new disease-resistant varieties of plants that promise to offer enjoyment for many years.
                </p>
                <h4>Donna Schmalz, Vice-President</h4>
                <h4>Lee St. John, Accounting</h4>
            </div> -->
		</div>
        <?php get_template_part( '/template-parts/careers-cta' ); ?>
	</main>
</div>
<?php
get_footer();
