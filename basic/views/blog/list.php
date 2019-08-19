<?php
use yii\helpers\Html;
$this->registerCssFile('/css/blog.css');
$this->registerCssFile('/css/slick.css');
$this->registerJsFile('/js/slick.min.js');
$this->registerJsFile('/js/list.js');
?>
    <div id="blog-slider">
        <?php foreach ($sliderItems as $item): ?>
            <div class="slider-element">
                <a id="<?=$item['id']?>" class="slide-name" href="/blog/detail?id=<?=$item['id']?>" tabindex="0"><?=$item['name']?></a>
                <span class="slide_text"><?=$item['text']?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="blog-list">
        <?php foreach ($blogItems as $item): ?>
            <div class="blog-element">
                <a  class="post-name" href="/blog/detail?id=<?=$item['id']?>" id="<?=$item['id']?>"><?=$item['name']?></a>
                <div><?=substr($item['text'], 0, 165)?></div>
                <div class="bottom-block">
                    <div class="publish-date"><?=$item['date']?></div>
                    <div class="comment-numbers"><?=$item['comment_numbers']?> comments</div>
                    <div class="author-name">Posed By <?=$item['author_name']?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="create-post">
        <h5> Add New Post </h5>
        <form id="post-form">
            <textarea id="post-text" type="text" name="text" placeholder="your post"></textarea>
            <input id="post-author" type="text" name="author_name" placeholder="author name">
            <input id="post-name" type="text" name="name" placeholder="post name">
            <button>Create post</button>
        </form>
    </div>


    <ul>
        <?php /*foreach ($blog as $item): */?><!--
            <li>
                <?/*= Html::encode("{$item->author_name} ({$item->text})") */?>:
                <?/*= $item->date */?>
            </li>
        --><?php /*endforeach; */?>
    </ul>

