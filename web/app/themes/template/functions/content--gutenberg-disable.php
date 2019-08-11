<?php

/*
  Disable Gutenberg by default
  Readme: https://digwp.com/2018/12/enable-gutenberg-block-editor/
*/

add_filter('use_block_editor_for_post', '__return_false', 5);
