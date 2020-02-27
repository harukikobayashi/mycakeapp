<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?=$this->Form->create($entity,
        ['type'=>'post',
        'url'=>['controller'=>'People',
                'action'=>'update']]) ?>
    <?=$this->Form->hidden('People.id') ?>
    <div>name</div>
    <div><?=$this->Form->text('People.name') ?></div>
    <div>mail</div>
    <div><?=$this->Form->text('People.mail') ?></div>
    <div>age</div>
    <div><?=$this->Form->text('People.age') ?></div>
    <div><?=$this->Form->submit('送信') ?></div>
    <?=$this->Form->end() ?>
</body>
</html>