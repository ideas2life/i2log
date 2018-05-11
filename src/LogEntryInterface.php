<?php
/**
 * Created by PhpStorm.
 * User: xatzistnr
 * Date: 11/05/2018
 * Time: 8:31 ΠΜ
 */

namespace Ideas2life\I2Log;


interface LogEntryInterface
{
    /**
     * @return mixed
     */
    public function data();

    /**
     * @return string
     */
    public function message();

    /**
     * @return \DateTime
     */
    public function timestamp();
}