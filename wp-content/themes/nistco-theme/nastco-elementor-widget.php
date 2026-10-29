<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Block direct access

class Elementor_Nastco_Project_Widget extends \Elementor\Widget_Base {
    
    public function get_name() { return 'nastco_project_widget'; }
    public function get_title() { return 'NASTCO Project Tracker'; }
    public function get_icon() { return 'eicon-skill-bar'; }
    public function get_categories() { return [ 'general' ]; }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => 'Project Selection',
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]);

        global $wpdb;
        $table = $wpdb->prefix . 'nastco_projects';
        
        // Dynamically pull all projects for the Elementor dropdown
        $projects = $wpdb->get_results("SELECT project_code, title FROM $table", ARRAY_A);
        $options = ['' => '-- Select Target Project --'];
        
        if ( !empty($projects) ) {
            foreach ($projects as $p) {
                $options[$p['project_code']] = $p['project_code'] . ' - ' . $p['title'];
            }
        }

        $this->add_control('project_code', [
            'label' => 'Master Ledger Project',
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => $options,
            'default' => '',
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        if (empty($settings['project_code'])) {
            echo '<div style="padding:20px; border:2px dashed #ccc; text-align:center; color:#666; font-family:monospace;">[ Select a NASTCO project from the widget settings to display telemetry ]</div>';
            return;
        }
        
        // Seamlessly route the GUI selection through our existing shortcode engine
        echo do_shortcode("[nastco_project code='" . esc_attr($settings['project_code']) . "']");
    }
}
