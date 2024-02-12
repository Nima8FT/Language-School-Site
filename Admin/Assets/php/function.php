<?php

session_start();

$URL = explode('/', $_SERVER['REQUEST_URI']);
$URL = strtolower($URL[count($URL) - 1]);

define('HomeURL', '../');
define('URL', $URL);
define('Host', $_SERVER['SERVER_NAME']);

function ReqAPI($url, $data)
{
    $opts = array(
        'http' =>
        array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($opts);
    $result = file_get_contents($url, false, $context);

    return json_decode($result, true);
}

function ReqAPI1($url, $data)
{
    $opts = array(
        'http' =>
        array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($opts);
    $result = file_get_contents($url, false, $context);

    echo $result;
}

function ReDirect($uri)
{
    MSG();
    echo '<script>location.replace("' . $uri . '");</script>';
}

function MSG()
{
    if (isset($_SESSION['err'])) {
        echo '<script>$(".err").html("' . $_SESSION['err'] . '")</script>';
        echo '<script type="text/javascript">alert("' . $_SESSION['err'] . '");</script>';
        unset($_SESSION['err']);
    }
}

function HtmlTitle($Table, $Exc)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "DESCRIBE " . $Table
    ));

    $txt = [];
    $html = "<thead><tr>";
    for ($i = 0; $i < count($response); $i++) {
        foreach ($response[$i] as $key => $val) {

            if ($key == "Field") {
                array_push($txt, $val);
                $is_Exc = false;

                for ($j = 0; $j < count($Exc); $j++)
                    if ($Exc[$j] == $val) {
                        $is_Exc = true;
                        $html .= '<th style="display:none" class="main_info__' . $val . '">' . $val . '</th>';
                    }

                if ($is_Exc == false)
                    $html .= '<th class="main_info__' . $val . '">' . $val . '</th>';
            }
        }
    }
    $html .= '<th class="main_info__Action">Action</th>';
    $html .= "</tr></thead>";

    echo $html;
}

function HtmlRow($Table, $Exc)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM " . $Table
    ));

    $txt = [];
    $html = '<tbody>';

    if ($response != false && isset($response[0]))
        for ($i = 0; $i < count($response); $i++) {
            $html .= '<tr class="main_detail">';

            foreach ($response[$i] as $key => $val) {
                $is_Exc = false;

                for ($j = 0; $j < count($Exc); $j++)
                    if ($Exc[$j] == $key) {
                        $is_Exc = true;
                        // '<img src="./Assets/img/Movie/Poster_Brave.jpg" alt="">'
                        if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif'))
                            $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><img src="' . HomeURL  . $val . '" alt="' . $response[$i]['name'] . '"></td>';
                        else
                            $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
                    }

                if ($is_Exc == false)
                    if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif'))
                        $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><img src="' . HomeURL  . $val . '" alt="' . $response[$i]['name'] . '"></td>';
                    else
                        $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
            }

            $html .= '<td class="main_info__actions" id="actions"><i class="icon-trash-regular del"></i></td>';
            $html .= "</tr>";
        }
    else if ($response != false) {

        $html .= '<tr class="main_detail">';
        foreach ($response as $key => $val) {
            $is_Exc = false;

            for ($j = 0; $j < count($Exc); $j++)
                if ($Exc[$j] == $key) {
                    $is_Exc = true;
                    // '<img src="./Assets/img/Movie/Poster_Brave.jpg" alt="">'
                    if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif'))
                        $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><img src="' . HomeURL  . $val . '" alt="' . $response[$j]['name'] . '"></td>';
                    else
                        $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
                }

            if ($is_Exc == false)
                if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif'))
                    $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><img src="' . HomeURL  . $val . '" alt="' . $response[$j]['name'] . '"></td>';
                else
                    $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
        }
        $html .= '<td class="main_info__actions" id="actions"><i class="icon-trash-regular del"></i></td>';
        $html .= "</tr>";
    } else
        echo '<h1 class="noMore">No More Data</h1>';
    $html .= "</tbody>";
    echo $html;
}

function UploadFiles()
{
}

function Insert($Table, $POST)
{
    unset($POST['id']);
    $Fields = "";
    $Values = "";
    $i = 1;


    if (isset($POST['name']) && isset($_FILES))
        UploadFiles($POST['name'], $Table);
    $POST = $_POST;

    foreach ($POST as $key => $val) {
        if ($val == "")
            unset($POST[$key]);
    }

    foreach ($POST as $key => $val) {
        if (count($POST) == $i) {
            $Fields .= $key;
            $Values .= $val;
        } else {
            $Fields .= $key . '<#>';
            $Values .= $val . '<#>';
        }
        $i++;
    }

    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "INSERT",
        "Table" => $Table,
        "Fields" => $Fields,
        "Values" => $Values
    ));
    echo $response;
}

function Update($Table, $POST, $id)
{
    unset($POST['id']);
    $Fields = "";
    $Values = "";
    $i = 1;

    if (isset($POST['name']) && isset($_FILES))
        UploadFiles($POST['name'], $Table);

    $POST = $_POST;

    foreach ($POST as $key => $val) {
        if ($val == "")
            unset($POST[$key]);
    }

    foreach ($POST as $key => $val) {
        if (count($POST) == $i) {
            $Fields .= $key;
            $Values .= $val;
        } else {
            $Fields .= $key . '<#>';
            $Values .= $val . '<#>';
        }
        $i++;
    }

    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "UPDATE",
        "Table" => $Table,
        "ID" => $id,
        "Fields" => $Fields,
        "Values" => $Values
    ));
    echo $response;
}

function Delete($Table, $id)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "DELETE",
        "Table" => $Table,
        "ID" => $id
    ));
    echo $response;
}

function Find($Table, $Fields, $Values, $isFix, $isArr)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "SEARCH",
        "Table" => $Table,
        "Fields" => $Fields,
        "Values" => $Values,
        "isFix" => $isFix,
        "isArr" => $isArr
    ));
    return $response;
}
