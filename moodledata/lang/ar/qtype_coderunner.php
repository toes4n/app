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
 * Strings for component 'qtype_coderunner', language 'ar', version '4.0'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'إخفاء';
$string['HIDE_IF_FAIL'] = 'الإخفاء عند الفشل';
$string['HIDE_IF_SUCCEED'] = 'الإخفاء عند النجاح';
$string['aborted'] = 'تم إحباط الاختبار بسبب وقوع خطأ.';
$string['ace-language'] = 'لغة Ace';
$string['ace_ui_notready'] = 'محرر Ace غير جاهز. ربما عليك إعادة تحميل الصفحة؟';
$string['addingcoderunner'] = 'تجري إضافة سؤال CodeRunner جديد';
$string['advanced_customisation'] = 'تخصيص متقدم';
$string['ajax_error'] = '*** خطأ في AJAX. لا تقم بحفظ هذا! ***';
$string['allok'] = 'تم تجاوز كل الاختبارات!';
$string['allornone'] = 'لا بد من إعطاء الترميز الاختباري إما لكل حالات الاختبار أو ليس لواحد منها.';
$string['allornothing'] = 'منح التقديرات على أساس الكل أو لا شيء';
$string['allornothing_help'] = 'إذا تم تأشير \'الكل أو لا شيء\'، ينبغي تلبية متطلبات كل حالات الفحص من قبل التسليم ليتمكن من اكتساب أي درجات. بخلاف ذلك، يتم الحصول على الدرجات عبر جمع درجات كل حالات الفحص الناجحة والتعبير عنها بشكل نسبة مقاسة إلى الدرجة العظمى الممكنة للسؤال.

يمكن تعيين الدرجات على مستوى كل حالة من حالات الفحص فقط إذا كان \'الكل أو لا شيء\' غير مؤشر.

