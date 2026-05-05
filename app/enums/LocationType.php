<?php

namespace App\Enums;

enum LocationType: string
{
    case OFFICE = 'office';
    case WAREHOUSE = 'warehouse';
    case FACTORY = 'factory';
    case DISTRIBUTION_CENTER = 'dc';
    case SHOWROOM = 'showroom';
    case REMOTE_SITE = 'remote_site';
    case RETAIL = 'retail';
}