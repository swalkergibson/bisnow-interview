<?php

class Parse
{
    private $string;

    private $contactInformation;

    function __construct($string)
    {
        $this->setString($string);
    }

    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    public function getString()
    {
        return $this->string;
    }

    public function setContactInformation($contactInformation)
    {
        $this->contactInformation = $contactInformation;

        return $this;
    }

    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    public function parse($dataType)
    {
        $contactInformation = $this->getContactInformation();
        switch ($dataType) {
            case 'name':

                break;
            case 'address':

                break;
            case 'city':

                break;
            case 'state':

                break;
            case 'zip':

                break;
            case 'phone':

                break;
            case 'email':
                
                break;
        }
    }
}
