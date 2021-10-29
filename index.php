<?php
    /* Bokuno DARLING
    * 
    * @package DARLING
    * @author 狱杰1Jnver
    * @version v.build
    * @link https://yujienb.cn/
    */
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('includes/header.php');
?>
        <!-- 呐,接下来就是重要的东西啦~！-->
        <main class="home-post mdui-typo">
        <?php while($this->next()): ?>
            <article class="mdui-col-xs-4 mdui-hoverable">
                <div class="article-info">
                    <div class="article-title">
                        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </div>
                    <div class="article-state">
                        <div class="mdui-chip article-state-time">
                            <span class="mdui-chip-icon"><i class="mdui-icon material-icons">access_time</i></span>
                            <span class="mdui-chip-title"><?php $this->date(); ?></span>
                        </div>
                        <div class="mdui-chip article-comments">
                            <span class="mdui-chip-icon"><i class="mdui-icon material-icons">comment</i></span>
                            <span class="mdui-chip-title"><?php $this->commentsNum('暂无评论', '1条评论', '%d'); ?></span>
                        </div>
                        <div class="mdui-chip article-author">
                            <span class="mdui-chip-icon"><i class="mdui-icon material-icons">account_circle</i></span>
                            <span class="mdui-chip-title"><?php $this->author(); ?></span>
                        </div>
                    </div>
                    <div class="article-divider">
                        <div class="mdui-divider"></div>
                    </div>
                    <div class="article-des">
                        <?php $this->excerpt(140, '...'); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
        </main>

    </div>
<?php $this->need('includes/footer.php');?>