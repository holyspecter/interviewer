<?php

namespace Interviewer\Http\Controllers;

use Interviewer\Http\Requests;
use Interviewer\Model\Company;
use Interviewer\Model\Position;

class PositionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Company $company
     *
     * @return \Illuminate\View\View
     */
    public function index(Company $company)
    {
        return view('positions.index', [
            'company' => $company,
        ]);
    }

    /**
     * @param Company $company
     *
     * @return \Illuminate\View\View
     */
    public function create(Company $company)
    {
        return view('positions.create', [
            'company' => $company
        ]);
    }

    /**
     * @param Requests\CreatePositionRequest $request
     * @param Company                        $company
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\CreatePositionRequest $request, Company $company)
    {
        $position = new Position($request->all());
        $position->company_id = $company->id;

        $position->save();

        return redirect()->route('companies.show', [
            'company' => $company,
        ]);
    }

    /**
     * @param Company  $company
     * @param Position $position
     * @return \Illuminate\View\View
     */
    public function show(Company $company, Position $position)
    {
        return view('positions.show', [
            'company' => $company,
            'position' => $position
        ]);
    }
}
