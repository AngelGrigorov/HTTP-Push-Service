<?php

class Request
{
    private $data;
    private $status;
    private $statusMessage;

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
     */
    public function __construct($data = NULL, $status = NULL, $statusMessage = NULL)
    {
        $this->data = $data;
        $this->status = $status;
        $this->statusMessage = $statusMessage;
    }


    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }
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
