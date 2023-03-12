<ul>
    <?php for ($i = 1; $i <= 5; $i++): ?>
    <li><?= $i ?></li>
    <?php endfor ?>
</ul>

<?php
$arr = ['user1', 'user2', 'user3'];
?>

<?php foreach ($arr as $elem): ?>
<div>
    <h2><?= $elem ?></h2>
    <p>text</p>
</div>
<?php endforeach;?>


<?php
$arr1 = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];
?>
<?php foreach ($arr1 as $user): ?>
<div>
    <p>name: <?= $user['name'] ?></p>
    <p>age: <?= $user['age'] ?></p>
</div>
<?php endforeach;?>
