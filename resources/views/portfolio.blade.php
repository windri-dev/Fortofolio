@extends('layouts.app')

@section('title', '~/portfolio — dev@yourname')

@push('styles')

@endpush

@section('content')
<!-- NAV -->
<nav>
  <a href="#hero" class="nav-logo">dev@portfolio:~$</a>
  <ul class="nav-links">
    <li><a href="#skills">skills</a></li>
    <li><a href="#projects">projects</a></li>
    <li><a href="#timeline">log</a></li>
    <li><a href="#contact">contact</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-terminal">
    <div class="terminal-window">
      <div class="terminal-bar">
        <span class="dot dot-r"></span>
        <span class="dot dot-y"></span>
        <span class="dot dot-g"></span>
        <span class="terminal-title">bash — 80×24</span>
      </div>
      <div class="terminal-body" id="terminal-output">
        <!-- Lines injected by JS -->
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="sec-prompt fade-in">$ cat skills.json</div>
  <div class="sec-title fade-in">Keahlian & Stack</div>

  <div class="skills-grid">
    <div class="fade-in">
      <div class="skill-cat-label">frontend</div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">HTML / CSS</span><span class="skill-pct">80%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="80"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">JavaScript</span><span class="skill-pct">65%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="65"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">React / Next.js</span><span class="skill-pct">55%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="55"></div></div>
      </div>
      <div class="skill-tags">
        <span class="tag">React</span><span class="tag">Next.js</span><span class="tag">Tailwind</span><span class="tag">TypeScript</span>
      </div>
    </div>

    <div class="fade-in">
      <div class="skill-cat-label">backend</div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">Node.js / Express</span><span class="skill-pct">60%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="60"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">REST API Design</span><span class="skill-pct">65%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="65"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">Python / Django</span><span class="skill-pct">45%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="45"></div></div>
      </div>
      <div class="skill-tags">
        <span class="tag">Node.js</span><span class="tag">Express</span><span class="tag">Python</span><span class="tag">JWT</span>
      </div>
    </div>

    <div class="fade-in">
      <div class="skill-cat-label">database</div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">MySQL / PostgreSQL</span><span class="skill-pct">60%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="60"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">MongoDB</span><span class="skill-pct">50%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="50"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">Firebase</span><span class="skill-pct">55%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="55"></div></div>
      </div>
      <div class="skill-tags">
        <span class="tag">MySQL</span><span class="tag">MongoDB</span><span class="tag">Prisma</span><span class="tag">Firebase</span>
      </div>
    </div>

    <div class="fade-in">
      <div class="skill-cat-label">tools & devops</div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">Git / GitHub</span><span class="skill-pct">70%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="70"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">Docker (basic)</span><span class="skill-pct">35%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="35"></div></div>
      </div>
      <div class="skill-item">
        <div class="skill-header"><span class="skill-name">Linux / CLI</span><span class="skill-pct">55%</span></div>
        <div class="skill-bar"><div class="skill-fill" data-width="55"></div></div>
      </div>
      <div class="skill-tags">
        <span class="tag">Git</span><span class="tag">Docker</span><span class="tag">Vercel</span><span class="tag">Linux</span>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="sec-prompt fade-in">$ ls -la ./projects/</div>
  <div class="sec-title fade-in">Project & Karya</div>

  <div class="projects-list">
    <div class="project-entry">
      <div class="proj-header">
        <span class="proj-idx">[001]</span>
        <span class="proj-name">nama-project-pertama/</span>
        <span class="proj-status status-wip">● WIP</span>
      </div>
      <p class="proj-desc">
        // Deskripsi singkat project ini: apa masalahnya, solusinya, dan siapa penggunanya.<br>
        // Tulis 2–3 kalimat yang menjelaskan value dari project ini.
      </p>
      <div class="proj-stack">
        <span class="stack-item">React</span>
        <span class="stack-item">Node.js</span>
        <span class="stack-item">MongoDB</span>
        <span class="stack-item">JWT</span>
      </div>
    </div>

    <div class="project-entry">
      <div class="proj-header">
        <span class="proj-idx">[002]</span>
        <span class="proj-name">nama-project-kedua/</span>
        <span class="proj-status status-done">✓ DONE</span>
      </div>
      <p class="proj-desc">
        // Deskripsi singkat project ini: apa masalahnya, solusinya, dan siapa penggunanya.<br>
        // Tulis 2–3 kalimat yang menjelaskan value dari project ini.
      </p>
      <div class="proj-stack">
        <span class="stack-item">Next.js</span>
        <span class="stack-item">PostgreSQL</span>
        <span class="stack-item">Tailwind</span>
        <span class="stack-item">Prisma</span>
      </div>
    </div>

    <div class="project-entry">
      <div class="proj-header">
        <span class="proj-idx">[003]</span>
        <span class="proj-name">nama-project-ketiga/</span>
        <span class="proj-status status-done">✓ DONE</span>
      </div>
      <p class="proj-desc">
        // Deskripsi singkat project ini: apa masalahnya, solusinya, dan siapa penggunanya.<br>
        // Tulis 2–3 kalimat yang menjelaskan value dari project ini.
      </p>
      <div class="proj-stack">
        <span class="stack-item">Python</span>
        <span class="stack-item">Django</span>
        <span class="stack-item">MySQL</span>
        <span class="stack-item">REST API</span>
      </div>
    </div>
  </div>
