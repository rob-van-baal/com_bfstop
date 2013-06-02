<?php
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');

?>

	<form method="post" name="adminForm" id="adminForm">
		<input type="hidden" name="task" value="delete" />
		<?php echo JHtml::_('form.token'); ?>
		<input type="hidden" name="filter_order" value="<?php echo $this->sortColumn; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $this->sortDirection; ?>" />
		<table class="adminlist">
			<thead><?php echo $this->loadTemplate('head'); ?></thead>
			<tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
			<tbody><?php echo $this->loadTemplate('body');?></tbody>
		</table>
	</form>
