<!DOCTYPE html> <html> <head> <meta charset=utf-8 /> <title></title> <link rel="stylesheet" type="text/css" media="screen" href="css/master.css" /> <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2/jquery.min.js"></script> <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> </head>
<body>
{{ Form::open() }}
<input name="user_id"><br>
<b>Title</b><br>
<input name="title"><br>
<b>Post</b><br>
<textarea name="body"></textarea><br>
<input type="submit">


{{ Form::close() }}
</body>
</html>
