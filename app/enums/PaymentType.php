<?php

namespace App\Enums;

enum PaymentType: string
{
    case CASH = "cash";
    case TRANSFER = "transfer";
    case CHECK = "check";
    case CREDIT = "credit";
    case OTHER = "other";
}