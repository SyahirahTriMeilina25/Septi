<!-- Step 1: Biodata -->
<div class="form-step active" id="biodata-step">
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-header bg-gradient-primary-subtle p-3">
            <h5 class="card-title mb-0 fw-bold">Biodata Alumni</h5>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nim" class="form-label fw-bold">NIM</label>
                    <input type="number" class="form-control rounded-3 @error('user_nim') is-invalid @enderror" id="nim" name="user_nim"
                        value="{{ old('user_nim', optional($alumni)->user_nim ?? $user->nim) }}">
                    @error('user_nim')
                        <span class="text-danger" style="font-size: 11px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nim" class="form-label fw-bold">Kode Pergurun Tinggi</label>
                    <input type="text" class="form-control rounded-3" id="nim" name="kode_pt"
                        value="001017" disabled readonly>
                </div>
            </div>

            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6 mb-3">
                    <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control rounded-3 @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama', optional($alumni)->nama ?? $user->nama) }}">
                    @error('nama')
                        <span class="text-danger" style="font-size: 11px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nim" class="form-label fw-bold">Kode Program Studi</label>
                    <input type="text" class="form-control rounded-3" id="nim" name="kode_prodi"
                        value="55202" disabled readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email', optional($alumni)->email ?? $user->email) }}">
                    @error('email')
                        <span class="text-danger" style="font-size: 11px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="no_telepon" class="form-label fw-bold">Nomor Telepon <span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control rounded-3 @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon"
                        value="{{ old('no_telepon', optional($alumni)->no_telepon) }}">
                    @error('no_telepon')
                        <span class="text-danger" style="font-size: 11px">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="nomor_induk_kependudukan" class="form-label fw-bold">Nomor Induk Kependudukan
                        (NIK) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control rounded-3 @error('nomor_induk_kependudukan') is-invalid @enderror" id="nomor_induk_kependudukan"
                        name="nomor_induk_kependudukan" 
                        value="{{ old('nomor_induk_kependudukan', optional($alumni)->nomor_induk_kependudukan) }}"
                        pattern="\d{16}" 
                        title="NIK harus 16 digit angka">
                    @error('nomor_induk_kependudukan')
                        <span class="text-danger" style="font-size: 11px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="nomor_pokok_wajib_pajak" class="form-label fw-bold">Nomor Pokok Wajib Pajak
                        (NPWP)</label>
                    <input type="text" class="form-control rounded-3 @error('nomor_pokok_wajib_pajak') is-invalid @enderror" id="nomor_pokok_wajib_pajak"
                        name="nomor_pokok_wajib_pajak"
                        value="{{ old('nomor_pokok_wajib_pajak', optional($alumni)->nomor_pokok_wajib_pajak) }}"
                        title="NPWP harus 15 atau 16 digit angka">
                    @error('nomor_pokok_wajib_pajak')
                        <span class="text-danger" style="font-size: 11px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>