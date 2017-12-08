<HTML>
  <HEAD>
    <TITLE>Enviando e-mail (texto puro)</TITLE>
  </HEAD>
  <BODY>
    <FORM method="POST" action="codigo_fonte_14.27.php?action=sendmail">
      <TABLE border="1" width="200">
        <TR>
          <TD width="100">Seu nome:</TD>
          <TD width="100"><INPUT type="TEXT" name="campo_nome" size="30"></TD>
        </TR>
        <TR>
          <TD width="100">Seu e-mail:</TD>
          <TD width="100"><INPUT type="TEXT" name="campo_email" size="30"></TD>
        </TR>
         <TR>
            <TD width="100">Assunto:</TD>
            <TD width="100">
              <INPUT type="TEXT" name="campo_assunto" size="30">
            </TD>
          </TR>
         <TR>
            <TD width="100">Mensagem:</TD>
            <TD width="100">
              <TEXTAREA rows="4" name="campo_mensagem" cols="26"></TEXTAREA>
            </TD>
        </TR>
        <TR>
          <TD colspan=2>
            <INPUT type="reset" value="Cancelar"
            <INPUT type="submit" value="Enviar"></TD></TR>
          </TD>
        </TR>     
      </TABLE>
    </FORM>
  </BODY>
</HTML>
