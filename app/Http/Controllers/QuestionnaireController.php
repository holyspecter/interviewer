<?php

namespace Interviewer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Interviewer\Http\Requests;
use Interviewer\Http\Controllers\Controller;
use Interviewer\Model\Company;
use Interviewer\Model\Questionnaire;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Company $company
     * @return Response
     */
    public function index(Company $company)
    {
        return view('questionnaires.index', compact($company));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Company $company
     * @return Response
     */
    public function create(Company $company)
    {
        return view('questionnaires.create', [
            'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Requests\QuestionnaireRequest $request
     * @param Company                        $company
     * @return Response
     */
    public function store(Requests\QuestionnaireRequest $request, Company $company)
    {
        $questionnaire = new Questionnaire($request->all());
        $questionnaire->company_id = $company->id;

        $questionnaire->save();

        return redirect()->route('companies.show', [
            'company' => $company,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Company       $company
     * @param Questionnaire $questionnaire
     *
     * @return Response
     */
    public function show(Company $company, Questionnaire $questionnaire)
    {
        return view('questionnaires.show', [
            'questionnaire' => $questionnaire
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
