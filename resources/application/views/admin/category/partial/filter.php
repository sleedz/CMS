<ul>
	<li>Język
		<select name="language" id="content-language">
			<option value="all" <?= form::filter('language') == 'all' ? 'selected="selected"' : ''; ?>>Wszystkie</option>
			<option value="pl" <?= form::filter('language') == 'pl' ? 'selected="selected"' : ''; ?>>Polski</option>
			<option value="en" <?= form::filter('language') == 'en' ? 'selected="selected"' : ''; ?>>Angielski</option>
			<!-- <option value="de" <?= form::filter('language') == 'de' ? 'selected="selected"' : ''; ?>>Niemiecki</option> -->
		</select>
	</li>
</ul>