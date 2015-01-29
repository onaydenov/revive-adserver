<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

// Settings help translation strings
$GLOBALS['phpAds_hlp_dbhost'] = "        ציין �?ת השרת המ�?רח �?ת בסיס הנתוני�? של {$phpAds_dbmsname} ש�?יליו �?תה מנסה להתחבר";

$GLOBALS['phpAds_hlp_dbport'] = "        ציין �?ת מספר המבו�? (port) של בסיס הנתוני�? {$phpAds_dbmsname} ש�?ליו �?תה מנסה להתחבר. ברירת המחדל של מ�?גר {$phpAds_dbmsname} הי�? <i>" . ($phpAds_dbmsname == 'MySQL' ? '3306' : '5432')."</i>.
		";

$GLOBALS['phpAds_hlp_dbuser'] = "        ציין �?ת ש�? המשתמש של שרת הנתוני�? בו {$PRODUCT_NAME} צריכה להשתמש כדי להתחבר ל{$phpAds_dbmsname} .
		";

$GLOBALS['phpAds_hlp_dbpassword'] = "        ציין �?ת הסיסמ�? שבה {$PRODUCT_NAME} צריכה להשתמש כדי להתחבר ל{$phpAds_dbmsname} .
		";

$GLOBALS['phpAds_hlp_dbname'] = "        ציין �?ת ש�? בסיס הנתוני�? שבו {$PRODUCT_NAME} ת�?חסן �?ת הנתוני�? שלה. חשוב שבסיס הנתוני�? הי�? כבר קיי�? על השרת. {$PRODUCT_NAME} <b>ל�?</b> תיצור בסיס נתוני�? �?�? הו�? ל�? נמצ�?.";

$GLOBALS['phpAds_hlp_persistent_connections'] = "        השימוש בחיבור מתמשך יכול לה�?יץ �?ת {$PRODUCT_NAME} בצורה משמעותית ו�?פילו להפחית מהעומס על השרת. �?בל יש בזה חסרון מסוי�?, שכן ב�?תרי�? עמוסי�? במבקרי�? העומס על השרת עשוי לגדול ולהפוך �?פילו לכבד יותר מזה הנוצר בחיבור רגיל. �?�? תשתמש בחיבור רגיל �?ו מתמשך יהיה תלוי במספר המבקרי�? והחומרה שבשימוש. �?�? {$PRODUCT_NAME} משתמשת ביותר מדי מש�?בי�?,
מומלץ לבחון קביעה זו בעדיפות ר�?שונה.
		";

$GLOBALS['phpAds_hlp_insert_delayed'] = "        {$phpAds_dbmsname} נועלת �?ת הטבלה בזמן שהי�? משחילה נתוני�?. �?�? יש לך מבקרי�? רבי�? ב�?תר, �?פשר ש{$PRODUCT_NAME} תצטרך לחכות לפני השחלת הנתון הב�? כיוון שבסיס הנתוני�? נעול. �?�? משתמשי�? בהשהיית השחלה, ל�? תצטרך לחכות והנתוני�? יושחלו במועד הר�?שון שיתפנה בבסיס הנתוני�? כ�?שר הו�? �?ינו עסוק.
		";

$GLOBALS['phpAds_hlp_compatibility_mode'] = "      �?�? יש לך בעיה בשילוב {$PRODUCT_NAME} ע�? מוצר תוכנה �?חר, זה עשוי לעזור �?�? תסמן �?ת מצב ת�?ימות בסיס הנתוני�?. �?�? �?תה משתמש בשליפת ב�?נר מקומית (local mode) וסעיף זה מסומן לת�?ימות, {$PRODUCT_NAME} תש�?יר �?ת מצב החיבור לבסיס הנתוני�? בדיוק כפי שהו�? היה לפני ש{$PRODUCT_NAME} הופעלה.
		זו �?ופציה �?יטית יותר (רק במעט) ולכן הי�? מבוטלת כברירת מחדל.
		";

$GLOBALS['phpAds_hlp_table_prefix'] = "     �?�? בסיס הנתוני�? שבו {$PRODUCT_NAME} משתמשת משותף ע�? עוד יישומי�?, מומלץ להוסיף קידומת לשמות הטבל�?ות. כמו כן, �?�? נעשה שימוש בכמה התקנות של {$PRODUCT_NAME}
 ב�?ותו בסיס נתוני�?, לעיך להבטיח שהקידומות ייחודיות לכל התקנה.
		";

$GLOBALS['phpAds_hlp_tabletype'] =
$GLOBALS['phpAds_hlp_table_type'] = "        {$phpAds_dbmsname} תומכת במספר סוגי טבלה. לכל טבלה יש �?ת התכונות המחיודות לה, וחלקן יכולות להמהיר �?ת {$PRODUCT_NAME} משמעותית. MyISAM הי�? ברירת המחדש הקיימת בכל התקנה של {$phpAds_dbmsname}. סוגי�? �?חרי�? �?פשר של�? קיימי�? על השרת שלך.
		";

