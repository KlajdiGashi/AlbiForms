<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'total_palets',
        'meta',
        'pack',
        'priority',
        'voip',
        'model_id',
        'model_version_id',
        'tags',
        'deadline_date',
        'user_id',
        'client_id',
        'client_address',
        'firmware',
        'quantity',
        'freight',
        'height_palet',
        'type_of_glue',
        'lan_cable',
        'power_supply',
        'hdmi',
        'remote_control',
        'logo_removal',
        'comment',
        'status',
        'type',
        'lan_cost',
        'psu_cost',
        'refurbishment_cost',
        'transport_customer_cost',
        'transport_outgoing_cost',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deadline_date' => 'datetime',
        'hdmi' => 'boolean',
        'remote_control' => 'boolean',
        'logo_removal' => 'boolean',
        'meta' => 'json',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(Model::class);
    }

    public function modelVersion(): BelongsTo
    {
        return $this->belongsTo(ModelVersion::class);
    }
}
