<?php

namespace AppBundle\Event\Registration;

use AppBundle\Event\Model\Event;

class TicketStock
{
    /**
     * @var Event
     */
    private $event;

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function getStock()
    {

    }
}
