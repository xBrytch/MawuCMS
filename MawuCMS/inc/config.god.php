<?php

// Php 
date_default_timezone_set('Europe/Paris'); # Time zone
ini_set('display_errors', 0);

// Hashs salts (If players are already registered, changing the salts will invalidate their password !)
# For more secure, change it each salt for random string (between 15 and 25)
define('PASSWORD_SALT', 'ChAnGEItFoRRaNdOm');
define('PASSWORD_SALT2', '2ChAnGEItFoRRaNdOm2');
define('PASSSTAFF_SALT', '3ChAnGEItFoRRaNdOm3');
define('PASSSTAFF_SALT2', '4ChAnGEItFoRRaNdOm4');
	  
// Mail
define('SMTP_HOST', 'smtp.gmail.com'); # SMTP Host(Example: smtp.gmail.com for google gmail)
define('SMTP_PORT', '587'); # SMTP Port
define('SMTP_ENCRYPTION', 'tls'); # SMTP Encryption(null/ssl/tls) (Use tls on port 587 for gmail)
define('SMTP_USERNAME', '@gmail.com'); # SMTP Your mail
define('SMTP_PASSWORD', ''); # SMTP Password
	  
// Configuration
$Holo = array(
'panel'         =>     'housekeeping',
'htmllang'      =>     'en',
'name'          =>     'MawuCMS',
'in_auto_dark'  =>     '18', # Start of night mode in hours(For automatic theme user)
'en_auto_dark'  =>     '6', # End of night mode in hours(For automatic theme user)

// Links
'url'           =>     'http://localhost',
'client_url'    =>     'http://localhost/hotel',
'cameraurl'     =>     'http://localhost/WulezSWF/camera/',
'thumbsurl'     =>     'http://localhost/WulezSWF/camera/thumbnails/',
'avatar'        =>     'http://habbo.com.br/habbo-imaging/avatarimage?figure=',
'url_badges'    =>     'http://localhost/WulezSWF/c_images/album1584/',

// Register
'mision'        =>     'MawuCMS',
'monedas'       =>     '500',
'duckets'       =>     '160',
'diamants'      =>     '5',
'gender'        =>     'M',
'look'          =>     'ch-215-82.hr-100-42.lg-270-1408.ha-1003-64.hd-180-1370',

// Social
'contactemail'  =>     'contactmail@your.server',
'facebook'      =>     '',
'twitter'       =>     '',
'discordinvl'   =>     '',
'discordwid'    =>     '',

// Security
'minrank'       =>     '5',                                            # Rank min staff
'minhkr'        =>     '5',                                            # Rank min for access in hk: Login
'maxrank'       =>     '8',                                            # Rank max staff
	
'hkr_animator'  =>     '5',                                            # Rank min for access in hk: News, news edit, badge create
'hkr_moderator' =>     '6',                                            # Rank min for access in hk: Bans
'hkr_manager'   =>     '7',                                            # Rank min for access in hk: Maintenance, rank, pass create
'hkr_owner'     =>     '8',                                            # Rank min for access in hk: Owner first pass create
	
'recaptcha_on'  =>     'false',
'recaptcha'     =>     ''); # ReCaptcha Key

