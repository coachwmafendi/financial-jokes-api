<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Joke;

class JokeSeeder extends Seeder
{
    public function run(): void
    
    {
        $jokes = [
            "Gaji masuk: Alhamdulillah penuh satu akaun, gaji keluar: Astaghfirullah… tak sampai seminggu dah tinggal kenangan",
            "Aku bukan kedekut, cuma B40 mindset terperangkap dalam impian hidup gaya T20",
            "Saving aku macam WiFi kampung, kadang laju, kadang hilang, kebanyakan masa tak ada langsung",
            "Bukan tak nak invest, tapi duit pun tak pernah nampak potensi dekat aku",
            "Duit gaji tu ibarat tetamu raya, datang sekejap je, lepas tu terus hilang tanpa pesan",
            "Setiap bulan aku buat bajet dengan penuh semangat, lepas tu bajet tu yang buat aku stress",
            "Aku ada dua jenis akaun sahaja: satu kosong, satu lagi kosong tapi ada sejarah",
            "Dompet aku diet lebih konsisten daripada aku, tiap-tiap hari makin kurus",
            "Nak kaya cepat? Senang je… jangan buka Shopee, Lazada atau TikTok Shop waktu malam",
            "Aku bukan boros, aku cuma menjalankan tanggungjawab sebagai penyumbang ekonomi negara",
            "Add to cart tu memang percuma dan penuh harapan, tapi checkout tu penuh penyesalan",
            "Free shipping memang nampak menarik, tapi bila tengok total RM120 terus rasa tertipu dengan diri sendiri",
            "Aku beli barang bukan sebab aku perlu, tapi sebab diskaun tu nampak macam peluang hidup",
            "Wishlist aku panjang berjela, tapi saving aku pendek macam hujung bulan",
            "Gaji aku masuk bank dengan penuh harapan, duit aku pula terus masuk cart tanpa izin",
            "Aku beli barang bukan sebab murah sangat, tapi sebab aku memang lemah bila tengok promo",
            "Shopee tahu apa aku nak sebelum aku sendiri sedar aku perlukan benda tu",
            "Payday sale bagi orang lain kegembiraan, bagi aku pula hari berkabung saving",
            "Nak jimat konon, tapi kopi RM12 tu tetap beli sebab self reward katanya",
            "Setiap hari aku cakap hari ni last makan luar, tapi ayat tu dah jadi rutin harian",
            "Air kosong memang free, tapi ego aku tak mampu nak order air kosong je",
            "Diet tak pernah jalan, duit pun sama… dua-dua gagal konsisten",
            "Masak sendiri memang jimat, tapi rasa malas tu jauh lebih mahal harganya",
            "Bila minyak kereta naik, bukan setakat meter naik, tekanan hidup pun ikut naik",
            "Loan kereta lagi setia dari ex, tiap bulan dia tetap datang tanpa gagal",
            "Hutang aku lebih stabil dari emosi aku, tak pernah berubah walaupun aku dah berubah",
            "Aku kerja kuat setiap hari bukan sebab nak kaya, tapi sebab komitmen tak pernah cuti",
            "Kereta mahal, minyak mahal, servis mahal… akhirnya aku yang paling mahal dari segi stress",
            "Saving aku macam unicorn, semua orang kata ada tapi aku sendiri tak pernah nampak",
            "Target nak simpan RM10 sehari nampak mudah, tapi hari pertama dah tersungkur",
            "Start bulan depan adalah janji paling konsisten yang aku tak pernah tunaikan",
            "Aku bukan tak pandai simpan duit, cuma duit tu tak pernah bagi aku peluang kedua",
            "Emergency fund aku sentiasa dalam keadaan emergency, tak pernah sempat stabil",
            "ASB aku masih dalam peringkat angan-angan, belum masuk fasa realiti",
            "Crypto aku merah menyala macam cili padi, pedih tengok tiap kali buka app",
            "Gaji aku cukup… cukup-cukup untuk terus hidup dan ulang benda sama bulan depan",
            "Tengah bulan dah rasa macam hujung tahun, penat mental dan fizikal sekali",
            "Awal bulan makan macam orang kaya, hujung bulan makan macam nak survive sahaja",
            "Gaji naik sikit je, tapi komitmen naik macam roket Elon Musk",
            "Aku tunggu gaji masuk macam tunggu raya, penuh harapan dan perasaan",
            "Duit memang tak boleh beli kebahagiaan, tapi boleh beli makanan sedap, itu pun dah cukup buat aku senyum",
            "Aku tak miskin, aku cuma dalam fasa pre-rich yang agak lama",
            "Orang kata duit bukan segalanya, tapi cuba bayar bil elektrik tanpa duit… terus jadi segalanya",
            "Rezeki tu memang luas, tapi akaun bank aku tetap rasa sempit setiap masa",
            "Aku bukan broke, aku cuma dalam proses under maintenance yang panjang",
            "Takpe, bulan ni berjimat — lepas nampak promo terus tukar jadi takpe, bulan depan serius",
            "Aku tak pernah kejar duit, tapi peliknya duit selalu lari jauh dari aku",
            "Matlamat hidup nak jadi kaya, tapi realitinya kaya dengan pengalaman pahit manis sahaja",
            "Duit tak pernah salah dalam hidup aku, aku je yang selalu kalah dengan nafsu sendiri",
            "Saving aku bukan tak ada langsung… cuma berada dalam alam ghaib yang belum dapat dikesan"
        ];

        foreach ($jokes as $joke) {
            Joke::create([
                'content' => $joke,
            ]);
        }
    }
}