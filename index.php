<?php
// OURIA SKIN THERAPY — index.php
$phone_display = "07 79 22 91 13";
$phone_wa      = "213779229113"; // format international pour lien WhatsApp
$insta_url     = "https://www.instagram.com/ouria.skin_therapy/";
$insta_marque  = "https://www.instagram.com/dermo_cosmetic_ouria/";
$adresse       = "Reghaia, Ouled Haddadj, Alger";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ouria Skin Therapy — Soins médico-esthétiques</title>
<link rel="icon" type="image/png" href="images/logo.png">
<meta name="description" content="Ouria Skin Therapy — soins médico-esthétiques à Reghaia : Hydrafacial, Oxygénothérapie, PRP, Microneedling.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
/* ============================================
   OURIA SKIN THERAPY — style.css
   Palette : blanc cassé / beige + aubergine foncé + or
   ============================================ */

:root{
  --cream:        #FAF6F1;
  --beige:        #EFE3D6;
  --aubergine:    #3C1B2E;
  --aubergine-2:  #5C2B47;
  --gold:         #C9A46A;
  --text-dark:    #2A1620;
  --text-soft:    #6E5A63;
  --white:        #FFFFFF;

  --font-display: 'Cormorant Garamond', serif;
  --font-body:    'Jost', sans-serif;

  --radius-lg: 40px;
  --radius-md: 20px;
  --shadow-soft: 0 20px 50px rgba(60, 27, 46, 0.10);
}

*{ margin:0; padding:0; box-sizing:border-box; }

html{ scroll-behavior:smooth; }

body{
  font-family: var(--font-body);
  color: var(--text-dark);
  background: var(--cream);
  overflow-x:hidden;
}

h1,h2,h3, .logo, .stair-phrase{
  font-family: var(--font-display);
}

a{ text-decoration:none; color:inherit; }
ul{ list-style:none; }
img{ max-width:100%; display:block; }

.eyebrow{
  font-size:0.72rem;
  letter-spacing:0.32em;
  text-transform:uppercase;
  color: var(--gold);
  font-weight:500;
  margin-bottom:14px;
  display:block;
}

/* ============ NAVBAR ============ */
.navbar{
  position:fixed;
  top:0; left:0; right:0;
  z-index:1000;
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:18px 6%;
  transition: all 0.4s ease;
  background: var(--aubergine);
  box-shadow: var(--shadow-soft);
}
.navbar.scrolled{
  padding:12px 6%;
  background: var(--aubergine-2);
}
.nav-logo{
  display:flex;
  align-items:center;
  gap:12px;
  font-family: var(--font-display);
  font-size:1.5rem;
  font-style:italic;
  font-weight:700;
  letter-spacing:0.02em;
  color: var(--white);
}
.nav-logo-img{
  width:46px;
  height:46px;
  border-radius:50%;
  object-fit:cover;
  border:2px solid var(--gold);
  flex-shrink:0;
}

.nav-links{
  display:flex;
  gap:38px;
  align-items:center;
  overflow-x:auto;
  scrollbar-width:none;
  -ms-overflow-style:none;
}
.nav-links::-webkit-scrollbar{ display:none; }
.nav-links a{
  font-size:0.88rem;
  font-weight:600;
  letter-spacing:0.05em;
  color: var(--white);
  position:relative;
  padding:4px 0;
  display:flex;
  align-items:center;
  gap:7px;
  white-space:nowrap;
  flex-shrink:0;
  transition: color 0.3s ease;
}
.nav-links a svg{ width:15px; height:15px; opacity:0.95; }
.nav-links a::after{
  content:'';
  position:absolute;
  bottom:-2px; left:0;
  width:0; height:1px;
  background: var(--gold);
  transition: width 0.3s ease;
}
.nav-links a:hover::after{ width:100%; }
.nav-links a:hover{ color: var(--gold); }

.nav-cta{
  background: var(--gold);
  color: var(--aubergine) !important;
  padding:10px 24px;
  border-radius:30px;
  font-size:0.85rem;
  font-weight:700;
  letter-spacing:0.06em;
}
.nav-cta::after{ display:none; }

.nav-burger{ display:none !important; }

/* ============ HERO ============ */
.hero{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:flex-start;
  position:relative;
  padding:140px 6% 80px;
  background:
    radial-gradient(circle at 15% 20%, rgba(201,164,106,0.08), transparent 40%),
    radial-gradient(circle at 85% 80%, rgba(92,43,71,0.06), transparent 45%),
    var(--cream);
}

