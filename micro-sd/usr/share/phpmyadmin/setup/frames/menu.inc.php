<?php
/**
 * Menu items
 *
 * @package phpMyAdmin-setup
 */

if (!defined('PHPMYADMIN')) {
    exit;
}

$separator = PMA_get_arg_separator('html');
?>
<ul>
	<li><a href="index.php?<?php echo PMA_generate_common_url() ?>"><?php echo __('Overview') ?></a></li>
	<li><a href="?page=form<?php echo $separator . PMA_generate_common_url() . $separator ?>formset=Features"><?php echo __('Features') ?></a></li>
	<li><a href="?page=form<?php echo $separator . PMA_generate_common_url() . $separator ?>formset=Sql_queries"><?php echo __('SQL queries') ?></a></li>
	<li><a href="?page=form<?php echo $separator . PMA_generate_common_url() . $separator ?>formset=Left_frame"><?php echo __('Navigation frame') ?></a></li>
	<li><a href="?page=form<?php echo $separator . PMA_generate_common_url() . $separator ?>formset=Main_frame"><?php echo __('Main frame') ?></a></li>
	<li><a href="?page=form<?php echo $separator . PMA_generate_common_url() . $separator ?>formset=Import"><?php echo __('Import') ?></a></li>
	<li><a href="?page=form<?php echo $separator . PMA_generate_common_url() . $separator ?>formset=Export"><?php echo __('Export') ?></a></li>
</ul>