إذا تم استعمال مظهر المُقيِّم الذي يمنح جزءاً من الدرجات لحالات الفحص، \'الكل أو لا شيء\' ينبغي عموماً أن يكون غير مؤشر.';
$string['allowattachments'] = 'السماح بالمرفقات';
$string['allowattachments_help'] = 'فيما إذا كان ينبغي السماح للطلاب بإضافة مرفقات إلى تسليماتهم، وإن كان الجواب بنعم، كم من تلك المرفقات يتم نسخها إلى مجلد تشغيل العمل، مع قائمة مفصولة بفوارز لأسماء المرفقات يتم تقديمها إلى المظهر في المتغير Twig {{ ATTACHMENTS }}. تحذير: السماح بالمرفقات قد تكون له تبعات على الأداء أو مساحة الخزن وبخاصة في مواقع مودل ذات العدد الكبير من المقررات الدراسية أو التي تسمح برفع ملفات كبيرة الحجم. مخدمات مودل ومخدمات Jobe قبل شباط 2019، تخزن كل المرفقات إلى أجل غير مسمى.';
$string['allowedfilenames'] = 'أسماء الملفات المسموح بها';
$string['allowedfilenames_help'] = 'كل أسماء الملفات المرفوعة عليها أن تحاكي التعبير الإعتيادي لـ PHP (Perl)، إذا لم يكن فارغاً. على سبيل المثال، استعمل \'.+\\\\.cpp\' للسماح بأي ملف بلغة C++ أو \'(?!Prog)\\\\.java\' للسماح بأي ملف من Java باستثناء \'Prog.java\'. فضلاً عن ذلك، أسماء الملفات ينبغي أن تحتوي فقط على حروف لاتينية، أرقام، شُرَط تحتانية، شُرط ونقاط، وينبغي أن لا تبدأ بشرطتين تحتانيتين متتابعتين (\'\\_\\_\')، كما ينبغي أن لا تتعارض مع أسماء أي من ملفات الدعم. الوصف هو رسالة نصية تُعرض على الطالب لتوضح له أنواع الملف/الملفات المتوقعة. أتركه فارغاً لعرض التعبير الإعتيادي نفسه. أتركهما فارغين كلاهما لتجاوز التحقق من التعابير الإعتيادية.';
$string['allowedfilenamesregex'] = 'أسماء الملفات المسموح بها (التعابير الاعتيادية)';
$string['allowmultiplestdins'] = 'السماح بمكتبات متعددة من stdins';
$string['answer'] = 'الجواب';
$string['answer_help'] = 'يمكن إدخال إجابة نموذجية هنا واستعمالها للتحقق من قبل كاتب السؤال وإظهارها إختيارياً للطلاب خلال المراجعة. وهي مستعملة أيضاً من قبل النص البرمجي للفحص بالجملة. يتم التحقق من صحة الإجابة غير الفارغة عند الحفظ ما لم يتم رفع التأشير من \'التحقق عند الحفظ\'';
$string['answerbox_group'] = 'مربع الجواب';
$string['answerbox_group_help'] = 'حدد عدد الصفوف المُعيَّنة لمربع الإجابة. هذا سيحدد أدنى ارتفاع لعنصر واجهة المستخدم (أي Ace) الذي يتحكم بمربع الإجابة. سيتم ضبط العرض بما يلائم النافذة. إذا كان الجواب متعدياً على المربع أفقياً أو عمودياً، ستظهر شرائط التمرير فيه.';
$string['answerboxlines'] = 'الصفوف';
$string['answerpreload'] = 'التحميل المسبق لمربع الإجابة';
$string['answerpreload_help'] = 'النص المعطى هنا سيتم تحميله مسبقاً إلى مربع الإجابة الخاص بالطالب.';
$string['answerprompt'] = 'الجواب:';
$string['answerrequired'] = 'لطفاً، أعطِ إجابة غير فارغة';
$string['answertooshort'] = 'الإجابة قصيرة جداً، ينبغي أن تتضمن على الأقل {$a} من الأحرف.';
$string['asolutionis'] = 'الحل من كاتب السؤال:';
$string['atleastonetest'] = 'ينبغي عليك إعطاء حالة اختبار واحدة على الأقل لهذا السؤال.';
$string['attachmentoptions'] = 'خيارات المرفقات';
$string['attachmentsoptional'] = 'المرفقات إختيارية';
$string['attachmentsrequired'] = 'يتطلب المرفقات';
$string['attachmentsrequired_help'] = 'هذا الخيار يحدد أقل عدد مطلوب من المرفقات ليتم منح العلامة للاستجابة.';
$string['autotagbycategoryindextitle'] = 'الوسم التلقائي لسؤال CodeRunner';
$string['autotagbycategorytitle'] = 'الوسم التلقائي لـ CodeRunner حسب الصنف';
$string['bad_dotdotdot'] = 'استعمال خاطئ لـ \'...\'. ينبغي أن تكون في النهاية، بعد غرامتين رقميتين متزايدتين';
$string['bad_empty_splitter'] = 'لا يمكن لمقسم الاختبار أن يكون فارغاً عند استعمال مظهر الدمج';
$string['bad_new_prototype_name'] = 'تسمية خاطئة لنوع أولي جديد: مستعمل سلفاً';
$string['badacelangstring'] = 'جملة خاطئة للغة Ace';
$string['badcputime'] = 'محدد وقت وحدة المعالجة المركزية ينبغي تركه فارغاً أو أن يكون رقماً موجباً أكبر من الصفر.';
$string['bademptyprecheck'] = 'الفحص القبلي فشل مع المخرجات الآتية غير المتوقعة.';
$string['badfilenamesregex'] = 'تعبير إعتيادية غير صحيح';
$string['badfiles'] = 'اسم/أسماء الملفات غير المسموح بها: {$a}';
$string['badjson'] = 'مخرجات خاطئة من JSON مأخوذة من مخرجات مُقيِّم المُدمِج. المخرجات كانت: {$a->output}';
$string['badjsonfunc'] = 'دالة مدمجة مجهولة من JSON وهي ({$a->func})';
$string['badmemlimit'] = 'محدد الذاكرة ينبغي إما تركه فارغاً أو أن يكون رقماً غير سالب';
$string['badpenalties'] = 'نظام الغرامة ينبغي أن يكون قائمة مفصولة بفوارز لأرقام ضمن المدى [0, 100]';
$string['badquestion'] = 'خطأ في السؤال';
$string['badrandomintarg'] = 'معامل خاطئ مرسل إلى دالة JSON @randomint';
$string['badrandompickarg'] = 'معامل خاطئ مرسل إلى دالة JSON @randompic';
$string['badsandboxparams'] = 'حقل \'أخرى\' (عوامل sandbox) ينبغي إما أن يكون فارغاً أو يحتوي سجلاً صحيحاً لـ JSON';
$string['badtemplateparams'] = 'عوامل المظهر ينبغي إما أن تكون فارغة أو محتوية على سجل JSON صحيح';
$string['brokencombinator'] = 'كان متوقعاً {$a->numtests} من نتائج الفحص، لكن تم الحصول على {$a->numresults}. ربما هناك إفراط في المخرجات أو خطأ في السؤال؟';
$string['brokentemplategrader'] = 'مخرجات خاطئة من المُقيِّم: {$a->output}. ربما تنفيذ برنامجك قد تم إحباطه (أي بلغ أقصى استهلاك متاح للذاكرة أو تجاوز مهلة التنفيذ).';
$string['bulkquestiontester'] = 'فحوص <a href="{$a->link}">النص البرمجي للفحص بالجملة</a> حيث تم تأشير نماذج الإجابات لجميع الأسئلة ضمن السياق الحالي على أنها صحيحة. مفيد بمجرد إضافة بعض الأسئلة ذات نماذج من الإجابات؛ يفتقر إليها التنصيب الأصلي.';
$string['bulktestallincontext'] = 'إفحص الكل';
$string['bulktestcontinuefromhere'] = 'قم بالتنفيذ مرة أخرى أو الاستئناف، بادئاً من هنا';
$string['bulktestindextitle'] = 'الفحص بالجملة لـ CodeRunner';
$string['bulktestrun'] = 'قم بتنفيذ كل فحوص الأسئلة لكل الأسئلة في النظام (بطيء، المشرف فقط)';
$string['bulktesttitle'] = 'يجري فحص الأسئلة في {$a}';
$string['coderunner'] = 'ترميز البرنامج';
$string['coderunner_help'] = 'استجابة إلى سؤال يكون وصفة لجزء من برنامج، دالة، أو برنامج كامل، يقوم المستجيب بإدخال ترميز مصدري بلغة برمجة معينة تلبي متطلبات تلك الوصفة.';
$string['coderunner_install_testsuite_failures'] = 'الفحوص التي فشلت';
$string['coderunner_install_testsuite_intro'] = 'هذه الصفحة تسمح لك بفحص أسئلة CodeRunner ذات نماذج إجابات للتأكد من أنها تعمل بشكل صحيح.';
$string['coderunner_install_testsuite_noanswer'] = 'الأسئلة التي ليس لها نماذج من الإجابات';
$string['coderunner_install_testsuite_title'] = 'حزمة فحص لنماذج إجابات CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'إن <a href="{$a->link}">النص البرمجي لفحص نموذج الإجابة</a> يتحقق من كون الأسئلة ذات نماذج إجابات تعمل بشكل صحيح.';
$string['coderunner_question_type'] = 'نوع السؤال CodeRunner:';
$string['coderunnercategories'] = 'الأصناف ذات أسئلة CodeRunner';
$string['coderunnercontexts'] = 'السياقات ذات أسئلة CodeRunner';
$string['coderunnersettings'] = 'إعدادات CodeRunner';
$string['coderunnersummary'] = 'الإجابة هي ترميز برمجي يتم تنفيذه في سياق مجموعة من حالات الفحص لتقرير مدى صحته.';
$string['coderunnertype'] = 'نوع السؤال';
$string['coderunnertype_help'] = 'إختر لغة البرمجة ونوع السؤال. بمجرد إختيار النوع، يمكن مشاهدة التفاصيل في لوحة تفاصيل نوع السؤال أدناه.';
$string['columncontrols'] = 'جدول النتائج';
$string['columncontrols_help'] = 'خانات التأشير تحدد أي من أعمدة جدول النتائج ينبغي عرضها إلى الطالب بعد التسليم';
$string['confirm_proceed'] = 'إذا قمت بحفظ السؤال مع عدم التأشير على \'التخصيص\'، سيتم فقدان كل التخصيصات التي تم إجراؤها. أتريد المتابعة؟';
$string['confirmreset'] = 'هل تريد تجاهل كل ما أجريته في هذا السؤال وإعادة تعيين مربع الإجابة إلى قيمته الأصلية قبل التحميل؟';
$string['cputime'] = 'محدد الوقت (بالثواني)';
$string['customisation'] = 'التخصيص';
$string['customisationcontrols'] = 'التخصيص';
$string['customise'] = 'تخصيص';
$string['datafiles'] = 'يدعم الملفات';
$string['datafiles_help'] = 'أي ملفات يتم رفعها هنا ستتم إضافتها إلى مجلد التشغيل عند تنفيذ برنامج المظهر الموسع. هذا يسمح بإضافة بيانات كبيرة أو ملفات دعم بشكل ملائم.';
$string['default_penalty_regime'] = 'نظام الغرامة الافتراضي';
$string['default_penalty_regime_desc'] = 'نظام الغرامة الافتراضي المزمع تطبيقه مع الأسئلة الجديدة، متضمناً لقائمة مفصولة بفوارز من النسب المئوية للغرامات، وينتهي إختيارياً بـ ", ..." للدلالة على متوالية عددية مستمرة.';
$string['display'] = 'أعرض';
$string['downloadquizattempts'] = 'تنزيل محاولات الاختبار';
$string['downloadquizattemptshelp'] = 'أنقر المقرر المناسب و/أو زر التنزيل
        للمقرر والاختبار اللذين ترغب بتنزيلهما. الأرقام التي ما بين الأقواس
        بعد المقررات الدراسية تمثل عدد الاختبارات في المقرر التي لديها على الأقل
        تسليم واحد. الأرقام ما بين الأقواس بعد اسم الاختبار تمثل عدد التسليمات.';
