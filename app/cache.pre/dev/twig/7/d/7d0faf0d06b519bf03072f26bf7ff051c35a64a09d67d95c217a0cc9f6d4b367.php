<?php

/* @WebProfiler/Profiler/profiler.css.twig */
class __TwigTemplate_c3393f04c82a2deb57983cb49c5814472cebb7e050e02ddb7e67b3dd3c0db1d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
table td em {
    color: #aaa;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
pre, code {
    font-size: 0.9em;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#collector-content pre {
    white-space: pre-wrap;
    word-break: break-all;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 14px;
    margin-left: 250px;
    min-height: 20px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
    line-height: 18px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
    line-height: 14px;
}
#resume-url {
    word-wrap: break-word;
    word-break: break-all;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.alt li.scream, ul.alt li.scream strong {
    color: gray;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /**/
/* Copyright (c) 2008, Yahoo! Inc. All rights reserved.*/
/* Code licensed under the BSD License:*/
/* http://developer.yahoo.net/yui/license.txt*/
/* version: 2.6.0*/
/* *//* */
/* html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}*/
/* html, body {*/
/*     background-color: #efefef;*/
/* }*/
/* body {*/
/*     font: 1em "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*     text-align: left;*/
/* }*/
/* p {*/
/*     font-size: 14px;*/
/*     line-height: 20px;*/
/*     color: #313131;*/
/*     padding-bottom: 20px*/
/* }*/
/* strong {*/
/*     color: #313131;*/
/*     font-weight: bold;*/
/* }*/
/* em {*/
/*     font-style: italic;*/
/* }*/
/* a {*/
/*     color: #6c6159;*/
/* }*/
/* a img {*/
/*     border: none;*/
/* }*/
/* a:hover {*/
/*     text-decoration: underline;*/
/* }*/
/* button::-moz-focus-inner {*/
/*     padding: 0;*/
/*     border: none;*/
/* }*/
/* button {*/
/*     overflow: visible;*/
/*     width: auto;*/
/*     background-color: transparent;*/
/*     font-weight: bold;*/
/* }*/
/* caption {*/
/*     margin-bottom: 7px;*/
/* }*/
/* table, tr, th, td {*/
/*     border-collapse: collapse;*/
/*     border: 1px solid #d0dbb3;*/
/* }*/
/* table {*/
/*     width: 100%;*/
/*     margin: 10px 0 30px;*/
/* }*/
/* table th {*/
/*     font-weight: bold;*/
/*     background-color: #f1f7e2;*/
/* }*/
/* table th, table td {*/
/*     font-size: 12px;*/
/*     padding: 8px 10px;*/
/* }*/
/* table td em {*/
/*     color: #aaa;*/
/* }*/
/* fieldset {*/
/*     border: none;*/
/* }*/
/* abbr {*/
/*     border-bottom: 1px dotted #000;*/
/*     cursor: help;*/
/* }*/
/* pre, code {*/
/*     font-size: 0.9em;*/
/* }*/
/* .clear {*/
/*     clear: both;*/
/*     height: 0;*/
/*     font-size: 0;*/
/*     line-height: 0;*/
/* }*/
/* .clear-fix:after*/
/* {*/
/*     content: "\0020";*/
/*     display: block;*/
/*     height: 0;*/
/*     clear: both;*/
/*     visibility: hidden;*/
/* }*/
/* * html .clear-fix*/
/* {*/
/*     height: 1%;*/
/* }*/
/* .clear-fix*/
/* {*/
/*     display: block;*/
/* }*/
/* #content {*/
/*     padding: 0 50px;*/
/*     margin: 0 auto 20px;*/
/*     font-family: Arial, Helvetica, sans-serif;*/
/*     min-width: 970px;*/
/* }*/
/* #header {*/
/*     padding: 20px 30px 20px;*/
/* }*/
/* #header h1 {*/
/*     float: left;*/
/* }*/
/* .search {*/
/*     float: right;*/
/* }*/
/* #menu-profiler {*/
/*     border-right: 1px solid #dfdfdf;*/
/* }*/
/* #menu-profiler li {*/
/*     border-bottom: 1px solid #dfdfdf;*/
/*     position: relative;*/
/*     padding-bottom: 0;*/
/*     display: block;*/
/*     background-color: #f6f6f6;*/
/*     z-index: 10000;*/
/* }*/
/* #menu-profiler li a {*/
/*     color: #404040;*/
/*     display: block;*/
/*     font-size: 13px;*/
/*     text-transform: uppercase;*/
/*     text-decoration: none;*/
/*     cursor: pointer;*/
/* }*/
/* #menu-profiler li a span.label {*/
/*     display: block;*/
/*     padding: 20px 0px 16px 65px;*/
/*     min-height: 16px;*/
/*     overflow: hidden;*/
/* }*/
/* #menu-profiler li a span.icon {*/
/*     display: block;*/
/*     position: absolute;*/
/*     left: 0;*/
/*     top: 12px;*/
/*     width: 60px;*/
/*     text-align: center;*/
/* }*/
/* #menu-profiler li.selected a,*/
/* #menu-profiler li a:hover {*/
/*     background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;*/
/* }*/
/* #navigation div:first-child,*/
/* #menu-profiler li:first-child,*/
/* #menu-profiler li:first-child a,*/
/* #menu-profiler li:first-child a span.label {*/
/*     border-radius: 16px 0 0 0;*/
/* }*/
/* #menu-profiler li a span.count {*/
/*     padding: 0;*/
/*     position: absolute;*/
/*     right: 10px;*/
/*     top: 20px;*/
/* }*/
/* #collector-wrapper {*/
/*     float: left;*/
/*     width: 100%;*/
/* }*/
/* #collector-content {*/
/*     margin-left: 250px;*/
/*     padding: 30px 40px 40px;*/
/* }*/
/* #collector-content pre {*/
/*     white-space: pre-wrap;*/
/*     word-break: break-all;*/
/* }*/
/* #navigation {*/
/*     float: left;*/
/*     width: 250px;*/
/*     margin-left: -100%;*/
/* }*/
/* #collector-content table td {*/
/*     background-color: white;*/
/* }*/
/* h1 {*/
/*     font-family: Georgia, "Times New Roman", Times, serif;*/
/*     color: #404040;*/
/* }*/
/* h2, h3 {*/
/*     font-weight: bold;*/
/*     margin-bottom: 20px;*/
/* }*/
/* li {*/
/*     padding-bottom: 10px;*/
/* }*/
/* #main {*/
/*     border-radius: 16px;*/
/*     margin-bottom: 20px;*/
/* }*/
/* #menu-profiler span.count span {*/
/*     display: inline-block;*/
/*     background-color: #aacd4e;*/
/*     border-radius: 6px;*/
/*     padding: 4px;*/
/*     color: #fff;*/
/*     margin-right: 2px;*/
/*     font-size: 11px;*/
/* }*/
/* #resume {*/
/*     background-color: #f6f6f6;*/
/*     border-bottom: 1px solid #dfdfdf;*/
/*     padding: 18px 10px 14px;*/
/*     margin-left: 250px;*/
/*     min-height: 20px;*/
/*     color: #313131;*/
/*     font-size: 12px;*/
/*     border-top-right-radius: 16px;*/
/*     line-height: 18px;*/
/* }*/
/* a#resume-view-all {*/
/*     display: inline-block;*/
/*     padding: 0.2em 0.7em;*/
/*     margin-right: 0.5em;*/
/*     background-color: #666;*/
/*     border-radius: 16px;*/
/*     color: white;*/
/*     font-weight: bold;*/
/*     text-decoration: none;*/
/*     line-height: 14px;*/
/* }*/
/* #resume-url {*/
/*     word-wrap: break-word;*/
/*     word-break: break-all;*/
/* }*/
/* table th.value {*/
/*     width: 450px;*/
/*     background-color: #dfeeb8;*/
/* }*/
/* #content h2 {*/
/*     font-size: 24px;*/
/*     color: #313131;*/
/*     font-weight: bold;*/
/* }*/
/* #content #main {*/
/*     padding: 0;*/
/*     background-color: #FFF;*/
/*     border: 1px solid #dfdfdf;*/
/* }*/
/* #content #main p {*/
/*     color: #313131;*/
/*     font-size: 14px;*/
/*     padding-bottom: 20px;*/
/* }*/
/* .sf-toolbarreset {*/
/*     border-top: 0;*/
/*     padding: 0;*/
/* }*/
/* .sf-reset .block-exception-detected .text-exception {*/
/*     left: 10px;*/
/*     right: 10px;*/
/*     width: 95%;*/
/* }*/
/* .sf-reset .block-exception-detected .illustration-exception {*/
/*     display: none;*/
/* }*/
/* ul.alt {*/
/*     margin: 10px 0 30px;*/
/* }*/
/* ul.alt li {*/
/*     padding: 5px 7px;*/
/*     font-size: 13px;*/
/* }*/
/* ul.alt li.even {*/
/*     background: #f1f7e2;*/
/* }*/
/* ul.alt li.error {*/
/*     background-color: #f66;*/
/*     margin-bottom: 1px;*/
/* }*/
/* ul.alt li.warning {*/
/*     background-color: #ffcc00;*/
/*     margin-bottom: 1px;*/
/* }*/
/* ul.alt li.scream, ul.alt li.scream strong {*/
/*     color: gray;*/
/* }*/
/* ul.sf-call-stack li {*/
/*     text-size: small;*/
/*     padding: 0 0 0 20px;*/
/* }*/
/* td.main, td.menu {*/
/*     text-align: left;*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     border: 0;*/
/*     vertical-align: top;*/
/* }*/
/* .search {*/
/*     float: right;*/
/*     padding-top: 20px;*/
/* }*/
/* .search label {*/
/*     line-height: 28px;*/
/*     vertical-align: middle;*/
/* }*/
/* .search input {*/
/*     width: 195px;*/
/*     font-size: 12px;*/
/*     border: 1px solid #dadada;*/
/*     background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;*/
/*     padding: 5px 6px;*/
/*     color: #565656;*/
/* }*/
/* .search input[type="search"] {*/
/*     -webkit-appearance: textfield;*/
/* }*/
/* #navigation div:first-child {*/
/*     margin: 0 0 20px;*/
/*     border-top: 0;*/
/* }*/
/* #navigation .search {*/
/*     padding-top: 15px;*/
/*     float: none;*/
/*     background: none repeat scroll 0 0 #f6f6f6;*/
/*     color: #333;*/
/*     margin: 20px 0;*/
/*     border: 1px solid #dfdfdf;*/
/*     border-left: none;*/
/* }*/
/* #navigation .search h3 {*/
/*     font-family: Arial, Helvetica, sans-serif;*/
/*     text-transform: uppercase;*/
/*     margin-left: 10px;*/
/*     font-size: 13px;*/
/* }*/
/* #navigation .search form {*/
/*     padding: 15px 0;*/
/* }*/
/* #navigation .search button {*/
/*     float: right;*/
/*     margin-right: 20px;*/
/* }*/
/* #navigation .search label {*/
/*     display: block;*/
/*     float: left;*/
/*     width: 50px;*/
/* }*/
/* #navigation .search input,*/
/* #navigation .search select,*/
/* #navigation .search label,*/
/* #navigation .search a {*/
/*     font-size: 12px;*/
/* }*/
/* #navigation .search form {*/
/*     padding-left: 10px;*/
/* }*/
/* #navigation .search input {*/
/*     width: 160px;*/
/* }*/
/* #navigation .import label {*/
/*     float: none;*/
/*     display: inline;*/
/* }*/
/* #navigation .import input {*/
/*     width: 100px;*/
/* }*/
/* .timeline {*/
/*     background-color: #fbfbfb;*/
/*     margin-bottom: 15px;*/
/*     margin-top: 5px;*/
/* }*/
/* #collector-content .routing tr.matches td {*/
/*     background-color: #0e0;*/
/* }*/
/* #collector-content .routing tr.almost td {*/
/*     background-color: #fa0;*/
/* }*/
/* .loading {*/
/*     background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;*/
/*     height: 30px;*/
/*     display: none;*/
/* }*/
/* .sf-profiler-timeline .legends {*/
/*     font-size: 12px;*/
/*     line-height: 1.5em;*/
/* }*/
/* .sf-profiler-timeline .legends span {*/
/*     border-left-width: 10px;*/
/*     border-left-style: solid;*/
/*     padding: 0 10px 0 5px;*/
/* }*/
/* .sf-profiler-timeline canvas {*/
/*     border: 1px solid #999;*/
/*     border-width: 1px 0;*/
/* }*/
/* .collapsed-menu-parents #resume,*/
/* .collapsed-menu-parents #collector-content {*/
/*     margin-left: 60px !important;*/
/* }*/
/* .collapsed-menu {*/
/*     width: 60px !important;*/
/* }*/
/* .collapsed-menu span :not(.icon) {*/
/*     display: none !important;*/
/* }*/
/* .collapsed-menu span.icon img {*/
/*     display: inline !important;*/
/* }*/
/* */
