<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fc63453b2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Theme\Traits\BootstrapTrait; abstract class Common extends CPT { use BootstrapTrait; const _END_DATE = "\x5f\145\156\144\137\x64\141\x74\x65"; const _START_DATE = "\137\163\164\x61\x72\x74\x5f\x64\x61\x74\145"; const _ORGANIZATION = "\x5f\157\162\x67\x61\x6e\151\x7a\141\164\x69\x6f\156"; const METADATA_ICON = "\151\143\x6f\156"; const METADATA_ICON_COLOR = self::METADATA_ICON . "\x5f\143\x6f\x6c\x6f\x72"; const META_DATE_DESCRIPTION = "\160\x6d\x70\x72\x5f\144\x65\x73\143\162\151\160\164\x69\157\156"; public function kuguueoauawomcga() : array { return ["\145\x63\150\x6f" => true, "\160\x6f\x73\164" => '', "\164\x79\x70\x65" => "\x63\x68\x69\154\144\162\145\x6e", "\x74\x69\164\x6c\145" => __("\123\x75\x62\x73\145\x74\40\157\x66\40\45\163\40\45\163", PR__CTM__PMPR), "\x63\x68\x69\154\144\x72\x65\156" => [], "\164\x65\x6d\160\x6c\141\164\145" => '', "\x69\x6d\141\147\145\137\x73\151\x7a\145" => "\x36\x35\x78\66\x35", "\x69\x6d\141\x67\145\137\x63\x6c\141\163\163" => '', "\164\151\164\154\x65\137\143\x6c\141\163\163" => '', "\x6c\151\x6e\x6b\x5f\143\154\x61\163\x73" => "\164\145\170\x74\x2d\x64\x65\x63\x6f\x72\x61\x74\151\157\156\55\156\x6f\156\145", "\142\141\x63\x6b\x67\x72\x6f\165\156\144" => "\x6c\x69\147\x68\164"]; } public function uqewcuuiggccuqia($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->kuguueoauawomcga()); $okcscwesammossuq = $ywmkwiwkosakssii["\x63\x68\x69\154\x64\162\x65\156"]; $post = $ywmkwiwkosakssii["\160\x6f\163\x74"]; if ($okcscwesammossuq) { goto esuiysskoweawsue; } $okcscwesammossuq = ManipulatePost::mmoaikqueyiwcesm($post); esuiysskoweawsue: $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\164\x65\155\160\154\x61\x74\x65"]; if ($qqscaoyqikuyeoaw) { goto gaomwagkcciesyqy; } $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\164\171\160\x65"]; gaomwagkcciesyqy: if (!$okcscwesammossuq) { goto aegysmeecgcgayyw; } $ywmkwiwkosakssii["\164\151\164\154\145"] = sprintf($ywmkwiwkosakssii["\164\x69\x74\154\145"], $this->oyeskqayoscwciem()->giiayuqckuiecosm(), ManipulatePost::qcgakseyaikigqco($post)); $ywmkwiwkosakssii["\x69\x74\145\155\x73"] = $okcscwesammossuq; $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii, $ywmkwiwkosakssii); aegysmeecgcgayyw: } public function ccuukukgiqciqaiu() { $this->iaoasmqysuqgasos(); $this->ecsqcmkgoyomscea(["\x63\154\141\x73\x73" => "\x72\157\x77\40\x64\x2d\x66\154\x65\170\40\x6a\165\163\164\151\146\171\x2d\x63\157\156\164\145\156\164\x2d\143\145\156\164\x65\x72"]); $this->ecsqcmkgoyomscea(["\143\154\141\163\163" => "\143\157\x6c\55\61\62\x20\x63\x6f\154\55\155\144\55\71\40\160\171\x2d\63\x20\x70\171\55\x6d\x64\55\65"]); comments_template(); $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); $this->gkoaykwoyeacuuaa(); } public static function cwiyqyuayeqieick() { return [MetaBox::scgissgkcwaumgky(self::METADATA_ICON), MetaBox::eqmqmmymowieiqwm(self::METADATA_ICON_COLOR)->usuqmwksoeaayaig(__("\x49\x63\157\x6e\40\x43\x6f\x6c\157\x72", PR__CTM__PMPR))]; } public static function qssocqsywyigkyyi($useksmwkuswkwcqg) : array { return [MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::_ORGANIZATION, __("\x43\157\155\160\x61\156\171\40\x6f\162\40\117\x72\147\x61\156\151\172\141\164\x69\157\156", PR__CTM__PMPR)), MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::_START_DATE, __("\123\164\x61\162\x74\x20\x64\x61\164\x65", PR__CTM__PMPR))->qigsyyqgewgskemg("\x64\141\164\145\160\x69\143\x6b\145\x72")->masauymeceuiyceo(), MetaBox::sgsesoiwcgqgckoo($useksmwkuswkwcqg . self::_END_DATE, __("\x45\x6e\144\40\x64\x61\x74\x65", PR__CTM__PMPR))->masauymeceuiyceo()]; } }
