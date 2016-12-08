<?php 

use App\Flyer;


function flyer_path(Flyer $flyer)
{
	return $flyer->zip . '/' . str_slug($flyer->street, '-');
}

function getUserId()
{
	$user = Auth::user();
	return $user->id;
}