 <?php
 require '../Amos1/home.php';
?>
<style>
	.chap{
		color:#000098;
	}
.side-navbar{
	padding-top: 20px;
	margin-top: 20px;
	height: 100%;
	width: 248px;
	float: right;
	z-index:1;
	top:0;
	right:0;
	background-color: #000;
	overflow-x: hidden;
}
.side-navbar a{
	text-decoration: none;
	font-size: 20px;
	display: block;
	border-bottom:1px white;
}
.chap p:hover{
	background-color: white;
	color:lightblue;
}
</style>
<div class="side-navbar">
	<ul>
	<li><a href="#">Table Of Contents</a></li>
	<div class="chap">
	<p> <h5>chapter 1</h5>
	<a href="#">Drone</a>
</p>
	</div>
	<li><a href="#">contact</a></li>
	<li><a href="#">about</a></li>
	</ul>
</div>
<div class="content-area">
</div>
