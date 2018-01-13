<?php

use Illuminate\Database\Seeder;
use App\Komunitas;
use App\Kategori;

class KomunitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
    	$pendidikan = Kategori::where('kategori_name', 'Pendidikan')->first();
    	$kreativitas = Kategori::where('kategori_name', 'Kreativitas')->first();
    	$olahraga = Kategori::where('kategori_name', 'Olahraga')->first();

        $data = new Komunitas();
        $data->komunitas_name = 'Rumah Belajar Kita Jakarta';
        $data->kategori_id = $pendidikan->id;
        $data->description = 'Rumah Belajar Kita adalah sebuah organisasi yang senantiasa berupaya untuk menjadi motor penggerak pemberdayaan masyarakat. Organisasi yang diinisiasi oleh oleh Yulia Ernita dan Silmina Ulfah ini mengawali gerakannya dengan mengadakan program kelas belajar pada tanggal 13 Januari 2013. Sebuah gerakan yang hadir dari sebuah tawaran untuk mengisi kekosongan relawan guru yang biasanya mengisi kelas ‘les’ sore untuk anak-anak asuhan Yayasan Sapta Dharma Nusantara di Kampung Pisangan, Jakarta Timur.

            Rumah Belajar Kita kini hadir dengan 3 program utama yaitu Kelas Belajar (kegiatan dilaksanakan setiap minggunya), program Taman Baca Kita, dan program Kampung Binaan (program jangka panjang).';
        $data->location = 'Jalan Surilang no. 42B RT. 009 RW. 01, Kelurahan Gedong Kecamatan Pasar Rebo Jakarta Timur, 13760';
        $data->member = 35;
        $data->slot = 10;
        $data->image_path = '/image/rbk.jpeg';
        $data->save();

        $pendidikan = Kategori::where('kategori_name', 'Pendidikan')->first();
        $kreativitas = Kategori::where('kategori_name', 'Kreativitas')->first();
        $olahraga = Kategori::where('kategori_name', 'Olahraga')->first();

        $data = new Komunitas();
        $data->komunitas_name = 'Rumah Belajar Kita Bekasi';
        $data->kategori_id = $pendidikan->id;
        $data->description = 'Rumah Belajar Kita adalah sebuah organisasi yang senantiasa berupaya untuk menjadi motor penggerak pemberdayaan masyarakat. Organisasi yang diinisiasi oleh oleh Yulia Ernita dan Silmina Ulfah ini mengawali gerakannya dengan mengadakan program kelas belajar pada tanggal 13 Januari 2013. Sebuah gerakan yang hadir dari sebuah tawaran untuk mengisi kekosongan relawan guru yang biasanya mengisi kelas ‘les’ sore untuk anak-anak asuhan Yayasan Sapta Dharma Nusantara di Kampung Pisangan, Jakarta Timur.

            Rumah Belajar Kita kini hadir dengan 3 program utama yaitu Kelas Belajar (kegiatan dilaksanakan setiap minggunya), program Taman Baca Kita, dan program Kampung Binaan (program jangka panjang).';
        $data->location = 'Jalan Surilang no. 42B RT. 009 RW. 01, Kelurahan Gedong Kecamatan Pasar Rebo Jakarta Timur, 13760';
        $data->member = 35;
        $data->slot = 10;
        $data->image_path = '/image/rbk.jpeg';
        $data->save();

        $pendidikan = Kategori::where('kategori_name', 'Pendidikan')->first();
        $kreativitas = Kategori::where('kategori_name', 'Kreativitas')->first();
        $olahraga = Kategori::where('kategori_name', 'Olahraga')->first();

        $data = new Komunitas();
        $data->komunitas_name = 'Rumah Belajar Kita Inggris';
        $data->kategori_id = $pendidikan->id;
        $data->description = 'Rumah Belajar Kita adalah sebuah organisasi yang senantiasa berupaya untuk menjadi motor penggerak pemberdayaan masyarakat. Organisasi yang diinisiasi oleh oleh Yulia Ernita dan Silmina Ulfah ini mengawali gerakannya dengan mengadakan program kelas belajar pada tanggal 13 Januari 2013. Sebuah gerakan yang hadir dari sebuah tawaran untuk mengisi kekosongan relawan guru yang biasanya mengisi kelas ‘les’ sore untuk anak-anak asuhan Yayasan Sapta Dharma Nusantara di Kampung Pisangan, Jakarta Timur.

            Rumah Belajar Kita kini hadir dengan 3 program utama yaitu Kelas Belajar (kegiatan dilaksanakan setiap minggunya), program Taman Baca Kita, dan program Kampung Binaan (program jangka panjang).';
        $data->location = 'Jalan Surilang no. 42B RT. 009 RW. 01, Kelurahan Gedong Kecamatan Pasar Rebo Jakarta Timur, 13760';
        $data->member = 35;
        $data->slot = 10;
        $data->image_path = '/image/rbk.jpeg';
        $data->save();

        $data = new Komunitas();
        $data->komunitas_name = 'Content Creator Indonesia Jakarta';
        $data->kategori_id = $kreativitas->id;
        $data->description = 'Jakarta – CCID merupakan kependekan dari Komunitas Content Creator Indonesia, Sebuah komunitas yang mewadahi para pembuat konten baik yang baru belajar maupun yang sudah berkembang , komunitas ini memiliki jargon yaitu Kreatif, Inovatif, Edukatif

