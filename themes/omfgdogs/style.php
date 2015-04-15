<?php
header("Content-Type: text/css");

$css = "@import url('../../css/borders.css');
@import url('../../css/roundcorners.css');

body {
	background: url('omfgdogs.gif');
	background-repeat: repeat-x repeat-y;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes omfgdogs {
    0%   { background-color: red;    color: yellow; }
    25%  { background-color: orange; color: white; }
    50%  { background-color: yellow; color: red; }
    75%  { background-color: orange; color: white; }
	100% { background-color: red;    color: yellow; }
}

/* Standard syntax */
@keyframes omfgdogs {
    0%   { background-color: red;    color: yellow; }
    25%  { background-color: orange; color: white; }
    50%  { background-color: yellow; color: red; }
    75%  { background-color: orange; color: white; }
	100% { background-color: red;    color: yellow; }
}

tr.header0 th, tr.header1 th, .cell0 td, .cell1 td, td.cell0, td.cell1, .cell2 td, td.cell2, table.post td.side, table.post td.meta, table.post td.side.userlink, table.post td.post {
	-webkit-animation-name: omfgdogs;
    -webkit-animation-duration: 0.75s;
	-webkit-animation-iteration-count: infinite;
    animation-name: omfgdogs;
    animation-duration: 0.75s;
	animation-iteration-count: infinite;
}";

print $css;

?>