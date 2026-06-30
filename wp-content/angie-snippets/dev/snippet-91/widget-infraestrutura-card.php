<?php

namespace AngieSnippets;
if ( ! defined( 'ABSPATH' ) ) { exit; }

class Infraestrutura_Card_d561b219_4b0f_477f_a00f_1c85b9fded39 extends \Elementor\Widget_Base {

    public function get_name() { return 'infraestrutura_card_d561b219_4b0f_477f_a00f_1c85b9fded39'; }
    public function get_title() { return esc_html__( 'Cartão de Infraestrutura', 'angie-snippets' ); }
    public function get_icon() { return 'eicon-image-box'; }
    public function get_categories() { return [ 'angie-widgets', 'general' ]; }
    public function get_style_depends() { return [ 'infraestrutura-card-style-d561b219-4b0f-477f-a00f-1c85b9fded39' ]; }

    protected function register_controls() {

        $this->start_controls_section(
            'section_content',
            [
                'label' => esc_html__( 'Conteúdo', 'angie-snippets' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'service_icon',
            [
                'label' => esc_html__( 'Ícone do Serviço', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-server',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->add_control(
            'service_title',
            [
                'label' => esc_html__( 'Título', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Infraestrutura Crítica', 'angie-snippets' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'service_description',
            [
                'label' => esc_html__( 'Descrição', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Montagem e gestão de Data Centers robustos. Soluções escaláveis para garantir a disponibilidade total dos seus dados e serviços essenciais.', 'angie-snippets' ),
            ]
        );

        $this->add_control(
            'service_image',
            [
                'label' => esc_html__( 'Imagem Opcional (Direita)', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon',
            [
                'label' => esc_html__( 'Ícone (Opcional)', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'far fa-check-circle',
                    'library' => 'fa-regular',
                ],
            ]
        );

        $repeater->add_control(
            'feature_text',
            [
                'label' => esc_html__( 'Texto da Feature', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Feature', 'angie-snippets' ),
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'feature_style',
            [
                'label' => esc_html__( 'Estilo (Tag/Link)', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'list_item',
                'options' => [
                    'list_item' => esc_html__( 'Item de Lista Padrão', 'angie-snippets' ),
                    'tag_gray' => esc_html__( 'Tag Cinza (Ex: Microsoft 365)', 'angie-snippets' ),
                    'link_blue' => esc_html__( 'Link Azul Alinhado à Direita', 'angie-snippets' ),
                ],
            ]
        );

        $this->add_control(
            'features_list',
            [
                'label' => esc_html__( 'Lista de Recursos', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => esc_html__( 'Servidores Enterprise', 'angie-snippets' ),
                        'feature_style' => 'list_item',
                    ],
                    [
                        'feature_text' => esc_html__( 'Sistemas de UPS', 'angie-snippets' ),
                        'feature_style' => 'list_item',
                    ],
                    [
                        'feature_text' => esc_html__( 'Racks Térmicos', 'angie-snippets' ),
                        'feature_style' => 'list_item',
                    ],
                ],
                'title_field' => '{{{ feature_text }}}',
            ]
        );
        
        $this->add_control(
            'layout_style',
            [
                'label' => esc_html__( 'Estilo de Layout', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'horizontal',
                'options' => [
                    'horizontal' => esc_html__( 'Horizontal (Texto esq, Imagem dir)', 'angie-snippets' ),
                    'vertical' => esc_html__( 'Vertical (Imagem cima, Texto baixo)', 'angie-snippets' ),
                    'text_only' => esc_html__( 'Apenas Texto (Sem Imagem Grande)', 'angie-snippets' ),
                ],
            ]
        );

        $this->end_controls_section();

        // Style Tab
        $this->start_controls_section(
            'section_style_card',
            [
                'label' => esc_html__( 'Cartão', 'angie-snippets' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_bg_color',
            [
                'label' => esc_html__( 'Cor de Fundo', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .infra-card' => 'background-color: {{VALUE}};',
                ],
                'default' => '#ffffff',
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'card_border',
				'selector' => '{{WRAPPER}} .infra-card',
			]
		);
        
        $this->add_control(
			'card_border_radius',
			[
				'label' => esc_html__( 'Arredondamento', 'angie-snippets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .infra-card' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'default' => [
                    'top' => '8',
                    'right' => '8',
                    'bottom' => '8',
                    'left' => '8',
                    'unit' => 'px',
                    'isLinked' => true,
                ],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'card_box_shadow',
				'selector' => '{{WRAPPER}} .infra-card',
			]
		);
        
        $this->add_responsive_control(
			'card_padding',
			[
				'label' => esc_html__( 'Espaçamento Interno', 'angie-snippets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .infra-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
                'default' => [
                    'top' => '30',
                    'right' => '30',
                    'bottom' => '30',
                    'left' => '30',
                    'unit' => 'px',
                    'isLinked' => true,
                ],
			]
		);

        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__( 'Tipografia & Cores', 'angie-snippets' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Cor do Título', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .infra-card__title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .infra-card__title',
            ]
        );
        
        $this->add_control(
            'desc_color',
            [
                'label' => esc_html__( 'Cor da Descrição', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .infra-card__desc' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typography',
                'selector' => '{{WRAPPER}} .infra-card__desc',
            ]
        );
        
        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__( 'Cor do Ícone Principal', 'angie-snippets' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .infra-card__icon' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .infra-card__icon svg' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        $layout_class = 'layout-' . esc_attr($settings['layout_style']);
        ?>
        <div class="infra-card <?php echo $layout_class; ?>">
            <div class="infra-card__content">
                <?php if ( ! empty( $settings['service_icon']['value'] ) ) : ?>
                    <div class="infra-card__icon-wrapper">
                        <div class="infra-card__icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ( ! empty( $settings['service_title'] ) ) : ?>
                    <h3 class="infra-card__title"><?php echo wp_kses_post( $settings['service_title'] ); ?></h3>
                <?php endif; ?>

                <?php if ( ! empty( $settings['service_description'] ) ) : ?>
                    <p class="infra-card__desc"><?php echo wp_kses_post( $settings['service_description'] ); ?></p>
                <?php endif; ?>

                <?php if ( ! empty( $settings['features_list'] ) ) : ?>
                    <ul class="infra-card__features">
                        <?php foreach ( $settings['features_list'] as $item ) : 
                            $style_class = 'feature-style-' . esc_attr($item['feature_style']);
                        ?>
                            <li class="infra-card__feature-item <?php echo $style_class; ?> elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                <?php if ( ! empty( $item['feature_icon']['value'] ) && $item['feature_style'] === 'list_item' ) : ?>
                                    <span class="feature-icon">
                                        <?php \Elementor\Icons_Manager::render_icon( $item['feature_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </span>
                                <?php endif; ?>
                                <span class="feature-text"><?php echo wp_kses_post( $item['feature_text'] ); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            
            <?php if ( ! empty( $settings['service_image']['url'] ) && $settings['layout_style'] !== 'text_only' ) : ?>
                <div class="infra-card__image">
                    <img src="<?php echo esc_url( $settings['service_image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['service_title'] ); ?>">
                </div>
            <?php endif; ?>
        </div>
        <?php
    }

    protected function content_template() {
        ?>
        <#
        var layout_class = 'layout-' + settings.layout_style;
        #>
        <div class="infra-card {{{ layout_class }}}">
            <div class="infra-card__content">
                <# if ( settings.service_icon.value ) { 
                    var iconHTML = elementor.helpers.renderIcon( view, settings.service_icon, { 'aria-hidden': 'true' }, 'i', 'object' );
                #>
                    <div class="infra-card__icon-wrapper">
                        <div class="infra-card__icon">
                            <# if ( iconHTML && iconHTML.value ) { #>{{{ iconHTML.value }}}<# } #>
                        </div>
                    </div>
                <# } #>

                <# if ( settings.service_title ) { #>
                    <h3 class="infra-card__title">{{{ settings.service_title }}}</h3>
                <# } #>

                <# if ( settings.service_description ) { #>
                    <p class="infra-card__desc">{{{ settings.service_description }}}</p>
                <# } #>

                <# if ( settings.features_list.length ) { #>
                    <ul class="infra-card__features">
                        <# _.each( settings.features_list, function( item ) { 
                            var style_class = 'feature-style-' + item.feature_style;
                        #>
                            <li class="infra-card__feature-item {{{ style_class }}} elementor-repeater-item-{{ item._id }}">
                                <# if ( item.feature_icon.value && item.feature_style === 'list_item' ) { 
                                    var itemIconHTML = elementor.helpers.renderIcon( view, item.feature_icon, { 'aria-hidden': 'true' }, 'i', 'object' );
                                #>
                                    <span class="feature-icon">
                                        <# if ( itemIconHTML && itemIconHTML.value ) { #>{{{ itemIconHTML.value }}}<# } #>
                                    </span>
                                <# } #>
                                <span class="feature-text">{{{ item.feature_text }}}</span>
                            </li>
                        <# } ); #>
                    </ul>
                <# } #>
            </div>
            
            <# if ( settings.service_image.url && settings.layout_style !== 'text_only' ) { #>
                <div class="infra-card__image">
                    <img src="{{ settings.service_image.url }}" alt="{{ settings.service_title }}">
                </div>
            <# } #>
        </div>
        <?php
    }
}
