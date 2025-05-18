<div>
    @if($currentTab === 'data-alumni')
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <span>Tampilkan</span>
                    <select class="form-select form-select-sm" style="width: auto;" id="per_page_select">
                        <option value="10" {{ $currentPerPage == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ $currentPerPage == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ $currentPerPage == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ $currentPerPage == 100 ? 'selected' : '' }}>100</option>
                    </select>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <span>Cari</span>
                    <input type="text" class="form-control form-control-sm" 
                           id="search_input" placeholder="Cari alumni..." 
                           value="{{ $currentSearch }}">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">No</th>
                            <th>
                                <a href="{{ url()->current() }}?tab=data-alumni&sort=nama&order={{ $currentSort == 'nama' && $currentOrder == 'asc' ? 'desc' : 'asc' }}&search={{ $currentSearch }}&per_page={{ $currentPerPage }}" 
                                   class="text-white text-decoration-none">
                                    Nama
                                    <span class="float-end">
                                        @if($currentSort == 'nama')
                                            <i class="fas fa-sort-{{ $currentOrder == 'asc' ? 'up' : 'down' }}"></i>
                                        @else
                                            <i class="fas fa-sort"></i>
                                        @endif
                                    </span>
                                </a>
                            </th>
                            <th>
                                <a href="{{ url()->current() }}?tab=data-alumni&sort=email&order={{ $currentSort == 'email' && $currentOrder == 'asc' ? 'desc' : 'asc' }}&search={{ $currentSearch }}&per_page={{ $currentPerPage }}" 
                                   class="text-white text-decoration-none">
                                    Email
                                    <span class="float-end">
                                        @if($currentSort == 'email')
                                            <i class="fas fa-sort-{{ $currentOrder == 'asc' ? 'up' : 'down' }}"></i>
                                        @else
                                            <i class="fas fa-sort"></i>
                                        @endif
                                    </span>
                                </a>
                            </th>
                            <th>
                                <a href="{{ url()->current() }}?tab=data-alumni&sort=tahun_lulus&order={{ $currentSort == 'tahun_lulus' && $currentOrder == 'asc' ? 'desc' : 'asc' }}&search={{ $currentSearch }}&per_page={{ $currentPerPage }}" 
                                   class="text-white text-decoration-none">
                                    Tahun Lulus
                                    <span class="float-end">
                                        @if($currentSort == 'tahun_lulus')
                                            <i class="fas fa-sort-{{ $currentOrder == 'asc' ? 'up' : 'down' }}"></i>
                                        @else
                                            <i class="fas fa-sort"></i>
                                        @endif
                                    </span>
                                </a>
                            </th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($allAlumni as $key => $item)
                            <tr>
                                <td class="text-center">{{ ($allAlumni->currentPage() - 1) * $allAlumni->perPage() + $key + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->tahun_lulus ?: '-' }}</td>
                                <td class="text-center">
                                    <a href="" 
                                       class="btn btn-sm btn-info text-white border-0" 
                                       title="Detail" style="background-color: #17a2b8">
                                        <i class="fas fa-circle-info"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">Tidak ada data alumni</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <p class="mb-0">
                Menampilkan {{ $allAlumni->firstItem() ?: '0' }} sampai 
                {{ $allAlumni->lastItem() ?: '0' }} dari 
                {{ $allAlumni->total() }} entri
            </p>
        </div>
        <div class="col-md-6">
            <div class="float-end">
                @if($allAlumni->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm">
                        {{-- Previous Page Link --}}
                        <li class="page-item {{ $allAlumni->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" 
                               href="{{ $allAlumni->previousPageUrl() }}&tab=data-alumni&sort={{ $currentSort }}&order={{ $currentOrder }}&search={{ $currentSearch }}&per_page={{ $currentPerPage }}" 
                               rel="prev">
                                Sebelumnya
                            </a>
                        </li>
                        
                        {{-- Pagination Elements --}}
                        @foreach ($allAlumni->getUrlRange(1, $allAlumni->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $allAlumni->currentPage() ? 'active' : '' }}">
                                <a class="page-link" 
                                   href="{{ $url }}&tab=data-alumni&sort={{ $currentSort }}&order={{ $currentOrder }}&search={{ $currentSearch }}&per_page={{ $currentPerPage }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endforeach
                        
                        {{-- Next Page Link --}}
                        <li class="page-item {{ !$allAlumni->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link" 
                               href="{{ $allAlumni->nextPageUrl() }}&tab=data-alumni&sort={{ $currentSort }}&order={{ $currentOrder }}&search={{ $currentSearch }}&per_page={{ $currentPerPage }}" 
                               rel="next">
                                Selanjutnya
                            </a>
                        </li>
                    </ul>
                </nav>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle per page change
    document.getElementById('per_page_select').addEventListener('change', function() {
        const perPage = this.value;
        updateUrlParams({per_page: perPage, page: 1});
    });

    // Handle search input with debounce
    let searchTimer;
    document.getElementById('search_input').addEventListener('input', function() {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(() => {
            updateUrlParams({search: this.value, page: 1});
        }, 500);
    });

    // Function to update URL parameters
    function updateUrlParams(params) {
        const currentUrl = new URL(window.location.href);
        const searchParams = currentUrl.searchParams;
        
        // Update parameters
        Object.keys(params).forEach(key => {
            searchParams.set(key, params[key]);
        });
        
        // Always maintain the tab parameter
        searchParams.set('tab', 'data-alumni');
        
        window.location.href = currentUrl.toString();
    }
});
</script>