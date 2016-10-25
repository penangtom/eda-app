{% extends 'templates/default.php' %}

{% block title %}Change password{% endblock %}
{% block content %}
	<form action="{{ urlFor('resetpassword.post')}}?email={{ email }}&identifier={{ identifier|url_encode }}" method="post" autocomplete="off">
		<div>
			<label for"password">New password</label>
			<input type="password" name="password" id="password">
			{% if errors.first('password') %} {{ errors.first('password') }} {% endif %}
		</div>
		<div>
			<label for"password_confirm">Confirm password</label>
			<input type="password" name="password_confirm" id="password_confim">
			{% if errors.first('password_confirm') %} {{ errors.first('password_confirm') }} {% endif %}
		</div>
		<div>
			<input type="submit" value="Reset" >
		</div>
		<input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
	</form>
{% endblock %}
	