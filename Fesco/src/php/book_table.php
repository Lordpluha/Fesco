<?php

	$conn_srv = mysqli_connect('localhost', 'root', 'root', 'fescowebproject');

	$date   = $_SESSION['date'];
	$time   = $_SESSION['time'];
	$people = $_SESSION['people'];


	echo $date.'-->'.$time.'-->'.$people;

	// $curr_time = date('l jS \of F Y h:i:s A');

	if ($conn_srv == false){
    	print_r("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());

	} else {
	    print_r("Соединение установлено успешно<br>");
	    mysqli_set_charset($conn_srv, "utf8");

	    $req = 'INSERT INTO reservation VALUES (\''.$time.'\' \''.$date.'\' \''.$people.'\')';
	    echo $req;

	    $main_res = mysqli_query($conn_srv, $req);
	    print_r($main_res);

	    // foreach ($res as $value) {
	    // 	print($value[`ID`].'->'.$value[`Login`].'->'.$value[`Password`].'->'.$value[`E-Mail`].'<br>');
	    // }

	    if ($main_res == false) {
	    	print_r('Произошла ошибка при выполнении запроса');
	    }
	}

	
?>