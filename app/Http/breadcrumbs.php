<?php

use \DaveJamesMiller\Breadcrumbs\Generator as BreadcrumbsGenerator;
use Interviewer\Model\Company;
use Interviewer\Model\Position;

Breadcrumbs::register('home', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('companies.index', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Companies', route('companies.index'));
});

Breadcrumbs::register('companies.show', function (BreadcrumbsGenerator $breadcrumbs, Company $company) {
    $breadcrumbs->parent('companies.index');
    $breadcrumbs->push($company->name, route('companies.show', ['companies' => $company->id]));
});

Breadcrumbs::register('companies.create', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('companies.index');
    $breadcrumbs->push('New company', route('companies.create'));
});

Breadcrumbs::register('companies.positions.index', function (BreadcrumbsGenerator $breadcrumbs, Company $company) {
    $breadcrumbs->parent('companies.show', $company);
    $breadcrumbs->push('Positions', route('companies.positions.index', ['companies' => $company->id]));
});

Breadcrumbs::register('companies.positions.create', function (BreadcrumbsGenerator $breadcrumbs, Company $company) {
    $breadcrumbs->parent('companies.positions.index', $company);
    $breadcrumbs->push('New position', route('companies.positions.create'));
});

Breadcrumbs::register(
    'companies.positions.show',
    function (BreadcrumbsGenerator $breadcrumbs, Company $company, Position $position) {
        $breadcrumbs->parent('companies.positions.index', $company);
        $breadcrumbs->push($position->title, route('companies.positions.show'));
    }
);