$GLOBALS['phpAds_hlp_url_prefix'] = "        {$PRODUCT_NAME} צריכה לדעת היכן הי�? ממוקמת בשרת כדי לתפקד כר�?וי. עליך לציין �?ת כתובת ה-URL של התיקייה בה {$PRODUCT_NAME} מותקנת, לדוגמ�?: <i>http://www.your-url.com/{$PRODUCT_NAME}</i>.";

$GLOBALS['phpAds_hlp_my_header'] =
$GLOBALS['phpAds_hlp_my_footer'] = "        כ�?ן �?תה צריך לרשו�? �?ת מסלול הקובץ המצביע �?ל הכותרת (לדוגמ�?: /home/login/www/header.htm)
       כדי שתוכל להציג כותרת ו/�?ו תחתית בכל עמוד של ממשק הניהול.
        ניתן להכיל טקסט �?ו קוד HTML בקבצי�? �?לה (כ�?שר �?תה משתמש ב-HTML הימנע משימוש בתגי�? כמו <body> �?ו <html>).
		";

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "	בהפעלת דחיסת תוכן מסוג	GZIP תופחת כמות הנתוני�? הנשלחת מהשרת �?ל הדפדפן בכל פע�? שעמוד המנהלה עולה.
כדי ל�?פשר ז�?ת, על השרת צריכה להיות מותקנת גירסת PHP 4.0.5 ומעלה, ע�? הרחבת GZIP מותקנת.
		";

$GLOBALS['phpAds_hlp_language'] = "       ציין �?ת השפה שתשמש כברירת מחדל עבור {$PRODUCT_NAME}. שפה זו תשמש כשפה הר�?שונית במערכת הניהול של ה�?חר�?י והמפרסמי�?. �?נ�? שי�? לב: �?תה יכול לקבוע שפה שונה לכל מפרס�? בנפרד מתוך ממשק הניהול, ול�?פשר לכל מפרס�? לקבוע �?ת השפה בעצמו.		";

$GLOBALS['phpAds_hlp_name'] = "    ציין �?ת הש�? ש�?תה רוצה להעניק ליישו�? זה. משפט זה יופיע בכל עמודי ממשק המשתמש (מנהל ומפרס�?). �?�? תש�?יר �?ת השדה ריק (ברירת מחדל), יופיע הלוגו של {$PRODUCT_NAME} במקו�? ז�?ת.
		";

$GLOBALS['phpAds_hlp_company_name'] = "       בש�? זה ייעשה שימוש ב�?ימיילי�? ש-{$PRODUCT_NAME} שולחת.
		";

$GLOBALS['phpAds_hlp_override_gd_imageformat'] = "        {$PRODUCT_NAME} בדרך כלל בודקת �?�? ספריית GD מותקנת על השרת, וב�?יזה מתקונת קובץ תמונה קיימת תמיכה ב�?ותה גירסה. �?ול�?, �?פשר שזיהוי זה ל�? יהיה מדויק �?ו שגוי, כיוון שכמה גירס�?ות של PHP �?ינן מ�?פשרות זיהוי של פורמט תמונה נתמך.
�?�? {$PRODUCT_NAME} נכשלת בזיהוי ה�?וטומטי של פורמט התמונה הנכון, �?תה יכול לציין פורמט זה. ה�?פשרויות הן: none, png, jpeg, gif.
		";

$GLOBALS['phpAds_hlp_p3p_policies'] = "    כדי ש-{$PRODUCT_NAME} תפעיל פוליסת �?בטחת פרטיות מסוג P3P עליך לסמן �?ופציה זו.		";

$GLOBALS['phpAds_hlp_p3p_compact_policy'] = "       הפוליסה הקומפקטית שתשלח בצירוף העוגיה (קוקיס). הקביעה הר�?שונית הי�?: 'CUR ADM OUR NOR STA NID', המ�?פשרת ל-Internet Explorer גירסה 6 לקבל �?ת הקוקיס ש-{$PRODUCT_NAME} עושה בהן שימוש. �?�? �?תה רוצה, �?תה יכול לשנות קביעות �?לה כדי להת�?י�? �?ותן למדיניות הפרטיות ב�?תר שלך.
		";

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "      �?�? �?תה רוצה להשתמש בפוליסת פרטיות מל�?ה, �?תה יכול לציין �?ת מיקומה.
		";

$GLOBALS['phpAds_hlp_log_beacon'] = "	�?תתי�? (Beacons) הינן תמונות קטנות ובלתי נר�?ות הממוקמות בעמוד שבו הב�?נר נצפה. �?�? �?תה מפעיל תכונה זו, {$PRODUCT_NAME} תשתמש בתמוניות  �?לה לספירת החשיפות שהב�?נר זכה להן. �?�? תכבה תכונה זו, החשיפות יחשבו על פי השליפה של הב�?נר. זה פחות מדויק, שכן זה �?ינו מבטיח שהגולש �?כן זכה לצפות בב�?נר על המסך.
		";

