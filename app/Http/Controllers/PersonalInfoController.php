<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;

class PersonalInfoController extends Controller
{
    public function index()
    {
        return view('multi-step-form');
    }

    public function addPersonalInfo(Request $request)
    {
        $request->session()->reflash();

        //insert validation code later

        //insert personal information
        $query = PersonalInfo::query()->create([
            'first_name' => request('first_name'),
            'middle_name' => request('middle_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'national_id' => request('national_id'),
            'kra_pin' => request('kra_pin'),
            'nhif_no' => request('nhif_no'),
            'nssf_no' => request('nssf_no'),
            'address' => request('address'),
            'code' => request('code'),
            'town' => request('town'),
            'residence' => request('residence'),
        ]);

        $query->kinInfos()->create([
            'kin_first_name' => request('kin_first_name'),
            'kin_last_name' => request('kin_last_name'),
            'relationship' => request('relationship'),
            'kin_phone' => request('kin_phone'),
            'kin_address' => request('kin_address'),
            'kin_code' => request('kin_code'),
            'kin_town' => request('kin_town'),
            'kin_residence' => request('kin_residence'),
        ]);

        $query->helbInfos()->create([
            'institution' => request('personal_info'),
            'reg_no' => request('personal_info'),
            'amount' => request('personal_info'),
            'deductions' => request('personal_info'),
            'acc_name' => request('personal_info'),
            'acc_no' => request('personal_info'),
            'bank_name' => request('personal_info'),
            'branch_name' => request('personal_info'),
        ]);

        return response()->json("Your Details have been successfully saved!", 200);
    }
}