.hero-inner{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:40px;
  max-width:1180px;
  width:100%;
}

/* video, dead center, arched frame echoing the brand's arch motif */
.hero-video-frame{
  position:relative;
  width:340px;
  flex-shrink:0;
  order:2;
}
.hero-video-frame video{
  width:100%;
  height:460px;
  object-fit:cover;
  border-radius: 200px;
  border:10px solid var(--white);
  outline:2px solid var(--aubergine);
  outline-offset:6px;
  box-shadow: var(--shadow-soft);
}

/* staircase text block, stepping down beside the video */
.hero-stair{
  order:1;
  display:flex;
  flex-direction:column;
  gap:26px;
  max-width:520px;
}
.hero-stair .stair-logo{
  align-self:flex-start;
  background: var(--aubergine);
  color: var(--white);
  font-size:3rem;
  font-style:italic;
  font-weight:800;
  letter-spacing:0.03em;
  padding:16px 34px;
  border-radius:4px 24px 4px 24px;
  box-shadow: var(--shadow-soft);
}
.hero-stair .stair-sub{
  align-self:flex-start;
  margin-left:34px;
  font-size:0.85rem;
  font-weight:700;
  letter-spacing:0.28em;
  text-transform:uppercase;
  color: var(--aubergine);
}
.hero-stair .stair-phrase{
  align-self:flex-start;
  margin-left:68px;
  font-size:2rem;
  font-weight:700;
  font-style:italic;
  line-height:1.3;
  color: var(--aubergine-2);
  max-width:460px;
}
.hero-stair .stair-line{
  align-self:flex-start;
  margin-left:102px;
  width:60px;
  height:1px;
  background: var(--gold);
}

/* ============ SECTIONS — alternating framed cards ============ */
.section-wrap{
  padding:60px 6% 10px;
}
.section-card{
  max-width:1200px;
  margin:0 auto 60px;
  border-radius: var(--radius-lg);
  padding:70px 6%;
  box-shadow: var(--shadow-soft);
}
.section-card.bg-cream{ background: var(--white); }
.section-card.bg-beige{ background: var(--beige); }

.section-head{
  text-align:center;
  max-width:620px;
  margin:0 auto 50px;
}
.section-head h2{
  font-size:2.6rem;
  color: var(--aubergine);
  font-weight:600;
}
.section-head p{
  color: var(--text-soft);
  margin-top:12px;
  font-size:0.98rem;
  line-height:1.6;
}

/* ---- Services grid ---- */
.services-grid{
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  gap:30px;
}
.service-card{
  background: var(--white);
  border-radius: var(--radius-md);
  overflow:hidden;
  box-shadow: 0 12px 30px rgba(60,27,46,0.08);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  flex: 1 1 240px;
  max-width:260px;
}
.service-card:hover{
  transform:translateY(-8px);
  box-shadow: 0 20px 40px rgba(60,27,46,0.16);
}
.service-photo{
  width:100%; height:210px; overflow:hidden;
  position:relative;
}
.service-photo img{
  width:100%; height:100%; object-fit:cover;
  transition: transform 0.5s ease;
}
.service-card:hover .service-photo img{ transform:scale(1.08); }
.service-body{ padding:22px 20px 26px; text-align:center; }
.service-body h3{
  font-size:1.35rem;
  color: var(--aubergine);
  margin-bottom:8px;
  font-weight:600;
}
.service-body p{
  font-size:0.85rem;
  color: var(--text-soft);
  line-height:1.55;
}

/* ---- Tarifs ---- */
.tarifs-list{
  max-width:640px;
  margin:0 auto;
  display:flex;
  flex-direction:column;
  gap:0;
}
.tarif-row{
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  padding:16px 4px;
  border-bottom:1px dashed rgba(60,27,46,0.18);
  font-style:italic;
}
.tarif-row:last-child{ border-bottom:none; }
.tarif-row span:first-child{
  font-family: var(--font-display);
  font-size:1.2rem;
  color: var(--text-dark);
}
.tarif-row span:last-child{
  font-family: var(--font-body);
  font-style:normal;
  font-weight:600;
  color: var(--aubergine);
  white-space:nowrap;
  padding-left:20px;
}

