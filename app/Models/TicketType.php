<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TicketType extends Model
{
    use HasFactory;

    public function eventTypes(): BelongsToMany
    {
        return $this->belongsToMany(EventType::class, 'ticket_type_event_type');
    }
}
