<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f573a56b368             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x72\145\x67\151\x73\164\145\x72"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x74\x74\162\x69\142\165\x74\x65\x5f\162\x65\x6e\144\x65\x72\137\166\x61\154\165\145\163"), [$this, "\163\165\x61\161\x6f\141\163\x6f\x75\157\155\x6f\141\165\x69\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\164\x74\162\151\x62\165\x74\145\137\x67\x65\x74\137\x62\171\137\x70\x6f\x73\x74"), [$this, "\151\x6f\141\171\x6b\x75\x67\x65\x63\171\x6f\143\171\x67\147\143"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto kqksuugcgsyeoayy; } echo $this->iuygowkemiiwqmiw("\166\x61\x6c\165\145\x73", ["\164\145\x72\x6d\x73" => $uyuaosigqymaqsaa, "\x74\x61\170\157\x6e\157\x6d\x69\x65\x73" => $seyqqsmuaiegkeeq]); kqksuugcgsyeoayy: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto miyqyeiwquwsacsm; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\x6f\142\x6a\x65\143\164\x5f\164\171\160\145"); if (!$qgweosiseeogigso) { goto qkcyqocqqwmqgqww; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto ssoucoucsgccekwe; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); ssoucoucsgccekwe: qkcyqocqqwmqgqww: qqewoyookaskiuek: } iggyqogweyosuikc: miyqyeiwquwsacsm: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\x70\x6c\165\x72\x61\x6c"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\x69\156\147\165\x6c\141\x72"); return ["\x6e\x61\x6d\x65" => _x($kcumookcwskcyqak, "\164\141\170\157\156\157\x6d\x79\x20\147\145\156\x65\x72\x61\154\x20\156\x61\x6d\145", PR__CTM__PMPR), "\x6d\145\156\165\x5f\x6e\141\155\x65" => $kcumookcwskcyqak, "\x65\x64\151\x74\x5f\151\x74\x65\x6d" => sprintf(__("\105\x64\151\164\40\x25\x73", PR__CTM__PMPR), $sisssumicskyceeg), "\141\154\154\x5f\151\164\x65\x6d\x73" => sprintf(__("\101\154\154\40\45\x73", PR__CTM__PMPR), $kcumookcwskcyqak), "\x6e\157\x74\x5f\146\157\x75\156\x64" => sprintf(__("\x4e\157\x20\45\163\x20\146\x6f\x75\156\144\56", PR__CTM__PMPR), $kcumookcwskcyqak), "\165\160\x64\141\x74\145\137\151\x74\x65\x6d" => sprintf(__("\x55\x70\x64\x61\x74\x65\40\x25\163", PR__CTM__PMPR), $sisssumicskyceeg), "\160\x61\162\x65\156\x74\x5f\151\x74\145\x6d" => sprintf(__("\x50\x61\x72\x65\x6e\164\x20\45\163", PR__CTM__PMPR), $sisssumicskyceeg), "\163\x65\x61\x72\143\150\137\x69\164\145\155\x73" => sprintf(__("\x53\145\x61\x72\143\150\x20\x25\163", PR__CTM__PMPR), $kcumookcwskcyqak), "\141\x64\144\137\156\x65\x77\x5f\x69\x74\145\155" => sprintf(__("\x41\144\x64\x20\x4e\x65\167\40\x25\163", PR__CTM__PMPR), $sisssumicskyceeg), "\163\x69\156\147\x75\x6c\141\162\137\156\x61\x6d\145" => _x($sisssumicskyceeg, "\164\x61\x78\157\x6e\x6f\x6d\x79\x20\163\151\x6e\x67\x75\x6c\141\x72\x20\x6e\141\155\x65", PR__CTM__PMPR), "\x6e\145\x77\x5f\151\x74\x65\x6d\x5f\156\141\155\145" => sprintf(__("\x4e\145\167\x20\x25\x73", PR__CTM__PMPR), $sisssumicskyceeg), "\160\x6f\160\x75\154\141\162\x5f\x69\x74\145\x6d\163" => sprintf(__("\120\157\x70\x75\x6c\x61\x72\40\45\163", PR__CTM__PMPR), $kcumookcwskcyqak), "\160\141\x72\145\x6e\164\137\151\x74\x65\155\x5f\x63\157\154\157\x6e" => sprintf(__("\120\141\162\x65\156\x74\x20\45\x73", PR__CTM__PMPR), $sisssumicskyceeg), "\141\144\144\x5f\x6f\x72\137\x72\x65\x6d\x6f\x76\145\137\x69\164\x65\x6d\163" => sprintf(__("\101\x64\x64\40\157\x72\x20\162\x65\155\157\166\x65\x20\45\163", PR__CTM__PMPR), $kcumookcwskcyqak), "\x63\150\x6f\157\x73\145\x5f\146\162\x6f\155\x5f\155\157\x73\x74\137\x75\x73\x65\144" => sprintf(__("\103\x68\x6f\157\163\x65\x20\x66\162\x6f\x6d\40\164\150\x65\40\x6d\157\x73\x74\40\x75\x73\x65\x64\x20\45\x73", PR__CTM__PMPR), $kcumookcwskcyqak), "\163\145\x70\x61\162\x61\x74\x65\x5f\151\x74\145\155\163\x5f\x77\x69\164\x68\x5f\143\157\155\155\x61\163" => sprintf(__("\x53\x65\x70\x61\162\141\164\x65\40\x25\163\x20\167\151\164\150\40\143\157\155\155\141\163", PR__CTM__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto eeqesooyqagwawae; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto suswcqoyyqkkquuo; } if ($aqykuigiuwmmcieu == OBJECT) { goto soqqemyioggmoakg; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto acaqummmoyiemqss; soqqemyioggmoakg: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto wmmggowmigekyoso; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x70\x6c\x75\162\141\154" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\x73\151\156\147\x75\154\141\162" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\157\x62\x6a\x65\x63\164\137\164\171\x70\145" => $sciomagaqmgggsiu, "\x64\x65\163\x63\162\x69\x70\164\151\157\156" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\163\151\156\x67\154\x65\137\x76\141\154\x75\x65" => ManipulateArray::get($igqsaukqcqscimok, "\x73\x69\x6e\x67\154\145\x5f\x76\x61\154\165\x65", false), "\x68\x69\145\x72\x61\162\143\x68\151\143\x61\x6c" => true, "\x69\163\137\x61\x74\164\162\151\x62\x75\x74\145" => true]; wmmggowmigekyoso: acaqummmoyiemqss: suswcqoyyqkkquuo: eeqesooyqagwawae: ywqgcegomwaiuquc: } eegqyykygiccaoeo: return $sogksuscggsicmac; } }
