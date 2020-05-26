<?php namespace IamAdty\Component\AdminLTE;

use IamAdty\Component;
use IamAdty\Component\ComponentBuilderTrait;
use IamAdty\Component\Html\Attribute\HRef;
use IamAdty\Component\Html\Attribute\Rel;
use IamAdty\Component\Html\Link;

class Style extends Component
{
    public function __construct(...$params)
    {
        parent::__construct(...$params);

        $this->children = [
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/fontawesome-free/css/all.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/jqvmap/jqvmap.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/css/adminlte.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/daterangepicker/daterangepicker.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("assets/vendor/adminlte/plugins/summernote/summernote-bs4.css")
            ),
            Link::build(
                Rel::set("stylesheet"),
                HRef::set("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700")
            )
        ] + $this->children;
    }

    use ComponentBuilderTrait;
}
