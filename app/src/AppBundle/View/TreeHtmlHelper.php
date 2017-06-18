<?php

namespace AppBundle\View;

use PBergman\Console\Helper\TreeHelper;
use Symfony\Component\Console\Output\OutputInterface;

class TreeHtmlHelper extends TreeHelper {

	public function __construct() {
		parent::__construct();
		$this->setFormats([
			self::LINE_PREFIX_EMPTY => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
			])
		;
	}

}