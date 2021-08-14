<h3>Đây là home</h3>

<?php foreach($data['result'] as $item): ?>
<p>Tên sản phẩm: <?= $item['tenmon']?></p>
<p>Số lượng sản phẩm: <?= $item['anhmon']?></p>
<a href="?controller=home&action=index&name=long">Click</a>
<?php endforeach; ?>