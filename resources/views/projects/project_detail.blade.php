@extends('layouts.main')

@section('maincontainer')
    <section class="detilproyekwrap" style="margin-bottom:1rem">
        <div class=""><a style="font-family: 'poppins',sans-serif; text-decoration:none"
                href="{{ url('/projects') }}">Kembali Ke Halaman Proyek</a>
            {{-- <h1 style="font-family: 'poppins',sans-serif; margin-top:1rem; margin-bottom:1rem; font-size:1rem">
                {{ $project->project_name }}
            </h1> --}}
            {{-- <p style="font-family: 'poppins',sans-serif">{{ $project->status->status_name }}</p> --}}
        </div>

        <div class="layoutproject" style="font-family: 'poppins',sans-serif; margin-top:1rem">
            {!! $project->project_description !!}

        </div>
        {{-- {{ $project->project_budget }}% --}}
        {{-- {{ $project->status->status_name }} --}}
        {{-- {{ $project->project_description }} --}}
        {{-- {{ $project->project_target }} --}}
        {{-- {{ $project->project_start }} --}}
        {{-- {{ $project->project_duration }} --}}
        <div class="detailproject_container">
            <h3 style="font-family: 'poppins',sans-serif;">Anggaran Proyek :</h3>
            <p style="font-family: 'poppins',sans-serif; margin-bottom:1rem">
                Rp. {{ number_format($project->project_budget, 2, ',', '.') }}
            </p>
            <h3 style="font-family: 'poppins',sans-serif;">Target Proyek :</h3>
            <p style="font-family: 'poppins',sans-serif; margin-bottom:1rem">
                {{ $project->project_target }}
            </p>
            <h3 style="font-family: 'poppins',sans-serif;">Masa Kerja :</h3>
            <p style="font-family: 'poppins',sans-serif; margin-bottom:1rem">
                {{ $project->project_duration }}
            </p>
            <h3 style="font-family: 'poppins',sans-serif;">Mulai :</h3>
            <p style="font-family: 'poppins',sans-serif; margin-bottom:1rem">
                {{ $project->project_start }}
            </p>

            <div class="project-files" style="font-family: 'poppins',sans-serif; margin-bottom:1rem">
                <h3>Daftar File Proyek :</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr style="font-size: 0.8rem;">
                            <th>File</th>
                            <th></th>
                            {{-- <th></th> --}}
                            <th></th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($project->files as $file)
                            <tr style="font-size: 0.8rem;">
                                <td>{{ $file->file_name }}</td>
                                <td>{{ $file->file_info }}</td>
                                {{-- <td>{{ $file->file_path }}</td> --}}
                                <td>{{ $file->created_at }}</td>
                                <td><a href="{{ route('project-files.download', $file->id) }}">Download</a></td>
                            </tr>
                            @if (session('message'))
                                <div class="alert alert-info">
                                    {{ session('message') }}
                                </div>
                            @endif
                        @empty
                            <tr style="font-size: 0.8rem;">
                                <td colspan="3" style="font-size: 0.8rem;">No files available for this project.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>


            <div style="font-family: 'poppins',sans-serif;">
                <h3>Pelaksana dan Investor :</h3>
                <table class="table table-bordered table-striped" style="font-size: 0.8rem;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project->investors as $investor)
                            <tr>
                                <td>{{ $investor->investor_name }}</td>
                                <td>
                                    {{-- @if ($investor->pivot->filecontract_path && $investor->pivot->filecontract_name)
                                    <a
                                        href="{{ route('project-investor-files.download', ['slug' => $investor->pivot->slug]) }}">
                                        {{ $investor->pivot->filecontract_name }}
                                    </a>
                                @else
                                    Tidak ada file kontrak
                                @endif --}}
                                    {{ $investor->investor_info }}
                                </td>
                                {{-- <td>{{ $investor->pivot->contribution_amount }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>





        </div>
    </section>
@endsection
