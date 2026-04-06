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
 * Strings for component 'block_opencast', language 'ar', version '4.0'.
 *
 * @package     block_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acl_settingcontrolafter'] = 'السماح بأداة التحكم بإظهار الحلقة بعد المعالجة';
$string['acl_settingcontrolafter_desc'] = 'عند تمكينه، يمكن للمعلمين التحكم بحالة إظهار الحلقة بعد معالجتها في Opencast.';
$string['acl_settingcontrolgroup_desc'] = 'عند تمكينه، لن يتمكن المعلمون من التحكم بحالة إظهار الحلقة لكل مستخدمي المساق فحسب، بل سيمكنهم أيضاً تقييد حالة الإظهار وجعلها مقتصرة على مجموعات معينة في المساق.';
$string['acl_settingheader'] = 'التحكم بحالة إظهار الحلقة';
$string['aclgroupdeleted'] = 'تم حذف إمكانية الوصول إلى الفيديو: {$a->title}';
$string['aclnothingtobesaved'] = 'لم يتم إجراء أي تعديلات في إعدادات الإظهار.';
$string['aclrolesadded'] = 'لقد تمت إثارة التغيير في إعدادات الإظهار للسماح لكل طلاب المساق بالوصول إلى الفيديو: {$a->title}<br />يرجى تنشيط صفحة الموقع بعد برهة لمشاهدة حالة الإظهار الحالية.';
$string['aclrolesaddedgroup'] = 'لقد تمت إثارة التغيير في إعدادات الإظهار للسماح لطلاب المجموعات المحددة بالوصول إلى الفيديو: {$a->title}<br />يرجى تنشيط صفحة الموقع بعد برهة لمشاهدة حالة الإظهار الحالية.';
$string['aclroleschangeerror'] = 'وقع خطأ عند تغيير حالة الإظهار للفيديو: {$a->title}<br />بعض التغييرات ربما لم يتم حفظها
إذا تكرر حدوث ذلك مراراً، لطفاً، تواصل مع فريق الدعم الفني.';
$string['aclrolesdeleted'] = 'لقد تمت إثارة التغيير في إعدادات الإظهار لمنع كل طلاب المساق من الوصول إلى الفيديو: {$a->title}<br />يرجى تنشيط صفحة الموقع بعد برهة لمشاهدة حالة الإظهار الحالية.';
$string['addcatalog'] = 'إضافة بيانات وصفية جديدة';
$string['addrole'] = 'إضافة دور جديد';
$string['allowunassigndesc'] = 'حذف واجب مسلسل المقررات الدراسية للتحكم بحالة الإظهار في منتقي الملفات وقوائم المقررات الدراسية. هذه الميزة متاحة فقط عندما يكون ممكناً وجود أحداث بدون مسلسلات في opencast. لطفاً، إسأل المشرف على نظام opencast قبل تفعيله.';
$string['blocksettings'] = 'إعدادات عيِّنة الكتلة';
$string['cachevalidtime'] = 'مهلة صلاحية الخبء';
$string['cachevalidtime_desc'] = 'الوقت بالثواني قبل الحاجة إلى تنشيط الخبء الخاص ببيانات الفيديو لكل مساق.';
$string['changevisibility'] = 'تبديل حالة الإظهار';
$string['changevisibility_group'] = 'الفيديو مرئي لكل الطلبة الأعضاء في المجموعات المحددة. أنقر لتبديل حالة الإظهار.';
$string['changevisibility_header'] = 'تغيير حالة إظهار {$a->title}';
$string['changevisibility_hidden'] = 'الفيديو غير مرئي لأي طالب. أنقر لتبديل حالة الإظهار.';
$string['changevisibility_mixed'] = 'حالة إظهار الفيديو هي بوضع غير صحيح. أنقر لاختيار حالة الإظهار الصحيحة.';
$string['changevisibility_visible'] = 'الفيديو مرئي لكل طلبة المساق. أنقر لتبديل حالة الإظهار.';
$string['deleteevent'] = 'حذف الحدث في Opencast';
$string['deleteeventdesc'] = 'أنت على وشك حذف هذا الفيديو بشكل دائمي وغير قابل للتراجع عنه من Opencast.<br />كل الروابط المضمنة إليه ستصير غير صالحة. يرجى عدم المتابعة إلا إذا كنت متأكد تمامًا.';
$string['description'] = 'الوصف';
$string['descriptionmdfn'] = 'اسم الحقل';
$string['descriptionmdfn_help'] = 'هذا هو الاسم الفعلي للحقل يتم تمريره بمثابة بيانات وصفية (مُعرَّف)؛ الاسم المعروض وفقًا لاسم الحقل هذا ينبغي ضبطه في جملة اللغة.';
$string['dodeleteevent'] = 'حذف الفيديو بشكل دائمي';
$string['error_eventid_taskdata_missing'] = 'بيانات المهمة لا تحتوي مُعرَّف الحدث.
    مهمة تكرار الحدث في Opencast ({$a->taskid}) للمساق {$a->coursefullname} (المُعرَّف: {$a->courseid}).';
