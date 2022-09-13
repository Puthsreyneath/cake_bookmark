<?php
/**
 * @var  App\Model\Entity\Bookmark $tags
 * @var  App\Model\Entity\Bookmark $bookmarks
 */
?>
<h1>
    Bookmarks tagged with <?= $this->Text->toList(h($tags)) ?>
</h1>

<section>
    <?php foreach ($bookmarks as $bookmark) : ?>
    <article>
<!--        use the HtmlHelper to create a link-->
        <h4>
            <?= $this->Html->link($bookmark->title, $bookmark->url) ?>
        </h4>
        <small>
            <?= h($bookmark->url) ?>
        </small>
<!--        use TextHelper to format text-->
        <?= $this->Text->autoParagraph(h($bookmark->description)) ?>
    </article>
    <?php endforeach; ?>
</section>
