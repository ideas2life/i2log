<?php
/**
 * Created by PhpStorm.
 * User: xatzistnr
 * Date: 11/05/2018
 * Time: 8:15 ΠΜ
 */


namespace Ideas2life\I2Log;

interface SystemLogInterface
{

    /**
     * @param $message
     * @param array $data
     * @return void
     */
    public function log($message, $data = []);

    /**
     * @return SysLogEntry[]
     */
    public function getLog();
}