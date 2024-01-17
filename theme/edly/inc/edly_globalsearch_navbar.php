<?php
defined('MOODLE_INTERNAL') || die();

$edly_globalsearch_navbar = '';

$placeholder      = get_config('theme_edly', 'search_placeholder');

if (\core_search\manager::is_global_search_enabled() === false) {
    $placeholder = get_string('globalsearchdisabled', 'search');
}

$url = new moodle_url('/search/index.php');

$edly_globalsearch_navbar .= html_writer::start_tag('form', array('class' => 'search-box','action' => $url->out()));
$edly_globalsearch_navbar .= html_writer::start_tag('fieldset');

// Input.
$inputoptions = array('name' => 'q', 'class' => 'input-search', 'placeholder' => $placeholder, 'type' => 'text',);
$edly_globalsearch_navbar .= html_writer::empty_tag('input', $inputoptions);

// Context id.
if ($this->page->context && $this->page->context->contextlevel !== CONTEXT_SYSTEM) {
    $edly_globalsearch_navbar .= html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'context', 'value' => $this->page->context->id]);
}
// Search button.
$edly_globalsearch_navbar .= '<button type="submit"><i class="ri-search-line"></i></button>';
$edly_globalsearch_navbar .= html_writer::end_tag('fieldset');
$edly_globalsearch_navbar .= html_writer::end_tag('form');
