<?php
namespace App\Enums;

enum StockUnit: string
{
    case PIECE = 'piece';
    case BOX = 'box';
    case KILOGRAM = 'kg';
    case GRAM = 'gram';
    case LITER = 'liter';
    case METER = 'meter';
    case METERSQUARED = 'm2';
}