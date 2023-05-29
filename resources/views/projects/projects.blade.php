@extends('layouts.main')

@section('maincontainer')
    {{-- bagian pemanggilan disini, sedang menampilkan ada di card --}}
    <h1 style="font-family:'poppins', sans-serif; text-align:center ">DAFTAR PROYEK</h1>
    <p style="font-family:'poppins', sans-serif; text-align:center ">Kami mengundang Investor dan perusahaan untuk turut
        bersama menyukseskan pekerjaan perencanaan, pembiayaan, investasi, pelaksanaan dan pengawasan proyek yang dikerjakan
        dalam lingkup Perumda Utama Sultra</p>
    <div class="proj_sections">
        <div class="proj_section proj_planning_and_preparation">
            <h2>Planning and Preparation Projects</h2>
            <p>Daftar Proyek - Perencanaan dan Persiapan</p>
            <div class="proj_cardwrap">
                @foreach ($projects as $project)
                    @if (in_array($project->project_status_id, [1, 2]))
                        @include('partials.project_card', ['project' => $project])
                    @endif
                @endforeach
            </div>
        </div>

        <div class="proj_section proj_on_going">
            <h2>On Going Projects</h2>
            <p>Daftar Proyek - Proyek yang sedang berlangsung</p>
            @foreach ($projects as $project)
                @if (in_array($project->project_status_id, [3, 4]))
                    @include('partials.project_card', ['project' => $project])
                @endif
            @endforeach
        </div>

        <div class="proj_section proj_finished">
            <h2>Finished Projects</h2>
            <p>Daftar Proyek - Proyek yang telah selesai</p>
            @foreach ($projects as $project)
                @if ($project->project_status_id == 5)
                    @include('partials.project_card', ['project' => $project])
                @endif
            @endforeach
        </div>
    </div>
@endsection
