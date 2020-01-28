<?php
   header('content-type: text/css; charset:UTF-8')

?>


@import url('https://fonts.googleapis.com/css?family=Roboto');

body {
	font-family: 'Roboto', sans-serif;
	background: url(img/mountain.jpg) no-repeat center center fixed;
	background-size: cover;
}
.main-section {
	margin: 0 auto;
	margin-top: 130px;
	padding: 0;
}
.modal-content {
	background-color: #3b4652;
	opacity: .90;
	padding: 0 18px;
	box-shadow: 0px 0px 3px #848484;
}
.user-img {
	margin-top: -50px;
	margin-bottom: 35px;
}
.user-img img {
	height: 100px;
	width: 100px;
	border-radius: 5px;
	box-shadow: 0px 0px 2px #3b4652;
}
.form-group {
	margin-bottom: 25px;
}
.form-group input {
	height: 42px;
	border-radius: 5px;
	border: 0;
	font-size: 18px;
	padding-left: 54px;

}
.form-group::befor {
	font-family: 'Font Awesome\ 5 Free';
	content: "\f007";
	position: absolute;
	font-size: 22px;
	color: #555e60;
	left: 28px;
	padding-top: 4px;
}
.form-group:last-of-type::befor {
	content: "\f023";
}
button {
	width: 40%;
	margin: 5px 0 25px;
}
.btn {
	background-color: #27c2a5;
	color: #fff;
	font-size: 19px;
	padding: 7px 14px;
	border-radius: 5px;
	border-bottom: 4px solid #219882;
}
.btn:hover, .btn:focus {
	background-color: #25a890!important;
	border-bottom: 4px solid #25a890!important;
}
.svg-inline--fa {
	font-size: 20px;
	margin-right: 7px;
}
.forgot {
	padding: 5px 0 25px;
}
.forgot a {
	color: #c2fbfe;
}