Komunitas ini berdiri atas dasar keresahan maraknya konten hoax dan konten negatif lainnya di Indonesia, Hal tersebut yang melatar belakangi Ananda Zulkarnain, dan rekan-rekannya berinisiatif membuat sebuah wadah positif untuk para pembuat konten.

Menurut Ananda Zulkarnain sebagai founder, salah satu cara terbaik menekan merebaknya konten negatif tersebut, CCID memberikan edukasi secara online maupun offline tentang pembuatan konten positif melalui forum yang akan dikembangkan lagi setelah itu.';
        $data->location = 'Patra Jasa Office Tower, Jakarta';
        $data->member = 167;
        $data->slot = 50;
        $data->image_path = '/image/ccid.jpg';
        $data->save();

        $data = new Komunitas();
        $data->komunitas_name = 'Content Creator Indonesia Bandung';
        $data->kategori_id = $kreativitas->id;
        $data->description = 'Jakarta – CCID merupakan kependekan dari Komunitas Content Creator Indonesia, Sebuah komunitas yang mewadahi para pembuat konten baik yang baru belajar maupun yang sudah berkembang , komunitas ini memiliki jargon yaitu Kreatif, Inovatif, Edukatif

Komunitas ini berdiri atas dasar keresahan maraknya konten hoax dan konten negatif lainnya di Indonesia, Hal tersebut yang melatar belakangi Ananda Zulkarnain, dan rekan-rekannya berinisiatif membuat sebuah wadah positif untuk para pembuat konten.

Menurut Ananda Zulkarnain sebagai founder, salah satu cara terbaik menekan merebaknya konten negatif tersebut, CCID memberikan edukasi secara online maupun offline tentang pembuatan konten positif melalui forum yang akan dikembangkan lagi setelah itu.';
        $data->location = 'Patra Jasa Office Tower, Jakarta';
        $data->member = 167;
        $data->slot = 50;
        $data->image_path = '/image/ccid.jpg';
        $data->save();

        $data = new Komunitas();
        $data->komunitas_name = 'Content Creator Indonesia Surabaya';
        $data->kategori_id = $kreativitas->id;
        $data->description = 'Jakarta – CCID merupakan kependekan dari Komunitas Content Creator Indonesia, Sebuah komunitas yang mewadahi para pembuat konten baik yang baru belajar maupun yang sudah berkembang , komunitas ini memiliki jargon yaitu Kreatif, Inovatif, Edukatif

Komunitas ini berdiri atas dasar keresahan maraknya konten hoax dan konten negatif lainnya di Indonesia, Hal tersebut yang melatar belakangi Ananda Zulkarnain, dan rekan-rekannya berinisiatif membuat sebuah wadah positif untuk para pembuat konten.

