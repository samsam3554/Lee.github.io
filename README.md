<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BIN | Developer Portfolio</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #000;
      color: #FFF;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      scroll-behavior: smooth;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      background-color: #FF5733;
    }

    .logo {
      font-size: 1.8em;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      display: flex;
      padding: 0;
    }

    nav li {
      margin-left: 20px;
      position: relative;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-size: 1.1em;
    }

    main {
      flex: 1;
      padding: 40px;
      background-color: #1C1C1C;
    }

    section {
      width: 80%;
      margin: auto;
      padding: 20px;
      background: #333;
      border-radius: 8px;
      margin-bottom: 40px;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.5s ease-in-out;
    }

    #about {
      display: flex;
      align-items: center;
      background: none;
    }

    #about img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin-right: 20px;
    }

    .about-text {
      flex: 1;
    }

    #projects {
      min-height: 600px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .project-category {
      width: 90%;
      background: #444;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #333;
      color: white;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const sections = document.querySelectorAll("section");
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = "translateY(0)";
          }
        });
      }, { threshold: 0.5 });
      sections.forEach(section => observer.observe(section));

      document.querySelectorAll("nav a").forEach(anchor => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const targetId = this.getAttribute("href").substring(1);
          const targetSection = document.getElementById(targetId);
          targetSection.scrollIntoView({ behavior: "smooth", block: "center" });
        });
      });
    });
  </script>
</head>
<body>
  <header>
    <div class="logo">BIN</div>
    <nav>
      <ul>
        <li><a href="#about">Who Am I</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="about">
      <img src="profile.jpg" alt="Profile Picture">
      <div class="about-text">
        <h2>Who Am I</h2>
        <p>안녕하세요, 저는 AI 개발자 BIN입니다. 다양한 프로젝트와 연구를 통해 발전하고 있습니다.</p>
      </div>
    </section>

    <section id="projects">
      <h2>Projects</h2>
      <div class="project-category">
        <h3>In College</h3>
        <p>대학에서 수행한 프로젝트들.</p>
      </div>
      <div class="project-category">
        <h3>In Outside</h3>
        <p>대학 외부에서 진행한 프로젝트들.</p>
      </div>
      <div class="project-category">
        <h3>Personal Project</h3>
        <p>개인적으로 진행한 프로젝트들.</p>
      </div>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <p>Email: bin@example.com</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 BIN. All Rights Reserved.</p>
  </footer>
</body>
</html>
