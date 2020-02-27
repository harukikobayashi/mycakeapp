<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title ?></title>
</head>
<body>
    <table>
    <?=$this->Html->tableHeaders(["title", 'name', 'mail'],
    ['style'=>['background:#006;color:white']]) ?>
    <?=$this->Html->tableCells([
    ["this is sample", "taro", "taro@yamada"],
    ["Hello!", "hanako", "hanako@flower"],
    ["test, test.", "sachiko", "sachi@co.jp"],
    ["last!.", "jiro", "jiro@change"],
    ],
    ['style'=>['background:#ccf']],
    ['style'=>['background:#dff']]) ?>
    </table>
    <ul>
    <?=$this->Html->nestedList(
        ['first line', 'second line',
        'third line'=>['one', 'two', 'three']]
    ) ?>
    </ul>
    <p>
    <?=$this->Url->build(['controller' => 'hello', 'action' => 'show',
     '?' => ['id'=>'taro', 'password'=>'yamada123']]) ?></p>
     <p>
    <?=$this->Url->build(['controller' => 'hello', 'action' => 'show',
     '_ext' => 'png', 'sample']) ?></p>
    <p><?=$this->Text->autoLinkUrls('http://google.com') ?></p>
    <p><?=$this->Text->autoLinkEmails('harukikobayashi0306@gmail.com') ?></p>
    <?=$this->Text->autoParagraph("one\ntwo\nthree") ?>
    <p>金額は、<?=$this->Number->currency(1234567, 'JPY') ?>です。</p>
    <p>2桁で表すと、<?=$this->Number->precision(1234.56789, 2) ?>です。</p>
    <p>割合は、<?=$this->Number->toPercentage(0.123456789, 2, ['multiply'=>'true']) ?>です。</p>
    
</body>
</html>