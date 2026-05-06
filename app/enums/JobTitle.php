<?php

namespace App\Enums;

enum JobTitle: string
{
    case DIRECTOR = 'director';
    case MANAGER = 'manager';
    case Supervisor = 'supervisor';
    case STAFF = 'staff';
    case INTERN = 'intern';
    case CONTRACT = 'contract';
    case PIECERATE = 'piece-rate';
}