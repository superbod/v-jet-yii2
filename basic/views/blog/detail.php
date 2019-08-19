<?php
use yii\helpers\Html;
$this->registerCssFile('/css/blog.css');
$this->registerJsFile('/js/detail.js');
?>
<div class="post-block">
    <div class="detail-element">

        <h3><?=$data['post'][0]['name']?></h3>
        <div class="text-block"><?=$data['post'][0]['text']?></div>
        <div class="date-block"><?=$data['post'][0]['date']?></div>
        <div class="comments-number">Total comments <span id="count-comments"><?=$data['post'][0]['comment_numbers']?></span></div>
        <div class="detail-author">Posted By <?=$data['post'][0]['author_name']?></div>
    </div>
</div>
<h5 class="block-header">Comments</h5>
<div class="comments">
    <?php foreach ($data['comments'] as $item): ?>
        <div id="4" class="comment">
            <span class="comment-author"><?=$item['author_name']?> - </span>
            <span class="comment-text"><?=$item['comment']?></span>
        </div>
    <?php endforeach; ?>
</div>

<div class="create-comment">
    <h5 class="block-header">Add Yor Comment</h5>
    <form id="comment-form">
        <textarea id="post-text" type="text" name="comment" placeholder="your comment"></textarea>
        <input id="post-author" type="text" name="author_name" placeholder="author name">
        <button>Add comment</button>
    </form>
</div>
