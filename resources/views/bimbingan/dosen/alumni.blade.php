@extends('layouts.app')

@section('title', 'Alumni')

@push('styles')
<style>
    .pagination {
        margin-bottom: 0;
    }

    .page-link {
        color: #2563eb;
        border: 1px solid #e5e7eb;
        padding: 0.5rem 0.75rem;
    }

    .page-link:hover {
        color: #1d4ed8;
        background-color: #f3f4f6;
    }

    .action-icons {
        display: flex;
        justify-content: center;
        gap: 5px;
    }

    .action-icon {
        padding: 5px;
        border-radius: 4px;
        cursor: pointer;
        width: 28px;
        height: 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.2s;
        text-decoration: none;
    }

    .action-icon:hover {
        opacity: 0.8;
    }

    .info-icon {
        background-color: #17a2b8;
        color: white !important;
    }

    .breadcrumb {
        background: none;
        padding: 0;
        margin-bottom: 1.5rem;
    }

    .breadcrumb a {
        color: #6B7280;
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb a:hover {
        color: #4B5563;
    }

    .breadcrumb a.active {
        color: #10B981;
    }

    .custom-select {
        border: 1px solid #e2e8f0;
        border-radius: 0.375rem;
    }

    .filter {
        margin-bottom: 1.5rem;
    }

    .table th {
        background-color: #1f2937;
        color: white;
        font-weight: 600;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: white;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>
@endpush

@section('content')
<div class="container mt-5">
    <h1 class="mb-2 gradient-text fw-bold">Data Alumni</h1>
    <hr>

    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-body p-4">
            {{-- Sub-navbar --}}
            <ul class="breadcrumb col-lg-12">
                <li>
                    <a href="{{ route('alumni.profil') }}" class="px-1">
                        Profil
                    </a>
                </li>
                <span class="px-2">|</span>
                <li>
                    <a href="{{ route('alumni') }}" class="breadcrumb-item active fw-bold text-success px-1">
                        Data Alumni
                    </a>
                </li>
                <span class="px-2">|</span>
                <li>
                    <a href="{{ route('alumni.peta') }}" class="px-1">
                        Peta Alumni
                    </a>
                </li>
            </ul>

            {{-- Filter Desktop --}}
            <div class="d-none d-md-flex justify-content-between mb-3">
                <div class="d-flex align-items-center">
                    <div class="dataTables_length input-group me-3">
                        <label class="me-2">Tampilkan</label>
                        <select class="form-select form-select-sm w-auto">
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                            <option value="250">250</option>
                        </select>
                    </div>
                    <div class="input-group me-3">
                        <label class="me-2">Tahun Lulus</label>
                        <select class="form-select form-select-sm w-auto">
                            <option value="" selected>Semua</option>
                            @foreach (['2018', '2019', '2020', '2021', '2022'] as $tahun)
                                <option value="{{ $tahun }}">{{ $tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <label class="me-2">Status Pekerjaan</label>
                        <select class="form-select form-select-sm w-auto">
                            <option value="" selected>Semua</option>
                            @foreach (['Bekerja', 'Tidak Bekerja'] as $status)
                                <option value="{{ strtolower($status) }}">{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-group" style="width: auto;">
                    <label class="me-2 pt-1">Cari</label>
                    <input type="search" class="form-control form-control-sm" placeholder="">
                </div>
            </div>

            {{-- Filter Mobile --}}
            <div class="d-md-none mb-3">
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">
                    <div class="input-group">
                        <label class="me-2">Tampilkan</label>
                        <select class="form-select form-select-sm w-auto">
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                            <option value="250">250</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label class="me-2">Tahun Lulus</label>
                        <select class="form-select form-select-sm w-auto">
                            <option value="" selected>Semua</option>
                            @foreach (['2018', '2019', '2020', '2021', '2022'] as $tahun)
                                <option value="{{ $tahun }}">{{ $tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="input-group" style="width: auto;">
                        <label class="me-2 pt-1">Cari</label>
                        <input type="search" class="form-control form-control-sm" placeholder="">
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tahun Lulus</th>
                            <th>Status Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>2055301001</td>
                            <td>John Doe</td>
                            <td>2022</td>
                            <td>Bekerja</td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <button class="btn btn-secondary btn-sm btnCopy" data-slug="#">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Pagination Info --}}
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3">
                <p class="mb-2">Menampilkan 1 sampai 1 dari 1 entri</p>
                <nav aria-label="Page navigation">
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
        // Initialize DataTable
        $('#datatables').DataTable({
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Tidak ada data yang ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "infoFiltered": "(difilter dari _MAX_ total data)",
                "search": "Cari:",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });

        // Copy link functionality
        $('.btnCopy').click(function() {
            var slugToCopy = $(this).data('slug');
            navigator.clipboard.writeText(slugToCopy).then(function() {
                alert('Tautan berhasil disalin!');
            });
        });
    });
</script>
@endpush
