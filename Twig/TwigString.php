<?php

namespace LK\TwigstringBundle\Twig;

/**
 * @author Noel García <noel@coolmobile.es>
 */
class TwigString extends \Twig_Extension
{
	private $twigEngine;

	public function __construct($twigEngine)
	{
		$this->twigEngine = $twigEngine;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getName()
	{
		return 'twigstring';
	}

	/**
	 * {@inheritDoc}
	 */
	public function getFilters()
	{
		return [
			'twigstring' => new \Twig_Filter_Method($this, 'render')
		];
	}

	public function render($input)
	{
		return $this->twigEngine->render($input);
	}
}
