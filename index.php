<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="google-site-verification" content="VwLKTjouOrccpn8B4LRy2RXGYEyzF_4C1Ah-k8rm4WI" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <!-- <link rel="stylesheet" href="lineicons.css" /> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Hello Michelle</title>
  </head>

  <body>
    <nav>
      <ul>
        <li class="logo">
          <img
            src="img/hello_Michelle_logo_1.png"
            height="100"
            alt="Hello Michelle Logo"
          />
        </li>
        <li class="nav-link">
          <a href="#"><i class="fa fa-home"></i> Accueil</a>
        </li>
        <li class="nav-link">
          <a href="#services"><i class="fa fa-tag"></i>Nos services</a>
        </li>
        <li class="nav-link">
          <a href="#demander_devis"
            ><i class="fa fa-ruler"></i>Demander un devis</a
          >
        </li>
      </ul>
      <div class="btn-primary" id="btn-modal">Parlons-en</div>
    </nav>

    <section class="banniere">
      <!-- <div class="img-banniere">
        <img src="img/028-producto_orig.jpg" alt="background Hello Michelle" />
      </div> -->
      <div class="paragraph">
        <div class="paragraph-container">
          <h1>
            Bienvenue <br />
            chez <br />
            Hello Michelle
          </h1>
          <p>
            Choisissez le meilleur partenaire pour l'externalisation de vos
            services.
          </p>
          <p>
            <strong> Avec un tarif très abordable </strong>
          </p>

          <div class="btn-secondary">
            <span>Découvrir</span>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
      </div>
    </section>