$string['editingcoderunner'] = 'يجري تحرير سؤال CodeRunner';
$string['empty_new_prototype_name'] = 'لا يمكن لتسمية نوع السؤال الجديد أن تكون فارغة';
$string['emptypenaltyregime'] = 'لا بد من تعريف نظام الغرامة (منذ الإصدار 3.1)';
$string['enable'] = 'تمكين';
$string['enable_diff_check'] = 'تمكين زر \'إظهار الفروق\'';
$string['enable_diff_check_desc'] = 'تقديم زر \'إظهار الفروق\' للطلبة إذا كانت إجابتهم خاطئة وكان يجري استعمال التحقق بطريقة التطابق الكامل';
$string['enable_sandbox_desc'] = 'السماح باستعمال sandbox المحدد لتنفيذ تسليمات الطلاب';
$string['enablecombinator'] = 'تمكين المُدمِج';
$string['equalitygrader'] = 'تطابق كامل';
$string['error_loading_prototype'] = 'خطأ عند تحميل النوع الأولي. مشاكل الشبكة أو توقف المخدم، ربما!';
$string['errorstring-accessdenied'] = 'تم رفض الوصول إلى sandbox';
$string['errorstring-autherror'] = 'لا يوجد تصريح باستعمال sandbox';
$string['errorstring-jobe400'] = 'خطأ من مخدم sandbox العائد لـ Jobe:';
$string['errorstring-ok'] = 'تم';
$string['errorstring-overload'] = 'تعذر تشغيل Job بسبب فرط الحمل في المخدم. ربما عليك المحاولة مرة أخرى قريباً!';
$string['errorstring-pastenotfound'] = 'يتم طلب حالة job غير موجود';
$string['errorstring-submissionfailed'] = 'التسليم إلى sandbox قد فشل';
$string['errorstring-submissionlimitexceeded'] = 'تم بلوغ حد التسليم إلى Sandbox';
$string['errorstring-unknown'] = 'خطأ غير متوقع عند تنفيذ نصوصك البرمجية. قد يكون مخدم sandbox متوقفاً أو متعرضاً إلى حملٍ عالٍ. قد يكون من الأفضل أن تحاول مجدداً بعد برهة!';
$string['errorstring-wronglangid'] = 'تمت المطالبة بلغة غير موجودة';
$string['expand'] = 'توسيع';
$string['expandtitle'] = 'إظهار أصناف الأسئلة';
$string['expected'] = 'المخرجات المتوقعة';
$string['expected_help'] = 'المخرجات المتوقعة من الفحص. تُشاهد من جهة المظهر بمثابة {{TEST.expected}}.';
$string['expectedcolhdr'] = 'المتوقع';
$string['exportthisquestion'] = 'تصدير هذا السؤال';
$string['exportthisquestion_help'] = 'هذا سيقوم بإنشاء ملف تصدير مودل بصيغة XML محتوياً على هذا السؤال فقط. مثال على كون ذلك مفيداً، هو عندما تظن أن هذا السؤال يجسد مشكلة في ملحق CodeRunner وتريد التبليغ عنها برسالة إلى المطورين.';
$string['extra'] = 'بيانات المظهر الإضافية';
$string['extra_help'] = 'حقل نصي إضافي قد يكون مفيداً أحياناً للاستعمال من قبل المظهر، يتم الوصول إليه بمثابة {{TEST.extra}}';
$string['fail'] = 'فشل';
$string['failedhidden'] = 'برمجتك فشلت في واحد أو أكثر من الفحوص المخفية.';
$string['failedntests'] = 'فشلت في {$a->numerrors} من الفحوص';
$string['failedtesting'] = 'فشلت في الفحوص.';
$string['fails'] = 'الفشل';
$string['feedback'] = 'الإفادة';
$string['feedback_help'] = 'إختر \'يتم ضبطها من قبل الاختبار\' للسماح بخيارات مراجعة الاختبار (بشكل خاص، الإعداد \'الإفادة الخاصة\') للتحكم بعرض جدول النتائج، \'فرض العرض\' لإظهار جدول النتائج بغض النظر، و\'فرض الإخفاء\' لإخفائه في جميع الأحوال';
$string['feedback_hide'] = 'فرض الإخفاء';
$string['feedback_quiz'] = 'توضع من قبل الاختبار';
$string['feedback_show'] = 'فرض الإظهار';
$string['fileheader'] = 'ملفات الدعم';
$string['filenamesexplain'] = 'الوصف';
$string['filenamesregex'] = 'تعبير إعتيادي';
$string['filloutoneanswer'] = 'عليك إدخال الترميز المصدري الذي يلبي المواصفات. سيتم تنفيذ الترميز الذي تُدخله لتقرير مدى صحته وسيتم منح العلامة وفقاً لذلك.';
$string['firstfailure'] = 'أول حالة فحص فاشلة: {$a}';
$string['forexample'] = 'على سبيل المثال';
$string['goodemptyprecheck'] = 'نجحت';
$string['gotcolhdr'] = 'Got';
$string['grader'] = 'المقيِّم';
$string['grading'] = 'منح التقديرات';
$string['gradingcontrols'] = 'أدوات التحكم بمنح التقديرات';
$string['gradingcontrols_help'] = 'يقوم مُقيِّم \'التطابق الكامل\' بمنح الدرجات فقط عندما تتطابق
مخرجات التنفيذ بالضبط مع القيمة المتوقعة المعرفة من قبل
حالة الفحص. يتم تجريد كل السطور من الفراغات السابقة
واللاحقة قبل إجراء فحص المساواة.

