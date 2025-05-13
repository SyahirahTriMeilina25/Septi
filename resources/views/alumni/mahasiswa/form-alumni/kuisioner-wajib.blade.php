<!-- Step 2: Kuisioner Wajib -->
<div class="form-step active" id="kuisioner-wajib-step">
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-header bg-gradient-primary-subtle p-3">
            <h5 class="card-title mb-0 fw-bold">Kuisioner Wajib</h5>
        </div>
        <div class="card-body p-4">

            {{-- Pertanyaan 1: Status --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-danger">Jelaskan status Anda saat ini? <span
                        class="text-danger">*</span></label>
                @foreach (['Bekerja (full time/part time)', 'Wiraswasta', 'Melanjutkan Pendidikan', 'Tidak Kerja tetapi sedang mencari kerja', 'Belum memungkinkan bekerja'] as $index => $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_saat_ini"
                            id="status_saat_ini{{ $index + 1 }}" value="{{ $index + 1 }}"
                            onclick="handleStatusChange({{ $index + 1 }})">
                        <label class="form-check-label" for="status_saat_ini{{ $index + 1 }}">
                            [{{ $index + 1 }}] {{ $option }}
                        </label>
                    </div>
                @endforeach
            </div>

            {{-- Pertanyaan lanjutan jika status == Bekerja (1) atau Wiraswasta (2) --}}
            <div id="kerja-details" style="display: none;">
                {{-- Pertanyaan 2 --}}
                <div class="mb-4">
                    <label class="form-label fw-bold text-danger">
                        Apakah anda telah mendapatkan pekerjaan ≤ 6 bulan / termasuk bekerja sebelum lulus?
                        <span class="text-danger">*</span>
                    </label>

                    {{-- Pilihan Ya --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bekerja_6_bulan_setelah_lulus" id="bekerja_6_bulan_setelah_lulus_1"
                            value="1" onchange="toggleKerjaCepat()">
                        <label class="form-check-label" for="bekerja_6_bulan_setelah_lulus_1">Ya</label>
                    </div>
                    <div class="ms-4 mt-2">
                        <label class="form-label">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
                        <input type="number" class="form-control mb-2" name="bulan_mendapat_pekerjaan_ya"
                            id="bulan_mendapat_pekerjaan_ya" disabled>

                        <label class="form-label">Berapa rata-rata pendapatan anda per bulan? (take home pay)</label>
                        <input type="number" class="form-control" name="pendapatan_per_bulan" id="pendapatan_per_bulan"
                            disabled>
                    </div>

                    {{-- Pilihan Tidak --}}
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="bekerja_6_bulan_setelah_lulus" id="bekerja_6_bulan_setelah_lulus_0"
                            value="0" onchange="toggleKerjaCepat()">
                        <label class="form-check-label" for="bekerja_6_bulan_setelah_lulus_0">Tidak</label>
                    </div>
                    <div class="ms-4 mt-2">
                        <label class="form-label">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
                        <input type="number" class="form-control" name="bulan_mendapat_pekerjaan_tidak"
                            id="bulan_mendapat_pekerjaan_tidak" disabled>
                    </div>
                </div>

                {{-- Pertanyaan 3 --}}
                <div class="mb-4">
                    <label class="form-label fw-bold text-danger">Dimana lokasi tempat Anda bekerja? <span
                            class="text-danger">*</span></label>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="lokasi_pekerjaan_provinsi" class="form-label">Provinsi</label>
                            <select class="form-select" name="lokasi_pekerjaan_provinsi" id="lokasi_pekerjaan_provinsi">
                                <option selected disabled>Pilih Provinsi</option>
                                {{-- Loop provinsi di sini --}}
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="lokasi_pekerjaan_kabupaten" class="form-label">Kab/Kota</label>
                            <select class="form-select" name="lokasi_pekerjaan_kabupaten" id="lokasi_pekerjaan_kabupaten">
                                <option selected disabled>Pilih Kabupaten/Kota</option>
                                {{-- Loop kota di sini --}}
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Pertanyaan 4 --}}
                <div class="mb-4">
                    <label class="form-label fw-bold text-danger">
                        Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang? <span class="text-danger">*</span>
                    </label>

                    @php
                        $jenis_perusahaan = [
                            1 => 'Instansi pemerintah',
                            2 => 'BUMN/BUMD',
                            3 => 'Institusi/Organisasi Multilateral',
                            4 => 'Organisasi non-profit/Lembaga Swadaya Masyarakat',
                            5 => 'Perusahaan swasta',
                            6 => 'Wiraswasta/perusahaan sendiri',
                            7 => 'Lainnya, tuliskan:',
                        ];
                    @endphp

                    @foreach ($jenis_perusahaan as $key => $label)
                        <div class="form-check">
                            <input class="form-check-input"
                                type="radio"
                                name="jenis_perusahaan"
                                id="jenis_perusahaan_{{ $key }}"
                                value="{{ $key }}"
                                onchange="toggleJenisLainnya(this)">
                            <label class="form-check-label" for="jenis_perusahaan_{{ $key }}">
                                [{{ $key }}] {{ $label }}
                            </label>

                            @if ($key === 7)
                                <input type="text"
                                    class="form-control mt-2"
                                    name="jenis_perusahaan_lainnya"
                                    id="jenis_perusahaan_lainnya"
                                    placeholder="Tuliskan jenis lainnya di sini..."
                                    disabled>
                            @endif
                        </div>
                    @endforeach
                </div>

                {{-- Pertanyaan 5 --}}
                <div class="mb-4">
                    <label class="form-label fw-bold text-danger">
                        Apa nama perusahaan/kantor tempat anda bekerja?
                        <span class="text-danger">*</span>
                    </label>

                    <div class="mt-2">
                        <input type="text" class="form-control mb-2" name="nama_perusahaan"
                            id="nama_perusahaan">
                    </div>
                </div>

                {{-- Pertanyaan 6: Tingkat Tempat Kerja --}}
                <div class="mb-4">
                    <label class="form-label fw-bold text-danger">
                        Apa tingkat tempat kerja anda?
                        <span class="text-danger">*</span>
                    </label>

                    <select class="form-select" name="tingkat_tempat_kerja" id="tingkat_tempat_kerja">
                        <option selected disabled>Pilih Tingkatan</option>
                        <option value="Lokal/wilayah/wiraswasta tidak berbadan hukum">Lokal/wilayah/wiraswasta tidak berbadan hukum</option>
                        <option value="Nasional/wiraswasta berbadan hukum">Nasional/wiraswasta berbadan hukum</option>
                        <option value="Multinasional/internasional">Multinasional/internasional</option>
                    </select>
                </div>

                {{-- Pertanyaan 7: Khusus untuk Wiraswasta --}}
                <div class="mb-4" id="wiraswasta-details" style="display: none;">
                    <label class="form-label fw-bold text-danger">
                        Bila berwiraswasta, apa posisi/jabatan Anda saat ini?
                        <span class="text-danger">*</span>
                    </label>

                    @php
                        $posisiJabatanOptions = [
                            'Founder',
                            'Co-Founder',
                            'CEO/Direktur',
                            'Manager',
                            'Supervisor',
                            'Staff',
                            'Owner',
                        ];
                    @endphp

                    <select class="form-select" name="posisi_wirausaha" id="posisi_wirausaha">
                        <option selected disabled>Pilih Posisi</option>
                        @foreach ($posisiJabatanOptions as $posisi)
                            <option value="{{ $posisi }}">{{ $posisi }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Pertanyaan Studi Lanjut --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-danger">
                    Pertanyaan studi lanjut <span class="text-danger">*</span>
                </label>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sumber Biaya</label>
                        <select class="form-select" name="studi_lanjut_sumber_biaya" id="studi_lanjut_sumber_biaya">
                            <option selected disabled>Pilih Sumber Biaya</option>
                            <option value="Beasiswa">Beasiswa</option>
                            <option value="Biaya Sendiri">Biaya Sendiri</option>
                            <option value="Perusahaan/Kantor">Perusahaan/Kantor</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="studi_lanjut_tanggal_masuk" id="studi_lanjut_tanggal_masuk">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Perguruan Tinggi</label>
                        <select class="form-select" name="studi_lanjut_kode_pt" id="studi_lanjut_kode_pt">
                            <option selected disabled>Pilih Kode PT</option>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Program Studi</label>
                        <select class="form-select" name="studi_lanjut_program_studi" id="studi_lanjut_program_studi">
                            <option selected disabled>Pilih Kode PT</option>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>
                </div>
            </div>

            {{-- Pertanyaan Sumberdana --}}
            <div class="mb-4">
                <label class="form-label fw-bold text-danger">
                    Sebutkan sumberdana dalam pembiayaan kuliah? <span class="text-danger">*</span>
                </label>

                @php
                    $sumberPembiayaanOptions = [
                        1 => 'Biaya Sendiri / Keluarga',
                        2 => 'Beasiswa ADIK',
                        3 => 'Beasiswa BIDIKMISI',
                        4 => 'Beasiswa PPA',
                        5 => 'Beasiswa AFIRMASI',
                        6 => 'Beasiswa Perusahaan/Swasta',
                        7 => 'Lainnya, tuliskan:'
                    ];
                @endphp

                @foreach ($sumberPembiayaanOptions as $key => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_pembiayaan_kuliah"
                            id="sumberdana_{{ $key }}" value="{{ $key }}"
                            onchange="toggleSumberdanaLainnya({{ $key }})">
                        <label class="form-check-label" for="sumberdana_{{ $key }}">
                            [{{ $key }}] {{ $label }}
                        </label>

                        @if ($key == 7)
                            <input type="text" class="form-control mt-2" id="sumber_pembiayaan_kuliah_lainnya"
                                name="sumber_pembiayaan_kuliah_lainnya" placeholder="Tuliskan sumberdana lainnya di sini..." disabled>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold text-danger">
                    Seberapa erat hubungan antara bidang studi dengan pekerjaan anda? <span class="text-danger">*</span>
                </label>

                @php
                    $options = [
                        1 => 'Sangat Erat',
                        2 => 'Erat',
                        3 => 'Cukup Erat',
                        4 => 'Kurang Erat',
                        5 => 'Tidak Sama Sekali',
                    ];
                @endphp

                @foreach ($options as $value => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hubungan_studi_pekerjaan"
                            id="kesesuaian_{{ $value }}" value="{{ $value }}">
                        <label class="form-check-label" for="kesesuaian_{{ $value }}">
                            [{{ $value }}] {{ $label }}
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold text-danger">
                    Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
                    <span class="text-danger">*</span>
                </label>

                @php
                    $options = [
                        1 => 'Setingkat Lebih Tinggi',
                        2 => 'Tingkat yang Sama',
                        3 => 'Setingkat Lebih Rendah',
                        4 => 'Tidak Perlu Pendidikan Tinggi',
                    ];
                @endphp

                @foreach ($options as $index => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikan_sesuai_pekerjaan" 
                            id="tingkat_pendidikan_{{ $index }}" value="{{ $index }}">
                        <label class="form-check-label" for="tingkat_pendidikan_{{ $index }}">
                            [{{ $index }}] {{ $label }}
                        </label>
                    </div>
                @endforeach
            </div>

            {{-- Pertanyaan Kompetensi --}}
            <div>
                <label class="form-label fw-bold text-danger">
                    Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? (A)<br>
                    Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B) <span class="text-danger">*</span>
                </label>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="3" class="align-middle">Kompetensi</th>
                                <th colspan="5" class="text-center">A - Saat Lulus</th>
                                <th colspan="5" class="text-center">B - Saat Ini</th>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-center">
                                    <div class="d-flex justify-content-between">
                                        <div>Sangat rendah</div>
                                        <div>Sangat tinggi</div>
                                    </div>
                                </th>
                                <th colspan="5" class="text-center">
                                    <div class="d-flex justify-content-between">
                                        <div>Sangat rendah</div>
                                        <div>Sangat tinggi</div>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center">1</th>
                                <th class="text-center">2</th>
                                <th class="text-center">3</th>
                                <th class="text-center">4</th>
                                <th class="text-center">5</th>
                                <th class="text-center">1</th>
                                <th class="text-center">2</th>
                                <th class="text-center">3</th>
                                <th class="text-center">4</th>
                                <th class="text-center">5</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $competencies = [
                                    'etika' => 'Etika',
                                    'keahlian_bidang' => 'Keahlian berdasarkan bidang ilmu',
                                    'bahasa_inggris' => 'Bahasa Inggris',
                                    'ti' => 'Penggunaan Teknologi Informasi',
                                    'komunikasi' => 'Komunikasi',
                                    'kerjasama' => 'Kerja sama tim',
                                    'pengembangan_diri' => 'Pengembangan Diri'
                                ];
                            @endphp

                            @foreach($competencies as $key => $label)
                                <tr>
                                    <td>{{ $label }}</td>
                                    <!-- Saat Lulus -->
                                    @for($i = 1; $i <= 5; $i++)
                                        <td class="text-center">
                                            <input class="form-check-input" type="radio" 
                                                name="kompetensi_{{ $key }}_lulus" 
                                                value="{{ $i }}">
                                        </td>
                                    @endfor
                                    <!-- Saat Ini -->
                                    @for($i = 1; $i <= 5; $i++)
                                        <td class="text-center">
                                            <input class="form-check-input" type="radio" 
                                                name="kompetensi_{{ $key }}_saat_ini" 
                                                value="{{ $i }}">
                                        </td>
                                    @endfor
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>