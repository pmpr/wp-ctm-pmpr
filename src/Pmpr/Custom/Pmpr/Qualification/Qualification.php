<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f12d2fddd             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Qualification; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorComment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Custom\Pmpr\Container; use stdClass; use WP_Comment; use WP_Post; class Qualification extends Container { const NONCE_ACTION = "\141\x64\144\x2d\x63\157\x6d\155\145\156\x74"; public function __construct() { $this->canRunSetup = Setting::eiwcuqigayigimak(self::ENABLE); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\143\x6f\x6d\x6d\x65\x6e\x74\137\160\157\x73\164", [$this, "\143\x6b\x75\x6d\x6f\145\x67\155\x6f\x79\143\141\145\x71\151\x67"])->qcsmikeggeemccuu("\145\144\151\164\x5f\143\x6f\155\x6d\145\156\164", [$this, "\141\x67\163\143\x71\171\141\x63\x73\x6d\x6d\x6d\x75\143\x79\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\161\165\x61\x6c\x69\x66\x69\x63\141\164\x69\x6f\156\x5f\x72\x65\156\144\145\x72\137\x61\x76\145\162\141\147\x65\163"), [$this, "\x6f\151\x79\x63\x6d\x6f\x61\157\161\x77\155\x75\x67\151\x6b\x6d"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\161\x75\x61\154\151\x66\x69\143\141\164\x69\157\156\x5f\x72\x65\156\x64\145\x72\x5f\166\141\154\x75\145\x73"), [$this, "\163\165\141\x71\x6f\x61\163\157\x75\157\155\x6f\141\165\151\x71"], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\157\155\155\145\x6e\x74\137\146\x6f\x72\155\x5f\x72\141\164\151\x6e\x67\x5f\146\x69\145\154\x64", [$this, "\x75\x79\x6b\x67\155\x73\145\x6b\143\x69\143\151\151\171\145\x6b"], 99)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\161\x75\x61\x6c\x69\146\x69\x63\141\x74\151\x6f\x6e\163\137\x68\164\155\x6c"), [$this, "\x75\x67\155\x63\x65\143\143\x67\167\x61\141\x61\151\147\151\x79"], 1, 2); parent::kgquecmsgcouyaya(); } public function init() { $aqqmosqmsuueyaes = ManipulateComment::immcwcemcmyosyoo(); if (!$aqqmosqmsuueyaes) { goto egasokooagakisiy; } $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); $oammesyieqmwuwyi = Setting::weakeqaiqccuysuk($post); $qkweikswegyciaie = MetaBox::cgygmuguceeosoey("\x63\157\155\155\x65\156\164\137\x71\165\x61\x6c\x69\x66\151\x63\x61\164\x69\x6f\156\163", __("\103\157\x6d\155\145\x6e\x74\40\x51\x75\141\x6c\x69\146\x69\143\141\164\151\x6f\156\x73", PR__PKG__ADVANCED_CMS), true)->saemoowcasogykak(IconFontawesomeInterface::ICON_LIST_CHECK)->gisikkgygmseekyi(); if (!$oammesyieqmwuwyi) { goto mswsoaimesegiiic; } foreach ($oammesyieqmwuwyi as $aaokuekaimigoyue => $igqsaukqcqscimok) { $qkweikswegyciaie->mkksewyosgeumwsa(MetaBox::yyuwuqsiucweeoue($aaokuekaimigoyue, $igqsaukqcqscimok[self::TITLE], ManipulateNumber::ywqgcuymeiswqyqc(1, 5))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo()); usqgaogkqgemuima: } wcesymwqykqoyuqk: mswsoaimesegiiic: egasokooagakisiy: } public function uykgmsekciciiyek($qqyuqswckkcomeak) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto kecwuwwcwokuksyq; } $qqyuqswckkcomeak = $ikgwqyuyckaewsow; kecwuwwcwokuksyq: return $qqyuqswckkcomeak; } public function ugmceccgwaaaigiy($nsmgceoqaqogqmuw = '', $post = null) { $oammesyieqmwuwyi = Setting::weakeqaiqccuysuk($post); if (!$oammesyieqmwuwyi) { goto qgegkeomwscwwiuw; } $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\157\x72\x6d\137\151\164\145\x6d\x73", ["\x69\164\145\x6d\x73" => $oammesyieqmwuwyi, "\147\x77\x67\161\x63\x73\155\157\x6d\x61\x6d\x79\161\x73\155\x79" => self::NONCE_ACTION]); qgegkeomwscwwiuw: return $nsmgceoqaqogqmuw; } public function ewskuweiiymaemok($post, $cogyussscquycwms = []) { if ($cogyussscquycwms) { goto qmiwsequckckoaei; } $cogyussscquycwms = Setting::weakeqaiqccuysuk($post); qmiwsequckckoaei: $post = ManipulatePost::mwikyscisascoeea($post); $wyoiwuqokyeeuguk = ManipulatePost::mmoaikqueyiwcesm($post, [], self::LABELS); if (is_array($wyoiwuqokyeeuguk) && $wyoiwuqokyeeuguk) { goto goeoymmqqqeeoime; } $wyoiwuqokyeeuguk = [$post]; goto eiawsoasmscmqswa; goeoymmqqqeeoime: $wyoiwuqokyeeuguk = array_keys($wyoiwuqokyeeuguk); array_push($wyoiwuqokyeeuguk, $post); eiawsoasmscmqswa: $oammesyieqmwuwyi = []; $kcagcoeuiasswusq = []; foreach ($wyoiwuqokyeeuguk as $post) { $kcagcoeuiasswusq = array_merge($kcagcoeuiasswusq, ManipulateComment::ciugwooasaqcywas(["\x70\x6f\x73\x74\x5f\x69\144" => $post])); qmeoaqmsuseueqiy: } ickcmqoiosquugwe: $gaeqamemwmwsyukm = 0; if (!is_array($cogyussscquycwms)) { goto qwcegcuowwgiccos; } foreach ($cogyussscquycwms as $aaokuekaimigoyue => $mcgawcqaymssmyww) { $eqgoocgaqwqcimie = 0; $gaeqamemwmwsyukm = 0; foreach ($kcagcoeuiasswusq as $momcykaoccoymeig => $aqqmosqmsuueyaes) { if (!$aqqmosqmsuueyaes instanceof WP_Comment) { goto twkmiuomimomscew; } if (!$aqqmosqmsuueyaes->comment_approved) { goto eyiamcekkgkiawqy; } $ugugimquukqwogge = ManipulateComment::igawqaomowicuayw($aaokuekaimigoyue, $aqqmosqmsuueyaes, true); if (!$ugugimquukqwogge) { goto mqccmesakuemceqi; } $sqeykgyoooqysmca = ManipulateArray::get($mcgawcqaymssmyww, self::TYPE); if (!($sqeykgyoooqysmca == "\x72\x61\164\x69\x6e\147")) { goto igymseewwyiocoug; } $ugugimquukqwogge *= 20; igymseewwyiocoug: $eqgoocgaqwqcimie += $ugugimquukqwogge; $gaeqamemwmwsyukm++; mqccmesakuemceqi: eyiamcekkgkiawqy: twkmiuomimomscew: sukskmcwsoysiuqu: } cgewcsueoyaeikgm: if (!($gaeqamemwmwsyukm > 0)) { goto kooskuwkuayiuose; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie / $gaeqamemwmwsyukm; $oammesyieqmwuwyi[$aaokuekaimigoyue] = $eqgoocgaqwqcimie; kooskuwkuayiuose: cuoqqgaygogsmmic: } ygkcacsyyckescqs: qwcegcuowwgiccos: return [$oammesyieqmwuwyi, $gaeqamemwmwsyukm]; } public function suaqoasouomoauiq($post, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::COUNT => 0, "\150\141\163\x5f\x63\157\x75\156\164" => true]); $oammesyieqmwuwyi = []; $gaeqamemwmwsyukm = 0; $cogyussscquycwms = []; $ocogsiouoiuuguym = strtotime(date("\131\55\155\55\144\40\x48\x3a\151\x3a\x73")); if (is_array($post)) { goto wwkgkaecgiwggcck; } if ($post) { goto umgaesggesswoaqe; } goto kciouyuaqkyqomam; wwkgkaecgiwggcck: foreach ($post as $igqsaukqcqscimok) { $igqsaukqcqscimok = ManipulatePost::get($igqsaukqcqscimok); if (!$igqsaukqcqscimok instanceof WP_Post) { goto ycakugokkqkuqyiu; } $cogyussscquycwms = array_merge(Setting::weakeqaiqccuysuk($igqsaukqcqscimok), $cogyussscquycwms); [$qqswgiawgeaeoecu, $cqcuwemuusesmqsq] = $this->ewskuweiiymaemok($igqsaukqcqscimok, $cogyussscquycwms); foreach ($qqswgiawgeaeoecu as $aaokuekaimigoyue => $eqgoocgaqwqcimie) { $oammesyieqmwuwyi[$aaokuekaimigoyue] = $this->qooeaookuemoqecm($eqgoocgaqwqcimie); coywmiyqgsweuiic: } ieumumsgyguceusy: $gaeqamemwmwsyukm += $cqcuwemuusesmqsq; if (!($aeeeamukmmwqiwsi = strtotime($igqsaukqcqscimok->post_date) < $ocogsiouoiuuguym)) { goto siqagquguiemuoku; } $ocogsiouoiuuguym = $aeeeamukmmwqiwsi; siqagquguiemuoku: ycakugokkqkuqyiu: yssscwioiyygssec: } qcessicwuikwqsis: goto kciouyuaqkyqomam; umgaesggesswoaqe: $post = ManipulatePost::get($post); if (!$post instanceof WP_Post) { goto gygawoqywkukmqee; } $cogyussscquycwms = Setting::weakeqaiqccuysuk($post); [$qqswgiawgeaeoecu, $gaeqamemwmwsyukm] = $this->ewskuweiiymaemok($post, $cogyussscquycwms); foreach ($qqswgiawgeaeoecu as $aaokuekaimigoyue => $eqgoocgaqwqcimie) { $oammesyieqmwuwyi[$aaokuekaimigoyue] = $this->qooeaookuemoqecm($eqgoocgaqwqcimie); sycygoiaiqqageym: } oouoqimaaqcmccay: $ocogsiouoiuuguym = strtotime($post->post_date); gygawoqywkukmqee: kciouyuaqkyqomam: $nsmgceoqaqogqmuw = ''; if (!$oammesyieqmwuwyi) { goto iqcogmsguwoikame; } if (!$ywmkwiwkosakssii["\150\141\163\137\x63\157\165\x6e\x74"]) { goto quwcqmyokicssyew; } if (!$ywmkwiwkosakssii["\x63\x6f\165\156\x74"]) { goto qsygcycwieukkgwc; } $gaeqamemwmwsyukm += $ywmkwiwkosakssii["\x63\x6f\165\x6e\x74"]; qsygcycwieukkgwc: if (!($gaeqamemwmwsyukm > 0)) { goto kiwqkcaekqqyuegq; } $icwicymcioeyeyek = $this->eciukqcoqmyacwow($ocogsiouoiuuguym, "\x59"); $nsmgceoqaqogqmuw .= $this->iuygowkemiiwqmiw("\x63\x6f\x75\156\x74", ["\143\157\165\x6e\x74" => sprintf(__("\45\x73\40\x4f\167\156\x65\x72\163\x68\151\x70", PR__CTM__PMPR), $gaeqamemwmwsyukm), "\163\x65\162\x76\151\x63\145" => $post, "\x64\145\163\x63\162\x69\x70\x74\x69\157\156" => sprintf(__("\x66\162\x6f\x6d\40\x25\163\40\165\156\164\151\154\40\x74\157\x64\141\x79", PR__CTM__PMPR), $icwicymcioeyeyek)]); kiwqkcaekqqyuegq: quwcqmyokicssyew: $nsmgceoqaqogqmuw .= $this->iuygowkemiiwqmiw("\x76\x61\x6c\165\x65\163", ["\151\x74\x65\155\163" => $oammesyieqmwuwyi, "\151\163\x5f\141\166\x65\x72\141\147\x65" => false, "\161\165\141\154\x69\146\151\x63\x61\x74\151\x6f\156\163" => $cogyussscquycwms]); iqcogmsguwoikame: echo $nsmgceoqaqogqmuw; } public function oiycmoaoqwmugikm($wyoiwuqokyeeuguk) { $cogyussscquycwms = []; $oammesyieqmwuwyi = []; if (!(is_array($wyoiwuqokyeeuguk) && $wyoiwuqokyeeuguk)) { goto miyqyeiwquwsacsm; } $gaeqamemwmwsyukm = 1; $egkygecqiowwuuuu = []; foreach ($wyoiwuqokyeeuguk as $post) { if ($cogyussscquycwms) { goto yqykqysmiquwoasu; } $cogyussscquycwms = Setting::weakeqaiqccuysuk($post); yqykqysmiquwoasu: [$qqswgiawgeaeoecu] = $this->ewskuweiiymaemok($post, $cogyussscquycwms); if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) { goto kqksuugcgsyeoayy; } foreach ($qqswgiawgeaeoecu as $aaokuekaimigoyue => $eqgoocgaqwqcimie) { if (isset($oammesyieqmwuwyi[$aaokuekaimigoyue])) { goto omugkkesagcyagmk; } $oammesyieqmwuwyi[$aaokuekaimigoyue] = $eqgoocgaqwqcimie; goto ygcsmkuycoagwyou; omugkkesagcyagmk: $oammesyieqmwuwyi[$aaokuekaimigoyue] += $eqgoocgaqwqcimie; ygcsmkuycoagwyou: $egkygecqiowwuuuu[$aaokuekaimigoyue] = $gaeqamemwmwsyukm; mosqsmqimqgqoase: } ayyweymyuuiauamo: $gaeqamemwmwsyukm++; kqksuugcgsyeoayy: cmqucgoewuyieoyk: } gimmuoqwckiseaik: foreach ($oammesyieqmwuwyi as $aaokuekaimigoyue => $igqsaukqcqscimok) { $gaeqamemwmwsyukm = 1; if (!isset($egkygecqiowwuuuu[$aaokuekaimigoyue])) { goto ssoucoucsgccekwe; } $gaeqamemwmwsyukm = $egkygecqiowwuuuu[$aaokuekaimigoyue]; ssoucoucsgccekwe: $eqgoocgaqwqcimie = $oammesyieqmwuwyi[$aaokuekaimigoyue] / $gaeqamemwmwsyukm; $oammesyieqmwuwyi[$aaokuekaimigoyue] = $this->qooeaookuemoqecm($eqgoocgaqwqcimie); qqewoyookaskiuek: } iggyqogweyosuikc: if (!$oammesyieqmwuwyi) { goto qkcyqocqqwmqgqww; } echo $this->iuygowkemiiwqmiw("\x76\141\154\165\x65\163", ["\x69\164\x65\x6d\x73" => $oammesyieqmwuwyi, "\x69\163\x5f\141\x76\145\x72\141\147\145" => true, "\161\165\x61\x6c\151\146\151\x63\x61\x74\x69\x6f\156\x73" => $cogyussscquycwms]); qkcyqocqqwmqgqww: miyqyeiwquwsacsm: } public function qooeaookuemoqecm($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = (int) $eqgoocgaqwqcimie; return ConvertArray::kamisyecckmwywwo(["{$eqgoocgaqwqcimie}\xd9\xaa", $this->wsmsmyyqeqwgoimc($eqgoocgaqwqcimie)], ["\166\141\154\165\x65", "\x67\162\141\x64\145"]); } public function wsmsmyyqeqwgoimc($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie >= 90) { goto ywqgcegomwaiuquc; } if ($eqgoocgaqwqcimie >= 50) { goto wmmggowmigekyoso; } $ucemsmwaikwawykw = "\103"; goto eegqyykygiccaoeo; ywqgcegomwaiuquc: $ucemsmwaikwawykw = "\101"; goto eegqyykygiccaoeo; wmmggowmigekyoso: $ucemsmwaikwawykw = "\x42"; eegqyykygiccaoeo: return $ucemsmwaikwawykw; } public function ckumoegmoycaeqig($geksaswoysqgkeaa) { $this->wiaswwsqkciqmaws($geksaswoysqgkeaa); } public function agscqyacsmmmucyo($geksaswoysqgkeaa) { $this->wiaswwsqkciqmaws($geksaswoysqgkeaa, false); } public function wiaswwsqkciqmaws($geksaswoysqgkeaa, $uwomkgseoiegeume = true) { $icwicymcioeyeyek = $_REQUEST; $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, self::NONCE_ACTION); if (!($geksaswoysqgkeaa && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, self::NONCE_ACTION))) { goto iekumemscwieugqw; } $post = ManipulateComment::ayueggmoqeeukqmq($geksaswoysqgkeaa); $oammesyieqmwuwyi = Setting::weakeqaiqccuysuk($post); if (!$oammesyieqmwuwyi) { goto foeeqckqsyockkak; } $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq(); foreach ($oammesyieqmwuwyi as $aaokuekaimigoyue => $igqsaukqcqscimok) { if (!isset($icwicymcioeyeyek[$aaokuekaimigoyue])) { goto oqugqwcyomiaaoqu; } $eqgoocgaqwqcimie = wp_filter_nohtml_kses($icwicymcioeyeyek[$aaokuekaimigoyue]); if ($uwomkgseoiegeume) { goto suswcqoyyqkkquuo; } ManipulateComment::ksmqawcowkmegigw($aaokuekaimigoyue, $eqgoocgaqwqcimie, $geksaswoysqgkeaa); goto eeqesooyqagwawae; suswcqoyyqkkquuo: ManipulateComment::giwmekimakcaawsq($aaokuekaimigoyue, $eqgoocgaqwqcimie, $geksaswoysqgkeaa, true); eeqesooyqagwawae: oqugqwcyomiaaoqu: acaqummmoyiemqss: } soqqemyioggmoakg: foeeqckqsyockkak: iekumemscwieugqw: } }
