<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventType extends Model
{
    use HasFactory;

    public function ticketTypes(): BelongsToMany
    {
        return $this->belongsToMany(TicketType::class, 'ticket_type_event_type');
    }
}
