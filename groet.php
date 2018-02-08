<?php
if (isset($_COOKIE['naam'])) {
	echo "Hallo " . $_COOKIE['naam'];
} else {
	echo "Ik ken u niet ...";
}

header('Location: C:\Users\Timour\Documents\Documenten\school\SO\IT\Softwarepakketten- en ontwikkeling\naamontvangen.php');
