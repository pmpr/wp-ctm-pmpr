<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61616ef63ca8c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; class User extends Container { const SKILLS = "\x73\x6b\151\154\154\163"; const CAPTION = "\143\x61\x70\x74\x69\x6f\x6e"; const EDUCATION = "\x65\x64\x75\x63\x61\164\151\x6f\156"; const IS_MANAGER = "\151\163\137\155\141\x6e\141\x67\x65\162"; const EXPERIENCE_YEAR = "\145\170\x70\x65\162\x69\145\156\143\145\137\x79\x65\141\162"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\163\x68\x6f\x72\x74\x63\157\144\145\x5f\164\x65\141\155\137\x75\x73\145\x72\137\x69\156\146\157", [$this, "\x75\143\165\145\163\x71\x75\x79\x73\167\x67\171\x79\x6b\x6d\143"], 1, 2)->qcsmikeggeemccuu("\163\150\157\162\x74\143\157\144\145\137\x74\145\x61\155\137\x75\x73\145\x72\137\x63\x61\160\164\x69\x6f\156", [$this, "\x77\x61\165\x77\167\151\157\x69\167\x6d\161\155\163\163\163\x6b"])->qcsmikeggeemccuu("\x73\x68\x6f\x72\164\x63\x6f\x64\145\x5f\164\145\x61\155\x5f\x75\x73\145\162\137\x65\x78\x70\x65\x72\x69\x65\156\x63\145", [$this, "\x6d\x71\171\x65\163\153\153\161\x61\145\x73\x73\165\147\157\x75"], 1, 2); } public function init() { $this->giiwgiqqoicuqcuw(); $this->ogmgcumcoomekiuy(); } public function cogiwegesawkwomk() { goto ucasigqmoiwaimkk; uugwmywmaqomeksa: goto wowmysuygugawmmu; wowmysuygugawmmu: gwkawguwsamuomuo: goto mmmqqoemusicwgqg; ucasigqmoiwaimkk: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto gwkawguwsamuomuo; } goto uugwmywmaqomeksa; mmmqqoemusicwgqg: } public function giiwgiqqoicuqcuw() { add_role("\155\x65\155\142\x65\x72", __("\x4d\145\155\142\145\162", PR__CTM__PMPR), ["\162\x65\141\x64" => true, "\x65\144\x69\x74\137\160\x6f\163\x74\x73" => true, "\x64\145\x6c\145\x74\x65\x5f\x70\x6f\163\x74\x73" => false]); } public function ogmgcumcoomekiuy() { goto iaoyeugekskmewgs; iokemmkgmcaksiqu: global $wp_roles; goto okagauksoqkoqygi; eciksmgaqikwegwq: iquugwoswgkoiieg: goto kieyoaoawqacqamy; iaoyeugekskmewgs: $smgioooysaacyigy = ["\x63\157\156\x74\162\x69\x62\x75\164\157\162" => "\165\160\154\157\x61\x64\137\x66\151\154\x65\x73", "\x65\x64\151\x74\157\162" => ["\160\x75\x62\x6c\x69\163\x68\137\160\157\x73\164\x73"]]; goto iokemmkgmcaksiqu; okagauksoqkoqygi: foreach ($smgioooysaacyigy as $oeucsuyqysaciasy => $gkswkiicccswksiq) { goto umemmgiwimkymaya; umemmgiwimkymaya: if ($oeucsuyqysaciasy && is_array($gkswkiicccswksiq)) { goto woqkgwmkmqsuceuy; } goto omsmaougqkqigogw; mccimkgwkkamsime: gsiaskgsukseumig: goto ucaoyoamaycsiacq; iuyagqakcieasiua: xogaycsaesgqeqig: goto oasisywuwssumsok; omsmaougqkqigogw: $wp_roles->add_cap($oeucsuyqysaciasy, $gkswkiicccswksiq); goto geasgywiogoeamek; geasgywiogoeamek: goto imwiyqcekcykscui; goto qweyymyuuqwcmkqg; ucaoyoamaycsiacq: imwiyqcekcykscui: goto iuyagqakcieasiua; qweyymyuuqwcmkqg: woqkgwmkmqsuceuy: goto guqmgiqaaowaauyo; guqmgiqaaowaauyo: foreach ($gkswkiicccswksiq as $igqsaukqcqscimok) { $wp_roles->add_cap($oeucsuyqysaciasy, $igqsaukqcqscimok); syiyemqigyugagks: } goto mccimkgwkkamsime; oasisywuwssumsok: } goto eciksmgaqikwegwq; kieyoaoawqacqamy: } public function wauwwioiwmqmsssk($mkucggyaiaukqoce) { $oeceqaaausgeosyu = ManipulateUser::igawqaomowicuayw(self::CAPTION, $mkucggyaiaukqoce, true); echo esc_html($oeceqaaausgeosyu); } public function ucuesquyswgyykmc($mkucggyaiaukqoce, $emwagqamysmyeigc = false) { goto qckouamqueqiykqi; measoqewessauqma: $geysycsisgaocukc = ManipulateUser::igawqaomowicuayw(self::EDUCATION, $mkucggyaiaukqoce, true); goto auaigccmwqwsqsku; qckouamqueqiykqi: $oeceqaaausgeosyu = ManipulateUser::igawqaomowicuayw(self::CAPTION, $mkucggyaiaukqoce, true); goto measoqewessauqma; auaigccmwqwsqsku: echo $this->iuygowkemiiwqmiw("\164\145\x61\155\x5f\163\150\x6f\162\x74\x63\x6f\144\145\x5f\151\x6e\x66\157", ["\x63\141\x70\164\x69\x6f\x6e" => $oeceqaaausgeosyu, "\x65\x64\x75\143\x61\164\x69\x6f\156" => $geysycsisgaocukc, "\x69\x73\x5f\x6d\x61\156\x61\x67\145\x72" => $emwagqamysmyeigc]); goto wiaesksmicgikqcm; wiaesksmicgikqcm: } public function iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee = null) { goto agemeseegiuuowgo; csyoimsqgwcmiwki: return $qcgkuqesqqymcuui; goto ggqwcqssoauckuic; goswwiomuackymqi: if (!$mkucggyaiaukqoce) { goto gqaimiooakyykccy; } goto gykuaukukosiocoy; uuisaeysawuagysg: if ($ggkaciewmeqmgckg) { goto mcucegiogmuyogki; } goto ggqeakyaggiuegek; usgcoawgqswoeiec: $ggkaciewmeqmgckg = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\x75\163\x65\x72\x5f\162\x65\x67\x69\163\x74\145\162\145\144"); goto qowcwmsiyscackaa; agemeseegiuuowgo: $qcgkuqesqqymcuui = $ggauoeuaesiymgee; goto goswwiomuackymqi; qowcwmsiyscackaa: mcucegiogmuyogki: goto aqigiwmamkowomiw; aqigiwmamkowomiw: $qcgkuqesqqymcuui = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\164\x5f\x61\147\x65"), $ggkaciewmeqmgckg, $ksskkagoieiyuuwe); goto qesqgumuouyymcwa; ggqeakyaggiuegek: $ksskkagoieiyuuwe = false; goto usgcoawgqswoeiec; camawumockccayaq: $ggkaciewmeqmgckg = ManipulateUser::igawqaomowicuayw(self::EXPERIENCE_YEAR, $mkucggyaiaukqoce, true); goto uuisaeysawuagysg; qesqgumuouyymcwa: gqaimiooakyykccy: goto csyoimsqgwcmiwki; gykuaukukosiocoy: $ksskkagoieiyuuwe = true; goto camawumockccayaq; ggqwcqssoauckuic: } public function mqyeskkqaessugou($mkucggyaiaukqoce, $emwagqamysmyeigc = false) { goto mmkoqmccusoeaoyi; yyamycyesguwueuw: echo $this->iuygowkemiiwqmiw("\164\145\141\155\137\x73\150\x6f\162\x74\143\157\144\x65\137\145\x78\x70\x65\162\151\x65\x6e\143\145", ["\x65\x78\160\145\162\151\145\x6e\x63\145" => sprintf(__("\x25\x73\40\131\145\141\x72\163", PR__CTM__PMPR), $this->sscegwueamckwmcy("\x77\x68\x6f\x5f\x73\x68\x6f\162\164\143\157\x64\145\x5f\171\x65\141\x72", $cimomgqukyyywkws)), "\x74\145\170\164" => __("\x45\170\160\145\162\x69\x65\x6e\143\x65", PR__CTM__PMPR), "\x69\x73\137\x6d\x61\x6e\141\x67\x65\x72" => $emwagqamysmyeigc]); goto aymmymequcisekie; waewaiuiogywqigu: $cimomgqukyyywkws = $this->iwowkiqkseykocsk($mkucggyaiaukqoce, 1); goto yyamycyesguwueuw; aymmymequcisekie: ggwcauaeuagekeyo: goto gyeayeuuyiemuwuq; mmkoqmccusoeaoyi: if (!$mkucggyaiaukqoce) { goto ggwcauaeuagekeyo; } goto waewaiuiogywqigu; gyeayeuuyiemuwuq: } }