/* ---- Formation ---- */
.formation-list{
  max-width:560px;
  margin:0 auto;
  display:grid;
  gap:16px;
}
.formation-item{
  display:flex;
  align-items:center;
  gap:16px;
  background: var(--white);
  padding:16px 22px;
  border-radius:14px;
  box-shadow: 0 8px 20px rgba(60,27,46,0.06);
}
.formation-item .num{
  font-family:var(--font-display);
  font-style:italic;
  color: var(--gold);
  font-size:1.3rem;
  width:28px;
}
.formation-item span.label{ font-size:0.95rem; color:var(--text-dark); }

/* ---- Contact ---- */
.contact-grid{
  display:grid;
  grid-template-columns: 1fr 1fr;
  gap:50px;
  align-items:stretch;
}
.contact-info{
  display:flex;
  flex-direction:column;
  gap:22px;
  justify-content:center;
}
.contact-item{
  display:flex;
  align-items:center;
  gap:16px;
}
.contact-item .icon-circle{
  width:46px; height:46px;
  border-radius:50%;
  background: var(--aubergine);
  display:flex; align-items:center; justify-content:center;
  flex-shrink:0;
}
.contact-item .icon-circle svg{ width:20px; height:20px; fill:var(--white); }
.contact-item a, .contact-item span.txt{
  font-size:0.95rem;
  color: var(--text-dark);
}
.contact-item a:hover{ color: var(--aubergine); }

.social-row{ display:flex; gap:14px; margin-top:10px; }
.social-row a{
  width:44px; height:44px;
  border-radius:50%;
  background: var(--beige);
  display:flex; align-items:center; justify-content:center;
  transition: background 0.3s ease, transform 0.3s ease;
}
.social-row a svg{ width:19px; height:19px; fill:var(--aubergine); }
.social-row a:hover{ background: var(--aubergine); transform:translateY(-4px); }
.social-row a:hover svg{ fill: var(--white); }

.map-frame{
  border-radius: var(--radius-md);
  overflow:hidden;
  box-shadow: var(--shadow-soft);
  min-height:340px;
}
.map-frame iframe{ width:100%; height:100%; min-height:340px; border:0; }

/* ---- Footer ---- */
footer{
  text-align:center;
  padding:36px 6% 30px;
  color: var(--text-soft);
  font-size:0.82rem;
}
footer .foot-logo{
  font-family:var(--font-display);
  font-style:italic;
  color:var(--aubergine);
  font-size:1.3rem;
  margin-bottom:8px;
  display:block;
}

/* ============ RESPONSIVE ============ */
@media (max-width:1024px){
  .service-card{ flex-basis: 220px; }
  .contact-grid{ grid-template-columns:1fr; }
}

@media (max-width:860px){
  .hero-inner{ flex-direction:column; gap:40px; }
  .hero-stair{ order:1; align-items:center; max-width:100%; }
  .hero-stair .stair-logo,
  .hero-stair .stair-sub,
  .hero-stair .stair-phrase,
  .hero-stair .stair-line{ margin-left:0; align-self:center; text-align:center; }
  .hero-video-frame{ order:2; width:280px; }
  .hero-video-frame video{ height:380px; }
}

@media (max-width:720px){
  .navbar{ padding:14px 4%; gap:10px; }
  .nav-links{ gap:16px; }
  .nav-links a{ font-size:0.72rem; gap:4px; }
  .nav-links a svg{ width:12px; height:12px; }
  .nav-cta{ padding:8px 14px; font-size:0.75rem; }
  .nav-logo{ font-size:1rem; gap:6px; }
  .nav-logo-img{ width:32px; height:32px; }
  .service-card{ flex-basis:100%; max-width:100%; }
  .section-card{ padding:50px 6%; border-radius:24px; }
  .section-head h2{ font-size:2.1rem; }
}

@media (prefers-reduced-motion: reduce){
  *{ transition:none !important; animation:none !important; }
}

</style>
</head>
<body>