$GLOBALS['phpAds_hlp_compact_stats'] = "       בהתחלה {$PRODUCT_NAME} עשתה שימוש מסיבי בתיעוד, �?שר מטבעו מכיל כמות עצומה של פרטי�?, �?ך ג�? מכביד ביותר על בסיס הנתוני�?. זה עלול ליצור בעיה רצינית ב�?תרי�? עמוסי מבקרי�?, וכדי להתגבר על בעיה זו {$PRODUCT_NAME} תומכת ג�? במתקונת חדשה של סטטיסטיקה - סטטיסטיקה קומפקטית, �?שר מפחיתה משמעותית �?ת העומס על השרת, �?ך ג�? פחות מפורטת כמובן. סטטיסטיקה קומפקטית זו מתעדת רק סטטיסטיקה יומית. �?�? �?תה זקוק לתיעוד בכל שעה, כבה תכונה זו.		";

$GLOBALS['phpAds_hlp_log_adviews'] = "       בדרך כלל כל החשיפות מתועדות. �?�? �?ינך רוצה ב�?יסוף נתוני�? �?ודות החשיפות, כבה �?ופציה זו.	";

$GLOBALS['phpAds_hlp_block_adviews'] = "	�?�? המבקר יטעין מחדש �?ת העמוד,  תירש�? חשיפה על ידי {$PRODUCT_NAME} בכל פע�?. תכונה זו משמשת לוידוי שרק חשיפה �?חת נרשמת לכל ב�?נר ייחודי במהלך הזמן שתציין בשניות.לדוגמ�?: �?�? תקבע נתון זה ל-300 שניות, {$PRODUCT_NAME} תתעד חשיפות של �?ותו הב�?נר רק �?�? הו�? ל�? יוצג שנית בפני �?ותו מבקר במהלך 5 דקות. תכונה זו פועלת רק �?�? התכונה <i>השתמש ב�?תתי�? לתיעוד חשיפות</i> מופעלת והדפדפן מות�?�? לקבלת קוקיס.
		";

$GLOBALS['phpAds_hlp_log_adclicks'] = "    בדרך כלל כל ההקלקות מתועדות, �?�? �?ינך רוצה לצבור סטטיסטיקה �?ודות כמות ההקלקה על ב�?נרי�?, �?תה יכול לכבות �?ופציה זו.		";

$GLOBALS['phpAds_hlp_block_adclicks'] = "	�?�? מבקר הקליק כפולות על ב�?נר תירש�? הקלקה �?חת על ידי {$PRODUCT_NAME}
		בכל פע�?. תכונה זו ב�?ה להבטיח שרק קליק �?חד נרש�? בכל פע�? עבור �?ותו ב�?נר ייחודי ולמספר השניות שתציין. לדוגמ�?: �?�? תקבע נתון זה ל-300 שניות, {$PRODUCT_NAME} תתעד הקלקות �?�? המבקר ל�? הקליק על �?ותו הב�?נר במהלך ה-5 דקות  ה�?חרונות. תכונה זו פעילה רק �?�? הדפדפן מקבל קוקיס.
		";

$GLOBALS['phpAds_hlp_log_source'] = "		�?�? �?תה משתמש בפרמטרי�? של המקור בקוד השליפה של הב�?נר, �?תה ג�? יכול לשמור מידע זה במ�?גר הנתוני�?, כך שתוכל לר�?ות סטטיסטיקה כיצד כל נתוני מקור מתפקדי�?. �?�? �?תה ל�? משתמש בפרמטרי�? של המקור, �?ו �?�? �?תה ל�? רוצה לשמור �?ת המידע, �?תה יכול בבטחה לבטל �?ופציה זו.
		";

$GLOBALS['phpAds_hlp_geotracking_stats'] = "		�?�? �?תה משתמש במ�?גר גי�?וגרפי, �?תה יכול ג�? לשמור �?ת המידע גי�?וגרפי במ�?גר הנתוני�?. �?�? ת�?פשר �?ופציה זו, תוכל לר�?ות סטטיסטיקה �?ודות המקור ממנו מגיעי�? המבקרי�?, וכיצד של ב�?נר מתפקד במדינה מסוימת.
		�?ופציה זו תקפה רק �?�? �?תה משתמש בסטטיסטיקה טקסטו�?לית (מבו�?רת, verbose).
		";

$GLOBALS['phpAds_hlp_log_hostname'] = "		�?�? �?תה רוצה לשמור �?ת ש�? השרת �?ו כתובת ה-IP של כל מבקר בתוך הסטטיסטיקה, �?תה יכול ל�?פשר �?ופציה זו. �?יחסון המידע י�?פשר לך לר�?ות �?יזה שרת משחרר הכי הרבה ב�?נרי�?. �?ופציה זו �?פשרית רק בשימוש סטטיסטיקה טקסטו�?לית (verbose).
		";