Menurut Ananda Zulkarnain sebagai founder, salah satu cara terbaik menekan merebaknya konten negatif tersebut, CCID memberikan edukasi secara online maupun offline tentang pembuatan konten positif melalui forum yang akan dikembangkan lagi setelah itu.';
        $data->location = 'Patra Jasa Office Tower, Jakarta';
        $data->member = 167;
        $data->slot = 50;
        $data->image_path = '/image/ccid.jpg';
        $data->save();

        $data = new Komunitas();
        $data->komunitas_name = 'Content Creator Indonesia Divisi Olahraga 1';
        $data->kategori_id = $olahraga->id;
        $data->description = 'Jakarta – CCID merupakan kependekan dari Komunitas Content Creator Indonesia, Sebuah komunitas yang mewadahi para pembuat konten baik yang baru belajar maupun yang sudah berkembang , komunitas ini memiliki jargon yaitu Kreatif, Inovatif, Edukatif

Komunitas ini berdiri atas dasar keresahan maraknya konten hoax dan konten negatif lainnya di Indonesia, Hal tersebut yang melatar belakangi Ananda Zulkarnain, dan rekan-rekannya berinisiatif membuat sebuah wadah positif untuk para pembuat konten.

Menurut Ananda Zulkarnain sebagai founder, salah satu cara terbaik menekan merebaknya konten negatif tersebut, CCID memberikan edukasi secara online maupun offline tentang pembuatan konten positif melalui forum yang akan dikembangkan lagi setelah itu.';
        $data->location = 'Patra Jasa Office Tower, Jakarta';
        $data->member = 167;
        $data->slot = 50;
        $data->image_path = '/image/ccid.jpg';
        $data->save();

        $data = new Komunitas();
        $data->komunitas_name = 'Content Creator Indonesia Divisi Olahraga 2';
        $data->kategori_id = $olahraga->id;
        $data->description = 'Jakarta – CCID merupakan kependekan dari Komunitas Content Creator Indonesia, Sebuah komunitas yang mewadahi para pembuat konten baik yang baru belajar maupun yang sudah berkembang , komunitas ini memiliki jargon yaitu Kreatif, Inovatif, Edukatif

Komunitas ini berdiri atas dasar keresahan maraknya konten hoax dan konten negatif lainnya di Indonesia, Hal tersebut yang melatar belakangi Ananda Zulkarnain, dan rekan-rekannya berinisiatif membuat sebuah wadah positif untuk para pembuat konten.

Menurut Ananda Zulkarnain sebagai founder, salah satu cara terbaik menekan merebaknya konten negatif tersebut, CCID memberikan edukasi secara online maupun offline tentang pembuatan konten positif melalui forum yang akan dikembangkan lagi setelah itu.';
        $data->location = 'Patra Jasa Office Tower, Jakarta';
        $data->member = 167;
        $data->slot = 50;
        $data->image_path = '/image/ccid.jpg';
        $data->save();

        $pendidikan = Kategori::where('kategori_name', 'Pendidikan')->first();
        $kreativitas = Kategori::where('kategori_name', 'Kreativitas')->first();
        $olahraga = Kategori::where('kategori_name', 'Olahraga')->first();

        $data = new Komunitas();
        $data->komunitas_name = 'Rumah Belajar Kita Divisi Olahraga';
        $data->kategori_id = $olahraga->id;
        $data->description = 'Rumah Belajar Kita adalah sebuah organisasi yang senantiasa berupaya untuk menjadi motor penggerak pemberdayaan masyarakat. Organisasi yang diinisiasi oleh oleh Yulia Ernita dan Silmina Ulfah ini mengawali gerakannya dengan mengadakan program kelas belajar pada tanggal 13 Januari 2013. Sebuah gerakan yang hadir dari sebuah tawaran untuk mengisi kekosongan relawan guru yang biasanya mengisi kelas ‘les’ sore untuk anak-anak asuhan Yayasan Sapta Dharma Nusantara di Kampung Pisangan, Jakarta Timur.

            Rumah Belajar Kita kini hadir dengan 3 program utama yaitu Kelas Belajar (kegiatan dilaksanakan setiap minggunya), program Taman Baca Kita, dan program Kampung Binaan (program jangka panjang).';
        $data->location = 'Jalan Surilang no. 42B RT. 009 RW. 01, Kelurahan Gedong Kecamatan Pasar Rebo Jakarta Timur, 13760';
        $data->member = 35;
        $data->slot = 10;
        $data->image_path = '/image/rbk.jpeg';
        $data->save();
    }
}
