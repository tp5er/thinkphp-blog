
<?php 
function tpta($str) {
    return json(array('code' => 200, 'msg' => $str));
}
function tptb($str) {
    return json(array('code' => 0, 'msg' => $str));
}
function tptc() {
    return view();
}
?>