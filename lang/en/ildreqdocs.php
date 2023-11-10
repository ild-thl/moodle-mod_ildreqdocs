<?php

$string['modulename'] = 'Required document';
$string['pluginname'] = 'Required document';
$string['pluginadministration'] = 'Required document';
$string['modulenameplural'] = 'Required documents';
$string['ildreqdocs:addinstance'] = 'Add new required document';
$string['ildreqdocs:participant'] = 'Participant for required document';
$string['ildreqdocs:responsible'] = 'Responsible for required document';

$string['headerconfig'] = 'Required document e-mail configuration';
$string['descconfig'] = 'Global e-mail template configuration for required documents';
$string['configlabel_infotext'] = 'Information text';
$string['configdesc_infotext'] = 'Information text beneath the activity';

$string['mailsubject'] = 'Subject';
$string['mailsubject_help'] = '<b>Placeholder:</b><br/>{DOCNAME} - Documentname';
$string['mailcontent'] = 'Content';
$string['mailcontent_help'] = '<b>Placeholder:</b><br/>{DOCNAME} - Documentname<br/>{FIRSTNAME} - Firstname<br/>{LASTNAME} - Lastanem<br/>{COURSELINK} - Courselink';
$string['responsiblewmailcontent'] = 'Content';
$string['responsiblemailcontent_help'] = '<b>Placholder:</b><br/>{DOCNAME} - Documentname<br/>{FIRSTNAME} - Firstname<br/>{LASTNAME} - Lastname<br/>{COURSELINK} - Courselink<br/>{OVERVIEWLINK} - Overviewlink';
$string['overviewmailcontent'] = 'Content';
$string['overviewmailcontent_help'] = '<b>Placeholder:</b><br/>{DOCNAME} - Documentname<br/>{COURSELINK} - Courselink<br/>{OVERVIEWLINK} - Overviewlink';

$string['configlabel_first_mail_subject'] = 'Subject first e-mail';
$string['configdesc_first_mail_subject'] = 'Subject template for the first notification e-mail';
$string['configlabel_first_mail_content'] = 'Content first e-mail';
$string['configdesc_first_mail_content'] = 'Content template for first e-mail';

$string['configlabel_second_mail_subject'] = 'Subject further e-mail';
$string['configdesc_second_mail_subject'] = 'Subject template for further notification e-mails';
$string['configlabel_second_mail_content'] = 'Content further e-mails';
$string['configdesc_second_mail_content'] = 'Content template for further e-mails';

$string['configlabel_responsible_mail_subject'] = 'Subject for e-mail to responsible';
$string['configdesc_responsible_mail_subject'] = 'Subject template for e-mail to responsible person';
$string['configlabel_responsible_mail_content'] = 'Content for e-mail to responsible';
$string['configdesc_responsible_mail_content'] = 'Content template for e-mail to responsible person';

$string['configlabel_overview_mail_subject'] = 'Subject overview e-mail';
$string['configdesc_overview_mail_subject'] = 'Subject template for overview e-mail after enddate';
$string['configlabel_overview_mail_content'] = 'Content overview e-mail';
$string['configdesc_overview_mail_content'] = 'Content template for overview e-mail after enddate';

$string['firstmailgroup'] = 'E-Mail template for the first notification e-mail';
$string['secondmailgroup'] = 'E-Mail template for further e-mails';
$string['responsiblemailgroup'] = 'E-Mail template for the responsible person';
$string['overviewmailgroup'] = 'E-Mail template for the overview mail';

$string['notificationperiod'] = 'Notification period';
$string['maxnotifications'] = 'max. notifications';
$string['weekly'] = 'weekly';
$string['fortnight'] = 'fortnight';
$string['monthly'] = 'monthly';

$string['notify-participants'] = 'Inform participants about required document';
$string['messageprovider:notify'] = 'Get message about required document';

$string['default_infotext'] = 'Durch Anklicken des Buttons "Als erledigt kennzeichnen" <b>bestätigen</b> Sie, den Inhalt des angeführten Dokuments gelesen und verstanden zu haben.';
$string['default_first_mail_subject'] = 'Pflichtdokument {DOCNAME} muss gelesen werden';
$string['default_first_mail_content'] = 'Guten Tag {FIRSTNAME} {LASTNAME}, 
<br/><br/>
folgendes Pflichtdokument muss von Ihnen gelesen und als verstanden markiert werden:
<br/><br/>
{DOCNAME}
<br/><br/>
Bitte loggen Sie sich in den unten stehenden Kurs ein und lesen das Pflichtdokument aufmerksam und sorgfältig. Anschließend markieren Sie das Pflichtdokument bitte als verstanden. Bei Fragen wenden Sie sich bitte an den/die Kursbetreuer/in.
<br/><br/>
{COURSELINK}
<br/><br/>
Mit freundlichen Grüßen
<br/><br/>
Ihr/e Kursbetreuer/in
';
$string['default_second_mail_subject'] = 'Erinnerung! - Pflichtdokument {DOCNAME} muss gelesen werden';
$string['default_second_mail_content'] = 'Guten Tag {FIRSTNAME} {LASTNAME}, 
<br/><br/>
folgendes Pflichtdokument muss von Ihnen gelesen und als verstanden markiert werden:
<br/><br/>
{DOCNAME}
<br/><br/>
Bitte loggen Sie sich in den unten stehenden Kurs ein und lesen das Pflichtdokument aufmerksam und sorgfältig. Anschließend markieren Sie das Pflichtdokument bitte als verstanden. Bei Fragen wenden Sie sich bitte an den/die Kursbetreuer/in.
<br/><br/>
{COURSELINK}
<br/><br/>
Mit freundlichen Grüßen
<br/><br/>
Ihr/e Kursbetreuer/in
';
$string['default_responsible_mail_subject'] = 'Pflichtdokument {DOCNAME} - max. Anzahl Benachrichtigungen erreicht';
$string['default_responsible_mail_content'] = 'Folgende Person hat nicht reagiert:
{FIRSTNAME} {LASTNAME} - {DOCNAME}';
$string['default_overview_mail_subject'] = 'Übersicht über Pflichtdokument {DOCNAME}';
$string['default_overview_mail_content'] = 'Das Enddatum zum Lesen des Pflichtdokuments ist erreicht. 
<br/><br/>
Unter dem folgenden Link erhalten Sie eine Übersicht aller Teilnehmer. Ein Export ist unterhalb der Tabelle zu finden.
<br/><br/>
{OVERVIEWLINK}
';