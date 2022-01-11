<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/ngCheckers.css">
	<title>Checkers</title>
</head>
<body>
//PHP Document

<?php
    require_once('../reversed/mongodb.php');
    $db = new MongodbDatabase;

    print_r($db -> insertInto([
'name'='test',
'züge'='3'
]));
exit();
?>
<div id="checkersApp" ng-app="checkersApp" ng-controller="checkerCtrl">
	<div id = "gameContainer">
		<!-- Festlegen der Reihen -->
		<div class = "row" ng-repeat = "row in board">
			<!-- Setting the squares -->
			<div class = "square" ng-style = "setSquares(square)" ng-repeat="square in row track by $index" ng-click="select(square)">
				<!-- Setting the stones -->
				<div class="circle" ng-style="setStones(square)"></div>
			</div>
		</div>
	</div>

	<div id = "description">
		<div> Player Turn : {{player}} </div>
		<div> Red Score : {{redScore}} </div>
		<div> Black Score : {{blackScore}} </div>
		<div>
			<a href="../index.html" class="btn btn-info" role="button">Home</a>
		</div>
	</div>

	<?php
		<div id = "rankingList">
			<ol id = "name">{{name}}</ol>
			<ol id = "score">{{score}}</ol>
		</div>

		<form id="namensEingabe">
			<input type = "textArea">Gib deinen Namen ein.</input>
		</form>
	?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="../js/ngCheckers.js"> </script>
</body>
</html>
