<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6220692b53b2b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Manipulate extends ManipulateWoocommerce { const wgcaoueuaisewigg = "\x73\x75\x62\163\143\162\x69\160\x74\151\x6f\156"; const mcoqqeswsggueuwe = "\x76\x61\162\151\141\142\154\145\x5f\163\x75\142\163\143\162\151\160\164\151\157\156"; const syeuqcqgqwucymio = "\x73\x75\x62\x73\x63\x72\x69\x70\x74\x69\x6f\x6e\x5f\x76\141\x72\x69\141\x74\151\x6f\x6e"; public static function owuaywucuaiyocum($product) { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto yowsmsiyimmimemc; } $eyuymeqcioasuyyi = self::asaycagaeksiumkw($product); $ceywwemkggagsska = self::kymakekgqcqyqgmy("\163\x75\142\x73\x63\x72\x69\x70\164\x69\x6f\x6e\137\x70\162\151\143\145", $product, 0); $aqsowwgoqccksmes = $ceywwemkggagsska ?? self::scgumisucgwskyqk($product); if (!($product->is_on_sale() && '' !== $eyuymeqcioasuyyi && $ceywwemkggagsska > $eyuymeqcioasuyyi)) { goto kwagwqyusyiyoaqs; } $aqsowwgoqccksmes = $eyuymeqcioasuyyi; kwagwqyusyiyoaqs: $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\x6f\155\x6d\145\x72\143\145\x5f\x73\165\142\x73\143\162\x69\x70\x74\151\x6f\x6e\x73\x5f\x70\162\157\144\165\x63\164\137\160\162\x69\x63\145", $aqsowwgoqccksmes, $product); yowsmsiyimmimemc: return $aumscagymwyyicag; } public static function aguoqkeigqooqwco($ymmgciamciieaysq = '') { static $kygiqocyyqukaikg = []; if (is_string($ymmgciamciieaysq)) { goto kiqogmwcgcamwiig; } $ymmgciamciieaysq = ''; kiqogmwcgcamwiig: $locale = DecoratorUser::iyouigcsiacgwksc(); if (isset($kygiqocyyqukaikg[$locale])) { goto iomcaiwewsawiamu; } $kygiqocyyqukaikg[$locale] = self::gywoouyaaigoskoc(); iomcaiwewsawiamu: $mayqaoqwuwwgssiy = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\x6f\155\x6d\x65\162\x63\145\137\x73\165\142\163\x63\x72\151\160\x74\x69\157\156\x5f\154\145\156\x67\164\150\163", $kygiqocyyqukaikg[$locale], $ymmgciamciieaysq); if (!$ymmgciamciieaysq) { goto sqiciiuwmykocycc; } $mayqaoqwuwwgssiy = $mayqaoqwuwwgssiy[$ymmgciamciieaysq]; sqiciiuwmykocycc: return $mayqaoqwuwwgssiy; } public static function qamkswcgsoeggmau($product) : int { return DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\x6f\155\155\x65\162\x63\145\x5f\163\165\142\x73\x63\162\151\160\x74\x69\157\156\x73\137\x70\x72\x6f\144\x75\143\164\x5f\154\145\x6e\x67\164\x68", self::kymakekgqcqyqgmy($product, "\163\x75\142\163\143\162\x69\160\x74\x69\157\156\137\154\x65\x6e\147\x74\x68", 0, "\x75\x73\145\x5f\x64\145\146\x61\x75\154\164\137\166\x61\x6c\165\145"), self::aqasygcsqysmmyke($product)); } public static function wciqcqwsswuayouy($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\x6f\155\x6d\x65\162\x63\x65\x5f\163\165\x62\x73\143\x72\151\x70\164\151\157\x6e\x73\137\x70\x72\157\144\x75\143\164\137\160\145\x72\151\x6f\144\137\151\156\164\x65\x72\166\141\154", self::kymakekgqcqyqgmy($product, "\x73\x75\142\x73\143\162\151\160\x74\x69\x6f\156\x5f\x70\145\x72\x69\x6f\x64\x5f\x69\x6e\164\x65\162\x76\x61\x6c", 1, "\x75\x73\145\137\144\145\146\141\165\154\x74\x5f\166\x61\x6c\x75\x65"), self::aqasygcsqysmmyke($product)); } public static function cskqgsqgkquceimo($product) : string { return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\x6f\155\155\145\x72\x63\x65\x5f\163\x75\x62\x73\143\162\151\160\164\x69\x6f\156\x73\137\160\162\157\144\165\143\x74\137\x70\x65\162\151\x6f\144", self::kymakekgqcqyqgmy($product, "\163\165\x62\x73\x63\x72\x69\160\164\x69\x6f\156\x5f\x70\145\x72\x69\157\144", ''), self::aqasygcsqysmmyke($product)); } public static function gywoouyaaigoskoc() : array { $scumyeasgcsssmko = ["\x64\141\x79", "\x77\145\x65\x6b", "\155\x6f\156\x74\150", "\171\x65\x61\x72"]; foreach ($scumyeasgcsssmko as $ymmgciamciieaysq) { $isuywoqqseygywkq = []; $mckmacgukqcegscg = [_x("\x4e\x65\166\145\162\x20\x65\x78\160\151\162\x65", "\123\165\142\163\143\162\151\160\164\151\157\156\x20\154\145\x6e\147\x74\150", PR__CTM__PMPR)]; switch ($ymmgciamciieaysq) { case "\144\x61\171": $mckmacgukqcegscg[] = _x("\61\x20\x64\141\x79", "\123\x75\142\x73\143\162\151\x70\164\151\157\x6e\x20\x6c\x65\x6e\147\164\150\x73\x2e\x20\x65\x2e\147\x2e\40\42\106\157\162\x20\61\x20\x64\x61\x79\x2e\56\x2e\42", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 90); goto cggowoquuiwqkyew; case "\x77\x65\145\153": $mckmacgukqcegscg[] = _x("\x31\40\167\x65\145\x6b", "\x53\x75\142\163\x63\162\x69\x70\164\151\157\156\40\x6c\145\156\147\x74\150\163\x2e\x20\145\x2e\147\56\x20\42\106\x6f\x72\x20\x31\40\x77\145\145\153\56\x2e\x2e\x22", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 52); goto cggowoquuiwqkyew; case "\155\x6f\156\164\150": $mckmacgukqcegscg[] = _x("\61\40\x6d\157\156\164\150", "\x53\x75\142\163\143\x72\x69\160\164\151\x6f\x6e\x20\x6c\x65\x6e\147\164\150\163\x2e\40\145\x2e\x67\x2e\x20\42\x46\x6f\162\40\x31\x20\155\x6f\156\x74\x68\56\56\56\x22", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 24); goto cggowoquuiwqkyew; case "\171\145\x61\162": $mckmacgukqcegscg[] = _x("\61\40\x79\x65\x61\162", "\123\x75\x62\163\x63\x72\151\160\x74\x69\157\156\40\x6c\x65\x6e\147\x74\x68\x73\56\x20\145\x2e\x67\x2e\40\x22\x46\x6f\x72\x20\x31\x20\x79\145\x61\162\x2e\56\x2e\x22", PR__CTM__PMPR); $isuywoqqseygywkq = range(2, 5); goto cggowoquuiwqkyew; } ocokwuuquaokmasc: cggowoquuiwqkyew: foreach ($isuywoqqseygywkq as $eusockqasqqmoess) { $isuywoqqseygywkq[$eusockqasqqmoess] = self::qwkgiacgsiuokomo($eusockqasqqmoess, $ymmgciamciieaysq); goacqqsgaaigyuaw: } yiwiqaqmwiogawym: $mckmacgukqcegscg += $isuywoqqseygywkq; $mayqaoqwuwwgssiy[$ymmgciamciieaysq] = $mckmacgukqcegscg; uukumskkeggaowck: } eequksumcoogyoem: return $mayqaoqwuwwgssiy; } public static function geeyaumoyycymeks($product = null) : bool { $geeyaumoyycymeks = $eoioyuyammuoecgs = false; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto wcesymwqykqoyuqk; } $eoioyuyammuoecgs = self::omwkqcuwceweymcc($product); if (!$product->is_type([self::wgcaoueuaisewigg, self::syeuqcqgqwucymio, self::mcoqqeswsggueuwe])) { goto meawswgwagoqgkye; } $geeyaumoyycymeks = true; meawswgwagoqgkye: wcesymwqykqoyuqk: return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\157\155\x6d\x65\162\x63\145\137\151\x73\137\163\165\142\163\x63\162\151\160\x74\x69\x6f\156", $geeyaumoyycymeks, $eoioyuyammuoecgs, $product); } public static function qwkgiacgsiuokomo($eusockqasqqmoess = 1, $ymmgciamciieaysq = '') { $scumyeasgcsssmko = DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\155\155\x65\x72\143\145\x5f\x73\165\x62\x73\x63\x72\151\160\x74\151\x6f\x6e\x5f\160\x65\162\x69\x6f\x64\x73", [ "\x64\141\x79" => sprintf(_nx("\144\141\171", "\45\163\x20\x64\141\x79\x73", $eusockqasqqmoess, "\123\x75\142\163\x63\162\x69\160\164\151\x6f\156\40\x62\151\x6c\154\x69\156\x67\40\160\145\x72\x69\x6f\x64\x2e", PR__CTM__PMPR), $eusockqasqqmoess), "\x77\x65\145\153" => sprintf(_nx("\167\x65\145\153", "\x25\x73\x20\167\145\145\153\x73", $eusockqasqqmoess, "\x53\x75\142\163\143\x72\x69\x70\x74\x69\157\x6e\x20\x62\x69\x6c\x6c\151\156\x67\x20\x70\x65\162\x69\x6f\144\x2e", PR__CTM__PMPR), $eusockqasqqmoess), "\155\x6f\x6e\x74\150" => sprintf(_nx("\x6d\x6f\156\164\x68", "\45\x73\40\x6d\x6f\156\x74\x68\163", $eusockqasqqmoess, "\123\x75\142\163\x63\162\x69\160\164\x69\157\156\x20\x62\x69\154\x6c\151\156\x67\40\160\x65\162\151\x6f\x64\x2e", PR__CTM__PMPR), $eusockqasqqmoess), "\171\145\x61\162" => sprintf(_nx("\x79\145\141\162", "\45\x73\40\171\x65\x61\162\163", $eusockqasqqmoess, "\x53\x75\x62\163\143\x72\151\x70\x74\151\x6f\156\x20\x62\151\x6c\x6c\x69\156\x67\40\x70\145\x72\x69\x6f\x64\x2e", PR__CTM__PMPR), $eusockqasqqmoess), ], $eusockqasqqmoess); return !empty($ymmgciamciieaysq) ? $scumyeasgcsssmko[$ymmgciamciieaysq] : $scumyeasgcsssmko; } public static function giouwewgcickgaeu($product, $ooiewiwkegguusum = []) : ?string { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!self::geeyaumoyycymeks($product)) { goto goeoymmqqqeeoime; } $ooiewiwkegguusum = ManipulateFormat::omaawkkwwyesqwcc($ooiewiwkegguusum, ["\164\141\170\x5f\143\x61\x6c\143\x75\x6c\x61\164\151\x6f\x6e" => DecoratorOption::get("\x77\157\x6f\x63\x6f\155\155\145\x72\x63\x65\137\164\x61\x78\x5f\x64\151\163\x70\154\141\x79\137\x73\150\157\x70"), "\x73\x75\x62\x73\143\x72\x69\160\164\151\157\156\x5f\x70\x72\151\x63\x65" => true]); $ooiewiwkegguusum = DecoratorHook::sscegwueamckwmcy("\167\157\157\143\157\155\x6d\145\x72\x63\x65\x5f\163\x75\x62\163\143\x72\x69\160\x74\151\x6f\x6e\x73\137\x70\162\157\144\x75\x63\x74\137\x70\x72\x69\143\145\x5f\x73\164\162\x69\x6e\147\137\x69\x6e\143\154\x75\163\x69\157\x6e\x73", $ooiewiwkegguusum, $product); $owwksgagiossaooa = self::owuaywucuaiyocum($product); if ($ooiewiwkegguusum["\164\x61\x78\137\x63\141\154\x63\165\154\x61\x74\151\157\x6e"]) { goto egasokooagakisiy; } $aumscagymwyyicag = $ooiewiwkegguusum["\160\162\151\143\145"] ?? DecoratorWoocommerce::aumscagymwyyicag($owwksgagiossaooa); goto kecwuwwcwokuksyq; egasokooagakisiy: if (in_array($ooiewiwkegguusum["\164\x61\170\x5f\143\x61\x6c\143\x75\x6c\x61\164\151\157\x6e"], ["\145\170\x63\154\165\144\145\137\164\x61\x78", "\145\x78\143\154"], true)) { goto usqgaogkqgemuima; } $aumscagymwyyicag = $ooiewiwkegguusum["\160\162\151\143\145"] ?? DecoratorWoocommerce::oeiymaksaoqaeqkk($product); goto mswsoaimesegiiic; usqgaogkqgemuima: $aumscagymwyyicag = $ooiewiwkegguusum["\x70\x72\151\x63\145"] ?? DecoratorWoocommerce::uewkmqiiguwwscwy($product); mswsoaimesegiiic: kecwuwwcwokuksyq: $aumscagymwyyicag .= "\x20\74\163\160\141\156\40\x63\x6c\141\x73\x73\75\42\x73\165\142\163\x63\162\x69\160\x74\x69\x6f\156\x2d\x64\x65\x74\x61\151\154\163\42\x3e"; if ($ooiewiwkegguusum["\x73\x75\x62\163\x63\x72\x69\x70\164\x69\157\156\137\160\x72\151\143\145"]) { goto qgegkeomwscwwiuw; } $meyskcssumkecyqm = "\x3c\163\x70\x61\156\40\x63\154\x61\163\163\x3d\42\x73\x75\x62\163\x63\162\151\160\x74\151\157\156\55\x64\x65\x74\141\x69\x6c\163\x22\x3e"; goto qmiwsequckckoaei; qgegkeomwscwwiuw: $meyskcssumkecyqm = $aumscagymwyyicag; qmiwsequckckoaei: $meyskcssumkecyqm .= "\74\x2f\x73\x70\x61\x6e\76"; $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\157\155\x6d\x65\162\x63\x65\137\163\165\x62\x73\x63\162\x69\160\164\151\x6f\156\x73\x5f\160\x72\157\x64\165\143\164\x5f\x70\x72\x69\143\145\x5f\163\164\162\x69\x6e\147", $meyskcssumkecyqm, $product, $ooiewiwkegguusum); goeoymmqqqeeoime: return $aumscagymwyyicag; } public static function kymakekgqcqyqgmy(string $uusmaiomayssaecw, $product, $ggauoeuaesiymgee = null, $empty_handling = "\141\x6c\154\157\167\137\145\155\160\164\171") { $product = self::aqasygcsqysmmyke($product); $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!self::geeyaumoyycymeks($product)) { goto cuoqqgaygogsmmic; } if (method_exists($product, "\155\x65\164\141\x5f\145\x78\x69\163\x74\x73")) { goto qmeoaqmsuseueqiy; } if (!isset($product->{$uusmaiomayssaecw})) { goto ickcmqoiosquugwe; } $eqgoocgaqwqcimie = $product->{$uusmaiomayssaecw}; ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $mqokiegceimuwcum = ManipulateString::yaaoeasygeggswcq($uusmaiomayssaecw); if (!$product->meta_exists($mqokiegceimuwcum)) { goto eiawsoasmscmqswa; } $eqgoocgaqwqcimie = $product->get_meta($mqokiegceimuwcum, true); eiawsoasmscmqswa: ygkcacsyyckescqs: cuoqqgaygogsmmic: if (!("\x75\163\145\x5f\x64\x65\x66\141\x75\x6c\x74\x5f\166\141\x6c\x75\x65" === $empty_handling && empty($eqgoocgaqwqcimie))) { goto cgewcsueoyaeikgm; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; cgewcsueoyaeikgm: return $eqgoocgaqwqcimie; } public static function yaawkocgyswmsiqg($product) : bool { $product = self::aqasygcsqysmmyke($product); $ommmugiuyqwqggii = true; switch ($product->get_type()) { case self::wgcaoueuaisewigg: case self::mcoqqeswsggueuwe: if (!(false === self::is_purchasable_product($product))) { goto mqccmesakuemceqi; } $ommmugiuyqwqggii = false; mqccmesakuemceqi: goto sukskmcwsoysiuqu; case self::syeuqcqgqwucymio: $kwmywaaoacqyqymc = self::aqasygcsqysmmyke($product->get_parent_id()); if (!("\156\157" != wcs_get_product_limitation($kwmywaaoacqyqymc) && !empty(WC()->cart->cart_contents) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto yssscwioiyygssec; } if ("\156\x6f" === get_option(WC_Subscriptions_Admin::$option_prefix . "\x5f\x6d\x75\154\164\x69\x70\x6c\x65\x5f\x70\x75\x72\x63\x68\x61\x73\145", "\156\x6f")) { goto qwcegcuowwgiccos; } foreach (WC()->cart->cart_contents as $cart_item) { if (!($product->get_parent_id() == wcs_get_objects_property($cart_item["\x64\x61\x74\141"], "\160\141\162\145\156\164\x5f\x69\x64") && $product->get_id() != $cart_item["\x64\x61\x74\x61"]->get_id())) { goto kooskuwkuayiuose; } $ommmugiuyqwqggii = false; goto eyiamcekkgkiawqy; kooskuwkuayiuose: twkmiuomimomscew: } eyiamcekkgkiawqy: goto qcessicwuikwqsis; qwcegcuowwgiccos: $ommmugiuyqwqggii = true; qcessicwuikwqsis: yssscwioiyygssec: goto sukskmcwsoysiuqu; } igymseewwyiocoug: sukskmcwsoysiuqu: return $ommmugiuyqwqggii; } public static function is_purchasable_product($is_purchasable, $product) { if (isset(self::$is_purchasable_cache[$product->get_id()]["\x73\x74\141\x6e\144\x61\162\144"])) { goto siqagquguiemuoku; } self::$is_purchasable_cache[$product->get_id()]["\x73\164\141\x6e\144\x61\x72\x64"] = $is_purchasable; if (!(WC_Subscriptions_Product::is_subscription($product->get_id()) && "\x6e\157" != wcs_get_product_limitation($product) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto coywmiyqgsweuiic; } if (!(wcs_is_product_limited_for_user($product) && !self::order_awaiting_payment_for_product($product->get_id()))) { goto ieumumsgyguceusy; } self::$is_purchasable_cache[$product->get_id()]["\163\164\x61\x6e\144\x61\x72\x64"] = false; ieumumsgyguceusy: coywmiyqgsweuiic: siqagquguiemuoku: return self::$is_purchasable_cache[$product->get_id()]["\x73\164\141\x6e\x64\x61\162\x64"]; } }
