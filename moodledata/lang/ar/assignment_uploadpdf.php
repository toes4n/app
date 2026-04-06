<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'assignment_uploadpdf', language 'ar', version '4.0'.
 *
 * @package     assignment_uploadpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backtocommentlist'] = 'عودة إلى قائمة التعليقات';
$string['cannotedit'] = 'المشرفون وحدهم يمكنهم تحرير مظاهر الموقع';
$string['choosetemplate'] = 'إختر المظهر لتحريره';
$string['colourgreen'] = 'أخضر';
$string['colourwhite'] = 'أبيض';
$string['commentcolour'] = '[,] - لون خلفية التعليق';
$string['coversheet_help'] = 'الملف المحدد هنا (الذي ينبغي أن يكون بصيغة PDF) سيتم إرفاقه تلقائيًا إلى بداية الملفات المرفوعة من قبل الطالب.<br/>
سيكون هناك رابط إلى ورقة الغلاف هذه في صفحة الرفع للطالب ليكون على دراية بما ستتم إضافته.<br/>
<em>ملاحظة:</em> من الممكن تلقائيًا تعبئة التفاصيل في صفحة الواجهة لورقة الغلاف هذه عبر استعمال المظاهر (أنظر الفقرة التالية في الأسفل في صفحة الإعدادات).';
$string['coversheetnotpdf'] = 'صفحة الغلاف ينبغي أن تكون بصيغة PDF أو (فارغة)';
$string['coversheettemplate'] = 'المظهر';
$string['coversheettemplate_help'] = 'إذا حددت المظهر، فعندها، قبل أن يتمكن الطالب من تسليم عمله، سيكون عليه تعبئة عدد من التفاصيل (التفاصيل بالضبط مبينة في المظهر). ستتم إضافة تلك التفاصيل تلقائيًا إلى صفحة الواجهة لورقة الغلاف وفي المواضع المحددة من قبل المظهر.<br/>
يمكنك إنشاء/حذف/تعديل المظاهر عبر النقر على زر \'تحرير المظاهر...\'.<br/>
<em>ملاحظة:</em> إختيار المظهر بدون تحديد ورقة الغلاف لن يكون له تأثير.';
$string['deletetemplate'] = 'حذف المظهر';
$string['duplicatetemplate'] = 'تكرار المظهر';
$string['edittemplate'] = 'تحرير المظاهر';
$string['edittemplatetip'] = 'تحرير المظاهر';
$string['heading_templatedatamissing'] = 'معلومات صفحة الغلاف غير مملوءة بعد';
$string['itemsetting'] = 'القيمة';
$string['itemsettingmore'] = 'اسم الحقل (للحقول النصية) أو تنسيق التاريخ (مثل d/m/Y)';
$string['keyboardnext'] = 'n - الصفحة التالية';
$string['keyboardprev'] = 'p - الصفحة السابقة';
$string['newtemplate'] = 'مظهر جديد...';
$string['onlypdf'] = 'كل الملفات ينبغي أن تكون بصيغة PDF';
$string['onlypdf_help'] = 'إختيار \'نعم\' في هذا الخيار سيمنع الطلاب من تسليم أي ملفات ليست بصيغة PDF.<br/>
إذا اخترت \'لا\'، عندها سيتلقى الطلاب تنبيهًا بشأن الملفات التي ليست بصيغة PDF، ولكن سيضل بإمكانهم تسليمها <em>ما دام واحد منها على الأقل بصيغة PDF</em>.<br/>
هذا الخيار الثاني قد يكون مفيدًا إذا أردت من الطلاب تسليم ملفات مدعومة ذات عناصر تفاعلية لا تزال قابلة للتعديل عليها (مثل جداول البيانات التي تتضمن دوال أو معادلات)، ولكن ستكون ملفات PDF وحدها متاحة لوضع التعليقات.';
$string['openfirstpage'] = 'إظهار الصفحة الأولى';
$string['openlinknewwindow'] = 'فتح الروابط في نافذة جديدة';
$string['opennewwindow'] = 'فتح هذه الصفحة في نافذة جديدة';
$string['pagenumber'] = 'الصفحة';
$string['pluginname'] = 'رفع PDF';
$string['previewinstructions'] = 'يرجى رفع صفحة الغلاف (PDF) للمساعدة في استعراض هذ المظهر';
$string['savetemplate'] = 'حفظ المظهر';
$string['sitetemplate'] = 'مظهر لكل الموقع';
$string['sitetemplatehelp'] = '(فقط المشرف يمكنه تحرير هذا الإعداد)';
$string['templatedatamissing'] = 'عليك إملاء كل التفاصيل المطلوبة لإنشاء صفحة الغلاف لهذا الواجب';
$string['templatename'] = 'اسم المظهر';
$string['templatenotused'] = 'هذا المظهر ليس مستعملاً حالياً';
$string['templateusecount'] = 'تحذير: هذا المظهر مستعمل حالياً من قبل {$a} من الواجبات - كن حذراً عند إجراء تعديلات عليه';
$string['viewfeedback'] = 'معاينة الإفادة بنافذة جديدة';
