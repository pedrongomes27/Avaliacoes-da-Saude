<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyEstablishments;
use App\Models\Feedback;
use App\Models\SystemLog;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $unidades = [];
        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchUnidade'])) {
            $unidades = CompanyEstablishments::where('ft_unidade', 'LIKE', '%' . strtolower($search['searchUnidade']) . '%')->get();
        }

        // $unidades = $unidade::where("no_unidade", "LIKE", "%UPA%")->get();

        return view('admin/feedback/index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $unidades)
    {
        $unidade = CompanyEstablishments::where('id', 'LIKE', '%' . $unidades . '%')->pluck('no_unidade')->first();
        return view('admin/feedback/create', compact('unidade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Feedback $feedback)
    {
        $data = $request->all();
        $data['log_ip'] = $_SERVER["REMOTE_ADDR"];

        $feedback->create($data);
        
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
