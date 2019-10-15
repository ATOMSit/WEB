<?php

namespace App;

use Hyn\Tenancy\Abstracts\SystemModel;
use Hyn\Tenancy\Contracts\Website as WebsiteContract;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Website extends SystemModel implements WebsiteContract
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'name', 'description', 'managed_by_database_connection'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'null'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'customer_id' => 'integer',
        'name' => 'string',
        'descripton' => 'string',
        'managed_by_database_connection' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    /**
     * Returns the domain names associated with the site.
     *
     * @return HasMany
     */
    public function hostnames(): HasMany
    {
        return $this->hasMany(Hostname::class);
    }
}
