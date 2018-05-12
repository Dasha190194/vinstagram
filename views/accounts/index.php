<div class="col-md-3">
    <div class="list-group">
        <?php foreach ($category as $ct): ?>
            <a href="#" class="list-group-item list-group-item-action">
                <?= $ct->name?>
            </a>
        <?php endforeach;?>
    </div>
</div>
<div class="col-md-8">
    <div class="tabbable tabs">
        <div class="tab-content label-primary">
            <div class="tab-pane active" id="all">
                <ul class="thumbnails">
                    <?php foreach($users as $user): ?>
                        <li class="col-sm-4 col-xs-12">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#" ><img src="img/img-12.png" alt=""></a>
                                    <h4><?= $user->username?></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="#" class="btn btn-large btn-primary" style="color: #a2a3a3;background-color: #fff;">SHOW MORE</a>
            </div>
        </div>
    </div>
</div>


