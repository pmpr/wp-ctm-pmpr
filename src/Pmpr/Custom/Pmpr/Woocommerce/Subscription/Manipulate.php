<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622ddf63549e6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Manipulate extends ManipulateWoocommerce { const wgcaoueuaisewigg = "\x73\165\x62\163\143\162\151\160\x74\x69\x6f\156"; const mcoqqeswsggueuwe = "\166\141\162\151\x61\x62\x6c\145\137\163\x75\x62\x73\143\162\x69\160\164\x69\x6f\156"; const syeuqcqgqwucymio = "\163\165\142\x73\x63\162\151\160\164\x69\157\x6e\137\x76\x61\x72\x69\x61\x74\x69\x6f\156"; public static function owuaywucuaiyocum($product) { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto yowsmsiyimmimemc; } $eyuymeqcioasuyyi = self::asaycagaeksiumkw($product); $ceywwemkggagsska = self::kymakekgqcqyqgmy("\163\x75\x62\163\143\162\151\x70\x74\x69\157\156\137\x70\x72\x69\143\145", $product, 0); $aqsowwgoqccksmes = $ceywwemkggagsska ?? self::scgumisucgwskyqk($product); if (!($product->is_on_sale() && '' !== $eyuymeqcioasuyyi && $ceywwemkggagsska > $eyuymeqcioasuyyi)) { goto kwagwqyusyiyoaqs; } $aqsowwgoqccksmes = $eyuymeqcioasuyyi; kwagwqyusyiyoaqs: $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\155\x6d\145\162\143\x65\137\163\165\x62\x73\143\162\x69\x70\x74\x69\157\x6e\163\x5f\x70\162\x6f\144\165\143\x74\x5f\x70\x72\151\x63\145", $aqsowwgoqccksmes, $product); yowsmsiyimmimemc: return $aumscagymwyyicag; } public static function aguoqkeigqooqwco($ymmgciamciieaysq = '') { static $kygiqocyyqukaikg = []; if (is_string($ymmgciamciieaysq)) { goto kiqogmwcgcamwiig; } $ymmgciamciieaysq = ''; kiqogmwcgcamwiig: $locale = DecoratorUser::iyouigcsiacgwksc(); if (isset($kygiqocyyqukaikg[$locale])) { goto iomcaiwewsawiamu; } $kygiqocyyqukaikg[$locale] = self::gywoouyaaigoskoc(); iomcaiwewsawiamu: $mayqaoqwuwwgssiy = DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\x6d\155\x65\162\143\145\137\163\165\142\163\143\x72\151\160\x74\151\157\156\137\154\145\156\x67\164\150\x73", $kygiqocyyqukaikg[$locale], $ymmgciamciieaysq); if (!$ymmgciamciieaysq) { goto sqiciiuwmykocycc; } $mayqaoqwuwwgssiy = $mayqaoqwuwwgssiy[$ymmgciamciieaysq]; sqiciiuwmykocycc: return $mayqaoqwuwwgssiy; } public static function qamkswcgsoeggmau($product) : int { return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\157\155\x6d\x65\x72\x63\145\137\163\165\x62\163\x63\162\x69\160\x74\x69\157\x6e\163\x5f\160\162\x6f\x64\165\143\164\137\154\145\156\x67\164\150", self::kymakekgqcqyqgmy($product, "\163\x75\x62\163\143\162\x69\160\x74\151\x6f\x6e\x5f\154\x65\156\147\164\150", 0, "\165\163\x65\137\144\145\x66\x61\x75\154\x74\137\166\141\x6c\165\x65"), self::aqasygcsqysmmyke($product)); } public static function wciqcqwsswuayouy($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\155\145\x72\x63\145\x5f\163\165\x62\x73\x63\162\151\x70\164\151\157\x6e\x73\x5f\160\162\x6f\144\x75\x63\x74\x5f\160\x65\162\151\x6f\x64\137\x69\x6e\x74\x65\162\x76\141\154", self::kymakekgqcqyqgmy($product, "\163\x75\142\163\x63\x72\151\160\x74\x69\x6f\x6e\x5f\x70\x65\162\x69\157\x64\137\151\x6e\x74\x65\162\x76\x61\x6c", 1, "\x75\163\x65\137\x64\145\x66\x61\165\154\x74\x5f\x76\141\154\165\145"), self::aqasygcsqysmmyke($product)); } public static function cskqgsqgkquceimo($product) : string { return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\157\x6d\x6d\145\162\143\x65\x5f\163\x75\142\163\x63\162\x69\160\x74\x69\x6f\156\163\x5f\x70\x72\x6f\144\x75\143\x74\137\x70\145\x72\x69\x6f\x64", self::kymakekgqcqyqgmy($product, "\163\x75\x62\163\x63\162\151\x70\x74\x69\x6f\156\137\x70\145\x72\x69\157\x64", ''), self::aqasygcsqysmmyke($product)); } public static function gywoouyaaigoskoc() : array { $scumyeasgcsssmko = ["\x64\x61\171", "\167\x65\x65\153", "\x6d\x6f\x6e\x74\150", "\x79\x65\x61\162"]; foreach ($scumyeasgcsssmko as $ymmgciamciieaysq) { $isuywoqqseygywkq = []; $mckmacgukqcegscg = [_x("\116\x65\166\145\x72\40\145\170\x70\x69\162\145", "\123\x75\142\163\143\x72\x69\160\164\x69\x6f\x6e\40\x6c\145\x6e\147\164\x68", PR__CTM__PMPR)]; switch ($ymmgciamciieaysq) { case "\x64\141\171": $mckmacgukqcegscg[] = _x("\x31\40\x64\141\x79", "\123\x75\x62\163\x63\162\151\x70\x74\151\x6f\x6e\40\x6c\x65\156\x67\164\x68\x73\x2e\40\x65\56\147\56\40\42\106\157\x72\x20\61\x20\144\141\171\56\56\56\42", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 90); goto cggowoquuiwqkyew; case "\x77\145\x65\153": $mckmacgukqcegscg[] = _x("\x31\x20\x77\x65\145\x6b", "\123\x75\142\x73\x63\162\x69\x70\164\151\157\156\x20\154\x65\x6e\147\x74\x68\x73\x2e\x20\x65\56\147\x2e\x20\x22\106\157\162\x20\x31\40\x77\145\x65\x6b\56\x2e\56\x22", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 52); goto cggowoquuiwqkyew; case "\x6d\x6f\156\164\150": $mckmacgukqcegscg[] = _x("\61\40\155\157\x6e\x74\x68", "\x53\165\142\163\143\x72\x69\160\164\x69\x6f\x6e\x20\x6c\145\156\x67\x74\150\x73\x2e\x20\x65\x2e\147\x2e\x20\x22\106\x6f\162\x20\61\40\x6d\x6f\156\164\150\x2e\56\56\x22", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 24); goto cggowoquuiwqkyew; case "\171\145\x61\162": $mckmacgukqcegscg[] = _x("\x31\40\x79\145\141\x72", "\x53\165\x62\163\x63\x72\x69\160\164\151\x6f\x6e\40\154\x65\x6e\x67\164\x68\163\x2e\x20\x65\56\147\x2e\x20\x22\x46\x6f\x72\x20\61\40\171\145\x61\x72\56\56\56\42", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 5); goto cggowoquuiwqkyew; } ocokwuuquaokmasc: cggowoquuiwqkyew: foreach ($isuywoqqseygywkq as $eusockqasqqmoess) { $isuywoqqseygywkq[$eusockqasqqmoess] = self::qwkgiacgsiuokomo($eusockqasqqmoess, $ymmgciamciieaysq); goacqqsgaaigyuaw: } yiwiqaqmwiogawym: $mckmacgukqcegscg += $isuywoqqseygywkq; $mayqaoqwuwwgssiy[$ymmgciamciieaysq] = $mckmacgukqcegscg; uukumskkeggaowck: } eequksumcoogyoem: return $mayqaoqwuwwgssiy; } public static function geeyaumoyycymeks($product = null) : bool { $geeyaumoyycymeks = $eoioyuyammuoecgs = false; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto wcesymwqykqoyuqk; } $eoioyuyammuoecgs = self::omwkqcuwceweymcc($product); if (!$product->is_type([self::wgcaoueuaisewigg, self::syeuqcqgqwucymio, self::mcoqqeswsggueuwe])) { goto meawswgwagoqgkye; } $geeyaumoyycymeks = true; meawswgwagoqgkye: wcesymwqykqoyuqk: return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\x6f\x6d\x6d\145\162\x63\145\137\151\163\x5f\163\165\142\x73\143\x72\x69\160\x74\x69\157\156", $geeyaumoyycymeks, $eoioyuyammuoecgs, $product); } public static function qwkgiacgsiuokomo($eusockqasqqmoess = 1, $ymmgciamciieaysq = '') { $scumyeasgcsssmko = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\x6f\155\155\145\x72\143\x65\137\x73\165\x62\x73\x63\x72\151\x70\164\x69\x6f\156\137\160\x65\x72\151\157\x64\163", [ "\144\x61\171" => sprintf(_nx("\x64\141\x79", "\45\163\40\x64\141\171\x73", $eusockqasqqmoess, "\123\165\x62\x73\x63\x72\x69\x70\164\151\x6f\156\40\x62\151\154\x6c\151\x6e\x67\x20\160\145\162\x69\x6f\x64\x2e", PR__CTM__PMPR), $eusockqasqqmoess), "\x77\145\x65\153" => sprintf(_nx("\x77\145\145\153", "\45\163\40\167\145\145\153\x73", $eusockqasqqmoess, "\123\165\x62\x73\x63\x72\151\x70\x74\x69\x6f\156\x20\142\151\154\x6c\151\156\x67\40\160\x65\x72\x69\157\x64\56", PR__CTM__PMPR), $eusockqasqqmoess), "\x6d\157\156\x74\150" => sprintf(_nx("\x6d\x6f\156\x74\x68", "\45\163\40\x6d\157\156\x74\150\x73", $eusockqasqqmoess, "\123\165\142\163\143\x72\x69\x70\x74\x69\157\x6e\40\142\151\154\x6c\151\x6e\147\40\x70\x65\x72\x69\x6f\144\x2e", PR__CTM__PMPR), $eusockqasqqmoess), "\171\x65\x61\162" => sprintf(_nx("\171\x65\141\x72", "\x25\x73\40\171\145\141\162\x73", $eusockqasqqmoess, "\123\165\x62\163\x63\x72\151\x70\x74\151\x6f\156\x20\x62\151\154\154\x69\156\x67\40\x70\145\162\x69\157\144\x2e", PR__CTM__PMPR), $eusockqasqqmoess), ], $eusockqasqqmoess); return !empty($ymmgciamciieaysq) ? $scumyeasgcsssmko[$ymmgciamciieaysq] : $scumyeasgcsssmko; } public static function giouwewgcickgaeu($product, $ooiewiwkegguusum = []) : ?string { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!self::geeyaumoyycymeks($product)) { goto goeoymmqqqeeoime; } $ooiewiwkegguusum = ManipulateFormat::omaawkkwwyesqwcc($ooiewiwkegguusum, ["\x74\141\x78\x5f\143\x61\154\x63\x75\154\141\164\151\157\156" => DecoratorOption::get("\x77\x6f\157\143\157\x6d\155\145\x72\x63\145\137\x74\141\x78\x5f\x64\151\x73\x70\x6c\x61\x79\x5f\163\150\x6f\160"), "\163\165\x62\163\143\162\x69\160\x74\x69\x6f\156\137\160\162\151\143\145" => true]); $ooiewiwkegguusum = DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\x6f\155\x6d\145\x72\143\x65\137\x73\x75\142\x73\143\x72\151\160\164\151\x6f\156\163\137\160\x72\157\x64\165\x63\x74\x5f\160\162\151\143\145\137\x73\164\x72\151\156\147\x5f\151\x6e\x63\x6c\x75\163\x69\x6f\x6e\163", $ooiewiwkegguusum, $product); $owwksgagiossaooa = self::owuaywucuaiyocum($product); if ($ooiewiwkegguusum["\164\x61\170\x5f\143\x61\154\x63\165\154\141\164\x69\x6f\x6e"]) { goto egasokooagakisiy; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\162\151\x63\x65"] ?? DecoratorWoocommerce::aumscagymwyyicag($owwksgagiossaooa); goto kecwuwwcwokuksyq; egasokooagakisiy: if (in_array($ooiewiwkegguusum["\x74\141\x78\x5f\x63\141\x6c\x63\x75\x6c\141\164\x69\x6f\156"], ["\145\x78\x63\x6c\x75\144\x65\137\x74\x61\x78", "\x65\170\x63\x6c"], true)) { goto usqgaogkqgemuima; } $aumscagymwyyicag = $ooiewiwkegguusum["\160\162\151\x63\x65"] ?? DecoratorWoocommerce::oeiymaksaoqaeqkk($product); goto mswsoaimesegiiic; usqgaogkqgemuima: $aumscagymwyyicag = $ooiewiwkegguusum["\x70\162\x69\x63\145"] ?? DecoratorWoocommerce::uewkmqiiguwwscwy($product); mswsoaimesegiiic: kecwuwwcwokuksyq: $aumscagymwyyicag .= "\40\x3c\163\x70\141\x6e\40\x63\154\141\x73\163\x3d\x22\x73\165\x62\163\x63\162\x69\160\x74\x69\157\x6e\x2d\144\145\164\141\151\x6c\163\42\x3e"; if ($ooiewiwkegguusum["\163\x75\142\x73\143\x72\x69\x70\164\151\x6f\x6e\137\160\162\151\x63\145"]) { goto qgegkeomwscwwiuw; } $meyskcssumkecyqm = "\74\x73\160\141\x6e\x20\x63\x6c\141\163\163\x3d\42\163\x75\142\163\143\162\x69\160\x74\151\x6f\156\x2d\x64\x65\164\x61\x69\154\163\42\x3e"; goto qmiwsequckckoaei; qgegkeomwscwwiuw: $meyskcssumkecyqm = $aumscagymwyyicag; qmiwsequckckoaei: $meyskcssumkecyqm .= "\74\57\x73\160\141\156\76"; $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\157\x6d\155\x65\x72\143\145\137\163\x75\142\163\x63\162\151\160\x74\x69\x6f\x6e\163\x5f\x70\x72\157\x64\x75\143\164\137\160\162\151\x63\x65\137\163\164\x72\x69\156\147", $meyskcssumkecyqm, $product, $ooiewiwkegguusum); goeoymmqqqeeoime: return $aumscagymwyyicag; } public static function kymakekgqcqyqgmy(string $uusmaiomayssaecw, $product, $ggauoeuaesiymgee = null, $empty_handling = "\141\154\x6c\x6f\x77\137\145\x6d\160\164\x79") { $product = self::aqasygcsqysmmyke($product); $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!self::geeyaumoyycymeks($product)) { goto cuoqqgaygogsmmic; } if (method_exists($product, "\155\145\164\x61\137\x65\x78\151\x73\x74\x73")) { goto qmeoaqmsuseueqiy; } if (!isset($product->{$uusmaiomayssaecw})) { goto ickcmqoiosquugwe; } $eqgoocgaqwqcimie = $product->{$uusmaiomayssaecw}; ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $mqokiegceimuwcum = ManipulateString::yaaoeasygeggswcq($uusmaiomayssaecw); if (!$product->meta_exists($mqokiegceimuwcum)) { goto eiawsoasmscmqswa; } $eqgoocgaqwqcimie = $product->get_meta($mqokiegceimuwcum, true); eiawsoasmscmqswa: ygkcacsyyckescqs: cuoqqgaygogsmmic: if (!("\165\x73\145\137\x64\145\x66\141\165\154\x74\x5f\166\141\x6c\x75\x65" === $empty_handling && empty($eqgoocgaqwqcimie))) { goto cgewcsueoyaeikgm; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; cgewcsueoyaeikgm: return $eqgoocgaqwqcimie; } public static function yaawkocgyswmsiqg($product) : bool { $product = self::aqasygcsqysmmyke($product); $ommmugiuyqwqggii = true; switch ($product->get_type()) { case self::wgcaoueuaisewigg: case self::mcoqqeswsggueuwe: if (!(false === self::is_purchasable_product($product))) { goto mqccmesakuemceqi; } $ommmugiuyqwqggii = false; mqccmesakuemceqi: goto sukskmcwsoysiuqu; case self::syeuqcqgqwucymio: $kwmywaaoacqyqymc = self::aqasygcsqysmmyke($product->get_parent_id()); if (!("\156\x6f" != wcs_get_product_limitation($kwmywaaoacqyqymc) && !empty(WC()->cart->cart_contents) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto yssscwioiyygssec; } if ("\156\x6f" === get_option(WC_Subscriptions_Admin::$option_prefix . "\137\155\x75\x6c\x74\151\160\x6c\x65\137\x70\165\162\143\x68\141\x73\145", "\x6e\x6f")) { goto qwcegcuowwgiccos; } foreach (WC()->cart->cart_contents as $cart_item) { if (!($product->get_parent_id() == wcs_get_objects_property($cart_item["\144\141\x74\x61"], "\x70\x61\x72\145\x6e\164\x5f\151\x64") && $product->get_id() != $cart_item["\144\x61\164\x61"]->get_id())) { goto kooskuwkuayiuose; } $ommmugiuyqwqggii = false; goto eyiamcekkgkiawqy; kooskuwkuayiuose: twkmiuomimomscew: } eyiamcekkgkiawqy: goto qcessicwuikwqsis; qwcegcuowwgiccos: $ommmugiuyqwqggii = true; qcessicwuikwqsis: yssscwioiyygssec: goto sukskmcwsoysiuqu; } igymseewwyiocoug: sukskmcwsoysiuqu: return $ommmugiuyqwqggii; } public static function is_purchasable_product($is_purchasable, $product) { if (isset(self::$is_purchasable_cache[$product->get_id()]["\163\x74\141\156\144\x61\162\x64"])) { goto siqagquguiemuoku; } self::$is_purchasable_cache[$product->get_id()]["\163\164\141\156\144\141\x72\x64"] = $is_purchasable; if (!(WC_Subscriptions_Product::is_subscription($product->get_id()) && "\x6e\157" != wcs_get_product_limitation($product) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto coywmiyqgsweuiic; } if (!(wcs_is_product_limited_for_user($product) && !self::order_awaiting_payment_for_product($product->get_id()))) { goto ieumumsgyguceusy; } self::$is_purchasable_cache[$product->get_id()]["\x73\164\141\x6e\x64\141\162\144"] = false; ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: return self::$is_purchasable_cache[$product->get_id()]["\163\x74\141\156\x64\141\x72\144"]; } }
