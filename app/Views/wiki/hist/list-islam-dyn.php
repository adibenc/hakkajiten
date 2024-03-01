<?= $this->extend('layouts/wiki') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
	<main id="content" class="mw-body" role="main">
		<header class="mw-body-header vector-page-titlebar">
			<nav role="navigation" aria-label="Contents" class="vector-toc-landmark">

				<div id="vector-page-titlebar-toc"
					class="vector-dropdown vector-page-titlebar-toc vector-button-flush-left">
					<input type="checkbox" id="vector-page-titlebar-toc-checkbox" role="button" aria-haspopup="true"
						data-event-name="ui.dropdown-vector-page-titlebar-toc" class="vector-dropdown-checkbox "
						aria-label="Toggle the table of contents">
					<label id="vector-page-titlebar-toc-label" for="vector-page-titlebar-toc-checkbox"
						class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet"
						aria-hidden="true"><span
							class="vector-icon mw-ui-icon-listBullet mw-ui-icon-wikimedia-listBullet"></span>

						<span class="vector-dropdown-label-text">Toggle the table of contents</span>
					</label>
					<div class="vector-dropdown-content">


						<div id="vector-page-titlebar-toc-unpinned-container" class="vector-unpinned-container">
						</div>

					</div>
				</div>

			</nav>
			<h1 id="firstHeading" class="firstHeading mw-first-heading"><span class="mw-page-title-main">List of Muslim
					states and dynasties</span></h1>

			<div id="p-lang-btn" class="vector-dropdown mw-portlet mw-portlet-lang">
				<input type="checkbox" id="p-lang-btn-checkbox" role="button" aria-haspopup="true"
					data-event-name="ui.dropdown-p-lang-btn" class="vector-dropdown-checkbox mw-interlanguage-selector"
					aria-label="Go to an article in another language. Available in 12 languages">
				<label id="p-lang-btn-label" for="p-lang-btn-checkbox"
					class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive mw-portlet-lang-heading-12"
					aria-hidden="true"><span
						class="vector-icon mw-ui-icon-language-progressive mw-ui-icon-wikimedia-language-progressive"></span>

					<span class="vector-dropdown-label-text">12 languages</span>
				</label>
				<div class="vector-dropdown-content">

					<div class="vector-menu-content">

						<ul class="vector-menu-content-list">

							<li class="interlanguage-link interwiki-ar mw-list-item"><a
									href="https://ar.wikipedia.org/wiki/%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%84%D8%A7%D8%AA_%D8%A7%D9%84%D8%AD%D8%A7%D9%83%D9%85%D8%A9_%D8%A7%D9%84%D8%A5%D8%B3%D9%84%D8%A7%D9%85%D9%8A%D8%A9"
									title="قائمة السلالات الحاكمة الإسلامية – Arabic" lang="ar" hreflang="ar"
									class="interlanguage-link-target"><span>العربية</span></a></li>
							<li class="interlanguage-link interwiki-bn mw-list-item"><a
									href="https://bn.wikipedia.org/wiki/%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A6%BF_%E0%A6%B8%E0%A6%BE%E0%A6%AE%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%9C%E0%A7%8D%E0%A6%AF_%E0%A6%93_%E0%A6%B0%E0%A6%BE%E0%A6%9C%E0%A6%AC%E0%A6%82%E0%A6%B6%E0%A7%87%E0%A6%B0_%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A6%BE"
									title="ইসলামি সাম্রাজ্য ও রাজবংশের তালিকা – Bangla" lang="bn" hreflang="bn"
									class="interlanguage-link-target"><span>বাংলা</span></a></li>
							<li class="interlanguage-link interwiki-ca mw-list-item"><a
									href="https://ca.wikipedia.org/wiki/Llista_dels_imperis_i_dinasties_musulmanes"
									title="Llista dels imperis i dinasties musulmanes – Catalan" lang="ca" hreflang="ca"
									class="interlanguage-link-target"><span>Català</span></a></li>
							<li class="interlanguage-link interwiki-de mw-list-item"><a
									href="https://de.wikipedia.org/wiki/Zeittafel_islamischer_Dynastien"
									title="Zeittafel islamischer Dynastien – German" lang="de" hreflang="de"
									class="interlanguage-link-target"><span>Deutsch</span></a></li>
							<li class="interlanguage-link interwiki-hi mw-list-item"><a
									href="https://hi.wikipedia.org/wiki/%E0%A4%AE%E0%A5%81%E0%A4%B8%E0%A5%8D%E0%A4%B2%E0%A4%BF%E0%A4%AE_%E0%A4%B8%E0%A4%BE%E0%A4%AE%E0%A5%8D%E0%A4%B0%E0%A4%BE%E0%A4%9C%E0%A5%8D%E0%A4%AF%E0%A5%8B%E0%A4%82_%E0%A4%94%E0%A4%B0_%E0%A4%B0%E0%A4%BE%E0%A4%9C%E0%A4%B5%E0%A4%82%E0%A4%B6%E0%A5%8B%E0%A4%82_%E0%A4%95%E0%A5%80_%E0%A4%B8%E0%A5%82%E0%A4%9A%E0%A5%80"
									title="मुस्लिम साम्राज्यों और राजवंशों की सूची – Hindi" lang="hi" hreflang="hi"
									class="interlanguage-link-target"><span>हिन्दी</span></a></li>
							<li class="interlanguage-link interwiki-ms mw-list-item"><a
									href="https://ms.wikipedia.org/wiki/Senarai_empayar_dan_wangsa_Muslim"
									title="Senarai empayar dan wangsa Muslim – Malay" lang="ms" hreflang="ms"
									class="interlanguage-link-target"><span>Bahasa Melayu</span></a></li>
							<li class="interlanguage-link interwiki-pnb mw-list-item"><a
									href="https://pnb.wikipedia.org/wiki/%D9%85%D8%B3%D9%84%D9%85_%D8%B1%DB%8C%D8%A7%D8%B3%D8%AA%D8%A7%DA%BA_%D8%AA%DB%92_%D8%AD%DA%A9%D9%85%D8%B1%D8%A7%D9%86_%D8%AE%D8%A7%D9%86%D8%AF%D8%A7%D9%86%D8%A7%DA%BA_%D8%AF%DB%8C_%D9%81%DB%81%D8%B1%D8%B3%D8%AA"
									title="مسلم ریاستاں تے حکمران خانداناں دی فہرست – Western Punjabi" lang="pnb"
									hreflang="pnb" class="interlanguage-link-target"><span>پنجابی</span></a></li>
							<li class="interlanguage-link interwiki-pt mw-list-item"><a
									href="https://pt.wikipedia.org/wiki/Lista_de_Estados_e_dinastias_mu%C3%A7ulmanas"
									title="Lista de Estados e dinastias muçulmanas – Portuguese" lang="pt" hreflang="pt"
									class="interlanguage-link-target"><span>Português</span></a></li>
							<li class="interlanguage-link interwiki-ru mw-list-item"><a
									href="https://ru.wikipedia.org/wiki/%D0%9C%D1%83%D1%81%D1%83%D0%BB%D1%8C%D0%BC%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B5_%D0%B4%D0%B8%D0%BD%D0%B0%D1%81%D1%82%D0%B8%D0%B8"
									title="Мусульманские династии – Russian" lang="ru" hreflang="ru"
									class="interlanguage-link-target"><span>Русский</span></a></li>
							<li class="interlanguage-link interwiki-sv mw-list-item"><a
									href="https://sv.wikipedia.org/wiki/Lista_%C3%B6ver_muslimska_riken"
									title="Lista över muslimska riken – Swedish" lang="sv" hreflang="sv"
									class="interlanguage-link-target"><span>Svenska</span></a></li>
							<li class="interlanguage-link interwiki-tr mw-list-item"><a
									href="https://tr.wikipedia.org/wiki/M%C3%BCsl%C3%BCman_devletler_ve_hanedanlar_listesi"
									title="Müslüman devletler ve hanedanlar listesi – Turkish" lang="tr" hreflang="tr"
									class="interlanguage-link-target"><span>Türkçe</span></a></li>
							<li class="interlanguage-link interwiki-ur mw-list-item"><a
									href="https://ur.wikipedia.org/wiki/%D9%85%D8%B3%D9%84%D9%85_%D8%B1%DB%8C%D8%A7%D8%B3%D8%AA%D9%88%DA%BA_%D8%A7%D9%88%D8%B1_%D8%AD%DA%A9%D9%85%D8%B1%D8%A7%D9%86_%D8%AE%D8%A7%D9%86%D8%AF%D8%A7%D9%86%D9%88%DA%BA_%DA%A9%DB%8C_%D9%81%DB%81%D8%B1%D8%B3%D8%AA"
									title="مسلم ریاستوں اور حکمران خاندانوں کی فہرست – Urdu" lang="ur" hreflang="ur"
									class="interlanguage-link-target"><span>اردو</span></a></li>
						</ul>
						<div class="after-portlet after-portlet-lang"><span
								class="wb-langlinks-edit wb-langlinks-link"><a
									href="https://www.wikidata.org/wiki/Special:EntityPage/Q1052942#sitelinks-wikipedia"
									title="Edit interlanguage links" class="wbc-editpage">Edit links</a></span></div>
					</div>

				</div>
			</div>
		</header>
		<div class="vector-page-toolbar">
			<div class="vector-page-toolbar-container">
				<div id="left-navigation">
					<nav aria-label="Namespaces">

						<div id="p-associated-pages"
							class="vector-menu vector-menu-tabs mw-portlet mw-portlet-associated-pages">
							<div class="vector-menu-content">

								<ul class="vector-menu-content-list">

									<li id="ca-nstab-main" class="selected vector-tab-noicon mw-list-item"><a
											href="/wiki/List_of_Muslim_states_and_dynasties"
											title="View the content page [alt-shift-c]"
											accesskey="c"><span>Article</span></a></li>
									<li id="ca-talk" class="vector-tab-noicon mw-list-item"><a
											href="/wiki/Talk:List_of_Muslim_states_and_dynasties" rel="discussion"
											title="Discuss improvements to the content page [alt-shift-t]"
											accesskey="t"><span>Talk</span></a></li>
								</ul>

							</div>
						</div>


						<div id="p-variants" class="vector-dropdown emptyPortlet">
							<input type="checkbox" id="p-variants-checkbox" role="button" aria-haspopup="true"
								data-event-name="ui.dropdown-p-variants" class="vector-dropdown-checkbox "
								aria-label="Change language variant">
							<label id="p-variants-label" for="p-variants-checkbox"
								class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet"
								aria-hidden="true"><span class="vector-dropdown-label-text">English</span>
							</label>
							<div class="vector-dropdown-content">



								<div id="p-variants" class="vector-menu mw-portlet mw-portlet-variants emptyPortlet">
									<div class="vector-menu-content">

										<ul class="vector-menu-content-list">


										</ul>

									</div>
								</div>


							</div>
						</div>

					</nav>
				</div>
				<div id="right-navigation" class="vector-collapsible">
					<nav aria-label="Views">

						<div id="p-views" class="vector-menu vector-menu-tabs mw-portlet mw-portlet-views">
							<div class="vector-menu-content">

								<ul class="vector-menu-content-list">

									<li id="ca-view" class="selected vector-tab-noicon mw-list-item"><a
											href="/wiki/List_of_Muslim_states_and_dynasties"><span>Read</span></a></li>
									<li id="ca-edit" class="vector-tab-noicon mw-list-item"><a
											href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit"
											title="Edit this page [alt-shift-e]" accesskey="e"><span>Edit</span></a>
									</li>
									<li id="ca-history" class="vector-tab-noicon mw-list-item"><a
											href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=history"
											title="Past revisions of this page [alt-shift-h]" accesskey="h"><span>View
												history</span></a></li>
								</ul>

							</div>
						</div>

					</nav>

					<nav class="vector-page-tools-landmark" aria-label="Page tools">

						<div id="vector-page-tools-dropdown" class="vector-dropdown vector-page-tools-dropdown">
							<input type="checkbox" id="vector-page-tools-dropdown-checkbox" role="button"
								aria-haspopup="true" data-event-name="ui.dropdown-vector-page-tools-dropdown"
								class="vector-dropdown-checkbox " aria-label="Tools">
							<label id="vector-page-tools-dropdown-label" for="vector-page-tools-dropdown-checkbox"
								class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet"
								aria-hidden="true"><span class="vector-dropdown-label-text">Tools</span>
							</label>
							<div class="vector-dropdown-content">


								<div id="vector-page-tools-unpinned-container" class="vector-unpinned-container">

									<div id="vector-page-tools" class="vector-page-tools vector-pinnable-element">
										<div class="vector-pinnable-header vector-page-tools-pinnable-header vector-pinnable-header-unpinned"
											data-feature-name="page-tools-pinned"
											data-pinnable-element-id="vector-page-tools"
											data-pinned-container-id="vector-page-tools-pinned-container"
											data-unpinned-container-id="vector-page-tools-unpinned-container"
											data-saved-pinned-state="false">
											<div class="vector-pinnable-header-label">Tools</div>
											<button
												class="vector-pinnable-header-toggle-button vector-pinnable-header-pin-button"
												data-event-name="pinnable-header.vector-page-tools.pin">move to
												sidebar</button>
											<button
												class="vector-pinnable-header-toggle-button vector-pinnable-header-unpin-button"
												data-event-name="pinnable-header.vector-page-tools.unpin">hide</button>
										</div>


										<div id="p-cactions"
											class="vector-menu mw-portlet mw-portlet-cactions emptyPortlet vector-has-collapsible-items"
											title="More options">
											<div class="vector-menu-heading">
												Actions
											</div>
											<div class="vector-menu-content">

												<ul class="vector-menu-content-list">

													<li id="ca-more-view"
														class="selected vector-more-collapsible-item mw-list-item"><a
															href="/wiki/List_of_Muslim_states_and_dynasties"><span>Read</span></a>
													</li>
													<li id="ca-more-edit"
														class="vector-more-collapsible-item mw-list-item"><a
															href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit"
															title="Edit this page [alt-shift-e]"
															accesskey="e"><span>Edit</span></a></li>
													<li id="ca-more-history"
														class="vector-more-collapsible-item mw-list-item"><a
															href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=history"><span>View
																history</span></a></li>
												</ul>

											</div>
										</div>

										<div id="p-tb" class="vector-menu mw-portlet mw-portlet-tb">
											<div class="vector-menu-heading">
												General
											</div>
											<div class="vector-menu-content">

												<ul class="vector-menu-content-list">

													<li id="t-whatlinkshere" class="mw-list-item"><a
															href="/wiki/Special:WhatLinksHere/List_of_Muslim_states_and_dynasties"
															title="List of all English Wikipedia pages containing links to this page [alt-shift-j]"
															accesskey="j"><span>What links here</span></a></li>
													<li id="t-recentchangeslinked" class="mw-list-item"><a
															href="/wiki/Special:RecentChangesLinked/List_of_Muslim_states_and_dynasties"
															rel="nofollow"
															title="Recent changes in pages linked from this page [alt-shift-k]"
															accesskey="k"><span>Related changes</span></a></li>
													<li id="t-upload" class="mw-list-item"><a
															href="/wiki/Wikipedia:File_Upload_Wizard"
															title="Upload files [alt-shift-u]"
															accesskey="u"><span>Upload file</span></a></li>
													<li id="t-specialpages" class="mw-list-item"><a
															href="/wiki/Special:SpecialPages"
															title="A list of all special pages [alt-shift-q]"
															accesskey="q"><span>Special pages</span></a></li>
													<li id="t-permalink" class="mw-list-item"><a
															href="https://en.wikipedia.org/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;oldid=1209144215"
															title="Permanent link to this revision of this page"><span>Permanent
																link</span></a></li>
													<li id="t-info" class="mw-list-item"><a
															href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=info"
															title="More information about this page"><span>Page
																information</span></a></li>
													<li id="t-cite" class="mw-list-item"><a
															href="/w/index.php?title=Special:CiteThisPage&amp;page=List_of_Muslim_states_and_dynasties&amp;id=1209144215&amp;wpFormIdentifier=titleform"
															title="Information on how to cite this page"><span>Cite this
																page</span></a></li>
													<li id="t-urlshortener" class="mw-list-item"><a
															href="/w/index.php?title=Special:UrlShortener&amp;url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FList_of_Muslim_states_and_dynasties"
															aria-haspopup="dialog"><span>Get shortened URL</span></a>
													</li>
													<li id="t-urlshortener-qrcode" class="mw-list-item"><a
															href="/w/index.php?title=Special:QrCode&amp;url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FList_of_Muslim_states_and_dynasties"><span>Download
																QR code</span></a></li>
													<li id="t-wikibase" class="mw-list-item"><a
															href="https://www.wikidata.org/wiki/Special:EntityPage/Q1052942"
															title="Structured data on this page hosted by Wikidata [alt-shift-g]"
															accesskey="g"><span>Wikidata item</span></a></li>
													<li class="mw-list-item mw-list-item-js" id="wbc-editpage"><a
															href="https://www.wikidata.org/wiki/Special:EntityPage/Q1052942#sitelinks-wikipedia"
															title="Edit interlanguage links"><span>Edit interlanguage
																links</span></a></li>
													<li class="mw-list-item mw-list-item-js"
														id="t-collapsible-toggle-all"><a href="#"
															title="Expand all collapsible elements on the current page"
															role="button" aria-expanded="false"><span>Expand
																all</span></a></li>
												</ul>

											</div>
										</div>

										<div id="p-coll-print_export"
											class="vector-menu mw-portlet mw-portlet-coll-print_export">
											<div class="vector-menu-heading">
												Print/export
											</div>
											<div class="vector-menu-content">

												<ul class="vector-menu-content-list">

													<li id="coll-download-as-rl" class="mw-list-item"><a
															href="/w/index.php?title=Special:DownloadAsPdf&amp;page=List_of_Muslim_states_and_dynasties&amp;action=show-download-screen"
															title="Download this page as a PDF file"><span>Download as
																PDF</span></a></li>
													<li id="t-print" class="mw-list-item"><a
															href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;printable=yes"
															title="Printable version of this page [alt-shift-p]"
															accesskey="p"><span>Printable version</span></a></li>
												</ul>

											</div>
										</div>

										<div id="p-wikibase-otherprojects"
											class="vector-menu mw-portlet mw-portlet-wikibase-otherprojects">
											<div class="vector-menu-heading">
												In other projects
											</div>
											<div class="vector-menu-content">

												<ul class="vector-menu-content-list">

													<li
														class="wb-otherproject-link wb-otherproject-commons mw-list-item">
														<a href="https://commons.wikimedia.org/wiki/Category:Muslim_dynasties"
															hreflang="en"><span>Wikimedia Commons</span></a></li>
												</ul>

											</div>
										</div>

									</div>

								</div>

							</div>
						</div>

					</nav>
				</div>
			</div>
		</div>
		<div class="vector-column-end">
			<div class="vector-sticky-pinned-container">
				<nav class="vector-page-tools-landmark" aria-label="Page tools">
					<div id="vector-page-tools-pinned-container" class="vector-pinned-container">

					</div>
				</nav>
				<nav class="vector-client-prefs-landmark" aria-label="Appearance">
				</nav>
			</div>
		</div>
		<div id="bodyContent" class="vector-body ve-init-mw-desktopArticleTarget-targetContainer"
			aria-labelledby="firstHeading" data-mw-ve-target-container="">
			<div class="vector-body-before-content">
				<div class="mw-indicators">
				</div>

				<div id="siteSub" class="noprint">From Wikipedia, the free encyclopedia</div>
			</div>
			<div id="contentSub">
				<div id="mw-content-subtitle"></div>
			</div>


			<div id="mw-content-text" class="mw-body-content">
				<div class="mw-content-ltr mw-parser-output" lang="en" dir="ltr">
					<style data-mw-deduplicate="TemplateStyles:r1097763485">
						.mw-parser-output .ambox {
							border: 1px solid #a2a9b1;
							border-left: 10px solid #36c;
							background-color: #fbfbfb;
							box-sizing: border-box
						}

						.mw-parser-output .ambox+link+.ambox,
						.mw-parser-output .ambox+link+style+.ambox,
						.mw-parser-output .ambox+link+link+.ambox,
						.mw-parser-output .ambox+.mw-empty-elt+link+.ambox,
						.mw-parser-output .ambox+.mw-empty-elt+link+style+.ambox,
						.mw-parser-output .ambox+.mw-empty-elt+link+link+.ambox {
							margin-top: -1px
						}

						html body.mediawiki .mw-parser-output .ambox.mbox-small-left {
							margin: 4px 1em 4px 0;
							overflow: hidden;
							width: 238px;
							border-collapse: collapse;
							font-size: 88%;
							line-height: 1.25em
						}

						.mw-parser-output .ambox-speedy {
							border-left: 10px solid #b32424;
							background-color: #fee7e6
						}

						.mw-parser-output .ambox-delete {
							border-left: 10px solid #b32424
						}

						.mw-parser-output .ambox-content {
							border-left: 10px solid #f28500
						}

						.mw-parser-output .ambox-style {
							border-left: 10px solid #fc3
						}

						.mw-parser-output .ambox-move {
							border-left: 10px solid #9932cc
						}

						.mw-parser-output .ambox-protection {
							border-left: 10px solid #a2a9b1
						}

						.mw-parser-output .ambox .mbox-text {
							border: none;
							padding: 0.25em 0.5em;
							width: 100%
						}

						.mw-parser-output .ambox .mbox-image {
							border: none;
							padding: 2px 0 2px 0.5em;
							text-align: center
						}

						.mw-parser-output .ambox .mbox-imageright {
							border: none;
							padding: 2px 0.5em 2px 0;
							text-align: center
						}

						.mw-parser-output .ambox .mbox-empty-cell {
							border: none;
							padding: 0;
							width: 1px
						}

						.mw-parser-output .ambox .mbox-image-div {
							width: 52px
						}

						html.client-js body.skin-minerva .mw-parser-output .mbox-text-span {
							margin-left: 23px !important
						}

						@media(min-width:720px) {
							.mw-parser-output .ambox {
								margin: 0 10%
							}
						}
					</style>
					<style data-mw-deduplicate="TemplateStyles:r1190420937">
						.mw-parser-output .multiple-issues-text {
							width: 95%;
							margin: 0.2em 0
						}

						.mw-parser-output .multiple-issues-text>.mw-collapsible-content {
							margin-top: 0.3em
						}

						.mw-parser-output .compact-ambox .ambox {
							border: none;
							border-collapse: collapse;
							background-color: transparent;
							margin: 0 0 0 1.6em !important;
							padding: 0 !important;
							width: auto;
							display: block
						}

						body.mediawiki .mw-parser-output .compact-ambox .ambox.mbox-small-left {
							font-size: 100%;
							width: auto;
							margin: 0
						}

						.mw-parser-output .compact-ambox .ambox .mbox-text {
							padding: 0 !important;
							margin: 0 !important
						}

						.mw-parser-output .compact-ambox .ambox .mbox-text-span {
							display: list-item;
							line-height: 1.5em;
							list-style-type: disc
						}

						.mw-parser-output .skin-minerva .multiple-issues-text>.mw-collapsible-toggle {
							display: none
						}

						.mw-parser-output .compact-ambox .ambox .mbox-image,
						.mw-parser-output .compact-ambox .ambox .mbox-imageright,
						.mw-parser-output .compact-ambox .ambox .mbox-empty-cell,
						.mw-parser-output .compact-ambox .hide-when-compact {
							display: none
						}
					</style>
					<table
						class="box-Multiple_issues plainlinks metadata ambox ambox-content ambox-multiple_issues compact-ambox"
						role="presentation">
						<tbody>
							<tr>
								<td class="mbox-image">
									<div class="mbox-image-div"><span typeof="mw:File"><span><img alt=""
													src="//upload.wikimedia.org/wikipedia/en/thumb/b/b4/Ambox_important.svg/40px-Ambox_important.svg.png"
													decoding="async" width="40" height="40" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/en/thumb/b/b4/Ambox_important.svg/60px-Ambox_important.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/b/b4/Ambox_important.svg/80px-Ambox_important.svg.png 2x"
													data-file-width="40" data-file-height="40"></span></span></div>
								</td>
								<td class="mbox-text">
									<div class="mbox-text-span">
										<div class="multiple-issues-text mw-collapsible mw-made-collapsible"><button
												type="button"
												class="mw-collapsible-toggle mw-collapsible-toggle-default"
												aria-expanded="true" tabindex="0"><span
													class="mw-collapsible-text">hide</span></button><b>This article has
												multiple issues.</b> Please help <b><a class="external text"
													href="https://en.wikipedia.org/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit">improve
													it</a></b> or discuss these issues on the <b><a
													href="/wiki/Talk:List_of_Muslim_states_and_dynasties"
													title="Talk:List of Muslim states and dynasties">talk page</a></b>.
											<small><i>(<a href="/wiki/Help:Maintenance_template_removal"
														title="Help:Maintenance template removal">Learn how and when to
														remove these template messages</a>)</i></small>
											<div class="mw-collapsible-content">
												<link rel="mw-deduplicated-inline-style"
													href="mw-data:TemplateStyles:r1097763485">
												<table
													class="box-More_citations_needed plainlinks metadata ambox ambox-content ambox-Refimprove"
													role="presentation">
													<tbody>
														<tr>
															<td class="mbox-image">
																<div class="mbox-image-div"><span typeof="mw:File"><a
																			href="/wiki/File:Question_book-new.svg"
																			class="mw-file-description"><img alt=""
																				src="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/50px-Question_book-new.svg.png"
																				decoding="async" width="50" height="39"
																				class="mw-file-element"
																				srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/75px-Question_book-new.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/100px-Question_book-new.svg.png 2x"
																				data-file-width="512"
																				data-file-height="399"></a></span></div>
															</td>
															<td class="mbox-text">
																<div class="mbox-text-span">This article <b>needs
																		additional citations for <a
																			href="/wiki/Wikipedia:Verifiability"
																			title="Wikipedia:Verifiability">verification</a></b>.<span
																		class="hide-when-compact"> Please help <a
																			href="/wiki/Special:EditPage/List_of_Muslim_states_and_dynasties"
																			title="Special:EditPage/List of Muslim states and dynasties">improve
																			this article</a> by <a
																			href="/wiki/Help:Referencing_for_beginners"
																			title="Help:Referencing for beginners">adding
																			citations to reliable sources</a>. Unsourced
																		material may be challenged and
																		removed.<br><small><span
																				class="plainlinks"><i>Find
																					sources:</i>&nbsp;<a rel="nofollow"
																					class="external text"
																					href="https://www.google.com/search?as_eq=wikipedia&amp;q=%22List+of+Muslim+states+and+dynasties%22">"List
																					of Muslim states and
																					dynasties"</a>&nbsp;–&nbsp;<a
																					rel="nofollow" class="external text"
																					href="https://www.google.com/search?tbm=nws&amp;q=%22List+of+Muslim+states+and+dynasties%22+-wikipedia&amp;tbs=ar:1">news</a>&nbsp;<b>·</b>
																				<a rel="nofollow" class="external text"
																					href="https://www.google.com/search?&amp;q=%22List+of+Muslim+states+and+dynasties%22&amp;tbs=bkt:s&amp;tbm=bks">newspapers</a>&nbsp;<b>·</b>
																				<a rel="nofollow" class="external text"
																					href="https://www.google.com/search?tbs=bks:1&amp;q=%22List+of+Muslim+states+and+dynasties%22+-wikipedia">books</a>&nbsp;<b>·</b>
																				<a rel="nofollow" class="external text"
																					href="https://scholar.google.com/scholar?q=%22List+of+Muslim+states+and+dynasties%22">scholar</a>&nbsp;<b>·</b>
																				<a rel="nofollow" class="external text"
																					href="https://www.jstor.org/action/doBasicSearch?Query=%22List+of+Muslim+states+and+dynasties%22&amp;acc=on&amp;wc=on">JSTOR</a></span></small></span>
																	<span class="date-container"><i>(<span
																				class="date">November
																				2023</span>)</i></span><span
																		class="hide-when-compact"><i> (<small><a
																					href="/wiki/Help:Maintenance_template_removal"
																					title="Help:Maintenance template removal">Learn
																					how and when to remove this template
																					message</a></small>)</i></span>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
												<link rel="mw-deduplicated-inline-style"
													href="mw-data:TemplateStyles:r1097763485">
												<table class="box-Tone plainlinks metadata ambox ambox-style ambox-Tone"
													role="presentation">
													<tbody>
														<tr>
															<td class="mbox-image">
																<div class="mbox-image-div"><span
																		typeof="mw:File"><span><img alt=""
																				src="//upload.wikimedia.org/wikipedia/en/thumb/f/f2/Edit-clear.svg/40px-Edit-clear.svg.png"
																				decoding="async" width="40" height="40"
																				class="mw-file-element"
																				srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f2/Edit-clear.svg/60px-Edit-clear.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f2/Edit-clear.svg/80px-Edit-clear.svg.png 2x"
																				data-file-width="48"
																				data-file-height="48"></span></span>
																</div>
															</td>
															<td class="mbox-text">
																<div class="mbox-text-span">This article's <b>tone or
																		style may not reflect the <a
																			href="/wiki/Wikipedia:Writing_better_articles#Tone"
																			title="Wikipedia:Writing better articles">encyclopedic
																			tone</a> used on Wikipedia</b>.<span
																		class="hide-when-compact"> See Wikipedia's <a
																			href="/wiki/Wikipedia:Writing_better_articles#Tone"
																			title="Wikipedia:Writing better articles">guide
																			to writing better articles</a> for
																		suggestions.</span> <span
																		class="date-container"><i>(<span
																				class="date">November
																				2023</span>)</i></span><span
																		class="hide-when-compact"><i> (<small><a
																					href="/wiki/Help:Maintenance_template_removal"
																					title="Help:Maintenance template removal">Learn
																					how and when to remove this template
																					message</a></small>)</i></span>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div><span class="hide-when-compact"><i> (<small><a
														href="/wiki/Help:Maintenance_template_removal"
														title="Help:Maintenance template removal">Learn how and when to
														remove this template message</a></small>)</i></span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="mw-empty-elt">
					</p>
					<p>This article includes a list of successive <a href="/wiki/Islamic_state"
							title="Islamic state">Islamic states</a> and <a href="/wiki/History_of_Islam"
							title="History of Islam">Muslim dynasties</a> beginning with the time of the <a
							href="/wiki/Islamic_prophet" class="mw-redirect" title="Islamic prophet">Islamic prophet</a>
						Muhammad (صلى الله عليه وسلم)(570–632 CE) and the <a href="/wiki/Early_Muslim_conquests"
							title="Early Muslim conquests">early Muslim conquests</a> that <a
							href="/wiki/Spread_of_Islam" title="Spread of Islam">spread Islam</a> outside of the <a
							href="/wiki/Arabian_Peninsula" title="Arabian Peninsula">Arabian Peninsula</a>, and
						continuing through to the present day.<sup class="noprint Inline-Template Template-Fact"
							style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed"
									title="Wikipedia:Citation needed"><span
										title="This claim needs references to reliable sources. (November 2023)">citation
										needed</span></a></i>]</sup>
					</p>
					<p>The first-ever establishment of an Islamic polity goes back to the <a
							href="/w/index.php?title=Muhammad(S._A._W)_in_Medina&amp;action=edit&amp;redlink=1"
							class="new" title="Muhammad(S. A. W) in Medina (page does not exist)">Islamic State of
							Medina</a>, which was established by Muhammad(S. A. W) in the city of <a href="/wiki/Medina"
							title="Medina">Medina</a> in 622 CE. Following <a
							href="/w/index.php?title=Death_of_Muhammad(S._A._W)&amp;action=edit&amp;redlink=1"
							class="new" title="Death of Muhammad(S. A. W) (page does not exist)">his death</a> in 632
						CE, <a href="/wiki/Rashidun" title="Rashidun">his immediate successors</a> established the <a
							href="/wiki/Rashidun_Caliphate" title="Rashidun Caliphate">Rashidun Caliphate</a>.<sup
							class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a
									href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span
										title="This claim needs references to reliable sources. (November 2023)">citation
										needed</span></a></i>]</sup>
					</p>
					<p>After that Muslim dynasties rose; some of these dynasties established notable and prominent
						Muslim empires, such as the <a href="/wiki/Umayyad_Empire" class="mw-redirect"
							title="Umayyad Empire">Umayyad Empire</a> and later the <a href="/wiki/Abbasid_Empire"
							class="mw-redirect" title="Abbasid Empire">Abbasid Empire</a>,<sup id="cite_ref-:12_1-0"
							class="reference"><a href="#cite_note-:12-1">[1]</a></sup><sup id="cite_ref-2"
							class="reference"><a href="#cite_note-2">[2]</a></sup> <a href="/wiki/Ottoman_Empire"
							title="Ottoman Empire">Ottoman Empire</a> centered around <a href="/wiki/Anatolia"
							title="Anatolia">Anatolia</a>, the <a href="/wiki/Safavid_Iran" title="Safavid Iran">Safavid
							Empire</a> of <a href="/wiki/Greater_Iran" title="Greater Iran">Persia</a>, and the <a
							href="/wiki/Mughal_Empire" title="Mughal Empire">Mughal Empire</a> in <a
							href="/wiki/Indian_subcontinent" title="Indian subcontinent">India</a>.<sup
							class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a
									href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span
										title="This claim needs references to reliable sources. (November 2023)">citation
										needed</span></a></i>]</sup>
					</p>
					<meta property="mw:PageProp/toc">
					<h2><span class="mw-headline" id="By_land_area">By land area</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=1"
								title="Edit section: By land area"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<table
						class="wikitable sortable mw-collapsible jquery-tablesorter mw-made-collapsible mw-collapsed">
						<caption>
							<button type="button"
								class="mw-collapsible-toggle mw-collapsible-toggle-default mw-collapsible-toggle-collapsed"
								aria-expanded="false" tabindex="0"><span
									class="mw-collapsible-text">show</span></button></caption>
						<thead>
							<tr style="display: none;">
								<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">No
								</th>
								<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">
									Dynasty/State
								</th>
								<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">
									Land area
								</th>
								<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">
									Today part of
								</th>
								<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">
									Period
								</th>
							</tr>
						</thead>
						<tbody>
							<tr style="display: none;">
								<td>1
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Abbasid_banner.svg/23px-Abbasid_banner.svg.png"
													decoding="async" width="23" height="14" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Abbasid_banner.svg/35px-Abbasid_banner.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Abbasid_banner.svg/46px-Abbasid_banner.svg.png 2x"
													data-file-width="1000" data-file-height="600"></span></span></span>
									<a href="/wiki/Abbasid_Caliphate" title="Abbasid Caliphate">Abbasid Caliphate</a>
								</td>
								<td>11.1m² Km
								</td>
								<td>•<span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
												href="/wiki/Iraq" title="Iraq"><img alt="Iraq"
													src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
													data-file-width="900" data-file-height="600"></a></span></span><a
										href="/wiki/Iraq" title="Iraq">Iraq</a><br>•<span class="datasortkey"
										data-sort-value="Saudi Arabia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/23px-Flag_of_Saudi_Arabia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/35px-Flag_of_Saudi_Arabia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/45px-Flag_of_Saudi_Arabia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi
											Arabia</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Egypt"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/23px-Flag_of_Egypt.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/35px-Flag_of_Egypt.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/45px-Flag_of_Egypt.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Egypt" title="Egypt">Egypt</a></span><br>•<span
										class="datasortkey" data-sort-value="Yemen"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/23px-Flag_of_Yemen.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/35px-Flag_of_Yemen.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/45px-Flag_of_Yemen.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Yemen" title="Yemen">Yemen</a></span><br>•<span
										class="datasortkey" data-sort-value="Algeria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/23px-Flag_of_Algeria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/35px-Flag_of_Algeria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/45px-Flag_of_Algeria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Algeria" title="Algeria">Algeria</a></span><br>•<span
										class="datasortkey" data-sort-value="Oman"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/23px-Flag_of_Oman.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/35px-Flag_of_Oman.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/46px-Flag_of_Oman.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Oman" title="Oman">Oman</a></span><br>•<span class="datasortkey"
										data-sort-value="Bahrain"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/23px-Flag_of_Bahrain.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/35px-Flag_of_Bahrain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/46px-Flag_of_Bahrain.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bahrain" title="Bahrain">Bahrain</a></span><br>•<span
										class="datasortkey" data-sort-value="Qatar"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/23px-Flag_of_Qatar.svg.png"
														decoding="async" width="23" height="9" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/35px-Flag_of_Qatar.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/46px-Flag_of_Qatar.svg.png 2x"
														data-file-width="1400"
														data-file-height="550"></span></span>&nbsp;</span><a
											href="/wiki/Qatar" title="Qatar">Qatar</a></span><br>•<span
										class="datasortkey" data-sort-value="United Arab Emirates"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/23px-Flag_of_the_United_Arab_Emirates.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/35px-Flag_of_the_United_Arab_Emirates.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/46px-Flag_of_the_United_Arab_Emirates.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/United_Arab_Emirates" title="United Arab Emirates">United Arab
											Emirates</a></span><br>•<span class="datasortkey"
										data-sort-value="Jordan"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/23px-Flag_of_Jordan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/35px-Flag_of_Jordan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/46px-Flag_of_Jordan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Jordan" title="Jordan">Jordan</a></span><br>•<span
										class="datasortkey" data-sort-value="Lebanon"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/23px-Flag_of_Lebanon.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/35px-Flag_of_Lebanon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/45px-Flag_of_Lebanon.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Lebanon" title="Lebanon">Lebanon</a></span><br>•<span
										class="datasortkey" data-sort-value="Palestine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/23px-Flag_of_Palestine.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/35px-Flag_of_Palestine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/46px-Flag_of_Palestine.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/State_of_Palestine"
											title="State of Palestine">Palestine</a></span><br>•<span
										class="datasortkey" data-sort-value="Russia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Russia" title="Russia">Russia</a></span><br>•<span
										class="datasortkey" data-sort-value="Israel"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/21px-Flag_of_Israel.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/32px-Flag_of_Israel.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/41px-Flag_of_Israel.svg.png 2x"
														data-file-width="1100"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Israel" title="Israel">Israel</a></span><br>•<span
										class="datasortkey" data-sort-value="Libya"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/23px-Flag_of_Libya.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/35px-Flag_of_Libya.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/46px-Flag_of_Libya.svg.png 2x"
														data-file-width="960"
														data-file-height="480"></span></span>&nbsp;</span><a
											href="/wiki/Libya" title="Libya">Libya</a></span><br>•<span
										class="datasortkey" data-sort-value="Tunisia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/23px-Flag_of_Tunisia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/35px-Flag_of_Tunisia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/45px-Flag_of_Tunisia.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Tunisia" title="Tunisia">Tunisia</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Kuwait"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/23px-Flag_of_Kuwait.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/35px-Flag_of_Kuwait.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/46px-Flag_of_Kuwait.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kuwait" title="Kuwait">Kuwait</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kazakhstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/23px-Flag_of_Kazakhstan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/35px-Flag_of_Kazakhstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/46px-Flag_of_Kazakhstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Cyprus"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/23px-Flag_of_Cyprus.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/35px-Flag_of_Cyprus.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/45px-Flag_of_Cyprus.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Cyprus" title="Cyprus">Cyprus</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)"
											title="Georgia (country)">Georgia</a></span><br>•<span class="datasortkey"
										data-sort-value="China"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/China" title="China">China</a></span>
								</td>
								<td>750–1258
									<p>1261–1517
									</p>
								</td>
							</tr>
							<tr style="display: none;">
								<td>2
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Umayyad_Flag.svg/23px-Umayyad_Flag.svg.png"
													decoding="async" width="23" height="12" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Umayyad_Flag.svg/35px-Umayyad_Flag.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/Umayyad_Flag.svg/46px-Umayyad_Flag.svg.png 2x"
													data-file-width="600" data-file-height="300"></span></span></span><a
										href="/wiki/Umayyad_Caliphate" title="Umayyad Caliphate">Umayyad Caliphate</a>
								</td>
								<td>11.1m² Km
								</td>
								<td>•<span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
												href="/wiki/Iraq" title="Iraq"><img alt="Iraq"
													src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
													data-file-width="900" data-file-height="600"></a></span></span><a
										href="/wiki/Iraq" title="Iraq">Iraq</a><br>•<span class="datasortkey"
										data-sort-value="Saudi Arabia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/23px-Flag_of_Saudi_Arabia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/35px-Flag_of_Saudi_Arabia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/45px-Flag_of_Saudi_Arabia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi
											Arabia</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Egypt"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/23px-Flag_of_Egypt.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/35px-Flag_of_Egypt.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/45px-Flag_of_Egypt.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Egypt" title="Egypt">Egypt</a></span><br>•<span
										class="datasortkey" data-sort-value="Yemen"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/23px-Flag_of_Yemen.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/35px-Flag_of_Yemen.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/45px-Flag_of_Yemen.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Yemen" title="Yemen">Yemen</a></span><br>•<span
										class="datasortkey" data-sort-value="Algeria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/23px-Flag_of_Algeria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/35px-Flag_of_Algeria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/45px-Flag_of_Algeria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Algeria" title="Algeria">Algeria</a></span><br>•<span
										class="datasortkey" data-sort-value="Oman"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/23px-Flag_of_Oman.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/35px-Flag_of_Oman.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/46px-Flag_of_Oman.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Oman" title="Oman">Oman</a></span><br>•<span class="datasortkey"
										data-sort-value="Bahrain"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/23px-Flag_of_Bahrain.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/35px-Flag_of_Bahrain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/46px-Flag_of_Bahrain.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bahrain" title="Bahrain">Bahrain</a></span><br>•<span
										class="datasortkey" data-sort-value="Qatar"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/23px-Flag_of_Qatar.svg.png"
														decoding="async" width="23" height="9" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/35px-Flag_of_Qatar.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/46px-Flag_of_Qatar.svg.png 2x"
														data-file-width="1400"
														data-file-height="550"></span></span>&nbsp;</span><a
											href="/wiki/Qatar" title="Qatar">Qatar</a></span><br>•<span
										class="datasortkey" data-sort-value="United Arab Emirates"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/23px-Flag_of_the_United_Arab_Emirates.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/35px-Flag_of_the_United_Arab_Emirates.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/46px-Flag_of_the_United_Arab_Emirates.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/United_Arab_Emirates" title="United Arab Emirates">United Arab
											Emirates</a></span><br>•<span class="datasortkey"
										data-sort-value="France"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/23px-Flag_of_France.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/45px-Flag_of_France.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/France" title="France">France</a></span><br>•<span
										class="datasortkey" data-sort-value="Spain"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/23px-Flag_of_Spain.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/35px-Flag_of_Spain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/45px-Flag_of_Spain.svg.png 2x"
														data-file-width="750"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Spain" title="Spain">Spain</a></span><br>•<span
										class="datasortkey" data-sort-value="Portugal"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/23px-Flag_of_Portugal.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/35px-Flag_of_Portugal.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/45px-Flag_of_Portugal.svg.png 2x"
														data-file-width="600"
														data-file-height="400"></span></span>&nbsp;</span><a
											href="/wiki/Portugal" title="Portugal">Portugal</a></span><br>•<span
										class="datasortkey" data-sort-value="Morocco"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/23px-Flag_of_Morocco.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/35px-Flag_of_Morocco.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/45px-Flag_of_Morocco.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Morocco" title="Morocco">Morocco</a></span><br>•<span
										class="datasortkey" data-sort-value="Western Sahara"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg/23px-Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg/35px-Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg/46px-Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg.png 2x"
														data-file-width="600"
														data-file-height="300"></span></span>&nbsp;</span><a
											href="/wiki/Western_Sahara" title="Western Sahara">Western
											Sahara</a></span><br>•<span class="datasortkey"
										data-sort-value="Jordan"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/23px-Flag_of_Jordan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/35px-Flag_of_Jordan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/46px-Flag_of_Jordan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Jordan" title="Jordan">Jordan</a></span><br>•<span
										class="datasortkey" data-sort-value="Lebanon"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/23px-Flag_of_Lebanon.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/35px-Flag_of_Lebanon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/45px-Flag_of_Lebanon.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Lebanon" title="Lebanon">Lebanon</a></span><br>•<span
										class="datasortkey" data-sort-value="Palestine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/23px-Flag_of_Palestine.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/35px-Flag_of_Palestine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/46px-Flag_of_Palestine.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/State_of_Palestine"
											title="State of Palestine">Palestine</a></span><br>•<span
										class="datasortkey" data-sort-value="Israel"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/21px-Flag_of_Israel.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/32px-Flag_of_Israel.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/41px-Flag_of_Israel.svg.png 2x"
														data-file-width="1100"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Israel" title="Israel">Israel</a></span><br>•<span
										class="datasortkey" data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Libya"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/23px-Flag_of_Libya.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/35px-Flag_of_Libya.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/46px-Flag_of_Libya.svg.png 2x"
														data-file-width="960"
														data-file-height="480"></span></span>&nbsp;</span><a
											href="/wiki/Libya" title="Libya">Libya</a></span><br>•<span
										class="datasortkey" data-sort-value="Russia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Russia" title="Russia">Russia</a></span><br>•<span
										class="datasortkey" data-sort-value="Tunisia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/23px-Flag_of_Tunisia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/35px-Flag_of_Tunisia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/45px-Flag_of_Tunisia.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Tunisia" title="Tunisia">Tunisia</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Kuwait"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/23px-Flag_of_Kuwait.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/35px-Flag_of_Kuwait.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/46px-Flag_of_Kuwait.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kuwait" title="Kuwait">Kuwait</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Cyprus"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/23px-Flag_of_Cyprus.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/35px-Flag_of_Cyprus.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/45px-Flag_of_Cyprus.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Cyprus" title="Cyprus">Cyprus</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)" title="Georgia (country)">Georgia</a></span>
								</td>
								<td>661–750
								</td>
							</tr>
							<tr style="display: none;">
								<td>3
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Rashidun_Flag.svg/23px-Rashidun_Flag.svg.png"
													decoding="async" width="23" height="12" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Rashidun_Flag.svg/35px-Rashidun_Flag.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Rashidun_Flag.svg/46px-Rashidun_Flag.svg.png 2x"
													data-file-width="748" data-file-height="376"></span></span></span><a
										href="/wiki/Rashidun_Caliphate" title="Rashidun Caliphate">Rashidun
										Caliphate</a>
								</td>
								<td>6.4m² Km
								</td>
								<td>•<span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
												href="/wiki/Iraq" title="Iraq"><img alt="Iraq"
													src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
													data-file-width="900" data-file-height="600"></a></span></span><a
										href="/wiki/Iraq" title="Iraq">Iraq</a><br>•<span class="datasortkey"
										data-sort-value="Saudi Arabia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/23px-Flag_of_Saudi_Arabia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/35px-Flag_of_Saudi_Arabia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/45px-Flag_of_Saudi_Arabia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi
											Arabia</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Egypt"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/23px-Flag_of_Egypt.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/35px-Flag_of_Egypt.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/45px-Flag_of_Egypt.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Egypt" title="Egypt">Egypt</a></span><br>•<span
										class="datasortkey" data-sort-value="Yemen"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/23px-Flag_of_Yemen.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/35px-Flag_of_Yemen.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/45px-Flag_of_Yemen.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Yemen" title="Yemen">Yemen</a></span><br>•<span
										class="datasortkey" data-sort-value="Algeria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/23px-Flag_of_Algeria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/35px-Flag_of_Algeria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/45px-Flag_of_Algeria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Algeria" title="Algeria">Algeria</a></span><br>•<span
										class="datasortkey" data-sort-value="Oman"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/23px-Flag_of_Oman.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/35px-Flag_of_Oman.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/46px-Flag_of_Oman.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Oman" title="Oman">Oman</a></span><br>•<span class="datasortkey"
										data-sort-value="Bahrain"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/23px-Flag_of_Bahrain.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/35px-Flag_of_Bahrain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/46px-Flag_of_Bahrain.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bahrain" title="Bahrain">Bahrain</a></span><br>•<span
										class="datasortkey" data-sort-value="Qatar"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/23px-Flag_of_Qatar.svg.png"
														decoding="async" width="23" height="9" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/35px-Flag_of_Qatar.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/46px-Flag_of_Qatar.svg.png 2x"
														data-file-width="1400"
														data-file-height="550"></span></span>&nbsp;</span><a
											href="/wiki/Qatar" title="Qatar">Qatar</a></span><br>•<span
										class="datasortkey" data-sort-value="United Arab Emirates"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/23px-Flag_of_the_United_Arab_Emirates.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/35px-Flag_of_the_United_Arab_Emirates.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/46px-Flag_of_the_United_Arab_Emirates.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/United_Arab_Emirates" title="United Arab Emirates">United Arab
											Emirates</a></span><br>•<span class="datasortkey"
										data-sort-value="Jordan"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/23px-Flag_of_Jordan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/35px-Flag_of_Jordan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/46px-Flag_of_Jordan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Jordan" title="Jordan">Jordan</a></span><br>•<span
										class="datasortkey" data-sort-value="Lebanon"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/23px-Flag_of_Lebanon.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/35px-Flag_of_Lebanon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/45px-Flag_of_Lebanon.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Lebanon" title="Lebanon">Lebanon</a></span><br>•<span
										class="datasortkey" data-sort-value="Palestine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/23px-Flag_of_Palestine.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/35px-Flag_of_Palestine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/46px-Flag_of_Palestine.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/State_of_Palestine"
											title="State of Palestine">Palestine</a></span><br>•<span
										class="datasortkey" data-sort-value="Israel"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/21px-Flag_of_Israel.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/32px-Flag_of_Israel.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/41px-Flag_of_Israel.svg.png 2x"
														data-file-width="1100"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Israel" title="Israel">Israel</a></span><br>•<span
										class="datasortkey" data-sort-value="Libya"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/23px-Flag_of_Libya.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/35px-Flag_of_Libya.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/46px-Flag_of_Libya.svg.png 2x"
														data-file-width="960"
														data-file-height="480"></span></span>&nbsp;</span><a
											href="/wiki/Libya" title="Libya">Libya</a></span><br>•<span
										class="datasortkey" data-sort-value="Tunisia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/23px-Flag_of_Tunisia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/35px-Flag_of_Tunisia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/45px-Flag_of_Tunisia.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Tunisia" title="Tunisia">Tunisia</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Kuwait"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/23px-Flag_of_Kuwait.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/35px-Flag_of_Kuwait.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/46px-Flag_of_Kuwait.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kuwait" title="Kuwait">Kuwait</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan" title="Afghanistan">Afghanistan</a></span>
								</td>
								<td>632–661
								</td>
							</tr>
							<tr style="display: none;">
								<td>4
								</td>
								<td><span class="datasortkey" data-sort-value="Golden Horde"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Golden_Horde_flag_1339.svg/23px-Golden_Horde_flag_1339.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Golden_Horde_flag_1339.svg/35px-Golden_Horde_flag_1339.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Golden_Horde_flag_1339.svg/45px-Golden_Horde_flag_1339.svg.png 2x"
														data-file-width="300"
														data-file-height="200"></span></span>&nbsp;</span><a
											href="/wiki/Golden_Horde" title="Golden Horde">Golden Horde</a></span>
								</td>
								<td>6.0m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Russia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Russia" title="Russia">Russia</a></span><br>•<span
										class="datasortkey" data-sort-value="Ukraine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/23px-Flag_of_Ukraine.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/35px-Flag_of_Ukraine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/45px-Flag_of_Ukraine.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Ukraine" title="Ukraine">Ukraine</a></span><br>•<span
										class="datasortkey" data-sort-value="Kazakhstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/23px-Flag_of_Kazakhstan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/35px-Flag_of_Kazakhstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/46px-Flag_of_Kazakhstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Hungary"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/23px-Flag_of_Hungary.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/35px-Flag_of_Hungary.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/46px-Flag_of_Hungary.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Hungary" title="Hungary">Hungary</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)"
											title="Georgia (country)">Georgia</a></span><br>•<span class="datasortkey"
										data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Poland"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/23px-Flag_of_Poland.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/35px-Flag_of_Poland.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/46px-Flag_of_Poland.svg.png 2x"
														data-file-width="1280"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Poland" title="Poland">Poland</a></span><br>•<span
										class="datasortkey" data-sort-value="Moldova"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/23px-Flag_of_Moldova.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/35px-Flag_of_Moldova.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/46px-Flag_of_Moldova.svg.png 2x"
														data-file-width="1800"
														data-file-height="900"></span></span>&nbsp;</span><a
											href="/wiki/Moldova" title="Moldova">Moldova</a></span>
								</td>
								<td>1313–1502 (<a href="/wiki/Islamic" class="mw-redirect" title="Islamic">Islamic</a>)
								</td>
							</tr>
							<tr style="display: none;">
								<td>5
								</td>
								<td><span class="datasortkey" data-sort-value="Ottoman Empire"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_the_Ottoman_Empire_%281844%E2%80%931922%29.svg/23px-Flag_of_the_Ottoman_Empire_%281844%E2%80%931922%29.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_the_Ottoman_Empire_%281844%E2%80%931922%29.svg/35px-Flag_of_the_Ottoman_Empire_%281844%E2%80%931922%29.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_the_Ottoman_Empire_%281844%E2%80%931922%29.svg/45px-Flag_of_the_Ottoman_Empire_%281844%E2%80%931922%29.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Ottoman_Empire" title="Ottoman Empire">Ottoman Empire</a></span>
								</td>
								<td>5.2m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Greece"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/23px-Flag_of_Greece.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/35px-Flag_of_Greece.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/45px-Flag_of_Greece.svg.png 2x"
														data-file-width="600"
														data-file-height="400"></span></span>&nbsp;</span><a
											href="/wiki/Greece" title="Greece">Greece</a></span><br>•<span
										class="datasortkey" data-sort-value="Egypt"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/23px-Flag_of_Egypt.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/35px-Flag_of_Egypt.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/45px-Flag_of_Egypt.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Egypt" title="Egypt">Egypt</a></span><br>•<span
										class="datasortkey" data-sort-value="Syria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Albania"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Flag_of_Albania.svg/21px-Flag_of_Albania.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Flag_of_Albania.svg/32px-Flag_of_Albania.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/36/Flag_of_Albania.svg/42px-Flag_of_Albania.svg.png 2x"
														data-file-width="700"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Albania" title="Albania">Albania</a></span><br>•<span
										class="datasortkey" data-sort-value="Lebanon"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/23px-Flag_of_Lebanon.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/35px-Flag_of_Lebanon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/45px-Flag_of_Lebanon.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Lebanon" title="Lebanon">Lebanon</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Algeria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/23px-Flag_of_Algeria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/35px-Flag_of_Algeria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/45px-Flag_of_Algeria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Algeria" title="Algeria">Algeria</a></span><br>•<span
										class="datasortkey" data-sort-value="Hungary"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/23px-Flag_of_Hungary.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/35px-Flag_of_Hungary.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/46px-Flag_of_Hungary.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Hungary" title="Hungary">Hungary</a></span><br>•<span
										class="datasortkey" data-sort-value="Bulgaria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/23px-Flag_of_Bulgaria.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/35px-Flag_of_Bulgaria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/46px-Flag_of_Bulgaria.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bulgaria" title="Bulgaria">Bulgaria</a></span><br>•<span
										class="datasortkey" data-sort-value="Iraq"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Iraq" title="Iraq">Iraq</a></span><br>•<span class="datasortkey"
										data-sort-value="Bosnia and Herzegovina"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Flag_of_Bosnia_and_Herzegovina.svg/23px-Flag_of_Bosnia_and_Herzegovina.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Flag_of_Bosnia_and_Herzegovina.svg/35px-Flag_of_Bosnia_and_Herzegovina.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Flag_of_Bosnia_and_Herzegovina.svg/46px-Flag_of_Bosnia_and_Herzegovina.svg.png 2x"
														data-file-width="800"
														data-file-height="400"></span></span>&nbsp;</span><a
											href="/wiki/Bosnia_and_Herzegovina" title="Bosnia and Herzegovina">Bosnia
											and Herzegovina</a></span><br>•<span class="datasortkey"
										data-sort-value="Cyprus"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/23px-Flag_of_Cyprus.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/35px-Flag_of_Cyprus.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/45px-Flag_of_Cyprus.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Cyprus" title="Cyprus">Cyprus</a></span><br>•<span
										class="datasortkey" data-sort-value="Russia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Russia" title="Russia">Russia</a></span><br>•<span
										class="datasortkey" data-sort-value="Ukraine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/23px-Flag_of_Ukraine.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/35px-Flag_of_Ukraine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/45px-Flag_of_Ukraine.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Ukraine" title="Ukraine">Ukraine</a></span><br>•<span
										class="datasortkey" data-sort-value="Saudi Arabia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/23px-Flag_of_Saudi_Arabia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/35px-Flag_of_Saudi_Arabia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/45px-Flag_of_Saudi_Arabia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi
											Arabia</a></span><br>•<span class="datasortkey" data-sort-value="Iran"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Libya"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/23px-Flag_of_Libya.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/35px-Flag_of_Libya.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/46px-Flag_of_Libya.svg.png 2x"
														data-file-width="960"
														data-file-height="480"></span></span>&nbsp;</span><a
											href="/wiki/Libya" title="Libya">Libya</a></span><br>•<span
										class="datasortkey" data-sort-value="Palestine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/23px-Flag_of_Palestine.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/35px-Flag_of_Palestine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/46px-Flag_of_Palestine.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/State_of_Palestine"
											title="State of Palestine">Palestine</a></span><br>•<span
										class="datasortkey" data-sort-value="Israel"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/21px-Flag_of_Israel.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/32px-Flag_of_Israel.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/41px-Flag_of_Israel.svg.png 2x"
														data-file-width="1100"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Israel" title="Israel">Israel</a></span><br>•<span
										class="datasortkey" data-sort-value="Jordan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/23px-Flag_of_Jordan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/35px-Flag_of_Jordan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/46px-Flag_of_Jordan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Jordan" title="Jordan">Jordan</a></span><br>•<span
										class="datasortkey" data-sort-value="Romania"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/23px-Flag_of_Romania.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/35px-Flag_of_Romania.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/45px-Flag_of_Romania.svg.png 2x"
														data-file-width="600"
														data-file-height="400"></span></span>&nbsp;</span><a
											href="/wiki/Romania" title="Romania">Romania</a></span><br>•<span
										class="datasortkey" data-sort-value="Sudan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/23px-Flag_of_Sudan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/35px-Flag_of_Sudan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/46px-Flag_of_Sudan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Sudan" title="Sudan">Sudan</a></span><br>•<span
										class="datasortkey" data-sort-value="Somalia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_Somalia.svg/23px-Flag_of_Somalia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_Somalia.svg/35px-Flag_of_Somalia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_Somalia.svg/45px-Flag_of_Somalia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Somalia" title="Somalia">Somalia</a></span><br>•<span
										class="datasortkey" data-sort-value="Ethiopia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/Flag_of_Ethiopia.svg/23px-Flag_of_Ethiopia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/Flag_of_Ethiopia.svg/35px-Flag_of_Ethiopia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/71/Flag_of_Ethiopia.svg/46px-Flag_of_Ethiopia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Ethiopia" title="Ethiopia">Ethiopia</a></span><br>•<span
										class="datasortkey" data-sort-value="Djibouti"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_Djibouti.svg/23px-Flag_of_Djibouti.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_Djibouti.svg/35px-Flag_of_Djibouti.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_Djibouti.svg/45px-Flag_of_Djibouti.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Djibouti" title="Djibouti">Djibouti</a></span><br>•<span
										class="datasortkey" data-sort-value="Yemen"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/23px-Flag_of_Yemen.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/35px-Flag_of_Yemen.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/45px-Flag_of_Yemen.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Yemen" title="Yemen">Yemen</a></span><br>•<span
										class="datasortkey" data-sort-value="Kuwait"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/23px-Flag_of_Kuwait.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/35px-Flag_of_Kuwait.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/46px-Flag_of_Kuwait.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kuwait" title="Kuwait">Kuwait</a></span><br>•<span
										class="datasortkey" data-sort-value="Tunisia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/23px-Flag_of_Tunisia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/35px-Flag_of_Tunisia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/45px-Flag_of_Tunisia.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Tunisia" title="Tunisia">Tunisia</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)"
											title="Georgia (country)">Georgia</a></span><br>•<span class="datasortkey"
										data-sort-value="Moldova"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/23px-Flag_of_Moldova.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/35px-Flag_of_Moldova.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/46px-Flag_of_Moldova.svg.png 2x"
														data-file-width="1800"
														data-file-height="900"></span></span>&nbsp;</span><a
											href="/wiki/Moldova" title="Moldova">Moldova</a></span><br>•<span
										class="datasortkey" data-sort-value="Slovenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/23px-Flag_of_Slovenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/35px-Flag_of_Slovenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/46px-Flag_of_Slovenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Slovenia" title="Slovenia">Slovenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Slovakia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Slovakia.svg/23px-Flag_of_Slovakia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Slovakia.svg/35px-Flag_of_Slovakia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Slovakia.svg/45px-Flag_of_Slovakia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Slovakia" title="Slovakia">Slovakia</a></span><br>•<span
										class="datasortkey" data-sort-value="Poland"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/23px-Flag_of_Poland.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/35px-Flag_of_Poland.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/1/12/Flag_of_Poland.svg/46px-Flag_of_Poland.svg.png 2x"
														data-file-width="1280"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Poland" title="Poland">Poland</a></span><br>•<span
										class="datasortkey" data-sort-value="Serbia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/23px-Flag_of_Serbia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/35px-Flag_of_Serbia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/45px-Flag_of_Serbia.svg.png 2x"
														data-file-width="1350"
														data-file-height="900"></span></span>&nbsp;</span><a
											href="/wiki/Serbia" title="Serbia">Serbia</a></span><br>•<span
										class="datasortkey" data-sort-value="Kosovo"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Flag_of_Kosovo.svg/21px-Flag_of_Kosovo.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Flag_of_Kosovo.svg/32px-Flag_of_Kosovo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Flag_of_Kosovo.svg/42px-Flag_of_Kosovo.svg.png 2x"
														data-file-width="840"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kosovo" title="Kosovo">Kosovo</a></span><br>•<span
										class="datasortkey" data-sort-value="Bulgaria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/23px-Flag_of_Bulgaria.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/35px-Flag_of_Bulgaria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/46px-Flag_of_Bulgaria.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bulgaria" title="Bulgaria">Bulgaria</a></span><br>•<span
										class="datasortkey" data-sort-value="Croatia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/23px-Flag_of_Croatia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/35px-Flag_of_Croatia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/46px-Flag_of_Croatia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Croatia" title="Croatia">Croatia</a></span><br>•<span
										class="datasortkey" data-sort-value="North Macedonia"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_North_Macedonia.svg/23px-Flag_of_North_Macedonia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_North_Macedonia.svg/35px-Flag_of_North_Macedonia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_North_Macedonia.svg/46px-Flag_of_North_Macedonia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/North_Macedonia" title="North Macedonia">North
											Macedonia</a></span><br>•<span class="datasortkey"
										data-sort-value="Eritrea"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/Flag_of_Eritrea.svg/23px-Flag_of_Eritrea.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/Flag_of_Eritrea.svg/35px-Flag_of_Eritrea.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/29/Flag_of_Eritrea.svg/46px-Flag_of_Eritrea.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Eritrea" title="Eritrea">Eritrea</a></span><br>•<span
										class="datasortkey" data-sort-value="Montenegro"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Montenegro.svg/23px-Flag_of_Montenegro.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Montenegro.svg/35px-Flag_of_Montenegro.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Montenegro.svg/46px-Flag_of_Montenegro.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Montenegro" title="Montenegro">Montenegro</a></span>
								</td>
								<td>1299–1922
								</td>
							</tr>
							<tr style="display: none;">
								<td>6
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Timurid.svg/23px-Timurid.svg.png"
													decoding="async" width="23" height="12" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Timurid.svg/35px-Timurid.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Timurid.svg/46px-Timurid.svg.png 2x"
													data-file-width="1399"
													data-file-height="747"></span></span></span><a
										href="/wiki/Timurid_empire" class="mw-redirect" title="Timurid empire">Timurid
										empire</a>
								</td>
								<td>4.4m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span><br>•<span
										class="datasortkey" data-sort-value="China"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/China" title="China">China</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="India"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/India" title="India">India</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Russia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Russia" title="Russia">Russia</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)"
											title="Georgia (country)">Georgia</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Iraq"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Iraq" title="Iraq">Iraq</a></span><br>•<span class="datasortkey"
										data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kazakhstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/23px-Flag_of_Kazakhstan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/35px-Flag_of_Kazakhstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/46px-Flag_of_Kazakhstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span>
								</td>
								<td>1370–1507
								</td>
							</tr>
							<tr style="display: none;">
								<td>7
								</td>
								<td><span class="datasortkey" data-sort-value="Fatimid Caliphate"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/White_flag_3_to_2.svg/23px-White_flag_3_to_2.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/White_flag_3_to_2.svg/35px-White_flag_3_to_2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/39/White_flag_3_to_2.svg/45px-White_flag_3_to_2.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Fatimid_Caliphate" title="Fatimid Caliphate">Fatimid
											Caliphate</a></span>
								</td>
								<td>4.1m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Egypt"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/23px-Flag_of_Egypt.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/35px-Flag_of_Egypt.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/45px-Flag_of_Egypt.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Egypt" title="Egypt">Egypt</a></span><br>•<span
										class="datasortkey" data-sort-value="Palestine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/23px-Flag_of_Palestine.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/35px-Flag_of_Palestine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/46px-Flag_of_Palestine.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/State_of_Palestine"
											title="State of Palestine">Palestine</a></span><br>•<span
										class="datasortkey" data-sort-value="Lebanon"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/23px-Flag_of_Lebanon.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/35px-Flag_of_Lebanon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/45px-Flag_of_Lebanon.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Lebanon" title="Lebanon">Lebanon</a></span><br>•<span
										class="datasortkey" data-sort-value="Jordan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/23px-Flag_of_Jordan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/35px-Flag_of_Jordan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/46px-Flag_of_Jordan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Jordan" title="Jordan">Jordan</a></span><br>•<span
										class="datasortkey" data-sort-value="Algeria"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/23px-Flag_of_Algeria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/35px-Flag_of_Algeria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/45px-Flag_of_Algeria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Algeria" title="Algeria">Algeria</a></span><br>•<span
										class="datasortkey" data-sort-value="Morocco"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/23px-Flag_of_Morocco.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/35px-Flag_of_Morocco.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/45px-Flag_of_Morocco.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Morocco" title="Morocco">Morocco</a></span><br>•<span
										class="datasortkey" data-sort-value="Tunisia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/23px-Flag_of_Tunisia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/35px-Flag_of_Tunisia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/45px-Flag_of_Tunisia.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Tunisia" title="Tunisia">Tunisia</a></span><br>•<span
										class="datasortkey" data-sort-value="Libya"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/23px-Flag_of_Libya.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/35px-Flag_of_Libya.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/46px-Flag_of_Libya.svg.png 2x"
														data-file-width="960"
														data-file-height="480"></span></span>&nbsp;</span><a
											href="/wiki/Libya" title="Libya">Libya</a></span><br>•<span
										class="datasortkey" data-sort-value="Saudi Arabia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/23px-Flag_of_Saudi_Arabia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/35px-Flag_of_Saudi_Arabia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/45px-Flag_of_Saudi_Arabia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi
											Arabia</a></span><br>•<span class="datasortkey" data-sort-value="Iraq"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Iraq" title="Iraq">Iraq</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Italy"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/23px-Flag_of_Italy.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/45px-Flag_of_Italy.svg.png 2x"
														data-file-width="1500"
														data-file-height="1000"></span></span>&nbsp;</span><a
											href="/wiki/Italy" title="Italy">Italy</a></span><br>•<span
										class="datasortkey" data-sort-value="Sudan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/23px-Flag_of_Sudan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/35px-Flag_of_Sudan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/46px-Flag_of_Sudan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Sudan" title="Sudan">Sudan</a></span><br>•<span
										class="datasortkey" data-sort-value="Israel"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/21px-Flag_of_Israel.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/32px-Flag_of_Israel.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/41px-Flag_of_Israel.svg.png 2x"
														data-file-width="1100"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Israel" title="Israel">Israel</a></span><br>•<span
										class="datasortkey" data-sort-value="Chad"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Flag_of_Chad.svg/23px-Flag_of_Chad.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Flag_of_Chad.svg/35px-Flag_of_Chad.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Flag_of_Chad.svg/45px-Flag_of_Chad.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Chad" title="Chad">Chad</a></span><br>•<span class="datasortkey"
										data-sort-value="Niger"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Flag_of_Niger.svg/18px-Flag_of_Niger.svg.png"
														decoding="async" width="18" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Flag_of_Niger.svg/27px-Flag_of_Niger.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Flag_of_Niger.svg/35px-Flag_of_Niger.svg.png 2x"
														data-file-width="700"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Niger" title="Niger">Niger</a></span>
								</td>
								<td>909–1171
								</td>
							</tr>
							<tr style="display: none;">
								<td>8
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_the_Mughal_Empire.png/23px-Flag_of_the_Mughal_Empire.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_the_Mughal_Empire.png/35px-Flag_of_the_Mughal_Empire.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_the_Mughal_Empire.png/45px-Flag_of_the_Mughal_Empire.png 2x"
													data-file-width="1357"
													data-file-height="905"></span></span></span><a
										href="/wiki/Mughal_Empire" title="Mughal Empire">Mughal Empire</a>
								</td>
								<td>4.0m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="India"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/India" title="India">India</a></span><br>•<span
										class="datasortkey" data-sort-value="Bangladesh"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/23px-Flag_of_Bangladesh.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/35px-Flag_of_Bangladesh.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/46px-Flag_of_Bangladesh.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bangladesh" title="Bangladesh">Bangladesh</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Iran"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Myanmar"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Flag_of_Myanmar.svg/23px-Flag_of_Myanmar.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Flag_of_Myanmar.svg/35px-Flag_of_Myanmar.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Flag_of_Myanmar.svg/45px-Flag_of_Myanmar.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Myanmar" title="Myanmar">Myanmar</a></span>
								</td>
								<td>1526–1857
								</td>
							</tr>
							<tr style="display: none;">
								<td>9
								</td>
								<td><span class="flagicon"><span typeof="mw:File"><span title="no"><img alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/Seljuk_Empire.png/25px-Seljuk_Empire.png"
													decoding="async" width="25" height="22" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/Seljuk_Empire.png/38px-Seljuk_Empire.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/54/Seljuk_Empire.png/50px-Seljuk_Empire.png 2x"
													data-file-width="800" data-file-height="713"></span></span></span><a
										href="/wiki/Seljuk_Empire" title="Seljuk Empire">Seljuk Empire</a>
								</td>
								<td>3.9m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Iraq"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Iraq" title="Iraq">Iraq</a></span><br>•<span class="datasortkey"
										data-sort-value="Oman"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/23px-Flag_of_Oman.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/35px-Flag_of_Oman.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/46px-Flag_of_Oman.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Oman" title="Oman">Oman</a></span><br>•<span class="datasortkey"
										data-sort-value="United Arab Emirates"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/23px-Flag_of_the_United_Arab_Emirates.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/35px-Flag_of_the_United_Arab_Emirates.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/46px-Flag_of_the_United_Arab_Emirates.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/United_Arab_Emirates" title="United Arab Emirates">United Arab
											Emirates</a></span><br>•<span class="datasortkey"
										data-sort-value="Bahrain"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/23px-Flag_of_Bahrain.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/35px-Flag_of_Bahrain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/46px-Flag_of_Bahrain.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bahrain" title="Bahrain">Bahrain</a></span><br>•<span
										class="datasortkey" data-sort-value="Qatar"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/23px-Flag_of_Qatar.svg.png"
														decoding="async" width="23" height="9" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/35px-Flag_of_Qatar.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/46px-Flag_of_Qatar.svg.png 2x"
														data-file-width="1400"
														data-file-height="550"></span></span>&nbsp;</span><a
											href="/wiki/Qatar" title="Qatar">Qatar</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Turkey"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Lebanon"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/23px-Flag_of_Lebanon.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/35px-Flag_of_Lebanon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/45px-Flag_of_Lebanon.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Lebanon" title="Lebanon">Lebanon</a></span><br>•<span
										class="datasortkey" data-sort-value="Palestine"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/23px-Flag_of_Palestine.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/35px-Flag_of_Palestine.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/46px-Flag_of_Palestine.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/State_of_Palestine"
											title="State of Palestine">Palestine</a></span><br>•<span
										class="datasortkey" data-sort-value="Israel"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/21px-Flag_of_Israel.svg.png"
														decoding="async" width="21" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/32px-Flag_of_Israel.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/41px-Flag_of_Israel.svg.png 2x"
														data-file-width="1100"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Israel" title="Israel">Israel</a></span><br>•<span
										class="datasortkey" data-sort-value="Jordan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/23px-Flag_of_Jordan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/35px-Flag_of_Jordan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/46px-Flag_of_Jordan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Jordan" title="Jordan">Jordan</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)" title="Georgia (country)">Georgia</a></span>
								</td>
								<td>1037–1194
								</td>
							</tr>
							<tr style="display: none;">
								<td>10
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Flag_of_Ilkhanate.svg/21px-Flag_of_Ilkhanate.svg.png"
													decoding="async" width="21" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Flag_of_Ilkhanate.svg/32px-Flag_of_Ilkhanate.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/07/Flag_of_Ilkhanate.svg/42px-Flag_of_Ilkhanate.svg.png 2x"
													data-file-width="700" data-file-height="500"></span></span></span><a
										href="/wiki/Ilkhanate" title="Ilkhanate">Ilkhanate</a>
								</td>
								<td>3.75m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkey"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x"
														data-file-width="1200"
														data-file-height="800"></span></span>&nbsp;</span><a
											href="/wiki/Turkey" title="Turkey">Turkey</a></span><br>•<span
										class="datasortkey" data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Armenia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/23px-Flag_of_Armenia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/35px-Flag_of_Armenia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/46px-Flag_of_Armenia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Armenia" title="Armenia">Armenia</a></span><br>•<span
										class="datasortkey" data-sort-value="Georgia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/23px-Flag_of_Georgia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/35px-Flag_of_Georgia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/45px-Flag_of_Georgia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Georgia_(country)"
											title="Georgia (country)">Georgia</a></span><br>•<span class="datasortkey"
										data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan" title="Turkmenistan">Turkmenistan</a></span>
								</td>
								<td>1295–1335 (<a href="/wiki/Islamic" class="mw-redirect" title="Islamic">Islamic</a>)
								</td>
							</tr>
							<tr style="display: none;">
								<td>11
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Khwarazmia.svg/23px-Flag_of_Khwarazmia.svg.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Khwarazmia.svg/35px-Flag_of_Khwarazmia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Khwarazmia.svg/46px-Flag_of_Khwarazmia.svg.png 2x"
													data-file-width="507" data-file-height="333"></span></span></span><a
										href="/wiki/Khwarazmian_Empire" title="Khwarazmian Empire">Khwarazmian
										Empire</a>
								</td>
								<td>3.6m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="China"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/China" title="China">China</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kazakhstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/23px-Flag_of_Kazakhstan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/35px-Flag_of_Kazakhstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/46px-Flag_of_Kazakhstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></span>
								</td>
							</tr>
							<tr style="display: none;">
								<td>12
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Chagatai_Khanate.svg/21px-Flag_of_Chagatai_Khanate.svg.png"
													decoding="async" width="21" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Chagatai_Khanate.svg/32px-Flag_of_Chagatai_Khanate.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Chagatai_Khanate.svg/42px-Flag_of_Chagatai_Khanate.svg.png 2x"
													data-file-width="1400"
													data-file-height="1000"></span></span></span><a
										href="/wiki/Chagatai_Khanate" title="Chagatai Khanate">Chagatai Khanate</a>
								</td>
								<td>3.5m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="China"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/China" title="China">China</a></span><br>•<span
										class="datasortkey" data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Kazakhstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/23px-Flag_of_Kazakhstan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/35px-Flag_of_Kazakhstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/46px-Flag_of_Kazakhstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Mongolia"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Mongolia.svg/23px-Flag_of_Mongolia.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Mongolia.svg/35px-Flag_of_Mongolia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Mongolia.svg/46px-Flag_of_Mongolia.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Mongolia" title="Mongolia">Mongolia</a></span><br>•<span
										class="datasortkey" data-sort-value="Russia"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Russia" title="Russia">Russia</a></span>
								</td>
								<td>1347–1660 (<a href="/wiki/Islamic" class="mw-redirect" title="Islamic">Islamic</a>)
								</td>
							</tr>
							<tr style="display: none;">
								<td>13
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_the_Ghaznavids_Empire.png/23px-Flag_of_the_Ghaznavids_Empire.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_the_Ghaznavids_Empire.png/35px-Flag_of_the_Ghaznavids_Empire.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_the_Ghaznavids_Empire.png/45px-Flag_of_the_Ghaznavids_Empire.png 2x"
													data-file-width="3264"
													data-file-height="2175"></span></span></span><a
										href="/wiki/Ghaznavid_Empire" class="mw-redirect"
										title="Ghaznavid Empire">Ghaznavid Empire</a>
								</td>
								<td>3.4m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Afghanistan"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Iran"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Pakistan"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="India"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/India" title="India">India</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="China"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/China" title="China">China</a></span><br>•<span
										class="datasortkey" data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Kyrgyzstan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/23px-Flag_of_Kyrgyzstan.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/35px-Flag_of_Kyrgyzstan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/46px-Flag_of_Kyrgyzstan.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></span><br>•<span
										class="datasortkey" data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span>
								</td>
								<td>977–1186
								</td>
							</tr>
							<tr style="display: none;">
								<td>14
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Delhi_Sultanate_Flag.svg/23px-Delhi_Sultanate_Flag.svg.png"
													decoding="async" width="23" height="11" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Delhi_Sultanate_Flag.svg/35px-Delhi_Sultanate_Flag.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Delhi_Sultanate_Flag.svg/46px-Delhi_Sultanate_Flag.svg.png 2x"
													data-file-width="2687"
													data-file-height="1267"></span></span></span><a
										href="/wiki/Delhi_Sultanate" title="Delhi Sultanate">Delhi Sultanate</a>
								</td>
								<td>3.2m²km
								</td>
								<td>•<span class="datasortkey" data-sort-value="India"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/India" title="India">India</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Bangladesh"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/23px-Flag_of_Bangladesh.svg.png"
														decoding="async" width="23" height="14" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/35px-Flag_of_Bangladesh.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/46px-Flag_of_Bangladesh.svg.png 2x"
														data-file-width="1000"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Bangladesh" title="Bangladesh">Bangladesh</a></span><br>•<span
										class="datasortkey" data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Nepal"><span class="flagicon"><span typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Flag_of_Nepal.svg/16px-Flag_of_Nepal.svg.png"
														decoding="async" width="16" height="20" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Flag_of_Nepal.svg/25px-Flag_of_Nepal.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Flag_of_Nepal.svg/33px-Flag_of_Nepal.svg.png 2x"
														data-file-width="726"
														data-file-height="885"></span></span>&nbsp;&nbsp;&nbsp;</span><a
											href="/wiki/Nepal" title="Nepal">Nepal</a></span>
								</td>
								<td>1206–1526
								</td>
							</tr>
							<tr style="display: none;">
								<td>15
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Safavid_Flag.svg/23px-Safavid_Flag.svg.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Safavid_Flag.svg/35px-Safavid_Flag.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/40/Safavid_Flag.svg/45px-Safavid_Flag.svg.png 2x"
													data-file-width="900" data-file-height="600"></span></span></span><a
										href="/wiki/Safavid_Empire" class="mw-redirect" title="Safavid Empire">Safavid
										Empire</a>
								</td>
								<td>2.9m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Afghanistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Azerbaijan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/23px-Flag_of_Azerbaijan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/35px-Flag_of_Azerbaijan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/46px-Flag_of_Azerbaijan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></span><br>•<span
										class="datasortkey" data-sort-value="Pakistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Iraq"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/23px-Flag_of_Iraq.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/35px-Flag_of_Iraq.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/45px-Flag_of_Iraq.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Iraq" title="Iraq">Iraq</a></span><br>•<span class="datasortkey"
										data-sort-value="Syria"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/23px-Flag_of_Syria.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/35px-Flag_of_Syria.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/45px-Flag_of_Syria.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Syria" title="Syria">Syria</a></span>
								</td>
								<td>1501–1736
								</td>
							</tr>
							<tr style="display: none;">
								<td>16
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Samanid.webp/23px-Samanid.webp.png"
													decoding="async" width="23" height="15" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Samanid.webp/35px-Samanid.webp.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Samanid.webp/45px-Samanid.webp.png 2x"
													data-file-width="1000"
													data-file-height="666"></span></span></span><a
										href="/wiki/Samanid_Dynasty" class="mw-redirect" title="Samanid Dynasty">Samanid
										Dynasty</a>
								</td>
								<td>2.85m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Afghanistan"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Pakistan"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span>
								</td>
								<td>819–999
								</td>
							</tr>
							<tr style="display: none;">
								<td>17
								</td>
								<td><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
													alt=""
													src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/State_Banner_of_Saffarid_Dynasty.jpg/23px-State_Banner_of_Saffarid_Dynasty.jpg"
													decoding="async" width="23" height="11" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/State_Banner_of_Saffarid_Dynasty.jpg/35px-State_Banner_of_Saffarid_Dynasty.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/State_Banner_of_Saffarid_Dynasty.jpg/46px-State_Banner_of_Saffarid_Dynasty.jpg 2x"
													data-file-width="350" data-file-height="160"></span></span></span><a
										href="/wiki/Saffarid_Dynasty" class="mw-redirect"
										title="Saffarid Dynasty">Saffarid Dynasty</a>
								</td>
								<td>2.85m² Km
								</td>
								<td>•<span class="datasortkey" data-sort-value="Afghanistan"><span
											class="flagicon"><span class="mw-image-border" typeof="mw:File"><span><img
														alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/23px-Flag_of_the_Taliban.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/35px-Flag_of_the_Taliban.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/46px-Flag_of_the_Taliban.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Afghanistan"
											title="Afghanistan">Afghanistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Pakistan"><span class="flagicon"><span class="mw-image-border"
												typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Pakistan" title="Pakistan">Pakistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Iran"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png"
														decoding="async" width="23" height="13" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x"
														data-file-width="630"
														data-file-height="360"></span></span>&nbsp;</span><a
											href="/wiki/Iran" title="Iran">Iran</a></span><br>•<span class="datasortkey"
										data-sort-value="Tajikistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/23px-Flag_of_Tajikistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/35px-Flag_of_Tajikistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/46px-Flag_of_Tajikistan.svg.png 2x"
														data-file-width="1200"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></span><br>•<span
										class="datasortkey" data-sort-value="Turkmenistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/23px-Flag_of_Turkmenistan.svg.png"
														decoding="async" width="23" height="15" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/35px-Flag_of_Turkmenistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/45px-Flag_of_Turkmenistan.svg.png 2x"
														data-file-width="900"
														data-file-height="600"></span></span>&nbsp;</span><a
											href="/wiki/Turkmenistan"
											title="Turkmenistan">Turkmenistan</a></span><br>•<span class="datasortkey"
										data-sort-value="Uzbekistan"><span class="flagicon"><span
												class="mw-image-border" typeof="mw:File"><span><img alt=""
														src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/23px-Flag_of_Uzbekistan.svg.png"
														decoding="async" width="23" height="12" class="mw-file-element"
														srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/35px-Flag_of_Uzbekistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/46px-Flag_of_Uzbekistan.svg.png 2x"
														data-file-width="1000"
														data-file-height="500"></span></span>&nbsp;</span><a
											href="/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></span>
								</td>
								<td>861–1003
								</td>
							</tr>
						</tbody>
						<tfoot></tfoot>
					</table>
					<h2><span class="mw-headline" id="Middle_East_and_North_Africa">Middle East and North
							Africa</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=2"
								title="Edit section: Middle East and North Africa"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<style data-mw-deduplicate="TemplateStyles:r1033289096">
						.mw-parser-output .hatnote {
							font-style: italic
						}

						.mw-parser-output div.hatnote {
							padding-left: 1.6em;
							margin-bottom: 0.5em
						}

						.mw-parser-output .hatnote i {
							font-style: normal
						}

						.mw-parser-output .hatnote+link+.hatnote {
							margin-top: -0.5em
						}
					</style>
					<div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/MENA"
							class="mw-redirect" title="MENA">MENA</a></div>
					<h3><span
							id="Mesopotamia_and_Levant_.28Iraq.2C_Jordan.2C_Lebanon.2C_Palestine.2C_Syria.29"></span><span
							class="mw-headline"
							id="Mesopotamia_and_Levant_(Iraq,_Jordan,_Lebanon,_Palestine,_Syria)">Mesopotamia and Levant
							(Iraq, Jordan, Lebanon, Palestine, Syria)</span><span class="mw-editsection"><span
								class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=3"
								title="Edit section: Mesopotamia and Levant (Iraq, Jordan, Lebanon, Palestine, Syria)"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h3>
					<ul>
						<li><a href="/wiki/Umayyad_caliphate" class="mw-redirect" title="Umayyad caliphate">Umayyad
								caliphate</a> (661–750, based in <a href="/wiki/Damascus" title="Damascus">Damascus</a>)
						</li>
						<li><a href="/wiki/Abbasid_caliphate" class="mw-redirect" title="Abbasid caliphate">Abbasid
								caliphate</a> (750–1258, based in <a href="/wiki/Baghdad" title="Baghdad">Baghdad</a>)
						</li>
						<li><a href="/wiki/Ayyubid_dynasty" title="Ayyubid dynasty">Ayyubid dynasty</a> (1171–1341,
							based in <a href="/wiki/Damascus" title="Damascus">Damascus</a> and <a href="/wiki/Aleppo"
								title="Aleppo">Aleppo</a>)</li>
						<li><a href="/wiki/Zengid_dynasty" title="Zengid dynasty">Zengid dynasty</a> (1127–1250, based
							in <a href="/wiki/Aleppo" title="Aleppo">Aleppo</a>)</li>
						<li><a href="/wiki/Burid_dynasty" title="Burid dynasty">Burid dynasty</a> (1104–1154)</li>
						<li><a href="/wiki/Hamdanid_dynasty" title="Hamdanid dynasty">Hamdanid dynasty</a> (890–1004,
							based in <a href="/wiki/Aleppo" title="Aleppo">Aleppo</a>)</li>
						<li><a href="/wiki/Uqaylid_dynasty" title="Uqaylid dynasty">Uqaylid dynasty</a> (990–1096;
							Syria, Iraq)</li>
						<li><a href="/wiki/Bani_Assad" class="mw-redirect" title="Bani Assad">Bani Assad</a> (990–1081,
							Iraq)</li>
						<li><a href="/wiki/Numayrid" class="mw-redirect" title="Numayrid">Numayrid</a> (990–1081; Syria,
							Turkey)</li>
						<li><a href="/wiki/Marwanids_(Diyar_Bakr)" title="Marwanids (Diyar Bakr)">Marwanid</a>
							(983–1085; Syria, Turkey, Armenia, Iraq)</li>
						<li><a href="/wiki/Mirdasid_dynasty" title="Mirdasid dynasty">Mirdasid dynasty</a> (1024–1080,
							Syria)</li>
						<li><a href="/wiki/Artuqids" title="Artuqids">Artuqids</a> (1101–1409; Syria, Turkey, Iraq)</li>
						<li><a href="/wiki/Baban" title="Baban">Baban</a> (1649–1851, Iraq)</li>
						<li><a href="/wiki/Soran_Emirate" title="Soran Emirate">Soran</a> (1816–1835, Iraq)</li>
						<li><a href="/wiki/Emirate_of_Hakkari" class="mw-redirect" title="Emirate of Hakkari">Emirate of
								Hakkari</a> (1380s–1845; Turkey, Syria)</li>
						<li><a href="/wiki/Bahdinan" title="Bahdinan">Bahdinan</a> (1339–1843, Iraq)</li>
						<li><a href="/wiki/Bohtan" title="Bohtan">Bohtan</a> (1330–1855)</li>
						<li><a href="/wiki/Principality_of_Bitlis" title="Principality of Bitlis">Principality of
								Bitlis</a> (1182–1847)</li>
						<li><a href="/wiki/Hadhabani" class="mw-redirect" title="Hadhabani">Hadhabani</a> (906–1070)
						</li>
						<li><a href="/wiki/Mukriyan" title="Mukriyan">Mukriyan</a> (1050–1500)</li>
						<li><a href="/wiki/Qarghuyah" title="Qarghuyah">Qarghuyah</a>, <a href="/wiki/Emirate_of_Aleppo"
								class="mw-redirect" title="Emirate of Aleppo">Emirate of Aleppo</a> (969–977)</li>
						<li><a href="/wiki/Nizari_Ismaili_state" title="Nizari Ismaili state">Nizari Ismaili state</a>
							(1090–1256; Iraq, Iran, Syria)</li>
						<li><a href="/wiki/Emirate_of_Aleppo" class="mw-redirect" title="Emirate of Aleppo">Emirate of
								Aleppo</a>, <a href="/w/index.php?title=Lulu%27_dynasty&amp;action=edit&amp;redlink=1"
								class="new" title="Lulu' dynasty (page does not exist)">Lulu' dynasty</a> (1004–1016)
						</li>
						<li><a href="/wiki/Assaf_dynasty" title="Assaf dynasty">Assaf dynasty</a> (1306–1591, Lebanon)
						</li>
						<li><a href="/wiki/Harfush_dynasty" title="Harfush dynasty">Harfush dynasty</a> (1517–1865,
							Lebanon, Syria)</li>
						<li><a href="/wiki/Mamluk_dynasty_of_Iraq" class="mw-redirect"
								title="Mamluk dynasty of Iraq">Mamluk dynasty of Iraq</a> (1734–1831)</li>
						<li><a href="/wiki/Emirate_of_Mosul" class="mw-redirect" title="Emirate of Mosul">Emirate of
								Mosul</a> (905–1096, 1127–1222, 1254–1383, 1758–1918)</li>
						<li><a href="/wiki/Emirate_of_Transjordan" title="Emirate of Transjordan">Emirate of
								Transjordan</a> (1921–1946; Jordan, Saudi Arabia, Iraq)</li>
						<li><a href="/wiki/Arab_Kingdom_of_Syria" title="Arab Kingdom of Syria">Arab Kingdom of
								Syria</a> (1920)</li>
						<li><a href="/wiki/Kingdom_of_Iraq" title="Kingdom of Iraq">Kingdom of Iraq</a> (1921–1958)</li>
						<li><a href="/wiki/Kingdom_of_Jordan" class="mw-redirect" title="Kingdom of Jordan">Kingdom of
								Jordan</a> (1921–present)</li>
					</ul>
					<h3><span class="mw-headline" id="Arabian_Peninsula_and_Persian_Gulf">Arabian Peninsula and Persian
							Gulf</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=4"
								title="Edit section: Arabian Peninsula and Persian Gulf"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h3>
					<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1033289096">
					<div role="note" class="hatnote navigation-not-searchable">Main article: <a
							href="/wiki/Arab_states_of_the_Persian_Gulf" title="Arab states of the Persian Gulf">Arab
							states of the Persian Gulf</a></div>
					<p><b>Saudi Arabia</b>
					</p>
					<ul>
						<li><a href="/wiki/Rashidun_Caliphate" title="Rashidun Caliphate">Rashidun Caliphate</a>
							(632–661)</li>
						<li><a href="/wiki/Mecca" title="Mecca">Emirate of Mecca</a> (1916–1924) Saudi State</li>
						<li><a href="/wiki/Emirate_of_Riyadh" title="Emirate of Riyadh">Emirate of Riyadh</a>
							(1903–1918) Saudi State</li>
						<li><a href="/wiki/Manfuha" class="mw-redirect" title="Manfuha">Manfuha Sheikhdom</a>
							(1682–1834)</li>
						<li><a href="/wiki/Abu_Arish" class="mw-redirect" title="Abu Arish">Abu Arish Sheikhdom</a>
							(1200–1863)</li>
						<li><a href="/wiki/Al_Bir" title="Al Bir">Al Bir Sheikhdom</a> (1600–1850)</li>
						<li><a href="/w/index.php?title=Ar_Rawdah&amp;action=edit&amp;redlink=1" class="new"
								title="Ar Rawdah (page does not exist)">Al Rawdah Sheikhdom</a> (1697–1790)</li>
						<li><a href="/wiki/Al-Kharj" title="Al-Kharj">Al-Kharj Emirate</a> (1688–1865)</li>
						<li><a href="/wiki/Unaizah" title="Unaizah">Unaizah Emirate</a> (1768–1904)</li>
						<li><a href="/wiki/Buraidah" title="Buraidah">Buraidah Emirate</a> (1768–1913)</li>
						<li><a href="/w/index.php?title=Awdah&amp;action=edit&amp;redlink=1" class="new"
								title="Awdah (page does not exist)">Awdah Sheikhdom</a> (1700–1790)</li>
						<li><a href="/wiki/Jalajil" title="Jalajil">Jalajil Sheikhdom</a> (1762–1831)</li>
						<li><a href="/wiki/Harmah" title="Harmah">Harmah Sheikhdom</a> (1700–1779)</li>
						<li><a href="/wiki/Al_Majma%27ah" title="Al Majma'ah">Al Majma'ah Sheikhdom</a> (1758–1908)</li>
						<li><a href="/wiki/Shaqra_(Saudi_Arabia)" title="Shaqra (Saudi Arabia)">Shaqra Sheikhdom</a>
							(1803–1834)</li>
						<li><a href="/wiki/Mutayr" title="Mutayr">Mutayr Sheikhdom</a> (1872–1903)</li>
						<li><a href="/wiki/%27Asir" class="mw-redirect" title="'Asir">'Asir Sheikhdom</a> (983–1003,
							1728–1863)</li>
						<li><a href="/wiki/Sheikdom_of_Upper_Asir" title="Sheikdom of Upper Asir">Sheikdom of Upper
								Asir</a> (1802–1923)</li>
						<li><a href="/wiki/%27Asir" class="mw-redirect" title="'Asir">Sheikhdom of Lower 'Asir</a>
							(1830–1930)</li>
						<li><a href="/wiki/Principality_of_Najran" title="Principality of Najran">Principality of
								Najran</a> (1633–1934)</li>
						<li><a href="/wiki/%27Uyayna" class="mw-redirect" title="'Uyayna">'Uyayna Sheikhdom</a>
							(1446–1768)</li>
						<li><a href="/wiki/Dhurma" title="Dhurma">Dhurma Sheikhdom</a> (1600–1757)</li>
						<li><a href="/w/index.php?title=Gatgat&amp;action=edit&amp;redlink=1" class="new"
								title="Gatgat (page does not exist)">Gatgat Sultanate</a> (1900–1924)</li>
						<li><a href="/wiki/Al_Murrah" title="Al Murrah">Al Murrah Emirate</a> (1900–1917)</li>
						<li><a href="/wiki/Emirate_of_Diriyah" title="Emirate of Diriyah">Emirate of Diriyah</a>
							(1744–1818) (First Saudi State)</li>
						<li><a href="/wiki/Emirate_of_Nejd" title="Emirate of Nejd">Emirate of Nejd</a> (1818–1891)
							(Second Saudi State)</li>
						<li><a href="/wiki/Emirate_of_Nejd_and_Hasa" title="Emirate of Nejd and Hasa">Emirate of Nejd
								and Hasa</a> (1902–1921) (Third Saudi State)</li>
						<li><a href="/wiki/Sharifate_of_Mecca" title="Sharifate of Mecca">Sharifate of Mecca</a>
							(968–1925)</li>
						<li><a href="/wiki/Emirate_of_Jabal_Shammar" title="Emirate of Jabal Shammar">Emirate of Jabal
								Shammar</a> (1836–1921)</li>
						<li><a href="/wiki/Sultanate_of_Nejd" title="Sultanate of Nejd">Sultanate of Nejd</a>
							(1921–1926)</li>
						<li><a href="/wiki/Idrisid_Emirate_of_Asir" title="Idrisid Emirate of Asir">Idrisid Emirate of
								Asir</a> (1909–1930)</li>
						<li><a href="/wiki/Kingdom_of_Hejaz" title="Kingdom of Hejaz">Kingdom of Hejaz</a> (1916–1925)
						</li>
						<li><a href="/wiki/Kingdom_of_Hejaz_and_Nejd" title="Kingdom of Hejaz and Nejd">Kingdom of Hejaz
								and Nejd</a> (1926–1932)</li>
						<li><a href="/wiki/Bani_Khalid_Emirate" title="Bani Khalid Emirate">Bani Khalid</a> (1669–1796)
						</li>
						<li><a href="/wiki/House_of_Saud" title="House of Saud">House of Saud</a> (1744–present)</li>
					</ul>
					<p><b>Bahrain</b>
					</p>
					<ul>
						<li><a href="/wiki/Qarmatians" title="Qarmatians">Qarmatians</a> (899–1077)</li>
						<li><a href="/wiki/Uyunid_Emirate" title="Uyunid Emirate">Uyunid Kingdom</a> (1076–1253)</li>
						<li><a href="/wiki/Usfurid" class="mw-redirect" title="Usfurid">Usfurid</a> (1253–1320)</li>
						<li><a href="/wiki/Jarwanid" class="mw-redirect" title="Jarwanid">Jarwanid</a> (1305–1487)</li>
						<li><a href="/wiki/Jabrids" title="Jabrids">Jabrids</a> (1480–1570)</li>
						<li><a href="/wiki/Bani_Khalid_Emirate" title="Bani Khalid Emirate">Bani Khalid</a> (1669–1796)
						</li>
						<li><a href="/wiki/House_of_Khalifa" title="House of Khalifa">House of Khalifa</a>
							(1783–present)</li>
					</ul>
					<p><b>Qatar</b>
					</p>
					<ul>
						<li><a href="/wiki/House_of_Thani" title="House of Thani">House of Thani</a> (1825–present)</li>
					</ul>
					<p><b>Kuwait</b>
					</p>
					<ul>
						<li><a href="/wiki/House_of_Al-Sabah" class="mw-redirect" title="House of Al-Sabah">House of
								Al-Sabah</a> (1752–present)</li>
					</ul>
					<p><b>United Arab Emirates</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate_of_Abu_Dhabi" title="Emirate of Abu Dhabi">Emirate of Abu Dhabi</a>
							(1761–present)</li>
						<li><a href="/wiki/Emirate_of_Ajman" title="Emirate of Ajman">Emirate of Ajman</a>
							(1816–present)</li>
						<li><a href="/wiki/Emirate_of_Dubai" title="Emirate of Dubai">Emirate of Dubai</a>
							(1833–present)</li>
						<li><a href="/wiki/Emirate_of_Fujairah" title="Emirate of Fujairah">Emirate of Fujairah</a>
							(1876–present)</li>
						<li><a href="/wiki/Emirate_of_Ras_Al_Khaimah" title="Emirate of Ras Al Khaimah">Emirate of Ras
								Al Khaimah</a> (1727–present)</li>
						<li><a href="/wiki/Emirate_of_Sharjah" title="Emirate of Sharjah">Emirate of Sharjah</a>
							(1803–present)</li>
						<li><a href="/wiki/Umm_Al_Qawain" class="mw-redirect" title="Umm Al Qawain">Emirate of Umm Al
								Quwain</a> (1775–present)</li>
						<li><a href="/wiki/Dibba" title="Dibba">Dibba</a> (1871–1953)</li>
						<li><a href="/wiki/Hamriyya" class="mw-redirect" title="Hamriyya">Hamriyya</a> (1875–1922)</li>
						<li><a href="/wiki/Al_Heera" title="Al Heera">Hira</a> (1915–1942)</li>
						<li><a href="/wiki/Kalba" title="Kalba">Kalba</a> (1871–1952)</li>
					</ul>
					<p><b>Oman</b>
					</p>
					<ul>
						<li><a href="/wiki/Dhofar" class="mw-redirect" title="Dhofar">Sultanate of Zafar</a> (1421–1975)
						</li>
						<li><a href="/wiki/Imamate_of_Oman" title="Imamate of Oman">Imamate of Oman</a> (750–1696)</li>
						<li><a href="/wiki/Omani_Empire" title="Omani Empire">Omani Empire</a> (1696–1856)</li>
						<li><a href="/wiki/Sultanate_of_Muscat_and_Oman" class="mw-redirect"
								title="Sultanate of Muscat and Oman">Sultanate of Muscat and Oman</a> (1820–1970)</li>
						<li><a href="/wiki/Sultanate_of_Oman" class="mw-redirect" title="Sultanate of Oman">Sultanate of
								Oman</a> (1970–present)</li>
					</ul>
					<p><b>Yemen</b>
					</p>
					<ul>
						<li><a href="/wiki/Banu_Ukhaidhir" title="Banu Ukhaidhir">Banu Ukhaidhir</a> (865–1066)</li>
						<li><a href="/wiki/Mutawakkilite_Kingdom_of_Yemen" class="mw-redirect"
								title="Mutawakkilite Kingdom of Yemen">Mutawakkilite Kingdom of Yemen</a> (1918–1970)
						</li>
						<li><a href="/wiki/Zurayids" title="Zurayids">Zurayids</a> (1083–1174)</li>
						<li><a href="/wiki/Hamdanids" class="mw-redirect" title="Hamdanids">Hamdanids</a> (1099–1174)
						</li>
						<li><a href="/wiki/Sulaymanids" title="Sulaymanids">Sulaymanids</a> (1063–1174)</li>
						<li><a href="/wiki/Mahdids" title="Mahdids">Mahdids</a> (1159–1174)</li>
						<li><a href="/wiki/Sulayhid_dynasty" title="Sulayhid dynasty">Sulayhid dynasty</a> (1047–1138)
						</li>
						<li><a href="/wiki/Rassids" class="mw-redirect" title="Rassids">Rassids</a> of <a
								href="/wiki/Yemen" title="Yemen">Yemen</a> (897–1962)</li>
						<li><a href="/wiki/Rasulid" class="mw-redirect" title="Rasulid">Rasulid</a> of <a
								href="/wiki/Yemen" title="Yemen">Yemen</a> (1229–1454)</li>
						<li><a href="/wiki/Najahid_dynasty" title="Najahid dynasty">Najahid dynasty</a> (1022–1158)</li>
						<li><a href="/wiki/Ziyadid_dynasty" title="Ziyadid dynasty">Ziyadid dynasty</a> (819–856)</li>
						<li><a href="/wiki/Tahirid_dynasty" title="Tahirid dynasty">Tahirid dynasty</a> (1454–1517)</li>
						<li><a href="/wiki/Bani_Ukhaidhir" class="mw-redirect" title="Bani Ukhaidhir">Bani Ukhaidhir</a>
							(865–1066)</li>
						<li><a href="/wiki/Yufirids" class="mw-redirect" title="Yufirids">Yufirids</a> (847–997)</li>
						<li><a href="/wiki/Yemeni_Zaidi_State" title="Yemeni Zaidi State">Yemeni Zaidi State</a>
							(1547–1849)</li>
						<li><a href="/wiki/Alawi_Sheikhdom" title="Alawi Sheikhdom">Alawi Sheikhdom</a> (1743–1967)</li>
						<li><a href="/wiki/Aqrabi_Sheikhdom" class="mw-redirect" title="Aqrabi Sheikhdom">Aqrabi
								Sheikhdom</a> (1770–1967)</li>
						<li><a href="/wiki/Audhali_Sultanate" class="mw-redirect" title="Audhali Sultanate">Audhali
								Sultanate</a> (1750–1970)</li>
						<li><a href="/wiki/Lower_Aulaqi_Sultanate" title="Lower Aulaqi Sultanate">Lower Aulaqi
								Sultanate</a> (1700–1967)</li>
						<li><a href="/wiki/Upper_Aulaqi_Sheikhdom" title="Upper Aulaqi Sheikhdom">Upper Aulaqi
								Sheikhdom</a> (1750–1967)</li>
						<li><a href="/wiki/Upper_Aulaqi_Sultanate" title="Upper Aulaqi Sultanate">Upper Aulaqi
								Sultanate</a> (1700–1967)</li>
						<li><a href="/wiki/Beihan_Emirate" class="mw-redirect" title="Beihan Emirate">Beihan Emirate</a>
							(1680–1967)</li>
						<li><a href="/wiki/Sheikhdom_of_al-Hawra" title="Sheikhdom of al-Hawra">Sheikhdom of
								al-Hawra</a> (1858–1967)</li>
						<li><a href="/wiki/Emirate_of_Dhala" title="Emirate of Dhala">Emirate of Dhala</a> (1750–1967)
						</li>
						<li><a href="/wiki/Dathina_Sheikhdom" class="mw-redirect" title="Dathina Sheikhdom">Dathina
								Sheikhdom</a> (1947–1967)</li>
						<li><a href="/wiki/Fadhli_Sultanate" title="Fadhli Sultanate">Fadhli Sultanate</a> (1670–1967)
						</li>
						<li><a href="/wiki/Haushabi" title="Haushabi">Sultanate of Haushabi</a> (1730–1967)</li>
						<li><a href="/wiki/Lahej_Sultanate" class="mw-redirect" title="Lahej Sultanate">Lahej
								Sultanate</a> (1728–1967)</li>
						<li><a href="/wiki/Maflahi_Sheikhdom" class="mw-redirect" title="Maflahi Sheikhdom">Maflahi
								Sheikhdom</a> (1850–1967)</li>
						<li><a href="/wiki/Shaib" title="Shaib">Sheikhdom of Shaib</a> (1850–1967)</li>
						<li><a href="/wiki/Lower_Yafa" title="Lower Yafa">Sultanate of Lower Yafa</a> (1681–1967)</li>
						<li><a href="/wiki/Upper_Yafa" title="Upper Yafa">Sultanate of Upper Yafa</a> (1800–1967)</li>
						<li><a href="/wiki/Al-Dhubi" title="Al-Dhubi">Sheikhdom Al-Dhubi</a> (1750–1967)</li>
						<li><a href="/wiki/Hadrami_Sheikhdom" class="mw-redirect" title="Hadrami Sheikhdom">Hadrami
								Sheikhdom</a> (1820–1967)</li>
						<li><a href="/wiki/Mawsata" title="Mawsata">Emirate of Mawsata</a> (1780–1967)</li>
						<li><a href="/w/index.php?title=Sheikhdom_of_al-Irqa&amp;action=edit&amp;redlink=1" class="new"
								title="Sheikhdom of al-Irqa (page does not exist)">Sheikhdom of al-Irqa</a> (1800–1967)
						</li>
						<li><a href="/wiki/Mahra_Sultanate" title="Mahra Sultanate">Mahra Sultanate</a> (1432–1967)</li>
						<li><a href="/wiki/Kathiri_Sultanate" class="mw-redirect" title="Kathiri Sultanate">Kathiri
								Sultanate</a> (1395–1967)</li>
						<li><a href="/wiki/Tarim,_Yemen" title="Tarim, Yemen">Tarim</a> <a href="/wiki/Sultanate"
								class="mw-redirect" title="Sultanate">Sultanate</a> (1916–1945)</li>
						<li><a href="/wiki/Qu%27aiti_Sultanate" class="mw-redirect" title="Qu'aiti Sultanate">Qu'aiti
								Sultanate</a> (1858–1967)</li>
						<li><a href="/wiki/Ash_Shihr" class="mw-redirect" title="Ash Shihr">Ash Shihr</a> (1752–1858)
						</li>
						<li><a href="/wiki/Al_Mukalla" class="mw-redirect" title="Al Mukalla">Al Mukalla</a> (1707–1881)
						</li>
					</ul>
					<p><b>Regional</b>
					</p>
					<ul>
						<li><a href="/wiki/Tulunids" title="Tulunids">Tulunids</a> (868–905; Egypt, Syria)</li>
						<li><a href="/wiki/Rassids" class="mw-redirect" title="Rassids">Rassids</a> (897–1962)</li>
						<li><a href="/wiki/Qarmatians" title="Qarmatians">Qarmatian Kingdom</a> (899–976)</li>
						<li><a href="/wiki/Sharifate_of_Mecca" title="Sharifate of Mecca">Sharifate of Mecca</a>
							(968–1925)</li>
						<li><a href="/wiki/Ayyubid_Dynasty" class="mw-redirect" title="Ayyubid Dynasty">Ayyubid
								Dynasty</a> (1171–1260)</li>
						<li><a href="/wiki/Rasulids" class="mw-redirect" title="Rasulids">Rasulids</a> (1229–1454)</li>
						<li><a href="/wiki/Mamluk_Sultanate" title="Mamluk Sultanate">Mamluk Dynasty</a> (1250–1517)
						</li>
						<li><a href="/wiki/Omani_Empire" title="Omani Empire">Omani Sultanate</a> (1696–1856)</li>
						<li><a href="/wiki/Kingdom_of_Saudi_Arabia" class="mw-redirect"
								title="Kingdom of Saudi Arabia">Kingdom of Saudi Arabia</a> (1932–present)</li>
					</ul>
					<h3><span id="North_Africa_.28Algeria.2C_Egypt.2C_Libya.2C_Morocco.2C_Tunisia.29"></span><span
							class="mw-headline" id="North_Africa_(Algeria,_Egypt,_Libya,_Morocco,_Tunisia)">North Africa
							(Algeria, Egypt, Libya, Morocco, Tunisia)</span><span class="mw-editsection"><span
								class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=5"
								title="Edit section: North Africa (Algeria, Egypt, Libya, Morocco, Tunisia)"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h3>
					<ul>
						<li><a href="/wiki/Rustamid_dynasty" title="Rustamid dynasty">Rustamid dynasty</a> (777–909)
						</li>
						<li><a href="/wiki/Aghlabids" title="Aghlabids">Aghlabid dynasty</a> (800–909; <a
								href="/wiki/Ifriqiya" title="Ifriqiya">Ifriqiya</a>, Tunisia, East-Algeria, West-Libya,
							Sicily)</li>
						<li><a href="/wiki/Fatimid_dynasty" title="Fatimid dynasty">Fatimid dynasty</a> (909–1171; North
							Africa, Middle East)</li>
						<li><a href="/wiki/Zirid_dynasty" title="Zirid dynasty">Zirid dynasty</a> (972–1148)</li>
						<li><a href="/wiki/Almoravid_dynasty" title="Almoravid dynasty">Almoravid dynasty</a>
							(1040–1147; Maghreb, Spain)</li>
						<li><a href="/wiki/Almohad_dynasty" class="mw-redirect" title="Almohad dynasty">Almohad
								dynasty</a> (1121–1269)</li>
						<li><a href="/wiki/Ayyubid_dynasty" title="Ayyubid dynasty">Ayyubid dynasty</a> (1171–1254)</li>
						<li><a href="/wiki/Hafsid_dynasty" title="Hafsid dynasty">Hafsid dynasty</a> (1229–1574)</li>
						<li><a href="/wiki/Nasrid_dynasty" title="Nasrid dynasty">Nasrid dynasty</a> (1232–1492; <a
								href="/wiki/Granada" title="Granada">Granada</a>, <a href="/wiki/Ceuta"
								title="Ceuta">Ceuta</a>)</li>
						<li><a href="/wiki/Marinid_dynasty" class="mw-redirect" title="Marinid dynasty">Marinid
								dynasty</a> (1244–1465)</li>
						<li><a href="/wiki/Abbasid_Caliph" class="mw-redirect" title="Abbasid Caliph">Abbasid Caliph</a>
							(1250–1517; North Africa, Middle East) under <a href="/wiki/Mamluk_Sultanate_of_Cairo"
								class="mw-redirect" title="Mamluk Sultanate of Cairo">Mamluk Sultanate of Cairo</a></li>
						<li><a href="/wiki/Wattasid_dynasty" title="Wattasid dynasty">Wattasid dynasty</a> (1472–1554)
						</li>
						<li><a href="/wiki/Saadi_dynasty" class="mw-redirect" title="Saadi dynasty">Saadi dynasty</a>
							(1511–1628)</li>
						<li><a href="/wiki/Alaouite_dynasty" class="mw-redirect" title="Alaouite dynasty">Alaouite
								dynasty</a> (1631–present)</li>
					</ul>
					<p><b>Algeria</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate_of_Tlemcen" title="Emirate of Tlemcen">Emirate of Tlemcen</a>
							(736–790)</li>
						<li><a href="/wiki/Emirate_of_Cordoba" class="mw-redirect" title="Emirate of Cordoba">Emirate of
								Cordoba</a> (756–929)</li>
						<li><a href="/wiki/Rustamid_dynasty" title="Rustamid dynasty">Rustamid dynasty</a> (777–909)
						</li>
						<li><a href="/wiki/Banu_Ifran" title="Banu Ifran">Banu Ifran</a> (830–1040)</li>
						<li><a href="/wiki/Fatimid_dynasty" title="Fatimid dynasty">Fatimid dynasty</a> (909–1171)</li>
						<li><a href="/wiki/Zirid_dynasty" title="Zirid dynasty">Zirid dynasty</a> (972–1148)</li>
						<li><a href="/wiki/Mozabite_people" title="Mozabite people">Confederation of Banu Mzab</a>
							(1012–1882)</li>
						<li><a href="/wiki/Hammadid_dynasty" title="Hammadid dynasty">Hammadid dynasty</a> (1014–1152)
						</li>
						<li><a href="/wiki/Zayyanids" class="mw-redirect" title="Zayyanids">Kingdom of Tlemcen</a>
							(1235–1556)</li>
						<li><a href="/w/index.php?title=Hafsid_Emirate_of_Be%E2%80%99ja%C3%AEa&amp;action=edit&amp;redlink=1"
								class="new" title="Hafsid Emirate of Be’jaîa (page does not exist)">Hafsid Emirate of
								Be’jaîa</a> (1285–1510)</li>
						<li><a href="/wiki/Zab_Emirate" title="Zab Emirate">Zab Emirate</a> (1402)</li>
						<li><a href="/wiki/Sultanate_of_Tuggurt" title="Sultanate of Tuggurt">Sultanate of Tuggurt</a>
							(1414–1854)</li>
						<li><a href="/wiki/Kingdom_of_Ait_Abbas" class="mw-redirect"
								title="Kingdom of Ait Abbas">Kingdom of Ait Abbas</a> (1510–1872)</li>
						<li><a href="/wiki/Kingdom_of_Kuku" title="Kingdom of Kuku">Kingdom of Kuku</a> (1515–1638)</li>
						<li><a href="/wiki/Regency_of_Algiers" title="Regency of Algiers">Kingdom of Algiers</a>
							(1515–1837)</li>
						<li><a href="/wiki/Emirate_of_Abdelkader" title="Emirate of Abdelkader">Emirate of
								Abdelkader</a> (1832–1847)</li>
						<li><a href="/wiki/Zenata" title="Zenata">Zenata Kingdoms</a></li>
					</ul>
					<p><b>Egypt</b>
					</p>
					<ul>
						<li><a href="/wiki/Tulunids" title="Tulunids">Tulunids</a> (868–905)</li>
						<li><a href="/wiki/Fatimid_dynasty" title="Fatimid dynasty">Fatimid dynasty</a> (909–1171)</li>
						<li><a href="/wiki/Ikhshidids" class="mw-redirect" title="Ikhshidids">Ikhshidids</a> (935–969)
						</li>
						<li><a href="/wiki/Banu_Kanz" title="Banu Kanz">Banu Kanz</a> (1004–1412)</li>
						<li><a href="/wiki/Ayyubid_dynasty" title="Ayyubid dynasty">Ayyubid dynasty</a> (1171–1254)</li>
						<li><a href="/wiki/Mamluk_Sultanate" title="Mamluk Sultanate">Mamluk dynasty</a> (1250–1517)
						</li>
						<li><a href="/wiki/Abbasid_Caliph" class="mw-redirect" title="Abbasid Caliph">Abbasid Caliph</a>
							(1250–1517) under <a href="/wiki/Mamluk_Sultanate_of_Cairo" class="mw-redirect"
								title="Mamluk Sultanate of Cairo">Mamluk Sultanate of Cairo</a></li>
						<li><a href="/wiki/Khedivate_of_Egypt" title="Khedivate of Egypt">Khedivate of Egypt</a>
							(1867–1914)</li>
						<li><a href="/wiki/Sultanate_of_Egypt" title="Sultanate of Egypt">Sultanate of Egypt</a>
							(1914–1922)</li>
						<li><a href="/wiki/Kingdom_of_Egypt" title="Kingdom of Egypt">Kingdom of Egypt</a> (1922–1953)
						</li>
					</ul>
					<p><b>Tunisia</b>
					</p>
					<ul>
						<li><a href="/wiki/Aghlabids" title="Aghlabids">Aghlabid dynasty</a> (800–909)</li>
						<li><a href="/wiki/Khurasanid_dynasty" class="mw-redirect" title="Khurasanid dynasty">Khurasanid
								dynasty</a> (1059–1158)</li>
						<li><a href="/wiki/Hafsid_Kingdom" class="mw-redirect" title="Hafsid Kingdom">Hafsid Kingdom</a>
							(1229–1574)</li>
						<li><a href="/w/index.php?title=Hafsid_Kingdom_of_B%C3%A9ja%C3%AFa&amp;action=edit&amp;redlink=1"
								class="new" title="Hafsid Kingdom of Béjaïa (page does not exist)">Hafsid Kingdom of
								Béjaïa</a></li>
						<li><a href="/wiki/Beylik_of_Tunis" title="Beylik of Tunis">Beylik of Tunis</a> (1573–1613)</li>
						<li><a href="/wiki/Muradid_dynasty" title="Muradid dynasty">Muradid dynasty</a> (1613–1705)</li>
						<li><a href="/wiki/Husaynid_dynasty" class="mw-redirect" title="Husaynid dynasty">Husaynid
								dynasty</a> (1705–1956)</li>
						<li><a href="/wiki/Kingdom_of_Tunisia" title="Kingdom of Tunisia">Kingdom of Tunisia</a>
							(1956–1957)</li>
					</ul>
					<p><b>Morocco</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate_of_Nekor" title="Emirate of Nekor">Emirate of Nekor</a> (710–1019)
						</li>
						<li><a href="/wiki/Banu_Midrar" class="mw-redirect" title="Banu Midrar">Emirate of Sijilmasa</a>
							(758–1055)</li>
						<li><a href="/wiki/Muhallabids" title="Muhallabids">Muhallabids</a> (771–793, <a
								href="/wiki/Ifriqiya" title="Ifriqiya">Ifriqiya</a>)</li>
						<li><a href="/wiki/Idrisid_dynasty" title="Idrisid dynasty">Idrisid dynasty</a> (788–974)</li>
						<li><a href="/wiki/Almoravid_dynasty" title="Almoravid dynasty">Almoravid dynasty</a>
							(1040–1147)</li>
						<li><a href="/wiki/Almohad_dynasty" class="mw-redirect" title="Almohad dynasty">Almohad
								dynasty</a> (1121–1269 CE)</li>
						<li><a href="/wiki/Marinid_Sultanate" title="Marinid Sultanate">Marinid Sultanate</a>
							(1244–1465, Maghreb)</li>
						<li><a href="/wiki/Wattasid_dynasty" title="Wattasid dynasty">Wattasid dynasty</a> (1472–1554)
						</li>
						<li><a href="/wiki/Saadi_Sultanate" title="Saadi Sultanate">Saadi Sultanate</a> (1549–1659)</li>
						<li><a href="/wiki/Pashalik_of_Timbuktu" title="Pashalik of Timbuktu">Pashalik of Timbuktu</a>
							(1591–1833; Western Sahara, Maghreb, Mali)</li>
						<li><a href="/w/index.php?title=Naqsid_principality_of_Tetouan&amp;action=edit&amp;redlink=1"
								class="new" title="Naqsid principality of Tetouan (page does not exist)">Naqsid
								principality of Tetouan</a> (1597–1673)</li>
						<li><a href="/wiki/Republic_of_Bou_Regreg" class="mw-redirect"
								title="Republic of Bou Regreg">Republic of Bou Regreg</a> (1627–1668)</li>
						<li><a href="/wiki/Alaouite_dynasty" class="mw-redirect" title="Alaouite dynasty">Alaouite
								dynasty</a> (1666–present)</li>
						<li><a href="/wiki/Republic_of_the_Rif" title="Republic of the Rif">Republic of the Rif</a>
							(1921–1926)</li>
						<li><a href="/wiki/Zenata" title="Zenata">Zenata Kingdoms</a></li>
					</ul>
					<p><b>Libya</b>
					</p>
					<ul>
						<li><a href="/wiki/Fezzan" title="Fezzan">Sultanate of Fezzan</a> (918–1190)</li>
						<li><a href="/wiki/Banu_Thabit" title="Banu Thabit">Sultanate of Tripolitania</a> (1327–1401)
							under <a href="/wiki/Bani_Ammar" title="Bani Ammar">Bani Ammar</a></li>
						<li><a href="/wiki/Pasha_of_Tripoli" title="Pasha of Tripoli">Pasha of Tripoli</a> (1551–1711)
						</li>
						<li><a href="/wiki/Fezzan" title="Fezzan">Kingdom of Fezzan</a> (1556–1856) under <a
								href="/w/index.php?title=Awlad_Muhammad_dynasty&amp;action=edit&amp;redlink=1"
								class="new" title="Awlad Muhammad dynasty (page does not exist)">Awlad Muhammad
								dynasty</a></li>
						<li><a href="/wiki/Karamanli_dynasty" title="Karamanli dynasty">Karamanli dynasty</a>
							(1711–1835)</li>
						<li><a href="/wiki/Senusiyya" title="Senusiyya">Senussi Kingdom</a> (1843–1942)</li>
						<li><a href="/wiki/Tripolitanian_Republic" title="Tripolitanian Republic">Tripolitanian
								Republic</a> (1918–1922)</li>
						<li><a href="/wiki/Cyrenaica_Emirate" class="mw-redirect" title="Cyrenaica Emirate">Cyrenaica
								Emirate</a> (1949–1951)</li>
						<li><a href="/wiki/Kingdom_of_Libya" title="Kingdom of Libya">Kingdom of Libya</a> (1951–1969)
						</li>
					</ul>
					<h2><span class="mw-headline" id="Horn_of_Africa">Horn of Africa</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=6"
								title="Edit section: Horn of Africa"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Somalia</b>
					</p>
					<ul>
						<li><a href="/wiki/Hawiye" title="Hawiye">Warsangeli Sultanate</a> (1218 --1886)</li>
						<li><a href="/wiki/Tunni_Sultanate" title="Tunni Sultanate">Tunni Sultanate</a> (900–1300)</li>
						<li><a href="/wiki/Mogadishu_Sultanate" class="mw-redirect"
								title="Mogadishu Sultanate">Mogadishu Sultanate</a> (900–1300)</li>
						<li><a href="/wiki/Ajuran_Sultanate" title="Ajuran Sultanate">Ajuran Sultanate</a> (1300–1798)
						</li>
						<li><a href="/wiki/Hiraab_Imamate" title="Hiraab Imamate">Hiraab Imamate</a> (1600–1860)</li>
						<li><a href="/wiki/Majeerteen_Sultanate" title="Majeerteen Sultanate">Majeerteen Sultanate</a>
							(1600–1927)</li>
						<li><a href="/wiki/Geledi_Sultanate" class="mw-redirect" title="Geledi Sultanate">Geledi
								Sultanate</a> (1843–1908)</li>
						<li><a href="/wiki/Hobyo_Sultanate" class="mw-redirect" title="Hobyo Sultanate">Hobyo
								Sultanate</a> (1878–1925)</li>
					</ul>
					<ul>
						<li><a href="/wiki/Sultanate_of_Showa" class="mw-redirect" title="Sultanate of Showa">Sultanate
								of Showa</a> (896–1285)</li>
						<li><a href="/wiki/Sultanate_of_Ifat" title="Sultanate of Ifat">Sultanate of Ifat</a>
							(1185–1415)</li>
						<li><a href="/wiki/Adal_Sultanate" title="Adal Sultanate">Adal Sultanate</a> (1415–1555)</li>
						<li><a href="/wiki/Isaaq_Sultanate" title="Isaaq Sultanate">Isaaq Sultanate</a> (1750–1884)</li>
						<li><a href="/wiki/Habr_Yunis_Sultanate" title="Habr Yunis Sultanate">Habr Yunis Sultanate</a>
							(1769–1907)</li>
						<li><a href="/wiki/Zeila" title="Zeila">Zeila Emirate</a> (1415–1420)</li>
						<li><a href="/wiki/Harla_Kingdom" title="Harla Kingdom">Harla Kingdom</a> (501–1500)</li>
						<li><a href="/wiki/Sultanate_of_Dawaro" class="mw-redirect"
								title="Sultanate of Dawaro">Sultanate of Dawaro</a> (915–1329)</li>
					</ul>
					<p><b>Ethiopia</b>
					</p>
					<ul>
						<li><a href="/wiki/Harla_Kingdom" title="Harla Kingdom">Harla Kingdom</a> (501–1500)</li>
						<li><a href="/wiki/Sultanate_of_Showa" class="mw-redirect" title="Sultanate of Showa">Sultanate
								of Showa</a> (896–1285)</li>
						<li><a href="/wiki/Sultanate_of_Dawaro" class="mw-redirect"
								title="Sultanate of Dawaro">Sultanate of Dawaro</a> (915–1329)</li>
						<li><a href="/wiki/Sultanate_of_Bale" title="Sultanate of Bale">Sultanate of Bale</a>
							(1200–1324)</li>
						<li><a href="/wiki/Sultanate_of_Arababni" title="Sultanate of Arababni">Sultanate of
								Arababni</a> (1200–1314)</li>
						<li><a href="/wiki/Hadiya_Sultanate" class="mw-redirect" title="Hadiya Sultanate">Hadiya
								Sultanate</a> (1200–1495)</li>
						<li><a href="/wiki/Sultanate_of_Ifat" title="Sultanate of Ifat">Sultanate of Ifat</a>
							(1285–1415)</li>
						<li><a href="/wiki/Fatagar" title="Fatagar">Fatagar</a> (1400–1650)</li>
						<li><a href="/wiki/Adal_Sultanate" title="Adal Sultanate">Adal Sultanate</a> (1415–1577)</li>
						<li><a href="/wiki/Sultanate_of_Harar" class="mw-redirect" title="Sultanate of Harar">Sultanate
								of Harar</a> (1526–1577)</li>
						<li><a href="/wiki/Imamate_of_Aussa" title="Imamate of Aussa">Imamate of Aussa</a> (1557–1672)
						</li>
						<li><a href="/wiki/Emirate_of_Harar" title="Emirate of Harar">Emirate of Harar</a> (1647–1887)
						</li>
						<li><a href="/wiki/Sultanate_of_Aussa" title="Sultanate of Aussa">Sultanate of Aussa</a>
							(1734–present)</li>
						<li><a href="/wiki/Isaaq_Sultanate" title="Isaaq Sultanate">Isaaq Sultanate</a> (1750–1884)</li>
						<li><a href="/wiki/Habr_Yunis_Sultanate" title="Habr Yunis Sultanate">Habr Yunis Sultanate</a>
							(1769–1907)</li>
						<li><a href="/wiki/Wollo" class="mw-redirect" title="Wollo">Wollo Kingdom</a> (1760–1896)</li>
						<li><a href="/wiki/Kingdom_of_Gimma" class="mw-redirect" title="Kingdom of Gimma">Kingdom of
								Gimma</a> (1770–1902)</li>
						<li><a href="/wiki/Kingdom_of_Gumma" title="Kingdom of Gumma">Kingdom of Gumma</a> (1770–1902)
						</li>
						<li><a href="/wiki/Kingdom_of_Jimma" title="Kingdom of Jimma">Kingdom of Jimma</a> (1790–1932)
						</li>
						<li><a href="/wiki/Argobba_people" title="Argobba people">Gobaad Sultanate</a> (1800–present)
						</li>
						<li><a href="/wiki/Kingdom_of_Limmu-Ennarea" title="Kingdom of Limmu-Ennarea">Kingdom of
								Limmu-Ennarea</a> (1801–1890)</li>
						<li><a href="/wiki/Kingdom_of_Gera" title="Kingdom of Gera">Kingdom of Gera</a> (1835–1887)</li>
					</ul>
					<p><b>Eritrea</b>
					</p>
					<ul>
						<li><a href="/wiki/Sultanate_of_Dahlak" title="Sultanate of Dahlak">Sultanate of Dahlak</a>
							(1050–1557)</li>
						<li><a href="/wiki/Beja_people" title="Beja people">Beja Kingdom</a> (930–1500)</li>
					</ul>
					<p><b>Djibouti</b>
					</p>
					<ul>
						<li><a href="/wiki/Tadjoura" title="Tadjoura">Tadjoura Sultanate</a> (1450–present)</li>
						<li><a href="/wiki/Rahayta" title="Rahayta">Rahayta Sultanate</a> (1600–present)</li>
					</ul>
					<h2><span class="mw-headline" id="Persian_Plateau">Persian Plateau</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=7"
								title="Edit section: Persian Plateau"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Iran</b>
					</p>
					<figure class="mw-default-size" typeof="mw:File/Thumb"><a
							href="/wiki/File:Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo,_dated_1552-1568.jpg"
							class="mw-file-description"><img
								src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo%2C_dated_1552-1568.jpg/220px-Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo%2C_dated_1552-1568.jpg"
								decoding="async" width="220" height="282" class="mw-file-element"
								srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo%2C_dated_1552-1568.jpg/330px-Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo%2C_dated_1552-1568.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo%2C_dated_1552-1568.jpg/440px-Portrait_of_Shah_Ismail_I._Inscribed_%22Ismael_Sophy_Rex_Pers%22._Painted_by_Cristofano_dell%27Altissimo%2C_dated_1552-1568.jpg 2x"
								data-file-width="776" data-file-height="993"></a>
						<figcaption>Shah Ismail I, founder of Safavid dynasty</figcaption>
					</figure>
					<ul>
						<li><a href="/wiki/Paduspanid" class="mw-redirect" title="Paduspanid">Paduspanid</a> (665–1598)
						</li>
						<li><a href="/wiki/Dulafid_dynasty" title="Dulafid dynasty">Dulafid dynasty</a> (800–898, <a
								href="/wiki/Jibal" title="Jibal">Jibal</a>)</li>
						<li><a href="/wiki/Justanids" title="Justanids">Justanids</a> (805–1004)</li>
						<li><a href="/wiki/Samanid_Empire" title="Samanid Empire">Samanid Empire</a> (819–999)</li>
						<li><a href="/wiki/Tahirid_dynasty" title="Tahirid dynasty">Tahirid dynasty</a> (821–873)</li>
						<li><a href="/wiki/Qarinvand_dynasty" title="Qarinvand dynasty">Qarinvand dynasty</a> (823–1110)
						</li>
						<li><a href="/wiki/Saffarid_dynasty" title="Saffarid dynasty">Saffarid dynasty</a> (861–1003)
						</li>
						<li><a href="/wiki/Shirvanshah" class="mw-redirect" title="Shirvanshah">Shirvanshah</a>
							(861–1538)</li>
						<li><a href="/wiki/Alavid_dynasty" class="mw-redirect" title="Alavid dynasty">Alavid dynasty</a>
							(864–928)</li>
						<li><a href="/wiki/Sajid_dynasty" title="Sajid dynasty">Sajid dynasty</a> (889–929)</li>
						<li><a href="/wiki/Ma%27danids" class="mw-redirect" title="Ma'danids">Ma'danids</a> (890–1110,
							<a href="/wiki/Makran" title="Makran">Makran</a>)</li>
						<li><a href="/wiki/Aishanids" class="mw-redirect" title="Aishanids">Aishanids</a> (912–961)</li>
						<li><a href="/wiki/Sallarid_dynasty" title="Sallarid dynasty">Sallarid dynasty</a> (919–1062)
						</li>
						<li><a href="/wiki/Ziyarid_dynasty" title="Ziyarid dynasty">Ziyarid dynasty</a> (928–1043)</li>
						<li><a href="/wiki/Banu_Ilyas" title="Banu Ilyas">Banu Ilyas</a> (932–968)</li>
						<li><a href="/wiki/Buyid_dynasty" title="Buyid dynasty">Buyid dynasty</a> (934–1062)</li>
						<li><a href="/wiki/Rawadid_dynasty" title="Rawadid dynasty">Rawadid dynasty</a> (955–1071, <a
								href="/wiki/Tabriz" title="Tabriz">Tabriz</a>)</li>
						<li><a href="/wiki/Hasanwayhid" class="mw-redirect" title="Hasanwayhid">Hasanwayhid</a>
							(959–1015)</li>
						<li><a href="/wiki/Annazids" title="Annazids">Annazids</a> (990–1180; Iran, Iraq)</li>
						<li><a href="/wiki/Ma%27munid_dynasty" class="mw-redirect" title="Ma'munid dynasty">Ma'munid
								dynasty</a> (995–1017)</li>
						<li><a href="/wiki/Kakuyid" class="mw-redirect" title="Kakuyid">Kakuyid</a> (1008–1141)</li>
						<li><a href="/wiki/Great_Seljuq_Empire" class="mw-redirect" title="Great Seljuq Empire">Great
								Seljuq Empire</a> (1029–1194)</li>
						<li><a href="/wiki/Nasrid_dynasty_(Sistan)" title="Nasrid dynasty (Sistan)">Nasrid dynasty
								(Sistan)</a> (1029–1225)</li>
						<li><a href="/wiki/Kerman_Seljuk_Sultanate" title="Kerman Seljuk Sultanate">Kerman Seljuk
								Sultanate</a> (1041–1187)</li>
						<li><a href="/wiki/Ormus" title="Ormus">Hormuz Kingdom</a> (1060–1622)</li>
						<li><a href="/wiki/Khwarezmian_Empire" class="mw-redirect"
								title="Khwarezmian Empire">Khwarezmian Empire</a> under <a href="/wiki/Khwarezm"
								class="mw-redirect" title="Khwarezm">Khwarezm-Shâh dynasty</a> (1077–1231)</li>
						<li><a href="/wiki/Nizari_Ismaili_state" title="Nizari Ismaili state">Nizari Ismaili state</a>
							(1090–1256)</li>
						<li><a href="/wiki/Ahmadilis" title="Ahmadilis">Ahmadilis</a> (1122–1220)</li>
						<li><a href="/wiki/Eldiguzids" title="Eldiguzids">Eldiguzids</a> (1135–1225)</li>
						<li><a href="/wiki/Atabegs_of_Yazd" title="Atabegs of Yazd">Atabegs of Yazd</a> (1141–1319)</li>
						<li><a href="/wiki/Salghurids" title="Salghurids">Salghurids</a> (1148–1282, <a
								href="/wiki/Shiraz" title="Shiraz">Shiraz</a>)</li>
						<li><a href="/wiki/Hazaraspids" title="Hazaraspids">Hazaraspids</a> (1155–1424)</li>
						<li><a href="/wiki/Khorshidi_dynasty" title="Khorshidi dynasty">Khorshidi dynasty</a>
							(1155–1597, <a href="/wiki/Lorestan" class="mw-redirect" title="Lorestan">Lorestan</a>)</li>
						<li><a href="/wiki/Qutlugh-Khanids" title="Qutlugh-Khanids">Qutlugh-Khanids</a> (1222–1306)</li>
						<li><a href="/wiki/Mihrabanid_dynasty" class="mw-redirect" title="Mihrabanid dynasty">Mihrabanid
								dynasty</a> (1236–1537, <a href="/wiki/Baluchistan" class="mw-redirect"
								title="Baluchistan">Baluchistan</a>)</li>
						<li><a href="/wiki/Kart_dynasty" title="Kart dynasty">Kart dynasty</a> (1244–1381)</li>
						<li><a href="/wiki/Ilkhanate" title="Ilkhanate">Ilkhanate</a> (Mongol) (1295–1357)</li>
						<li><a href="/wiki/Muzaffarids_(Iran)" title="Muzaffarids (Iran)">Muzaffarids</a> (1314–1393)
						</li>
						<li><a href="/wiki/Sarbadars" title="Sarbadars">Sarbadars</a> (1332–1386)</li>
						<li><a href="/wiki/Chupanids" class="mw-redirect" title="Chupanids">Chupanids</a> (1335–1357)
						</li>
						<li><a href="/wiki/Injuids" title="Injuids">Injuids</a> (1335–1357)</li>
						<li><a href="/wiki/Jalayirid_Sultanate" title="Jalayirid Sultanate">Jalayirid Sultanate</a>
							(1335–1432)</li>
						<li><a href="/wiki/Afrasiyab_dynasty" title="Afrasiyab dynasty">Afrasiyab dynasty</a>
							(1349–1504)</li>
						<li><a href="/wiki/Marashis" class="mw-redirect" title="Marashis">Marashis</a> (1359–1596)</li>
						<li><a href="/wiki/Kara_Koyunlu" class="mw-redirect" title="Kara Koyunlu">Kara Koyunlu</a>
							(1374–1468)</li>
						<li><a href="/wiki/Ak_Koyunlu" class="mw-redirect" title="Ak Koyunlu">Ak Koyunlu</a> (1378–1501)
						</li>
						<li><a href="/wiki/Musha%27sha%27iyyah" class="mw-redirect"
								title="Musha'sha'iyyah">Musha'sha'iyyah</a> (1436–1729)</li>
						<li><a href="/wiki/Talysh_Khanate" title="Talysh Khanate">Talysh Khanate</a> (1747–1832)</li>
						<li><a href="/wiki/Maku_Khanate" title="Maku Khanate">Maku Khanate</a> (1747–1922)</li>
						<li><a href="/wiki/Ardabil_Khanate" title="Ardabil Khanate">Ardabil Khanate</a> (1747–1808)</li>
						<li><a href="/wiki/Khalkhal_Khanate" title="Khalkhal Khanate">Khalkhal Khanate</a> (1747–1809)
						</li>
						<li><a href="/wiki/Khoy_Khanate" title="Khoy Khanate">Khoy Khanate</a> (1747–1813)</li>
						<li><a href="/wiki/Maragheh_Khanate" class="mw-redirect" title="Maragheh Khanate">Maragheh
								Khanate</a> (1610–1925)</li>
						<li><a href="/wiki/Marand_Khanate" title="Marand Khanate">Marand Khanate</a> (1747–1828)</li>
						<li><a href="/wiki/Sarab_Khanate" title="Sarab Khanate">Sarab Khanate</a> (1747–1797)</li>
						<li><a href="/wiki/Tabriz_Khanate" title="Tabriz Khanate">Tabriz Khanate</a> (1747–1802)</li>
						<li><a href="/wiki/Urmia_Khanate" class="mw-redirect" title="Urmia Khanate">Urmia Khanate</a>
							(1747–1865)</li>
						<li><a href="/wiki/Emirate_of_Muhammara" title="Emirate of Muhammara">Emirate of Muhammara</a>
							(1740–1925)</li>
						<li><a href="/wiki/Safavid_dynasty" title="Safavid dynasty">Safavid dynasty</a> (1502–1736)</li>
						<li><a href="/wiki/Afsharid_dynasty" title="Afsharid dynasty">Afsharid dynasty</a> (1736–1796)
						</li>
						<li><a href="/wiki/Zand_dynasty" title="Zand dynasty">Zand dynasty</a> (1751–1794)</li>
						<li><a href="/wiki/Qajar_dynasty" title="Qajar dynasty">Qajar dynasty</a> (1789–1925)</li>
						<li><a href="/wiki/Pahlavi_dynasty" title="Pahlavi dynasty">Pahlavi dynasty</a> (1925–1979)</li>
					</ul>
					<p><b>Anatolia (Turkey)</b>
					</p>
					<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1033289096">
					<div role="note" class="hatnote navigation-not-searchable">Main article: <a
							href="/wiki/Anatolian_Beyliks" class="mw-redirect" title="Anatolian Beyliks">Anatolian
							Beyliks</a></div>
					<figure class="mw-halign-right" typeof="mw:File/Thumb"><a
							href="/wiki/File:Battle_of_Preveza_(1538).jpg" class="mw-file-description"><img
								src="//upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Battle_of_Preveza_%281538%29.jpg/240px-Battle_of_Preveza_%281538%29.jpg"
								decoding="async" width="240" height="150" class="mw-file-element"
								srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Battle_of_Preveza_%281538%29.jpg/360px-Battle_of_Preveza_%281538%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Battle_of_Preveza_%281538%29.jpg/480px-Battle_of_Preveza_%281538%29.jpg 2x"
								data-file-width="800" data-file-height="499"></a>
						<figcaption>Barbarossa Hayreddin Pasha</figcaption>
					</figure>
					<ul>
						<li><a href="/wiki/Seljuk_Empire" title="Seljuk Empire">Great Seljuk Empire</a> (1029–1194)</li>
						<li><a href="/wiki/Ottoman_Empire" title="Ottoman Empire">Ottoman Empire</a> (1299–1923)</li>
						<li><a href="/wiki/Seljuk_Sultanate_of_R%C3%BBm" class="mw-redirect"
								title="Seljuk Sultanate of Rûm">Seljuk Sultanate of Rûm</a> (1077–1308)</li>
						<li><a href="/wiki/Danishmends" class="mw-redirect" title="Danishmends">Danishmends Dynasty</a>
							(1071–1178)</li>
						<li><a href="/wiki/Mengujekids" class="mw-redirect" title="Mengujekids">Mengujekids Dynasty</a>
							(1072–1277)</li>
						<li><a href="/wiki/Saltukids" title="Saltukids">Saltukids Dynasty</a> (1071–1202)</li>
						<li><a href="/wiki/Artuqids" title="Artuqids">Artuqids Dynasty</a> (1101–1409)</li>
						<li><a href="/wiki/Karamanids" title="Karamanids">Karamanids</a> (1250–1487)</li>
						<li><a href="/wiki/Chaka_of_Smyrna" class="mw-redirect" title="Chaka of Smyrna">Chaka of
								Smyrna</a> (1081–1098)</li>
						<li><a href="/wiki/Shah-Armens" title="Shah-Armens">Shah-Armens</a> (1100–1207)</li>
						<li><a href="/wiki/Beylik_of_Dilmac" class="mw-redirect" title="Beylik of Dilmac">Beylik of
								Dilmac</a> (1085–1398)</li>
						<li><a href="/wiki/Inalids" title="Inalids">Inalids</a> (1095–1183)</li>
						<li><a href="/wiki/Beylik_of_Cubukogullari" class="mw-redirect"
								title="Beylik of Cubukogullari">Beylik of Cubukogullari</a> (1085–1112)</li>
						<li><a href="/wiki/Ahiler" class="mw-redirect" title="Ahiler">Ahiler</a> (1290–1362)</li>
						<li><a href="/wiki/Alaiye" title="Alaiye">Alaiye</a> (1293–1471)</li>
						<li><a href="/wiki/Aydinids" title="Aydinids">Aydinids</a> (1300–1425)</li>
						<li><a href="/wiki/Beyliks_of_Canik" title="Beyliks of Canik">Beyliks of Canik</a> (1300–1460)
						</li>
						<li><a href="/wiki/Jandarids" class="mw-redirect" title="Jandarids">Jandarids</a> (1291–1461)
						</li>
						<li><a href="/wiki/Chobanids" title="Chobanids">Chobanids</a> (1211–1309)</li>
						<li><a href="/wiki/Dulkadirids" class="mw-redirect" title="Dulkadirids">Dulkadirids</a>
							(1348–1522)</li>
						<li><a href="/wiki/Eretnids" class="mw-redirect" title="Eretnids">Eretnids</a> (1335–1390)</li>
						<li><a href="/wiki/Beylik_of_Erzincan" class="mw-redirect"
								title="Beylik of Erzincan">Erzincan</a> (1379–1410)</li>
						<li><a href="/wiki/Eshrefids" title="Eshrefids">Eshrefids</a> (1285–1326)</li>
						<li><a href="/wiki/Germiyanids" title="Germiyanids">Germiyanids</a> (1300–1429)</li>
						<li><a href="/wiki/Hamidids" title="Hamidids">Hamidids</a> (1300–1391)</li>
						<li><a href="/wiki/Kadi_Burhan_al-Din" title="Kadi Burhan al-Din">Kadi Burhan al-Din</a>
							(1381–1398)</li>
						<li><a href="/wiki/Karasids" title="Karasids">Karasids</a> (1296–1357)</li>
						<li><a href="/wiki/Beylik_of_L%C3%A2dik" title="Beylik of Lâdik">Ladik</a> (1262–1391)</li>
						<li><a href="/wiki/Mente%C5%9Fe_(beylik)" class="mw-redirect"
								title="Menteşe (beylik)">Mentese</a> (1261–1424)</li>
						<li><a href="/wiki/Pervaneoglu" class="mw-redirect" title="Pervaneoglu">Pervaneoglu</a>
							(1277–1322)</li>
						<li><a href="/wiki/Ramadanids" class="mw-redirect" title="Ramadanids">Ramadanids</a> (1352–1608)
						</li>
						<li><a href="/wiki/Sahib_Ataids" title="Sahib Ataids">Sahib Ataids</a> (1275–1341)</li>
						<li><a href="/wiki/Sarukhanids" title="Sarukhanids">Sarukhanids</a> (1300–1410)</li>
						<li><a href="/wiki/Beylik_of_Teke" title="Beylik of Teke">Teke</a> (1321–1423)</li>
						<li><a href="/wiki/Emirate_of_Melitene" class="mw-redirect" title="Emirate of Melitene">Emirate
								of Melitene</a> (850–934)</li>
						<li><a href="/wiki/Marwanids_(Diyar_Bakr)" title="Marwanids (Diyar Bakr)">Amida</a> (983–1085)
						</li>
						<li><a href="/wiki/Ayyubid_dynasty" title="Ayyubid dynasty">Ayyubid dynasty</a> (1171–1341)</li>
						<li><a href="/w/index.php?title=Zurarid&amp;action=edit&amp;redlink=1" class="new"
								title="Zurarid (page does not exist)">Zurarid</a> <a href="/wiki/Emirate"
								title="Emirate">Emirate</a> of <a href="/wiki/Arzen" title="Arzen">Arzen</a> (850–930)
						</li>
						<li><a href="/wiki/Emirate_of_Bing%C3%B6l" title="Emirate of Bingöl">Emirate of Bingöl</a>
							(1231–1864)</li>
						<li><a href="/wiki/Emirate_of_Bradost" title="Emirate of Bradost">Emirate of Bradost</a>
							(1510–1609)</li>
						<li><a href="/wiki/Emirate_of_Bitlis" class="mw-redirect" title="Emirate of Bitlis">Emirate of
								Bitlis</a> (1182–1815)</li>
						<li><a href="/w/index.php?title=Emirate_of_%C3%87emi%C3%A7gezek&amp;action=edit&amp;redlink=1"
								class="new" title="Emirate of Çemiçgezek (page does not exist)">Emirate of
								Çemiçgezek</a>(1200–1663)</li>
						<li><a href="/wiki/Emirate_of_Hasankeyf" title="Emirate of Hasankeyf">Emirate of Hasankeyf</a>
							(1232–1524)</li>
						<li><a href="/wiki/Emirate_of_Hakkari" class="mw-redirect" title="Emirate of Hakkari">Emirate of
								Hakkari</a> (1380–1847)</li>
						<li><a href="/wiki/Emirate_of_Pazooka" title="Emirate of Pazooka">Emirate of Pazooka</a>
							(1499–1587)</li>
						<li><a href="/wiki/Emirate_of_Palu" title="Emirate of Palu">Emirate of Palu</a> (1495–1850)</li>
					</ul>
					<p><b>Azerbaijan</b>
					</p>
					<ul>
						<li><a href="/wiki/Eldiguzids" title="Eldiguzids">Eldiguzids</a> (1136–1225)</li>
						<li><a href="/wiki/Shirvanshah" class="mw-redirect" title="Shirvanshah">Shirvanshah</a>
							(1207–1607)</li>
						<li><a href="/wiki/Ak_Koyunlu" class="mw-redirect" title="Ak Koyunlu">Ak Koyunlu</a> (1378–1501)
						</li>
						<li><a href="/wiki/Kara_Koyunlu" class="mw-redirect" title="Kara Koyunlu">Kara Koyunlu</a>
							(1374–1468)</li>
						<li><a href="/wiki/Shamakhy_Khanate" title="Shamakhy Khanate">Shamakhy Khanate</a> (1721–1749)
						</li>
						<li>Salyan Khanate (1729–1782)</li>
						<li><a href="/wiki/Karabakh_Khanate" title="Karabakh Khanate">Karabakh Khanate</a> (1748–1822)
						</li>
						<li><a href="/wiki/Erivan_Khanate" title="Erivan Khanate">Erivan Khanate</a> (1747–1828)</li>
						<li><a href="/wiki/Afsharid_dynasty" title="Afsharid dynasty">Afsharid dynasty</a> (1736–1796)
						</li>
						<li><a href="/wiki/Safavid_dynasty" title="Safavid dynasty">Safavid dynasty</a> (1501–1736)</li>
						<li><a href="/wiki/Shaki_Khanate" title="Shaki Khanate">Shaki Khanate</a> (1743–1819)</li>
						<li><a href="/wiki/Ganja_khanate" class="mw-redirect" title="Ganja khanate">Ganja khanate</a>
							(1747–1805)</li>
						<li><a href="/wiki/Quba_Khanate" title="Quba Khanate">Quba Khanate</a> (1726–1806)</li>
						<li><a href="/wiki/Baku_Khanate" title="Baku Khanate">Baku Khanate</a> (1735–1806)</li>
						<li><a href="/wiki/Khalkhal_Khanate" title="Khalkhal Khanate">Khalkhal Khanate</a> (1747–1809)
						</li>
						<li><a href="/wiki/Nakhichevan_Khanate" title="Nakhichevan Khanate">Nakhichevan Khanate</a>
							(1747–1828)</li>
						<li><a href="/wiki/Shirvan_Khanate" title="Shirvan Khanate">Shirvan Khanate</a> (1748–1820)</li>
						<li><a href="/wiki/Khoja" title="Khoja">Khoja</a> <a href="/wiki/Shamakha" class="mw-redirect"
								title="Shamakha">Shamakha</a> (1748–1786)</li>
						<li>Yeni <a href="/wiki/Shamakha" class="mw-redirect" title="Shamakha">Shamakha</a> (1748–1786)
						</li>
						<li><a href="/wiki/Ardabil_Khanate" title="Ardabil Khanate">Ardabil Khanate</a> (1747–1808)</li>
						<li><a href="/wiki/Urmia_Khanate" class="mw-redirect" title="Urmia Khanate">Urmia Khanate</a>
							(1747–1865)</li>
						<li><a href="/wiki/Javad_Khanate" title="Javad Khanate">Javad Khanate</a> (1747–1805)</li>
						<li><a href="/wiki/Shirvan_Khanate" title="Shirvan Khanate">Shirvan Khanate</a> (1748–1820)</li>
						<li><a href="/wiki/Talysh_Khanate" title="Talysh Khanate">Talysh Khanate</a> (1747–1828)</li>
						<li><a href="/wiki/Elisu_Sultanate" title="Elisu Sultanate">Elisu Sultanate</a> (1604–1844)</li>
						<li><a href="/wiki/Great_Seljuk_Empire" class="mw-redirect" title="Great Seljuk Empire">Great
								Seljuk Empire</a> (1037–1194)</li>
						<li><a href="/wiki/Derbent_Khanate" title="Derbent Khanate">Derbent Khanate</a> (1747–1806)</li>
						<li><a href="/wiki/Qajar_dynasty" title="Qajar dynasty">Qajar dynasty</a> (1789–1925)</li>
						<li><a href="/wiki/Shamakha" class="mw-redirect" title="Shamakha">Shamakha</a> ll (1786–1844)
						</li>
					</ul>
					<p><b>Armenia</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate_of_Armenia" class="mw-redirect" title="Emirate of Armenia">Emirate of
								Armenia</a> (697–700, 711–885)</li>
						<li><a href="/wiki/Erivan_Khanate" title="Erivan Khanate">Erivan Khanate</a> (1736–1827)</li>
						<li><a href="/wiki/Karabakh_Khanate" title="Karabakh Khanate">Karabakh Khanate</a> (1606–1806)
						</li>
						<li><a href="/wiki/Shaddadids" title="Shaddadids">Shaddadids</a> (951–1199)</li>
						<li><a href="/wiki/Sallarid_dynasty" title="Sallarid dynasty">Sallarid dynasty</a> (919–1062)
						</li>
						<li><a href="/wiki/Sajid_dynasty" title="Sajid dynasty">Sajid dynasty</a> (889–929)</li>
						<li><a href="/wiki/Marwanid_dynasty" class="mw-redirect" title="Marwanid dynasty">Marwanid
								dynasty</a> (983–1085)</li>
						<li><a href="/wiki/Eldiguzids" title="Eldiguzids">Eldiguzids</a> (1135–1225)</li>
					</ul>
					<p><b>Georgia</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate_of_Tbilisi" title="Emirate of Tbilisi">Emirate of Tbilisi</a>
							(736–1122)</li>
						<li><a href="/wiki/Principality_of_Abkhazia" title="Principality of Abkhazia">Principality of
								Abkhazia</a> (1463–1864)</li>
					</ul>
					<p><b>Caucasus</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate" title="Emirate">Emirate</a> of <a href="/wiki/Derbent"
								title="Derbent">Derbent</a> (654–1747)</li>
						<li><a href="/wiki/Caucasian_Imamate" title="Caucasian Imamate">Caucasian Imamate</a>
							(1828–1859)</li>
						<li><a href="/wiki/Chechen_Republic_of_Ichkeria" title="Chechen Republic of Ichkeria">Chechen
								Republic of Ichkeria</a> (1991–2000)</li>
						<li><a href="/wiki/Derbent_Khanate" title="Derbent Khanate">Derbent Khanate</a> (1747–1806)</li>
						<li><a href="/wiki/Avar_Khanate" title="Avar Khanate">Avar Khanate</a> (1240–1864)</li>
						<li><a href="/wiki/Gazikumukh_Shamkhalate" title="Gazikumukh Shamkhalate">Gazikumukh
								Shamkhalate</a> (740–1640)</li>
						<li><a href="/wiki/Shamkhalate_of_Tarki" title="Shamkhalate of Tarki">Shamkhalate of Tarki</a>
							(1640–1867)</li>
						<li><a href="/wiki/Gazikumukh_Khanate" title="Gazikumukh Khanate">Gazikumukh Khanate</a>
							(1642–1860)</li>
						<li><a href="/wiki/Abazinia" title="Abazinia">Abazinia</a> (1400–1800)</li>
						<li><a href="/wiki/North_Caucasian_Emirate" title="North Caucasian Emirate">North Caucasian
								Emirate</a> (1919–1920)</li>
						<li><a href="/wiki/Circassia" title="Circassia">Circassia</a> (1427–1864)</li>
						<li><a href="/wiki/Kabardia" title="Kabardia">Kabardia</a> (1453–1825)</li>
					</ul>
					<p><b>Afghanistan</b>
					</p>
					<ul>
						<li><a href="/wiki/Farighunids" title="Farighunids">Farighunids</a> (800–1010)</li>
						<li><a href="/wiki/Ghurids" class="mw-redirect" title="Ghurids">Ghurids</a> (879–1215)</li>
						<li><a href="/wiki/Ghaznavids" title="Ghaznavids">Ghaznavids</a> (977–1186)</li>
						<li><a href="/wiki/Kart_dynasty" title="Kart dynasty">Kart dynasty</a> (1244–1381, based in <a
								href="/wiki/Herat" title="Herat">Herat</a>)</li>
						<li><a href="/wiki/Afsharid_Empire" class="mw-redirect" title="Afsharid Empire">Afsharid
								Empire</a> (1736–1796)</li>
						<li><a href="/wiki/Emirate_of_Afghanistan" title="Emirate of Afghanistan">Emirate of
								Afghanistan</a> (1823–1926)</li>
						<li><a href="/wiki/Emirate_of_Afghanistan_(1929)" title="Emirate of Afghanistan (1929)">Emirate
								of Afghanistan (1929) </a></li>
						<li><a href="/wiki/Kingdom_of_Afghanistan" title="Kingdom of Afghanistan">Kingdom of
								Afghanistan</a> (1926–1973)</li>
						<li><a href="/wiki/Islamic_Emirate_of_Afghanistan_(1996%E2%80%932001)"
								title="Islamic Emirate of Afghanistan (1996–2001)">Islamic Emirate of Afghanistan</a>
							(1996–2001)</li>
						<li><a href="/wiki/Barakzai_dynasty" title="Barakzai dynasty">Barakzai dynasty</a> (1826–1973)
						</li>
						<li><a href="/wiki/Hotaki_dynasty" class="mw-redirect" title="Hotaki dynasty">Hotaki dynasty</a>
							(1709–1738)</li>
						<li><a href="/wiki/Durrani_Empire" title="Durrani Empire">Durrani Empire</a> (1747–1826)</li>
						<li><a href="/wiki/Azad_Khan" class="mw-redirect" title="Azad Khan">Azad Khan</a> (1750–1758)
						</li>
						<li><a href="/wiki/Shiberghan" class="mw-redirect" title="Shiberghan">Shiberghan</a> <a
								href="/wiki/Khanate" title="Khanate">Khanate</a> (1757–1875)</li>
						<li><a href="/wiki/Sar-e_Pol,_Afghanistan" title="Sar-e Pol, Afghanistan">Sar-e Pol</a> <a
								href="/wiki/Khanate" title="Khanate">Khanate</a> (1510–1875)</li>
						<li><a href="/wiki/Maymana" title="Maymana">Maymana</a> <a href="/wiki/Khanate"
								title="Khanate">Khanate</a> (1506–1900)</li>
						<li><a href="/wiki/Khulm" class="mw-redirect" title="Khulm">Khulm</a> <a href="/wiki/Khanate"
								title="Khanate">Khanate</a> (1800–1849)</li>
						<li><a href="/wiki/Kunduz" title="Kunduz">Kunduz</a> <a href="/wiki/Khanate"
								title="Khanate">Khanate</a> (1508–1888)</li>
						<li><a href="/wiki/Ghuriyan" class="mw-redirect" title="Ghuriyan">Ghuriyan</a> <a
								href="/wiki/Khanate" title="Khanate">Khanate</a> (1803–1816)</li>
						<li><a href="/wiki/Badakshan" class="mw-redirect" title="Badakshan">Badakshan</a> <a
								href="/wiki/Khanate" title="Khanate">Khanate</a> (1657–1773)</li>
						<li><a href="/wiki/Andkhoy_(city)" title="Andkhoy (city)">Andkhoy</a> <a href="/wiki/Khanate"
								title="Khanate">Khanate</a> (1730–1880)</li>
						<li><a href="/wiki/Ghazni" title="Ghazni">Ghazni</a> (1879–1880)</li>
						<li><a href="/wiki/Peshawar" title="Peshawar">Peshawar</a> (1747–1823)</li>
						<li><a href="/wiki/Qandahar" class="mw-redirect" title="Qandahar">Qandahar</a> (1704–1881)</li>
						<li><a href="/wiki/Herat" title="Herat">Herat</a> (1695–1881)</li>
						<li><a href="/wiki/Kabul" title="Kabul">Kabul</a> Kingdom (1747–1901)</li>
						<li><a href="/wiki/Islamic_Emirate_of_Kunar" title="Islamic Emirate of Kunar">Islamic Emirate of
								Kunar</a> (1991)</li>
						<li><a href="/wiki/Islamic_Emirate_of_Badakhshan" title="Islamic Emirate of Badakhshan">Islamic
								Emirate of Badakhshan</a> (1996)</li>
						<li><a href="/wiki/Islamic_Revolutionary_State_of_Afghanistan"
								title="Islamic Revolutionary State of Afghanistan">Islamic Revolutionary State of
								Afghanistan</a> (1980)</li>
					</ul>
					<h2><span class="mw-headline" id="Indian_subcontinent">Indian subcontinent</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=8"
								title="Edit section: Indian subcontinent"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<figure class="mw-halign-right" typeof="mw:File/Thumb"><a href="/wiki/File:TajCalligraphy3.jpg"
							class="mw-file-description"><img
								src="//upload.wikimedia.org/wikipedia/commons/thumb/1/12/TajCalligraphy3.jpg/240px-TajCalligraphy3.jpg"
								decoding="async" width="240" height="393" class="mw-file-element"
								srcset="//upload.wikimedia.org/wikipedia/commons/1/12/TajCalligraphy3.jpg 1.5x"
								data-file-width="305" data-file-height="500"></a>
						<figcaption><a href="/wiki/Taj_Mahal" title="Taj Mahal">Taj Mahal</a></figcaption>
					</figure>
					<p><b>Bangladesh</b>
					</p>
					<ul>
						<li><a href="/wiki/Khalji_dynasty_of_Bengal" title="Khalji dynasty of Bengal">Khalji dynasty</a>
							(1204–1231)</li>
						<li><a href="/wiki/Balban_dynasty" class="mw-redirect" title="Balban dynasty">Balban dynasty</a>
							(1287–1324)</li>
						<li><a href="/wiki/Bengal_Sultanate" title="Bengal Sultanate">Bengal Sultanate</a> (1352–1576)
							under:
							<ul>
								<li><a href="/wiki/Ilyas_Shahi_dynasty" title="Ilyas Shahi dynasty">Ilyas Shahi
										dynasty</a> (1342–1415, 1437–1487)</li>
								<li><a href="/wiki/Bani_Ganesh" class="mw-redirect" title="Bani Ganesh">Bani Ganesh</a>
									(1418–1437)</li>
								<li><a href="/wiki/Hussain_Shahi_dynasty" title="Hussain Shahi dynasty">Hussain Shahi
										dynasty</a> (1493–1538)</li>
								<li>Muhammad Shahi dynasty (1554–1564)</li>
								<li><a href="/wiki/Karrani_dynasty" title="Karrani dynasty">Karrani dynasty</a>
									(1564–1576)</li>
							</ul>
						</li>
						<li><a href="/wiki/Nawabs_of_Bengal" title="Nawabs of Bengal">Nawabs of Bengal</a> (1717–1880)
						</li>
						<li><a href="/wiki/Prithimpassa_Family" class="mw-redirect"
								title="Prithimpassa Family">Prithimpassa Estate</a> (1499–1950)</li>
						<li><a href="/wiki/Pratapgarh_Kingdom" title="Pratapgarh Kingdom">Pratapgarh Kingdom</a>
							(1489–1700)</li>
						<li><a href="/wiki/Taraf_Kingdom" class="mw-redirect" title="Taraf Kingdom">Taraf Kingdom</a>
							(1200–1610)</li>
						<li><a href="/wiki/Baro-Bhuiyan" class="mw-redirect" title="Baro-Bhuiyan">Baro-Bhuiyan</a>
							(1576–1611)</li>
					</ul>
					<p><b>Pakistan</b>
					</p>
					<ul>
						<li><a href="/wiki/Ghaznavids" title="Ghaznavids">Ghaznavids</a> (1000–1186)</li>
						<li><a href="/wiki/Ghurids" class="mw-redirect" title="Ghurids">Ghurids</a> (1175–1210)</li>
						<li><a href="/wiki/Delhi_Sultanate" title="Delhi Sultanate">Delhi Sultanate</a> (1206–1526)</li>
						<li><a href="/wiki/Mughal_empire" class="mw-redirect" title="Mughal empire">Mughal empire</a>
							(1526–1857)</li>
						<li><a href="/wiki/Durrani_Empire" title="Durrani Empire">Durrani empire</a> (1747–1826)</li>
						<li><a href="/wiki/List_of_monarchs_of_Sindh" title="List of monarchs of Sindh">In Sindh</a>
							<ul>
								<li><a href="/wiki/Sind_(caliphal_province)" title="Sind (caliphal province)">Sind
										(caliphal province)</a> (711–861)</li>
								<li><a href="/wiki/Habbari_dynasty" title="Habbari dynasty">Habbari dynasty</a>
									(854–1011)</li>
								<li><a href="/wiki/Soomra_dynasty" title="Soomra dynasty">Soomra dynasty</a> (1026–1356)
								</li>
								<li><a href="/wiki/Samma_dynasty" title="Samma dynasty">Samma dynasty</a> (1351–1524)
								</li>
								<li><a href="/wiki/Arghun_dynasty" title="Arghun dynasty">Arghun dynasty</a> (1520–1591)
								</li>
								<li><a href="/wiki/Tarkhan_dynasty" title="Tarkhan dynasty">Tarkhan dynasty</a>
									(1554–1591)</li>
								<li><a href="/wiki/Kalhora_dynasty" title="Kalhora dynasty">Kalhora dynasty</a>
									(1701–1783)</li>
								<li><a href="/wiki/Talpur_dynasty" title="Talpur dynasty">Talpur dynasty</a> (1783–1843)
								</li>
								<li><a href="/wiki/Khairpur_(princely_state)" title="Khairpur (princely state)">Khairpur
										(princely state)</a> (1783–1947)</li>
							</ul>
						</li>
						<li><a href="/wiki/Punjab" title="Punjab">In Punjab</a>
							<ul>
								<li><a href="/wiki/Emirate_of_Multan" title="Emirate of Multan">Emirate of Multan</a>
									(855–1010)</li>
								<li><a href="/wiki/Langah_Sultanate" title="Langah Sultanate">Langah Sultanate</a>
									(1445–1540)</li>
								<li><a href="/wiki/Bahawalpur_(princely_state)"
										title="Bahawalpur (princely state)">Bahawalpur (princely state)</a> (1727–1947)
								</li>
								<li><a href="/wiki/List_of_rulers_of_Pothohar_plateau"
										title="List of rulers of Pothohar plateau">Chieftaincy of Pothohar</a>
									(1394–1769)</li>
								<li><a href="/wiki/Gakhar_kingdom" title="Gakhar kingdom">Gakhar Sultanate</a> (11th
									century-1818)</li>
							</ul>
						</li>
						<li><a href="/wiki/Sultanate_of_Kashmir" class="mw-redirect" title="Sultanate of Kashmir">In
								Kashmir</a> (1339–1586)
							<ul>
								<li><a href="/wiki/Shah_Mir_dynasty" title="Shah Mir dynasty">Shah Mir dynasty</a>
									(1339–1561)</li>
								<li><a href="/wiki/Chak_dynasty" title="Chak dynasty">Chak dynasty</a> (1554–1586)</li>
							</ul>
						</li>
						<li><a href="/wiki/Gilgit_Baltistan" class="mw-redirect" title="Gilgit Baltistan">Northern
								dynasties</a> (780–1947)
							<ul>
								<li><a href="/wiki/Trakhan_dynasty" class="mw-redirect" title="Trakhan dynasty">Trakhan
										dynasty</a> (780–1821)</li>
								<li><a href="/wiki/Maqpon_dynasty" class="mw-redirect" title="Maqpon dynasty">Maqpon
										dynasty</a> (1190–1840)</li>
								<li><a href="/wiki/Hunza_(princely_state)" title="Hunza (princely state)">Hunza
										(princely state)</a> (1700–1974)</li>
								<li><a href="/wiki/Nagar_(princely_state)" title="Nagar (princely state)">Nagar
										(princely state)</a> (1660–1974)</li>
							</ul>
						</li>
						<li><a href="/wiki/Chitral" title="Chitral">Dynasties of Chitral</a>
							<ul>
								<li><a href="/wiki/Raees_Dynasty" class="mw-redirect" title="Raees Dynasty">Raees
										Dynasty</a> (1320–1570)</li>
								<li><a href="/wiki/Katoor_dynasty" title="Katoor dynasty">Katoor dynasty</a> (1570–1947)
								</li>
							</ul>
						</li>
						<li><a href="/wiki/Khyber_Pakhtunkhwa" title="Khyber Pakhtunkhwa">In Khyber</a>
							<ul>
								<li><a href="/wiki/Qarlughids" title="Qarlughids">Qarlughids</a> (1238–1266)</li>
								<li><a href="/wiki/Pakhal_Sarkar" class="mw-redirect" title="Pakhal Sarkar">Pakhal
										Sarkar</a> (1472–1703)</li>
								<li><a href="/wiki/Emirate_of_Waziristan" class="mw-redirect"
										title="Emirate of Waziristan">Emirate of Waziristan</a> (2004–2014)</li>
								<li><a href="/wiki/Swat_(princely_state)" title="Swat (princely state)">Swat (princely
										state)</a> (1849–1972)</li>
								<li><a href="/wiki/Amb_(princely_state)" title="Amb (princely state)">Amb (princely
										state)</a> (1772–1971)</li>
								<li><a href="/wiki/Phulra_(princely_state)" class="mw-redirect"
										title="Phulra (princely state)">Phulra (princely state)</a> (1828–1950)</li>
								<li><a href="/wiki/Dir_(princely_state)" title="Dir (princely state)">Dir (princely
										state)</a> (1626–1969)</li>
								<li><a href="/wiki/Jandol_State" title="Jandol State">Jandol State</a> (1830–1972)</li>
							</ul>
						</li>
						<li><a href="/wiki/Balochistan" title="Balochistan">In Balochistan</a>
							<ul>
								<li><a href="/wiki/Las_Bela_(princely_state)" title="Las Bela (princely state)">Las Bela
										(princely state)</a> (1742–1955)</li>
								<li><a href="/wiki/Kharan_(princely_state)" title="Kharan (princely state)">Kharan
										(princely state)</a> (1697–1955)</li>
								<li><a href="/wiki/Makran_(princely_state)" title="Makran (princely state)">Makran
										(princely state)</a> (1898–1955)</li>
								<li><a href="/wiki/Khanate_of_Kalat" title="Khanate of Kalat">Khanate of Kalat</a>
									(1666–1955)</li>
							</ul>
						</li>
					</ul>
					<p><b>India</b>
					</p>
					<ul>
						<li><a href="/wiki/Ghaznavids" title="Ghaznavids">Ghaznavids</a> (1000–1030)</li>
						<li><a href="/wiki/Ghurids" class="mw-redirect" title="Ghurids">Ghurids</a> (1192–1206)</li>
						<li><a href="/wiki/Delhi_Sultanate" title="Delhi Sultanate">Delhi Sultanate</a> (1206–1526)
							<ul>
								<li><a href="/wiki/Mamluk_dynasty_of_Delhi" class="mw-redirect"
										title="Mamluk dynasty of Delhi">Mamluk dynasty of Delhi</a> (1206–1290)</li>
								<li><a href="/wiki/Khalji_Dynasty" class="mw-redirect" title="Khalji Dynasty">Khalji
										Dynasty</a> (1290–1320)</li>
								<li><a href="/wiki/Tughlaq_dynasty" title="Tughlaq dynasty">Tughlaq dynasty</a>
									(1321–1414)</li>
								<li><a href="/wiki/Sayyid_Dynasty" class="mw-redirect" title="Sayyid Dynasty">Sayyid
										Dynasty</a> (1414–1451)</li>
								<li><a href="/wiki/Lodi_dynasty" title="Lodi dynasty">Lodi dynasty</a> (1451–1526)</li>
							</ul>
						</li>
						<li><a href="/wiki/Bengal_Sultanate" title="Bengal Sultanate">Bengal Sultanate</a> (1352–1576)
						</li>
						<li><a href="/wiki/Khandesh_Sultanate" class="mw-redirect" title="Khandesh Sultanate">Khandesh
								Sultanate</a> under <a href="/wiki/Farooqi_dynasty" class="mw-redirect"
								title="Farooqi dynasty">Farooqi dynasty</a> (1382–1601)</li>
						<li><a href="/wiki/Jaunpur_Sultanate" title="Jaunpur Sultanate">Jaunpur Sultanate</a>
							(1394–1479)</li>
						<li><a href="/wiki/Gujarat_Sultanate" title="Gujarat Sultanate">Gujarat Sultanate</a>
							(1394–1573)</li>
						<li><a href="/wiki/Malwa_Sultanate" title="Malwa Sultanate">Malwa Sultanate</a> (1392–1562)</li>
						<li><a href="/wiki/Sur_Empire" title="Sur Empire">Sur Empire</a> (1540–1556)</li>
						<li><a href="/wiki/Mughal_Empire" title="Mughal Empire">Mughal Empire</a> (1526–1857)</li>
						<li><a href="/wiki/Bahmani_Sultanate" title="Bahmani Sultanate">Bahmani Sultanate</a>
							(1347–1527)</li>
						<li><a href="/wiki/Madurai_Sultanate" title="Madurai Sultanate">Madurai Sultanate</a>
							(1335–1378)</li>
						<li><a href="/wiki/Mysore_Kingdom" class="mw-redirect" title="Mysore Kingdom">Mysore Kingdom</a>
							(1749–1799) under <a href="/wiki/Hyder_Ali" title="Hyder Ali">Hyder Ali</a>, <a
								href="/wiki/Tippu_Sultan" class="mw-redirect" title="Tippu Sultan">Tippu Sultan</a></li>
						<li><a href="/wiki/Deccan_sultanates" title="Deccan sultanates">Deccan sultanates</a>
							(1489–1687)
							<ul>
								<li><a href="/wiki/Bidar_Sultanate" title="Bidar Sultanate">Bidar Sultanate</a>
									(1492–1619)</li>
								<li><a href="/wiki/Ahmadnagar_Sultanate" title="Ahmadnagar Sultanate">Ahmadnagar
										Sultanate</a> (1490–1637)</li>
								<li><a href="/wiki/Berar_Sultanate" title="Berar Sultanate">Berar Sultanate</a>
									(1490–1572)</li>
								<li><a href="/wiki/Bijapur_Sultanate" class="mw-redirect"
										title="Bijapur Sultanate">Bijapur Sultanate</a> (1490–1686)</li>
								<li><a href="/wiki/Golconda_Sultanate" class="mw-redirect"
										title="Golconda Sultanate">Golconda Sultanate</a> (1518–1687)</li>
							</ul>
						</li>
						<li><a href="/wiki/Nagpur_Kingdom" class="mw-redirect" title="Nagpur Kingdom">Nagpur Kingdom</a>
							(1580–1885)</li>
						<li><a href="/wiki/Nawab_of_Bengal_and_Murshidabad" class="mw-redirect"
								title="Nawab of Bengal and Murshidabad">Nawab of Bengal and Murshidabad</a> (1707–1880)
						</li>
						<li><a href="/wiki/Carnatic_Sultanate" title="Carnatic Sultanate">Carnatic Sultanate</a>
							(1692–1855)</li>
						<li><a href="/wiki/Oudh_State" title="Oudh State">Oudh State</a> (1732–1858)</li>
						<li><a href="/wiki/Balasinor_State" title="Balasinor State">Balasinor State</a> (1758–1948)</li>
						<li><a href="/wiki/Banda_(state)" title="Banda (state)">Banda (state)</a> (1790–1858)</li>
						<li><a href="/wiki/Nawab_of_Banganapalle" class="mw-redirect"
								title="Nawab of Banganapalle">Nawab of Banganapalle</a> (1665–1947)</li>
						<li><a href="/wiki/Baoni_State" title="Baoni State">Baoni State</a> (1784–1947)</li>
						<li><a href="/wiki/Basoda_State" title="Basoda State">Basoda State</a> (1753–1947)</li>
						<li><a href="/wiki/Bhopal_State" title="Bhopal State">Bhopal State</a> (1723–1947)</li>
						<li><a href="/wiki/Dujana" title="Dujana">Dujana</a> (1806–1947)</li>
						<li><a href="/wiki/Farrukhabad" title="Farrukhabad">Nawab of Farrukhabad</a> (1714–1802)</li>
						<li><a href="/wiki/Hyderabad_State" title="Hyderabad State">Hyderabad State</a> (1724–1949)</li>
						<li><a href="/wiki/Jafarabad_State" title="Jafarabad State">Jafarabad State</a> (1650–1948)</li>
						<li><a href="/wiki/Janjira_State" title="Janjira State">Janjira State</a> (1489–1948)</li>
						<li><a href="/wiki/Jaora_State" title="Jaora State">Jaora State</a> (1808–1948)</li>
						<li><a href="/wiki/Junagadh_State" title="Junagadh State">Junagadh State</a> (1730–1948)</li>
						<li><a href="/wiki/Kamadhia" title="Kamadhia">Kamadhia</a> (1817–1947)</li>
						<li><a href="/wiki/Cambay_State" title="Cambay State">Cambay State</a> (1730–1948)</li>
						<li><a href="/wiki/Arakkal_Kingdom" class="mw-redirect" title="Arakkal Kingdom">Arakkal
								Kingdom</a> (1545–1819)</li>
						<li><a href="/wiki/Kurnool" title="Kurnool">Nawab of Kurnool</a> (1690–1839)</li>
						<li><a href="/wiki/Kurwai_State" title="Kurwai State">Kurwai State</a> (1713–1923)</li>
						<li><a href="/wiki/Loharu_State" title="Loharu State">Loharu State</a> (1806–1931)</li>
						<li><a href="/wiki/Malerkotla_State" title="Malerkotla State">Malerkotla State</a> (1468–1947)
						</li>
						<li><a href="/wiki/Bantva_Manavadar" title="Bantva Manavadar">Bantva Manavadar</a> (1733–1947)
						</li>
						<li><a href="/wiki/Mohammadgarh_State" title="Mohammadgarh State">Mohammadgarh State</a>
							(1818–1947)</li>
						<li><a href="/wiki/Palanpur_State" title="Palanpur State">Palanpur State</a> (1597–1947)</li>
						<li><a href="/wiki/Pataudi_State" title="Pataudi State">Pataudi State</a> (1804–1931)</li>
						<li><a href="/wiki/Pathari_State" title="Pathari State">Pathari State</a> (1794–1947)</li>
						<li><a href="/wiki/Radhanpur_State" title="Radhanpur State">Radhanpur State</a> (1753–1948)</li>
						<li><a href="/wiki/Rajouri" title="Rajouri">Nawab of Rajouri</a> (1194–1846)</li>
						<li><a href="/wiki/Rampur_State" title="Rampur State">Rampur State</a> (1719–1947)</li>
						<li><a href="/wiki/Sachin_State" title="Sachin State">Sachin State</a> (1791–1947)</li>
						<li><a href="/wiki/Sardargarh_Bantva" title="Sardargarh Bantva">Sardargarh Bantva</a>
							(1743–1948)</li>
						<li><a href="/wiki/Savanur_State" title="Savanur State">Savanur State</a> (1680–1912)</li>
						<li><a href="/wiki/Surat" title="Surat">Nawab of Surat</a> (1733–1842)</li>
						<li><a href="/wiki/Tonk_State" title="Tonk State">Tonk State</a> (1817–1947)</li>
						<li><a href="/wiki/Zainabad" title="Zainabad">Zainabad</a> (1903–1947)</li>
						<li><a href="/wiki/Mewat" title="Mewat">Mewat</a> (1372–1527)</li>
						<li><a href="/wiki/Kharagpur_Raj" title="Kharagpur Raj">Kharagpur Raj</a> (1615–1840)</li>
						<li><a href="/wiki/Qaimkhani" title="Qaimkhani">Qaimkhani</a> (1384–1731)</li>
						<li><a href="/wiki/Lalkhani" title="Lalkhani">Lalkhani</a></li>
						<li><a href="/wiki/Kingdom_of_Rohilkhand" title="Kingdom of Rohilkhand">Kingdom of
								Rohilkhand</a> (1710–1857)</li>
						<li><a href="/wiki/Nanpara" title="Nanpara">Nanpara</a> (1632–1947)</li>
						<li><a href="/wiki/Nawab_of_Mamdot" title="Nawab of Mamdot">Nawab of Mamdot</a> (1800–1947)</li>
						<li><a href="/wiki/Bhikampur_and_Datawali_(Aligarh)_State"
								title="Bhikampur and Datawali (Aligarh) State">Bhikampur and Datawali (Aligarh)
								State</a> (1750–1947)</li>
						<li><a href="/wiki/Farrukhnagar" title="Farrukhnagar">Nawab of Farrukhnagar</a> (1732–1947)</li>
						<li><a href="/wiki/Nawab_of_Chhatari" class="mw-redirect" title="Nawab of Chhatari">Nawab of
								Chhatari</a> (1680–1981)</li>
						<li><a href="/wiki/Nawab_of_Sardhana" title="Nawab of Sardhana">Nawab of Sardhana</a>
							(1842–1947)</li>
						<li><a href="/wiki/Faujdars_of_Purnea" title="Faujdars of Purnea">Faujdars of Purnea</a>
							(1704–1947)</li>
						<li><a href="/wiki/Pahasu" title="Pahasu">Nawab of Pahasu</a> (1825–1969)</li>
					</ul>
					<h2><span class="mw-headline" id="Southern_Europe">Southern Europe</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=9"
								title="Edit section: Southern Europe"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Spain &amp; Portugal</b>
					</p>
					<figure typeof="mw:File/Thumb"><a
							href="/wiki/File:Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg"
							class="mw-file-description"><img
								src="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg/240px-Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg"
								decoding="async" width="240" height="159" class="mw-file-element"
								srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg/360px-Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg/480px-Spain_Andalusia_Cordoba_BW_2015-10-27_13-54-14.jpg 2x"
								data-file-width="3762" data-file-height="2486"></a>
						<figcaption><a href="/wiki/Mezquita" class="mw-redirect" title="Mezquita">Mezquita</a>
						</figcaption>
					</figure>
					<ul>
						<li><a href="/wiki/Emirate_of_C%C3%B3rdoba" title="Emirate of Córdoba">Emirate of Cordoba</a>
							(756–929)</li>
						<li><a href="/wiki/Caliph_of_Cordoba" class="mw-redirect" title="Caliph of Cordoba">Caliph of
								Cordoba</a> (929–1031)</li>
						<li><a href="/wiki/Taifa_of_Arjona" class="mw-redirect" title="Taifa of Arjona">Taifa of
								Arjona</a> (1232–1244)</li>
						<li><a href="/wiki/Barcelona" title="Barcelona">Taifa of Barcelona</a> (716–801)</li>
						<li><a href="/wiki/Taifa_of_Baeza" title="Taifa of Baeza">Taifa of Baeza</a> (1224–1226)</li>
						<li><a href="/wiki/Taifa_of_Ceuta" title="Taifa of Ceuta">Taifa of Ceuta</a> (1026–1079)</li>
						<li><a href="/wiki/Taifa_of_Constantina_and_Hornachuelos"
								title="Taifa of Constantina and Hornachuelos">Taifa of Constantina and Hornachuelos</a>
							(1143–1150)</li>
						<li><a href="/wiki/Taifa_of_Guadix_and_Baza" title="Taifa of Guadix and Baza">Taifa of Guadix
								and Baza</a> (1145–1151)</li>
						<li><a href="/wiki/Taifa_of_Saltes_and_Huelva" class="mw-redirect"
								title="Taifa of Saltes and Huelva">Taifa of Saltes and Huelva</a> (1012–1051)</li>
						<li><a href="/wiki/Taifa_of_Jaen" class="mw-redirect" title="Taifa of Jaen">Taifa of Jaen</a>
							(1145–1168)</li>
						<li><a href="/wiki/Taifa_of_L%C3%A9rida" title="Taifa of Lérida">Taifa of Lérida</a>
							(1039–1046,1102–1110)</li>
						<li><a href="/wiki/Taifa_of_Murviedro_and_Sagunto" title="Taifa of Murviedro and Sagunto">Taifa
								of Murviedro and Sagunto</a> (1086–1092)</li>
						<li><a href="/wiki/Taifa_of_Orihuela" title="Taifa of Orihuela">Taifa of Orihuela</a>
							(1239–1249)</li>
						<li><a href="/wiki/Taifa_of_Purchena" title="Taifa of Purchena">Taifa of Purchena</a>
							(1145–1150)</li>
						<li><a href="/wiki/Taifa_of_Segura" title="Taifa of Segura">Taifa of Segura</a> (1147–1150)</li>
						<li><a href="/wiki/Taifa_of_Tortosa" title="Taifa of Tortosa">Taifa of Tortosa</a> (1010–1099)
						</li>
						<li><a href="/wiki/Taifa_of_Tejada" title="Taifa of Tejada">Taifa of Tejada</a> (1146–1150)</li>
						<li><a href="/wiki/Valencia" title="Valencia">Taifa of Valencia</a> (1010–1238)</li>
						<li><a href="/wiki/Taifa_of_Alpuente" title="Taifa of Alpuente">Taifa of Alpuente</a>
							(1009–1106)</li>
						<li><a href="/wiki/Taifa_of_Badajoz" title="Taifa of Badajoz">Taifa of Badajoz</a> (1009–1151)
						</li>
						<li><a href="/wiki/Taifa_of_Mor%C3%B3n" title="Taifa of Morón">Taifa of Morón</a> (1010–1066)
						</li>
						<li><a href="/wiki/Taifa_of_Toledo" title="Taifa of Toledo">Taifa of Toledo</a> (1010–1085)</li>
						<li><a href="/wiki/Taifa_of_Tortosa" title="Taifa of Tortosa">Taifa of Tortosa</a> (1010–1099)
						</li>
						<li><a href="/wiki/Taifa_of_Arcos" title="Taifa of Arcos">Taifa of Arcos</a> (1011–1145)</li>
						<li><a href="/wiki/Taifa_of_Almer%C3%ADa" title="Taifa of Almería">Taifa of Almería</a>
							(1010–1147)</li>
						<li><a href="/wiki/Taifa_of_Denia" class="mw-redirect" title="Taifa of Denia">Taifa of Denia</a>
							(1010–1227)</li>
						<li><a href="/wiki/Taifa_of_Valencia" title="Taifa of Valencia">Taifa of Valencia</a>
							(1010–1238)</li>
						<li><a href="/wiki/Taifa_of_Murcia" title="Taifa of Murcia">Taifa of Murcia</a> (1011–1266)</li>
						<li><a href="/wiki/Taifa_of_Albarrac%C3%ADn" title="Taifa of Albarracín">Taifa of Albarracín</a>
							(1012–1104)</li>
						<li><a href="/wiki/Taifa_of_Zaragoza" title="Taifa of Zaragoza">Taifa of Zaragoza</a>
							(1013–1110)</li>
						<li><a href="/wiki/Taifa_of_Granada" title="Taifa of Granada">Taifa of Granada</a> (1013–1145)
						</li>
						<li><a href="/wiki/Taifa_of_Carmona" title="Taifa of Carmona">Taifa of Carmona</a> (1013–1150)
						</li>
						<li><a href="/wiki/Taifa_of_Santa_Mar%C3%ADa_de_Algarve" class="mw-redirect"
								title="Taifa of Santa María de Algarve">Taifa of Santa María de Algarve</a> (1018–1051)
						</li>
						<li><a href="/wiki/Taifa_of_Mallorca" class="mw-redirect" title="Taifa of Mallorca">Taifa of
								Mallorca</a> (1018–1203)</li>
						<li><a href="/wiki/Taifa_of_Lisbon" title="Taifa of Lisbon">Taifa of Lisbon</a> (1022–1093)</li>
						<li><a href="/wiki/Taifa_of_Seville" title="Taifa of Seville">Taifa of Seville</a> (1023–1091)
						</li>
						<li><a href="/wiki/Taifa_of_Niebla" title="Taifa of Niebla">Taifa of Niebla</a> (1023–1262)</li>
						<li><a href="/wiki/Taifa_of_C%C3%B3rdoba" title="Taifa of Córdoba">Taifa of Córdoba</a>
							(1031–1091)</li>
						<li><a href="/wiki/Taifa_of_M%C3%A9rtola" title="Taifa of Mértola">Taifa of Mértola</a>
							(1033–1151)</li>
						<li><a href="/wiki/Taifa_of_Algeciras" title="Taifa of Algeciras">Taifa of Algeciras</a>
							(1035–1058)</li>
						<li><a href="/wiki/Taifa_of_Ronda" title="Taifa of Ronda">Taifa of Ronda</a> (1039–1065)</li>
						<li><a href="/wiki/Taifa_of_Silves" title="Taifa of Silves">Taifa of Silves</a> (1040–1151)</li>
						<li><a href="/wiki/Taifa_of_M%C3%A1laga" title="Taifa of Málaga">Taifa of Málaga</a> (1073–1239)
						</li>
						<li><a href="/wiki/Taifa_of_Molina" title="Taifa of Molina">Taifa of Molina</a> (c. 1080's–1100)
						</li>
						<li><a href="/wiki/Taifa_of_Lorca" title="Taifa of Lorca">Taifa of Lorca</a> (1228–1250)</li>
						<li><a href="/wiki/Taifa_of_Menorca" title="Taifa of Menorca">Taifa of Menorca</a> (1228–1287)
						</li>
						<li><a href="/wiki/Emirate_of_Granada" title="Emirate of Granada">Emirate of Granada</a>
							(1228–1492)</li>
					</ul>
					<p><b>France</b>
					</p>
					<ul>
						<li><a href="/wiki/Fraxinetum" title="Fraxinetum">Fraxinetum</a> (887–972)</li>
						<li>The <a href="/wiki/Septimania" title="Septimania">Emirate of Septimania</a>, <i>Southern
								France</i> (Gaul) (719–759) Rule by:</li>
					</ul>
					<p><a href="/wiki/Umayyad_Caliph" class="mw-redirect" title="Umayyad Caliph">Umayyad Caliph</a> of
						<a href="/wiki/C%C3%B3rdoba,_Spain" title="Córdoba, Spain">Cordova</a>
					</p>
					<p><b>Italy</b>
					</p>
					<ul>
						<li>The <a href="/wiki/Emirate_of_Bari" title="Emirate of Bari">Emirate of Bari</a> (847–871)
						</li>
						<li>The <a href="/wiki/Taranto" title="Taranto">Emirate of Taranto</a> (831–880)</li>
						<li>The <a href="/wiki/Emirate_of_Sicily" title="Emirate of Sicily">Emirate of Sicily</a>
							(802–1091) Rule by:
							<ul>
								<li><a href="/wiki/Sicily" title="Sicily">Wali of Sicily</a> (802–827) Euphemius &amp;
									Asad</li>
								<li><a href="/wiki/Aghlabids" title="Aghlabids">Aghlabids of Sicily</a> (827–909)</li>
								<li><a href="/wiki/Fatimids" class="mw-redirect" title="Fatimids">Fatimids of Sicily</a>
									(909–965)</li>
								<li><a href="/wiki/Emirate_of_Sicily" title="Emirate of Sicily">Emirate of Sicily</a>
									(965–1091) <a href="/wiki/Kalbids" title="Kalbids">Kalbids</a></li>
							</ul>
						</li>
					</ul>
					<p><b>Gibraltar</b>
					</p>
					<ul>
						<li><a href="/w/index.php?title=Gibraltar_Maghreb&amp;action=edit&amp;redlink=1" class="new"
								title="Gibraltar Maghreb (page does not exist)">Gibraltar Maghreb</a> (711–1462)</li>
					</ul>
					<h2><span class="mw-headline" id="Sahel_and_Subsaharan_Africa">Sahel and Subsaharan
							Africa</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=10"
								title="Edit section: Sahel and Subsaharan Africa"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Sudan, South Sudan</b>
					</p>
					<ul>
						<li><a href="/wiki/Banu_Kanz" title="Banu Kanz">Banu Kanz</a> (1004–1412) Nubian</li>
						<li><a href="/wiki/Kingdom_of_al-Abwab" title="Kingdom of al-Abwab">Kingdom of al-Abwab</a>
							(1276–1560)</li>
						<li><a href="/wiki/Darfur_Sultanate" class="mw-redirect" title="Darfur Sultanate">Darfur
								Sultanate</a> (1445–1916)</li>
						<li><a href="/wiki/Dar_Fertit" class="mw-redirect" title="Dar Fertit">Dar Fertit</a> (1700–1873)
						</li>
						<li><a href="/wiki/Masalit_people" title="Masalit people">Dar al Masalit Sultanate</a>
							(1884–1921)</li>
						<li><a href="/w/index.php?title=Dar_Qimr_Sultanate&amp;action=edit&amp;redlink=1" class="new"
								title="Dar Qimr Sultanate (page does not exist)">Dar Qimr Sultanate</a> (1850–1945)</li>
						<li><a href="/wiki/Funj_Sultanate" title="Funj Sultanate">Funj Sultanate</a> (1503–1821)</li>
						<li><a href="/wiki/Kingdom_of_Fazughli" title="Kingdom of Fazughli">Kingdom of Fazughli</a>
							(1685–1821) Under Sennar</li>
						<li><a href="/wiki/Kordofan" title="Kordofan">Kordofan Sultanate</a> (1700–1821)</li>
						<li><a href="/wiki/Khedivate_of_Egypt" title="Khedivate of Egypt">Khedivate of Egypt</a>
							(1867–1914)</li>
						<li><a href="/wiki/Mahdist_State" title="Mahdist State">Mahdiyya</a> (1889–1898)</li>
						<li><a href="/wiki/Sultanate_of_Egypt" title="Sultanate of Egypt">Sultanate of Egypt</a>
							(1914–1z922)</li>
						<li><a href="/wiki/Kingdom_of_Egypt" title="Kingdom of Egypt">Kingdom of Egypt</a> (1922–1958)
						</li>
					</ul>
					<p><b>Mauritania</b>
					</p>
					<ul>
						<li><a href="/wiki/Emirate_of_Brakna" class="mw-redirect" title="Emirate of Brakna">Emirate of
								Brakna</a> (1600–1934)</li>
						<li><a href="/wiki/Emirate_of_Trarza" title="Emirate of Trarza">Emirate of Trarza</a>
							(1640–present)</li>
						<li><a href="/wiki/Emirate" title="Emirate">Emirate</a> of <a href="/wiki/Adrar_Region"
								title="Adrar Region">Adrar</a> (1740–1932)</li>
						<li><a href="/wiki/Emirate" title="Emirate">Emirate</a> of <a href="/wiki/Tagant_Region"
								title="Tagant Region">Tagant</a> (1580–present)</li>
					</ul>
					<p><b>Niger</b>
					</p>
					<ul>
						<li><a href="/wiki/Dendi_Kingdom" class="mw-redirect" title="Dendi Kingdom">Dendi Kingdom</a>
							(1591–1901)</li>
						<li><a href="/wiki/Sultanate_of_Agadez" title="Sultanate of Agadez">Sultanate of Agadez</a>
							(1449–1900)</li>
						<li><a href="/wiki/Sultanate_of_Damagaram" title="Sultanate of Damagaram">Sultanate of
								Damagaram</a> (1731–present)</li>
						<li><a href="/wiki/Dosso_kingdom" class="mw-redirect" title="Dosso kingdom">Dosso kingdom</a>
							(1750–present)</li>
						<li><a href="/wiki/Sultanate" class="mw-redirect" title="Sultanate">Sultanate</a> <a
								href="/wiki/Maradi,_Niger" title="Maradi, Niger">Maradi</a> (1807–present)</li>
						<li><a href="/wiki/T%C3%A9ra" title="Téra">Tera Kingdom</a> (1700–present)</li>
						<li><a href="/wiki/Kokorou" title="Kokorou">Kokoro Kingdom</a> (1700–1901)</li>
						<li><a href="/wiki/Goure" title="Goure">Goure Kingdom</a> (1700–1960)</li>
						<li><a href="/wiki/Dargol" title="Dargol">Dargol Kingdom</a> (1700–1901)</li>
						<li><a href="/wiki/Emirate_of_Say" title="Emirate of Say">Emirate of Say</a> (1825–1860)</li>
					</ul>
					<p><b>Nigeria</b>
					</p>
					<ul>
						<li><a href="/wiki/Bornu_Empire" class="mw-redirect" title="Bornu Empire">Bornu Empire</a>
							(1380–1893)</li>
						<li><a href="/wiki/Sokoto_Caliphate" title="Sokoto Caliphate">Sokoto Caliphate</a> (1804–1903)
						</li>
						<li><a href="/wiki/Hausa_Kingdoms" title="Hausa Kingdoms">Hausa Kingdoms</a> (1696–1831)</li>
						<li><a href="/wiki/Nupe_Kingdom" class="mw-redirect" title="Nupe Kingdom">Nupe Kingdom</a>
							(1531–1872)</li>
						<li><a href="/wiki/Biu_Emirate" title="Biu Emirate">Biu Kingdom</a> (1535–1740)</li>
						<li><a href="/wiki/Dutse" title="Dutse">Gadawur Kingdom</a> (1421–1807)</li>
						<li><a href="/wiki/Hadejia" title="Hadejia">Biram Kingdom</a> (1110–1808)</li>
						<li><a href="/wiki/Ila_Orangun" title="Ila Orangun">Kingdom of Ila Orangun</a> (1680–present)
						</li>
						<li><a href="/wiki/Iwo,_Osun" title="Iwo, Osun">Iwo Kingdom</a> (1415–present)</li>
						<li><a href="/wiki/Kingdom_of_Kano" title="Kingdom of Kano">Kingdom of Kano</a> (999–1349)</li>
						<li><a href="/wiki/Sultanate_of_Kano" title="Sultanate of Kano">Sultanate of Kano</a>
							(1350–1805)</li>
						<li><a href="/wiki/Kebbi" class="mw-redirect" title="Kebbi">Sultanate of Kebbi</a> (1515–1831)
						</li>
						<li><a href="/wiki/Yauri,_Nigeria" title="Yauri, Nigeria">Yauri Kingdom</a> (1400–1799)</li>
						<li><a href="/wiki/Zamfara_State" title="Zamfara State">Zamfara Kingdom</a> (1200–1804)</li>
						<li><a href="/wiki/Zaria" title="Zaria">Zaria Kingdom</a> (1200–1896)</li>
						<li><a href="/wiki/Osogbo" title="Osogbo">Osogbo Kingdom</a> (1760–present)</li>
						<li><a href="/wiki/Ede,_Osun" title="Ede, Osun">Ede Kingdom</a> (1858–present)</li>
						<li><a href="/wiki/Suleja_Emirate" title="Suleja Emirate">Suleja Emirate</a> (1804–present)</li>
						<li><a href="/wiki/Adamawa_Emirate" title="Adamawa Emirate">Adamawa Emirate</a> (1809–present)
						</li>
						<li><a href="/wiki/Agaie_Emirate" title="Agaie Emirate">Agaie Emirate</a> (1832–present)</li>
						<li><a href="/wiki/Bade_Emirate" title="Bade Emirate">Bade Emirate</a> (1818–present)</li>
						<li><a href="/wiki/Bashar,_Plateau,_Nigeria" class="mw-redirect"
								title="Bashar, Plateau, Nigeria">Bashar Emirate</a></li>
						<li><a href="/wiki/Bauchi_Emirate" title="Bauchi Emirate">Bauchi Emirate</a> (1805–present)</li>
						<li><a href="/wiki/Bida_Emirate" title="Bida Emirate">Bida Emirate</a> (1856–present)</li>
						<li><a href="/wiki/Biu_Emirate" title="Biu Emirate">Biu Emirate</a> (1740–present)</li>
						<li><a href="/wiki/Birnin_Gwari" title="Birnin Gwari">Birnin Gwari</a></li>
						<li><a href="/wiki/Borgu_Emirate" title="Borgu Emirate">Borgu Emirate</a> (1730–present)</li>
						<li><a href="/wiki/Borno_Emirate" title="Borno Emirate">Borno Emirate</a> (1902–present)</li>
						<li><a href="/wiki/Damaturu_Emirate" title="Damaturu Emirate">Damaturu Emirate</a>
							(2004–present)</li>
						<li><a href="/wiki/Daura_Emirate" title="Daura Emirate">Daura Emirate</a> (1778–present)</li>
						<li><a href="/wiki/Dikwa_Emirate" title="Dikwa Emirate">Dikwa Emirate</a> (1901–present)</li>
						<li><a href="/wiki/Fika_Emirate" title="Fika Emirate">Fika Emirate</a> (1806–present)</li>
						<li><a href="/wiki/Gobir_Kingdom" class="mw-redirect" title="Gobir Kingdom">Gobir Kingdom</a>
							(1694–1800)</li>
						<li><a href="/wiki/Gobir" title="Gobir">Gobir Emirate</a> (1800–present)</li>
						<li><a href="/wiki/Gombe_Emirate" title="Gombe Emirate">Gombe Emirate</a> (1804–present)</li>
						<li><a href="/wiki/Gujba" title="Gujba">Gujba Emirate</a> (2000–present)</li>
						<li><a href="/wiki/Gumel_Emirate" class="mw-redirect" title="Gumel Emirate">Gumel Emirate</a>
							(1750–present)</li>
						<li><a href="/wiki/Gusau" title="Gusau">Gusau Emirate</a> (1997–present)</li>
						<li><a href="/wiki/Gwandu_Emirate" class="mw-redirect" title="Gwandu Emirate">Gwandu Emirate</a>
							(1849–present)</li>
						<li><a href="/wiki/Hadejia_Emirate" class="mw-redirect" title="Hadejia Emirate">Hadejia
								Emirate</a> (1808–present)</li>
						<li><a href="/wiki/Ohinoyi_of_Ebiraland" title="Ohinoyi of Ebiraland">Ohinoyi of Ebiraland</a>
							(1904–present)</li>
						<li><a href="/wiki/Ilorin_Emirate" title="Ilorin Emirate">Ilorin Emirate</a> (1824–present)</li>
						<li><a href="/wiki/Tarmuwa" title="Tarmuwa">Jajere Emirate</a> (2000–present)</li>
						<li><a href="/wiki/Jama%27are" class="mw-redirect" title="Jama'are">Jama'are Emirate</a>
							(1811–present)</li>
						<li><a href="/wiki/Jema%27a" title="Jema'a">Jema'a Emirate</a> (1810–present)</li>
						<li><a href="/wiki/Kano_Emirate" title="Kano Emirate">Kano Emirate</a> (1805–present)</li>
						<li><a href="/wiki/Katagum_Emirate" class="mw-redirect" title="Katagum Emirate">Katagum
								Emirate</a> (1807–present)</li>
						<li><a href="/wiki/Katsina_Emirate" class="mw-redirect" title="Katsina Emirate">Katsina
								Emirate</a> (1903–present)</li>
						<li><a href="/wiki/Kazaure_Emirate" class="mw-redirect" title="Kazaure Emirate">Kazaure
								Emirate</a> (1819–present)</li>
						<li><a href="/wiki/Kebbi_Emirate" title="Kebbi Emirate">Kebbi Emirate</a> (1849–present)</li>
						<li><a href="/wiki/Keffi" title="Keffi">Keffi Emirate</a> (1802–present)</li>
						<li><a href="/wiki/Kontagora_Emirate" title="Kontagora Emirate">Kontagora Emirate</a>
							(1858–present)</li>
						<li><a href="/wiki/Koton_Karifi" class="mw-redirect" title="Koton Karifi">Koton Karifi</a>
							(1800–present)</li>
						<li><a href="/wiki/Lafia_Emirate" class="mw-redirect" title="Lafia Emirate">Lafia Emirate</a>
							(1650–present)</li>
						<li><a href="/wiki/Lafiagi" class="mw-redirect" title="Lafiagi">Lafiagi Emirate</a>
							(1975–present)</li>
						<li><a href="/wiki/Lapai_Emirate" title="Lapai Emirate">Lapai Emirate</a> (1825–present)</li>
						<li><a href="/wiki/Lere,_Nigeria" title="Lere, Nigeria">Lere Emirate</a> (1808–present)</li>
						<li><a href="/wiki/Machina,_Nigeria" title="Machina, Nigeria">Machina Emirate</a></li>
						<li><a href="/wiki/Misau" title="Misau">Misau Emirate</a> (1850–present)</li>
						<li><a href="/wiki/Mubi_(town)" title="Mubi (town)">Mubi Emirate</a> (1805–present)</li>
						<li><a href="/wiki/Muri,_Nigeria" class="mw-redirect" title="Muri, Nigeria">Muri Emirate</a>
							(1817–present)</li>
						<li><a href="/wiki/Nasarawa" class="mw-redirect" title="Nasarawa">Nasarawa Emirate</a>
							(1835–present)</li>
						<li><a href="/wiki/Ningi,_Nigeria" title="Ningi, Nigeria">Ningi Emirate</a> (1827–present)</li>
						<li><a href="/wiki/Pategi_Emirate" title="Pategi Emirate">Pategi Emirate</a> (1897–present)</li>
						<li><a href="/wiki/Potiskum_Emirate" title="Potiskum Emirate">Potiskum Emirate</a>
							(1809–present)</li>
						<li><a href="/wiki/Tula_Chiefdom" title="Tula Chiefdom">Tula Chiefdom</a> (2003–present)</li>
						<li><a href="/wiki/Rano" title="Rano">Rano Emirate</a> (1819–present)</li>
						<li><a href="/wiki/Rano" title="Rano">Rano Kingdom</a> (523–1819)</li>
						<li><a href="/wiki/Yauri_Emirate" title="Yauri Emirate">Yauri Emirate</a> (1799–present)</li>
						<li><a href="/wiki/Zamfara_State" title="Zamfara State">Zamfara Emirate</a> (1804–present)</li>
						<li><a href="/wiki/Zazzau" title="Zazzau">Zazzau Emirate</a> (1808–present)</li>
						<li><a href="/wiki/Etsako_West" title="Etsako West">Agbede</a> (1880–present)</li>
						<li><a href="/wiki/Ajasse_Ipo" title="Ajasse Ipo">Ajasse Ipo</a> (1749–present)</li>
						<li><a href="/wiki/Ado-Odo" title="Ado-Odo">Ado-Odo Kingdom</a> (1494–present)</li>
						<li><a href="/wiki/Auchi" title="Auchi">Auchi</a> (1819–present)</li>
						<li><a href="/wiki/Kaiama" title="Kaiama">Kaiama Emirate</a> (1770–present)</li>
						<li><a href="/wiki/Dutse" title="Dutse">Dutse Emirate</a> (1807–present)</li>
						<li><a href="/wiki/Gwoza" title="Gwoza">Gwoza Emirate</a> (1919–present)</li>
						<li><a href="/wiki/Ibadan" title="Ibadan">Ibadan</a> (1820–present)</li>
						<li><a href="/wiki/Bichi" title="Bichi">Bichi Emirate</a> (2019–present)</li>
						<li><a href="/wiki/Gaya,_Nigeria" title="Gaya, Nigeria">Gaya Emirate</a> (2019–present)</li>
						<li><a href="/wiki/Karaye" title="Karaye">Karaye Emirate</a> (2019–present)</li>
						<li><a href="/wiki/Kwara_State" title="Kwara State">Gwanara Emirate</a> (1810–present)</li>
						<li><a href="/wiki/Shanga,_Nigeria" title="Shanga, Nigeria">Shanga Emirate</a> (1859–present)
						</li>
						<li><a href="/wiki/Wase,_Nigeria" title="Wase, Nigeria">Wase Emirate</a> (1820–present)</li>
						<li><a href="/wiki/Kwara_State" title="Kwara State">Yashikira Emirate</a> (1769–present)</li>
						<li><a href="/wiki/Bwari" title="Bwari">Bwari Emirate</a> (1976–present)</li>
					</ul>
					<p><b>Mali</b>
					</p>
					<ul>
						<li><a href="/wiki/Ghana_Empire" title="Ghana Empire">Ghana Empire</a> (500–1200)</li>
						<li><a href="/wiki/Mali_Empire" title="Mali Empire">Mali Empire</a> (1230–1670)</li>
						<li><a href="/wiki/Gao_Empire" title="Gao Empire">Gao Empire</a> (750–1430)</li>
						<li><a href="/wiki/Songhai_Empire" title="Songhai Empire">Songhai Empire</a> (1340–1591)</li>
						<li><a href="/wiki/Pashalik_of_Timbuktu" title="Pashalik of Timbuktu">Pashalik of Timbuktu</a>
							(1591–1833)</li>
						<li><a href="/wiki/Sosso_Empire" title="Sosso Empire">Sosso Empire</a> (1100–1235)</li>
						<li><a href="/wiki/Bamana_Empire" title="Bamana Empire">Bamana Empire</a> (1712–1862)</li>
						<li><a href="/wiki/Kaarta" title="Kaarta">Kaarta</a> <a href="/wiki/Empire"
								title="Empire">Empire</a> (1753–1854)</li>
					</ul>
					<p><b>Regional</b>
					</p>
					<ul>
						<li><a href="/wiki/Fulani_Empire_of_Sokoto" class="mw-redirect"
								title="Fulani Empire of Sokoto">Fulani Empire of Sokoto</a> (1804–1903)</li>
						<li><a href="/wiki/Fulani" class="mw-redirect" title="Fulani">Fulani</a> or <a
								href="/wiki/Fulbe" class="mw-redirect" title="Fulbe">Fulbe</a> Empire of <a
								href="/wiki/Massina_Empire" title="Massina Empire">Macina</a> of <a
								href="/wiki/Seku_Amadu" title="Seku Amadu">Seku Amadu</a> (1818–1862)</li>
						<li><a href="/wiki/Fulani" class="mw-redirect" title="Fulani">Fulani</a> or <a
								href="/wiki/Fulbe" class="mw-redirect" title="Fulbe">Fulbe</a> Empire of <a
								href="/wiki/El_Hajj_Oumar_Tall" class="mw-redirect" title="El Hajj Oumar Tall">El Hajj
								Oumar Tall</a>, <a href="/wiki/Toucouleur_Empire" title="Toucouleur Empire">Toucouleur
								Empire</a> (1848–1898)</li>
						<li><a href="/wiki/Fulani" class="mw-redirect" title="Fulani">Fulani</a> or <a
								href="/wiki/Fulbe" class="mw-redirect" title="Fulbe">Fulbe</a> <a href="/wiki/Empire"
								title="Empire">Empire</a> of <a href="/wiki/Bundu_(state)" title="Bundu (state)">Bundu
								(state)</a> of <a
								href="/w/index.php?title=Malick_Daouda_Sy&amp;action=edit&amp;redlink=1" class="new"
								title="Malick Daouda Sy (page does not exist)">Malick Daouda Sy</a> (1669–1954)</li>
						<li><a href="/wiki/Kanem_Empire" class="mw-redirect" title="Kanem Empire">Kanem Empire</a>
							(700–1380)</li>
						<li><a href="/wiki/Bornu_Empire" class="mw-redirect" title="Bornu Empire">Bornu Empire</a>
							(1380–1893)</li>
						<li><a href="/wiki/Wadai_Empire" title="Wadai Empire">Wadai Empire</a> (1501–1912)</li>
						<li><a href="/wiki/Ghana_Empire" title="Ghana Empire">Ghana Empire</a> (500–1200)</li>
						<li><a href="/wiki/Mali_Empire" title="Mali Empire">Mali Empire</a> (1230–1670)</li>
					</ul>
					<p><b>Cameroon</b>
					</p>
					<ul>
						<li><a href="/wiki/Fon_of_Bafut" title="Fon of Bafut">Bafut Kingdom</a> (1750–present)</li>
						<li><a href="/wiki/Kotoko_kingdom" title="Kotoko kingdom">Kotoko kingdom</a> (1450–present)</li>
						<li><a href="/wiki/Bamum_Kingdom" class="mw-redirect" title="Bamum Kingdom">Bamum Kingdom</a>
							(1394–present)</li>
						<li><a href="/wiki/Banyo,_Cameroon" title="Banyo, Cameroon">Banyo Kingdom</a> (1830–present)
						</li>
						<li><a href="/wiki/Bibemi" title="Bibemi">Bibemi Sultanate</a> (1770–present)</li>
						<li><a href="/wiki/Garoua" title="Garoua">Garoua Sultanate</a> (1810–present)</li>
						<li><a href="/wiki/Kontcha" title="Kontcha">Kontcha Kingdom</a> (1902–present)</li>
						<li><a href="/w/index.php?title=Kungi_Kingdom&amp;action=edit&amp;redlink=1" class="new"
								title="Kungi Kingdom (page does not exist)">Kungi Kingdom</a> (1990–present)</li>
						<li><a href="/wiki/Logone-Birni" title="Logone-Birni">Logone-Birni Kingdom</a> (1805–present)
						</li>
						<li><a href="/wiki/Mandara_Kingdom" title="Mandara Kingdom">Mandara Kingdom</a> (1500–present)
						</li>
						<li><a href="/wiki/Maroua" title="Maroua">Maroua Sultanate</a> (1792–present)</li>
						<li><a href="/wiki/N%27Gaoundere" class="mw-redirect" title="N'Gaoundere">N'Gaoundere
								Sultanate</a> (1836–present)</li>
						<li><a href="/wiki/Rey_Bouba" title="Rey Bouba">Rey Bouba Sultanate</a> (1804–present)</li>
						<li><a href="/wiki/Tibati" title="Tibati">Tibati Lamidate</a> (1810–present)</li>
						<li><a href="/wiki/Bankim" title="Bankim">Bankim Kingdom</a> (1760–present)</li>
						<li><a href="/wiki/Mbum_language" title="Mbum language">Mboum Kingdom</a> (1800–present)</li>
					</ul>
					<p><b>Benin</b>
					</p>
					<ul>
						<li><a href="/wiki/Kandi,_Benin" title="Kandi, Benin">Kandi Kingdom</a> (1700–present)</li>
						<li><a href="/wiki/Parakou" title="Parakou">Parakou Kingdom</a> (1700–present)</li>
						<li><a href="/wiki/Kwande" title="Kwande">Kwande</a> (1709–1961)</li>
						<li><a href="/wiki/Nikki,_Benin" title="Nikki, Benin">Nikki Kingdom</a> (1700–present)</li>
						<li><a href="/wiki/Djougou" title="Djougou">Djougou</a> (1750–present)</li>
					</ul>
					<p><b>Burkina Faso</b>
					</p>
					<ul>
						<li><a href="/wiki/Mossi_Kingdom" class="mw-redirect" title="Mossi Kingdom">Mossi Kingdom</a>
							(1095–1898)</li>
						<li><a href="/wiki/Ouagadougou" title="Ouagadougou">Wogodogo Kingdom</a> (1182–present)</li>
						<li><a href="/wiki/Yatenga" class="mw-redirect" title="Yatenga">Yatenga Kingdom</a>
							(1333–present)</li>
						<li><a href="/wiki/Tenkodogo" title="Tenkodogo">Tenkodogo Kingdom</a> (1120–present)</li>
						<li><a href="/wiki/Bilanga" title="Bilanga">Bilanga Kingdom</a> (1700–present)</li>
						<li><a href="/wiki/List_of_rulers_of_Liptako" title="List of rulers of Liptako">Koala
								Kingdom</a> (1810–present)</li>
						<li><a href="/w/index.php?title=Royal_family_of_Nungu&amp;action=edit&amp;redlink=1" class="new"
								title="Royal family of Nungu (page does not exist)">Nungu Kingdom</a> (1204–present)
						</li>
						<li><a href="/wiki/Pama,_Burkina_Faso" title="Pama, Burkina Faso">Pama Kingdom</a>
							(1600–present)</li>
						<li><a href="/wiki/Gurunsi_people" title="Gurunsi people">Gurunsi Kingdom</a> (1870–1897)</li>
						<li><a href="/wiki/Liptako" title="Liptako">Liptako Kingdom</a> (1810–present)</li>
						<li><a href="/wiki/Gwiriko" title="Gwiriko">Gwiriko Kingdom</a> (1714–1915)</li>
					</ul>
					<p><b>Chad</b>
					</p>
					<ul>
						<li><a href="/wiki/Kanem_Empire" class="mw-redirect" title="Kanem Empire">Kanem Empire</a>
							(700–1380)</li>
						<li><a href="/wiki/Wadai_Empire" title="Wadai Empire">Wadai Empire</a> (1501–1912)</li>
						<li><a href="/wiki/Sultanate" class="mw-redirect" title="Sultanate">Sultanate</a> of <a
								href="/wiki/Yao,_Chad" title="Yao, Chad">Yao</a> (1400–1890)</li>
						<li><a href="/wiki/Tunjur_kingdom" title="Tunjur kingdom">Tunjur kingdom</a> (1400–1650)</li>
						<li><a href="/wiki/Kingdom_of_Baguirmi" class="mw-redirect" title="Kingdom of Baguirmi">Kingdom
								of Baguirmi</a> (1485–1898)</li>
						<li><a href="/wiki/Dar_Sila" title="Dar Sila">Dar Sila</a> (1213–1643)</li>
						<li><a href="/wiki/Dar_Runga" title="Dar Runga">Dar Runga</a> (1700–1898)</li>
						<li><a href="/w/index.php?title=Rabih_az_Zubaiyr&amp;action=edit&amp;redlink=1" class="new"
								title="Rabih az Zubaiyr (page does not exist)">Rabih az Zubaiyr</a> (1860–1900)</li>
						<li><a href="/wiki/Kabka_Sultanate" title="Kabka Sultanate">Kabka Sultanate</a> (1990–Present)
						</li>
					</ul>
					<p><b>Central African Republic</b>
					</p>
					<ul>
						<li><a href="/wiki/Dar_al_Kuti" title="Dar al Kuti">Dar al Kuti</a> <a href="/wiki/Sultanate"
								class="mw-redirect" title="Sultanate">Sultanate</a> (1830–1912)</li>
						<li><a href="/wiki/Rafai" class="mw-redirect" title="Rafai">Rafai</a> <a href="/wiki/Sultanate"
								class="mw-redirect" title="Sultanate">Sultanate</a> (1800–1966)</li>
						<li><a href="/wiki/Zemio" title="Zemio">Zemio</a> <a href="/wiki/Sultanate" class="mw-redirect"
								title="Sultanate">Sultanate</a> (1830–1923)</li>
						<li><a href="/wiki/Bangassou" title="Bangassou">Bangassou</a> <a href="/wiki/Sultanate"
								class="mw-redirect" title="Sultanate">Sultanate</a> (1780–1966)</li>
					</ul>
					<p><b>Côte d'Ivoire</b>
					</p>
					<ul>
						<li><a href="/wiki/Kong_Empire" title="Kong Empire">Kong Empire</a> (1690–1913)</li>
						<li><a href="/w/index.php?title=Kabasarana&amp;action=edit&amp;redlink=1" class="new"
								title="Kabasarana (page does not exist)">Kabasarana</a> (1846–1880)</li>
						<li><a href="/wiki/Bouna,_Ivory_Coast" title="Bouna, Ivory Coast">Bouna Kingdom</a>
							(1600–present)</li>
					</ul>
					<p><b>Ghana</b>
					</p>
					<ul>
						<li><a href="/wiki/Dagbon_Kingdom" class="mw-redirect" title="Dagbon Kingdom">Dagbon Kingdom</a>
							(1409–present)</li>
						<li><a href="/wiki/Kingdom_of_Wala" title="Kingdom of Wala">Kingdom of Wala</a> (1317–present)
						</li>
						<li><a href="/wiki/Mamprusi" class="mw-redirect" title="Mamprusi">Mamprusi</a> (1450–present)
						</li>
						<li><a href="/wiki/Nanumba_people" title="Nanumba people">Nanumba</a> (1850–present)</li>
						<li><a href="/wiki/Gonja_kingdom" class="mw-redirect" title="Gonja kingdom">Gonja kingdom</a>
							(1564–present)</li>
						<li><a href="/wiki/Zabarima_(emirate)" class="mw-redirect" title="Zabarima (emirate)">Zabarima
								Emirate</a> (1860–1897)</li>
					</ul>
					<p><b>Senegambia</b>
					</p>
					<ul>
						<li><a href="/wiki/Imamate_of_Futa_Toro" title="Imamate of Futa Toro">Imamate of Futa Toro</a>
							(1776–1821)</li>
						<li><a href="/wiki/Imamate_of_Futa_Jallon" title="Imamate of Futa Jallon">Imamate of Futa
								Jallon</a> (1725–1911)</li>
						<li><a href="/wiki/Empire_of_Great_Fulo" title="Empire of Great Fulo">Empire of Great Fulo</a>
							(1490–1776)</li>
						<li><a href="/wiki/Jolof_Empire" title="Jolof Empire">Jolof Empire</a> (1350–1549)</li>
						<li><a href="/wiki/Kingdom_of_Jolof" title="Kingdom of Jolof">Kingdom of Jolof</a> (1549–1875)
						</li>
						<li><a href="/wiki/Cayor" title="Cayor">Cayor</a> (1549–1879)</li>
						<li><a href="/wiki/Kingdom_of_Sine" title="Kingdom of Sine">Kingdom of Sine</a> (1449–1969)</li>
						<li><a href="/wiki/Kingdom_of_Khasso" class="mw-redirect" title="Kingdom of Khasso">Xaaso</a>
							(1600–1880)</li>
						<li><a href="/wiki/Takrur_Kingdom" class="mw-redirect" title="Takrur Kingdom">Takrur Kingdom</a>
							(800–1285)</li>
						<li><a href="/wiki/Baol" title="Baol">Baol</a> (1555–1894)</li>
						<li><a href="/wiki/Waalo" title="Waalo">Waalo</a> (1287–1855)</li>
						<li><a href="/wiki/Kingdom_of_Saloum" class="mw-redirect" title="Kingdom of Saloum">Kingdom of
								Saloum</a> (1494–1969)</li>
					</ul>
					<p><b>Gambia</b>
					</p>
					<ul>
						<li><a href="/w/index.php?title=Baro_,_Gambia&amp;action=edit&amp;redlink=1" class="new"
								title="Baro , Gambia (page does not exist)">Baro Kingdom</a> (1600–1892)</li>
						<li><a href="/wiki/Fuladugu" class="mw-redirect" title="Fuladugu">Fuladugu Kingdom</a>
							(1867–present)</li>
						<li><a href="/wiki/Marabout" title="Marabout">Marabout Kingdom</a> (1851–1887)</li>
					</ul>
					<p><b>Guinea</b>
					</p>
					<ul>
						<li><a href="/w/index.php?title=Benna_(Guinea)&amp;action=edit&amp;redlink=1" class="new"
								title="Benna (Guinea) (page does not exist)">Benna Kingdom</a> (1858–1904)</li>
						<li><a href="/w/index.php?title=Bramaya&amp;action=edit&amp;redlink=1" class="new"
								title="Bramaya (page does not exist)">Bramaya Kingdom</a> (1800–1883)</li>
						<li><a href="/wiki/Dubreka" class="mw-redirect" title="Dubreka">Dubreka Kingdom</a> (1800–1888)
						</li>
						<li><a href="/wiki/Fuuta_Jalon" class="mw-redirect" title="Fuuta Jalon">Fuuta Jalon</a>
							(1726–1912)</li>
						<li><a href="/w/index.php?title=Kanea&amp;action=edit&amp;redlink=1" class="new"
								title="Kanea (page does not exist)">Kanea Kingdom</a> (1800–1880)</li>
						<li><a href="/w/index.php?title=Kinsam&amp;action=edit&amp;redlink=1" class="new"
								title="Kinsam (page does not exist)">Kinsam Kingdom</a> (1850–1894)</li>
						<li><a href="/w/index.php?title=Koba_(Guinea)&amp;action=edit&amp;redlink=1" class="new"
								title="Koba (Guinea) (page does not exist)">Koba Kingdom</a> (1700–1898)</li>
						<li><a href="/wiki/Landuma_people" title="Landuma people">Landuma Kingdom</a> (1700–1892)</li>
						<li><a href="/wiki/Nalu_people" title="Nalu people">Nalu Kingdom</a> (1845–1884)</li>
						<li><a href="/wiki/Samburu_people" title="Samburu people">Samburu Kingdom</a> (1700–1892)</li>
						<li><a href="/w/index.php?title=Solima&amp;action=edit&amp;redlink=1" class="new"
								title="Solima (page does not exist)">Solima Kingdom</a> (1850–1894)</li>
						<li><a href="/wiki/Timbi-Touny" title="Timbi-Touny">Timbi Tunni Kingdom</a> (1800–1890)</li>
					</ul>
					<p><b>Guinea Bissau</b>
					</p>
					<ul>
						<li><a href="/wiki/Kaabu" title="Kaabu">N'Gabu Kingdom</a> (1850–1903)</li>
					</ul>
					<p><b>Togo</b>
					</p>
					<ul>
						<li><a href="/wiki/Kotokolia" title="Kotokolia">Kotokolia</a> (1785–present)</li>
						<li><a href="/wiki/Tchamba" title="Tchamba">Tchamba</a> (1750–present)</li>
						<li><a href="/wiki/Bafilo" title="Bafilo">Bafilo</a> (1700–present)</li>
						<li><a href="/wiki/Bassar" title="Bassar">Bassar</a> (1800–present)</li>
						<li><a href="/wiki/Cokossi" title="Cokossi">Cokossi</a> (1750–present)</li>
					</ul>
					<p><b>Sierra Leone</b>
					</p>
					<ul>
						<li><a href="/wiki/Alikalia" title="Alikalia">Alikalia Kingdom</a> (1817–1898)</li>
						<li><a href="/wiki/Biriwa_Chiefdom" title="Biriwa Chiefdom">Biriwa Chiefdom</a> (1800–present)
						</li>
						<li><a href="/wiki/Dembelia_Sikunia" class="mw-redirect" title="Dembelia Sikunia">Dembelia
								Sikunia</a> (1850–present)</li>
						<li><a href="/wiki/Imperri_Chiefdom" title="Imperri Chiefdom">Imperri Chiefdom</a>
							(1850–present)</li>
						<li><a href="/wiki/Kaiyamba_Chiefdom" title="Kaiyamba Chiefdom">Kaiyamba Chiefdom</a>
							(1884–present)</li>
						<li><a href="/wiki/Mand%C3%A9_peoples" title="Mandé peoples">Mande</a> (1800–1919)</li>
						<li><a href="/wiki/Nongowa_Chiefdom" title="Nongowa Chiefdom">Nongowa Chiefdom</a>
							(1820–present)</li>
						<li><a href="/wiki/Safroko_Limba_Chiefdom" title="Safroko Limba Chiefdom">Safroko Limba
								Chiefdom</a> (1907–present)</li>
						<li><a href="/wiki/Susu_people" title="Susu people">Susu Kingdom</a> (1806–1892)</li>
						<li><a href="/wiki/Kingdom_of_Koya" title="Kingdom of Koya">Kingdom of Koya</a> (1505–1908)</li>
						<li><a href="/w/index.php?title=Ko_Fransa_Kingdom&amp;action=edit&amp;redlink=1" class="new"
								title="Ko Fransa Kingdom (page does not exist)">Ko Fransa Kingdom</a> (1700–1859)</li>
						<li><a href="/wiki/Tonko_Limba_Chiefdom" title="Tonko Limba Chiefdom">Tonko Limba Chiefdom</a>
							(1836–present)</li>
						<li><a href="/w/index.php?title=Wonkafong&amp;action=edit&amp;redlink=1" class="new"
								title="Wonkafong (page does not exist)">Wonkafong</a> (1794–1890)</li>
					</ul>
					<h2><span id="East_Africa_.28.22Swahili_Coast.22.29"></span><span class="mw-headline"
							id="East_Africa_(&quot;Swahili_Coast&quot;)">East Africa ("Swahili Coast")</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=11"
								title="Edit section: East Africa (&quot;Swahili Coast&quot;)"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Tanzania</b>
					</p>
					<ul>
						<li><a href="/wiki/Pemba_Island" title="Pemba Island">Pemba Sultanate</a> (1550–1829)</li>
						<li><a href="/wiki/Hadimu" title="Hadimu">Hadimu Sultanate</a> (1650–1873)</li>
						<li><a href="/wiki/Unyanyembe" title="Unyanyembe">Unyanyembe Kingdom</a> (1727–present)</li>
						<li><a href="/wiki/Kilindi_dynasty" title="Kilindi dynasty">Kilindi dynasty</a> (1750–Present)
						</li>
						<li><a href="/wiki/Tumbatu" title="Tumbatu">Tumbatu Sultanate</a> (1800–1865)</li>
						<li><a href="/wiki/Ujiji" title="Ujiji">Ujiji Sultanate</a> (1800–present)</li>
						<li><a href="/wiki/Sultanate_of_Zanzibar" title="Sultanate of Zanzibar">Sultanate of
								Zanzibar</a> (1856–1964)</li>
						<li><a href="/w/index.php?title=Uhehu_Sultanate&amp;action=edit&amp;redlink=1" class="new"
								title="Uhehu Sultanate (page does not exist)">Uhehu Sultanate</a> (1860–1962)</li>
					</ul>
					<p><b>Kenya</b>
					</p>
					<ul>
						<li><a href="/wiki/Malindi_Kingdom" title="Malindi Kingdom">Malindi Kingdom</a> (850–1861)</li>
						<li><a href="/wiki/Kilwa_Sultanate" title="Kilwa Sultanate">Kilwa Sultanate</a> (957–1517)</li>
						<li><a href="/wiki/Pate_Sultanate" class="mw-redirect" title="Pate Sultanate">Pate Sultanate</a>
							(1203–1870)</li>
						<li><a href="/wiki/Mombasa" title="Mombasa">Mombasa Sultanate</a> (1502–1895)</li>
						<li><a href="/wiki/Wituland" title="Wituland">Wituland</a> (1858–1929)</li>
					</ul>
					<p><b>Democratic Republic of the Congo</b>
					</p>
					<ul>
						<li><a href="/wiki/Tippu_Tip%27s_State" class="mw-redirect" title="Tippu Tip's State">Tippu
								Tip's State</a> (1860–1887)</li>
						<li><a href="/wiki/Sultanate" class="mw-redirect" title="Sultanate">Sultanate</a> <a
								href="/wiki/Kasongo" title="Kasongo">Kasongo</a> (1860–1895)</li>
					</ul>
					<p><b>Malawi</b>
					</p>
					<ul>
						<li><a href="/wiki/Yao_people_(East_Africa)" title="Yao people (East Africa)">Yao</a> <a
								href="/wiki/Chieftain" class="mw-redirect" title="Chieftain">Chieftain</a>
							(*1500–present)</li>
						<li><a href="/wiki/Jumbes_of_Nkhotakota" title="Jumbes of Nkhotakota">Jumbes of Nkhotakota</a>
							(1840–1894)</li>
					</ul>
					<p><b>Mozambique</b>
					</p>
					<ul>
						<li><a href="/wiki/Angoche_Sultanate" title="Angoche Sultanate">Angoche Sultanate</a>
							(1485–1910)</li>
						<li><a href="/w/index.php?title=Kitangonya_Sheikhdom&amp;action=edit&amp;redlink=1" class="new"
								title="Kitangonya Sheikhdom (page does not exist)">Kitangonya Sheikhdom</a> (1750–1906)
						</li>
						<li><a href="/w/index.php?title=Sankul_Sheikhdom&amp;action=edit&amp;redlink=1" class="new"
								title="Sankul Sheikhdom (page does not exist)">Sankul Sheikhdom</a> (1753–1910)</li>
					</ul>
					<h2><span class="mw-headline" id="Indian_Ocean_Region">Indian Ocean Region</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=12"
								title="Edit section: Indian Ocean Region"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Maldives</b>
					</p>
					<ul>
						<li><a href="/wiki/Sultanate_of_Maldives" title="Sultanate of Maldives">Sultanate of
								Maldives</a> (1153–1968)
							<ul>
								<li><a href="/wiki/Theemuge_dynasty" title="Theemuge dynasty">Theemuge dynasty</a>
									(1161–1338)</li>
								<li><a href="/wiki/Hilaalee_dynasty" title="Hilaalee dynasty">Hilaalee dynasty</a>
									(1388–1558)</li>
								<li><a href="/wiki/Utheemu_dynasty" title="Utheemu dynasty">Utheemu dynasty</a>
									(1632–1692)</li>
								<li><a href="/w/index.php?title=Hamavi_dynasty&amp;action=edit&amp;redlink=1"
										class="new" title="Hamavi dynasty (page does not exist)">Hamavi dynasty</a>
									(1692)</li>
								<li><a href="/w/index.php?title=Devadhu_dynasty&amp;action=edit&amp;redlink=1"
										class="new" title="Devadhu dynasty (page does not exist)">Devadhu dynasty</a>
									(1692–1701)</li>
								<li><a href="/wiki/Isdhoo_dynasty" title="Isdhoo dynasty">Isdhoo dynasty</a> (1701–1704)
								</li>
								<li><a href="/wiki/Dhiyamigili_dynasty" title="Dhiyamigili dynasty">Dhiyamigili
										dynasty</a> (1704–1759, 1766–1773)</li>
								<li><a href="/wiki/Huraa_dynasty" title="Huraa dynasty">Huraa dynasty</a> (1759–1766,
									1774–1968)</li>
							</ul>
						</li>
					</ul>
					<p><b>Mayotte</b>
					</p>
					<ul>
						<li>The <a href="/wiki/Mayotte" title="Mayotte">Sultanate of Mwati</a> (1500–1841)</li>
					</ul>
					<p><b>Comoros</b>
					</p>
					<ul>
						<li>The <a href="/w/index.php?title=Anjoun&amp;action=edit&amp;redlink=1" class="new"
								title="Anjoun (page does not exist)">Sultanate of Ndzuwani</a> (1711–1912)</li>
						<li>The <a href="/wiki/Grand_Comore" class="mw-redirect" title="Grand Comore">Sultanate of
								Ngazidjia</a> (1400–1912) Sultanate of Bambao</li>
						<li>The <a href="/wiki/Moheli" class="mw-redirect" title="Moheli">Sultanate of Mwali</a>
							(1830–1909)</li>
						<li>The <a href="/wiki/Bajini" class="mw-redirect" title="Bajini">Sultanate of Bajini</a>
							(1500–1889)</li>
						<li>The <a href="/wiki/Itsandra" title="Itsandra">Sultanate of Itsandra</a> (1400–1886)</li>
						<li>The <a href="/wiki/Mitsamihuli" class="mw-redirect" title="Mitsamihuli">Sultanate of
								Mitsamihuli</a></li>
						<li>The <a href="/w/index.php?title=Washili&amp;action=edit&amp;redlink=1" class="new"
								title="Washili (page does not exist)">Sultanate of Washili</a></li>
						<li>The <a href="/w/index.php?title=Hambuu&amp;action=edit&amp;redlink=1" class="new"
								title="Hambuu (page does not exist)">Sultanate of Hambuu</a></li>
						<li>The <a href="/w/index.php?title=Hamahame&amp;action=edit&amp;redlink=1" class="new"
								title="Hamahame (page does not exist)">Sultanate of Hamahame</a></li>
						<li>The <a href="/w/index.php?title=Mbwankuu&amp;action=edit&amp;redlink=1" class="new"
								title="Mbwankuu (page does not exist)">Sultanate of Mbwankuu</a></li>
						<li>The <a href="/w/index.php?title=Mbude&amp;action=edit&amp;redlink=1" class="new"
								title="Mbude (page does not exist)">Sultanate of Mbude</a></li>
						<li>The <a href="/wiki/Domba" class="mw-redirect" title="Domba">Sultanate of Domba</a></li>
					</ul>
					<p><b>Madagascar</b>
					</p>
					<ul>
						<li>The <a href="/wiki/Sakalava_people" title="Sakalava people">Sakalava Kingdom</a> (1500–1898)
						</li>
						<li>The <a href="/wiki/Antemoro_people" title="Antemoro people">Antemoro Kingdom</a> (1495–1888)
						</li>
					</ul>
					<h2><span id="Eastern_Europe_.28Balkan_Region.29"></span><span class="mw-headline"
							id="Eastern_Europe_(Balkan_Region)">Eastern Europe (Balkan Region)</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=13"
								title="Edit section: Eastern Europe (Balkan Region)"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Ukraine, Moldova</b>
					</p>
					<ul>
						<li><a href="/wiki/Crimean_Khanate" title="Crimean Khanate">Crimean Khanate</a> (1441–1783)</li>
						<li><a href="/wiki/Budjak_Horde" title="Budjak Horde">Budjak Horde</a> (1603–1799)</li>
					</ul>
					<p><b>Romania, Bulgaria</b>
					</p>
					<ul>
						<li><a href="/wiki/Tamrash_Republic" class="mw-redirect" title="Tamrash Republic">Tamrash
								Republic</a> (1878–1886)</li>
						<li><a href="/wiki/Provisional_Government_of_Western_Thrace"
								title="Provisional Government of Western Thrace">Provisional Government of Western
								Thrace</a> (1913)</li>
					</ul>
					<p><b>Greece</b>
					</p>
					<ul>
						<li><a href="/wiki/Pashalik_of_Yanina" title="Pashalik of Yanina">Pashalik of Yanina</a>
							(1788–1822)</li>
						<li><a href="/wiki/Emirate_of_Crete" title="Emirate of Crete">Emirate of Crete</a> (820–961)
						</li>
					</ul>
					<p><b>Albania</b>
					</p>
					<ul>
						<li><a href="/wiki/Pashalik_of_Scutari" title="Pashalik of Scutari">Pashalik of Scutari</a>
							(1757–1831)</li>
						<li><a href="/wiki/Pashalik_of_Berat" title="Pashalik of Berat">Pashalik of Berat</a>
							(1774–1809)</li>
					</ul>
					<h2><span id="Ural_Region.2C_Siberia_.28Russia.29"></span><span class="mw-headline"
							id="Ural_Region,_Siberia_(Russia)">Ural Region, Siberia (Russia)</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=14"
								title="Edit section: Ural Region, Siberia (Russia)"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<ul>
						<li><a href="/wiki/Volga_Bulgaria" title="Volga Bulgaria">Volga Bulgaria</a> (922–1236)</li>
						<li><a href="/wiki/Golden_Horde" title="Golden Horde">Golden Horde</a> (1251–1502)</li>
						<li><a href="/wiki/Khanate_of_Kazan" title="Khanate of Kazan">Kazan Khanate</a> (1438–1552)</li>
						<li><a href="/wiki/Astrakhan_Khanate" title="Astrakhan Khanate">Astrakhan Khanate</a>
							(1466–1556)</li>
						<li><a href="/wiki/Qasim_Khanate" title="Qasim Khanate">Qasim Khanate</a> (1452–1681)</li>
						<li><a href="/wiki/Bashkirs" title="Bashkirs">Bashkirs</a> (800–1557)</li>
						<li><a href="/wiki/Sibir_Khanate" class="mw-redirect" title="Sibir Khanate">Sibir Khanate</a>
							(1468–1598)</li>
						<li><a href="/wiki/Great_Horde" title="Great Horde">Great Horde</a> (1466–1502)</li>
						<li><a href="/wiki/Nogai_Horde" title="Nogai Horde">Nogai Horde</a> (1440–1634)</li>
						<li><a href="/wiki/Nogai_Horde" title="Nogai Horde">Lesser Nogai Horde</a> (1449–1783)</li>
						<li><a href="/wiki/Crimean_Khanate" title="Crimean Khanate">Crimean Khanate</a> (1441–1783)</li>
						<li><a href="/wiki/Mishar_Yurt" title="Mishar Yurt">Mishar Yurt</a> (1298–1393)</li>
						<li><a href="/wiki/Mukhsha_Ulus" title="Mukhsha Ulus">Mukhsha Ulus</a> (1300–1500)</li>
						<li><a href="/wiki/Idel-Ural_State" title="Idel-Ural State">Idel-Ural State</a> (1918)</li>
					</ul>
					<h2><span id="Central_Asia.2C_East_Asia"></span><span class="mw-headline"
							id="Central_Asia,_East_Asia">Central Asia, East Asia</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=15"
								title="Edit section: Central Asia, East Asia"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Transoxania (Uzbekistan, Kyrgyzstan, Tajikistan, Turkmenistan, Kazakhstan)</b>
					</p>
					<ul>
						<li><a href="/wiki/Afrighid_dynasty" class="mw-redirect" title="Afrighid dynasty">Afrighid
								dynasty</a> (305–995)</li>
						<li><a href="/wiki/Principality_of_Ushrusana" title="Principality of Ushrusana">Principality of
								Ushrusana</a> (822–892)</li>
						<li><a href="/wiki/Kara-Khanid_Khanate" title="Kara-Khanid Khanate">Karakhanid Empire</a>
							(840–1212, <a href="/wiki/Transoxiana" title="Transoxiana">Transoxiana</a>)</li>
						<li><a href="/wiki/Seljuk_Empire" title="Seljuk Empire">Seljuk Empire</a> (1029–1194, based in
							<a href="/wiki/Merv" title="Merv">Merv</a>, Eastern Division</li>
						<li><a href="/wiki/Khwarazmian_dynasty" class="mw-redirect"
								title="Khwarazmian dynasty">Khwarazmian Empire</a> (1077–1231)</li>
						<li><a href="/wiki/Timurid_dynasty" title="Timurid dynasty">Timurid dynasty</a> (1370–1507)</li>
						<li><a href="/wiki/Chagatai_Khanate" title="Chagatai Khanate">Chagatai Khanate</a> (Mongol)
							(1226–1347)</li>
						<li><a href="/wiki/Muhtajids" title="Muhtajids">Muhtajids</a> (950–1030)</li>
						<li><a href="/wiki/Yarkent_Khanate" title="Yarkent Khanate">Yarkent Khanate</a> (1487–1705)</li>
						<li><a href="/wiki/Shaybanid" class="mw-redirect" title="Shaybanid">Shaybanid</a> (1428–1599)
						</li>
						<li><a href="/wiki/Samanid_dynasty" class="mw-redirect" title="Samanid dynasty">Samanid
								dynasty</a> (819–999)</li>
						<li><a href="/wiki/Ghaznavids" title="Ghaznavids">Ghaznavids</a> (977–1186)</li>
						<li><a href="/wiki/Khanate_of_Bukhara" title="Khanate of Bukhara">Khanate of Bukhara</a>
							(1500–1785)</li>
						<li><a href="/wiki/Kazakh_Khanate" title="Kazakh Khanate">Kazakh Khanate</a> (1456–1847)</li>
						<li><a href="/wiki/Khanate_of_Khiva" title="Khanate of Khiva">Khanate of Khiva</a> (1511–1920)
						</li>
						<li><a href="/wiki/Khanate_of_Kokand" title="Khanate of Kokand">Khanate of Kokand</a>
							(1709–1876)</li>
						<li><a href="/wiki/Uzbek_Khanate" title="Uzbek Khanate">Uzbek Khanate</a> (1428–1471)</li>
						<li><a href="/wiki/White_Horde" title="White Horde">White Horde</a> (Mongol) (1360–1428)</li>
						<li><a href="/wiki/Emirate_of_Bukhara" title="Emirate of Bukhara">Emirate of Bukhara</a>
							(1785–1920)</li>
						<li><a href="/wiki/Golden_Horde" title="Golden Horde">Golden Horde</a> (Mongol) (1313–1502)</li>
						<li><a href="/wiki/Bukey_Horde" title="Bukey Horde">Bukey Horde</a> (1801–1845)</li>
						<li><a href="/wiki/Sufids" class="mw-redirect" title="Sufids">Sufids</a> (1361–1379)</li>
					</ul>
					<p><b>China</b>
					</p>
					<ul>
						<li><a href="/wiki/Kara-Khanid_Khanate" title="Kara-Khanid Khanate">Kara-Khanid Khanate</a>
							(840–1212, based in <a href="/wiki/Kashgar" title="Kashgar">Kashgar</a>)</li>
						<li><a href="/wiki/Moghulistan" title="Moghulistan">Moghulistan</a> (Mongol) (1347–1462)
							<ul>
								<li>Western <a href="/wiki/Moghulistan" title="Moghulistan">Moghulistan</a> (1462–1690)
								</li>
								<li>Eastern Moghulistan / <a href="/wiki/Moghulistan" title="Moghulistan">Uyghurstan</a>
									(1462–1680)</li>
							</ul>
						</li>
						<li><a href="/wiki/Yarkent_Khanate" title="Yarkent Khanate">Yarkent Khanate</a> (1514–1705)</li>
						<li><a href="/wiki/Turpan" title="Turpan">Turpan</a> <a href="/wiki/Khanate"
								title="Khanate">Khanate</a> (1487–1570)</li>
						<li><a href="/wiki/Kashgaria" class="mw-redirect" title="Kashgaria">Kashgaria</a> <a
								href="/wiki/Khanate" title="Khanate">Khanate</a> (1865–1877)</li>
						<li><a href="/wiki/Kumul_Khanate" title="Kumul Khanate">Kumul Khanate</a> (1696–1930)</li>
						<li><a href="/wiki/Khoja" title="Khoja">Khoja Kingdom</a> (1693–1857)</li>
						<li><a href="/wiki/Dughlats" title="Dughlats">Dughlats</a> (1466–1514)</li>
						<li><a href="/wiki/Kingdom_of_Mangalai" title="Kingdom of Mangalai">Kingdom of Mangalai</a>
							(1220–1877)</li>
						<li><a href="/wiki/Pingnan_Guo" class="mw-redirect" title="Pingnan Guo">Pingnan Guo</a>
							(1856–1873)</li>
						<li><a href="/wiki/First_East_Turkestan_Republic" title="First East Turkestan Republic">First
								East Turkestan Republic</a> (1933–1934)</li>
						<li><a href="/wiki/Second_East_Turkestan_Republic" title="Second East Turkestan Republic">Second
								East Turkestan Republic</a> (1944–1949)</li>
					</ul>
					<h2><span class="mw-headline" id="Southeast_Asia">Southeast Asia</span><span
							class="mw-editsection"><span class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=16"
								title="Edit section: Southeast Asia"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<p><b>Brunei, Indonesia, Malaysia</b>
					</p>
					<ul>
						<li><a href="/wiki/Samudera_Pasai_Sultanate" title="Samudera Pasai Sultanate">Samudera Pasai
								Sultanate</a> (1267–1521)</li>
						<li><a href="/wiki/Malacca_Sultanate" title="Malacca Sultanate">Malacca Sultanate</a>
							(1400–1511)</li>
						<li><a href="/wiki/List_of_sultans_of_Brunei" title="List of sultans of Brunei">Bruneian
								Sultanate</a> (1363–present)</li>
						<li><a href="/wiki/Aceh_Sultanate" title="Aceh Sultanate">Aceh Sultanate</a> (1496–1904)</li>
						<li><a href="/wiki/Sultanate_of_Siak" class="mw-redirect" title="Sultanate of Siak">Sultanate of
								Siak</a> (1723–1949)</li>
						<li><a href="/wiki/Aru_Kingdom" title="Aru Kingdom">Aru Kingdom</a> (1225–1613)</li>
						<li><a href="/wiki/Sultanate_of_Langkat" title="Sultanate of Langkat">Sultanate of Langkat</a>
							(1568–1946)</li>
						<li><a href="/wiki/Sultanate_of_Asahan" class="mw-redirect"
								title="Sultanate of Asahan">Sultanate of Asahan</a> (1630–1946)</li>
						<li><a href="/wiki/Sultanate_of_Serdang" title="Sultanate of Serdang">Sultanate of Serdang</a>
							(1723–1946)</li>
						<li><a href="/wiki/Sultanate_of_Deli" title="Sultanate of Deli">Sultanate of Deli</a>
							(1632–1946)</li>
						<li><a href="/wiki/Pagaruyung_Kingdom" title="Pagaruyung Kingdom">Pagaruyung Kingdom</a>
							(1347–1833)</li>
						<li><a href="/wiki/Sultan_of_Johor" title="Sultan of Johor">Sultanate of Johor</a>
							(1528–present)</li>
						<li><a href="/wiki/Kedah_Sultanate" title="Kedah Sultanate">Sultanate of Kedah</a>
							(1136–present)</li>
						<li><a href="/wiki/Kelantan_Sultanate" class="mw-redirect" title="Kelantan Sultanate">Sultanate
								of Kelantan</a> (1267–present)</li>
						<li><a href="/wiki/Perak_Sultanate" class="mw-redirect" title="Perak Sultanate">Sultanate of
								Perak</a> (1528–present)</li>
						<li><a href="/wiki/Sultan_of_Pahang" title="Sultan of Pahang">Sultanate of Pahang</a>
							(1470–present)</li>
						<li><a href="/wiki/Selangor_Sultanate" class="mw-redirect" title="Selangor Sultanate">Sultanate
								of Selangor</a> (1743–present)</li>
						<li><a href="/wiki/Sultanate_of_Terengganu" class="mw-redirect"
								title="Sultanate of Terengganu">Sultanate of Terengganu</a> (1725–present)</li>
						<li><a href="/wiki/House_of_Jamalullail_(Perlis)" title="House of Jamalullail (Perlis)">Perlis
								Kingdom</a> (1843–present)</li>
						<li><a href="/wiki/Yamtuan_Besar" title="Yamtuan Besar">Negeri Sembilan Kingdom</a>
							(1773–present)</li>
						<li><a href="/wiki/Sultanate_of_Sarawak" title="Sultanate of Sarawak">Sultanate of Sarawak</a>
							(1599–1641)</li>
						<li><a href="/wiki/Bima_Sultanate" title="Bima Sultanate">Bima Sultanate</a> (1620–1958)</li>
						<li><a href="/wiki/Mataram_Sultanate" title="Mataram Sultanate">Mataram Sultanate</a>
							(1586–1755)</li>
						<li><a href="/wiki/Demak_Sultanate" title="Demak Sultanate">Demak Sultanate</a> (1475–1554)</li>
						<li><a href="/wiki/Cirebon_Sultanate" class="mw-redirect" title="Cirebon Sultanate">Cirebon
								Sultanate</a> (1430–1666)</li>
						<li><a href="/wiki/Banten_Sultanate" title="Banten Sultanate">Banten Sultanate</a> (1527–1813)
						</li>
						<li><a href="/wiki/Kingdom_of_Pajang" title="Kingdom of Pajang">Kingdom of Pajang</a>
							(1568–1618)</li>
						<li><a href="/wiki/Yogyakarta_Sultanate" title="Yogyakarta Sultanate">Yogyakarta Sultanate</a>
							(1755–present)</li>
						<li><a href="/wiki/Surakarta_Sunanate" title="Surakarta Sunanate">Surakarta Sunanate</a>
							(1755–1945)</li>
						<li><a href="/wiki/Kingdom_of_Sumedang_Larang" class="mw-redirect"
								title="Kingdom of Sumedang Larang">Kingdom of Sumedang Larang</a> (1527–1620)</li>
						<li><a href="/wiki/Kalinyamat_Sultanate" title="Kalinyamat Sultanate">Kalinyamat Sultanate</a>
							(1527–1599)</li>
						<li><a href="/wiki/Sultanate_of_Ternate" title="Sultanate of Ternate">Sultanate of Ternate</a>
							(1257–1914)</li>
						<li><a href="/wiki/Sultanate_of_Tidore" title="Sultanate of Tidore">Sultanate of Tidore</a>
							(1450–1967)</li>
						<li><a href="/wiki/Sultanate_of_Jailolo" title="Sultanate of Jailolo">Sultanate of Jailolo</a>
							(1200s–1832)</li>
						<li><a href="/wiki/Sultanate_of_Bacan" title="Sultanate of Bacan">Sultanate of Bacan</a>
							(1322–1965)</li>
						<li><a href="/wiki/Sultanate_of_Banjar" title="Sultanate of Banjar">Sultanate of Banjar</a>
							(1526–1860)</li>
						<li><a href="/wiki/Sultanate_of_Pontianak" class="mw-redirect"
								title="Sultanate of Pontianak">Sultanate of Pontianak</a> (1771–1950)</li>
						<li><a href="/wiki/Kutai" title="Kutai">Kutai Kartanegara Sultanate</a> (1600s–1945)</li>
						<li><a href="/wiki/Sultanate_of_Sambas" title="Sultanate of Sambas">Sultanate of Sambas</a>
							(1609–1956)</li>
						<li><a href="/wiki/Sultanate_of_Sintang" class="mw-redirect"
								title="Sultanate of Sintang">Sultanate of Sintang</a> (1365–1950)</li>
						<li><a href="/wiki/Sultanate_of_Bulungan" title="Sultanate of Bulungan">Sultanate of
								Bulungan</a> (1731–1964)</li>
						<li><a href="/wiki/Kingdom_of_Bolaang_Mongondow" title="Kingdom of Bolaang Mongondow">Kingdom of
								Bolaang Mongondow</a> (1670–1950)</li>
						<li><a href="/wiki/Sultanate_of_Gowa" title="Sultanate of Gowa">Sultanate of Gowa</a>
							(1300s–1945)</li>
						<li><a href="/wiki/Kingdom_of_Tallo" title="Kingdom of Tallo">Kingdom of Tallo</a> (1400–1856)
						</li>
						<li><a href="/wiki/Palembang_Sultanate" title="Palembang Sultanate">Palembang Sultanate</a>
							(1659–1823)</li>
						<li><a href="/wiki/Kingdom_of_Kaimana" title="Kingdom of Kaimana">Kingdom of Kaimana</a>
							(1309–1923)</li>
						<li><a href="/wiki/Jambi_Sultanate" title="Jambi Sultanate">Jambi Sultanate</a> (1550–1905)</li>
						<li><a href="/wiki/Riau-Lingga_Sultanate" title="Riau-Lingga Sultanate">Riau-Lingga
								Sultanate</a> (1824–1911)</li>
					</ul>
					<p><b>Philippines</b>
					</p>
					<figure class="mw-default-size" typeof="mw:File/Thumb"><a
							href="/wiki/File:Moro_Sultanates_(Philippines).png" class="mw-file-description"><img
								src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Moro_Sultanates_%28Philippines%29.png/220px-Moro_Sultanates_%28Philippines%29.png"
								decoding="async" width="220" height="138" class="mw-file-element"
								srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Moro_Sultanates_%28Philippines%29.png/330px-Moro_Sultanates_%28Philippines%29.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Moro_Sultanates_%28Philippines%29.png/440px-Moro_Sultanates_%28Philippines%29.png 2x"
								data-file-width="1539" data-file-height="966"></a>
						<figcaption>Approximate extent of the Muslim Sultanates in the <a href="/wiki/Philippines"
								title="Philippines">Philippines</a></figcaption>
					</figure>
					<ul>
						<li><a href="/wiki/Kingdom_of_Manila" class="mw-redirect" title="Kingdom of Manila">Kingdom of
								Manila</a> (1258–1571)</li>
						<li><a href="/wiki/Namayan" title="Namayan">Kingdom of Namayan</a> (1175–1571)</li>
						<li><a href="/wiki/Mactan" title="Mactan">Datu of Mactan</a> (1500–1540)</li>
						<li><a href="/wiki/Sultanate_of_Maguindanao" title="Sultanate of Maguindanao">Sultanate of
								Maguindanao</a> (1515–1905)</li>
						<li><a href="/wiki/Sultanate_of_Sulu" title="Sultanate of Sulu">Sultanate of Sulu</a>
							(1405–1915, 1962–1986)</li>
						<li><a href="/wiki/Confederate_States_of_Lanao" title="Confederate States of Lanao">Sultanates
								of Lanao</a> (1616–Present)</li>
						<li><a href="/wiki/Balayan" title="Balayan">Bon-bon sultanate</a></li>
					</ul>
					<p><b>Thailand</b>
					</p>
					<ul>
						<li><a href="/wiki/Pattani_Kingdom" class="mw-redirect" title="Pattani Kingdom">Pattani
								Kingdom</a> (1457–1902)</li>
						<li><a href="/wiki/Sultanate_of_Singora" title="Sultanate of Singora">Sultanate of Singora</a>
							(1605–1680)</li>
						<li><a href="/wiki/Kingdom_of_Setul_Mambang_Segara"
								title="Kingdom of Setul Mambang Segara">Kingdom of Setul Mambang Segara</a> (1808–1916)
						</li>
						<li><a href="/wiki/Kingdom_of_Reman" title="Kingdom of Reman">Kingdom of Reman</a> (1810–1902)
						</li>
					</ul>
					<p><b>Indochina</b>
					</p>
					<ul>
						<li><a href="/wiki/Kingdom_of_Champa" class="mw-redirect" title="Kingdom of Champa">Kingdom of
								Champa</a> (11th century–1832)</li>
					</ul>
					<h2><span class="mw-headline" id="See_also">See also</span><span class="mw-editsection"><span
								class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=17"
								title="Edit section: See also"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<ul>
						<li><a href="/wiki/List_of_Sunni_dynasties" title="List of Sunni dynasties">List of Sunni
								dynasties</a></li>
						<li><a href="/wiki/List_of_Shia_dynasties" title="List of Shia dynasties">List of Shia
								dynasties</a></li>
						<li><a href="/wiki/Islamic_state" title="Islamic state">Islamic state</a></li>
						<li><a href="/wiki/Caliphate" title="Caliphate">Caliphate</a></li>
						<li><a href="/wiki/List_of_largest_empires" title="List of largest empires">List of largest
								empires</a></li>
						<li><a href="/wiki/Timeline_of_Middle_Eastern_history"
								title="Timeline of Middle Eastern history">Timeline of Middle Eastern history</a></li>
						<li><a href="/wiki/Early_Muslim_conquests" title="Early Muslim conquests">Early Muslim
								conquests</a></li>
						<li><a href="/wiki/History_of_Islam" title="History of Islam">History of Islam</a></li>
						<li><a href="/wiki/Muslim_world" title="Muslim world">Muslim world</a></li>
						<li><a href="/wiki/The_Ottomans:_Europe%27s_Muslim_Emperors"
								title="The Ottomans: Europe's Muslim Emperors">The Ottomans: Europe's Muslim
								Emperors</a></li>
						<li><a href="/wiki/List_of_Buddhist_Kingdoms_and_Empires" class="mw-redirect"
								title="List of Buddhist Kingdoms and Empires">List of Buddhist Kingdoms and Empires</a>
						</li>
						<li><a href="/wiki/List_of_Hindu_empires_and_dynasties"
								title="List of Hindu empires and dynasties">List of Hindu empires and dynasties</a></li>
						<li><a href="/wiki/List_of_Jain_states_and_dynasties"
								title="List of Jain states and dynasties">List of Jain states and dynasties</a></li>
						<li><a href="/wiki/List_of_Jewish_states_and_dynasties"
								title="List of Jewish states and dynasties">List of Jewish states and dynasties</a></li>
						<li><a href="/wiki/List_of_Zoroastrian_states_and_dynasties"
								title="List of Zoroastrian states and dynasties">List of Zoroastrian states and
								dynasties</a></li>
						<li><a href="/wiki/List_of_Confucian_states_and_dynasties"
								title="List of Confucian states and dynasties">List of Confucian states and
								dynasties</a></li>
						<li><a href="/wiki/List_of_Tengrist_states_and_dynasties"
								title="List of Tengrist states and dynasties">List of Tengrist states and dynasties</a>
						</li>
					</ul>
					<h2><span class="mw-headline" id="References">References</span><span class="mw-editsection"><span
								class="mw-editsection-bracket">[</span><a
								href="/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;action=edit&amp;section=18"
								title="Edit section: References"><span>edit</span></a><span
								class="mw-editsection-bracket">]</span></span></h2>
					<style data-mw-deduplicate="TemplateStyles:r1011085734">
						.mw-parser-output .reflist {
							font-size: 90%;
							margin-bottom: 0.5em;
							list-style-type: decimal
						}

						.mw-parser-output .reflist .references {
							font-size: 100%;
							margin-bottom: 0;
							list-style-type: inherit
						}

						.mw-parser-output .reflist-columns-2 {
							column-width: 30em
						}

						.mw-parser-output .reflist-columns-3 {
							column-width: 25em
						}

						.mw-parser-output .reflist-columns {
							margin-top: 0.3em
						}

						.mw-parser-output .reflist-columns ol {
							margin-top: 0
						}

						.mw-parser-output .reflist-columns li {
							page-break-inside: avoid;
							break-inside: avoid-column
						}

						.mw-parser-output .reflist-upper-alpha {
							list-style-type: upper-alpha
						}

						.mw-parser-output .reflist-upper-roman {
							list-style-type: upper-roman
						}

						.mw-parser-output .reflist-lower-alpha {
							list-style-type: lower-alpha
						}

						.mw-parser-output .reflist-lower-greek {
							list-style-type: lower-greek
						}

						.mw-parser-output .reflist-lower-roman {
							list-style-type: lower-roman
						}
					</style>
					<div class="reflist reflist-columns references-column-width" style="column-width: 24em;">
						<ol class="references">
							<li id="cite_note-:12-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-:12_1-0"
											aria-label="Jump up" title="Jump up">^</a></b></span> <span
									class="reference-text">
									<style data-mw-deduplicate="TemplateStyles:r1133582631">
										.mw-parser-output cite.citation {
											font-style: inherit;
											word-wrap: break-word
										}

										.mw-parser-output .citation q {
											quotes: "\"""\"""'""'"
										}

										.mw-parser-output .citation:target {
											background-color: rgba(0, 127, 255, 0.133)
										}

										.mw-parser-output .id-lock-free a,
										.mw-parser-output .citation .cs1-lock-free a {
											background: url("//upload.wikimedia.org/wikipedia/commons/6/65/Lock-green.svg")right 0.1em center/9px no-repeat
										}

										.mw-parser-output .id-lock-limited a,
										.mw-parser-output .id-lock-registration a,
										.mw-parser-output .citation .cs1-lock-limited a,
										.mw-parser-output .citation .cs1-lock-registration a {
											background: url("//upload.wikimedia.org/wikipedia/commons/d/d6/Lock-gray-alt-2.svg")right 0.1em center/9px no-repeat
										}

										.mw-parser-output .id-lock-subscription a,
										.mw-parser-output .citation .cs1-lock-subscription a {
											background: url("//upload.wikimedia.org/wikipedia/commons/a/aa/Lock-red-alt-2.svg")right 0.1em center/9px no-repeat
										}

										.mw-parser-output .cs1-ws-icon a {
											background: url("//upload.wikimedia.org/wikipedia/commons/4/4c/Wikisource-logo.svg")right 0.1em center/12px no-repeat
										}

										.mw-parser-output .cs1-code {
											color: inherit;
											background: inherit;
											border: none;
											padding: inherit
										}

										.mw-parser-output .cs1-hidden-error {
											display: none;
											color: #d33
										}

										.mw-parser-output .cs1-visible-error {
											color: #d33
										}

										.mw-parser-output .cs1-maint {
											display: none;
											color: #3a3;
											margin-left: 0.3em
										}

										.mw-parser-output .cs1-format {
											font-size: 95%
										}

										.mw-parser-output .cs1-kern-left {
											padding-left: 0.2em
										}

										.mw-parser-output .cs1-kern-right {
											padding-right: 0.2em
										}

										.mw-parser-output .citation .mw-selflink {
											font-weight: inherit
										}
									</style><cite id="CITEREFLevy-Rubin2011" class="citation book cs1">Levy-Rubin, Milka
										(2011). <i>Non-Muslims in the Early Islamic Empire</i>. Cambridge: Cambridge
										University Press. pp.&nbsp;102–103. <a href="/wiki/Doi_(identifier)"
											class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow"
											class="external text"
											href="https://doi.org/10.1017%2Fcbo9780511977435">10.1017/cbo9780511977435</a>.
										<a href="/wiki/ISBN_(identifier)" class="mw-redirect"
											title="ISBN (identifier)">ISBN</a>&nbsp;<a
											href="/wiki/Special:BookSources/978-1108449618"
											title="Special:BookSources/978-1108449618"><bdi>978-1108449618</bdi></a>.</cite><span
										title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Non-Muslims+in+the+Early+Islamic+Empire&amp;rft.place=Cambridge&amp;rft.pages=102-103&amp;rft.pub=Cambridge+University+Press&amp;rft.date=2011&amp;rft_id=info%3Adoi%2F10.1017%2Fcbo9780511977435&amp;rft.isbn=978-1108449618&amp;rft.aulast=Levy-Rubin&amp;rft.aufirst=Milka&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AList+of+Muslim+states+and+dynasties"
										class="Z3988"></span>
								</span>
							</li>
							<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2"
											aria-label="Jump up" title="Jump up">^</a></b></span> <span
									class="reference-text">
									<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1133582631">
									<cite id="CITEREFJo_Van_Steenbergen2020" class="citation book cs1">Jo Van
										Steenbergen (2020). "2.1". <i>A History of the Islamic World, 600–1800: Empire,
											Dynastic Formations, and Heterogeneities in Pre-Modern Islamic
											West-Asia</i>. Routledge. <a href="/wiki/ISBN_(identifier)"
											class="mw-redirect" title="ISBN (identifier)">ISBN</a>&nbsp;<a
											href="/wiki/Special:BookSources/978-1000093070"
											title="Special:BookSources/978-1000093070"><bdi>978-1000093070</bdi></a>.</cite><span
										title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=2.1&amp;rft.btitle=A+History+of+the+Islamic+World%2C+600%E2%80%931800%3A+Empire%2C+Dynastic+Formations%2C+and+Heterogeneities+in+Pre-Modern+Islamic+West-Asia&amp;rft.pub=Routledge&amp;rft.date=2020&amp;rft.isbn=978-1000093070&amp;rft.au=Jo+Van+Steenbergen&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AList+of+Muslim+states+and+dynasties"
										class="Z3988"></span></span>
							</li>
						</ol>
					</div>
					<div class="navbox-styles">
						<style data-mw-deduplicate="TemplateStyles:r1129693374">
							.mw-parser-output .hlist dl,
							.mw-parser-output .hlist ol,
							.mw-parser-output .hlist ul {
								margin: 0;
								padding: 0
							}

							.mw-parser-output .hlist dd,
							.mw-parser-output .hlist dt,
							.mw-parser-output .hlist li {
								margin: 0;
								display: inline
							}

							.mw-parser-output .hlist.inline,
							.mw-parser-output .hlist.inline dl,
							.mw-parser-output .hlist.inline ol,
							.mw-parser-output .hlist.inline ul,
							.mw-parser-output .hlist dl dl,
							.mw-parser-output .hlist dl ol,
							.mw-parser-output .hlist dl ul,
							.mw-parser-output .hlist ol dl,
							.mw-parser-output .hlist ol ol,
							.mw-parser-output .hlist ol ul,
							.mw-parser-output .hlist ul dl,
							.mw-parser-output .hlist ul ol,
							.mw-parser-output .hlist ul ul {
								display: inline
							}

							.mw-parser-output .hlist .mw-empty-li {
								display: none
							}

							.mw-parser-output .hlist dt::after {
								content: ": "
							}

							.mw-parser-output .hlist dd::after,
							.mw-parser-output .hlist li::after {
								content: " · ";
								font-weight: bold
							}

							.mw-parser-output .hlist dd:last-child::after,
							.mw-parser-output .hlist dt:last-child::after,
							.mw-parser-output .hlist li:last-child::after {
								content: none
							}

							.mw-parser-output .hlist dd dd:first-child::before,
							.mw-parser-output .hlist dd dt:first-child::before,
							.mw-parser-output .hlist dd li:first-child::before,
							.mw-parser-output .hlist dt dd:first-child::before,
							.mw-parser-output .hlist dt dt:first-child::before,
							.mw-parser-output .hlist dt li:first-child::before,
							.mw-parser-output .hlist li dd:first-child::before,
							.mw-parser-output .hlist li dt:first-child::before,
							.mw-parser-output .hlist li li:first-child::before {
								content: " (";
								font-weight: normal
							}

							.mw-parser-output .hlist dd dd:last-child::after,
							.mw-parser-output .hlist dd dt:last-child::after,
							.mw-parser-output .hlist dd li:last-child::after,
							.mw-parser-output .hlist dt dd:last-child::after,
							.mw-parser-output .hlist dt dt:last-child::after,
							.mw-parser-output .hlist dt li:last-child::after,
							.mw-parser-output .hlist li dd:last-child::after,
							.mw-parser-output .hlist li dt:last-child::after,
							.mw-parser-output .hlist li li:last-child::after {
								content: ")";
								font-weight: normal
							}

							.mw-parser-output .hlist ol {
								counter-reset: listitem
							}

							.mw-parser-output .hlist ol>li {
								counter-increment: listitem
							}

							.mw-parser-output .hlist ol>li::before {
								content: " "counter(listitem)"\a0 "
							}

							.mw-parser-output .hlist dd ol>li:first-child::before,
							.mw-parser-output .hlist dt ol>li:first-child::before,
							.mw-parser-output .hlist li ol>li:first-child::before {
								content: " ("counter(listitem)"\a0 "
							}
						</style>
						<style data-mw-deduplicate="TemplateStyles:r1061467846">
							.mw-parser-output .navbox {
								box-sizing: border-box;
								border: 1px solid #a2a9b1;
								width: 100%;
								clear: both;
								font-size: 88%;
								text-align: center;
								padding: 1px;
								margin: 1em auto 0
							}

							.mw-parser-output .navbox .navbox {
								margin-top: 0
							}

							.mw-parser-output .navbox+.navbox,
							.mw-parser-output .navbox+.navbox-styles+.navbox {
								margin-top: -1px
							}

							.mw-parser-output .navbox-inner,
							.mw-parser-output .navbox-subgroup {
								width: 100%
							}

							.mw-parser-output .navbox-group,
							.mw-parser-output .navbox-title,
							.mw-parser-output .navbox-abovebelow {
								padding: 0.25em 1em;
								line-height: 1.5em;
								text-align: center
							}

							.mw-parser-output .navbox-group {
								white-space: nowrap;
								text-align: right
							}

							.mw-parser-output .navbox,
							.mw-parser-output .navbox-subgroup {
								background-color: #fdfdfd
							}

							.mw-parser-output .navbox-list {
								line-height: 1.5em;
								border-color: #fdfdfd
							}

							.mw-parser-output .navbox-list-with-group {
								text-align: left;
								border-left-width: 2px;
								border-left-style: solid
							}

							.mw-parser-output tr+tr>.navbox-abovebelow,
							.mw-parser-output tr+tr>.navbox-group,
							.mw-parser-output tr+tr>.navbox-image,
							.mw-parser-output tr+tr>.navbox-list {
								border-top: 2px solid #fdfdfd
							}

							.mw-parser-output .navbox-title {
								background-color: #ccf
							}

							.mw-parser-output .navbox-abovebelow,
							.mw-parser-output .navbox-group,
							.mw-parser-output .navbox-subgroup .navbox-title {
								background-color: #ddf
							}

							.mw-parser-output .navbox-subgroup .navbox-group,
							.mw-parser-output .navbox-subgroup .navbox-abovebelow {
								background-color: #e6e6ff
							}

							.mw-parser-output .navbox-even {
								background-color: #f7f7f7
							}

							.mw-parser-output .navbox-odd {
								background-color: transparent
							}

							.mw-parser-output .navbox .hlist td dl,
							.mw-parser-output .navbox .hlist td ol,
							.mw-parser-output .navbox .hlist td ul,
							.mw-parser-output .navbox td.hlist dl,
							.mw-parser-output .navbox td.hlist ol,
							.mw-parser-output .navbox td.hlist ul {
								padding: 0.125em 0
							}

							.mw-parser-output .navbox .navbar {
								display: block;
								font-size: 100%
							}

							.mw-parser-output .navbox-title .navbar {
								float: left;
								text-align: left;
								margin-right: 0.5em
							}
						</style>
						<style data-mw-deduplicate="TemplateStyles:r1038841319">
							.mw-parser-output .tooltip-dotted {
								border-bottom: 1px dotted;
								cursor: help
							}
						</style>
					</div>
					<div role="navigation" class="navbox authority-control" aria-label="Navbox" style="padding:3px">
						<table class="nowraplinks hlist navbox-inner"
							style="border-spacing:0;background:transparent;color:inherit">
							<tbody>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%"><a
											href="/wiki/Help:Authority_control" title="Help:Authority control">Authority
											control databases</a>: National <span class="mw-valign-text-top noprint"
											typeof="mw:File/Frameless"><a
												href="https://www.wikidata.org/wiki/Q1052942#identifiers"
												title="Edit this at Wikidata"><img alt="Edit this at Wikidata"
													src="//upload.wikimedia.org/wikipedia/en/thumb/8/8a/OOjs_UI_icon_edit-ltr-progressive.svg/10px-OOjs_UI_icon_edit-ltr-progressive.svg.png"
													decoding="async" width="10" height="10" class="mw-file-element"
													srcset="//upload.wikimedia.org/wikipedia/en/thumb/8/8a/OOjs_UI_icon_edit-ltr-progressive.svg/15px-OOjs_UI_icon_edit-ltr-progressive.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/8/8a/OOjs_UI_icon_edit-ltr-progressive.svg/20px-OOjs_UI_icon_edit-ltr-progressive.svg.png 2x"
													data-file-width="20" data-file-height="20"></a></span></th>
									<td class="navbox-list-with-group navbox-list navbox-odd"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><span class="uid"><span
															class="rt-commentedText tooltip tooltip-dotted"
															title="Islamic Empire"><a rel="nofollow"
																class="external text"
																href="https://id.loc.gov/authorities/sh85068444">United
																States</a></span></span></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- Saved in parser cache with key enwiki:pcache:idhash:9547941-0!canonical and timestamp 20240227112002 and revision id 1209144215. Rendering was triggered because: page-view
 -->
				</div>
				<!--esi <esi:include src="/esitest-fa8a495983347898/content" /> --><noscript><img
						src="https://login.wikimedia.org/wiki/Special:CentralAutoLogin/start?type=1x1" alt="" width="1"
						height="1" style="border: none; position: absolute;"></noscript>
				<div class="printfooter" data-nosnippet="">Retrieved from "<a dir="ltr"
						href="https://en.wikipedia.org/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;oldid=1209144215">https://en.wikipedia.org/w/index.php?title=List_of_Muslim_states_and_dynasties&amp;oldid=1209144215</a>"
				</div>
			</div>
			<div id="catlinks" class="catlinks" data-mw="interface">
				<div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="/wiki/Help:Category"
						title="Help:Category">Categories</a>: <ul>
						<li><a href="/wiki/Category:Lists_of_countries" title="Category:Lists of countries">Lists of
								countries</a></li>
						<li><a href="/wiki/Category:Lists_of_dynasties" title="Category:Lists of dynasties">Lists of
								dynasties</a></li>
						<li><a href="/wiki/Category:Islam-related_lists"
								title="Category:Islam-related lists">Islam-related lists</a></li>
						<li><a href="/wiki/Category:History-related_lists"
								title="Category:History-related lists">History-related lists</a></li>
						<li><a href="/wiki/Category:Former_Islamic_monarchies"
								title="Category:Former Islamic monarchies">Former Islamic monarchies</a></li>
						<li><a href="/wiki/Category:Muslim_dynasties" title="Category:Muslim dynasties">Muslim
								dynasties</a></li>
					</ul>
				</div>
				<div id="mw-hidden-catlinks" class="mw-hidden-catlinks mw-hidden-cats-hidden">Hidden categories: <ul>
						<li><a href="/wiki/Category:Articles_needing_additional_references_from_November_2023"
								title="Category:Articles needing additional references from November 2023">Articles
								needing additional references from November 2023</a></li>
						<li><a href="/wiki/Category:All_articles_needing_additional_references"
								title="Category:All articles needing additional references">All articles needing
								additional references</a></li>
						<li><a href="/wiki/Category:Wikipedia_articles_with_style_issues_from_November_2023"
								title="Category:Wikipedia articles with style issues from November 2023">Wikipedia
								articles with style issues from November 2023</a></li>
						<li><a href="/wiki/Category:All_articles_with_style_issues"
								title="Category:All articles with style issues">All articles with style issues</a></li>
						<li><a href="/wiki/Category:Articles_with_multiple_maintenance_issues"
								title="Category:Articles with multiple maintenance issues">Articles with multiple
								maintenance issues</a></li>
						<li><a href="/wiki/Category:Articles_with_short_description"
								title="Category:Articles with short description">Articles with short description</a>
						</li>
						<li><a href="/wiki/Category:Short_description_is_different_from_Wikidata"
								title="Category:Short description is different from Wikidata">Short description is
								different from Wikidata</a></li>
						<li><a href="/wiki/Category:All_articles_with_unsourced_statements"
								title="Category:All articles with unsourced statements">All articles with unsourced
								statements</a></li>
						<li><a href="/wiki/Category:Articles_with_unsourced_statements_from_November_2023"
								title="Category:Articles with unsourced statements from November 2023">Articles with
								unsourced statements from November 2023</a></li>
						<li><a href="/wiki/Category:Articles_with_LCCN_identifiers"
								title="Category:Articles with LCCN identifiers">Articles with LCCN identifiers</a></li>
					</ul>
				</div>
			</div>
		</div>
	</main>

	<?= $this->endSection() ?>
	<?= $this->section('scripts') ?>
	<?= $this->endSection() ?>