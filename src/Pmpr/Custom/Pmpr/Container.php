<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624165a1b1b4a             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function iiacsiaagsusawuw(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::wkweqssoakmmmguq => [self::qescuiwgsyuikume, self::qgqyauaqwqmqseim, self::iccwcygaeqmomooo]]); return Setting::qkckuwowccaqygke(Setting::yeyekmqmcmyuqwqg, $ywmkwiwkosakssii); } public function siggceeeowgkoaam(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::wkweqssoakmmmguq => [self::qescuiwgsyuikume, self::iccwcygaeqmomooo, self::ssmskyqgcmeiayco]]); $rsywwkgoeeiscsik = Setting::qkckuwowccaqygke(Setting::mgieaomemyywoqwa, $ywmkwiwkosakssii); if (!($rsywwkgoeeiscsik && is_array($rsywwkgoeeiscsik))) { goto uguigkcmukuouway; } foreach ($rsywwkgoeeiscsik as $momcykaoccoymeig => $caicqiiuwsyaeeko) { $mcqieaigyeeyaksm = ManipulateArray::get($caicqiiuwsyaeeko, self::mkousmkiawwousws . self::mswocgcucqoaesaa); $ewgwqamkygiqaawc = ManipulateArray::get($caicqiiuwsyaeeko, self::ssmskyqgcmeiayco); if (!($mcqieaigyeeyaksm && $ewgwqamkygiqaawc && DOMCrawler::umuecysoywoumgwo($ewgwqamkygiqaawc, "\151\155\x67"))) { goto qicwaskssogcokgm; } $rsywwkgoeeiscsik[$momcykaoccoymeig][self::ssmskyqgcmeiayco] = DOMCrawler::qcgocuceocquqcuw($ewgwqamkygiqaawc, ["\x69\x6d\x67" => ["\x73\162\x63" => ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm), "\x63\154\x61\x73\x73" => "\x6d\x78\55\141\x75\164\157", "\x77\x69\144\164\150" => 100, "\150\x65\x69\x67\x68\164" => 120]]); qicwaskssogcokgm: usquiuuyiyqaeyiu: } kymkucucyeoeikim: uguigkcmukuouway: return $rsywwkgoeeiscsik; } }
