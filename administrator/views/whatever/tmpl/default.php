<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_cw_whatever/assets/css/cw_whatever.css');
?>

<div class="row-fluid">

    <div class="span9 offset1 pull-right">

        <h2>Welcome to CW Whatever!</h2>

        <p>Whatever is a component that is whatever you want it to be. It is the best way to add your own custom scripts to Joomla, using Joomla's built-in MVC template override system.</p>

        <hr />

        <h3>Instructions</h3>

        <h4>Step 1: Create a template override</h4>

        <p>The first thing you want to do is create a template override for the whatever component's whatever view. Here's how you do that:</p>

        <ol>
        	<li>In <code>/templates/{YOUR_TEMPLATE}/html</code>, create a folder called <code>com_cw_whatever</code>.</li>
        	<li>In the <code>com_cw_whatever</code> folder you just created, create a folder called <code>whatever</code>. This folder will contain your template override files.</li>
        	<li>In the <code>whatever</code> folder you just created, create a PHP file and name it whatever you want to name it.</li>
        </ol>

        <h4>Step 2: Create a CW Whatever menu item</h4>

        <ol>
        	<li>In the Joomla administrator, create a new menu item to render your new CW Whatever script. Set the menu item type to CW Whatever > Whatever</li>
        	<li>In the menu item's Whatever tab, select your template override in the Script parameter.</li>
        	<li>[Optional] In the menu item's CW Whatever tab, you can set the Whatever parameter to whatever you want it to be.</li>
        </ol>

        <hr />

        <p>That's all there is to it. This component was designed to do as little as possible and be as simple as possible to enable you to add your own custom PHP scripts.</p>

    </div>

    <div class="span2 cwm-logo">
        <p><a href="http://corywebbmedia.com/joomla-extensions/cw-whatever"><img src="components/com_cw_whatever/assets/images/logo-whatever.png" alt="CW Whatever" /></a></p>
        <h3><a href="http://corywebbmedia.com/joomla-extensions/cw-whatever">CW Whatever</a></h3>
    </div>

</div>

<hr />

<div class="cwm-logo">
    <p><a href="http://corywebbmedia.com"><img src="components/com_cw_whatever/assets/images/logo_yellow_square.jpg" alt="Cory Webb Media" /></a></p>

    <p>Copyright &copy; 2015, <a href="http://corywebbmedia.com">Cory Webb Media, LLC</a></p>
</div>
