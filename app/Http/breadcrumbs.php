<?php

use \DaveJamesMiller\Breadcrumbs\Generator as BreadcrumbsGenerator;
use Interviewer\Model\Company;
use Interviewer\Model\Position;
use Interviewer\Model\Questionnaire;

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
    $breadcrumbs->push('New position');
});

Breadcrumbs::register(
    'companies.positions.show',
    function (BreadcrumbsGenerator $breadcrumbs, Company $company, Position $position) {
        $breadcrumbs->parent('companies.positions.index', $company);
        $breadcrumbs->push($position->title);
    }
);

Breadcrumbs::register('companies.questionnaires.index', function (BreadcrumbsGenerator $breadcrumbs, Company $company) {
    $breadcrumbs->parent('companies.show', $company);
    $breadcrumbs->push('Questionnaires', route('companies.questionnaires.index', ['companies' => $company->id]));
});

Breadcrumbs::register(
    'companies.questionnaires.show',
    function (BreadcrumbsGenerator $breadcrumbs, Company $company, Questionnaire $questionnaire) {
        $breadcrumbs->parent('companies.questionnaires.index', $company);
        $breadcrumbs->push($questionnaire->title);
    }
);

Breadcrumbs::register(
    'companies.questionnaires.create',
    function (BreadcrumbsGenerator $breadcrumbs, Company $company) {
        $breadcrumbs->parent('companies.questionnaires.index', $company);
        $breadcrumbs->push('New questionnaire');
    }
);
