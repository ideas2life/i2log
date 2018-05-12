<?php
/**
 * Created by PhpStorm.
 * User: george
 * Date: 11/01/2018
 * Time: 11:19 ΠΜ
 */

namespace Ideas2life\I2Log;


class StdOutLogger implements SystemLogInterface
{

    /**
     * @param $message
     * @param array $data
     * @return void
     */
    public function log($message, $data = [])
    {
        echo '['.date('Y-m-d H:i:s').'] '.$message.PHP_EOL;

    }

    /**
     * @return SysLogEntry[]
     */
    public function getLog()
    {
        return [];
    }

    /**
     * @param LogEntryInterface $logEntry
     * @return void
     */
    public function addEntry(LogEntryInterface $logEntry)
    {
        $this->log($logEntry->message(),$logEntry->data());
    }
}