<?php include("modal.php") ?>
    
    <div class="d-section" id="services">
      <h2 class="section-title">Nos services</h2>
      <div class="list-article" data-aos="fade-up" data-aos-duration="4000">
        <article class="card">
          <div class="card-image">
            <img src="img/Service client SAV.jpg" alt="Services client" />
          </div>
          <div class="card-content">
            <i class="lni lni-user"></i>
            <h3>Services client / SAV</h3>
            <ul>
              <li>Gestion de commande et livraison</li>
              <li>Traitement SAV</li>
              <li>Assistance technique</li>
              <li>Assistance commerciale</li>
            </ul>
          </div>
        </article>
        <article class="card">
          <div class="card-image">
            <img src="img/Back Office.jpg" alt="Back Office" />
          </div>
          <div class="card-content">
            <i class="lni lni-cog"></i>
            <h3>Back Office</h3>
            <ul>
              <li>Traitement d'images</li>
              <li>Mail, Chat & Messenger</li>
              <li>Traitement d'avis client</li>
              <li>Traitement de dossiers</li>
            </ul>
          </div>
        </article>
        <article class="card">
          <div class="card-image">
            <img src="img/Assistanat virtuel.jpg" alt="Assistanat Virtuel" />
          </div>
          <div class="card-content">
            <i class="lni lni-support"></i>
            <h3>ASSISTANAT VIRTUEL</h3>
            <ul>
              <li>Assistance administrative</li>
              <li>Assistance comptable</li>
              <li>Assistance recrutement</li>
              <li>Assistance exécutive</li>
            </ul>
          </div>
        </article>
        <article class="card">
          <div class="card-image">
            <img src="img/Community management.jpg" alt="Services client" />
          </div>
          <div class="card-content">
            <i class="lni lni-facebook"></i>
            <h3>Community Management</h3>
            <ul>
              <li>Création de visuels</li>
              <li>Montage vidéo</li>
              <li>Gestion des réseaux sociaux</li>
              <li>Optimisation SEO</li>
            </ul>
          </div>
        </article>
        <article class="card">
          <div class="card-image">
            <img src="img/Developpement WEB.jpg" alt="Developpement web" />
          </div>
          <div class="card-content">
            <i class="lni lni-code-alt"></i>
            <h3>Développement web</h3>
            <ul>
              <li>Création de SiteWeb</li>
              <li>Developpement d'application web</li>
            </ul>
          </div>
        </article>
      </div>
    </div>
    <div class="d-section" id="about">
      <h2 class="section-title">Qui sommes nous ?</h2>
      <article class="article-who">
        <div class="image_aside">
          <img class="logo" src="img/hello_Michelle_logo.png" alt="" />
          <div class="rec1" data-aos="fade-up" data-aos-duration="8000"></div>
          <div class="rec2" data-aos="fade-up" data-aos-duration="6000"></div>
        </div>
        <div
          class="article-content"
          data-aos="fade-up-left"
          data-aos-duration="100"
        >
          <p data-aos="fade-left" data-aos-duration="1000">
            <strong>Hello Michelle</strong> est une entreprise basée à
            Tananarive, Madagascar, spécialisée dans le traitement des services
            externalisés. Depuis notre création en janvier 2023, nous avons
            travaillé avec passion pour offrir des solutions d'assistanat
            virtuel, de Community management, de service client et de back
            office de qualité supérieure à des prix compétitifs.
          </p>
          <p data-aos="fade-left" data-aos-duration="1300">
            Notre mission est simple : aider les moyennes entreprises
            francophones à se développer en choisissant notre expertise. Chez
            <strong>Hello Michelle</strong>, nous croyons fermement que la
            qualité ne devrait pas être un luxe inaccessible, c'est pourquoi
            nous nous engageons à fournir des services de premier ordre à des
            tarifs abordables.
          </p>
          <p data-aos="fade-left" data-aos-duration="1400">
            Nous sommes impatients de collaborer avec vous pour transformer
            votre entreprise et contribuer à votre succès.
          </p>
        </div>
      </article>
    </div>
    <div class="d-section" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="section-title">Notre équipe</h2>
      <article class="article-team">
        <div class="card-team" data-aos="fade-up" data-aos-duration="1000">
          <div class="card-img-team">
            <img src="img/Capture-removebg-preview.png" alt="" />
          </div>
          <div class="card-team-desc">
            <div class="card-team-name">Marcellin</div>
            <div class="card-team-position">
              <span>CEO</span>
              <span>Projets</span>
              <span>Formation</span>
              <span>Stratégie</span>
            </div>
          </div>
        </div>
        <div class="card-team" data-aos="fade-up" data-aos-duration="1400">
          <div class="card-img-team">
            <img src="img/Hoby-removebg-preview.png" alt="" />
          </div>
          <div class="card-team-desc">
            <div class="card-team-name">Michelle</div>
            <div class="card-team-position">
              <span>Recrutement</span>
              <span>Administration</span>
              <span>Comptabilité</span>
            </div>
          </div>
        </div>
        <div class="card-team" data-aos="fade-up" data-aos-duration="1500">
          <div class="card-img-team">
            <img src="img/anicet.jpg" alt="" />
          </div>
          <div class="card-team-desc">
            <div class="card-team-name">Anicet</div>
            <div class="card-team-position">
              <span>Communication</span>
              <span>Community Manager</span>
              <span>Qualité</span>
            </div>
          </div>
        </div>
        <div class="card-team" data-aos="fade-up" data-aos-duration="1400">
          <div class="card-img-team">
            <img src="img/fandresena.png" alt="" />
          </div>
          <div class="card-team-desc">
            <div class="card-team-name">Fandresena</div>
            <div class="card-team-position">
              <span>Reporting & support</span>
              <span>Supervision</span>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="d-section" id="demander_devis">
      <h2 class="section-title">Demander un devis</h2>
      <article class="article-contact">
        <div class="adresse-info">
          <div class="detail-adresse">
            <div class="logo">
              <img src="img/hello_Michelle_logo.png" alt="" />
            </div>
            <div class="detail-adresse-info">
              <span
                ><i class="lni lni-phone"></i
                ><strong>+261 33 37 493 68</strong></span
              >
              <span
                ><i class="lni lni-map-marker"></i
                ><strong>Antananarivo, Madagascar</strong></span
              >
            </div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241599.2430118235!2d47.3477012642339!3d-18.88760589738861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07de34f1f4eb3%3A0xdf110608bcc082f9!2sTananarive!5e0!3m2!1sfr!2smg!4v1712778130141!5m2!1sfr!2smg"
            width="auto"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <form action="">
          <div>
            <p>Nous vous répondrons sous un délai de 24 à 48h</p>
          </div>
          <div class="parent-form-group">
            <div class="form-group">
              <label for="nom">Nom *</label>
              <input type="text" name="nom" id="nom" required />
            </div>
            <div class="form-group">
              <label for="email">Adresse email *</label>
              <input type="email" name="email" id="email" required />
            </div>
            <div class="form-group">
              <label for="message">Message *</label>
              <textarea
                name="Message"
                id="Message"
                cols="30"
                rows="10"
              ></textarea>
            </div>
            <input type="submit" class="btn-primary" value="Envoyer" />
          </div>
        </form>
      </article>
    </div>
    <footer>
      <div class="legal">
        <a href="#">Politique de confidentialité</a>
        <a href="#">Mention légale</a>
      </div>
      <div class="cpright">©Copyright 2024 | Hello Michelle</div>
      <div class="logo">
        <img src="img/hello_Michelle_logo.png" alt="Hello Michelle logo" />
      </div>
    </footer>
  </body>
</html>
<script src="js/aos.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/index.js"></script>
