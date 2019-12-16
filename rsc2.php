
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

<script src="js/jquery-3.4.1.js"></script>


    <script type="text/javascript">

    $(function () {
  $('#campo1').val("2");
  $('#teste').text('test');
});

</script>

</head>
<body>
<div class="bs-example">

    <table class="table table-striped">
	 <tr>
	  <th colspan="7">RECONHECIMENTO DE SABERES E COMPETÊNCIAS-RSC II</th>
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
    <td>Orientação ou coorientação de TCC de cursos técnicos.</td>
    <td>0,33</td>
    <td>orientação concluída</td>
    <td>60</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>2</th>
    <td>Orientação ou coorientação de TCC de cursos de graduação.</td>
    <td>0,5</td>
    <td>orientação concluída</td>
    <td>40</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>3</th>
    <td>Orientação ou coorientação de TCC ou Monografia de especialização.</td>
    <td>0,5</td>
    <td>orientação concluída</td>
    <td>40</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>4</th>
    <td>Orientação de bolsistas de monitoria.</td>
    <td>0,33</td>
    <td>orientação concluída</td>
    <td>60</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>5</th>
    <td>Orientação de bolsistas de pesquisa.</td>
    <td>0,33</td>
    <td>orientação concluída</td>
    <td>60</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>6</th>
    <td>Orientação bolsistas de extensão.</td>
    <td>0,33</td>
    <td>orientação concluída</td>
    <td>60</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>7</th>
    <td>Orientação ou supervisão de estágios curriculares, obrigatório ou não.</td>
    <td>0,2</td>
    <td>Mês</td>
    <td>100</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>8</th>
    <td>Orientação e acompanhamento de estudantes em atividades de ensino (visitas técnicas, viagens de estudo e outras).</td>
    <td>0,15</td>
    <td>evento</td>
    <td>140</td>
    <td></td>
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
    <th>II - Participação no desenvolvimento de protótipos, depósitos e/ou registros de propriedade intelectual </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

  <tr>
  	<th>9</th>
    <td>Propriedade intelectual (patente, registro).</td>
    <td>10</td>
    <td>patente ou registro</td>
    <td>1</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
  	<th>10</th>
    <td>Produto ou processo não patenteado, protótipo, software não registrado e similares.</td>
    <td>2</td>
    <td>desenvolvimento concluído</td>
    <td>5</td>
    <td></td>
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
    <th>III - Participação em grupos de trabalho e oficinas institucionais </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>11</th>
    <td>Participação em comissões, grupos de trabalho, ministrante de oficina, estabelecidos institucionalmente. </td>
    <td>0,25</td>
    <td>mês </td>
    <td>40</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>12</th>
    <td>Participação em núcleo de inovação tecnológica ou atividades correlatas </td>
    <td>0,25</td>
    <td>Mês</td>
    <td>40</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>13</th>
    <td>Participação em grupos de pesquisa ou atividades correlatas </td>
    <td>0,25</td>
    <td>Mês</td>
    <td>40</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>14</th>
    <td>Participação em grupos de incubadoras de empresas júnior </td>
    <td>0,25</td>
    <td>Mês</td>
    <td>40</td>
    <td></td>
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
    <th>IV - Participação no desenvolvimento de projetos, de interesse institucional, de ensino, pesquisa, extensão e/ou inovação </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>15</th>
    <td>Coordenação de projetos de pesquisa, inovação tecnológica e extensão na própria instituição </td>
    <td>5</td>
    <td>projeto </td>
    <td>4</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>16</th>
    <td>Participação como executor de projeto de pesquisa, inovação tecnológica e extensão na própria instituição </td>
    <td>5</td>
    <td>projeto </td>
    <td>4</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>17</th>
    <td>Participação em projetos de pesquisa, inovação tecnológica e extensão na própria instituição </td>
    <td>2,5</td>
    <td>projeto</td>
    <td>8</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>18</th>
    <td>Coordenação ou execução dos projetos educativos de produção </td>
    <td>0,25</td>
    <td>Mês</td>
    <td>40</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>19</th>
    <td>Orientação e supervisão ao corpo docente e/ou discente nos aspectos pedagógicos, de saúde e de assistência social </td>
    <td>0,1</td>
    <td>Mês</td>
    <td>240</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>20</th>
    <td>Participação, como membro dos órgãos deliberativos do Instituto, bem como em comissões instituídas pelo Ministério de Educação. </td>
    <td>0,1</td>
    <td>Mês</td>
    <td>96</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>21</th>
    <td>Participação, como membro dos órgãos deliberativos do Instituto, bem como em comissões instituídas pelo Ministério de Educação.</td>
    <td>0,17</td>
    <td>Mês</td>
    <td>240</td>
    <td></td>
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
    <th>V - Participação no desenvolvimento de projetos e/ou práticas pedagógicas de reconhecida relevância </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>22</th>
    <td>Coordenação de Projetos em parceria com outras instituições </td>
    <td>5</td>
    <td>projeto </td>
    <td>4</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>23</th>
    <td>Participação em Projetos em parceria com outras instituições </td>
    <td>5</td>
    <td>projeto </td>
    <td>4</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>24</th>
    <td>Participação com cursos extracurriculares ministrados </td>
    <td>2</td>
    <td>Evento </td>
    <td>5</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>25</th>
    <td>Participação com mini curso ministrado </td>
    <td>1</td>
    <td>Evento</td>
    <td>10</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>26</th>
    <td>Participação com palestra ministrada </td>
    <td>0,5</td>
    <td>Evento</td>
    <td>20</td>
    <td></td>
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
    <th>VI - Participação na organização de eventos científicos, tecnológicos, esportivos, sociais e/ou culturais </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>27</th>
    <td>Participação na organização de congresso, simpósio e conferência </td>
    <td>1</td>
    <td>Evento</td>
    <td>20 </td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>28</th>
    <td>Participação na organização de workshop, seminário, mostra </td>
    <td>1</td>
    <td>Evento</td>
    <td>20</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>29</th>
    <td>Participação na organização de eventos esportivos, sociais, culturais e filantrópicos </td>
    <td>1</td>
    <td>Evento</td>
    <td>20</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>30</th>
    <td>Participação na organização de palestra </td>
    <td>0,25</td>
    <td>Evento</td>
    <td>80</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>31</th>
    <td>Participação em feiras, exposições e eventos técnicos </td>
    <td>0,25</td>
    <td>Evento</td>
    <td>80</td>
    <td></td>
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
    <th>VII - Outras pós-graduações lato sensu, na área de interesse, além daquela que o habilita e define o nível de RSC pretendido, no âmbito do plano de qualificação institucional </th>
    <th>Fator de Pontuação</th>
    <th>Unidade</th>
    <th>Quantidade Máxima de Unidades</th>
    <th>Quantidade de unidades comprovadas</th>
    <th>Pontuação Obtida</th>
  </tr>

   <tr>
    <th>32</th>
    <td>Curso de aperfeiçoamento</td>
    <td>10</td>
    <td>Curso </td>
    <td>1</td>
    <td></td>
    <td></td>
  </tr>

   <tr>
    <th>33</th>
    <td>Curso de especialização </td>
    <td>10</td>
    <td>Curso</td>
    <td>1</td>
    <td></td>
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

  </table>

  <div>
  <table >
     <tr>
    <th>RECONHECIMENTO DE SABERES E COMPETÊNCIAS RSC II</th>
    <th>Peso</td>
    <th>Pontuação Máxima</th>
    <th>Pontuação no item</th>
    <th>Pontuação ponderada</th>
    <th>Pontuação final</th>
  </tr>

  <tr>
    <th>I - Orientação do corpo discente em atividades de ensino, extensão, pesquisa e/ou inovação </th>
    <th>2</th>
    <th>20</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

    <tr>  
    <th>II - Participação no desenvolvimento de protótipos, depósitos e/ou registros de propriedade intelectual </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>III - Participação em grupos de trabalho e oficinas institucionais </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>IV - Participação no desenvolvimento de projetos, de interesse institucional, de ensino, pesquisa, extensão e/ou inovação </th>
    <th>2</th>
    <th>20</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>V - Participação no desenvolvimento de projetos e/ou práticas pedagógicas de reconhecida relevância </th>
    <th>2</th>
    <th>20</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>VI - Participação na organização de eventos científicos, tecnológicos, esportivos, sociais e/ou culturais </th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

  <tr>  
    <th>VII - Outras pós-graduações lato sensu, na área de interesse, além daquela que o habilita e define o nível de RSC pretendido, no âmbito do plano de qualificação institucional</th>
    <th>1</th>
    <th>10</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>

   <tr>  
    <th>Subtotal</th>
    <th>10</th>
    <th>100</th>
    <th><input type="number" min="0" max="20"></th>
    <th><input type="number" min="0" max="20"></th>
    <th></th>
  </tr>







			 



		</table>
	</div>

</body>
</html>