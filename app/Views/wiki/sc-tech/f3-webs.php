<?= $this->extend('layouts/wiki') ?>
<?= $this->section('title') ?>
Meta
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
	<div role="navigation" class="navbox" aria-labelledby="Web_interfaces" style="padding:3px">
		<table class="nowraplinks mw-collapsible autocollapse navbox-inner mw-made-collapsible"
			style="border-spacing:0;background:transparent;color:inherit">
			<tbody>
				<tr>
					<th scope="col" class="navbox-title" colspan="2"><button type="button"
							class="mw-collapsible-toggle mw-collapsible-toggle-default mw-collapsible-toggle-expanded"
							aria-expanded="true" tabindex="0"><span class="mw-collapsible-text">hide</span></button>
						<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374">
						<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236085633">
						<div class="navbar plainlinks hlist navbar-mini">
							<ul>
								<li class="nv-view"><a href="/wiki/Template:Web_interfaces"
										title="Template:Web interfaces"><abbr title="View this template">v</abbr></a>
								</li>
								<li class="nv-talk"><a href="/wiki/Template_talk:Web_interfaces"
										title="Template talk:Web interfaces"><abbr
											title="Discuss this template">t</abbr></a></li>
								<li class="nv-edit"><a href="/wiki/Special:EditPage/Template:Web_interfaces"
										title="Special:EditPage/Template:Web interfaces"><abbr
											title="Edit this template">e</abbr></a></li>
							</ul>
						</div>
						<div id="Web_interfaces" style="font-size:114%;margin:0 4em"><a href="/wiki/Web_API"
								title="Web API">Web interfaces</a></div>
					</th>
				</tr>
				<tr style="">
					<th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Server-side"
							class="mw-redirect" title="Server-side">Server-side</a></th>
					<td class="navbox-list-with-group navbox-list navbox-odd hlist" style="width:100%;padding:0">
						<div style="padding:0 0.25em"></div>
						<table class="nowraplinks navbox-subgroup" style="border-spacing:0">
							<tbody>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%"><a
											href="/wiki/Communication_protocol"
											title="Communication protocol">Protocols</a></th>
									<td class="navbox-list-with-group navbox-list navbox-odd"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><a href="/wiki/HTTP" title="HTTP">HTTP</a>
													<ul>
														<li><a href="/wiki/HTTP/2" title="HTTP/2">v2</a></li>
														<li><a href="/wiki/HTTP/3" title="HTTP/3">v3</a></li>
														<li><a href="/wiki/HTTPS" title="HTTPS">Encryption</a></li>
														<li><a href="/wiki/WebDAV" title="WebDAV">WebDAV</a></li>
													</ul>
												</li>
												<li><a href="/wiki/Common_Gateway_Interface"
														title="Common Gateway Interface">CGI</a></li>
												<li><a href="/wiki/Simple_Common_Gateway_Interface"
														title="Simple Common Gateway Interface">SCGI</a></li>
												<li><a href="/wiki/FastCGI" title="FastCGI">FCGI</a></li>
												<li><a href="/wiki/Apache_JServ_Protocol"
														title="Apache JServ Protocol">AJP</a></li>
												<li><a href="/wiki/Web_Services_for_Remote_Portlets"
														title="Web Services for Remote Portlets">WSRP</a></li>
												<li><a class="mw-selflink selflink">WebSocket</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%"><a
											href="/wiki/Server_application_programming_interface"
											title="Server application programming interface">Server APIs</a></th>
									<td class="navbox-list-with-group navbox-list navbox-even"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><a href="/wiki/Netscape_Server_Application_Programming_Interface"
														title="Netscape Server Application Programming Interface">C
														NSAPI</a></li>
												<li><a href="/wiki/Apache_HTTP_Server#Feature_overview"
														title="Apache HTTP Server">C ASAPI</a></li>
												<li><a href="/wiki/Internet_Server_Application_Programming_Interface"
														title="Internet Server Application Programming Interface">C
														ISAPI</a></li>
												<li><a href="/wiki/Active_Server_Pages" title="Active Server Pages">COM
														ASP</a></li>
												<li><a href="/wiki/Jakarta_Servlet" title="Jakarta Servlet">Jakarta
														Servlet</a>
													<ul>
														<li><a href="/wiki/Web_container"
																title="Web container">container</a></li>
													</ul>
												</li>
												<li><a href="/wiki/Open_Web_Interface_for_.NET"
														title="Open Web Interface for .NET">CLI OWIN</a></li>
												<li><a href="/wiki/HTTP_handler" title="HTTP handler">ASP.NET
														Handler</a></li>
												<li><a href="/wiki/Web_Server_Gateway_Interface"
														title="Web Server Gateway Interface">Python WSGI</a></li>
												<li><a href="/wiki/Asynchronous_Server_Gateway_Interface"
														title="Asynchronous Server Gateway Interface">Python ASGI</a>
												</li>
												<li><a href="/wiki/Rack_(web_server_interface)"
														title="Rack (web server interface)">Ruby Rack</a></li>
												<li><a href="/wiki/JSGI" title="JSGI">JavaScript JSGI</a></li>
												<li><a href="/wiki/Plack_(software)#PSGI" title="Plack (software)">Perl
														PSGI</a></li>
												<li><a href="/wiki/Java_Portlet_Specification"
														title="Java Portlet Specification">Portlet</a>
													<ul>
														<li><a href="/wiki/Java_Portlet_Specification"
																title="Java Portlet Specification">container</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%"><a
											href="/wiki/List_of_Apache_modules" title="List of Apache modules">Apache
											modules</a></th>
									<td class="navbox-list-with-group navbox-list navbox-odd"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><a href="/wiki/Server_Side_Includes"
														title="Server Side Includes">mod_include</a></li>
												<li><a href="/wiki/Mod_jk" class="mw-redirect" title="Mod jk">mod_jk</a>
												</li>
												<li><a href="/wiki/Mod_lisp" title="Mod lisp">mod_lisp</a></li>
												<li><a href="/wiki/Mod_mono" title="Mod mono">mod_mono</a></li>
												<li><a href="/wiki/Mod_parrot" title="Mod parrot">mod_parrot</a></li>
												<li><a href="/wiki/Mod_perl" title="Mod perl">mod_perl</a></li>
												<li><a href="/wiki/PHP" title="PHP">mod_php</a></li>
												<li><a href="/wiki/Mod_proxy" title="Mod proxy">mod_proxy</a></li>
												<li><a href="/wiki/Mod_python" title="Mod python">mod_python</a></li>
												<li><a href="/wiki/Mod_wsgi" title="Mod wsgi">mod_wsgi</a></li>
												<li><a href="/wiki/Mod_ruby" title="Mod ruby">mod_ruby</a></li>
												<li><a href="/wiki/Phusion_Passenger" title="Phusion Passenger">Phusion
														Passenger</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%">Topics</th>
									<td class="navbox-list-with-group navbox-list navbox-even"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><a href="/wiki/Web_service" title="Web service">Web service</a> vs.
													<a href="/wiki/Web_resource" title="Web resource">Web resource</a>
												</li>
												<li><a href="/wiki/Web-oriented_architecture"
														title="Web-oriented architecture">WOA</a> vs. <a
														href="/wiki/Resource-oriented_architecture"
														title="Resource-oriented architecture">ROA</a></li>
												<li><a href="/wiki/Open_API" title="Open API">Open API</a></li>
												<li><a href="/wiki/Webhook" title="Webhook">Webhook</a></li>
												<li><a href="/wiki/Application_server"
														title="Application server">Application server</a>
													<ul>
														<li><a href="/wiki/List_of_application_servers"
																title="List of application servers">comparison</a></li>
													</ul>
												</li>
												<li><a href="/wiki/Server-side_scripting"
														title="Server-side scripting">Scripting</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div></div>
					</td>
				</tr>
				<tr style="">
					<th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Client-side"
							class="mw-redirect" title="Client-side">Client-side</a></th>
					<td class="navbox-list-with-group navbox-list navbox-odd hlist" style="width:100%;padding:0">
						<div style="padding:0 0.25em"></div>
						<table class="nowraplinks navbox-subgroup" style="border-spacing:0">
							<tbody>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%"><a
											href="/wiki/Plug-in_(computing)" title="Plug-in (computing)">Browser
											APIs</a></th>
									<td class="navbox-list-with-group navbox-list navbox-odd"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><a href="/wiki/NPAPI" title="NPAPI">C NPAPI</a>
													<ul>
														<li><a href="/wiki/NPAPI#LiveConnect"
																title="NPAPI">LiveConnect</a></li>
														<li><a href="/wiki/NPAPI#XPConnect" title="NPAPI">XPConnect</a>
														</li>
													</ul>
												</li>
												<li><a href="/wiki/NPAPI#NPRuntime" title="NPAPI">C NPRuntime</a></li>
												<li><a href="/wiki/Google_Native_Client#Pepper"
														title="Google Native Client">C PPAPI</a>
													<ul>
														<li><a href="/wiki/Google_Native_Client"
																title="Google Native Client">NaCl</a></li>
													</ul>
												</li>
												<li><a href="/wiki/ActiveX" title="ActiveX">ActiveX</a></li>
												<li><a href="/wiki/Browser_Helper_Object"
														title="Browser Helper Object">BHO</a></li>
												<li><a href="/wiki/XAML_Browser_Applications"
														title="XAML Browser Applications">XBAP</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%"><a
											href="/wiki/Web_API#Client_side" title="Web API">Web APIs</a></th>
									<td class="navbox-list-with-group navbox-list navbox-odd"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em"></div>
										<table class="nowraplinks navbox-subgroup" style="border-spacing:0">
											<tbody>
												<tr>
													<th scope="row" class="navbox-group" style="width:1%"><a
															href="/wiki/WHATWG" title="WHATWG">WHATWG</a></th>
													<td class="navbox-list-with-group navbox-list navbox-even"
														style="width:100%;padding:0">
														<div style="padding:0 0.25em">
															<ul>
																<li><a href="/wiki/HTML_audio"
																		title="HTML audio">Audio</a></li>
																<li><a href="/wiki/Canvas_element"
																		title="Canvas element">Canvas</a></li>
																<li><a href="/wiki/Cross-origin_resource_sharing"
																		title="Cross-origin resource sharing">CORS</a>
																</li>
																<li><a href="/wiki/Document_Object_Model"
																		title="Document Object Model">DOM</a></li>
																<li><a href="/wiki/Server-sent_events"
																		title="Server-sent events">SSE</a></li>
																<li><a href="/wiki/HTML_video"
																		title="HTML video">Video</a></li>
																<li><a class="mw-selflink selflink">WebSockets</a></li>
																<li><a href="/wiki/Web_Messaging"
																		title="Web Messaging">Web messaging</a></li>
																<li><a href="/wiki/Web_storage" title="Web storage">Web
																		storage</a></li>
																<li><a href="/wiki/Web_worker" title="Web worker">Web
																		worker</a></li>
																<li><a href="/wiki/XMLHttpRequest"
																		title="XMLHttpRequest">XMLHttpRequest</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row" class="navbox-group" style="width:1%"><a
															href="/wiki/World_Wide_Web_Consortium"
															title="World Wide Web Consortium">W3C</a></th>
													<td class="navbox-list-with-group navbox-list navbox-odd"
														style="width:100%;padding:0">
														<div style="padding:0 0.25em">
															<ul>
																<li><a href="/wiki/DOM_event" title="DOM event">DOM
																		events</a></li>
																<li><a href="/wiki/Encrypted_Media_Extensions"
																		title="Encrypted Media Extensions">EME</a></li>
																<li><a href="/wiki/HTML5_File_API"
																		title="HTML5 File API">File</a></li>
																<li><a href="/wiki/W3C_Geolocation_API"
																		title="W3C Geolocation API">Geolocation</a></li>
																<li><a href="/wiki/Indexed_Database_API"
																		title="Indexed Database API">IndexedDB</a></li>
																<li><a href="/wiki/Media_Source_Extensions"
																		title="Media Source Extensions">MSE</a></li>
																<li><a href="/wiki/SVG" title="SVG">SVG</a></li>
																<li><a href="/wiki/WebAssembly"
																		title="WebAssembly">WebAssembly</a></li>
																<li><a href="/wiki/WebAuthn"
																		title="WebAuthn">WebAuthn</a></li>
																<li><a href="/wiki/WebGPU" title="WebGPU">WebGPU</a>
																</li>
																<li><a href="/wiki/WebRTC" title="WebRTC">WebRTC</a>
																</li>
																<li><a href="/wiki/WebXR" title="WebXR">WebXR</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row" class="navbox-group" style="width:1%"><a
															href="/wiki/Khronos_Group" title="Khronos Group">Khronos</a>
													</th>
													<td class="navbox-list-with-group navbox-list navbox-even"
														style="width:100%;padding:0">
														<div style="padding:0 0.25em">
															<ul>
																<li><a href="/wiki/WebCL" title="WebCL">WebCL</a></li>
																<li><a href="/wiki/WebGL" title="WebGL">WebGL</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row" class="navbox-group" style="width:1%">Others</th>
													<td class="navbox-list-with-group navbox-list navbox-odd"
														style="width:100%;padding:0">
														<div style="padding:0 0.25em">
															<ul>
																<li><a href="/wiki/Gears_(software)"
																		title="Gears (software)">Gears</a></li>
																<li><a href="/wiki/Web_SQL_Database"
																		title="Web SQL Database">Web SQL Database</a>
																	(formerly W3C)</li>
																<li><a href="/wiki/WebUSB" title="WebUSB">WebUSB</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<div></div>
									</td>
								</tr>
								<tr>
									<th scope="row" class="navbox-group" style="width:1%">Topics</th>
									<td class="navbox-list-with-group navbox-list navbox-even"
										style="width:100%;padding:0">
										<div style="padding:0 0.25em">
											<ul>
												<li><a href="/wiki/Ajax_(programming)"
														title="Ajax (programming)">Ajax</a> and <a
														href="/wiki/Remote_scripting" title="Remote scripting">Remote
														scripting</a> vs. <a href="/wiki/Dynamic_HTML"
														title="Dynamic HTML">DHTML</a></li>
												<li><a href="/wiki/Browser_extension" title="Browser extension">Browser
														extension</a></li>
												<li><a href="/wiki/Mashup_(web_application_hybrid)"
														title="Mashup (web application hybrid)">Mashup</a></li>
												<li><a href="/wiki/Web_IDL" title="Web IDL">Web IDL</a></li>
												<li><a href="/wiki/Dynamic_web_page#Client-side_scripting"
														title="Dynamic web page">Scripting</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div></div>
					</td>
				</tr>
				<tr style="">
					<th scope="row" class="navbox-group" style="width:1%">Topics</th>
					<td class="navbox-list-with-group navbox-list navbox-odd hlist" style="width:100%;padding:0">
						<div style="padding:0 0.25em">
							<ul>
								<li><a href="/wiki/Microservices" title="Microservices">Microservices</a>
									<ul>
										<li><a href="/wiki/REST" title="REST">REST</a></li>
										<li><a href="/wiki/GraphQL" title="GraphQL">GraphQL</a></li>
									</ul>
								</li>
								<li><a href="/wiki/Web_page" title="Web page">Web page</a>
									<ul>
										<li><a href="/wiki/Static_web_page" title="Static web page">Static</a></li>
										<li><a href="/wiki/Dynamic_web_page" title="Dynamic web page">Dynamic</a></li>
									</ul>
								</li>
								<li><a href="/wiki/Web_standards" title="Web standards">Web standards</a></li>
								<li><a href="/wiki/Web_API_security" title="Web API security">Web API security</a></li>
								<li><a href="/wiki/Web_application" title="Web application">Web application</a>
									<ul>
										<li><a href="/wiki/Rich_Internet_Application"
												title="Rich Internet Application">Rich</a></li>
										<li><a href="/wiki/Single-page_application"
												title="Single-page application">Single-page</a></li>
										<li><a href="/wiki/Progressive_web_app"
												title="Progressive web app">Progressive</a></li>
									</ul>
								</li>
								<li><a href="/wiki/Web_framework" title="Web framework">Web framework</a></li>
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<?= $this->endSection() ?>