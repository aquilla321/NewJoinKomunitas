<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Kategori();
        $data->kategori_name = 'Pendidikan';
        $data->save();

        $data = new Kategori();
        $data->kategori_name = 'Kreativitas';
        $data->save();

        $data = new Kategori();
        $data->kategori_name = 'Olahraga';
        $data->save();
    }
}
