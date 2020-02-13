
  <!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Striped Table</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
      margin: 20px;
      text-align: center;
    }
    table,th,td{
         
         border: 1px solid black;
  border-collapse: collapse;
       text-align: center;
 

    }
</style>

</head>

<body>


    <div class="bs-example">

    <table class="table table-striped">

  <tr>
    <th colspan="7">RECONHECIMENTO DE SABERES E COMPETÊNCIAS-RSC I</th>
  </tr>

  <tr>
    <th></th>
    <th>I- Experiência na área de formação e/ou atuação do docente, anterior ao ingresso na Instituição, contemplando o impacto de suas ações nas demais diretrizes dispostas para todos os níveis do RSC</th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr> 

  <tr>
    <th>1</th>
    <td>Gestão Escolar (Direção, Assistente de Direção, Gerente).</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo1t1"></td>
    <td></td>
  </tr>

   <tr>
    <th>2</th>
    <td>Gestão Escolar (Supervisão, Coordenação, Orientação Educacional).</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>240</td>
    <td><input type="number" min="0" max="240" id="campo2t1"></td>
    <td id="teste"></td>
  </tr>

   <tr>
    <th>3</th>
    <td>Exercício de Magistério (Educação Infantil, Básica e Superior).</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>240</td>
    <td><input type="number" min="0" max="240" id="campo3t1"></td>
    <td id=""></td>
  </tr>

  <tr>
    <th>4</th>
    <td>Gestão Iniciativa Privada na Área de Atuação (Presidência, Superintendência, Direção, Gerência, Chefia, Supervisão e coordenação em Empresas ou Entidades).</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>240</td>
    <td><input type="number" min="0" max="240" id="campo4t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>5</th>
    <td>Experiência na área de atuação ou formação em nível técnico, administrativo, operacional, comercial ou profissional liberal.</td>
    <td>0,1</td>
    <td>Mês</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo5t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>6</th>
    <td>Participação em Colegiados ou Conselhos de Empresas, Entidades ou Instituições de ensino.</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo6t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>7</th>
    <td>Atividade em Organizações Sociais e Assistenciais reconhecidas como de utilidade pública ou organização da sociedade civil de interesse público.</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo7t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>8</th>
    <td>Atividades na função de Instrutor em capacitação ou treinamento em empresas, instituições de ensino ou entidades.</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>240</td>
    <td><input type="number" min="0" max="240" id="campo8t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>9</th>
    <td>Atuação como conferencista ou palestrante.</td>
    <td>0,4</td>
    <td>Evento</td>
    <td>50</td>
    <td><input type="number" min="0" max="50" id="campo9t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>10</th>
    <td>Participação em conferência, palestra, seminário, simpósio, colóquio, congresso ou similares.</td>
    <td>0,17</td>
    <td>Evento</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo10t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>11</th>
    <td>Avaliação de projetos, protótipos e invenções.</td>
    <td>1</td>
    <td>Evento</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo11t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>12</th>
    <td>Participação em comissões e representações institucionais, sindicais e profissionais.</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>120</td>
    <td><input type="number" min="0" max="120" id="campo12t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>13</th>
    <td>Produção de material didático e/ou implantação de ambientes de aprendizagem, nas atividades de ensino, pesquisa, extensão e/ou inovação, artigo completo publicado em periódico científico ou apresentação artística em mostras ou similares, na área/subárea do curso.</td>
    <td>1</td>
    <td>Material</td>
    <td>20</td>
    <td><input type="number" min="0" max="20" id="campo13t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>14</th>
    <td>Revisão técnica, tradução ou organização de material didático, paradidático em atividades de ensino, pesquisa, extensão e/ou inovação.</td>
    <td>0,5</td>
    <td>Material</td>
    <td>20</td>
    <td><input type="number" min="0" max="20" id="campo14t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>15</th>
    <td>Participação em processos seletivos, em bancas de avaliação acadêmica e/ou de concursos, grupos de trabalho, oficinas institucionais, visitas técnicas com alunos, projetos de interesse institucional de ensino, pesquisa, extensão e/ou inovação, projetos e/ou práticas pedagógicas de reconhecida relevância.</td>
    <td>1</td>
    <td>Atividade concluída</td>
    <td>200</td>
    <td><input type="number" min="0" max="200" id="campo15t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>16</th>
    <td>Participação no desenvolvimento de protótipos, depósitos e/ou registros de propriedade intelectual.</td>
    <td>5</td>
    <td>Atividade concluída</td>
    <td>4</td>
    <td><input type="number" min="0" max="4" id="campo16t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>17</th>
    <td>Prêmios por atividades científicas, artísticas, esportivas e culturais.</td>
    <td>5</td>
    <td>Prêmio</td>
    <td>4</td>
    <td><input type="number" min="0" max="4" id="campo17t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>18</th>
    <td>Organização de eventos científicos, tecnológicos, esportivos, sociais, filantrópicos ou culturais.</td>
    <td>2</td>
    <td>Evento</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo18t1"></td>
    <td></td>
  </tr>


  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM I</th>
    <td bgcolor="yellow"></td>
  </tr>

 <tr>
    <th></th>
    <th>II - Cursos de capacitação e/ou graduação na área de interesse institucional</th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

  <tr>
    <th>19</th>
    <td>Participação em conferência, palestra, seminário, simpósio, colóquio, workshop, congresso ou similares</td>
    <td>0,4</td>
    <td>Evento</td>
    <td>25</td>
    <td><input type="number" min="0" max="25" id="campo19t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>20</th>
    <td>Cursos de aperfeiçoamento com no mínimo 120 horas (em certificado individual ou soma de até 5 certificados)</td>
    <td>10</td>
    <td>Curso concluído</td>
    <td>1</td>
    <td><input type="number" min="0" max="1" id="campo20t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>21</th>
    <td>Curso de Graduação</td>
    <td>10</td>
    <td>Curso concluído</td>
    <td>1</td>
    <td><input type="number" min="0" max="1" id="campo21t1"></td>
    <td></td>
  </tr>

  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM II</th>
    <td bgcolor="yellow"></td>
  </tr>

  <tr>
    <th></th>
    <th>III - Atuação nos diversos níveis e modalidades de educação </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

  <tr>
    <th>22</th>
    <td>Programas e/ou cursos de formação inicial e continuada, qualificação e/ou capacitação</td>
    <td>0,08</td>
    <td>Mês</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo22t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>23</th>
    <td>Proeja FIC</td>
    <td>0,08</td>
    <td>Mês</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo23t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>24</th>
    <td>PRONATEC</td>
    <td>0,08</td>
    <td>MÊs</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo24t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>25</th>
    <td>Pró-Técnico</td>
    <td>0,08</td>
    <td>Mês</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo25t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>26</th>
    <td>Supletivo</td>
    <td>0,08</td>
    <td>Mês</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo26t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>27</th>
    <td>Ensino Médio</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo27t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>28</th>
    <td>Orientação de estágios supervisionados dos cursos de nível técnico</td>
    <td>0,5</td>
    <td>Orientação concluída</td>
    <td>150</td>
    <td><input type="number" min="0" max="150" id="campo28t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>29</th>
    <td>Orientação das monitorias de disciplinas e nas unidades de produção e laboratórios dos alunos do ensino técnico</td>
    <td>0,5</td>
    <td>Orientação concluída</td>
    <td>150</td>
    <td><input type="number" min="0" max="150" id="campo29t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>30</th>
    <td>Técnico (Integrado ou Subsequente)</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>300</td>
    <td><input type="number" min="0" max="300" id="campo30t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>31</th>
    <td>Superior ( Bacharelado, Licenciatura e Tecnológico)</td>
    <td>0,2</td>
    <td>Mês</td>
    <td>200</td>
    <td><input type="number" min="0" max="200" id="campo31t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>32</th>
    <td>Pós Graduação lato sensu</td>
    <td>0,25</td>
    <td>Mês</td>
    <td>150</td>
    <td><input type="number" min="0" max="150" id="campo32t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>33</th>
    <td>Pós Graduação stricto sensu (Mestrado)</td>
    <td>0,25</td>
    <td>Mês</td>
    <td>150</td>
    <td><input type="number" min="0" max="150" id="campo33t1"></td>
    <td></td>
  </tr>

  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM III</th>
    <td bgcolor="yellow"></td>
  </tr>

   <tr>
    <th></th>
    <th>IV - Atuação em comissões e representações institucionais, de classes e profissionais, contemplando o impacto de suas ações nas demais diretrizes dispostas para todos os níveis do RSC</th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

  <tr>
    <th>34</th>
    <td>Participação como TITULAR em atividades Regulares previstas em Lei, Estatuto ou Regimento (conselhos, colegiados ou comissões de Ética, CPPD, CPA, ou outras de interesse da Instituição).</td>
    <td>0,2</td>
    <td>Mês</td>
    <td>50</td>
    <td><input type="number" min="0" max="50" id="campo34t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>35</th>
    <td>Participação como SUPLENTE em Atividades Regulares previstas em Lei, Estatuto ou Regimento (conselhos, colegiados ou comissões de Ética, CPPD, CPA, ou outras de interesse da lnstituição).</td>
    <td>0,1</td>
    <td>Mês</td>
    <td>100</td>
    <td><input type="number" min="0" max="100" id="campo35t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>36</th>
    <td>Participação como TITULAR em conselhos de classe e profissionais.</td>
    <td>0,1</td>
    <td>Mês</td>
    <td>96</td>
    <td><input type="number" min="0" max="96" id="campo36t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>37</th>
    <td>Participação como SUPLENTE em conselhos de classe e profissionais.</td>
    <td>0,05</td>
    <td>Mês</td>
    <td>192</td>
    <td><input type="number" min="0" max="192" id="campo37t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>38</th>
    <td>Participação como SUPLENTE em conselhos de classe e profissionais.</td>
    <td>0,2</td>
    <td>Mês</td>
    <td>50</td>
    <td><input type="number" min="0" max="50" id="campo38t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>39</th>
    <td>Participação como SUPLENTE em conselhos de classe e profissionais.</td>
    <td>0,5</td>
    <td>Processo</td>
    <td>20</td>
    <td><input type="number" min="0" max="20" id="campo39t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>40</th>
    <td>Trabalho Desenvolvido no âmbito  MEC (Cessão).</td>
    <td>0,2</td>
    <td>Mês</td>
    <td>70</td>
    <td><input type="number" min="0" max="70" id="campo40t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>41</th>
    <td>Comissão ou Grupo de trabalho de caráter pedagógico e Núcleos Docentes Estruturantes (NDE).</td>
    <td>0,15</td>
    <td>Mês</td>
    <td>70</td>
    <td><input type="number" min="0" max="70" id="campo41t1"></td>
    <td></td>
  </tr>

  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM IV</th>
    <td bgcolor="yellow"></td>
  </tr>

  <tr>
    <th></th>
    <th>V - Produção de material didático e/ou implantação de ambientes de aprendizagem, nas atividades de ensino, pesquisa, extensão e/ou inovação </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>42</th>
    <td>Produção de livros didáticos, paradidáticos.</td>
    <td>6</td>
    <td>Livro</td>
    <td>2</td>
    <td><input type="number" min="0" max="2" id="campo42t1"></td>
    <td></td>
  </tr>

   <tr>
    <th>43</th>
    <td>Produção de manuais técnicos, apostilas e roteiros técnicos.</td>
    <td>1</td>
    <td>Material</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo43t1"></td>
    <td></td>
  </tr>

   <tr>
    <th>44</th>
    <td>Produção de peças ou roteiros culturais e esportivas e outros instrumentos didáticos.</td>
    <td>0,25</td>
    <td>Material</td>
    <td>40</td>
    <td><input type="number" min="0" max="40" id="campo44t1"></td>
    <td></td>
  </tr>

   <tr>
    <th>45</th>
    <td>Projeto de implantação de ambientes de ensino/aprendizagem, laboratórios, oficinas, estúdios, alas ou áreas para práticas esportivas.</td>
    <td>2</td>
    <td>projeto aprovado</td>
    <td>20</td>
    <td><input type="number" min="0" max="20" id="campo45t1"></td>
    <td></td>
  </tr>

  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM V</th>
    <td bgcolor="yellow"></td>
  </tr>

  <tr>
    <th></th>
    <th>VI - Atuação na gestão acadêmica e institucional, contemplando o impacto de suas ações individuais nas demais diretrizes dispostas para todos os níveis da RSC </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</td>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

  <tr>
    <th>46</th>
    <td>Cargo de Direção 1.</td>
    <td>0,42</td>
    <td>Mês</td>
    <td>48</td>
    <td><input type="number" min="0" max="48" id="campo46t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>47</th>
    <td>Cargo de Direção 2.</td>
    <td>0,42</td>
    <td>Mês</td>
    <td>48</td>
    <td><input type="number" min="0" max="48" id="campo47t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>48</th>
    <td>Cargo de Direção 3.</td>
    <td>0,28</td>
    <td>Mês</td>
    <td>72</td>
    <td><input type="number" min="0" max="72" id="campo48t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>49</th>
    <td>Cargo de Direção 4.</td>
    <td>0,28</td>
    <td>Mês</td>
    <td>72</td>
    <td><input type="number" min="0" max="72" id="campo49t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>50</th>
    <td>Função gratificada ou não gratificada de Coordenação de Área, Curso ou de atividades administrativas nomeadas pelo Reitor ou Diretor de campus.</td>
    <td>0,21</td>
    <td>projeto aprovado</td>
    <td>96</td>
    <td><input type="number" min="0" max="96" id="campo50t1"></td>
    <td></td>
  </tr>

  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM VI</th>
    <td bgcolor="yellow"></td>
  </tr>

  <tr>
    <th></th>
    <th>VII - Participação em processos seletivos, em bancas de avaliação acadêmica e/ou de concursos </th>
    <th>Fator de pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

  <tr>
    <th>51</th>
    <td>Elaboração de provas de exame de seleção, vestibular ou concursos.</td>
    <td>2</td>
    <td>Concurso/Processo seletivo</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo51t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>52</th>
    <td>Revisão de provas de exame de seleção, vestibular ou concursos.</td>
    <td>1</td>
    <td>concurso/processo</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo52t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>53</th>
    <td>Correção de provas de exame de seleção, vestibular ou concursos.</td>
    <td>1</td>
    <td>concurso/processo seletivo</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo53t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>54</th>
    <td>Banca de Concurso Público e/ou seleção de professor.</td>
    <td>1</td>
    <td>concurso/processo seletivo</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo54t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>55</th>
    <td>Bancas para aprovações do programa CERTIFIC e equivalentes.</td>
    <td>0,13</td>
    <td>Prova</td>
    <td>80</td>
    <td><input type="number" min="0" max="80" id="campo55t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>56</th>
    <td>Bancas para aprovações do programa CERTIFIC e equivalentes.
