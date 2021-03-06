SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `famous` (
  `ID` int(3) NOT NULL,
  `Content` varchar(152) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `famous` (`ID`, `Content`) VALUES
(1, '“为什么人可以安定地生活？”因为波函数可以坍缩。“折磨我的是什么？”是无法抗拒的命运。“为什么人不能舍弃希望？”因为波函数可以发散。“你是谁？”我是手儿奈。--《醉步男》'),
(2, '一个人知道自己为什么而活，就可以忍受任何一种生活。——尼采'),
(3, '一个人能够洋洋得意地随著军乐队在四列纵队里行进，单凭这一点就足以使我对他轻视。他所以长了一个大脑，只是出于误会；单单一根脊髓就可满足他的全部需要了。文明国家的这种罪恶的渊薮，应当尽快加以消灭。由命令而产生的勇敢行为，毫无意义的暴行，以及在爱国主义名义下一切可恶的胡闹，所有这些都使我深恶痛绝。——爱因斯坦'),
(4, '一个从未犯错的人是因为他不曾尝试新鲜事物。--爱因斯坦 '),
(5, '一个有政治自由的国家固然不能说就是天堂，一个无政治自由的国家确是地狱了。--蒋廷黻'),
(6, '一切拥有权力的人都有滥用权力为自己谋求私利的倾向；任何专制的国家的教育目的都是在极力降低国民的心智。 --孟德斯鸠'),
(7, '不管我们已经观察到多少只白天鹅，都不能确立“所有天鹅皆为白色”的理论。只要看见一只黑天鹅就可以驳倒它。——卡尔·波普尔'),
(8, '不管民主的定义是什么，没有新闻自由， 民主本身就无法存在。--希尔斯曼'),
(9, '不要向邪恶低头，而是要更勇敢地继续与之对抗。——维吉尔'),
(10, '不要恐慌--《银河系漫游指南》'),
(11, '与其被动地同意别人的看法，不如理智地表示反对，因为如果你信自己的智慧，那么你的异议正表明了更多的赞同。--罗素'),
(12, '与魔鬼战斗的人，应当小心自己不要成为魔鬼。当你远远凝视深渊时，深渊也在凝视你。——尼采'),
(13, '专制制度下只有两种人：一种是哑子，一种是骗子。我看今天的中国就是少数骗子在统治多数哑子。--王亚南'),
(14, '世界上只有两个东西是无限的，一为宇宙，一为人类的愚蠢，我所不能肯定的乃是前者。 --爱因斯坦'),
(15, '世间最庄严的问题是：我能做什么好事？'),
(16, '为眼睛近视者指引道路是很费力的，因为你不能对他说：“看见十哩外的教堂吗?朝这个方向走。——维特根斯坦'),
(17, '也许我是错而你是对，但只有我们一起努力，才能更接近真理。——卡尔·波普尔'),
(18, '人人生而平等--美国独立宣言'),
(19, '人们还往往把真理和错误混在一起去教人，而坚持的却是错误。--歌德'),
(20, '人是天生的政治动物。--亚里士多德'),
(21, '人民不应该怕政府，政府才应该怕人民。'),
(22, '人民大多数比我们想象的要蒙昧得多，所以宣传的本质就是坚持简单和重复。--戈培尔'),
(23, '什么都比不上厄运更能磨练人的德性。——莎士比亚'),
(24, '从前的愚民政策是不许人民受教育，现代愚民政策是只许人民受某一种教育。不受教育的人，因为不识字，上人的当，受教育的人，因为识了字，上印刷品的当。--钱钟书'),
(25, '以术治国，政以贿成，吏治日坏，民生多艰'),
(26, '以眼还眼，世界只会更盲目。--甘地'),
(27, '任何人均有其价值'),
(28, '任何有可能出错的事将会出错--墨菲定理'),
(29, '会玩的人才会学'),
(30, '你不问我，我就不会说谎话。'),
(31, '你在活着的同时，也在学习着，无论如何，你活着。--道格拉斯·亚当斯'),
(32, '你自己的代码如果超过6个月不看，再看的时候也一样像是别人写--伊格尔森定律'),
(33, '公安怎样公，猪公、狗公、乌龟公，公心何在？公理何存？每事假公图利禄；公局什么 局，酒局、肉局、大烟局，局内者欢，局外者苦，几时结局得安宁！'),
(34, '具有新想法的人在其想法实现之前是个怪人。'),
(35, '冬天已经到来，春天还会远吗？--雪莱'),
(36, '别向医生和律师提供错误的消息。'),
(37, '千里之行始于足下，九层之台起于垒土。'),
(38, '发现可能性的界限的唯一办法就是越过这个界限，到不可能中去。--阿瑟·克拉克'),
(39, '只有两种编程语言：一种是天天挨骂的，另一种是没人用--Bjarne Stroustrup'),
(40, '只要有了和平、低税收和宽容的司法当局，一个国家要达到最高富裕水平不需要其它东西。——亚当·斯密'),
(41, '哪里没有财产权，哪里就没有正义。——哈耶克'),
(42, '哪里没有财产权，哪里就没有正义。--弗里德里克·哈耶克'),
(43, '善待他人，即是最善待自己。'),
(44, '喜爱孤独者，非神即兽。--亚里士多德'),
(45, '国家是为人而建立，而人不是为国家而生存。--爱因斯坦'),
(46, '国家是危险的机器--华盛顿'),
(47, '在人人自危的时代，他不应当因为选择了过不动感情的犬儒式的冷漠生活....不问世事的生活而受到责备....身为政府的批评者，一个人越是沉沦放荡，他就越无害；他越是无害，政府就越喜欢；政府越喜欢，他就越安全。——林语堂'),
(48, '在所有的禁欲道德里，人把自己的一部分视为神，加以崇拜，因此被迫把其他部分加以恶魔化。——尼采'),
(49, '在民主和独裁的斗争中，纸上的宪法敌不过独裁者的刺刀。——林语堂'),
(50, '在认识一切事物之后，人才能认识自己，因为事物仅仅是人的界限。——尼采'),
(51, '在这个世界上我只确定一件事。那就是人确定的事情越少越好。--毛姆'),
(52, '在b进位制中，以数n起头的数出现的机率为logb(n + 1) ? logb(n)--本福特定律'),
(53, '坚信比谎言更是真理的敌人。——尼采'),
(54, '大胆的假设，小心的求证；认真的做事，严肃的做人。 --胡适'),
(55, '天地不仁，以万物为刍狗；圣人不仁，以百姓为刍狗。 --老子'),
(56, '太阳绝不为它所做的善事后悔，也从不指望任何报酬。'),
(57, '如果你怀疑自己，那么你的立足点确实不稳固了。'),
(58, '如果你想走到高处，就要使用自己的两条腿！不要让别人把你抬到高处；不要坐在别人的背上和头上。 --尼采·F.W.'),
(59, '如果你点燃了真理的烛光，追求真理的人们就能够发现你。——路德维希·冯·米塞斯'),
(60, '如果我们过于爽快地承认失败，就可能使自己发觉不了我们非常接近于正确。——卡尔·波普尔'),
(61, '宗教上最深的误解——认为坏人没有宗教。——尼采'),
(62, '实力永远意味着责任和危险。 -- 罗斯福. T.'),
(63, '实现明天理想的唯一障碍是今天的疑虑。'),
(64, '对他们伟大领袖的无情，是一个民族强大的表现--普鲁塔克'),
(65, '对骄傲的人不要谦逊，对谦逊的人不要骄傲。--托玛斯·杰弗逊'),
(66, '尊严不值钱，却是我唯一真正拥有的！'),
(67, '尊重人不应该胜于尊重真理。--柏拉图'),
(68, '就算它工作不正常也别担心。如果一切正常，你早该失业了--Mosher的软件工程定律'),
(69, '工作撵跑三个魔鬼：无聊、堕落和贫穷。'),
(70, '工欲善其事，必先利其器。居是邦，事其大夫之贤者，友其士之仁者。 '),
(71, '已经集中起来的权力不会由于创造它的那些人的良好愿望而变为无害。--弗里德曼'),
(72, '异议是爱国的最高形式 --托马斯·杰弗逊'),
(73, '当某人告诉你：“不是钱，而是原则问题”时，十有八九就是钱的问题——胡巴尔德'),
(74, '彼窃钩者诛，窃国者为诸侯。——庄子'),
(75, '恐惧比利剑更伤人--《冰与火之歌》'),
(76, '想了解一个人的个性，那就赋予他权力。--林肯'),
(77, '想在善和恶中作造物主的人，必须首先是个破坏者，并砸烂一切价值。也就是说，最大的恶属于最高的善。不过，后者是创造性的善。--尼采'),
(78, '想想看吧，已经有一百万只猴子坐在一百万台打字机旁，可Usenet就是比不上莎士比。--Blair Houghton'),
(79, '成功的骗子，不必再说谎以求生，因为被骗的人，全成为他的拥护者，我再说什么也是枉然。--莎士比亚'),
(80, '我不像你一样是一个机器人，让磁盘把我淹没，除非它们是小甜饼，并且只在嘴里。'),
(81, '我们所需要的，不是天才，不是玩世不恭者，不是愤世嫉俗者，不是机敏的策略家，而是真挚的，坦诚的人。要使我们能够找到重返纯朴与真诚的道路，我们的精神包容量足够地充分，我们自身的正直足够地问心无愧了吗？--朋霍费尔'),
(82, '我们是微软。反抗是徒劳的。你会被同化的'),
(83, '我向星星许了个愿。我并不是真的相信它，但是反正也是免费的，而且也没有证据证明它不灵。--加菲猫'),
(84, '我并不同意你的观点，但是我誓死捍卫你说话的权利——伏尔泰'),
(85, '我每天只吃四类食物：早饭、午饭、晚饭和零食。--加菲猫'),
(86, '我注意过，即便是那些声称一切都是命中注定的而且我们无力改变的人，在过马路之前都会左右看。--史提芬·霍金'),
(87, '我爱你，与你无关。--歌德'),
(88, '我认为低智，偏执，思想贫乏是最大的邪恶。而聪明，达观，多知的人，比之别样的人更堪信任。--王小波'),
(89, '我讨厌星期一。--加菲猫'),
(90, '战争即和平，自由即奴役，无知即力量。--奥威尔'),
(91, '所有动物生来平等，但有些动物比其他动物更平等。--奥威尔'),
(92, '所有小说写的都是真事。怕吓着你们才叫小声说。 --王朔'),
(93, '所谓爱国心，是指你既生为这个国家的国民，对于这个国家，当比对其他一切的国家信仰得高贵优越。--萧伯纳'),
(94, '所谓现实只不过是一个错觉，虽然这个错觉非常持久。--爱因斯坦 '),
(95, '所谓科学的论辩，从总体上来说则是没有多大效果的，更不用说论辩几乎总是各持己见的这个事实。——弗洛伊德'),
(96, '所谓自由就是可以说二加二等于四的自由。--奥威尔'),
(97, '手段的不纯洁，必然导致目的的不纯洁。--甘地'),
(98, '把理想运用到真实的事物上，便有了文明。'),
(99, '政府有无限种手段来制造垄断——穆瑞·罗斯巴德'),
(100, '明白事理的人使自己适应世界；不明事理的人想使世界适应自己。所以，所有进步都要靠不明事理的人。--萧伯纳'),
(101, '有两样重要产品出自伯克利：LSD和BSD*。我们不相信这是个巧合。--Jeremy S. Anderson'),
(102, '极权统治的实质就是消除一切自发的政治生活，把社会中的人分裂成一个个的原子，其目的在于使每个人只能孤立地面对整个制度，从而使人感到形单影只，而且往往茫然若失，敢怒不敢言。--米奇尼克'),
(103, '柔和回答， 使怒消退。 言语暴戾， 触动怒气——箴言篇 15:1'),
(104, '死会引人哭泣。虽则如此，人生的三分之一却在睡眠中打发掉了。--拜伦'),
(105, '每一个帝国在即将建立的时候，都富于朝气，希望和成功的光芒；然而一旦皇帝登基，这一切都会荡然无存，留下的只有象征腐朽和无意义的各种仪式典礼。--《沙丘》'),
(106, '每个人都受两种教育，一种来自别人，另一种更重要的是来自自己。--爱德华·吉本'),
(107, '民主不能从上面给予，而必须从下面争取而来——给予的东西可以收回，但争取来的东西却收不回。——方励之'),
(108, '没有一个人的记性，好到可以作个成功的说谎者——林肯'),
(109, '没有人足够完美，以至可以未经别人同意就支配别人。--林肯'),
(110, '法律必须被信仰，否则形同虚设。--伯尔曼'),
(111, '活了一百年却只能记住30M字节是荒谬的。你知道，这比一张压缩盘还要少。人类境况正在变得日趋退。--Marvin Minsky'),
(112, '渴求美德而非奖赏。'),
(113, '爱国主义就是积极地为了微不足道的原因杀人并被杀。——勃特兰·罗素'),
(114, '爱国主义是一种有害的、精神错乱的白痴形式。--萧伯纳'),
(115, '爱国主义：一堆随时可以被任何野心家所点燃，去照亮他的名字的易燃垃圾。 ——安卜罗斯·皮尔斯'),
(116, '爱国者的责任就是保护国家不受政府侵犯——托马斯·潘恩'),
(117, '现在有人对你们说：“牺牲你们个人的自由，去求国家的自由！”我对你们说：“争取个人的自由，就是争取国家的自由；争取个人的人格，就是争取国家的国格！自由平等的国家不是一群奴才建造得起来的！”--胡适'),
(118, '疑人先自疑，律人先律己'),
(119, '百善孝为先，论心不论迹，论迹贫家无孝子；万恶淫为首，论迹不论心，论心世上少完人'),
(120, '真正的无知不是知识的缺乏，而是拒绝获取知识。——卡尔·波普尔'),
(121, '真理是伟大的，如果让她自行其道的话，必然会盛行于世。真理是谬误的强劲克星，她无所畏惧，所向无敌，惟有害怕人们解除她的天然武器——自由地论争和思辨；当批判被允许自由进行的时候，谬误也就没什么可怕了--托玛斯·杰弗逊'),
(122, '真理是时间之产物，而不是权威之产物 --弗兰西斯·培根'),
(123, '硬件:计算机系统中可被踢的部分。--Jeff Pesis'),
(124, '科学必须始于神话，并伴随着对神话的批判。——卡尔·波普尔'),
(125, '程序员的问题是你无法预料他在做什么，直到为时已晚--Seymour Cray'),
(126, '管得最少，就是最好的政府。-- 大卫·梭罗'),
(127, '罗马帝国灭亡的其中一个主要原因是他们没有0 - 这样他们就没法给自己的C程序指明成功退出的路--Robert Firth'),
(128, '老大哥在看着你。--奥威尔'),
(129, '肚子大不可怕，可怕的是肚子里没有好东西。--加菲猫'),
(130, '自古至今，容忍的总是老百姓，被容忍的总是统治者--殷海光'),
(131, '自由不是一种达到更高政治目的的工具。它本身就是最高的政治目的。自由之需要并不是为了实现一种好的公共管理，而是为了保证对市民社会和个人生活最高目标的追求。--阿克顿'),
(132, '自由只有为了自由的缘故才能被限制。——约翰 罗尔斯'),
(133, '自由意味着责任，正因为如此，多数人都惧怕自由。--萧伯纳'),
(134, '自由的保证是什么?是对自己不再感到羞耻。——尼采'),
(135, '自由的保证是什么?是对自己不再感到羞耻。--尼采'),
(136, '花代价所换来的一点才智，抵过别人传授的数倍不止。'),
(137, '若欲求长寿，生活须行善，因为蠢行和邪恶会把生命缩短。'),
(138, '要节约用水，尽量和女友一起洗澡--加菲猫'),
(139, '计算机就跟比基尼一样，省去了人们许多的胡思乱想。--萨姆·尤因'),
(140, '计算机没什么用。他们只会告诉你答案。--毕加索'),
(141, '评断一个国家的品格，不仅要看它培养了什么样的人民，还要看它的人民选择对什么样的人致敬，对什么样的人追怀。 --约翰·肯尼迪'),
(142, '读古人的书，一方面要知道古人聪明到怎样，一方面也要知道古人傻到怎样。--胡适'),
(143, '谁控制过去就控制未来，谁控制现在就控制过去。--奥威尔'),
(144, '谁能最恰当地评价一个人，他的敌人还是他自己？'),
(145, '财富并非供人拥有，而是供人享受。'),
(146, '资讯是民主社会的流通货币--杰弗逊'),
(147, '身为一个中国人，最大的痛苦时忍受别人“推己及人”的次数，比世界上任何地方的人都要多。--王小波'),
(148, '通往地狱的路，都是由善意铺成的——哈耶克'),
(149, '通往地狱的路，都是由善意铺成的。——哈耶克'),
(150, '那些没有自尊的人仍然可以是爱国的，他们可以为少数牺牲多数。他们热爱他们坟墓的泥土，但他们对那种可以使他们的肉体生机勃勃的精神却毫无同情心。爱国主义是他们脑袋里的蛆。——亨利·大卫·梭罗'),
(151, '集体主义只不过是暴政的外衣。——莱辛'),
(152, '首先他们无视于你，而后是嘲笑你，接着是批斗你，再来就是你的胜利之日。--甘地'),
(153, '640K对每一个人来说都已足够--比尔盖茨'),
(154, '河流之所以能够到达目的地，是因为它懂得怎样避开障碍。'),
(155, '日出东海落西山，愁也一天，喜也一天；遇事不钻牛角尖，人也舒坦，心也舒坦。'),
(156, '后悔是一种耗费精神的情绪，后悔是比损失更大的损失，比错误更大的错误，所以不要后悔。'),
(157, '死亡教会人一切，如同考试之后公布的结果——虽然恍然大悟，但为时晚矣！'),
(158, '每个人出生的时候都是原创，可悲的是很多人渐渐都成了盗版。'),
(159, '每个人都有潜在的能量，只是很容易被习惯所掩盖，被时间所迷离，被惰性所消磨。'),
(160, '把命运寄托在自己身上，这是这个世界上最美妙的心思。为此努力，拼搏，不舍昼夜。'),
(161, '每个人的内心都充满了魔鬼，学会控制他。'),
(162, '如果你还认为自己还年轻，还可以蹉跎岁月的话，你终将一事无成，老来叹息。'),
(163, '在实现理想的路途中，必须排除一切干扰，特别是要看清那些美丽的诱惑。'),
(164, '忍一时之气，免百日之忧。'),
(165, '信心、毅力、勇气三者具备，则天下没有做不成的事。'),
(166, '改变自己是自救，影响别人是救人。'),
(167, '当你感到无助的时候，还有一种坚实的力量可以依靠，那就是你自己。'),
(168, '想过去是杂念，想未来是妄想，最好把握当下时刻。'),
(169, '幸福不在得到多，而在计较少。'),
(170, '改变别人，不如先改变自己。'),
(171, '一个人能走多远，要看他有谁同行；一个人有多优秀，要看他有谁指点；一个人有多成功，要看他有谁相伴。'),
(172, '同样的一瓶饮料，便利店里2块钱，五星饭店里60块，很多的时候，一个人的价值取决于所在的位置。'),
(173, '忙碌是一种幸福，让我们没时间体会痛苦；奔波是一种快乐，让我们真实地感受生活；疲惫是一种享受，让我们无暇空虚。'),
(174, '就算不快乐也不要皱眉，因为你永远不知道谁会爱上你的笑容。'),
(175, '无论你觉得自己多么的不幸，永远有人比你更加不幸。'),
(176, '失败的是事，绝不应是人。'),
(177, '自己打败自己是最可悲的失败，自己战胜自己是最可贵的胜利。'),
(178, '失败只有一种，那就是半途而废。'),
(179, '为了不让生活留下遗憾和后悔，我们应该尽可能抓住一切改变生活的机会。'),
(180, '没有承受困难的能力，就没有希望了。'),
(181, '实现自己既定的目标，必须能耐得住寂寞单干。'),
(182, '从来不跌倒不算光彩，每次跌倒后能再站起来，才是最大的荣耀。'),
(183, '有压力，但不会被压垮；迷茫，但永不绝望。'),
(184, '我们最值得自豪的不在于从不跌倒，而在于每次跌倒之后都爬起来。'),
(185, '当你无法从一楼蹦到三楼时，不要忘记走楼梯。要记住伟大的成功往往不是一蹴而就的，必须学会分解你的目标，逐步实施。'),
(186, '没有播种，何来收获；没有辛苦，何来成功；没有磨难，何来荣耀；没有挫折，何来辉煌。'),
(187, '相信就是强大，怀疑只会抑制能力，而信仰就是力量。'),
(188, '不论你在什么时候开始，重要的是开始之后就不要停止。'),
(189, '让我们将事前的忧虑，换为事前的思考和计划吧！'),
(190, '做决定之前仔细考虑，一旦作了决定就要勇往直前、坚持到底。'),
(191, '开始努力吧！在这个过程中你必须放弃很多东西，但你要明白它们都不是你最终想要的，你要相信在你成功以后，总有一天它们会再回来，而且比现在更美好！'),
(192, '无论你觉得自己多么的了不起，也永远有人比你更强。'),
(193, '失去金钱的人损失甚少，失去健康的人损失极多，失去勇气的人损失一切。'),
(194, '成功的人是跟别人学习经验，失败的人只跟自己学习经验。'),
(195, '目标的坚定是性格中最必要的力量源泉之一，也是成功的利器之一。没有它，天才会在矛盾无定的迷径中徒劳无功。'),
(196, '失败只是暂时停止成功，假如我不能，我就一定要；假如我要，我就一定能！'),
(197, '为了向别人、向世界证明自己而努力拼搏，而一旦你真的取得了成绩，才会明白：人无须向别人证明什么，只要你能超越自己。'),
(198, '哪怕是最没有希望的事情，只要有一个勇敢者去坚持做，到最后就会拥有希望。'),
(199, '没有哪种教育能及得上逆境。'),
(200, '漂亮只能为别人提供眼福，却不一定换到幸福。'),
(201, '付出真心，才会得到真心，却可能伤的彻底；保持距离，才能保护自己，却注定永远寂寞。'),
(202, '有时候，不是对方不在乎你，而是你把对方看的太重。'),
(203, '人生最精彩的不是实现梦想的瞬间，而是坚持梦想的过程。'),
(204, '人之所以活得累，是因为放不下架子，撕不开面子，解不开情节。'),
(205, '微小的幸福就在身边，容易满足就是天堂。'),
(206, '年轻时候，拍下许多照片，摆在客厅给别人看；等到老了，才明白照片是拍给自己看的。'),
(207, '试金可以用火，试女人可以用金，试男人可以用女人。'),
(208, '生命是属于你的，你应该根据自己的愿望去生活。'),
(209, '那些尝试去做某事却失败的人，比那些什么也不尝试做却成功的人不知要好上多少。'),
(210, '你想成为幸福的人吗？但愿你首先学会吃得起苦。'),
(211, '懦弱的人只会裹足不前，莽撞的人只能引为烧身，只有真正勇敢的人才能所向披靡。'),
(212, '梯子的梯阶从来不是用来搁脚的，它只是让人们的脚放上一段时间，以便让别一只脚能够再往上登。'),
(213, '不管多么险峻的高山，总是为不畏艰难的人留下一条攀登的路。'),
(214, '不经巨大的困难，不会有伟大的事业。'),
(215, '聪明出于勤奋，天才在于积累。'),
(216, '聪明的人有长的耳朵和短的舌头。'),
(217, '对自己不满是任何真正有才能的人的根本特征之一。'),
(218, '机会只留给有准备的人。'),
(219, '驾驭命运的舵是奋斗。不抱有一丝幻想，不放弃一点机会，不停止一日努力。'),
(220, '如果你想攀登高峰，切莫把彩虹当作梯子。'),
(221, '胸无大志，枉活一世。'),
(222, '志不立，天下无可成之事。'),
(223, '生活比你想象的要容易得多，只要学会接受那些不可接受的，放弃那些不愿放弃的，容忍那些不可容忍的。'),
(224, '生活中最基本的技巧是交流，最可依赖的品质是耐心，最糟糕的行为是抱怨，最易见效的努力是从自己做起。'),
(225, '高峰只对攀登它而不是仰望它的人来说才有真正意义。'),
(226, '这个世界并不是掌握在那些嘲笑者的手中，而恰恰掌握在能够经受得住嘲笑与批评忍不断往前走的人手中。'),
(227, '栽种思想，成就行为；栽种行为，成就习惯；栽种习惯，成就性格；栽种性格，成就命运。'),
(228, '花盆里长不出苍松，鸟笼里飞不出雄鹰。'),
(229, '挫折其实就是迈向成功所应缴的学费。'),
(230, '伟大的事业不是靠力气，速度和身体的敏捷完成的，而是靠性格，意志和知识的力量完成的。'),
(231, '最重要的就是不要去看远方模糊的，而要做手边清楚的事。'),
(232, '在真实的生命里，每桩伟业都由信心开始，并由信心跨出第一步。'),
(233, '在人生的大海中，我们虽然不能把握风的大小，却可以调整帆的方向。'),
(234, '在泪水中浸泡过的微笑最灿烂，从迷惘中走出来的灵魂最清醒。'),
(235, '每一个人都拥有生命，但并非每个人都懂得生命，乃至于珍惜生命。不了解生命的人，生命对他来说，是一种惩罚。'),
(236, '创造机会的人是勇者。等待机会的人是愚者。'),
(237, '生命不止需要长度，更需要宽度。'),
(238, '别人能做到的事，我也能做到。'),
(239, '你比那些躺在坟墓里的人都有希望。'),
(240, '时刻都在心里认为自己是一个优秀的人，那么你做的事情也会因此而优秀。'),
(241, '再困难的事情，你一去做便不再困难了。'),
(242, '当你坚持不住的时候，再坚持一下！'),
(243, '天下最悲哀的人莫过于，本身没有足以炫耀的优点，却又将其可怜的自卑感，以令人生厌的自大、自夸来掩饰。'),
(244, '你以什么样的心态去面对生活，你就会收获什么样的心情！'),
(245, '你笑，全世界都跟你笑；你哭，全世界只有你一个人哭。'),
(246, '这个城市没有草长莺飞的传说，它永远活在现实里面，快速的鼓点，匆忙的身影，麻木的眼神，虚假的笑容，而我正在被同化。'),
(247, '用强烈欲望作为达成梦想的后盾，使欲望变得狂热，让它成为你脑中最重要的一件事。'),
(248, '不要在你的智慧中夹杂着傲慢。不要使你的谦虚心缺乏智慧。'),
(249, '一个人有钱没钱不一定，但如果这个人没有了梦想，这个人穷定了。'),
(250, '人生没有十全十美，如果你发现错了。重新再来，别人不原谅你，你可以自己原谅自己。千万不要用一个错误去掩盖另一个错误。'),
(251, '已经失去的不妨让它失去，至少不再耽于等待。'),
(252, '你在一生中，可以有所作为的时候只有一次。那就是现在，然而，许多人却在悔恨过去和担忧未来之中浪费了大好时光。'),
(253, '面对失败和挫折一笑而过，是一种乐观自信；面对误解和仇恨一笑而过，是一种坦然宽容；面对烦恼和忧愁一笑而过，是一种平和释然。');

CREATE TABLE `querylist` (
  `ID` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(20) NOT NULL,
  `UserAgent` text NOT NULL,
  `ExamNo` int(11) NOT NULL,
  `ExamID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Captcha` varchar(6) NOT NULL,
  `Result` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `score_table_list` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Table_Name` varchar(128) NOT NULL,
  `Settings` text NOT NULL,
  `Viewable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Value` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `settings` (`ID`, `Name`, `Value`) VALUES
(1, 'ID_Length', '9'),
(2, 'News', ''),
(3, 'Forbidden', '0');

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Role` varchar(64) NOT NULL,
  `LastLoginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `user` (`ID`, `Username`, `Password`, `Role`) VALUES
(1, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'administrator');


ALTER TABLE `famous`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

ALTER TABLE `querylist`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

ALTER TABLE `score_table_list`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Username_2` (`Username`);


ALTER TABLE `famous`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `querylist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `score_table_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
