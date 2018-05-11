<?php
/**
 * Created by PhpStorm.
 * User: xatzistnr
 * Date: 11/05/2018
 * Time: 8:40 ΠΜ
 */

namespace Ideas2life\I2Log;
class TempSystemLog implements SystemLogInterface
{
    /**
     * @var LogEntryInterface[]
     */
    protected $logs = [];
    /**
     * @param $message
     * @param mixed $data
     * @return void
     */
    public function log($message, $data = [])
    {
        $this->logs[] = new SysLogEntry($message, $data);
    }

    /**
     * @return LogEntryInterface[]
     */
    public function getLog()
    {
        return $this->logs;
    }

    /**
     * @param LogEntryInterface $logEntry
     * @return void
     */
    public function addEntry(LogEntryInterface $logEntry)
    {
        $this->logs[]=$logEntry;
    }
}