</section>

<!-- TIMELINE -->
<section id="timeline">
  <div class="sec-prompt fade-in">$ git log --oneline --author="me"</div>
  <div class="sec-title fade-in">Perjalanan Belajar</div>

  <div class="tl-item">
    <div class="tl-left">
      <span class="tl-date">2025 — now</span>
      <span class="tl-type">active</span>
    </div>
    <div class="tl-right">
      <div class="tl-role">Fullstack Developer</div>
      <div class="tl-place">// Self-Taught · Project Building</div>
      <ul class="tl-points">
        <li>Membangun project fullstack dari nol dengan React, Node.js, PostgreSQL</li>
        <li>Mempelajari arsitektur REST API dan backend best practice</li>
        <li>Aktif berkontribusi di komunitas developer</li>
      </ul>
    </div>
  </div>

  <div class="tl-item">
    <div class="tl-left">
      <span class="tl-date">2024</span>
      <span class="tl-type">learning</span>
    </div>
    <div class="tl-right">
      <div class="tl-role">Backend Development</div>
      <div class="tl-place">// Online Courses · Docs</div>
      <ul class="tl-points">
        <li>Mulai mempelajari Node.js dan Express framework</li>
        <li>Memahami konsep database relational dan non-relational</li>
        <li>Membuat REST API pertama yang terhubung ke database</li>
      </ul>
    </div>
  </div>

  <div class="tl-item">
    <div class="tl-left">
      <span class="tl-date">2023</span>
      <span class="tl-type">learning</span>
    </div>
    <div class="tl-right">
      <div class="tl-role">Frontend Basics</div>
      <div class="tl-place">// YouTube · Dokumentasi</div>
      <ul class="tl-points">
        <li>Menguasai HTML, CSS, dan JavaScript vanilla</li>
        <li>Membangun halaman web statis pertama</li>
        <li>Mulai belajar React.js</li>
      </ul>
    </div>
  </div>

  <div class="tl-item">
    <div class="tl-left">
      <span class="tl-date">2022</span>
      <span class="tl-type">init</span>
    </div>
    <div class="tl-right">
      <div class="tl-role">init: hello_world.html</div>
      <div class="tl-place">// Awal mula kenal coding</div>
      <ul class="tl-points">
        <li>Menulis baris kode pertama dalam hidup</li>
        <li>Menemukan passion di dunia software development</li>
        <li>Mulai memahami logika pemrograman dasar</li>
      </ul>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="sec-prompt fade-in">$ ./connect --open</div>
  <div class="sec-title fade-in">Hubungi Saya</div>

  <div class="contact-wrap fade-in">
    <div>
      <div class="contact-block">
        <div class="contact-cmd">$ cat <span>./links.json</span></div>
        <a href="https://github.com/username" class="social-item" target="_blank">
          <span class="s-key">"github"</span>
          <span class="s-sep">:</span>
          <span class="s-val">"github.com/username"</span>
        </a>
        <a href="https://linkedin.com/in/username" class="social-item" target="_blank">
          <span class="s-key">"linkedin"</span>
          <span class="s-sep">:</span>
          <span class="s-val">"linkedin.com/in/username"</span>
        </a>
        <a href="mailto:email@example.com" class="social-item">
          <span class="s-key">"email"</span>
          <span class="s-sep">:</span>
          <span class="s-val">"email@example.com"</span>
        </a>
        <a href="https://instagram.com/username" class="social-item" target="_blank">
          <span class="s-key">"instagram"</span>
          <span class="s-sep">:</span>
          <span class="s-val">"@username"</span>
        </a>
      </div>
    </div>

    <div class="contact-form">
      <div class="f-group">
        <label class="f-label">input --name</label>
        <input type="text" class="f-input" placeholder="nama_kamu">
      </div>
      <div class="f-group">
        <label class="f-label">input --email</label>
        <input type="email" class="f-input" placeholder="email@domain.com">
      </div>
      <div class="f-group">
        <label class="f-label">input --message</label>
        <textarea class="f-input" placeholder="// tulis pesanmu di sini..."></textarea>
      </div>
      <button class="btn-send">send_message()</button>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <span>© 2026 WINDRI N</span>
  <div class="uptime">
    <div class="uptime-dot"></div>
    <span>system online · port 3000 ready</span>
  </div>