<!-- ============ NAVBAR ============ -->
<nav class="navbar" id="navbar">
  <a href="#accueil" class="nav-logo">
    <img src="images/logo.png" alt="Ouria Skin Therapy" class="nav-logo-img">
    <span>Ouria Skin Therapy</span>
  </a>

  <ul class="nav-links" id="navLinks">
    <li><a href="#accueil">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 11.5 12 4l9 7.5"/><path d="M5 10v9h14v-9"/></svg>
      Accueil</a></li>
    <li><a href="#services">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3c3 3 5 6 5 9a5 5 0 0 1-10 0c0-3 2-6 5-9Z"/></svg>
      Services</a></li>
    <li><a href="#tarifs">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 7h16M4 12h16M4 17h10"/></svg>
      Tarifs</a></li>
    <li><a href="#formation">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 4 2 8l10 4 10-4-10-4Z"/><path d="M6 10v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/></svg>
      Formation</a></li>
    <li><a href="#contact" class="nav-cta">Contact</a></li>
  </ul>
</nav>

<!-- ============ HERO ============ -->
<header class="hero" id="accueil">
  <div class="hero-inner">

    <div class="hero-stair">
      <span class="stair-logo">Ouria</span>
      <span class="stair-sub">Skin Therapy</span>
      <p class="stair-phrase">« Votre peau mérite autant de douceur, d'attention et de soin que vous en offrez à celles que vous aimez. »</p>
      <span class="stair-line"></span>
    </div>

    <div class="hero-video-frame">
      <video src="videos/vd.mp4" autoplay muted loop playsinline></video>
    </div>

  </div>
</header>

<!-- ============ SERVICES ============ -->
<section class="section-wrap" id="services">
  <div class="section-card bg-cream">
    <div class="section-head">
      <span class="eyebrow">Nos soins</span>
      <h2>Our Services</h2>
      <p>Des protocoles médico-esthétiques précis, pensés pour révéler la peau, pas la masquer.</p>
    </div>

    <div class="services-grid">

      <div class="service-card">
        <div class="service-photo"><img src="images/hydrafacial.jpg" alt="Hydrafacial + EMS"></div>
        <div class="service-body">
          <h3>Hydrafacial + EMS</h3>
          <p>Nettoyage en profondeur, exfoliation douce et stimulation musculaire pour un teint frais et raffermi.</p>
        </div>
      </div>

      <div class="service-card">
        <div class="service-photo"><img src="images/prp.jpg" alt="PRP visage et cheveux"></div>
        <div class="service-body">
          <h3>PRP visage &amp; cheveux</h3>
          <p>Plasma riche en plaquettes pour régénérer la peau du visage et renforcer la densité capillaire.</p>
        </div>
      </div>

      <div class="service-card">
        <div class="service-photo"><img src="images/microneedling.jpg" alt="Microneedling avec protocole thérapeutique"></div>
        <div class="service-body">
          <h3>Microneedling</h3>
          <p>Protocole thérapeutique par micro-perforations pour relancer le collagène et affiner le grain de peau.</p>
        </div>
      </div>

      <div class="service-card">
        <div class="service-photo"><img src="images/mesotherapie.jpg" alt="Mésothérapie"></div>
        <div class="service-body">
          <h3>Mésothérapie</h3>
          <p>Injection de nutriments ciblés pour nourrir la peau en profondeur et raviver son éclat naturel.</p>
        </div>
      </div>

      <div class="service-card">
        <div class="service-photo"><img src="images/skinbooster.jpg" alt="Skinbooster"></div>
        <div class="service-body">
          <h3>Skinbooster</h3>
          <p>Acide hyaluronique injecté finement pour une hydratation profonde et durable de la peau.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ TARIFS ============ -->
<section class="section-wrap" id="tarifs">
  <div class="section-card bg-beige">
    <div class="section-head">
      <span class="eyebrow">Investir dans sa peau</span>
      <h2>Tarifs Visage</h2>
      <p>Des soins sur-mesure, à des tarifs transparents.</p>
    </div>

    <div class="tarifs-list">
      <div class="tarif-row"><span>Hydrafacial</span><span>8 000 DA</span></div>
      <div class="tarif-row"><span>Oxygénofacial</span><span>7 000 DA</span></div>
      <div class="tarif-row"><span>Microneedling</span><span>8 000 DA</span></div>
      <div class="tarif-row"><span>Mésothérapie</span><span>7 000 DA</span></div>
      <div class="tarif-row"><span>Soin Lifting EMS + Radiofréquence</span><span>3 500 DA</span></div>
      <div class="tarif-row"><span>PRP + Mésothérapie</span><span>15 000 DA</span></div>
      <div class="tarif-row"><span>Skinbooster</span><span>18 000 DA</span></div>
    </div>
  </div>
