<!DOCTYPE html>
<html>    
  <body>
    <br>
    <h1>Exercicio 2</h1>
    <p></p>
    <h2>case-sensitive</h2>
    Palavras chaves, classses, fun&ccedil;&otilde;es (tanto as
    pr&eacute; definidas pelo php como definidas por voc&ecirc;
    N&Aacute;O S&Aacute;O case sensitive.
    <br>
    Vari&aacute;veis são case sensitive, não se esqueçam
    <br>
    <p></p>
    <p></p>
    <p></p>
    <a href="https://github.com/wagnermarques/eteczl-tpi2/blob/master/aulas/aula1/casesensitive_palavraschaves_naosao.php">codigo no github</a>
    <br>
    <a href="http://pastebin.com/KVVn7T8T">codigo no pastebin</a>
    <p></p>
    <p>segue abaixo resultado do codigo php</p>
    <?php
       ECHO "ECHO \"funcao ECHO\"<br>";
       ECHO "funcao  ECHO<br>";
       print("<br>");
          EcHo "EcHo \"funcao EcHo\";<br>";
       EcHo "funcao  EcHo<br>";
       pRiNt "<br>";
       //eCho ("eCho \"funcao eCho...\"<br>";
       eCho "funcao  eCho...";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<strong>j&aacute; com relação as variáveis, case sensitive vale...</strong><br>";

       $MinhaPrimeiraVariavel="valor da minha primeira variavel";

       echo "echo \$MinhaPrimeiraVariavel<br>";
       echo $MinhaPrimeiraVariavel;
       echo "<br>";
       echo "echo \$MINHAPRIMEIRAVARIAVEL";
       echo $MINHAPRIMEIRAVARIAVEL;
       echo "<br>";
       echo "echo \$minhaprimeiravariavel";
       echo $minhaprimeiravariavel;
       
       ?>
    <p>O que que eu gostaria que vocês observassem nesse código:</p>
    <ul>
      <li>dar echo em no nome de uma variavel existe usar o caractere
        de scape, que é a barra invertida.</li>
      <li>Nome de variaveis sao case sensitive heinn...cuidado.<br>
      Percebem que echo nas variaveis escritas com todas as letras em
      maiusculas ou todas as letras em minusculas nao retornou o
        valor da variavel.<br>
      Ao fazer o exemplo de voces por favor use outro nome de
      variavel e outro valor pra nao ficar igual ao meu.</li>
    </ul>
</body>
</html>
