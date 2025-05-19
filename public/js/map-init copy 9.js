// Data alumni
const alumniData = [
    {
        name: "Rizki Santoso",
        company: "PT ABC",
        location: [-6.914744, 107.609810],
        job: "Software Engineer",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2020,
        email: "rizki.santoso@abc.com",
        no_hp: "081234567890",
        salary: 1000000,
        linkedin: "https://www.linkedin.com/in/rizki-santoso",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Saya adalah seorang Software Engineer dengan fokus pada pengembangan aplikasi berbasis web dan mobile. Berpengalaman dalam teknologi modern untuk membangun sistem yang efisien dan mudah diakses.",
        keahlian: ["JavaScript", "React", "Node.js", "Database Management", "Cloud Computing"],
        pendidikan: "Universitas Indonesia, Teknik Informatika (2016 - 2020)",
        pengalaman: [
            {
                title: "Software Engineer",
                company: "PT ABC",
                period: "Januari 2021 - Sekarang",
                description: "Mengembangkan dan memelihara aplikasi web perusahaan serta mengimplementasikan fitur-fitur baru yang dibutuhkan oleh klien."
            },
            {
                title: "Frontend Developer Intern",
                company: "PT Teknologi Cerdas",
                period: "Juli 2020 - Desember 2020",
                description: "Membangun antarmuka pengguna untuk aplikasi internal dengan React dan mengoptimalkan kinerja aplikasi."
            }
        ]
    },
    {
        name: "Andi Wiratama",
        company: "-",
        location: [-7.250445, 112.768845], // Surabaya
        job: "-",
        job_status: "Tidak Bekerja",
        province: "Jawa Timur",
        city: "Kota Surabaya",
        graduationYear: 2018,
        email: "andi.wiratama@xyz.com",
        no_hp: "082134567890",
        salary: 8500000,
        linkedin: "https://www.linkedin.com/in/andi-wiratama",
        photoUrl: "/images/andi.jpg",
        tentangSaya: "Saya adalah seorang Data Analyst dengan minat besar dalam analisis data dan pemodelan statistik untuk keputusan bisnis.",
        keahlian: ["Python", "SQL", "Machine Learning", "Data Visualization", "Excel"],
        pendidikan: "Universitas Gadjah Mada, Statistika (2014 - 2018)",
        pengalaman: [
            {
                title: "Data Analyst",
                company: "PT XYZ",
                period: "Maret 2019 - Sekarang",
                description: "Melakukan analisis data untuk menemukan tren dan pola dalam data bisnis serta menghasilkan laporan berkala."
            },
            {
                title: "Data Intern",
                company: "Bank Negara",
                period: "Agustus 2018 - Februari 2019",
                description: "Menganalisis data kredit nasabah dan membantu dalam pengembangan model risiko kredit."
            }
        ]
    },
    {
        name: "Siti Nurbaya",
        company: "PT Perkasa",
        location: [-6.208763, 106.845599], // Jakarta
        job: "Project Manager",
        job_status: "Bekerja",
        province: "DKI Jakarta",
        city: "Jakarta Pusat",
        graduationYear: 2015,
        email: "siti.nurbaya@perkasa.com",
        no_hp: "081234567892",
        salary: 2000000,
        linkedin: "https://www.linkedin.com/in/siti-nurbaya",
        photoUrl: "/images/siti.jpg",
        tentangSaya: "Project Manager dengan pengalaman luas dalam manajemen proyek konstruksi serta keahlian dalam mengelola tim dan waktu.",
        keahlian: ["Project Management", "Leadership", "Time Management", "Budgeting", "Microsoft Project"],
        pendidikan: "Institut Teknologi Bandung, Teknik Sipil (2011 - 2015)",
        pengalaman: [
            {
                title: "Project Manager",
                company: "PT Perkasa",
                period: "Mei 2016 - Sekarang",
                description: "Mengelola proyek konstruksi skala besar dengan fokus pada kualitas dan efisiensi waktu."
            },
            {
                title: "Assistant Project Manager",
                company: "PT Jaya Konstruksi",
                period: "September 2015 - April 2016",
                description: "Membantu dalam pengawasan proyek dan pelaporan perkembangan harian kepada manajemen."
            }
        ]
    },
    {
        name: "Budi Santoso",
        company: "PT Sejahtera",
        location: [-0.789275, 113.921327], // Pontianak, Kalimantan
        job: "Backend Developer",
        job_status: "Bekerja",
        province: "Kalimantan Barat",
        city: "Pontianak",
        graduationYear: 2019,
        email: "budi.santoso@sejahtera.com",
        no_hp: "083234567893",
        salary: 3000000,
        linkedin: "https://www.linkedin.com/in/budi-santoso",
        photoUrl: "/images/budi.jpg",
        tentangSaya: "Backend Developer yang ahli dalam pengembangan sistem berbasis microservices dan pengelolaan server.",
        keahlian: ["Node.js", "Express.js", "MongoDB", "API Development", "Docker"],
        pendidikan: "Universitas Brawijaya, Teknik Informatika (2015 - 2019)",
        pengalaman: [
            {
                title: "Backend Developer",
                company: "PT Sejahtera",
                period: "Juli 2019 - Sekarang",
                description: "Bertanggung jawab atas pengembangan backend aplikasi web dengan Node.js dan optimasi API."
            },
            {
                title: "IT Support Intern",
                company: "PT Telekomunikasi",
                period: "Maret 2018 - Juni 2019",
                description: "Membantu dalam dukungan teknis dan pengembangan tools internal untuk tim support."
            }
        ]
    },
    {
        name: "Indah Permata",
        company: "PT Digital Nusantara",
        location: [-7.797068, 110.370529], // Yogyakarta
        job: "UI/UX Designer",
        job_status: "Bekerja",
        province: "Yogyakarta",
        city: "Kota Yogyakarta",
        graduationYear: 2017,
        email: "indah.permata@digitalnusantara.com",
        no_hp: "085123456789",
        salary: 8000000,
        linkedin: "https://www.linkedin.com/in/indah-permata",
        photoUrl: "/images/indah.jpg",
        tentangSaya: "UI/UX Designer dengan pengalaman dalam merancang antarmuka pengguna yang intuitif dan berpusat pada pengguna.",
        keahlian: ["Adobe XD", "Figma", "User Research", "Wireframing", "Prototyping"],
        pendidikan: "Universitas Diponegoro, Desain Komunikasi Visual (2013 - 2017)",
        pengalaman: [
            {
                title: "UI/UX Designer",
                company: "PT Digital Nusantara",
                period: "Februari 2018 - Sekarang",
                description: "Merancang antarmuka pengguna untuk aplikasi mobile dan website perusahaan dengan pendekatan user-centered design."
            },
            {
                title: "Graphic Designer Intern",
                company: "PT Kreasi Cipta",
                period: "Agustus 2017 - Januari 2018",
                description: "Mengembangkan desain grafis untuk kebutuhan branding perusahaan dan desain promosi."
            }
        ]
    },
    {
        name: "Ahmad Fauzi",
        company: "PT Sinar Jaya",
        location: [1.48218, 124.83949], // Manado
        job: "Full Stack Developer",
        job_status: "Bekerja",
        province: "Sulawesi Utara",
        city: "Kota Manado",
        graduationYear: 2016,
        email: "ahmad.fauzi@sinarjaya.com",
        no_hp: "087123456789",
        // salary: 12000000,
        linkedin: "https://www.linkedin.com/in/ahmad-fauzi",
        photoUrl: "/images/ahmad.jpg",
        tentangSaya: "Full Stack Developer dengan kemampuan dalam pengembangan frontend dan backend, serta pengelolaan database.",
        keahlian: ["JavaScript", "Vue.js", "Laravel", "MySQL", "REST API"],
        pendidikan: "Universitas Hasanuddin, Teknik Informatika (2012 - 2016)",
        pengalaman: [
            {
                title: "Full Stack Developer",
                company: "PT Sinar Jaya",
                period: "April 2017 - Sekarang",
                description: "Bertanggung jawab atas pengembangan dan pemeliharaan aplikasi web perusahaan dengan teknologi Vue.js dan Laravel."
            },
            {
                title: "Backend Developer Intern",
                company: "PT Makmur Bersama",
                period: "September 2016 - Maret 2017",
                description: "Membangun dan mengoptimalkan backend aplikasi web internal menggunakan Laravel."
            }
        ]
    },
    {
        name: "Dewi Lestari",
        company: "PT XYZ",
        location: [-7.250445, 112.768845],
        job: "Data Analyst",
        job_status: "Bekerja",
        province: "Jawa Timur",
        city: "Surabaya",
        graduationYear: 2018,
        email: "dewi.lestari@xyz.com",
        no_hp: "082134567891",
        salary: 9000000,
        linkedin: "https://www.linkedin.com/in/dewi-lestari",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Seorang Data Analyst dengan keahlian dalam pengolahan data besar dan visualisasi data. Berpengalaman menggunakan Python dan SQL untuk menganalisis dan menampilkan data yang berguna bagi perusahaan.",
        keahlian: ["Python", "SQL", "Data Visualization", "Machine Learning", "Big Data"],
        pendidikan: "Institut Teknologi Sepuluh Nopember, Statistika (2014 - 2018)",
        pengalaman: [
            {
                title: "Data Analyst",
                company: "PT XYZ",
                period: "Maret 2019 - Sekarang",
                description: "Menganalisis data untuk meningkatkan efisiensi perusahaan dan membuat laporan visualisasi data yang informatif."
            },
            {
                title: "Research Assistant",
                company: "Universitas",
                period: "Agustus 2018 - Februari 2019",
                description: "Membantu dalam penelitian data statistik dan mengembangkan model prediksi untuk penelitian akademis."
            }
        ]
    },
    {
        name: "Ahmad Wijaya",
        company: "PT DEF",
        location: [3.595196, 98.672223],
        job: "Manager Operasional",
        job_status: "Bekerja",
        province: "Sumatera Utara",
        city: "Medan",
        graduationYear: 2019,
        email: "ahmad.wijaya@def.com",
        no_hp: "083134567892",
        salary: 3000000,
        linkedin: "https://www.linkedin.com/in/ahmad-wijaya",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Seorang Manager Operasional yang memiliki pengalaman dalam manajemen tim dan peningkatan efisiensi operasional perusahaan.",
        keahlian: ["Operational Management", "Project Planning", "Team Leadership", "Supply Chain Management"],
        pendidikan: "Universitas Sumatera Utara, Manajemen Bisnis (2015 - 2019)",
        pengalaman: [
            {
                title: "Manager Operasional",
                company: "PT DEF",
                period: "Mei 2020 - Sekarang",
                description: "Mengelola operasi harian dan memastikan efisiensi dalam setiap proses produksi perusahaan."
            }
        ]
    },
    {
        name: "Budi Setiawan",
        company: "PT JKL",
        location: [-6.966667, 110.416664],
        job: "Financial Advisor",
        job_status: "Bekerja",
        province: "Jawa Tengah",
        city: "Semarang",
        graduationYear: 2022,
        email: "budi.setiawan@jkl.com",
        no_hp: "085134567894",
        salary: 4000000,
        linkedin: "https://www.linkedin.com/in/budi-setiawan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Seorang Financial Advisor yang berfokus pada perencanaan keuangan dan manajemen investasi untuk klien pribadi dan korporat.",
        keahlian: ["Financial Planning", "Investment Strategy", "Risk Management", "Wealth Management"],
        pendidikan: "Universitas Gadjah Mada, Ekonomi (2018 - 2022)",
        pengalaman: [
            {
                title: "Financial Advisor",
                company: "PT JKL",
                period: "Juni 2022 - Sekarang",
                description: "Menyusun strategi investasi dan perencanaan keuangan untuk klien dengan berbagai latar belakang."
            }
        ]
    },
    {
        name: "Siti Nurhaliza",
        company: "PT GHI",
        location: [-5.147665, 119.432732],
        job: "Kepala HRD",
        job_status: "Bekerja",
        province: "Sulawesi Selatan",
        city: "Makassar",
        graduationYear: 2021,
        email: "siti.nurhaliza@ghi.com",
        no_hp: "084134567893",
        salary: 7000000,
        linkedin: "https://www.linkedin.com/in/siti-nurhaliza",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Profesional di bidang Sumber Daya Manusia yang berpengalaman dalam rekrutmen, pelatihan, dan pengembangan karyawan.",
        keahlian: ["Human Resources Management", "Recruitment", "Training & Development", "Employee Relations"],
        pendidikan: "Universitas Hasanuddin, Psikologi (2017 - 2021)",
        pengalaman: [
            {
                title: "Kepala HRD",
                company: "PT GHI",
                period: "April 2021 - Sekarang",
                description: "Mengelola rekrutmen dan pengembangan karyawan serta memastikan kesejahteraan dan hubungan kerja yang baik di perusahaan."
            }
        ]
    },
    {
        name: "Fitri Hidayat",
        company: "PT MNO",
        location: [-8.670458, 115.212629],
        job: "Senior Web Developer",
        job_status: "Bekerja",
        province: "Bali",
        city: "Denpasar",
        graduationYear: 2020,
        email: "fitri.hidayat@mno.com",
        no_hp: "086134567895",
        salary: 1000000,
        linkedin: "https://www.linkedin.com/in/fitri-hidayat",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Web Developer yang fokus pada pengembangan aplikasi web responsif dan optimasi kinerja website.",
        keahlian: ["HTML", "CSS", "JavaScript", "React", "Web Optimization"],
        pendidikan: "Universitas Udayana, Teknologi Informasi (2016 - 2020)",
        pengalaman: [
            {
                title: "Senior Web Developer",
                company: "PT MNO",
                period: "Februari 2021 - Sekarang",
                description: "Bertanggung jawab dalam membangun dan mengoptimalkan aplikasi web untuk klien lokal dan internasional."
            },
            {
                title: "Junior Web Developer",
                company: "PT Digital Bali",
                period: "Mei 2020 - Januari 2021",
                description: "Membantu pengembangan website dengan fokus pada UI/UX dan performa web."
            }
        ]
    },
    {
        name: "Taufik Ramadhan",
        company: "PT OPQ",
        location: [-3.316694, 114.618522],
        job: "Network Engineer",
        job_status: "Bekerja",
        province: "Kalimantan Selatan",
        city: "Banjarmasin",
        graduationYear: 2019,
        email: "taufik.ramadhan@opq.com",
        no_hp: "087123456789",
        salary: 1200000,
        linkedin: "https://www.linkedin.com/in/taufik-ramadhan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Network Engineer berpengalaman yang bertanggung jawab atas keamanan dan stabilitas jaringan perusahaan.",
        keahlian: ["Network Design", "Cybersecurity", "Firewall Management", "Troubleshooting"],
        pendidikan: "Politeknik Negeri Banjarmasin, Teknik Komputer dan Jaringan (2015 - 2019)",
        pengalaman: [
            {
                title: "Network Engineer",
                company: "PT OPQ",
                period: "Agustus 2019 - Sekarang",
                description: "Merancang dan mengelola infrastruktur jaringan untuk mendukung operasional perusahaan."
            }
        ]
    },
    {
        name: "Linda Dewi",
        company: "PT RST",
        location: [-7.801389, 110.364444],
        job: "Digital Marketing Specialist",
        job_status: "Bekerja",
        province: "Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2021,
        email: "linda.dewi@rst.com",
        no_hp: "088134567896",
        salary: 5000000,
        linkedin: "https://www.linkedin.com/in/linda-dewi",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Digital Marketing Specialist yang fokus pada kampanye pemasaran digital dan optimasi media sosial.",
        keahlian: ["Social Media Management", "SEO", "Content Marketing", "Google Analytics"],
        pendidikan: "Universitas Gadjah Mada, Ilmu Komunikasi (2017 - 2021)",
        pengalaman: [
            {
                title: "Digital Marketing Specialist",
                company: "PT RST",
                period: "Juni 2021 - Sekarang",
                description: "Mengelola kampanye digital dan mengoptimalkan kehadiran online perusahaan melalui berbagai platform."
            }
        ]
    },
    {
        name: "Andi Kurniawan",
        company: "PT Digital Nusantara",
        location: [-6.208763, 106.845599],
        job: "Backend Developer",
        job_status: "Bekerja",
        province: "DKI Jakarta",
        city: "Jakarta",
        graduationYear: 2017,
        email: "andi.kurniawan@digitalnusantara.com",
        no_hp: "081234567891",
        salary: 9000000,
        linkedin: "https://www.linkedin.com/in/andi-kurniawan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Backend Developer dengan spesialisasi dalam pengembangan sistem berbasis cloud. Berpengalaman dengan Node.js dan database NoSQL.",
        keahlian: ["Node.js", "Express", "MongoDB", "AWS", "Microservices"],
        pendidikan: "Universitas Indonesia, Ilmu Komputer (2013 - 2017)",
        pengalaman: [
            {
                title: "Backend Developer",
                company: "PT Digital Nusantara",
                period: "Februari 2018 - Sekarang",
                description: "Membangun dan mengoptimalkan API untuk mendukung aplikasi skala besar."
            }
        ]
    },
    {
        name: "Rina Setyawati",
        company: "PT Kreatif Media",
        location: [-6.90389, 107.61861],
        job: "UI/UX Designer",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2016,
        email: "rina.setyawati@kreatifmedia.com",
        no_hp: "081245678912",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/rina-setyawati",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "UI/UX Designer dengan fokus pada pengalaman pengguna dan desain antarmuka yang intuitif.",
        keahlian: ["Figma", "Sketch", "Adobe XD", "User Research", "Wireframing"],
        pendidikan: "Institut Teknologi Bandung, Desain Komunikasi Visual (2012 - 2016)",
        pengalaman: [
            {
                title: "UI/UX Designer",
                company: "PT Kreatif Media",
                period: "Januari 2017 - Sekarang",
                description: "Merancang pengalaman pengguna dan antarmuka aplikasi yang ramah pengguna."
            }
        ]
    },
    {
        name: "Agus Salim",
        company: "PT Teknologi Hijau",
        location: [-7.983908, 112.621391],
        job: "Network Administrator",
        job_status: "Bekerja",
        province: "Jawa Timur",
        city: "Malang",
        graduationYear: 2015,
        email: "agus.salim@teknologihijau.com",
        no_hp: "081256789123",
        salary: 10000000,
        linkedin: "https://www.linkedin.com/in/agus-salim",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Network Administrator yang berpengalaman dalam pengaturan jaringan dan keamanan sistem.",
        keahlian: ["Network Security", "Cisco", "Firewall Configuration", "VPN", "Troubleshooting"],
        pendidikan: "Universitas Brawijaya, Teknik Informatika (2011 - 2015)",
        pengalaman: [
            {
                title: "Network Administrator",
                company: "PT Teknologi Hijau",
                period: "April 2016 - Sekarang",
                description: "Mengelola infrastruktur jaringan dan memastikan keamanan sistem perusahaan."
            }
        ]
    },
    {
        name: "Lina Hartanto",
        company: "PT E-Commerce Indonesia",
        location: [-6.914744, 107.609810],
        job: "Digital Marketing Specialist",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2018,
        email: "lina.hartanto@ecommerce.id",
        no_hp: "081267891234",
        salary: 2000000,
        linkedin: "https://www.linkedin.com/in/lina-hartanto",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Digital Marketing Specialist yang berfokus pada kampanye pemasaran online dan optimasi media sosial.",
        keahlian: ["SEO", "Content Marketing", "Social Media Marketing", "Google Analytics", "PPC"],
        pendidikan: "Universitas Padjadjaran, Ilmu Komunikasi (2014 - 2018)",
        pengalaman: [
            {
                title: "Digital Marketing Specialist",
                company: "PT E-Commerce Indonesia",
                period: "Juli 2018 - Sekarang",
                description: "Mengelola strategi pemasaran digital dan kampanye iklan online."
            }
        ]
    },
    {
        name: "Ahmad Fauzan",
        company: "PT Industri Kreatif",
        location: [-7.257472, 112.752088],
        job: "Full Stack Developer",
        job_status: "Bekerja",
        province: "Jawa Timur",
        city: "Surabaya",
        graduationYear: 2020,
        email: "ahmad.fauzan@industrikreatif.com",
        no_hp: "081278912345",
        salary: 2000000,
        linkedin: "https://www.linkedin.com/in/ahmad-fauzan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Full Stack Developer dengan pengalaman dalam pengembangan aplikasi web front-end dan back-end.",
        keahlian: ["JavaScript", "React", "Node.js", "MySQL", "API Integration"],
        pendidikan: "Institut Teknologi Sepuluh Nopember, Sistem Informasi (2016 - 2020)",
        pengalaman: [
            {
                title: "Full Stack Developer",
                company: "PT Industri Kreatif",
                period: "Maret 2020 - Sekarang",
                description: "Mengembangkan aplikasi web dengan teknologi modern dan memastikan performa yang optimal."
            }
        ]
    },
    {
        name: "Siti Aminah",
        company: "PT Bank Sejahtera",
        location: [-7.797068, 110.370529],
        job: "Data Scientist",
        job_status: "Bekerja",
        province: "DI Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2019,
        email: "siti.aminah@banksejahtera.com",
        no_hp: "081289123456",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/siti-aminah",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Data Scientist yang memiliki keahlian dalam analisis data dan pembuatan model prediktif untuk keperluan bisnis.",
        keahlian: ["Python", "Machine Learning", "Data Visualization", "SQL", "Statistics"],
        pendidikan: "Universitas Gadjah Mada, Matematika (2015 - 2019)",
        pengalaman: [
            {
                title: "Data Scientist",
                company: "PT Bank Sejahtera",
                period: "Juli 2019 - Sekarang",
                description: "Menganalisis data nasabah untuk memberikan insight bisnis dan membuat model prediksi."
            }
        ]
    },
    {
        name: "Rafi Setiawan",
        company: "PT Solusi Teknologi",
        location: [-6.914744, 107.609810],
        job: "Mobile Developer",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2021,
        email: "rafi.setiawan@solusiteknologi.com",
        no_hp: "081290123456",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/rafi-setiawan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Mobile Developer yang berfokus pada pengembangan aplikasi Android dan iOS dengan pengalaman menggunakan Flutter dan Kotlin.",
        keahlian: ["Flutter", "Kotlin", "Android Development", "iOS Development", "UI/UX"],
        pendidikan: "Telkom University, Teknik Informatika (2017 - 2021)",
        pengalaman: [
            {
                title: "Mobile Developer",
                company: "PT Solusi Teknologi",
                period: "September 2021 - Sekarang",
                description: "Membangun aplikasi mobile untuk berbagai sektor bisnis."
            }
        ]
    },
    {
        name: "Desi Marlina",
        company: "PT Karya Indah",
        location: [-6.208763, 106.845599],
        job: "Human Resources Manager",
        job_status: "Bekerja",
        province: "DKI Jakarta",
        city: "Jakarta",
        graduationYear: 2016,
        email: "desi.marlina@karyaindah.com",
        no_hp: "081231234567",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/desi-marlina",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Human Resources Manager dengan pengalaman dalam rekrutmen, pelatihan, dan pengembangan sumber daya manusia.",
        keahlian: ["Recruitment", "Employee Training", "Employee Relations", "HR Strategy", "Leadership"],
        pendidikan: "Universitas Negeri Jakarta, Manajemen SDM (2012 - 2016)",
        pengalaman: [
            {
                title: "Human Resources Manager",
                company: "PT Karya Indah",
                period: "Agustus 2016 - Sekarang",
                description: "Mengelola SDM perusahaan dan mengembangkan program pelatihan karyawan."
            }
        ]
    },
    {
        name: "Yoga Pratama",
        company: "PT Mekar Jaya",
        location: [-6.17511, 106.865036],
        job: "System Analyst",
        job_status: "Bekerja",
        province: "DKI Jakarta",
        city: "Jakarta",
        graduationYear: 2018,
        email: "yoga.pratama@mekarjaya.com",
        no_hp: "081299876543",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/yoga-pratama",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "System Analyst berpengalaman yang bertanggung jawab dalam analisis dan perancangan sistem perusahaan.",
        keahlian: ["System Analysis", "Project Management", "SQL", "Requirements Gathering", "Software Testing"],
        pendidikan: "Universitas Bina Nusantara, Teknik Informatika (2014 - 2018)",
        pengalaman: [
            {
                title: "System Analyst",
                company: "PT Mekar Jaya",
                period: "Mei 2018 - Sekarang",
                description: "Mengidentifikasi kebutuhan bisnis dan merancang solusi sistem yang sesuai."
            }
        ]
    },
    {
        name: "Sari Amalia",
        company: "PT Unggul Utama",
        location: [-7.797068, 110.370529],
        job: "Content Writer",
        job_status: "Bekerja",
        province: "DI Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2020,
        email: "sari.amalia@unggulutama.com",
        no_hp: "081212345678",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/sari-amalia",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Content Writer yang berpengalaman dalam penulisan konten kreatif dan artikel SEO untuk berbagai klien.",
        keahlian: ["Content Writing", "SEO", "Copywriting", "Creative Writing", "Social Media"],
        pendidikan: "Universitas Gadjah Mada, Sastra Inggris (2016 - 2020)",
        pengalaman: [
            {
                title: "Content Writer",
                company: "PT Unggul Utama",
                period: "Agustus 2020 - Sekarang",
                description: "Membuat konten kreatif dan artikel yang dioptimalkan untuk SEO."
            }
        ]
    }
];

