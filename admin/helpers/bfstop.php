<?php
defined('_JEXEC') or die;

class BfstopHelper
{
	public static function addSubmenu($vName)
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_BFSTOP_SUBMENU_BLOCKLIST'),
			'index.php?option=com_bfstop&view=blocklist',
			$vName == 'blocklist'
		);

		JSubMenuHelper::addEntry(
			JText::_('COM_BFSTOP_SUBMENU_FAILEDLOGINLIST'),
			'index.php?option=com_bfstop&view=failedloginlist',
			$vName == 'failedloginlist'
		);
	}
}
