<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f38781a7             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Shortcode; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Custom\Pmpr\User; use Pmpr\Package\AdvancedCMS\Shortcode\Segment; use WP_Post; class Who extends Segment { const USER = "\165\163\x65\x72"; public function __construct() { $this->target = self::FULLWIDTH_TARGETS; parent::__construct(); } public function gogaagekwoisaqgu() { $this->icon = IconFontawesomeInterface::ICON_ADDRESS_CARD; $this->title = __("\127\x68\157\40\x69\163", PR__CTM__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae($this->kwosaecaikgmoeyo()->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::IMAGE, __("\111\155\x61\x67\x65", PR__CTM__PMPR))->eukmukacucooequu(["\x68\141\x73\137\x69\x6d\141\147\x65" => true])->smmismmuuccmscya()->oeewiaacscgyamai("\141\164\164\x61\143\150\x6d\x65\156\x74")->iyouqgqicyqkiswi(4))->mkksewyosgeumwsa(self::kqcemgcowgomaqwa(self::USER, __("\x55\163\145\x72", PR__CTM__PMPR))->soyqkauogoaqekos()->oeewiaacscgyamai("\x75\x73\x65\x72")->ccmwycqioaicegoc(__("\123\145\x6c\145\143\164\40\x75\163\145\162\40\146\x6f\162\x20\x73\150\x6f\x77\40\145\x78\160\145\162\151\x65\156\x63\x65\40\x64\141\x74\145\x20\x69\156\40\x73\150\x6f\x72\164\143\157\144\145\56", PR__CTM__PMPR))->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::iseogkiymousogom(self::ITEMS, __("\111\x74\145\x6d\x73", PR__CTM__PMPR))->mkksewyosgeumwsa(self::scgissgkcwaumgky(self::ICON)->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(__("\x54\145\170\x74", PR__CTM__PMPR))->iyouqgqicyqkiswi(6)))); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { goto mcagemacuqyskogs; momuweiasiwskekw: $ggauoeuaesiymgee = $wuweqamcqsykigmg["\144\151\x66\x66"]; goto qaewauyekqucciyc; iiiwsgameuomumgw: $wwgucssaecqekuek["\171\x65\141\x72\137\164\145\170\164"] = __("\103\x6f\x6e\163\x75\154\164\141\x74\x69\x6f\x6e\x2c\40\123\165\160\x65\162\x76\x69\x73\151\x6f\x6e\54\x20\111\155\x70\x6c\x65\155\x65\x6e\x74\x61\164\151\157\156", PR__CTM__PMPR); goto mcukocaaoyuugoeu; easuiqiooiwgswmm: if (isset($wuweqamcqsykigmg["\x64\x69\146\x66"])) { goto qkiyyywwuiuackao; } goto saiuoomgskwgyeya; mcukocaaoyuugoeu: return parent::kyaweigsqwomykaa($wwgucssaecqekuek); goto scockmiqikwwkqse; mcagemacuqyskogs: $wuweqamcqsykigmg = $this->mmmmkyaeegwmkeqc(["\x66\162\157\x6d" => 2005, "\164\157" => date("\131")]); goto aamgqoqyyooimqkm; aamgqoqyyooimqkm: $ggauoeuaesiymgee = 0; goto cimascmiesomqgqs; kwocaqggwcksesce: qkiyyywwuiuackao: goto momuweiasiwskekw; agyooskogigyayws: $wwgucssaecqekuek[self::TITLE] = sprintf(__("\x57\x68\157\x20\151\x73\40\45\163\77", PR__CTM__PMPR), get_bloginfo("\x6e\141\x6d\x65")); goto iiiwsgameuomumgw; kuuawiosmkgqsscy: goto gyskcwykkyakeims; goto kwocaqggwcksesce; cimascmiesomqgqs: if (!isset($wuweqamcqsykigmg["\146\162\x6f\x6d"], $wuweqamcqsykigmg["\164\157"])) { goto ossakckwskyqusmm; } goto easuiqiooiwgswmm; aucwccaiqwsmyuaq: $wwgucssaecqekuek["\x79\x65\141\162"] = sprintf(__("\45\x73\x20\131\x65\141\162\163", PR__CTM__PMPR), self::iwowkiqkseykocsk(ManipulateArray::get($wwgucssaecqekuek, self::USER), $ggauoeuaesiymgee)); goto agyooskogigyayws; saiuoomgskwgyeya: $ggauoeuaesiymgee = (int) $wuweqamcqsykigmg["\164\157"] - (int) $wuweqamcqsykigmg["\x66\162\157\x6d"]; goto kuuawiosmkgqsscy; qaewauyekqucciyc: gyskcwykkyakeims: goto bgakaasgwwygosyi; bgakaasgwwygosyi: ossakckwskyqusmm: goto aucwccaiqwsmyuaq; scockmiqikwwkqse: } public function mmmmkyaeegwmkeqc($wuweqamcqsykigmg, $mcmaiqckgiuqayau = true) { goto kssuqmsgmaaeqigw; gsgyayuaekgyoumc: $wuweqamcqsykigmg = ["\164\x6f" => $mcmaiqckgiuqayau ? $this->eciukqcoqmyacwow(strtotime($acuayeeoiwokyomo), "\131") : $acuayeeoiwokyomo, "\x66\162\157\155" => $mcmaiqckgiuqayau ? $this->eciukqcoqmyacwow(strtotime($mcmcymukmqioukkk), "\x59") : $mcmcymukmqioukkk, "\x64\151\x66\146" => (int) date("\x59", strtotime($acuayeeoiwokyomo)) - (int) date("\x59", strtotime($mcmcymukmqioukkk))]; goto omemqagskckoeoog; omgcsmsikaggaooc: okycquokqoamsquy: goto wykuosegisygosiq; aeuosggumiiwoesm: return $wuweqamcqsykigmg; goto wyqmeyoaggwuioak; ugikgkwuwmgymgus: if (!(!isset($wuweqamcqsykigmg["\x66\162\157\155"], $wuweqamcqsykigmg["\x74\x6f"]) || $mcmcymukmqioukkk && $acuayeeoiwokyomo)) { goto egwgyekaiqomyeaa; } goto gsgyayuaekgyoumc; omemqagskckoeoog: egwgyekaiqomyeaa: goto aeuosggumiiwoesm; cqeoguiqiymkyweo: $mcmcymukmqioukkk = ManipulatePost::squyiyimquqicqke(null, $oyscqkqkwmeakcac, false); goto omgcsmsikaggaooc; uwusswwekqcsisus: $mcmcymukmqioukkk = "\62\60\x30\66\x2d\x31\55\61\40\60\x30\72\x30\x30\72\60\x30"; goto mciumqyyossyiuyk; kqyeukywmgismyaq: $oyscqkqkwmeakcac = $oeocqmiumeoqicsa[0]; goto mukwsuuuqcgesmwc; mukwsuuuqcgesmwc: if (!$oyscqkqkwmeakcac instanceof WP_Post) { goto okycquokqoamsquy; } goto cqeoguiqiymkyweo; acaeigkmigikeuyu: if (!($oeocqmiumeoqicsa && isset($oeocqmiumeoqicsa[0]))) { goto cgwokqwakqcmiieo; } goto kqyeukywmgismyaq; mciumqyyossyiuyk: $acuayeeoiwokyomo = date("\131\55\155\x2d\x64\x20\110\x3a\151\72\163"); goto acaeigkmigikeuyu; wykuosegisygosiq: cgwokqwakqcmiieo: goto ugikgkwuwmgymgus; kssuqmsgmaaeqigw: $oeocqmiumeoqicsa = ManipulatePost::ciugwooasaqcywas("\x73\x65\x72\166\x69\143\145", [self::ORDER => "\101\123\103", self::POSTS_PER_PAGE => 1]); goto uwusswwekqcsisus; wyqmeyoaggwuioak: } public static function iwowkiqkseykocsk($mkucggyaiaukqoce = null, $ggauoeuaesiymgee = null) { return User::symcgieuakksimmu()->iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee); } }
