<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae2fe979657             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Shortcode; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Pmpr\User; use Pmpr\Module\AdvancedCMS\Shortcode\Segment; use WP_Post; class Who extends Segment { public function __construct() { $this->target = self::iswqqwqguucescay; parent::__construct(); } public function gogaagekwoisaqgu() { $this->icon = IconInterface::yucamggiyyuqayso; $this->title = __("\x57\x68\157\40\151\163", PR__CST__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae($this->kwosaecaikgmoeyo()->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::mkousmkiawwousws, __("\111\x6d\141\x67\x65", PR__CST__PMPR))->eukmukacucooequu(["\x68\x61\163\x5f\151\155\x61\147\145" => true])->smmismmuuccmscya()->iyouqgqicyqkiswi(6)->oeewiaacscgyamai("\x61\164\x74\141\143\x68\155\x65\156\164"))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::meksegaoamowuwoq, __("\125\x73\145\x72", PR__CST__PMPR))->soyqkauogoaqekos()->iyouqgqicyqkiswi(6)->ccmwycqioaicegoc(__("\x53\x65\x6c\x65\143\164\x20\165\163\x65\162\x20\146\157\x72\x20\x73\x68\x6f\167\40\x65\x78\x70\x65\162\151\x65\x6e\x63\x65\40\144\x61\164\x65\40\151\x6e\40\x73\150\x6f\x72\x74\143\157\144\145\56", PR__CST__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::qwumqqyuasyskkkc, __("\111\x74\x65\155\x73", PR__CST__PMPR))->mkksewyosgeumwsa(self::scgissgkcwaumgky(self::qgqyauaqwqmqseim))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(__("\124\x65\x78\164", PR__CST__PMPR)))->wygoskowywcuyaiq())); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { $wuweqamcqsykigmg = $this->mmmmkyaeegwmkeqc(["\146\162\157\155" => 2005, "\x74\x6f" => date("\x59")]); $ggauoeuaesiymgee = 0; if (!isset($wuweqamcqsykigmg["\x66\x72\157\x6d"], $wuweqamcqsykigmg["\x74\x6f"])) { goto qogqewiwmwiwskgm; } if (isset($wuweqamcqsykigmg["\x64\x69\x66\x66"])) { goto cecuyayqoioasumi; } $ggauoeuaesiymgee = (int) $wuweqamcqsykigmg["\x74\157"] - (int) $wuweqamcqsykigmg["\146\162\157\155"]; goto qiaqsassksqiuyae; cecuyayqoioasumi: $ggauoeuaesiymgee = $wuweqamcqsykigmg["\144\151\x66\x66"]; qiaqsassksqiuyae: qogqewiwmwiwskgm: $wwgucssaecqekuek["\x79\145\x61\x72"] = sprintf(__("\45\163\x20\131\x65\x61\162\x73", PR__CST__PMPR), self::iwowkiqkseykocsk(ManipulateArray::get($wwgucssaecqekuek, self::meksegaoamowuwoq), $ggauoeuaesiymgee)); $wwgucssaecqekuek[self::qescuiwgsyuikume] = sprintf(__("\x57\x68\157\40\x69\x73\x20\45\x73\77", PR__CST__PMPR), get_bloginfo("\156\141\155\x65")); $wwgucssaecqekuek["\171\145\x61\162\x5f\164\145\x78\x74"] = __("\x43\157\x6e\163\165\x6c\x74\141\164\x69\x6f\x6e\x2c\40\123\165\x70\145\x72\166\151\163\151\157\156\54\40\x49\x6d\x70\x6c\145\x6d\145\x6e\x74\141\164\x69\157\x6e", PR__CST__PMPR); return parent::kyaweigsqwomykaa($wwgucssaecqekuek); } public function mmmmkyaeegwmkeqc($wuweqamcqsykigmg, $mcmaiqckgiuqayau = true) { $oeocqmiumeoqicsa = ManipulatePost::ciugwooasaqcywas("\x73\145\162\x76\151\143\x65", [self::awkcoioakcaougmq => "\x41\x53\x43", self::goqgcigmiawyauai => 1]); $mcmcymukmqioukkk = "\x32\x30\x30\66\55\61\55\x31\40\x30\x30\x3a\60\x30\72\x30\x30"; $acuayeeoiwokyomo = date("\x59\x2d\155\x2d\144\x20\110\72\151\x3a\x73"); if (!($oeocqmiumeoqicsa && isset($oeocqmiumeoqicsa[0]))) { goto qwigomakwmyiwkgo; } $oyscqkqkwmeakcac = $oeocqmiumeoqicsa[0]; if (!$oyscqkqkwmeakcac instanceof WP_Post) { goto qgoiooayqmqqsiok; } $mcmcymukmqioukkk = ManipulatePost::squyiyimquqicqke(null, $oyscqkqkwmeakcac, false); qgoiooayqmqqsiok: qwigomakwmyiwkgo: if (!(!isset($wuweqamcqsykigmg["\146\162\x6f\155"], $wuweqamcqsykigmg["\x74\x6f"]) || $mcmcymukmqioukkk && $acuayeeoiwokyomo)) { goto myoicgcuugciueis; } $wuweqamcqsykigmg = ["\164\157" => $mcmaiqckgiuqayau ? $this->eciukqcoqmyacwow(strtotime($acuayeeoiwokyomo), "\x59") : $acuayeeoiwokyomo, "\146\x72\157\155" => $mcmaiqckgiuqayau ? $this->eciukqcoqmyacwow(strtotime($mcmcymukmqioukkk), "\x59") : $mcmcymukmqioukkk, "\x64\151\146\146" => (int) date("\131", strtotime($acuayeeoiwokyomo)) - (int) date("\131", strtotime($mcmcymukmqioukkk))]; myoicgcuugciueis: return $wuweqamcqsykigmg; } public static function iwowkiqkseykocsk($mkucggyaiaukqoce = null, $ggauoeuaesiymgee = null) { return User::symcgieuakksimmu()->iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee); } }
