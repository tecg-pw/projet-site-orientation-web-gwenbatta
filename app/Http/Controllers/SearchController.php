<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use App\Models\ActualityTranslation;
use App\Models\Book;
use App\Models\BookTranslation;
use App\Models\Doc;
use App\Models\DocTranslation;
use App\Models\Glossary;
use App\Models\GlossaryTranslation;
use App\Models\Opportunity;
use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\Project;
use App\Models\ProjetTranslation;
use App\Models\Subject;
use App\Models\Tool;
use App\Models\ToolTranslation;
use App\Models\Tuto;
use App\Models\TutoTranslation;
use App\Models\OpportunityTranslation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private array $results = [];
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search_bar') ?? '';

        if ($searchTerm) {
            $this->projects($locale, $searchTerm);
            $this->tutos($locale, $searchTerm);
            $this->tools($locale, $searchTerm);
            $this->docs($locale, $searchTerm);
            $this->opportunities($locale, $searchTerm);
            $this->people($locale, $searchTerm);
            $this->books($locale, $searchTerm);
            $this->news($locale, $searchTerm);
            $this->subjects($locale, $searchTerm);
            $this->glossaries($locale, $searchTerm);


        } //OK
        $results = $this->results;

        $total = 0;

        if (count($results) > 0) {
            foreach ($results as $result) {
                $total += count($result);
            }
        }

        return view('result_search', compact('results'));
    }

    private function projects(string $locale, string $searchTerm): void{
        $idProjects = [];

        $referencesProjects = ProjetTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('date', 'like', '%' . $searchTerm . '%');
            })->get();

        foreach ($referencesProjects as $referenceProject) {
            $idProjects [] = $referenceProject->project_id;
        }

        if (count($idProjects)>0) {
            $this->results['projects'] = Project::whereIn('id', $idProjects)->get();
        }
    }
    private function tutos(string $locale, string $searchTerm):void{
        $idTutos = [];

        $referencesTutos = TutoTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('languages', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($referencesTutos as $referenceTuto) {
            $idTutos [] = $referenceTuto->tuto_id;
        }

        if (count($idTutos)>0){
            $this->results['tuto'] = Tuto::whereIn('id', $idTutos)->get();
        }
    }
    private function news(string $locale, string $searchTerm):void{
        $idNews = [];
        $referencesActualities = ActualityTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
                    ->orWhere('date', 'like', '%' . $searchTerm . '%');
            })->get();

        foreach ($referencesActualities as $referenceActuality) {
            $idNews [] = $referenceActuality->actuality_id;
        }
        if (count($idNews)>0) {
            $results['news'] = Actuality::whereIn('id', $idNews)->get();
        }
    }
    private function subjects(string $locale, string $searchTerm):void{
        $idSubjects = [];
        $referenceSubjects = Subject::query()
            ->where(function ($query) use ($searchTerm) {
                $query->where('subjects.subject', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($referenceSubjects as $referenceSubject) {
            $idSubjects [] = $referenceSubject->id;
        }

        if (count($idSubjects)>0) {
            $this->results['subjects'] = Subject::whereIn('id', $idSubjects)->get();
        }
    }
    private function docs(string $locale, string $searchTerm):void{
        $idDocs = [];
        $referencesDocs = DocTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('doctranslations.name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($referencesDocs as $referenceDoc) {
            $idDocs [] = $referenceDoc->doc_id;
        }
        if (count($idDocs)>0) {
            $this->results['doc'] = Doc::whereIn('id', $idDocs)->get();
        }
    }
    private function tools(string $locale, string $searchTerm):void{
        $idTools = [];
        $referencesTools = ToolTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($referencesTools as $referenceTool) {
            $idTools [] = $referenceTool->tool_id;
        }
        if (count($idTools)>0) {
            $this->results['tool'] = Tool::whereIn('id', $idTools)->get();
        }
    }
    private function opportunities(string $locale, string $searchTerm):void{
        $idOpportunities = [];
        $referenceOpportunities = OpportunityTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('opportunitytranslations.name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($referenceOpportunities as $referenceOpportunity) {
            $idOpportunities [] = $referenceOpportunity->opportunity_id;
        }
        if (count($idOpportunities)>0) {
            $this->results['opportunity'] = Opportunity::whereIn('id', $idOpportunities)->get();
        }
    }
    private function glossaries(string $locale, string $searchTerm):void{
        $idGlossaries = [];
        $referencesGlossaries = GlossaryTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('definition', 'like', '%' . $searchTerm . '%');
            })->get();

        foreach ($referencesGlossaries as $referenceGlossary) {
            $idGlossaries [] = $referenceGlossary->glossary_id;
        }
        if (count($idGlossaries)>0) {
            $this->results['glossary'] = Glossary::whereIn('id', $idGlossaries)->get();
        }
    }
    private function books(string $locale, string $searchTerm):void{
        $idBooks = [];
        $referencesBooks = BookTranslation::query()
            ->where('locale', $locale)
            ->where(function ($query) use ($searchTerm) {
                $query->where('booktranslations.name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
            })->get();
        foreach ($referencesBooks as $referenceBook) {
            $idBooks [] = $referenceBook->book_id;
        }
        if (count($idBooks)>0) {
        $this->results['book'] = Book::whereIn('id', $idBooks)->get();
    }}
    private function people(string $locale, string $searchTerm):void{
        $idPeople = [];
        $referencePeople = PersonTranslation::query()
            ->where('locale', $locale)
            ->where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('firstname', 'like', '%' . $searchTerm . '%')
            ->where('locale', $locale)
            ->orWhere('status', 'like', '%' . $searchTerm . '%')
            ->where('locale', $locale)
            ->orWhere('begin', 'like', '%' . $searchTerm . '%')
            ->where('locale', $locale)
            ->orWhere('end', 'like', '%' . $searchTerm . '%')
            ->where('locale', $locale)
            ->get();
        foreach ($referencePeople as $referencePerson) {
            $idPeople [] = $referencePerson->people_id;
        }
        if (count($idPeople)>0) {
            $this->results['people'] = People::whereIn('id', $idPeople)->get();
        }
    }

    public function  ajax(string $locale = null){
        $searchTerm = request()->input('search_bar') ?? '';

        if ($searchTerm) {
            $this->projects($locale, $searchTerm);
            $this->tutos($locale, $searchTerm);
            $this->tools($locale, $searchTerm);
            $this->docs($locale, $searchTerm);
            $this->opportunities($locale, $searchTerm);
            $this->people($locale, $searchTerm);
            $this->books($locale, $searchTerm);
            $this->news($locale, $searchTerm);
            $this->subjects($locale, $searchTerm);
            $this->glossaries($locale, $searchTerm);


        } //OK
        $results = $this->results;

        $total = 0;

        if (count($results) > 0) {
            foreach ($results as $result) {
                $total += count($result);
            }
        }

        return view('components.container_globale', compact('results'));
    }

}
