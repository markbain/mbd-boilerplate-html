<?php 
	// Vars
	$title = 'MBD Boilerplate HTML';
	$description = 'The greatest boilerplate under the sun!';
	$keywords = 'Boilerplate, Cool, Great';
	$body_class = 'frontpage';
	include_once('./includes/header.php');
?>

<div class="section alt">
	<div class="container">
		<h1>CSS Basic Elements</h1> 
		<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
		<hr /> 
		<h1>Heading 1</h1>
		<h2>Heading 2</h2>
		<h3>Heading 3</h3>
		<h4>Heading 4</h4>
		<h5>Heading 5</h5>
		<h6>Heading 6</h6> 
		<small><a href="#wrapper">[top]</a></small>
	</div><!-- .container -->
</div><!-- .section -->

<div class="section">
	<div class="container">	
		<h1 id="paragraph">Paragraph</h1>
		<img src="assets/images/og-image.png" alt="CSS | God's Language" />
		<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
		<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
		<small><a href="#wrapper">[top]</a></small>
	</div><!-- .container -->
</div><!-- .section -->

<div class="section">
	<div class="container">	 
		<h1 id="list_types">List Types</h1>
		 
		<h3>Definition List</h3>
		<dl>
			<dt>Definition List Title</dt>
			<dd>This is a definition list division.</dd>
		</dl>
		 
		<h3>Ordered List</h3>
		<ol>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ol>
		 
		<h3>Unordered List</h3>
		<ul>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
		</ul>

		<small><a href="#wrapper">[top]</a></small>
	</div><!-- .container -->
</div><!-- .section --> 
<div class="section">
	<div class="container">	 
		<h1 id="form_elements">Fieldsets, Legends, and Form Elements</h1>
		 
		<fieldset>
			<legend>Legend</legend>
		 
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>
		 
			<form>
				<h2>Form Element</h2>
		 
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>
		 
				<p><label for="text_field">Text Field:</label>
				<input type="text" id="text_field" /></p>
		 
				<p><label for="text_area">Text Area:</label>
				<textarea id="text_area"></textarea></p>
		 
				<p><label for="select_element">Select Element:</label>
					<select name="select_element">
					<optgroup label="Option Group 1">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</optgroup>
					<optgroup label="Option Group 2">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</optgroup>
				</select></p>
		 
				<p><label for="radio_buttons">Radio Buttons:</label>
					<input type="radio" class="radio" name="radio_button" value="radio_1" /> Radio 1<br/>
						<input type="radio" class="radio" name="radio_button" value="radio_2" /> Radio 2<br/>
						<input type="radio" class="radio" name="radio_button" value="radio_3" /> Radio 3<br/>
				</p>
		 
				<p><label for="checkboxes">Checkboxes:</label>
					<input type="checkbox" class="checkbox" name="checkboxes" value="check_1" /> Radio 1<br/>
						<input type="checkbox" class="checkbox" name="checkboxes" value="check_2" /> Radio 2<br/>
						<input type="checkbox" class="checkbox" name="checkboxes" value="check_3" /> Radio 3<br/>
				</p>
		 
				<p><label for="password">Password:</label>
					<input type="password" class="password" name="password" />
				</p>
		 
				<p><label for="file">File Input:</label>
					<input type="file" class="file" name="file" />
				</p>
		 
		 
				<p><input class="button" type="reset" value="Clear" /> <input class="button" type="submit" value="Submit" />
				</p>
		 
		 
		 
			</form>
			<h2>Inline Forms</h2>
			<form class="inline-a"> 
				<p><label for="text_field">Text Field:</label>
				<input type="text" id="text_field" /></p>		 
				<p><label for="text_field">Text Field:</label>
				<input type="text" id="text_field" /></p>						
				<p><label for="text_field">Text Field:</label>
				<input type="text" id="text_field" /></p>	 
				<p><input class="button" type="submit" value="Submit" />
				</p>
			</form>
			<form class="inline-b"> 	 
				<p><label for="text_field">Text Field:</label>
				<input type="text" id="text_field" /></p>						
				<p><label for="text_field">Text Field:</label>
				<input type="text" id="text_field" /></p>	 
				<p><input class="button" type="submit" value="Submit" />
				</p>
			</form>
		 
		</fieldset>
		 
		<small><a href="#wrapper">[top]</a></small>
	</div><!-- .container -->
</div><!-- .section --> 

<div class="section">
	<div class="container">	 
		<h1 id="tables">Tables</h1>
		 
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
			</tr>
			<tr>
				<td>Division 1</td><td>Division 2</td><td>Division 3</td>
			</tr>
			<tr class="even">
				<td>Division 1</td><td>Division 2</td><td>Division 3</td>
			</tr>
			<tr>
				<td>Division 1</td><td>Division 2</td><td>Division 3</td>
			</tr>
		 
		</table>
		 
		<small><a href="#wrapper">[top]</a></small>
	</div><!-- .container -->
</div><!-- .section --> 

<div id="signup" class="section">
	<div class="container">	 
		<h1 id="mailchimp"><i class="fa fa-envelope"></i> MailChimp Form</h1>
		<p>Bacon ipsum dolor amet frankfurter ham ham hock fatback, venison chicken jerky shankle chuck drumstick. Tenderloin biltong turducken, picanha doner pork loin ham hock andouille pig cow drumstick ribeye turkey. Capicola bacon bresaola, pancetta swine andouille venison short ribs beef ribs salami. Shankle filet mignon pig doner t-bone ham hock beef ribs spare ribs ribeye capicola shoulder meatloaf. Pancetta leberkas swine, ground round cow prosciutto jowl biltong pork belly.</p>
<form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<p class="username"> 
							  <label for="usernamesignup" class="uname" data-icon="u"><i class="fa fa-user"></i> First Name</label>
							  <input id="usernamesignup" name="FNAME" required="required" type="text" placeholder="Jane" />
						</p>

						 <p class="username-last"> 
							  <label for="username-lastsignup" class="uname" data-icon="u"><i class="fa fa-user"></i> Second Name</label>
							  <input id="username-lastsignup" name="LNAME" required="required" type="text" placeholder="Smith" />
						</p>						 

						<p class="emailaddress"> 
							  <label for="emailsignup" class="youmail" data-icon="e" ><i class="fa fa-envelope"></i> Email Address</label>
							  <input id="emailsignup" name="EMAIL" required="required" type="email" placeholder="your-email@example.com"/> 
						</p>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    

						 <p class="signin"> 
						 <input type="submit" class="cta button cta-primary" value="Sign Up!"/>						
						 </p>

					</form> 
					<p class="post-form-content">Don't like Spam...</p>
					

			 
		<small><a href="#wrapper">[top]</a></small>
	</div><!-- .container -->
</div><!-- .section -->

<div class="section">
	<div class="container">	 
		<h1 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>
		 
		<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>
		 
		<pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>
		 
		<blockquote>
			"This stylesheet is going to help so freaking much." <br />-Blockquote
		</blockquote>
		 
		<small><a href="#wrapper">[top]</a></small>

	</div><!-- .container -->
</div><!-- .section --> 
<?php include_once('./includes/footer.php'); ?>