</footer>
@endsection

@push('scripts')
<script>
  const lines = [
    { delay: 0,    html: `<div class="t-line"><span class="t-prompt">dev@portfolio:~$</span> <span class="t-cmd">whoami</span></div>` },
    { delay: 500,  html: `<div class="t-line t-out"><span class="t-val">Nama Kamu</span> <span class="t-comment">// ganti dengan namamu</span></div>` },
    { delay: 900,  html: `<div class="t-line" style="margin-top:0.6rem"><span class="t-prompt">dev@portfolio:~$</span> <span class="t-cmd">cat profile.json</span></div>` },
    { delay: 1300, html: `<div class="t-line t-out">{</div>` },
    { delay: 1450, html: `<div class="t-line t-out">&nbsp;&nbsp;<span class="t-key">"name"</span>: <span class="t-val">"Nama Kamu"</span>,</div>` },
    { delay: 1600, html: `<div class="t-line t-out">&nbsp;&nbsp;<span class="t-key">"role"</span>: <span class="t-val">"Fullstack Developer"</span>,</div>` },
    { delay: 1750, html: `<div class="t-line t-out">&nbsp;&nbsp;<span class="t-key">"status"</span>: <span class="t-cyan">"learning &amp; building"</span>,</div>` },
    { delay: 1900, html: `<div class="t-line t-out">&nbsp;&nbsp;<span class="t-key">"experience"</span>: <span class="t-val">"1+ year"</span>,</div>` },
    { delay: 2050, html: `<div class="t-line t-out">&nbsp;&nbsp;<span class="t-key">"stack"</span>: [<span class="t-cyan">"React"</span>, <span class="t-cyan">"Node.js"</span>, <span class="t-cyan">"PostgreSQL"</span>],</div>` },
    { delay: 2200, html: `<div class="t-line t-out">&nbsp;&nbsp;<span class="t-key">"open_to"</span>: <span class="t-val">"collaboration &amp; freelance"</span></div>` },
    { delay: 2350, html: `<div class="t-line t-out">}</div>` },
    { delay: 2700, html: `<div class="t-line" style="margin-top:0.6rem"><span class="t-prompt">dev@portfolio:~$</span> <span class="t-cmd">./start_portfolio.sh</span></div>` },
    { delay: 3000, html: `<div class="t-line t-out"><span class="t-cyan">✓</span> Portfolio loaded successfully.</div>` },
    { delay: 3200, html: `<div class="t-line t-out"><span class="t-comment">// Scroll down to explore ↓</span></div>` },
    { delay: 3400, html: `<div class="t-line" style="margin-top:0.6rem"><span class="t-prompt">dev@portfolio:~$</span> <span class="cursor"></span></div>` },
  ];

  const output = document.getElementById('terminal-output');
  lines.forEach(({ delay, html }) => {
    setTimeout(() => {
      output.insertAdjacentHTML('beforeend', html);
    }, delay);
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        entry.target.querySelectorAll('.skill-fill').forEach(f => {
          f.style.width = f.dataset.width + '%';
        });
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.fade-in, .project-entry, .tl-item').forEach(el => observer.observe(el));

  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      e.preventDefault();
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
</script>
@endpush
