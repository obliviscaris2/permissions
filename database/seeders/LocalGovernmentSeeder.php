<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\LocalGovernment;
use Illuminate\Database\Seeder;

class LocalGovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ditrict 1 = Bhojpur
        LocalGovernment::create(['name' => 'Bhojpur', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Shadanand', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Hatuwagadhi', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Ramprasad Rai', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Aamchok', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Tyamke Maiyunm', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Arun Gaunpalika', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Pauwadungma', 'district_id' => 1]);
        LocalGovernment::create(['name' => 'Salpasilichho', 'district_id' => 1]);

        // District 2 = Dhankuta
        LocalGovernment::create(['name' => 'Dhankuta', 'district_id' => 2]);
        LocalGovernment::create(['name' => 'Pakhribas', 'district_id' => 2]);
        LocalGovernment::create(['name' => 'Mahalaxmi', 'district_id' => 2]);
        LocalGovernment::create(['name' => 'Sangurigadhi', 'district_id' => 2]);
        LocalGovernment::create(['name' => 'Chaubise', 'district_id' => 2]);
        LocalGovernment::create(['name' => 'Shahidbhumi', 'district_id' => 2]);
        LocalGovernment::create(['name' => 'Chhathar Jorpati', 'district_id' => 2]);

        // District 3 = Ilam 
        LocalGovernment::create(['name' => 'Ilam', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Deumai', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Mai', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Suryodaya', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Phakphokthum', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Mai Jogmai', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Chulachuli', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Rong', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Mangsebung', 'district_id' => 3]);
        LocalGovernment::create(['name' => 'Sandakpur', 'district_id' => 3]);

        // District 4 = Jhapa 
        LocalGovernment::create(['name' => 'Mechinagar', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Bhadrapur', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Birtamod', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Arjundhara', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Kankai', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Shivasatakshi', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Gauradaha', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Damak', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Buddhashanti', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Haldibari', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Kachankawal', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Barhadashi', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Jhapa', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Gauriganj', 'district_id' => 4]);
        LocalGovernment::create(['name' => 'Kamal', 'district_id' => 4]);

        // District 5 = Khotang 
        LocalGovernment::create(['name' => 'Diktel Rupakot Majhuwagadhi', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Halesi Tuwachung', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Khotehang', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Diprung', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Aiselukharka', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Jantedhunga', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Kepilasgadhi', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Barahpokhari', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Rawabesi', 'district_id' => 5]);
        LocalGovernment::create(['name' => 'Sakela', 'district_id' => 5]);

        // District 6 = Morang 
        LocalGovernment::create(['name' => 'Biratnagar', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Sundar', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Belbari', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Pathari-Sanischare', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Urlabari', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Rangeli', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Letang Bhogateni', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Ratuwamai', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Sunawarshi', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Kerabari', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Miklajung', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Kanepokhari', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Budhiganga', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Gramthan', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Katahari', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Dhanpalthan', 'district_id' => 6]);
        LocalGovernment::create(['name' => 'Jahada', 'district_id' => 6]);

        // District 7 = Okhaldhunga 
        LocalGovernment::create(['name' => 'Siddhicharan', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Champadevi', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Sunkoshi', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Likhu', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Chisankhugadhi', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Molung', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Khijidemba', 'district_id' => 7]);
        LocalGovernment::create(['name' => 'Manebhanjyang', 'district_id' => 7]);

        // District 8 = Panchthar
        LocalGovernment::create(['name' => 'Phidim', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Hilihang', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Kummayak', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Miklajung', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Phalelung', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Phalgunanda', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Tumbewa', 'district_id' => 8]);
        LocalGovernment::create(['name' => 'Yangawarak', 'district_id' => 8]);

        // District 9 = Sankhuwasabha
        LocalGovernment::create(['name' => 'Bhotkhola', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Chainpur', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Chichila', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Dharmadevi', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Khandbari', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Madi', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Makalu', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Panchkhapan', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Savapokhari', 'district_id' => 9]);
        LocalGovernment::create(['name' => 'Silichong', 'district_id' => 9]);
        
        // District 10 = Solukhumbu
        LocalGovernment::create(['name' => 'Solududhkunda', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Dudhakaushika', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Necha Salyan', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Dudhkoshi', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Maha Kulung', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Sotang', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Likhu Pike', 'district_id' => 10]);
        LocalGovernment::create(['name' => 'Khumbu Pasanglhamu', 'district_id' => 10]);
        
        // District 11 = Sunsari
        LocalGovernment::create(['name' => 'Itahari', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Dharan', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Inaruwa', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Duhabi', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Ramdhuni-Bhasi', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Barahachhetra', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Koshi', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Gadhi', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Barju', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Bhokraha', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Harinagara', 'district_id' => 11]);
        LocalGovernment::create(['name' => 'Dewanganj', 'district_id' => 11]);
        
        // District 12 = Taplejung 
        LocalGovernment::create(['name' => 'Phungling', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Aathrai Tribeni', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Sidingwa', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Phaktanglung', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Mikkwakhola', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Meringden', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Maiwakhola', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Pathibhara Yangwarak', 'district_id' => 12]);
        LocalGovernment::create(['name' => 'Sirijangha', 'district_id' => 12]);
        
        // District 13 = Terhathum 
        LocalGovernment::create(['name' => 'Aathrai', 'district_id' => 13]);
        LocalGovernment::create(['name' => 'Chhathar', 'district_id' => 13]);
        LocalGovernment::create(['name' => 'Laligurans', 'district_id' => 13]);
        LocalGovernment::create(['name' => 'Menchhayayem', 'district_id' => 13]);
        LocalGovernment::create(['name' => 'Myanglung', 'district_id' => 13]);
        LocalGovernment::create(['name' => 'Phedap', 'district_id' => 13]);
        
        // District 14 = Udayapur
        LocalGovernment::create(['name' => 'Triyuga', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Katari', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Chaudandigadhi', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Belaka', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Udayapurgadhi', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Rautamai', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Tapli', 'district_id' => 14]);
        LocalGovernment::create(['name' => 'Limchungbung', 'district_id' => 14]);
        
        // MADHESH PROVINCE
        
        // District 15 = Parsa
        LocalGovernment::create(['name' => 'Birgunj', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Bahudarmai', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Parsagadhi', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Pokhariya', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Bindabasini', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Dhobini', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Chhipaharmai', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Jagarnathpur', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Jirabhawani', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Kalikamai', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Pakaha Mainpur', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Paterwa Sugauli', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Sakhuwa Prasauni', 'district_id' => 15]);
        LocalGovernment::create(['name' => 'Thori', 'district_id' => 15]);
        
        // District 16 = Bara
        LocalGovernment::create(['name' => 'Kalaiya', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Jeetpur Simara', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Kolhabi', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Nijgadh', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Mahagadhimai', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Simraungadh', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Pacharauta', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Pheta', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Bishrampur', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Prasauni', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Adarsh Kotwal', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Karaiyamai', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Devtal', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Parwanipur', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Baragadhi', 'district_id' => 16]);
        LocalGovernment::create(['name' => 'Suwarna', 'district_id' => 16]);
        
        // District 17 = Rautahat
        LocalGovernment::create(['name' => 'Baudhimai', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Brindaban', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Chandrapur', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Dewahi Gonahi', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Gadhimai', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Garuda', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Gaur', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Gujara', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Ishanath', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Katahariya', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Madhav Narayan', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Maulapur', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Paroha', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Phatuwa Bijayapur', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Rajdevi', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Rajpur', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Durga Bhagwati', 'district_id' => 17]);
        LocalGovernment::create(['name' => 'Yamunamai', 'district_id' => 17]);
        
        // District 18 = Sarlahi
        LocalGovernment::create(['name' => 'Bagmati', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Balara', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Barahathwa', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Godaita', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Harion', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Haripur', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Haripurwa', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Ishworpur', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Kabilasi', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Lalbandi', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Malangwa', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Basbariya', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Bishnu', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Brahampuri', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Chakraghatta', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Chandranagar', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Dhankaul', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Kaudena', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Parsa', 'district_id' => 18]);
        LocalGovernment::create(['name' => 'Ramnagar', 'district_id' => 18]);
        
        // District 19 = Dhanusha
        LocalGovernment::create(['name' => 'Janakpur', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Chhireshwarnath', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Ganeshman Charanath', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Dhanusadham', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Nagarain', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Bideha', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Mithila', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Sahidnagar', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Sabaila', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Kamala', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Mithila Bihari', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Hansapur', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Janaknandani', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Bateshwar', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Mukhiyapatti Musharniya', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Lakshminya', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Aurahi', 'district_id' => 19]);
        LocalGovernment::create(['name' => 'Dhanauji', 'district_id' => 19]);
        
        // District 20 = Siraha 
        LocalGovernment::create(['name' => 'Lahan', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Dhangadhimai', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Siraha', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Golbazar', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Mirchaiya', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Kalyanpur', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Karjanha', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Sukhipur', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Bhagwanpur', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Aurahi', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Bishnupur', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Bariyarpatti', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Lakshmipur Patari', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Naraha', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Sakhuwanankar Katti', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Arnama', 'district_id' => 20]);
        LocalGovernment::create(['name' => 'Navarajpur', 'district_id' => 20]);
        
        // District 21 = Mahottari
        LocalGovernment::create(['name' => 'Aurahi', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Balawa', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Bardibas', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Bhangaha', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Gaushala', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Jaleshwor', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Loharpatti', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'ManaraShiswa', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Matihani', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Ramgopalpur', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Ekdara', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Mahottari', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Pipara', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Samsi', 'district_id' => 21]);
        LocalGovernment::create(['name' => 'Sonama', 'district_id' => 21]);
        
        // District 22 = Saptari
        LocalGovernment::create(['name' => 'Bodebarsain', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Dakneshwori', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Hanumannagar Kankalini', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Kanchanrup', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Khadak', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Sambhunath', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Saptakoshi', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Surunga', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Rajbiraj', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Agnisaira Krishnasavaran', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Balan-Bihul', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Rajgadh', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Bishnupur', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Chhinnamasta', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Mahadeva', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Rupani', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Tilathi Koiladi', 'district_id' => 22]);
        LocalGovernment::create(['name' => 'Tirhut', 'district_id' => 22]);
        
        // District 23 = Sindhuli
        LocalGovernment::create(['name' => 'Sunkoshi', 'district_id' => 23]);
        LocalGovernment::create(['name' => 'Hariharpurgadhi', 'district_id' => 23]);
        LocalGovernment::create(['name' => 'Tinpatan', 'district_id' => 23]);
        LocalGovernment::create(['name' => 'Marin', 'district_id' => 23]);
        LocalGovernment::create(['name' => 'Golanjor', 'district_id' => 23]);
        LocalGovernment::create(['name' => 'Phikkal', 'district_id' => 23]);
        LocalGovernment::create(['name' => 'Ghyanglekh', 'district_id' => 23]);
        
        // District 24 = Ramechhap
        LocalGovernment::create(['name' => 'Manthali', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Ramechhap', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Umakunda', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Khandadevi', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Doramba', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Gokulganga', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Likhutamakoshi', 'district_id' => 24]);
        LocalGovernment::create(['name' => 'Sunapati', 'district_id' => 24]);
        
        // District 25 = Dolakha
        LocalGovernment::create(['name' => 'Bhimeswor', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Jiri', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Kalinchok', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Melung', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Bigu', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Gaurishankar', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Baiteshwor', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Sailung', 'district_id' => 25]);
        LocalGovernment::create(['name' => 'Tamakoshi', 'district_id' => 25]);
        
        // District 26 = Bhaktapur 
        LocalGovernment::create(['name' => 'Bhaktapur', 'district_id' => 26]);
        LocalGovernment::create(['name' => 'Changunarayan', 'district_id' => 26]);
        LocalGovernment::create(['name' => 'Madhyapur Thimi', 'district_id' => 26]);
        LocalGovernment::create(['name' => 'Suryabinayak', 'district_id' => 26]);
        
        // District 27 = Dhading 
        LocalGovernment::create(['name' => 'Dhunibeshi', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Nilkantha', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Khaniyabas', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Gajuri', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Galchhi', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Gangajamuna', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Jwalamukhi', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Thakre', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Netrawati Dabjong', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Benighat Rorang', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Rubi Valley', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Siddhalek', 'district_id' => 27]);
        LocalGovernment::create(['name' => 'Tripurasundari', 'district_id' => 27]);
        
        // District 28 = Kathmandu 
        LocalGovernment::create(['name' => 'Kathmandu', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Budhanilkantha', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Tarakeshwar', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Gokarneshwar', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Chandragiri', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Tokha', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Kageshwari-Manohara', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Nagarjun', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Kirtipur', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Dakshinkali', 'district_id' => 28]);
        LocalGovernment::create(['name' => 'Shankharapur', 'district_id' => 28]);
        
        // District 29 = Kavrepalanchok
        LocalGovernment::create(['name' => 'Dhulikhel', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Banepa', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Panauti', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Panchkhal', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Namobuddha', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Mandandeupur', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Khani Khola', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Chauri Deurali', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Temal', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Bethanchok', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Bhumlu', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Mahabharat', 'district_id' => 29]);
        LocalGovernment::create(['name' => 'Roshi', 'district_id' => 29]);
        
        // District 30 = Lalitpur
        LocalGovernment::create(['name' => 'Lalitpur', 'district_id' => 30]);
        LocalGovernment::create(['name' => 'Mahalaxmi', 'district_id' => 30]);
        LocalGovernment::create(['name' => 'Godawari', 'district_id' => 30]);
        LocalGovernment::create(['name' => 'Konjyoson', 'district_id' => 30]);
        LocalGovernment::create(['name' => 'Bagmati', 'district_id' => 30]);
        LocalGovernment::create(['name' => 'Mahankal', 'district_id' => 30]);
        
        // District 31 = Nuwakot
        LocalGovernment::create(['name' => 'Bidur', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Belkotgadhi', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Kakani', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Panchakanya', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Likhu', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Dupcheshwar', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Shivapuri', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Tadi', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Suryagadhi', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Tarkeshwar', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Kispang', 'district_id' => 31]);
        LocalGovernment::create(['name' => 'Myagang', 'district_id' => 31]);
        
        // District 32 = Rasuwa
        LocalGovernment::create(['name' => 'Uttargaya', 'district_id' => 32]);
        LocalGovernment::create(['name' => 'Kalika', 'district_id' => 32]);
        LocalGovernment::create(['name' => 'Gosaikunda', 'district_id' => 32]);
        LocalGovernment::create(['name' => 'Naukunda', 'district_id' => 32]);
        LocalGovernment::create(['name' => 'Aamachhodingmo', 'district_id' => 32]);
        
        // District 33 = Sindhupalchok
        LocalGovernment::create(['name' => 'Chautara', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Bahrabise', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Melamchi', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Balephi', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Sunkoshi', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Indrawati', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Jugal', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Panchpokhari Thangpal', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Bhotekoshi', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Lisankhu Pakhar', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Helambu', 'district_id' => 33]);
        LocalGovernment::create(['name' => 'Tripurasundari', 'district_id' => 33]);
        
        // District 34 = Chitwan
        LocalGovernment::create(['name' => 'Bharatpur', 'district_id' => 34]);
        LocalGovernment::create(['name' => 'Kalika', 'district_id' => 34]);
        LocalGovernment::create(['name' => 'Khairahani', 'district_id' => 34]);
        LocalGovernment::create(['name' => 'Madi', 'district_id' => 34]);
        LocalGovernment::create(['name' => 'Ratnanagar', 'district_id' => 34]);
        LocalGovernment::create(['name' => 'Rapti', 'district_id' => 34]);
        LocalGovernment::create(['name' => 'Ichchhakamana', 'district_id' => 34]);
        
        // District 35 = Makwanpur
        LocalGovernment::create(['name' => 'Hetauda', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Thaha', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Bhimphedi', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Makawanpurgadhi', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Manahari', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Raksirang', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Bakaiya', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Bagmati', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Kailash', 'district_id' => 35]);
        LocalGovernment::create(['name' => 'Indrasarowar', 'district_id' => 35]);
        
        // Gandaki Province
        // District 36 = Baglung
        LocalGovernment::create(['name' => 'Baglung', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Dhorpatan', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Galkot', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Jaimuni', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Bareng', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Khathekhola', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Taman Khola', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Tara Khola', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Nisikhola', 'district_id' => 36]);
        LocalGovernment::create(['name' => 'Badigad', 'district_id' => 36]);
        
        // District 37 = Gorkha
        LocalGovernment::create(['name' => 'Gorkha', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Palungtar', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Sulikot', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Siranchowk', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Ajirkot', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Tsum Nubri', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Dharche', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Bhimsen Thapa', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Sahid Lakhan', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Arughat', 'district_id' => 37]);
        LocalGovernment::create(['name' => 'Gandaki', 'district_id' => 37]);
        
        // DIstrict 38 = Kaski
        LocalGovernment::create(['name' => 'Pokhara', 'district_id' => 38]);
        LocalGovernment::create(['name' => 'Annapurna', 'district_id' => 38]);
        LocalGovernment::create(['name' => 'Machhapuchchhre', 'district_id' => 38]);
        LocalGovernment::create(['name' => 'Madi', 'district_id' => 38]);
        LocalGovernment::create(['name' => 'Rupa', 'district_id' => 38]);
        
        // District 39 = Lamjhung
        LocalGovernment::create(['name' => 'Besisahar', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Dordi', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Dudhpokhari', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Kwhlosothar', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Madhya Nepal', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Marsyandi', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Rainas', 'district_id' => 39]);
        LocalGovernment::create(['name' => 'Sundarbazar', 'district_id' => 39]);
        
        // District 40 = Manang
        LocalGovernment::create(['name' => 'Chame', 'district_id' => 40]);
        LocalGovernment::create(['name' => 'Nason', 'district_id' => 40]);
        LocalGovernment::create(['name' => 'Narpa Bhumi', 'district_id' => 40]);
        LocalGovernment::create(['name' => 'Manang Ngisyang', 'district_id' => 40]);
        
        // District 41 = Mustang 
        LocalGovernment::create(['name' => 'Gharapjhong', 'district_id' => 41]);
        LocalGovernment::create(['name' => 'Thasang', 'district_id' => 41]);
        LocalGovernment::create(['name' => 'Barhagaun Muktichhetra', 'district_id' => 41]);
        LocalGovernment::create(['name' => 'Lomanthang', 'district_id' => 41]);
        LocalGovernment::create(['name' => 'Lo-Ghekar Damodarkunda', 'district_id' => 41]);
        
        // District 42 = Myagdi
        LocalGovernment::create(['name' => 'Beni', 'district_id' => 42]);
        LocalGovernment::create(['name' => 'Annapurna', 'district_id' => 42]);
        LocalGovernment::create(['name' => 'Dhaulagiri', 'district_id' => 42]);
        LocalGovernment::create(['name' => 'Mangala', 'district_id' => 42]);
        LocalGovernment::create(['name' => 'Malika', 'district_id' => 42]);
        LocalGovernment::create(['name' => 'Raghuganga', 'district_id' => 42]);
        
        // District 43 = Nawalpur
        LocalGovernment::create(['name' => 'Kawasoti', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Gaindakot', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Devachuli', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Madhyabindu', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Baudikali', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Bulingtar', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Binayi Tribeni', 'district_id' => 43]);
        LocalGovernment::create(['name' => 'Hupsekot', 'district_id' => 43]);
        
        // District 44 = Parbat
        LocalGovernment::create(['name' => 'Kushma', 'district_id' => 44]);
        LocalGovernment::create(['name' => 'Phalewas', 'district_id' => 44]);
        LocalGovernment::create(['name' => 'Jaljala', 'district_id' => 44]);
        LocalGovernment::create(['name' => 'Paiyun', 'district_id' => 44]);
        LocalGovernment::create(['name' => 'Mahashila', 'district_id' => 44]);
        LocalGovernment::create(['name' => 'Modi', 'district_id' => 44]);
        LocalGovernment::create(['name' => 'Bihadi', 'district_id' => 44]);
        
        // District 45 = Syangja
        LocalGovernment::create(['name' => 'Galyang', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Chapakot', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Putalibazar', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Bheerkot', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Waling', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Arjun Chaupari', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Aandhikhola', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Kaligandaki', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Phedikhola', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Harinas', 'district_id' => 45]);
        LocalGovernment::create(['name' => 'Biruwa', 'district_id' => 45]);
        
        // District 46 = Tanahun
        LocalGovernment::create(['name' => 'Bhanu', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Bhimad', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Byas', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Shuklagandaki', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Anbu Khaireni', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Devghat', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Bandipur', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Rishing', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Ghiring', 'district_id' => 46]);
        LocalGovernment::create(['name' => 'Myagde', 'district_id' => 46]);
        
        // Lumbini Province
        // District 47 = Kapilvastu
        LocalGovernment::create(['name' => 'Kapilvastu', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Banganga', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Buddhabhumi', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Shivaraj', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Krishnanagar', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Maharajgunj', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Mayadevi', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Yashodhara', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Suddhodhan', 'district_id' => 47]);
        LocalGovernment::create(['name' => 'Bijayanagar', 'district_id' => 47]);
        
        //District 48 = Parasi
        LocalGovernment::create(['name' => 'Bardaghat', 'district_id' => 48]);
        LocalGovernment::create(['name' => 'Ramgram', 'district_id' => 48]);
        LocalGovernment::create(['name' => 'Sunwal', 'district_id' => 48]);
        LocalGovernment::create(['name' => 'Susta', 'district_id' => 48]);
        LocalGovernment::create(['name' => 'Palhinandan', 'district_id' => 48]);
        LocalGovernment::create(['name' => 'Pratappur', 'district_id' => 48]);
        LocalGovernment::create(['name' => 'Sarawal', 'district_id' => 48]);
        
        // District 49 = Rupandehi
        LocalGovernment::create(['name' => 'Butwal', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Devdaha', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Lumbini Sanskritik', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Sainamaina', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Siddharthanagar', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Tilottama', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Gaidahawa', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Kanchan', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Kotahimal', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Marchawari', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Mayadevi', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Omsatiya', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Rohini', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Sammarimai', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Siyari', 'district_id' => 49]);
        LocalGovernment::create(['name' => 'Suddodhan', 'district_id' => 49]);
        
        // District 50 = Arghakhanchi
        LocalGovernment::create(['name' => 'Sandhikharka', 'district_id' => 50]);
        LocalGovernment::create(['name' => 'Sitaganga', 'district_id' => 50]);
        LocalGovernment::create(['name' => 'Bhumikasthan', 'district_id' => 50]);
        LocalGovernment::create(['name' => 'Chhatradev', 'district_id' => 50]);
        LocalGovernment::create(['name' => 'Panini', 'district_id' => 50]);
        LocalGovernment::create(['name' => 'Malarani', 'district_id' => 50]);
        
        // District 51 = Gulmi 
        LocalGovernment::create(['name' => 'Musikot', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Resunga', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Ishma', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Kaligandaki', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Gulmi Darbar', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Satyawati', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Chandrakot', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Rurukshetra', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Chhatrakot', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Dhurkot', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Madane', 'district_id' => 51]);
        LocalGovernment::create(['name' => 'Malika', 'district_id' => 51]);
        
        // District 52 = Palpa
        LocalGovernment::create(['name' => 'Tansen', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Rampur', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Rainadevi Chhahara', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Ripdikot', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Bagnaskali', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Rambha', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Purbakhola', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Nisdi', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Mathagadi', 'district_id' => 52]);
        LocalGovernment::create(['name' => 'Tinahu', 'district_id' => 52]);
        
        // District 53 = Dang 
        LocalGovernment::create(['name' => 'Ghorahi', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Tulsipur', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Lamahi', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Gadhawa', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Rajpur', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Shantinagar', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Rapti', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Banglachuli', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Dangisharan', 'district_id' => 53]);
        LocalGovernment::create(['name' => 'Babai', 'district_id' => 53]);
        
        // District 54 = Pyuthan
        LocalGovernment::create(['name' => 'Pyuthan', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Sworgadwari', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Gaumukhi', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Mandavi', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Sarumarani', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Mallarani', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Naubahini', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Jhimruk', 'district_id' => 54]);
        LocalGovernment::create(['name' => 'Airawati', 'district_id' => 54]);
        
        // District 55 = Rolpa 
        LocalGovernment::create(['name' => 'Rolpa', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Runtigadhi', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Triveni', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Sunilsmirti', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Lungri', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Sunchhahari', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Thabang', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Madi', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Gangadev', 'district_id' => 55]);
        LocalGovernment::create(['name' => 'Paribartan', 'district_id' => 55]);
        
        // District 56 = East Rukum
        LocalGovernment::create(['name' => 'Bhume', 'district_id' => 56]);
        LocalGovernment::create(['name' => 'Putha Uttarganga', 'district_id' => 56]);
        LocalGovernment::create(['name' => 'Sisne', 'district_id' => 56]);
        
        // District 57 = Banke
        LocalGovernment::create(['name' => 'Nepalgunj', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Kohalpur', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Rapti-Sonari', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Narainapur', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Duduwa', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Janaki', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Khajura', 'district_id' => 57]);
        LocalGovernment::create(['name' => 'Baijanath', 'district_id' => 57]);
        
        // District 58 = Bardiya
        LocalGovernment::create(['name' => 'Gulariya', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Rajapur', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Madhuwan', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Thakurbaba', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Basgadhi', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Barbardiya', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Badhaiyatal', 'district_id' => 58]);
        LocalGovernment::create(['name' => 'Geruwa', 'district_id' => 58]);
        
        // Karnali Province
        // District 59 = West Rukum
        LocalGovernment::create(['name' => 'Musikot', 'district_id' => 59]);
        LocalGovernment::create(['name' => 'CHaurjahari', 'district_id' => 59]);
        LocalGovernment::create(['name' => 'Aathbiskot', 'district_id' => 59]);
        LocalGovernment::create(['name' => 'Banphikot', 'district_id' => 59]);
        LocalGovernment::create(['name' => 'Tribeni', 'district_id' => 59]);
        LocalGovernment::create(['name' => 'Sani Bheri', 'district_id' => 59]);
        
        // District 60 = Salyan 
        LocalGovernment::create(['name' => 'Shaarda', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Bagchaur', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Bangad', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Kalimati', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Tribeni', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Kapurkot', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Chatreshwari', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Kumakh', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Siddha Kumakh', 'district_id' => 60]);
        LocalGovernment::create(['name' => 'Darma', 'district_id' => 60]);
        
        // District 61 = Dolpa 
        LocalGovernment::create(['name' => 'Thuli Bheri', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'Tripurasundari', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'Dolpo Buddha', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'She Phoksundo', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'Jagadulla', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'Mudkechula', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'Kaike', 'district_id' => 61]);
        LocalGovernment::create(['name' => 'Chharka Tangsong', 'district_id' => 61]);
        
        // District 62 = Humla 
        LocalGovernment::create(['name' => 'Simkot', 'district_id' => 62]);
        LocalGovernment::create(['name' => 'Namkha', 'district_id' => 62]);
        LocalGovernment::create(['name' => 'Kharpunath', 'district_id' => 62]);
        LocalGovernment::create(['name' => 'Sarkegad', 'district_id' => 62]);
        LocalGovernment::create(['name' => 'Chankheli', 'district_id' => 62]);
        LocalGovernment::create(['name' => 'Adanchuli', 'district_id' => 62]);
        LocalGovernment::create(['name' => 'Tajakot', 'district_id' => 62]);
        
        // District 63 = Jumla
        LocalGovernment::create(['name' => 'Chandannath', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Kankasundari', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Sinja', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Hima', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Tila', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Guthichaur', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Tatopani', 'district_id' => 63]);
        LocalGovernment::create(['name' => 'Patarasi', 'district_id' => 63]);
        
        // District 64 = Kalikot
        LocalGovernment::create(['name' => 'Khandachakra', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Raskot', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Tilagufa', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Pachaljharana', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Sanni Triveni', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Narharinath', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Shubha Kalika', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Mahawai', 'district_id' => 64]);
        LocalGovernment::create(['name' => 'Palata', 'district_id' => 64]);
        
        // District 65 = Mugu 
        LocalGovernment::create(['name' => 'Chhayanath Rara', 'district_id' => 65]);
        LocalGovernment::create(['name' => 'Mugum Karmarong', 'district_id' => 65]);
        LocalGovernment::create(['name' => 'Soru', 'district_id' => 65]);
        LocalGovernment::create(['name' => 'Khatyad', 'district_id' => 65]);
        
        // District 66 = Surkhet 
        LocalGovernment::create(['name' => 'Birendranagar', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Bheriganga', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Gurbha Kot', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Panchapuri', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Lekbesi', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Chaukune', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Barahatal', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Chingad', 'district_id' => 66]);
        LocalGovernment::create(['name' => 'Simta', 'district_id' => 66]);
        
        // District 67 = Dailekh
        LocalGovernment::create(['name' => 'Narayan', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Dullu', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Aathbis', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Chamunda Bindrasaini', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Tantikandh', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Bhairabi', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Mahabu', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Naumule', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Dhungeshwar', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Gurans', 'district_id' => 67]);
        LocalGovernment::create(['name' => 'Bhagawatimai', 'district_id' => 67]);
        
        // District 68 = Jajarkot
        LocalGovernment::create(['name' => 'Bheri', 'district_id' => 68]);
        LocalGovernment::create(['name' => 'Chhedagad', 'district_id' => 68]);
        LocalGovernment::create(['name' => 'Tribeni Nalgad', 'district_id' => 68]);
        LocalGovernment::create(['name' => 'Junichande', 'district_id' => 68]);
        LocalGovernment::create(['name' => 'Kushe', 'district_id' => 68]);
        LocalGovernment::create(['name' => 'Barekot', 'district_id' => 68]);
        LocalGovernment::create(['name' => 'Shivalaya', 'district_id' => 68]);
        
        // Sudhurpaschim Province 
        // District 69 = kailali
        LocalGovernment::create(['name' => 'Dhangadhi', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Lamki Chuha', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Tikapur', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Ghodaghodi', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Bhajani', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Godawari', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Gauruganga', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Janaki', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Bardagoriya', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Mohanyal', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Kailari', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Joshipur', 'district_id' => 69]);
        LocalGovernment::create(['name' => 'Chure', 'district_id' => 69]);
        
        // District 70 = Achham
        LocalGovernment::create(['name' => 'Mangalsen', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Kamalbazar', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Sanfebagar', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Panchadewal Binayak', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Ramaroshan', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Chaurpati', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Turmakhand', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Mellekh', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Dhakari', 'district_id' => 70]);
        LocalGovernment::create(['name' => 'Bannigadi Jayagad', 'district_id' => 70]);
        
        // District 71 = Doti 
        LocalGovernment::create(['name' => 'Dipayal Silgadhi', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Shikhar', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Purbichauki', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Badikedar', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Jorayal', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Sayal', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Aadarsha', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Dr. K.I. Singh', 'district_id' => 71]);
        LocalGovernment::create(['name' => 'Bogatan', 'district_id' => 71]);
        
        // District 72 = Bajhang
        LocalGovernment::create(['name' => 'Jaya Prithivi', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Bungal', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Talkot', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Masta', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Khaptadchhanna', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Thalara', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Bitthadchir', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Surma', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Chhabis Pathibhera', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Durgathali', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Kedarsyu', 'district_id' => 72]);
        LocalGovernment::create(['name' => 'Saipal', 'district_id' => 72]);
        
        
        // District 73 = Bajura 
        LocalGovernment::create(['name' => 'Badhimalika', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Triveni', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Budiganga', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Gaumul', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Jagnnath', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Swamikartik', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Chhededaha', 'district_id' => 73]);
        LocalGovernment::create(['name' => 'Himali', 'district_id' => 73]);
        
        // District 74 = Kanchanpur
        LocalGovernment::create(['name' => 'Bedkot', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Belauri', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Bhimdatta', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Mahakali', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Shuklaphanta', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Krishnapur', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Punarbas', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Laljhadi', 'district_id' => 74]);
        LocalGovernment::create(['name' => 'Beldandi', 'district_id' => 74]);
        
        // District 75 = Dadeldhura
        LocalGovernment::create(['name' => 'Amargadhi', 'district_id' => 75]);
        LocalGovernment::create(['name' => 'Parshuram', 'district_id' => 75]);
        LocalGovernment::create(['name' => 'Aalitaal', 'district_id' => 75]);
        LocalGovernment::create(['name' => 'Bhageshwar', 'district_id' => 75]);
        LocalGovernment::create(['name' => 'Navadurga', 'district_id' => 75]);
        LocalGovernment::create(['name' => 'Ajaymeru', 'district_id' => 75]);
        LocalGovernment::create(['name' => 'Ganyapadhura', 'district_id' => 75]);
        
        // District 76 = Baitadi
        LocalGovernment::create(['name' => 'Dasharathchand', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Patan', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Melauli', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Purchaudi', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Sunarya', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Sigas', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Shivanath', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Pancheshwor', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Dogdakedar', 'district_id' => 76]);
        LocalGovernment::create(['name' => 'Dilasaini', 'district_id' => 76]);
        
        // District 77 = Darchula 
        LocalGovernment::create(['name' => 'Mahakali', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Shailyasikhar', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Malikarjun', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Apihimal', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Duhun', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Naugad', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Marma', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Lekam', 'district_id' => 77]);
        LocalGovernment::create(['name' => 'Vyans', 'district_id' => 77]);   
    }
}
