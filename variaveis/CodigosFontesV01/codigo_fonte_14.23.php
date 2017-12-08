<HTML>
  <HEAD>
    <TITLE>Exemplo</TITLE>
    <SCRIPT type='text/javascript' src='validacoesUsuario.js'></SCRIPT>
  </HEAD>
  <BODY>
    <FORM method="POST" action="?action=createUser" name="formUser">
    
      <BR>Nome completo:   <INPUT type=TEXT name=CAMPO_NOMECOMPLETO 
                            value="<? echo $_POST["CAMPO_NOMECOMPLETO"]?>">
      <BR>Nome de usuário: <INPUT type=TEXT name=CAMPO_NOMEUSUARIO 
                            value="<? echo $_POST["CAMPO_NOMEUSUARIO"]?>">
      <BR>E-mail:          <INPUT type=TEXT name=CAMPO_EMAIL 
                            value="<? echo $_POST["CAMPO_EMAIL"]?>">
 
      <BR>Data de nascimento: 
        <INPUT type=TEXT name=CAMPO_NASCIMENTODIA 
         value="<? echo $_POST["CAMPO_NASCIMENTODIA"]?>" size=1>
      / <INPUT type=TEXT name=CAMPO_NASCIMENTOMES
         value="<? echo $_POST["CAMPO_NASCIMENTOMES"]?>" size=1>
      / <INPUT type=TEXT name=CAMPO_NASCIMENTOANO
         value="<? echo $_POST["CAMPO_NASCIMENTOANO"]?>" size=2>
 
      <BR>Sexo:   
        <INPUT type=RADIO name=CAMPO_SEXO value="M"
        <? if($_POST["CAMPO_SEXO"] == "M") {echo "checked";} ?>>Masculino
                  
        <INPUT type=RADIO name=CAMPO_SEXO value="F"
        <? if($_POST["CAMPO_SEXO"] == "F") {echo "checked";} ?>>Feminino
                 
      <BR>Senha:          <INPUT type=PASSWORD name=CAMPO_SENHA>
      <BR>Repita a senha: <INPUT type=PASSWORD name=CAMPO_SENHAREPETIDA>
      
      <BR>
      <INPUT type=RESET  value="Limpar">
      <INPUT type=BUTTON 
             onClick="validaUsuario(document.forms['formUser']); return FALSE;" 
             value="Cadastrar">
      
    </FORM>
  </BODY>
</HTML>
