<?php $this->load->view('template/header', ['title' => 'Page Blogs']) ?>
<div class="page-blogs">
    <div class="container">
        <p>
            <form method="GET" action="<?=base_url('blog')?>">
                <input type="text" name="keyword" value="<?=$keyword?>" placeholder="<?=lang('blog_title')?>"/>
                <input type="submit" value="<?=lang('common_search')?>"/>
            </form>
        </p>
        <?php if ($blogs) { ?>
            <?php foreach ($blogs as $blog) { ?>
                <p>
                    <a href="<?=base_url('blog/view/' . $blog->id)?>"><h3><?=$blog->title?></h3></a>
                    <div><?=$blog->content?></div>
                </p>
            <?php } ?>
        <?php } else { ?>
            <p><?=lang('not_data_blogs')?></p>
        <?php } ?>
        <?php if ($total_blogs > count($blogs)) { ?>
            <p>
                <?=$this->pagination->create_links()?>
            </p>
        <?php } ?> 
    </div>
</div>
<?php $this->load->view('template/footer') ?>