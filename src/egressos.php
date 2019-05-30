<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }

    $json = '[
      {
        "id": "20062370361",
        "nomeCompactado": "Aline Donato",
        "nome": "Aline Donato Carreiro",
        "linkedin": "https://www.linkedin.com/in/alinedonato/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370067",
        "nomeCompactado": "Alana Morais",
        "nome": "Alana Marques de Morais",
        "email": "alana_mm@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/alana-morais-b6b0a195/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370342",
        "nomeCompactado": "Alisson Sena",
        "nome": "Alisson Alcoforado Sena de Lima",
        "email": "alisson.sena@gmail.com",
        "linkedin": "https://www.linkedin.com/in/alisson-sena/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370225",
        "nomeCompactado": "André Vinagre",
        "nome": "André Nobre Vinagre",
        "email": "andrenvinagre@gmail.com",
        "linkedin": "https://www.linkedin.com/in/andre-vinagre/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037087",
        "nomeCompactado": "Andreza Vieira",
        "nome": "Andreza de Sousa Vieira",
        "email": "andreza_sv@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/andrezavieira/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370422",
        "nomeCompactado": "Anna Clara Nobrega",
        "nome": "Anna Clara Rodrigues da Nobrega",
        "email": "acrnobrega@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/anna-clara-nobrega/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370040",
        "nomeCompactado": "Andréa Bezerra",
        "nome": "Andréa Fernanda Fontes Bezerra",
        "email": "dsi.andrea@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/andrea-fernanda-478a2660/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370505",
        "nomeCompactado": "Alex Martins",
        "nome": "Alex Martins Bezerra",
        "email": "alexmbezerrajp@gmail.com",
        "linkedin": "https://www.linkedin.com/in/alex-martins-2b480023/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370107",
        "nomeCompactado": "Ângelo Negreiros",
        "nome": "Ângelo Lemos Vidal de Negreiros",
        "email": "angelolvnegreiros@hotmail",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370072",
        "nomeCompactado": "Alessandra Silva",
        "nome": "Alessandra Mendes da Silva",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370474",
        "nomeCompactado": "Alexandre Dias",
        "nome": "Alexandre Dias Sales De Morais",
        "email": "dias.jbr@gmail.com",
        "linkedin": "https://www.linkedin.com/in/alexandre-dias-833a306a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037154",
        "nomeCompactado": "Alline Morais",
        "nome": "Alline Silva de Morais",
        "email": "allinemorais@gmail.com",
        "linkedin": "https://www.linkedin.com/in/alline-morais-psm-pspo-50002094/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20151370154",
        "nomeCompactado": "Aluisio Fitipaldi",
        "nome": "Aluisio Lins Fitipaldi",
        "email": "alfit@oi.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370022",
        "nomeCompactado": "Amanda Silva",
        "nome": "Amanda Alves Almeida da Silva",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20111370536",
        "nomeCompactado": "Amanda Lopes",
        "nome": "Amanda Lopes Fabricio",
        "email": "amandalops00@gmail.com",
        "linkedin": "https://www.linkedin.com/in/mandalps/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037002",
        "nomeCompactado": "Ana Cláudia Silva",
        "nome": "Ana Cláudia Costa da Silva",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370030",
        "nomeCompactado": "Ana Paula Vale",
        "nome": "Ana Paula de Lucena Vale",
        "email": "apvalefin@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "avatar": "20102370030.jpg",
        "linkedin": "https://www.linkedin.com/in/anapaulavale/",
        "github": "https://github.com/apvale",
        "twitter": "http://twitter.com/apvale",
        "instagram": "https://www.instagram.com/aninhalvale/"
      },
      {
        "id": "20132370403",
        "nomeCompactado": "Anderson Araújo",
        "nome": "Anderson de Araújo Gomes",
        "email": "anderson.araujo.g@gmail.com",
        "linkedin": "https://www.linkedin.com/in/anderson-arg/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370094",
        "nomeCompactado": "Anderson Leal",
        "nome": "Anderson de Oliveira Ferreira Leal",
        "email": "andersonofl@gmail.com",
        "linkedin": "https://www.linkedin.com/in/anderson-leal-295595a8/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20132370284",
        "nomeCompactado": "André Alencar",
        "nome": "André de Alencar Oliveira da Costa",
        "avatar": "20132370284.jpg",
        "email": "andrealencar@outlook.com.br",
        "linkedin": "https://www.linkedin.com/in/andreealencar/",
        "github": "https://github.com/andreealencar",
        "twitter": "https://twitter.com/andreealencar",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370100",
        "nomeCompactado": "André Caldas",
        "nome": "André Fernandes de Caldas",
        "email": "andre.fcaldas@gmail.com",
        "linkedin": "https://www.linkedin.com/in/andré-caldas-926ab220/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037148",
        "nomeCompactado": "André Nunes",
        "nome": "André Luiz Teixeira de Carvalho Nunes",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037151",
        "nomeCompactado": "Anselmo Gomes",
        "nome": "Anselmo Lacerda Gomes",
        "linkedin": "https://www.linkedin.com/in/anselmo-lacerda-a6889531/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370016",
        "nomeCompactado": "Antonio Lima",
        "nome": "Antonio Josué de Lima Neto",
        "email": "josuedsi@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370030",
        "nomeCompactado": "Antonio Mendonça",
        "nome": "Antonio Ezequiel de Mendonça",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20122380163",
        "nomeCompactado": "Antônio Muniz",
        "nome": "Antônio Muniz de Andrade Neto",
        "email": "antoniomunizdeandrade@gmail.com",
        "avatar": "20122380163.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/antonio-muniz-79783a78"
      },
      {
        "id": "042037147",
        "nomeCompactado": "Antonio Loureiro",
        "nome": "Antonio Loureiro Cavalcanti Filho",
        "email": "antonniojp@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370078",
        "nomeCompactado": "Antonio Palitot",
        "nome": "Antonio de Pádua Palitot Júnior",
        "email": "jrpalitot@gmail.com",
        "linkedin": "https://www.linkedin.com/in/antônio-palitot-2470b8149/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370172",
        "nomeCompactado": "Arthur Carvalho",
        "nome": "Arthur Emanuel Brandão Carvalho",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370308",
        "nomeCompactado": "Arthur Luckwu",
        "nome": "Arthur Varela Luckwu de Oliveira",
        "email": "arthurvluckwu@gmail.com",
        "linkedin": "https://www.linkedin.com/in/arthur-luckwu/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370248",
        "nomeCompactado": "Artur Araújo",
        "nome": "Artur Benício Araújo",
        "email": "artur_benicio@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/arturaraujob/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037146",
        "nomeCompactado": "Arthur Melo",
        "nome": "Arthur Santos Araujo de Melo",
        "email": "arthur_santoss@yahoo.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20101370037",
        "nomeCompactado": "Ayrton Nádgel",
        "nome": "Ayrton Nádgel de Souza Silva",
        "email": "ayrton.nadgel@gmail.com",
        "linkedin": "https://www.linkedin.com/in/ayrton-nadgel-6b420487/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370577",
        "nomeCompactado": "Ayrton Herculano",
        "nome": "Ayrton Douglas Rodrigues Herculano",
        "email": "ayrtondouglas@gmail.com",
        "linkedin": "https://www.linkedin.com/in/ayrtondouglas/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037006",
        "nomeCompactado": "Barbara Xavier",
        "nome": "Barbara de Assis Xavier",
        "linkedin": "https://www.linkedin.com/in/barbara-xavier-psm-5a43362b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037008",
        "nomeCompactado": "Bettowen Oliveira",
        "nome": "Bettowen Carvalho de Oliveira",
        "email": "bettowen@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370205",
        "nomeCompactado": "Breno Queiroz",
        "nome": "Breno Queiroz Vasconcelos de Souza",
        "email": "brenoqueiroz_@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/breno-queiroz-vasconcelos-de-souza-8646a827/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370238",
        "nomeCompactado": "Bruno Braga",
        "nome": "Bruno Braga Bezerril",
        "email": "bruno.ifpb@gmail.com",
        "linkedin": "https://www.linkedin.com/in/bragabruno/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092380187",
        "nomeCompactado": "Bruno Molino",
        "nome": "Bruno Esturba Molino",
        "email": "brunoesturba@yahoo.com.br",
        "avatar": "20092380187.jpeg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/bruno-esturba-molino-21845397/"
      },
      {
        "id": 20111370307,
        "nomeCompactado": "Bruno Paulino",
        "nome": "Bruno de Araújo Paulino",
        "avatar": "20111370307.jpg",
        "email": "brunojppb@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/brunojppb",
        "github": "https://github.com/brunojppb",
        "facebook": "https://www.facebook.com/brunojppb",
        "twitter": "https://twitter.com/brunojppb",
        "instagram": "https://www.instagram.com/brunojppb1/",
        "stackoverflow": "https://stackoverflow.com/users/2301092/bruno-paulino"
      },
      {
        "id": "20101370053",
        "nomeCompactado": "Bruno Costa",
        "nome": "Bruno Luis do Nascimento Costa",
        "email": "bruno.not@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/brunolncosta/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370264",
        "nomeCompactado": "Carlos Carvalho",
        "nome": "Carlos Augusto Ayres Carvalho",
        "email": "carlaojp@globo.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370365",
        "nomeCompactado": "Carlos Diego Quirino",
        "nome": "Carlos Diego Quirino Lima",
        "email": "diegoquirino@gmail.com",
        "linkedin": "https://www.linkedin.com/in/carlos-diego-quirino-lima-27bbb039/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370334",
        "nomeCompactado": "Cirino Refosco",
        "nome": "Cirino Ferreira Refosco",
        "linkedin": "https://www.linkedin.com/in/cirino/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370270",
        "nomeCompactado": "Claucio Sousa",
        "nome": "Claucio De Oliveira Sousa",
        "linkedin": "https://www.linkedin.com/in/clauciosousa/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037079",
        "nomeCompactado": "Claudiana Batista",
        "nome": "Claudiana Pereira Batista",
        "email": "clauclau_batista@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/claudiana-batista-ba296030/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037012",
        "nomeCompactado": "Claudio Piomonte",
        "nome": "Claudio de Magalhães Piomonte",
        "linkedin": "https://www.linkedin.com/in/cpiomonte/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
    
      {
        "id": "20091370374",
        "nomeCompactado": "D\'angellys Cavalcanti",
        "nome": "D\'angellys Cavalcanti Feitosa",
        "email": "dangellyscavalcanti@gmail.com",
        "linkedin": "https://www.linkedin.com/in/dangellys-cavalcanti/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370801",
        "nomeCompactado": "Daniel Cardoso",
        "nome": "Daniel Fernandes Vilar Cardoso",
        "email": "fvcdaniel@gmail.com",
        "linkedin": "https://www.linkedin.com/in/daniel-cardoso-51b52b29/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "avatar": "20072370801.jpg",
        "egresso": true,
        "github": "https://github.com/fvcdaniel",
        "lattes": "http://lattes.cnpq.br/4472098497391191",
        "twitter": "https://twitter.com/fvcdaniel/"
      },
      {
        "id": "20102370081",
        "nomeCompactado": "Daniel Filho",
        "nome": "Daniel Alves de Lima Filho",
        "email": "afilhodaniel@gmail.com",
        "linkedin": "https://www.linkedin.com/in/afilhodaniel/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037038",
        "nomeCompactado": "Danilo Dutra",
        "nome": "Danilo Lima Dutra",
        "email": "nilosurfer@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/danilolimadutra/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037140",
        "nomeCompactado": "Danilo Lucena",
        "nome": "Danilo Carlos Gouveia de Lucena",
        "email": "ryganon_stu@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/danilo-lucena-a09459a7/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370391",
        "nomeCompactado": "Danúbia Lima",
        "nome": "Danúbia Lima da Silva Almeida",
        "email": "biaeccentric@gmso.com",
        "linkedin": "https://www.linkedin.com/in/danúbia-lima-14b5732b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370030",
        "nomeCompactado": "Daniel Vilar",
        "nome": "Daniel Vilar Pereira",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20111370439",
        "nomeCompactado": "Daniela Pitta",
        "nome": "Daniela Pitta de Jesus",
        "email": "daniela.pdj@gmail.com",
        "linkedin": "https://www.linkedin.com/in/dlpitta/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370188",
        "nomeCompactado": "Davi Bandeira",
        "nome": "Davi Cavalcanti Pinto Bandeira",
        "email": "davibandeira@gmail.com",
        "linkedin": "https://www.linkedin.com/in/davi-bandeira-2651b325/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370394",
        "nomeCompactado": "David Veloso",
        "nome": "David Edson Ramos Veloso",
        "email": "davidedsoon@gmail.com ",
        "linkedin": "https://www.linkedin.com/in/davidveloso/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370160",
        "nomeCompactado": "David Viana",
        "nome": "David Henrique de Moura Viana",
        "linkedin": "https://www.linkedin.com/in/david-moura-a6863016a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370082",
        "nomeCompactado": "Dawson Brito",
        "nome": "Dawson Jansen Gomes Enedino Brito",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370139",
        "nomeCompactado": "David Amaral",
        "nome": "David Saraiva do Amaral Filho",
        "linkedin": "https://www.linkedin.com/in/amaraldavi1/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037073",
        "nomeCompactado": "Deijiane Carvalho",
        "nome": "Deijiane Gomes Matsumoto de Carvalho",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370090",
        "nomeCompactado": "Denilson Dantas",
        "nome": "Denilson Henrique Dantas",
        "email": "denilsontakezo@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370331",
        "nomeCompactado": "Didier Ferreira",
        "nome": "Didier Braz Ferreira",
        "email": "didierpg@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/didier-ferreira-3a1168161/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370155",
        "nomeCompactado": "Diêgo Bulhões",
        "nome": "Diêgo Michel Ferreira Bulhões",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037069",
        "nomeCompactado": "Diego Lins",
        "nome": "Diego Jonio Borba Lins",
        "linkedin": "https://www.linkedin.com/in/diegojonio/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370371",
        "nomeCompactado": "Diêgo Medeiros",
        "nome": "Diêgo Felipe de Medeiros",
        "email": "diego_toxicity@hotmail.co",
        "linkedin": "https://www.linkedin.com/in/dfmedeiros/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370112",
        "nomeCompactado": "Diego Pessoa",
        "nome": "Diego Ernesto Rosa Pessoa",
        "email": "diegopessoa12@gmail.com",
        "linkedin": "http://linkedin.com/in/diego-pessoa-6a137b28/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "avatar": "20061370112.jpg",
        "egresso": true,
        "github": "https://github.com/diegoep",
        "lattes": "http://lattes.cnpq.br/4442363726982518",
        "researchgate": "https://www.researchgate.net/profile/Diego_Pessoa",
        "twitter": "https://twitter.com/diegopessoa/"
      },
      {
        "id": "20082370154",
        "nomeCompactado": "Diego Nóbrega",
        "nome": "Diego Madson de Andrade Nóbrega",
        "email": "diegomadson@msn.com",
        "linkedin": "https://www.linkedin.com/in/diego-madson-nobrega-b8854b2b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370322",
        "nomeCompactado": "Diénert Vieira",
        "nome": "Diénert de Alencar Vieira",
        "email": "dienertalencar@gmail.com",
        "avatar": "20051370322.jpg",
        "linkedin": "https://www.linkedin.com/in/di%C3%A9nert-vieira-6961b616/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370312",
        "nomeCompactado": "Diógenes Fernandes",
        "nome": "Diógenes Augusto Fernandes Hermínio",
        "email": "diofeher@gmail.com",
        "avatar": "20081370312.jpg",
        "linkedin": "https://www.linkedin.com/in/diofeher/",
        "instagram": "https://www.instagram.com/diofeher/",
        "github": "https://www.github.com/diofeher/",
        "facebook": "https://www.facebook.com/diofeher/",
        "twitter": "https://www.twitter.com/diofeher/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370437",
        "nomeCompactado": "Diógenes Calado",
        "nome": "Diógenes Calado da Silva",
        "email": "diogenes_c1@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370235",
        "nomeCompactado": "Diogo Alves",
        "nome": "Diogo de Alcantara Rodrigues Alves",
        "email": "diogoca@gmail.com",
        "linkedin": "https://www.linkedin.com/in/diogoca/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370461",
        "nomeCompactado": "Douglas Silva",
        "nome": "Douglas Limeira Silva",
        "linkedin": "https://www.linkedin.com/in/douglas-limeira-silva-04723429/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370319",
        "nomeCompactado": "Douglas Torres",
        "nome": "Douglas Gadelha Firmino Torres",
        "email": "douglastorr@gmail.com",
        "linkedin": "https://www.linkedin.com/in/dougtorres/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370238",
        "nomeCompactado": "Éder Pires",
        "nome": "Éder Pires Batista",
        "linkedin": "https://www.linkedin.com/in/eder-pires-a46b867b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037084",
        "nomeCompactado": "Edno França",
        "nome": "Edno Galderisy Ferreira de França",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20101380121",
        "nomeCompactado": "Eduardo Fox",
        "nome": "Eduardo Farias Brinds-Ley Fox",
        "email": "eduardobfox@gmail.com",
        "avatar": "20101380121.png",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "lattes": "http://lattes.cnpq.br/1754631372530799"
      },
      {
        "id": "042037138",
        "nomeCompactado": "Elias Júnior",
        "nome": "Elias Pereira Gomes Júnior",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037103",
        "nomeCompactado": "Emerson Diego",
        "nome": "Emerson Diego da Costa Araújo",
        "email": "diegowebby@gmail.com.br",
        "linkedin": "https://www.linkedin.com/in/emerson-diego/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "avatar": "041037103.jpg",
        "egresso": true,
        "github": "https://github.com/emerson-diego",
        "facebook": "https://www.facebook.com/emerson.diego.14",
        "lattes": "http://lattes.cnpq.br/8718633182693616",
        "twitter": "https://twitter.com/diegowebby"
      },
      {
        "id": "20091370080",
        "nomeCompactado": "Érico Ramos",
        "nome": "Érico Vinicius da Silva Ramos",
        "email": "evsramos@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20151380265",
        "nomeCompactado": "Erick Câmara",
        "nome": "Erick Câmara dos Santos",
        "email": "erickcamara3@gmail.com",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true
      },
    
      {
        "id": "042037165",
        "nomeCompactado": "Elaine Araújo",
        "nome": "Elaine Cristina Juvino de Araújo",
        "linkedin": "https://www.linkedin.com/in/elaine-araujo-31730618/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370297",
        "nomeCompactado": "Elias Rocha",
        "nome": "Elias Medeiros da Rocha",
        "email": "eliasipj@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/eliasmrocha/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370043",
        "nomeCompactado": "Elias Rocha",
        "nome": "Elias Felipe da Rocha",
        "linkedin": "https://www.linkedin.com/in/elias-rocha-4b2a6733/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370111",
        "nomeCompactado": "Emerson Raniere",
        "nome": "Emerson Raniere Oliveira Souza",
        "email": "emersonraniere@hotmail.com",
        "avatar": "20102370111.jpg",
        "linkedin": "https://www.linkedin.com/in/emersonraniere/",
        "twitter": "https://twitter.com/_EmersonRaniere",
        "facebook": "https://www.facebook.com/EmersonRaniere",
        "instagram": "https://www.instagram.com/EmersonRaniere",
        "github": "https://github.com/EmersonRaniere",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370180",
        "nomeCompactado": "Erisvaldo Gadelha",
        "nome": "Erisvaldo Gadelha Saraiva Junior",
        "email": "jun1nho_jp@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/erisvaldojunior/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370120",
        "nomeCompactado": "Érycson Nóbrega",
        "nome": "Érycson Gomes da Nóbrega",
        "email": "egdn2004@gmail.com",
        "linkedin": "https://www.linkedin.com/in/érycson-nóbrega-ba5734103/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370415",
        "nomeCompactado": "Evandro Macedo",
        "nome": "Evandro Henrique Cordeiro de Macedo",
        "email": "evandro.hcm@gmail.com",
        "avatar": "20121370415.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "linkedin": "https://www.linkedin.com/in/evandrohcm",
        "github": "https://github.com/evandromacedo",
        "facebook": "https://facebook.com/macedoevandro",
        "twitter": "https://twitter.com/evandromacedo_",
        "instagram": "https://www.instagram.com/evan.macedo",
        "egresso": true
      },
      {
        "id": "20072370682",
        "nomeCompactado": "Ewerton Lima",
        "nome": "Ewerton Henrique Silva de Lima",
        "email": "https://www.linkedin.com/in/ewerton-lima-97bb4720/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370239",
        "nomeCompactado": "Fábio Albuquerque",
        "nome": "Fábio Cruz Barbosa de Albuquerque",
        "email": "fabiumcruz@gmail.com",
        "linkedin": "https://www.linkedin.com/in/fabiocbalbuquerque/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370042",
        "nomeCompactado": "Felipe Batista",
        "nome": "Felipe Dantas de Assis e M. Batista",
        "email": "felipedantas89@msn.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370124",
        "nomeCompactado": "Fellipe Freire",
        "nome": "Fellipe Freire Cirilo Passos",
        "email": "fellipe91 @gmail.com",
        "linkedin": "https://www.linkedin.com/in/fellipe-freire-31295050/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370077",
        "nomeCompactado": "Flavio Lima",
        "nome": "Flavio Eduardo Correia Lima de Menezes",
        "email": "flavio.correialima@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/flavio-correialima/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071610175",
        "nomeCompactado": "Flavio Ribeiro",
        "nome": "Flavio Ribeiro Nogueira Barbosa",
        "email": "email@flavioribeiro.com",
        "curso": "Engenharia Eletrica",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/flavioribeiro/",
        "github": "https://github.com/flavioribeiro",
        "twitter": "https://twitter.com/flavioribeiro",
        "instagram": "https://twitter.com/flavioribeironb"
      },
      {
        "id": "011025083",
        "nomeCompactado": "Flaviano Flauber",
        "nome": "Flaviano Flauber de Lira Marinho",
        "email": "flauberjp@gmail.com",
        "avatar": "09571013.jpg",
        "curso": "CST EM TELECOMUNICAÇÕES",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/flauber/",
        "github": "https://github.com/flauberjp",
        "twitter": "https://www.instagram.com/flauberjp/"
      },
      {
        "id": "042037135",
        "nomeCompactado": "Francisco Alencar",
        "nome": "Francisco Dellano Leite Alencar",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037090",
        "nomeCompactado": "Francisco Dantas",
        "nome": "Francisco Dantas Nobre Neto",
        "linkedin": "https://www.linkedin.com/in/francisco-dantas-nobre-neto-76a003138/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20132380212",
        "nomeCompactado": "Gabriel da Silva",
        "nome": "Gabriel da Silva Cavalcante",
        "email": "gabrielsc.adm@gmail.com",
        "avatar": "20132380212.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/gcavalcante/",
        "facebook": "https://www.facebook.com/gabriel.cavalcante.adm"
      },
      {
        "id": "20051370012",
        "nomeCompactado": "Gabriela Souza",
        "nome": "Gabriela Guedes Souza",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20122370435",
        "nomeCompactado": "Geferson Dias",
        "nome": "Geferson Ribeiro Dias",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370370",
        "nomeCompactado": "Genival Barboza",
        "nome": "Genival Gomes Barboza Neto",
        "email": "genivalbarboza@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/genival-barboza-7582a871/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370073",
        "nomeCompactado": "Geysa Jerônimo",
        "nome": "Geysa de Souza Jerônimo",
        "linkedin": "https://www.linkedin.com/in/geysa-jerônimo-082210a1/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370430",
        "nomeCompactado": "Geyson Kennedy",
        "nome": "Geyson Kennedy de Moura Pereira",
        "email": "geysonkennedy@gmail.com",
        "linkedin": "https://www.linkedin.com/in/geyson-kennedy-moura-pereira-565b0525/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370514",
        "nomeCompactado": "Giancarlo Leite Cavalcanti de Andrade",
        "nome": "Giancarlo Leite Cavalcanti de Andrade",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370105",
        "nomeCompactado": "Gilvan Marinho",
        "nome": "Gilvan Marinho dos Santos",
        "email": "gilvansoft@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037132",
        "nomeCompactado": "Giuseppe Anthony",
        "nome": "Giuseppe Anthony Nascimento de Lima",
        "email": "giuseppeanl@gmail.com",
        "linkedin": "https://www.linkedin.com/in/giuseppe-lima-173b85b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370154",
        "nomeCompactado": "Gleidson Ribeiro",
        "nome": "Gleidson de Sousa Ribeiro",
        "linkedin": "https://www.linkedin.com/in/gleidson-ribeiro-247586105/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370547",
        "nomeCompactado": "Gleydson Tavares",
        "nome": "Gleydson da Silva Tavares",
        "email": "tavares.gleydson@gmail.com",
        "avatar": "20121370547.jpg",
        "linkedin": "https://www.linkedin.com/in/gleydsontavares/",
        "github": "https://github.com/g13ydson",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037045",
        "nomeCompactado": "Gregorio Melo",
        "nome": "Gregorio Enrico Linhares de Melo",
        "linkedin": "https://www.linkedin.com/in/gregoriomelo/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037089",
        "nomeCompactado": "Gustavo Cavalcanti",
        "nome": "Gustavo Cavalcanti",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092380489",
        "nomeCompactado": "Helder Nogueira",
        "nome": "Helder Nogueira de Moura",
        "email": "helder.hnm@gmail.com",
        "avatar": "20092380489.jpeg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/helder-nogueira-065076b7/",
        "facebook": "https://www.facebook.com/helder.hnm",
        "lattes": "http://lattes.cnpq.br/6220327298119813",
        "twitter": "https://twitter.com/heldernm"
      },
      {
        "id": "20051370241",
        "nomeCompactado": "Helder Silva",
        "nome": "Helder Vieira da Silva",
        "linkedin": "https://www.linkedin.com/in/heldervieira/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370549",
        "nomeCompactado": "Henrique Barreto",
        "nome": "Henrique Antunes Barreto de Almeida",
        "linkedin": "https://www.linkedin.com/in/henrique-barreto-7707922b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370056",
        "nomeCompactado": "Henrique Pontes",
        "nome": "Henrique de Paiva Araújo Pontes",
        "email": "henrique_pontes@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370236",
        "nomeCompactado": "Herminegildo Remigio",
        "nome": "Herminegildo Remigio da Rocha Neto",
        "email": "txioneto@gmail.com",
        "linkedin": "https://www.linkedin.com/in/hdrneto/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370221",
        "nomeCompactado": "Higor Delgado",
        "nome": "Higor Delgado Leite Benicio",
        "email": "higor_zupo@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/higordelgado/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370165",
        "nomeCompactado": "Idjinne Ribeiro",
        "nome": "Idjinne Carollynne Borges Ribeiro",
        "email": "idjinne@gmail.com",
        "linkedin": "https://www.linkedin.com/in/idjinne-ribeiro-86160333/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370223",
        "nomeCompactado": "Igor Portela",
        "nome": "Igor Amorim Costa Portela",
        "email": "igorcostaportela@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/igorportela/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037064",
        "nomeCompactado": "Igor Rodrigues",
        "nome": "Igor Magalhães Rodrigues",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370492",
        "nomeCompactado": "Igor Sobreira",
        "nome": "Igor Dutra Sobreira",
        "email": "igor_v2@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/igorsobreira/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370116",
        "nomeCompactado": "Isaac Marinho",
        "nome": "Isaac de Morais Marinho dos Santos",
        "email": "isaacmarinho@gmail.com",
        "linkedin": "https://www.linkedin.com/in/isaacmarinho/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370103",
        "nomeCompactado": "Ítalo Rodrigues",
        "nome": "Ítalo Mendes Rodrigues",
        "email": "italomendes.r@gmail.com",
        "linkedin": "https://www.linkedin.com/in/italomendes/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370183",
        "nomeCompactado": "Italo Sobreira",
        "nome": "Italo Anderson Pessoa de A. Sobreira",
        "email": "italosobreira@oi.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370140",
        "nomeCompactado": "Ivandro Claudino",
        "nome": "Ivandro Claudino de Sá",
        "email": "desapb@yahoo.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037102",
        "nomeCompactado": "Jacqueline Brito",
        "nome": "Jacqueline Fernandes de Brito",
        "email": "jacquelinefb@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370180",
        "nomeCompactado": "Jaqueline Fernandes",
        "nome": "Jaqueline Fernandes de Medeiros Duarte",
        "email": "dhelly@gmail.com",
        "linkedin": "https://www.linkedin.com/in/jaqueline-fernandes-38855836/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370542",
        "nomeCompactado": "Janaina Militão",
        "nome": "Janaina Militão do Nascimento",
        "email": "janaina_nascimento9@hotma",
        "linkedin": "https://www.linkedin.com/in/janaina-militao/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370286",
        "nomeCompactado": "Jimmy Wilson",
        "nome": "Jimmy Wilson Oliveira Alves da Silva",
        "linkedin": "https://www.linkedin.com/in/jimmywilson1991/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037093",
        "nomeCompactado": "João Carlos Lira",
        "nome": "João Carlos de Lucena Lira",
        "linkedin": "https://www.linkedin.com/in/joão-lira-5693989/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370158",
        "nomeCompactado": "João Rolim",
        "nome": "João Guilherme Rolim",
        "email": "joaogrolim@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370470",
        "nomeCompactado": "Jonny Wilson",
        "nome": "Jonny Wilson Oliveira Alves da Silva",
        "email": "jonny_wilson333@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/jonny-wilson-85334129/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370060",
        "nomeCompactado": "João Paulo Leite",
        "nome": "João Paulo da Silva Leite",
        "linkedin": "https://www.linkedin.com/in/joão-paulo-da-silva-leite-522816107/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370124",
        "nomeCompactado": "Jefferson Silva",
        "nome": "Jefferson Silva de Souza",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20141370526",
        "nomeCompactado": "João Paulo Marques",
        "nome": "João Paulo Marques de Almeida",
        "email": "paulinhosocrates@gmail.com",
        "linkedin": "https://www.linkedin.com/in/joão-paulo-marques-a0154ab3/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20131370442",
        "nomeCompactado": "Victor Pereira",
        "nome": "João Victor Pereira dos Santos",
        "avatar": "20131370442.jpg",
        "email": "victordualib@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/victorbzk/",
        "instagram": "https://www.instagram.com/viktorbzk"
      },
      {
        "id": "20132370420",
        "nomeCompactado": "Joerverson Santos",
        "nome": "Joerverson Barbosa Santos",
        "avatar": "20132370420.png",
        "email": "joerverson.santos@gmail.com",
        "linkedin": "https://www.linkedin.com/in/joerverson-santos-6369aa134/",
        "github": "https://github.com/Joeverson",
        "lattes": "http://lattes.cnpq.br/3519985082185408",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20142370040",
        "nomeCompactado": "Joffily Ferreira",
        "nome": "Joffily Ferreira dos Santos",
        "email": "joffilyferreira@gmail.com",
        "avatar": "20142370040.jpg",
        "linkedin": "https://www.linkedin.com/in/joffily/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "github": "https://github.com/joffilyfe",
        "twitter": "twitter.com/joffilyfe"
      },
      {
        "id": "042037128",
        "nomeCompactado": "Joffison Magalhães",
        "nome": "Joffison da Silva Magalhães",
        "email": "vanblacken@gmail.com",
        "linkedin": "https://www.linkedin.com/in/joffison-da-silva-magalhães-4085b616a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370211",
        "nomeCompactado": "Jônatas Melo",
        "nome": "Jônatas Clementino Melo",
        "email": "jonatas.cmelo@gmail.com",
        "linkedin": "https://www.linkedin.com/in/jonatascmelo/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370377",
        "nomeCompactado": "Jonathan Silva",
        "nome": "Jonathan Maciel Barrêto da Silva",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370332",
        "nomeCompactado": "Jonathas Lacerda",
        "nome": "Jonathas Santos de Lacerda",
        "linkedin": "https://www.linkedin.com/in/jonathaslacerda/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20122370052",
        "nomeCompactado": "Jonathas Almeida",
        "nome": "Jonathas Arestides de Almeida",
        "email": "jonathasarts@gmail.com",
        "linkedin": "https://www.linkedin.com/in/jonathasarts/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370476",
        "nomeCompactado": "Jorge Silva",
        "nome": "Jorge Luiz Barreto da Silva",
        "email": "jorgebarreto.pe@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037127",
        "nomeCompactado": "Josenildo Costa",
        "nome": "Josenildo Santos da Costa",
        "email": "josenildoscosta@gmail.com",
        "linkedin": "https://www.linkedin.com/in/josenildo-costa-44872021/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037024",
        "nomeCompactado": "Jose Wendell Silva",
        "nome": "Jose Wendell de Morais Silva",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102380273",
        "nomeCompactado": "José Amarildo",
        "nome": "José Amarildo de Lima Filho",
        "email": "joseamaril@gmail.com",
        "linkedin": "https://www.linkedin.com/in/jose-amarildo/",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370416",
        "nomeCompactado": "Carlos Derich",
        "nome": "José Carlos Derich Pacheco André Carneiro",
        "email": "d.erich@hotmail.com ",
        "linkedin": "https://www.linkedin.com/in/carlos-derich-97122877/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370065",
        "nomeCompactado": "José Neto",
        "nome": "José de Meira Fernandes Neto",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20122370427",
        "nomeCompactado": "Jozias Júnior",
        "nome": "Jozias Rolim de Araújo Júnior",
        "email": "jozias.rolim@dce.ufpb.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "avatar": "20122370427.jpg",
        "linkedin": "https://www.linkedin.com/in/joziasrolim/",
        "github": "https://github.com/mocotinha",
        "facebook": "https://www.facebook.com/jozias.rolim",
        "lattes": "http://lattes.cnpq.br/9271889009536036"
      },
      {
        "id": "20082370049",
        "nomeCompactado": "Juan Carlos",
        "nome": "Juan Carlos Almeida Santos",
        "email": "juancarllos.a@gmail.com",
        "linkedin": "https://www.linkedin.com/in/juan-carlos-b08a7739/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370130",
        "nomeCompactado": "Juliana Maia",
        "nome": "Juliana Maia Leite",
        "linkedin": "https://www.linkedin.com/in/jumaialeite/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037025",
        "nomeCompactado": "Juan Damasceno",
        "nome": "Juan di Carlo Damasceno",
        "linkedin": "https://www.linkedin.com/in/juandamasceno/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20101370282",
        "nomeCompactado": "Julio César Gomes",
        "nome": "Julio César da Silva Gomes",
        "linkedin": "https://www.linkedin.com/in/julio-césar-da-silva-gomes-594a80107/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370235",
        "nomeCompactado": "Julio Martins",
        "nome": "Julio Martins Filho",
        "linkedin": "https://www.linkedin.com/in/wmjulio/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370078",
        "nomeCompactado": "Kelly Sousa",
        "nome": "Kelly Cristina Trajano de Sousa",
        "email": "kkellytrajano@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370351",
        "nomeCompactado": "Kássio Oliveira",
        "nome": "Kássio Kiarelly Soares de Oliveira",
        "email": "kassiokiarelly@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "avatar": "20092370351.jpg",
        "linkedin": "https://www.linkedin.com/in/kassiokiarelly/",
        "github": "https://github.com/kassiokiarelly",
        "facebook": "https://www.facebook.com/kassiokiarelly",
        "twitter": "https://www.twitter.com/kassiokiarelly/",
        "instagram": "https://www.instagram.com/kassiokiarelly/"
      },
      {
        "id": "20112370386",
        "nomeCompactado": "Laércio Bezerra",
        "nome": "Laércio de Souza Bezerra",
        "email": "laerciosbezerra@gmail.com",
        "avatar": "20112370386.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/laércio-bezerra-1a555849/",
        "github": "https://github.com/laerciosb",
        "facebook": "https://www.facebook.com/laerciosbezerra",
        "lattes": "http://lattes.cnpq.br/6034799209012820",
        "instagram": "https://www.instagram.com/laerciosb/"
      },
      {
        "id": "20122380228",
        "nomeCompactado": "Laís Nascimento",
        "nome": "Laís Maria do Bomfim Nascimento",
        "email": "laysbomfim@gmail.com",
        "avatar": "20122380228.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "lattes": "http://lattes.cnpq.br/4820664207133370"
      },
      {
        "id": "20051380328",
        "nomeCompactado": "Leandro Almeida",
        "nome": "Leandro Cavalcanti de Almeida",
        "email": "lcavalcanti.almeida@gmail.com",
        "avatar": "20051380328.jpeg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/leandro-almeida-2601a611",
        "lattes": "http://lattes.cnpq.br/9455233418767749",
        "twitter": "https://twitter.com/leandrocalmeida/"
      },
      {
        "id": "20102380320",
        "nomeCompactado": "Leandro Medeiros",
        "nome": "Leandro Medeiros Silva",
        "email": "leandro.m@hostdime.com.br",
        "avatar": "20102380320.jpeg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/leandro-medeiros-736130b4/"
      },
      {
        "id": "20051370268",
        "nomeCompactado": "Leonardo Melo",
        "nome": "Leonardo Oliveira de Melo",
        "email": "leoomelo@gmail.com",
        "linkedin": "https://www.linkedin.com/in/leonardomelo/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370101",
        "nomeCompactado": "Leonel Freire",
        "nome": "Leonel Marques de Luna Freire",
        "email": "leonelmfreire@yahoo.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370309",
        "nomeCompactado": "Leydson Silva",
        "nome": "Leydson Barbosa Silva",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037095",
        "nomeCompactado": "Lucas Cruz",
        "nome": "Lucas Cavalcanti Cruz",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037101",
        "nomeCompactado": "Lucas Souza",
        "nome": "Lucas Vieira de Souza",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370763",
        "nomeCompactado": "Luan Brito",
        "nome": "Luan Rocha de Brito",
        "email": "Luan3@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/luan-brito/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370288",
        "nomeCompactado": "Lucas Schulze",
        "nome": "Lucas Alves Schulze",
        "email": "schulzelucas1@gmail.com",
        "linkedin": "https://www.linkedin.com/in/lucas-schulze-9142b57b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370164",
        "nomeCompactado": "Luis Campos Junior",
        "nome": "Luis Campos Junior",
        "email": "luiscamposjr@gmail.com",
        "linkedin": "https://www.linkedin.com/in/luiscamposjr/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370420",
        "nomeCompactado": "Luiz Carlos Chaves",
        "nome": "Luiz Carlos Rodrigues Chaves",
        "email": "lucachaves@gmail.com",
        "avatar": "20051370420.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/luizcrchaves/",
        "github": "https://github.com/lucachaves",
        "facebook": "https://www.facebook.com/luizcrchaves",
        "lattes": "http://lattes.cnpq.br/7165875430419020",
        "researchgate": "https://www.researchgate.net/profile/Luiz_Rodrigues_Chaves",
        "twitter": "https://www.instagram.com/luizcrchaves/",
        "instagram": "https://www.instagram.com/luizcrchaves/"
      },
      {
        "id": "20112370513",
        "nomeCompactado": "Luiz Henrique Lopes",
        "nome": "Luiz Henrique Estrela Lopes",
        "email": "luishenriqueestrela@gmail.com",
        "linkedin": "https://www.linkedin.com/in/luiz-henrique-estrela-lopes-a13ba323/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "201312010134",
        "nomeCompactado": "Manoel Dijalma",
        "nome": "Manoel Dijalma da Silva Filho",
        "email": "dijalmacz@gmail.com",
        "avatar": "201312010134.jpg",
        "curso": "ads",
        "campus": "ifpb-cz",
        "linkedin": "https://www.linkedin.com/in/dijalmaf/",
        "github": "https://github.com/dijalmasilva",
        "facebook": "https://www.facebook.com/dijalmaf",
        "instagram": "https://www.instagram.com/dijalmass_",
        "egresso": true
      },
      {
        "id": "20081370185",
        "nomeCompactado": "Manoel Amaro",
        "nome": "Manoel de Albuquerque Lira Amaro",
        "email": "manoamaro@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/manoel-al-amaro/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370260",
        "nomeCompactado": "Manuela Andrade",
        "nome": "Manuela Barreto Lopes de Andrade",
        "email": "manuu.bla@gmail.com ",
        "linkedin": "https://www.linkedin.com/in/manuela-andrade-83313a102/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037115",
        "nomeCompactado": "Marcus Philippe",
        "nome": "Marcus Philippe da Costa Leite",
        "email": "lippejp@gmail.com",
        "linkedin": "https://www.linkedin.com/in/marcusphilippe/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20101370320",
        "nomeCompactado": "Marcelo Júnior",
        "nome": "Marcelo Freitas Araujo Júnior",
        "email": "marcello_jr1@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/marcelo-jr-9698874a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037118",
        "nomeCompactado": "Marília Araújo",
        "nome": "Marília de Moura Lucena Araújo",
        "curso": "cstsi",
        "linkedin": "https://www.linkedin.com/in/mariliamla/",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370580",
        "nomeCompactado": "Marcos Antonio Pereira",
        "nome": "Marcos Antonio Porciuncula Pereira",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370359",
        "nomeCompactado": "Melina Moreira",
        "nome": "Melina Rachel Moreira Silva",
        "email": "melinarachel@gmail.com",
        "linkedin": "https://www.linkedin.com/in/melinarmoreira/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037117",
        "nomeCompactado": "Milton Cappelletti",
        "nome": "Milton Cappelletti Júnior",
        "email": "miltoncappelletti@gmail.com",
        "linkedin": "https://www.linkedin.com/in/miltoncappelletti/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370375",
        "nomeCompactado": "Mônica Santana",
        "nome": "Mônica Auricélia Oliveira Santana",
        "email": "monicaaos@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/mônica-santana-857b422b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370407",
        "nomeCompactado": "Maria Jackeline Gomes",
        "nome": "Maria Jackeline dos Santos Gomes",
        "email": "maryjack_@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20142370309",
        "nomeCompactado": "Aparecida Santiago",
        "nome": "Maria Aparecida da Silva Santiago",
        "email": "santiagocida1@gmail.com",
        "linkedin": "https://www.linkedin.com/in/aparecida-santiago-9911a8124/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370063",
        "nomeCompactado": "Magno Oliveira",
        "nome": "Magno Rodrigues de Oliveira",
        "email": "magnologan@gmail.com",
        "linkedin": "https://www.linkedin.com/in/magnologan/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20142370201",
        "nomeCompactado": "Marianna Veríssimo",
        "nome": "Marianna Soares Veríssimo",
        "email": "marianna1204@gmail.com",
        "avatar": "20142370201.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/mariannave/",
        "github": "https://github.com/mariannave",
        "twitter": "https://www.twitter.com/mariannaveri/",
        "instagram": "https://www.instagram.com/mariannave/"
      },
      {
        "id": "20092370262",
        "nomeCompactado": "Mateus Lucena",
        "nome": "Mateus Barrêto Nóbrega de Lucena",
        "email": "mateusbnl@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20141370461",
        "nomeCompactado": "Matheus Mayer",
        "nome": "Matheus Mayer Duarte de Figueirêdo",
        "linkedin": "https://www.linkedin.com/in/matheus-mayer/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370286",
        "nomeCompactado": "Matheus Rangel",
        "nome": "Matheus Ulysses Dantas Rangel",
        "email": "matheusulysses159@gmail.com",
        "avatar": "20102370286.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/matheusrangel/",
        "github": "https://github.com/matheusrangel",
        "facebook": "https://www.facebook.com/matheus.ulysses",
        "instagram": "https://www.instagram.com/matheusrangel92/"
      },
      {
        "id": "20151370049",
        "nomeCompactado": "Maurício de Lira",
        "nome": "Maurício Barbosa de Lira Filho",
        "linkedin": "https://www.linkedin.com/in/mauriciodelira/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "facebook": "https://www.facebook.com/deliramauricio",
        "lattes": "http://lattes.cnpq.br/3721070388802203",
        "instagram": "https://www.instagram.com/mauriciodlira/"
      },
      {
        "id": "031037029",
        "nomeCompactado": "Mauricio Linhares",
        "nome": "Mauricio Linhares de Aragao Junior",
        "linkedin": "https://www.linkedin.com/in/mauriciolinhares/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370325",
        "nomeCompactado": "Marcus Antonius",
        "nome": "Marcus Antonius Virginio Farias de Queiroz",
        "email": "contato@marcusantonius.com.br",
        "avatar": "20061370325.jpg",
        "linkedin": "https://www.linkedin.com/in/marcusantonius/",
        "github": "https://github.com/marcusantoniusvfq",
        "facebook": "https://www.facebook.com/marcusantonius88",
        "twitter": "https://twitter.com/marcusantonius",
        "instagram": "https://www.instagram.com/marcusantoniusvfq/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20132380395",
        "nomeCompactado": "Marcus Carvalho",
        "nome": "Marcus Paulo Pereira Lima de Carvalho",
        "email": "marcustkd1@gmail.com",
        "avatar": "20132380395.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/marcuscarvalho07/",
        "facebook": "https://www.facebook.com/Marcustkd"
      },
      {
        "id": "20062380294",
        "nomeCompactado": "Marcos Cesar",
        "nome": "Marcos Cesar Holanda dos Santos",
        "email": "marcoscefetpb@gmail.com",
        "avatar": "20062380294.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370379",
        "nomeCompactado": "Michel Risucci",
        "nome": "Michel Alessandro Brasil Risucci de França",
        "email": "michelrisucci@gmail.com",
        "avatar": "20071370379.jpg",
        "linkedin": "https://www.linkedin.com/in/michelrisucci",
        "github": "https://github.com/michelrisucci",
        "facebook": "https://www.facebook.com/michelrisucci",
        "twitter": "https://twitter.com/michelrisucci",
        "instagram": "https://www.instagram.com/michelrisucci",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370144",
        "nomeCompactado": "Moisés Guimarães",
        "nome": "Moisés Guimarães de Medeiros",
        "email": "guimaraes@pm.me",
        "avatar": "20051370144.jpg",
        "linkedin": "https://www.linkedin.com/in/moisesguimaraes/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370416",
        "nomeCompactado": "Nailson Cunha",
        "nome": "Nailson dos Santos Cunha",
        "email": "nailsoncunha@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20101370339",
        "nomeCompactado": "Naftali França",
        "nome": "Naftali Augusto Borges de França",
        "email": "naftalifranca@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20122370257",
        "nomeCompactado": "Natacha Targino",
        "nome": "Natacha Targino Rodrigues Simões Brasileiro",
        "email": "targino.natacha@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370114",
        "nomeCompactado": "Natan Andrade",
        "nome": "Natan Brasileiro de Andrade",
        "email": "natanbrasileiro@gmail.com",
        "linkedin": "https://www.linkedin.com/in/natan-andrade-0b81272b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370045",
        "nomeCompactado": "Nattan Lucena",
        "nome": "Nattan de Oliveira Lucena",
        "email": "nattanlucena@msn.com",
        "linkedin": "https://www.linkedin.com/in/nattan-lucena/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20111370269",
        "nomeCompactado": "Nelson Fernandes",
        "nome": "Nelson Henrique Dantas Fernandes",
        "email": "nelsonhenrique2611@gmail.com",
        "avatar": "20111370269.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/nersoh/",
        "github": "https://github.com/nersoh/"
      },
      {
        "id": "20061370333",
        "nomeCompactado": "Ney Silva",
        "nome": "Ney Andrade Sousa Silva",
        "email": "neyandrade88@gmail.com",
        "linkedin": "https://www.linkedin.com/in/ney-andrade-157581155/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370210",
        "nomeCompactado": "Nielson Rolim",
        "nome": "Nielson Dias de Pontes Sobreira Rolim",
        "email": "nielson.rolim@gmail.com",
        "avatar": "20052370210.jpg",
        "linkedin": "https://www.linkedin.com/in/nielsonrolim/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370202",
        "nomeCompactado": "Nielson Pontes",
        "nome": "Nielson José Pontes da Silva Júnior",
        "email": "nj.parsifal@gmail.com",
        "linkedin": "https://www.linkedin.com/in/nielsonjnr/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370355",
        "nomeCompactado": "Omar Ramalho",
        "nome": "Omar Scher Ramalho",
        "email": "oscher88@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/omar-ramalho-11005424/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "041037100",
        "nomeCompactado": "Osmar Bezerra",
        "nome": "Osmar Nilo de Jesus Lima Bezerra Neto",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370129",
        "nomeCompactado": "Otacílio Vicente",
        "nome": "Otacílio Vicente Ferreira Neto",
        "email": "otacilioferreiro@gmail.com",
        "linkedin": "https://www.linkedin.com/in/otacferreiro/",
        "instagram": "https://www.instagram.com/otacneto/",
        "github": "https://github.com/OtacFerreiro/",
        "twitter": "https://twitter.com/OtacilioVF/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20152380064",
        "nomeCompactado": "Pablo Bezerra Guedes",
        "nome": "Pablo Bezerra Guedes Lins de Albuquerque",
        "email": "pablocstredes@gmail.com",
        "avatar": "20152380064.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/pablo-albuquerque-83b4a6172",
        "github": "https://github.com/Pablocst",
        "facebook": "https://m.facebook.com/pablo.bezerra.9"
      },
      {
        "id": "20071370395",
        "nomeCompactado": "Pablo Cunha",
        "nome": "Pablo Cunha Dantas",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092370076",
        "nomeCompactado": "Pablo Veinberg",
        "nome": "Pablo Sebastian Veinberg",
        "email": "pveinberg@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "avatar": "20092370076.png",
        "linkedin": "https://www.linkedin.com/in/pablo-veinberg/",
        "github": "https://github.com/pveinberg",
        "lattes": "http://lattes.cnpq.br/0046317997014937",
        "twitter": "http://twitter.com/pveinberg"
      },
      {
        "id": "20051370403",
        "nomeCompactado": "Patrick Jourdan",
        "nome": "Patrick Jourdan Evangelista Maia",
        "email": "patrickjourdanmaia@gmail.com",
        "linkedin": "https://www.linkedin.com/in/patrick-jourdan-evangelista-maia-2b0a9510/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370341",
        "nomeCompactado": "Paula Karenina Freire",
        "nome": "Paula Karenina de Macêdo Machado Freire",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20111370021",
        "nomeCompactado": "Paulo Linhares",
        "nome": "Paulo Virgílio Gomes Linhares Neto",
        "email": "paulitolinhares@gmail.com",
        "linkedin": "https://www.linkedin.com/in/paulitolinhares/",
        "avatar": "20111370021.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102380362",
        "nomeCompactado": "Paulo Vítor",
        "nome": "Paulo Vítor Nascimento de Sousa",
        "email": "paulovitor.93@hotmail.com",
        "avatar": "20102380362.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "facebook": "https://www.facebook.com/paulo.vitor.104855",
        "lattes": "http://lattes.cnpq.br/0028371280741058",
        "instagram": "https://www.instagram.com/paulovitor93/"
      },
      {
        "id": "20051380417",
        "nomeCompactado": "Pedro Filho",
        "nome": "Pedro Batista de Carvalho Filho",
        "email": "pedro.filho.jp@gmail.com",
        "avatar": "20051380417.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/pedro-batista-de-carvalho-filho-92b95768/",
        "facebook": "https://www.facebook.com/pedro.carvalho.376258",
        "lattes": "http://lattes.cnpq.br/7615261737731918"
      },
      {
        "id": "20141370372",
        "nomeCompactado": "Pedro Paiva",
        "nome": "Pedro Vinícius Silva de Paiva",
        "email": "pedrovsp109@gmail.com",
        "linkedin": "https://www.linkedin.com/in/pedro-paiva-57157814a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370207",
        "nomeCompactado": "Pedro Tavares",
        "nome": "Pedro Mateus Tavares Leocádio",
        "email": "pmtl3000@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/pedro-mateus-tavares-b528171b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370094",
        "nomeCompactado": "Pedro Victor",
        "nome": "Pedro Victor de Oliveira Lima",
        "email": "pedao86@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370569",
        "nomeCompactado": "Piters Macri",
        "nome": "Piters Fernandes Olivera Macri",
        "email": "pimacri@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/piters-olivera-fernandes-macri-34843017/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
    
      {
        "id": "20072370409",
        "nomeCompactado": "Pollyane Silva",
        "nome": "Pollyane Carvalho da Silva",
        "email": "pollyanecs@gmail.com",
        "linkedin": "https://www.linkedin.com/in/pollyanecs/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370530",
        "nomeCompactado": "Priscila Oliveira",
        "nome": "Priscila Navarro Peixoto de Oliveira",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370270",
        "nomeCompactado": "Rafael Bruno",
        "nome": "Rafael Bruno Cruz de Souza",
        "email": "rafaelbcdesouza@gmail.com",
        "linkedin": "https://www.linkedin.com/in/rafael-bruno-b1215122/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20101370380",
        "nomeCompactado": "Rafael Figueiredo",
        "nome": "Rafael Felipe de Figueiredo Pereira",
        "email": "rafa.felype@gmail.com",
        "linkedin": "https://www.linkedin.com/in/rafaelfpfigueiredo/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20141370402",
        "nomeCompactado": "Rafael Medeiros",
        "nome": "Rafael Figueirêdo de Medeiros",
        "email": "rafaelmedeirospb@hotmail.com",
        "avatar": "20141370402.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/rafael-medeiros-pb/",
        "github": "https://github.com/rafaelmedeirospb",
        "facebook": "https://www.facebook.com/rafael.figueiredo.35",
        "instagram": "https://www.instagram.com/rafafigueiredo1"
      },
      {
        "id": "20102370308",
        "nomeCompactado": "Rafael Navarro",
        "nome": "Rafael Navarro De Oliveira Santos",
        "email": "rafael_navarr0@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/rafael-navarro-717285147/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037055",
        "nomeCompactado": "Rafael Ramos",
        "nome": "Rafael Gomes de Souza Ramos",
        "linkedin": "https://www.linkedin.com/in/rafael-ramos-85a5a423/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037031",
        "nomeCompactado": "Ramon Borges",
        "nome": "Ramon Cavalcanti Borges",
        "email": "ramondsi@yahoo.com.br",
        "linkedin": "https://www.linkedin.com/in/ramon-borges-0466961a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370345",
        "nomeCompactado": "Raphael Alves",
        "nome": "Raphael Medeiros Alves",
        "email": "raphael.medeiros.alves@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037032",
        "nomeCompactado": "Raphael Patricio",
        "nome": "Raphael Freire de Araujo Patricio",
        "linkedin": "https://www.linkedin.com/in/raphael-patricio-3a313023/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370245",
        "nomeCompactado": "Raphael Porto",
        "nome": "Raphael de Almeida Porto",
        "email": "porto.raphael@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370253",
        "nomeCompactado": "Rafael Trindade",
        "nome": "Rafael da Trindade S. C . dos Santos",
        "linkedin": "https://www.linkedin.com/in/rafaeltc/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370418",
        "nomeCompactado": "Rafaell Pinheiro",
        "nome": "Rafaell Pinheiro Sousa",
        "email": "rafaellps@gmail.com",
        "linkedin": "https://www.linkedin.com/in/rafaell-pinheiro-33793320/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370200",
        "nomeCompactado": "Rafhael Dantas",
        "nome": "Rafhael Dantas da Silva",
        "email": "rafhael_d@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/rafhael-dantas-42248216/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370340",
        "nomeCompactado": "Ramon Pereira",
        "nome": "Ramon Pereira Fernandes de Sousa",
        "email": "ramonpfsousa@gmail.com",
        "avatar": "20082370340.jpg",
        "linkedin": "https://www.linkedin.com/in/ramonpfsousa/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370137",
        "nomeCompactado": "Renan Gadelha",
        "nome": "Renan Marques Gadelha Rodrigues",
        "email": "renangadelha@yahoo.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037111",
        "nomeCompactado": "Rebeca Matias",
        "nome": "Rebeca Barreto Matias Dantas",
        "linkedin": "https://www.linkedin.com/in/rebeca-mahéo-5a98b12a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370247",
        "nomeCompactado": "Renato Ribeiro",
        "nome": "Renato Neves Ribeiro",
        "email": "potonho@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370712",
        "nomeCompactado": "Rharon Guedes",
        "nome": "Rharon Maia Guedes",
        "email": "rhar00n@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037112",
        "nomeCompactado": "Rhavy Guedes",
        "nome": "Rhavy Maia Guedes",
        "linkedin": "https://www.linkedin.com/in/rhavy-guedes-b7519b88/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370043",
        "nomeCompactado": "Ricardo Anastacio",
        "nome": "Ricardo Anastacio de Souza",
        "email": "ricardoanastacio.ip@gmail.com",
        "linkedin": "https://www.linkedin.com/in/ricardo-anastácio-de-souza-4b055584/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "031037082",
        "nomeCompactado": "Ricardo Nóbrega",
        "nome": "Ricardo do Amaral Nóbrega",
        "linkedin": "https://www.linkedin.com/in/ricardo-nóbrega-csm®-ba50843a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20011013081",
        "nomeCompactado": "Rimenes Ribeiro",
        "nome": "Rimenes Farias Ribeiro",
        "email": "rima@rimenesribeiro.com",
        "avatar": "20011013081.jpg",
        "curso": "cstt",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/rimenes/",
        "github": "https://github.com/rimenes",
        "twitter": "https://www.instagram.com/rimenes/"
      },
      {
        "id": "20101370371",
        "nomeCompactado": "Rivania Silva",
        "nome": "Rivania de Sousa Barros da Silva",
        "email": "rivaniabarros@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370393",
        "nomeCompactado": "Roberto Teixeira",
        "nome": "Roberto Teixeira de Carvalho Filho",
        "linkedin": "https://www.linkedin.com/in/roberto-teixeira-de-carvalho-355943138/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370263",
        "nomeCompactado": "Robismar Fragoso",
        "nome": "Robismar Rodrigues Fragoso",
        "email": "prfrobismar@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370069",
        "nomeCompactado": "Rodolfo Forte",
        "nome": "Rodolfo Gonçalves de Sousa Forte",
        "email": "rodo_forte@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/rodolfoforte/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370108",
        "nomeCompactado": "Rodrigo Barbosa",
        "nome": "Rodrigo Barbosa Costa de Carvalho",
        "email": "rodrigocarvalho88@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/rodrigobcc/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370373",
        "nomeCompactado": "Rodrigo Gouveia",
        "nome": "Rodrigo de Araujo Gouveia",
        "linkedin": "https://www.linkedin.com/in/rodrigo-gouveia-32612236/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370153",
        "nomeCompactado": "Rogério Nóbrega",
        "nome": "Rogério César da Nóbrega",
        "email": "rogeriocnobrega@gmail.com",
        "avatar": "20091370153.jpg",
        "linkedin": "https://www.linkedin.com/in/rogeriocnobrega/",
        "github": "https://github.com/rogersdk",
        "facebook": "https://www.facebook.com/rogeriocesar.danobrega",
        "twitter": "https://twitter.com/rogersdk_",
        "instagram": "https://www.instagram.com/rogeriocesardanobrega/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20111380353",
        "nomeCompactado": "Romáryo Ricardo",
        "nome": "Romáryo de Lima Ricardo",
        "email": "romaryoricardo@gmail.com",
        "avatar": "20111380353.jpeg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/romaryo-ricardo-99363931/",
        "facebook": "https://www.facebook.com/romaryoricardo"
      },
      {
        "id": "20081370282",
        "nomeCompactado": "Romero Medeiros",
        "nome": "Romero Meireles Fernandes de Medeiros",
        "email": "romero.mfm@gmail.com",
        "linkedin": "https://www.linkedin.com/in/romero-medeiros-3055a529/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037057",
        "nomeCompactado": "Rosberg Linhares",
        "nome": "Rosberg Linhares Lacerda",
        "email": "rosberglinhares@gmail.com",
        "linkedin": "https://www.linkedin.com/in/rosberglinhares/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370339",
        "nomeCompactado": "Samuel Junior",
        "nome": "Samuel Ferreira de Lima Junior",
        "email": "sams862@yahoo.com.br",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20122370397",
        "nomeCompactado": "Samyra Almeida",
        "nome": "Samyra Lara Ferreira de Almeida",
        "email": "samyralara@outlook.com",
        "linkedin": "https://www.linkedin.com/in/samyra-lara-almeida/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370340",
        "nomeCompactado": "Sandro Araujo",
        "nome": "Sandro Lopes Izidro Araujo",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370509",
        "nomeCompactado": "Saulo Oliveira",
        "nome": "Saulo Ranieri de Oliveira",
        "email": "sauloroliveira@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20141370500",
        "nomeCompactado": "Sérgio Campos",
        "nome": "Sérgio Campos da Silva",
        "email": "sedarky@gmail.com",
        "linkedin": "https://www.linkedin.com/in/sergio-campos-5355776a/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370280",
        "nomeCompactado": "Sheyla Medeiros",
        "nome": "Sheyla Natália de Medeiros",
        "email": "sheylanatalia@hotmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370029",
        "nomeCompactado": "Silas Rodrigues",
        "nome": "Silas Rodrigues do Rêgo Junior",
        "email": "silasrrjunior@gmail.com",
        "linkedin": "https://www.linkedin.com/in/silas-rodrigues-012aa120/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20141380351",
        "nomeCompactado": "Suelando Alves",
        "nome": "Suelando Alves de Araújo",
        "email": "suelando@live.com",
        "avatar": "20141380351.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/suelando-alves-18224a74",
        "github": "https://github.com/suelando",
        "facebook": "https://www.facebook.com/suelando",
        "lattes": "http://lattes.cnpq.br/0300067483627497"
      },
      {
        "id": "20072370739",
        "nomeCompactado": "Tália Trigueiro",
        "nome": "Tália Bernardino Trigueiro de Almeida",
        "email": "talia.almeida85@gmail.com",
        "linkedin": "https://www.linkedin.com/in/taliatrigueiro/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20092380063",
        "nomeCompactado": "Thamayron Alves",
        "nome": "Thamayron Alves Souza",
        "email": "thamayron@gmail.com",
        "avatar": "20092380063.jpg",
        "curso": "cstrc",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "www.linkedin.com/in/thamayron-alves",
        "github": "https://github.com/thamayron",
        "facebook": "https://www.facebook.com/thamayron.alves",
        "twitter": "https://twitter.com/thamayron/"
      },
      {
        "id": "20101370401",
        "nomeCompactado": "Thais Correia",
        "nome": "Thais Noronha de Medeiros Correia",
        "email": "tnmcorreia@gmail.com",
        "linkedin": "https://www.linkedin.com/in/thaiscorreia/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "github": "https://github.com/ThaisCorreia",
        "instagram": "https://www.instagram.com/tnmcorreia/",
        "avatar": "20101370401.jpg"
      },
      {
        "id": "20062370167",
        "nomeCompactado": "Thales Gadioli",
        "nome": "Thales Gadioli Cavalcante Brito",
        "email": "thales.gadioli@gmail.com",
        "linkedin": "https://www.linkedin.com/in/thales-gadioli-7960b217/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20052370296",
        "nomeCompactado": "Thiberio Nascimento",
        "nome": "Thiberio Oliveira do Nascimento",
        "email": "thiberio.cefet@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20121370555",
        "nomeCompactado": "Thiago Marinho",
        "nome": "Thiago Figueiredo Costa Marinho",
        "email": "fcmthiago@gmail.com",
        "avatar": "20121370555.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true,
        "linkedin": "https://www.linkedin.com/in/fcmthiago/",
        "github": "https://github.com/fcmthiago",
        "facebook": "https://www.facebook.com/FCM.Thiago",
        "lattes": "http://lattes.cnpq.br/8196880164786574",
        "twitter": "https://twitter.com/FCMThiago",
        "instagram": "https://www.instagram.com/fcm_thiago/"
      },
      {
        "id": "042037164",
        "nomeCompactado": "Thiago Sousa",
        "nome": "Thiago Henrique Jacob Oliveira Sousa",
        "email": "thiago.henrique.jacob@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/thiago-sousa-9bb6b416/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370227",
        "nomeCompactado": "Thiago Lima",
        "nome": "Thiago Pinto de Lima",
        "email": "thiagotigaz@gmail.com ",
        "linkedin": "https://www.linkedin.com/in/thiagotigaz/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20082370170",
        "nomeCompactado": "Thiago de Assis",
        "nome": "Thiago Paulino de Assis",
        "email": "thishinoda_@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/tpassis/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20112370041",
        "nomeCompactado": "Tiago Barbosa",
        "nome": "Tiago Cesário Barbosa",
        "email": "tiagocesariob@gmail.com",
        "linkedin": "https://www.linkedin.com/in/tiago-cesario-1a315162/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370061",
        "nomeCompactado": "Tiago Lima",
        "nome": "Tiago de Souza Pereira Lima",
        "email": "tiago_souza_gt7@hotmail.c",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "042037161",
        "nomeCompactado": "Torquato Barbosa",
        "nome": "Torquato Barbosa de Lima Neto",
        "email": "torquatojp@gmail.com",
        "facebook": "https://www.facebook.com/torquato.neto",
        "instagram": "https://www.instagram.com/torquato_neto",
        "linkedin": "https://www.linkedin.com/in/torquatoneto/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "032037062",
        "nomeCompactado": "Ugo Cavalcanti",
        "nome": "Ugo da Costa Cavalcanti",
        "linkedin": "https://www.linkedin.com/in/ugo-cavalcanti/",
        "github": "https://github.com/ugocavalcanti",
        "twitter": "https://twitter.com/ugocavalcanti",
        "email": "ugocavalcanti@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20111370420",
        "nomeCompactado": "Victor Augusto",
        "nome": "Victor Augusto Pinto Costa",
        "email": "victoraweb@gmail.com",
        "linkedin": "https://www.linkedin.com/in/augustovictor/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370039",
        "nomeCompactado": "Vinicius Artur",
        "nome": "Vinicius Souto Brandão Artur",
        "email": "parcimonioso@gmail.com",
        "linkedin": "https://www.linkedin.com/in/viniciusartur/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20061370406",
        "nomeCompactado": "Vitor Hugo Campos",
        "nome": "Vitor Hugo Campos",
        "linkedin": "https://www.linkedin.com/in/vitor-hugo-campos-2b093b20/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20151370197",
        "nomeCompactado": "Walter Guedes",
        "nome": "Walter Edmundo De Souza Guedes",
        "email": "menuseu@gmail.com",
        "linkedin": "https://www.linkedin.com/in/walter-guedes-89637750/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20091370099",
        "nomeCompactado": "Walter Travassos",
        "nome": "Walter Travassos Sarinho",
        "email": "waltertravassos@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/walter-travassos-22b09922/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20102370391",
        "nomeCompactado": "Wandesson Soares",
        "nome": "Wandesson da Silva Soares",
        "linkedin": "https://www.linkedin.com/in/wandesson-soares-79808a6b/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20141370429",
        "nomeCompactado": "Washington Bruno",
        "nome": "Washington Bruno Rodrigues Cavalcante",
        "email": "washingtonbruno@msn.com",
        "linkedin": "https://www.linkedin.com/in/washington-bruno-47009377/",
        "avatar": "20141370429.jpg",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "github": "https://github.com/xinton",
        "facebook": "https://www.facebook.com/washington.bruno1",
        "twitter": "https://twitter.com/Xintonbruno",
        "instagram": "https://www.instagram.com/xintonbruno",
        "egresso": true
      },
      {
        "id": "20131370159",
        "nomeCompactado": "Wender Mariano",
        "nome": "Wender Mariano Laurentino",
        "avatar": "20131370159.jpg",
        "email": "wender.mrn@gmail.com",
        "linkedin": "https://www.linkedin.com/in/wender-mrn/",
        "github": "https://github.com/wendermrn",
        "facebook": "https://www.facebook.com/wender.mrn",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370438",
        "nomeCompactado": "Wesley Menezes",
        "nome": "Wesley Willame Dias Menezes",
        "linkedin": "https://www.linkedin.com/in/wesley-menezes-23468942/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20072370640",
        "nomeCompactado": "Wyllamys Oliveira",
        "nome": "Wyllamys Cavalcante de Oliveira",
        "email": "wyllboy9@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/wyllamyscavalcante/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20081370525",
        "nomeCompactado": "Yan Cavalcanti",
        "nome": "Yan de Oliveira Cavalcanti",
        "email": "yankawalkanty@msn.com",
        "linkedin": "https://www.linkedin.com/in/yan-cavalcanti-a4b847111/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20051370330",
        "nomeCompactado": "Ygor Carvalho",
        "nome": "Ygor Oliveira de Carvalho",
        "email": "ygor.oliveira.carvalho@gmail.com",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20071370220",
        "nomeCompactado": "Yuri Ramos",
        "nome": "Yuri Bezerra Cavalcanti Ramos",
        "email": "yuribcramos@hotmail.com",
        "linkedin": "https://www.linkedin.com/in/yuri-ramos-46019677/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      },
      {
        "id": "20062370035",
        "nomeCompactado": "Jie Lee",
        "nome": "Zan Jie Lee",
        "email": "jiezinho@gmail",
        "linkedin": "https://www.linkedin.com/in/zanjielee/",
        "curso": "cstsi",
        "campus": "ifpb-jp",
        "egresso": true
      }
    ]';

$egressos = json_decode($json, true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Egressos do IFPB</title>
</head>
<body>
    <div class="container">
        <h2 class="center-align">Egressos do IFPB</h2>
        <div class="row">
        <?php
            $cards = "";
            foreach($egressos as $egresso) {
              if(!isset($egresso["linkedin"])) {
                
              } else {
                $cards .= "<div class=\"col s6 m4\">
                          <div class=\"card\">
                          <div class=\"card-image\">";
                
                if(isset($egresso["avatar"])) {
                  $cards .= "<img class=\"responsive-image\" src=\"${egresso["avatar"]}\">";
                } else {
                  $cards .= "<img class=\"responsive-image\" src=\"avatar.png\">";
                }
                  $cards .= "<span class=\"card-title\">${egresso["nomeCompactado"]}</span>
                  </div>
                  <div class=\"card-action\">";

                if(isset($egresso["linkedin"])) {
                  $cards .= "<a href=\"${egresso["linkedin"]}\"><i class=\"fab fa-linkedin fa-2x\"></i></a>";
                } else {
                  $cards .= "<a href=\"#\">Sem link</a>";
                }

                if(isset($egresso["instagram"])) {
                  $cards .= "<a href=\"${egresso["instagram"]}\"><i class=\"fab fa-instagram fa-2x\"></i></a>";
                }

                if(isset($egresso["github"])) {
                  $cards .= "<a href=\"${egresso["github"]}\"><i class=\"fab fa-github fa-2x\"></i></a>";
                }

                if(isset($egresso["facebook"])) {
                  $cards .= "<a href=\"${egresso["facebook"]}\"><i class=\"fab fa-facebook-square fa-2x\"></i></a>";
                }

                if(isset($egresso["twitter"])) {
                  $cards .= "<a href=\"${egresso["twitter"]}\"><i class=\"fab fa-twitter fa-2x\"></i></a>";
                }
                    
                $cards .= "</div>
                </div>
                </div>";
            }}
            echo $cards;
        ?>
        </div>
    </div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>