// Fungsi untuk mendapatkan warna berdasarkan jumlah
function getColor(count) {
    return count > 10 ? '#800026' :  // Merah tua
        count > 7 ? '#BD0026' :  // Merah
            count > 5 ? '#E31A1C' :  // Merah muda
                count > 3 ? '#FC4E2A' :  // Oranye
                    count > 2 ? '#FD8D3C' :  // Oranye muda
                        count > 1 ? '#FEB24C' :  // Kuning
                            '#FFEDA0';    // Kuning muda
}

// Fungsi untuk membuat choropleth map kota
function createCityLayer(data) {
    return L.geoJSON(null, {
        pane: 'polygons',
        style: function (feature) {
            const cityKey = `${feature.properties.NAME_1}-${feature.properties.NAME_2}`;
            const count = calculateAlumniCount(data, 'city', cityKey);
            return {
                fillColor: getColor(count),
                weight: 1,
                opacity: 1,
                color: 'white',
                fillOpacity: 0.7
            };
        },
        onEachFeature: function (feature, layer) {
            const cityKey = `${feature.properties.NAME_1}-${feature.properties.NAME_2}`;
            const count = calculateAlumniCount(data, 'city', cityKey);
            layer.bindPopup(
                '<strong>' + feature.properties.NAME_2 + ', ' + feature.properties.NAME_1 + '</strong><br>' +
                'Jumlah Alumni: ' + count
            );

            // Add hover effects
            layer.on({
                mouseover: function (e) {
                    var layer = e.target;
                    layer.setStyle({
                        weight: 2,
                        color: '#666',
                        fillOpacity: 0.9
                    });
                    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                        layer.bringToFront();
                    }
                },
                mouseout: function (e) {
                    var layer = e.target;
                    layer.setStyle({
                        weight: 1,
                        opacity: 1,
                        color: 'white',
                        fillOpacity: 0.7
                    });
                }
            });
        }
    });
}

