<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

/**
 * Class CwwhateverController
 */
class CwwhateverController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   mixed    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController   This object to support chaining.
	 *
	 * @since    1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		$view = JFactory::getApplication()->input->getCmd('view', 'whatever');
		JFactory::getApplication()->input->set('view', $view);

		// Layout override set by user.
		$layout = JFactory::getApplication()->getParams('com_cw_whatever')->get('layout');
		if($layout)
		{
			JFactory::getApplication()->input->set('layout', $layout);
		}

		parent::display($cachable, $urlparams);

		return $this;
	}
}
