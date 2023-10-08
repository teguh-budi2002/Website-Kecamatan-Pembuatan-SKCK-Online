<?php

namespace App\Http\Controllers;

use App\Enums\SKCK as SKCKStatus;
use App\Models\SKCK;
use App\Models\SKCKValidate;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SKCKController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $dataSkck = SKCK::with('skck_validate_by')->where('user_id', Auth::user()->id)->first();
            return view('skck', ['data_skck_user' => $dataSkck]);
        } else {
            return view('skck', ['data_skck_user' => null]);
        }
    }

    public function visiMisi() {
        return view('visi-misi');
    }

    public function skck_submit(Request $request) {
        if (!Auth::check()) {
            Alert::warning("PERHATIAN", "Silahkan Login Terlebih Dahulu Sebelum Mengisi Formulir SKCS");
            return back()->withInput();
        }

        DB::beginTransaction();
        try {
            $validation =  $request->validate([
                'first_name' => 'required',
                'last_name'  => 'required',
                'nik'        => 'required',
                'address'    => 'required',
                'birthday'   => 'required',
                'place_of_birth'    =>  'required',
                'gender'            => 'required',
                'phone_number'      => 'required|numeric|min:11',
                'purposes_of'       => 'required',
                'image'      => 'required|image',
                'religion'   => 'required',
                'country'    => 'required',
            ]);

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                $putIntoStorage = Storage::putFileAs('/public/img_profile/', $file, $filename);
            }

            SKCK::create([
                'user_id'       =>  Auth::id(),
                'police_number' =>  Carbon::now()->format('m') . '-' . rand(1,999999),
                'first_name'    =>  $request->first_name,
                'last_name'     =>  $request->last_name,
                'nik'           =>  $request->nik,
                'address'       =>  $request->address,
                'birthday'      =>  $request->birthday,
                'place_of_birth'    =>  $request->place_of_birth,
                'gender'    =>  $request->gender,
                'phone_number'  =>  $request->phone_number,
                'purposes_of'   =>  $request->purposes_of,
                'image'         =>  $filename,
                'validity_period'   => 3,
                'status'        =>  SKCKStatus::Pending,
                'religion'      =>  $request->religion,
                'country'       =>  $request->country,
            ]);
            DB::commit();

            Alert::success("BERHASIL", "Formulir SKCK Berhasil Dikirim, Silahkan Tunggu Sampai Proses Validasi Selesai");
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();

            Alert::error("ERROR SISI SERVER: ", $th->getMessage());
            return back()->withInput();
        }
    }

    public function skck_validation(Request $request) {
        $validation = $request->validate([
            'signature_by'  => 'required',
            'signature'     => 'required|image',
            'good_behavior' => 'required',
            'is_criminal'   => 'required',
            'is_join_banned_organization'   => 'required',
        ], [
            'signature_by.required'  =>  'Cantumkan siapa yang bertanda tangan!',
            'signature.required'     =>  'Tanda tangan harus dicantumkan!',
        ]);
        DB::beginTransaction();
        try {
            if ($request->file('signature')) {
                $file = $request->file('signature');
                $filename = $file->getClientOriginalName();
    
                $putIntoStorage = Storage::putFileAs('/public/signature/' . $request->police_number . '/', $file, $filename);
            }

            SKCK::whereId($request->skck_id)->update(['status' => SKCKStatus::Konfirmasi]);
    
            SKCKValidate::create([
                'user_id'       => $request->user_id,
                'skck_id'       => $request->skck_id,
                'signature_by'  => $request->signature_by,
                'signature'     => $filename,
                'good_behavior' => $request->good_behavior,
                'is_criminal'   => $request->is_criminal,
                'is_join_banned_organization'   => $request->is_join_banned_organization
            ]);
            DB::commit();

            Alert::success("BERHASIL", "Formulir SKCK Berhasil Dikonfirmasi");
            return redirect('dashboard/list-skck');
        } catch (\Throwable $th) {
            DB::rollBack();

            Alert::error("ERROR SISI SERVER: ", $th->getMessage());
            return back()->withInput();
        }
    }
}
