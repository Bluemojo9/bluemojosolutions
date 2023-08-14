<?php
namespace Elementor;
class Techlon_About1_Section extends Widget_Base
{
public function get_name()
{
return 'techlon_about1_section ';
}
public function get_title()
{
return esc_html__('Techlon About1 Section', 'techlon-core');
}
public function get_icon()
{
return 'eicon-t-letter-bold';
}
public function get_categories()
{
return ['techlon_section'];
}
protected function register_controls()
{
$this->start_controls_section(
'techlon_about1_section_image',
[
'label' => esc_html__('Section  Image', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'techlon_step_section_image1', [
'label' => esc_html__(' Section Image1', 'techlon-core'),
'type' => Controls_Manager::MEDIA,
'default' => [
'url' => \Elementor\Utils::get_placeholder_image_src(),
],
]
);
$this->add_control(
'techlon_step_section_image2', [
'label' => esc_html__(' Section Image2', 'techlon-core'),
'type' => Controls_Manager::MEDIA,
'default' => [
'url' => \Elementor\Utils::get_placeholder_image_src(),
],
]
);
$this->add_control(
'techlon_step_section_floting_image1', [
'label' => esc_html__(' Section Floting Image1', 'techlon-core'),
'type' => Controls_Manager::MEDIA,
'default' => [
'url' => \Elementor\Utils::get_placeholder_image_src(),
],
'selectors' => [
'{{WRAPPER}} .about-five__images__shape' => 'background-image:url({{URL}})',
],
]
);
$this->add_control(
'techlon_step_section_floting_image2', [
'label' => esc_html__(' Section Floting Image2', 'techlon-core'),
'type' => Controls_Manager::MEDIA,
'default' => [
'url' => \Elementor\Utils::get_placeholder_image_src(),
],
'selectors' => [
'{{WRAPPER}} .about-five__images__shape-2' => 'background-image:url({{URL}})',
],
]
);
$this->add_control(
'techlon_step_section_Bg_image', [
'label' => esc_html__(' Section Bg Image', 'techlon-core'),
'type' => Controls_Manager::MEDIA,
'default' => [
'url' => \Elementor\Utils::get_placeholder_image_src(),
],
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_Video',
[
'label' => esc_html__('Video-Popup', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'video_popup_link', [
'label' => esc_html__('Link', 'techlon-core'),
'type' => Controls_Manager::URL,
'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
]
);
$this->add_control(
'video_popup_icon', [
'label' => esc_html__('Video Icon', 'techlon-core'),
'type' => Controls_Manager::ICONS,

]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_caption_box',
[
'label' => esc_html__('Caption Box', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'caption_box_text', [
'label' => esc_html__(' Text', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__(' Years Experience', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->add_control(
'caption_box_data', [
'label' => esc_html__('Count Data', 'techlon-core'),
'type' => Controls_Manager::NUMBER,
'default' => esc_html__('25', 'techlon-core'),
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_text',
[
'label' => esc_html__(' Section Text', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'section_text', [
'label' => esc_html__('Section Text', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('About Company', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_title',
[
'label' => esc_html__(' Section Title', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'section_title', [
'label' => esc_html__('Section Title', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('The World’s Networking Company', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_para1',
[
'label' => esc_html__(' Section Para1', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'section_para1', [
'label' => esc_html__('Section Para1', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('Since from 2000 Building Your Better IT Solution The
definition of business is an occupation or trade & the purchase and sale of products Our
Mission & Vision Voice and Data System are crucial to the success', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_para2',
[
'label' => esc_html__(' Section Para2', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'section_para2', [
'label' => esc_html__('Section Para2', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('System is a term used to refer to an organized collection
symbols and processes that may be used to operate on such symbols.', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_item_box',
[
'label' => esc_html__(' Section Item Box', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$repeater = new \Elementor\Repeater();
$repeater->add_control(
'section_item_box_icon', [
'label' => esc_html__('Section Icon', 'techlon-core'),
'type' => \Elementor\Controls_Manager::ICONS,
]
);
$repeater->add_control(
'section_title', [
'label' => esc_html__('Section Title', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('IT Specialist', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$repeater->add_control(
'section_title_link', [
'label' => esc_html__('Section Title Link', 'techlon-core'),
'type' => Controls_Manager::URL,
'placeholder' => esc_html__('https://your-link.com', 'techlon-core')]
);
$repeater->add_control(
'section_text2', [
'label' => esc_html__('Section Text', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('Smarter Solutions', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->add_control(
'techlon_about1_section_items',
[
'label' => esc_html__('About1 Icon Box', 'techlon-core'),
'type' => \Elementor\Controls_Manager::REPEATER,
'fields' => $repeater->get_controls(),
'default' => [
[
'section_text' => esc_html__('Smarter Solutions', 'techlon-core'),
'section_title' => esc_html__('IT Specialist', 'techlon-core'),
],
],
'title_field' => '{{{ section_title }}}',
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_author_image',
[
'label' => esc_html__('Author Meta', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'techlon_about_section_image', [
'label' => esc_html__('Author Image', 'techlon-core'),
'type' => Controls_Manager::MEDIA,
'default' => [
'url' => \Elementor\Utils::get_placeholder_image_src(),
],
]
);
$this->add_control(
'techlon_about_section_title', [
'label' => esc_html__('Author Title', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('Michele Morrone', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->add_control(
'techlon_about_section_designation', [
'label' => esc_html__('Author Designation', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('Founder CEO', 'techlon-core'),
'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
]
);
$this->end_controls_section();
$this->start_controls_section(
'techlon_about1_section_button',
[
'label' => esc_html__('Section Button', 'techlon-core'),
'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
]
);
$this->add_control(
'section_button', [
'label' => esc_html__('Button', 'techlon-core'),
'type' => Controls_Manager::TEXT,
'default' => esc_html__('Learn More', 'techlon-core'),
]
);
$this->add_control(
'section_button_link', [
'label' => esc_html__('Link', 'techlon-core'),
'type' => Controls_Manager::URL,
'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
]
);
}
protected function render()
{
$settings = $this->get_settings_for_display();
?>
<section class="section-padding--bottom section-padding--top about-five">
    <img src="<?php echo esc_url($settings['techlon_step_section_Bg_image']['url']) ?>" class="about-five__shape-1" alt="">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-6">
                <div class="about-five__images">
                    <div class="about-five__images__shape"></div><!-- /.about-five__images__shape -->
                    <div class="about-five__images__shape-2 float-bob-x"></div>
                    <!-- /.about-five__images__shape-2 -->
                    <img src="<?php echo esc_url($settings['techlon_step_section_image1']['url']) ?>" class="wow fadeInUp animated"
                    data-wow-duration="1500ms" alt="">
                    <img src="<?php echo esc_url($settings['techlon_step_section_image2']['url']) ?>" alt="">
                    <div class="about-five__video">
                        <a href="<?php echo esc_url($settings['video_popup_link']['url']) ?>" class="video-popup">
                            <i class="fa fa-play fa-sm"></i>
                        </a>
                        </div><!-- /.about-five__video -->
                        <div class="about-five__images__caption count-box wow fadeInUp animated" data-wow-duration="1500ms">
                            <span class="count-text" data-stop="<?php echo esc_attr($settings['caption_box_data']) ?>" data-speed="2500">00</span>
                            <?php echo techlon_wp_kses($settings['caption_box_text']) ?>
                            </div><!-- /.about-five__images__caption -->
                            </div><!-- /.about-five__images -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="about-five__content">
                                    <div class="section-title ">
                                        <p class="section-title__text"><?php echo techlon_wp_kses($settings['section_text']) ?></p><!-- /.section-title__text -->
                                        <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['section_title']) ?></h2>
                                        <!-- /.section-title__title -->
                                        </div><!-- /.section-title -->
                                        <div class="about-five__text"><?php echo techlon_wp_kses($settings['section_para1']) ?></div>
                                        <!-- /.about-five__text -->
                                        <div class="about-five__text"><?php echo techlon_wp_kses($settings['section_para2']) ?>.</div>
                                        <!-- /.about-five__text -->
                                        <ul class="about-five__box">
                                            <?php foreach ($settings['techlon_about1_section_items'] as $li) {?>
                                            <li class="about-five__box__item gray-bg">
                                                <i class="about-five__box__icon <?php echo esc_attr($li['section_item_box_icon']['value']) ?>"></i>
                                                <div class="about-five__box__content">
                                                    <h3 class="about-five__box__title"><a href="<?php echo esc_url($li['section_title_link']['url']) ?>"><?php echo techlon_wp_kses($li['section_title']) ?></a></h3>
                                                    <p class="about-five__box__text"><?php echo techlon_wp_kses($li['section_text2']) ?></p>
                                                    <!-- /.about-five__box__text -->
                                                    </div><!-- /.about-five__box__content -->
                                                </li>
                                                <?php }?>
                                                </ul><!-- /.about-five__box -->
                                                <div class="about-four__meta">
                                                    <div class="about-four__author">
                                                        <img src="<?php echo esc_url($settings['techlon_about_section_image']['url']) ?>" alt="">
                                                        <div class="about-four__author__content">
                                                            <h3 class="about-four__author__title"><?php echo techlon_wp_kses($settings['techlon_about_section_title']) ?></h3>
                                                            <!-- /.about-four__author__title -->
                                                            <div class="about-four__author__designation"><?php echo techlon_wp_kses($settings['techlon_about_section_designation']) ?></div>
                                                            <!-- /.about-four__author__designation -->
                                                            </div><!-- /.about-four__author__content -->
                                                            </div><!-- /.about-four__author -->
                                                            <a href="<?php echo esc_url($settings['section_button_link']['url']) ?>" class="thm-btn about-four__btn"><span><?php echo techlon_wp_kses($settings['section_button']) ?></span></a>
                                                            <!-- /.thm-btn about-four__btn -->
                                                            </div><!-- /.about-four__meta -->
                                                            </div><!-- /.about-five__content -->
                                                            </div><!-- /.col-lg-6 -->
                                                            </div><!-- /.row -->
                                                            </div><!-- /.container -->
                                                        </section>
                                                        <?php
                                                        self::techlon_about1_section($settings);
                                                        }
                                                        public function techlon_about1_section($settings)
                                                        {?>
                                                        <script>
                                                        jQuery( function( $ ) {
                                                        if ($(".count-box").length) {
                                                        $(".count-box").appear(
                                                        function () {
                                                        var $t = $(this),
                                                        n = $t.find(".count-text").attr("data-stop"),
                                                        r = parseInt($t.find(".count-text").attr("data-speed"), 10);
                                                        if (!$t.hasClass("counted")) {
                                                        $t.addClass("counted");
                                                        $({
                                                        countNum: $t.find(".count-text").text()
                                                        }).animate({
                                                        countNum: n
                                                        }, {
                                                        duration: r,
                                                        easing: "linear",
                                                        step: function () {
                                                        $t.find(".count-text").text(Math.floor(this.countNum));
                                                        },
                                                        complete: function () {
                                                        $t.find(".count-text").text(this.countNum);
                                                        }
                                                        });
                                                        }
                                                        }, {
                                                        accY: 0
                                                        }
                                                        );
                                                        }
                                                        })
                                                        </script>
                                                        <?php }
                                                        }
                                                        Plugin::instance()->widgets_manager->register_widget_type(new Techlon_About1_Section);