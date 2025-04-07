<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BIN | Developer Portfolio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #000;
      color: #fff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      scroll-behavior: smooth;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
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
      gap: 20px;
      padding: 0;
      margin: 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-size: 1.1em;
    }

    main {
      flex: 1;
      padding: 40px;
      background-color: #1c1c1c;
    }

    section {
      max-width: 900px;
      margin: 0 auto 60px auto;
      padding: 20px;
      background: #333;
      border-radius: 8px;
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

    .project-category h3 {
      margin-top: 0;
    }

    .project-category ul {
      padding-left: 20px;
    }

    .project-category li {
      margin-bottom: 10px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #333;
    }

    a {
      color: #FF7043;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const sections = document.querySelectorAll("section");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = "translateY(0)";
          }
        });
      }, { threshold: 0.5 });

      sections.forEach((section) => observer.observe(section));

      document.querySelectorAll("nav a").forEach((anchor) => {
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
      <img src="profile.jpg" alt="Profile Picture" />
      <div class="about-text">
        <h2>Who Am I</h2>
        <p>안녕하세요, 저는 AI 개발자 LEEHYUNBIN 입니다. 다양한 프로젝트와 연구를 통해 발전하고 있습니다.</p>
      </div>
    </section>

    <section id="projects">
      <h2>Projects</h2>

      <div class="project-category">
        <h3>In College</h3>
        <ul>
          <li>
            충북 SK하이닉스 대학생 창업 챌린지 최우수  
            <a href="https://www.veritas-a.com/news/articleView.html?idxno=506513" target="_blank">[기사 보기]</a>
          </li>
        </ul>
      </div>

      <div class="project-category">
        <h3>In Outside</h3>
        <ul>
          <li>
            아이디어 공모전 - 익수자를 판별하는 AI  
            <a href="https://velog.io/@samsam3554/익수자를-판별하는-AI-1" target="_blank">[Velog 글 보기]</a>
          </li>
        </ul>
      </div>

      <div class="project-category">
        <h3>Personal Project</h3>
        <ul>
          <li>
            YOLO를 활용한 익수자 판별 시스템 구축  
            <a href="https://velog.io/@samsam3554/익수자를-판별하는-AI-1" target="_blank">[Velog 글 보기]</a>
          </li>
          <li>
            Python 학습 블로그 운영  
            <a href="https://velog.io/@samsam3554/자료형이-뭐야..1" target="_blank">[블로그 보기]</a>
          </li>
          <li>
            DB 학습 블로그 운영  
            <a href="https://velog.io/@samsam3554/데이터베이스-기초-초보자를-위한-쉽게-풀어-쓴-이야기1" target="_blank">[블로그 보기]</a>
          </li>
          <li>
            Programmers 문제 풀이 블로그 운영  
            <a href="#" target="_blank">[블로그 보기]</a>
          </li>
        </ul>
      </div>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <p>Email: samsam3554@naver.com</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 BIN. All Rights Reserved.</p>
  </footer>
</body>
</html>
