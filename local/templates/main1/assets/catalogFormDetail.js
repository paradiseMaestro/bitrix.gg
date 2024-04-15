// const form = document.querySelector('.partners-requisites__form');

// document.getElementById('formAddNew')

// if (form) {
    let jsonData;
    document.getElementById('formAddNew').addEventListener('submit', function () {
        let formData = new FormData(this);
        let collectedData = Object.fromEntries(formData.entries());

        jsonData = JSON.stringify(collectedData);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/main1/form_question.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onload = function () {
console.log(xhr.status)

            if (xhr.status === 200) {
                // let response = JSON.parse(xhr.responseText);

                // console.info(JSON.parse(scatterSeries));

// console.log(xhr.status)
                // if ('errors' in response) {
                //     alert(response.errors.join('\n'));
                // }
            } else {
                console.log('Произошла ошибка при отправке формы: ' + xhr.status);
            }
        };
        xhr.send(jsonData);
    });
// }



// <?php

// use Bitrix\Main\Loader;

// require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
// header('Content-Type: application/json; charset=UTF-8');

// $json = file_get_contents('php://input');
// $obj = json_decode($json, TRUE);

// if($obj['sessid'] !== bitrix_sessid()){
//     exit;
// }

// // $err = [];

// // if (!preg_match('/^[а-яё]+$/iu', $obj['name'])) {
// //     $err[] = "Имя может содержать только буквы русского алфавита";
// // }
// // if (!preg_match('^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$', $obj['phone'])) {
// // if (!preg_match('/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/', $obj['phone'])) {
// //     $err[] = "Неверный формат номера телефона";
// // }
// // if (!filter_var($obj['email'], FILTER_VALIDATE_EMAIL)) {
// //     $err[] = "Неверный формат электронной почты";
// // }

// // if (check_email($obj['email'])) {
// //     $err[] = "Неверный формат электронной почты";
// // }

// // if (!empty($err)) {
// //     echo json_encode(['err' => $err]);
// //     exit;
// // }

// $strData = '';
// foreach($obj as $key => $value){
//     // $strData .= $key . ':' . $value . '\n';
//     $strData .= $key . ':' . $value . PHP_EOL;
// }
// $strData = htmlspecialchars($strData);

// $data = [
//     "IBLOCK_ID" => 5,
//     "NAME" => "Данные с формы",
//     "PREVIEW_TEXT" => $strData,
// ];

// Loader::includeModule('iblock');


// $addNew = new CIBlockElement;

// if (!$addNew->Add($data)){
//     $err[] = $addNew->LAST_ERROR;
//     echo json_encode(['err' => $err]);
//     exit();
// }

// echo json_encode('Element save');
// exit();