Banca de avaliação de TCC de Cursos Técnicos e de Graduação.</td>
    <td>0,13</td>
    <td>Banca</td>
    <td>80</td>
    <td><input type="number" min="0" max="80" id="campo56t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>57</th>
    <td>Banca de avaliação de TCC ou Monografia de Curso de Especialização ou Dissertação de Mestrado.</td>
    <td>0,25</td>
    <td>Banca</td>
    <td>40</td>
    <td><input type="number" min="0" max="40" id="campo57t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>58</th>
    <td>Bancas para avaliação de trabalhos relevantes.</td>
    <td>0,2</td>
    <td>Banca</td>
    <td>50</td>
    <td><input type="number" min="0" max="50" id="campo58t1"></td>
    <td></td>
  </tr>

  <tr>
    <th>59</th>
    <td>Membro de Comissão responsável por processo seletivo, vestibular ou concurso.</td>
    <td>1</td>
    <td>processo de seleção</td>
    <td>10</td>
    <td><input type="number" min="0" max="10" id="campo59t1"></td>
    <td></td>
  </tr>

  <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM VII</th>
    <td bgcolor="yellow"></td>
  </tr>

   <tr>
    <th></th>
    <th>VIII - Outras graduações, na área de interesse, além daquela que o habilita e define o nível de RSC pretendido, no âmbito do plano de qualificação institucional.</th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>60</th>
    <td>Curso adicional de graduação</td>
    <td>10</td>
    <td>Curso</td>
    <td>1</td>
    <td><input type="number" min="0" max="1" id="campo60t1"></td>
    <td></td>
  </tr>

   <tr>
    <th></th>
    <td></td>
    <td></td>
    <td></td>
    <th colspan="2" bgcolor="yellow">TOTAL NO ITEM VIII</th>
    <td bgcolor="yellow"></td>
  </tr>
