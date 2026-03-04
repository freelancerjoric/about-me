<?php
$name = "Joric Francisco";
$brand = "JF Tech Solutions";
$roles = ["UI/UX Designer", "Web Developer", "Mobile Developer", "Full-Stack Programmer"];
$email = "joric@jftechsolutions.com";
$phone = "+63 912 345 6789";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $brand ?> — Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet"/>
  <style>
    :root{--blue-bright:#1A9EF5;--blue-mid:#0F7DC7;--navy-dark:#1C2B4A;--navy-deeper:#111D33;--navy-deepest:#0A1220;--accent:#00D4FF;--accent2:#4FC3F7;--text-light:#E8F4FD;--text-muted:#8BAFC8;--glass:rgba(26,158,245,0.07);--glass-border:rgba(26,158,245,0.18);--card-bg:rgba(17,29,51,0.85);}
    *{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:'Exo 2',sans-serif;background:var(--navy-deepest);color:var(--text-light);overflow-x:hidden;cursor:none;}
    .cursor{width:12px;height:12px;background:var(--accent);border-radius:50%;position:fixed;pointer-events:none;z-index:99999;transform:translate(-50%,-50%);transition:transform .1s,width .2s,height .2s;mix-blend-mode:screen;}
    .cursor-ring{width:36px;height:36px;border:1.5px solid rgba(0,212,255,.5);border-radius:50%;position:fixed;pointer-events:none;z-index:99998;transform:translate(-50%,-50%);transition:transform .15s ease-out,width .25s,height .25s;}
    body::before{content:'';position:fixed;inset:0;z-index:0;background-image:linear-gradient(rgba(26,158,245,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(26,158,245,.04) 1px,transparent 1px);background-size:60px 60px;pointer-events:none;}
    .orb{position:fixed;border-radius:50%;filter:blur(80px);pointer-events:none;z-index:0;animation:floatOrb 12s ease-in-out infinite;}
    .orb-1{width:400px;height:400px;background:rgba(26,158,245,.12);top:-100px;left:-100px;}
    .orb-2{width:300px;height:300px;background:rgba(0,212,255,.08);bottom:100px;right:-50px;animation-delay:-4s;}
    .orb-3{width:250px;height:250px;background:rgba(15,125,199,.10);top:50%;left:50%;animation-delay:-8s;}
    @keyframes floatOrb{0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(30px,-20px) scale(1.05);}66%{transform:translate(-20px,30px) scale(.95);}}

    /* ── NAVBAR ── */
    #navbar{position:fixed;top:0;width:100%;z-index:1000;padding:18px 0;transition:all .4s ease;}
    #navbar.scrolled{background:rgba(10,18,32,.92);backdrop-filter:blur(20px);padding:12px 0;border-bottom:1px solid var(--glass-border);box-shadow:0 4px 30px rgba(0,0,0,.4);}
    .nav-brand{font-family:'Orbitron',monospace;font-weight:900;font-size:1.3rem;color:var(--blue-bright)!important;letter-spacing:2px;text-decoration:none;}
    .nav-brand span{color:var(--accent);}
    .navbar-nav .nav-link{font-family:'Exo 2',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:2px;text-transform:uppercase;color:var(--text-muted)!important;padding:8px 16px!important;position:relative;transition:color .3s;}
    .navbar-nav .nav-link::after{content:'';position:absolute;bottom:4px;left:16px;right:16px;height:1px;background:var(--accent);transform:scaleX(0);transform-origin:right;transition:transform .3s ease;}
    .navbar-nav .nav-link:hover{color:var(--accent)!important;}
    .navbar-nav .nav-link:hover::after{transform:scaleX(1);transform-origin:left;}
    .navbar-toggler{border:1px solid var(--glass-border);}

    /* ── HERO ── */
    #hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding:100px 0 60px;}
    .hero-badge{display:inline-block;background:var(--glass);border:1px solid var(--glass-border);border-radius:50px;padding:6px 20px;font-size:.78rem;letter-spacing:3px;text-transform:uppercase;color:var(--accent);margin-bottom:28px;animation:fadeDown .8s ease both;}
    .hero-name{font-family:'Orbitron',monospace;font-weight:900;font-size:clamp(2.8rem,6vw,5.5rem);line-height:1.05;letter-spacing:-1px;animation:fadeDown .9s ease .1s both;}
    .hero-name .first{color:var(--text-light);}
    .hero-name .last{color:transparent;-webkit-text-stroke:2px var(--blue-bright);}
    .hero-role-wrap{margin:24px 0 32px;animation:fadeDown 1s ease .2s both;}
    .hero-role-static{font-size:1.1rem;color:var(--text-muted);margin-right:8px;}
    .hero-role-typed{font-size:1.1rem;color:var(--accent);font-weight:700;letter-spacing:1px;border-right:2px solid var(--accent);padding-right:4px;animation:blink .9s step-end infinite;}
    @keyframes blink{50%{border-color:transparent;}}
    .hero-desc{max-width:520px;color:var(--text-muted);font-size:1rem;line-height:1.8;font-weight:300;animation:fadeDown 1s ease .3s both;}
    .hero-cta{margin-top:40px;display:flex;gap:16px;flex-wrap:wrap;animation:fadeDown 1s ease .4s both;}
    .btn-primary-jf{background:linear-gradient(135deg,var(--blue-bright),var(--blue-mid));color:#fff;border:none;padding:14px 32px;border-radius:4px;font-family:'Exo 2',sans-serif;font-weight:700;font-size:.9rem;letter-spacing:2px;text-transform:uppercase;text-decoration:none;position:relative;overflow:hidden;transition:all .3s ease;display:inline-flex;align-items:center;gap:10px;cursor:pointer;}
    .btn-primary-jf::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,var(--accent),var(--blue-bright));opacity:0;transition:opacity .3s;}
    .btn-primary-jf:hover{transform:translateY(-2px);box-shadow:0 8px 30px rgba(26,158,245,.4);color:#fff;}
    .btn-primary-jf:hover::before{opacity:1;}
    .btn-primary-jf span{position:relative;z-index:1;}
    .btn-outline-jf{background:transparent;color:var(--blue-bright);border:1.5px solid var(--blue-bright);padding:13px 32px;border-radius:4px;font-family:'Exo 2',sans-serif;font-weight:700;font-size:.9rem;letter-spacing:2px;text-transform:uppercase;text-decoration:none;transition:all .3s ease;display:inline-flex;align-items:center;gap:10px;}
    .btn-outline-jf:hover{background:var(--glass);transform:translateY(-2px);box-shadow:0 8px 30px rgba(26,158,245,.15);color:var(--accent);border-color:var(--accent);}

    /* ══════════════════════════════════════
       HERO PHOTO FRAME — PULSE RINGS
       ══════════════════════════════════════ */
    .hero-visual{
      position:relative;
      animation:fadeUp 1s ease .3s both;
      display:flex;align-items:center;justify-content:center;
      /* extra room for the rings */
      padding:60px;
    }

    /* ── Outer ambient glow pool ── */
    .photo-glow-pool{
      position:absolute;
      width:440px;height:440px;
      border-radius:50%;
      background:radial-gradient(circle, rgba(26,158,245,.18) 0%, rgba(0,212,255,.06) 40%, transparent 70%);
      filter:blur(24px);
      animation:glowPulse 4s ease-in-out infinite;
      pointer-events:none;
    }
    @keyframes glowPulse{
      0%,100%{opacity:.7;transform:scale(1);}
      50%{opacity:1;transform:scale(1.08);}
    }

    /* ── Pulse rings — expanding outward and fading ── */
    .pulse-ring{
      position:absolute;
      border-radius:50%;
      border:1.5px solid rgba(26,158,245,.6);
      pointer-events:none;
      animation:ringPulse 3.6s ease-out infinite;
    }
    .pulse-ring:nth-child(1){width:300px;height:300px;animation-delay:0s;}
    .pulse-ring:nth-child(2){width:300px;height:300px;animation-delay:1.2s;}
    .pulse-ring:nth-child(3){width:300px;height:300px;animation-delay:2.4s;}
    @keyframes ringPulse{
      0%  {transform:scale(1);   opacity:.7; border-color:rgba(26,158,245,.7);}
      60% {transform:scale(1.55);opacity:.25;border-color:rgba(0,212,255,.3);}
      100%{transform:scale(1.9); opacity:0;  border-color:rgba(0,212,255,0);}
    }

    /* ── Inner static border ring (decorative) ── */
    .photo-border-ring{
      position:absolute;
      width:296px;height:296px;
      border-radius:50%;
      border:2px solid rgba(26,158,245,.35);
      pointer-events:none;
      box-shadow:0 0 20px rgba(26,158,245,.15), inset 0 0 20px rgba(26,158,245,.08);
    }
    /* Corner accent dots on the inner ring */
    .photo-border-ring::before,
    .photo-border-ring::after{
      content:'';position:absolute;
      width:10px;height:10px;border-radius:50%;
      background:var(--accent);
      box-shadow:0 0 10px var(--accent),0 0 20px rgba(0,212,255,.6);
      top:50%;transform:translateY(-50%);
    }
    .photo-border-ring::before{left:-5px;}
    .photo-border-ring::after{right:-5px;}

    /* ── The actual photo circle ── */
    .hero-photo{
      width:260px;height:260px;
      border-radius:50%;
      overflow:hidden;
      position:relative;
      z-index:5;
      border:3px solid rgba(26,158,245,.5);
      box-shadow:
        0 0 0 6px rgba(26,158,245,.08),
        0 0 40px rgba(26,158,245,.25),
        0 0 80px rgba(0,212,255,.12);
      flex-shrink:0;
    }
    .hero-photo img{
      width:100%;height:100%;
      object-fit:cover;
      display:block;
    }
    /* Placeholder when no photo */
    .hero-photo-placeholder{
      width:100%;height:100%;
      background:linear-gradient(145deg,var(--navy-dark),var(--navy-deeper));
      display:flex;flex-direction:column;
      align-items:center;justify-content:center;
      gap:10px;
    }
    .hero-photo-placeholder i{
      font-size:5rem;color:var(--blue-bright);opacity:.5;
    }
    .hero-photo-placeholder span{
      font-family:'Exo 2',sans-serif;
      font-size:.65rem;letter-spacing:2px;
      text-transform:uppercase;color:var(--text-muted);
      text-align:center;padding:0 16px;
    }

    /* ── Thin orbiting dash ring ── */
    .orbit-dash{
      position:absolute;
      width:330px;height:330px;
      border-radius:50%;
      border:1px dashed rgba(26,158,245,.2);
      pointer-events:none;
      animation:orbitSlow 30s linear infinite;
    }
    .orbit-dash-2{
      width:370px;height:370px;
      border:1px dashed rgba(0,212,255,.1);
      animation:orbitSlow 45s linear infinite reverse;
    }
    @keyframes orbitSlow{to{transform:rotate(360deg);}}
    /* Small node on the orbit ring */
    .orbit-dash::after{
      content:'';position:absolute;
      top:-4px;left:50%;transform:translateX(-50%);
      width:7px;height:7px;border-radius:50%;
      background:var(--blue-bright);
      box-shadow:0 0 8px var(--blue-bright);
    }
    .orbit-dash-2::after{
      top:auto;bottom:-4px;
      background:var(--accent);
      box-shadow:0 0 8px var(--accent);
    }

    /* ── Stat chips ── */
    .stat-chip{background:var(--card-bg);border:1px solid var(--glass-border);backdrop-filter:blur(12px);border-radius:12px;padding:14px 20px;text-align:center;min-width:110px;position:absolute;z-index:10;}
    .stat-chip .num{font-family:'Orbitron',monospace;font-size:1.6rem;font-weight:900;color:var(--accent);display:block;}
    .stat-chip .lbl{font-size:.7rem;letter-spacing:1px;text-transform:uppercase;color:var(--text-muted);}
    .stat-1{top:10px;right:-20px;}
    .stat-2{bottom:10px;right:-10px;}
    .stat-3{bottom:30px;left:-20px;}

    /* ── Scroll indicator ── */
    .scroll-indicator{position:absolute;bottom:40px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:8px;animation:fadeIn 1.5s ease 1s both;}
    .scroll-indicator span{font-size:.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--text-muted);}
    .scroll-mouse{width:24px;height:38px;border:1.5px solid var(--glass-border);border-radius:12px;position:relative;overflow:hidden;}
    .scroll-mouse::after{content:'';width:4px;height:8px;background:var(--accent);border-radius:2px;position:absolute;top:6px;left:50%;transform:translateX(-50%);animation:scrollDot 1.5s ease-in-out infinite;}
    @keyframes scrollDot{0%{top:6px;opacity:1;}100%{top:24px;opacity:0;}}

    /* ── SECTIONS ── */
    section{position:relative;z-index:1;}
    .section-pad{padding:100px 0;}
    .section-label{font-size:.7rem;letter-spacing:4px;text-transform:uppercase;color:var(--accent);margin-bottom:12px;display:flex;align-items:center;gap:12px;}
    .section-label::after{content:'';flex:1;max-width:60px;height:1px;background:var(--glass-border);}
    .section-title{font-family:'Orbitron',monospace;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:900;margin-bottom:16px;}
    .section-title span{color:var(--blue-bright);}
    .section-desc{color:var(--text-muted);font-size:1rem;line-height:1.8;font-weight:300;max-width:520px;}
    .divider{height:1px;background:linear-gradient(90deg,transparent,var(--glass-border),transparent);}
    .skills-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px;}
    .skill-category{background:var(--card-bg);border:1px solid var(--glass-border);border-radius:12px;padding:28px;transition:all .3s ease;position:relative;overflow:hidden;}
    .skill-category::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--blue-bright),transparent);opacity:0;transition:opacity .3s;}
    .skill-category:hover{transform:translateY(-4px);border-color:rgba(26,158,245,.35);box-shadow:0 12px 40px rgba(0,0,0,.3);}
    .skill-category:hover::before{opacity:1;}
    .skill-cat-icon{font-size:1.8rem;color:var(--blue-bright);margin-bottom:14px;}
    .skill-cat-title{font-family:'Orbitron',monospace;font-size:.85rem;letter-spacing:2px;color:var(--text-light);margin-bottom:18px;}
    .skill-bar-wrap{margin-bottom:12px;}
    .skill-bar-label{display:flex;justify-content:space-between;font-size:.8rem;color:var(--text-muted);margin-bottom:6px;}
    .skill-bar-label span:last-child{color:var(--accent);}
    .skill-bar-track{height:4px;background:rgba(255,255,255,.06);border-radius:2px;overflow:hidden;}
    .skill-bar-fill{height:100%;border-radius:2px;background:linear-gradient(90deg,var(--blue-mid),var(--accent));width:0;transition:width 1.2s cubic-bezier(.25,1,.5,1);box-shadow:0 0 8px rgba(0,212,255,.4);}
    .services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;}
    .service-card{background:var(--card-bg);border:1px solid var(--glass-border);border-radius:16px;padding:36px 28px;position:relative;overflow:hidden;transition:all .4s ease;cursor:default;}
    .service-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:0;background:linear-gradient(0deg,rgba(26,158,245,.06) 0%,transparent 100%);transition:height .4s;}
    .service-card:hover{transform:translateY(-6px);border-color:rgba(26,158,245,.4);box-shadow:0 20px 60px rgba(0,0,0,.4);}
    .service-card:hover::after{height:100%;}
    .service-icon-wrap{width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,rgba(26,158,245,.15),rgba(0,212,255,.08));border:1px solid var(--glass-border);display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:var(--blue-bright);margin-bottom:20px;transition:all .3s;}
    .service-card:hover .service-icon-wrap{background:linear-gradient(135deg,var(--blue-bright),var(--blue-mid));color:#fff;box-shadow:0 8px 24px rgba(26,158,245,.35);}
    .service-title{font-family:'Orbitron',monospace;font-size:.95rem;letter-spacing:1px;margin-bottom:12px;}
    .service-desc{font-size:.9rem;color:var(--text-muted);line-height:1.7;font-weight:300;}
    .service-tags{display:flex;gap:8px;flex-wrap:wrap;margin-top:20px;}
    .service-tag{font-size:.7rem;letter-spacing:1px;text-transform:uppercase;color:var(--accent);background:rgba(0,212,255,.08);border:1px solid rgba(0,212,255,.15);border-radius:4px;padding:3px 10px;}
    .filter-bar{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:40px;}
    .filter-btn{background:transparent;border:1px solid var(--glass-border);color:var(--text-muted);padding:8px 20px;border-radius:4px;font-family:'Exo 2',sans-serif;font-size:.8rem;letter-spacing:2px;text-transform:uppercase;cursor:pointer;transition:all .3s;}
    .filter-btn:hover,.filter-btn.active{background:var(--blue-bright);border-color:var(--blue-bright);color:#fff;}
    .portfolio-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:24px;}
    .portfolio-item{position:relative;border-radius:12px;overflow:hidden;background:var(--card-bg);border:1px solid var(--glass-border);cursor:pointer;transition:all .4s ease;aspect-ratio:4/3;}
    .portfolio-item:hover{transform:scale(1.02);box-shadow:0 20px 60px rgba(0,0,0,.5);border-color:rgba(26,158,245,.4);}
    .portfolio-item-inner{width:100%;height:100%;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;}
    .portfolio-mockup{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:3.5rem;opacity:.3;transition:opacity .3s;}
    .portfolio-item:hover .portfolio-mockup{opacity:.15;}
    .portfolio-overlay{position:absolute;inset:0;background:linear-gradient(180deg,transparent 0%,rgba(10,18,32,.95) 100%);padding:24px;display:flex;flex-direction:column;justify-content:flex-end;transition:all .4s;}
    .portfolio-category{font-size:.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--accent);margin-bottom:6px;}
    .portfolio-title{font-family:'Orbitron',monospace;font-size:.95rem;letter-spacing:1px;margin-bottom:8px;}
    .portfolio-desc{font-size:.82rem;color:var(--text-muted);line-height:1.6;opacity:0;transform:translateY(10px);transition:all .3s .05s;}
    .portfolio-item:hover .portfolio-desc{opacity:1;transform:translateY(0);}
    .portfolio-actions{display:flex;gap:10px;margin-top:14px;opacity:0;transform:translateY(10px);transition:all .3s .1s;}
    .portfolio-item:hover .portfolio-actions{opacity:1;transform:translateY(0);}
    .portfolio-btn{width:36px;height:36px;border-radius:50%;background:rgba(26,158,245,.15);border:1px solid var(--glass-border);color:var(--blue-bright);display:flex;align-items:center;justify-content:center;font-size:.85rem;text-decoration:none;transition:all .3s;}
    .portfolio-btn:hover{background:var(--blue-bright);color:#fff;}
    .port-bg-1{background:linear-gradient(135deg,#0d1f3c,#1a2f50);}
    .port-bg-2{background:linear-gradient(135deg,#0d2233,#0f3050);}
    .port-bg-3{background:linear-gradient(135deg,#0d2b1f,#0a3530);}
    .port-bg-4{background:linear-gradient(135deg,#2b0d2d,#1f0a33);}
    .port-bg-5{background:linear-gradient(135deg,#2b1a0d,#33200a);}
    .port-bg-6{background:linear-gradient(135deg,#1a0d2b,#220a33);}
    .lightbox{display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,.9);backdrop-filter:blur(20px);align-items:center;justify-content:center;padding:40px;}
    .lightbox.open{display:flex;animation:fadeIn .3s;}
    .lightbox-inner{background:var(--card-bg);border:1px solid var(--glass-border);border-radius:20px;max-width:700px;width:100%;padding:40px;position:relative;animation:scaleIn .3s ease;}
    @keyframes scaleIn{from{transform:scale(.9);opacity:0;}to{transform:scale(1);opacity:1;}}
    .lightbox-close{position:absolute;top:20px;right:20px;width:36px;height:36px;background:rgba(255,255,255,.05);border:1px solid var(--glass-border);border-radius:50%;color:var(--text-muted);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:1rem;transition:all .3s;}
    .lightbox-close:hover{background:rgba(26,158,245,.2);color:var(--accent);}
    .lightbox-icon{font-size:3.5rem;color:var(--blue-bright);margin-bottom:20px;}
    .lightbox-cat{font-size:.7rem;letter-spacing:3px;text-transform:uppercase;color:var(--accent);margin-bottom:8px;}
    .lightbox-title{font-family:'Orbitron',monospace;font-size:1.4rem;margin-bottom:16px;}
    .lightbox-desc{color:var(--text-muted);line-height:1.8;font-weight:300;margin-bottom:24px;}
    .lightbox-tech{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:28px;}
    .tech-tag{font-size:.75rem;letter-spacing:1px;text-transform:uppercase;color:var(--text-light);background:rgba(26,158,245,.12);border:1px solid var(--glass-border);border-radius:4px;padding:4px 12px;}
    .process-steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:0;position:relative;}
    .process-steps::after{content:'';position:absolute;top:28px;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,var(--glass-border) 20%,var(--glass-border) 80%,transparent);pointer-events:none;}
    .process-step{text-align:center;padding:0 20px 0;}
    .process-num{width:56px;height:56px;border-radius:50%;background:var(--card-bg);border:1px solid var(--glass-border);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;font-family:'Orbitron',monospace;font-size:1rem;font-weight:900;color:var(--blue-bright);position:relative;z-index:1;transition:all .3s;}
    .process-step:hover .process-num{background:var(--blue-bright);color:#fff;box-shadow:0 0 20px rgba(26,158,245,.4);}
    .process-step-title{font-family:'Orbitron',monospace;font-size:.8rem;letter-spacing:1px;margin-bottom:10px;}
    .process-step-desc{font-size:.85rem;color:var(--text-muted);line-height:1.7;}
    .contact-card{background:var(--card-bg);border:1px solid var(--glass-border);border-radius:20px;padding:50px;position:relative;overflow:hidden;}
    .contact-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--blue-bright),var(--accent),transparent);}
    .contact-info-item{display:flex;align-items:flex-start;gap:16px;padding:20px 0;border-bottom:1px solid var(--glass-border);}
    .contact-info-item:last-child{border-bottom:none;}
    .contact-info-icon{width:44px;height:44px;flex-shrink:0;border-radius:10px;background:rgba(26,158,245,.1);border:1px solid var(--glass-border);display:flex;align-items:center;justify-content:center;color:var(--blue-bright);font-size:1rem;}
    .contact-info-label{font-size:.7rem;letter-spacing:2px;text-transform:uppercase;color:var(--text-muted);margin-bottom:4px;}
    .contact-info-value{font-size:.95rem;color:var(--text-light);}
    .contact-form .form-group{margin-bottom:20px;}
    .contact-form label{font-size:.75rem;letter-spacing:2px;text-transform:uppercase;color:var(--text-muted);margin-bottom:8px;display:block;}
    .contact-form .form-control{background:rgba(255,255,255,.04);border:1px solid var(--glass-border);border-radius:8px;color:var(--text-light);padding:12px 16px;font-family:'Exo 2',sans-serif;font-size:.9rem;transition:all .3s;}
    .contact-form .form-control:focus{background:rgba(26,158,245,.06);border-color:var(--blue-bright);box-shadow:0 0 0 3px rgba(26,158,245,.12);color:var(--text-light);outline:none;}
    .contact-form .form-control::placeholder{color:rgba(139,175,200,.4);}
    .contact-form textarea.form-control{min-height:130px;resize:none;}
    .social-links{display:flex;gap:12px;}
    .social-link{width:42px;height:42px;border-radius:10px;background:var(--glass);border:1px solid var(--glass-border);color:var(--text-muted);display:flex;align-items:center;justify-content:center;text-decoration:none;font-size:1rem;transition:all .3s;}
    .social-link:hover{background:var(--blue-bright);color:#fff;border-color:var(--blue-bright);transform:translateY(-3px);box-shadow:0 8px 20px rgba(26,158,245,.3);}
    footer{background:var(--navy-deepest);border-top:1px solid var(--glass-border);padding:32px 0;text-align:center;}
    .footer-brand{font-family:'Orbitron',monospace;font-weight:900;font-size:1.1rem;color:var(--blue-bright);letter-spacing:2px;margin-bottom:8px;}
    .footer-copy{font-size:.82rem;color:var(--text-muted);}
    .footer-copy span{color:var(--accent);}
    .toast-custom{position:fixed;bottom:30px;right:30px;z-index:9999;background:var(--card-bg);border:1px solid rgba(26,158,245,.3);border-radius:12px;padding:16px 24px;display:flex;align-items:center;gap:12px;font-size:.9rem;backdrop-filter:blur(20px);transform:translateX(120%);transition:transform .4s cubic-bezier(.25,1,.5,1);max-width:320px;}
    .toast-custom.show{transform:translateX(0);}
    .toast-icon{font-size:1.2rem;color:#4CAF50;}
    @keyframes fadeDown{from{opacity:0;transform:translateY(-20px);}to{opacity:1;transform:translateY(0);}}
    @keyframes fadeUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
    @keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
    .reveal{opacity:0;transform:translateY(30px);transition:all .7s cubic-bezier(.25,1,.5,1);}
    .reveal.visible{opacity:1;transform:translateY(0);}
    .reveal-delay-1{transition-delay:.1s;}
    .reveal-delay-2{transition-delay:.2s;}
    .reveal-delay-3{transition-delay:.3s;}
    @media(max-width:992px){
      .hero-visual{margin-top:60px;padding:40px;}
      .hero-photo{width:200px;height:200px;}
      .photo-border-ring{width:228px;height:228px;}
      .orbit-dash{width:264px;height:264px;}
      .orbit-dash-2{width:296px;height:296px;}
      .pulse-ring:nth-child(1),.pulse-ring:nth-child(2),.pulse-ring:nth-child(3){width:228px;height:228px;}
      .photo-glow-pool{width:340px;height:340px;}
      .stat-1,.stat-2,.stat-3{display:none;}
      .process-steps::after{display:none;}
      .contact-card{padding:30px 20px;}
    }
    @media(max-width:576px){.hero-cta{flex-direction:column;}.btn-primary-jf,.btn-outline-jf{width:100%;justify-content:center;}}
  </style>
</head>
<body>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>
<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>

<!-- NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg">
  <div class="container">
    <a class="nav-brand" href="#hero">JF<span>Tech</span>Solutions</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon" style="filter:invert(1)"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav">
        <?php foreach(['About'=>'#about','Skills'=>'#skills','Services'=>'#services','Portfolio'=>'#portfolio','Process'=>'#process','Contact'=>'#contact'] as $label=>$href): ?>
        <li class="nav-item"><a class="nav-link" href="<?= $href ?>"><?= $label ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-badge"><i class="fa-solid fa-circle-dot me-2" style="color:var(--accent)"></i>Available for Projects</div>
        <h1 class="hero-name"><span class="first">JORIC</span><br><span class="last">FRANCISCO</span></h1>
        <div class="hero-role-wrap">
          <span class="hero-role-static"></span>
          <span class="hero-role-typed" id="typedRole"></span>
        </div>
        <p class="hero-desc">Crafting digital experiences that merge elegant design with powerful functionality. From pixel-perfect interfaces to robust full-stack systems — turning ideas into impactful digital products.</p>
        <div class="hero-cta">
          <a href="#portfolio" class="btn-primary-jf"><span><i class="fa-solid fa-layer-group me-2"></i>View My Work</span></a>
          <a href="#contact" class="btn-outline-jf"><i class="fa-solid fa-paper-plane me-2"></i>Hire Me</a>
        </div>
      </div>

      <!-- ══ HERO VISUAL — PHOTO + PULSE RINGS ══ -->
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="hero-visual">

          <!-- Ambient glow pool behind everything -->
          <div class="photo-glow-pool"></div>

          <!-- 3 expanding pulse rings (staggered delays) -->
          <div class="pulse-ring"></div>
          <div class="pulse-ring"></div>
          <div class="pulse-ring"></div>

          <!-- Slow-rotating dashed orbit rings -->
          <div class="orbit-dash"></div>
          <div class="orbit-dash orbit-dash-2"></div>

          <!-- Static decorative inner border ring -->
          <div class="photo-border-ring"></div>

          <!-- ★ YOUR PHOTO GOES HERE ★
               Replace the div.hero-photo-placeholder with:
               <img src="your-photo.jpg" alt="Joric Francisco"/>
               inside the .hero-photo div below.
          -->
          <div class="hero-photo">
            <div class="hero-photo-placeholder">
               <img src="formal_profile.png" alt="Joric Francisco"/>
            </div>
          </div>

          <!-- Floating stat chips -->
          <div class="stat-chip stat-1"><span class="num">5+</span><span class="lbl">Years Exp.</span></div>
          <div class="stat-chip stat-2"><span class="num">80+</span><span class="lbl">Projects</span></div>
          <div class="stat-chip stat-3"><span class="num">98%</span><span class="lbl">Satisfaction</span></div>

        </div>
      </div>
      <!-- ══ END HERO VISUAL ══ -->

    </div>
  </div>
  <div class="scroll-indicator"><span>Scroll</span><div class="scroll-mouse"></div></div>
</section>

<div class="divider"></div>

<!-- ABOUT -->
<section id="about" class="section-pad">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5 reveal">
        <div class="section-label"><i class="fa-solid fa-id-badge me-2"></i>About Me</div>
        <h2 class="section-title">Passionate <span>Creator</span> &amp; Problem Solver</h2>
        <p class="section-desc mb-4">Hi, I'm <strong style="color:var(--text-light)"><?= $name ?></strong>, the mind behind <strong style="color:var(--blue-bright)"><?= $brand ?></strong>. I specialize in creating seamless digital experiences — from intuitive UI/UX design to scalable web and mobile applications.</p>
        <p class="section-desc mb-4">With a deep passion for clean code and thoughtful design, I bridge the gap between aesthetics and functionality to deliver products that users love and businesses rely on.</p>
        <div class="social-links mb-4">
          <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
          <a href="#" class="social-link" title="Dribbble"><i class="fab fa-dribbble"></i></a>
          <a href="#" class="social-link" title="Behance"><i class="fab fa-behance"></i></a>
          <a href="#" class="social-link" title="Twitter/X"><i class="fab fa-x-twitter"></i></a>
        </div>
        <a href="#contact" class="btn-primary-jf"><span><i class="fa-solid fa-download me-2"></i>Download CV</span></a>
      </div>
      <div class="col-lg-7">
        <div class="row g-3">
          <?php foreach([['fa-palette','UI/UX Design','5+ Years','Crafting intuitive, beautiful interfaces'],['fa-code','Web Development','5+ Years','Full-stack web applications'],['fa-mobile-screen','Mobile Apps','4+ Years','iOS & Android development'],['fa-trophy','Projects Done','80+','Across diverse industries']] as $i=>$h): ?>
          <div class="col-sm-6 reveal reveal-delay-<?= ($i%3)+1 ?>">
            <div class="skill-category" style="padding:24px">
              <i class="fa-solid <?= $h[0] ?> mb-3" style="font-size:1.6rem;color:var(--blue-bright)"></i>
              <div style="font-family:'Orbitron',monospace;font-size:1.5rem;font-weight:900;color:var(--accent)"><?= $h[2] ?></div>
              <div style="font-family:'Orbitron',monospace;font-size:.8rem;letter-spacing:1px;margin:4px 0 8px"><?= $h[1] ?></div>
              <div style="font-size:.82rem;color:var(--text-muted)"><?= $h[3] ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- SKILLS -->
<section id="skills" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label" style="justify-content:center"><i class="fa-solid fa-chart-bar me-2"></i>Technical Skills</div>
      <h2 class="section-title">My <span>Expertise</span></h2>
      <p class="section-desc mx-auto">Tools and technologies I use to bring ideas to life.</p>
    </div>
    <?php
    $skillGroups=[
      ['fa-palette','UI/UX Design',[['Figma',95],['Adobe XD',88],['Prototyping',90],['Design Systems',85]]],
      ['fa-code','Frontend Dev',[['HTML/CSS',98],['JavaScript',92],['React / Vue',85],['Bootstrap',95]]],
      ['fa-server','Backend Dev',[['PHP / Laravel',90],['Node.js',80],['MySQL / DB',88],['REST APIs',92]]],
      ['fa-mobile-screen','Mobile Dev',[['Flutter',82],['React Native',80],['Android (Java)',75],['Firebase',88]]],
    ];
    ?>
    <div class="skills-grid">
      <?php foreach($skillGroups as $i=>$grp): ?>
      <div class="skill-category reveal reveal-delay-<?= ($i%3)+1 ?>">
        <i class="fa-solid <?= $grp[0] ?> skill-cat-icon"></i>
        <div class="skill-cat-title"><?= $grp[1] ?></div>
        <?php foreach($grp[2] as $s): ?>
        <div class="skill-bar-wrap">
          <div class="skill-bar-label"><span><?= $s[0] ?></span><span><?= $s[1] ?>%</span></div>
          <div class="skill-bar-track"><div class="skill-bar-fill" data-width="<?= $s[1] ?>"></div></div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- SERVICES -->
<section id="services" class="section-pad">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-6 reveal">
        <div class="section-label"><i class="fa-solid fa-briefcase me-2"></i>What I Offer</div>
        <h2 class="section-title">My <span>Services</span></h2>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="section-desc" style="max-width:none">End-to-end digital solutions tailored to your business needs.</p>
      </div>
    </div>
    <?php
    $services=[
      ['fa-pen-ruler','UI/UX Design','User-centered design with wireframes, prototypes, and pixel-perfect mockups that delight users and drive conversions.',['Figma','Adobe XD','Prototyping','Research']],
      ['fa-globe','Web Development','Scalable, performant web applications built with modern frameworks. From landing pages to complex enterprise systems.',['PHP/Laravel','React','Vue.js','MySQL']],
      ['fa-mobile-screen-button','Mobile Development','Cross-platform mobile apps for iOS and Android with native-like performance and seamless user experiences.',['Flutter','React Native','Firebase','APIs']],
      ['fa-layer-group','Full-Stack Solutions','Complete end-to-end development — architecting and building both frontend and backend for robust digital products.',['REST APIs','Node.js','DevOps','Cloud']],
      ['fa-magnifying-glass-chart','UX Audit & Consulting','In-depth analysis of your existing product with actionable recommendations to improve usability and conversion rates.',['Heuristics','A/B Testing','Analytics','Reports']],
      ['fa-headset','Maintenance & Support','Ongoing technical support, updates, and optimization to keep your digital product running at peak performance.',['24/7 Support','Updates','Monitoring','Optimization']],
    ];
    ?>
    <div class="services-grid">
      <?php foreach($services as $i=>$svc): ?>
      <div class="service-card reveal reveal-delay-<?= ($i%3)+1 ?>">
        <div class="service-icon-wrap"><i class="fa-solid <?= $svc[0] ?>"></i></div>
        <div class="service-title"><?= $svc[1] ?></div>
        <p class="service-desc"><?= $svc[2] ?></p>
        <div class="service-tags"><?php foreach($svc[3] as $t): ?><span class="service-tag"><?= $t ?></span><?php endforeach; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- PORTFOLIO -->
<section id="portfolio" class="section-pad">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-6 reveal">
        <div class="section-label"><i class="fa-solid fa-images me-2"></i>Portfolio</div>
        <h2 class="section-title">Featured <span>Works</span></h2>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="section-desc" style="max-width:none">A curated selection of projects showcasing the breadth of my capabilities.</p>
      </div>
    </div>
    <div class="filter-bar reveal">
      <button class="filter-btn active" data-filter="all">All Work</button>
      <button class="filter-btn" data-filter="uiux">UI/UX</button>
      <button class="filter-btn" data-filter="web">Web</button>
      <button class="filter-btn" data-filter="mobile">Mobile</button>
      <button class="filter-btn" data-filter="fullstack">Full-Stack</button>
    </div>
    <?php
    $projects=[
      ['uiux','fa-pen-ruler','port-bg-1','FinTech Dashboard','UI/UX Design','Complete redesign of a financial analytics platform with real-time data visualization for 50K+ users.','A comprehensive UI/UX redesign for a fintech platform handling real-time portfolio management. Conducted user research, created wireframes, built a full design system, and delivered high-fidelity prototypes that improved user engagement by 42%.','Figma,Design System,Prototyping,User Research'],
      ['web','fa-globe','port-bg-2','E-Commerce Platform','Web Development','Feature-rich online store with custom CMS, inventory management, and payment gateway integration built on Laravel.','Built a scalable e-commerce platform from the ground up. Features include a custom CMS, multi-vendor support, real-time inventory, and Stripe payment integration. Handles 10,000+ daily transactions with 99.9% uptime.','PHP/Laravel,MySQL,Stripe,Vue.js'],
      ['mobile','fa-mobile-screen','port-bg-3','Health & Fitness App','Mobile Development','Cross-platform fitness tracker with workout planning, nutrition logging, and social challenges using Flutter.','A cross-platform fitness app for iOS and Android. Features workout tracking, AI-powered exercise recommendations, nutrition logging, social challenges, and Apple HealthKit/Google Fit integration. 4.8 stars with 50K+ downloads.','Flutter,Firebase,HealthKit,REST API'],
      ['fullstack','fa-server','port-bg-4','SaaS Project Manager','Full-Stack','Team collaboration platform with real-time updates, Kanban boards, and automated reporting for remote teams.','A full-stack project management SaaS used by 200+ remote teams. Features Kanban/Gantt views, real-time collaboration via WebSockets, automated weekly reports, Slack integration, and a comprehensive analytics dashboard.','React,Node.js,PostgreSQL,WebSocket'],
      ['uiux','fa-palette','port-bg-5','Brand Design System','UI/UX Design','Comprehensive design system with 200+ components, typography, tokens, and documentation for a global brand.','Developed a full design system for a global retail brand. Includes 200+ reusable components, color tokens, typography scale, motion guidelines, and full Figma documentation. Reduced design-to-dev handoff time by 60%.','Figma,Storybook,Design Tokens,Accessibility'],
      ['web','fa-chart-line','port-bg-6','Analytics Dashboard','Web Development','Real-time business intelligence dashboard with dynamic charts, custom report builder, and role-based access control.','A real-time analytics dashboard for a retail chain. Features 15+ chart types, custom report builder with drag-and-drop, CSV export, email scheduling, and granular role-based access. Reduced reporting time by 70% for management.','PHP,Chart.js,MySQL,Bootstrap'],
    ];
    ?>
    <div class="portfolio-grid" id="portfolioGrid">
      <?php foreach($projects as $i=>$p): ?>
      <div class="portfolio-item reveal reveal-delay-<?= ($i%3)+1 ?>"
           data-cat="<?= $p[0] ?>" data-icon="<?= $p[1] ?>"
           data-title="<?= htmlspecialchars($p[3]) ?>"
           data-cat-label="<?= $p[4] ?>"
           data-desc="<?= htmlspecialchars($p[6]) ?>"
           data-tech="<?= htmlspecialchars($p[7]) ?>"
           onclick="openLightbox(this)">
        <div class="portfolio-item-inner <?= $p[2] ?>">
          <div class="portfolio-mockup"><i class="fa-solid <?= $p[1] ?>"></i></div>
          <div class="portfolio-overlay">
            <div class="portfolio-category"><?= $p[4] ?></div>
            <div class="portfolio-title"><?= $p[3] ?></div>
            <div class="portfolio-desc"><?= $p[5] ?></div>
            <div class="portfolio-actions">
              <span class="portfolio-btn"><i class="fa-solid fa-expand"></i></span>
              <span class="portfolio-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightboxOutside(event)">
  <div class="lightbox-inner">
    <div class="lightbox-close" onclick="closeLightbox()"><i class="fa-solid fa-xmark"></i></div>
    <div class="lightbox-icon" id="lbIcon"></div>
    <div class="lightbox-cat" id="lbCat"></div>
    <div class="lightbox-title" id="lbTitle"></div>
    <div class="lightbox-desc" id="lbDesc"></div>
    <div class="lightbox-tech" id="lbTech"></div>
    <a href="#" class="btn-primary-jf" style="display:inline-flex"><span><i class="fa-solid fa-arrow-up-right-from-square me-2"></i>View Live Demo</span></a>
  </div>
</div>

<div class="divider"></div>

<!-- PROCESS -->
<section id="process" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label" style="justify-content:center"><i class="fa-solid fa-diagram-project me-2"></i>How I Work</div>
      <h2 class="section-title">My <span>Process</span></h2>
      <p class="section-desc mx-auto">A streamlined, transparent workflow designed to deliver exceptional results on time.</p>
    </div>
    <?php
    $steps=[
      ['01','Discovery','Understanding your goals, audience, and requirements through deep-dive consultations.'],
      ['02','Strategy','Crafting a clear roadmap with milestones, tech stack, and design direction.'],
      ['03','Design','Creating wireframes, prototypes, and high-fidelity designs for your approval.'],
      ['04','Development','Building with clean, scalable code — keeping you updated at every sprint.'],
      ['05','Testing','Rigorous QA across devices and browsers to ensure a flawless experience.'],
      ['06','Launch','Smooth deployment with monitoring, handover documentation, and ongoing support.'],
    ];
    ?>
    <div class="process-steps">
      <?php foreach($steps as $i=>$step): ?>
      <div class="process-step reveal reveal-delay-<?= ($i%3)+1 ?>">
        <div class="process-num"><?= $step[0] ?></div>
        <div class="process-step-title"><?= $step[1] ?></div>
        <p class="process-step-desc"><?= $step[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- CONTACT -->
<section id="contact" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label" style="justify-content:center"><i class="fa-solid fa-envelope me-2"></i>Get In Touch</div>
      <h2 class="section-title">Let's <span>Work Together</span></h2>
      <p class="section-desc mx-auto">Have a project in mind? Let's discuss how I can help bring your vision to life.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 reveal">
        <div class="contact-card h-100">
          <h5 style="font-family:'Orbitron',monospace;font-size:.9rem;letter-spacing:2px;margin-bottom:28px">CONTACT INFO</h5>
          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-envelope"></i></div>
            <div><div class="contact-info-label">Email</div><div class="contact-info-value"><?= $email ?></div></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
            <div><div class="contact-info-label">Phone</div><div class="contact-info-value"><?= $phone ?></div></div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div><div class="contact-info-label">Location</div><div class="contact-info-value">Philippines 🇵🇭 <span style="color:var(--text-muted);font-size:.8rem">(Remote Worldwide)</span></div></div>
          </div>
          <div class="contact-info-item" style="border:none;padding-bottom:0">
            <div class="contact-info-icon"><i class="fa-solid fa-clock"></i></div>
            <div><div class="contact-info-label">Availability</div><div class="contact-info-value"><span style="color:#4CAF50">●</span> Open to new projects</div></div>
          </div>
          <div class="mt-4 pt-4" style="border-top:1px solid var(--glass-border)">
            <div class="contact-info-label mb-3">Find me on</div>
            <div class="social-links flex-wrap">
              <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-link"><i class="fab fa-github"></i></a>
              <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
              <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
              <a href="#" class="social-link"><i class="fab fa-upwork"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 reveal reveal-delay-1">
        <div class="contact-card">
          <h5 style="font-family:'Orbitron',monospace;font-size:.9rem;letter-spacing:2px;margin-bottom:28px">SEND A MESSAGE</h5>
          <div class="contact-form">
            <div class="row g-3">
              <div class="col-sm-6"><div class="form-group"><label>Your Name</label><input type="text" class="form-control" id="fName" placeholder="Juan dela Cruz"></div></div>
              <div class="col-sm-6"><div class="form-group"><label>Email Address</label><input type="email" class="form-control" id="fEmail" placeholder="juan@company.com"></div></div>
              <div class="col-sm-6"><div class="form-group"><label>Subject</label><input type="text" class="form-control" id="fSubject" placeholder="Project Inquiry"></div></div>
              <div class="col-sm-6"><div class="form-group"><label>Service Needed</label>
                <select class="form-control" id="fService" style="background:var(--navy-deeper);color:var(--text-light)">
                  <option value="">Select a service...</option>
                  <option>UI/UX Design</option><option>Web Development</option>
                  <option>Mobile Development</option><option>Full-Stack Solution</option><option>Consulting</option>
                </select>
              </div></div>
              <div class="col-12"><div class="form-group"><label>Message</label><textarea class="form-control" id="fMessage" placeholder="Tell me about your project, goals, and timeline..."></textarea></div></div>
              <div class="col-12">
                <button class="btn-primary-jf w-100" onclick="handleSubmit()" style="justify-content:center;padding:16px;border:none">
                  <span id="submitTxt"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-brand">JF Tech Solutions</div>
    <p class="footer-copy">Designed &amp; Built with <span>♥</span> by <?= $name ?> &mdash; <?= $brand ?><br>
    <span style="color:rgba(139,175,200,.5);font-size:.75rem">&copy; <?= date('Y') ?> All rights reserved.</span></p>
  </div>
</footer>

<div class="toast-custom" id="toast">
  <span class="toast-icon"><i class="fa-solid fa-circle-check"></i></span>
  <span>Message sent! I'll get back to you soon.</span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
const cursor=document.getElementById('cursor'),ring=document.getElementById('cursorRing');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cursor.style.left=mx+'px';cursor.style.top=my+'px';});
(function animRing(){rx+=(mx-rx)*.12;ry+=(my-ry)*.12;ring.style.left=rx+'px';ring.style.top=ry+'px';requestAnimationFrame(animRing);})();
window.addEventListener('scroll',()=>{document.getElementById('navbar').classList.toggle('scrolled',window.scrollY>40);});
const roles=<?= json_encode($roles) ?>;
let ri=0,ci=0,del=false;
const el=document.getElementById('typedRole');
function typeLoop(){const word=roles[ri];el.textContent=del?word.slice(0,ci--):word.slice(0,ci++);let delay=del?60:90;if(!del&&ci>word.length){delay=2000;del=true;}else if(del&&ci<0){ci=0;del=false;ri=(ri+1)%roles.length;delay=400;}setTimeout(typeLoop,delay);}
typeLoop();
const revealEls=document.querySelectorAll('.reveal');
const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}});},{threshold:.12});
revealEls.forEach(e=>obs.observe(e));
const barObs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.querySelectorAll('.skill-bar-fill').forEach(b=>{b.style.width=b.dataset.width+'%';});}});},{threshold:.3});
document.querySelectorAll('.skill-category').forEach(c=>barObs.observe(c));
document.querySelectorAll('.filter-btn').forEach(btn=>{btn.addEventListener('click',function(){document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));this.classList.add('active');const filter=this.dataset.filter;document.querySelectorAll('.portfolio-item').forEach(item=>{const show=filter==='all'||item.dataset.cat===filter;item.style.display=show?'block':'none';if(show)item.style.animation='fadeUp .5s ease both';});});});
function openLightbox(el){const lb=document.getElementById('lightbox');document.getElementById('lbIcon').innerHTML='<i class="fa-solid '+el.dataset.icon+'"></i>';document.getElementById('lbCat').textContent=el.dataset.catLabel;document.getElementById('lbTitle').textContent=el.dataset.title;document.getElementById('lbDesc').textContent=el.dataset.desc;const tech=el.dataset.tech.split(',');document.getElementById('lbTech').innerHTML=tech.map(t=>'<span class="tech-tag">'+t.trim()+'</span>').join('');lb.classList.add('open');document.body.style.overflow='hidden';}
function closeLightbox(){document.getElementById('lightbox').classList.remove('open');document.body.style.overflow='';}
function closeLightboxOutside(e){if(e.target===document.getElementById('lightbox'))closeLightbox();}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeLightbox();});
function handleSubmit(){const name=document.getElementById('fName').value.trim(),email=document.getElementById('fEmail').value.trim(),msg=document.getElementById('fMessage').value.trim();if(!name||!email||!msg){alert('Please fill in at least your name, email, and message.');return;}const btn=document.getElementById('submitTxt');btn.innerHTML='<i class="fa-solid fa-spinner fa-spin me-2"></i>Sending...';setTimeout(()=>{btn.innerHTML='<i class="fa-solid fa-paper-plane me-2"></i>Send Message';['fName','fEmail','fSubject','fService','fMessage'].forEach(id=>{const e=document.getElementById(id);if(e)e.value='';});const toast=document.getElementById('toast');toast.classList.add('show');setTimeout(()=>toast.classList.remove('show'),4000);},1800);}
document.querySelectorAll('a[href^="#"]').forEach(a=>{a.addEventListener('click',e=>{const target=document.querySelector(a.getAttribute('href'));if(target){e.preventDefault();target.scrollIntoView({behavior:'smooth',block:'start'});}});});
const sections=document.querySelectorAll('section[id]');
const navLinks=document.querySelectorAll('.nav-link');
window.addEventListener('scroll',()=>{let cur='';sections.forEach(s=>{if(window.scrollY>=s.offsetTop-100)cur=s.id;});navLinks.forEach(l=>{l.style.color=l.getAttribute('href')==='#'+cur?'var(--accent)':'';});});
</script>
</body>

</html>