// CMS page Language
$Lang = array(

// Logo
'logo.tag'           =>     'BETA',

// Menu
'menu.index'         =>     'In??cio',
'menu.login'         =>     'Entrar',
'menu.loginbutton'   =>     'Entrar na sua Conta',
'menu.register'      =>     'Registrar',
'menu.articles'      =>     'Not??cias',
'menu.gallery'       =>     'Galeria',
'menu.famous'        =>     'Famosos',
'menu.team'          =>     'Equipe',
'menu.shop'          =>     'Loja',
'menu.support'       =>     'Suporte',
'menu.hotel'         =>     'Entrar no Hotel',
'menu.myprofile'     =>     'Ver meu Perfil',
'menu.settings'      =>     'Configura????es',
'menu.logout'        =>     'Desconectar',
'menu.onlines'       =>     'Onlines no Hotel',
'menu.back'          =>     'Voltar',

// Lyrics
'lyrics.1'           =>     'Crie uma conta agora mesmo.',
'lyrics.2'           =>     'O tempo ?? apenas uma ilus??o.',
'lyrics.3'           =>     'Quando voc?? menos esperar...',
'lyrics.4'           =>     'Chame os seus amigos.',
'lyrics.5'           =>     'Carregando mensagem divertida...',
'lyrics.6'           =>     'J?? comeu pudim hoje?',
'lyrics.7'           =>     'Voc?? quer batatas fritas?',
'lyrics.8'           =>     'O que acha que ser rico?',
'lyrics.9'           =>     'Olhe para um lado. Olhe para o outro.',
'lyrics.10'          =>     'Siga o pato amarelo.',
'lyrics.11'          =>     'Eu gosto da sua camiseta.',
'lyrics.12'          =>     'Ganhe lindos emblemas.',
'lyrics.13'          =>     'Carregando o universo de pixels.',
'lyrics.14'          =>     'Seja destaque em nosso Hotel.',
'lyrics.15'          =>     'N??o ?? voc??, sou eu.',

// Index
'index.titulo'       =>     'In??cio',
'index.noticias'     =>     'Not??cias',
'index.alertnews'    =>     '<b>Aten????o!</b> Voc?? consegue ler as nossas not??cias, mas para quaisquer intera????es, voc?? precisa estar conectado(a) em sua conta!',
'index.latestusers'  =>     'Recentemente chegados no '.$Holo['name'].'',
'index.aboutlastusr' =>     '<b>Curiosidade:</b> Aqui voc?? pode conferir os ??ltimos <b>Quinze</b> registrados no '.$Holo['name'].', ser?? que quem voc?? chamou est?? aqui?',
'index.gallery'      =>     'Galeria de Fotos',
'index.alertphotos'  =>     '<b>Psiu!</b> Quer publicar uma foto ou conferir mais fotos? Conecte em sua conta agora mesmo.',

// Login
'login.titulo'       =>     'Entrar',
'login.username'     =>     'Nome de Usu??rio(a):',
'login.password'     =>     'Sua Senha:',
'login.human'        =>     'Voc?? ?? Humano?',
'login.confirm'      =>     'Acessar',
'login.register'     =>     'Criar uma nova Conta',
'login.forgot'       =>     'Esqueceu a sua senha?',
'login.error1'       =>     'N??o deixe campos vazios.',
'login.error2'       =>     'Nome de usu??rio inv??lido.',
'login.error3'       =>     'Voc?? n??o ?? um rob??? Verifique sua identidade.',

// Forgot
'forgot.titulo'      =>     'Esqueci minha Senha',
'forgot.back'        =>     'Voltar',
'forgot.confirm'     =>     'Pronto',
'forgot.iperror'     =>     'Seu IP ?? diferente do IP usado para solicitar uma nova senha! Por motivos de seguran??a, use a mesma conex??o de internet(IP) para fazer a solicita????o. Se voc?? tem um IP din??mico, sem sorte, provavelmente mudou nesse meio tempo! Maiores d??vidas ou problemas, entre em <a href="/support">contato com a gente</a>.',
'forgot.error1'      =>     'Alguma coisa de errado aconteceu, tente novamente...',
'forgot.alertlink'   =>     '<p class="alert alert-secondary"><a class="text-inherit" data-toggle="tooltip" title="" data-original-title="Por sua seguran??a, verifique se o site come??a com '.$Holo['url'].'/"><img src="'.$Holo['url'].'/Mawu/image/securlink.png">&ensp;<font color="green"></font>'.$Holo['url'].'/</a></p>',
'forgot.changetitle' =>     'Sua nova Senha',
'forgot.new1'        =>     'Utilize, pelo menos, 6 caracteres. Inclua, pelo menos, uma letra, um n??mero e um caracter especial.',
'forgot.new2'        =>     'Crie uma nova senha:',
'forgot.new3'        =>     'Repita a sua nova senha:',
'forgot.resetmsg1'   =>     'N??o deixe os campos vazios.',
'forgot.resetmsg2'   =>     'As novas senhas n??o coincidem.',
'forgot.resetmsg3'   =>     'Sua senha foi alterada com Sucesso! Aguarde...',
'forgot.resetmsg4'   =>     'Algo deu errado, verifique tudo e tente novamente.',
'forgot.resetmsg5'   =>     'Nome ou Email incorretos, tente novamente.',
'forgot.resetmsg6'   =>     'Alguma coisa deu bem errado, tente novamente e verifique todos os campos.',
'forgot.alsuccess'   =>     'Acabamos de enviar um e-mail com um link para voc?? reestabelecer a sua senha.<br><br><b>IMPORTANTE! Lembre-se de verificar a pasta "lixo" e "correio n??o desejado".</b>',
'forgot.uremail'     =>     'Nome de usu??rio da sua conta:',
'forgot.urusern'     =>     'O email da sua conta:',

// Email
'email.text1'        =>     'Ol??',
'email.text2'        =>     'Um patinho de borracha nos disse que voc?? precisou mudar a senha da conta '.$Holo['name'].' registrada com o seguinte e-mail:',
'email.text3'        =>     'O link abaixo perder?? a validade em 10 minutos, portanto seja r??pido!',
'email.text4'        =>     'Clique aqui para mudar a sua senha com seguran??a',
'email.text5'        =>     'Voc?? n??o pediu essa mudan??a? Ok, pedimos desculpas por essa mensagem. Basta ignor??-la e a sua senha atual continuar?? a mesma!',
'email.text6'        =>     'Confirma????o de mudan??a de senha',

// Register
'register.titulo'    =>     'Criar nova Conta',
'register.yourname'  =>     'Escolha um Nome:',
'register.nameinfo'  =>     'Seu nome pode conter letras mai??sculas, min??sculas, n??meros e caracteres especiais como _-=?!@:.,',
'register.pass'      =>     'Crie uma Senha:',
'register.repass'    =>     'Repita a sua senha:',
'register.passtext'  =>     'Utilize, pelo menos, 6 caracteres. Inclua, pelo menos, uma letra, um n??mero e um caracter especial.',
'register.yourmail'  =>     'Seu E-mail:',
'register.mailtext'  =>     'Voc?? vai precisar deste endere??o de e-mail para realizar a????es importantes no '.$Holo['name'].'. Por favor, utilize email v??lido.',
'register.captcha'   =>     'Voc?? ?? Humano?',
'register.confirm'   =>     'Criar nova Conta',
'register.haveone1'  =>     'J?? tem uma conta?',
'register.haveone2'  =>     'Entre agora',
'register.error1'    =>     'Algo deu errado, tente novamente e verifique todos os dados.',
'register.error2'    =>     'Voc?? precisa escolher um nome.',
'register.error3'    =>     'Voc?? precisa escolher um e-mail.',
'register.error4'    =>     'As senhas n??o s??o as mesmas, verifique e tente novamente.',
'register.error5'    =>     'Seu nome de usu??rio ?? muito curto.',
'register.error6'    =>     'Algo de errado est?? acontecendo com seu nome, tente outro nome.',
'register.error7'    =>     'Voc?? n??o ?? um rob??? Verifique sua identidade.',

// Me
'me.titulo'          =>     'In??cio',
'me.rooms'           =>     'Quartos destaques',
'me.roomby'          =>     'Criado por',
'me.roomwith'        =>     'Com',
'me.roomhave'        =>     'Tem',
'me.roomlikes'       =>     'curtidas',
'me.roomusers'       =>     'pessoas nele',
'me.roomtext'        =>     '<b>Confuso?</b> Os seis quartos com mais Curtidas v??o sempre aparecer destacados aqui.',
'me.news'            =>     'Not??cias',
'me.achievements'    =>     'Com mais Conquistas',
'me.respects'        =>     'Com mais Respeitos',
'me.lastphoto'       =>     '??ltima foto',
'me.photoby'         =>     'Foto de',
'me.seephotos'       =>     'Ver todas',
'me.achievepoints'   =>     'Pontos de Conquista.',
'me.respectreceived' =>     'Respeitos recebidos.',
'me.respectgiven'    =>     'Respeitos dados.',
'me.yourbadges'      =>     'Alguns dos seus Emblemas',
'me.badgealert'      =>     '<b>Ei!</b> Estamos mostrando apenas <b>6</b> Emblemas, mas voc?? tem atualmente:',
'me.smallbadges'     =>     'emblemas.',
'me.stats'           =>     'Suas estat??sticas.',
'me.statsdesc'       =>     'Confira o que voc?? possui no Hotel:.',
'me.stats1'          =>     'Moedas',
'me.stats2'          =>     'Duckets',
'me.stats3'          =>     'Diamantes',
'me.stats4'          =>     'Respeitos',
'me.stats5'          =>     'Emblemas',
'me.stats6'          =>     'Quartos',
'me.stats7'          =>     'Conquistas',

// News
'news.titulo'        =>     'Not??cias',
'news.categorys'     =>     'Categorias',
'news.cat1'          =>     'Promo????es',
'news.cat2'          =>     'Coisas gr??tis',
'news.cat3'          =>     'Mobis',
'news.cat4'          =>     ''.$Holo['name'].' Hotel',
'news.cat5'          =>     'Sistema',
'news.cat6'          =>     'AO VIVO',
'news.whatis'        =>     'Que isso?...',
'news.newstext'      =>     'Aqui vai ser mostrado at?? <b>45</b> ??ltimas not??cias postadas, sejam elas Promo????es, Eventos ou Informativos.',
'news.winbadge'      =>     'Ganhe este Emblema',
'news.category'      =>     'Categoria',
'news.have1'         =>     'Existem',
'news.have2'         =>     'not??cias nesta categoria.',
'news.comments'      =>     'Coment??rios',
'news.makecomment'   =>     'Escreva um coment??rio',
'news.alertcant'     =>     'N??o ?? mais poss??vel fazer coment??rios nesta not??cia',
'news.alertlogin'    =>     'Voc?? precisa <a href="/login">entrar</a> para publicar um coment??rio.',
'news.confirm'       =>     'Comentar',
'news.alertc1'       =>     '<b>Sucesso!</b> Voc?? deixou o seu coment??rio.',
'news.alertc2'       =>     'Eita, alguma coisa deu errado, que tal tentar novamente?...',
'news.alertc3'       =>     'Voc?? n??o pode deixar um coment??rio aqui...',
'news.alertc4'       =>     'Alguma coisa deu errado com o seu <i>c??digo de seguran??a</i>, tente reentrar em nosso Hotel.',
'news.alertc5'       =>     'Mantenha o seu coment??rio sem palavras inadequadas, e prometeremos n??o excluir sua conta ou algo semelhante a isso como puni????o, haha.',
'news.alertc6'       =>     '<b>EITA!</b> Voc?? est?? tentando fazer o que n??o pode, voc?? s?? pode deixar <b>3</b> coment??rios Por not??cia.',

// Gallery
'gallery.titulo'     =>     'Galeria',
'gallery.desc'       =>     'Entrar no Hotel e usar a C??mera',
'gallery.whatis'     =>     'Que isso?...',
'gallery.whatdesc'   =>     'As ??ltimas <b>45</b> fotos tiradas e publicadas dentro do Hotel, v??o aparecer nesta p??gina, inclusive ver as suas.',
'gallery.aleatorys'  =>     'Foto aleat??ria',
'gallery.fixed'      =>     'Essa ?? uma boa foto!',
'gallery.photoby'    =>     'Foto de',
'gallery.moderation' =>     'Modera????o:',
'gallery.moddelete'  =>     'Deletar essa foto.',
'gallery.error1'     =>     '<b>Sucesso!</b> A foto foi apagada.',
'gallery.error2'     =>     '<b>Ei:</b> Ou essa foto n??o existe, ou ela j?? foi apagada...',
'gallery.error3'     =>     '<b>Ops!</b> O ID dessa foto n??o ?? v??lido.',
'gallery.error4'     =>     '<b>Ops!</b> Seu c??digo de seguran??a est?? invalido, cuidado e tente novamente.',
'gallery.timeah'     =>     'Postada h??',
'gallery.visual'     =>     'Visualiza????es',
'gallery.roomby'     =>     'Foto tirada no quarto de',
'gallery.moreof'     =>     'Mais fotos de',

// Famous
'famous.titulo'      =>     'Famosos',
'famous.noshow'      =>     'voc?? n??o vai aparecer nesta p??gina porque voc?? configurou sua conta para ficar <b>Oculta</b>!',
'famous.morediamonds'=>     'Com mais Diamantes',
'famous.diadesc'     =>     'Essa categoria mostra apenas as <b>Cinco</b> pessoas mais ricos de <font color="#0AA8EC">Diamantes</font> dentro do '.$Holo['name'].' Hotel.',
'famous.diamonds'    =>     'Diamantes',
'famous.moreduckets' =>     'Com mais Duckets',
'famous.duckdesc'    =>     'Essa categoria mostra apenas as <b>Cinco</b> pessoas mais ricos de <font color="#822273">Duckets</font> dentro do '.$Holo['name'].' Hotel.',
'famous.duckets'     =>     'Duckets',
'famous.morecredits' =>     'Com mais Moedas',
'famous.creditdesc'  =>     'Essa categoria mostra apenas as <b>Cinco</b> pessoas mais ricos de <font color="#FF9030">Moedas</font> dentro do '.$Holo['name'].' Hotel.',
'famous.credits'     =>     'Moedas',

// Team
'team.titulo'        =>     'Equipe',
'team.desc'          =>     'Nossos membros atuais',
'team.descinfo'      =>     'A Equipe ?? feita por membros a partir de Modera????o at?? Cria????o geral, eles est??o aqui dispostos a fazer tudo por voc??s e pelo nosso Hotel.',
'team.hide1'         =>     '<b>Ei...</b> Como vimos que voc?? ??',
'team.hide2'         =>     'precisamos lhe informar que existem cargos ocultos aqui, sendo eles -',

// Support
'support.titulo'     =>     'Suporte',
'support.alert1'     =>     '<b>Sabia?</b> A ferramenta de Suporte/Ajuda pode se tornar melhor se voc?? estiver logado em uma conta! <a href="/login">Clique aqui para entrar</a>',
'support.alert2'     =>     '<h3>Nosso e-mail</h3><br><b>Eita</b>, como voc?? n??o est?? em conex??o com nenhuma conta, n??o podemos te oferecer muitos recursos no quesito <i>Ajuda/Suporte</i>, mas podemos ser bem paciente e atenciosos com voc?? caso queira nos mandar um e-mail, nosso endere??o de e-mail para suporte ?? - <b>'.$Holo['contactemail'].'</b>, as respostas podem demorar at?? 24h.',
'support.alert2desc' =>     '(Voc?? pode utilizar o e-mail para informar algum erro no sistema, alguma sugest??o ou tentar entrar em a????o contra ou a favor de um banimento)',
'support.alert3'     =>     '<h3>Outras formas de solicitar ajuda</h3><br>Se caso voc?? n??o consiga ou ache muito dif??cil nos contatar via e-mail, temos tamb??m um grupo no aplicativo <b>Discord</b>, la sim voc?? pode achar outros usu??rios e at?? mesmo conseguir ajuda de forma instant??nea.<br><br><a href="'.$Holo['discordinvl'].'" target="_blank" class="btn btn-primary">Entrar no grupo do Discord</a>',
'support.send'       =>     'Enviar um Ticket',
'support.form1'      =>     'Nome de usu??rio:',
'support.form2'      =>     'Categoria:',
'support.form3'      =>     'Conte o que acontece:',
'support.form4'      =>     'Enviar Ticket',
'support.catdesc'    =>     'Escolha uma categoria...',
'support.cat1'       =>     'Ajuda & Suporte',
'support.cat2'       =>     'Reclama????es',
'support.cat3'       =>     'Erros & Bugs',
'support.cat4'       =>     'Sugest??es',
'support.cat5'       =>     'Quero entrar em Contato',
'support.username'   =>     'N??o ?? poss??vel alterar nomes de usu??rio.',
'support.desc5'      =>     'Seja bem claro no que for digitar, em caso de abuso do sistema, voc?? ser?? permanentemente banido.',

// Maintenance
'maintenance.text1'  =>     '<b>ATEN????O!</b> '.$Holo['name'].' Hotel est?? temporariamente fechado para Manuten????es, o motivo seria -',
'maintenance.text2'  =>     'Tentaremos voltar o mais r??pido poss??vel, prometemos!...',

// Banned
'banned.titulo'      =>     'Banimento',
'banned.youreban'    =>     'A sua conta est?? banida do '.$Holo['name'].'.',
'banned.text1'       =>     'Sua conta est?? banida at??',
'banned.text2'       =>     'de',
'banned.text3'       =>     'pelo motivo:',
'banned.button'      =>     'Atualizar P??gina',

// Error
'error.titulo'       =>     'Erro',
'error.erro1'        =>     'P??gina n??o encontrada',
'error.erro2'        =>     'O link pode estar quebrado ou a p??gina pode ter sido removida. Verifique se o link que voc?? est?? tentando abrir est?? correto.',
'error.erro3'        =>     'Voltar a p??gina inicial',
'error.erro4'        =>     'Voltar aonde estava',

// Footer
'footer.allrights'   =>     'Todos direitos reservados.',
'footer.devby'       =>     'Site desenvolvido por',
'footer.text'        =>     'Este site n??o est?? afiliada com, patrocinada por, apoiada por, ou principalmente aprovada pela Sulake Oy ou suas empresas Afiliadas, '.$Holo['name'].' pode utilizar as marcas registradas e outras propriedades intelectuais do Habbo, que est??o permitidas sob a Pol??tica de F?? Sites Habbo.',

);
	
?>
