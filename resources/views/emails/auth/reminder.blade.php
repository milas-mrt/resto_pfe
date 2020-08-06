<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Rénitialiser votre mot de passe</h2>

		<div>
			Pour rénitialiser votre mot de passe, completez ce formulaire: {{ URL::to('password/reset', $token) }}.<br/>
			Ce lien va disparaitre dans {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</div>
	</body>
</html>
