<?php
require_once('member.php');
require_once('other.php');
require_once('review.php');
require_once('user.php');

$SK2018 = new Member('hocha', '東北大学教育学部教育科学科3年'
, 'img/SK2018.jpg',
'2016年前期試験','秋田県立横手高校',
'教育・地方格差解消・国際交流',
'教育行政を学んでいます。地域差や経済格差によって教育を受ける機会に違いが出ないようにするためにはどうすればいいかを学びたいと思い、この専門分野を選びました。',
'留学生支援団体と高校生支援団体に入っています。留学生の友達をつくって様々な価値観にふれたかったのと、自身が高校生のときに将来を1人で考えることが大変だったので少しでもそのお手伝いをしたいと思ったからです。',
'地域間の情報格差、教育格差を無くしたいと思っています。',
'目の前の勉強も大切ですが、それより大切なのは自分の将来、やりたいことを考えることです。それを考えることで目の前の勉強へのやる気もものすごくアップしますよ！',
'得意科目:英語<br>
文法を1番大切にしました。それがひと段落したら英熟語の暗記をしました。英単語はプラスかマイナスかのイメージをもつこと、また実際の問題を解きながら分からなかったものを覚えていく方法がおススメです！',
'苦手科目:数学<br>
図形系は得意でしたが数式系は苦手意識があったので学校で配られた問題集以外には手を出さずに、とにかく教科書の例題・問題を何周もしました。単なる公式の暗記ではなく、なぜその公式が導かれるのかという理論を理解することで、応用問題も解きやすくなったと思います！');

// $SY2018 = new Member('S.Y', '東北大学工学部化学バイオ工学科1年', 'img/SY2018.jpg',
// '2018年AOⅡ期','福島県立福島南高等学校',
// '私の学科は4年生になる特に研究室配属があるので、まだ専攻は決まっていません。数学や化学、物理学、生物学というように、自然科学全般の基礎分野を満遍なく学んでいます。',
// '東北大学生協学生委員会に所属しています。購買店舗や食堂を改善し、生協組合員(教授、学生など)の人たちが過ごしやすい環境作りや、新入生向けに、welcome partyなどをしています。',
// '大学で学問以外にも、学生生活をする中で、多くにことを経験して、失敗を恐れず、強いメンタルを持っている人になっていたいものです。',
// '高校生でしか経験できないことを思う存分やって、達成感を味わってください。進路はその後です。まずは今を全力で楽しんで！！');

// $KN2018 = new Member('K.N', '東北大学医学部保健学科3年', 'img/KN2018.jpg',
// '2016年AOⅢ期','秋田県立湯沢高等学校',
// '臨床検査技師になるために、検査について学んでいます。
// 高校の時、先輩の医療系インターンシップの報告会に参加して臨床検査技師という仕事を知り、興味を持ちました。
// 大学受験では、薬剤師になりたくて薬学部を目指していましたが、センター試験終了後、点数的に国公立の薬学部は厳しいと思い、興味のあった検査技術科学専攻を受験することに決めました。 患者さんのためになることは変わりなく、病気の診断に関わるような職業なので、とてもやりがいがあると思います。なので、この選択には後悔はありません。',
// '臨床検査技師という職業を初めて知る方もいるかと思いますが、簡単に説明すると、病院や検査センターで患者さんの血液や尿などの検体を検査したり、心電図や超音波検査をしたりする人です。
// 検査には、血液、生化学、病理、微生物、生理、免疫など様々な分野があります。検査技術科学専攻では、医学の基本的な知識やこれらの検査について詳しく学んでいます。

// 現在(2018年)、私は、病院実習を行っています。周りの病院ではやられていないような検査も大学病院では扱っており、学ぶことができるので、よい経験になっています。',
// 'このサイトを運営しているbridgeに所属しています。
// 高校生の時、地方と都市部の教育格差の解消を目的に、高校生対象のキャンパスツアーや地方出張セミナーを行なっている東京大学のFairWindさんの企画に参加し、こういう活動をしている大学生もいるんだと思ったのがきっかけです。東北大学に入学後、似たような活動をしている団体があることを知り、加入しました。

// 企画は、主に平日にあることが多いのですが、講義・実習の関係上、企画自体には参加できないことが多いです。(企画の内容については、当ホームページの活動報告などを参照下さい。)
// そのため、企画の準備やSNSでの質問対応など裏方の仕事をしていることが多いです。
// 企画自体にはなかなか参加できませんが、高校生のためになれるよう、私たちの活動を広めていけるように頑張っています。',
// '大学を決める時、「自分の学力で行ける大学」ではなく、「自分が行きたい大学」を選んでほしいということです。
// できるだけ偏差値の高い大学へ行きたいとか、今の自分じゃこの大学しか行けないなとか考えがちだと思いますが、それだと入学後に後悔してしまう可能性があります。
// 自分が学びたいことは学べるのか、取りたい資格を取れるのか、この大学でしか学べないことはないか、雰囲気は自分にあっているのかなどの視点から、ホームページやパンフレット、できればオープンキャンパスなどで、自分が行きたい大学を見つけてほしいです！');

// $YH2018 = new Member('Y.H', '東北大学理学部物理学科1年', 'img/YH2018.jpg',
// '2018年前期入試',
// '東京都立三田高等学校',
// '大学では主に古典力学、電磁気学を学んでいます。高校時代に1番興味深かったのが物理だったので、気がついたら物理学科を志望していましたが、今は地震関連の方面に進むことを考えています。',
// 'アルバイトやボランティア活動をちょくちょくやっています、どれも高校までの生活では経験してこなかったことばかりなので、楽しめています。',
// '特に定まっていません。',
// '大学生活全般');

// $SJ2018 = new Member('S.J', '東北大学法学部1年', 'img/YH2018.jpg',
// '2018年前期試験','青森県立青森高校',
// '小さい頃から医者か弁護士になろうと思っていて、高校の時に文理選択を悩んだ末に文型にしたので法学部を目指すようになりました。人生において法律を学んでおいて損はないし、もし弁護士になれば稼げるから法律を学ぼうとしたのかもしれません（笑）。大学1年生のうちは法律に関する専門よりも全学（全学部が受けることができる）の一般教養として、様々な学部の授業を主に受けています。',
// '自分はbridge以外にも様々なサークルやゼミに入っていますが、bridgeの他に熱心に取り組んでいるのはアカペラサークル(Del mundo)と模擬裁判実行委員会（通称モギサイ）という法学部の自主ゼミです。自分は小・中・高校とずっとバスケットボールをしてきましたが、大学に入って新たなことにも挑戦したいなぁと思ったのと友達に誘われたのでDel mundoに入りました。本当に最高のサークルです（語彙力）！！
// 　モギサイは忙しい自主ゼミと定評がありますが、その分やりがいがとてもあります。先日自分がキャストとしてモギサイの公演にでましたが、終わった後の感動はこの自主ゼミに入ってよかったという感慨です！',
// '　未だに弁護士になりたいなぁという大雑把な考えを持っていますが、本当にやりたいことが見つかったらそっちに切り替えるかもしれません（笑）。弁護士がだめでやりたいことも見つからないで大学生活が終わったら、年収がいい就職先を見つけようかなぁ.....笑笑',
// '後悔がないよう何事も積極的に！そして今を楽しもう！！');

// $menus = array($SK2018, $SY2018, $KN2018, $YH2018, $SJ2018);
$menus = array($SK2018);

$user1 = new User('yamada', 'male');
$user2 = new User('kitakami', 'female');
$user3 = new User('sato', 'female');
$user4 = new User('sato', 'male');

$users = array($user1, $user2, $user3, $user4);

// 以下の$review1 ~ $review8を削除して、userIdプロパティをセットするためのコードを貼り付けてください
$review1 = new Review($SK2018->getName(), $user1->getId(), '国際交流に興味を持ちました！');
// $review2 = new Review($SY2018->getName(), $user1->getId(), '精力的で憧れます！');
// $review3 = new Review($KN2018->getName(), $user2->getId(), '実験が大変そうです');
// $review4 = new Review($YH2018->getName(), $user2->getId(), '実験が大変そうです');

// $reviews = array($review1, $review2, $review3, $review4);
$reviews = array($review1);

?>