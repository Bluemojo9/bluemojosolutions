<?php

namespace Elementor;

class Techlon_Progress_Bar_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_progress_bar';

	}

	public function get_title() {

		return esc_html__('Techlon Progress Bar','techlon-core');

	}

	public function get_icon() {

		return 'eicon-counter-circle';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_progress_bar_options', [

			'label'	=> esc_html__('Progress Bar','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);

		$this->add_control('techlon_progress_bar_number', [

			'label'		=> esc_html__('Number','techlon-core'),

			'type'		=> Controls_Manager::NUMBER,

			'min'		=> 0,

			'max'		=> 100,

			'step'		=> 1,

			'default'	=> 75

		]);

		$this->add_control('techlon_progress_bar_title', [

			'label'		=> esc_html__('Title','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Software','techlon-core')

		]);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$progressNumber = $settings['techlon_progress_bar_number'];

		?>

		<div class="pricing-one__circle">

                                <div class="pricing-one__circle__item">

                                    <div class="progressbar-circle" id="progress-circle-1"

                                        data-progressbar-circle-value="<?php echo esc_attr($progressNumber) / 100 ?>" data-progressbar-circle-options='{

                                        "strokeWidth": 6,

                                        "easing": "easeInOut",

                                        "duration": 1400,

                                        "color": "#9c2ede",

                                        "trailColor": "rgba(225, 219, 236, 1)",

                                        "trailWidth": 2,

                                        "svgStyle": null,

                                        "text": {

                                            "value":"<?php echo esc_attr($progressNumber) ?>%"

                                        }

                                    }'></div><!-- /.progressbar-circle -->

                                    	<?php if (!empty($settings['techlon_progress_bar_title'])): ?>

                                    <h3 class="pricing-one__circle__title"><?php echo esc_html($settings['techlon_progress_bar_title']) ?></h3>

                                    <!-- /.pricing-one__circle__title -->

                                    <?php endif ?>

                                </div>

                            </div>

	<?php self::techlon_progress_bar_script($settings); }



	public function techlon_progress_bar_script($settings) { ?>

		<script type="text/javascript">

			jQuery( function( $ ) {

					if ($(".progressbar-circle1").length) {

					$(".progressbar-circle").each(function () {

						let elm = $(this);

						let elmID = $(this).attr("id");

						let options = elm.data('progressbar-circle-options');

						let value = elm.data('progressbar-circle-value');

						let progressbarCircle = new ProgressBar.Circle("#" + elmID, "object" === typeof options ? options : JSON.parse(options));

						progressbarCircle.animate(value);

					});

				}



			})

		</script>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Progress_Bar_Widget );