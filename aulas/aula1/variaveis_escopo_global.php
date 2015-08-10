<!DOCTYPE html>
<html>

<body>
<h1>-Vari&aacute;veis e Escopo de vari&aacute;veis</h1>
<p>Exemplos e explica&ccedil;&otilde;es baseados em:<br>
<p>
http://www.w3schools.com/php/showphp.asp
e http://www.w3schools.com/php/php_variables.asp
</p>
<a href="">Codigo desta pagina no github</a>
<p></p>
<a href="http://pastebin.com/aVCdtf26">Codigo desta pagina no pastebin</a>
<p></p>
<p>Recado pros alunos: A p&aacute;gina de voc&ecirc;s n&atilde;o
precisa das explica&ccedil;&otilde;es. Apenas a
reprodu&ccedil;&atilde;o dos exemplos e link para o codigo.</p>
<p></p>


<h2>Variaveis em PHP...</h2>
Deve ter um nome, que pode ser bem curto, o um nome maior e mais
explicativo:<br>
Nomes curtos podem ser "x" ou "y"...<br>
Nomes mais longos e mais explicativos podem ser:<br>
volume_total<br>
usario_do_sistema<br>
<br>
Aparentemente "snake case" parece ser o mais utilizado,
que he esse nome com underline entre as palavras.
<p>

<h3>Regras</h3>
Tem que comecar com o sinal "$" segudo, sem espaco,pelo nome da variavel<br>
O nome da variavel tem que comecar com uma letra ou um sublinhado<br>
O nome da variavel nao pode comecar com numero<br>
O nome da variavel nao pode conter caracteres especiais tipo asterisco
e outros. Ou seja, tem que ser alfa-numerico, ou seja, letras e numeros. <br>
Nomes sao case-sensitive.
<p></p>
<p></p>
<p></p>
<p></p>
<h2>Escopo de vari&aacute;veis</h2>
Na linguagem PHP as variaveis podem ser declaradas
em qualquer local do script.<br>
Escopo de variavel &eacute; o local do codigo em que a vari&aacute;vel
pode ser referenciada, ou seja, utilizada pelo c&oacute;digo.
<p>
S&atilde;o 3 os escopos possiveis em PHP:
<ul>
        <li>
        Escopo Local
        <br>
        Uma variavel declarada dentro de uma funcao, so sera acessivel
        dentro da mesma, ou seja, dentro do escopo local.
        <br>
        <a
        href="http://www.w3schools.com/php/showphp.asp?filename=demo_var_local"
        onclick="
        window.open('http://www.w3schools.com/php/showphp.asp?filename=demo_var_local',
                'exemplo','left=50,top=50,width=800,height=400,toolbar=0,resizable=1');
                return false;" target="newWin">exemplo</a>
        </li>

        <p>
        
        <li>
        global
        <br>
        Um variavel definida fora de qualquer funcao, e uma variavel
        local e nao pode ser acessada diretamente de dentro de nenhuma
        funcao. Digo diretamente, porque vamos aprender daqui a pouco
        uma maneira de acessar variaveis globais de dentro de uma
        funcao. pera um pouquinho :)
        <br>
        <a
        href="http://www.w3schools.com/php/showphp.asp?filename=demo_var_global"
        onclick="
        window.open('http://www.w3schools.com/php/showphp.asp?filename=demo_var_global',
                'exemplo','left=50,top=50,width=800,height=400,toolbar=0,resizable=1'); 
        return false;" target="newWin">exemplo</a>
        <br>
        Da pra acessar variaveis globais dentro de funcoes usando a
        palavra chave "global".<br>
        Veja esse
        <a
        href="http://www.w3schools.com/php/showphp.asp?filename=demo_var_global_keyword"
        onclick="
        window.open('http://www.w3schools.com/php/showphp.asp?filename=demo_var_global_keyword',
                'exemplo','left=50,top=50,width=800,height=400,toolbar=0,resizable=1'); 
        return false;" target="newWin">exemplo</a>
        <br>
        Uma outra alternativa pra acessar as variaveis globais seria
        consultando o array de variaveis globais do php. Vcs nao
        aprenderam Arrays ainda, mas entendam como uma colecao, que
        neste caso, abriga as variaveis que foram definidas
        globalmente no seu script.O nome desse array é
        $GLOBALS[index], onde index he o nome da variavel global que
        vc definiu.<br>
        Segue o
        <a
        href="http://www.w3schools.com/php/showphp.asp?filename=demo_var_globals"
        onclick="
        window.open('http://www.w3schools.com/php/showphp.asp?filename=demo_var_globals',
                'exemplo','left=50,top=50,width=800,height=400,toolbar=0,resizable=1'); 
        return false;" target="newWin">exemplo</a>
        
        </li>

        <p>

        <li>
        static
        <br>
        E uma variavel cujo comportamento difere da local porque toda
        vez que voce chama uma funcao a variavel he inicializada de
        novo. Mas se ele for static, ela preserva o valor que ela
        tinha desde a ultima vez que a funcao foi chamada. Veja o
        exemplo que voce vai entender...
        <br>
        <a
        href="http://www.w3schools.com/php/showphp.asp?filename=demo_var_static"
        onclick="
        window.open('http://www.w3schools.com/php/showphp.asp?filename=demo_var_static',
                'exemplo','left=50,top=50,width=800,height=400,toolbar=0,resizable=1');
        return false;" target="newWin">exemplo</a>
        </li>

</ul>

        <a
        href="link"
        onclick="
        window.open('link',
                'exemplo','left=50,top=50,width=800,height=400,toolbar=0,resizable=1'); 
        return false;" target="newWin">exemplo</a>

</body>
</html>