إن المُقيِّم القريب من المساواة مشابه له ما عدا أنه يقوم أيضاً
بضغط الفراغات المتعددة وعلامات الجدولة ليجعلها فراغاً
واحداً، ويحذف كل السطور الخالية ويحول الحروف جميعاً
إلى حالتها الصغيرة.

يقوم مُقيِّم \'التعبير الإعتيادي\' باستعمال حقل \'المتوقع\'
لحالة الفحص بمثابة تعبير إعتيادي (بدون المحددات
التي من نوع PERL) ثم يفحص المخرجات للتحري
عن وجود مطابقة مع النتيجة المتوقعة في أي مكان من
الناتج.
مثال، القيمة المتوقعة \'ab.*z\' ستطابق أي ناتج يحتوي
الحرفين \'ab\' حيثما تواجدا في الناتج، والحرف \'z\' في
مكان ما بعدهما.
لفرض المطابقة مع الناتج بالكامل، إبدأ التعبير الإعتيادي
وأنهه بـ \'\\A\' و \'\\Z\' على التوالي. تستعمل مطابقة التعبير
الإعتيادي خيارات MULTILINE و DOTALL.

يفرض خيار \'مُقيِّم المظهر\' بأن مخرجات البرنامج هي
في الواقع نتيجة التقييم بحد ذاتها، بعبارة أخرى، إن المظهر
يفحص *ويُقيِّم* إجابة الطالب.
المخرجات الوحيدة من هكذا مظهر للبرنامج ينبغي أن تكون
سجل بترميز JSON.

