<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977c7f964d4             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Manipulate extends ManipulateWoocommerce { const wgcaoueuaisewigg = "\x73\x75\x62\x73\x63\x72\x69\160\x74\x69\x6f\156"; const mcoqqeswsggueuwe = "\166\141\162\x69\x61\142\x6c\145\x5f\x73\165\142\x73\143\162\x69\160\x74\151\x6f\x6e"; const syeuqcqgqwucymio = "\163\165\142\163\143\162\x69\160\x74\151\157\156\x5f\x76\141\x72\x69\141\164\151\157\x6e"; public static function owuaywucuaiyocum($product) { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto eekcoeikaeaaeyii; } $eyuymeqcioasuyyi = self::asaycagaeksiumkw($product); $ceywwemkggagsska = self::kymakekgqcqyqgmy("\x73\165\x62\x73\x63\162\151\160\x74\151\x6f\156\x5f\160\162\151\143\x65", $product, 0); $aqsowwgoqccksmes = $ceywwemkggagsska ?? self::scgumisucgwskyqk($product); if (!($product->is_on_sale() && '' !== $eyuymeqcioasuyyi && $ceywwemkggagsska > $eyuymeqcioasuyyi)) { goto ocaguquugeamqckq; } $aqsowwgoqccksmes = $eyuymeqcioasuyyi; ocaguquugeamqckq: $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\x6d\155\145\162\143\145\x5f\x73\x75\x62\163\143\x72\x69\x70\164\151\x6f\156\163\137\x70\x72\x6f\144\165\x63\x74\x5f\x70\162\x69\x63\145", $aqsowwgoqccksmes, $product); eekcoeikaeaaeyii: return $aumscagymwyyicag; } public static function aguoqkeigqooqwco($ymmgciamciieaysq = '') { static $kygiqocyyqukaikg = []; if (is_string($ymmgciamciieaysq)) { goto cogywoqcqummsyus; } $ymmgciamciieaysq = ''; cogywoqcqummsyus: $locale = DecoratorUser::iyouigcsiacgwksc(); if (isset($kygiqocyyqukaikg[$locale])) { goto gmwykkouysyaqwqm; } $kygiqocyyqukaikg[$locale] = self::gywoouyaaigoskoc(); gmwykkouysyaqwqm: $mayqaoqwuwwgssiy = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\x6f\155\x6d\x65\x72\x63\x65\137\x73\x75\142\163\143\x72\151\160\164\151\157\x6e\137\154\x65\x6e\x67\x74\150\x73", $kygiqocyyqukaikg[$locale], $ymmgciamciieaysq); if (!$ymmgciamciieaysq) { goto ugqwuugsweqgmywk; } $mayqaoqwuwwgssiy = $mayqaoqwuwwgssiy[$ymmgciamciieaysq]; ugqwuugsweqgmywk: return $mayqaoqwuwwgssiy; } public static function qamkswcgsoeggmau($product) : int { return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\157\155\x6d\145\162\143\145\137\163\165\x62\x73\143\x72\151\160\164\x69\x6f\156\163\x5f\160\x72\157\x64\165\x63\x74\137\x6c\x65\x6e\147\x74\x68", self::kymakekgqcqyqgmy($product, "\163\x75\142\x73\x63\162\151\x70\x74\x69\157\156\137\x6c\145\x6e\147\164\150", 0, "\x75\x73\145\x5f\x64\x65\146\141\x75\x6c\x74\137\166\x61\154\x75\145"), self::aqasygcsqysmmyke($product)); } public static function wciqcqwsswuayouy($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\157\x6d\x6d\x65\162\143\x65\137\x73\x75\x62\163\x63\x72\x69\x70\x74\x69\x6f\x6e\x73\137\x70\162\157\x64\165\143\x74\x5f\160\x65\162\151\157\144\137\151\x6e\x74\x65\x72\166\x61\x6c", self::kymakekgqcqyqgmy($product, "\163\x75\x62\163\x63\x72\x69\160\x74\x69\157\156\137\x70\x65\162\x69\157\x64\x5f\151\156\164\x65\162\x76\x61\154", 1, "\x75\x73\145\137\144\145\146\141\x75\x6c\x74\137\166\141\x6c\x75\x65"), self::aqasygcsqysmmyke($product)); } public static function cskqgsqgkquceimo($product) : string { return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\143\157\x6d\x6d\145\x72\143\x65\137\163\165\x62\163\x63\x72\151\x70\164\151\157\x6e\x73\x5f\160\162\157\x64\165\x63\x74\137\160\x65\162\151\x6f\144", self::kymakekgqcqyqgmy($product, "\163\x75\142\x73\x63\x72\151\160\164\151\x6f\x6e\137\x70\x65\162\151\x6f\144", ''), self::aqasygcsqysmmyke($product)); } public static function gywoouyaaigoskoc() : array { $scumyeasgcsssmko = ["\144\x61\171", "\167\145\x65\153", "\155\x6f\156\164\150", "\x79\145\x61\x72"]; foreach ($scumyeasgcsssmko as $ymmgciamciieaysq) { $isuywoqqseygywkq = []; $mckmacgukqcegscg = [_x("\x4e\145\x76\145\x72\40\145\170\160\x69\x72\x65", "\123\x75\x62\163\143\x72\x69\160\164\151\x6f\x6e\x20\x6c\x65\x6e\147\x74\x68", PR__CST__PMPR)]; switch ($ymmgciamciieaysq) { case "\x64\141\x79": $mckmacgukqcegscg[] = _x("\61\x20\x64\141\x79", "\x53\x75\142\x73\x63\162\151\x70\164\x69\x6f\156\40\x6c\145\x6e\147\x74\150\163\x2e\40\145\x2e\147\x2e\x20\42\x46\x6f\162\40\x31\40\x64\141\171\56\56\x2e\x22", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 90); goto mkwkkmkgiqiamacc; case "\x77\x65\145\153": $mckmacgukqcegscg[] = _x("\x31\x20\x77\x65\x65\153", "\123\165\142\163\x63\162\151\x70\x74\151\x6f\156\x20\x6c\x65\x6e\147\x74\x68\163\x2e\x20\x65\56\x67\x2e\x20\42\106\157\x72\40\x31\40\x77\x65\145\153\56\56\x2e\x22", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 52); goto mkwkkmkgiqiamacc; case "\x6d\157\156\164\x68": $mckmacgukqcegscg[] = _x("\x31\40\155\x6f\x6e\x74\150", "\x53\x75\142\x73\x63\x72\151\x70\x74\x69\x6f\x6e\x20\154\145\x6e\147\164\x68\x73\x2e\40\x65\x2e\x67\56\x20\42\106\157\162\40\61\x20\x6d\x6f\156\164\150\x2e\56\56\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 24); goto mkwkkmkgiqiamacc; case "\x79\145\x61\162": $mckmacgukqcegscg[] = _x("\x31\40\x79\x65\141\x72", "\123\x75\x62\x73\x63\162\x69\160\164\151\157\156\40\154\145\156\x67\x74\150\x73\x2e\x20\145\x2e\x67\56\40\42\106\157\162\40\61\x20\171\145\141\x72\56\56\x2e\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 5); goto mkwkkmkgiqiamacc; } uaqackioaiqwcocy: mkwkkmkgiqiamacc: foreach ($isuywoqqseygywkq as $eusockqasqqmoess) { $isuywoqqseygywkq[$eusockqasqqmoess] = self::qwkgiacgsiuokomo($eusockqasqqmoess, $ymmgciamciieaysq); isgwkwacoyimiauk: } cscusseysqygsoiy: $mckmacgukqcegscg += $isuywoqqseygywkq; $mayqaoqwuwwgssiy[$ymmgciamciieaysq] = $mckmacgukqcegscg; sockeswygwcskeuq: } uaukmuiwskcemcsw: return $mayqaoqwuwwgssiy; } public static function geeyaumoyycymeks($product = null) : bool { $geeyaumoyycymeks = $eoioyuyammuoecgs = false; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto uegouoiuyoqkcscg; } $eoioyuyammuoecgs = self::omwkqcuwceweymcc($product); if (!$product->is_type([self::wgcaoueuaisewigg, self::syeuqcqgqwucymio, self::mcoqqeswsggueuwe])) { goto mggeqkcksyaymcsa; } $geeyaumoyycymeks = true; mggeqkcksyaymcsa: uegouoiuyoqkcscg: return DecoratorHook::sscegwueamckwmcy("\x77\157\157\x63\x6f\155\x6d\x65\162\x63\145\x5f\151\x73\137\163\165\x62\163\143\x72\151\160\x74\x69\157\x6e", $geeyaumoyycymeks, $eoioyuyammuoecgs, $product); } public static function qwkgiacgsiuokomo($eusockqasqqmoess = 1, $ymmgciamciieaysq = '') { $scumyeasgcsssmko = DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\x6f\x6d\x6d\145\162\x63\x65\137\x73\x75\x62\163\x63\162\151\x70\x74\151\x6f\156\137\160\145\162\x69\x6f\x64\163", [ "\x64\141\171" => sprintf(_nx("\144\x61\x79", "\x25\163\40\144\x61\171\x73", $eusockqasqqmoess, "\x53\165\x62\x73\x63\162\x69\x70\164\151\157\x6e\40\142\x69\x6c\x6c\151\156\x67\x20\x70\x65\162\x69\x6f\x64\56", PR__CST__PMPR), $eusockqasqqmoess), "\x77\145\x65\153" => sprintf(_nx("\x77\145\145\x6b", "\45\x73\x20\x77\x65\145\x6b\x73", $eusockqasqqmoess, "\x53\165\x62\x73\143\162\151\x70\164\x69\157\x6e\40\142\x69\x6c\154\151\156\147\x20\160\145\x72\151\157\x64\56", PR__CST__PMPR), $eusockqasqqmoess), "\x6d\x6f\x6e\x74\x68" => sprintf(_nx("\x6d\157\156\x74\150", "\45\x73\x20\x6d\x6f\156\x74\150\163", $eusockqasqqmoess, "\x53\x75\x62\163\143\162\151\160\164\151\157\x6e\x20\142\x69\154\154\x69\x6e\147\x20\160\145\162\x69\x6f\144\x2e", PR__CST__PMPR), $eusockqasqqmoess), "\171\x65\141\162" => sprintf(_nx("\171\145\141\x72", "\45\163\x20\171\145\x61\x72\x73", $eusockqasqqmoess, "\x53\x75\142\x73\143\x72\x69\160\x74\x69\157\x6e\40\142\151\x6c\x6c\x69\x6e\x67\x20\x70\x65\x72\151\157\x64\x2e", PR__CST__PMPR), $eusockqasqqmoess), ], $eusockqasqqmoess); return !empty($ymmgciamciieaysq) ? $scumyeasgcsssmko[$ymmgciamciieaysq] : $scumyeasgcsssmko; } public static function giouwewgcickgaeu($product, $ooiewiwkegguusum = []) : ?string { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!self::geeyaumoyycymeks($product)) { goto ukkcmocamwgiqayu; } $ooiewiwkegguusum = ManipulateFormat::omaawkkwwyesqwcc($ooiewiwkegguusum, ["\164\x61\170\x5f\x63\x61\x6c\x63\165\154\141\x74\x69\157\156" => DecoratorOption::get("\167\157\x6f\143\157\155\155\x65\x72\x63\x65\137\x74\141\x78\x5f\x64\x69\163\160\x6c\141\171\x5f\163\x68\157\160"), "\163\x75\x62\x73\143\x72\x69\x70\x74\151\x6f\x6e\137\x70\162\x69\143\x65" => true]); $ooiewiwkegguusum = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\x6f\155\x6d\x65\x72\x63\145\137\x73\x75\x62\163\x63\162\x69\x70\x74\x69\x6f\156\x73\137\160\162\157\x64\165\143\164\137\160\x72\151\143\x65\137\x73\164\x72\x69\156\x67\x5f\151\156\143\154\165\163\x69\157\x6e\x73", $ooiewiwkegguusum, $product); $owwksgagiossaooa = self::owuaywucuaiyocum($product); if ($ooiewiwkegguusum["\164\141\170\x5f\143\x61\x6c\x63\165\154\x61\x74\151\x6f\x6e"]) { goto ewscugeuicukkycc; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\162\x69\x63\145"] ?? DecoratorWoocommerce::aumscagymwyyicag($owwksgagiossaooa); goto kqswcsysqawkcgye; ewscugeuicukkycc: if (in_array($ooiewiwkegguusum["\164\x61\170\137\x63\141\154\x63\165\154\141\x74\x69\x6f\156"], ["\145\170\x63\154\x75\x64\x65\137\164\x61\x78", "\145\170\143\154"], true)) { goto cgyakcqgugqgkqiw; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\162\151\143\x65"] ?? DecoratorWoocommerce::oeiymaksaoqaeqkk($product); goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $aumscagymwyyicag = $ooiewiwkegguusum["\x70\x72\151\x63\x65"] ?? DecoratorWoocommerce::uewkmqiiguwwscwy($product); eeyyskqsmquyquqw: kqswcsysqawkcgye: $aumscagymwyyicag .= "\x20\74\x73\160\141\x6e\x20\x63\154\141\x73\x73\x3d\42\x73\x75\x62\x73\143\x72\151\x70\164\x69\x6f\x6e\x2d\144\x65\x74\x61\x69\154\x73\x22\x3e"; if ($ooiewiwkegguusum["\x73\x75\x62\x73\x63\162\x69\160\x74\151\157\x6e\137\x70\x72\151\x63\145"]) { goto wusciwkkckmqigms; } $meyskcssumkecyqm = "\74\x73\160\x61\x6e\40\x63\x6c\141\x73\x73\75\42\163\x75\x62\x73\143\162\x69\160\164\x69\157\x6e\55\144\x65\x74\x61\x69\154\x73\42\x3e"; goto iiiccouaaqsyikae; wusciwkkckmqigms: $meyskcssumkecyqm = $aumscagymwyyicag; iiiccouaaqsyikae: $meyskcssumkecyqm .= "\74\x2f\x73\x70\x61\156\x3e"; $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\157\x6d\x6d\x65\162\x63\x65\x5f\x73\x75\x62\163\x63\x72\x69\x70\x74\x69\157\x6e\163\137\x70\x72\157\144\x75\x63\164\137\160\x72\151\x63\x65\137\x73\x74\162\x69\x6e\x67", $meyskcssumkecyqm, $product, $ooiewiwkegguusum); ukkcmocamwgiqayu: return $aumscagymwyyicag; } public static function kymakekgqcqyqgmy(string $uusmaiomayssaecw, $product, $ggauoeuaesiymgee = null, $empty_handling = "\x61\154\154\x6f\x77\x5f\145\155\x70\x74\171") { $product = self::aqasygcsqysmmyke($product); $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!self::geeyaumoyycymeks($product)) { goto gommacygsykyussk; } if (method_exists($product, "\155\x65\164\141\137\145\x78\151\x73\x74\163")) { goto gygwewcqsmwqismo; } if (!isset($product->{$uusmaiomayssaecw})) { goto amgsueumgaguceaa; } $eqgoocgaqwqcimie = $product->{$uusmaiomayssaecw}; amgsueumgaguceaa: goto uougwgeyiokewkkm; gygwewcqsmwqismo: $mqokiegceimuwcum = ManipulateString::yaaoeasygeggswcq($uusmaiomayssaecw); if (!$product->meta_exists($mqokiegceimuwcum)) { goto mwysseaekcsiesmm; } $eqgoocgaqwqcimie = $product->get_meta($mqokiegceimuwcum, true); mwysseaekcsiesmm: uougwgeyiokewkkm: gommacygsykyussk: if (!("\x75\163\145\137\x64\x65\x66\x61\165\154\x74\x5f\166\x61\154\165\145" === $empty_handling && empty($eqgoocgaqwqcimie))) { goto ukqocwewouckikso; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; ukqocwewouckikso: return $eqgoocgaqwqcimie; } public static function yaawkocgyswmsiqg($product) : bool { $product = self::aqasygcsqysmmyke($product); $ommmugiuyqwqggii = true; switch ($product->get_type()) { case self::wgcaoueuaisewigg: case self::mcoqqeswsggueuwe: if (!(false === self::is_purchasable_product($product))) { goto uimeeckqksqeekqq; } $ommmugiuyqwqggii = false; uimeeckqksqeekqq: goto ucqmumuygcywwqma; case self::syeuqcqgqwucymio: $kwmywaaoacqyqymc = self::aqasygcsqysmmyke($product->get_parent_id()); if (!("\156\x6f" != wcs_get_product_limitation($kwmywaaoacqyqymc) && !empty(WC()->cart->cart_contents) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto yiowgigkkwsoqcci; } if ("\156\x6f" === get_option(WC_Subscriptions_Admin::$option_prefix . "\137\x6d\165\154\164\x69\x70\x6c\145\137\x70\165\x72\x63\150\141\163\x65", "\x6e\x6f")) { goto qukocuwgakemmyga; } foreach (WC()->cart->cart_contents as $cart_item) { if (!($product->get_parent_id() == wcs_get_objects_property($cart_item["\144\141\x74\x61"], "\x70\141\162\145\x6e\164\137\x69\144") && $product->get_id() != $cart_item["\144\141\164\x61"]->get_id())) { goto uqokiksoqcwwqgio; } $ommmugiuyqwqggii = false; goto iuuuususuuuaieem; uqokiksoqcwwqgio: kocqqoyymosmuksu: } iuuuususuuuaieem: goto sioekkmekwygemyc; qukocuwgakemmyga: $ommmugiuyqwqggii = true; sioekkmekwygemyc: yiowgigkkwsoqcci: goto ucqmumuygcywwqma; } uykousayyomcaeaa: ucqmumuygcywwqma: return $ommmugiuyqwqggii; } public static function is_purchasable_product($is_purchasable, $product) { if (isset(self::$is_purchasable_cache[$product->get_id()]["\x73\x74\141\x6e\144\141\x72\x64"])) { goto mscyggqcesgqqksu; } self::$is_purchasable_cache[$product->get_id()]["\x73\x74\141\156\x64\x61\x72\x64"] = $is_purchasable; if (!(WC_Subscriptions_Product::is_subscription($product->get_id()) && "\156\157" != wcs_get_product_limitation($product) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto gamqcwuwkikwqoay; } if (!(wcs_is_product_limited_for_user($product) && !self::order_awaiting_payment_for_product($product->get_id()))) { goto ieqesiiageaauiuw; } self::$is_purchasable_cache[$product->get_id()]["\163\164\141\x6e\144\x61\x72\x64"] = false; ieqesiiageaauiuw: gamqcwuwkikwqoay: mscyggqcesgqqksu: return self::$is_purchasable_cache[$product->get_id()]["\163\164\141\156\x64\x61\162\144"]; } }
