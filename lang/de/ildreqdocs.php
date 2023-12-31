<?php

$string['modulename'] = 'Pflichtdokument';
$string['pluginname'] = 'Pflichtdokument';
$string['pluginadministration'] = 'Pflichtdokument';
$string['modulenameplural'] = 'Pflichtdokumente';
$string['ildreqdocs:addinstance'] = 'Neues Pflichtdokument anlegen';
$string['ildreqdocs:participant'] = 'Teilnehmer für Pflichtdokument';
$string['ildreqdocs:responsible'] = 'Verantwortlich für Pflichtdokument';

$string['headerconfig'] = 'Pflichtdokument E-Mail Konfiguration';
$string['descconfig'] = 'Globale Konfiguration der E-Mail Vorlagen für Pflichtdokumente';
$string['configlabel_infotext'] = 'Informationstext';
$string['configdesc_infotext'] = 'Informationstext unterhalb der Aktivität';

$string['mailsubject'] = 'Betreff';
$string['mailsubject_help'] = '<b>Platzhalter:</b><br/>{DOCNAME} - Dokumentname';
$string['mailcontent'] = 'Inhalt';
$string['mailcontent_help'] = '<b>Platzhalter:</b><br/>{DOCNAME} - Dokumentname<br/>{FIRSTNAME} - Vorname<br/>{LASTNAME} - Nachname<br/>{COURSELINK} - Kurslink';
$string['responsiblewmailcontent'] = 'Inhalt';
$string['responsiblemailcontent_help'] = '<b>Platzhalter:</b><br/>{DOCNAME} - Dokumentname<br/>{FIRSTNAME} - Vorname<br/>{LASTNAME} - Nachname<br/>{COURSELINK} - Kurslink<br/>{OVERVIEWLINK} - Übersichtslink';
$string['overviewmailcontent'] = 'Inhalt';
$string['overviewmailcontent_help'] = '<b>Platzhalter:</b><br/>{DOCNAME} - Dokumentname<br/>{COURSELINK} - Kurslink<br/>{OVERVIEWLINK} - Übersichtslink';

$string['configlabel_first_mail_subject'] = 'Betreff erste E-Mail';
$string['configdesc_first_mail_subject'] = 'Betreffsvorlage für die erste Benachrichtigungs-E-Mail';
$string['configlabel_first_mail_content'] = 'Inhalt erste E-Mail';
$string['configdesc_first_mail_content'] = 'Inhaltsvorlage für die erste Benachrichtigungs-E-Mail';

$string['configlabel_second_mail_subject'] = 'Betreff weitere E-Mails';
$string['configdesc_second_mail_subject'] = 'Betreffsvorlage für weitere E-Mails';
$string['configlabel_second_mail_content'] = 'Inhalt weitere E-Mails';
$string['configdesc_second_mail_content'] = 'Inhaltsvorlage weitere Benachrichtigungs-E-Mails';

$string['configlabel_responsible_mail_subject'] = 'Betreff E-Mail an Verantworlichen';
$string['configdesc_responsible_mail_subject'] = 'Betreffsvorlage für E-Mail an den Verantworlichen';
$string['configlabel_responsible_mail_content'] = 'Inhalt E-Mail an Verantworlichen';
$string['configdesc_responsible_mail_content'] = 'Inhaltsvorlage für E-Mail an den Verantworlichen';

$string['configlabel_overview_mail_subject'] = 'Betreff Übersichts-E-Mail';
$string['configdesc_overview_mail_subject'] = 'Betreffsvorlage für Übersichts-E-Mail nach Ablauf des Enddatums';
$string['configlabel_overview_mail_content'] = 'Inhalt Übersichts-E-Mail';
$string['configdesc_overview_mail_content'] = 'Inhaltsvorlage für Übersichts-E-Mail nach Ablauf des Enddatums';

$string['firstmailgroup'] = 'E-Mail Vorlage für die erste Benachrichtigungs-E-Mail';
$string['secondmailgroup'] = 'E-Mail Vorlage für weitere E-Mails';
$string['responsiblemailgroup'] = 'E-Mail Vorlage an den Verantworlichen';
$string['overviewmailgroup'] = 'E-Mail Vorlage für die Übersichts-E-Mail';

$string['notificationperiod'] = 'Benachrichtigungsfrequenz';
$string['maxnotifications'] = 'max. Anzahl Benachrichtigungen';
$string['weekly'] = 'wöchentlich';
$string['fortnight'] = '14-tägig';
$string['monthly'] = 'monatlich';

$string['notify-participants'] = 'Teilnehmer über Pflichtdokument informieren';
$string['messageprovider:notify'] = 'Mitteilung zum Pflichtdokument';

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