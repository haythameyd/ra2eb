<?php

use Illuminate\Database\Seeder;

class cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $ccall="INSERT INTO `cities` (`id`, `name`, `name_eng`) VALUES
       (1, 'الإسكندرية', 'alex'),
       (2, 'الإسماعيلية', 'ismailia'),
       (3, 'الأقصر','luxor'),
       (4, 'البحر الأحمر','redsea'),
       (5, 'البحيرة','behera'),
       (6, 'الجيزة','giza'),
       (7, 'الدقهلية','dakahlya'),
       (8, 'السويس','suez'),
       (9, 'الشرقية','sharkia'),
       (10, 'الغربية','gharbya'),
       (11, 'الفيوم','fayoum'),
       (12, 'القاهرة','cairo'),
       (13, 'القليوبية','qalyobya'),
       (14, 'المنوفية','monoufya'),
       (15, 'المنيا','menya'),
       (16, 'الوادي الجديد','wadi_gadid'),
       (17, 'أسوان','aswan'),
       (18, 'أسيوط','asyut'),
       (19, 'بني سويف','benisuef'),
       (20, 'بورسعيد','portsaid'),
       (21, 'جنوب سيناء','southsinai'),
       (22, 'دمياط','damietta'),
       (23, 'سوهاج','souhag'),
       (24, 'شمال سيناء','northsinai'),
       (25, 'قنا','qena'),
       (26, 'كفر الشيخ','kaftelsheikh'),
       (27, 'مطروح','matrouh');";
        DB::statement($ccall);
    }
}
