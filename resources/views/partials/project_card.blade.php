<div class="proj_card-container">
    <div class="proj_card-top">
        <span class="proj_project-type">
            <p>{{ $project->status->status_name }}</p>
        </span>
        <div class="proj_blur">
            <img src="../../images/gbrproject/{{ $project->project_headgbr }}" alt="">

        </div>
    </div>

    {{-- {{ $project->project_budget }}% --}}
    {{-- {{ $project->status->status_name }} --}}
    {{-- {{ $project->project_description }} --}}
    {{-- {{ $project->project_target }} --}}
    {{-- {{ $project->project_start }} --}}
    {{-- {{ $project->project_duration }} --}}
    <div class="proj_content">

        <div class="proj_title">{{ $project->project_name }}</div>
        <div class="proj_cardlink">
            <a href="{{ route('projects.detail', $project->slug) }}">Open Project</a>
        </div>
        {{-- <button class="proj_btn"> Open Project </button> --}}
    </div>
</div>
