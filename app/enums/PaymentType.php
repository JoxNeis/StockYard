<?php

namespace App\enums;

enum PaymentType: string
{
    case CASH = "cash";
    case TRANSFER = "transfer";
    case CHECK = "check";
    case OTHER = "other";
}