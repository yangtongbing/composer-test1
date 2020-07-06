<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: osx
 * Date: 2020/7/6
 * Time: 15:38
 */
namespace Sdwgyzyxy;

class ComposerTest1
{
    private static $instance;

    public function __construct()
    {
        var_dump('123123123');
    }

    public function config()
    {
        return ['composer-test1'];
    }

    public static function getInstance()
    {
        if (!isset(self::$instance) || self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
