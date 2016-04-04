<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'metalXchange');

define('DB_USER', 'vagrant');

define('DB_PASS', 'vagrant');

require 'db_connect.php';

$items = array(
	array ('is_admin'=>0, 'join_date'=>'2016-01-01', 'first_name'=>'Ozzy', 'last_name'=>'Osbourne', 'user_name'=>'prince_of_darkness', 'password'=>'password01','email'=>'ozzy@sabbath.com', 'band_name'=>'Black Sabbath', 'instrument'=>'vocalist', 'soul_possession'=>0, 'bio'=>'English singer, songwriter, and television personality. He rose to prominence in the early 1970s as the lead vocalist of the band Black Sabbath, widely considered to be the first heavy metal band. Osbourne was fired from Black Sabbath in 1979 and has since had a successful solo career, releasing 11 studio albums, the first seven of which were all awarded multi-platinum certifications in the U.S.', 'image_url'=>'/img/profile/OzzyOsbourne.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-01-02', 'first_name'=>'Tony', 'last_name'=>'Iommi', 'user_name'=>'shredder_of_souls', 'password'=>'password02','email'=>'tony@sabbath.com', 'band_name'=>'Black Sabbath', 'instrument'=>'guitar', 'soul_possession'=>0, 'bio'=>'English guitarist, songwriter and producer. Best known as lead guitarist and founding member of the pioneering heavy metal band Black Sabbath, he has been the band\'s sole continual member and primary composer.', 'image_url'=>'/img/profile/TonyIommi.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-01-03', 'first_name'=>'Geezer', 'last_name'=>'Butler', 'user_name'=>'thumper', 'password'=>'password03','email'=>'geezer@sabbath.com', 'band_name'=>'Black Sabbath', 'instrument'=>'bass guitar', 'soul_possession'=>1, 'bio'=>'Butler lists Jack Bruce of Cream as his biggest influence as a bassist. Iommi described Butler as being "from another planet" in the band\'s early days; he took LSD, wore Indian hippie dresses, and was very peaceful.[3] At the time Black Sabbath was formed, Butler was studying to become an accountant, and this training resulted in him managing the band\'s finances in the early days', 'image_url'=>'/img/profile/GeezerButler.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-01-15', 'first_name'=>'Bill', 'last_name'=>'Ward', 'user_name'=>'krupa_rich', 'password'=>'password04','email'=>'billy@sabbath.com', 'band_name'=>'Black Sabbath', 'instrument'=>'drums', 'soul_possession'=>1, 'bio'=>' In the mid-1960s Ward sang and played drums in a band called The Rest. Ward and guitarist Tony Iommi played together in a band called Mythology, and upon that band\'s dissolution joined vocalist Ozzy Osbourne and bassist Geezer Butler, who had played together in a band called Rare Breed.[6] The new band called themselves Earth, soon to be renamed Black Sabbath.', 'image_url'=>'/img/profile/BillWard.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-01-30', 'first_name'=>'Ronnie James', 'last_name'=>'Dio', 'user_name'=>'not_ozzy', 'password'=>'password05','email'=>'rjd@devilhorns.com', 'band_name'=>'Heaven &amp Hell', 'instrument'=>'vocals', 'soul_possession'=>0, 'bio'=>'American heavy metal vocalist and songwriter. He fronted and/or founded numerous groups including Elf, Rainbow, Black Sabbath, Dio and Heaven & Hell. He is credited with popularizing the "metal horns" hand gesture in metal culture and is known for his medieval themed lyrics. Dio possessed a powerful versatile vocal range capable of singing both hard rock and lighter ballads; according to Rainbow/Deep Purple guitarist Ritchie Blackmore upon hearing him sing, "I felt shivers down my spine."[3][4] Dio sold over 47 million albums throughout his career.', 'image_url'=>'/img/profile/Ronnie-James-Dio.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-02-01', 'first_name'=>'James', 'last_name'=>'Hetfield', 'user_name'=>'gravel_throat', 'password'=>'password06','email'=>'jh@metallica.com', 'band_name'=>'Metallica', 'instrument'=>'guitar/vocals', 'soul_possession'=>1, 'bio'=>'American musician, singer and songwriter known for being the co-founder, lead vocalist, rhythm guitarist and main songwriter for the American heavy metal band Metallica. Hetfield is mainly known for his intricate rhythm playing, but occasionally performs lead guitar duties and some solos, both live and in the studio.', 'image_url'=>'/img/profile/JamesHetfield.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-02-02', 'first_name'=>'Kirk', 'last_name'=>'Hammett', 'user_name'=>'shred_master', 'password'=>'password07','email'=>'kh@metallica.com', 'band_name'=>'Metallica', 'instrument'=>'guitar', 'soul_possession'=>0, 'bio'=>'Lead guitarist and songwriter for the heavy metal band Metallica; has been a member of the band since 1983. Before joining Metallica he formed and named the band Exodus. In 2003, Hammett was ranked 11th on Rolling Stone\'s list of The 100 Greatest Guitarists of All Time.', 'image_url'=>'/img/profile/KirkHammett.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-03-23', 'first_name'=>'Lemmy', 'last_name'=>'Kilmister', 'user_name'=>'ace_of_spades', 'password'=>'password08','email'=>'lemmy@motorhead.com', 'band_name'=>'M&ouml;torhead', 'instrument'=>'bass', 'soul_possession'=>0, 'bio'=>'English musician, singer and songwriter who founded and fronted the rock band Motörhead. His music was one of the foundations of the heavy metal genre.[1] He was known for his appearance (including his friendly mutton chops), his distinctive gravelly voice and distinctive bass playing style. Alongside his music career, he also had many minor roles in film and television.', 'image_url'=>'/img/profile/Lemmy.jpg'),
	array ('is_admin'=>0, 'join_date'=>'2016-03-24', 'first_name'=>'Eddie', 'last_name'=>'the Head', 'user_name'=>'not_a_zombie', 'password'=>'password09','email'=>'eddie@maiden.com', 'band_name'=>'Iron Maiden', 'instrument'=>'mascot', 'soul_possession'=>0, 'bio'=>'Eddie, also known as Eddie the Head, is the mascot for the British heavy metal band Iron Maiden. He is a perennial fixture of the group\'s artwork, appearing in all of their album covers (as well as most of their singles) and in their merchandise, which includes T-shirts, posters and action figures. On top of this, Eddie features in all of the band\'s concerts, as well as in the first-person shooter video game, Ed Hunter, and the upcoming role-playing game, Iron Maiden: Legacy of the Beast.', 'image_url'=>'/img/profile/Eddie.jpg'),
);


