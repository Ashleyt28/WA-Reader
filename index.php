<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Prabhakar Gupta">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/minEmoji2.css">
	<title>WA Reader | By Prabhakar Gupta</title>
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116745763-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116745763-1');
</script>

</head>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand nav-back" href="/"> WA Reader</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li class="nav-back" style="display:none;"><a><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> View another chat</a></li>
				<li><a data-toggle="modal" data-target="#myModal">Instructions</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="margin-right:1em;">
				<li>
					<a class="navbar-brand nav-back" href="/"> 
					<?php 
						$handle = fopen("counter.txt", "r"); //Open file , read mode

						if(!$handle)
							{ echo "could not open the file"; 

							} else {

				 					$counter=(int )fread($handle,20); //read data 20-consists of 20bytes of data
				 					fclose($handle); $counter++;  // increment counter
				 					echo" <strong> ". $counter . ":Visitors </strong > " ; //display
									 $handle= fopen("counter.txt", "w" ) ; fwrite($handle,$counter) ; // save incremented value
				 					fclose ($handle) ; //close file
									} 
					?>
				</a>
				</li>
			</ul>
		</div>
	</div>
	<a href="https://github.com/prabhakar267/whatsapp-reader" class="github-corner" target="_blank">
        <svg width="50px" height="50px" viewBox="0 0 250 250" style="position: fixed; top: 0px; right: 0px; border: 0px;">
            <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z" fill="#111"></path>
            <path class="octo-arm" d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="#ffffff" style="transform-origin: 130px 106px;"></path>
            <path class="octo-body" d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="#ffffff"></path>
        </svg>
    </a>
</nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">WA Reader</h4>
			</div>
			<div class="modal-body text-justify">
				<strong>WA Reader</strong> is a simple PHP based web-app to easily see your chats with your friends in a familiar user interface of WhatsApp, because reading from the backup text file is too boring.<br>It asks you to upload the ".txt" file of your chat. You can get the ".txt" file from the <b>Email Conversation</b> button in your WhatsApp.<br>
				<i><small>It may not be 100% correct, since I simply built this to read a piece of chat I fonud in my Inbox, and I hope it is useful for several others like me.</small></i>
				<hr>
				Here are some questions, you might ask before using this:
				<ul>
					<li>
						<strong>How do I export my chat history from WhatsApp?</strong><br>
						<pre><a href="http://www.whatsapp.com/faq/en/s60/21055276" target="_blank">Answer</a></pre>
					</li>
					<li>
						<strong>How do I save my chat history from WhatsApp?</strong><br>
						<pre><a href="http://www.whatsapp.com/faq/en/wp/22548236" target="_blank">Answer</a></pre>
					</li>
					<li>
						<strong>Is my chat getting saved?</strong><br>
						<pre>No. Your chat gets deleted as soon as you upload the File. You can feel safe on that front</pre>
					</li>
					<li>
						<strong>Can I preview my chat if I have uploaded it once?</strong><br>
						<pre>No. Since your chat is getting deleted as soon as you upload the File, you cannot preserve your chat history for you to visit later.</pre>
					</li>
					<li>
						<strong>How do I thank the person behind this awesome app?</strong><br>
						<pre>Simple. Find him here.<br><a href="http://www.prabhakargupta.com" target="_blank">Prabhakar Gupta</a></pre>
					</li>
				</ul>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div id="errors" class="hidden"></div>
	<div class="row" id="upload-prompt">
		<div class="col-md-6 col-md-offset-3">
			<div class="upload-popup">
				Upload Whatsapp Text (.txt) file and view chat in a readable format<br>
				<form enctype="multipart/form-data">
					<input type="file" name="file" required>
					<input type="submit" class="btn btn-success" id="submit_button" value="Get Conversation">
				</form>
			</div>
		</div>
	</div>
	<div class="row" id="whatsapp-conversation">
		<div class="col-md-8" id="chat"></div>
        <div id="users_list"></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/jMinEmoji2.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>