<?php
/**
 * Home page template
 *
 * @var array $allArticles Array of article metadata
 */
$allArticles ??= [];
?>
<main>
    <section class="articles">
        <h2>Articles</h2>

        <?php if (!empty($allArticles)): ?>
            <div class="search-container">
                <input type="text" id="article-search" placeholder="Search articles..." aria-label="Search articles">
                <div id="search-results-count"></div>
            </div>

            <ul class="article-list" id="article-list">
                <?php foreach ($allArticles as $article): ?>
                    <li class="article-item" data-title="<?= htmlspecialchars(strtolower($article['title'])) ?>">
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
            
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const searchInput = document.getElementById('article-search');
                    const articleItems = document.querySelectorAll('.article-item');
                    const resultCount = document.getElementById('search-results-count');
                    const totalArticles = articleItems.length;
                    
                    // Show initial count
                    updateResultCount(totalArticles);
                    
                    searchInput.addEventListener('input', function() {
                        const query = this.value.trim().toLowerCase();
                        let visibleCount = 0;
                        
                        articleItems.forEach(item => {
                            const title = item.getAttribute('data-title');
                            const isMatch = title.includes(query);
                            
                            item.style.display = isMatch ? 'block' : 'none';
                            
                            if (isMatch) {
                                visibleCount++;
                            }
                        });
                        
                        updateResultCount(visibleCount);
                    });
                    
                    function updateResultCount(count) {
                        if (count === totalArticles) {
                            resultCount.textContent = '';
                        } else {
                            resultCount.textContent = `Showing ${count} of ${totalArticles} articles`;
                        }
                    }
                });
            </script>
        <?php else: ?>
            <p>No articles were found.</p>
        <?php endif; ?>
    </section>
</main>
