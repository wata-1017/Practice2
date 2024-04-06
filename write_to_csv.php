<?php
if(isset($_POST['inputText'])) {
    $inputText = $_POST['inputText'];
    $file = 'data.csv';
    $current = file_get_contents($file);
    $current .= $inputText . "\n";
    file_put_contents($file, $current);
    echo "テキストがCSVファイルに書き込まれました。";
}
?>