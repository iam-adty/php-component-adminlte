<?php namespace IamAdty\Component\AdminLTE;

use IamAdty\Component;
use IamAdty\Component\ComponentBuilderTrait;
use IamAdty\Component\Html\Attribute\Charset;
use IamAdty\Component\Html\Attribute\Content;
use IamAdty\Component\Html\Attribute\HttpEquiv;
use IamAdty\Component\Html\Attribute\Name;
use IamAdty\Component\Html\Meta as HtmlMeta;

class Meta extends Component
{
    public function __construct()
    {
        parent::__construct(...[
            HtmlMeta::build(
                Charset::set("utf-8")
            ),
            HtmlMeta::build(
                HttpEquiv::set("X-UA-Compatible"),
                Content::set("IE=edge")
            ),
            HtmlMeta::build(
                Name::set("viewport"),
                Content::set("width=device-width, initial-scale=1")
            )
        ]);
    }

    use ComponentBuilderTrait;
}
