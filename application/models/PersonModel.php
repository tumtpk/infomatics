<?php

    class PersonModel extends CI_Model {
        public function getPerson(){
            $data = array(
                array(
                    "name" => "นิเทศศาสตร์",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ธนภร เจริญธัญสกุล', 'phone' => '2265 , 2206-7', 'email' => 'ctanapor@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'ctanapor','personID'=>'4320500322'),
                        1 => array('name' => 'อาจารย์ ดร.ฟารีดา เจะเอาะ', 'phone' => '2295 , 2206', 'email' => 'jfareeda@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jfareeda','personID'=>'5100000076'),
                        2 => array('name' => 'อาจารย์ ดร.อัตนันท์ เตโชพิศาลวงศ์', 'phone' => '3811 2657 , 3803 2206', 'email' => 'attanan.ta@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'attanan','personID'=>'5500000048'),
                        3 => array('name' => 'อาจารย์บุศรินทร์ นันทะเขต', 'phone' => '2253 , 2206-7', 'email' => 'budsarin.na@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'budsarin','personID'=>'5700000073'),
                        4 => array('name' => 'อาจารย์รจเรศ ณรงค์ราช', 'phone' => '2293 , 2206-7', 'email' => 'nrotjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nrotjare','personID'=>'4900000024'),
                        5 => array('name' => 'อาจารย์วรรณรัตน์ นาที', 'phone' => '2256 , 2206', 'email' => 'nwannara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nwannara','personID'=>'4630020347'),
                    )
                ),
                
                array(
                    "name" => "เทคโนโลยีสารสนเทศ",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.สลิล บุญพราหมณ์', 'phone' => '2257 , 2206-7', 'email' => 'bsalin@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'bsalin','personID'=>'4220350322'),
                        1 => array('name' => 'อาจารย์ ดร.ชนันท์กรณ์ จันแดง', 'phone' => '2209 , 2206-7', 'email' => 'chatchanan.ja@mail.wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chanankorn','personID'=>'5500000009'),
                        2 => array('name' => 'อาจารย์ ดร.ณิชนันทน์ กิตติพัฒนบวร', 'phone' => '2281 , 2206', 'email' => 'knichcha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'knichcha','personID'=>'4121460503'),
                        3 => array('name' => 'อาจารย์ ดร.สุภาภรณ์ ใจรังษี', 'phone' => '2276 , 2206-7', 'email' => 'supaporn.ch@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'supaporn','personID'=>'5600000068'),
                        4 => array('name' => 'อาจารย์กาญจนา หฤหรรษพงศ์', 'phone' => '2285 , 2206-7', 'email' => 'hkanjana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'hkanjana','personID'=>'5000000031'),
                        5 => array('name' => 'อาจารย์จงสุข คงเสน', 'phone' => '2259 , 2206-7', 'email' => 'ojongsuk@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ojongsuk','personID'=>'3820400322'),
                        6 => array('name' => 'อาจารย์จักริน วีแก้ว', 'phone' => '2214 , 2206-7', 'email' => 'wjakkari@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'wjakkari','personID'=>'4310460503'),
                        7 => array('name' => 'อาจารย์เจริญพร บัวแย้ม', 'phone' => '2279 , 2206-7', 'email' => 'charoenporn.bo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jaranporn','personID'=>'5400000018'),
                        8 => array('name' => 'อาจารย์สุพพัต รุ่งเรืองศิลป์', 'phone' => '2416 , 2206-7', 'email' => 'suppat.ru@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'suppat','personID'=>'5700000046'),
                        9 => array('name' => 'อาจารย์ธีรัช สายชู', 'phone' => '2268 , 2206-7', 'email' => 'theerat.sa@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'theerat','personID'=>'5800000035'),
                    )
                ),
                
                array(
                    "name" => "เทคโนโลยีมัลติมีเดียและแอนิเมชัน",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.ศศิธร รัตนรุ่งโรจน์', 'phone' => '2284 , 2206-7', 'email' => 'rsasitho@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'Sasithon','personID'=>'4900000057'),
                        1 => array('name' => 'อาจารย์ ดร.กาญจน์นัฐฐา ไชยศรียา', 'phone' => '2294 , 2206-7', 'email' => 'csomjit@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'Kannattha','personID'=>'4900000025'),
                        3 => array('name' => 'อาจารย์ปฏิบัติ ปรียาวงศากุล', 'phone' => '2274-2547 , 2206', 'email' => 'patibut.pr@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'Patibut_2','personID'=>'5700000071'),
                        4 => array('name' => 'อาจารย์พรพล ธรรมรงค์รัตน์', 'phone' => '2282 , 2206-7', 'email' => 'pornpon.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pornpon','personID'=>'5300000027'),
                        5 => array('name' => 'อาจารย์วิทยา หอทรัพย์', 'phone' => '2252 , 2206-7', 'email' => 'witthaya.ho@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'witthaya','personID'=>'5600000031'),
                        6 => array('name' => 'อาจารย์เชาวนันท์ ขุนดำ', 'phone' => '2661 , 2206-7', 'email' => 'chaowanan.kh@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chaowanan','personID'=>'5500000046'),
                        7 => array('name' => 'อาจารย์โกสินทร์ กาฬรัตน์', 'phone' => '2274 , 2206-7', 'email' => 'kosin.ka@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kosin','personID'=>'5500000092'),
                    )
                ),
                
                array(
                    "name" => "การจัดการสารสนเทศดิจิทัล",
                    "person" => array(
                        0 => array('name' => 'ผศ.ดิชิตชัย เมตตาริกานนท์', 'phone' => '2267 , 2206-7', 'email' => 'mdichitc@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'mdichitc','personID'=>'4310490322'),
                        1 => array('name' => 'ผศ.ดร.ศิวนาถ นันทพิชัย', 'phone' => '3362 , 3361', 'email' => 'ndecha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ndecha','personID'=>'4111130322'),
                        2 => array('name' => 'ผศ.ดร.สุธัญญา ด้วงอินทร์', 'phone' => '2261 , 2206-7', 'email' => 'dsuthany@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'dsuthany','personID'=>'4620070322'),
                        3 => array('name' => 'อาจารย์ ดร.สัจจารีย์ ศิริชัย', 'phone' => '2264 , 2206-7', 'email' => 'ssatjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ssatjare','personID'=>'3820320322'),
                        4 => array('name' => 'อาจารย์ ดร.นภารัตน์ ชูเกิด', 'phone' => '2271 , 2206-7', 'email' => 'jnaparat@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jnaparat','personID'=>'4520220322'),
                        5 => array('name' => 'อาจารย์คณิตสรณ์ สุริยะไพบูลย์วัฒนา', 'phone' => '2258 , 2206-7', 'email' => 'kanitsorn.su@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kanitsorn','personID'=>'5300000110'),
                        6 => array('name' => 'อาจารย์ยุทธนา เจริญรื่น', 'phone' => '2300 , 2206-7', 'email' => 'jyuttana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jyuttana','personID'=>'4900000065'),
                        7 => array('name' => 'อาจารย์สิริวัจนา แก้วผนึก', 'phone' => '2270 , 2206-7', 'email' => 'ksirivaj@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ksirivaj','personID'=>'5000000032'),
                    )
                ),
                
                array(
                    "name" => "วิศวกรรมซอฟต์แวร์",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.กรัณรัตน์ ธรรมรักษ์', 'phone' => '2565 , 2206-7', 'email' => 'kanchan.th@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'kanchan.th','personID'=>'5300000053'),
                        1 => array('name' => 'ผศ.ดร.ฐิมาพร เพชรแก้ว', 'phone' => '2275 , 2206-7', 'email' => 'pthimapo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pthimapo','personID'=>'4700000090'),
                        2 => array('name' => 'ผศ.อุหมาด หมัดอาด้ำ', 'phone' => '2255 , 2206-7', 'email' => 'muhamard@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'muhamard','personID'=>'3910660322'),
                        3 => array('name' => 'ผศ.เยาวเรศ ศิริสถิตย์กุล', 'phone' => '2272 , 2206', 'email' => 'syaowara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'syaowara','personID'=>'4700000024'),
                        4 => array('name' => 'อาจารย์ ดร.จิตติมา ศังขมณี', 'phone' => '2254 , 2206-7', 'email' => 'sjidtima@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'sjidtima','personID'=>'4120950322'),
                        5 => array('name' => 'อาจารย์ ดร.พุทธิพร ธนธรรมเมธี', 'phone' => '2283 , 2206-7', 'email' => 'putthiporn.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'putthiporn.th','personID'=>'5500000066'),
                    )
                ),
                
                array(
                    "name" => "นักวิชาการ",
                    "person" => array(
                        0 => array('name' => 'นายขุนดี หลำสุบ', 'phone' => '2668 , 2206-7', 'email' => 'khundee.la@wu.ac.th', 'rank' => 'การจัดการสารสนเทศ', 'pic' => 'khundee.la','personID'=>'5400000101'),
                        1 => array('name' => 'นายจิรพงศ์ ชูเกื้อ', 'phone' => '2501 , 2502', 'email' => 'cjirapon@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'cjirapon','personID'=>'4900000028'),
                        2 => array('name' => 'นายณัฐชา ศิลากุล', 'phone' => '2547 , 2206-7', 'email' => 'nattacha.si@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'nattacha','personID'=>'5700000011'),
                        3 => array('name' => 'นายปฏิวัติ เกตุเลิศประเสริฐ', 'phone' => '2533 , 2206-7', 'email' => 'kpatiwat@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'kpatiwat','personID'=>'5200000012'),
                        4 => array('name' => 'นายประทีป คงกล้า', 'phone' => '2976', 'email' => 'prateep.ko@wu.ac.th', 'rank' => 'วิศวกรรมซอฟต์แวร์', 'pic' => 'prateep.ko','personID'=>'6000000592'),
                        5 => array('name' => 'ว่าที่ ร.ต.(หญิง)ภัสราภรณ์ แซ่หนา', 'phone' => '2502 , 2206-7', 'email' => 'patsaraporn.sa@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'patsaraporn','personID'=>'5700000003'),
                        6 => array('name' => 'นางสาวสลิลทิพย์ เหมะ', 'phone' => '2667 , 2206-7', 'email' => 'salilthip.he@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'salilthip.he','personID'=>'5500000100'),
                        7 => array('name' => 'นายสิทธิพงษ์ จันทร์ปรุง', 'phone' => '2535 , 2206-7', 'email' => 'sitthipong.jn@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'sitthipong','personID'=>'5400000102'),
                        8 => array('name' => 'นายอาทิตย์ รักษ์วงศ์', 'phone' => '2501 , 2502', 'email' => 'rartitch@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'rartitch','personID'=>'4900000029'),
                        /*9 => array('name' => 'นางสาวคอซีหม๊ะ มาแมง', 'phone' => '2669 , 2206-7', 'email' => 'khorseemah.ma@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'khorseemah.ma','personID'=>''),*/
                        10 => array('name' => 'นางสาวจารุวรรณ ลักษณจันทร์', 'phone' => '2667 , 2206-7', 'email' => 'jaruwan.la@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'jaruwan.la','personID'=>'5600000042'),
                        11 => array('name' => 'นายปิยะ คะหะปะนะ', 'phone' => '2535 , 2206-7', 'email' => 'piya.kh@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'piya','personID'=>'5700000050'),
                    )
                ),
                
                array(
                    "name" => "เจ้าหน้าที่บริหารงานทั่วไป",
                    "person" => array(
                        0 => array('name' => 'นางสาวปิยะนุช จิตตระ', 'phone' => '2400 , 2212', 'email' => 'jpiyanut@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_04','personID'=>'4900000012'),
                        1 => array('name' => 'นางสาวฤดียา พัฒนแก้ว', 'phone' => '2206 , 2207', 'email' => 'prudiya@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_02','personID'=>'4021030322'),
                        2 => array('name' => 'นางสาวศรินนา จำปากลาย', 'phone' => '2212 , 2212', 'email' => 'jjarinna@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_05','personID'=>'4900000014'),
                        3 => array('name' => 'นางออนอุไร แก้วอุดม', 'phone' => '2451 , 2206-7', 'email' => 'bonourai@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_03','personID'=>'4520360502'),
                        4 => array('name' => 'นางสาวอัมพลิกา นุ่นสังข์', 'phone' => '2204 , 2240', 'email' => 'aumpalika.nu@wu.ac.th', 'rank' => 'พนักงานธุรการ', 'pic' => 'MIT_06','personID'=>'5600000056'),
                        
                    )
                ),
                
                array(
                    "name" => "นายช่างเทคนิค",
                    "person" => array(
                        0 => array('name' => 'นายทรงวุธ สองพิมพ์', 'phone' => '2501 , 2502', 'email' => 'ssongwut@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'ssongwut','personID'=>'4210500502'),
                        1 => array('name' => 'นายเพชรดนัย ว่องไวรัตนกุล', 'phone' => '2501 , 2502', 'email' => 'wpetchda@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'wpetchda','personID'=>'4310170322'),
                        2 => array('name' => 'นายไพฑูร เทพภักดี', 'phone' => '2501-2 , -', 'email' => 'tphaitoo@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'tphaitoo','personID'=>'4510200321'),
                    )
                ),
           );
                
           
            return $data;
        }
        
        public function getStaff(){
            $data = array(
                array(
                    "name" => "นิเทศศาสตร์",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ธนภร เจริญธัญสกุล', 'phone' => '2265 , 2206-7', 'email' => 'ctanapor@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'ctanapor','personID'=>'4320500322'),
                        1 => array('name' => 'อาจารย์ ดร.ฟารีดา เจะเอาะ', 'phone' => '2295 , 2206', 'email' => 'jfareeda@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jfareeda','personID'=>'5100000076'),
                        2 => array('name' => 'อาจารย์ ดร.อัตนันท์ เตโชพิศาลวงศ์', 'phone' => '3811 2657 , 3803 2206', 'email' => 'attanan.ta@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'attanan','personID'=>'5500000048'),
                        3 => array('name' => 'อาจารย์บุศรินทร์ นันทะเขต', 'phone' => '2253 , 2206-7', 'email' => 'budsarin.na@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'budsarin','personID'=>'5700000073'),
                        4 => array('name' => 'อาจารย์รจเรศ ณรงค์ราช', 'phone' => '2293 , 2206-7', 'email' => 'nrotjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nrotjare','personID'=>'4900000024'),
                        5 => array('name' => 'อาจารย์วรรณรัตน์ นาที', 'phone' => '2256 , 2206', 'email' => 'nwannara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nwannara','personID'=>'4630020347'),
                    )
                ),
                
                array(
                    "name" => "เทคโนโลยีสารสนเทศ",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.สลิล บุญพราหมณ์', 'phone' => '2257 , 2206-7', 'email' => 'bsalin@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'bsalin','personID'=>'4220350322'),
                        1 => array('name' => 'อาจารย์ ดร.ชนันท์กรณ์ จันแดง', 'phone' => '2209 , 2206-7', 'email' => 'chatchanan.ja@mail.wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chanankorn','personID'=>'5500000009'),
                        2 => array('name' => 'อาจารย์ ดร.ณิชนันทน์ กิตติพัฒนบวร', 'phone' => '2281 , 2206', 'email' => 'knichcha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'knichcha','personID'=>'4121460503'),
                        3 => array('name' => 'อาจารย์ ดร.สุภาภรณ์ ใจรังษี', 'phone' => '2276 , 2206-7', 'email' => 'supaporn.ch@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'supaporn','personID'=>'5600000068'),
                        4 => array('name' => 'อาจารย์กาญจนา หฤหรรษพงศ์', 'phone' => '2285 , 2206-7', 'email' => 'hkanjana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'hkanjana','personID'=>'5000000031'),
                        5 => array('name' => 'อาจารย์จงสุข คงเสน', 'phone' => '2259 , 2206-7', 'email' => 'ojongsuk@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ojongsuk','personID'=>'3820400322'),
                        6 => array('name' => 'อาจารย์จักริน วีแก้ว', 'phone' => '2214 , 2206-7', 'email' => 'wjakkari@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'wjakkari','personID'=>'4310460503'),
                        7 => array('name' => 'อาจารย์เจริญพร บัวแย้ม', 'phone' => '2279 , 2206-7', 'email' => 'charoenporn.bo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jaranporn','personID'=>'5400000018'),
                        8 => array('name' => 'อาจารย์สุพพัต รุ่งเรืองศิลป์', 'phone' => '2416 , 2206-7', 'email' => 'suppat.ru@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'suppat','personID'=>'5700000046'),
                        9 => array('name' => 'อาจารย์ธีรัช สายชู', 'phone' => '2268 , 2206-7', 'email' => 'theerat.sa@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'theerat','personID'=>'5800000035'),
                    )
                ),
                
                array(
                    "name" => "เทคโนโลยีมัลติมีเดียและแอนิเมชัน",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.ศศิธร รัตนรุ่งโรจน์', 'phone' => '2284 , 2206-7', 'email' => 'rsasitho@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'Sasithon','personID'=>'4900000057'),
                        1 => array('name' => 'อาจารย์ ดร.กาญจน์นัฐฐา ไชยศรียา', 'phone' => '2294 , 2206-7', 'email' => 'csomjit@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'Kannattha','personID'=>'4900000025'),
                        3 => array('name' => 'อาจารย์ปฏิบัติ ปรียาวงศากุล', 'phone' => '2274-2547 , 2206', 'email' => 'patibut.pr@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'Patibut_2','personID'=>'5700000071'),
                        4 => array('name' => 'อาจารย์พรพล ธรรมรงค์รัตน์', 'phone' => '2282 , 2206-7', 'email' => 'pornpon.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pornpon','personID'=>'5300000027'),
                        5 => array('name' => 'อาจารย์วิทยา หอทรัพย์', 'phone' => '2252 , 2206-7', 'email' => 'witthaya.ho@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'witthaya','personID'=>'5600000031'),
                        6 => array('name' => 'อาจารย์เชาวนันท์ ขุนดำ', 'phone' => '2661 , 2206-7', 'email' => 'chaowanan.kh@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chaowanan','personID'=>'5500000046'),
                        7 => array('name' => 'อาจารย์โกสินทร์ กาฬรัตน์', 'phone' => '2274 , 2206-7', 'email' => 'kosin.ka@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kosin','personID'=>'5500000092'),
                    )
                ),
                
                array(
                    "name" => "การจัดการสารสนเทศดิจิทัล",
                    "person" => array(
                        0 => array('name' => 'ผศ.ดิชิตชัย เมตตาริกานนท์', 'phone' => '2267 , 2206-7', 'email' => 'mdichitc@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'mdichitc','personID'=>'4310490322'),
                        1 => array('name' => 'ผศ.ดร.ศิวนาถ นันทพิชัย', 'phone' => '3362 , 3361', 'email' => 'ndecha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ndecha','personID'=>'4111130322'),
                        2 => array('name' => 'ผศ.ดร.สุธัญญา ด้วงอินทร์', 'phone' => '2261 , 2206-7', 'email' => 'dsuthany@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'dsuthany','personID'=>'4620070322'),
                        3 => array('name' => 'อาจารย์ ดร.สัจจารีย์ ศิริชัย', 'phone' => '2264 , 2206-7', 'email' => 'ssatjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ssatjare','personID'=>'3820320322'),
                        4 => array('name' => 'อาจารย์ ดร.นภารัตน์ ชูเกิด', 'phone' => '2271 , 2206-7', 'email' => 'jnaparat@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jnaparat','personID'=>'4520220322'),
                        5 => array('name' => 'อาจารย์คณิตสรณ์ สุริยะไพบูลย์วัฒนา', 'phone' => '2258 , 2206-7', 'email' => 'kanitsorn.su@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kanitsorn','personID'=>'5300000110'),
                        6 => array('name' => 'อาจารย์ยุทธนา เจริญรื่น', 'phone' => '2300 , 2206-7', 'email' => 'jyuttana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jyuttana','personID'=>'4900000065'),
                        7 => array('name' => 'อาจารย์สิริวัจนา แก้วผนึก', 'phone' => '2270 , 2206-7', 'email' => 'ksirivaj@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ksirivaj','personID'=>'5000000032'),
                    )
                ),
                
                array(
                    "name" => "วิศวกรรมซอฟต์แวร์",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.กรัณรัตน์ ธรรมรักษ์', 'phone' => '2565 , 2206-7', 'email' => 'kanchan.th@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'kanchan.th','personID'=>'5300000053'),
                        1 => array('name' => 'ผศ.ดร.ฐิมาพร เพชรแก้ว', 'phone' => '2275 , 2206-7', 'email' => 'pthimapo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pthimapo','personID'=>'4700000090'),
                        2 => array('name' => 'ผศ.อุหมาด หมัดอาด้ำ', 'phone' => '2255 , 2206-7', 'email' => 'muhamard@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'muhamard','personID'=>'3910660322'),
                        3 => array('name' => 'ผศ.เยาวเรศ ศิริสถิตย์กุล', 'phone' => '2272 , 2206', 'email' => 'syaowara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'syaowara','personID'=>'4700000024'),
                        4 => array('name' => 'อาจารย์ ดร.จิตติมา ศังขมณี', 'phone' => '2254 , 2206-7', 'email' => 'sjidtima@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'sjidtima','personID'=>'4120950322'),
                        5 => array('name' => 'อาจารย์ ดร.พุทธิพร ธนธรรมเมธี', 'phone' => '2283 , 2206-7', 'email' => 'putthiporn.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'putthiporn.th','personID'=>'5500000066'),
                    )
                ),
            );
            
            return $data;
        }
        public function getSupport(){
            $data = array(
                array(
                    "name" => "นักวิชาการ",
                    "person" => array(
                        0 => array('name' => 'นายขุนดี หลำสุบ', 'phone' => '2668 , 2206-7', 'email' => 'khundee.la@wu.ac.th', 'rank' => 'การจัดการสารสนเทศ', 'pic' => 'khundee.la','personID'=>'5400000101'),
                        1 => array('name' => 'นายจิรพงศ์ ชูเกื้อ', 'phone' => '2501 , 2502', 'email' => 'cjirapon@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'cjirapon','personID'=>'4900000028'),
                        2 => array('name' => 'นายณัฐชา ศิลากุล', 'phone' => '2547 , 2206-7', 'email' => 'nattacha.si@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'nattacha','personID'=>'5700000011'),
                        3 => array('name' => 'นายปฏิวัติ เกตุเลิศประเสริฐ', 'phone' => '2533 , 2206-7', 'email' => 'kpatiwat@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'kpatiwat','personID'=>'5200000012'),
                        4 => array('name' => 'นายประทีป คงกล้า', 'phone' => '2976', 'email' => 'prateep.ko@wu.ac.th', 'rank' => 'วิศวกรรมซอฟต์แวร์', 'pic' => 'prateep.ko','personID'=>'6000000592'),
                        5 => array('name' => 'ว่าที่ ร.ต.(หญิง)ภัสราภรณ์ แซ่หนา', 'phone' => '2502 , 2206-7', 'email' => 'patsaraporn.sa@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'patsaraporn','personID'=>'5700000003'),
                        6 => array('name' => 'นางสาวสลิลทิพย์ เหมะ', 'phone' => '2667 , 2206-7', 'email' => 'salilthip.he@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'salilthip.he','personID'=>'5500000100'),
                        7 => array('name' => 'นายสิทธิพงษ์ จันทร์ปรุง', 'phone' => '2535 , 2206-7', 'email' => 'sitthipong.jn@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'sitthipong','personID'=>'5400000102'),
                        8 => array('name' => 'นายอาทิตย์ รักษ์วงศ์', 'phone' => '2501 , 2502', 'email' => 'rartitch@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'rartitch','personID'=>'4900000029'),
                        /*9 => array('name' => 'นางสาวคอซีหม๊ะ มาแมง', 'phone' => '2669 , 2206-7', 'email' => 'khorseemah.ma@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'khorseemah.ma','personID'=>''),*/
                        10 => array('name' => 'นางสาวจารุวรรณ ลักษณจันทร์', 'phone' => '2667 , 2206-7', 'email' => 'jaruwan.la@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'jaruwan.la','personID'=>'5600000042'),
                        11 => array('name' => 'นายปิยะ คะหะปะนะ', 'phone' => '2535 , 2206-7', 'email' => 'piya.kh@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'piya','personID'=>'5700000050'),
                    )
                ),
                
                array(
                    "name" => "เจ้าหน้าที่บริหารงานทั่วไป",
                    "person" => array(
                        0 => array('name' => 'นางสาวปิยะนุช จิตตระ', 'phone' => '2400 , 2212', 'email' => 'jpiyanut@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_04','personID'=>'4900000012'),
                        1 => array('name' => 'นางสาวฤดียา พัฒนแก้ว', 'phone' => '2206 , 2207', 'email' => 'prudiya@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_02','personID'=>'4021030322'),
                        2 => array('name' => 'นางสาวศรินนา จำปากลาย', 'phone' => '2212 , 2212', 'email' => 'jjarinna@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_05','personID'=>'4900000014'),
                        3 => array('name' => 'นางออนอุไร แก้วอุดม', 'phone' => '2451 , 2206-7', 'email' => 'bonourai@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_03','personID'=>'4520360502'),
                        4 => array('name' => 'นางสาวอัมพลิกา นุ่นสังข์', 'phone' => '2204 , 2240', 'email' => 'aumpalika.nu@wu.ac.th', 'rank' => 'พนักงานธุรการ', 'pic' => 'MIT_06','personID'=>'5600000056'),
                        
                    )
                ),
                
                array(
                    "name" => "นายช่างเทคนิค",
                    "person" => array(
                        0 => array('name' => 'นายทรงวุธ สองพิมพ์', 'phone' => '2501 , 2502', 'email' => 'ssongwut@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'ssongwut','personID'=>'4210500502'),
                        1 => array('name' => 'นายเพชรดนัย ว่องไวรัตนกุล', 'phone' => '2501 , 2502', 'email' => 'wpetchda@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'wpetchda','personID'=>'4310170322'),
                        2 => array('name' => 'นายไพฑูร เทพภักดี', 'phone' => '2501-2 , -', 'email' => 'tphaitoo@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'tphaitoo','personID'=>'4510200321'),
                    )
                ),
            );
            
            return $data;
        }
        
        
        public function getStaffEN(){
            $data = array(
                array(
                    "name" => "Communication Arts",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ธนภร เจริญธัญสกุล', 'phone' => '2265 , 2206-7', 'email' => 'ctanapor@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'ctanapor','personID'=>'4320500322'),
                        1 => array('name' => 'อาจารย์ ดร.ฟารีดา เจะเอาะ', 'phone' => '2295 , 2206', 'email' => 'jfareeda@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jfareeda','personID'=>'5100000076'),
                        2 => array('name' => 'อาจารย์ ดร.อัตนันท์ เตโชพิศาลวงศ์', 'phone' => '3811 2657 , 3803 2206', 'email' => 'attanan.ta@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'attanan','personID'=>'5500000048'),
                        3 => array('name' => 'อาจารย์บุศรินทร์ นันทะเขต', 'phone' => '2253 , 2206-7', 'email' => 'budsarin.na@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'budsarin','personID'=>'5700000073'),
                        4 => array('name' => 'อาจารย์รจเรศ ณรงค์ราช', 'phone' => '2293 , 2206-7', 'email' => 'nrotjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nrotjare','personID'=>'4900000024'),
                        5 => array('name' => 'อาจารย์วรรณรัตน์ นาที', 'phone' => '2256 , 2206', 'email' => 'nwannara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nwannara','personID'=>'4630020347'),
                    )
                ),
                
                array(
                    "name" => "Information Technology",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.สลิล บุญพราหมณ์', 'phone' => '2257 , 2206-7', 'email' => 'bsalin@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'bsalin','personID'=>'4220350322'),
                        1 => array('name' => 'อาจารย์ ดร.ชนันท์กรณ์ จันแดง', 'phone' => '2209 , 2206-7', 'email' => 'chatchanan.ja@mail.wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chanankorn','personID'=>'5500000009'),
                        2 => array('name' => 'อาจารย์ ดร.ณิชนันทน์ กิตติพัฒนบวร', 'phone' => '2281 , 2206', 'email' => 'knichcha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'knichcha','personID'=>'4121460503'),
                        3 => array('name' => 'อาจารย์ ดร.สุภาภรณ์ ใจรังษี', 'phone' => '2276 , 2206-7', 'email' => 'supaporn.ch@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'supaporn','personID'=>'5600000068'),
                        4 => array('name' => 'อาจารย์กาญจนา หฤหรรษพงศ์', 'phone' => '2285 , 2206-7', 'email' => 'hkanjana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'hkanjana','personID'=>'5000000031'),
                        5 => array('name' => 'อาจารย์จงสุข คงเสน', 'phone' => '2259 , 2206-7', 'email' => 'ojongsuk@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ojongsuk','personID'=>'3820400322'),
                        6 => array('name' => 'อาจารย์จักริน วีแก้ว', 'phone' => '2214 , 2206-7', 'email' => 'wjakkari@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'wjakkari','personID'=>'4310460503'),
                        7 => array('name' => 'อาจารย์เจริญพร บัวแย้ม', 'phone' => '2279 , 2206-7', 'email' => 'charoenporn.bo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jaranporn','personID'=>'5400000018'),
                        8 => array('name' => 'อาจารย์สุพพัต รุ่งเรืองศิลป์', 'phone' => '2416 , 2206-7', 'email' => 'suppat.ru@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'suppat','personID'=>'5700000046'),
                        9 => array('name' => 'อาจารย์ธีรัช สายชู', 'phone' => '2268 , 2206-7', 'email' => 'theerat.sa@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'theerat','personID'=>'5800000035'),
                    )
                ),
                
                array(
                    "name" => "Multimedia Technology and Animation",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.ศศิธร รัตนรุ่งโรจน์', 'phone' => '2284 , 2206-7', 'email' => 'rsasitho@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'Sasithon','personID'=>'4900000057'),
                        1 => array('name' => 'อาจารย์ ดร.กาญจน์นัฐฐา ไชยศรียา', 'phone' => '2294 , 2206-7', 'email' => 'csomjit@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'Kannattha','personID'=>'4900000025'),
                        3 => array('name' => 'อาจารย์ปฏิบัติ ปรียาวงศากุล', 'phone' => '2274-2547 , 2206', 'email' => 'patibut.pr@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'Patibut_2','personID'=>'5700000071'),
                        4 => array('name' => 'อาจารย์พรพล ธรรมรงค์รัตน์', 'phone' => '2282 , 2206-7', 'email' => 'pornpon.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pornpon','personID'=>'5300000027'),
                        5 => array('name' => 'อาจารย์วิทยา หอทรัพย์', 'phone' => '2252 , 2206-7', 'email' => 'witthaya.ho@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'witthaya','personID'=>'5600000031'),
                        6 => array('name' => 'อาจารย์เชาวนันท์ ขุนดำ', 'phone' => '2661 , 2206-7', 'email' => 'chaowanan.kh@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chaowanan','personID'=>'5500000046'),
                        7 => array('name' => 'อาจารย์โกสินทร์ กาฬรัตน์', 'phone' => '2274 , 2206-7', 'email' => 'kosin.ka@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kosin','personID'=>'5500000092'),
                    )
                ),
                
                array(
                    "name" => "Digital Information Management",
                    "person" => array(
                        0 => array('name' => 'ผศ.ดิชิตชัย เมตตาริกานนท์', 'phone' => '2267 , 2206-7', 'email' => 'mdichitc@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'mdichitc','personID'=>'4310490322'),
                        1 => array('name' => 'ผศ.ดร.ศิวนาถ นันทพิชัย', 'phone' => '3362 , 3361', 'email' => 'ndecha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ndecha','personID'=>'4111130322'),
                        2 => array('name' => 'ผศ.ดร.สุธัญญา ด้วงอินทร์', 'phone' => '2261 , 2206-7', 'email' => 'dsuthany@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'dsuthany','personID'=>'4620070322'),
                        3 => array('name' => 'อาจารย์ ดร.สัจจารีย์ ศิริชัย', 'phone' => '2264 , 2206-7', 'email' => 'ssatjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ssatjare','personID'=>'3820320322'),
                        4 => array('name' => 'อาจารย์ ดร.นภารัตน์ ชูเกิด', 'phone' => '2271 , 2206-7', 'email' => 'jnaparat@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jnaparat','personID'=>'4520220322'),
                        5 => array('name' => 'อาจารย์คณิตสรณ์ สุริยะไพบูลย์วัฒนา', 'phone' => '2258 , 2206-7', 'email' => 'kanitsorn.su@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kanitsorn','personID'=>'5300000110'),
                        6 => array('name' => 'อาจารย์ยุทธนา เจริญรื่น', 'phone' => '2300 , 2206-7', 'email' => 'jyuttana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jyuttana','personID'=>'4900000065'),
                        7 => array('name' => 'อาจารย์สิริวัจนา แก้วผนึก', 'phone' => '2270 , 2206-7', 'email' => 'ksirivaj@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ksirivaj','personID'=>'5000000032'),
                    )
                ),
                
                array(
                    "name" => "Software Engineering",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.กรัณรัตน์ ธรรมรักษ์', 'phone' => '2565 , 2206-7', 'email' => 'kanchan.th@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'kanchan.th','personID'=>'5300000053'),
                        1 => array('name' => 'ผศ.ดร.ฐิมาพร เพชรแก้ว', 'phone' => '2275 , 2206-7', 'email' => 'pthimapo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pthimapo','personID'=>'4700000090'),
                        2 => array('name' => 'ผศ.อุหมาด หมัดอาด้ำ', 'phone' => '2255 , 2206-7', 'email' => 'muhamard@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'muhamard','personID'=>'3910660322'),
                        3 => array('name' => 'ผศ.เยาวเรศ ศิริสถิตย์กุล', 'phone' => '2272 , 2206', 'email' => 'syaowara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'syaowara','personID'=>'4700000024'),
                        4 => array('name' => 'อาจารย์ ดร.จิตติมา ศังขมณี', 'phone' => '2254 , 2206-7', 'email' => 'sjidtima@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'sjidtima','personID'=>'4120950322'),
                        5 => array('name' => 'อาจารย์ ดร.พุทธิพร ธนธรรมเมธี', 'phone' => '2283 , 2206-7', 'email' => 'putthiporn.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'putthiporn.th','personID'=>'5500000066'),
                    )
                ),
            );
            
            return $data;
        }
        public function getSupportEN(){
            $data = array(
                array(
                    "name" => "Academician",
                    "person" => array(
                        0 => array('name' => 'นายขุนดี หลำสุบ', 'phone' => '2668 , 2206-7', 'email' => 'khundee.la@wu.ac.th', 'rank' => 'การจัดการสารสนเทศ', 'pic' => 'khundee.la','personID'=>'5400000101'),
                        1 => array('name' => 'นายจิรพงศ์ ชูเกื้อ', 'phone' => '2501 , 2502', 'email' => 'cjirapon@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'cjirapon','personID'=>'4900000028'),
                        2 => array('name' => 'นายณัฐชา ศิลากุล', 'phone' => '2547 , 2206-7', 'email' => 'nattacha.si@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'nattacha','personID'=>'5700000011'),
                        3 => array('name' => 'นายปฏิวัติ เกตุเลิศประเสริฐ', 'phone' => '2533 , 2206-7', 'email' => 'kpatiwat@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'kpatiwat','personID'=>'5200000012'),
                        4 => array('name' => 'นายประทีป คงกล้า', 'phone' => '2976', 'email' => 'prateep.ko@wu.ac.th', 'rank' => 'วิศวกรรมซอฟต์แวร์', 'pic' => 'prateep.ko','personID'=>'6000000592'),
                        5 => array('name' => 'ว่าที่ ร.ต.(หญิง)ภัสราภรณ์ แซ่หนา', 'phone' => '2502 , 2206-7', 'email' => 'patsaraporn.sa@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'patsaraporn','personID'=>'5700000003'),
                        6 => array('name' => 'นางสาวสลิลทิพย์ เหมะ', 'phone' => '2667 , 2206-7', 'email' => 'salilthip.he@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'salilthip.he','personID'=>'5500000100'),
                        7 => array('name' => 'นายสิทธิพงษ์ จันทร์ปรุง', 'phone' => '2535 , 2206-7', 'email' => 'sitthipong.jn@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'sitthipong','personID'=>'5400000102'),
                        8 => array('name' => 'นายอาทิตย์ รักษ์วงศ์', 'phone' => '2501 , 2502', 'email' => 'rartitch@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'rartitch','personID'=>'4900000029'),
                        /*9 => array('name' => 'นางสาวคอซีหม๊ะ มาแมง', 'phone' => '2669 , 2206-7', 'email' => 'khorseemah.ma@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'khorseemah.ma','personID'=>''),*/
                        10 => array('name' => 'นางสาวจารุวรรณ ลักษณจันทร์', 'phone' => '2667 , 2206-7', 'email' => 'jaruwan.la@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'jaruwan.la','personID'=>'5600000042'),
                        11 => array('name' => 'นายปิยะ คะหะปะนะ', 'phone' => '2535 , 2206-7', 'email' => 'piya.kh@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'piya','personID'=>'5700000050'),
                    )
                ),
                
                array(
                    "name" => "Administration",
                    "person" => array(
                        0 => array('name' => 'นางสาวปิยะนุช จิตตระ', 'phone' => '2400 , 2212', 'email' => 'jpiyanut@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_04','personID'=>'4900000012'),
                        1 => array('name' => 'นางสาวฤดียา พัฒนแก้ว', 'phone' => '2206 , 2207', 'email' => 'prudiya@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_02','personID'=>'4021030322'),
                        2 => array('name' => 'นางสาวศรินนา จำปากลาย', 'phone' => '2212 , 2212', 'email' => 'jjarinna@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_05','personID'=>'4900000014'),
                        3 => array('name' => 'นางออนอุไร แก้วอุดม', 'phone' => '2451 , 2206-7', 'email' => 'bonourai@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'MIT_03','personID'=>'4520360502'),
                        4 => array('name' => 'นางสาวอัมพลิกา นุ่นสังข์', 'phone' => '2204 , 2240', 'email' => 'aumpalika.nu@wu.ac.th', 'rank' => 'พนักงานธุรการ', 'pic' => 'MIT_06','personID'=>'5600000056'),
                        
                    )
                ),
                
                array(
                    "name" => "Technician",
                    "person" => array(
                        0 => array('name' => 'นายทรงวุธ สองพิมพ์', 'phone' => '2501 , 2502', 'email' => 'ssongwut@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'ssongwut','personID'=>'4210500502'),
                        1 => array('name' => 'นายเพชรดนัย ว่องไวรัตนกุล', 'phone' => '2501 , 2502', 'email' => 'wpetchda@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'wpetchda','personID'=>'4310170322'),
                        2 => array('name' => 'นายไพฑูร เทพภักดี', 'phone' => '2501-2 , -', 'email' => 'tphaitoo@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'tphaitoo','personID'=>'4510200321'),
                    )
                ),
            );
            
            return $data;
        }

    }

?>
