<!DOCTYPE html>
<html>

  <head>
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
      text-align: left;    
    }
    </style>
    
<script src="js/jquery-3.4.1.js"></script>


    <script type="text/javascript">
var focus = 0,
  blur = 0;
$( "td" )
  .focusout(function() {

    $( "#teste" ).text( "focusout fired:" );
  });


    $(function () {
//  $('#campo1').val("2");
  $('#teste').text('test');
});

    $( "#campo2" ).focus(function() {
        $('#teste').text('test');
});

    // $('#teste').find('p').val("fgg");
</script>

  </head>

  <body>

    <div>

      <table>

      	<tr>
      		<th colspan="7">RECONHECIMENTO DE SABERES E COMPETÊNCIAS-RSC III</th>
      	</tr>

        <tr>
        	<th></th>
          <th>I - Desenvolvimento, produção e transferência de tecnologias</th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
        	<th>1</th>
          <td>Contratos de transferência de tecnologia e licenciamento</td>
          <td>10</td>
          <td>Contrato ou licenciamento</td>
          <td>1</td>
          <td><input type="number" min="0" max="1" name="linha1" id="campo1"></td>
          <td></td>
        </tr>

        <tr>
         	<th>2</th>
          <td>Desenvolvimento e/ou produção de pesquisa técnica </td>
          <td>2</td>
          <td>Pesquisa</td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha2" id="campo2"></td> 
          <td><p id="teste"></p></td>
        </tr>

        <tr>
         	<th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM I</th>
          <td></td>
        </tr>

        <tr>  
         	<th></th>
          <th>II - Desenvolvimento de pesquisas e aplicação de métodos e tecnologias educacionais que proporcionem a interdisciplinaridade e a integração de conteúdos acadêmicos na educação profissional e tecnológica ou na educação básica </th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
          <th>3</th>
          <td>Coordenação de elaboração de Projetos Pedagógicos de novos Cursos</td>
          <td>2,5</td>
          <td>PPC </td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha3" id="campo3"></td>
          <td></td>
        </tr>

        <tr>
          <th>4</th>
          <td>Participação em comissão de elaboração de PPC de curso de Pós-graduação</td>
          <td>2,5</td>
          <td>PPC </td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha4" id="campo4"></td>
          <td></td>
        </tr>

        <tr>
          <th>5</th>
          <td>Participação em comissão de elaboração de PPC de curso de Graduação </td>
          <td>2,5</td>
          <td>PPC </td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha5" id="campo5"></td>
          <td></td>
        </tr>

        <tr>
          <th>6</th>
          <td>  Participação em comissão de elaboração de PPC de curso Técnicos</td>
          <td>2,5</td>
          <td> PPC</td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha6" id="campo6"></td>
          <td></td>
        </tr>

        <tr>
          <th>7</th>
          <td>Participação em comissão de elaboração de PPC de curso FIC</td>
          <td>1</td>
          <td>PPC</td>
          <td>20</td>
          <td><input type="number" min="0" max="20" name="linha7" id="campo7"></td>
          <td></td>
        </tr>

        <tr>
          <th>8</th>
          <td>Participação em comissão de reformulação de PPC de curso de Pós-graduação </td>
          <td>1,25</td>
          <td>PPC </td>
          <td>8</td>
          <td><input type="number" min="0" max="8" name="linha8" id="campo8"></td>
          <td></td>
        </tr>

        <tr>
          <th>9</th>
          <td>Participação em comissão de reformulação de PPC de curso de Graduação    </td>
          <td>1,25</td>
          <td>PPC </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha9" id="campo9"></td>
          <td></td>
        </tr>

        <tr>
          <th>10</th>
          <td>Participação em comissão de reformulação de PPC de curso Técnicos </td>
          <td>1,25</td>
          <td>PPC</td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha10" id="campo10"></td>
          <td></td>
        </tr>

        <tr>
          <th>11</th>
          <td>Participação em comissão de reformulação de PPC de curso FIC </td>
          <td>0,5</td>
          <td>PPC</td>
          <td>40</td>
          <td><input type="number" min="0" max="40" name="linha11" id="campo11"></td>
          <td></td>
        </tr>

        <tr>
          <th>12</th>
          <td> Orientação e supervisão ao corpo docente e/ou discente nos aspectos pedagógicos, de saúde e de assistência social </td>
          <td>0,1</td>
          <td>mês</td>
          <td>240</td>
          <td><input type="number" min="0" max="240" name="linha12" id="campo12"></td>
          <td></td>
        </tr>

        <tr>
          <th>13</th>
          <td>Participação, como membro dos órgãos deliberativos do Instituto, bem como em comissões instituídas pelo Ministério de Educação. </td>
          <td>0,1</td>
          <td>mês</td>
          <td>96</td>
          <td><input type="number" min="0" max="96" name="linha13" id="campo13"></td>
          <td></td>
        </tr>

        <tr>
          <th>14</th>
          <td>Atuação nos processos de ensino, pesquisa e extensão e as inerentes ao exercício de direção, assessoramento, chefia, coordenação e assistência na própria instituição, nos diversos níveis e modalidades de educação  </td>
          <td>0,17</td>
          <td>mês</td>
          <td>240</td>
          <td><input type="number" min="0" max="240" name="linha14" id="campo14"></td>
          <td></td>
        </tr>

        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM II</th>
          <td></td>
        </tr>

        <tr>  
          <th></th>
          <th>III - Desenvolvimento de pesquisas e atividades de extensão que proporcionem a articulação institucional com os arranjos sociais, culturais e produtivos</th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
          <th>15</th>
          <td>Contemplado em edital de pesquisa de agência de fomento que vise ao desenvolvimento de áreas importantes para a região </td>
          <td>5</td>
          <td>projeto</td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha15" id="campo15"></td>
          <td></td>
        </tr>

        <tr>
          <th>16</th>
          <td>Captação de recursos em projetos de pesquisa, inovação tecnológica ou extensão na própria instituição  </td>
          <td>5</td>
          <td>projeto</td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha16" id="campo16"></td>
          <td></td>
        </tr>

        <tr>
          <th>17</th>
          <td>Aprovação de projetos para concessão de bolsas de Iniciação científica e/ou tecnológica </td>
          <td>2</td>
          <td>projeto</td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha17" id="campo17"></td>
          <td></td>
        </tr>

        <tr>
          <th>18</th>
          <td>Participação de núcleo de inovação tecnológica </td>
          <td>0,42</td>
          <td>mês</td>
          <td>48</td>
          <td><input type="number" min="0" max="48" name="linha18" id="campo18"></td>
          <td></td>
        </tr>

        <tr>
          <th>19</th>
          <td>Participação de programas, projetos e cursos de extensão  </td>
          <td>0,21</td>
          <td>mês</td>
          <td>96</td>
          <td><input type="number" min="0" max="96" name="linha19" id="campo19"></td>
          <td></td>
        </tr>

        <tr>
          <th>20</th>
          <td>Participação ou orientação de incubadoras de empresas  </td>
          <td>0,21</td>
          <td>mês</td>
          <td>96</td>
          <td><input type="number" min="0" max="96" name="linha20" id="campo20"></td>
          <td></td>
        </tr>

        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM III</th>
          <td></td>
        </tr>

        <tr>  
          <th></th>
          <th>IV - Atuação em projetos e/ou atividades em parceria com outras instituições</th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
          <th>21</th>
          <td>Captação de recursos em projetos de pesquisa, inovação tecnológica e extensão em parceria com outras instituições</td>
          <td>5</td>
          <td>projeto</td>
          <td>2</td>
          <td><input type="number" min="0" max="2" name="linha21" id="campo21"></td>
          <td></td>
        </tr>

        <tr>
          <th>22</th>
          <td>Coordenação de projetos de pesquisa e inovação tecnológica em parceria com outras instituições</td>
          <td>5</td>
          <td>projeto</td>
          <td>2</td>
          <td><input type="number" min="0" max="2" name="linha22" id="campo22"></td>
          <td></td>
        </tr>

        <tr>
          <th>23</th>
          <td>Coordenação ou participação em equipe visando a implantação de unidades de ensino</td>
          <td>4</td>
          <td>projeto</td>
          <td>3</td>
          <td><input type="number" min="0" max="3" name="linha23" id="campo23"></td>
          <td></td>
        </tr>

        <tr>
          <th>24</th>
          <td>Participação em projetos de pesquisa e inovação tecnológica em parceria com outras instituições</td>
          <td>2,5</td>
          <td>projeto</td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha24" id="campo24"></td>
          <td></td>
        </tr>

        <tr>
          <th>25</th>
          <td>Liderança de grupo de pesquisa</td>
          <td>0,1</td>
          <td>mês</td>
          <td>96</td>
          <td><input type="number" min="0" max="96" name="linha25" id="campo25"></td>
          <td></td>
        </tr>

        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM IV</th>
          <td></td>
        </tr>

        <tr>  
          <th></th>
          <th>V - Atuação em atividades de assistência técnica nacional e/ou internacional</th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
          <th>26</th>
          <td>Trabalhos técnicos e consultorias internacionais</td>
          <td>5</td>
          <td>Atividade concluída</td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha26" id="campo26"></td>
          <td></td>
        </tr>

        <tr>
          <th>27</th>
          <td>Trabalhos técnicos e consultorias nacionais</td>
          <td>5</td>
          <td>Atividade realizada</td>
          <td>2</td>
          <td><input type="number" min="0" max="2" name="linha27" id="campo27"></td>
          <td></td>
        </tr>

        <tr>
          <th>28</th>
          <td>Trabalhos técnicos e consultorias regionais</td>
          <td>2,5</td>
          <td>Atividade realizada</td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha28" id="campo28"></td>
          <td></td>
        </tr>

        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM V</th>
          <td></td>
        </tr>

        <tr>  
          <th></th>
          <th>VI - Outras pós-graduações stricto sensu, na área de interesse, além daquela que o habilita e define o nível de RSC pretendido, no âmbito do plano de qualificação institucional</th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
          <th>29</th>
          <td>Curso de pós-graduação Stricto Sensu </td>
          <td>10</td>
          <td>curso</td>
          <td>1</td>
          <td><input type="number" min="0" max="1" name="linha29" id="campo29"></td>
          <td></td>
        </tr>

        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM VI</th>
          <td></td>
        </tr>

        <tr>  
          <th></th>
          <th>VII - Produção acadêmica e/ou tecnológica, nas atividades de ensino, pesquisa, extensão e/ou inovação </th>
          <th>Fator de Pontuação</th>
          <th>Unidade</th>
          <th>Quantidade Máxima de Unidades</th>
          <th>Quantidade de unidades comprovadas</th>
          <th>Pontuação Obtida</th>
        </tr>

        <tr>
          <th>30</th>
          <td>Prêmios e comendas por atividades científicas, de ensino, extensão,  artísticas, esportivas e culturais e sociais </td>
          <td>6</td>
          <td>prêmio </td>
          <td>5</td>
          <td><input type="number"  min="0" max="5" name="linha30" id="campo30"></td>
          <td></td>
        </tr>

        <tr>
          <th>31</th>
          <td>Publicação de livro especializado  </td>
          <td>6</td>
          <td>livro</td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha31" id="campo31"></td>
          <td></td>
        </tr>

        <tr>
          <th>32</th>
          <td>Publicação de capítulo de livro especializado </td>
          <td>3</td>
          <td>Capítulo/livro </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha32" id="campo32"></td>
          <td></td>
        </tr>

        <tr>
          <th>33</th>
          <td>Participação na elaboração de manuais técnicos </td>
          <td>3</td>
          <td>manual </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha33" id="campo33"></td>
          <td></td>
        </tr>

        <tr>
          <th>34</th>
          <td>Tradutor de livro especializado </td>
          <td>3</td>
          <td>livro </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha34" id="campo34"></td>
          <td></td>
        </tr>

        <tr>
          <th>35</th>
          <td>Revisor técnico de livro especializado </td>
          <td>3</td>
          <td>livro</td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha35" id="campo35"></td>
          <td></td>
        </tr>

        <tr>
          <th>36</th>
          <td>Publicação de artigo em revista indexada </td>
          <td>6</td>
          <td>artigo</td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha36" id="campo36"></td>
          <td></td>
        </tr>

        <tr>
          <th>37</th>
          <td>Publicação de artigo em revista não indexada </td>
          <td>3</td>
          <td>artigo </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha37" id="campo37"></td>
          <td></td>
        </tr>

        <tr>
          <th>38</th>
          <td>Publicação de relatório de pesquisa interno </td>
          <td>3</td>
          <td>relatório </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha38" id="campo38"></td>
          <td></td>
        </tr>

        <tr>
          <th>39</th>
          <td>Apresentação ou publicação de trabalho de pesquisa em evento internacional </td>
          <td>8</td>
          <td>trabalho</td>
          <td>4</td>
          <td><input type="number" min="0" max="4" name="linha39" id="campo39"></td>
          <td></td>
        </tr>

        <tr>
          <th>40</th>
          <td>Apresentação ou publicação de trabalho de pesquisa em evento nacional </td>
          <td>4</td>
          <td>trabalho</td>
          <td>8</td>
          <td><input type="number" min="0" max="8" name="linha40" id="campo40"></td>
          <td></td>
        </tr>

        <tr>
          <th>41</th>
          <td>Contemplado com projeto em edital de pesquisa de agências de fomento  </td>
          <td>6</td>
          <td>edital </td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha41" id="campo41"></td>
          <td></td>
        </tr>

        <tr>
          <th>42</th>
          <td>Contemplado com projeto em edital de pesquisa do IFCE </td>
          <td>3</td>
          <td>edital </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha42" id="campo42"></td>
          <td></td>
        </tr>

        <tr>
          <th>43</th>
          <td>Contemplado com projeto em edital de extensão de agências de fomento </td>
          <td>6</td>
          <td>edital </td>
          <td>5</td>
          <td><input type="number" min="0" max="5" name="linha43" id="campo43"></td>
          <td></td>
        </tr>

        <tr>
          <th>44</th>
          <td>Contemplado com projeto em edital de extensão do IFCE </td>
          <td>3</td>
          <td>edital </td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha44" id="campo44"></td>
          <td></td>
        </tr>

        <tr>
          <th>45</th>
          <td>Coordenação e/ou participação em ações de extensão (visitas, eventos externos, parcerias, ações sociais ou outros similares) </td>
          <td>0,5</td>
          <td>evento</td>
          <td>80</td>
          <td><input type="number" min="0" max="80" name="linha45" id="campo45"></td>
          <td></td>
        </tr>

        <tr>
          <th>46</th>
          <td>Participação como membro de projeto de extensão </td>
          <td>1,5</td>
          <td>participação </td>
          <td>20</td>
          <td><input type="number" min="0" max="20" name="linha46" id="campo46"></td>
          <td></td>
        </tr>

        <tr>
          <th>47</th>
          <td>Ministrante de unidade curricular, disciplina de curso de extensão e/ou palestras </td>
          <td>1,5</td>
          <td>Disciplina/palestra </td>
          <td>20</td>
          <td><input type="number" min="0" max="20" name="linha47" id="campo47"></td>
          <td></td>
        </tr>

        <tr>
          <th>48</th>
          <td>Produção e/ou apresentação de programas técnicos de rádio e televisão</td>
          <td>0,42</td>
          <td>Mês</td>
          <td>48</td>
          <td><input type="number" min="0" max="48" name="linha48" id="campo48"></td>
          <td></td>
        </tr>

        <tr>
          <th>49</th>
          <td>Edição de mídias técnicas veiculadas em jornais, revistas e sites </td>
          <td>0,5</td>
          <td>Edição</td>
          <td>10</td>
          <td><input type="number" min="0" max="10" name="linha49" id="campo49"></td>
          <td></td>
        </tr>

        <tr>
          <th></th>
          <td></td>
          <td></td>
          <td></td>
          <th colspan="2">TOTAL NO ITEM VII</th>
          <td></td>
        </tr>

      </table>

    </div>
    <div>

      <table>
        
        <tr>
          <th>RECONHECIMENTO DE SABERES E COMPETÊNCIAS RSC-III</th>
          <th>Peso</th>
          <th>Pontuação Máxima</th>
          <th>Pontuação no item</th>
          <th>Pontuação ponderada</th>
          <th>Pontuação final</th>
        </tr>

        <tr>          
          <th>I - Desenvolvimento, produção e transferência de tecnologias  </th>
          <th>1</th>
          <th>10</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>          
          <th>II - Desenvolvimento de pesquisas e aplicação de métodos e tecnologias educacionais que proporcionem a interdisciplinaridade e a integração de conteúdos acadêmicos na educação profissional e tecnológica ou na educação básica</th>
          <th>1</th>
          <th>10</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>          
          <th>III - Desenvolvimento de pesquisas e atividades de extensão que proporcionem a articulação institucional com os arranjos sociais, culturais e produtivos</th,>
          <th>2</th>
          <th>20</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>          
          <th>IV - Atuação em projetos e/ou atividades em parceria com outras instituições</th>
          <th>1</th>
          <th>10</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>         
          <th>V - Atuação em atividades de assistência técnica nacional e/ou internacional </th>
          <th>1</th>
          <th>10</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>         
          <th>VI - Outras pós-graduações stricto sensu, na área de interesse, além daquela que o habilita e define o nível de RSC pretendido, no âmbito do plano de qualificação institucional </th>
          <th>1</th>
          <th>10</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>          
          <th>VII - Produção acadêmica e/ou tecnológica, nas atividades de ensino, pesquisa, extensão e/ou inovação</th>
          <th>3</th>
          <th>30</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

        <tr>          
          <th>Subtotal</th>
          <th>10</th>
          <th>100</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>

      </table>

    </div>

  </body>

</html>