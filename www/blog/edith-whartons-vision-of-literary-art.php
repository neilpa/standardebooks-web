<?
// NOTE: Missing Hudson River Bracketed!
$ebookIds = [288, 485, 289, 908, 565];
$carousel = Db::Query('SELECT * from Ebooks where EbookId in ' . Db::CreateSetSql($ebookIds), $ebookIds, Ebook::class);
?>
<?= Template::Header(['title' => 'Joyce’s Ulysses, the Rubáiyát, and “Yes”', 'css' => ['/css/blog.css'], 'highlight' => '', 'description' => '']) ?>
<main>
	<section class="narrow blog">
		<nav class="breadcrumbs"><a href="/blog">Blog</a> →</nav>
		<h1>Edith Wharton’s Vision of Literary Art</h1>
		<p class="byline">By Erin Endrei</p>
		<?= Template::DonationCounter() ?>
		<?= Template::DonationProgress() ?>
		<div class="editors-note">
			<p>This article first appeared in the January 2025 edition of our <a href="/newsletter">email newsletter</a>.</p>
		</div>
		<p>Newland Archer, the protagonist of Edith Wharton’s 1920 novel <em><a href="https://standardebooks.org/ebooks/edith-wharton/the-age-of-innocence">The Age of Innocence</a></em>, is shown, on one occasion, in conversation with someone of a social class lower than his own. He’s talking to a failed writer, Winsett, who criticizes his engagement with European culture.</p>
		<blockquote>
		<p>Culture! Yes—if we had it! But there are just a few little local patches, dying out here and there for lack of—well, hoeing and cross-fertilising: the last remnants of the old European tradition that your forebears brought with them. You’re a pitiful little minority: you’ve got no centre, no competition, no audience. You’re like the pictures on the walls of a deserted house: <em>The Portrait of a Gentleman</em>.</p>
		</blockquote>
		<p>(The reference to <em><a href="https://standardebooks.org/ebooks/henry-james/the-portrait-of-a-lady">The Portrait of a Lady</a></em> is an ironic touch, as Wharton had taken Archer’s surname from the protagonist of that celebrated novel.)</p>
		<p>To find the image of a deserted house in <em>The Age of Innocence</em> is an interesting coincidence, as it’s that image that serves as the central symbol of her last two major works, the first of which—<em><a href="https://standardebooks.org/ebooks/edith-wharton/hudson-river-bracketed">Hudson River Bracketed</a></em>—just entered the U.S. public domain and was released by us at Standard Ebooks this January 1.</p>
		<p>Wharton is best remembered for her novels about the social customs of the wealthy in late nineteenth-century New York: these include, alongside <em>The Age of Innocence</em>, 1917’s <em><a href="https://standardebooks.org/ebooks/edith-wharton/the-house-of-mirth">The House of Mirth</a></em>. Those two novels form the basis of the opinion, as <a href="https://www.commentary.org/articles/cynthia-ozick/justice-again-to-edith-wharton/">Cynthia Ozick puts it</a>, that Wharton only had one subject: society. But before either of her two most famous books had appeared, Wharton had written in correspondence—in 1913 or 1914, biographer Hermione Lee says—of her desire to write a “big novel” on a different subject: literature itself.</p>
		<p>The novel called “Literature” was going to be a “<em>Künstlerroman</em>,” charting the growth of an American artist: his humble, but not too humble origins, the trials he’d have to endure in ascending to his trade, and the manner in which he would ply it. Another biographer, Shari Benstock, says that Wharton had outlined the plot and written its first seventy pages by 1915, but <a href="https://storyoftheweek.loa.org/2016/01/writing-war-story.html">her involvement in war relief efforts</a> derailed the project. It took over a decade for her to return to it.</p>
		<p>The initial result was <em>Hudson River Bracketed</em>, to which she’d produce a sequel three years later, <em>The Gods Arrive</em>, its title taken from a verse of <a href="https://standardebooks.org/ebooks/ralph-waldo-emerson">Emerson’s</a>. The protagonist of Wharton’s diptych is a young man, Vance Weston, whose upbringing in a small town in the Middle West of America is both geographically and intellectually remote from all things highbrow. The initial setting resembles that of Sinclair Lewis’s <em><a href="https://standardebooks.org/ebooks/sinclair-lewis/main-street">Main Street</a></em>, which had been the judges’ choice for the 1921 <a href="https://standardebooks.org/collections/pulitzer-prize-for-fiction-winners">Pulitzer Prize</a> that was <a href="https://www.pulitzer.org/article/edith-whartons-age-innocence-celebrates-its-100th-anniversary">ultimately awarded to <em>The Age of Innocence</em></a>.</p>
		<p>Weston initially aspires to be a poet—as Wharton herself had—until he’s told by an aging critic that poetry won’t pay his bills. He tries his hand at novels, achieving his first literary breakthrough with a novel about the life of an upper-class woman, the former owner of an old deserted house, whose portrait overlooks the library in which he’s first introduced to the European literary tradition. The old deserted house and its antiquated architectural style, the titular “Hudson River Bracketed” style, represent the past—or at least <em>a</em> past, of a kind Wharton thought worth remembering.</p>
		<p>To Wharton, whose literary heroes included <a href="https://standardebooks.org/ebooks/honore-de-balzac">Balzac</a>, <a href="https://standardebooks.org/ebooks/gustave-flaubert">Flaubert</a>, <a href="https://standardebooks.org/ebooks/henry-james">Henry James</a>, <a href="https://standardebooks.org/ebooks/anthony-trollope">Trollope</a>, and <a href="https://standardebooks.org/ebooks/william-makepeace-thackeray">Thackeray</a>, modernist affectations fashionable in the late 1920s—like the omission of punctuation, or the use of lowercase letters—were a “sign of fatigue,” as she said in a rare interview less than a year before her death. She’d declared in <em>The Writing of Fiction</em> that “true originality consists not in a new manner but in a new vision.” Many of the “new novelists,” she thought, were all manner, no vision—and sometimes, as with <a href="https://standardebooks.org/ebooks/james-joyce">James Joyce</a> and what she’d called his “<a href="https://standardebooks.org/ebooks/james-joyce/ulysses">laborious monument of school-boy pornography</a>,” no manners.</p>
		<p>When Weston enters the literary marketplace of 1920s New York, a book cannot be praised without being said to have struck a “new note.” But having himself discovered “the Past” in the deserted old house, he is rankled by this cliché; how could American art of any sort succeed if unmoored from that venerable tradition? But he’s also skeptical that what is taken for “new” is actually that, just as Wharton had <a href="https://www.gutenberg.org/cache/epub/72446/pg72446-images.html#Page_12">recorded her skepticism</a> about the “novelty” of the stream-of-consciousness technique. As Weston thinks about his grandmother, who supposes she’s invented a new religion:</p>
		<blockquote>
		<p>Couldn’t she see that, ninety-nine times out of a hundred, it was sheer ignorance and illiteracy that made people call things new—that even in the brick-and-mortar world that was being forever pulled down and rebuilt, the old materials and the old conceptions had to be used again in the rebuilding?</p>
		</blockquote>
		<p>We can end in this connection with <a href="https://standardebooks.org/ebooks/j-w-von-goethe">Goethe’s</a> <em>Faust</em>, an abiding preoccupation of Wharton’s and another point of contact between her earlier and later works. <em>The Age of Innocence</em> opens with Archer attending a production of the operatic adaptation of Goethe’s tragedy; in <em>Hudson River Bracketed</em>, Weston’s mentor and love interest quotes to him the opening stanza of the <a href="https://www.gutenberg.org/cache/epub/14591/pg14591-images.html#PROLOGUE_IN_HEAVEN">Prologue in Heaven</a>.</p>
		<p>To adapt a phrase from the latter, Wharton’s aim in her last major project was not to “strike a new note,” to conform to new trends by distinguishing herself from her early works; but “<em><a href="https://www.projekt-gutenberg.org/goethe/faust1/chap003.html">nach alter Weise zu tönen</a></em>”—to “sound an old note.” The work was supposed to fulfill, in the old way, an old aim: not just the aim of her own past, abandoned due to the war, but also a general aim imposed by the only literary tradition she thought worthy of respect.</p>
		<p><em>Hudson River Bracketed</em> is long out of print. Wharton patently lost the critical and commercial “<em>Wettgesang</em>” of the 1930s; even her sympathizers tend to admit that she’s in no way a star of that period, so the analogy to the Prologue in Heaven falls (or sounds) very flat.</p>
		<p>But whether Wharton’s second-last work falls entirely flat too is something that can be judged, if at all, only in the old way, by reading it. This wasno’t very easy to do until January 1, but now you can read our <a href="https://standardebooks.org/ebooks/edith-wharton/hudson-river-bracketed">new ebook edition for free</a> at Standard Ebooks.</p>
		<h2 id="ebooks-in-this-newsletter">Free ebooks in this post</h2>
		<?= Template::EbookCarousel(['carousel' => $carousel]) ?>
	</section>
</main>
<?= Template::Footer() ?>
