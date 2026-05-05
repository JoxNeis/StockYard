<?php

namespace App\enums;

enum JobTitle: string
{
    case MANAGER = 'manager';
    case Supervisor = 'supervisor';
    case STAFF = 'staff';
    case INTERN = 'intern';
    case CONTRACT = 'contract';
    case PIECERATE = 'piece-rate';
}