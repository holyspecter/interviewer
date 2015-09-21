<?php

namespace Interviewer\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Interviewer\Model\Company;
use Interviewer\Http\Requests;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Response
     */
    public function index()
    {
        $companies = Company::all();

        return View::make('companies.index')
            ->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateCompanyRequest $request
     * @return Response
     */
    public function store(Requests\CreateCompanyRequest $request)
    {
        Company::create($request->all());

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Company  $company
     *
     * @return Response
     */
    public function show(Company $company)
    {
        return View::make('companies.show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Company $company
     * @return Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Company $company
     * @return Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
