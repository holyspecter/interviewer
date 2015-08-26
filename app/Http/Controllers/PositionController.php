<?php

namespace Interviewer\Http\Controllers;

use Interviewer\Http\Requests;
use Interviewer\Http\Controllers\Controller;
use Interviewer\Model\Company;
use Interviewer\Model\Position;

class PositionController extends Controller
{
    public function create($companyId)
    {
        $company = Company::findOrFail($companyId);

        return view('positions.create', [
            'company' => $company
        ]);
    }

    public function store(Requests\CreatePositionRequest $request, $companyId)
    {
        $company = Company::findOrFail($companyId);

        $position = new Position($request->all());
        $position->company_id = $company->id;

        $position->save();

        return redirect()->route('companies.show', [
            'company' => $company,
        ]);
    }

    public function show($id)
    {
        $position = Position::findOrFail($id);

        return view('positions.show', [
            'position' => $position
        ]);
    }
}
