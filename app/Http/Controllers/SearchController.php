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
    public function index(string $locale = null)
    {
        $searchTerm = request()->input('search_bar') ?? '';
        $results = [];
        $idTutos = [];
        $idGlossaries = [];
        $idTools = [];
        $idDocs = [];
        $idBooks = [];
        $idOpportunities = [];
        $idPeople = [];
        $idSubjects = [];
        $idProjects = [];
        $idNews = [];

        if ($searchTerm) {
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
            $referencesGlossaries = GlossaryTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('definition', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($referencesGlossaries as $referenceGlossary) {
                $idGlossaries [] = $referenceGlossary->glossary_id;
            }

            $referencesTools = ToolTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referencesTools as $referenceTool) {
                $idTools [] = $referenceTool->tool_id;
            }

            $referencesBooks = BookTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('booktranslations.name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referencesBooks as $referenceBook) {
                $idBooks [] = $referenceBook->book_id;
            }

            $referencesDocs = DocTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('doctranslations.name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referencesDocs as $referenceDoc) {
                $idDocs [] = $referenceDoc->doc_id;
            }

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

            $referenceSubjects = Subject::query()
                ->where(function ($query) use ($searchTerm) {
                    $query->where('subjects.subject', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referenceSubjects as $referenceSubject) {
                $idSubjects [] = $referenceSubject->id;
            }

            $referencesProjects = ProjetTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('date', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($referencesProjects as $referenceProject) {
                $idProjects [] = $referenceProject->project_id;
            }

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



            if (count($idTutos)>0){
                $results['tuto'] = Tuto::whereIn('id', $idTutos)->get();
            }
            if (count($idGlossaries)>0) {
                $results['glossary'] = Glossary::whereIn('id', $idGlossaries)->get();
            }
            if (count($idTools)>0) {
                $results['tool'] = Tool::whereIn('id', $idTools)->get();
            }
            if (count($idBooks)>0) {
                $results['book'] = Book::whereIn('id', $idBooks)->get();
            }
            if (count($idDocs)>0) {
                $results['doc'] = Doc::whereIn('id', $idDocs)->get();
            }
            if (count($idOpportunities)>0) {
                $results['opportunity'] = Opportunity::whereIn('id', $idOpportunities)->get();
            }
            if (count($idPeople)>0) {
                $results['people'] = People::whereIn('id', $idPeople)->get();
            }
            if (count($idSubjects)>0) {
                $results['subjects'] = Subject::whereIn('id', $idSubjects)->get();
            }
            if (count($idProjects)>0) {
                $results['projects'] = Project::whereIn('id', $idProjects)->get();
            }
            if (count($idNews)>0) {
                $results['news'] = Actuality::whereIn('id', $idNews)->get();
            }

        } //OK

        return view('result_search', compact('results'));
    }
    public function  ajax(string $locale = null){
        $searchTerm = request()->input('search_bar') ?? '';
        $results = [];
        $idTutos = [];
        $idGlossaries = [];
        $idTools = [];
        $idDocs = [];
        $idBooks = [];
        $idOpportunities = [];
        $idPeople = [];
        $idSubjects = [];
        $idProjects = [];
        $idNews = [];

        if ($searchTerm) {
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
            $referencesGlossaries = GlossaryTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('definition', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($referencesGlossaries as $referenceGlossary) {
                $idGlossaries [] = $referenceGlossary->glossary_id;
            }

            $referencesTools = ToolTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referencesTools as $referenceTool) {
                $idTools [] = $referenceTool->tool_id;
            }

            $referencesBooks = BookTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('booktranslations.name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referencesBooks as $referenceBook) {
                $idBooks [] = $referenceBook->book_id;
            }

            $referencesDocs = DocTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('doctranslations.name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referencesDocs as $referenceDoc) {
                $idDocs [] = $referenceDoc->doc_id;
            }

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

            $referenceSubjects = Subject::query()
                ->where(function ($query) use ($searchTerm) {
                    $query->where('subjects.subject', 'like', '%' . $searchTerm . '%');
                })->get();
            foreach ($referenceSubjects as $referenceSubject) {
                $idSubjects [] = $referenceSubject->id;
            }

            $referencesProjects = ProjetTranslation::query()
                ->where('locale', $locale)
                ->where(function ($query) use ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('date', 'like', '%' . $searchTerm . '%');
                })->get();

            foreach ($referencesProjects as $referenceProject) {
                $idProjects [] = $referenceProject->project_id;
            }

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

            if (count($idTutos)>0){
            $results['tuto'] = Tuto::whereIn('id', $idTutos)->get();
            }
            if (count($idGlossaries)>0) {
                $results['glossary'] = Glossary::whereIn('id', $idGlossaries)->get();
            }
            if (count($idTools)>0) {
                $results['tool'] = Tool::whereIn('id', $idTools)->get();
            }
            if (count($idBooks)>0) {
                $results['book'] = Book::whereIn('id', $idBooks)->get();
            }
            if (count($idDocs)>0) {
                $results['doc'] = Doc::whereIn('id', $idDocs)->get();
            }
            if (count($idOpportunities)>0) {
                $results['opportunity'] = Opportunity::whereIn('id', $idOpportunities)->get();
            }
            if (count($idPeople)>0) {
                $results['people'] = People::whereIn('id', $idPeople)->get();
            }
            if (count($idSubjects)>0) {
                $results['subjects'] = Subject::whereIn('id', $idSubjects)->get();
            }
            if (count($idProjects)>0) {
                $results['projects'] = Project::whereIn('id', $idProjects)->get();
            }
            if (count($idNews)>0) {
                $results['news'] = Actuality::whereIn('id', $idNews)->get();
            }
        } //OK

//        else{
//
//        }
        return view('components.container_globale', compact('results'));
    }
}
