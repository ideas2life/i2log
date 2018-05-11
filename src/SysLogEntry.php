<?php
/**
 * Created by PhpStorm.
 * User: xatzistnr
 * Date: 11/05/2018
 * Time: 8:16 ΠΜ
 */

namespace Ideas2life\I2Log;



class SysLogEntry implements LogEntryInterface
{

    /**
     * @var string
     */
    public $message;

    /**
     * @var \DateTime
     */
    public $timestamp;

    /**
     * @var mixed
     */
    public $data;


    /**
     * SysLogEntry constructor.
     * @param $message
     * @param mixed $data
     * @param \DateTime|null $time
     */
    public function __construct($message, $data = [], \DateTime $time = null)
    {
        $this->timestamp = $time ?: new \DateTime();
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->timestamp->format('Y-m-d H:i:s').'-'.$this->message;
    }

    /**
     * @return mixed
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return \DateTime
     */
    public function timestamp()
    {
      return $this->timestamp;
    }
}