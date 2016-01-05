<?php

//ウィジェット
register_sidebar();

// テキストウィジェットでショートコードを利用可能にする
add_filter('widget_text', 'do_shortcode');