<?php

namespace App\Http\Controllers;

use App\Enums\SKCK as SKCKStatus;
use App\Models\SKCK;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.main');
    }

    public function getListSkck() {
        $list_skck = SKCK::paginate(10);
        return view('dashboard.list_skck', ['list_skck' => $list_skck]);
    }

    public function validationSkck($number_police) {
        $skck = SKCK::where('police_number', $number_police)->first();
        $skck->status = SKCKStatus::Proses;
        $skck->save();
        return view('dashboard.validation_skck', ['skck' => $skck]);
    }

    public function generateSignature() {
        return view('dashboard.generate-signature');
    }
}
