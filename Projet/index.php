<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Devoir à la maison</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
		<header>
			<div>
				<img src="img/logo_msp_Part.png" width="365" height="73">
			</div>

			<div role="search" id="recherche_conteneur">
				<form action="https://mon.service-public.fr/portail/faces/jsp/liste_res_tout.jsp" method="get">
					<input type="text" name="fullText" id="rechercheInput"value="Rechercher" title="Rechercher">
					<input type="submit" value="ok" title="Lancer la recherche"   id="ok_recherche">
				</form>
			</div>				
		</header>

		<nav>
			<ul>
				<li><a href="/jsp/en_savoir_plus_mon_tableau_de_bord.jsp">Mon tableau de bord</a>
					<ul class="sous-menu">
						<li><a href="jsp/mes_liaisons.jsp">&gt; Mes liaisons de comptes</a></li>
						<li><a href="jsp/mon_calendrier.jsp">&gt; Mon calendrier</a></li>
						<li><a href="jsp/mon_suivi.jsp">&gt; Mon suivi</a></li>
					</ul> 
					<span class="flecheActive"></span>
				</li>
				<li><a href="/jsp/en_savoir_plus_mes_documents.jsp">Mes documents</a>
					<ul class="sous-menu">
						<li><a href="jsp/msp_documents.jsp">&gt; Mon porte-documents</a></li>
						<li><a href="jsp/bloc_note.jsp">&gt; Mon bloc-notes</a></li>
					</ul> 
				</li>	
				<li><a href="jsp/en_savoir_plus_mon_profils.jsp">Mon profil</a>
					<ul class="sous-menu">
						<li><a href="jsp/mon_etat_civil.jsp">&gt; Mes coordonnées</a></li>
						<li><a href="jsp/ma_communaute.jsp">&gt; Mes contacts</a></li>
						<li><a href="jsp/mes_options.jsp">&gt; Mes options</a></li>
					</ul> 
				</li>
				<li><a href="jsp/en_savoir_plus_catalogue_des_services.jsp">Catalogue des services</a>
					<ul class="sous-menu">
						<li><a href="jsp/les_demarches.jsp?menu=true">&gt; Les démarches</a></li>
						<li><a href="jsp/les_formulaires.jsp?menu=true">&gt; Les formulaires CERFA</a></li>
						<li><a href="hjsp/les_partenaires.jsp?menu=true">&gt; Les organismes partenaires</a></li>
						<li><a href="http://lannuaire.service-public.fr/" target="_blank">&gt; L'annuaire de l'administration</a></li>
						<li><a href="http://www.service-public.fr/" target="_blank">&gt; Le guide des droits et démarches</a></li>
					</ul> 
				</li>
			</ul>
		</nav>
		
		<ul class="home">
			<li><a href="https://mon.service-public.fr/portail/">Accueil</a></li>
			<li>&nbsp;&gt;&nbsp;Mon tableau de bord</li>
		</ul>

		<section>
			<main>
				<h1>Mon tableau de bord</h1>
				<h5>Découvrez ci-dessous ce que vous pouvez faire dans la rubrique « Mon tableau de bord ».</h5>
				<div class="main-container">
					<div class="main-item">
						<a href="jsp/mes_liaisons.jsp"><img src="img/402_429_Liaisons.JPG" width="60" height="60">Mes liaisons de comptes</a>
						<ul>
							<li>Accédez d'un clic à vos comptes administratifs sans ressaisir vos identifiants et mots de passe.</li>
							<li>Gérez vos liaisons de comptes.</li>
						</ul>
					</div>
					<div class="main-item">
						<a href="jsp/mon_calendrier.jsp"><img src="img/605_403_418_picto_agenda.gif" width="60" height="60">Mon calendrier </a>
						<ul>
							<li>Notez et visualisez toutes vos échéances administratives.</li>
							<li>Recevez des alertes par courriel pour vos rappels  d'échéances.</li>
						</ul>
					</div>
					<div class="main-item"> 
						<a href="jsp/mon_suivi.jsp"><img src="img/401_430_suivi.jpg" width="60" height="60">Mon suivi </a>
						<ul>
							<li>Suivez l'avancement de vos démarches en ligne.</li>
							<li>Consultez les messages envoyés.</li>
						</ul>
					</div>
				</div>
			</main>

			<aside>
				<div class="astuces">
					<h3>Les astuces</h3>
					<ul>
						<li><a href="jsp/authent/page_detail_astuce_MSP.jsp?idAstuce=1001" target="_self" title="Lien vers Accédez depuis mon.service-public.fr à une nouvelle génération de démarches en ligne">Accédez depuis mon.service-public.fr à une nouvelle génération de démarches en ligne</a></li>
					</ul>
					<div class="all all-astuces"><a href="jsp/authent/toutes_astuces_msp.jsp">Toutes les astuces</a></div>
				</div>
				<div class="actuality">
					<h3>Les actualités</h3>
					<ul>
						<li><a href="jsp/authent/page_detail_actualite_MSP.jsp?idActu=11644" title="Lien vers Votre avis nous intéresse…"><span class="date">22/10/2012</span> Que pensez-vous de MSP ?</a></li>
						<li><a href="jsp/authent/page_detail_actualite_MSP.jsp?idActu=11823" title="Lien vers Une nouvelle démarche dans le Tarn"><span class="date">10/10/2012</span> Le Conseil général du Tarn vient de déployer, une nouvelle téléprocédure .</a></li>
						<li><a href="jsp/authent/page_detail_actualite_MSP.jsp?idActu=11643" title="Lien vers Déclarez en ligne le décès d'un proche "><span class="date">30/07/2012</span> Une nouvelle démarche en ligne sur MSP</a></li>
						<li><a href="jsp/authent/page_detail_actualite_MSP.jsp?idActu=11631" title="Lien vers Pour les départements numérotés de 50 à 974 il ne vous reste que quelques jours pour télé-déclarer vos revenus"><span class="date">15/06/2012</span> Accédez à votre déclaration de revenus depuis MSP</a></li>
					</ul>
					<div class="all all-actuality"><a href="jsp/authent/tout_actualites_msp.jsp">Toutes les actualités</a></div>
				</div>
			</aside>
		</section>

		<footer class="bg-blue text-center text-lg-start">
			<div class="container p-4">
				<div class="row">
						<div class="col-lg-1 col-md-6 mb-4 mb-md-0">
								<span><a href="http://www.ojd-internet.com/chiffres-internet/7111-service-public.fr" target="_blank"><img src="img/logo-ojd.png" alt="logo du OJD"></a></span>
						</div>
						<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
								<p>Assistance et contact</p>
								<ul>
									<li><a href="jsp/authent/plan_du_site.jsp" target="_self" ><span title="">Plan du site</span></a></li>
									<li><a href="jsp/authent/contact.jsp" target="_self"><span title="">Contact</span></a></li>
									<li><a href="jsp/authent/aide.jsp" target="_self"><span title="">Aide</span></a></li>
									<li><a href="jsp/authent/faqs.jsp" target="_self" ><span title="">Questions fréquentes</span></a></li>
								</ul>
						</div>
						<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
								<p>Informations légales</p>
								<ul>
									<li><a href="jsp/authent/mentions_legales.jsp"><span title="">Mentions légales</span></a></li>
									<li><a href="jsp/authent/conditions_generales_utilisation.jsp" target="_self"><span title="">Conditions générales d'utilisation</span></a></li>
									<li><a href="http://www.service-public.fr/%C3%A0-propos-du-site/001371.html" target="_blank"><span title="Répertoire des informations publiques - Nouvelle fenêtre">Répertoire des informations publiques</span></a></li>
								</ul>
						</div>
						<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
								<p>Qualité de service</p>
								<ul>
									<li><a href="jsp/authent/accessibilite.jsp"><span title="">Accessibilité</span></a></li>
									<li><a href="jsp/authent/securite.jsp" ><span title="">Sécurité</span></a></li>
									<li><a href="jsp/authent/engagement_qualite.jsp"><span title="">Engagement qualité</span></a></li>
									<li><a href="jsp/authent/statistiques.jsp" ><span title="">Statistiques</span></a></li>
								</ul>
						</div>
						<div class="col-lg-2 col-md-6 mb-4 mb-md-0">
								<p>Partenariat</p>
								<ul>
									<li><a href="jsp/authent/partenaires.jsp"><span title="">Nos organismes partenaires</span></a></li>
									<li><a href="jsp/authent/devenir_partenaire.jsp"><span title="">Devenir partenaire ?</span></a></li>
								</ul>
						</div>
				</div>
			</div>
			<div class="target">
				<a target="_blank" href="jsp/authent/a_propos_de_la_DGME.jsp">Tous droits réservés - Direction Générale de Modernisation de l'Etat - 2012 </a> | <a title="A propos du site" href="jsp/authent/a_propos_du_site.jsp">A propos de mon.service-public.fr</a>
			</div>
		</footer>
</body>
</html> 