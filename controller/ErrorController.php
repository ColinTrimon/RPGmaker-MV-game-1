<?php

function error_404()
{
	echo "<p>404 - De gevraagde route is niet beschikbaar. Controleer je controller en action naam</p>";
}

function error_db()
{
	echo "<p>Er iets verkeerd gegaan met je query, zoek het uit!</p>";
}

function error_delete()
{
	echo "<p>Het liedje weigert verwijderd te worden!</p>";
}