// Fungsi untuk membuat choropleth map provinsi
function createProvinceLayer(data) {
    return L.geoJSON(null, {
        pane: 'polygons',
        style: function (feature) {
            const count = calculateAlumniCount(data, 'province', feature.properties.NAME_1);
            return {
                fillColor: getColor(count),
                weight: 1,
                opacity: 1,
                color: 'white',
                fillOpacity: 0.7
            };
        },
        onEachFeature: function (feature, layer) {
            const count = calculateAlumniCount(data, 'province', feature.properties.NAME_1);
            layer.bindPopup(
                '<strong>' + feature.properties.NAME_1 + '</strong><br>' +
                'Jumlah Alumni: ' + count
            );

            // Add hover effects
            layer.on({
                mouseover: function (e) {
                    var layer = e.target;
                    layer.setStyle({
                        weight: 2,
                        color: '#666',
                        fillOpacity: 0.9
                    });
                    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                        layer.bringToFront();
                    }
                },
                mouseout: function (e) {
                    var layer = e.target;
                    layer.setStyle({
                        weight: 1,
                        opacity: 1,
                        color: 'white',
                        fillOpacity: 0.7
                    });
                }
            });
        }
    });
}

// Fungsi untuk membuat choropleth map alumni berdasarkan status kerja
function createJobStatusLayer(data, jobStatus) {
    return L.geoJSON(null, {
        style: function (feature) {
            const count = calculateAlumniCountByStatus(data, feature.properties.NAME_2, jobStatus);
            return {
                fillColor: getColor(count),
                weight: 2,
                opacity: 1,
                color: 'white',
                fillOpacity: 0.7
            };
        },
        onEachFeature: function (feature, layer) {
            const count = calculateAlumniCountByStatus(data, feature.properties.NAME_2, jobStatus);
            layer.bindPopup(
                '<strong>' + feature.properties.NAME_2 + '</strong><br>' +
                `Jumlah Alumni ${jobStatus}: ` + count
            );
        }
    });
}

