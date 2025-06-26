<?php
$title     ??= '';
$content   ??= '';
$author    ??= 'Unknown';
$date      ??= '';
$updatedAt ??= '';
?>
<main>
    <article>
        <nav class="article-navigation">
            <a href="/" class="articles-link">← All Articles</a>
        </nav>

        <header>
            <h1><?= htmlspecialchars($title) ?></h1>
            <div class="article-meta">
                <?php if (!empty($author)): ?>
                    <address class="author">
                        By <span rel="author"><?= htmlspecialchars($author) ?></span>
                    </address>
                <?php endif; ?>

                <?php if (!empty($date)): ?>
                    <div class="published-date">
                        Published:
                        <time datetime="<?= htmlspecialchars($date) ?>">
                            <?= date('F j, Y', strtotime($date)) ?>
                        </time>
                    </div>
                <?php endif; ?>

                <?php if (!empty($updatedAt) && $updatedAt != $date): ?>
                    <div class="updated-date">
                        Updated:
                        <time datetime="<?= date('Y-m-d', $updatedAt) ?>">
                            <?= date('F j, Y', $updatedAt) ?>
                        </time>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <section class="article-content">
            <?= $content ?>
        </section>

        <footer>
            <nav class="article-navigation">
                <a href="/" class="articles-link">← All Articles</a>
            </nav>
        </footer>
    </article>
</main>