$GLOBALS['phpAds_hlp_log_iponly'] = "		שמירת ש�? ספקית השירות של המבקר לוקחת מקו�? רב במ�?גר הנתוני�?. �?�? �?תה מ�?פשר תכונה זו,  {$PRODUCT_NAME} עדיין תשמור מידע �?ודות השירות/מ�?רח, �?ך תשתמש בפחות מקו�? עבור ה-IP בלבד. �?ופציה זו �?ינה �?פשרית �?�? ש�? השירות �?ינו מונפק בידי השרת �?ו {$PRODUCT_NAME}, כיוון שבמקרה זה כתובת ה- תישמר תמיד.
		";

$GLOBALS['phpAds_hlp_reverse_lookup'] = "		ש�? השירות נקבע בדרך כלל דרך ש�? השרת, �?ך במקרי�? מסוימי�? �?פשרות זו כבויה. �?�? �?תה רוצה להכליל �?ת ש�? השירות בתוך הגבלות התפוצה ו/�?ו לשמור סטטיסטיקה �?ודות נתון זה, והשרת �?ינו מנפיק �?ת המידע, עליך לכבות �?ופציה זו. קביעת ש�? השירות גוזל זמן יקר; עובדה שת�?ט �?ת הנפקת הב�?נרי�?.
		";

$GLOBALS['phpAds_hlp_proxy_lookup'] = "	ישנ�? גולשי�? המשתמשי�? בשרת פרוקסי (proxy) לגישת ה�?ינטרנט שלה�?. במקרה זה {$PRODUCT_NAME} תרשו�? �?ת כתובת ה-IP �?ו הש�? של שרת הפרוקסי במקו�? זה של הגולש. �?�? ת�?פשר תכונה זו, {$PRODUCT_NAME} תנסה למצו�? �?ת כתובת ה-IP �?ו ספקית השירות שמ�?חורי שרת הפרוקסי. �?�? �?ין �?פשרות למצו�? �?ת הכתובת המדויקת של הגולש, הי�? תשתמש בכתובת של הפרוקסי במקו�? ז�?ת. �?ופציה זו �?ינה מסומנת כברירת מחדל, כיוון שהי�? מ�?טה �?ת תהליך התיעוד.
		";

$GLOBALS['phpAds_hlp_auto_clean_tables'] = 	"";
$GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "		�?�? �?ופציה זו מסומנת, הסטטיסטיקה הנ�?ספת תימחק �?וטומטית ל�?חר פרק הזמן שקבעת כ�?ן. לדוגמ�?, �?�? רשמת 5 שבועות, סטטיסטיקה ישנה יותר מ-5 שבועות תימחק �?וטומטית
		";
$GLOBALS['phpAds_hlp_auto_clean_userlog'] = 	"";
$GLOBALS['phpAds_hlp_auto_clean_userlog'] =
$GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "		�?ופציה זו תמחק �?וטומטית רישו�? יומן משתמש שהו�? ישן יותר ממספר השבועות שקבעת כ�?ן.
		";

$GLOBALS['phpAds_hlp_geotracking_type'] = "		ניתוב גי�?וגרפי של {$PRODUCT_NAME} להפוך �?ת כתובת ה-IP של המבקר למידע גי�?וגרפי. בהתבסס על מידע זה ניתן לקבוע הגבלות ב�?רני�? �?ו ל�?גור מידע מעקב מ�?יזו מדינה מתקבלת חשיפה מוגברת �?ו הקלקות. �?�? ברצנוך ל�?פשר ז�?ת, יש לבחור ב�?יזה סוג של מ�?גר נתוני�? להשתמש. {$PRODUCT_NAME} תומכת כעת במ�?גרי הנתוני�? של IP2Country
		ו-<a href='http://www.maxmind.com/?rId=phpadsnew2' target='_blank'>GeoIP</a>.
		";


$GLOBALS['phpAds_hlp_geotracking_location'] = "		להוצי�? מקרי�? בה�? יש ברשותך מודול GeoIP של Apache, תצטרך להורות ל-{$PRODUCT_NAME} tהיכן נמצ�? מ�?גר הנתוני�? לניתוב גי�?וגרפי. מומלץ תמיד לשמ�?גר זה יהיה מחוץ לספריית השורש בשרת, �?חרת מבקרי�? יוכלו להוריד �?ליה�? בסיס זה.
		";

$GLOBALS['phpAds_hlp_geotracking_cookie'] = "		המרת כתובת ה-IP למיקו�? גי�?וגרפי לוקחת זמן. כדי למנוע מ-{$PRODUCT_NAME} לבצע ז�?ת בכל פע�? שב�?נר מונפק, ניתן לשמור �?ת המידע בקוקי. הו�? נתון הקוקי נמצ�?, {$PRODUCT_NAME} תשתמש במידע זה במקו�? תהליך המרת הכתובת.
		";

