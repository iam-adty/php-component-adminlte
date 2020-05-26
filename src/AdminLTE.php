<?php namespace IamAdty\Component;

use IamAdty\Component;
use IamAdty\Component\AdminLTE\Meta;
use IamAdty\Component\AdminLTE\NavBar;
use IamAdty\Component\AdminLTE\Script;
use IamAdty\Component\AdminLTE\Style;
use IamAdty\Component\Html\Attribute\Class_;
use IamAdty\Component\Html\Body;
use IamAdty\Component\Html\Config\DocType;
use IamAdty\Component\Html\Division;
use IamAdty\Component\Html\Head;
use IamAdty\Component\Html\Title;

class AdminLTE extends Component
{
    public function __construct(...$params)
    {
        parent::__construct(...[
            Html::build(
                DocType::set("html"),
                Head::build(
                    Meta::build(),
                    Title::build(
                        Text::write("AdminLTE 3 | Dashboard")
                    ),
                    Style::build()
                ),
                Body::build(
                    Class_::set("hold-transition sidebar-mini layout-fixed"),
                    Division::build(
                        Class_::set("wrapper"),
                        NavBar::build()
                    ),
                    Script::build()
                )
            )
        ]);
    }

    use ComponentBuilderTrait;
}
