<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624bf91c0b214             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Traits\BootstrapTrait; abstract class Common extends CPT { use BootstrapTrait; const sqqyeeuekayswqko = "\x5f\145\156\144\137\144\141\x74\145"; const wauscokyyiokqmyc = "\x5f\163\x74\141\x72\164\x5f\144\x61\x74\145"; const ouoikemiewkimcyq = "\137\157\x72\x67\x61\x6e\x69\x7a\x61\x74\151\157\x6e"; const oomeqcwgcuseimeg = "\151\143\x6f\x6e"; const gsciggmwkagcscik = self::oomeqcwgcuseimeg . "\137\143\x6f\154\157\162"; const uuommcgmywwiokgm = "\160\155\160\x72\x5f\x64\x65\163\x63\x72\x69\x70\164\x69\157\156"; public function kuguueoauawomcga() : array { return ["\x65\143\x68\157" => true, "\160\157\163\164" => '', "\x74\x79\x70\x65" => "\x63\150\151\154\x64\162\x65\156", "\164\x69\x74\x6c\145" => __("\123\165\142\x73\x65\164\x20\x6f\x66\x20\45\163\40\x25\x73", PR__CST__PMPR), "\143\150\151\154\x64\162\x65\156" => [], "\164\145\155\x70\154\141\164\145" => '', "\x69\x6d\x61\x67\x65\x5f\x73\151\172\145" => "\66\65\170\66\65", "\x69\x6d\x61\x67\x65\137\x63\154\141\x73\163" => '', "\x74\151\164\x6c\145\137\143\x6c\x61\163\x73" => '', "\154\151\x6e\153\137\x63\154\141\163\x73" => "\164\145\x78\164\55\x64\145\x63\x6f\x72\x61\164\151\157\x6e\55\x6e\157\x6e\x65", "\142\x61\143\x6b\x67\x72\x6f\x75\x6e\144" => "\154\151\147\x68\164"]; } public function uqewcuuiggccuqia($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->kuguueoauawomcga()); $okcscwesammossuq = $ywmkwiwkosakssii["\x63\x68\151\x6c\144\x72\145\156"]; $post = $ywmkwiwkosakssii["\160\157\163\164"]; if ($okcscwesammossuq) { goto miyqyeiwquwsacsm; } $okcscwesammossuq = ManipulatePost::mmoaikqueyiwcesm($post); miyqyeiwquwsacsm: $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\x74\145\x6d\160\x6c\141\x74\145"]; if ($qqscaoyqikuyeoaw) { goto eegqyykygiccaoeo; } $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\164\x79\x70\145"]; eegqyykygiccaoeo: if (!$okcscwesammossuq) { goto ywqgcegomwaiuquc; } $ywmkwiwkosakssii["\164\151\164\154\x65"] = sprintf($ywmkwiwkosakssii["\164\151\x74\x6c\x65"], $this->oyeskqayoscwciem()->giiayuqckuiecosm(), ManipulatePost::qcgakseyaikigqco($post)); $ywmkwiwkosakssii["\x69\164\x65\155\163"] = $okcscwesammossuq; $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii, $ywmkwiwkosakssii); ywqgcegomwaiuquc: } public function ccuukukgiqciqaiu() { $this->iaoasmqysuqgasos(); $this->ecsqcmkgoyomscea(["\143\154\141\163\163" => "\x72\157\x77\x20\144\55\146\154\145\x78\x20\x6a\x75\163\164\151\x66\x79\55\x63\157\156\x74\145\x6e\x74\x2d\x63\x65\156\164\145\162"]); $this->ecsqcmkgoyomscea(["\x63\154\141\x73\x73" => "\143\157\x6c\55\61\x32\x20\x63\157\x6c\x2d\x6d\144\55\71\40\160\171\x2d\x33\x20\x70\171\x2d\x6d\144\55\x35"]); comments_template(); $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); $this->gkoaykwoyeacuuaa(); } public static function cwiyqyuayeqieick() : array { return [MetaBox::scgissgkcwaumgky(self::oomeqcwgcuseimeg), MetaBox::eqmqmmymowieiqwm(self::gsciggmwkagcscik)->usuqmwksoeaayaig(__("\111\143\x6f\156\x20\x43\157\154\157\x72", PR__CST__PMPR))]; } public static function qssocqsywyigkyyi($useksmwkuswkwcqg) : array { return [MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::ouoikemiewkimcyq, __("\103\x6f\x6d\x70\x61\156\x79\40\x6f\x72\x20\117\162\147\141\156\x69\x7a\x61\x74\151\157\156", PR__CST__PMPR)), MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::wauscokyyiokqmyc, __("\x53\x74\x61\x72\164\x20\144\141\x74\145", PR__CST__PMPR))->qigsyyqgewgskemg("\144\141\x74\145\160\x69\143\153\145\162")->masauymeceuiyceo(), MetaBox::sgsesoiwcgqgckoo($useksmwkuswkwcqg . self::sqqyeeuekayswqko, __("\x45\x6e\144\40\144\141\164\x65", PR__CST__PMPR))->masauymeceuiyceo()]; } }
