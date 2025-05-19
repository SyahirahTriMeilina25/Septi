@extends('layouts.app')

@section('title', 'Alumni')

@push('styles')
<style>
    .nav-tabs {
        border: none;
    }
    
    .nav-tabs .nav-link {
        border: none;
        color: #6B7280;
        padding: 0.5rem 1rem;
        margin-right: 1rem;
        font-weight: 500;
    }

    .nav-tabs .nav-link.active {
        color: #2563EB;
        border-bottom: 2px solid #2563EB;
        font-weight: 600;
    }

    .table th {
        background-color: #1E293B !important;
        color: white;
        font-weight: 500;
        border: none;
        padding: 0.75rem;
    }

    .table td {
        padding: 0.75rem;
        color: #374151;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #F9FAFB;
    }

    .btn-info {
        background-color: #0EA5E9;
        border: none;
        padding: 0.25rem 0.5rem;
    }

    .btn-share {
        background-color: #6B7280;
        border: none;
        padding: 0.25rem 0.5rem;
    }

    .filter-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .filter-select {
        border: 1px solid #E5E7EB;
        border-radius: 0.375rem;
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }

    .search-input {
        border: 1px solid #E5E7EB;
        border-radius: 0.375rem;
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }

    .pagination {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .page-link {
        color: #374151;
        border: none;
        padding: 0.25rem 0.75rem;
        border-radius: 0.25rem;
    }

    .page-item.active .page-link {
        background-color: #2563EB;
        color: white;
    }

    .page-title {
        color: #1E293B;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }
</style>
@endpush

@section('content')
<div class="container mt-4">
    <h1 class="page-title">Data Alumni</h1>

    <div class="card shadow-sm border-0 rounded-lg">
        <div class="card-body">
            <!-- Navigation Tabs -->
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumni.profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('alumni') }}">Data Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumni.peta') }}">Peta Alumni</a>
                </li>
            </ul>

            <!-- Filters -->
            <div class="filter-container">
                <div class="d-flex align-items-center">
                    <label class="me-2">Tampilkan</label>
                    <select class="filter-select">
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                    </select>
                </div>

                <div class="d-flex align-items-center">
                    <label class="me-2">Tahun Lulus</label>
                    <select class="filter-select">
                        <option value="">Semua</option>
                        @foreach(range(date('Y'), date('Y')-4) as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex align-items-center">
                    <label class="me-2">Status Pekerjaan</label>
                    <select class="filter-select">
                        <option value="">Semua</option>
                        <option value="bekerja">Bekerja</option>
                        <option value="tidak_bekerja">Tidak Bekerja</option>
                    </select>
                </div>

                <div class="ms-auto">
                    <input type="text" class="search-input" placeholder="Cari">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th class="text-center" style="width: 15%">NIM</th>
                            <th style="width: 30%">Nama</th>
                            <th class="text-center" style="width: 15%">Tahun Lulus</th>
                            <th class="text-center" style="width: 20%">Status Pekerjaan</th>
                            <th class="text-center" style="width: 15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">2055301001</td>
                            <td>John Doe</td>
                            <td class="text-center">2022</td>
                            <td class="text-center">Bekerja</td>
                            <td class="text-center">
                                <button class="btn btn-info btn-sm">
                                    <i class="fas fa-info-circle text-white"></i>
                                </button>
                                <button class="btn btn-share btn-sm">
                                    <i class="fas fa-share-alt text-white"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <p class="mb-0 text-muted">Menampilkan 1 sampai 1 dari 1 entri</p>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <span class="page-link">« Sebelumnya</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link">Selanjutnya »</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')    
<script>
$(document).ready(function() {
    // Handle tab navigation
    $('.nav-link').on('click', function() {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    // Handle copy link functionality
    $('.btn-share').click(function() {
        // Implement share functionality here
        alert('Link berhasil disalin!');
    });
});
</script>
@endpush
