<?php
    namespace Controllers;

	use \Classes\DisplayableError;

    class Selector {
        public function getMainPage($f3, $params) {
			$f3->set('defaultImageLink', 'images/coin_flip.png');
			echo \Template::instance()->render('main.htm');
        }
	}