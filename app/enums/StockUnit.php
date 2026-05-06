<?php
namespace App\Enums;

enum StockUnit: string
{
    case PIECE = 'piece';
    case BOX = 'box';
    case KILOGRAM = 'kilogram';
    case GRAM = 'gram';
    case LITER = 'liter';
    case METER = 'meter';
    case METER_SQUARED = 'm2';
}