$GLOBALS['phpAds_hlp_ignore_hosts'] = "      �?�? �?ינך רוצה למנות הקלקות וחשיפות מתוך מחשב מסוי�?, �?תה יכול להוסיף �?ותו למערך הזה. �?�? �?יפשרת תיעוד כתובת גולש (Reverse lookup) תוכל להוסיף ש�? מתח�? וכתובת IP,  �?חרת תוכל להשתמש רק בכתובת IP. ניתן להשתמש ג�? בתווי�? משלימי�? (wildcards כמו למשל '*.altavista.com' �?ו '192.168.*').
		";

$GLOBALS['phpAds_hlp_begin_of_week'] = "      עבור רוב הגולשי�? השבוע מתחיל ביו�? שני, �?נחנו הישר�?לי�?/יהודי�? מתחילי�? ביו�? ר�?שון, וכ�?ן המקו�? לקבוע ז�?ת.	";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "        ציין כמה ספרות ל�?חר הנקודה להציג נתוני�? בעמודי הסטטיסטיקה.
		";

$GLOBALS['phpAds_hlp_warn_admin'] = "        {$PRODUCT_NAME} יכולה לשלוח �?ימייל �?�? לקמפיין נותר מספר מועט של חשיפות �?ו הקלקות מוקצבות. זה מופעל כברירת מחדל.
		";

$GLOBALS['phpAds_hlp_warn_client'] = "        {$PRODUCT_NAME} יכולה לשלוח למפרס�? �?ימייל �?�? �?חד הקמפייני�? שלו מגיע לסיו�? המוקצב של חשיפות �?ו הקלקות. נתון זה מופעל כברירת מחדל.		";

$GLOBALS['phpAds_hlp_qmail_patch'] = "		כמה גירס�?ות של qmail מכילות ב�?ג, �?שר גור�? ל�?ימייל שנשלח בידי	{$PRODUCT_NAME} להציג �?ת הכותרות בתוך גוף המכתב. �?�? ת�?פשר קביעה זו, {$PRODUCT_NAME} תשלח �?ימייל בתצורה תו�?מת למתקונת qmail.
		";

$GLOBALS['phpAds_hlp_warn_limit'] = "       הסף שממנו{$PRODUCT_NAME} תתחיל לשלוח �?יתותי �?זהרה ב�?ימייל. נתון זה נקבע על 100 כברירת מחדל.	";

$GLOBALS['phpAds_hlp_allow_invocation_plain'] =
$GLOBALS['phpAds_hlp_allow_invocation_js'] =
$GLOBALS['phpAds_hlp_allow_invocation_frame'] =
$GLOBALS['phpAds_hlp_allow_invocation_xmlrpc'] =
$GLOBALS['phpAds_hlp_allow_invocation_local'] =
$GLOBALS['phpAds_hlp_allow_invocation_interstitial'] =
$GLOBALS['phpAds_hlp_allow_invocation_popup'] = "		קביעות �?לה מ�?פשרות שליטה על סוג השליפה של ב�?נרי�?. �?�? �?חד מסוגי השליפה ה�?לה מבוטל, הו�? ל�? יהיה מוצג כ�?פשרות בעמוד מחולל הקוד. חשוב: שיטות השליפה יעבדו �?פילו �?�? הן מבוטלות - הן רק ל�? תוצגנה בעמודי הכנת הקוד השתול.	";

$GLOBALS['phpAds_hlp_con_key'] = "        {$PRODUCT_NAME} מכילה מערכת שחזור חזקה, העושה שימוש בבחירה ישירה. לפרטי�? נוספי�? עיין במדריך המשתמש. ב�?מצעות �?ופציה זו תוכל להפעיל מילות מפתח כתנ�?י. מופעל כברירת מחדל.		";

$GLOBALS['phpAds_hlp_mult_key'] = "     �?�? �?תה משתמש בבחירה ישירה לתצוגת ב�?נרי�?, תוכל לציין מילת מפתח �?חת �?ו יותר עבור כל ב�?נר. �?ופציה זו דורשת הפעלה �?�? �?תה רוצה לציין יותר ממילה �?חת. מופעלת כברירת מחדל.	";

$GLOBALS['phpAds_hlp_acl'] = "      �?�? �?תה ל�? משתמש בהגבלות הפצה, תוכל להשבית �?ופציה זו. זה י�?יץ �?ת {$PRODUCT_NAME} במעט.
		";

$GLOBALS['phpAds_hlp_default_banner_url'] =
$GLOBALS['phpAds_hlp_default_banner_target'] = "       �?�? {$PRODUCT_NAME} ל�? יכולה להתחבר לבסיס הנתוני�?, �?ו ש�?ינה מוצ�?ת ב�?נר תו�?�? כלל, לדוגמ�? - �?�? בסיס הנתוני�? קרס �?ו נמחק, הי�? ל�? תציג מ�?ומה. יש משתמשי�? המעדיפי�? לציין ב�?נר חלופי, �?שר יוצג כברירת מחדל במקרי�? �?לו. הב�?נר שיצויין כ�?ן ל�? יתועד מבחינת חשיפה �?ו הקלקה, ול�? יעשה בו שימוש �?�? יש עדיין ב�?נרי�? פעילי�? בבסיס הנתוני�?. �?ופציה זו כבויה כברירת מחדל.";

