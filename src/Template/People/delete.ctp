<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>※以下のレコードを削除しますか？</p>
    <div>id: <?=$entity['id'] ?></div>
    <div>name: <?=$entity['name'] ?></div>
    <div>mail: <?=$entity['mail'] ?></div>
    <div>age: <?=$entity['age'] ?></div>
    <hr>
    <?=$this->Form->create($entity,
        ['type'=>'post',
        'url'=>['controller'=>'People',
                'action'=>'destroy']]) ?>
    <?=$this->Form->hidden('People.id') ?>
    <div><?=$this->Form->submit('削除する') ?></div>
    <?=$this->Form->end() ?>
</body>
</html>