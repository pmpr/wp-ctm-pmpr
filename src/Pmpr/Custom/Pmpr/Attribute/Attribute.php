<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649c4c137aba2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\162\x65\147\x69\x73\x74\x65\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x74\164\x72\x69\x62\165\x74\145\137\162\x65\156\144\x65\x72\x5f\166\141\154\165\x65\163"), [$this, "\x73\165\x61\161\157\x61\163\x6f\x75\x6f\155\157\141\165\151\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x74\x74\162\x69\x62\x75\164\x65\137\x67\145\x74\137\x62\x79\137\x70\157\163\164"), [$this, "\151\157\141\x79\x6b\165\147\x65\143\x79\x6f\143\171\147\x67\x63"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto qkcsykuocwuyaice; } echo $this->iuygowkemiiwqmiw("\x76\141\x6c\165\x65\x73", ["\x74\145\x72\x6d\x73" => $uyuaosigqymaqsaa, "\164\141\170\x6f\x6e\x6f\155\x69\x65\x73" => $seyqqsmuaiegkeeq]); qkcsykuocwuyaice: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto osuscoaaomwcqkew; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\157\142\152\145\143\164\137\x74\171\x70\x65"); if (!$qgweosiseeogigso) { goto aoquoewagkseayug; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto qiaimmucomukkeka; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); qiaimmucomukkeka: aoquoewagkseayug: egsycocugqyyswsi: } uoeasoimegouymka: osuscoaaomwcqkew: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\160\154\165\x72\141\154"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x6e\x67\x75\154\141\x72"); return ["\x6e\x61\155\x65" => _x($kcumookcwskcyqak, "\164\x61\170\157\x6e\157\x6d\x79\x20\147\145\156\145\x72\x61\x6c\40\156\141\x6d\145", PR__CST__PMPR), "\x6d\145\156\165\137\x6e\141\155\x65" => $kcumookcwskcyqak, "\x65\x64\x69\164\137\151\x74\x65\155" => sprintf(__("\x45\144\151\x74\40\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\141\154\154\x5f\151\x74\x65\155\163" => sprintf(__("\x41\x6c\x6c\40\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\156\157\164\x5f\146\157\x75\156\x64" => sprintf(__("\x4e\x6f\40\x25\x73\40\x66\157\165\x6e\x64\56", PR__CST__PMPR), $kcumookcwskcyqak), "\x75\160\144\141\164\x65\x5f\x69\164\145\x6d" => sprintf(__("\x55\x70\144\141\164\145\x20\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\160\141\x72\x65\x6e\x74\x5f\x69\x74\145\x6d" => sprintf(__("\x50\x61\x72\x65\x6e\164\40\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\163\145\141\x72\x63\x68\137\151\164\x65\x6d\163" => sprintf(__("\x53\145\x61\162\x63\x68\x20\x25\163", PR__CST__PMPR), $kcumookcwskcyqak), "\x61\x64\x64\x5f\156\x65\x77\x5f\x69\x74\145\155" => sprintf(__("\101\x64\144\40\x4e\x65\167\x20\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\163\151\156\x67\165\154\141\162\137\156\x61\155\145" => _x($sisssumicskyceeg, "\x74\141\170\x6f\x6e\157\155\x79\40\163\151\x6e\x67\x75\x6c\141\x72\x20\156\141\155\145", PR__CST__PMPR), "\x6e\145\x77\137\x69\x74\145\155\x5f\156\141\x6d\145" => sprintf(__("\x4e\x65\167\40\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\160\x6f\160\x75\154\x61\x72\x5f\151\164\145\x6d\x73" => sprintf(__("\120\157\x70\165\154\141\x72\40\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x70\141\162\x65\156\164\x5f\151\x74\x65\155\x5f\x63\x6f\154\157\156" => sprintf(__("\120\x61\162\145\x6e\164\x20\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\141\144\144\137\157\x72\137\162\145\x6d\x6f\x76\x65\137\x69\x74\145\x6d\x73" => sprintf(__("\101\x64\144\40\157\162\40\x72\145\155\157\166\145\x20\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x63\x68\157\157\x73\x65\x5f\146\162\x6f\x6d\x5f\x6d\x6f\163\x74\x5f\x75\163\x65\144" => sprintf(__("\x43\150\x6f\157\x73\x65\40\x66\x72\x6f\x6d\x20\x74\x68\145\40\155\x6f\x73\x74\40\x75\x73\145\144\x20\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x73\145\x70\141\162\141\164\x65\137\x69\164\x65\x6d\x73\x5f\167\x69\164\x68\x5f\x63\157\x6d\x6d\141\163" => sprintf(__("\123\x65\160\141\162\141\164\x65\x20\x25\x73\x20\167\151\164\x68\x20\143\x6f\x6d\155\141\x73", PR__CST__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto sqmoqymckwsogsqg; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto gqmewagyagamokok; } if ($aqykuigiuwmmcieu == OBJECT) { goto ussceseaimqywuiy; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto oyiuemaaykgkqqam; ussceseaimqywuiy: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto mkomygccqkmkumsi; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\160\154\165\162\x61\154" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\x73\x69\x6e\147\165\154\x61\162" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\157\x62\x6a\145\x63\164\137\x74\x79\x70\145" => $sciomagaqmgggsiu, "\144\x65\163\x63\162\x69\x70\x74\151\x6f\x6e" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\x73\151\x6e\x67\x6c\x65\x5f\x76\141\x6c\x75\145" => ManipulateArray::get($igqsaukqcqscimok, "\163\151\156\x67\x6c\x65\137\166\141\154\x75\x65", false), "\x68\x69\x65\162\141\162\x63\x68\151\143\141\154" => true, "\x69\x73\137\x61\164\x74\162\x69\x62\x75\x74\145" => true]; mkomygccqkmkumsi: oyiuemaaykgkqqam: gqmewagyagamokok: sqmoqymckwsogsqg: cgmgqucewwssmicq: } ciucewqgyoiouesq: return $sogksuscggsicmac; } }
