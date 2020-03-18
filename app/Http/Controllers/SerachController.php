<?php

namespace App\Http\Controllers;

use App\Institute;
use App\News;
use App\Project;
use Illuminate\Http\Request;

class SerachController extends Controller
{
    private $repository;
    private $repositoryInstitute;
    private $repositoryProjects;
    protected $request;

    public function __construct(Request $request, News $news, Institute $institute, Project $project)
    {
        $this->request = $request;
        $this->repository = $news;
        $this->repositoryInstitute = $institute;
        $this->repositoryProjects = $project;
    }
    public function news(Request $request) {
        $filters =  $request->all();
        $news = $this->repository->search($request->filter);
        return view('listanews', [
            'news' => $news,
            'filters' => $filters
            ]);
    }
    public function institutes(Request $request) {
    $filters = $request->all();
    $institute = $this->repositoryInstitute->search($request->filter);
    return view('listaInstitutos', [
        'institutes' => $institute,
        'filters' => $filters
    ]);
    }
    public function projects(Request $request) {
    $filters = $request->all();
    $projects = $this->repositoryProjects->search($request->filter);
    return view('listaProjetos', [
        'projects' => $projects,
        'filters' => $filters
    ]);
    }

}
