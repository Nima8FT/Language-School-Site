ظ<?php

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
                            if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif')) {
                                $split = explode('..', $val);
                                $img_name = 'Assets/' . $split[1];
                                $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><img src="' . $img_name . '" alt="' . $response[$i]['name'] . '"></td>';
                            } else
                                $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
                        }

                    if ($is_Exc == false)
                        if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif')) {
                            $split = explode('..', $val);
                            $img_name = 'Assets/' . $split[1];
                            $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><img src="' . $img_name . '" alt="' . $response[$i]['name'] . '"></td>';
                        } else
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
                        if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif')) {
                            $split = explode('..', $val);
                            $img_name = 'Assets/' . $split[1];
                            $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><img src="' . $img_name . '" alt="' . $response[$j]['name'] . '"></td>';
                        } else
                            $html .= '<td style="display:none;" class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
                    }

                if ($is_Exc == false)
                    if (str_contains($val, '.jpg') || str_contains($val, '.png') || str_contains($val, '.gif')) {
                        $split = explode('..', $val);
                        $img_name = 'Assets/' . $split[1];
                        $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><img src="' . $img_name . '" alt="' . $response[$j]['name'] . '"></td>';
                    } else
                        $html .= '<td class="main__table_' . $key . '" id="' . $key . '"><div>' . htmlspecialchars($val) . '</div></td>';
            }
            $html .= '<td class="main_info__actions" id="actions"><i class="icon-trash-regular del"></i></td>';
            $html .= "</tr>";
        } else
            echo '<h1 class="noMore">No More Data</h1>';
        $html .= "</tbody>";
        echo $html;
    }

    function HtmlFormEdit($Table)
    {
        $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
            "Mode" => "QUERY",
            "Query" => "DESCRIBE " . $Table
        ));

        $html = "";
        for ($i = 0; $i < count($response); $i++) {

            if ($response[$i]['Type'] == 'text' && str_contains($response[$i]['Field'], 'img'))
                $html .= '<div class="input_label">' .
                    '<label for="' . $response[$i]['Field'] . '">' . $response[$i]['Field'] . '</label>' .
                    '<input id="' . $response[$i]['Field'] . '" name="' . $response[$i]['Field'] . '" type="file" style="display: none;">' .
                    '<input type="button" value="Select File" onclick="document.getElementsByName(\'' . $response[$i]['Field'] . '\')[0].click();" /></div>';

            else if ($response[$i]['Type'] == 'mediumtext' || $response[$i]['Type'] == 'longtext')
                $html .= '<div class="input_label textarea">' .
                    '<label for="' . $response[$i]['Field'] . '">' . $response[$i]['Field'] . '</label>' .
                    '<textarea id="input_' . $response[$i]['Field'] . '" name="' . $response[$i]['Field'] . '" type="text" ></textarea></div>';
            else
                $html .= '<div class="input_label">' .
                    '<label for="' . $response[$i]['Field'] . '">' . $response[$i]['Field'] . '</label>' .
                    '<input id="input_' . $response[$i]['Field'] . '" name="' . $response[$i]['Field'] . '" type="text"></div>';
        }

        echo $html;
    }

    function UploadFiles($img_name, $Table)
    {
        foreach ($_FILES as $key => $value) {
            if ($value['name'] !== "") {
                $f_name = explode('.', $value['name']);
                $format = $f_name[count($f_name) - 1];

                $img_dir = "";
                if ($Table == "box") {
                    $img_dir = __DIR__ . '/../img/box/' . $img_name . '.' . $format;
                } else if ($Table == "personal") {
                    $img_dir = __DIR__ . '/../img/personal/' . $img_name . '.' . $format;
                } else if ($Table == "news") {
                    $img_dir = __DIR__ . '/../img/news/' . $img_name . '.' . $format;
                } else if ($Table == "slider") {
                    $img_dir = __DIR__ . '/../img/slider/' . $img_name . '.' . $format;
                } else if ($Table == "comments") {
                    $img_dir = __DIR__ . '/../img/comments/' . $img_name . '.' . $format;
                }

                $img_tmp = $value['tmp_name'];
                move_uploaded_file($img_tmp, $img_dir);
                $_POST[$key] = $img_dir;
            }
        }
    }

    function Insert($Table, $POST)
    {
        unset($POST['id']);
        $Fields = "";
        $Values = "";
        $i = 1;

        if (isset($_FILES)) {
            $img_name = time() . $Table . rand(10, 100);
            UploadFiles($img_name, $Table);
        }
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

        if (isset($_FILES)) {
            $img_name = time() . $Table . rand(10, 100);
            UploadFiles($img_name, $Table);
        }

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
