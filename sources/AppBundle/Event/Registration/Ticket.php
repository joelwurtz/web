<?php

namespace AppBundle\Event\Registration;

use AppBundle\Event\Model\Event;

interface TicketInterface
{
    /**
     * Get the event for this ticket
     *
     * @return Event
     */
    public function getEvent();

    /**
     * Get the number of days this ticket is valid for (i.e: 1 or 2 days)
     *
     * @return int
     */
    public function getDays();

    /**
     * Get the number of ticket still available for sale
     *
     * @return int
     */
    public function getStock();

    /**
     * Is this ticket available for sale
     *
     * @return bool
     */
    public function isAvailable();

    /**
     * Get the price of this ticket. We don't charge for VAT so it's the full price
     *
     * @return float
     */
    public function getPrice();

    /**
     * This key will be used to display the name of the ticket with the translator
     *
     * @return string
     */
    public function getTranslationKey();
}
