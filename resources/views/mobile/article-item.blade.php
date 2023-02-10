<div class="article-item">
    <a class="thumb" href="<?php echo $article->link; ?>"><img src="<?php echo $article->thumb; ?>" alt="<?php echo $article->title; ?>"/></a>
    <div class="info">
        <div class="title">
            <a href="<?php echo $article->link; ?>">
                <?php
                    if(strlen($article->title)>24){
                        echo mb_substr($article->title,0,24,"utf-8") . '...';
                    }else{
                        echo $article->title;
                    }
                ?>
            </a>
        </div>
        <div class="meta">
            <span><?php echo date('Y年m月d日',strtotime($article->created_at)); ?></span>
            <span class="glyphicon glyphicon-eye-open"><?php echo $article->hits; ?></span>
        </div>
    </div>
</div>
