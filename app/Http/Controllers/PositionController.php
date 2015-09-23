<?php

namespace Interviewer\Http\Controllers;

use Illuminate\Http\Response;
use Interviewer\Http\Requests;
use Interviewer\Model\Company;
use Interviewer\Model\Position;
use Interviewer\Model\Questionnaire;

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
            'company' => $company,
            'questionnaires' => Questionnaire::lists('title', 'id'),
        ]);
    }

    /**
     * @param Requests\PositionRequest $request
     * @param Company                        $company
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\PositionRequest $request, Company $company)
    {
        $position = new Position($request->all());
        $position->company_id = $company->id;
        $position->questionnaire()->associate($request->input('questionnaire'));

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

    /**
     * @param Company  $company
     * @param Position $position
     *
     * @return \Illuminate\View\View
     */
    public function edit(Company $company, Position $position)
    {
        return view('positions.edit', [
            'company' => $company,
            'position' => $position,
            'questionnaires' => Questionnaire::lists('title', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\PositionRequest  $request
     * @param Company   $company
     * @param Position $position
     *
     * @return Response
     */
    public function update(Requests\PositionRequest $request, Company $company, Position $position)
    {
        $position->update($request->all());

        $position->questionnaire()->associate($request->input('questionnaire'));
        $position->save();

        return redirect()->route('companies.show', [
            'company' => $company,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
