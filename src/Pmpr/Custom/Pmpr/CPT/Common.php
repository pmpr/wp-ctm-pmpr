<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624001378cdd5             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Traits\BootstrapTrait; abstract class Common extends CPT { use BootstrapTrait; const sqqyeeuekayswqko = "\x5f\145\x6e\144\x5f\x64\x61\164\145"; const wauscokyyiokqmyc = "\137\163\x74\x61\x72\x74\x5f\x64\141\164\145"; const ouoikemiewkimcyq = "\137\x6f\x72\x67\141\x6e\151\172\141\x74\151\157\x6e"; const oomeqcwgcuseimeg = "\x69\143\x6f\156"; const gsciggmwkagcscik = self::oomeqcwgcuseimeg . "\137\143\157\154\x6f\162"; const uuommcgmywwiokgm = "\160\155\x70\162\x5f\144\145\163\143\162\x69\x70\164\151\x6f\156"; public function kuguueoauawomcga() : array { return ["\x65\143\x68\157" => true, "\x70\x6f\163\164" => '', "\164\x79\160\145" => "\143\150\151\x6c\x64\162\x65\x6e", "\x74\151\164\154\145" => __("\123\x75\142\x73\x65\x74\40\x6f\146\x20\45\163\x20\x25\x73", PR__CST__PMPR), "\x63\150\x69\x6c\x64\162\145\156" => [], "\164\x65\x6d\160\x6c\141\164\145" => '', "\x69\155\141\147\145\x5f\163\x69\x7a\x65" => "\66\x35\x78\66\65", "\x69\x6d\141\147\x65\137\143\x6c\141\x73\163" => '', "\164\151\164\x6c\145\x5f\143\x6c\141\163\x73" => '', "\154\x69\156\x6b\137\143\154\x61\163\163" => "\164\145\170\164\55\x64\x65\x63\157\162\x61\x74\x69\157\x6e\55\x6e\x6f\x6e\x65", "\x62\141\143\153\x67\162\x6f\165\x6e\144" => "\154\x69\147\x68\x74"]; } public function uqewcuuiggccuqia($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->kuguueoauawomcga()); $okcscwesammossuq = $ywmkwiwkosakssii["\143\150\x69\x6c\144\x72\145\x6e"]; $post = $ywmkwiwkosakssii["\x70\x6f\x73\164"]; if ($okcscwesammossuq) { goto iuuuususuuuaieem; } $okcscwesammossuq = ManipulatePost::mmoaikqueyiwcesm($post); iuuuususuuuaieem: $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\164\145\155\x70\x6c\141\x74\x65"]; if ($qqscaoyqikuyeoaw) { goto kocqqoyymosmuksu; } $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\x74\171\160\145"]; kocqqoyymosmuksu: if (!$okcscwesammossuq) { goto uqokiksoqcwwqgio; } $ywmkwiwkosakssii["\x74\x69\164\x6c\145"] = sprintf($ywmkwiwkosakssii["\x74\x69\164\154\145"], $this->oyeskqayoscwciem()->giiayuqckuiecosm(), ManipulatePost::qcgakseyaikigqco($post)); $ywmkwiwkosakssii["\151\x74\145\155\x73"] = $okcscwesammossuq; $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii, $ywmkwiwkosakssii); uqokiksoqcwwqgio: } public function ccuukukgiqciqaiu() { $this->iaoasmqysuqgasos(); $this->ecsqcmkgoyomscea(["\143\154\x61\163\x73" => "\x72\157\167\40\144\x2d\146\154\x65\x78\40\152\165\163\x74\x69\146\171\x2d\143\x6f\156\x74\x65\x6e\164\x2d\143\x65\x6e\164\145\162"]); $this->ecsqcmkgoyomscea(["\143\154\141\x73\163" => "\x63\157\154\x2d\x31\62\40\143\x6f\x6c\55\155\x64\55\71\40\x70\171\55\x33\x20\x70\171\55\x6d\x64\55\x35"]); comments_template(); $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); $this->gkoaykwoyeacuuaa(); } public static function cwiyqyuayeqieick() : array { return [MetaBox::scgissgkcwaumgky(self::oomeqcwgcuseimeg), MetaBox::eqmqmmymowieiqwm(self::gsciggmwkagcscik)->usuqmwksoeaayaig(__("\111\x63\157\156\40\x43\x6f\x6c\157\x72", PR__CST__PMPR))]; } public static function qssocqsywyigkyyi($useksmwkuswkwcqg) : array { return [MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::ouoikemiewkimcyq, __("\x43\x6f\x6d\160\141\x6e\171\40\157\162\40\117\x72\147\x61\x6e\151\x7a\141\x74\x69\x6f\156", PR__CST__PMPR)), MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::wauscokyyiokqmyc, __("\x53\x74\141\162\x74\40\144\x61\164\x65", PR__CST__PMPR))->qigsyyqgewgskemg("\144\x61\164\145\x70\x69\143\153\x65\x72")->masauymeceuiyceo(), MetaBox::sgsesoiwcgqgckoo($useksmwkuswkwcqg . self::sqqyeeuekayswqko, __("\105\x6e\x64\x20\x64\141\164\145", PR__CST__PMPR))->masauymeceuiyceo()]; } }
