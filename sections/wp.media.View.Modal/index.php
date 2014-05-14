<h3>wp.media.View.Modal</h3>
<p>A view that creates a modal. The modal can be closed and reopened without changing markup (i.e. losing state). The default media experience uses it as a wrapper, however it can be used outside the media context.</p>
<div class="example">
	<h3>Example: Open a modal</h3>
	<h4>LIVE EXAMPLE <a class="add-new-h2" target="_blank" href="<?php echo WPMT::get_example_url( WPMT::get_current_section(), 1 ) ?>">open in a new window</a></h4>
	<iframe class="iframe-interactive-demo" src="<?php echo WPMT::get_example_url( WPMT::get_current_section(), 1 ) ?>"></iframe>
	<h4>Markup</h4>
	<pre><code class="language-html"><?php wpmt()->the_section_example_markup( WPMT::get_current_section(), 1 ) ?></code></pre>
	<h4>Javascript</h4>
	<pre><code class="language-javascript"><?php wpmt()->the_section_example_javascript( WPMT::get_current_section(), 1 ) ?></code></pre>
</div>