</section>

<!-- ============ FORMATION ============ -->
<section class="section-wrap" id="formation">
  <div class="section-card bg-cream">
    <div class="section-head">
      <span class="eyebrow">Se former</span>
      <h2>Programme de formation</h2>
      <p>Pour les professionnelles de la santé souhaitant se spécialiser en médico-esthétique.</p>
    </div>

    <div class="formation-list">
      <div class="formation-item"><span class="num">01</span><span class="label">Anatomie de la peau</span></div>
      <div class="formation-item"><span class="num">02</span><span class="label">Hydrafacial</span></div>
      <div class="formation-item"><span class="num">03</span><span class="label">Dermapen (Microneedling)</span></div>
      <div class="formation-item"><span class="num">04</span><span class="label">Mésothérapie</span></div>
      <div class="formation-item"><span class="num">05</span><span class="label">Peeling</span></div>
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section class="section-wrap" id="contact">
  <div class="section-card bg-beige">
    <div class="section-head">
      <span class="eyebrow">Nous rejoindre</span>
      <h2>Contact</h2>
      <p>Une question, une réservation ? Écrivez-nous ou passez au centre.</p>
    </div>

    <div class="contact-grid">
      <div class="contact-info">

        <div class="contact-item">
          <span class="icon-circle">
            <svg viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.2 1L6.6 10.8Z"/></svg>
          </span>
          <a href="tel:+<?= $phone_wa ?>"><?= $phone_display ?></a>
        </div>

        <div class="contact-item">
          <span class="icon-circle">
            <svg viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/></svg>
          </span>
          <span class="txt"><?= $adresse ?></span>
        </div>

        <div class="contact-item">
          <span class="icon-circle">
            <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm3.4 15c-2-1.4-4.8-1.4-6.8 0-1.6-1.2-2.6-3-2.6-5a7 7 0 1 1 12 5Z"/></svg>
          </span>
          <a href="<?= $insta_marque ?>" target="_blank" rel="noopener">@dermo_cosmetic_ouria — notre marque</a>
        </div>

        <div class="social-row">
          <a href="<?= $insta_url ?>" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24"><path d="M12 2c2.7 0 3.05.01 4.12.06 1.06.05 1.79.22 2.43.47.66.26 1.22.6 1.77 1.15.55.55.9 1.11 1.15 1.77.25.64.42 1.37.47 2.43.05 1.07.06 1.42.06 4.12s-.01 3.05-.06 4.12c-.05 1.06-.22 1.79-.47 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.64.25-1.37.42-2.43.47-1.07.05-1.42.06-4.12.06s-3.05-.01-4.12-.06c-1.06-.05-1.79-.22-2.43-.47a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.25-.64-.42-1.37-.47-2.43C2.01 15.05 2 14.7 2 12s.01-3.05.06-4.12c.05-1.06.22-1.79.47-2.43.26-.66.6-1.22 1.15-1.77A4.9 4.9 0 0 1 5.45.53C6.09.28 6.82.11 7.88.06 8.95.01 9.3 0 12 0Zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm5.2-8.4a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0Z" transform="translate(0,2)"/></svg>
          </a>
          <a href="https://wa.me/<?= $phone_wa ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.1c-1.6 0-3.1-.4-4.4-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.1 8.1 0 1 1 12 20.1Zm4.5-6c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.7.8-.8 1-.2.2-.3.2-.5.1-.2-.1-1-.4-1.9-1.2-.7-.6-1.2-1.4-1.3-1.6-.1-.2 0-.4.1-.5l.4-.4c.1-.1.2-.3.2-.4.1-.2 0-.3 0-.5s-.6-1.5-.8-2c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.2-.9.9-.9 2.2s1 2.5 1.1 2.7c.1.2 2 3 4.7 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.1-1.2-.1-.1-.2-.2-.5-.3Z"/></svg>
          </a>
        </div>
      </div>

      <div class="map-frame">
        <iframe
          src="https://www.google.com/maps?q=Reghaia+Ouled+Haddadj+Alger&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section>

<footer>
  <span class="foot-logo">Ouria Skin Therapy</span>
  &copy; <?= date("Y") ?> — Tous droits réservés
</footer>

<script>
// OURIA SKIN THERAPY — script.js

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 40) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

</script>
</body>
</html>