$GLOBALS['phpAds_hlp_delivery_caching'] = "		בכדי להמהיר הנפקת ב�?נרי�?, {$PRODUCT_NAME} משתמשת בזכרון מטמון הכולל �?ת כל המידע הנדרש להנפקת הב�?נר לגולש. מטמון זיכרון זה נשמר במ�?גר הנתוני�? כברירת מחדל, �?ך להמהרה גדולה יותר �?פשר �?פילו למשור �?ותו כקובץ �?ו בזכרון משותףץ זכרון משותף הו�? המהיר מכול�?, קבצי�? מהיר�? ג�? כן. מומלץ של�? לבטל �?ת זכרון המטמון �?חרת הביצועי�? ייגרעו בהרבה.
		";


$GLOBALS['phpAds_hlp_type_sql_allow'] =
$GLOBALS['phpAds_hlp_type_web_allow'] =
$GLOBALS['phpAds_hlp_type_url_allow'] =
$GLOBALS['phpAds_hlp_type_html_allow'] =
$GLOBALS['phpAds_hlp_type_txt_allow'] = "        {$PRODUCT_NAME} יכולה להשתמש בסוגי�? שוני�? של ב�?נרי�? ול�?חסן �?ות�? בדרכי�? שונות. שתי ה�?ופציות הר�?שונות משמשות ל�?יחסון מקומי על השרת. �?תה יכול להשתמש בממשק המנהל להעל�?ת ב�?נר ו-{$PRODUCT_NAME} תשמור �?ותו בבסיס הנתוני�? מסוג SQL �?ו בתוך תיקייה בשרת. תוכל להשתמש ג�? בב�?נר המ�?וחסן בשרת חיצוני �?ו בקוד HTML שיוצר ב�?נר.		";

$GLOBALS['phpAds_hlp_type_web_mode'] = "  �?�? �?תה רוצה להשתמש בב�?נרי�? המ�?וחסני�? על השרת, עליך לעצב �?ת הקביעה הזו. �?�? �?תה רוצה ל�?חסן �?ת הב�?נרי�? בתיקיה מקומית, קבע �?ופציה זו ל<i>תקייה מקומית</i>. �?�? �?תה רוצה ל�?חסן �?ת הב�?נר על שרת קבצי�? (FTP) חיצוני, קבע �?ופציה זו ל<i>שרת FTP חצוני</i>. בשרתי�? מסוימי�? �?פשר שתרצה להשתמש ב�?ופציית FTP �?פילו על השרת המקומי.
		";

$GLOBALS['phpAds_hlp_type_web_dir'] = "       ציין �?ת התיקייה שלתוכה {$PRODUCT_NAME} צריכה להעתיק �?ת הב�?נר שתעלה. תיקייה זו צריכה להיות במצב �?פשרי לכתיבה על ידי PHP, שזה �?ומר ש�?תה צריך לשנות �?ת היתרי הגישה ביוניקס (chmod) למצב כתיבה לכל. התיקייה שתציין צריכה להיות במסלול הר�?שוני של ה�?תר (תקיית שורש), וצריכה להיות נגישה לטיפול ישיר בקבצי�? בידי השרת. �?נ�? �?ל תרשו�? קן נטוי בסיומת (סל�?ש נטוי [/]). �?תה חייב לציין �?ופציה זו רק �?�? קבעת �?ת שיטת ה�?יחסון ל<i>תקייה מקומית</i>.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_host'] = "	�?�? קבעת �?ת שיטת ה�?יחסון ל<i>שרת FTP חיצוני</i> עליך לציין �?ת כתובת ה-IP �?ו ש�? המתח�? (דומיין) של שרת ה-FTP להיכן ש-{$PRODUCT_NAME} תצטרך להעתיק �?ת הב�?נרי�? שיועלו.	";

$GLOBALS['phpAds_hlp_type_web_ftp_path'] = "	�?�? קבעת �?ת שיטת ה�?יחסון ל<i>שרת FTP חיצוני</i> עליך לציין �?ת התיקייה על השרת הזה, היכן ש{$PRODUCT_NAME} תצטרך להעתיק �?ת הב�?נרי�? שיועלו.	";

$GLOBALS['phpAds_hlp_type_web_ftp_user'] = "		�?�? קבעת �?ת שיטת ה�?יחסון ל<i>שרת FTP חיצוני</i> עליך לציין �?ת ש�? המשתמש שבו {$PRODUCT_NAME} צריכה להשתמש כדי להתחבר לשרת ה-FTP החיצוני.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_password'] = "		�?�? קבעת �?ת שיטת ה�?יחסון ל<i>שרת FTP חיצוני</i> עליך לציין �?ת הסיסמ�? שבה {$PRODUCT_NAME} צריכה להשתמש כדי להתחבר לשרת ה-FTP החיצוני.";

