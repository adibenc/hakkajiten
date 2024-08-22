<?= $this->extend('layouts/wiki') ?>
<?= $this->section('title') ?>
Computer
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
	<div role="navigation" class="navbox" aria-labelledby="Cloud_computing" style="padding:3px">
		<table class="wikitable sortable sort-under mw-collapsible jquery-tablesorter mw-made-collapsible">

			<thead>
				<tr>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Name
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">
						Creator-maintainer
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Based on
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">
						Standardized?<sup class="noprint Inline-Template" style="white-space:nowrap;">[<i><a
									href="/wiki/Wikipedia:Please_clarify" title="Wikipedia:Please clarify"><span
										title="You can help -- (January 2021)">definition needed</span></a></i>]</sup>
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><a
							href="/wiki/Specification" class="mw-redirect" title="Specification">Specification</a>
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><a
							href="/wiki/Binary_format" class="mw-redirect" title="Binary format">Binary</a>?
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><a
							href="/wiki/Human-readable" class="mw-redirect" title="Human-readable">Human-readable</a>?
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Supports <a
							href="/wiki/Reference_(computer_science)"
							title="Reference (computer science)">references</a>?<sup
							class="plainlinks nourlexpansion citation" id="ref_stdrefs"><a
								href="#endnote_stdrefs">e</a></sup>
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Schema-<a
							href="/wiki/Interface_description_language" title="Interface description language">IDL</a>?
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Standard <a
							href="/wiki/API" title="API">APIs</a>
					</th>
					<th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><button
							type="button" class="mw-collapsible-toggle mw-collapsible-toggle-default"
							aria-expanded="true" tabindex="0"><span
								class="mw-collapsible-text">hide</span></button>Supports <a href="/wiki/Zero-copy"
							title="Zero-copy">zero-copy</a> operations
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="/wiki/Apache_Avro" title="Apache Avro">Apache Avro</a>
					</td>
					<td><a href="/wiki/Apache_Software_Foundation" class="mw-redirect"
							title="Apache Software Foundation">Apache Software Foundation</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://avro.apache.org/docs/current/spec.html">Apache Avro™ Specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<sup class="plainlinks nourlexpansion citation"
							id="ref_avrojson"><a href="#endnote_avrojson">g</a></sup>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Built-in
					</td>
					<td>C, C#, C++, Java, PHP, Python, Ruby
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Apache_Parquet" title="Apache Parquet">Apache Parquet</a>
					</td>
					<td><a href="/wiki/Apache_Software_Foundation" class="mw-redirect"
							title="Apache Software Foundation">Apache Software Foundation</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://parquet.apache.org">Apache&nbsp;Parquet</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td>Java, Python, C++
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Apache_Thrift" title="Apache Thrift">Apache Thrift</a>
					</td>
					<td><a href="/wiki/Facebook" title="Facebook">Facebook</a> (creator)<br><a
							href="/wiki/Apache_Software_Foundation" class="mw-redirect"
							title="Apache Software Foundation">Apache</a> (maintainer)
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://thrift.apache.org/static/files/thrift-20070401.pdf">Original whitepaper</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<sup class="plainlinks nourlexpansion citation"
							id="ref_thrifttxt"><a href="#endnote_thrifttxt">c</a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Built-in
					</td>
					<td>C++, Java, Python, PHP, Ruby, Erlang, Perl, Haskell, C#, Cocoa, JavaScript, Node.js, Smalltalk,
						OCaml, Delphi and other languages<sup id="cite_ref-1" class="reference"><a
								href="#cite_note-1"><span class="cite-bracket">[</span>1<span
									class="cite-bracket">]</span></a></sup>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/ASN.1" title="ASN.1">ASN.1</a>
					</td>
					<td><a href="/wiki/International_Organization_for_Standardization"
							title="International Organization for Standardization">ISO</a>, <a
							href="/wiki/International_Electrotechnical_Commission"
							title="International Electrotechnical Commission">IEC</a>, <a href="/wiki/ITU-T"
							title="ITU-T">ITU-T</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td>ISO/IEC 8824 / ITU-T X.680 (syntax) and ISO/IEC 8825 / ITU-T X.690 (encoding rules) series.
						X.680, X.681, and X.683 define syntax and semantics.
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Basic_Encoding_Rules" class="mw-redirect"
							title="Basic Encoding Rules">BER</a>, <a href="/wiki/Distinguished_Encoding_Rules"
							class="mw-redirect" title="Distinguished Encoding Rules">DER</a>, <a
							href="/wiki/Packed_Encoding_Rules" class="mw-redirect"
							title="Packed Encoding Rules">PER</a>, <a href="/wiki/Octet_encoding_rules"
							class="mw-redirect" title="Octet encoding rules">OER</a>, or custom via <a
							href="/wiki/Encoding_Control_Notation" title="Encoding Control Notation">ECN</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XML_Encoding_Rules" class="mw-redirect"
							title="XML Encoding Rules">XER</a>, <a href="/wiki/JSON_encoding_rules" class="mw-redirect"
							title="JSON encoding rules">JER</a>, <a href="/wiki/Generic_String_Encoding_Rules"
							class="mw-redirect" title="Generic String Encoding Rules">GSER</a>, or custom via <a
							href="/wiki/Encoding_Control_Notation" title="Encoding Control Notation">ECN</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes<sup class="plainlinks nourlexpansion citation" id="ref_asn1refs"><a
								href="#endnote_asn1refs">f</a></sup>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Built-in
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Octet_encoding_rules" class="mw-redirect"
							title="Octet encoding rules">OER</a>
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Bencode" title="Bencode">Bencode</a>
					</td>
					<td><a href="/wiki/Bram_Cohen" title="Bram Cohen">Bram Cohen</a> (creator)<br><a
							href="/wiki/BitTorrent,_Inc." class="mw-redirect" title="BitTorrent, Inc.">BitTorrent,
							Inc.</a> (maintainer)
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><i>De facto</i> as <abbr title="BitTorrent Enhancement Proposal">BEP</abbr>
					</td>
					<td>Part of <a rel="nofollow" class="external text"
							href="http://bittorrent.org/beps/bep_0003.html">BitTorrent protocol specification</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Except numbers and delimiters, being ASCII
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/BSON" title="BSON">BSON</a>
					</td>
					<td><a href="/wiki/MongoDB" title="MongoDB">MongoDB</a>
					</td>
					<td><a href="/wiki/JSON" title="JSON">JSON</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="http://bsonspec.org">BSON Specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Cap%27n_Proto" title="Cap'n Proto">Cap'n Proto</a>
					</td>
					<td>Kenton Varda
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="https://capnproto.org/encoding.html">Cap'n Proto
							Encoding Spec</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<sup class="plainlinks nourlexpansion citation"
							id="ref_capnptextformat"><a href="#endnote_capnptextformat">h</a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/CBOR" title="CBOR">CBOR</a>
					</td>
					<td>Carsten Bormann, <a href="/wiki/Paul_Hoffman_(engineer)" title="Paul Hoffman (engineer)">P.
							Hoffman</a>
					</td>
					<td><a href="/wiki/MessagePack" title="MessagePack">MessagePack</a><sup id="cite_ref-2"
							class="reference"><a href="#cite_note-2"><span class="cite-bracket">[</span>2<span
									class="cite-bracket">]</span></a></sup>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td>RFC 8949
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes, <br>through tagging
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="https://tools.ietf.org/html/rfc8610">CDDL</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/FIDO_Alliance" title="FIDO Alliance">FIDO2</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Comma-separated_values" title="Comma-separated values">Comma-separated values</a>
						(CSV)
					</td>
					<td>RFC author:<br>Yakov Shafranovich
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">A myriad of informal variants
					</td>
					<td>RFC 4180<br>(among others)
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Common_Data_Representation" title="Common Data Representation">Common Data
							Representation</a> (CDR)
					</td>
					<td><a href="/wiki/Object_Management_Group" title="Object Management Group">Object Management
							Group</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a href="/wiki/General_Inter-ORB_Protocol" title="General Inter-ORB Protocol">General Inter-ORB
							Protocol</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td>Ada, C, C++, Java, Cobol, Lisp, Python, Ruby, Smalltalk
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/D-Bus" title="D-Bus">D-Bus</a> Message Protocol
					</td>
					<td><a href="/wiki/Freedesktop.org" title="Freedesktop.org">freedesktop.org</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://dbus.freedesktop.org/doc/dbus-specification.html#message-protocol">D-Bus
							Specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(Signature strings)
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/D-Bus" title="D-Bus">Yes</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Efficient_XML_Interchange" title="Efficient XML Interchange">Efficient XML
							Interchange</a> (EXI)
					</td>
					<td><a href="/wiki/World_Wide_Web_Consortium" title="World Wide Web Consortium">W3C</a>
					</td>
					<td><a href="/wiki/XML" title="XML">XML</a>, Efficient XML
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a rel="nofollow" class="external text" href="https://www.w3.org/TR/exi/">Efficient XML
							Interchange (EXI) Format 1.0</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XML" title="XML">XML</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XPointer" title="XPointer">XPointer</a>, <a href="/wiki/XPath"
							title="XPath">XPath</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XML_Schema_(W3C)" title="XML Schema (W3C)">XML Schema</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Document_Object_Model" title="Document Object Model">DOM</a>,
						<a href="/wiki/Simple_API_for_XML" title="Simple API for XML">SAX</a>, <a href="/wiki/StAX"
							title="StAX">StAX</a>, <a href="/wiki/XQuery" title="XQuery">XQuery</a>, <a
							href="/wiki/XPath" title="XPath">XPath</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Extensible_Data_Notation" class="mw-redirect"
							title="Extensible Data Notation">Extensible Data Notation</a> (edn)
					</td>
					<td><a href="/wiki/Rich_Hickey" title="Rich Hickey">Rich Hickey</a> / Clojure community
					</td>
					<td><a href="/wiki/Clojure" title="Clojure">Clojure</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a rel="nofollow" class="external text" href="https://github.com/edn-format/edn">Official edn
							spec</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td>Clojure, Ruby, Go, C++, Javascript, Java, CLR, ObjC, Python<sup id="cite_ref-3"
							class="reference"><a href="#cite_note-3"><span class="cite-bracket">[</span>3<span
									class="cite-bracket">]</span></a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/FlatBuffers" title="FlatBuffers">FlatBuffers</a>
					</td>
					<td>Google
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="https://google.github.io/flatbuffers/">Flatbuffers
							GitHub</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Apache_Arrow" title="Apache Arrow">Apache Arrow</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(internal to the buffer)
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="https://google.github.io/flatbuffers/flatbuffers_guide_writing_schema.html">Yes</a>
					</td>
					<td>C++, Java, C#, Go, Python, Rust, JavaScript, PHP, C, Dart, Lua, TypeScript
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Fast_Infoset" title="Fast Infoset">Fast Infoset</a>
					</td>
					<td><a href="/wiki/International_Organization_for_Standardization"
							title="International Organization for Standardization">ISO</a>, <a
							href="/wiki/International_Electrotechnical_Commission"
							title="International Electrotechnical Commission">IEC</a>, <a href="/wiki/ITU-T"
							title="ITU-T">ITU-T</a>
					</td>
					<td><a href="/wiki/XML" title="XML">XML</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td>ITU-T X.891 and ISO/IEC 24824-1:2007
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XPointer" title="XPointer">XPointer</a>, <a href="/wiki/XPath"
							title="XPath">XPath</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XML_schema" title="XML schema">XML schema</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Document_Object_Model" title="Document Object Model">DOM</a>,
						<a href="/wiki/Simple_API_for_XML" title="Simple API for XML">SAX</a>, <a href="/wiki/XQuery"
							title="XQuery">XQuery</a>, <a href="/wiki/XPath" title="XPath">XPath</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/FHIR" class="mw-redirect" title="FHIR">FHIR</a>
					</td>
					<td><a href="/wiki/Health_Level_7" title="Health Level 7">Health Level 7</a>
					</td>
					<td><a href="/wiki/REST" title="REST">REST</a> basics
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a href="/wiki/Fast_Healthcare_Interoperability_Resources"
							title="Fast Healthcare Interoperability Resources">Fast Healthcare Interoperability
							Resources</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td>Hapi for FHIR<sup id="cite_ref-4" class="reference"><a href="#cite_note-4"><span
									class="cite-bracket">[</span>4<span class="cite-bracket">]</span></a></sup> <a
							href="/wiki/JSON" title="JSON">JSON</a>, <a href="/wiki/XML" title="XML">XML</a>, <a
							href="/wiki/Turtle_(syntax)" title="Turtle (syntax)">Turtle</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Ion_(serialization_format)" title="Ion (serialization format)">Ion</a>
					</td>
					<td><a href="/wiki/Amazon.com" class="mw-redirect" title="Amazon.com">Amazon</a>
					</td>
					<td><a href="/wiki/JSON" title="JSON">JSON</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="https://amzn.github.io/ion-docs/spec.html">The
							Amazon Ion Specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="https://amzn.github.io/ion-schema/">Ion schema</a>
					</td>
					<td>C, C#, Go, Java, JavaScript, Python, Rust
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Java_(programming_language)" title="Java (programming language)">Java</a>
						serialization
					</td>
					<td><a href="/wiki/Oracle_Corporation" title="Oracle Corporation">Oracle Corporation</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://docs.oracle.com/javase/8/docs/technotes/guides/serialization/index.html">Java
							Object Serialization</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/JSON" title="JSON">JSON</a>
					</td>
					<td><a href="/wiki/Douglas_Crockford" title="Douglas Crockford">Douglas Crockford</a>
					</td>
					<td><a href="/wiki/JavaScript_syntax" title="JavaScript syntax">JavaScript syntax</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a rel="nofollow" class="external text" href="https://tools.ietf.org/html/std90">STD 90</a>/RFC
						8259<br>(ancillary:<br>RFC 6901,<br>RFC 6902), <a rel="nofollow" class="external text"
							href="http://www.ecma-international.org/publications/files/ECMA-ST/ECMA-404.pdf">ECMA-404</a>,
						<a rel="nofollow" class="external text" href="https://www.iso.org/standard/71616.html">ISO/IEC
							21778:2017</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No, but see <a href="/wiki/BSON" title="BSON">BSON</a>, <a
							href="/wiki/Smile_(data_interchange_format)"
							title="Smile (data interchange format)">Smile</a>, <a href="/wiki/UBJSON"
							title="UBJSON">UBJSON</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="https://tools.ietf.org/html/rfc6901">JSON Pointer (RFC<span
								class="nowrap">&nbsp;</span>6901)</a>, or alternately, <a rel="nofollow"
							class="external text" href="http://goessner.net/articles/JsonPath/">JSONPath</a>, <a
							rel="nofollow" class="external text"
							href="https://web.archive.org/web/20120922110739/http://bluelinecity.com/software/jpath/">JPath</a>,
						<a rel="nofollow" class="external text"
							href="https://web.archive.org/web/20121203081945/http://www.jspon.org/">JSPON</a>, <a
							rel="nofollow" class="external text"
							href="https://github.com/lloyd/JSONSelect">json:select()</a>; and <a href="/wiki/JSON-LD"
							title="JSON-LD">JSON-LD</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(<a rel="nofollow" class="external text"
							href="http://json-schema.org/">JSON Schema Proposal</a>, <a href="/wiki/ASN.1"
							title="ASN.1">ASN.1</a> with <a href="/wiki/JSON_encoding_rules" class="mw-redirect"
							title="JSON encoding rules">JER</a>, <a rel="nofollow" class="external text"
							href="http://www.kuwata-lab.com/kwalify/">Kwalify</a> <a rel="nofollow"
							class="external text"
							href="https://web.archive.org/web/20210812231831/http://www.kuwata-lab.com/kwalify/">Archived</a>
						2021-08-12 at the <a href="/wiki/Wayback_Machine" title="Wayback Machine">Wayback Machine</a>,
						<a rel="nofollow" class="external text" href="http://rjbs.manxome.org/rx/">Rx</a>, <a
							href="/wiki/JSON-LD" title="JSON-LD">JSON-LD</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(<a rel="nofollow" class="external text"
							href="https://github.com/dscape/clarinet">Clarinet</a>, <a rel="nofollow"
							class="external text"
							href="https://www.sitepen.com/blog/jsonquery-data-querying-beyond-jsonpath">JSONQuery</a> /
						<a rel="nofollow" class="external text"
							href="https://www.sitepen.com/blog/resource-query-language-a-query-language-for-the-web-nosql">RQL</a>,
						<a rel="nofollow" class="external text"
							href="http://goessner.net/articles/JsonPath/">JSONPath</a>), <a href="/wiki/JSON-LD"
							title="JSON-LD">JSON-LD</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/MessagePack" title="MessagePack">MessagePack</a>
					</td>
					<td>Sadayuki Furuhashi
					</td>
					<td><a href="/wiki/JSON" title="JSON">JSON</a> (loosely)
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://github.com/msgpack/msgpack/blob/master/spec.md">MessagePack format
							specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Netstring" title="Netstring">Netstrings</a>
					</td>
					<td><a href="/wiki/Dan_Bernstein" class="mw-redirect" title="Dan Bernstein">Dan Bernstein</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="http://cr.yp.to/proto/netstrings.txt">netstrings.txt</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Except ASCII delimiters
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/OGDL" title="OGDL">OGDL</a>
					</td>
					<td>Rolf Veen
					</td>
					<td style="background: var(--background-color-interactive, #EEE); color: var(--color-base, black); vertical-align: middle; white-space: nowrap; text-align: center;"
						class="table-Un­known">?
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="http://ogdl.org/spec/">Specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="http://ogdl.org/spec/binary.html">Binary specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="http://ogdl.org/spec/path.html">Path specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text"
							href="http://ogdl.org/spec/schema.html">Schema WD</a>
					</td>
					<td>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/OPC_Unified_Architecture" title="OPC Unified Architecture">OPC-UA Binary</a>
					</td>
					<td><a href="/wiki/OPC_Foundation" title="OPC Foundation">OPC Foundation</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="https://opcfoundation.org">opcfoundation.org</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/OpenDDL" class="mw-redirect" title="OpenDDL">OpenDDL</a>
					</td>
					<td><a href="/wiki/Eric_Lengyel" title="Eric Lengyel">Eric Lengyel</a>
					</td>
					<td><a href="/wiki/C_(programming_language)" title="C (programming language)">C</a>, <a
							href="/wiki/PHP" title="PHP">PHP</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="http://openddl.org/">OpenDDL.org</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a rel="nofollow" class="external text" href="http://openddl.org/">OpenDDL
							library</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/PHP_serialization_format" title="PHP serialization format">PHP serialization
							format</a>
					</td>
					<td>PHP Group
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Pickle_(Python)" class="mw-redirect" title="Pickle (Python)">Pickle (Python)</a>
					</td>
					<td><a href="/wiki/Guido_van_Rossum" title="Guido van Rossum">Guido van Rossum</a>
					</td>
					<td><a href="/wiki/Python_(programming_language)" title="Python (programming language)">Python</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><i>De facto</i> as <a href="/wiki/Python_Enhancement_Proposal"
							class="mw-redirect" title="Python Enhancement Proposal">PEPs</a>
					</td>
					<td><a rel="nofollow" class="external text" href="https://www.python.org/dev/peps/pep-3154/">PEP
							3154 – Pickle protocol version 4</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes<sup id="cite_ref-5" class="reference"><a href="#cite_note-5"><span
									class="cite-bracket">[</span>5<span class="cite-bracket">]</span></a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Property_list" title="Property list">Property list</a>
					</td>
					<td><a href="/wiki/NeXT" title="NeXT">NeXT</a> (creator)<br><a href="/wiki/Apple_Inc."
							title="Apple Inc.">Apple</a> (maintainer)
					</td>
					<td style="background: var(--background-color-interactive, #EEE); color: var(--color-base, black); vertical-align: middle; white-space: nowrap; text-align: center;"
						class="table-Un­known">?
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://www.apple.com/DTDs/PropertyList-1.0.dtd">Public DTD for XML format</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes<sup class="plainlinks nourlexpansion citation" id="ref_plbin"><a
								href="#endnote_plbin">a</a></sup>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes<sup class="plainlinks nourlexpansion citation" id="ref_pltxt"><a
								href="#endnote_pltxt">b</a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background: var(--background-color-interactive, #EEE); color: var(--color-base, black); vertical-align: middle; white-space: nowrap; text-align: center;"
						class="table-Un­known">?
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://developer.apple.com/mac/library/documentation/Cocoa/Conceptual/PropertyLists/Introduction/Introduction.html">Cocoa</a>,
						<a rel="nofollow" class="external text"
							href="https://developer.apple.com/mac/library/documentation/CoreFoundation/Conceptual/CFPropertyLists/CFPropertyLists.html">CoreFoundation</a>,
						<a rel="nofollow" class="external text"
							href="https://web.archive.org/web/20081210064322/http://docs.sun.com/app/docs/doc/802-2112/6i63mn65o?a=view">OpenStep</a>,
						<a rel="nofollow" class="external text"
							href="https://web.archive.org/web/20110519164921/http://gnustep.org/resources/documentation/Developer/Base/Reference/NSPropertyList.html">GnuStep</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Protocol_Buffers" title="Protocol Buffers">Protocol Buffers</a> (protobuf)
					</td>
					<td><a href="/wiki/Google" title="Google">Google</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://developers.google.com/protocol-buffers/docs/encoding">Developer Guide:
							Encoding</a>, <a rel="nofollow" class="external text"
							href="https://developers.google.com/protocol-buffers/docs/reference/proto2-spec">proto2
							specification</a>, and <a rel="nofollow" class="external text"
							href="https://developers.google.com/protocol-buffers/docs/reference/proto3-spec">proto3
							specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes<sup class="plainlinks nourlexpansion citation" id="ref_pbtextformat"><a
								href="#endnote_pbtextformat">d</a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Built-in
					</td>
					<td>C++, Java, C#, Python, Go, Ruby, Objective-C, C, Dart, Perl, PHP, R, Rust, Scala, Swift, Julia,
						Erlang, D, Haskell, ActionScript, Delphi, Elixir, Elm, Erlang, GopherJS, Haskell, Haxe,
						JavaScript, Kotlin, Lua, Matlab, Mercurt, OCaml, Prolog, Solidity, Typescript, Vala, Visual
						Basic
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><span class="nowrap"><a href="/wiki/S-expression" title="S-expression">S-expressions</a></span>
					</td>
					<td><a href="/wiki/John_McCarthy_(computer_scientist)"
							title="John McCarthy (computer scientist)">John McCarthy</a> (original)<br><a
							href="/wiki/Ron_Rivest" title="Ron Rivest">Ron Rivest</a> (internet draft)
					</td>
					<td><a href="/wiki/Lisp_(programming_language)" title="Lisp (programming language)">Lisp</a>, <a
							href="/wiki/Netstring" title="Netstring">Netstrings</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Largely <i>de facto</i>
					</td>
					<td><a rel="nofollow" class="external text"
							href="http://people.csail.mit.edu/rivest/Sexp.txt">"S-Expressions"</a> <a rel="nofollow"
							class="external text"
							href="https://web.archive.org/web/20131007024815/http://people.csail.mit.edu/rivest/Sexp.txt">Archived</a>
						2013-10-07 at the <a href="/wiki/Wayback_Machine" title="Wayback Machine">Wayback Machine</a> <a
							href="/wiki/Internet_Draft" title="Internet Draft">Internet Draft</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes, <i>canonical representation</i>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes, <i>advanced transport representation</i>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/Smile_(data_interchange_format)"
							title="Smile (data interchange format)">Smile</a>
					</td>
					<td>Tatu Saloranta
					</td>
					<td><a href="/wiki/JSON" title="JSON">JSON</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text"
							href="https://github.com/FasterXML/smile-format-specification">Smile Format
							Specification</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(<a rel="nofollow" class="external text"
							href="http://json-schema.org/">JSON Schema Proposal</a>, other JSON schemas/IDLs)
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(via JSON APIs implemented with Smile backend, on Jackson,
						Python)
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/SOAP" title="SOAP">SOAP</a>
					</td>
					<td><a href="/wiki/W3C" class="mw-redirect" title="W3C">W3C</a>
					</td>
					<td><a href="/wiki/XML" title="XML">XML</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><span class="nowrap"><a href="/wiki/W3C_Recommendation" class="mw-redirect"
								title="W3C Recommendation">W3C Recommendations</a>:</span><br><a rel="nofollow"
							class="external text"
							href="https://www.w3.org/TR/2000/NOTE-SOAP-20000508/">SOAP/1.1</a><br><a rel="nofollow"
							class="external text" href="https://www.w3.org/TR/soap12/">SOAP/1.2</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(<span class="nowrap"><a href="/wiki/Efficient_XML_Interchange"
								title="Efficient XML Interchange">Efficient XML Interchange</a></span>, <span
							class="nowrap"><a href="/wiki/Binary_XML" title="Binary XML">Binary XML</a></span>, <span
							class="nowrap"><a href="/wiki/Fast_Infoset" title="Fast Infoset">Fast Infoset</a></span>, <a
							href="/wiki/Message_Transmission_Optimization_Mechanism"
							title="Message Transmission Optimization Mechanism">MTOM</a>, <span class="nowrap"><a
								href="/wiki/XSD" class="mw-redirect" title="XSD">XSD</a> base64 data</span>)
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Built-in id/ref, <a href="/wiki/XPointer" title="XPointer">XPointer</a>, <a
							href="/wiki/XPath" title="XPath">XPath</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/WSDL" class="mw-redirect" title="WSDL">WSDL</a>, <a
							href="/wiki/XML_schema" title="XML schema">XML schema</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Document_Object_Model" title="Document Object Model">DOM</a>,
						<a href="/wiki/Simple_API_for_XML" title="Simple API for XML">SAX</a>, <a href="/wiki/XQuery"
							title="XQuery">XQuery</a>, <a href="/wiki/XPath" title="XPath">XPath</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><span class="nowrap"><a href="/wiki/SDXF" title="SDXF">Structured Data eXchange
								Formats</a></span>
					</td>
					<td><a href="/w/index.php?title=Max_Wildgrube&amp;action=edit&amp;redlink=1" class="new"
							title="Max Wildgrube (page does not exist)">Max Wildgrube</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td>RFC 3072
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/UBJSON" title="UBJSON">UBJSON</a>
					</td>
					<td>The Buzz Media, LLC
					</td>
					<td><a href="/wiki/JSON" title="JSON">JSON</a>, <a href="/wiki/BSON" title="BSON">BSON</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="http://ubjson.org/">ubjson.org</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/External_Data_Representation" title="External Data Representation">eXternal Data
							Representation</a> (XDR)
					</td>
					<td><a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a> (creator)<br><a
							href="/wiki/IETF" class="mw-redirect" title="IETF">IETF</a> (maintainer)
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><a rel="nofollow" class="external text" href="https://tools.ietf.org/html/std67">STD 67</a>/RFC
						4506
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/XML" title="XML">XML</a>
					</td>
					<td><a href="/wiki/W3C" class="mw-redirect" title="W3C">W3C</a>
					</td>
					<td><a href="/wiki/SGML" class="mw-redirect" title="SGML">SGML</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td><span class="nowrap"><a href="/wiki/W3C_Recommendation" class="mw-redirect"
								title="W3C Recommendation">W3C Recommendations</a>:</span><br><a rel="nofollow"
							class="external text" href="http://www.w3.org/TR/2008/REC-xml-20081126/">1.0 (Fifth
							Edition)</a><br><a rel="nofollow" class="external text"
							href="http://www.w3.org/TR/2006/REC-xml11-20060816/">1.1 (Second Edition)</a>
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(<span class="nowrap"><a href="/wiki/Efficient_XML_Interchange"
								title="Efficient XML Interchange">Efficient XML Interchange</a></span>, <span
							class="nowrap"><a href="/wiki/Binary_XML" title="Binary XML">Binary XML</a></span>, <span
							class="nowrap"><a href="/wiki/Fast_Infoset" title="Fast Infoset">Fast Infoset</a></span>,
						<span class="nowrap"><a href="/wiki/XSD" class="mw-redirect" title="XSD">XSD</a> base64
							data</span>)
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XPointer" title="XPointer">XPointer</a>, <a href="/wiki/XPath"
							title="XPath">XPath</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/XML_schema" title="XML schema">XML schema</a>, <a
							href="/wiki/RELAX_NG" title="RELAX NG">RELAX NG</a>
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes"><a href="/wiki/Document_Object_Model" title="Document Object Model">DOM</a>,
						<a href="/wiki/Simple_API_for_XML" title="Simple API for XML">SAX</a>, <a href="/wiki/XQuery"
							title="XQuery">XQuery</a>, <a href="/wiki/XPath" title="XPath">XPath</a>
					</td>
					<td data-sort-value=""
						style="background: var(--background-color-interactive, #ececec); color: var(--color-base, #2C2C2C); vertical-align: middle; text-align: center;"
						class="table-na">—
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/XML-RPC" title="XML-RPC">XML-RPC</a>
					</td>
					<td><a href="/wiki/Dave_Winer" title="Dave Winer">Dave Winer</a><sup id="cite_ref-xmlrpc-hist_6-0"
							class="reference"><a href="#cite_note-xmlrpc-hist-6"><span
									class="cite-bracket">[</span>6<span class="cite-bracket">]</span></a></sup>
					</td>
					<td><a href="/wiki/XML" title="XML">XML</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="http://xmlrpc.com/spec.md">XML-RPC
							Specification</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
				<tr>
					<td><a href="/wiki/YAML" title="YAML">YAML</a>
					</td>
					<td>Clark Evans,<br>Ingy döt Net,<br>and Oren Ben-Kiki
					</td>
					<td><a href="/wiki/C_(programming_language)" title="C (programming language)">C</a>, <a
							href="/wiki/Java_(programming_language)" title="Java (programming language)">Java</a>, <a
							href="/wiki/Perl" title="Perl">Perl</a>, <a href="/wiki/Python_(programming_language)"
							title="Python (programming language)">Python</a>, <a
							href="/wiki/Ruby_(programming_language)" title="Ruby (programming language)">Ruby</a>, <a
							href="/wiki/Email" title="Email">Email</a>, <a href="/wiki/HTML" title="HTML">HTML</a>, <a
							href="/wiki/MIME" title="MIME">MIME</a>, <a href="/wiki/URI" class="mw-redirect"
							title="URI">URI</a>, <a href="/wiki/XML" title="XML">XML</a>, <a
							href="/wiki/Simple_API_for_XML" title="Simple API for XML">SAX</a>, <a href="/wiki/SOAP"
							title="SOAP">SOAP</a>, <a href="/wiki/JSON" title="JSON">JSON</a><sup id="cite_ref-7"
							class="reference"><a href="#cite_note-7"><span class="cite-bracket">[</span>7<span
									class="cite-bracket">]</span></a></sup>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td><a rel="nofollow" class="external text" href="http://www.yaml.org/spec/1.2/spec.html">Version
							1.2</a>
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#9EFF9E;color:black;vertical-align:middle;text-align:center;"
						class="table-yes">Yes
					</td>
					<td style="background:#FFB; color:black;vertical-align:middle;text-align:center;"
						class="table-partial">Partial<br>(<a rel="nofollow" class="external text"
							href="http://www.kuwata-lab.com/kwalify/">Kwalify</a> <a rel="nofollow"
							class="external text"
							href="https://web.archive.org/web/20210812231831/http://www.kuwata-lab.com/kwalify/">Archived</a>
						2021-08-12 at the <a href="/wiki/Wayback_Machine" title="Wayback Machine">Wayback Machine</a>,
						<a rel="nofollow" class="external text" href="http://rjbs.manxome.org/rx/">Rx</a>, built-in
						language type-defs)
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
					<td style="background:#FFC7C7;color:black;vertical-align:middle;text-align:center;"
						class="table-no">No
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Name
					</th>
					<th>Creator-maintainer
					</th>
					<th>Based on
					</th>
					<th>Standardized?
					</th>
					<th><a href="/wiki/Specification" class="mw-redirect" title="Specification">Specification</a>
					</th>
					<th><a href="/wiki/Binary_format" class="mw-redirect" title="Binary format">Binary</a>?
					</th>
					<th><a href="/wiki/Human-readable" class="mw-redirect" title="Human-readable">Human-readable</a>?
					</th>
					<th>Supports <a href="/wiki/Reference_(computer_science)"
							title="Reference (computer science)">references</a>?<sup
							class="plainlinks nourlexpansion citation" id="ref_stdrefs"><a
								href="#endnote_stdrefs">e</a></sup>
					</th>
					<th>Schema-<a href="/wiki/Interface_description_language"
							title="Interface description language">IDL</a>?
					</th>
					<th>Standard <a href="/wiki/API" title="API">APIs</a>
					</th>
					<th>Supports <a href="/wiki/Zero-copy" title="Zero-copy">zero-copy</a> operations
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<?= $this->endSection() ?>