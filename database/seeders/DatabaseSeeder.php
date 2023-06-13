<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Generate Data Modul
        \App\Models\Modul::factory()->create([
            'name' => '1.	Persiapan Membangun dan Menjalankan Program Kotlin',
            'description' => 'Membuat program pertama di Kotlin dan menjalankannya. Selain itu, Anda akan belajar bagaimana menyiapkan dan menginstal beberapa tools seperti IDE dan build tools. Materi ini akan fokus pada penggunaan Gradle sebagai build tools dan menggunakan Kotlin DSL sebagai bahasa pada Gradle. Selain itu, pada materi ini akan membahas tentang struktur Gradle, cara menambahkan dependensi, menambahkan plugin, dan cara mengkonfigurasi plugin.',
        ]);
        \App\Models\Modul::factory()->create([
            'name' => '1.	Pengenalan Dart',
            'description' => 'Mengenal apa itu Dart, karakteristiknya, dan platform apa saja yang didukung.',
        ]);
        \App\Models\Modul::factory()->create([
            'name' => '1.	Pengenalan Swift',
            'description' => 'Mengenalkan bahasa Swift serta environment yang dibutuhkan untuk mempelajari bahasa pemrograman Swift.',
        ]);

        //Generate Data Course Category
        // \App\Models\CourseCategory::factory(3)->create();
        \App\Models\CourseCategory::factory()->create([
            'name_category' => 'Android Development',
        ]);
        \App\Models\CourseCategory::factory()->create([
            'name_category' => 'IOS Development',
        ]);
        \App\Models\CourseCategory::factory()->create([
            'name_category' => 'Cross-Platform Development',
        ]);

        //Generate Data Course
        // \App\Models\Course::factory(8)->create();
        \App\Models\Course::factory()->create([
            'title' => 'Memulai Pemrograman Dengan Kotlin',
            'id_category' => 1, 
            'summary' => '<div> Pelajari dasar bahasa pemrograman, functional programming, object-oriented programming (OOP), serta concurrency dengan menggunakan Kotlin. </div>.',
            'description' => '<div>Kotlin merupakan bahasa utama yang digunakan dalam pengembangan Android saat ini. Hal ini karena manfaat yang diberikan seperti ringkas, cepat, dan aman. Selain itu, sifatnya yang interoperability membuat developer bisa beralih dari bahasa Java ke Kotlin dengan cepat. Tak ayal, Google pernah melaporkan hampir 80% dari 1000 aplikasi teratas di Play Store menggunakan Kotlin. Selain pengembangan Android, Kotlin dapat digunakan untuk berbagai macam pengembangan, baik itu server, back-end, maupun website.<br><br></div><ul><li>Materi relevan dengan tools dan framework yang banyak dipakai sekarang. </li><li>Dengan menggunakan Kotlin pengembangan aplikasi akan jauh lebih cepat. </li><li>Pengembangan aplikasi menggunakan Kotlin bisa berjalan bersamaan dengan Java dalam satu project. </li><li>Kotlin menjadi bahasa resmi yang direkomendasikan dalam pengembangan Android. </li><li>Kotlin juga dapat digunakan untuk pengembangan platform selain seperti server, back-end, dan website.</li></ul>',
            'price' => 500000,
        ]);
        \App\Models\Course::factory()->create([
            'title' => 'Memulai Pemrograman Dengan Dart',
            'id_category' => 3, 
            'summary' => ' <div>Belajar bahasa Dart sebagai fondasi dasar untuk mengembangkan aplikasi di berbagai platform menggunakan Flutter.</div>',
            'description' => '<div>Dart adalah sebuah bahasa pemrograman yang dikembangkan oleh Google dan merupakan bahasa pemrograman resmi untuk Flutter, sebuah UI toolkit dan aplikasi multiplatform dari Google. Flutter sendiri telah digunakan oleh berbagai perusahaan besar seperti Google, Alibaba.com, dan Tencent karena dapat menghemat waktu dan tenaga dengan cara cukup membutuhkan satu codebase untuk mengembangkan aplikasi di berbagai platform, daripada harus menghabiskan waktu untuk membuat codebase terpisah untuk masing-masing platform.<br><br></div><ul><li>Dart merupakan bahasa yang wajib Anda kuasai untuk mengembangkan aplikasi Flutter.</li><li>Dengan Dart, Anda hanya perlu satu codebase untuk dapat mengembangkan aplikasi pada berbagai platform seperti web, Android, dan iOS.</li><li>Bahasa Dart dirancang supaya familier dengan bahasa pemrograman lain sehingga mudah bagi yang sudah mengerti bahasa pemrograman lain maupun bagi yang baru memulai perjalanannya sebagai developer.</li><li>Penggunaan bahasa Dart itu gratis (open source) dan dikembangkan oleh komunitas developer ahli yang aktif dan terbuka.</li><li>Dart adalah bahasa yang dioptimalkan untuk pengembangan UI secara cepat dan produktif pada banyak platform.</li></ul>',
            'price' => 400000,
        ]);
        \App\Models\Course::factory()->create([
            'title' => 'Memulai Pemrograman Dengan Swift',
            'id_category' => 2, 
            'summary' => ' <div>Belajar bahasa Swift buat kamu yang ingin mempelajari konsep dasar pemrograman dalam mengembangkan aplikasi iOS, iPadOS, dan macOS.</div>',
            'description' => '<div>Sejak dikenalkan di Apple Wordwide Developer Conference (WWDC) pada tahun 2014, Swift menjadi bahasa resmi yang dikembangkan oleh Apple Inc untuk pengembangan aplikasi iOS, iPadOs, masOS, wathcOS, tvOS, dan linux. Swift merupakan bahasa pemrograman yang modern, cepat, dan type-safe. Selain itu, Swift merupakan hasil pengembangan dari bahasa Objective-C, sehingga ia lebih mudah dipelajari dan dibaca. Tidak ada keraguan bahwa pecinta Swift akan terus tumbuh dalam waktu dekat dan mungkin Anda salah satunya. <br><br></div><ul><li>Swift merupakan bahasa resmi dari Apple Inc. untuk membangun aplikasi iOS, iPadOs, macOS, watchOS, tvOS, dan Linux.</li><li>Swift akan membantu Anda selama proses pengembangan aplikasi iOS.</li><li>Swift merupakah bahasa pemrograman yang modern, cepat, dan type-safe.</li><li>Swift merupakan hasil pengembangan dari bahasa Objective-C, dapat dikatakan Objective-C tanpa C. Oleh karena itu, bahasa pemrograman Swift lebih mudah dibaca dan dipelajari dibandingkan Objective-C.</li></ul>',
            'price' => 400000,
        ]);

        //Generate Data Material
        \App\Models\Material::factory()->create([
            'modul_id' => 1,
            'title' => '1.	Persiapan Membangun dan Menjalankan Program Kotlin',
            'content' => '<div>Pendahuluan: Kotlin adalah bahasa pemrograman modern yang dapat digunakan untuk mengembangkan aplikasi berbasis Android, server-side, dan aplikasi lintas platform. Untuk memulai membangun dan menjalankan program Kotlin, Anda perlu melakukan beberapa persiapan dan mengatur lingkungan kerja yang tepat. Dalam materi ini, kami akan membahas langkah-langkah persiapan yang diperlukan untuk membangun dan menjalankan program Kotlin.</div><ol><li>Instalasi Java Development Kit (JDK): Sebelum Anda dapat memulai dengan Kotlin, Anda perlu menginstal Java Development Kit (JDK) di komputer Anda. Kotlin berjalan di atas platform Java, sehingga JDK diperlukan untuk mengkompilasi dan menjalankan kode Kotlin. Pastikan Anda mengunduh JDK versi terbaru dari situs resmi Oracle dan mengikuti petunjuk instalasi yang diberikan.</li><li>Instalasi Kotlin: Setelah JDK terinstal, langkah berikutnya adalah menginstal Kotlin. Ada beberapa cara untuk menginstal Kotlin, namun dalam materi ini, kami akan menggunakan alat manajemen dependensi bernama "Gradle" untuk mengatur proyek Kotlin. Berikut langkah-langkahnya:<ol><li>Unduh dan pasang Gradle: Kunjungi situs web resmi Gradle dan ikuti petunjuk instalasi untuk sistem operasi Anda.</li><li>Buat Proyek Kotlin: Buat direktori baru di komputer Anda untuk proyek Kotlin Anda.</li><li>Inisialisasi Proyek Kotlin: Buka terminal atau command prompt, lalu arahkan ke direktori proyek Kotlin yang baru saja Anda buat.</li><li>Konfigurasi Proyek Kotlin: Setelah berada di direktori proyek, inisialisasi proyek Kotlin menggunakan perintah <strong>gradle init</strong>. Pilih opsi "application" saat diminta tipe proyek.</li><li>Sinkronisasi Dependensi: Jalankan perintah <strong>gradle build</strong> untuk men-download dependensi Kotlin dan mengkonfigurasi proyek Anda.</li></ol></li></ol><div><br></div>',
        ]);  
        \App\Models\Material::factory()->create([
            'modul_id' => 2,
            'title' => '1.	Kenalan dengan Dart',
            'content' => '<div><br>Dart adalah bahasa pemrograman yang dikembangkan oleh Google. Itu dirancang untuk mengembangkan aplikasi lintas platform, terutama aplikasi berbasis Flutter untuk Android, iOS, web, dan desktop. Dart menggunakan sintaks yang familiar dan memadukan fitur-fitur modern yang memungkinkan pengembang untuk membuat aplikasi yang efisien dan kaya fitur. Dalam materi ini, kita akan mengenalkan dasar-dasar Dart dan fitur-fitur utamanya.<br><br></div><div><br></div><ol><li>Sejarah Singkat Dart: Dart diperkenalkan oleh Google pada tahun 2011 sebagai alternatif untuk bahasa JavaScript dalam pengembangan aplikasi web. Namun, seiring waktu, Dart berkembang menjadi bahasa pemrograman yang serbaguna untuk mengembangkan aplikasi lintas platform. Pada tahun 2018, Google merilis Flutter, kerangka kerja UI yang berbasis Dart, yang memberikan dorongan besar bagi popularitas dan adopsi Dart.</li><li>Fitur-fitur Utama Dart:<br>Berikut adalah beberapa fitur utama dari bahasa pemrograman Dart:<ol><li>Tipe Data Statis: Dart menggunakan sistem tipe data statis. Ini berarti Anda harus mendeklarasikan tipe variabel saat menggunakannya. Hal ini membantu mengidentifikasi kesalahan tipe data selama kompilasi dan meningkatkan keamanan dan kinerja aplikasi.</li><li>Penanganan Eror yang Kuat: Dart memiliki mekanisme yang kuat untuk menangani eror dan pengecualian. Dengan menggunakan blok <strong>try-catch-finally</strong>, Anda dapat menangkap dan menangani eror dengan baik dalam kode Anda.</li><li>Asinkron dan Future: Dart mendukung pemrograman asinkron menggunakan kata kunci <strong>async</strong> dan <strong>await</strong>. Ini memungkinkan Anda untuk melakukan operasi yang berpotensi memblokir seperti permintaan jaringan tanpa menghentikan eksekusi program.</li><li>Pemrograman Berorientasi Objek: Dart adalah bahasa pemrograman berorientasi objek. Anda dapat menggunakan kelas, objek, pewarisan, polimorfisme, dan konsep pemrograman berorientasi objek lainnya untuk membangun aplikasi yang terstruktur.</li><li>Koleksi Data: Dart menyediakan koleksi data seperti List, Set, dan Map untuk memanipulasi dan mengelola data dengan mudah.</li></ol></li></ol>',
        ]);  
        \App\Models\Material::factory()->create([
            'modul_id' => 3,
            'title' => '1.	Kenalan dengan Swift',
            'content' => '<div>Swift adalah bahasa pemrograman modern yang dikembangkan oleh Apple Inc. untuk mengembangkan aplikasi untuk platform Apple seperti iOS, macOS, watchOS, dan tvOS. Swift diklaim sebagai bahasa yang aman, ekspresif, dan efisien dengan sintaks yang bersih dan mudah dipahami. Dalam materi ini, kita akan mengenalkan dasar-dasar Swift dan fitur-fitur utamanya.</div><ol><li>Sejarah Singkat Swift: Swift diperkenalkan oleh Apple pada tahun 2014 sebagai pengganti bahasa pemrograman Objective-C dalam pengembangan aplikasi iOS. Tujuannya adalah untuk menyediakan bahasa yang lebih modern, lebih aman, dan lebih mudah dipelajari daripada Objective-C. Sejak itu, Swift telah berkembang menjadi bahasa pemrograman populer yang digunakan secara luas dalam pengembangan aplikasi Apple.</li><li>Fitur-fitur Utama Swift: Berikut adalah beberapa fitur utama dari bahasa pemrograman Swift:<ol><li>Sintaks Bersih dan Ekspresif: Swift menggunakan sintaks yang bersih dan mudah dipahami, membuatnya lebih mudah bagi pengembang pemula dan berpengalaman untuk membaca, menulis, dan memelihara kode.</li><li>Tipe Data Statis: Swift menggunakan sistem tipe data statis yang kuat. Hal ini membantu mengidentifikasi dan mencegah kesalahan tipe data selama kompilasi, meningkatkan keandalan dan kinerja aplikasi.</li><li>Pemrograman Berorientasi Objek: Swift mendukung paradigma pemrograman berorientasi objek dengan konsep seperti class, objek, pewarisan, dan polimorfisme.</li><li>Keamanan: Swift didesain dengan fokus pada keamanan. Beberapa fitur keamanan termasuk penanganan otomatis terhadap kebocoran memori dengan menggunakan ARC (Automatic Reference Counting), pengolahan yang aman terhadap nilai-nilai opsional, dan penanganan eror yang kuat.</li><li>Cepat dan Efisien: Swift memiliki performa yang tinggi dan efisiensi yang baik. Dibangun dengan menggunakan teknologi modern, Swift memberikan waktu eksekusi yang lebih cepat dan penggunaan memori yang lebih efisien.<br><br></li></ol></li></ol>',
        ]);  

        //Generate Course Modul
        \App\Models\Course_Modul::factory()->create([
            'id_course' => 1,
            'id_modul' => 1,
        ]);
        \App\Models\Course_Modul::factory()->create([
            'id_course' => 2,
            'id_modul' => 2,
        ]);
        \App\Models\Course_Modul::factory()->create([
            'id_course' => 3,
            'id_modul' => 3,
        ]);

        //Generate Data Role
        $roles = ['admin', 'mentor', 'user'];
        foreach ($roles as $role) {
            \App\Models\Role::factory()->create([
                'role_name' => $role,
            ]);
        }   

        //Generate Data User
        \App\Models\User::factory()->create([
            'name' => 'Muhammad Ibnu',
            'role_id' => 1, // 'admin
            'email' => 'muhibnu@gmail.com',
            'username' => 'muhibnu1',
            // 'no_telp' => fake()->unique()->phoneNumber(),
            'password' => bcrypt('admin1'), // password
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Muhammad Irvan',
            'role_id' => 1, // 'admin
            'email' => 'muhirvan@gmail.com',
            'username' => 'muhirvan1',
            // 'no_telp' => fake()->unique()->phoneNumber(),
            'password' => bcrypt('admin2'), // password
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Khairul Damar',
            'role_id' => 1, // 'admin
            'email' => 'khdmr@gmail.com',
            'username' => 'khdmr1',
            // 'no_telp' => fake()->unique()->phoneNumber(),
            'password' => bcrypt('admin3'), // password
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Noel Kurniawan',
            'role_id' => 3, // 'user
            'email' => 'Noel@gmail.com',
            'username' => 'Noel123',
            // 'no_telp' => fake()->unique()->phoneNumber(),
            'password' => bcrypt('user1'), // password
        ]);

        //Generate Enrollment
        \App\Models\Enrollment::factory()->create([
            'id_user' => 1,
            'id_course' => 1,
        ]);
        \App\Models\Enrollment::factory()->create([
            'id_user' => 1,
            'id_course' => 2,
        ]);
        \App\Models\Enrollment::factory()->create([
            'id_user' => 2,
            'id_course' => 1,
        ]);

        //Generate Data Blog Post
        // \App\Models\BlogPost::factory(10)->create();
        \App\Models\BlogPost::factory()->create([
            'title' => 'Melangkah ke Dunia Digital',
            'id_author' => 1,
            'summary' => 'Temukan berbagai aspek menarik dalam ilmu komputer, dari konsep dasar hingga perkembangan terkini.',
            'content' => 'Dalam era digital yang terus berkembang, ilmu komputer menjadi landasan bagi inovasi dan perubahan yang cepat. Mari kita menjelajahi berbagai aspek menarik dalam ilmu komputer dan memahami peran kritisnya dalam membentuk masa depan kita.

            Konsep Dasar Ilmu Komputer
            Kita akan memulai perjalanan ini dengan memahami konsep dasar ilmu komputer. Apa itu ilmu komputer? Bagaimana komputer bekerja? Kami akan membahas komponen dasar seperti perangkat keras, perangkat lunak, dan sistem operasi. Anda akan mendapatkan pemahaman yang kokoh tentang fondasi ilmu komputer.
            
            Kecerdasan Buatan dan Machine Learning
            Salah satu bidang yang sedang berkembang pesat dalam ilmu komputer adalah kecerdasan buatan (AI) dan machine learning. Kami akan membahas apa itu kecerdasan buatan, bagaimana algoritma machine learning bekerja, dan aplikasinya dalam kehidupan sehari-hari. Temukan bagaimana AI mengubah berbagai industri dan membantu mengatasi tantangan kompleks.
            
            Pengembangan Perangkat Lunak
            Perangkat lunak merupakan tulang punggung teknologi modern. Dalam blog ini, kami akan menjelajahi dunia pengembangan perangkat lunak, termasuk berbagai metode dan alat yang digunakan untuk merancang, mengembangkan, dan menguji perangkat lunak. Jelajahi tren terkini dalam pengembangan perangkat lunak dan bagaimana pemrograman memainkan peran penting dalam membangun aplikasi yang inovatif.
            
            Jaringan Komputer dan Keamanan
            Dalam era konektivitas global, jaringan komputer menjadi sangat penting. Kami akan membahas konsep dasar jaringan komputer, seperti protokol, topologi, dan teknologi terkait. Selain itu, kami akan menjelajahi isu keamanan dalam jaringan komputer dan pentingnya melindungi data sensitif dan informasi pribadi.
            
            Ilmu Komputer dalam Masa Depan
            Terakhir, kita akan melihat ke masa depan ilmu komputer dan kemajuan teknologi yang akan membentuk dunia kita. Dari komputasi kuantum hingga realitas virtual dan augmented reality, kami akan merenungkan potensi luar biasa yang akan datang dan dampaknya pada kehidupan kita.
            
            Dengan pemahaman yang mendalam tentang ilmu komputer, kita dapat bersiap menghadapi masa depan yang semakin terhubung dan inovatif. Mari kita terus mempelajari, beradaptasi, dan mengambil bagian dalam perubahan yang ditawarkan oleh dunia ilmu komputer.
            ',
        ]);
        \App\Models\BlogPost::factory()->create([
            'title' => 'Praktik AI yang Adil',
            'id_author' => 2,
            'summary' => 'Sebuah teknologi baru, yang digunakan secara luas, menimbulkan pertanyaan mendalam tentang dampaknya terhadap masyarakat Amerika.',
            'content' => 'Sebuah teknologi baru, yang digunakan secara luas, menimbulkan pertanyaan mendalam tentang dampaknya terhadap masyarakat Amerika. Instansi pemerintah bertanya-tanya apakah teknologi ini harus digunakan untuk membuat keputusan otomatis tentang orang Amerika. Laporan berita mendokumentasikan salah urus dan penyalahgunaan. Pakar akademik meminta perhatian pada kekhawatiran tentang keadilan dan akuntabilitas. Sidang kongres diadakan. Sebuah agen federal melakukan tinjauan komprehensif. Pakar ilmiah dikonsultasikan. Komentar dari masyarakat diminta. Konferensi pers Gedung Putih diumumkan. Sebuah laporan rinci dirilis. Inti dari laporan ini adalah lima prinsip untuk mengatur teknologi baru.
            Saat itu tahun 1973. Dan laporan Records, Computers, and the Rights of Citizens memberikan dasar bagi hukum privasi modern. Laporan tersebut menetapkan lima pilar pengelolaan sistem informasi yang kemudian dikenal sebagai " Praktik Informasi yang Adil". Laporan tersebut akan mengarah langsung ke pengesahan Undang-Undang Privasi 1974, undang-undang privasi paling komprehensif yang pernah diberlakukan di Amerika Serikat. Hingga hari ini, Praktik Informasi yang Adil, yang dikembangkan oleh sebuah komisi yang dipimpin oleh ilmuwan komputer Willis Ware , tetap menjadi konsep perlindungan privasi yang paling berpengaruh.
            Maju cepat 50 tahun kemudian. Cetak Biru untuk AI Bill of Rights diumumkan oleh Office of Science and Technology Policy. Laporan tahun 2022 menandai titik balik dalam kebijakan AI AS, dan seperti laporan tahun 1973, mengikuti lintasan yang sudah dikenal.. Itu terlalu dini untuk dinilai. Tetapi banyak kritik yang jauh dari sasaran. Seperti laporan "Hak Warga Negara", AI Bill of Rights tidak menetapkan hak baru. Dan seperti laporan tahun 1973, rekomendasi dalam Cetak Biru membutuhkan tindakan dari pihak lain. Namun persamaan yang paling luar biasa adalah lima prinsip yang menjadi inti dari kedua laporan tersebut. Laporan "Hak Warga Negara" menetapkan Praktik Informasi yang Adil:
            Tidak boleh ada sistem pencatatan data pribadi yang keberadaannya dirahasiakan.
            Harus ada cara bagi seseorang untuk mengetahui informasi apa tentang orang tersebut dalam catatan dan bagaimana informasi itu digunakan.
            Harus ada cara bagi seseorang untuk mencegah informasi tentang orang yang diperoleh untuk satu tujuan digunakan atau disediakan untuk tujuan lain tanpa persetujuan orang tersebut.
            Harus ada cara bagi seseorang untuk mengoreksi atau mengubah catatan informasi yang dapat diidentifikasi tentang orang tersebut.
            Setiap organisasi yang membuat, memelihara, menggunakan, atau menyebarluaskan rekaman data pribadi yang dapat diidentifikasi harus memastikan keandalan data untuk penggunaan yang dimaksudkan dan harus mengambil tindakan pencegahan untuk mencegah penyalahgunaan data.
            Cetak Biru 2022 menyatakan:
            Keselamatan dan Keamanan - Anda harus dilindungi dari sistem yang tidak aman atau tidak efektif.
            Keadilan dan Kesetaraan - Anda tidak boleh menghadapi diskriminasi oleh algoritme dan sistem harus digunakan dan dirancang dengan cara yang adil. 
            Perlindungan Data dan Privasi berdasarkan Desain - Anda harus dilindungi dari praktik data yang kasar melalui perlindungan bawaan dan Anda harus memiliki hak untuk mengatur bagaimana data tentang Anda digunakan.
            Transparansi dan Dapat Dijelaskan - Anda harus tahu bahwa sistem otomatis sedang digunakan dan memahami bagaimana dan mengapa hal itu berkontribusi pada hasil yang memengaruhi Anda.
            Akuntabilitas dan Pengambilan keputusan manusia - Anda harus dapat memilih untuk tidak ikut serta, jika perlu, dan memiliki akses ke seseorang yang dapat dengan cepat mempertimbangkan dan mengatasi masalah yang Anda hadapi.
            Praktik Informasi yang Adil mengalokasikan hak dan tanggung jawab dalam pengumpulan dan penggunaan data pribadi. Cetak Biru 2022 telah menetapkan "Praktek AI yang Adil," yang mengalokasikan hak dan tanggung jawab dalam pengembangan dan penerapan sistem AI. Ini bisa menjadi dasar kebijakan AI di AS
            Di tahun-tahun mendatang, akan menarik untuk melihat apakah AI Bill of Rights menempati peran dalam sejarah Amerika yang serupa dengan laporan "Hak Warga Negara" tahun 1973. Tapi pada awalnya, satu hal yang pasti: kemiripannya sangat mencolok.
            ',
        ]);
        \App\Models\BlogPost::factory()->create([
            'title' => 'Robot Humanoid Semakin Dewasa',
            'id_author' => 3,
            'summary' => 'Beberapa startup sekarang sudah mengklaim memiliki model robot humanoid yang hampir siap untuk bekerja di gudang dan pabrik.',
            'content' => 'Delapan tahun yang lalu, Pentagon’s Defense Advanced Research Projects Agency menyelenggarakan  kontes yang menyakitkan untuk ditonton yang melibatkan robot yang perlahan-lahan berjuang (dan seringkali gagal) untuk melakukan serangkaian tugas manusia, termasuk membuka pintu, mengoperasikan perkakas listrik, dan mengendarai kereta golf. Klip dari mereka meraba-raba dan tersandung melalui Darpa Robotics Challenge segera menjadi viral.
            Saat ini, keturunan robot malang itu jauh lebih cakap dan anggun. Beberapa startup sedang mengembangkan humanoid yang mereka klaim dapat, hanya dalam beberapa tahun, mendapatkan pekerjaan di gudang dan pabrik. 
            Jerry Pratt , seorang ilmuwan peneliti senior di Institute for Human and Machine Cognition, sebuah lembaga penelitian nirlaba di Florida, memimpin tim yang menempati posisi kedua dalam tantangan Darpa pada tahun 2015. Dia sekarang menjadi kepala petugas teknologi Figure AI , sebuah perusahaan  yang membangun robot humanoid yang dirancang untuk pekerjaan gudang yang hari ini mengumumkan pendanaan investasi sebesar $70 juta.
            Pratt mengatakan bahwa jika tantangan Darpa dijalankan hari ini, robot akan dapat menyelesaikan tantangan dalam waktu sekitar seperempat dari 50 menit yang dibutuhkan robotnya untuk menyelesaikan lintasan, dengan sedikit kecelakaan. “Dari sudut pandang teknis, banyak teknologi yang memungkinkan baru-baru ini muncul,” katanya.
            Visi komputer yang lebih canggih, yang dimungkinkan melalui pengembangan  pembelajaran mesin selama dekade terakhir, telah mempermudah mesin untuk menavigasi lingkungan yang kompleks dan melakukan tugas seperti menaiki tangga dan menggenggam objek. Baterai yang lebih padat daya  , yang diproduksi sebagai hasil pengembangan kendaraan listrik, juga memungkinkan untuk mengemas daya yang cukup ke dalam robot humanoid agar dapat menggerakkan kakinya dengan cukup cepat untuk menyeimbangkan secara dinamis—yaitu, untuk menstabilkan dirinya sendiri saat tergelincir atau salah menilai langkah, seperti yang bisa dilakukan manusia.
            Pratt mengatakan robot perusahaannya mengambil langkah pertama di sekitar gudang tiruan di Sunnyvale, California. Brett Adcock, CEO Figure, menganggap mungkin untuk membuat humanoid dengan biaya yang sama untuk membuat mobil, asalkan ada cukup permintaan untuk meningkatkan produksi.
            Jika Adcock benar tentang itu, maka bidang robotika sedang mendekati momen penting. Anda mungkin akrab dengan  robot humanoid Atlas yang sedang menari yang telah mengumpulkan suka di YouTube selama beberapa tahun. Mereka dibuat oleh Boston Dynamics,  pelopor penggerak berkaki yang membangun beberapa humanoid yang digunakan di kontes Darpa, dan menunjukkan bahwa membuat robot yang mampu dalam bentuk manusia adalah mungkin. Tetapi robot ini sangat mahal—Atlas asli berharga beberapa juta dolar—dan tidak memiliki perangkat lunak yang dibutuhkan untuk membuatnya otonom dan berguna.
            Figure bukan satu-satunya perusahaan yang bertaruh bahwa robot humanoid akan menjadi dewasa. Lainnya termasuk  1X ,  Apptronik , dan  Tesla . Elon Musk, CEO Tesla, mengunjungi Tantangan Robotika Darpa yang asli pada tahun 2015. Fakta bahwa dia sekarang tertarik untuk membuat sendiri humanoid menunjukkan bahwa beberapa teknologi yang diperlukan untuk membuat mesin semacam itu akhirnya dapat digunakan.
            Jonathan Hurst , seorang profesor di Oregon State University dan salah satu pendiri  Agility Robotics , juga hadir di tantangan Darpa untuk memberikan demo robot berjalan yang dibuatnya. Ketangkasan telah bekerja pada robot berkaki untuk sementara waktu, tetapi Hurst menyatakan perusahaan telah mengambil pendekatan fisika-pertama untuk bergerak alih-alih meniru mekanisme anggota tubuh manusia. Meskipun robotnya adalah humanoid, mereka memiliki kaki yang terlihat seperti terinspirasi oleh burung unta.
            Pada acara industri manufaktur yang disebut ProMat Maret ini, robot Agility memukau orang banyak dengan  demonstrasi tugas gudang seperti mengambil tas dari rak dan menempatkannya di conveyor secara mandiri. 
            Tentu saja sudah banyak robot gudang dan manufaktur di luar sana yang menggunakan roda daripada kaki. Dan gudang dapat dirancang untuk memanfaatkan otomatisasi yang lebih konvensional seperti sabuk konveyor.
            Tapi  Melonee Wise , CTO Agility, mengatakan ada banyak situasi di mana kaki jauh lebih unggul, terutama di perusahaan yang tidak mampu sepenuhnya mengubah operasi mereka seputar otomatisasi. Robot humanoid dapat lebih mudah menavigasi tangga, landai, dan tanah yang tidak stabil; memeras ke ruang sempit; dan membungkuk atau meraih saat mereka bekerja, kata Wise. Dia baru-baru ini menjadi anggota tim humanoid, dan hingga baru-baru ini menjabat sebagai CEO  Fetch Robotics , yang membuat robot gudang beroda.
            “Pasar sudah siap,” kata Wise, seraya menambahkan bahwa tantangan utama ke depan adalah meningkatkan keandalan: “Rahasia sukses dalam robotika adalah gagal dengan anggun.” Mereka mungkin tidak anggun, tetapi robot kikuk dari tantangan Darpa jauh di depan waktu mereka.
            ',
        ]);

        //Generate Data Payment Status
        $payment_status = ['Pending', 'Accepted'];
        foreach ($payment_status as $status) {
            \App\Models\PaymentStatus::factory()->create([
                'status_name' => $status,
            ]);
        }

        //Generate Data Payment
        \App\Models\payment::factory()->create([
            'id' => 1,
            'payments_methods' => 'Dana',
            'payments_address' => '1234567890',
        ]);
        \App\Models\payment::factory()->create([
            'id' => 2,
            'payments_methods' => 'Gopay',
            'payments_address' => '2345678901',
        ]);
        \App\Models\payment::factory()->create([
            'id' => 3,
            'payments_methods' => 'OVO',
            'payments_address' => '12234234123',
        ]);
        
    }
}
