<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 18.12.17
 * Time: 13:48
 */

namespace Blog;


class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}