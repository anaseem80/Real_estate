<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = [
            [
                'title' => 'أهم المشروعات بمدينة دبي',

                'content' => 'يعتبر التطوير العقاري عاملا مهما جدا في تشكيل البيئة المعمارية والبنائية في الامارات. فهو في الواقع ، يشكل الطريقة التي يعيش بها الناس وينشطون فيها ، وبذلك يتحدد ويتطور النشاط البشري و السكاني. في جميع أنحاء العالم ، يشكل التطوير و الاستثمار العقاري انعكاسا معاصرا  للاحتياجات الاجتماعية والطلب في السوق في مناطق جغرافية معينة. ومع ذلك ، نظرًا للعولمة العالمية ، نشهد بشكل متزايد احتياجات ومتطلبات للعيش في مناطق معينة ، على الرغم من الاختلافات المؤسسية القائمة في البلد الواحد والمدن المختلفة فيه . 

                في كل سياق ، يتعلق التطوير العقاري بالابتكارات ، مثل تقديم أشكال جديدة لتمويل التنمية ، أو إنشاء أنواع جديدة من العقارات السكنية والاستثمارية  ، أو دمج حلول مستدامة مع عمليات التطوير. على هذا النحو ، تخضع ممارسة و هندسة التطوير العقاري إلى تغيير مستمر خصوصا في الامارات لما تشهده من ثورة معمارية و إنشاءات عقارية ، تنعكس في مجموعة متنوعة من المشاريع السكنية و الاستثمارات العقارية  التي يتم تطويرها من قبل شركات عقارية و مطورين في كل أنحاء الوطن و بالأخص في مناطق معينة مثل العاصمة الإدارية و القاهرة الجديدة 
                
                و كعلم تطبيقي وموجّه نحو الممارسة ، تقدم دراسات التطوير العقاري الحقيقية في الامارات  إجابات عن الأسئلة المجتمعية الحالية والمستقبلية واحتياجات السوق ، ويمكن اعتبارها بطبيعتها مسعى متعدد التخصصات يهدف إلى تشكيل هيكلة راقية وفخمة تتوفر على جميع المرافق و المراكز التي تضمن للسكان عيشة مرفهة يسعى كل من القطاع الحكومي و الخاص لتحقيقها ، وذلك من خلال إنشاء بنية تحتية صلبة ، بدأ في الظهور و الإنعكاس في بناء أهم مشروعات وكمبوندات القاهرة الجديدة والتجمع الخامس وبيت الوطن ، و التي من شأنها مواكبة الأذواق و الطلب المتزايد في سوق العقارات الالاماراتي و كذا استقطاب الأجانب لتنشيط قطاع السياحة في الامارات. ',
                'image' => 'property/cc.png',
                
                'slug' => 'property/cc.png',
                'user_id' =>rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'السكن فى شقق الروف والأدوار الأخيرة بين المميزات والعيوب',  'slug' => 'property/cc.png',

                'content' => 'لقد أصبح السكن في شقق الروف أمرا شائعا على نحو متزايد ، وخاصة في المباني السكنية ذات الطراز المعاصر ، حيث أصبحت شقة الروف مسكن عصري للغاية  ومطلب للعديدين ، ومع أن السكن على سطح البناية أو في أعلى مكان فيها يستهوي الكثير ممن يروا أن مميزات السكن في شقق الروف لا تقدر بثمن ، يرى آخرون هذا النوع من المساكن غير لائق لما انتشر قديما في الامارات عنها كمساكن لذوي المستوى الاجتماعي والاقتصادي المتدني.

 

                في أمريكا والدول الأوروبية ، العيش في الروف من الرفاهيات التي يكون الحصول عليها  غالبا ميزة لا يمكن امتلاكها إلا لم يستطيع دفع ثمنها. نعم ، في الواقع ، شراء شقة على الروف ، بالأخص إذا كانت في أحد المدن العالمية الكبرى أو العواصم يكلف صاحبها ثروة.',
                
                'image' => 'property/aa.png',
                'user_id' =>rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'السكن فى شقق الروف والأدوار الأخيرة بين المميزات والعيوب',  'slug' => 'property/cc.png',

                'content' => 'لقد أصبح السكن في شقق الروف أمرا شائعا على نحو متزايد ، وخاصة في المباني السكنية ذات الطراز المعاصر ، حيث أصبحت شقة الروف مسكن عصري للغاية  ومطلب للعديدين ، ومع أن السكن على سطح البناية أو في أعلى مكان فيها يستهوي الكثير ممن يروا أن مميزات السكن في شقق الروف لا تقدر بثمن ، يرى آخرون هذا النوع من المساكن غير لائق لما انتشر قديما في الامارات عنها كمساكن لذوي المستوى الاجتماعي والاقتصادي المتدني.

 

                في أمريكا والدول الأوروبية ، العيش في الروف من الرفاهيات التي يكون الحصول عليها  غالبا ميزة لا يمكن امتلاكها إلا لم يستطيع دفع ثمنها. نعم ، في الواقع ، شراء شقة على الروف ، بالأخص إذا كانت في أحد المدن العالمية الكبرى أو العواصم يكلف صاحبها ثروة.',
                'image' => 'property/bb.png',
                'user_id' =>rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '10 أسرار للإستثمار العقاري الناجح وأهم النصائح لإختيار المنطقة المناسبة للإستثمار',  'slug' => 'property/cc.png',

                'content' => 'في ظل التقلبات الاقتصادية التي تواجهها الامارات اليوم ، والتغيرات الهيكلية الهادفة إلى إعادة تشكيل بنيتها التحتية ، نجد أهم المشاريع الضخمة والمهمة مرتبطة بالعقارات ، حيث أصبحت هذه الأخيرة تخضع لمعايير اختلفت عن ذي قبل. ورغم جميع التوقعات التي تنبأت بوقوع الامارات في فخ الفقاعة العقارية ، إلا أنه لعدة أسباب رئيسية يبقى هذا القطاع من القطاعات التي يستمر عليها الطلب في التزايد رغم جميع ما مرت وتمر به البلد. ولأن هذه السوق تظل في الواقع خصبة و مدرة للأرباح  ، إليك 10 أسرار للإستثمار العقاري الناجح وأهم النصائح لإختيار المنطقة المناسبة للإستثمار. وكذا أهم المناطق التي سيكون الاستفادة من عقار فيها صفقة مربحة على المدى الطويل و على جميع المستويات. ',
                'image' => 'property/cc.png',
                'user_id' =>rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'خطوات هى دليلك الكامل لتشطيب شقتك بأفضل طريقة وأقل مجهود',  'slug' => 'property/cc.png',

                'content' => 'ففي أثناء إعداد الشقة، ومن أكثر المراحل التي تشغل بال الكثير منا، ولذلك أعددنا لك هذا الدليل، وسنكون معك في كل خطوة بخطوة، فهذه النصائح ستوفر عليك كثير من الوقت والجهد والمال لكل مراحل تشطيب شقتك، وبشكل خاص أعمال التشطيبات الداخلية للشقة من الطوب الأحمر وحتى الدهانات واللمسات النهائية.

                فإذا كنت لاتعرف من أين تبدأ، نحن نساعدك لإكمال شقتك كالمحترفين، وهي بالتأكيد مرحلة إستلام شقتك لتكون على أعلى مستوى.
                
                يمكن أن تجرى عملية التشطيب على عدة مراحل أساسية، وقد يكون بحسب الإمكانيات، فمن حقك أن تشطب شقتك خطوة بخطوة وبالتدريج ويتم العمل بها مرحلة بعد مرحلة أو بالتوازي أو حسب التتابع المطلوب، وهي كالآتي:',
                'image' => 'property/aa.png',
                'user_id' =>rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        DB::table('blogs')->insert($blog);
    }
}
