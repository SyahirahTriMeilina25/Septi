@php
    $alumni = $user->alumni ?? null;
    $activeStep = request()->get('step', '1');
@endphp

<div class="alumni-form-container">

    <!-- Stepper Header -->
    <div class="d-flex justify-content-between mb-4 mx-md-5 mx-lg-6 mx-xl-7 px-4">
        <a href="{{ request()->url() }}?tab=form-alumni&step=1" 
            class="btn btn-step rounded-circle d-flex justify-content-center align-items-center {{ $activeStep == '1' ? 'active' : '' }}"
            style="width: 50px; height: 50px; padding: 0;"
            data-bs-toggle="tooltip" title="Biodata Alumni">
            <i class="bi bi-person-badge" style="font-size: 15px;"></i>
        </a>

        <div class="stepper-line flex-grow-1 mx-4 align-self-center"></div>

        <a href="{{ request()->url() }}?tab=form-alumni&step=2" 
            class="btn btn-step rounded-circle d-flex justify-content-center align-items-center {{ $activeStep == '2' ? 'active' : '' }}"
            style="width: 50px; height: 50px; padding: 0;"
            data-bs-toggle="tooltip" title="Kuisioner Wajib">
            <i class="bi bi-clipboard-check" style="font-size: 15px;"></i>
        </a>

        <div class="stepper-line flex-grow-1 mx-4 align-self-center"></div>

        <a href="{{ request()->url() }}?tab=form-alumni&step=3" 
            class="btn btn-step rounded-circle d-flex justify-content-center align-items-center {{ $activeStep == '3' ? 'active' : '' }}"
            style="width: 50px; height: 50px; padding: 0;"
            data-bs-toggle="tooltip" title="Kuisioner Lainnya">
            <i class="bi bi-pencil-square" style="font-size: 15px;"></i>
        </a>         
    </div>

    <!-- Alerts -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show rounded-4" role="alert">
            <strong>Gagal!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show rounded-4" role="alert">
            <strong>Gagal!</strong> Terdapat kesalahan pada form.
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="" method="POST" id="alumniForm">
        @csrf
    
        <div class="tab-content">
            {{-- Step 1 --}}
            @if ($activeStep == '1')
                <div class="tab-pane fade show active">
                    @include('alumni.mahasiswa.form-alumni.biodata-form')
                    
                    <div class="mt-4 d-flex justify-content-end">
                        <a href="{{ request()->url() }}?tab=form-alumni&step=2" class="btn btn-primary px-4 py-2">
                            Selanjutnya
                            <i class="bi bi-arrow-right me-2"></i>
                        </a>
                    </div>
                </div>
            @elseif ($activeStep == '2')
                <div class="tab-pane fade show active">
                    @include('alumni.mahasiswa.form-alumni.kuisioner-wajib')
    
                    <div class="mt-4 d-flex justify-content-between">
                        <a href="{{ request()->url() }}?tab=form-alumni&step=1" class="btn btn-secondary px-4 py-2">
                            <i class="bi bi-arrow-left me-2"></i>
                            Sebelumnya
                        </a>
                        <a href="{{ request()->url() }}?tab=form-alumni&step=3" class="btn btn-primary px-4 py-2">
                            Selanjutnya
                            <i class="bi bi-arrow-right me-2"></i>
                        </a>
                    </div>
                </div>
            @elseif ($activeStep == '3')
                <div class="tab-pane fade show active">
                    @include('alumni.mahasiswa.form-alumni.kuisioner-lainnya')
    
                    <div class="mt-4 d-flex justify-content-start">
                        <a href="{{ request()->url() }}?tab=form-alumni&step=2" class="btn btn-secondary px-4 py-2">
                            <i class="bi bi-arrow-left me-2"></i>       
                            Sebelumnya
                        </a>
                        <button type="submit" class="btn btn-success px-4 py-2 ms-auto">
                            Submit
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </form>
    
