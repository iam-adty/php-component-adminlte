<?php namespace IamAdty\Component\AdminLTE;

use IamAdty\Component;
use IamAdty\Component\ComponentBuilderTrait;
use IamAdty\Component\Html\Attribute\Source;
use IamAdty\Component\Html\Script as HtmlScript;

class Script extends Component
{
    public function construct()
    {
        $this->children = array_merge([
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/jquery/jquery.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/jquery-ui/jquery-ui.min.js")
            ),
            HtmlScript::build(
                "$.widget.bridge('uibutton', $.ui.button)"
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/chart.js/Chart.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/sparklines/sparklines.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/jqvmap/jquery.vmap.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/jquery-knob/jquery-knob.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/moment/moment.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/daterangepicker/daterangepicker.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/summernote/summernote-bs4.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/js/adminlte.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/js/pages/dashboard.js")
            ),
            HtmlScript::build(
                Source::set("assets/vendor/adminlte/js/demo.js")
            )
        ], $this->children);

        return parent::construct();
    }

    use ComponentBuilderTrait;
}
