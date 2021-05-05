function validate_form ( )
{
	valid = true;

        if ( document.auth.login.value == "" && document.auth.pass.value == "")
        {
                alert ( "Пожалуйста заполните поля 'Логин' и 'Пароль'." );
                valid = false;
        }

        return valid;
}
