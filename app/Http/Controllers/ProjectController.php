<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectStatus;
use App\Models\Investor;
use App\Models\ProjectFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ProjectController extends Controller
{

    public function index()
    {
        // yang berada dalam with(adalah nama method yang harus sama dengan nama method yang dimodel)
        $projects = Project::with('category', 'status', 'investors', 'provider', 'fundingSource')
            ->paginate(20);

        // Return view with the projects
        return view('projects.projects', ['projects' => $projects]);
    }


    public function byCategory($categoryId)
    {
        $projects = Project::with('projectCategory', 'projectStatus', 'investors')
            ->where('project_category_id', $categoryId)
            ->paginate(20);

        // Return view with the projects
    }


    public function byStatus($statusId)
    {
        $projects = Project::with('projectCategory', 'projectStatus', 'investors')
            ->where('project_status_id', $statusId)
            ->paginate(20);

        // Return view with the projects
    }


    public function ongoingProjects()
    {
        $projects = Project::with('projectCategory', 'projectStatus', 'investors')
            ->where('project_status_id', '!=', 5)
            ->paginate(20);

        // Return view with the projects
    }


    public function byInvestor($investorId)
    {
        $projects = Project::with('projectCategory', 'projectStatus', 'investors')
            ->whereHas('investors', function ($query) use ($investorId) {
                $query->where('investor_id', $investorId);
            })
            ->paginate(20);

        // Return view with the projects
    }


    public function showProjectFiles($projectId)
    {
        $projectFiles = Project::findOrFail($projectId)->projectFiles;

        // Return view with the project files
    }

    // bagian download file dari detail proyek :
    public function download($fileId)
    {
        $file = ProjectFile::findOrFail($fileId);
        $filePath = public_path('/files/' . $file->file_name);

        // Cek apakah file ada
        if (!file_exists($filePath)) {
            // Jika file tidak ada, kembalikan pesan informasi
            return back()->with('message', 'Maaf, file yang Anda cari tidak ada, mungkin telah dihapus.');
        }

        $headers = ['Content-Type' => 'application/pdf'];
        return Response::download($filePath, $file->file_name, $headers);
    }


    public function showProjectInvestors($projectId)
    {
        $investors = Project::findOrFail($projectId)->investors;

        // Return view with the project investors
    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('search_term');

        $projects = Project::with('projectCategory', 'projectStatus', 'investors')
            ->where('project_name', 'like', '%' . $searchTerm . '%')
            ->paginate(20);

        // Return view with the projects
    }

    public function detail($slug)
    {
        $project = Project::with('category', 'status', 'investors', 'provider', 'fundingSource')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('projects.project_detail', compact('project'));
    }
}
