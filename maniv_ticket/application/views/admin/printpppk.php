<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<style>
		/* Style definitions for pdfs */

		/**********************************************************************/
/* Default style definitions
/**********************************************************************/

/* General
-----------------------------------------------------------------------*/
body {
	background-color: #114C8D;
	color: #000033;
	font-family: "verdana", "sans-serif";
	margin: 0px;
	padding-top: 0px;
	font-size: 1em;
}

h1 {
	font-size: 1.1em;
	color: #114C8D;
	font-style: italic;
}

h2 {
	font-size: 1.05em;
	color: #114C8D;
}

h3 { 
	font-size: 1em;
	color: #114C8D;
}

img { 
	border: none;
}

img.border {
	border: 1px solid #114C8D;
}

pre {
	font-family: "verdana", "sans-serif";
	color: #FFFFff;
	font-size: 0.7em;
}

ul {
	color: #BEAC8B;
	list-style-type: circle;
	list-style-position: inside;
	margin: 0px;
	padding: 3px;
}

li { 
	color: #000033;
}

li.alpha {
	list-style-type: lower-alpha;
	margin-left: 15px;
}

p {
	font-size: 0.8em;
}

a:link,
a:visited {
	text-decoration: none;
	color: #114C8D;
}

a:hover {
	text-decoration: underline;
	color: #860000;
}

hr {
	border: 0;
}

#page_header { 
	position: relative; /* required to make the z-index work */  
	z-index: 2;
}

#body { 
	background-color: #F9F0E9;
	padding: 12px 0.5% 2em 3px;
	min-height: 20em;
	margin: 0px;
	width: 100%;
}

#body pre {
	color: #000033;
}

#left_column { 
	width: 84%;
	height: auto;
	padding-right: 8px;
	padding-bottom: 30px;
}

#right_column {
/*  position: absolute;
right: 0.5%;*/
padding-left: 16px;
width: 15%;
min-width: 160px;
}


/* Inputs
-----------------------------------------------------------------------*/

/* Style definitions for printable pages */


/* Hide non-printing stuff
-----------------------------------------------------------------------*/
#page_header,
#main_menu,
#right_column,
#footer {
	display: none;
}

/* General
-----------------------------------------------------------------------*/
@page { 
	margin: 0.25in;
}

body { 
	background-color: white;
	color: black;
}

h1 {
	color: black;
}

h2 {
	color: black;
}

pre {
	color: black;
}

ul {
	color: black;
}

a:link,
a:visited {
	color: black;
}

a:hover {
	text-decoration: none;
	color: black;
}

p a {
	display: none;
}

#body { 
	background-color: white;
}

#body pre {
	color: black;
}

/* Inputs
-----------------------------------------------------------------------*/
input {
	color: black;
	border: 1px solid black;
	background-color: white;
}

select {
	color: black;
	border: 1px solid black;
	background-color: white;
}

textarea {
	color: black;
	border: 1px solid black;
	background-color: white;
}

a.button {
	display: none;
}

a.block_button {
	display: none;
}

input[type=button], 
input[type=submit], 
input[type=reset] {
	display: none;
}

/* Tooltips
-----------------------------------------------------------------------*/
.tooltip { 
	display: none;
}

/* Message area
-----------------------------------------------------------------------*/
#message_area {
	display: none;
}

/* Section Header
-----------------------------------------------------------------------*/
#section_header {
	background-color: #ddd;
	border: 1px dashed #666;
}

/* Content
-----------------------------------------------------------------------*/
.page_buttons {
	display: none;
}

.link_bar {
	display: none;
}

/* Tables
-----------------------------------------------------------------------*/
.head td {
	color: black;
	background-color: white;
}

.head input {
}

.foot td {
	color: black;
	background-color: white;
}

.label {
	color: black;
	background-color: white;
}

.sublabel {
	color: black;
}

.field {
	color: black;
	background-color: white;
}

.field_center {
	color: black;
	background-color: white;
}

.field_nw {
	color: black;
	background-color: white;
}

.field_money {
	color: black;
	background-color: white;
}

.field_total {
	color: black;
	background-color: white;
}

/* Detail
-----------------------------------------------------------------------*/
.detail {
	border-top: 1px solid black;
	border-bottom: 1px solid black;
}

.detail td.label {
	background-color: white;
}

.detail td.field_total,
.detail td.field {
	font-weight: bold;
	background-color: #eee;
}

.detail td.field_money { 
	background-color: #eee;
}

.detail_spacer_row td {
	background-color: white;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
}

.narrow td.label {
	background-color: white;
}

.narrow td.field {
	background-color: #eee;
}

/* Wizards
-----------------------------------------------------------------------*/
.wizard {
	border-top: 1px solid black;
	border-bottom: 1px solid black;
}

/* Forms
-----------------------------------------------------------------------*/
.form {
	border-top: 1px solid black;
	border-bottom: 1px solid black;
}

/* Lists
-----------------------------------------------------------------------*/
.list {
	border-top: 1px solid black;
	border-bottom: 1px solid black;
}

.list tr.head>td {
	border-bottom: 1px solid black;
}
.list tr.foot td {
	border-top: 1px solid black;
}

tr.list_row>td {
	background-color: white;
	border-bottom: 1px dotted #666;
}

tr.list_row:hover td {
	background-color: white;
}

