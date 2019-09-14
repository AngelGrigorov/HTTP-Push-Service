<?php

class Request
{
    private $data;
    private $status;
    private $statusMessage;
    private $dateTime;

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        $date =  $this->dateTime;
        $newDate = $date->format('Y-m-d');
        return $newDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param mixed $statusMessage
     */
    public function setStatusMessage($statusMessage): void
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * Request constructor.
     * @param $data
     * @param null $status
     * @param null $statusMessage
     * @throws Exception
     */
    public function __construct($data = NULL, $status = NULL, $statusMessage = NULL)
    {
        $this->data = $data;
        $this->status = $status;
        $this->statusMessage = $statusMessage;
        $this->dateTime = new DateTime('now');
    }
    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }
    // service
    public function makeRequest()
    {
        $d = $this->data;
        if(!empty($d)){
            $this->setStatus(200);
            $this->setStatusMessage("OK!");
        }else{
            $this->setStatus(404);
            $this->setStatusMessage("Not found!");
        }
    }


}
