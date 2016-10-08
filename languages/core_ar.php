﻿<?PHP
$lang= array();
$lang['adduser']			= "User %s (unique Client-ID: %s; Client-database-ID %s) is unknown -> added to the Ranksystem now.";
$lang['changedbid']			= "User %s (unique Client-ID: %s) got a new TeamSpeak Client-database-ID (%s). Update the old Client-database-ID (%s) and reset collected times!";
$lang['crawl']				= "البحث عن المستخدمين المتواجدين وحساب التفاعل";
$lang['clean']				= "البحث عن المستخدمين الذين من المفروض حذفهم";
$lang['cleanc']				= "تصفية المستخدمين";
$lang['cleancdesc']			= "With this function the old clients in the Ranksystem get deleted.<br><br>To this end, the Ranksystem sychronized with the TeamSpeak database. Clients, which do not exist in TeamSpeak, will be deleted from the Ranksystem.<br><br>This function is only enabled when the 'Slowmode' is deactivated!<br><br><br>For automatic adjustment of the TeamSpeak database the ClientCleaner can be used:<br>http://ts-n.net/clientcleaner.php";
$lang['cleandel']			= "There were %s clients deleted out of the Ranksystem database, cause they were no longer existing in the TeamSpeak database.";
$lang['cleanno']			= "ليس هناك شيء ليتم مسحه ";
$lang['cleanp']				= "مدى التصفية";
$lang['cleanpdesc']			= "Set a time that has to elapse before the 'clean clients' runs next.<br><br>Set a time in seconds.<br><br>Recommended is once a day, cause the client cleaning needs much time for bigger databases.";
$lang['cleanrs']			= "المستخدمون في قاعدة باينات نظام الرتب: %s";
$lang['cleants']			= "المستخدمين الذين تم العثور عليهم في قاعدة بايانات التيم سبيك: %s (of %s)";
$lang['days']				= "<small>يوم</small> %d";
$lang['dbconerr']			= "فشل الدخول الى قاعدة بيانات قاعدة بيانات: ";
$lang['delcldgrpif']		= "خلل عند حذف المعلومات من مجموعات السيرفر: %s";
$lang['delcldgrpsc']		= "Knowledge about servergroups for %s User successfully removed.";
$lang['delclientsif']		= "%s Clients deleted out of the Ranksystem database!";
$lang['delclientssc']		= "%s Clients successfully deleted out of the Ranksystem database!";
$lang['errlogin']			= "اسم المستخدم او كلمة المرور خاطئة! حاول مجددا...";
$lang['errlogin2']			= "Brute force protection: Try it again in %s seconds!";
$lang['errlogin3']			= "Brute force protection: To much misstakes. Banned for 300 Seconds!";
$lang['error']				= "خلل ";
$lang['errremgrp']			= "Error while removing user with unique Client-ID %s out of the servergroup with servergroup-database-ID %s!";
$lang['errremdb']			= "Error while removing user with unique Client-ID %s out of the Ranksystem database!";
$lang['errsel']				= "Error while choosing the selections with<br>selected client: %s<br>option 'delete clients': %s<br>option 'sum. online time': %s";
$lang['errukwn']			= "حدث خلل غير معروف!";
$lang['errupcount']			= "Error while renewing the summary online time of %s by user with the unique Client-ID %s";
$lang['highest']			= "تم الوصول الى اعلى رتبة";
$lang['install']			= "Installation";
$lang['instdb']				= "تنصيب قاعدة البيانات";
$lang['instdbsuc']			= "قاعدة البيانات %s أنشات بنجاح.";
$lang['insterr1']			= "ATTENTION: You are trying to install the Ranksystem, but there is already existing a database with the name \"%s\".<br>Due installation this database will be dropped!<br>Be sure you want this. If not, please choose an other database name.";
$lang['insterr2']			= "PDO is needed but seems not installed. Install <a href=\"http://php.net/manual/de/pdo.installation.php\" target=\"_blank\">PDO</a> and try it again!";
$lang['insterr3']			= "PHP exec function need to be enabled but seems to be disabled. Please enable the PHP <a href=\http://php.net/manual/de/function.exec.php\" target=\"_blank\">exec</a> function and try it again!";
$lang['insterr4']			= "Your PHP version (%s) is below 5.5.0. Update your PHP and try it again!";
$lang['isntwicfg']			= "Can't save the database configuration! Please edit the 'other/dbconfig.php' with a chmod 0777 (on windows 'full access') and try again after.";
$lang['isntwicfg2']			= "Configurate Webinterface";
$lang['isntwichm']			= "Write Permissions failed on folder \"%s\". Please give them a chmod 777 (on windows 'full access') and try to start the Ranksystem again.";
$lang['isntwidbhost']		= "DB Hostaddress:";
$lang['isntwidbhostdesc']	= "عنوان خادم قاعدة البيانات<br>(IP or DNS)";
$lang['isntwidbmsg']		= "خلل في قاعدة البيانات: ";
$lang['isntwidbname']		= "DB Name:";
$lang['isntwidbnamedesc']	= "اسم قاعدة البيانات";
$lang['isntwidbpass']		= "DB Password:";
$lang['isntwidbpassdesc']	= "كلمة مرور قاعدة البيانات";
$lang['isntwidbtype']		= "DB Type:";
$lang['isntwidbtypedesc']	= "Database type<br><br>You have to install the needed PDO Driver.<br>For more informations have look at the requirements on http://ts-n.net/ranksystem.php";
$lang['isntwidbusr']		= "DB User:";
$lang['isntwidbusrdesc']	= "User to access the database";
$lang['isntwidel']			= "Please delete the file 'install.php' from your webserver and open the %s to configure the Ranksystem!";
$lang['isntwiusr']			= "المستخدم للوحة التحكم انشئ بنجاح";
$lang['isntwiusrcr']		= "Create Webinterface-User";
$lang['isntwiusrdesc']		= "ادخل الاسم وكلمة المرور للدخول الى لوحة التحكم . بإستخدام لوحة التحكم يمكنك التعديل على نظام الرتب";
$lang['isntwiusrh']			= "Access - Webinterface";
$lang['listacsg']			= "الرتبة الحالية";
$lang['listcldbid']			= "Client-database-ID";
$lang['listexcept']			= "No, cause excepted";
$lang['listip']				= "IP address";
$lang['listnick']			= "اسم المستخدم";
$lang['listnxsg']			= "الرتبة التالية";
$lang['listnxup']			= "الرتبة القادمة بعد";
$lang['listrank']			= "رتبة";
$lang['listseen']			= "اخر ظهور";
$lang['listsuma']			= "وقت النشاط الكلي";
$lang['listsumi']			= "وقت عدم النشاط الكلي";
$lang['listsumo']			= "وقت التواجد الكلي";
$lang['listuid']			= "unique Client-ID";
$lang['login']				= "Login";
$lang['nocount']			= "User %s (unique Client-ID: %s; Client-database-ID %s) is a query-user or is several times online (only first connection counts) -> this will not count!";
$lang['noentry']			= "لم يتم العثور على اي مدخلات";
$lang['pass']				= "كلمة المرور";
$lang['queryname']			= "اسم البوت الاول قيد الاستخدام جاري المحاولة باسم البوت الثاني";
$lang['sccrmcld']			= "User with unique Client-ID %s successfull removed from the Ranksystem database.";
$lang['sccupcount']			= "User with the unique Client-ID %s successfull overwritten with a summary online time of %s.";
$lang['setontime']			= "sum. online time";
$lang['setontimedesc']		= "Enter a new summary online time, which should be set to the previous selected clients. With this the old summary online gets overwritten.<br><br>The entered summary online time will be considered for the rank up.";
$lang['sgrpadd']			= "Grant servergroup %s to user %s (unique Client-ID: %s; Client-database-ID %s).";
$lang['sgrprerr']			= "It happened a problem with the servergroup of the user %s (unique Client-ID: %s; Client-database-ID %s)!";
$lang['sgrprm']				= "تم حذف مجموعة السيرفر %s من المستخدم %s (unique Client-ID: %s; Client-database-ID %s).";
$lang['stix0001']			= "حالة الخادم";
$lang['stix0002']			= "مجموع المستخدمين";
$lang['stix0003']			= "عرض التفاصيل";
$lang['stix0004']			= "مجموع وقت التواجد لكل المستخدمين";
$lang['stix0005']			= "إظهار الاول في كل الاوقات";
$lang['stix0006']			= "إظهار الاول لهذا الشهر";
$lang['stix0007']			= "إظهار الاول لهذا الاسبوع";
$lang['stix0008']			= "مدة إستعمال الخادم";
$lang['stix0009']			= "في اخر 7 ايام";
$lang['stix0010']			= "في اخر 30 يوم";
$lang['stix0011']			= "في اخر 24 ساعة";
$lang['stix0012']			= "حدد المدة";
$lang['stix0013']			= "قبل يوم";
$lang['stix0014']			= "قبل اسبوع";
$lang['stix0015']			= "قبل شهر";
$lang['stix0016']			= "(وقت النشاط/وقت الخمول (لكل المستخدمين";
$lang['stix0017']			= "(الإصدارات (لكل المستخدمين";
$lang['stix0018']			= "(الدول (لكل المستخدمين";
$lang['stix0019']			= "(الأنظمة (لكل المستخدمين";
$lang['stix0020']			= "الإحصاءات الحالية";
$lang['stix0023']			= "حالة الخادم";
$lang['stix0024']			= "متواجد";
$lang['stix0025']			= "غير متواجد";
$lang['stix0026']			= "(أقصى عدد للمتصلين / المتصلين)";
$lang['stix0027']			= "عدد القنوات";
$lang['stix0028']			= "متوسط زمن الوصول للسيرفر";
$lang['stix0029']			= "مجموع البيانات المتلقيه";
$lang['stix0030']			= "مجموع البيانات المرسلة";
$lang['stix0031']			= "وقت عمل الخادم";
$lang['stix0032']			= "قبل ايقاف التشغيل:";
$lang['stix0033']			= "<span id=\"days\">00</span> Days, <span id=\"hours\">00</span> Hours, <span id=\"minutes\">00</span> Mins, <span id=\"seconds\">00</span> Secs";
$lang['stix0034']			= "متوسط فقد البيانات";
$lang['stix0035']			= "الإحصاءات العامة";
$lang['stix0036']			= "اسم الخادم";
$lang['stix0037']			= "المنفذ:عنوان الخادم";
$lang['stix0038']			= "كلمة مرور الخادم";
$lang['stix0039']			= "(لايوجد (الخادم عام";
$lang['stix0040']			= "نعم (الخادم خاص)";
$lang['stix0041']			= "هوية الخادم";
$lang['stix0042']			= "نظام الخادم";
$lang['stix0043']			= "إصدار الخادم";
$lang['stix0044']			= "(تاريخ إنشاء الخادم (يوم/شهر/سنة";
$lang['stix0045']			= "إضافة الخادم إلى قائمة الخوادم";
$lang['stix0046']			= "مفعل";
$lang['stix0047']			= "غير مفعل";
$lang['stix0048']			= "عدد غير كافي من المعلومات حتى الان";
$lang['stix0049']			= "وقت التواجد لكل المستخدمين / شهر";
$lang['stix0050']			= "وقت التواجد لكل المستخدمين / اسبوع";
$lang['stix0051']			= "لقد فشل التيم سبيك لذا لن يكون هناك عملية انشاء";
$lang['stmy0001']			= "العضوية";
$lang['stmy0002']			= "رتبة";
$lang['stmy0003']			= "Database ID:";
$lang['stmy0004']			= "Unique ID:";
$lang['stmy0005']			= "عدد مرات الدخول إلى الخادم:";
$lang['stmy0006']			= "أول دخول للسيرفر:";
$lang['stmy0007']			= "المجموع الكلي لوقت التواجد:";
$lang['stmy0008']			= "وقت التواجد للايام الـ7 الاخيرة:";
$lang['stmy0009']			= "وقت التواجد للايام الـ30 الاخيرة:";
$lang['stmy0010']			= "أكتملت الإنجازات:";
$lang['stmy0011']			= "التقدم بالإنجازات";
$lang['stmy0012']			= "التواجد : أسطوري";
$lang['stmy0013']			= "لأن وقت تواجدك بالسيرفر %s ساعات";
$lang['stmy0014']			= "أكتمل التقدم";
$lang['stmy0015']			= "التواجد : ذهبي";
$lang['stmy0016']			= "% أكتمل أسطوري";
$lang['stmy0017']			= "التواجد : فضي";
$lang['stmy0018']			= "% أكتمل ذهبي";
$lang['stmy0019']			= "التواجد : برونزي";
$lang['stmy0020']			= "% أكتمل فضي";
$lang['stmy0021']			= "التواجد : لايوجد رتبة";
$lang['stmy0022']			= "% أكتمل برونزي";
$lang['stmy0023']			= "تقدم عدد مرات الإتصال";
$lang['stmy0024']			= "عدد مرات الإتصال : أسطوري";
$lang['stmy0025']			= "عدد مرات الدخول إلى الخادم %s مرة";
$lang['stmy0026']			= "عدد مرات الإتصال : ذهبي";
$lang['stmy0027']			= "عدد مرات الإتصال : فضي";
$lang['stmy0028']			= "عدد مرات الإتصال: برونزي";
$lang['stmy0029']			= "عدد مرات الإتصال: لايوجد رتبة";
$lang['stmy0030']			= "التقدم للمستوى القادم";
$lang['stnv0001']			= "اخبار الخادم";
$lang['stnv0002']			= "اغلاق";
$lang['stnv0003']			= "تحديث معلومات المستخدم";
$lang['stnv0004']			= "إستخدم التحديث فقط في حالة تغير معلوماتك في التيم سبيك مثل : اسمك";
$lang['stnv0005']			= "يعمل فقط عند تواجدك بالتيم سبيك";
$lang['stnv0006']			= "تحديث";
$lang['stnv0007']			= "منطقة النزال - مضمون الصفحة";
$lang['stnv0008']			= "يمكنك تحدي المستخدمين الاخرين في معركة بين اثنين او بين فريقين";
$lang['stnv0009']			= "في خلال المعركة سيتم حساب وقت التواجد للاعبين او للفريقين";
$lang['stnv0010']			= "عند انتهاء المعركة المستخدم او الفريق الذي لديه اعلى وقت تواحد سيعتبر الفائز";
$lang['stnv0011']			= "(الوقت الاعتيادي للمعركة هو 48 ساعة)";
$lang['stnv0012']			= "المستخدم او الفريق الفائز يحصل على مبلغ يمكنه استخدامه عندما يريد";
$lang['stnv0013']			= "سيتم اضهاره على لوحة <a href=\"my_stats.php\">My statistics</a> ";
$lang['stnv0014']			= "( يمكن ان يكون تسريع وقت تواجد لمدة 8 ساعات, زيادة وقت التواجد 4 ساعات اضافية , الخ   ";
$lang['stnv0015']			= "يمكن استخدام هذه التسريعات للصعود على سبيل المثال فوق افضل المستخدمين للاسبوع";
$lang['stnv0016']			= "غير متوفر";
$lang['stnv0017']			= "أنت غير متصل بالتيم سبيك";
$lang['stnv0018']			= "الرجاء الإتصال بالتيم سبيك و الضغط على زر التحديث لعرض معلوماتك";
$lang['stnv0019']			= "العضوية - شرح";
$lang['stnv0020']			= "تحتوي هذا الصفحة على مختصر لحالتك الخاصة ومجموع وقت تواجدك على السيرفر";
$lang['stnv0021']			= "The informations are collected since the beginning of the Ranksystem, they are not since the beginning of the TeamSpeak server.";
$lang['stnv0022']			= "This page receives its values out of a database. So the values might be delayed a bit.";
$lang['stnv0023']			= "The sum inside of the donut charts may differ to the amount of 'Total user'. The reason is that this data weren't collected with older versions of the Ranksystem.";
$lang['stnv0024']			= "نظام الرتب";
$lang['stnv0025']			= "تحديد المدخلات";
$lang['stnv0026']			= "الكل";
$lang['stnv0027']			= "المعلومات على هذه الصفحة قد تكون منتهية الصلاحية! يبدو ان نظام الرتب لم يعد متصلا بسيرفر التيم سبيك";
$lang['stnv0028']			= "(انت غير متصل بسيرفر التيم سبيك!)";
$lang['stnv0029']			= "قائمة الرتب";
$lang['stnv0030']			= "معلومات عن نظام الرتب";
$lang['stnv0031']			= "About the search field you can search for pattern in clientname, unique Client-ID and Client-database-ID.";
$lang['stnv0032']			= "You can also use a view filter options (see below). Enter the filter also inside the search field.";
$lang['stnv0033']			= "Combination of filter and search pattern are possible. Enter first the filter(s) followed without any sign your search pattern.";
$lang['stnv0034']			= "Also it is possible to combine multiple filters. Enter this consecutively inside the search field.";
$lang['stnv0035']			= "<u>Example:</u><br>filter:nonexcepted:TeamSpeakUser";
$lang['stnv0036']			= "Show only clients, which are excepted (client, servergroup or channel exception).";
$lang['stnv0037']			= "Show only clients, which are not excepted.";
$lang['stnv0038']			= "Show only clients, which are online.";
$lang['stnv0039']			= "Show only clients, which are not online.";
$lang['stnv0040']			= "Show only clients, which are in defined group. Represent the actuel rank/level.<br>Replace <i>GROUPID</i> with the wished servergroup ID.";
$lang['stnv0041']			= "Show only clients, which are selected by lastseen.<br>Replace <i>OPERATOR</i> with '<' or '>' or '=' or '!='.<br>And replace <i>TIME</i> with a timestamp or date with format 'Y-m-d H-i' (example: 2016-06-18 20-25).<br>Full example: filter:lastseen:<:2016-06-18 20-25:";
$lang['stnv0042']			= "Show only clients, which are from defined country.<br>Replace <i>TS3-COUNTRY-CODE</i> with the wished country.<br>For list of codes google for ISO 3166-1 alpha-2";
$lang['stri0001']			= "معلومات عن نظام الرتب";
$lang['stri0002']			= "ماهو نظام الرتب؟";
$lang['stri0003']			= "A TS3 Bot, which automatically grant ranks (servergroups) to user on a TeamSpeak 3 Server for online time or online activity. It also gathers informations and statistics about the user and displays the result on this site.";
$lang['stri0004']			= "من الذي اخترع نظام الرتب؟";
$lang['stri0005']			= "متى تم اطلاق نظام الرتب ؟";
$lang['stri0006']			= "اول اصدار اولي: 05/10/2014.";
$lang['stri0007']			= "اول اصدار تجريبي: 01/02/2015.";
$lang['stri0008']			= "يمكنك رؤية اخر اصدار على  <a href=\"http://ts-n.net/ranksystem.php\" target=\"_blank\">Ranksystem Website</a>.";
$lang['stri0009']			= "كيف تم انشاء نظام الرتب ؟";
$lang['stri0010']			= "The Ranksystem is coded in";
$lang['stri0011']			= "It uses also the following libraries:";
$lang['stri0012']			= ": شكر خاص إلى";
$lang['stri0013']			= "<a href=\"http://nya-pw.ru/\" target=\"_blank\">sergey</a>, <a href=\"http://vk.com/akhachirov\" target=\"_blank\">Arselopster</a> & <a href=\"http://vk.com/zheez\" target=\"_blank\">DeviantUser</a> - for russian translation";
$lang['stri0014']			= "Bejamin Frost - for initialisation the bootstrap design";
$lang['stri0015']			= "<a href=\"http://hydrake.eu/\" target=\"_blank\">ZanK</a> - for italian translation";
$lang['stri0016']			= "<a href=\"http://iraqgaming.net/\" target=\"_blank\">DeStRoYzR</a> & <a href=\"http://www.sagamer.net/\" target=\"_blank\">Jehad</a>  - for initialisation arabic translation";
$lang['stri0017']			= "<a href=\"http://whitecs.ro/\" target=\"_blank\">SakaLuX</a> - for initialisation romanian translation";
$lang['sttw0001']			= "افضل مستخدمين";
$lang['sttw0002']			= "لهذا الاسبوع";
$lang['sttw0003']			= "وقت التواجد %s ساعات";
$lang['sttw0004']			= "أفضل 10 بالسيرفر";
$lang['sttw0005']			= "Hours (Defines 100 %)";
$lang['sttw0006']			= "%s hours (%s&#37;)";
$lang['sttw0007']			= "أفضل 10 إحصائيات";
$lang['sttw0008']			= "أفضل 10 ضد أخرون في زمن الإتصال";
$lang['sttw0009']			= "أفصل 10 ضد أخرون في وقت النشاط";
$lang['sttw0010']			= "أفضل 10 ضد أخرون في زمن الخمول";
$lang['sttw0011']			= "Top 10 (in hours)";
$lang['sttw0012']			= "Other %s users (in hours)";
$lang['sttw0013']			= "With %s hours active time";
$lang['sttm0001']			= "لهذا الشهر";
$lang['stta0001']			= "لكل الوقت";
$lang['upinf']				= "يتوفر اصدار جديد من نظام الرتب; ابلغ المستخدمين في السيرفر";
$lang['upmsg']				= "\nHey, a new version of the [B]Ranksystem[/B] is available!\n\ncurrent version: %s\n[B]new version: %s[/B]\n\nPlease check out our site for more informations [URL]http://ts-n.net/ranksystem.php[/URL].";
$lang['upsucc']				= "Database update successfully executed.";
$lang['upuser']				= "User %s (unique Client-ID: %s; Client-database-ID %s) gets a new count (sum. online time) of %s (thereof active %s).";
$lang['upuserboost']		= "User %s (unique Client-ID: %s; Client-database-ID %s) gets a new count (sum. online time) of %s (thereof active %s) <b>[BOOST %sx]</b>.";
$lang['upusrerr']			= "The unique Client-ID %s couldn't reached on the TeamSpeak!";
$lang['upusrinf']			= "المستخدم %s المستخدمح";
$lang['user']				= "اسم المستخدم";
$lang['wiaction']			= "action";
$lang['wiboost']		 	= "boost";
$lang['wiboostdesc']	 	= "Give an user on your TeamSpeak server a servergroup (have to be created manually), which you can declare here as boost group. Define also a factor which should be used (for example 2x) and a time, how long the boost should be rated.<br>The higher the factor, the faster an user reaches the next higher rank.<br>Is the time expired, the boost servergroup get automatically removed from the concerned user. The time starts running as soon as the user gets the servergroup.<br><br>servergroup ID=> factor=> time (in seconds)<br><br>Each entry have to separate from next with a comma.<br><br>Example:<br>12=>2=>6000,13=>3=>2500,14=>5=>600<br><br>On this an user in servergroup 12 get the factor 2 for the next 6000 seconds, an user in servergroup 13 get the factor 3 for 2500 seconds, and so on...";
$lang['wibot1']				= "Ranksystem Bot should be stopped. Check the log below for more information!";
$lang['wibot2']				= "Ranksystem Bot should be started. Check the log below for more information!";
$lang['wibot3']				= "Ranksystem Bot should be restarted. Check the log below for more information!";
$lang['wibot4']				= "Start / Stop Ranksystem Bot";
$lang['wibot5']				= "Start Bot";
$lang['wibot6']				= "Stop Bot";
$lang['wibot7']				= "Restart Bot";
$lang['wibot8']				= "Ranksystem log (extract):";
$lang['wibot9']				= "Fill out all mandatory fields before starting the Ranksystem Bot!";
$lang['wichdbid']			= "Client-database-ID reset";
$lang['wichdbiddesc']		= "Reset the online time of an user, if his TeamSpeak Client-database-ID changed.<br><br>Example:<br>If a clients gets removed from the TeamSpeak server, it gets a new Client-database-ID with the next connect to the server.";
$lang['wiconferr']			= "There is an error in the configuration of the Ranksystem. Please go to the webinterface and correct the Core Settings. Especially check the config 'rank up'!";
$lang['widaform']			= "نظام التاريخ";
$lang['widaformdesc']		= "اختر كيفية ضهور التاريخ.<br><br>Example:<br>%a ايام, %h ساعات, %i دقائق, %s ثوان";
$lang['widbcfgsuc']			= "تعديلات قاعدة البيانات حفظت بنجاح";
$lang['widbcfgerr']			= "'other/dbconfig.php'خلل عند حفظ تعديلات قاعدة البيانات فشل الاتصال مع ";
$lang['widelcld']			= "حذف المستخدمين";
$lang['widelcldgrp']		= "اعادة انشاء المجاميع";
$lang['widelcldgrpdesc']	= "The Ranksystem remember the given servergroups, so it don't need to give/check this with every run of the worker.php again.<br><br>With this function you can remove once time the knowledge of given servergroups. In effect the ranksystem try to give all clients (which are on the TS3 server online) the servergroup of the actual rank.<br>For each client, which gets the group or stay in group, the Ranksystem remember this like described at beginning.<br><br>This function can be helpful, when user are not in the servergroup, they should be for the defined online time.<br><br>Attention: Run this in a moment, where the next few minutes no rankups become due!!! The Ranksystem can't remove the old group, cause he can't remember ;-)";
$lang['widelclddesc']		= "Delete the before selected clients out of the Ranksystem database.<br><br>With this deletion are the clients on the TeamSpeak Server untouched.";
$lang['widelsg']			= "حذف من مجموعات السيرفر";
$lang['widelsgdesc']		= "Choose if the clients should also be removed out of the last known servergroup, when you delete clients out of the Ranksystem database.<br><br>It will only considered servergroups, which concerned the Ranksystem";
$lang['wideltime']			= "وقت الحذف";
$lang['wideltimedesc']		= "Clean old clients out of the Ranksystem database.<br>Entry a time in seconds which a client was not seen to delete it.<br><br>0 - deletes all clients out of the Ranksystem<br><br>The Userdatas on the TeamSpeak server are with this untouched!";
$lang['wiexcid']			= "Channel-Ausnahmen";
$lang['wiexciddesc']		= "A comma separated list of the channel-IDs that are not to participate in the Ranksystem.<br><br>Stay users in one of the listed channels, the time there will be completely ignored. There is neither the online time, yet the idle time counted.<br><br>Sense does this function only with the mode 'online time', cause here could be ignored AFK channels for example.<br>With the mode 'active time', this function is useless because as would be deducted the idle time in AFK rooms and thus not counted anyway.<br><br>Be a user in an excluded channel, it is noted for this period as 'excluded from the Ranksystem'. The user dows no longer appears in the list 'stats/list_rankup.php' unless excluded clients should not be displayed there (Stats Page - excepted client).";
$lang['wiexgrp']			= "servergroup exception";
$lang['wiexgrpdesc']		= "A comma seperated list of servergroup-IDs, which should not conside for the Ranksystem.<br>User in at least one of this servergroups IDs will be ignored for the rank up.";
$lang['wiexuid']			= "استثناء المستخدم";
$lang['wiexuiddesc']		= "A comma seperated list of unique Client-IDs, which should not conside for the Ranksystem.<br>User in this list will be ignored for the rank up.";
$lang['wigrptime']			= "ترفيع رتبة";
$lang['wigrptimedesc']		= "Define here after which time a user should get automatically a predefined servergroup.<br><br>time (seconds)=>servergroup ID<br><br>Important for this is the 'online time' or the 'active time' of an user, depending on setting of the mode.<br><br>Each entry have to separate from next with a comma.<br><br>The time must be entered cumulative<br><br>Example:<br>60=>9,120=>10,180=>11<br><br>On this a user get after 60 seconds the servergroup 9, in turn after 60 seconds the servergroup 10, and so on...";
$lang['wihladm']			= "List Rankup (Admin-Mode)";
$lang['wihlcfg']			= "خيارات النواة";
$lang['wihldb']				= "اعدادات قاعدة البيانات";
$lang['wihlmsg']			= "Message settings";
$lang['wihlsty']			= "Stats page settings";
$lang['wihlts']				= "TeamSpeak settings";
$lang['wihlvs']				= "Various settings";
$lang['wiignidle']			= "Ignoriere Idle";
$lang['wiignidledesc']		= "Define a period, up to which the idle time of an user will be ignored.<br><br>When a client does not do anything on the server (=idle), this time is noted by the Ranksystem. With this feature the idle time of an user will not be counted until the defined limit. Only when the defined limit is exceeded, it counts from that date for the Ranksystem as idle time.<br><br>This function plays only in conjunction with the mode 'active time' a role.<br><br>Meaning the function is e.g. to evaluate the time of listening in conversations as activity.<br><br>0= disable the feature<br><br>Example:<br>Ignore idle= 600 (seconds)<br>A client has an idle of 8 minuntes<br>consequence:<br>8 minutes idle are ignored and he therefore receives this time as active time. If the idle time now increased to over 12 minutes so the time is over 10 minutes, and in this case 2 minutes would be counted as idle time.";
$lang['wilog']				= "Logpath";
$lang['wilogdesc']			= "Path of the log file of the Ranksystem.<br><br>Example:<br>/var/logs/ranksystem/<br><br>Be sure, the webuser has the write-permissions to the logpath.";
$lang['wimsgmsg']			= "Message";
$lang['wimsgmsgdesc']		= "Define a message, which will be send to an user, when he rises the next higher rank.<br><br>This message will be send via TS3 private message. So every know bb-code could be used, which also works for a normal private message.<br>http://ts-n.net/lexicon.php?showid=97#lexindex<br><br>Furthermore, the previously spent time can be expressed by arguments:<br>%1\$s - days<br>%2\$s - hours<br>%3\$s - minutes<br>%4\$s - seconds<br><br>Example:<br>Hey,\\nyou reached a higher rank, since you already connected for %1\$s days, %2\$s hours and %3\$s minutes to our TS3 server.[B]Keep it up![/B] ;-)";
$lang['wimsgsn']			= "Server-News";
$lang['wimsgsndesc']		= "Define a message, which will be shown on the /stats/ page as server news.<br><br>You can use default html functions to modify the layout<br><br>Example:<br>&#60b&#62; - <b>for bold</b><br>&#60u&#62; - <u>for underline</u><br>&#60i&#62; - <i>for italic</i><br>&#60br&#62; - for word-wrap (new line)";
$lang['wilogout']			= "تسجيل الخروج";
$lang['wimsgusr']			= "Rank up notification";
$lang['wimsgusrdesc']		= "Inform an user with a private text message about his rank up.";
$lang['winav1']				= "TeamSpeak";
$lang['winav2']				= "Database";
$lang['winav3']				= "Core";
$lang['winav4']				= "Other";
$lang['winav5']				= "Message";
$lang['winav6']				= "Stats page";
$lang['winav7']				= "Administrate";
$lang['winav8']				= "Start / Stop Bot";
$lang['winav9']				= "Update available!";
$lang['winav10']			= "Please use the webinterface only via %s HTTPS%s An encryption is critical to ensure your privacy and security.%sTo be able to use HTTPS your webserver needs to support an SSL connection.";
$lang['wiselcld']			= "select clients";
$lang['wiselclddesc']		= "Select the clients by the last known username. For this you only have to start typing.<br>Multiple selections are comma separated, which does the system automatically.<br><br>With the selection you can choose with the next step an action.";
$lang['wishcolas']			= "actual servergroup";
$lang['wishcolasdesc']		= "Show column 'actual servergroup' in stats/list_rankup.php";
$lang['wishcolat']			= "active time";
$lang['wishcolatdesc']		= "Show column 'sum. active time' in stats/list_rankup.php";
$lang['wishcolcld']			= "Client-name";
$lang['wishcolclddesc']		= "Show column 'Client-name' in stats/list_rankup.php";
$lang['wishcoldbid']		= "database-ID";
$lang['wishcoldbiddesc']	= "Show column 'Client-database-ID' in stats/list_rankup.php";
$lang['wishcolit']			= "idle time";
$lang['wishcolitdesc']		= "Show column 'sum idle time' in stats/list_rankup.php";
$lang['wishcolls']			= "last seen";
$lang['wishcollsdesc']		= "Show column 'last seen' in stats/list_rankup.php";
$lang['wishcolnx']			= "next rank up";
$lang['wishcolnxdesc']		= "Show column 'next rank up' in stats/list_rankup.php";
$lang['wishcolot']			= "online time";
$lang['wishcolotdesc']		= "Show column 'sum. online time' in stats/list_rankup.php";
$lang['wishcolrg']			= "rank";
$lang['wishcolrgdesc']		= "Show column 'rank' in stats/list_rankup.php";
$lang['wishcolsg']			= "next servergroup";
$lang['wishcolsgdesc']		= "Show column 'next servergroup' in stats/list_rankup.php";
$lang['wishcoluuid']		= "Client-ID";
$lang['wishcoluuiddesc']	= "Show column 'unique Client-ID' in stats/list_rankup.php";
$lang['wishexcld']			= "excepted client";
$lang['wishexclddesc']		= "Show clients in list_rankup.php,<br>which are excluded and therefore not participate in the Ranksystem.";
$lang['wishexgrp']			= "excepted groups";
$lang['wishexgrpdesc']		= "Show clients in list_rankup.php, which are in the list 'client exception' and shouldn't be conside for the Ranksystem.";
$lang['wishhicld']			= "Clients in highest Level";
$lang['wishhiclddesc']		= "Show clients in list_rankup.php, which reached the highest level in the Ranksystem.";
$lang['wisupidle']			= "Mode";
$lang['wisupidledesc']		= "There are two modes, as time can be counted and can then apply for a rank increase.<br><br>1) online time: Here the pure online time of the user is taken into account (see column 'sum. online time' in the 'stats/list_rankup.php')<br><br>2) active time: This will be deducted from the online time of a user, the inactive time (idle) (see column 'sum. active time' in the 'stats/list_rankup.php').<br><br>A change of mode with an already longer running database is not recommended, but may work.";
$lang['wisvconf']			= "save";
$lang['wisvsuc']			= "Changes successfully saved!";
$lang['wisvres']			= "You need to restart the Ranksystem before the changes will take effect!";
$lang['witime']				= "Timezone";
$lang['witimedesc']			= "Select the timezone the server is hosted.";
$lang['wits3dch']			= "Default Channel";
$lang['wits3dchdesc']		= "The channel-ID, the bot should connect with.<br><br>The Bot will join this channel after connecting to the TeamSpeak server.";
$lang['wits3host']			= "TS3 Hostaddress";
$lang['wits3hostdesc']		= "TeamSpeak 3 Server address<br>(IP oder DNS)";
$lang['wits3sm']			= "Slowmode";
$lang['wits3smdesc']		= "With the Slowmode you can reduce \"spam\" of query commands to the TeamSpeak server. This prevent bans in case of flood.<br>TeamSpeak Query commands get delayed with this function.<br><br>!!! ALSO IT REDUCE THE CPU USAGE !!!<br><br>The activation is not recommended, if not required. The delay increases the duration of the Bot, which makes it imprecisely.";
$lang['wits3qnm']			= "Botname";
$lang['wits3qnm2']			= "2nd Botname";
$lang['wits3qnm2desc']		= "A fallback Botname, if the first one is already in use.";
$lang['wits3qnmdesc']		= "The name, with this the query-connection will be established.<br>You can name it free.";
$lang['wits3querpw']		= "TS3 Query-Password";
$lang['wits3querpwdesc']	= "TeamSpeak 3 query password<br>Password for the query user.";
$lang['wits3querusr']		= "TS3 Query-User";
$lang['wits3querusrdesc']	= "TeamSpeak 3 query username<br>Default is serveradmin<br>Of course, you can also create an additional serverquery account only for the Ranksystem.<br>The needed permissions you find on:<br>http://ts-n.net/ranksystem.php";
$lang['wits3query']			= "TS3 Query-Port";
$lang['wits3querydesc']		= "TeamSpeak 3 query port<br>Default is 10011 (TCP)<br>If its not default, you should find it in your 'ts3server.ini'.";
$lang['wits3voice']			= "TS3 Voice-Port";
$lang['wits3voicedesc']		= "TeamSpeak 3 voice port<br>Default is 9987 (UDP)<br>This is the port, you uses also to connect with the TS3 Client.";
$lang['wiupcheck']			= "Update-Check";
$lang['wiupcheckdesc']		= "If the Update-Check is enable, the listed user gets a notification with a private text message, once an update is available.";
$lang['wiuptime']			= "Interval";
$lang['wiuptimedesc']		= "Enter here how much seconds have to gone till the Ranksystem should check for available updates.<br>Attention, for each check the listed user gets a notification. If no one of the listed users is online, the Ranksystem will try to notificate with the next interval.";
$lang['wiupuid']			= "Recipient";
$lang['wiupuiddesc']		= "A comma separate list of unique Client-IDs, which shoud be informed on the TeamSpeak via private message for available updates.";
$lang['wivlang']			= "Language";
$lang['wivlangdesc']		= "Choose a default language for the Ranksystem.<br><br>The language is also selectable on the websites for the users and will be stored for the session.";
?>