<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6242d65d98137             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\162\x65\x67\x69\163\164\x65\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x74\x74\162\151\x62\165\x74\145\137\x72\x65\x6e\144\145\162\x5f\x76\141\x6c\165\x65\x73"), [$this, "\x73\165\141\161\157\141\x73\x6f\165\157\155\157\x61\165\151\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\164\x74\x72\x69\142\165\164\x65\137\147\145\164\137\142\171\137\x70\157\163\164"), [$this, "\151\x6f\141\171\153\x75\147\145\x63\171\157\x63\171\147\147\x63"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto wkwamkgkwykeqkec; } echo $this->iuygowkemiiwqmiw("\x76\x61\154\x75\x65\163", ["\164\145\x72\155\x73" => $uyuaosigqymaqsaa, "\x74\x61\170\x6f\x6e\x6f\155\151\145\163" => $seyqqsmuaiegkeeq]); wkwamkgkwykeqkec: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto kwiggogcgciwuwqk; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\157\x62\x6a\x65\143\x74\x5f\x74\171\160\x65"); if (!$qgweosiseeogigso) { goto yykqaowwsqgqysmq; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto suqceasgacskcmkc; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); suqceasgacskcmkc: yykqaowwsqgqysmq: oeocukauoyosicso: } oimkeqocuguqqsqk: kwiggogcgciwuwqk: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\160\x6c\165\162\141\x6c"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\x69\156\x67\165\154\x61\x72"); return ["\x6e\141\x6d\145" => _x($kcumookcwskcyqak, "\164\x61\x78\x6f\x6e\x6f\155\x79\40\147\145\156\145\x72\x61\x6c\x20\x6e\141\155\x65", PR__CST__PMPR), "\155\x65\x6e\165\137\x6e\141\155\x65" => $kcumookcwskcyqak, "\x65\144\151\x74\x5f\x69\164\x65\x6d" => sprintf(__("\x45\x64\151\x74\x20\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\141\154\154\137\x69\x74\x65\x6d\x73" => sprintf(__("\101\154\154\x20\45\163", PR__CST__PMPR), $kcumookcwskcyqak), "\156\x6f\164\137\146\x6f\x75\x6e\x64" => sprintf(__("\x4e\157\40\x25\x73\x20\146\x6f\x75\156\x64\56", PR__CST__PMPR), $kcumookcwskcyqak), "\165\160\x64\141\x74\x65\137\x69\x74\145\155" => sprintf(__("\125\160\x64\x61\x74\x65\x20\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\160\141\162\x65\x6e\164\x5f\151\164\x65\x6d" => sprintf(__("\120\x61\x72\145\x6e\164\40\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\x73\145\141\162\x63\150\137\x69\164\145\x6d\x73" => sprintf(__("\123\145\141\162\143\x68\40\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\141\144\x64\x5f\156\145\167\x5f\x69\x74\145\x6d" => sprintf(__("\x41\144\x64\40\116\145\167\x20\45\x73", PR__CST__PMPR), $sisssumicskyceeg), "\x73\151\x6e\x67\165\x6c\x61\x72\x5f\156\141\x6d\145" => _x($sisssumicskyceeg, "\x74\141\170\157\x6e\x6f\155\x79\40\x73\151\156\x67\x75\x6c\141\x72\40\x6e\x61\155\145", PR__CST__PMPR), "\156\x65\167\137\151\164\x65\155\137\156\141\x6d\145" => sprintf(__("\x4e\145\x77\40\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\x70\157\x70\165\154\141\x72\x5f\151\164\x65\155\163" => sprintf(__("\x50\157\160\165\x6c\141\x72\x20\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\160\141\x72\x65\x6e\x74\137\151\x74\145\x6d\x5f\143\x6f\x6c\157\156" => sprintf(__("\x50\141\x72\145\156\x74\x20\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\141\x64\x64\137\x6f\x72\x5f\162\x65\x6d\x6f\166\145\137\x69\x74\x65\155\x73" => sprintf(__("\101\144\x64\x20\x6f\x72\x20\162\145\155\157\166\x65\x20\x25\163", PR__CST__PMPR), $kcumookcwskcyqak), "\143\x68\x6f\x6f\x73\x65\x5f\146\162\x6f\155\137\155\157\x73\164\x5f\x75\163\x65\144" => sprintf(__("\x43\x68\x6f\x6f\163\x65\x20\146\162\x6f\x6d\40\164\150\x65\x20\155\157\x73\164\40\165\x73\145\x64\x20\45\163", PR__CST__PMPR), $kcumookcwskcyqak), "\163\x65\x70\141\x72\x61\x74\x65\137\151\x74\x65\155\163\x5f\x77\151\x74\x68\137\x63\x6f\x6d\155\141\x73" => sprintf(__("\123\145\x70\141\162\141\x74\x65\40\45\163\40\167\x69\x74\150\40\x63\157\x6d\x6d\x61\x73", PR__CST__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto emqswoaawgeyosmi; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto ocywegekakimmwcq; } if ($aqykuigiuwmmcieu == OBJECT) { goto gswcoeiisamakwii; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto yuimwyoywaiiqacs; gswcoeiisamakwii: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto yoqakewookqoqacm; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x70\x6c\165\x72\x61\154" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\163\151\x6e\x67\x75\x6c\141\162" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\x6f\142\x6a\x65\143\x74\x5f\x74\x79\160\145" => $sciomagaqmgggsiu, "\x64\x65\163\143\162\x69\160\x74\151\157\156" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\163\151\156\x67\x6c\145\137\x76\141\x6c\x75\145" => ManipulateArray::get($igqsaukqcqscimok, "\x73\151\156\147\154\145\137\x76\141\x6c\x75\x65", false), "\x68\151\145\162\x61\x72\143\150\x69\x63\x61\154" => true, "\151\163\x5f\141\164\x74\x72\x69\142\165\x74\x65" => true]; yoqakewookqoqacm: yuimwyoywaiiqacs: ocywegekakimmwcq: emqswoaawgeyosmi: ikuuiauwouuqawuw: } uckewycoogsogwiy: return $sogksuscggsicmac; } }
