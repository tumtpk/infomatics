<?php

    class PersonModel extends CI_Model {


        public function getPerson(){
            $data = array(
                array(
                    "name" => "นิเทศศาสตร์์",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ธนภร เจริญธัญสกุล', 'phone' => '2265 , 2206-7', 'email' => 'ctanapor@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'ctanapor'),
                        1 => array('name' => 'อาจารย์ ดร.ฟารีดา เจะเอาะ', 'phone' => '2295 , 2206', 'email' => 'jfareeda@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jfareeda'),
                        2 => array('name' => 'อาจารย์ ดร.อัตนันท์ เตโชพิศาลวงศ์', 'phone' => '3811 2657 , 3803 2206', 'email' => 'attanan.ta@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'attanan'),
                        3 => array('name' => 'อาจารย์บุศรินทร์ นันทะเขต', 'phone' => '2253 , 2206-7', 'email' => 'budsarin.na@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'budsarin.na'),
                        4 => array('name' => 'อาจารย์รจเรศ ณรงค์ราช', 'phone' => '2293 , 2206-7', 'email' => 'nrotjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nrotjare'),
                        5 => array('name' => 'อาจารย์วรรณรัตน์ นาที', 'phone' => '2256 , 2206', 'email' => 'nwannara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'nwannara'),
                    )
                ),
                
                array(
                    "name" => "เทคโนโลยีสารสนเทศ",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.สลิล บุญพราหมณ์', 'phone' => '2257 , 2206-7', 'email' => 'bsalin@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'bsalin'),
                        1 => array('name' => 'อาจารย์ ดร.ชนันท์กรณ์ จันแดง', 'phone' => '2209 , 2206-7', 'email' => 'chanankorn.ja@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chanankorn'),
                        2 => array('name' => 'อาจารย์ ดร.ณิชนันทน์ กิตติพัฒนบวร', 'phone' => '2281 , 2206', 'email' => 'knichcha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'knichcha'),
                        3 => array('name' => 'อาจารย์ ดร.สุภาภรณ์ ใจรังษี', 'phone' => '2276 , 2206-7', 'email' => 'supaporn.ch@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'supaporn'),
                        4 => array('name' => 'อาจารย์กาญจนา หฤหรรษพงศ์', 'phone' => '2285 , 2206-7', 'email' => 'hkanjana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'hkanjana'),
                        5 => array('name' => 'อาจารย์จงสุข คงเสน', 'phone' => '2259 , 2206-7', 'email' => 'ojongsuk@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ojongsuk'),
                        6 => array('name' => 'อาจารย์จักริน วีแก้ว', 'phone' => '2214 , 2206-7', 'email' => 'wjakkari@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'wjakkari'),
                        7 => array('name' => 'อาจารย์เจริญพร บัวแย้ม', 'phone' => '2279 , 2206-7', 'email' => 'charoenporn.bo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jaranporn'),
                        8 => array('name' => 'อาจารย์สุพพัต รุ่งเรืองศิลป์', 'phone' => '2416 , 2206-7', 'email' => 'suppat.ru@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'suppat'),
                        9 => array('name' => 'อาจารย์ธีรัช สายชู', 'phone' => '', 'email' => 'theerat.sa@wu.ac.th', 'rank' => 'อาจารย์์', 'pic' => 'theerat'),
                    )
                ),
                
                array(
                    "name" => "เทคโนโลยีมัลติมีเดียและแอนิเมชัน",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.ศศิธร รัตนรุ่งโรจน์', 'phone' => '2284 , 2206-7', 'email' => 'rsasitho@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'rsasitho'),
                        1 => array('name' => 'อาจารย์ ดร.กาญจน์นัฐฐา ไชยศรียา', 'phone' => '2294 , 2206-7', 'email' => 'csomjit@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'csomjit'),
                        2 => array('name' => 'อาจารย์ ดร.สุภาภรณ์ ใจรังษี', 'phone' => '', 'email' => 'supaporn.ch@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => ''),
                        3 => array('name' => 'อาจารย์ปฏิบัติ ปรียาวงศากุล', 'phone' => '2274-2547 , 2206', 'email' => 'patibut.pr@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'patibut'),
                        4 => array('name' => 'อาจารย์พรพล ธรรมรงค์รัตน์', 'phone' => '2282 , 2206-7', 'email' => 'pornpon.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pornpon'),
                        5 => array('name' => 'อาจารย์วิทยา หอทรัพย์', 'phone' => '2252 , 2206-7', 'email' => 'witthaya.ho@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'witthaya'),
                        6 => array('name' => 'อาจารย์เชาวนันท์ ขุนดำ', 'phone' => '2661 , 2206-7', 'email' => 'chaowanan.kh@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'chaowanan'),
                        7 => array('name' => 'อาจารย์โกสินทร์ กาฬรัตน์', 'phone' => '2274 , 2206-7', 'email' => 'kosin.ka@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kosin'),
                    )
                ),
                
                array(
                    "name" => "การจัดการสารสนเทศดิจิทัล",
                    "person" => array(
                        0 => array('name' => 'ผศ.ดิชิตชัย เมตตาริกานนท์', 'phone' => '2267 , 2206-7', 'email' => 'mdichitc@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'mdichitc'),
                        1 => array('name' => 'ผศ.ดร.ศิวนาถ นันทพิชัย', 'phone' => '3362 , 3361', 'email' => 'ndecha@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ndecha'),
                        2 => array('name' => 'ผศ.ดร.สุธัญญา ด้วงอินทร์', 'phone' => '2261 , 2206-7', 'email' => 'dsuthany@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'dsuthany'),
                        3 => array('name' => 'อาจารย์ ดร.สัจจารีย์ ศิริชัย', 'phone' => '2264 , 2206-7', 'email' => 'ssatjare@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ssatjare'),
                        4 => array('name' => 'อาจารย์ ดร.นภารัตน์ ชูเกิด', 'phone' => '2271 , 2206-7', 'email' => 'jnaparat@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jnaparat'),
                        5 => array('name' => 'อาจารย์คณิตสรณ์ สุริยะไพบูลย์วัฒนา', 'phone' => '2258 , 2206-7', 'email' => 'kanitsorn.su@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'kanitsorn'),
                        6 => array('name' => 'อาจารย์ยุทธนา เจริญรื่น', 'phone' => '2300 , 2206-7', 'email' => 'jyuttana@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'jyuttana'),
                        7 => array('name' => 'อาจารย์สิริวัจนา แก้วผนึก', 'phone' => '2270 , 2206-7', 'email' => 'ksirivaj@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'ksirivaj'),
                    )
                ),
                
                array(
                    "name" => "วิศวกรรมซอฟต์แวร์",
                    "person" => array(
                        0 => array('name' => 'อาจารย์ ดร.กรัณรัตน์ ธรรมรักษ์', 'phone' => '2565 , 2206-7', 'email' => 'kanchan.th@wu.ac.th', 'rank' => 'หัวหน้าสาขา', 'pic' => 'kanchan.th'),
                        1 => array('name' => 'ผศ.ดร.ฐิมาพร เพชรแก้ว', 'phone' => '2275 , 2206-7', 'email' => 'pthimapo@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'pthimapo'),
                        2 => array('name' => 'ผศ.เยาวเรศ ศิริสถิตย์กุล', 'phone' => '2272 , 2206', 'email' => 'syaowara@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'syaowara'),
                        3 => array('name' => 'ผศ.อุหมาด หมัดอาด้ำ', 'phone' => '2255 , 2206-7', 'email' => 'muhamard@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'muhamard'),
                        4 => array('name' => 'อาจารย์ ดร.จิตติมา ศังขมณี', 'phone' => '2254 , 2206-7', 'email' => 'sjidtima@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'sjidtima'),
                        5 => array('name' => 'อาจารย์ ดร.พุทธิพร ธนธรรมเมธี', 'phone' => '2283 , 2206-7', 'email' => 'putthiporn.th@wu.ac.th', 'rank' => 'อาจารย์', 'pic' => 'putthiporn.th'),
                    )
                ),
                
                array(
                    "name" => "นักวิชาการ",
                    "person" => array(
                        0 => array('name' => 'นายขุนดี หลำสุบ', 'phone' => '2668 , 2206-7', 'email' => 'khundee.la@wu.ac.th', 'rank' => 'การจัดการสารสนเทศ', 'pic' => 'khundee.la'),
                        1 => array('name' => 'นายจิรพงศ์ ชูเกื้อ', 'phone' => '2501 , 2502', 'email' => 'cjirapon@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'cjirapon'),
                        2 => array('name' => 'นายณัฐชา ศิลากุล', 'phone' => '2547 , 2206-7', 'email' => 'nattacha.si@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'nattacha'),
                        3 => array('name' => 'นายปฏิวัติ เกตุเลิศประเสริฐ', 'phone' => '2533 , 2206-7', 'email' => 'kpatiwat@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'kpatiwat'),
                        4 => array('name' => 'นายประทีป คงกล้า', 'phone' => '2976', 'email' => 'prateep.ko@wu.ac.th', 'rank' => 'วิศวกรรมซอฟต์แวร์', 'pic' => 'prateep.ko'),
                        5 => array('name' => 'ว่าที่ ร.ต.(หญิง)ภัสราภรณ์ แซ่หนา', 'phone' => '2502 , 2206-7', 'email' => 'patsaraporn.sa@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'patsaraporn'),
                        6 => array('name' => 'นางสาวสลิลทิพย์ เหมะ', 'phone' => '2667 , 2206-7', 'email' => 'salilthip.he@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'salilthip.he'),
                        7 => array('name' => 'นายสิทธิพงษ์ จันทร์ปรุง', 'phone' => '2535 , 2206-7', 'email' => 'sitthipong.jn@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'sitthipong'),
                        8 => array('name' => 'นายอาทิตย์ รักษ์วงศ์', 'phone' => '2501 , 2502', 'email' => 'rartitch@wu.ac.th', 'rank' => 'นิเทศศาสตร์', 'pic' => 'rartitch'),
                        9 => array('name' => 'นางสาวคอซีหม๊ะ มาแมง', 'phone' => '2669 , 2206-7', 'email' => 'khorseemah.ma@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'khorseemah.ma'),
                        10 => array('name' => 'นางสาวจารุวรรณ ลักษณจันทร์', 'phone' => '2667 , 2206-7', 'email' => 'jaruwan.la@wu.ac.th', 'rank' => 'เทคโนโลยีสารสนเทศ', 'pic' => 'jaruwan.la'),
                        11 => array('name' => 'นายปิยะ คะหะปะนะ', 'phone' => '2535 , 2206-7', 'email' => 'piya.kh@wu.ac.th', 'rank' => 'เทคโนโลยีมัลติมีเดียและแอนิเมชัน', 'pic' => 'piya'),
                    )
                ),
                
                array(
                    "name" => "เจ้าหน้าที่บริหารงานทั่วไป",
                    "person" => array(
                        0 => array('name' => 'นางสาวปิยะนุช จิตตระ', 'phone' => '2455 , 2212', 'email' => 'jpiyanut@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'jpiyanut'),
                        1 => array('name' => 'นางสาวฤดียา พัฒนแก้ว', 'phone' => '2206 , 2207', 'email' => 'prudiya@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'prudiya'),
                        2 => array('name' => 'นางสาวศรินนา จำปากลาย', 'phone' => '2204 , 2212', 'email' => 'jjarinna@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'jjarinna'),
                        3 => array('name' => 'นางออนอุไร แก้วอุดม', 'phone' => '2451 , 2206-7', 'email' => 'bonourai@wu.ac.th', 'rank' => 'เจ้าหน้าที่บริหารงานทั่วไป', 'pic' => 'bonourai'),
                    )
                ),
                
                array(
                    "name" => "นายช่างเทคนิค",
                    "person" => array(
                        0 => array('name' => 'นายทรงวุธ สองพิมพ์', 'phone' => '2501 , 2502', 'email' => 'ssongwut@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'ssongwut'),
                        1 => array('name' => 'นายเพชรดนัย ว่องไวรัตนกุล', 'phone' => '2501 , 2502', 'email' => 'wpetchda@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'wpetchda'),
                        2 => array('name' => 'นายไพฑูร เทพภักดี', 'phone' => '2501-2 , -', 'email' => 'tphaitoo@wu.ac.th', 'rank' => 'นายช่างเทคนิค', 'pic' => 'tphaitoo'),
                    )
                ),
           );
                
            return $data;
        }

    }

?>
