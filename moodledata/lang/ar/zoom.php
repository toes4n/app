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
 * Strings for component 'zoom', language 'ar', version '4.0'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtocalendar'] = 'إضافة للتقويم';
$string['allmeetings'] = 'كل الاجتماعات';
$string['alternative_hosts'] = 'المضيفين البدلاء';
$string['alternative_hosts_help'] = 'يسمح لك خيار المضيف البديل بجدولة الاجتماعات وتعيين مستخدم مدفوع آخر على نفس الحساب لبدء الاجتماع أو الندوة عبر الإنترنت إذا كنت غير قادر على ذلك. سيتلقى هذا المستخدم رسالة بريد إلكتروني لإعلامه بأنه قد تمت إضافته كمضيف بديل ، مع رابط لبدء الاجتماع. افصل بين عناوين البريد الإلكتروني المتعددة بفاصلة (بدون مسافات).';
$string['apikey'] = 'مفتاح واجهة تطبيق Zoom';
$string['apisecret'] = 'Zoom API secret';
$string['apiurl'] = 'رابط واجهة تطبيق Zoom';
$string['audio_both'] = 'الاتصالات عبر بروتوكول الإنترنت VoIP والاتصالات الهاتفية';
$string['audio_telephony'] = 'عن طريق الهاتف فقط';
$string['audio_voip'] = 'الاتصالات عبر بروتوكول الإنترنت VoIP فقط';
$string['cachedef_zoomid'] = 'الرقم التعريفي لـ Zoom الخاص بالمستخدم';
$string['calendardescriptionURL'] = 'رابط حضور الاجتماع {$a}.';
$string['calendardescriptionintro'] = '\\nالوصف:\\n{\\$a}';
$string['calendariconalt'] = 'أيقونة التقويم';
$string['connectionfailed'] = 'فشل الاتصال:';
$string['connectionok'] = 'الاتصال يعمل.';
$string['connectionstatus'] = 'حالة الاتصال';
$string['defaultsettings'] = 'الاعدادات الافتراضية لـ Zoom';
$string['defaultsettings_help'] = 'هذه الاعدادات تحدد الاعدادات الافتراضية لاجتماعات وندوات Zoom';
$string['downloadical'] = 'تحميل iCal';
$string['duration'] = 'المدة (بالدقائق)';
$string['endtime'] = 'زمن النهاية';
$string['err_duration_nonpositive'] = 'يجب أن تكون المدة إيجابية.';
$string['err_duration_too_long'] = 'لا يمكن أن تتجاوز المدة 150 ساعة.';
$string['err_long_timeframe'] = 'الإطار الزمني المطلوب طويل جدًا ، مع عرض نتائج الشهر الأخير في النطاق.';
$string['err_password'] = 'يجب أن تقتصر كلمة المرور على الرموز  [a-z A-Z 0-9 @ - _ *]. 10 حروف كحد أقصى';
$string['err_start_time_past'] = 'لا يمكن أن يكون تاريخ البدء في الماضي.';
$string['errorwebservice'] = 'خطأ خدمة الويب الخاصة بـ Zoom: {$a}.';
$string['export'] = 'تصدير';
$string['firstjoin'] = 'أول قادر على الانضمام';
$string['firstjoin_desc'] = 'أقرب مستخدم يمكنه الانضمام إلى اجتماع مجدول (دقائق قبل البدء).';
$string['getmeetingreports'] = 'الحصول على تقرير اجتماع من Zoom';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">الاستضافات البديلة</a> يمكنها بدء اجتماعات زوم وإدارة غرفة الانتظار.';
$string['invalid_status'] = 'الحالة غير صحيحة، تحقق من قاعدة البيانات.';
$string['invitationregex'] = 'التعبير الاعتيادي لدعوة Zoom وإمكانياته';
$string['invitationregex_help'] = 'تعريف أنماط التعبير الاعتيادي لعزل كل جزء من دعوة Zoom ليصير بالإمكان التحكم بالمعلومات عبر الإمكانيات.';
$string['invitationregexenabled'] = 'تمكين التعبير الاعتيادي لدعوة Zoom وإمكانياته.';
$string['join'] = 'انضمام';
$string['join_meeting'] = 'انضمام إلى الاجتماع';
$string['joinbeforehost'] = 'انضمام للاجتماع قبل المضيف';
$string['jointime'] = 'زمن الانضمام';
$string['leavetime'] = 'زمن المغادرة';
$string['licensesnumber'] = 'عدد التراخيص';
$string['lowlicenses'] = 'إذا تجاوز عدد التراخيص الخاصة بك التراخيص المطلوبة ، فعند قيام المستخدم بإنشاء أي نشاط جديد ، سيتم تعيين ترخيص مدفوع عن طريق خفض حالة مستخدم آخر. يكون الخيار فعالًا عندما يكون عدد التراخيص المدفوعة النشطة أكثر من 5.';
$string['meeting_finished'] = 'انتهى';
$string['meeting_nonexistent_on_zoom'] = 'غير موجود في Zoom';
$string['meeting_not_started'] = 'لم يبدأ';
$string['meeting_started'] = 'في تقدم';
$string['meeting_time'] = 'زمن البداية';
$string['modulename'] = 'اجتماع Zoom';
$string['modulename_help'] = 'Zoom عبارة عن تطبيق لعقد مؤتمرات الفيديو والويب يمنح المستخدمين المصرح لهم القدرة على استضافة الاجتماعات عبر الإنترنت.';
$string['modulenameplural'] = 'اجتماعات Zoom';
$string['newmeetings'] = 'اجتماعات جديدة';
$string['nomeetinginstances'] = 'لم يتم العثور على جلسات لهذا الاجتماع.';
$string['noparticipants'] = 'لم يتم العثور على مشاركين لهذه الجلسة في هذا الوقت.';
$string['nosessions'] = 'لم يتم العثور على جلسات للنطاق المحدد.';
$string['nozooms'] = 'ليس هنالك اجتماعات';
$string['off'] = 'إيقاف';
$string['oldmeetings'] = 'اجتماعات ختامية';
$string['on'] = 'تشغيل';
$string['option_audio'] = 'خيارات الصوت';
$string['option_host_video'] = 'فيديو المضيف';
$string['option_jbh'] = 'تمكين الانضمام قبل المضيف';
$string['option_jbh_help'] = 'تمكين هذا الخيار يسمح للحاضرين بالانضمام إلى الاجتماع قبل انضمام المضيف أو عندما يتعذر عليه حضور الاجتماع.\\n\\nهذا الخيار حصري مقابل خيار \'غرفة الانتظار\'، لذلك اختيار أحدهما سيعطل الآخر.';
$string['option_participants_video'] = 'فيديو المشاركين';
$string['option_waiting_room'] = 'غرفة الانتظار';
$string['participants'] = 'المشاركين';
$string['password'] = 'كلمة المرور';
$string['passwordprotected'] = 'كلمة السر المحمية';
$string['pluginadministration'] = 'إدارة اجتماع Zoom';
$string['pluginname'] = 'اجتماع Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'جدول قاعدة البيانات الذي يقوم بتخزين معلومات حول كل نسخة للاجتماع';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'اسم الاجتماع الذي حضره المستخدم';
$string['privacy:metadata:zoom_meeting_participants'] = 'جدول قاعدة البيانات الذي يخزن معلومات حول المشاركين';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'كم من الوقت مكث المشارك في الاجتماع';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'الوقت الذي انضم فيه المشارك إلى الاجتماع';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'الوقت الذي غادر فيه المشارك الاجتماع';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'اسم المشارك';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'البريد الالكتروني للمشارك';
$string['recurringmeeting'] = 'متكرر';
$string['recurringmeeting_help'] = 'ليس له تاريخ انتهاء';
$string['recurringmeetinglong'] = 'اجتماع متكرر (اجتماع بدون تاريخ أو وقت انتهاء)';
$string['redefinelicenses'] = 'إعادة تحديد التراخيص';
$string['report'] = 'التقارير';
$string['resetapicalls'] = 'إعادة ضبط عدد مكالمات API المتاحة';
$string['sessions'] = 'الجلسات';
$string['start'] = 'ابدأ';
$string['start_meeting'] = 'ابدأ الاجتماع';
$string['start_time'] = 'في أي وقت';
$string['starthostjoins'] = 'ابدأ الفيديو عند انضمام المضيف';
$string['startpartjoins'] = 'ابدأ الفيديو عند انضمام مشارك';
$string['starttime'] = 'وقت البداية';
$string['status'] = 'الحالة';
$string['title'] = 'العنوان';
$string['topic'] = 'المضوع';
$string['unavailable'] = 'غير قادر على الانضمام في هذا الوقت';
$string['updatemeetings'] = 'تحديث اعدادات الاجتماع من Zoom';
$string['usepersonalmeeting'] = 'استخدام معرف الاجتماع الشخصي {$a}';
$string['waitingroom'] = 'غرفة الانتظار';
$string['waitingroomenable'] = 'تمكين غرفة الانتظار';
$string['webinar'] = 'ندوة عبر الانترنت';
$string['webinar_already_false'] = '<p><b>تم تعيين هذه الوحدة بالفعل على أنها اجتماع وليس ندوة عبر الويب. لا يمكنك تبديل هذا الإعداد بعد إنشاء الاجتماع.</b></p>';
$string['webinar_already_true'] = '<p><b>تم تعيين هذه الوحدة بالفعل كندوة عبر الإنترنت وليست اجتماعًا. لا يمكنك تبديل هذا الإعداد بعد إنشاء ندوة الويب.</b></p>';
$string['webinar_help'] = 'هذا الخيار متاح فقط لحسابات Zoom المعتمدة مسبقًا.';
$string['zoom:addinstance'] = 'إضافة اجتماع Zoom جديد';
$string['zoom:view'] = 'عرض اجتماعات Zoom';
$string['zoomerr'] = 'حدث خطأ مع Zoom';
$string['zoomerr_id_missing'] = 'يجب عليك تحديد معرف المساق_الوحدة أو معرف النسخة';
$string['zoomerr_meetingnotfound'] = 'لا يمكن العثور على هذا الاجتماع في Zoom. يمكنك لا يمكن العثور على هذا الاجتماع في Zoom. يمكنك <a href="{$a->recreate}">إعادة إنشائه هنا</a> أو <a href="{$a->delete}">حذفه نهائياً</a>.';
$string['zoomerr_meetingnotfound_info'] = 'لا يمكن العثور على هذا الاجتماع في Zoom. يرجى الاتصال بمضيف الاجتماع إذا كانت لديك أسئلة.';
$string['zoomerr_usernotfound'] = 'تعذر العثور على حسابك في Zoom. إذا كنت تستعمل Zoom للمرة الأولى، فيجب عليك تفعيل حسابك عبر تسجيل الدخول إلى <a href="{$a}" target="_blank">{$a}</a>. بمجرد تنشيط حسابك في Zoom، أعد تحميل هذه الصفحة واستمر في إعداد اجتماعك. تأكد أيضاً من أن بريدك الالكتروني في Zoom يطابق بريدك الالكتروني في هذا النظام.';
$string['zoomurl'] = 'رابط الصفحة الرئيسية لـ Zoom';