إذا كان المظهر هو مظهر لكل فحص (أي ليس مُدمِجاً)، فعلى جملة JSON أن تصف صفاً
من جدول النتائج وينبغي أن تحتوي على الأقل على حقل \'fraction\'، والذي يتم ضربه
بـ TEST.mark لتقرير عدد الدرجات الممنوحة إلى حالة الفحص. كما أنه عادة ينبغي
أن يحتوي على حقل \'got\'، والذي هو القيمة المعروضة في عمود \'Got\' من جدول النتائج.
الأعمدة الأخرى في جدول النتائج (testcode، stdin، expected) يمكن تعريفها أيضاً
من قبل برنامج منح التقديرات باستعمال المظهر وسيتم استعمالها بدلاً من القيم من حالة الفحص.
كمثال على ذلك، إذا كانت مخرجات البرنامج هي ما يأتي:
<code>{"fraction":0.5, "got": "نصف الإجابات كانت صحيحة!"}</code>،
سيتم منح نصف الدرجات لحالة الفحص تلك بالذات، وعمود \'Got\' سيعرض النص "نصف الإجابات كانت صحيحة!". يمكن إضافة أعمدة أخرى إلى جدول النتائج عبر إضافة سمات
إضافية إلى سجل JSON فضلاً عن حقل أعمدة النتائج للسؤال نفسه.