$GLOBALS['phpAds_hlp_type_web_url'] = "       �?�? �?תה מ�?חסן �?ת הב�?נרי�? על שרת �?ינטרנט, {$PRODUCT_NAME} צריכה לדעת �?יזו כתובת  URL ציבורית קשורה לתיקייה שציינת למטה. נ�? ל�? לרשו�? סל�?ש סופי  (/).";

$GLOBALS['phpAds_hlp_type_html_auto'] = "       �?�? �?ופציה זו דלוקה {$PRODUCT_NAME} תשנה �?וטומטית �?ת קוד הב�?נרי�? מסוג  HTML כדי ל�?פשר תיעוד הקלקות. למרות ז�?ת, תמיד תוכל לשנות �?ופציה זו על בסיס פרטי של כל ב�?נר.";

$GLOBALS['phpAds_hlp_type_html_php'] = "      ניתן ל�?פשר ל{$PRODUCT_NAME} להפעיל קוד PHP המוטבע בתוך ב�?נר מסוג HTML. �?ופציה זו כבויה כברירת מחדל.";

$GLOBALS['phpAds_hlp_admin'] = "       ש�? המשתמש של ה�?חר�?י (�?דמיניסטרטור). ב�?מצעות ש�? זה ניתן להתחבר לממשק המנהלה.";

$GLOBALS['phpAds_hlp_pwold'] =
$GLOBALS['phpAds_hlp_pw'] =
$GLOBALS['phpAds_hlp_pw2'] = "       כדי לשנות �?ת הסיסמ�? של המנהל, עליך לספק �?ת הסיסמ�? הקיימת למעלה. בנוסף, תצטרך לרשו�? �?ת הסיסמ�? החדשה פעמיי�?, וז�?ת למניעת טעויות.";

$GLOBALS['phpAds_hlp_admin_fullname'] = "        ציין �?ת הש�? המל�? של ה�?חר�?י/מנהל. בש�? זה ייעשה שימוש בשליחת סטטיסטיקה ב�?ימייל.	";

$GLOBALS['phpAds_hlp_admin_email'] = "      כתובת ה�?ימייל של ה�?חר�?י/מנהל. זו הכתובת שתופיע בשדה (מ-)  בשליחת ה�?סטטיסטיקה ב�?ימייל.";

$GLOBALS['phpAds_hlp_admin_email_headers'] = "      �?תה יכול לשנות �?ת כותרת ה�?ימייל שבה {$PRODUCT_NAME} משתמשת למשלוח �?ימייל.";

$GLOBALS['phpAds_hlp_admin_novice'] = "      �?�? �?תה רוצה לקבל �?תר�?ה לפני מחיקת מפרס�?/י�?, קמפיין �?ו ב�?נרי�?, סמן �?ופציה זו.	";

$GLOBALS['phpAds_hlp_client_welcome'] =
$GLOBALS['phpAds_hlp_client_welcome_msg'] = "     �?�? תפעיל תכונה זו, תוצג הודעה הקדמה בעמוד הר�?שון שכל מפרס�? יר�?ה בעת החיבור למערכת. �?תה יכול להת�?י�? �?ותו �?ישית לצרכיך על ידי עריכת הקובץ 'welcome.html' המצוי בתיקיית 'admin/templates'. �?פשר שתרצה להכיל ש�? �?ת ש�? החברה, קשר, הלוגו שלך, קישור לעמודי מחירי�? וכדומה.";

$GLOBALS['phpAds_hlp_updates_frequency'] = "		�?�? �?תה רוצה לבדוק ה�?�? יצ�?ה גירסה חדשה של {$PRODUCT_NAME} �?תה יכול ל�?פשר פונקציה זו. ניתן לקבוע �?ת המרווחי�? שבין בדיקה �?חת לשניה, בה�?  {$PRODUCT_NAME} תבצע התחברות לשרת העדכוני�?. �?�? תימצ�? גירסה חדשה, יקפוץ לפניך חלון ע�? המידע הדרוש.";

$GLOBALS['phpAds_hlp_userlog_email'] = "	�?�? �?תה רוצה לשמור עותק של ה�?ימייל הנשלח ב�?מצעות {$PRODUCT_NAME} �?תה יכול ל�?פשר פונצקיה זו. הודעות ה�?ימייל נשמרות בתיעוד המשתמש.	";
$GLOBALS['phpAds_hlp_userlog_priority'] = "		כדי לווד�? שחישובי הקדימויות רצי�? נכונה, �?תה יכול לשמור דוח �?ודות החישוב שנעשה בכל שעה. הדוח כולל �?ת הפרופיל הנצפה וכמה קדימות מנותבת לכל ב�?נר. המידע עשוי להיות שימושי �?�? �?תה רוצה להגיש �?ותו בצירוף קבילת ב�?ג �?ודות פעילות הקצ�?ת הקדימויות. הדוחות נשמרי�? בתוך תיעוד המשתמש.	";

$GLOBALS['phpAds_hlp_userlog_autoclean'] = "		כדי להבטיח שבסיס הנתוני�? דולל נכונה, ניתן לשמור דיווח �?ודות מה �?ירע במהלך פעולה זו. מידע זה נשמ�? ביומן המשתמש.
		";

