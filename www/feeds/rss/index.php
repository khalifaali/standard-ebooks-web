<?
require_once('Core.php');

?><?= Template::Header(['title' => 'RSS 2.0 Ebook Feeds', 'description' => 'A list of available RSS 2.0 feeds of Standard Ebooks ebooks.']) ?>
<main>
	<section class="narrow">
		<h1>RSS 2.0 Ebook Feeds</h1>
		<p>RSS feeds are the predecessors of <a href="/feeds/atom">Atom feeds</a>. They contain less information than Atom feeds, but might be better supported by some news readers.</p>
		<?= Template::FeedHowTo() ?>
		<section id="general-feeds">
			<h2>General Feeds</h2>
			<ul class="feed">
				<li>
					<p><a href="/feeds/rss/new-releases">New releases</a> (Public)</p>
					<p class="url"><?= SITE_URL ?>/feeds/rss/new-releases</p>
					<p>The fifteen latest Standard Ebooks, most-recently-released first.</p>
				</li>
				<li>
					<p><a href="/feeds/rss/all">All ebooks</a></p>
					<p class="url"><?= SITE_URL ?>/feeds/rss/all</p>
					<p>All Standard Ebooks, most-recently-released first.</p>
				</li>
			</ul>
		</section>
		<section id="ebooks-by-subject">
			<h2>Ebooks by subject</h2>
			<ul class="feed">
				<? foreach(SE_SUBJECTS as $subject){ ?>
				<li>
					<p><a href="/feeds/rss/subjects/<?= Formatter::MakeUrlSafe($subject) ?>"><?= Formatter::ToPlainText($subject) ?></a></p>
					<p class="url"><?= SITE_URL ?>/feeds/rss/subjects/<?= Formatter::MakeUrlSafe($subject) ?></p>
				</li>
				<? } ?>
			</ul>
		</section>
	</section>
</main>
<?= Template::Footer() ?>