إذا كان المظهر مُدمِجاً، ينبغي لمخرجات جملة JSON القادمة من مُقيِّم المظهر أن تحتوي مرة
أخرى على حقل \'fraction\'، ولكن هذه المرة بالنسبة إلى الدرجة الإجمالية، وقد تحتوي صفراً
أو المزيد من \'prologuehtml\'، \'testresults\'، \'epiloguehtml\'، \'columnformats\'، \'showoutputonly و \'showdifferences\'.
إن حقلي \'prologuehtml\' و \'epiloguehtml\' هما بتنسيق html ويتم عرضهما على التوالي
قبل جدول النتائج (الإختياري) وبعده. إن حقل \'testresults\'، إذا تم ذكره، هو قائمة بالقوائم
المستعملة لعرض نوع ما من جداول النتائج. الصف الأول هو رؤوس الأعمدة وكل الصفوف
الأخرى تمثل متن الجدول. توجد قيمتان خاصتان من رؤوس الأعمدة، هما: \'iscorrect\'
و \'ishidden\'. تستعمل أعمدة \'iscorrect\' لعرض تأشيرات أو تقاطعات تمثلان قيمتي
1 أو 0 على التوالي. لا يتم عرض عمود \'ishidden\' فعلياً، ولكن قيمة 0 أو 1 فيه يمكن
استعمالهما لتبديل حالة عرض الصف ما بين الإظهار والإخفاء. الطلاب لا يشاهدون الصفوف
المخفية، ولكن المقيمين والمشرفين يمكنهم رؤيتها. إذا تم تجهيز جدول \'testresults\' الإختياري،
سيكون بالإمكان أيضاً تجهيز الحقل \'columnformats\'. هذا ينبغي أن يكون قائمة من الجمل،
واحدة لكل عمود مع استبعاد عمودي \'iscorrect\' و \'ishidden\'. الجمل تحدد التنسيق المستعمل
لعرض قيم الخلايا؛ حالياً التنسيقات المدعومة هي \'%s\' لطريقة عرض الجمل الإعتيادية (والتي
تكون فيها منظفة وملفعة بعنصر \'pre\') و \'%h\' لتمثل قيمة html والتي ينبغي عدم تعريضها
لمزيد من المعالجة قبل العرض. يقوم حقل \'showdifferences\' بتشغيل عرض زر \'إظهار
الفروق\' بعد جدول النتائج إذا كان كسر الدرجة الممنوحة لا يساوي 1.0. يُستعمل حقل
\'showoutputonly\'، إذا كانت قيمته true، عندما يكون السؤال معداً فقط لعرض المخرجات
وربما الصور من عملية التنفيذ، بدون أي درجات.';
$string['graphhelp'] = '- أنقر نقراً مزدوجاً على منطقة خالية لإنشاء عقدة/حالة جديدة.
- أنقر نقراً مزدوجاً على عقدة موجودة لـ "تأشيرها" كمل في حالة القبول لـ Finite State Machines (FSMs).
  النقر المزدوج مرة أخرى لرفع التأشيرة.
