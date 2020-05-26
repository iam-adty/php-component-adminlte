<?php namespace IamAdty\Component\AdminLTE\NavBar;

use IamAdty\Component;
use IamAdty\Component\ComponentBuilderTrait;
use IamAdty\Component\Html\Anchor;
use IamAdty\Component\Html\Attribute\Class_;
use IamAdty\Component\Html\Attribute\Data;
use IamAdty\Component\Html\Attribute\Data\Name;
use IamAdty\Component\Html\Attribute\Data\Value;
use IamAdty\Component\Html\Attribute\HRef;
use IamAdty\Component\Html\Attribute\Role;
use IamAdty\Component\Html\Italic;
use IamAdty\Component\Html\List_\Item;
use IamAdty\Component\Html\UnOrderedList;

class LeftNavBar extends Component
{
    public function __construct()
    {
        parent::__construct(...[
            UnOrderedList::build(
                Class_::set("navbar-nav"),
                Item::build(
                    Class_::set("nav-item"),
                    Anchor::build(
                        Class_::set("nav-link"),
                        Data::set(
                            Name::set(),
                            Value::set("pushmenu")
                        ),
                        HRef::set("#"),
                        Role::set("button"),
                        Italic::build(
                            Class_::set("fas fa-bars")
                        )
                    )
                ),
                Item::build(
                    Class_::set("nav-item d-none d-sm-inline-block"),
                    Anchor::build(
                        Class_::set("nav-link"),
                        Href::set("#"),
                        "Home"
                    )
                ),
                Item::build(
                    Class_::set("nav-item d-none d-sm-inline-block"),
                    Anchor::build(
                        Href::set("#"),
                        Class_::set("nav-link"),
                        "Contact"
                    )
                )
            )
        ]);
    }

    use ComponentBuilderTrait;
}
