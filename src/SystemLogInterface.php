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
     * @param mixed $data
     * @return void
     */
    public function log($message, $data = []);

    /**
     * @return LogEntryInterface[]
     */
    public function getLog();


    /**
     * @param LogEntryInterface $logEntry
     * @return void
     */
    public function addEntry(LogEntryInterface $logEntry);
}