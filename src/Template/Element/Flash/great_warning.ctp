<div class="alert alert-warning alert-dismissible great" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <?php foreach($message as $row): ?>
        <p class="text-center"><span class="glyphicon glyphicon-warning-sign flash-icon"></span><?php echo h($row); ?></p>
    <?php endforeach; ?>
</div>