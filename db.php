<?php
// connectie met de database
$db = new PDO('sqlite:' . __DIR__ . '/anime.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