// Fungsi helper untuk menghitung jumlah alumni
function calculateAlumniCount(data, type, key) {
    if (type === 'city') {
        const [province, city] = key.split('-');
        return data.filter(a => a.province === province && a.city === city).length;
    } else {
        return data.filter(a => a.province === key).length;
    }
}

// Fungsi helper untuk menghitung jumlah alumni berdasarkan status kerja
function calculateAlumniCountByStatus(data, city, status) {
    return data.filter(a => a.city === city && a.job_status === status).length;
}

// Custom control untuk layer
L.Control.LayerControl = L.Control.extend({
    options: {
        position: 'topright'
    },

    onAdd: function (map) {
        const container = L.DomUtil.create('div', 'leaflet-bar leaflet-control');
        container.style.backgroundColor = 'white';
        container.style.padding = '10px';
        container.style.borderRadius = '4px';
        container.style.boxShadow = '0 1px 5px rgba(0,0,0,0.4)';
        container.style.marginTop = '10px';
        container.style.minWidth = '180px';

        // Create dropdown header with title and dropdown icon
        const header = L.DomUtil.create('div', '', container);
        header.innerHTML = '<strong>Layer Peta</strong> <i class="fas fa-chevron-down"></i>';
        header.style.cursor = 'pointer';
        header.style.display = 'flex';
        header.style.justifyContent = 'space-between';
        header.style.alignItems = 'center';

        // Create content div that will be toggled
        const content = L.DomUtil.create('div', '', container);
        content.style.display = 'none';
        content.style.marginTop = '10px';

        // Toggle dropdown when clicking on header
        L.DomEvent.on(header, 'click', function () {
            content.style.display = content.style.display === 'none' ? 'block' : 'none';
        });

        const layers = [
            { name: 'Sebaran per Kota', layer: 'cityLayer' },
            { name: 'Sebaran per Provinsi', layer: 'provinceLayer' },
            { name: 'Alumni Bekerja', layer: 'workingLayer' },
            { name: 'Alumni Tidak Bekerja', layer: 'notWorkingLayer' }
        ];

        layers.forEach(layer => {
            const div = L.DomUtil.create('div', '', content);
            div.style.marginBottom = '5px';

            const radio = L.DomUtil.create('input', '', div);
            radio.type = 'radio';
            radio.name = 'layerControl';
            radio.id = layer.layer;

            const label = L.DomUtil.create('label', '', div);
            label.htmlFor = layer.layer;
            label.innerHTML = layer.name;
            label.style.marginLeft = '5px';

            L.DomEvent.on(radio, 'change', function (e) {
                layers.forEach(l => {
                    if (window[l.layer]) {
                        map.removeLayer(window[l.layer]);
                    }
                });
                if (e.target.checked && window[layer.layer]) {
                    map.addLayer(window[layer.layer]);
                }
            });

            if (layer.layer === 'cityLayer') {
                radio.checked = true;
            }
        });

        return container;
    }
});

