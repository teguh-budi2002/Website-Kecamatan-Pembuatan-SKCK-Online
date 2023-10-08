<?php

namespace App\Enums;

enum SKCK: string
{
    case Pending = 'Pending';
    case Proses = 'Proses';
    case Konfirmasi = 'Konfirmasi';
}