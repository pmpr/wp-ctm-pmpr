<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae2fe979657             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\162\x65\x67\x69\163\x74\x65\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x74\x74\x72\x69\142\165\x74\x65\137\x72\x65\156\x64\145\x72\x5f\166\x61\x6c\165\x65\163"), [$this, "\x73\165\141\x71\157\141\x73\x6f\x75\157\x6d\x6f\x61\x75\151\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\164\x74\x72\151\x62\165\x74\145\x5f\x67\145\x74\137\142\x79\137\x70\x6f\163\164"), [$this, "\151\x6f\141\x79\153\165\x67\145\x63\171\x6f\143\171\x67\147\143"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto yuimwyoywaiiqacs; } echo $this->iuygowkemiiwqmiw("\x76\141\x6c\x75\145\163", ["\164\145\x72\x6d\x73" => $uyuaosigqymaqsaa, "\x74\141\x78\x6f\156\157\155\151\x65\163" => $seyqqsmuaiegkeeq]); yuimwyoywaiiqacs: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto okkmcocqokkskasy; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\x6f\x62\152\145\143\x74\x5f\x74\x79\x70\145"); if (!$qgweosiseeogigso) { goto esikeyqyuikmaiek; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto iwsmmkqaoksmocok; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); iwsmmkqaoksmocok: esikeyqyuikmaiek: emqswoaawgeyosmi: } ocywegekakimmwcq: okkmcocqokkskasy: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\160\154\x75\x72\141\x6c"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x6e\x67\x75\154\141\x72"); return ["\x6e\141\x6d\145" => _x($kcumookcwskcyqak, "\x74\141\x78\157\x6e\157\155\x79\40\x67\145\156\x65\162\x61\x6c\x20\156\x61\155\x65", PR__CST__PMPR), "\155\145\x6e\x75\137\x6e\141\x6d\x65" => $kcumookcwskcyqak, "\x65\144\151\164\x5f\151\x74\145\x6d" => sprintf(__("\x45\144\x69\164\x20\45\x73", PR__CST__PMPR), $sisssumicskyceeg), "\x61\154\x6c\x5f\x69\x74\145\x6d\163" => sprintf(__("\x41\x6c\154\x20\45\163", PR__CST__PMPR), $kcumookcwskcyqak), "\x6e\157\164\x5f\x66\157\x75\x6e\144" => sprintf(__("\x4e\x6f\40\x25\163\x20\x66\157\x75\156\144\56", PR__CST__PMPR), $kcumookcwskcyqak), "\x75\160\x64\x61\164\x65\x5f\x69\x74\x65\155" => sprintf(__("\125\160\x64\x61\x74\145\40\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\x70\x61\x72\x65\156\164\x5f\151\x74\x65\x6d" => sprintf(__("\120\141\x72\145\156\164\40\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\163\x65\x61\162\x63\150\x5f\x69\x74\145\155\163" => sprintf(__("\123\x65\141\162\x63\150\40\45\163", PR__CST__PMPR), $kcumookcwskcyqak), "\x61\x64\x64\137\156\x65\167\x5f\151\x74\x65\155" => sprintf(__("\x41\x64\144\40\x4e\x65\167\40\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\163\x69\x6e\147\x75\154\x61\162\137\156\141\x6d\145" => _x($sisssumicskyceeg, "\x74\141\170\157\x6e\x6f\x6d\171\x20\163\x69\156\147\x75\x6c\141\162\40\156\141\155\145", PR__CST__PMPR), "\156\145\x77\137\x69\164\145\155\137\x6e\141\155\x65" => sprintf(__("\x4e\x65\x77\40\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\160\x6f\x70\x75\154\x61\x72\137\x69\x74\145\x6d\x73" => sprintf(__("\120\157\160\165\154\x61\162\40\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x70\141\162\x65\x6e\x74\137\x69\x74\x65\155\x5f\x63\157\154\x6f\x6e" => sprintf(__("\x50\x61\162\x65\156\164\x20\45\x73", PR__CST__PMPR), $sisssumicskyceeg), "\x61\x64\x64\x5f\157\162\137\162\x65\155\157\166\x65\x5f\x69\164\x65\155\163" => sprintf(__("\101\144\144\40\157\x72\x20\x72\x65\x6d\x6f\x76\x65\x20\x25\163", PR__CST__PMPR), $kcumookcwskcyqak), "\143\x68\157\157\163\145\137\146\x72\157\155\x5f\155\157\x73\x74\x5f\165\x73\x65\144" => sprintf(__("\103\x68\157\x6f\x73\x65\40\x66\162\x6f\155\x20\164\x68\x65\40\x6d\157\163\164\x20\165\163\x65\144\40\x25\163", PR__CST__PMPR), $kcumookcwskcyqak), "\163\145\160\141\162\x61\164\x65\x5f\151\x74\145\155\x73\x5f\167\x69\164\150\137\x63\x6f\155\x6d\x61\x73" => sprintf(__("\x53\145\x70\141\x72\x61\x74\145\x20\x25\x73\40\167\x69\164\x68\x20\143\157\155\x6d\141\163", PR__CST__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto gsygwgsiawgmqiyi; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto wwukgaquuyoissgy; } if ($aqykuigiuwmmcieu == OBJECT) { goto mscgewkcqcoowweg; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto suqcsgaosywaauuu; mscgewkcqcoowweg: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto ikqeeaysmqgcgawq; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\160\154\x75\162\x61\x6c" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\x73\151\x6e\x67\x75\x6c\x61\x72" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\x6f\142\x6a\x65\x63\x74\137\164\171\160\145" => $sciomagaqmgggsiu, "\144\x65\163\x63\x72\151\160\x74\x69\x6f\156" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\x73\x69\156\147\x6c\145\137\166\x61\154\x75\x65" => ManipulateArray::get($igqsaukqcqscimok, "\163\x69\x6e\147\154\x65\x5f\x76\x61\154\165\x65", false), "\x68\151\145\162\141\162\x63\x68\x69\143\141\154" => true, "\151\163\137\x61\x74\164\x72\x69\x62\165\x74\145" => true]; ikqeeaysmqgcgawq: suqcsgaosywaauuu: wwukgaquuyoissgy: gsygwgsiawgmqiyi: esaqcqqwuussiiwo: } qiiigwkqeoewsuwm: return $sogksuscggsicmac; } }
