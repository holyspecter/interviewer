<?php

namespace Interviewer\Http\Controllers;

use Interviewer\Http\Requests;
use Interviewer\Model\Company;
use Interviewer\Model\Position;

class PositionController extends Controller
{
    /**
     * @param int $companyId
     *
     * @return \Illuminate\View\View
     */
    public function create($companyId)
    {
        $company = Company::findOrFail($companyId);

        return view('positions.create', [
            'company' => $company
        ]);
    }

    /**
     * @param Requests\CreatePositionRequest $request
     * @param int                            $companyId
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * @param Position $position
     *
     * @return \Illuminate\View\View
     */
    public function show(Position $position)
    {
        return view('positions.show', [
            'position' => $position
        ]);
    }
}