</div>

<style>
    /* Main colors */
    :root {
        --primary-color: #1e40af;
        --primary-light: #dbeafe;
        --secondary-color: #6c757d;
        --success-color: #10b981;
        --danger-color: #ef4444;
        --light-color: #f8fafc;
        --dark-color: #334155;
    }

    /* Stepper styles */
    .btn-step {
        background-color: var(--secondary-color);
        color: var(--light-color);
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .btn-step.active {
        background-color: var(--primary-color);
        color: white;
        box-shadow: 0 5px 15px rgba(30, 64, 175, 0.2);
    }

    .stepper-line {
        height: 2px;
        background-color: #e2e8f0;
    }
</style>

<script>
     document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });

    function handleStatusChange(selected) {
        const kerjaSection = document.getElementById('kerja-details');
        const wiraswastaSection = document.getElementById('wiraswasta-details');

        if (selected === 1 || selected === 2) {
            kerjaSection.style.display = 'block';

            // Show wiraswasta-specific section only if wiraswasta is selected
            wiraswastaSection.style.display = selected === 2 ? 'block' : 'none';
        } else {
            kerjaSection.style.display = 'none';
            wiraswastaSection.style.display = 'none';
        }
    }

    function toggleKerjaCepat() {
        const isYa = document.getElementById('bekerja_6_bulan_setelah_lulus_1').checked;
        
        document.getElementById('bulan_mendapat_pekerjaan_ya').disabled = !isYa;
        document.getElementById('pendapatan_per_bulan').disabled = !isYa;
        
        document.getElementById('bulan_mendapat_pekerjaan_tidak').disabled = isYa;
        
        if (isYa) {
            document.getElementById('bulan_mendapat_pekerjaan_tidak').value = '';
        } else {
            document.getElementById('bulan_mendapat_pekerjaan_ya').value = '';
            document.getElementById('pendapatan_per_bulan').value = '';
        }
    }

    function toggleMulaiCariKerja() {
        const selectedValue = document.querySelector('input[name="waktu_mulai_mencari_kerja"]:checked').value;
        
        document.querySelector('input[name="bulan_sebelum_lulus"]').disabled = true;
        document.querySelector('input[name="bulan_sesudah_lulus"]').disabled = true;
        
        if (selectedValue == 1) {
            document.querySelector('input[name="bulan_sebelum_lulus"]').disabled = false;
        } else if (selectedValue == 2) {
            document.querySelector('input[name="bulan_sesudah_lulus"]').disabled = false;
        }
    }

    function toggleJenisLainnya(radio) {
        const lainnyaInput = document.getElementById('jenis_perusahaan_lainnya');
        if (radio.value == '7') {
            lainnyaInput.disabled = false;
        } else {
            lainnyaInput.disabled = true;
            lainnyaInput.value = '';
        }
    }

    function toggleSumberdanaLainnya(value) {
        const input = document.getElementById('sumber_pembiayaan_kuliah_lainnya');
        input.disabled = (value != 7);
        if (value != 7) input.value = '';
    }

    function toggleSituasiSaatIniLainnya(el) {
        const inputLainnya = document.getElementById('input_lainnya');
        if (el.value == '5') {
            inputLainnya.disabled = false;
        } else {
            inputLainnya.disabled = true;
            inputLainnya.value = ''; 
        }
    }

    function toggleAktifMencariLainnya(el) {
        const input = document.getElementById('input_aktif_mencari_pekerjaan_lainnya');
        if (el.value == '5') {
            input.disabled = false;
        } else {
            input.disabled = true;
            input.value = '';
        }
    }

    function toggleBeasiswaLainnya(el) {
        const inputLainnya = document.getElementById('beasiswa_lainnya');

        if (el.value == '22') {
            inputLainnya.disabled = false;
        } else {
            inputLainnya.disabled = true;
            inputLainnya.value = ''; 
        }
    }
</script>
