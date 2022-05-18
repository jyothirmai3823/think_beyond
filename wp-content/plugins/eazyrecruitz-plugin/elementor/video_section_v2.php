<?php

namespace EAZYRECRUITZPLUGIN\Element;

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

/**
 * Elementor button widget.
 * Elementor widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Video_Section_V2 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'eazyrecruitz_video_section_v2';
	}

	/**
	 * Get widget title.
	 * Retrieve button widget title.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Video Section V2', 'eazyrecruitz' );
	}

	/**
	 * Get widget icon.
	 * Retrieve button widget icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-briefcase';
	}

	/**
	 * Get widget categories.
	 * Retrieve the list of categories the button widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'eazyrecruitz' ];
	}
	
	/**
	 * Register button widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'video_section_v2',
			[
				'label' => esc_html__( 'Video Section V2', 'eazyrecruitz' ),
			]
		);
		$this->add_control(
			'video_image',
				[
				  'label' => __( 'Video Image', 'eazyrecruitz' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				  
				]
	    );
		$this->add_control(
			'video_link',
				[
				  'label' => __( 'Video Url', 'eazyrecruitz' ),
				  'type' => Controls_Manager::URL,
				  'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				  'show_external' => true,
				  'default' => [
				    'url' => '',
				    'is_external' => true,
				    'nofollow' => true,
				  ],
			  ]
		);
		$this->add_control(
              'clients', 
			  	[
            		'type' => Controls_Manager::REPEATER,
            		'seperator' => 'before',
            		'default' => 
						[
                			['client_link' => esc_html__('#', 'eazyrecruitz')],
            			],
            		'fields' => 
						[
                			[
                    			'name' => 'client_img',
                    			'label' => esc_html__('Client image Url', 'eazyrecruitz'),
                    			'type' => Controls_Manager::MEDIA,
                    			'default' => ['url' => Utils::get_placeholder_image_src(),],
                			],
                			[
                    			'name' => 'client_link',
								'label' => __( 'External Url', 'eazyrecruitz' ),
							    'type' => Controls_Manager::URL,
							    'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
							    'show_external' => true,
							    'default' => ['url' => '','is_external' => true,'nofollow' => true,],
                			],
                			
            			],
            	    'title_field' => '{{client_link}}',
                 ]
        );
		$this->end_controls_section();
	}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$allowed_tags = wp_kses_allowed_html('post');
		?>
        
        <!-- clients-style-three -->
        <section class="clients-style-three">
            <div class="auto-container">
                <div class="video-content">
                    <div id="image_block_1">
                        <div class="image-box">
                            <div class="video-inner" style="background-image: url(<?php echo wp_get_attachment_url($settings['video_image']['id']);?>);">
                                <a href="<?php echo esc_url($settings['video_link']['url']);?>" class="lightbox-image video-btn" data-caption="">
                                    <i class="flaticon-play"></i>
                                </a>
                                <div class="border"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clients-inner">
                    <div class="clients-carousel-2 owl-carousel owl-theme owl-dots-none">
                        <?php foreach($settings['clients'] as $item):?>
                        <figure class="clients-logo-box">
                            <a href="<?php echo esc_url($item['client_link']['url']);?>"><img src="<?php echo wp_get_attachment_url($item['client_img']['id']);?>" alt="<?php esc_attr_e('Awesome Image', 'eazyrecruitz'); ?>"></a>
                        </figure>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-style-three end -->
            
		<?php 
	}

}
