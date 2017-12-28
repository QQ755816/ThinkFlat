<?php
function certtype($val){
    switch($val){
        case 1:
            return L('CERTDIRECT');
            break;
        case 2:
            return L('CERTTJREEPARTY');
            break;
        case 3:
            return L('CERTINDIRECT');
            break;
    }
}
function certstatus($val){
    switch($val){
        case 0:
            return L('CERTDIRECT');
            break;
        case 1:
            return L('CIRSVerification');
            break;
        case 2:
            return L('DOWNSTREAMCOMConfirmation');
            break;
        case 3:
            return L('VALIDCERT');
            break;
        case 4:
            return L('INVALIDCERT');
            break;
    }
}
function trans_month($val){
    switch($val){
        case 1:
            return 'Jan.';
            break;
        case 2:
            return 'Feb.';
            break;
        case 3:
            return 'Mar.';
            break;
        case 4:
            return 'Apr.';
            break;
        case 5:
            return 'May.';
            break;
        case 6:
            return 'Jun.';
            break;
        case 7:
            return 'Jul.';
            break;
        case 8:
            return 'Aug.';
            break;
        case 9:
            return 'Sep.';
            break;
        case 10:
            return 'Oct.';
            break;
        case 11:
            return 'Nov.';
            break;
        case 12:
            return 'Dec.';
            break;
    }
}