$GLOBALS['phpAds_hlp_default_banner_weight'] = "		�?�? �?תה רוצה להשתמש במשקל ב�?נר התחלתי גבוה יותר, �?תה יכול לקבוע �?ת זה כ�?ן. ברירת המחדל הי�? 1.";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "		�?�? �?תה רוצה להשתמש במשקל קמפיין התחלתי גבוה יותר, �?תה יכול לקבוע �?ת המשקל המבוקש כ�?ן. ברירת המחדל הי�? 1.	";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "		�?�? �?ופציה זו מסומנת, מידע נוסף עבור כל קמפיין יוצג בעמוד <i>סקירת קמפיין</i> . מידע נוסף זה כולל �?ת מספר החשיפות הנותרות, ת�?ריך ההפעלה וקביעות הקדימויות.";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "		�?�? �?ופציה זו פעילה, מידע נוסף �?ודות כל ב�?נר יוצג בעמוד <i>סקירת ב�?נרי�?</i> . מידע נוסף זה כולל �?ת עמוד המטרה (�?ליו יילקח הגולש ל�?חר הקלה), מילות מפתח, גודל הב�?נר ומשקלו.";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "	�?�? �?ופציה זו מופעלת יוצגו כל הב�?נרי�? בצורה ממשית בעמוד <i>סקירת ב�?נרי�?</i> . �?�? ה�?ופציה כבויה, עדיין יהיה �?פשר לצפות בכל ב�?נר על ידי לחיצה על המשולש הסמוך �?ליו בעמוד <i>סקירת ב�?נרי�?</i>.
		";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "		�?�? �?ופציה זו פעילה יוצג ב�?נר HTML בצורה מצי�?ותית, וז�?ת במקו�? קוד HTML פשוט. �?ופציה זו כבויה כברירת מחדל כיוון שב�?נרי�? מסוג HTML עשויי�? להתנגש ע�? ממשק המשתמש. �?�? �?ופציה זו כבויה עדיין �?פשרי לצפות בב�?נר HTML ממשי ב�?מצעות לחיצה על כפתור <i>הצג ב�?נר</i> הסמוך לקוד ה-HTML.";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "		�?�? �?ופציה זו פעילה יוצג הב�?ר בכותרת של  העמודי�? <i>תכונות הב�?נר</i>,
		<i>�?ופציות תפוצה</i> ו-<i>�?זורי�? מקושרי�?</i>. �?�? �?ופציה זו מבוטלת, עדיין ניתן לצפות בב�?נר ב�?מצעות לחיצה על כפתור <i>הצג ב�?נר</i> בכותרת העמודי�?.";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "	�?�? �?ופציה זו פעילה כל הב�?נרי�? ש�?ינ�? פעילי�?, הקמפייני�? והמפרסמי�?, יוסתרו מהתצוגה בעמודי�? <i>מפרסמי�? ומערכות</i> ו-<i>סקירת קמפיין</i>. �?�? פונקציה זו פעילה, עדיין �?פשרי לצפות בפריטי�? המוסתרי�? ב�?מצעות הקלקה על כפתור <i>הצג הכל</i> שבתחתית העמודי�?	";

$GLOBALS['phpAds_hlp_gui_show_matching'] = "		�?�? �?ופציה זו פעילה, הב�?נר התו�?�? ייר�?ה בעמוד <i>ב�?נרי�? מקושרי�?</i> , �?�?  <i>בחירת קמפיין</i> הי�? השיטה הנבחרת. זה מ�?פשר לר�?ות במדויק �?לו ב�?נרי�? מיועדי�? להנפקה �?�? הקמפייני�? מקושרי�?. �?פשר יהיה ג�? לצפות בתצוגה מקדמת של הב�?נרי�? התו�?מי�?.
		";

$GLOBALS['phpAds_hlp_gui_show_parents'] = "		�?�? �?ופציה זו פעילה, הקמפייני�? הר�?שיי�? של הב�?נרי�? יוצגו בעמוד <i>ב�?נרי�? מקושרי�?</i>, �?�? <i>בחירת ב�?נר</i> הי�? השיטה הנבחרת. זה י�?פשר לר�?ות להיכן שייך כל ב�?נר לפני קישורו. זה �?ומר ג�? שהב�?נרי�? מקובצי�? בידי קמפיין-�?�? וכבר ל�? שמורי�? בסדר �?לפביתי.
		";

$GLOBALS['phpAds_hlp_gui_link_compact_limit'] = "		כברירת מחדל כל הב�?נרי�? והקמפייני�? הקיימי�? מוצגי�? בעמוד<i>ב�?נרי�? מקושרי�?</i>.
	כיוון שעמוד זה יכול להיות �?רוך מ�?וד (�?�? יש לך ב�?נרי�? רבי�?), �?ופציה זו מ�?פשרת קביעת מספר מרבי של פריטי�? לעמוד.
		";



?>