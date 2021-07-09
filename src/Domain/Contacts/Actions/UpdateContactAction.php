<?php

namespace Domain\Bookings\Actions;

use Domain\Bookings\DataTransferObjects\BookingData;
use Domain\Contacts\Models\Contact;

class UpdateContactAction
{
    public function __invoke(Contact $booking, BookingData $bookingData): Booking
    {
        $booking->fill([
            'name' => $bookingData->name,
            'unit_id' => $bookingData->unit->id,
            'client_id' => $bookingData->client->id,
            'starts_at' => $bookingData->period->getStart(),
            'ends_at' => $bookingData->period->getEnd(),
        ])->save();

        return $booking->refresh();
    }