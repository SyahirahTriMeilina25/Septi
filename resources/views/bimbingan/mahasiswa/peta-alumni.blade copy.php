@extends('layouts.app')

@section('title', 'Peta Sebaran Alumni')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css" />
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

        #map {
            height: 800px;
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        #filterPopup {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: 350px;
            display: none;
        }

        #filterButton { 
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        #filterButton:hover {
            transform: translateY(-2px);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .select2-container--default .select2-selection--single {
            height: 38px;
            padding: 0 6px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 36px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 36px;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #198754 0%, #20c997 100%);
            border: none;
            color: white;
            font-weight: 500;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
        }

        @media (max-width: 768px) {
            #filterPopup {
                width: 90%;
                left: 5%;
                bottom: auto;
                top: 10%;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container mt-5">
        <h1 class="mb-2 gradient-text fw-bold">Peta Sebaran Alumni</h1>
        <hr>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-white p-0">
                <ul class="nav nav-tabs" id="bimbinganTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('alumni.profil') }}" class="nav-link px-4 py-3">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('alumni') }}" class="nav-link px-4 py-3">
                            Data Alumni
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('alumni.peta') }}" class="nav-link active px-4 py-3">
                            Peta Alumni
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card-body p-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <label class="me-2">Tampilkan</label>
                            <select class="form-select form-select-sm w-auto" id="lengthMenu">
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                            </select>
                            <label class="ms-2">entries</label>
                        </div>
                    </div>
                </div>

                <div id="map">
                    <div id="filterButton">⚙️</div>
                    <div id="filterPopup">
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Filter Alumni</h5>
                            <button type="button" id="closeFilterPopup" class="btn-close"></button>
                        </div>

                        <form id="filterForm">
                            <div class="mb-3">
                                <select id="filterName" class="form-select">
                                    <option value="">Cari Nama Alumni</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <select id="companySelect" class="form-select">
                                    <option value="">Pilih Perusahaan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <select id="provinceSelect" class="form-select">
                                    <option value="">Pilih Provinsi</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <select id="citySelect" class="form-select" disabled>
                                    <option value="">Pilih Kota</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tahun Lulus</label>
                                <select id="yearSelect" class="form-select">
                                    <option value="">Semua</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status Pekerjaan</label>
                                <select id="jobStatusSelect" class="form-select">
                                    <option value="">Semua</option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Studi Lanjut">Studi Lanjut</option>
                                    <option value="Mencari Kerja">Mencari Kerja</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <select id="jobSelect" class="form-select">
                                    <option value="">Pilih Pekerjaan</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Range Gaji</label>
                                <div id="salarySlider"></div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span id="salaryStart">Rp 0</span>
                                    <span id="salaryEnd">Rp 50.000.000</span>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-gradient flex-grow-1" id="filterButton2">
                                    Filter
                                </button>
                                <button type="button" class="btn btn-secondary flex-grow-1" id="resetButton">
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pekerjaan</th>
                                <th>Perusahaan</th>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Tahun Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="alumniTableBody">
                            <tr>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">tidak ada data</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </td>   
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3">
                    <p class="mb-2" id="tableInfo">
                        Menampilkan 0 sampai 0 dari 0 entri
                    </p>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end mb-0" id="pagination">
                            <!-- Will be populated by JavaScript -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Alumni -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 shadow border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="detailModalLabel">Detail Alumni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" id="modalContent">
                    <!-- Will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.5.1/dist/leaflet.markercluster.js"></script>
    <script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>
    <script src="{{ asset('js/map-init.js') }}"></script>
@endpush


