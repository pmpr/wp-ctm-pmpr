<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a425d97a             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function mameiwsayuyquoeq() { SettingSegment::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'register']); $this->waqewsckuayqguos('attribute_render_values', [$this, 'suaqoasouomoauiq']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('attribute_get_by_post', [$this, 'ioaykugecyocyggc'], 10, 2); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if ($uyuaosigqymaqsaa) { echo $this->iuygowkemiiwqmiw('values', [Constants::ucoiewcoucauqwko => $uyuaosigqymaqsaa, Constants::emcyuiagkcgsckma => $seyqqsmuaiegkeeq]); } } public function register() { if ($seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wwcycgyaiaksckuk); if ($qgweosiseeogigso) { $ywmkwiwkosakssii[Constants::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if ($cwaqscoiqkokyase->qeegmakycwwycmcm($kesssewsiegssiya)) { $cqcqsgykasiqwowi->register($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); } } } } } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $kcumookcwskcyqak = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'plural'); $sisssumicskyceeg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'singular'); return ['name' => _x($kcumookcwskcyqak, 'taxonomy general name', PR__CST__PMPR), 'menu_name' => $kcumookcwskcyqak, 'edit_item' => sprintf(__('Edit %s', PR__CST__PMPR), $sisssumicskyceeg), 'all_items' => sprintf(__('All %s', PR__CST__PMPR), $kcumookcwskcyqak), 'not_found' => sprintf(__('No %s found.', PR__CST__PMPR), $kcumookcwskcyqak), 'update_item' => sprintf(__('Update %s', PR__CST__PMPR), $sisssumicskyceeg), 'parent_item' => sprintf(__('Parent %s', PR__CST__PMPR), $sisssumicskyceeg), 'search_items' => sprintf(__('Search %s', PR__CST__PMPR), $kcumookcwskcyqak), 'add_new_item' => sprintf(__('Add New %s', PR__CST__PMPR), $sisssumicskyceeg), 'singular_name' => _x($sisssumicskyceeg, 'taxonomy singular name', PR__CST__PMPR), 'new_item_name' => sprintf(__('New %s', PR__CST__PMPR), $sisssumicskyceeg), 'popular_items' => sprintf(__('Popular %s', PR__CST__PMPR), $kcumookcwskcyqak), 'parent_item_colon' => sprintf(__('Parent %s', PR__CST__PMPR), $sisssumicskyceeg), 'add_or_remove_items' => sprintf(__('Add or remove %s', PR__CST__PMPR), $kcumookcwskcyqak), 'choose_from_most_used' => sprintf(__('Choose from the most used %s', PR__CST__PMPR), $kcumookcwskcyqak), 'separate_items_with_commas' => sprintf(__('Separate %s with commas', PR__CST__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Constants::emcyuiagkcgsckma, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::NAME); if ($ymqmyyeuycgmigyo && $aaokuekaimigoyue) { if ($gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::iccwcygaeqmomooo, false)) { if ($aqykuigiuwmmcieu == OBJECT) { $sciomagaqmgggsiu = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::miemwgakuokqyoqo, []); if ($sciomagaqmgggsiu) { $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ['plural' => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::mmieaueggwwaokig), 'singular' => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::egyqyoogakommguc), 'is_attribute' => true, Constants::ouywiegeiyuaaawo => $aaokuekaimigoyue, Constants::qgqyauaqwqmqseim => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qgqyauaqwqmqseim), Constants::wwcycgyaiaksckuk => $sciomagaqmgggsiu, Constants::eqkeooqcsscoggia => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eqkeooqcsscoggia), Constants::ckskigqewkgmyeog => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ckskigqewkgmyeog, false), Constants::ikagyegqaweawkkc => true]; } } else { $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; } } } } return $sogksuscggsicmac; } }
