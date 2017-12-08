  function validaUsuario(formUser)
  {
    if(formUser.CAMPO_NOMECOMPLETO.value.length == 0)
      alert("� necess�rio preencher o campo 'Nome completo'");
      
    else if(formUser.CAMPO_NOMEUSUARIO.value.length == 0)
      alert("� necess�rio preencher o campo 'Nome de usu�rio'");
      
    else if(formUser.CAMPO_EMAIL.value.length == 0)
      alert("� necess�rio preencher o campo 'E-mail'");
      
    else if(formUser.CAMPO_NASCIMENTODIA.value.length == 0 ||
            formUser.CAMPO_NASCIMENTOMES.value.length == 0 ||
            formUser.CAMPO_NASCIMENTOANO.value.length == 0)
      alert("� necess�rio preencher o campo 'Data de nascimento'");
      
    else if(!formUser.CAMPO_SEXO[0].checked && !formUser.CAMPO_SEXO[1].checked)
      alert("� necess�rio preencher o campo 'Sexo'");
      
    else if(formUser.CAMPO_SENHA.value.length == 0)
      alert("� necess�rio preencher o campo 'Senha'");
      
    else if(formUser.CAMPO_SENHA.value.length != 
            formUser.CAMPO_SENHAREPETIDA.value.length)
      alert("A senha e a repeti��o de senha n�o possuem valores id�nticos");
    else
      formUser.submit();
      
    return FALSE;
  }
