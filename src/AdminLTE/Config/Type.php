<?php namespace IamAdty\Component\AdminLTE\Config;

use IamAdty\Config;
use IamAdty\Config\ConfigTrait;

class Type extends Config
{
    protected $name = "name";

    use ConfigTrait;

    public static function One()
    {
        return new self(1);
    }

    public static function Two()
    {
        return new self(2);
    }

    public static function Three()
    {
        return new self(3);
    }
}