/* Notifications
-----------------------------------------------------------------------*/
.notification_list {
	border-top: 1px solid black;
	border-bottom: 1px solid black;
}

.notification_list tr.head td {
	border-bottom: 1px solid black;
}

.notification_list tr.foot td {
	border-top: 1px solid black;
}

#system_notif_table tr.list_row:hover > td {
	background-color: white;
}

/* Notes
-----------------------------------------------------------------------*/
/* Note Table */
table#topic_list { 
	border-bottom: 1px solid #eee;
}

/* Note Form */
.note_form {
	display: none;
}

/* Note List */
.note>td {
	background-color: white
	border-bottom: 1px dotted #eee;
}

.note:hover>td,
.note:hover>td>p {
	background-color: white;
}

.note_author {
	border-right: 1px dotted #eee;
}

.note td {
	background-color: white;
}

.note p {
	background-color: white;
}

.topic_spacer td {
	border-bottom: 1px solid black;
}

td.note_indent {
	background-color: white;
}

.note_control td { 
	background-color: white;
	border-bottom: 1px dotted #eee;
}

.problem .topic_title {
	color: black;
}

/* Summaries
-----------------------------------------------------------------------*/
.summary {
	border: 1px solid black;
	background-color: white;
}

.summary h1 {
	color: black;
}

/* Pages
-----------------------------------------------------------------------*/
.page>*>p, .page>p { 
	font-size: 1.5em;
}

.written_field { 
	font-size: 1em;
	border-bottom: 1px solid black;
}

.page h1 {
	font-size: 1em;
}

.page h2 { 
	font-size: 0.9em;
}

@page {
	margin-bottom: 0.75in;
}
/* General
-----------------------------------------------------------------------*/
body { background-color: white; }

/* Detail
-----------------------------------------------------------------------*/

.narrow td.field,
.detail td.field { 
	text-align: left;
	padding-left: 1em;
	background-color: white;
}

/* Lists
-----------------------------------------------------------------------*/
.list tr.head td { 
	background-color: #eee;
}

tr.list_row>td {
	background-color: white;
	border-bottom: 0.7pt dotted #666;
}

.list tr.foot td { 
	background-color: #eee;
}

/* Pages
-----------------------------------------------------------------------*/
.page { 
	font-size: 1em;
	border: none;
	margin: none;
	width: auto;
	padding: 0px;
}

.foot td { 
	font-size: 1em;
}


.page>*>p, .page>p { 
	font-size: 0.8em;
}


table.signature_table { 
	width: 88%;
	font-size: 0.6em;  
}

#special_conditions { 
	font-size: 1.5em;
}

.header h1 {
	font-size: 0.8em;
}

p.small { 
	font-size: 0.8em;
}

.page td {
	padding: 1px;
}

td.label {
	font-size: 0.7em;
}

td.field {
	font-size: 0.9em;
}

td.field_money {
	font-size: 1em;
}</style>
</head>
<body class="page">

	<table style="width: 100%" class="header">
		<tr>
			<td style="width: 50%; vertical-align: middle;">
				<h1 style="text-align: left">PSL</h1>
			</td>

			<td style="width: 50%; text-align: right;">
				<h1 style="text-align: right">404-135 - Schedule A</h1>
				<span style="font-weight: bold; font-size: 0.7em;">APPROVED: <?php echo date('Y') ?></span>
			</td>
		</tr>

	</table>

	<table class="detail" style="margin: 0px; border-top: none;">

		<tr>
			<td class="label">Job:</td>
			<td class="field">404-135</td>
			<td class="label">Purchasers:</td>
			<td class="field">
				Komant</td>
			</tr>

			<tr>
				<td class="label">Created:</td>
				<td class="field">2004-09-28</td>
				<td class="label">Last change:</td>
				<td class="field">2004-11-18</td>

			</tr>

			<tr>
				<td class="label">Job address:</td>
				<td class="field">2904-26 Street</td>
				<td class="label">Legal:</td>
				<td class="field">28B/22/032-5210</td>
			</tr>
		</table>
<!--
  <table class="detail" style="border-top: none; margin: 0px 0px 1.5em 0px;">
    <tr>
      <td class="label" style="width: 8.25%">Model:</td>
      <td class="field" style="width: 16.5%"></td>
      <td class="label" style="width: 8.25%">Elevation:</td>
      <td class="field" style="width: 16.5%"></td>
      <td class="label" style="width: 8.25%">Size:</td>
      <td class="field" style="width: 16.5%"></td>
      <td class="label" style="width: 8.25%">Style:</td>
      <td class="field" style="width: 16.5%"></td>
    </tr>

  </table>
-->

<table class="list" style="width: 99%; margin-top: 1em;">

	<tr class="head">
		<td class="center" style="width: 15%">NO</td>
		<td style="width: 30%">DARI</td>
		<td class="center" style="width: 10%">TANGGAL</td>
		<td class="center" colspan="2" style="width: 15%">IDENTIFIKASI</td>
	</tr>
	<?php foreach($identifikasi as $row) {?>
		<tr>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['dari']; ?></td>
			<td><?php echo $row['tanggal']; ?></td>
			<p><td><?php echo $row['identifikasi']; ?> fnsdfssfdb sdfsdyfsb d sdbfsdf sdfbsyd fsd</td></p>
		</tr>
		<?php } ?>
	</tr>

</table><div style="font-size: 0.8em">

</body>
</html>