<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Koshi Province (state_id = 1)
         District::create(['name' => 'Bhojpur', 'state_id' => 1]);
         District::create(['name' => 'Dhankuta', 'state_id' => 1]);
         District::create(['name' => 'Ilam', 'state_id' => 1]);
         District::create(['name' => 'Jhapa', 'state_id' => 1]);
         District::create(['name' => 'Khotang', 'state_id' => 1]);
         District::create(['name' => 'Morang', 'state_id' => 1]);
         District::create(['name' => 'Okhaldhunga', 'state_id' => 1]);
         District::create(['name' => 'Panchthar', 'state_id' => 1]);
         District::create(['name' => 'Sankhuwasabha', 'state_id' => 1]);
         District::create(['name' => 'Solukhumbu', 'state_id' => 1]);
         District::create(['name' => 'Sunsari', 'state_id' => 1]);
         District::create(['name' => 'Taplejung', 'state_id' => 1]);
         District::create(['name' => 'Terhathum', 'state_id' => 1]);
         District::create(['name' => 'Udayapur', 'state_id' => 1]);
 
         // Madhesh Province (state_id = 2)
         District::create(['name' => 'Parsa', 'state_id' => 2]);
         District::create(['name' => 'Bara', 'state_id' => 2]);
         District::create(['name' => 'Rautahat', 'state_id' => 2]);
         District::create(['name' => 'Sarlahi', 'state_id' => 2]);
         District::create(['name' => 'Dhanusha', 'state_id' => 2]);
         District::create(['name' => 'Siraha', 'state_id' => 2]);
         District::create(['name' => 'Mahottari', 'state_id' => 2]);
         District::create(['name' => 'Saptari', 'state_id' => 2]);
 
         // Bagmati Province (state_id = 3)
         District::create(['name' => 'Sindhuli', 'state_id' => 3]);
         District::create(['name' => 'Ramechhap', 'state_id' => 3]);
         District::create(['name' => 'Dolakha', 'state_id' => 3]);
         District::create(['name' => 'Bhaktapur', 'state_id' => 3]);
         District::create(['name' => 'Dhading', 'state_id' => 3]);
         District::create(['name' => 'Kathmandu', 'state_id' => 3]);
         District::create(['name' => 'Kavrepalanchok', 'state_id' => 3]);
         District::create(['name' => 'Lalitpur', 'state_id' => 3]);
         District::create(['name' => 'Nuwakot', 'state_id' => 3]);
         District::create(['name' => 'Rasuwa', 'state_id' => 3]);
         District::create(['name' => 'Sindhupalchok', 'state_id' => 3]);
         District::create(['name' => 'Chitwan', 'state_id' => 3]);
         District::create(['name' => 'Makwanpur', 'state_id' => 3]);
 
         // Gandaki Province (state_id = 4)
         District::create(['name' => 'Baglung', 'state_id' => 4]);
         District::create(['name' => 'Gorkha', 'state_id' => 4]);
         District::create(['name' => 'Kaski', 'state_id' => 4]);
         District::create(['name' => 'Lamjung', 'state_id' => 4]);
         District::create(['name' => 'Manang', 'state_id' => 4]);
         District::create(['name' => 'Mustang', 'state_id' => 4]);
         District::create(['name' => 'Myagdi', 'state_id' => 4]);
         District::create(['name' => 'Nawalpur', 'state_id' => 4]);
         District::create(['name' => 'Parbat', 'state_id' => 4]);
         District::create(['name' => 'Syangja', 'state_id' => 4]);
         District::create(['name' => 'Tanahun', 'state_id' => 4]);
 
         // Lumbini Province (state_id = 5)
         District::create(['name' => 'Kapilvastu', 'state_id' => 5]);
         District::create(['name' => 'Parasi', 'state_id' => 5]);
         District::create(['name' => 'Rupandehi', 'state_id' => 5]);
         District::create(['name' => 'Arghakhanchi', 'state_id' => 5]);
         District::create(['name' => 'Gulmi', 'state_id' => 5]);
         District::create(['name' => 'Palpa', 'state_id' => 5]);
         District::create(['name' => 'Dang', 'state_id' => 5]);
         District::create(['name' => 'Pyuthan', 'state_id' => 5]);
         District::create(['name' => 'Rolpa', 'state_id' => 5]);
         District::create(['name' => 'Eastern Rukum', 'state_id' => 5]);
         District::create(['name' => 'Banke', 'state_id' => 5]);
         District::create(['name' => 'Bardiya', 'state_id' => 5]);
 
         // Karnali Province (state_id = 6)
         District::create(['name' => 'Western Rukum', 'state_id' => 6]);
         District::create(['name' => 'Salyan', 'state_id' => 6]);
         District::create(['name' => 'Dolpa', 'state_id' => 6]);
         District::create(['name' => 'Humla', 'state_id' => 6]);
         District::create(['name' => 'Jumla', 'state_id' => 6]);
         District::create(['name' => 'Kalikot', 'state_id' => 6]);
         District::create(['name' => 'Mugu', 'state_id' => 6]);
         District::create(['name' => 'Surkhet', 'state_id' => 6]);
         District::create(['name' => 'Dailekh', 'state_id' => 6]);
         District::create(['name' => 'Jajarkot', 'state_id' => 6]);
 
         // Sudurpaschim Province (state_id = 7)
         District::create(['name' => 'Kailali', 'state_id' => 7]);
         District::create(['name' => 'Achham', 'state_id' => 7]);
         District::create(['name' => 'Doti', 'state_id' => 7]);
         District::create(['name' => 'Bajhang', 'state_id' => 7]);
         District::create(['name' => 'Bajura', 'state_id' => 7]);
         District::create(['name' => 'Kanchanpur', 'state_id' => 7]);
         District::create(['name' => 'Dadeldhura', 'state_id' => 7]);
         District::create(['name' => 'Baitadi', 'state_id' => 7]);
         District::create(['name' => 'Darchula', 'state_id' => 7]);
        
    }
}
