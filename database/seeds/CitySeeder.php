<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\City::class)->create();
        DB::table('cities')->insert([
                    ['name'=>'إمساعد'],
                    ['name'=>'إجخرة'],
                    ['name'=>'زليتن'],
                    ['name'=>'غريان'],

                    ['name'=>'بئر الأشهب'],
                    ['name'=>'مرادة'],
                    ['name'=>'الخمس'],
                    ['name'=>'الأصابعة'],

                    ['name'=>'طبرق'],
                    ['name'=>'البريقة'],
                    ['name'=>'مسلاته'],
                    ['name'=>'ككلة'],

                    ['name'=>'درنة'],
                    ['name'=>'خليج سدرة'],
                    ['name'=>'ترهونة'],
                    ['name'=>'القلعة'],

                    ['name'=>'أم الرزم'],
                    ['name'=>'هراوة'],
                    ['name'=>'بني وليد'],
                    ['name'=>' يفرن'],

                    ['name'=>'القبة'],
                    ['name'=>'سرت'],
                    ['name'=>'قصر خيار'],
                    ['name'=>' جادو'],

                    ['name'=>'الأبرق'],
                    ['name'=>'أبو قرين'],
                    ['name'=>'القره بوللي'],
                    ['name'=>'الرحيبات '],

                    ['name'=>'القيقب'],
                    ['name'=>'الجفرة'],
                    ['name'=>'تاجوراء'],
                    ['name'=>'الرياينة'],

                    ['name'=>'شحات'],
                    ['name'=>'براك الشاطئ'],
                    ['name'=>'طرابلس'],
                    ['name'=>'الزنتان'],

                    ['name'=>'البيضاء'],
                    ['name'=>'القرضة الشاطئ'],
                    ['name'=>'قصر بن غشير'],
                    ['name'=>'الشقيقة'],

                    ['name'=>'ساحل الجبل'],
                    ['name'=>'أدري الشاطئ'],
                    ['name'=>'السواني'],
                    ['name'=>'نسمة'],
                    
                    ['name'=>'المرج'],
                    ['name'=>'سبها'],
                    ['name'=>'جنزور'],
                    ['name'=>'الشويرف'],
                    
                    ['name'=>'جردس العبيد'],
                    ['name'=>'وادي البوانيس'],
                    ['name'=>'العزيزية'],
                    ['name'=>'الرجبان'],
                    
                    ['name'=>'توكرة'],
                    ['name'=>'بنت بية'],
                    ['name'=>'الزهراء'],
                    ['name'=>' ظاهر الجبل'],
                    ['name'=>'الأبيار'],
                    ['name'=>'الغريفة'],
                    ['name'=>'الماية'],
                    ['name'=>'الحرابة'],
                    ['name'=>'البدارنة'],
                    
                    ['name'=>'بنغازي'],
                    ['name'=>'أوباري'],
                    ['name'=>'الزاوية'],
                    ['name'=>'كاباو'],
                    
                    ['name'=>'سلوق'],
                    ['name'=>'غات'],
                    ['name'=>'صرمان'],
                    ['name'=>'نالوت'],
                    
                    ['name'=>'قمينس'],
                    ['name'=>'مرزق'],
                    ['name'=>'صبراته'],
                    ['name'=>'وازن'],
                    
                    ['name'=>'إجدابيا'],
                    ['name'=>'القطرون'],
                    ['name'=>'العجيلات'],
                    ['name'=>'الحوامد'],
                    
                    ['name'=>'الكفرة'],
                    ['name'=>'تراغن'],
                    ['name'=>'الجميل'],
                    ['name'=>'باطن الجبل'],
                    
                    ['name'=>'تازربو'],
                    ['name'=>'وادي عتبة'],
                    ['name'=>'زوارة'],
                    ['name'=>'غدامس'],
                    
                    ['name'=>'جالو'],
                    ['name'=>'الشرقية'],
                    ['name'=>'زلطن'],
                    
                    ['name'=>'أوجلة'],
                    ['name'=>'مصراتة'],
                    ['name'=>' رقدالين'],

        ]);
    }
}
