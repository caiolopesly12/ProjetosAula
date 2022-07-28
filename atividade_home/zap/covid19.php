<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Zap Zap</title>
</head>
<body>
    <fieldset class="answer">
        <?php
            $op = $_POST['info'];

            switch ($op) {
                case 1:
                    echo "<legend><h1>O Coronavírus</h1></legend>";
                    echo "Os coronavírus são um grupo de vírus de genoma de RNA simples de sentido positivo (serve diretamente para a síntese proteica), conhecidos desde meados dos anos 1960. Pertencem à subfamília taxonómica Orthocoronavirinae da família Coronaviridae, da ordem Nidovirales.<br><br>A maioria das pessoas se infecta com os coronavírus comuns ao longo da vida. Eles são uma causa comum de infecções respiratórias brandas a moderadas de curta duração. Entre os coronavírus encontra-se o vírus causador da forma de pneumonia atípica grave conhecida por SARS, e o vírus causador da COVID-19, responsável pela pandemia em 2020 e 2021.";
                    break;
                case 2:
                    echo "<legend><h1>Transmissão</h1></legend>";
                    echo "A transmissão do vírus pode se dar:

                    <ul>
                        <li>Por meio de tosse ou espirro;</li>
                        <li>Contato pessoal próximo, como toque ou aperto de mão;</li>
                        <li>Contato com objetos ou superfícies contaminadas, seguido então de contato com a boca, nariz ou olhos.</li>
                    </ul>
                
                Entre os grupos de risco estão qualquer pessoa que cuidou do paciente, incluindo profissionais de saúde ou familiares, que tenha tido contato físico com o paciente ou que tenha permanecido no mesmo local que o paciente doente.
                
                Em 2020, análises indicaram que o SARS-CoV-2 (anteriormente 2019-nCoV) pode ter passado de um animal para o ser humano.";
                break;
                case 3:
                    echo "<legend><h1>Sintomas</h1></legend>";
                    echo "A COVID-19 afeta diferentes pessoas de diferentes maneiras. A maioria das pessoas infectadas apresentará sintomas leves a moderados da doença e não precisarão ser hospitalizadas.
                    Sintomas mais comuns:
                    <ul>
                        <li>Febre</li>
                        <li>Tosse</li>
                        <li>Cansaço</li>
                        <li>Perda de paladar ou olfato</li>
                    </ul>
                    Sintomas menos comuns:
                    <ul>
                        <li>Dores de garganta</li>
                        <li>Dor de cabeça</li>
                        <li>Dores e desconfortos</li>
                        <li>Diarreia</li>
                        <li>Irritações na pele ou descoloração dos dedos dos pés ou das mãos</li>
                        <li>Olhos vermelhos ou irritados</li>
                    </ul>
                    Sintomas graves:
                    <ul>
                        <li>Dificuldade para respirar ou falta de ar</li>
                        <li>Perda da fala, mobilidade ou confusão</li>
                        <li>Dores no peito</li>
                    </ul>
                    Procure atendimento médico imediatamente se apresentar sintomas graves. Sempre ligue antes de ir ao médico ou posto de saúde, clínicas ou hospitais.
                    Pessoas saudáveis que apresentarem os sintomas leves devem acompanhar a situação em casa.
                    Em média, os sintomas aparecem cinco ou seis dias após a infeção pelo vírus. No entanto, eles também podem levar até 14 dias para se manifestarem.";
                    break;
                case 4:
                    echo "<legend><h1>Prevenção</h1></legend>";
                    echo "Para evitar a propagação da COVID-19, siga estas orientações.
                    <ul>
                        <li>Mantenha uma distância segura de outras pessoas (pelo menos 1 metro), mesmo que elas não pareçam estar doentes.</li>
                        <li>Use máscara em público, especialmente em locais fechados ou quando não for possível manter o distanciamento físico.</li>
                        <li>Prefira locais abertos e bem ventilados em vez de ambientes fechados. Abra uma janela se estiver em um local fechado.</li>
                        <li>Limpe as mãos com frequência. Use sabão e água ou álcool em gel.</li>
                        <li>Tome a vacina quando chegar a sua vez. Siga as orientações locais para isso.</li>
                        <li>Cubra o nariz e a boca com o braço dobrado ou um lenço ao tossir ou espirrar.</li>
                        <li>Fique em casa se você sentir indisposição.</li>
                    </ul>";
                    break;
                case 5:
                    echo "<legend><h1>Diagnóstico</h1></legend>";
                    echo "<p class='importante'>Diagnóstico clínico</p>

                    <br>
                    O quadro clínico inicial da doença é caracterizado como Síndrome Gripal (SG). O diagnóstico pode ser feito por investigação clínico-epidemiológica, anamnese e exame físico adequado do paciente, caso este apresente sinais e sintomas característicos da covid-19. Deve-se considerar o histórico de contato próximo ou domiciliar nos 14 dias anteriores ao aparecimento dos sinais e sintomas com pessoas já confirmadas para covid-19.

                    <hr>
                    <p class='importante'>Diagnóstico laboratorial</p>

                    <br>
                    O diagnóstico laboratorial pode ser realizado tanto por testes de biologia molecular, sorologia ou testes rápidos.

                    <ul>
                        <li>Biologia molecular: permite identificar a presença do material genético (RNA) do material genético (RNA) do vírus SARS-CoV-2 em amostras de secreção respiratória, por meio das metodologias de RT-PCR em tempo real (RT-qPCR) e amplificação isotérmica mediada por loop com transcriptase reversa (reverse transcriptase loop-mediated isothermal amplification, RT-LAMP).</li>
                        
                        <li>Sorologia: detecta anticorpos IgM, IgA e/ou IgG produzidos pela resposta imunológica do indivíduo em relação ao vírus SARS-CoV-2, podendo diagnosticar doença ativa ou pregressa. As principais metodologias são: Ensaio Imunoenzimático (Enzyme-Linked Immunosorbent Assay – Elisa), Imunoensaio por Quimioluminescência (Clia) e Imunoensaio por Eletroquimioluminescência (Eclia).</li>

                        <li>Testes rápidos: Estão disponíveis dois tipos de testes rápidos, de antígeno e de anticorpo, por meio da metodologia de imunocromatografia. O teste rápido de antígeno detecta proteína do vírus em amostras coletadas de naso/orofaringe, devendo ser realizado na infecção ativa (fase aguda) e o teste rápido de anticorpos detecta IgM e IgG (fase convalescente), em amostras de sangue total, soro ou plasma.</li>
                    </ul>
                    
                    <hr>
                    <p class='importante'>Diagnóstico de Imagem</p>

                    <br>
                    Imagem (tomografia computadorizada de alta resolução – TCAR): As seguintes alterações tomográficas são compatíveis com caso da covid-19:

                        <ul>
                            <il>OPACIDADE EM VIDRO FOSCO periférico, bilateral, com ou sem consolidação ou linhas intralobulares visíveis (“pavimentação”).</il>
                            <il>OPACIDADE EM VIDRO FOSCO multifocal de morfologia arredondada com ou sem consolidação ou linhas intralobulares visíveis (“pavimentação”).</il>
                            <il>SINAL DE HALO REVERSO ou outros achados de pneumonia em organização (observados posteriormente na doença).</il>
                        </ul>";
                    break;
                case 6:
                    echo "<legend><h1>Isolamento domiciliar</h1></legend>";
                    echo "O isolamento em casa pede cuidados específicos, como a separação de objetos pessoais, limpeza imediata de banheiros após o uso e a separação de indivíduos em cômodos diferentes da casa.<br><br>

                    De acordo com a médica infectologista Roberta Schiavon, integrante da Sociedade Brasileira de Infectologia (SBI), a primeira orientação é destinar um quarto e um banheiro para uso exclusivo da pessoa infectada ou com suspeita de infecção. Quando o local não tem mais de um quarto e mais de um banheiro, a recomendação é deixar o quarto para a pessoa suspeita e, quem não apresenta sintomas, deve dormir na sala, por exemplo.<br><br>
                    
                    O cômodo com o paciente isolado deve ficar todo o tempo com a porta fechada.
                    Mas é necessário manter a janela aberta para ter ventilação e entrada de luz solar.

                    A pessoa infectada ou com suspeita de infecção tem de trocar a própria roupa de cama. Se houver secreções na roupa de cama, ela deve embalar em um saco plástico antes de levar à máquina de lavar ou ao tanque.
                    ";
                    break;
                case 7:
                    echo "<legend><h1>Tratamento</h1></legend>";
                    echo "Cientistas do mundo todo estão trabalhando para encontrar e desenvolver tratamentos para a COVID-19.
                    <ul>
                        <li>Os tratamentos paliativos mais indicados incluem oxigênio, para casos mais graves e pacientes de alto risco devido a outras doenças, e suportes respiratórios, como ventilação, para pacientes em estado crítico.</li>
                        <li>
                            A Dexametasona é um corticosteroide que pode ajudar a reduzir o tempo de ventilação e salvar as vidas de pacientes em situação mais grave.
                        </li>
                    </ul>
                    A OMS não recomenda a automedicação, incluindo ingestão de antibióticos, como prevenção ou cura da COVID-19.";
                    break;
                case 8:
                    echo "<legend><h1>Ação no Brasil</h1></legend>";
                    echo "O Governo Federal vem adotando medidas urgentes em função da emergência de saúde pública de importância internacional decorrente do coronavírus. O objetivo é canalizar a atuação dos órgãos e instituções públicas na luta contra a pandemia.";
                    break;
                case 9:
                    echo "<legend><h1>Real ou Fake</h1></legend>";
                    echo "Conforme declarado pela OMS, o surto de COVID-19 e a resposta a ele têm sido acompanhados por uma
                    enorme infodemia: um excesso de informações, algumas precisas e outras não, que tornam difícil
                    encontrar fontes idôneas e orientações confiáveis quando se precisa.
                    <br>
                    A palavra infodemia se refere a um grande aumento no volume de
                    informações associadas a um assunto específico, que podem se
                    multiplicar exponencialmente em pouco tempo devido a um evento
                    específico, como a pandemia atual.
                    <br>
                    Nessa situação, surgem rumores e
                    desinformação, além da manipulação de informações com intenção
                    duvidosa. Na era da informação, esse fenômeno é amplificado pelas
                    redes sociais e se alastra mais rapidamente, como um vírus";
                    break;
                case 10:
                    echo "<legend><h1>Profissional de saúde</h1></legend>";
                    echo "Os profissionais de saúde são particularmente susceptíveis a infecção. No Brasil, bem como em outros países, milhares de profissionais de saúde foram afastados das atividades profissionais por terem adquirido a infecção e muitos morreram em consequência da COVID-19. Na Itália, 20% dos profissionais de saúde que estavam trabalhando na linha de frente do atendimento a COVID-19 tiveram a infecção e muitos morreram.<br><br>
                    
                    Os profissionais de saúde que cuidam de seus pais idosos ou filhos pequenos são diretamente afetados pelo fechamento das escolas e políticas de distanciamento social. Entretanto, sem vacina ou tratamento específico contra o SARS-CoV-2, o isolamento residencial, o distanciamento social e o uso de máscaras de forma universal associado as medidas de higiene podem retardar a transmissão do vírus e diminuir o número de pessoas que procuram os hospitais ao mesmo tempo, adequando o sistema único de saúde a demanda dos casos graves, evitando um colapso de toda rede pública de assistência hospitalar.<br><br>
                    
                    Nenhum país está preparado para enfrentar uma epidemia de COVID-19, que determina importantes impactos negativos na economia, na assistência médica e na saúde mental da sociedade como um todo. Os grandes desafios para os hospitais são de reorganizar o atendimento, ampliar leitos de unidade de terapia intensiva, abastecer com equipamentos de proteção individual e ter profissionais capacitados. O fomento à pesquisa é fundamental para entendermos melhor a doença, consigamos medicamentos eficientes, bem como a vacina. Até lá, para nós como profissionais de saúde, é importante seguirmos as recomendações e protocolos institucionais, fortalecer a comunicação, a empatia, nos manter atualizados e saudáveis para enfrentar este importante desafio histórico.";
                    break;
                }
        ?>
        <p class="centro"><a href="index.html"><button>Voltar</button></a></p>
    </fieldset>
</body>
</html>