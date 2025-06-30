<?php
$title     ??= '';
$content   ??= '';
$author    ??= 'Unknown';
$date      ??= '';
$updatedAt ??= '';
?>
<main>
    <article class="article-content">
        <header>
            <h1><?= htmlspecialchars($title) ?></h1>
            <div class="article-meta">
                <div>
                    <time datetime="<?= date('c', strtotime($date)) ?>">
                        Published: <?= date('d/m/Y', strtotime($date)) ?>
                    </time>
                </div>
                <?php if (!empty($author)): ?>
                    <div class="author">
                        Author: <span><?= htmlspecialchars($author) ?></span>
                    </div>
                <?php endif; ?>
                <?php if (!empty($updatedAt) && $updatedAt != $date): ?>
                    <div>
                        <small>Revised: <?= date('d/m/Y H:i T', $updatedAt) ?></small>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <div>
            <?= $content ?>
        </div>
    </article>

    <div class="back-link">
        <a href="/" class="articles-link">← Back to home</a>
    </div>
</main>
