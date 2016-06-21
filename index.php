<?php
  /*
    Plugin Name: BlazeChat
    Description: This is a custom made plugin for TI's swag
    Author: Dena
    Version:0.1
    Author URI: https://www.denablaze.co
  */


  function wpb_adding_scripts() {
    wp_register_script('script.js', plugins_url('script.js', __FILE__), array('jquery'),'1.1', true);
    wp_enqueue_script('script.js');
  }
  add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
?>
<!doctype html>
<html>
  <script src="jquery-1.9.1.min.js"></script>
  <script src="script.js"></script>
  <style>
    .user_name{
      background:white;
      width:180px;
      border-style: 2px solid;
      border-color:green;
      align-self: center;
    }
    .styled-textarea{
      border-radius: 8px 8px 0px 0px;
      border-color:solid green 2px;
    }
    .chat_box,.msg_box{
    	position:absolute;
    	bottom:0px;
    	right:20px;
    	background:white;
    	width:200px;
    	border-radius:8px 8px 0px 0px;
      border-style: solid;
      border-color:#27ae60;
    }
    .img-circle {
      background:white;
    	width:50px;
    	border-radius:8px 8px 8px 8px;

    }
  /*This is the heading of the chat box*/
    .chat_head,.msg_head{
    	flex-grow:15px;
      text-align: center;
    	background:#27ae60;
    	padding:15px;
    	margin:0px;
    	color:white;
    	border-radius:0px 0px 0px 0px;

    }
    .chat_body{
    	height:400px;
    }
    .msg_body{
    	height:200px;
    	overflow:auto;
    	overflow-x:hidden;
    }
    .msg_box{
    	width:250px;
    	background:white;
    	bottom:-5px;
    }
    .close{
    	float:right;
    	cursor:pointer;
    }
    .msg_input{
    	border:transparent;
    	padding:5px;
    	border-top:2px solid green;
    	width:100%;
    	-webkit-box-sizing: border-box;
    	-moz-box-sizing: border-box;
    	 box-sizing: border-box;
    }
    .user{
    	cursor:pointer;
    	padding:20px 25px;
    	position:Relative;
    }
    .user:hover{
    	background:#f8f8f8;
    }
    .user:before{
    	content:"";
    	position:absolute;
    	background:green;
    	width:10px;
    	height:10px;
    	left:5px;
    	top:23px;
    	border-radius:5px 5px 0px 0px;
    }
    .msg_a{
    	margin-top:10px;
    	margin-right:20px;
    	margin-left:30px;
    	min-height:15px
    	padding:10px;
    	background:#2980b9;
    	position:relative;
    	border-radius:5px;
    }
    .msg_a:before{
    	content:"";
    	position:absolute;
    	width:0px;
    	height:0px;
    	top:1px;
    	left:-22px;
    	border:9px solid;
    	border-color:transparent #2980b9 transparent transparent;
    }
    .msg_b{
    	margin-top:10px;
    	margin-right:20px;
    	margin-left:30px;
    	min-height:15px
    	padding:20px;
    	background:#2980b9;
    	position:relative;
    	border-radius:5px;
    }
  .msg_b:before{
    	content:"";
    	position:absolute;
    	width:0px;
    	height:0px;
    	top:1px;
    	right:-22px;
    	border:9px solid;
    	border-color:transparent transparent transparent #2980b9 ;
    }
  </style>
  <body>
  	<div class="chat_box">
      <div class="chat_head">Chat</div>
  		<div class="chat_body">
      <br>
      <div id="users_online"></div>
      	<div class="user">Guest User</div>
      <br>
      <input class="styled-textarea" type="text" size="10px" position="center 50px"></div>
      <br>
      </div>
    </div>
  	<div class="msg_box"style="right:290px">
  		  <div class="msg_head">Guest User
  			<div class="close">X</div>
  		</div>
  		<div class="msg_wrap">
  			<div class="msg_body">
  				<div class="msg_a">This is from A</div>
  				<div class="msg_b">This is from B</div>
  				<div class="msg_insert"></div>
  			</div>
  			<div class="msg_footer"><textarea class="msg_input" rows="4" placeholder='lets chat!'></textarea></div>
  		</div>
  	</div>
  </body>
</html>
