<?php
$title     ??= '';
$content   ??= '';
$author    ??= 'Unknown';
$date      ??= '';
$updatedAt ??= '';
?>
<main>
    <article class="article-content board-panel">
        <header>
            <h1 class="split-flap"><?= htmlspecialchars($title) ?></h1>
            <div class="article-meta">
                <div>
                    <time datetime="<?= date('c', strtotime($date)) ?>">
                        DEPARTURE: <?= date('d/m/Y H:i T', strtotime($date)) ?>
                    </time>
                </div>
                <?php if (!empty($author)): ?>
                    <div class="author">
                        CONDUCTOR: <span><?= htmlspecialchars($author) ?></span>
                    </div>
                <?php endif; ?>
                <?php if (!empty($updatedAt) && $updatedAt != $date): ?>
                    <div>
                        <small>REVISED: <?= date('d/m/Y H:i T', $updatedAt) ?></small>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <div class="matrix-text">
            <?= $content ?>
        </div>
    </article>

    <div class="back-link">
        <a href="/" class="articles-link">← RETURN TO DEPARTURES</a>
    </div>
</main>