</table>
</div>

<div>
  <table >
     <tr>
    <th>RECONHECIMENTO DE SABERES E COMPETÊNCIAS-RSC I</th>
    <th>Peso</td>
    <th>Pontuação Máxima</th>
    <th>Pontuação no item</th>
    <th>Pontuação ponderada</th>
    <th>Pontuação final</th>
  </tr>

  <tr>
    <th>I- Experiência na área de formação e/ou atuação do docente, anterior ao ingresso na Instituição, contemplando o impacto de suas ações nas demais diretrizes dispostas para todos os níveis do RSC</th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

    <tr>  
    <th>II - Cursos de capacitação e/ou graduação na área de interesse institucional </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>III - Atuação nos diversos níveis e modalidades de educação </th>
    <th>2</th>
    <th>20</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>IV - Atuação em comissões e representações institucionais, de classes e profissionais, contemplando o impacto de suas ações nas demais diretrizes dispostas para todos os níveis do RSC</th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>V - Produção de material didático e/ou implantação de ambientes de aprendizagem, nas atividades de ensino, pesquisa, extensão e/ou inovação </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>VI - Atuação na gestão acadêmica e institucional, contemplando o impacto de suas ações individuais nas demais diretrizes dispostas para todos os níveis da RSC </th>
    <th>2</th>
    <th>20</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>VII - Participação em processos seletivos, em bancas de avaliação acadêmica e/ou de concursos </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>VIII - Outras graduações, na área de interesse, além daquela que o habilita e define o nível de RSC pretendido, no âmbito do plano de qualificação institucional. </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th colspan="" bgcolor="yellow">Subtotal</th>
    <th>10</th>
    <th>100</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th> 
    <th colspan="2" bgcolor="yellow"></th>
  </tr>

  </table>
</div>
 

</body>
</html>