$string['errorduplicatetaskterminate'] = 'وقع خطأ عند تنفيذ مهمة تكرار الحدث: {$a}
    بعد المحاولة لعدة مرات، سيتم إنهاء المهمة الآن.';
$string['errorrestoremissingevents_subj'] = 'خطأ في Opencast في أثناء عملية الاستعادة';
$string['eventdeleted'] = 'تم حذف الفيديو.';
$string['eventdeletedfailed'] = 'فشل حذف الحدث';
$string['eventdeletionstarted'] = 'سيتم حذف الفيديو قريبًا';
$string['eventuploadfailed'] = 'الرفع فشل';
$string['eventuploadsucceeded'] = 'الرفع نجح';
$string['form_seriestitle'] = 'عنوان المسلسل';
$string['general_settings'] = 'الإعدادات العامة';
$string['heading_name'] = 'اسم الحقل';
$string['htitle'] = 'العنوان';
$string['hvisibility'] = 'حالة الإظهار';
$string['importvideos_settingenabled'] = 'السماح باستيراد الفيديو';
$string['importvideos_settingmanualenabled'] = 'السماح باستيراد الفيديو يدويًا';
$string['missingevent'] = 'إنشاء الحدث فشل';
$string['mstatecreatingevent'] = 'الرفع جارٍ...';
$string['opencast:deleteevent'] = 'أخيرًا حذف الفيديو (الحدث) في opencast';
$string['opencast:unassignevent'] = 'إلغاء تعيين الفيديو للمساق، حيث تم رفع الفيديو.';
$string['privacy:metadata:block_opencast_uploadjob:opencasteventid'] = 'مُعرَّف حدث opencast الذي تم إنشاؤه خلال عملية الرفع';
$string['space_catalogname'] = 'هذا الحقل لا ينبغي أن يحتوي فراغاً';
$string['startTime'] = 'الوقت';
$string['title'] = 'العنوان';
$string['uploadfileextensions'] = 'إمتدادات الملفات المسموح بها';
$string['uploadingeventfailed'] = 'إنشاء الحدث فشل';
$string['uploadjobssaved'] = 'تم رفع الفيديو بنجاح.<br />تمت جدولة الفيديو للنقل إلى Opencast الآن. ليس عليك الانتظار عند هذه الصفحة ريثما يكتمل النقل.';
$string['visibility'] = 'حالة إظهار الفيديو';
$string['visibility_group'] = 'السماح لكل الطلاب العائدين للمجموعات المحددة بالوصول إلى الفيديو';
$string['visibility_show'] = 'السماح لكل طلاب المساق بالوصول إلى الفيديو';
$string['worklowisrunning'] = 'مخطط سير العمل قيد التشغيل حالياً. لا يمكنك تغيير حالة الإظهار الآن.';
