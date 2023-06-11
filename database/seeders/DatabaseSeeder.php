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
        //Generate Data User
        // \App\Models\User::factory(10)->create();

        //Generate Data Modul
        \App\Models\Modul::factory(10)->create();
        \App\Models\Modul::factory()->create([
            'name' => 'Pentingnya Data dan informasi',
            'description' => 'data itu penting dalam membuat keputusan, di mana kita perlu menentukan dan memilah barang apa saja yang perlu dibeli serta menghitung estimasi dana yang harus dikeluarkan untuk membeli barang tersebut.',
        ]);
        \App\Models\Modul::factory()->create([
            'name' => 'Pemroresan Data pada Komputer',
            'description' => 'pemrosesan data adalah metode mengumpulkan data primer atau data mentah untuk diterjemahkan menjadi informasi yang berguna dan dapat digunakan. Pemrosesan data memiliki tahapan rangkaian mulai dari mengumpulkan, menganalisis, menyimpan, memproses, dan mengkomunikasikan data.',
        ]);

        //Generate Data Course Category
        // \App\Models\CourseCategory::factory(3)->create();
        \App\Models\CourseCategory::factory()->create([
            'name_category' => 'Machine Learning',
        ]);
        \App\Models\CourseCategory::factory()->create([
            'name_category' => 'Mobile Development',
        ]);

        //Generate Data Course
        // \App\Models\Course::factory(8)->create();
        \App\Models\Course::factory()->create([
            'title' => 'Analisis Data dan Pembelajaran Mesin',
            'id_category' => 1, 
            'summary' => 'Pelajari analisis data dan konsep pembelajaran mesin untuk pemahaman dan pemanfaatan informasi pada data yang lebih mendalam.',
            'price' => 500000,
        ]);
        \App\Models\Course::factory()->create([
            'title' => 'Pengembangan Aplikasi Desktop dengan Java',
            'id_category' => 2, 
            'summary' => ' Kembangkan aplikasi desktop menggunakan java. Mulai dari desain antarmuka pengguna, manajemen data, dan fitur lainnya.',
            'price' => 400000,
        ]);

        //Generate Data Course Modul
        \App\Models\Course_Modul::factory(10)->create();

        //Generate Data Material
        \App\Models\Material::factory(8)->create();  
        \App\Models\Material::factory()->create([
            'modul_id' => 2,
            'title' => 'Pengenalan Data dan Informasi',
            'content' => '<p>
            Sebelumnya, kita telah membahas tentang arti dari sebuah data, dan penerapannya dalam kehidupan sehari-hari yang direpresentasikan dalam data penduduk.
          </p>
          <p>
            Sekarang kita tahu bahwa informasi membutuhkan satu atau beberapa data sebagai keterangan. Lalu, mungkin di benak Anda pasti terselipkan pertanyaan, “Kenapa sih kita membutuhkan data?”
          </p>
          <p>
            Mari kita lihat pada gambar berikut:
          </p>
          <p>
            Terlihat bahwa pria tersebut sedang menelepon seorang temannya dengan menggunakan gawai. Tentu kita semua sudah tahu bahwa untuk melakukan panggilan ke orang lain menggunakan gawai, kita perlu tahu nomor telepon tujuan, dan biasanya nomor tersebut sudah tersimpan dalam daftar kontak gawai kita. Nomor telepon inilah yang nantinya akan digunakan oleh provider untuk mencari lokasi dari gawai teman kita. Tenang, kita tidak perlu terlalu dalam membahas sampai bagaimana bisa terhubung ya 
          </p>
          <p>
            Pada kasus ini, bisa dipetik sebuah kesimpulan bahwa agar dapat saling terhubung menggunakan media komunikasi telepon, kita perlu tahu data nomor telepon tujuan. Tujuan di sini bisa diartikan sebagai teman, kerabat atau saudara ya.
          </p>
          <p>
            Oke,  mari kita coba cari kasus lain yah agar dapat menambah pemahaman kita.
              
          </p>
          <p>
            Pernahkah Anda mengunjungi supermarket, pasar, mall, atau swalayan? Pasti pernah, secara tidak sadar. Oke mari kita intip satu per satu.

          </p>
          <p>
            Mari kita fokus ke pasar. Coba bayangkan, pasti di pasar tersebut terdapat banyak toko yang menyediakan berbagai macam keperluan. Anda pasti bisa melihat banyak barang yang diperjualbelikan, seperti perkakas rumah tangga, sayuran, buah-buahan, sembako, sampai tempat makanan. Anda juga akan melihat beberapa toko yang tutup.
          </p>
          <p>
            Nah, apa yang Anda lihat tersebut semuanya adalah data. Dari nama toko yang buka atau tutup, jumlah dan jenis barang yang dijual, jumlah penjual yang berjualan di toko tersebut, dan masih banyak lagi.
          </p>
          <p>
            Kemudian, coba kita intip pada satu tempat lagi, yaitu mall. Di sini juga terdapat berbagai macam toko, dengan konsep yang hampir mirip pasar namun dengan tempat yang lebih besar. Mall juga memiliki beragam jenis toko, seperti fashion, makanan, bahkan bioskop. 

          </p>
          <p>
            Namun, ketika mengunjungi toko/kios pada mall, pasti akan disuguhkan dengan barang yang tersusun rapi di rak dan memiliki label harga. Label ini yang memberitahu kepada pembeli nama dan nominal uang yang digunakan untuk membeli barang tersebut. Label ini merupakan suatu data, yang berfungsi untuk  memberitahu pembeli barang apakah itu dan berapa harganya.
          </p>
          <p>
            Hal ini juga menjadi perbedaan pasar dengan mall. Jika kita membeli barang di pasar, kita akan menanyakan harga barang bahkan menawarnya untuk bisa membeli barang tersebut.
          </p>
          <p>
            Dari kedua contoh di atas, bisa diambil kesimpulan bahwa data itu penting dalam membuat keputusan, di mana kita perlu menentukan dan memilah barang apa saja yang perlu dibeli serta menghitung estimasi dana yang harus dikeluarkan untuk membeli barang tersebut.
          </p>
          <p>
            Sebenarnya, ada banyak lagi kasus maupun contoh mengenai pentingnya data pada kehidupan sehari-hari. Karena data - seperti yang dijelaskan sebelumnya, bisa menjadi sebagai alat atau parameter acuan kita untuk mengambil keputusan ketika ingin melakukan sesuatu; sebagai penghubung; dan sebagai landasan dalam mencerna informasi.
          </p>
          <p>
            Karena perannya sangat krusial, maka data dapat disalahgunakan oleh berbagai pihak, sehingga malah dapat merugikan  kita. Seperti yang marak terjadi saat ini, di mana beredar informasi dengan data yang palsu di masyarakat. Oleh karena itu, kita perlu mengedepankan sikap waspada, selalu menyaring informasi yang beredar dan menghindari menyebarkan informasi tersebut.
          </p>
          <p>
            Sekarang, kita dapat mengetahui bahwa peran data itu sangat penting dalam berbagai sendi kehidupan. Kita juga mengetahui sedikit fungsi data dan contoh kegunaannya. Saatnya melangkah lebih maju lagi dengan mengenal berbagai jenis data yang ada.
          </p>',
        ]);  

        //Generate Data Role
        $roles = ['admin', 'mentor', 'user'];
        foreach ($roles as $role) {
            \App\Models\Role::factory()->create([
                'role_name' => $role,
            ]);
        }   

        //Generate Data User
        \App\Models\User::factory(10)->create();
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

        //Generate Data Enrollment
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
        \App\Models\Enrollment::factory()->create([
            'id_user' => 2,
            'id_course' => 2,
        ]);
        \App\Models\Enrollment::factory()->create([
            'id_user' => 3,
            'id_course' => 1,
        ]);
        \App\Models\Enrollment::factory()->create([
            'id_user' => 4,
            'id_course' => 1,
        ]);

        //Generate Data Payment Status
        $payment_status = ['Pending', 'Accepted', 'Rejected'];
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
