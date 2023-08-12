<?php 

/** 
 * Page: ERC
 */

$content = new Content_Sections();
k1_enqueue_page_style('employeeRetentionCredit');
?>
<section class="calculator">
    <h3 class="color-erc-purple text-center">Estimate Your Employee Retention Credit Today!</h3>
    <p class="text-center">We’re so glad you’re interested in learning more about the Employee Retention Credit available <br> to you through the Federal Government. Please complete this brief form so our ERC Team can <br> connect with you for your next step in the ERC process.</p>
    <!-- ERC Calculator -->
</section>

<section class="erc_comparisons">
	<?php $content->get_color_background_layers( 'erc_comparisons', 'right', array( 'erc-comparisons-bg', 'webp' ) ); ?>
	<div class="container erc_comparisons__content position-relative z-2 py-5">
		<div class="row my-5">
			<div class="col">
				<h2 class="headline color-spark-yellow">what is erc?</h2>
			</div>
			<div class="d-none d-md-block col-1">
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
		</div>
		<div class="row">
			<p class="h4 text-white">At Kingdom One we are driven by building meaningful relationships that help your organization become Courageous, Healthy, and Effective. There are several options for transactional solutions, but very few organizational advocates that will partner with the complexities of your unique situation. Here is what sets Kingdom One apart from other ERC partners:</p>
            <div class="row text-center">
                <div class="col-2"></div>
                <div class="col-4">
                    <p class="text-center color-erc-blue">Kingdom One ERC+</p>
                    <ul class="text-white">
				        <li>Financial AND Ministry Professionals</li>
				        <li>Relational</li>
				        <li>Fees: Capped at 5%</li>
				        <li>2 Hrs Finance/Accounting Consulting</li>
				        <li>2 Hrs Human Resources Consulting</li>
                        <li>4-Wk Transformational Finance Cohort</li>
                        <li>4-Wk Healthy Staff Culture HR Cohort</li>
                        <li>Free Admission to K1 Events in 2023</li>
			        </ul>
                </div>
                <div class="col-4">
                    <p class="text-center color-grey">Others ERC</p>
                    <ul class="text-white">
				        <li>Financial Professionals</li>
				        <li>Transactional</li>
				        <li>Fees: Upwards of 20%</li>
				        <li>Additional Charge</li>
				        <li>Not Available</li>
                        <li>Not Available</li>
                        <li>Not Available</li>
                        <li>Not Available</li>
			        </ul>
                </div>
            </div>
            <div class="text-center"><?php $content->cta_button(); ?></div>
		</div>
	</div>
</section>

<?php get_template_part(
		'template-parts/content',
		'equipment',
		array(
			'with_header' => true,
			'header_args' => array(
				'headline'    => 'what are your next steps?',
				'subheadline' => "",
			),
		)
	);
	?>