$stmt = $dbc->prepare('INSERT INTO users (join_date, first_name, last_name, user_name, password, email, band_name, instrument, soul_possession, bio, image_url) VALUES (:join_date, :first_name, :last_name, :user_name, :password, :email, :band_name, :instrument, :soul_possession, :bio, :image_url)');

foreach ($items as $item) {
    $stmt->bindValue(':join_date',  $item['join_date'],  PDO::PARAM_STR);
    $stmt->bindValue(':first_name',  $item['first_name'],  PDO::PARAM_STR);
    $stmt->bindValue(':last_name',  $item['last_name'],  PDO::PARAM_STR);
    $stmt->bindValue(':user_name',  $item['user_name'],  PDO::PARAM_STR);
    $stmt->bindValue(':password',  $item['password'],  PDO::PARAM_STR);
    $stmt->bindValue(':email',  $item['email'],  PDO::PARAM_STR);
    $stmt->bindValue(':band_name',  $item['band_name'],  PDO::PARAM_STR);
    $stmt->bindValue(':instrument',  $item['instrument'],  PDO::PARAM_STR);
    $stmt->bindValue(':soul_possession',  $item['soul_possession'],  PDO::PARAM_STR);
    $stmt->bindValue(':bio',  $item['bio'],  PDO::PARAM_STR);
    $stmt->bindValue(':image_url',  $item['image_url'],  PDO::PARAM_STR);

    $stmt->execute();
}

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


?>