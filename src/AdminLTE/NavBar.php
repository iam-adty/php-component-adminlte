<?php namespace IamAdty\Component\AdminLTE;

use IamAdty\Component;
use IamAdty\Component\AdminLTE\NavBar\LeftNavBar;
use IamAdty\Component\ComponentBuilderTrait;
use IamAdty\Component\Html\Attribute\Class_;
use IamAdty\Component\Html\Navigation;

class NavBar extends Component
{
    public function __construct()
    {
        parent::__construct(...[
            Navigation::build(
                Class_::set("main-header navbar navbar-expand navbar-white navbar-light"),
                LeftNavBar::build()
            )
        ]);
    }

    use ComponentBuilderTrait;
}