L.control.layerControl = function (opts) {
    return new L.Control.LayerControl(opts);
};

// Create a separate legend control
L.Control.Legend = L.Control.extend({
    options: {
        position: 'bottomright'
    },

    onAdd: function (map) {
        const div = L.DomUtil.create('div', 'info legend');
        div.style.backgroundColor = 'white';
        div.style.padding = '10px';
        div.style.borderRadius = '4px';
        div.style.boxShadow = '0 1px 5px rgba(0,0,0,0.4)';

        div.innerHTML = '<strong>Jumlah Alumni</strong>';

        const grades = [0, 1, 2, 3, 5, 7, 10];
        for (let i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<div style="display:flex;align-items:center;margin:2px 0;">' +
                '<i style="background:' + getColor(grades[i] + 1) +
                ';width:18px;height:18px;margin-right:8px;opacity:0.7"></i>' +
                grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] : '+');
        }

        return div;
    }
});

L.control.legend = function (opts) {
    return new L.Control.Legend(opts);
};

document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi peta
    let map = L.map('map').setView([-0.789275, 113.921327], 5);

    // Store initial view for reset
    const initialView = {
        center: [-0.789275, 113.921327],
        zoom: 5
    };

    // Create custom panes for better performance
    map.createPane('polygons');
    map.getPane('polygons').style.zIndex = 400;
    map.getPane('polygons').style.pointerEvents = 'none';

    // Create a separate pane for active/hover polygons
    map.createPane('activePolygons');
    map.getPane('activePolygons').style.zIndex = 450;

    // Base map layer
    const baseMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Custom control untuk toggle marker
    L.Control.MarkerToggle = L.Control.extend({
        options: {
            position: 'topright'
        },

        onAdd: function (map) {
            const container = L.DomUtil.create('div', 'leaflet-bar leaflet-control');
            container.style.backgroundColor = 'white';
            container.style.padding = '5px';
            container.style.cursor = 'pointer';

            const checkbox = L.DomUtil.create('input', '', container);
            checkbox.type = 'checkbox';
            checkbox.id = 'markerToggle';
            checkbox.checked = true;

            const label = L.DomUtil.create('label', '', container);
            label.htmlFor = 'markerToggle';
            label.innerHTML = ' Tampilkan Marker';
            label.style.marginLeft = '5px';

            L.DomEvent.on(checkbox, 'change', function () {
                if (window.alumniMarkersCluster) {
                    if (this.checked) {
                        map.addLayer(window.alumniMarkersCluster);
                    } else {
                        map.removeLayer(window.alumniMarkersCluster);
                    }
                }
            });

            return container;
        }
    });

    L.control.markerToggle = function (opts) {
        return new L.Control.MarkerToggle(opts);
    };

    // Tambahkan marker toggle control
    L.control.markerToggle().addTo(map);

    // Object untuk menyimpan layer
    let overlayMaps = {};

    // Style untuk choropleth
    function getColor(count) {
        return count > 10 ? '#800026' :
            count > 7 ? '#BD0026' :
                count > 5 ? '#E31A1C' :
                    count > 3 ? '#FC4E2A' :
                        count > 2 ? '#FD8D3C' :
                            count > 1 ? '#FEB24C' :
                                '#FFEDA0';
    }

    function styleLayer(feature, count) {
        return {
            fillColor: getColor(count),
            weight: 2,
            opacity: 1,
            color: 'white',
            fillOpacity: 0.7
        };
    }

    // Fungsi untuk menghitung jumlah alumni
    function getAlumniCount(feature, type) {
        if (type === 'city') {
            return alumniData.filter(a =>
                a.province === feature.properties.NAME_1 &&
                a.city === feature.properties.NAME_2
            ).length;
        } else if (type === 'working') {
            return alumniData.filter(a =>
                a.province === feature.properties.NAME_1 &&
                a.city === feature.properties.NAME_2 &&
                a.job_status === 'Bekerja'
            ).length;
        } else if (type === 'not_working') {
            return alumniData.filter(a =>
                a.province === feature.properties.NAME_1 &&
                a.city === feature.properties.NAME_2 &&
                a.job_status === 'Tidak Bekerja'
            ).length;
        } else {
            return alumniData.filter(a =>
                a.province === feature.properties.NAME_1
            ).length;
        }
    }

    // Fungsi untuk membuat layer choropleth
    function createChoroplethLayer(geoJson, type) {
        return L.geoJSON(geoJson, {
            style: function (feature) {
                return {
                    fillColor: getColor(getAlumniCount(feature, type)),
                    weight: 0.5,
                    opacity: 0.8,
                    color: 'white',
                    fillOpacity: 0.7
                };
            },
            onEachFeature: function (feature, layer) {
                const count = getAlumniCount(feature, type);
                let popupContent = '';

                if (type === 'city') {
                    popupContent = `<strong>${feature.properties.NAME_2}, ${feature.properties.NAME_1}</strong><br>
                                   Jumlah Alumni: ${count}`;
                } else if (type === 'working') {
                    popupContent = `<strong>${feature.properties.NAME_2}, ${feature.properties.NAME_1}</strong><br>
                                   Jumlah Alumni Bekerja: ${count}`;
                } else if (type === 'not_working') {
                    popupContent = `<strong>${feature.properties.NAME_2}, ${feature.properties.NAME_1}</strong><br>
                                   Jumlah Alumni Tidak Bekerja: ${count}`;
                } else {
                    popupContent = `<strong>${feature.properties.NAME_1}</strong><br>
                                   Jumlah Alumni: ${count}`;
                }

                layer.bindPopup(popupContent);

                layer.on({
                    mouseover: function (e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 3,
                            color: '#666',
                            dashArray: '',
                            fillOpacity: 0.9
                        });
                    },
                    mouseout: function (e) {
                        window.choroplethLayer.resetStyle(e.target);
                    }
                });
            }
        });
    }

    // Load GeoJSON data dan inisialisasi layer
    $.when(
        $.getJSON('/geojson/provinsi.geojson'),
        $.getJSON('/geojson/kota.geojson')
    ).done(function (provinsiRes, kotaRes) {
        const provinsiData = provinsiRes[0];
        const kotaData = kotaRes[0];

        // Buat layer
        overlayMaps["Sebaran per Kota"] = createChoroplethLayer(kotaData, 'city');
        overlayMaps["Sebaran per Provinsi"] = createChoroplethLayer(provinsiData, 'province');
        overlayMaps["Alumni Bekerja"] = createChoroplethLayer(kotaData, 'working');
        overlayMaps["Alumni Tidak Bekerja"] = createChoroplethLayer(kotaData, 'not_working');

        // Set default layer
        map.addLayer(overlayMaps["Sebaran per Kota"]);
    });

    // Detail Modal Function
    window.showDetails = function (index) {
        const alumni = alumniData[index];
        const modalContent = document.getElementById("modalContent");

        modalContent.innerHTML = `
            <div class="row">
                <div class="col-md-5 text-center">
                    <img src="${alumni.photoUrl}" alt="${alumni.name}" class="img-fluid mb-3" style="width: 200px; height: 250px; object-fit: cover; border-radius: 10px;">
                    <h4 class="mt-2">${alumni.name}</h4>
                    
                    <h5 class="mt-4">Tentang Saya</h5>
                    <p>${alumni.tentangSaya}</p>

                    <h5 class="mt-4">Keahlian</h5>
                    <p>${alumni.keahlian.join(', ')}</p>

                    <h5 class="mt-4">Kontak</h5>
                    <p>Email: ${alumni.email} <br> No. HP: ${alumni.no_hp} <br> LinkedIn: <a href="${alumni.linkedin}" target="_blank">Profil LinkedIn</a></p>
                </div>

                <div class="col-md-7">
                    <h5>Pendidikan</h5>
                    <p>${alumni.pendidikan}</p>

                    <h5 class="mt-4">Pengalaman</h5>
                    <ul>
                        ${alumni.pengalaman.map(exp => `
                            <li>
                                <strong>${exp.title}</strong> di ${exp.company} (${exp.period}) <br>
                                ${exp.description}
                            </li>
                        `).join('')}
                    </ul>
                </div>
            </div>
        `;

        $('#detailModal').modal('show');
    };

    // Helper Functions
    function highlightProvince(layer) {
        if (highlightedProvinceLayer) {
            highlightedProvinceLayer.setStyle(provinceStyle);
        }

        layer.setStyle({
            fillColor: '#3f3f3f',
            color: '#000000',
            weight: 4,
            fillOpacity: 0.3
        });
        map.fitBounds(layer.getBounds());
        highlightedProvinceLayer = layer;

        var selectedProvince = layer.feature.properties.NAME_1;
        $('#citySelect').empty().append('<option value="">Pilih Kota</option>');

        if (cityLayers[selectedProvince]) {
            cityLayers[selectedProvince].forEach(function (city) {
                $('#citySelect').append('<option value="' + city.name + '">' + city.name + '</option>');
            });
            $('#citySelect').prop('disabled', false);
        } else {
            $('#citySelect').prop('disabled', true);
        }

        $('#citySelect').trigger('change');
    }

    function showCityLayer(provinceName) {
        if (cityLayers[provinceName]) {
            for (let key in cityLayers) {
                cityLayers[key].forEach(function (cityObj) {
                    map.removeLayer(cityObj.layer);
                });
            }

            cityLayers[provinceName].forEach(function (cityObj) {
                map.addLayer(cityObj.layer);

                cityObj.layer.on({
                    click: function (e) {
                        highlightCity(cityObj.layer);
                    }
                });
            });
        }
    }

    function highlightCity(layer) {
        if (highlightedLayer) {
            highlightedLayer.setStyle(defaultStyle);
        }

        layer.setStyle({
            fillColor: '#e42e2e',
            color: '#000000',
            weight: 5,
            fillOpacity: 0.7
        });

        map.fitBounds(layer.getBounds());
        highlightedLayer = layer;
    }

    function renderTable(data) {
        const tableBody = document.querySelector("#alumniTableBody");

        if (!tableBody) {
            console.error('Table body element not found');
            return;
        }

        const sortedData = data.sort((a, b) => {
            if (a.name.toLowerCase() < b.name.toLowerCase()) return -1;
            if (a.name.toLowerCase() > b.name.toLowerCase()) return 1;
            return a.graduationYear - b.graduationYear;
        });

        tableBody.innerHTML = "";

        if (data.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="8" class="text-center">Tidak ada data</td></tr>`;
        } else {
            data.forEach((alumni, index) => {
                const row = `
                    <tr>
                        <td class="text-center">${index + 1}</td>
                        <td class="text-center">${alumni.name}</td>
                        <td class="text-center">${alumni.job}</td>
                        <td class="text-center">${alumni.company}</td>
                        <td class="text-center">${alumni.province}</td>
                        <td class="text-center">${alumni.city}</td>
                        <td class="text-center">${alumni.graduationYear}</td>
                        <td class="text-center">
                            <div class="d-flex gap-2 justify-content-center">
                                <button class="btn btn-info btn-sm" onclick="showDetails(${index})" data-bs-toggle="modal" data-bs-target="#detailModal">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        // Update table info
        const tableInfo = document.getElementById('tableInfo');
        if (tableInfo) {
            tableInfo.textContent = `Menampilkan ${data.length > 0 ? 1 : 0} sampai ${data.length} dari ${data.length} entri`;
        }
    }

    // Initialize Select2 and other components
    function initializeSelect2() {
        $('#filterName').select2({
            placeholder: 'Cari Nama Alumni',
            allowClear: true,
            width: '100%'
        }).on('select2:select', function (e) {
            const selectedAlumni = alumniData.find(alumni => alumni.name === e.params.data.id);

            if (selectedAlumni) {
                map.setView(selectedAlumni.location, 13);
                $('#provinceSelect').val(selectedAlumni.province).trigger('change');

                setTimeout(() => {
                    $('#citySelect').val(selectedAlumni.city).trigger('change');
                }, 100);

                $('#companySelect').val(selectedAlumni.company).trigger('change');
                $('#yearSelect').val(selectedAlumni.graduationYear).trigger('change');
                $('#jobSelect').val(selectedAlumni.job).trigger('change');
                $('#jobStatusSelect').val(selectedAlumni.job_status).trigger('change');

                if (provinceLayers[selectedAlumni.province]) {
                    highlightProvince(provinceLayers[selectedAlumni.province]);
                }

                showCityLayer(selectedAlumni.province);
                if (cityLayers[selectedAlumni.province]) {
                    const cityLayer = cityLayers[selectedAlumni.province].find(city =>
                        city.name === selectedAlumni.city
                    );
                    if (cityLayer) {
                        highlightCity(cityLayer.layer);
                    }
                }
            }
        }).on('select2:clear', function (e) {
            map.setView([-2.5, 118], 5);

            if (highlightedProvinceLayer) {
                highlightedProvinceLayer.setStyle(provinceStyle);
                highlightedProvinceLayer = null;
            }
            if (highlightedLayer) {
                highlightedLayer.setStyle(defaultStyle);
                highlightedLayer = null;
            }

            for (let key in cityLayers) {
                cityLayers[key].forEach(function (cityObj) {
                    map.removeLayer(cityObj.layer);
                });
            }

            $('#provinceSelect').val('').trigger('change');
            $('#citySelect').val('').trigger('change');
            $('#citySelect').empty().append('<option value="">Semua</option>');
            $('#citySelect').prop('disabled', true);
            $('#yearSelect').val('').trigger('change');
            $('#jobSelect').val('').trigger('change');
            $('#jobStatusSelect').val('').trigger('change');
            $('#companySelect').val('').trigger('change');
        });

        // Initialize other Select2 dropdowns
        $('#companySelect').select2({
            placeholder: 'Cari Perusahaan',
            allowClear: true,
            width: '100%'
        });

        $('#provinceSelect').select2({
            placeholder: 'Pilih Provinsi',
            allowClear: true,
            width: '100%'
        });

        $('#citySelect').select2({
            placeholder: 'Pilih Kota',
            allowClear: true,
            width: '100%'
        });

        $('#yearSelect').select2({
            placeholder: 'Semua',
            allowClear: true,
            width: '72%'
        });

        $('#jobStatusSelect').select2({
            placeholder: 'Semua',
            allowClear: true,
            width: '61%'
        });

        $('#jobSelect').select2({
            placeholder: 'Pekerjaan',
            allowClear: true,
            width: '100%'
        });

        // Initialize salary slider
        const salarySlider = document.getElementById('salarySlider');
        if (salarySlider.noUiSlider) {
            salarySlider.noUiSlider.destroy();
        }

        noUiSlider.create(salarySlider, {
            start: [0, 50000000],
            connect: true,
            step: 100000,
            range: {
                'min': 0,
                'max': 50000000
            },
            format: {
                to: value => Math.round(value),
                from: value => Math.round(value)
            }
        });

        salarySlider.noUiSlider.on('update', function (values, handle) {
            document.getElementById('salaryStart').textContent = `Rp ${parseInt(values[0]).toLocaleString('id-ID')}`;
            document.getElementById('salaryEnd').textContent = `Rp ${parseInt(values[1]).toLocaleString('id-ID')}`;
        });

        salarySlider.noUiSlider.on('slide', filterAlumni);
    }

    // Populate dropdowns
    function populateDropdowns() {
        const companySet = new Set();
        const yearSet = new Set();
        const nameSet = new Set();
        const jobStatusSet = new Set();
        const jobSet = new Set();
        const provinceSet = new Set();
        const citiesByProvince = {};

        alumniData.forEach(alumni => {
            companySet.add(alumni.company);
            yearSet.add(alumni.graduationYear);
            nameSet.add(alumni.name);
            jobSet.add(alumni.job);
            jobStatusSet.add(alumni.job_status);

            // Add province
            provinceSet.add(alumni.province);

            // Group cities by province
            if (!citiesByProvince[alumni.province]) {
                citiesByProvince[alumni.province] = new Set();
            }
            citiesByProvince[alumni.province].add(alumni.city);
        });

        const sortedNames = Array.from(nameSet).sort();
        const sortedYears = Array.from(yearSet).sort();
        const sortedProvinces = Array.from(provinceSet).sort();

        // Populate all dropdowns
        $('#filterName').html('<option value="">Semua</option>' +
            sortedNames.map(name => `<option value="${name}">${name}</option>`).join(''));

        $('#companySelect').html('<option value="">Semua</option>' +
            Array.from(companySet).map(company => `<option value="${company}">${company}</option>`).join(''));

        $('#provinceSelect').html('<option value="">Semua</option>' +
            sortedProvinces.map(province => `<option value="${province}">${province}</option>`).join(''));

        $('#yearSelect').html('<option value="">Semua</option>' +
            sortedYears.map(year => `<option value="${year}">${year}</option>`).join(''));

        $('#jobStatusSelect').html('<option value="">Semua</option>' +
            Array.from(jobStatusSet).map(status => `<option value="${status}">${status}</option>`).join(''));

        $('#jobSelect').html('<option value="">Semua</option>' +
            Array.from(jobSet).map(job => `<option value="${job}">${job}</option>`).join(''));

        // Store cities by province for later use
        window.citiesByProvince = citiesByProvince;

        // Add event listener for province change to update city dropdown
        $('#provinceSelect').on('change', function () {
            const selectedProvince = $(this).val();
            const cityDropdown = $('#citySelect');

            // Clear current options
            cityDropdown.empty().append('<option value="">Semua</option>');

            // Disable if no province selected
            if (!selectedProvince) {
                cityDropdown.prop('disabled', true);
                return;
            }

            // Get cities for selected province
            const cities = window.citiesByProvince[selectedProvince];
            if (cities && cities.size > 0) {
                // Enable and populate city dropdown
                cityDropdown.prop('disabled', false);

                // Add sorted cities
                Array.from(cities).sort().forEach(city => {
                    cityDropdown.append(`<option value="${city}">${city}</option>`);
                });
            } else {
                cityDropdown.prop('disabled', true);
            }
        });

        // Initialize city dropdown as disabled
        $('#citySelect').prop('disabled', true);
    }

    // Filter functionality
    function filterAlumni() {
        const selectedProvince = $('#provinceSelect').val();
        const selectedCity = $('#citySelect').val();
        const selectedName = $('#filterName').val();
        const selectedCompany = $('#companySelect').val();
        const selectedYear = $('#yearSelect').val();
        const selectedJob = $('#jobSelect').val();
        const selectedJobStatus = $('#jobStatusSelect').val();
        const [minSalary, maxSalary] = document.getElementById('salarySlider').noUiSlider.get();

        const filteredData = alumniData.filter(alumni => {
            const matchProvince = !selectedProvince || alumni.province === selectedProvince;
            const matchCity = !selectedCity || alumni.city === selectedCity;
            const matchName = !selectedName || alumni.name === selectedName;
            const matchCompany = !selectedCompany || alumni.company === selectedCompany;
            const matchYear = !selectedYear || alumni.graduationYear.toString() === selectedYear;
            const matchJob = !selectedJob || String(alumni.job).toLowerCase() === String(selectedJob).toLowerCase();
            const matchJobStatus = !selectedJobStatus || String(alumni.job_status) === String(selectedJobStatus);
            const matchSalary = alumni.salary !== undefined &&
                alumni.salary >= parseInt(minSalary) &&
                alumni.salary <= parseInt(maxSalary);

            return matchProvince && matchCity && matchName && matchCompany &&
                matchYear && matchJob && matchJobStatus && matchSalary;
        });

        renderTable(filteredData);
        updateMap(filteredData);
    }

    // Map marker and cluster functionality
    const customIcon = L.icon({
        iconUrl: '/images/marker.png',
        iconSize: [45, 45],
        iconAnchor: [22.5, 45],
        popupAnchor: [0, -45]
    });

    function addCustomMarker(location, alumni) {
        const marker = L.marker(location, { icon: customIcon });
        marker.bindPopup(`
            <div style="width: 150px; text-align: center;">
                <img src="${alumni.photoUrl}" alt="${alumni.name}" class="img-fluid" 
                    style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px; border: 1px solid #ddd;">
                <h4 style="font-size: 16px; font-weight: bold; margin: 8px 0 4px;">${alumni.name}</h4>
                <p style="font-size: 14px; margin: 0; color: #555;">${alumni.job}</p>
                <p style="font-size: 13px; color: #777; margin: 0;">${alumni.company}</p>
                <p style="font-size: 12px; color: #999; margin: 4px 0;">${alumni.city}, ${alumni.province}</p>
            </div>
        `);
        return marker;
    }

    function createClusterGroup() {
        return L.markerClusterGroup({
            iconCreateFunction: function (cluster) {
                const count = cluster.getChildCount();
                return L.divIcon({
                    html: `
                        <div style="position: relative; width: 45px; height: 45px;">
                            <img src="/images/cluster-icon.png" style="width: 100%; height: 100%;">
                            <span style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                                        display: flex; align-items: center; justify-content: center; 
                                        color: white; font-weight: bold; font-size: 20px; text-shadow: 
                                        -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                                ${count}
                            </span>
                        </div>`,
                    className: 'custom-cluster-icon',
                    iconSize: [45, 45]
                });
            },
            maxClusterRadius: 80
        });
    }

    function style(feature, alumniCount) {
        return {
            fillColor: getColor(alumniCount),
            weight: 1,
            opacity: 0.8,
            color: 'white',
            fillOpacity: 0.7
        };
    }

    function calculateAlumniPerCity(data) {
        const cityCount = {};
        data.forEach(alumni => {
            const cityKey = `${alumni.province}-${alumni.city}`;
            if (!cityCount[cityKey]) {
                cityCount[cityKey] = {
                    count: 0,
                    province: alumni.province,
                    city: alumni.city
                };
            }
            cityCount[cityKey].count++;
        });
        return cityCount;
    }

    function updateMap(filteredData) {
        if (window.choroplethLayer) {
            map.removeLayer(window.choroplethLayer);
        }
        if (window.alumniMarkersCluster) {
            map.removeLayer(window.alumniMarkersCluster);
        }
        if (window.legend) {
            map.removeControl(window.legend);
        }

        // Hitung jumlah alumni per kota
        const alumniPerCity = calculateAlumniPerCity(filteredData);

        // Load dan tampilkan GeoJSON
        $.getJSON('/geojson/kota.geojson', function (kotaData) {
            // Optimize polygons by simplifying them to reduce points
            const simplifiedKotaData = {
                ...kotaData,
                features: kotaData.features.map(feature => {
                    return {
                        ...feature,
                        // For complex polygons, you may need a proper simplification algorithm
                        // This is a basic version that may not work for all complex polygons
                        geometry: simplifyGeometry(feature.geometry, 0.01) // 0.01 is simplification tolerance
                    };
                })
            };

            window.choroplethLayer = L.geoJSON(simplifiedKotaData, {
                pane: 'polygons',
                style: function (feature) {
                    const cityKey = `${feature.properties.NAME_1}-${feature.properties.NAME_2}`;
                    const count = alumniPerCity[cityKey] ? alumniPerCity[cityKey].count : 0;
                    return style(feature, count);
                },
                onEachFeature: function (feature, layer) {
                    const cityKey = `${feature.properties.NAME_1}-${feature.properties.NAME_2}`;
                    const count = alumniPerCity[cityKey] ? alumniPerCity[cityKey].count : 0;

                    layer.bindPopup(
                        '<strong>' + feature.properties.NAME_2 + ', ' + feature.properties.NAME_1 + '</strong><br>' +
                        'Jumlah Alumni: ' + count
                    );

                    layer.on({
                        mouseover: function (e) {
                            var layer = e.target;
                            layer.setPane('activePolygons');
                            layer.setStyle({
                                weight: 3,
                                color: '#666',
                                dashArray: '',
                                fillOpacity: 0.9
                            });
                            layer.bringToFront();
                        },
                        mouseout: function (e) {
                            var layer = e.target;
                            layer.setPane('polygons');
                            window.choroplethLayer.resetStyle(e.target);
                        },
                        click: function (e) {
                            map.fitBounds(e.target.getBounds());
                        }
                    });
                }
            }).addTo(map);
        });

        // Tambahkan markers dengan cluster
        window.alumniMarkersCluster = createClusterGroup();
        filteredData.forEach(function (alumni) {
            const marker = addCustomMarker(alumni.location, alumni);
            window.alumniMarkersCluster.addLayer(marker);
        });

        // Cek status checkbox sebelum menambahkan marker cluster
        const markerToggle = document.querySelector('#markerToggle');
        if (!markerToggle || markerToggle.checked) {
            map.addLayer(window.alumniMarkersCluster);
        }

        // Only add the legend if it doesn't already exist
        if (!window.legend) {
            window.legend = L.control.legend().addTo(map);
        }
    }

    // Function to simplify geometry to reduce polygon complexity
    function simplifyGeometry(geometry, tolerance) {
        if (geometry.type === 'Polygon') {
            return {
                type: 'Polygon',
                coordinates: geometry.coordinates.map(ring => {
                    // Keep every nth point to simplify (crude but effective)
                    // For a better solution, use a library like Turf.js for proper simplification
                    return ring.filter((coord, i) => i % 3 === 0 || i === ring.length - 1);
                })
            };
        } else if (geometry.type === 'MultiPolygon') {
            return {
                type: 'MultiPolygon',
                coordinates: geometry.coordinates.map(polygon => {
                    return polygon.map(ring => {
                        return ring.filter((coord, i) => i % 3 === 0 || i === ring.length - 1);
                    });
                })
            };
        }
        return geometry; // Return unchanged if not Polygon or MultiPolygon
    }

    // Initialize everything
    function initializeData() {
        try {
            console.log('Initializing dropdowns...');
            populateDropdowns();

            console.log('Initializing Select2...');
            initializeSelect2();

            console.log('Initializing table...');
            renderTable(alumniData);

            console.log('Initializing map markers...');
            window.alumniMarkersCluster = createClusterGroup();
            updateMap(alumniData);

            // Add markers for each alumni
            alumniData.forEach(function (alumni) {
                const marker = addCustomMarker(alumni.location, alumni);
                window.alumniMarkersCluster.addLayer(marker);
            });

            map.addLayer(window.alumniMarkersCluster);
            console.log('Initialization complete');
        } catch (error) {
            console.error('Error during initialization:', error);
        }
    }

    // Event listeners
    $('#filterName').on('input', filterAlumni);
    $('#companySelect').on('change', filterAlumni);
    $('#yearSelect').on('change', filterAlumni);
    $('#provinceSelect').on('change', filterAlumni);
    $('#citySelect').on('change', filterAlumni);
    $('#jobStatusSelect').on('change', filterAlumni);
    $('#jobSelect').on('change', filterAlumni);

    // Filter popup functionality
    document.getElementById("filterButton").addEventListener("click", function () {
        const filterPopup = document.getElementById("filterPopup");
        filterPopup.style.display = filterPopup.style.display === "none" ? "block" : "none";
    });

    document.getElementById("closeFilterPopup").addEventListener("click", function () {
        document.getElementById("filterPopup").style.display = "none";
    });

    document.getElementById("resetButton").addEventListener("click", function (e) {
        e.preventDefault();
        resetFilters();
    });

    document.getElementById("filterButton2").addEventListener("click", function () {
        filterAlumni();
        document.getElementById("filterPopup").style.display = "none";
    });

    // Reset filters function
    function resetFilters() {
        try {
            // Reset all select dropdowns
            ['#filterName', '#companySelect', '#provinceSelect', '#citySelect',
                '#yearSelect', '#jobSelect', '#jobStatusSelect'].forEach(selector => {
                    $(selector).val(null).trigger('change');
                });

            // Reset salary slider
            const salarySlider = document.getElementById('salarySlider');
            if (salarySlider && salarySlider.noUiSlider) {
                salarySlider.noUiSlider.set([0, 50000000]);
            }

            // Close filter popup
            document.getElementById("filterPopup").style.display = "none";

            // Reset map view to initial Indonesia view
            map.setView(initialView.center, initialView.zoom);

            // Reset table and map with all data
            renderTable(alumniData);

            // Update map with all data
            if (window.choroplethLayer) {
                map.removeLayer(window.choroplethLayer);
            }
            if (window.alumniMarkersCluster) {
                map.removeLayer(window.alumniMarkersCluster);
            }

            // Recreate and add layers with full data
            updateMap(alumniData);

            // Ensure marker visibility based on toggle state
            const markerToggle = document.getElementById('markerToggle');
            if (markerToggle && markerToggle.checked && window.alumniMarkersCluster) {
                map.addLayer(window.alumniMarkersCluster);
            }

            // Make sure the default layer (cityLayer) is visible
            if (window.cityLayer) {
                map.addLayer(window.cityLayer);
            }

            // Recreate layer control and legend
            if (window.layerControl) {
                map.removeControl(window.layerControl);
            }
            window.layerControl = L.control.layerControl().addTo(map);
            window.legend = L.control.legend().addTo(map);

            console.log('Reset filters completed successfully');
        } catch (error) {
            console.error('Error during reset:', error);
        }
    }

    // Load GeoJSON data dan inisialisasi layer
    $.getJSON('/geojson/kota.geojson', function (kotaData) {
        window.cityLayer = createCityLayer(alumniData);
        window.workingLayer = createJobStatusLayer(alumniData, 'Bekerja');
        window.notWorkingLayer = createJobStatusLayer(alumniData, 'Tidak Bekerja');

        window.cityLayer.addData(kotaData);
        window.workingLayer.addData(kotaData);
        window.notWorkingLayer.addData(kotaData);

        // Make sure city layer is added to map
        map.addLayer(window.cityLayer);

        // Add controls after layers are created
        window.layerControl = L.control.layerControl().addTo(map);
        window.legend = L.control.legend().addTo(map);
    });

    $.getJSON('/geojson/provinsi.geojson', function (provinsiData) {
        window.provinceLayer = createProvinceLayer(alumniData);
        window.provinceLayer.addData(provinsiData);
    });

    // Initialize the application
    initializeData();
    filterAlumni();
});