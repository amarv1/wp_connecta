<aside class="b-blog__aside">
					<form class="b-blog__aside-search wow zoomInUp" data-wow-delay="0.3s" action="/" method="post">
						<div>
							<input type="text" name="search" value="" placeholder="Search" />
							<button type="submit"><span class="fa fa-search"></span></button>
						</div>
					</form>
					<div class="b-blog__aside-categories wow zoomInUp" data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">KATEGORIJE</h2>
						</header>
						<nav>
							<ul class="b-blog__aside-categories-list">
								<?php wp_list_categories(); ?>
								<li><a href="#">Savjeti za kupovinu vozila</a></li>
								<li><a href="#">Novosti o vozilima</a></li>
								<li class="m-active"><a href="#">Testovi</a></li>
								<li><a href="#">Savjeti za gume</a></li>
								<li><a href="#">Analize </a></li>
							</ul>
						</nav>
					</div>
					<div class="b-blog__aside-archives wow zoomInUp" data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">ARHIVE</h2>
						</header>
						<nav>
							<ul class="b-blog__aside-categories-list">
								<li><a href="#">April 2017</a></li>
								<li><a href="#">Mart 2017</a></li>
								<li class="m-active"><a href="#">Februar 2017</a></li>
								<li><a href="#">Januar 2017</a></li>
							</ul>
						</nav>
					</div>
					<div class="b-blog__aside-popular wow zoomInUp" data-wow-delay="0.3s">
						<header class="s-lineDownLeft">
							<h2 class="s-titleDet">POPULARNO</h2>
						</header>
						<div class="b-blog__aside-popular-posts">
							<div class="b-blog__aside-popular-posts-one">
								<img class="img-responsive" src="media/blog/ford_focus.jpg" alt="merc" />
								<h4><a href="article.html">Testirali smo Novog Forda</a></h4>
								<div class="b-blog__aside-popular-posts-one-date"><span class="fa fa-calendar-o"></span>9 Septembar 2017</div>
							</div>
							<div class="b-blog__aside-popular-posts-one">
								<img class="img-responsive" src="media/blog/testiranje_guma.jpg" alt="outlander" />
								<h4><a href="article.html">Zimske Nokian Gume</a></h4>
								<div class="b-blog__aside-popular-posts-one-date"><span class="fa fa-calendar-o"></span>2 Oktobar 2017</div>
							</div>
						</div>
					</div>
				</aside>