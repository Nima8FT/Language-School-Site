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

function Slider()
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `slider`"
    ));

    $html = '<div class="slider">';

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if ($db['mode'] == 'slider') {
            $html .= '<div class="slide" style="background-image: url(' . $img_name . ');"></div>';
        }
    }

    $html .= '</div>';

    echo $html;
}


function BoxSadr($show)
{

    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `box`"
    ));

    $html = '';

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if (strtolower($db['mode']) == 'sadr') {
            if ($show == 'filter') {
                if (strtolower($db['show']) == 'true') {
                    $html .= '
            <div class="box">
                <img class="box-img" src="' . $img_name . '" alt="Book">
                <img class="box-title-img" src="./Assets/images/title-box.png" alt="Title Box">
                <div class="box-title">
                    <div class="box-title-top">
                        <p>از ' . $db['date'] . '</p>
                        <p>تعداد جلسه: ' . $db['number'] . '</p>
                    </div>
                    <div class="box-title-main">
                        <h2>' . $db['title'] . '</h2>
                        <h4>مدرس: ' . $db['teacher'] . '</h4>
                    </div>
                    <div class="box-title-bottom">
                        <p>ادامه مطلب</p>
                        <img src="./Assets/images/edame.png" alt="arrow">
                    </div>
                </div>
                </div>
            ';
                }
            } else {
                $html .= '
                <div class="box">
                    <img class="box-img" src="' . $img_name . '" alt="Book">
                    <img class="box-title-img" src="./Assets/images/title-box.png" alt="Title Box">
                    <div class="box-title">
                        <div class="box-title-top">
                            <p>از ' . $db['date'] . '</p>
                            <p>تعداد جلسه: ' . $db['number'] . '</p>
                        </div>
                        <div class="box-title-main">
                            <h2>' . $db['title'] . '</h2>
                            <h4>مدرس: ' . $db['teacher'] . '</h4>
                        </div>
                        <div class="box-title-bottom">
                            <p>ادامه مطلب</p>
                            <img src="./Assets/images/edame.png" alt="arrow">
                        </div>
                    </div>
                    </div>
                ';
            }
        }
    }

    echo $html;
}

function BoxBaghai($show)
{

    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `box`"
    ));

    $html = '';

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if (strtolower($db['mode']) == 'baghai') {
            if ($show == 'filter') {
                if (strtolower($db['show']) == 'true') {
                    $html .= '
            <div class="box">
                <img class="box-img" src="' . $img_name . '" alt="Book">
                <img class="box-title-img" src="./Assets/images/title-box.png" alt="Title Box">
                <div class="box-title">
                    <div class="box-title-top">
                        <p>از ' . $db['date'] . '</p>
                        <p>تعداد جلسه: ' . $db['number'] . '</p>
                    </div>
                    <div class="box-title-main">
                        <h2>' . $db['title'] . '</h2>
                        <h4>مدرس: ' . $db['teacher'] . '</h4>
                    </div>
                    <div class="box-title-bottom">
                        <p>ادامه مطلب</p>
                        <img src="./Assets/images/edame.png" alt="arrow">
                    </div>
                </div>
                </div>
            ';
                }
            } else {
                $html .= '
                <div class="box">
                    <img class="box-img" src="' . $img_name . '" alt="Book">
                    <img class="box-title-img" src="./Assets/images/title-box.png" alt="Title Box">
                    <div class="box-title">
                        <div class="box-title-top">
                            <p>از ' . $db['date'] . '</p>
                            <p>تعداد جلسه: ' . $db['number'] . '</p>
                        </div>
                        <div class="box-title-main">
                            <h2>' . $db['title'] . '</h2>
                            <h4>مدرس: ' . $db['teacher'] . '</h4>
                        </div>
                        <div class="box-title-bottom">
                            <p>ادامه مطلب</p>
                            <img src="./Assets/images/edame.png" alt="arrow">
                        </div>
                    </div>
                    </div>
                ';
            }
        }
    }

    echo $html;
}

function TeacherSadr($show)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `personal`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if (strtolower($db['mode']) == 'teacher') {
            if (strtolower($db['institutions']) == 'sadr') {
                if ($show == 'filter') {
                    if (strtolower($db['show']) == "true") {
                        $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                    }
                } else {
                    $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                }
            }
        }
    }

    echo $html;
}

function TeacherBaghai($show)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `personal`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if (strtolower($db['mode']) == 'teacher') {
            if (strtolower($db['institutions']) == 'baghai') {
                if ($show == 'filter') {
                    if (strtolower($db['show']) == "true") {
                        $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                    }
                } else {
                    $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                }
            }
        }
    }

    echo $html;
}

function PersonalSadr($show)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `personal`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if (strtolower($db['mode']) == 'personal') {
            if (strtolower($db['institutions']) == 'sadr') {
                if ($show == 'filter') {
                    if (strtolower($db['show']) == "true") {
                        $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                    }
                } else {
                    $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                }
            }
        }
    }

    echo $html;
}

function PersonalBaghai($show)
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `personal`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if (strtolower($db['mode']) == 'personal') {
            if (strtolower($db['institutions']) == 'baghai') {
                if ($show == 'filter') {
                    if (strtolower($db['show']) == "true") {
                        $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                    }
                } else {
                    $html .= '
                    <div class="teachers-list-box">
                <img src="' . $img_name . '" alt="' . $db['name'] . '">
                <div class="teachers-list-box-title">
                    <h4>' . $db['name'] . '</h4>
                    <p>' . $db['des'] . '</p>
                </div>
            </div>
            ';
                }
            }
        }
    }

    echo $html;
}

function News($show)
{

    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `news`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        if ($show == 'filter') {
            if (strtolower($db['show']) == "true") {
                $html .= '
        <div class="news-list-box">
        <div class="news-list-box-title">
            <h4>' . $db['title'] . '</h4>
            <p>' . $db['des'] . '</p>
        </div>
        <img src="' . $img_name . '" alt="Banner">
    </div>
        ';
            }
        } else {
            $html .= '
            <div class="news-list-box">
            <div class="news-list-box-title">
                <h4>' . $db['title'] . '</h4>
                <p>' . $db['des'] . '</p>
            </div>
            <img src="' . $img_name . '" alt="Banner">
        </div>
            ';
        }
    }

    echo $html;
}

function AboutUs()
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `about`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];

        $html .= '
        <div>
        <h3>' . $db['title'] . '</h3>
        <p>' . $db['des'] . '</p>
    </div>
        ';
    }

    echo $html;
}

function Commetns()
{
    $response = ReqAPI('http://localhost/Language-School-Site/Api/index.php', array(
        "Mode" => "QUERY",
        "Query" => "SELECT * FROM `comments`"
    ));

    $html = "";

    for ($i = 0; $i < count($response); $i++) {
        $db = $response[$i];
        $img_split = explode('..', $db['img']);
        $img_name = '../Admin/Assets' . $img_split[1];

        $html .= '
        <div class="comments-bottom-box">
            <img src="' . $img_name . '" alt="Comments">
            <h3>' . $db['title'] . '</h3>
            <p>' . $db['des'] . '</p>
        </div>
        ';
    }

    echo $html;
}
