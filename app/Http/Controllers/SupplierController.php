<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Contact;
use PhpParser\Node\Expr\AssignOp\Concat;

class SupplierController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addsupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        Contact::create([
            'contact_type' => Contact::CONTACT[0],
            'supplier_type' => Contact::TYPE[0],
            'contact_name' => $request->contact_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'vat_id' => $request->vat_id,
            'coc' => $request->coc,
        ]);

        return redirect()->back()->with('message','Company added successfully !');
    }

    // public static function getSuppliers()
    // {
    //     $getSuppliers = Contact::where(['supplier_type'=>'flight','contact_type'=>'supplier']);

    //     return $getSuppliers;
    // }
}
