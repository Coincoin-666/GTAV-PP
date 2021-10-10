<?php
$reg_n = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+.?)/mi";


function sanitizeData($data) {
    $newData = strtolower($data);
    $newData = trim($newData);
    $newData = ucfirst($newData);
    $newData = htmlspecialchars($newData);
    return $newData;
}

function rename_img() {
    $ext = explode(".", $_FILES['send_nudes']['name']);
    $rename_img = uniqid() . "." . $ext[1];
    return $rename_img;
}

function rename_icon() {
    $ext = explode(".", $_FILES['new_icon']['name']);
    $rename_img = uniqid() . "." . $ext[1];
    return $rename_img;
}

// function rename_screenshot_with_path($img_saved) {
//     $rename_screenshot_with_path = $path . $img_saved;
//     return $rename_screenshot_with_path;
// }

// Session/Login functions.
// $_SESSION['error'] = [];
// $_SESSION['admin'] = false;
// $login_swal = false;


// define('APACHE_MIME_TYPES_URL', 'http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types');

// function generateUpToDateMimeArray($url)
// {
//     $s = array();
//     foreach (@explode("\n", @file_get_contents($url)) as $x)
//         if (isset($x[0]) && $x[0] !== '#' && preg_match_all('#([^\s]+)#', $x, $out) && isset($out[1]) && ($c = count($out[1])) > 1)
//             for ($i = 1; $i < $c; $i++)
//                 $s[] = '&nbsp;&nbsp;&nbsp;\'' . $out[1][$i] . '\' => \'' . $out[1][0] . '\'';
//     return @sort($s) ? '$mime_types = array(<br />' . implode($s, ',<br >') . '<br />);' : false;
// }

// echo
// generateUpToDateMimeArray(APACHE_MIME_TYPES_URL);