- أنقر واسحب لنقل العقدة.
- Alt مع النقر (أو Ctrl Alt مع النقر) واسحب لنقل مخطط بياني فرعي.
- Shift مع النقر داخل عقدة واحدة ثم السحب إلى أخرى لإنشاء رابط بينهما.
- Shift مع النقر على منطقة خالية، السحب إلى عقدة لإنشاء رابط بدء (FSM فقط).
- النقر والسحب للرابط لتغيير منحناه.
- النقر على رابط/عقدة لتغيير النص الخاص به.
- النقر في نص الرابط ثم السحب لنقله.
- طباعة _ متبوعة برقم ستجعل ذلك الرقم منخفضاً عن السطر.
- طباعة \\epsilon ستنشئ رمز epsilon (وكذلك الحال مع \\alpha، \\beta إلخ).
- النقر على رابط/عقدة ضم الضغط على مفتاح Delete لإزالته (أو مفتاح function-delete في بيئة ماك).
- Ctrl+z للتراجع و Ctrl+y أو Ctrl+Shift+z للإعادة.';
$string['hidden'] = 'مخفي';
$string['hidedifferences'] = 'إخفاء الفوارق';
$string['hiderestiffail'] = 'إخفاء الباقي عند الفشل';
$string['hoisttemplateparams'] = 'عوامل مظهر Hoist';
$string['howtogetmore'] = 'لمزيد من المعلومات التفصيلية، إحفظ السؤال مع إزالة التأشير من \'التحقق عند الحفظ\' ثم إفحصه يدوياً';
$string['ideone_pass'] = 'كلمة مرور مخدم Ideone';
$string['ideone_pass_desc'] = 'كلمة المرور التي تُستعمل عند الاتصال بمخدم مهمل من Ideone (إذا كان sandbox لـ ideone مُمَكَّناً)';
$string['ideone_user'] = 'مستخدم مخدم Ideone';
$string['ideone_user_desc'] = 'اسم الدخول الذي يُستعمل عند الاتصال بمخدم مهمل من Ideone (إذا كان sandbox لـ ideone مُمَكَّناً)';
$string['illegalformat'] = 'تنسيق خاطئ ({$a->format}) في columnformats';
$string['info_unavailable'] = 'معلومات نوع السؤال غير متاحة بالنسبة إلى الأسئلة المخصصة.';
$string['inputcolhdr'] = 'أدخل';
$string['insufficientattachments'] = 'عدد المرفقات غير كافٍ، يتطلب {$a}.';
$string['is_prototype'] = 'استعمله بمثابة نوع أولي';
$string['iscombinatortemplate'] = 'هو مُدمِج';
$string['jobe_apikey'] = 'مفتاح واجهة برمجة التطبيق لـ Jobe';
$string['jobe_canterbury_html'] = '<p style=\'color:gray; font-style:italic; font-size:smaller\'>يشتغل في مخدم جامعة Canterbury\'s Jobe.</p>';
$string['jobe_host'] = 'مخدم Jobe';
$string['language'] = 'لغة Sandbox';
$string['languages'] = 'اللغات';
$string['languageselectlabel'] = 'اللغة';
$string['mark'] = 'الدرجة';
$string['marking'] = 'تعيين الدرجات';
$string['markinggroup'] = 'منح الدرجات';
$string['maxfilesize'] = 'أقصى حجم ملفات مسموح به (بالبايت)';
$string['memorylimit'] = 'حد الذاكرة (ميغا بايت)';
$string['missinganswers'] = 'إجابات مفقودة';
$string['missingprototypes'] = 'أنواع أولية مفقودة';
$string['morehidden'] = 'بعض حالات الفحص المخفية فشلت أيضاً.';
$string['multipledefaults'] = 'غالباً، يمكن اختيار لغة واحدة بمثابة اللغة الافتراضية';
$string['multipleprototypes'] = 'تم العثور على أنواع أولية متعددة لـ \'{$a->crtype}\'';
$string['mustrequirefewer'] = 'لا يمكنك أن تطلب مرفقات أكثر مما تسمح به.';
$string['nearequalitygrader'] = 'مطابقة قريبة من المساواة';
$string['negativeorzeromark'] = 'الدرجة ينبغي أن تكون أكبر من الصفر';
$string['nodetailsavailable'] = 'إختر نوع السؤال لمعاينة تفاصيل المساعدة.';
$string['noerrorsallowed'] = 'برمجتك ينبغي أن تجتاز كل الفحوص لتحصل على أي درجة. حاول مجدداً';
$string['nonnumericmark'] = 'درجة لا رقمية';
$string['noqtype'] = 'لم يتم إختيار نوع السؤال';
$string['nosampleanswer'] = 'لا توجد إجابة نموذجية';
$string['options'] = 'الخيارات';
$string['ordering'] = 'الترتيب';
$string['overallresult'] = 'النتيجة الإجمالية';
$string['pass'] = 'ناجح';
$string['passes'] = 'ينجح';
$string['penaltyregime'] = '(نظام الغرامة: {$a} %)';
$string['penaltyregimelabel'] = 'نظام الغرامة:';
$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'تجري إضافة سؤال CodeRunner';
$string['pluginnameediting'] = 'يجري تحرير سؤال CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner: يقوم بتنفيذ برمجة الطالب المقدمة عبر sandbox';
$string['precheck'] = 'الفحص الأولي';
$string['precheck_all'] = 'الكل';
$string['precheck_disabled'] = 'مُعطَّل';
$string['precheck_empty'] = 'فارغ';
$string['precheck_examples'] = 'الأمثلة';
$string['precheck_selected'] = 'مختارة';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال، CodeRunner لا يخزن أي بيانات شخصية.';
$string['prototypeQ'] = 'هل هو نوع أولي؟';
$string['prototypeusageindex'] = 'المقررات الدراسية المتاحة';
$string['qtypehelp'] = 'مساعدة مع نوع السؤال';
$string['questiontype_required'] = 'ينبغي عليك اختيار نوع السؤال';
$string['reset'] = 'إعادة تعيين الإجابة';
$string['resethover'] = 'تجاهل التغييرات وإعادة تعيين الإجابة إلى قيمتها الأصلية قبل التحميل';
$string['sampleanswerattachments'] = 'مرفقات الإجابة النموذجية';
$string['sampleanswerattachments_help'] = 'إذا كانت الإجابة النموذجية تحتاج ملفات مرفقات، قم برفعها هنا';
$string['seethisquestioninthequestionbank'] = 'مشاهدة هذا السؤال في بنك الأسئلة';
$string['stdin'] = 'الإدخال القياسي';
$string['stdin_help'] = 'الإدخال القياسي إلى النص، يشاهده المظهر بمثابة {{TEST.stdin}}';
$string['student_answer'] = 'إجابة الطالب';
$string['syntax_errors'] = 'خطأ/أخطاء في الصياغة';
$string['table_ui_invalidjson'] = 'واجهة المستخدم للجدول: تسلسل JSON خاطئ.';
$string['table_ui_invalidserialisation'] = 'واجهة المستخدم للجدول: تسلسل خاطئ.';
$string['template'] = 'المظهر';
$string['template_changed'] = 'مظهر الفحص الأولي تغير - أتريد تعطيل المُدمِج؟ [\'إلغاء\' يبقيه مُمَكَّناً.]';
$string['templatecontrols'] = 'أدوات تحكم المظهر';
$string['templateerror'] = 'خطأ في المظهر';
$string['templategrader'] = 'مُقيِّم المظهر';
$string['templateparams'] = 'عوامل المظهر';
$string['testallincategory'] = 'فحص كل الأسئلة في هذا الصنف';
$string['testalltitle'] = 'فحص كل الأسئلة في هذا السياق';
$string['testcase'] = 'حالة الفحص {$a}';
$string['testcasecontrols'] = 'خصائص الفحص:';
$string['testcases'] = 'حالات الفحص';
$string['testcode'] = 'ترميز الفحص';
$string['testcode_help'] = 'الترميز الخاص بالفحص، مشاهد من قبل المظهر بمثابة {{TEST.testcode}}';
$string['testcolhdr'] = 'الفحص';
$string['testingquestion'] = 'يجري فحص السؤال {$a}';
$string['testsplitterre'] = 'مقسم الفحص (تعبير إعتيادي)';
$string['testtype_both'] = 'كلاهما';
$string['testtype_normal'] = 'تحقق فقط';
$string['testtype_precheck'] = 'تحقق أولي فقط';
$string['typename'] = 'نوع السؤال';
$string['ui_fallback'] = 'الرجوع إلى منطقة النص الخام.';
$string['uichanged'] = 'لقد تغيرت واجهة المستخدم. إحفظ الصفحة ثم أعد تحميلها لمعاينة عوامل واجهة المستخدم وتحريرها (إن وجدت).';
$string['uicontrols'] = 'إدخال واجهات المستخدم';
$string['unauthorisedbulktest'] = 'ليس لديك وصول مناسب لأي أسئلة من نوع CodeRunner';
$string['unauthoriseddbaccess'] = 'ليس مصرحاً لك باستعمال هذا النص البرمجي';
$string['unknowncombinatorgraderfield'] = 'حقل مجهول ({$a->fieldname}) في مخرجات المُقيِّم المُدمِج';
$string['unknownerror'] = 'وقع خطأ غير متوقع. قد يكون sandbox متوقفاً. حاول مجدداً بعد برهة.';
$string['useasexample'] = 'استعمل كمثال';
$string['validateonsave'] = 'التحقق عند الحفظ';
$string['wrongnumberofformats'] = 'عدد نتائج الفحص خاطئ لتنسيقات الأعمدة. المتوقع {$a->expected}، حصلت على {$a->got}';
$string['xmlcoderunnerformaterror'] = 'خطأ في صيغة XML لسؤال coderunner';
