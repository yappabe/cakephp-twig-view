<?php
/**
 * Cake Twig Extension
 *
 * This file adds a bunch of commonly used cake classes as global variables to twig.
 *
 * eg: Where you would user Configure::read() in a cake .ctp file, you can use Configure.read() in a twig
 *     template file.
 *
 * @author Kevin Vandenborne <kevin.vandenborne@gmail.com>
 */
class Twig_Extension_Cake extends Twig_Extension {

    /**
     * Returns the name of this extension.
     *
     * @see Twig_ExtensionInterface::getName
     *
     * @return string Extension name
     */
	public function getName() {
		return 'Cake';
	}

    /**
     * Returns a list of global variables attached to common cake classes.
     *
     * @see Twig_ExtensionInterface::getGlobals
     * @see http://twig.sensiolabs.org/doc/advanced.html
     *
     * @return array An array of global variables
     */
    public function getGlobals() {
        return array(
            'Configure' => new Configure(),
            'Sanitize' => new Sanitize()
        );
    }
}

# Register the extension
TwigView::registerExtension(__FILE__, 'Twig_Extension_Cake');