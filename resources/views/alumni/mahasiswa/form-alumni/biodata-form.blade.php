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
                    <input type="number" class="form-control rounded-3" id="nim" name="user_nim"
                        value="{{ $user->nim }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nim" class="form-label fw-bold">Kode Pergurun Tinggi</label>
                    <input type="text" class="form-control rounded-3" id="nim" name="user_nim"
                        value="001017" disabled>
                </div>
            </div>

            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6 mb-3">
                    <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control rounded-3" id="nama"
                        value="{{ $user->nama }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nim" class="form-label fw-bold">Kode Program Studi</label>
                    <input type="text" class="form-control rounded-3" id="nim" name="user_nim"
                        value="55202" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control rounded-3" id="email" name="email"
                        value="{{ $user->email }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="no_telepon" class="form-label fw-bold">Nomor Telepon <span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control rounded-3" id="no_telepon" name="no_telepon"
                        value="{{ $alumni->no_telepon ?? old('no_telepon') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="nomor_induk_kependudukan" class="form-label fw-bold">Nomor Induk Kependudukan
                        (NIK) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control rounded-3" id="nomor_induk_kependudukan"
                        name="nomor_induk_kependudukan">
                </div>
                <div class="col-md-6">
                    <label for="nomor_pokok_wajib_pajak" class="form-label fw-bold">Nomor Pokok Wajib Pajak
                        (NPWP)</label>
                    <input type="number" class="form-control rounded-3" id="nomor_pokok_wajib_pajak"
                        name="nomor_pokok_wajib_pajak">
                </div>
            </div>
        </div>
    </div>
</div>