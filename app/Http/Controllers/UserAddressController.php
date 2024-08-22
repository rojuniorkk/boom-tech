<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function store(Request $request)
    {

        $user = Auth::user();
        $address = Address::where('user_id', $user->id)->first();

        $request->validate([
            'rua' => 'required',
            'numero' => 'required',
            'complemento' => 'required',
            'cep' => 'required',
            'uf' => 'required',
            'bairro' => 'required',
            'cidade' => 'required'
        ]);

        if ($address == null) {
            Address::create([
                'user_id' => $user->id,
                'rua' => $request->rua,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'cep' => $request->cep,
                'uf' => $request->uf,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade
            ]);

        } else {

            $address->update([
                'rua' => $request->rua,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'cep' => $request->cep,
                'uf' => $request->uf,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade
            ]);
        }


        return redirect()->back()->with('status', 'address-success');
    }
}
