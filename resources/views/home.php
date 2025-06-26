<?php
/**
 * Home page template
 *
 * @var array $allArticles Array of article metadata
 */
$allArticles ??= [];
?>
<main>
    <header>
        <h1>Marcus Coupland</h1>
        <p>Blog version &infin;</p>
    </header>

    <section class="articles">
        <h2>Articles</h2>

        <?php if (empty($allArticles)): ?>
            <p>No articles were found.</p>
        <?php else: ?>
            <ul class="article-list">
                <?php foreach ($allArticles as $article): ?>
                    <li>
                        <a href="/articles/<?= htmlspecialchars($article['slug']) ?>/" class="article-link">
                            <article>
                                <header>
                                    <h3><?= htmlspecialchars($article['title']) ?></h3>
                                </header>
                                <?php if (!empty($article['excerpt'])): ?>
                                    <div class="article-excerpt">
                                        <p><?= htmlspecialchars($article['excerpt']) ?></p>
                                    </div>
                                <?php endif; ?>
                                <footer>
                                    <p>
                                        <small>
                                            By <?= htmlspecialchars($article['author']) ?>
                                            <?php if (!empty($article['date'])): ?>
                                                on
                                                <time datetime="<?= htmlspecialchars($article['date']) ?>">
                                                    <?= date('F j, Y', strtotime($article['date'])) ?>
                                                </time>
                                            <?php endif; ?>
                                        </small>
                                    </p>
                                </footer>
                            </article>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</main>
