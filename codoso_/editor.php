<!DOCTYPE HTML>
<html>
	<head>
		<title>My Editor</title>
		<script src="lib/codemirror.js"></script>
		<link rel="stylesheet" href="lib/codemirror.css">
		<link rel="stylesheet" href="theme/neo.css">
		<script src="mode/clike/clike.js"></script>
		<script src="addon/edit/closebrackets.js"></script>
		<script src="addon/edit/matchbrackets.js"></script>
	</head>
	<style>
		body {
			background-color: white;
		}
		#codeeditor {
			border: 1px solid gray;
		}
	</style>
	<body>
		<div id="codeeditor"></div>
	<script>
	var editor = CodeMirror(document.getElementById("codeeditor"), {
		value: "#include <bits/stdc++.h> \nusing namespace std;\n\nint main() {\n\t//code\n\treturn 0;\n}",
		mode: "text/x-c++src",
		theme :"neo" ,
		indentUnit : 4,
		tabSize: 4,
		lineNumbers: true,
		autoCloseBrackets: true,
		matchBrackets: true,
	});
	</script>
	</body>
</html>