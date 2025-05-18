<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumni = [
            // Example alumni data
            [
                'id' => Str::uuid(),
                'user_nim' => '1507110190',
                'nama' => 'REZA PUTRA SIAHAAN',
                'email' => 'reza54996@gmail.com',
                'no_telepon' => '081364950141',
                
                // Data form alumni
                'kode_pt' => 001017,
                'fakultas' => 'Fakultas Teknik',
                'kode_prodi' => 55202,
                'tahun_lulus' => '2022',
                'nomor_induk_kependudukan' => '0',
                'nomor_pokok_wajib_pajak' => '0',
                
                // Kuisioner wajib
                'status_saat_ini' => 1, 
                'bekerja_6_bulan_setelah_lulus' => true,
                'bulan_mendapat_pekerjaan' => 5,
                'pendapatan_per_bulan' => 4000000,
                'lokasi_pekerjaan_provinsi' => 'RIAU',
                'lokasi_pekerjaan_kabupaten' => 'KABUPATEN KAMPAR',
                'jenis_perusahaan' => 5, 
                'nama_perusahaan' => 'Adira dinamika multi finance ',
                'posisi_wirausaha' => null,
                'tingkat_tempat_kerja' => 'Lokal/wilayah/wiraswasta tidak berbadan hukum',
                'studi_lanjut_sumber_biaya' => null,
                'studi_lanjut_kode_pt' => null,
                'studi_lanjut_program_studi' => null,
                'studi_lanjut_tanggal_masuk' => null,
                'sumber_pembiayaan_kuliah' => 1, 
                'hubungan_studi_pekerjaan' => null, 
                'pendidikan_sesuai_pekerjaan' => null, 
                
                // Kompetensi
                'kompetensi_etika_lulus' => 5,
                'kompetensi_etika_saat_ini' => 5,
                'kompetensi_keahlian_bidang_lulus' => 4,
                'kompetensi_keahlian_bidang_saat_ini' => 5,
                'kompetensi_bahasa_inggris_lulus' => 3,
                'kompetensi_bahasa_inggris_saat_ini' => 5,
                'kompetensi_ti_lulus' => 4,
                'kompetensi_ti_saat_ini' => 5,
                'kompetensi_komunikasi_lulus' => 5,
                'kompetensi_komunikasi_saat_ini' => 5,
                'kompetensi_kerjasama_lulus' => 5,
                'kompetensi_kerjasama_saat_ini' => 5,
                'kompetensi_pengembangan_diri_lulus' => 5,
                'kompetensi_pengembangan_diri_saat_ini' => 5,
                
                // Kuisioner lainnya
                'penekanan_perkuliahan' => 1,
                'penekanan_demontrasi' => 1,
                'penekanan_proyek_riset' => 1,
                'penekanan_magang' => 1,
                'penekanan_praktikum' => 1,
                'penekanan_kerja_lapangan' => 1,
                'penekanan_diskusi' => 1,
                'waktu_mulai_mencari_kerja' => 2, 
                'bulan_sebelum_lulus_mencari_kerja' => 0,
                'bulan_setelah_lulus_mencari_kerja' => 3,
                'cari_kerja_iklan_koran' => false,
                'cari_kerja_tanpa_lowongan' => false,
                'cari_kerja_pameran' => false,
                'cari_kerja_internet' => false,
                'cari_kerja_dihubungi_perusahaan' => false,
                'cari_kerja_kemenakertrans' => false,
                'cari_kerja_agen_tenaga_kerja' => false,
                'cari_kerja_pusat_karir' => false,
                'cari_kerja_kemahasiswaan_alumni' => false,
                'cari_kerja_jejaring' => false,
                'cari_kerja_relasi' => true,
                'cari_kerja_bisnis_sendiri' => false,
                'cari_kerja_magang' => false,
                'cari_kerja_tempat_kerja_sama' => false,
                'cari_kerja_lainnya_pilih' => false,
                'cari_kerja_lainnya_isi' => null,
                'jumlah_instansi_dilamar' => 30,
                'jumlah_instansi_merespons' => 1,
                'jumlah_instansi_wawancara' => 1,
                'situasi_saat_ini' => null, 
                'aktif_mencari_pekerjaan_4_minggu' => 3, 
                'aktif_mencari_pekerjaan_lainnya' => null,
                'alasan_pekerjaan_sesuai_saat_ini' => false,
                'alasan_mudah_dapat_kerja' => false,
                'alasan_prospek_baik' => false,
                'alasan_bidang_berbeda_tapi_sesuai' => false,
                'alasan_promosi_posisi' => false,
                'alasan_penghasilan_lebih_tinggi' => false,
                'alasan_pekerjaan_aman' => false,
                'alasan_pekerjaan_menarik' => false,
                'alasan_pekerjaan_fleksibel' => false,
                'alasan_dekat_dengan_rumah' => false,
                'alasan_kebutuhan_keluarga' => false,
                'alasan_karir_lain' => true,
                'alasan_lainnya_pilih' => false,
                'alasan_lainnya_isi' => null,
                'beasiswa_masa_kuliah' => null, 
                'beasiswa_lainnya' => null,
                'org_bem_universitas' => false,
                'org_bem_fakultas' => true,
                'org_dpm_universitas' => false,
                'org_dpm_fakultas' => false,
                'org_ukm_universitas' => false,
                'org_lso_fakultas' => false,
                'org_hmj' => false,
                'org_hmprodi' => false,
                'org_hmi' => false,
                'org_gmki' => true,
                'org_pmkri' => false,
                'org_pmii' => false,
                'org_kammi' => false,
                'org_cimsa' => false,
                'org_lainnya_pilih' => false,
                'org_lainnya_isi' => null,
                
                'saran_untuk_universitas' => 'Mohon lebih diperhatikan lagi alumni/lulusan, karena saat ini sangat sulit mencari pekerjaan setelah lulus. Setiap mendapatkan lowongan pekerjaan poin paling menyakitkan itu adalah pengalaman kerja, sementara yang melamar adalah fresh grad. Sampai saat ini saya belum mendapatkan respon panggilan kerja di bidang teknik, sampai saya ubah haluan ke dunia marketing',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('alumni')->insert($alumni);
    }
}