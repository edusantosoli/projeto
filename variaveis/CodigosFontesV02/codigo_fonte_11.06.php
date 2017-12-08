<?php


  /* Funcao que cria um elemento XML para cada registro apresentado */
  function xmlCreateElement($xml, $bookTitle, $bookAuthor, $bookEditor, $bookLanguage) 
  {
    // Cria o elemento como um todo
    $book = $xml->createElement("LIVRO");
    
    // Cria um atributo ao livro, apenas para exemplo
    $book->setAttribute('idioma', $bookLanguage);
    
    // Cria cada uma das tags filhas com seus conteúdos
    $bookTitleElement = $xml->createElement("TITULO", $bookTitle);
    $bookAuthorElement = $xml->createElement("AUTOR", $bookAuthor);
    $bookEditorElement = $xml->createElement("EDITORA", $bookEditor);
    
    // Vincula as tags filhas no elemento principal
    $book->appendChild($bookTitleElement);
    $book->appendChild($bookAuthorElement);
    $book->appendChild($bookEditorElement);
    
    // Retorna o elemento
    return $book;
  }
  
  // Cria um objeto DOM e seta seu cabeçalho
  $dom = new DOMDocument("1.0", "UTF-8");
  
  // Seta propriedades para geracao do XML
  $dom->preserveWhiteSpace = FALSE;
  $dom->formatOutput = TRUE;
  
  // Cria no XML o elemento raiz
  $root = $dom->createElement("LISTADELIVROS");
  
  // Cria os elementos filhos – nao utilize acentos ou caracteres especiais ainda
  $bookMySQL = xmlCreateElement($dom, "Qualidade de Software", "André Koscianski", "Novatec", "PT");
  $bookPostgre = xmlCreateElement($dom, "Blender 3D - Guia do Usuário", "Allan Brito", "Novatec", "PT");
  $bookDelphi  = xmlCreateElement($dom, "UML 2 - Guia de Consulta Rápida", "Gilleanes T. A. Guedes", "Novatec", "PT");
  
  // Vincula os elementos filhos ao elemento raiz
  $root->appendChild($bookMySQL);
  $root->appendChild($bookPostgre);
  $root->appendChild($bookDelphi);
  
  // Vincula o elemento raiz completo ao documento XML
  $dom->appendChild($root);
  // Exibe o conteúdo do XML
  header('Content-Type: text/xml; charset=ISO-8859-1');
  echo $dom->saveXML(); 
  
?>
